<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMR</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script>
        function myFunction() {
            var x = document.getElementById("mynav");
            if (x.className === "nav") {
                x.className += " responsive";
            } else {
                x.className = "nav";
            }
        }
    </script>
</head>
<body>
    <header>
        <h1>Hamptons Heritage Hospital</h1>
    </header>
    <div class="nav" id="mynav">
       <a href="index.php">Home</a>
       <a href="patientsearch.php" class="active">Patient Dashboard</a>
       <a href="drsearch.php">Doctor Lookup</a>
       <a href="#">Calender</a>
       <a href="#">Settings</a>
       <div class="dropdown">
            <button class="dropbtn">More</button>
            <div class="dropdowncontent">
                <a href="">Patient Search</a>
                <a href="">Add New Patient</a>
                <a href="">link3</a>
            </div>
       </div>
       <a href="javascript:void(0);" class="icon" onclick="myFunction()">
           <i class="fa fa-bars"></i>
       </a>
    </div>
    <div class="container">
        <div class="searchtitle">
            <h2>Patient Search</h2>
            <a href="#">+ New Patient</a>
        </div>
        <div class="searchcontent">
            
            <form method="post" action="patientsearch.php">
                <label for="lastName">Last Name:</label>
                <input type="text" name="lastName" id="lastName" /><br /><br />
                <label for="firstName">First Name:</label>
                <input type="text" name="firstName" id="firstName" /><br /><br />
                <label for="patientID">Patient ID:</label>
                <input type="text" name="patientID" id="patientID" /><br /><br />
                <input type="submit" value="Submit" />
            </form>
            <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    require "searchpatient.php";
                }
            ?>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 Responsive Webpage</p>
    </footer>
</body>
</html>
