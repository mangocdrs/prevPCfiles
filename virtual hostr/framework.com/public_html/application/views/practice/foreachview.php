<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title;?></title>
</head>
<body>

	<h1><?php  echo $heading; ?></h1>
	<h3>My todo list</h3>

	<ul>

		<?php foreach ($listdo as $item):?> 
	<li><?php echo $item; ?></li>

<?php endforeach;?>
</ul>


</body>
</html>