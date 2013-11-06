<?php
/**
 * Created by JetBrains PhpStorm.
 * User: DarkShade
 * Date: 29.08.13
 * Time: 15:04
 * To change this template use File | Settings | File Templates.
 */
require_once("MailChimp.class.php");

$email = $_POST['EMAIL'];
$fname = $_POST['FNAME'];
$phone = $_POST['PHONE'];

MailChimp::getMCAPI()->call("lists/subscribe", array(
    'id' => '1484aa3415',
    'email' => array('email' => $email),
    'merge_vars' => array(
        'FNAME' => isset($fname) ? $fname : '',
        'MMERGE2' => isset($phone) ? $phone : '',
    ),
    'email_type' => 'html',
    'double_optin' => false,
));
$query = curl_init("http://dark.godsofcontent.biz/user/register");
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($query, CURLOPT_POST, true);
curl_setopt($query, CURLOPT_POSTFIELDS, "User[password]=123456&User[email]=".$email."&User[phone]=".$phone."&User[firstname]=".$fname);
curl_exec($query);
curl_close($query);
header("Location: http://profitcontent.biz/thank.html");
?>