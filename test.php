<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - MyTelferLife</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <header>
    <div style='float:right;' id='semester'></div>
    <?php
        session_start();
    
    if(isset($_SESSION['User'])){

        echo '<form action="logout.php" method="post"> 
        <button type="submit">Logout</button>
      </form> ';

    }

?> 
        <h1>Login</h1>
         <nav>
                <a href="index.php">Home</a>
                <a href="General Forum.php">Forums</a>
                <a href="profile.php">Profile</a>
                <a href="Course Search.php">Course Info</a>
                <a href="login.php" class="active">Login</a>
            </nav>
    </header>

    <section id="edit-profile">
        <h2>Login</h2>
        <br>

        <?php

            if(isset($_GET['Empty']) && $_GET['Empty']==true){
                echo "<div>Email and Password are required!</div>";                
        }

            if(isset($_GET['Invalid']) && $_GET['Invalid']==true){
                echo "<div>Invalid Email or Password!</div>";               
        }       

        ?>

    <form action="http://localhost/ADM-4379/process.php" method="post">

            <label for="email">Email:</label>
            <input type="text" id="email" placeholder="Username/Email" name="email">
            
            <label for="password">Password:</label>
            <input type="text" id="password" placeholder="Password" name="password">

            <button name="login">Login</button>

     </form>
        <br><br>

            <label for="register">New to MyTelferLife?</label>
           <a href="register.html">
            <button id="register">Register Here</button>
        </a>
    </section>

<script type="text/javascript">
    // Existing function to get and display the semester
    function getSemester() {
        var today = new Date();
        var year = today.getFullYear(); 
        var month = today.getMonth() + 1; 

        var semester;
        if (month >= 1 && month <= 4) {
            semester = "Winter " + year;
        } else if (month >= 5 && month <= 8) {
            semester = "Spring/Summer " + year;
        } else {
            semester = "Fall " + year;
        }

        document.getElementById("semester").innerHTML = "<strong>Semester:</strong> " + semester;
    }

    // Form validation function
    function validateLoginForm() {
        const email = document.getElementById('email');
        const password = document.getElementById('password');
        const emailPattern = /\S+@\S+\.\S+/; // Simple email regex

        // Checking if email follows a basic pattern
        if (!emailPattern.test(email.value.trim())) {
            alert('Please enter a valid email address.');
            return false; // Prevent form submission
        }

        // Checking if password is entered
        if (password.value.trim() === '') {
            alert('Password is required.');
            return false; // Prevent form submission
        }

        return true; // Form is valid
    }

    // Add event listeners on window load
    window.onload = function() {
        getSemester(); // Call to display the semester

        // Adding submit event listener to form validation
        const loginForm = document.querySelector('form');
        loginForm.onsubmit = validateLoginForm; // Attach validation function to form submission
    };
</script>
