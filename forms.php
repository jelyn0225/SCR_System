<!DOCTYPE>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-COMPATIBLE" content=""IE="edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assign Course & Units</title>
</head>

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
</style>

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
<center>
<h1>Registration Course</h1>
        <form action="files.php" method="get">
        <label for="School Year"> School Year</label>
        <select>
        <option value="2023-2024"> 2023-2024</option>
        </select>
        <br>
        <br>

        <label for="Student Type"> Student Type</label>
        <select>
        <option value="Freshman"> Freshman</option>
        <option value="Senior"> Senior</option>
        <option value="Transferee"> Transferee</option>
        </select>

        <br>
        <br>

        <label for="Course"> Course</label>
        <select>
        <option value="Bachelor of Science in Information System"> Bachelor of Science in Information System</option>
        <option value="Bachelor of Science in Criminology"> Bachelor of Science in Criminology</option>
        <option value="Bachelor of Science in Business Administration"> Bachelor of Science in Business Administration</option>
        <option value="Bachelor of Science in Hospitality Management"> Bachelor of Science in Hospitality Management</option>
        <option value="Bachelor of Secondary Education"> Bachelor of Secondary Education</option>
        </select>

<br>
<br>

        <label for="Level"> Level</label>
        <select>
        <option value="1st Year"> 1st Year</option>
        <option value="2nd Year"> 2nd Year</option>
        <option value="3rd Year"> 3rd Year</option>
        </select>

        <br>
        <br>

        <label for="Semester"> Semester</label>
        <select>
        <option value="1st Semester"> 1st Semester</option>
        <option value="2nd Semester"> 2nd Semester</option>
        </select>

        <br>

        <button class="register-btn" type="submit">Register</button>

        <br>
        <br>
        
</center>
        </form>
        </body>
        </html>