<?php
$conn = mysqli_connect("localhost","root","","thenu");

if(!$conn){
die("Database connection failed");
}

if(isset($_POST['name'])){

$name=$_POST['name'];
$class=$_POST['class'];
$phone=$_POST['phone'];
$address=$_POST['address'];

$sql="INSERT INTO admissions(name,class,phone,address)
VALUES('$name','$class','$phone','$address')";

mysqli_query($conn,$sql);

echo "<script>
alert('Admission Submitted Successfully');
window.location='Admission.html';
</script>";

}

?>