<?php

 require_once($_SERVER['DOCUMENT_ROOT'].'/lib/phpmailer/PHPMailerAutoload.php');

 $mail = new PHPMailer;
 $mail->CharSet = 'utf-8';
 $mail->isSMTP();
 $mail->SMTPDebug = 0;
 $mail->Debugoutput = 'html';
 $mail->Host = 'smtp.mail.ru';
 $mail->Port = 465;
 $mail->SMTPSecure = 'ssl';
 $mail->SMTPAuth = true;
 $mail->Username = "ruswebmeadia@bk.ru";
 $mail->Password = "peEySsihUGyEEUt4Z4uP";
 $mail->setFrom('ruswebmeadia@bk.ru');
 $mail->addAddress('ruswebmeadia@bk.ru');

 switch (@$_POST['action']) {

  case 'order_1':
   $mail->Subject = 'Поступила новая заявка с сайта TabShaer';
   $htmlMessage = "Имя: ".stripinput($_POST['name'])."\r\n";
   $htmlMessage .= "Телефон: ".stripinput($_POST['tel'])."\r\n";
   $htmlMessage .= "Email: ".stripinput($_POST['email'])."\r\n";
   $mail->Body =  $htmlMessage;
   if (!$mail->send()) {

   } else {

   }
   exit('200');
   break;

  case 'order_2':
   $mail->Subject = 'Поступила новая заявка [Caparison Dellinger II FX-AM Dark Green Matt] с сайта TubShaer.ru';
   $htmlMessage = "Имя: ".stripinput($_POST['name'])."\r\n";
   $htmlMessage .= "Телефон: ".stripinput($_POST['tel'])."\r\n";
   $htmlMessage .= "Email: ".stripinput($_POST['email'])."\r\n";
   $htmlMessage .= "Комментарий: ".stripinput($_POST['message'])."\r\n";
   $mail->Body =  $htmlMessage; 
   if (!$mail->send()) {

   } else {

   }
   exit('200');
   break;

  case 'order_3':
   $mail->Subject = 'Поступила новая заявка [ROCKDALE Stars HT HSS Black Limited Edition] с сайта TabShaer.ru';
   $htmlMessage = "Имя: ".stripinput($_POST['name'])."\r\n";
   $htmlMessage .= "Телефон: ".stripinput($_POST['tel'])."\r\n";
   $htmlMessage .= "Email: ".stripinput($_POST['email'])."\r\n";
   $htmlMessage .= "Комментарий: ".stripinput($_POST['message'])."\r\n";
   $mail->Body =  $htmlMessage;
   if (!$mail->send()) {

   } else {

   }
   exit('200');
   break;

  case 'order_4':
   $mail->Subject = 'Поступила новая заявка [Ibanez Sa260fm-tgb] с сайта TabShaer.ru';
   $htmlMessage = "Имя: ".stripinput($_POST['name'])."\r\n";
   $htmlMessage .= "Телефон: ".stripinput($_POST['tel'])."\r\n";
   $htmlMessage .= "Email: ".stripinput($_POST['email'])."\r\n";
   $htmlMessage .= "Комментарий: ".stripinput($_POST['message'])."\r\n";
   $mail->Body =  $htmlMessage;
   if (!$mail->send()) {

   } else {

   }
   exit('200');
   break;

  case 'order_5':
   $mail->Subject = 'Поступила новая заявка [ROCKDALE Stars HSS BK] с сайта TabShaer.ru';
   $htmlMessage = "Имя: ".stripinput($_POST['name'])."\r\n";
   $htmlMessage .= "Телефон: ".stripinput($_POST['tel'])."\r\n";
   $htmlMessage .= "Email: ".stripinput($_POST['email'])."\r\n";
   $htmlMessage .= "Комментарий: ".stripinput($_POST['message'])."\r\n";
   $mail->Body =  $htmlMessage;
   if (!$mail->send()) {

   } else {

   }
   exit('200');
   break;

  default:
   exit('200');
   break;
 }

 function stripinput($_sText) {
  if (ini_get('magic_quotes_gpc')) $_sText = stripslashes($_sText);
  $search = array("\"", "'", "\\", '\"', "\'", "<", ">", "&nbsp;");
  $replace = array("&quot;", "&#39;", "&#92;", "&quot;", "&#39;", "&lt;", "&gt;", " ");
  $_sText = str_replace($search, $replace, $_sText);
  return $_sText;
 }
?>