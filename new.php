<!DOCTYPE html>
<html lang="en">
<head>
<title>Story</title>
</head>
<body>
<h1>My Story</h1>
<p>Once upon a time</p>
<?php
$output = `ls -lart`;
echo "<div>$output</div>";
?>
</body>
</html>