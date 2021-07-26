<!DOCTYPE html>
<html>

<h1> Wellcome to HomePage </h1>
<body>
	<p> Active network interfaces  </p>
<?php
   
echo shell_exec("/usr/sbin/ifconfig");
?>

</body>
</html>
