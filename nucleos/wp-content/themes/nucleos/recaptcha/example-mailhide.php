<html><body>
<?
require_once ("recaptchalib.php");

// get a key at http://www.google.com/recaptcha/mailhide/apikey
$mailhide_pubkey = '';
$mailhide_privkey = '';

?>

The Mailhide version of allan.masamune@gmail.com is
<? echo recaptcha_mailhide_html ($mailhide_pubkey, $mailhide_privkey, "allan.masamune@gmail.com"); ?>. <br>

The url for the email is:
<? echo recaptcha_mailhide_url ($mailhide_pubkey, $mailhide_privkey, "allan.masamune@gmail.com"); ?> <br>
allan.masamune
gmailbody></html>
