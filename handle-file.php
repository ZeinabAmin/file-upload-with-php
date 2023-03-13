<?php 
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$img=$_FILES['img'];

// echo '<pre>';
// print_r($_FILES); die;
// print_r($_FILES['img']['tmp_name']);
// move_uploaded_file($_FILES['img']['tmp_name'],$_FILES['img']['name']);
// move_uploaded_file($_FILES['img']['tmp_name'], "uploads/".$_FILES['img']['name']);
// echo '</pre>';
// Array
// (
//     [img] => Array
//         (
//             [name] => offerbazoka2.jpg
//             [full_path] => offerbazoka2.jpg
//             [type] => image/jpeg
//             [tmp_name] => C:\xampp\tmp\phpB9DB.tmp
//             [error] => 0
//             [size] => 1417039
//         )

// )

//print_r($img);  //Array ( [name] => chicken.jpg [full_path] => chicken.jpg 
//[type] => image/jpeg [tmp_name] => C:\xampp\tmp\php8EC0.tmp [error] => 0 [size] => 11545 )

$imgName=$img['name'];
$imgFullPath=$img['full_path'];
$imgType=$img['type'];
$imgTmpName=$img['tmp_name'];
$imgErorr=$img['error'];
$imgSize=$img['size'];
$imgSizemb=$imgSize/(1024**2);
//1mb=1024kb
//1kb=1024byte
$ext=strtolower(pathinfo($imgName,PATHINFO_EXTENSION));
// strtolower($value);
// Strtoupper($value);
$erorrs=[];

if($imgErorr > 0){
    $erorrs[]="there is erorr while uploading";
}elseif (! in_array($ext,['jpg','png','gif','jpeg'])) {
    $erorrs[]="must be image";
}elseif ($imgSizemb > 1) {
    $erorrs[]="images must be less than 1mb";
}

if(empty($erorrs)){
    // $date=time();
    // $imgNewName="$date$randstr.$ext";
    //rand(); //only numbers
    $randstr=uniqid(); //generate random string //unique strings
    // $imgNewNameWithOutExt=pathinfo($imgName,PATHINFO_FILENAME);
    // $imgNewName=$imgNewNameWithOutExt.uniqid().$ext;
    $imgNewName="$randstr.$ext";
    move_uploaded_file($imgTmpName,"uploads/$imgNewName");
}else{
    print_r($erorrs);
}
}

?>