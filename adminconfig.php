<?php
$con=mysqli_connect('localhost','root','','commerce');

if(isset($_POST['upload'])){
$NAME=$_POST['nom'];
$PRENOM=$_POST['prenom'];
$PHOTO=$_FILES['photo'];
$PHOTO_LOCATION=$_FILES['photo']['tmp_name'];
$PHOTO_NAME=$_FILES['photo']['name'];
$PHOTO_UP='photo/'.$PHOTO_NAME;
$insert="INSERT INTO vendor(nom,prenom,photo) VALUES ('$NAME','$PRENOM','$PHOTO_UP')";

mysqli_query($con,$insert);
if(move_uploaded_file($PHOTO_LOCATION,'photo/'.$PHOTO_NAME)){
    header("location: adminphp.php");
}else{
    echo"no";
}


}



?> 