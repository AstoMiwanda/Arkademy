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
foreach ($dataUsers as $value) {
	$username = $value['username'];
}

$coments = $con->prepare("SELECT * FROM `tcoments` WHERE `postid` = $idPost");
$coments->execute();
$dataComents = $coments->fetchAll();

?>

<style type="text/css">
	body{
		margin: 0;
		padding: 0;
		font-family: Arial, Helvetica, sans-serif;
	}
	#header{
		width: 100%;
		height: 70vh;
		margin: 0;
		padding: 0;
	}
	#header .header{
		height: 100%;
		background-image: url(bukuTamu.jpg);
		background-size: cover;
		background-position: center;
		background-repeat: no-repeat;
	}
	#header .text h1{
		padding-top: 325px;
		font-size: 18pt;
		color: #f1f1f1;
		font-weight: bold;
		margin-left: 50px;
	}
	#header .text p{
		margin-top: 20px;
		margin-left: 50px;
		font-size: 14pt;
		font-style: italic;
		color: #e1e1e1;
	}

	#content{
		width: 100%;
		margin: 0;
		padding: 50px 0;
		background-color: #f4f4f4;
	}
	#content .content{
		padding: 50px;
		border-radius: 5px;
		width: 80%;
		margin: auto;
		background-color: #fff;
	}
	#content .content h1{
		margin: 0;
		font-size: 24pt;
		text-align: center;
		color: #222222;
		font-weight: bold;
	}
	#content .content p{
		margin-top: 50px;
		word-spacing: .8pt;
		line-height: 18pt;
		text-indent: 50px;
		font-size: 12pt;
		color: #444444;
		text-align: justify;
		font-weight: normal;
	}
	#content .comment{
		padding: 50px;
		border-radius: 5px;
		width: 80%;
		margin: auto;
		background-color: #f4f4f4;
		color: black;
	}
	#content .box{
		display: flex;
		align-items: center;
		background-color: #fff;
		min-height: 80px;
		border-radius: 10px;
		padding: 20px;
		margin-bottom: 25px;
	}
	#content .foto{
		width: 50px;
		height: 50px;
		border-radius: 50%;
		background-color: #999;
	}
	#content .text{
		color: #222;
		font-size: 12pt;
		word-spacing: .8pt;
		line-height: 16pt;
		text-align: left;
		margin-left: 30px;
	}

</style>

<!DOCTYPE html>
<html>
<head>
	<title>Arkademy 5</title>
</head>
<body>

<div id="header">
	<div class="header">
		<div class="text">
			<h1><?php echo $title ?></h1>
			<p><?php echo $username ?></p>
		</div>
	</div>
</div>

<div id="content">
	<div class="content">
		<h1><?php echo $title ?></h1>

		<p><?php echo $content ?></p>
	</div>

	<div class="comment">
		<?php foreach ($dataComents as $value): ?>
		<div class="box">
			<div class="foto">
				
			</div>

			<div class="text">
				<p>" <?php echo $comment = $value['comment']; ?> "<br/></p>
			</div>
		</div>
		<?php endforeach; ?>
	</div>
</div>

</body>
</html>