<?php
require 'scripts/config.php';
require 'scripts/session.php';
require 'scripts/adminaccess.php';
require 'scripts/idtoname.php';

		$status = 0;

		$name = $_POST['fname'];
		$lname = $_POST['lname'];
		$fdate = $_POST['fdate'];
		$tdate = $_POST['tdate'];
		$mobile = $_POST['mobile'];
		$city = $_POST['city'];
	
		
	
	
		    /* FETCH IMAGE & WRITE TEXT */
			$img = imagecreatefromjpeg('certificate.jpeg');
			$color = imagecolorallocate($img, 0,0,0);
			$name = $name.' '.$lname;
			$fdate = $fdate;
			$todate = $tdate;
			$mobile = $mobile;
			$city = $city;
			$font = "arial.ttf";

			$new_name="A.jpeg";

			/* CENTER THE TEXT BLOCK - name */
			imagettftext($img, 24, 0, 165, 790, $color, $font, $name);
			imagettftext($img, 20, 0, 465, 880, $color, $font, $fdate);
			imagettftext($img, 20, 0, 690, 880, $color, $font, $todate);
			imagettftext($img, 20, 0, 300, 960, $color, $font, $mobile);
			imagettftext($img, 20, 0, 770, 960, $color, $font, $city);


			/* OUTPUT IMAGE */
			header('Content-type: image/jpeg');


			/* image save */
			imagejpeg($img, $directory.$new_name);

			/* output image */
			imagejpeg($img);

			imagedestroy($jpg_image);

?>


<!DOCTYPE html>
<html>
	<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	</head>
<body onload="window.print()">

<h1>My First Heading</h1>
<p>My first paragraph.</p>
<script type="text/javascript">

 $(document).ready(function () {
    window.print();
});

</script>
</body>
</html>
