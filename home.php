
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salon lepote Beauty</title>

    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- moj CSS --> 
    <link rel="stylesheet" href="css/style.css" class="css">

 <style>
tr:hover {background-color: rgb(237,237,237);}
</style>
</head>
<body>
<section class="header-home">
        <nav>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                <li><a href="index.php">POČETNA</a></li>
                <li><a href="tretmani.html">TRETMANI</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        <div class="text-box">
            <h1>Zdravo <?php echo $_COOKIE["kolacic"]; ?> </h1>
            <p>Zakazivanje tretmana je obavezno i preporučujemo da to izvršiš bar nedelju dana unapred. <br>
            </p><br>
        </div></section>

   
    <!-- Bootstrap JavaScript -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

    <div class="container">
        <button type="button" class="hero-btn purple-btn my-4" data-bs-toggle="modal" data-bs-target="#completeModal">
            Dodaj termin
        </button>
        <div id="displayDataTable"></div>
        <input type="text" class="form-control" id="live-search">

    </div>


  
  <script>
        var navLinks = document.getElementById("navLinks");
        function showMenu() {
            navLinks.style.right = "0";

        }

        function hideMenu() {
            navLinks.style.right = "-200px"
        }
    </script>

    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>