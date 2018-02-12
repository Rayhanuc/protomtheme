<?php

add_action( 'basic_func', 'basic_setup_func' );
function basic_setup_func(){
echo "amra hook banabo";
}

add_action( 'header_part', 'header_func',10,3 );
function header_func($first,$second,$three) {
	?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>

<body>
	<h1>Website content</h1>
	<?php
	echo $first .' '. $second.' '. $three;

	?>
</body>
</html>

<?php }

add_action('header_part', 'dekhi_ki_hoi',9);
function dekhi_ki_hoi(){
	echo 'kisu ekta';
}
?>