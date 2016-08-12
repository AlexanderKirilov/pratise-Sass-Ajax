<?php
session_start();
$style = "";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ajax & Sass Groceries practise</title>
	<link rel="stylesheet" href="assets/stylesheets/index.css">
	<script src="assets/js/ajax.js" type="text/javascript" charset="utf-8" async></script>
</head>
<body>
<?php
if(!isset($_SESSION['logged']) || !$_SESSION['logged'] == true){
	require 'assets/snippets/login.php';
	$style = "display:none;";
}
?>
<main id="mainContainer" style="<?=$style?>">
	<?php require 'assets/snippets/groceries.html'?>
</main>
<script src="assets/js/index.js">
</script>
</body>

</html>