<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Connexion/Inscription</title>
    
</head>

<body>
    
    <nav class="navbar navbar-light bg-light">
        <span class="navbar-brand mb-0 h1">Reservation Parking</span>
        <span class="navbar-text">
            <?php
            $adresse = $_SERVER['PHP_SELF'];
            $adresse = explode('/', $adresse);
            if (isset($adresse[2])) {
                $adresse = $adresse[2];
            }
            else {
                $adresse = $adresse[1];
            }
            Log::debug($adresse);
            if ($adresse == "index.php" || $adresse == null) {
                echo '<a href="Inscription"> Inscription </a>';
            }
            else {
                echo '<a href="/"> Connexion </a>';
            }
            ?>
          </span>
    </nav>
    <br>
    @yield('content')
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>
</body>

</html>
