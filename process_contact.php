<?php

require './functions/general_functions.php';

if (isset($_POST['txtEmail'])) {

    $email_to = "robbyl@ovi.com";
    $email_subject = "Royal message";

    function died($error) {
        // Error code
        $other = "We are very sorry, but there were error(s) found with the form you submitted. ";
        $other .= "These errors appear below.<br /><br />";
        $other = $other . $error . "<br />";
        $other .= "Please go back and fix these errors.<br />";

        return $other;
    }

    // validation expected data exists
    if (!isset($_POST['txtName']) ||
            !isset($_POST['txtEmail']) ||
            !isset($_POST['txtPhoneno']) ||
            !isset($_POST['txtMessage'])) {
        info('note2', died('We are sorry, but there appears to be a problem with the form you submitted.'));
        header('Location: contact.php');
        die();
    }

    $txtName = clean($_POST['txtName']); // required
    $email_from = clean($_POST['txtEmail']); // required
    $telephone = clean($_POST['txtPhoneno']); // not required
    $comments = clean($_POST['txtMessage']); // required

    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
    if (!preg_match($email_exp, $email_from)) {
        $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
    }
    $string_exp = "/^[A-Za-z .'-]+$/";
    if (!preg_match($string_exp, $txtName)) {
        $error_message .= 'The Name you entered does not appear to be valid.<br />';
    }
    if (strlen($comments) < 2) {
        $error_message .= 'The Comments you entered do not appear to be valid.<br />';
    }
    if (strlen($error_message) > 0) {
        info('note2', died($error_message));
        header('Location: contact.php');
        die();
    }
    $email_message = "Form details below.\n\n";

    function clean_string($string) {
        $bad = array("content-type", "bcc:", "to:", "cc:", "href");
        return str_replace($bad, "", $string);
    }

    $email_message .= "First Name: " . clean_string($txtName) . "\n";
    $email_message .= "Email: " . clean_string($email_from) . "\n";
    $email_message .= "Telephone: " . clean_string($telephone) . "\n";
    $email_message .= "Comments: " . clean_string($comments) . "\n";


// create email headers
    $headers = 'From: ' . $email_from . "\r\n" .
            'Reply-To: ' . $email_from . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
    if (mail($email_to, $email_subject, $email_message, $headers)) {
        info('note1', 'Your messages is successfully sent, we will get back to you soon. Thank you for your time!');
        header('Location: contact.php');
    } else {
        info('note2', 'Sorry there was an error sending your message, please try again!');
        header('Location: contact.php');
    }
}
?>
