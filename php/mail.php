<?php
if($_POST){
  $firstname = $_POST ['firstname'];
  $email = $_POST['email'];
  $name = $_POST['name'];
  $message = $_POST['message'];
  $headers = "MIME-Version: 1.0\r\n";
  $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
  $headers .= "From: $name <$email>\r\nReply-to : $name <$email>\nX-Mailer:PHP";
  $subject="$objet";
  $destinataire="agrangier.37@gmail.com";
  $body="$message";
  if(mail($destinataire,$subject,$body,$headers)) {
    $response['status'] = 'success';
    $response['msg'] = 'your mail is sent';
  } else {
    $response['status'] = 'error';
    $response['msg'] = 'Something went wrong';
  }
  echo json_encode($response);
}
?>