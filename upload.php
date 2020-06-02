<?php
header('Content-Type: application/json');

$allowed = 'jpg';

$processed = '';

if(isset($_POST['submit'])){

    $file = $_FILES['files'];
    $filename = $_FILES['files']['name'];
    $fileError = $_FILES['files']['error'];
    $fileTemp = $_FILES['files']['tmp_name'];
    $fileSize = $_FILES['files']['size'];

 $ext = explode('.',$filename);
 
 $fileActualExt= strtolower(end($ext));




if ($fileActualExt === 'jpg'){
  if ($fileSize < 1000000) {
      $filenameNew = uniqid('', true).".".$fileActualExt;
      
  }else{
      echo "Your file is too big!";
  }
}else{
    echo 'You cannot upload files of this type!';
}

}    


$firstName = $_POST['fname'];
$phoneNum = $_POST['phnum'];
$password = $_POST['pass'];
$location = $_POST['location'];

$lastName = $_POST['lname'];
$email = $_POST['email'];
$career = $_POST['career'];
$dob = $_POST['dob'];

$fields = array("firstName"=>$firstName,"phoneNumber"=>$phoneNum,"password"=>$password,
"location"=>$location, "image"=>$filenameNew,"lastname"=>$lastName,"email"=>$email,"career"=>$career,"dob"=>$dob);
$JSON = json_encode($fields,JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
$ch = curl_init("http://18.224.23.171/upload.php");
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS,$JSON);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

curl_exec($ch);
curl_close($ch);

