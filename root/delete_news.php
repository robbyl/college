<?php

require '../functions/general_functions.php';
require '../config/config.php';

if (isset($_GET['id']) && !empty($_GET['id'])) {

    $id = clean($_GET['id']);

    $query_news = "DELETE FROM news
                         WHERE nws_id = '$id'";

    $result_news = mysql_query($query_news) or die(mysql_error());

    if ($result_news) {
        info('message', 'News deleted successfully!');
        header('Location: home.php');
    } else {
        info('error', 'Cannot delete news');
        header('Location: home.php');
    }
} else {
    info('error', 'Invalid news id');
    header('Location: home.php');
}
?>
