<!DOCTYPE html>
<html lang="en">

<head>
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

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #6638e6;
            color: #fff;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-COMPATIBLE" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration History</title>
</head>

<body>

    <header>
        <nav class="navbar">
            <h1>Student Course Registration</h1>
            <ul>
                <li><a href="profile.php">Student Profile</a></li>
                <li><a href="forms.php">Registration Course</a></li>
                <li><a href="history.php">Logout</a></li>
            </ul>
        </nav>
    </header>

</body>

</html>
