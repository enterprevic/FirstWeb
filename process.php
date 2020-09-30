<?php
if(isset($_POST['submit'])){
		$to = "enterprevic@gmail.com";
		$subject = $_POST['subject'];
		$email = $_POST['email'];
		$txt = $_POST['message'];
		$headers = "From: ".$email. "\r\n' .

mail($to,$subject,$txt,$headers);
}
?>