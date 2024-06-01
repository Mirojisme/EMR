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
       <a href="patientsearch.php">Patient Lookup</a>
       <a href="drsearch.php" class="active">Doctor Lookup</a>
       <a href="#">Code Lookup</a>
       <a href="#">Settings</a>
       <a href="javascript:void(0);" class="icon" onclick="myFunction()">
           <i class="fa fa-bars"></i>
       </a>
    </div>
    <div class="container">
        <div class="content">
            <h2>Doctor Search</h2>
            <form method="post">
                <label for="lastName">Last Name:</label>
                <input type="text" name="lastName" id="lastName" /><br /><br />
                <label for="firstName">First Name:</label>
                <input type="text" name="firstName" id="firstName" /><br /><br />
                <label for="patientID">Employee ID:</label>
                <input type="text" name="patientID" id="patientID" /><br /><br />
                <input type="submit" value="Submit" />
            </form>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 Responsive Webpage</p>
    </footer>
</body>
</html>
