<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <nav class="navbar">

        <img src="logo.png" alt="">
        <ul>
            <li><a href="">Home</a> </li>
            <li><a href="">About</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="">Post</a></li>
        </ul>
    </nav>
    <br>
</header>
<section>
<form action="" id="signupForm">

      <legend>Sign Up</legend>
<label for="name">Name</label>
<input type="name" id="name" name="name">
<br>
<label for="date">DOB</label>
<input type="date" name="date" id="date"><br>

<label for="gender">Gender</label>
<div class="form-group">
<label for="male">Male</label>
        <input type="radio" id="male" name="gender" value="male">
        
        <label for="female">Female</label>
        <input type="radio" id="female" name="gender" value="female">
        </div>
<label for="email">Email</label>
<input type="email" id="email" name="email">
<br>
<label for="password">Password</label>
<input type="password" name="password" id="password"><br>
<label for="password">Confirm password</label>
<input type="password" name="password" id="password"><br><br>
<button>Sign Up</button>

</form>
<br><br>
</section>
<footer>Copyright@ Seema Project 
    <script>document.write(new Date().getFullYear())</script>
     <!-- <?php echo date('Y');?> -->
</footer>
</body>
</html>