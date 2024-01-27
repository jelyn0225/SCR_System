<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="design.css" />
    <title>Login</title>
</head>

<body>
    <div class="split-screen">
        <div class="left">
            <section class="copy">
                <h1>Welcome Back, Student!</h1>
                <p>Welcome back, Northford University Student! We've missed you. Get ready for an exciting year filled with growth, learning, and success. Your journey starts now – let's make it memorable together! #WelcomeBack</p>
            </section>
        </div>
        <div class="right">
            <form method="post">
                <section class="copy">
                    <h2>Login</h2>
                    <div class="login-container">
                        <p>Does not have an account yet? <a href="signup.php"><strong>Register</strong></a></p>
                    </div>
                </section>
                <div class="input-container email">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="example@nf.univ.com" required />
                </div>
                <div class="input-container password">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Must be at least 6 characters" required  />
                </div>
                <button class="login-btn" name="log" id = "log" type="submit">Login</button>
                <section class="copy legal">
                    <p>
                        <span class="small">By continuing, you agree to accept Northford's <br />
                            <a href="#">Privacy Policy</a> &amp; <a href="#">Terms of Service</a>.</span>
                    </p>
                </section>
            </form>
        </div>
    </div>

    <?php
    if (isset($_POST['log'])) {
        include 'config.php';
        $uname = $_POST['email'];
        $pass = $_POST['password'];

        $qy = "SELECT * FROM signup WHERE email = '$uname' AND password = '$pass'";
        $log = $conn->query($qy);
        $num = $log->num_rows;
        $row = $log->fetch_assoc();
        if ($num > 0) {
            session_start();
            $_SESSION['email'] = $row['email'];
            $_SESSION['pass'] = $row['password'];
            echo "<script type = \"text/javascript\">
                        alert(\"Successfully Logged In\");
                        window.location = (\"forms.php\")
                        </script>";
        } else {
            echo "<script type = \"text/javascript\">
                        alert(\"Incorrect Username or Password\");
                        </script>";
        }
    }
    ?>
</body>

</html>
