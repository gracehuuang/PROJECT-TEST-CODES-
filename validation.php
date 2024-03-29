<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - MyTelferLife</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <!-- Your header and nav -->

    <section id="edit-profile">
        <h2>Login</h2>
        <br>

        <!-- PHP code for error messages -->

        <form id="loginForm" action="http://localhost/ADM-4379/process.php" method="post">

            <label for="email">Email:</label>
            <input type="email" id="email" placeholder="Username/Email" name="email" required>
            
            <label for="password">Password:</label>
            <input type="password" id="password" placeholder="Password" name="password" required>

            <button type="submit" name="login">Login</button>

        </form>
        <br><br>

        <!-- Registration link -->

    </section>

    <script>
        document.getElementById('loginForm').addEventListener('submit', function(event) {
            var email = document.getElementById('email').value;
            var password = document.getElementById('password').value;
            var valid = true;
            var errorMessage = "";

            // Simple email pattern check
            var emailPattern = /\S+@\S+\.\S+/;
            if (!emailPattern.test(email)) {
                errorMessage += "Please enter a valid email address.\n";
                valid = false;
            }

            if (password.length === 0) {
                errorMessage += "Password is required.\n";
                valid = false;
            }

            if (!valid) {
                event.preventDefault(); // Stop form submission
                alert(errorMessage); // Show error messages
            }
        });
    </script>

</body>
</html>
