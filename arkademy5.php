<?php

$con = new PDO('mysql:host=localhost;dbname=arkademy;', 'root', '');
$con->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$posts = $con->prepare("SELECT * FROM `tposts` WHERE `id` = 1");
$posts->execute();
$dataPosts = $posts->fetchAll();
foreach ($dataPosts as $value) {
	$idPost = $value['id'];
	$title = $value['title'];
	$content = $value['content'];
	$created = $value['create'];
}

$users = $con->prepare("SELECT * FROM `tusers` WHERE `id` = $created");
$users->execute();
$dataUsers = $users->fetchAll();

$coments = $con->prepare("SELECT * FROM `tcoments` WHERE `postid` = $idPost");
$coments->execute();
$dataComents = $coments->fetchAll();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Arkademy 5</title>
</head>
<body>

<div style="text-align: center; margin-top: 100px;">
	<h1>Arkademy Blog</h1>
	<table style="text-align: center; margin: auto; width: 60%;" border="1">
		<tr>
			<td>Post Title</td>
			<td>Created By</td>
			<td>Comments</td>
		</tr>

		<tr>
			<?php 
			foreach ($dataPosts as $value) {
				echo "<td>".$title = $value['title']."</td>";
			}

			foreach ($dataUsers as $value) {
				echo "<td>".$username = $value['username']."</td>";
			}

			?>
			<td>
				<?php
				foreach ($dataComents as $value) {
					echo $comment = $value['comment']."<br/>";
				}
				?>
			</td>
		</tr>
	</table>
</div>

</body>
</html>