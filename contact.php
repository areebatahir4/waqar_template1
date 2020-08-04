<?php 
$email_from="allentempleameatl@gmail.com";
$fname=$_POST['name'];
$femail=$_POST['email'];
$phone=$_POST['phone'];
$mess=$_POST['msg'];
$email_to = $femail;
$email_subject = "Allen Temple Contact Us  ".$email_from;
//$mess = "Thank you for response, We will Contact You As Soon As Possible";
 $email_message .= "<p><div style='width:120px;float:left;'><b>Name: ".$fname." </b></div></p><br/>\n";
 $email_message .= "<p><div style='width:120px;float:left;'><b>Email:</b></div>".$email_to."</p><br/>\n";
  $email_message .= "<p><div style='width:120px;float:left;'><b>Email:</b></div>".$phone."</p><br/>\n";
  $email_message .= "<p><div style='width:120px;float:left;'><b>Message: </b></div>".$mess."</p><br/>\n";
 
 $headers = 'From: '.$email_from."\r\n";
 $headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
 
      $send=@mail($email_to, $email_subject, $email_message, $headers);
      echo $send;  ?>
      <script type="text/javascript">
   window.location="http://allentempleameatlanta.org/contact_us.html";

</script>