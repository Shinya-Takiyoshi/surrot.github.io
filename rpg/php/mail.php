<?php 
mb_language("Japanese");
mb_internal_encoding("UTF-8");

$to      = 'garo.savior@gmail.com';
$subject = 'タイトル';
$message = '本文';
$headers = 'From: from@hoge.co.jp' . "\r\n";
if(mb_send_mail($to, $subject, $message, $headers){
echo "メールが送信されました";
}else{
echo "メールが送信できませんでした";

};

?>