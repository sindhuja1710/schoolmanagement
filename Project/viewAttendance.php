<?php
$conn = mysqli_connect("localhost","root","","school_db");

if(!$conn){
    die("Database Connection Failed");
}


$sql = "SELECT students.name, students.roll_number, attendance.status, attendance.date
        FROM attendance
        JOIN students ON attendance.student_id = students.id
        ORDER BY attendance.date DESC";

$result = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html>
<head>
<title>Attendance Records</title>

<style>

body{
font-family:Arial;
background:#f4f6f9;
}

table{
width:80%;
margin:auto;
border-collapse:collapse;
background:white;
}

th,td{
padding:10px;
border:1px solid #ccc;
text-align:center;
}

th{
background:#2c3e50;
color:white;
}

.present{color:green;font-weight:bold;}
.absent{color:red;font-weight:bold;}
.leave{color:orange;font-weight:bold;}

h2{
text-align:center;
}

</style>

</head>

<body>

<h2>Student Attendance Records</h2>

<table>

<tr>
<th>Name</th>
<th>Roll No</th>
<th>Status</th>
<th>Date</th>
</tr>

<?php
while($row=mysqli_fetch_assoc($result)){
?>

<tr>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['roll_number']; ?></td>
<td class="<?php echo $row['status']; ?>">
<?php echo ucfirst($row['status']); ?>
</td>
<td><?php echo $row['date']; ?></td>
</tr>

<?php } ?>

</table>

</body>
</html>