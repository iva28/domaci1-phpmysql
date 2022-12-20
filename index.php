

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
</head>

<body>
    <section class="header">
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
            <h1>Salon lepote Beauty</h1>
            <p> Lepota dolazi iznutra, ali dobro je početi od nečega!
            </p><br>
            <!-- Zakaži dugme koje pokreće login modal -->
            <button type="button" class="hero-btn" data-bs-toggle="modal" data-bs-target="#loginModal">
               Zakaži tretman
            </button>
        </div>
    </section>

    <!-- Login modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Unesite vaše podatke</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="POST">
                        <div class="mb-3">
                            <label for="usernameModal" class="form-label">Username</label>
                            <input type="text" class="form-control" id="usernameModal" name="username" autocomplete="off" aria-describedby="emailHelp" required>
                        </div>
                        <div class="mb-3">
                            <label for="passwordModal" class="form-label">Password</label>
                            <input type="password" class="form-control" id="passwordModal" name="password" required>
                            <br><br>
                        </div>
                        <button type="button" class="hero-btn purple-btn" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="hero-btn purple-btn1" name="submit">Login</button>

                    </form>
                </div>

            </div>
        </div>
    </div>

    <!-- Bootstrap JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

    <!--JavaScript for toggle menu-->
    <script>
        var navLinks = document.getElementById("navLinks");

        function showMenu() {
            navLinks.style.right = "0";

        }
        function hideMenu() {
            navLinks.style.right = "-200px"
        }
    </script>
</body>

</html>