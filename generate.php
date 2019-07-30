<?php

if(isset($_POST['submit'])){

    $hallName = $_POST['hall'];
    $name = $_POST['fullName'];
    $class  = $_POST['class'];
    $rollNo = $_POST['rollNumber'];
    $dept = $_POST['department'];
    $session = $_POST['session'];
    $blood = $_POST['bloodGroup'];

    $output = "outputs/".str_replace(' ', '_', $name).".jpg";

    $image = imagecreatefromjpeg('images/card.jpg');

    $white = imagecolorallocate($image, 255, 255, 255);
    $black = imagecolorallocate($image, 0, 0, 0);
    $red = imagecolorallocate($image, 220, 20, 60);

    $fontSize = 24;
    $rotation = 0;

    $semiBold = dirname(__FILE__)."/fonts/OpenSans-Semibold.ttf";
    $bold = dirname(__FILE__)."/fonts/OpenSans-Bold.ttf";

    imagettftext($image, $fontSize, $rotation, 220, 302, $white, $bold, $hallName);
    imagettftext($image, 26, $rotation, 34, 740, $black, $bold, $name);
    imagettftext($image, $fontSize, $rotation, 200, 792, $black, $semiBold, $class);
    imagettftext($image, $fontSize, $rotation, 200, 832, $black, $semiBold, $rollNo);
    imagettftext($image, 24, $rotation, 200, 872, $black, $semiBold, $dept);
    imagettftext($image, $fontSize, $rotation, 200, 912, $black, $semiBold, $session);
    imagettftext($image, $fontSize, $rotation, 258, 947, $red, $semiBold, $blood);


    $uploadedImage = $_FILES['image']['tmp_name'];
    $imageName = basename($_FILES["image"]["name"]);
    $imageFileType = strtolower(pathinfo($imageName,PATHINFO_EXTENSION));

    $imageSize = getimagesize($_FILES["image"]["tmp_name"]); 
    
    //Array ( [0] => 959 [1] => 960 [2] => 2 [3] => width="959" height="960" [bits] => 8 [channels] => 3 [mime] => image/jpeg )

    //print_r($imageSize);


    if($imageFileType == 'jpg' || $imageFileType == 'jpeg'){
        $jpgImage = imagecreatefromjpeg($uploadedImage);
        imagecopyresized($image, $jpgImage, 352, 334, 0, 0, 265, 341, $imageSize[0], $imageSize[1]);
    }
    else if($imageFileType == 'png'){
        $jpgImage = imagecreatefrompng($uploadedImage);
        imagecopyresized($image, $jpgImage, 352, 334, 0, 0, 265, 341, $imageSize[0], $imageSize[1]);
    }
    else if($imageFileType == 'gif'){
        $jpgImage = imagecreatefromgif($uploadedImage);
        imagecopyresized($image, $jpgImage, 352, 334, 0, 0, 265, 341, $imageSize[0], $imageSize[1]);
    }


    imagejpeg($image, $output);
    imagedestroy($image);

    header('Location: download.php'.'?name='.str_replace(' ', '_', $name));
}

else{
    header('Location: index.php');
}

?>

<img src="<?= $output;?>" width="" height="50%">