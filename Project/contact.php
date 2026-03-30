<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>School Contact & Feedback</title>

<style>
body{
margin:0;
font-family:Arial;
background:#f4f6f9;
}

.header{
background:#8ebbee;
color:white;
padding: 10px;
text-align:center;
height:80px;
}

.logo-area{
display:flex;
align-items:center;
justify-content:center;
gap:8px;
}

.logo-area img{
width:100px;
}

.logo-area h1{
font-size:30px;
margin:0;
}

.logo-area p{
font-size:20px;
margin:0;
}

nav{
background:#004080;
text-align:center;
padding:12px;
}

nav a{
color:white;
text-decoration:none;
margin:0 15px;
font-weight:bold;
}

nav a:hover{
color:yellow;
}

.main-container{
max-width:1100px;
margin:30px auto;
display:flex;
flex-wrap:wrap;
gap:30px;
padding:20px;
}

.box{
flex:1;
background:white;
padding:20px;
border-radius:10px;
box-shadow:0 2px 10px rgba(0,0,0,0.1);
}

input, textarea{
width:100%;
padding:10px;
margin:8px 0;
border-radius:5px;
border:1px solid #ccc;
}

button{
width:100%;
padding:12px;
background:#004080;
color:white;
border:none;
border-radius:5px;
cursor:pointer;
}

button:hover{
background:#0066cc;
}

.rating span{
font-size:25px;
cursor:pointer;
color:#ccc;
}

.rating .active{
color:gold;
}

table{
width:90%;
margin:20px auto;
border-collapse:collapse;
}

th, td{
border:1px solid #ccc;
padding:8px;
text-align:center;
}

th{
background:#4CAF50;
color:white;
}

footer{
background:#002b5c;
color:white;
text-align:center;
padding:15px;
}
</style>
</head>

<body>

<header class="header">
<div class="logo-area">
<img src="Slogo.png">
<div>
<h1>Vidhya Sagar Global School</h1>
<p>School Management System</p>
</div>
</div>
</header>

<nav>
<a href="index.html">🏠 Home</a>
<a href="About.html">ℹ️ About</a>
<a href="Admission.html">📝 Admissions</a>
<a href="Academics.html">📚 Academics</a>
<a href="alumni.html">🎓 Alumni</a>
<a href="contact.php">📞 Contact</a>
</nav>

<div class="main-container">

<div class="box">
<h2>📞 Contact Info</h2>

<p>📍 Chennai, India</p>
<p>📞 +91 9043626156</p>
<p>📧 roopasri2k@gmail.com</p>
<p>✉️ @vsgschool</p>
<p>🕒 Monday - Friday (9 AM - 4 PM)</p>

<iframe 
src="https://www.google.com/maps?q=Chennai,India&output=embed"
width="100%" height="200" style="border:0;border-radius:8px;">
</iframe>
</div>

<div class="box">
<h2>⭐ Parent Feedback</h2>

<form action="save_feedback.php" method="POST">

<input type="text" name="name" placeholder="Parent Name" required>

<input type="text" name="student" placeholder="Student Name">

<input type="text" name="teacher" placeholder="Teacher Name">

<input type="hidden" name="rating" id="ratingValue">

<textarea name="feedback" placeholder="Feedback" required></textarea>

<label>Rating:</label>

<div class="rating" id="rating">
<span data-value="1">★</span>
<span data-value="2">★</span>
<span data-value="3">★</span>
<span data-value="4">★</span>
<span data-value="5">★</span>
</div>

<button type="submit">Submit Feedback</button>

</form>
</div>

</div>

<h2 style="text-align:center;">📋 Feedback List</h2>

<table>
<thead>
<tr>
<th>Parent</th>
<th>Student</th>
<th>Teacher</th>
<th>Rating</th>
<th>Feedback</th>
</tr>
</thead>

<tbody>

<?php include 'view_feedback.php'; ?>

</tbody>
</table>

<footer>
<p>© 2026 Vidhya Sagar Global School</p>
</footer>

<script>
const stars=document.querySelectorAll("#rating span");
let ratingValue=0;

stars.forEach(star=>{
star.addEventListener("click",()=>{

ratingValue=star.getAttribute("data-value");

document.getElementById("ratingValue").value=ratingValue;

stars.forEach(s=>s.classList.remove("active"));

for(let i=0;i<ratingValue;i++){
stars[i].classList.add("active");
}

});
});
</script>

</body>
</html>