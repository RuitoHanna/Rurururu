<?php
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$to="kucingterbang.studio@gmail.com";
$message="Dear, <br /> <br />".$message;
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
// More headers
$headers .= 'From:'.$name.' <'.$email.'>'."\r\n" . 'Reply-To: '.$name.' <'.$email.'>'."\r\n";
$headers .= 'Cc: ruitohanna@gmail.com' . "\r\n"; 
@mail($to,$subject,$message,$headers);
if (@mail) { ?>
<script language="javascript" type="text/javascript">
alert('Thank you for the message. We will contact you shortly.');
window.location = 'contact.html';
</script>
<?php
}
else { ?>
<script language="javascript" type="text/javascript">
alert('Message failed. Please, send an email to xxxx@email.co.id');
window.location = 'contact.html';
</script>
<?php
}
?>