<?php

// Clean user input data
function clean($string) {
    $cleaned_string = mysql_real_escape_string($string);
    return trim($cleaned_string);
}

function clean_arr($string = array()) {
    $elements = count($string);
    for ($i = 0; $i < $elements; $i++) {
        $string[$i] = clean($string[$i]);
    }
    return $string;
}

// Sets messages and errors to session
function info($type, $content) {

    session_start();
    $_SESSION[$type] = $content;
    session_commit();
}

function pagination($query, $per_page = 10, $pages = 1, $url = '?') {
    $query = "SELECT COUNT(*) as `num` FROM {$query}";
    $row = mysql_fetch_array(mysql_query($query));
    $total = $row['num'];
    $adjacents = "2";

    $pages = ($pages == 0 ? 1 : $pages);
    $start = ($pages - 1) * $per_page;

    $prev = $pages - 1;
    $next = $pages + 1;
    $lastpage = ceil($total / $per_page);
    $lpm1 = $lastpage - 1;

    $pagination = "";
    if ($lastpage > 1) {
        $pagination .= "<ul class='pagination'>";
        $pagination .= "<li class='details'>Page $pages of $lastpage</li>";
        if ($lastpage < 7 + ($adjacents * 2)) {
            for ($counter = 1; $counter <= $lastpage; $counter++) {
                if ($counter == $pages)
                    $pagination.= "<li><a class='current'>$counter</a></li>";
                else
                    $pagination.= "<li><a href='{$url}pages=$counter'>$counter</a></li>";
            }
        }
        elseif ($lastpage > 5 + ($adjacents * 2)) {
            if ($pages < 1 + ($adjacents * 2)) {
                for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++) {
                    if ($counter == $pages)
                        $pagination.= "<li><a class='current'>$counter</a></li>";
                    else
                        $pagination.= "<li><a href='{$url}pages=$counter'>$counter</a></li>";
                }
                $pagination.= "<li class='dot'>...</li>";
                $pagination.= "<li><a href='{$url}pages=$lpm1'>$lpm1</a></li>";
                $pagination.= "<li><a href='{$url}pages=$lastpage'>$lastpage</a></li>";
            }
            elseif ($lastpage - ($adjacents * 2) > $pages && $pages > ($adjacents * 2)) {
                $pagination.= "<li><a href='{$url}pages=1'>1</a></li>";
                $pagination.= "<li><a href='{$url}pages=2'>2</a></li>";
                $pagination.= "<li class='dot'>...</li>";
                for ($counter = $pages - $adjacents; $counter <= $pages + $adjacents; $counter++) {
                    if ($counter == $pages)
                        $pagination.= "<li><a class='current'>$counter</a></li>";
                    else
                        $pagination.= "<li><a href='{$url}pages=$counter'>$counter</a></li>";
                }
                $pagination.= "<li class='dot'>..</li>";
                $pagination.= "<li><a href='{$url}pages=$lpm1'>$lpm1</a></li>";
                $pagination.= "<li><a href='{$url}pages=$lastpage'>$lastpage</a></li>";
            }
            else {
                $pagination.= "<li><a href='{$url}pages=1'>1</a></li>";
                $pagination.= "<li><a href='{$url}pages=2'>2</a></li>";
                $pagination.= "<li class='dot'>..</li>";
                for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++) {
                    if ($counter == $pages)
                        $pagination.= "<li><a class='current'>$counter</a></li>";
                    else
                        $pagination.= "<li><a href='{$url}pages=$counter'>$counter</a></li>";
                }
            }
        }

        if ($pages < $counter - 1) {
            $pagination.= "<li><a href='{$url}pages=$next'>Next</a></li>";
            $pagination.= "<li><a href='{$url}pages=$lastpage'>Last</a></li>";
        } else {
            $pagination.= "<li><a class='current'>Next</a></li>";
            $pagination.= "<li><a class='current'>Last</a></li>";
        }
        $pagination.= "</ul>\n";
    }


    return $pagination;
}

?>