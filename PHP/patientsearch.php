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
       <a href="patientsearch.php" class="active">Patient Lookup</a>
       <a href="drsearch.php">Doctor Lookup</a>
       <a href="#">Code Lookup</a>
       <a href="#">Settings</a>
       <a href="javascript:void(0);" class="icon" onclick="myFunction()">
           <i class="fa fa-bars"></i>
       </a>
    </div>
    <div class="container">
        <div class="content">
            <h2>Patient Search</h2>
            <form method="post">
                <label for="lastName">Last Name:</label>
                <input type="text" name="lastName" id="lastName" /><br /><br />
                <label for="firstName">First Name:</label>
                <input type="text" name="firstName" id="firstName" /><br /><br />
                <label for="patientID">Patient ID:</label>
                <input type="text" name="patientID" id="patientID" /><br /><br />
                <input type="submit" value="Submit" />
            </form>
            <?php
                if(isset($_POST["lastName"]) || isset($_POST["firstName"]) || isset($_POST["patientID"])){
                    require "patientsearch.php";
                    if(count($results) > 0){
                        echo "<table>";
                        echo "<tr>";
                        echo "<th>ID</th>";
                        echo "<th>First Name</th>";
                        echo "<th>Last Name</th>";
                        echo "</tr>";
                        foreach($results as $r){
                            echo "<tr>";
                            echo "<td>" . $r['ID'] . "</td>";
                            echo "<td>" . $r['firstName'] . "</td>";
                            echo "<td>" . $r['lastName'] . "</td>";
                            echo "</tr>";
                        }
                        echo "</table>";
                    }else{
                        echo "no results";
                    }
                }
            ?>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 Responsive Webpage</p>
    </footer>
</body>
</html>
