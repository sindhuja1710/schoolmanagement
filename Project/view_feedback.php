<?php

$conn = new mysqli("localhost","root","","thenu");

if($conn->connect_error){
die("Connection failed");
}

$result=$conn->query("SELECT * FROM feedback");

if($result->num_rows>0){

while($row=$result->fetch_assoc()){

echo "<tr>";
echo "<td>".$row['parent_name']."</td>";
echo "<td>".$row['student_name']."</td>";
echo "<td>".$row['teacher_name']."</td>";
echo "<td>".$row['rating']." ⭐</td>";
echo "<td>".$row['feedback']."</td>";
echo "</tr>";

}

}else{

echo "<tr><td colspan='5'>No feedback yet</td></tr>";

}

?>