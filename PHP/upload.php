<?php 

$src = $_FILES['file']['tmp_name'];
$dst = "/Users/user/Desktop/". $_FILES['file']['name'];

if(move_uploaded_file($src,$dst) == 1){
  echo "done";
}else{
  echo "error code" . $_FILES['file']['error'];
}
?>