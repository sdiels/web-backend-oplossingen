<?php
var_dump($_FILES);
$path = "";

if(isset($_POST["submit"])) {
    define('ROOT', dirname(__FILE__));
    move_uploaded_file( $_FILES['file']['tmp_name'], (ROOT . "/img/" . $_FILES["file"]["name"]));
    $path = (ROOT . "/img/" . $_FILES["file"]["name"]);
    
    $fileParts	=	pathinfo($path);
	$fileName	=	$fileParts['filename'];
	$ext		=	$fileParts['extension'];
    list($width, $height)	=	getimagesize($path);
    
    switch ($ext)
	{
		case ('jpg'):
		case ('jpeg'):
			$source 	= 	imagecreatefromjpeg($path);
			break;
			
		case ('png'):
			$source 	=	imagecreatefrompng($path);
			break;

		case ('gif'):
			$source 	=	imagecreatefromgif($path);
			break;
	}
    
    
    
    if($width > $height) {
        $thumb 	=	imagecreatetruecolor(100, 100);
        imagecopyresized($thumb, $source, 50,50,$width/2,$height/2, $width * (100/$height), 100, $width, $height);
    }else {
        $thumb 	=	imagecreatetruecolor(100, 100);
        imagecopyresized($thumb, $source, 50,50,$width/2,$height/2, 100, $height * (100/$width), $width, $height);
    }
    
    /*$cropped = imagecrop ( $source , ['x' => $width/2, 'y' => $height/2, 'width' => 100, 'height' => 100] );*/
    $resized 	= 	imagejpeg($thumb, ("img/thumb-" . $fileName. ".jpg"), 100);
    
    
    
    /*switch ($ext)
	{
		case ('jpg'):
		case ('jpeg'):
			$resized 	= 	imagejpeg($thumb, ("img/thumb-" . $fileName. "." . $ext), 100);
			break;
			
		case ('png'):
			$resized 	=	imagepng($thumb, ("img/thumb-" . $fileName . "." . $ext), 100);
			break;

		case ('gif'):
			$resized 	=	imagegif($thumb, ("img/thumb-" . $fileName . "." . $ext));
			break;
	}*/
    
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>image manipulation thumb</title>
</head>

<body>

    <form action="index.php" method="POST" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="file">Foto kiezen</label>
                <input type="file" id="file" name="file">
            </li>
        </ul>

        <input type="submit" name="submit">
    </form>

</body>

</html>
