<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-COMPATIBLE" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Profile</title>

    <style>
        * {
            padding: 0;
            margin: 0;
            font-family: monospace;
        }

        body {
            background-color: #fff;
            margin-top: 50px;
            display: flex;
            justify-content: center;
            align-items: flex-start;
        }

        header {
            background-color: #6638e6;
            color: #fff;
            text-align: center;
            padding: 10px;
            width: 100%;
            position: fixed;
            top: 0;
            z-index: 1000;
        }

        .navbar {
            display: flex;
            justify-content: space-around;
            align-items: center;
        }

        ul {
            list-style: none;
        }

        ul li {
            display: inline-block;
            margin-right: 20px;
        }

        ul li a {
            text-decoration: none;
            color: #fff;
        }

        .container {
            max-width: 1000px;
            margin-top: 40px;
            margin-right: auto;
            margin-left: 20px;
        }

        .container div {
            margin-bottom: 15px;
            display: flex;
            align-items: center;
        }

        label {
            display: inline-block;
            width: 150px;
            margin-right: 15px;
            font-size: 1.7em;
            background-color: transparent;
        }

        input {
            flex: 1;
            width: 400px;
            padding: 8px;
            opacity: 0;
            text-align: center;
            box-sizing: border-box;
        }

        h1 {
            font-size: 2em; /* Adjust the font size as needed */
        }

        .floating-img {
        float: left; /* Float the image to the right */
        margin: 50px 20px 20px 20px; /* Adjust margin as needed */
        width: 20%; /* Set the width to 20% of its original size */
        border: 5px solid black;
        border-radius: 5px;
}
    </style>
</head>

<body>

    <header>
        <nav class="navbar">
            <h1>Student Course Registration</h1>
            <ul>
                <li><a href="profile.php">Student Profile</a></li>
                <li><a href="forms.php">Registration Course</a></li>
                <li><a href="history.php">Registration History</a></li>
            </ul>
        </nav>
    </header>

    <img src="icon.jpg" alt="Placeholder Image" class="floating-img">

    <form method="get" class="container">

        <div>
            <label for="fullname">Fullname:</label>
            <input type="text" name="fullname" id="fullname" disabled>
        </div>

        <div>
            <label for="studid">Student ID:</label>
            <input type="text" name="studid" id="studid" disabled>
        </div>

        <div>
            <label for="course">Course:</label>
            <input type="text" name="course" id="course" disabled>
        </div>

        <div>
            <label for="email">Email:</label>
            <input type="text" name="email" id="email" disabled>
        </div>

        <div>
            <label for="studtype">Student Type:</label>
            <input type="text" name="studtype" id="studtype" disabled>
        </div>

        <div>
            <label for="level">Level:</label>
            <input type="text" name="level" id="level" disabled>
        </div>

        <div>
            <label for="year">School Year:</label>
            <input type="text" name="year" id="year" disabled>
        </div>

    </form>

</body>

</html>
