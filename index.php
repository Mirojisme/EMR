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
       <a href="index.php" class="active">Home</a>
       <a href="patientsearch.php">Patient Lookup</a>
       <a href="drsearch.php">Doctor Lookup</a>
       <a href="#">Code Lookup</a>
       <a href="#">Settings</a>
       <a href="javascript:void(0);" class="icon" onclick="myFunction()">
           <i class="fa fa-bars"></i>
       </a>
    </div>
    <div class="container">
        <div class="content">
            <h2>Main Content</h2>
            <p>This is a simple responsive webpage created using HTML and CSS.</p>
            <div class="progressbar">
                <div class="skill html">80%</div>
            </div>
            <div class="progressbar">
                <div class="skill php">50%</div>
            </div>
            <div class="progressbar">
                <div class="skill html">80%</div>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 Responsive Webpage</p>
    </footer>
</body>
</html>
