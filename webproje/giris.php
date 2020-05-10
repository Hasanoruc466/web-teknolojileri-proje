<?php
if($_POST['username']=="b181210021@sakarya.edu.tr" && $_POST['password']=="1234")
{
	header("Location: index.html");
}
else
{
	echo "Giriş başarısız";
	header("Refresh: 3; Location: giris.html");
}
?>
