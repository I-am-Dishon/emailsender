<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html> 
<html lang="en"> 
<head> 
  <meta charset="utf-8"> 
  <title>CodeIgniter Email Example</title> 
</head> 
<body> 
<?php 
  //echo $this->session->flashdata('email_sent'); 
echo " email sent";
  echo form_open('/Email_controller/send_mail'); 
?>

  <input type="email" name="email" required /> 
  <input type="submit" value="SEND MAIL"> 
<?php 
  echo form_close(); 
?> 
</body>
</html> 