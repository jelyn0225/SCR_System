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

table th {
  background-color: rgb(255, 243, 225);
  font-size: georgia serif;
}

table td {
  background-color: aliceblue;
}

.container {
  padding: 40px;
  display: flex;
  justify-content: space-between;
  font-size: 2em;
}

.form {
  display: flex;
  flex-direction: column;
  gap: 20px;
}

.course {
  display: flex;
  flex-direction: column;
  gap: 20px;
}

.input {
  display: flex;
  gap: 20px;
  justify-content: space-between;
}

.register-btn {
  padding: 16px;
  background: #875ef8;
  border: none;
}
</style>

<body>
        <header>
                <nav class="navbar">
                <h1>Student Course Registration</h1>
                <ul>
                <li><a href="profile.php">Student Profile</a></li>
                <li><a href="forms.php">Registration Course</a></li>
                <li><a href="lout.php">Logout</a></li>
                </ul>
                </nav>
            </header>
<center>
<h1>Registration Course</h1>
        <form  method="POST">
        <div class="container">
        <div class="form">

                <div class="input">
                <label for="Name">Fullname: </label>
                <input type="text" name ="Full Name" id="studint" >
                </div>

                <div class="input">
                <label for="StudentID">StudentID: </label>
                <input type="text" name ="stid" id="stid" >
                </div>

                <div class="input">
                <label for="Course">Course:</label>
                <input type="text" name ="course" id="course" >
                </div>

                <div class="input">
                <label for="Email:">Email: </label>
                <input type="text" name ="Email" id="Email" >
                </div>

                <div class="input">
                <label for="Student Type">Student Type: </label>
                <input type="text" name ="Sttype" id="Sttype" >
                </div>

                <div class="input">
                <label for="Level">Level: </label>
                <input type="text" name ="lvl" id="lvl" >
                </div>

                <div class="input">
                <label for="School Year">School Year: </label>
                <input type="text" name ="Sy" id="SY" >
                </div>
        </div>

<div class="course">
        <h1>Registration Course</h1>

        <div class="input">
        <label for="School Year"> School Year</label>
        <select>
        <option value="2023-2024"> 2023-2024</option>
        </select>
        </div>

        <div class="input">
        <label for="Student Type"> Student Type</label>
        <select>
        <option value="Freshman"> Freshman</option>
        <option value="Senior"> Senior</option>
        <option value="Transferee"> Transferee</option>
        </select>
        </div>

        <div class="input">
        <label for="Course"> Course</label>
        <select>
        <option value="Bachelor of Science in Information System"> Bachelor of Science in Information System</option>
        <option value="Bachelor of Science in Criminology"> Bachelor of Science in Criminology</option>
        <option value="Bachelor of Science in Business Administration"> Bachelor of Science in Business Administration</option>
        <option value="Bachelor of Science in Hospitality Management"> Bachelor of Science in Hospitality Management</option>
        <option value="Bachelor of Secondary Education"> Bachelor of Secondary Education</option>
        </select>
        </div>

        <div class="input">
        <label for="Level"> Level</label>
        <select>
        <option value="1st Year"> 1st Year</option>
        <option value="2nd Year"> 2nd Year</option>
        <option value="3rd Year"> 3rd Year</option>
        </select>
        </div>

        <div class="input">
        <label for="Semester"> Semester</label>
        <select>
        <option value="1st Semester"> 1st Semester</option>
        <option value="2nd Semester"> 2nd Semester</option>
        </select>
        </div>

        <button class="register-btn" type="submit">Register</button>
</div>
</div>
        </form>
        </body>
        </html>