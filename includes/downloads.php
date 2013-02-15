<?php
$query_downloads = "SELECT dwn_title, dwn_date_uploaded, dwn_file_name
                      FROM downloads
                  ORDER BY dwn_date_uploaded DESC
                     LIMIT 0, 10";

$result_donwloads = mysql_query($query_downloads) or die(mysql_error());
?>
<div class="course_right">
    <div class="crheading">
        <h5 class="download" >Downloads</h5>
        <a href="contact.html#">View More</a>
    </div>
    <ul>
        <?php
        while ($row_download = mysql_fetch_array($result_donwloads)) {
            $posted = date_create($row_download['dwn_date_uploaded']);
            ?>
            <li>
                <div class="thumb"><a href="root/uploads/downloads/<?php echo $row_download['dwn_file_name'] ?>"><img src="images/pdf_icon.png"  alt="" /></a></div>
                <div class="description">
                    <h6><a href="root/uploads/downloads/<?php echo $row_download['dwn_file_name'] ?>"><?php echo $row_download['dwn_title'] ?></a></h6>
                    <a class="gray1" href="root/uploads/downloads/<?php echo $row_download['dwn_file_name'] ?>"><?php echo date_format($posted, 'd M, Y') ?></a>
                </div>
            </li>
            <?php
        }
        ?>

    </ul>
</div>
