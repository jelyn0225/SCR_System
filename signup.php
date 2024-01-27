<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="design.css" />
    <title>Sign Up</title>
</head>

<body>
    <div class="split-screen">
        <div class="left">
            <section class="copy">
                <h1>Welcome To Northford University</h1>
                <p>Hello Future Northford University Members!</p>
                <p>Welcome to our online community! If you haven't created your account yet, now's the perfect time.</p>
                <p>Join us on this exciting journey of learning, collaboration, and fun. Let's make your experience with us amazing!</p>
                <p>Looking forward to having you on board!</p>
            </section>
        </div>
        <div class="right">
            <form action="" method="post">
                <section class="copy">
                    <h2>Sign Up</h2>
                    <div class="login-container">
                        <p>Already have an account? <a href="login.php"><strong>Log In</strong></a></p>
                    </div>
                </section>
                <div class="input-container name">
                    <label for="lname">Last Name</label>
                    <input type="text" id="lname" name="lname" placeholder="Dela Cruz"  />
                </div>
                <div class="input-container name">
                    <label for="fname">First Name</label>
                    <input type="text" id="fname" name="fname" placeholder="Juan"  />
                </div>
                <div class="input-container name">
                    <label for="mname">Middle Name</label>
                    <input type="text" id="mname" name="mname" placeholder="Bonifacio" />
                </div>
                <div class="input-container email">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="example@nf.univ.com" />
                </div>
                <div class="input-container password">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Must be at least 6 characters" minlength="8" />
                </div>
                <div class="input-container cta">
                    <label class="checkbox-container">
                        <input type="checkbox" name="subscribe" id = "checkit" />
                        <span class="checkmark"></span>
                        Sign Up for email updates.
                    </label>
                </div>
                <button class="signup-btn" type="submit" id = "signupbtn" name="save" disabled >Sign Up</button>
                <section class="copy legal">
                    <p>
                        <span class="small">By continuing, you agree to accept Northford's <br />
                            <a href="#">Privacy Policy</a> &amp; <a href="#">Terms of Service</a>.</span>
                    </p>
                </section>
            </form>
        </div>
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', function () {
        var checkbox = document.getElementById('checkit');
        var submitBtn = document.getElementById('signupbtn');

        checkbox.addEventListener('change', function () {
            submitBtn.disabled = !checkbox.checked;
        });
    });
</script>

    <?php
    if (isset($_POST['save'])) {
        include 'config.php';
        $lname = $_POST['lname'];
        $fname = $_POST['fname'];
        $mname = $_POST['mname'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $qry = "INSERT INTO signup (lname, fname, mname, email, password)
            VALUES('$lname','$fname','$mname','$email','$password')";
        $result = $conn->query($qry);
        if ($result == TRUE) {
            echo "<script type = \"text/javascript\">
                    alert(\"Successfully Registered.\");
                    window.location = (\"login.php\")
                    </script>";
        } else {
            echo "<script type = \"text/javascript\">
                    alert(\"Registration Failed. Try Again\");
                    window.location = (\"signup.php\")
                    </script>";
        }
    }
    ?>
</body>

</html>
