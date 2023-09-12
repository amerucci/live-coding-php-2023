
<?php
                $scheme = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";
                $serverName = $_SERVER['SERVER_NAME'];
                $port = $_SERVER['SERVER_PORT'];
                $basePath = dirname($_SERVER['PHP_SELF']);
                $baseUrl = "$scheme://$serverName";
                if (($scheme === "http" && $port != 80) || ($scheme === "https" && $port != 443)) {
                    $baseUrl .= ":$port";
                }
                $baseUrl .= $basePath;
                $baseUrl = rtrim($baseUrl, '/') . '/';
                ?>

<!doctype html>


<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php if (!empty($title)) {
                echo $title;
            } else {
                echo "Accueil";
            } ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body style="    height: 100vh;
    width: 100vw;
    justify-content: center;
    align-items: center;
    display: flex;flex-direction: column;">
    <div class="container">
        <div class="row">
            <div style="width:100%; text-align:center;">
            <img src="<?= $baseUrl; ?>img/keuvin.jpeg" style="max-width:350px; height:100%; border-radius:50%" />
            <div style="width:100%; text-align:center; position:relative"><a href="<?= $baseUrl; ?>tapotte" class="btn btn-dark my-2">On commence</a></div>
        </div>
   
      <div class=" col py-5 justify-content-center d-flex flex-wrap">




                <a href="<?= $baseUrl; ?>Premiers violons" class="btn btn-danger my-2 me-0">Premiers violons</a>
                <a href="<?= $baseUrl; ?>Premiers violons/plus" class="btn btn-secondary my-2">+</a>
                <a href="<?= $baseUrl; ?>Premiers violons/moins" class="btn btn-secondary my-2">-</a>

                <a href="<?= $baseUrl; ?>Altos" class="btn btn-danger my-2 me-0">Altos</a>
                <a href="<?= $baseUrl; ?>Altos/plus" class="btn btn-secondary my-2">+</a>
                <a href="<?= $baseUrl; ?>Altos/moins" class="btn btn-secondary my-2">-</a>

                <a href="<?= $baseUrl; ?>Violoncelle" class="btn btn-danger my-2 me-0">Violoncelle</a>
                <a href="<?= $baseUrl; ?>Violoncelle/plus" class="btn btn-secondary my-2">+</a>
                <a href="<?= $baseUrl; ?>Violoncelle/moins" class="btn btn-secondary my-2">-</a>

                <a href="<?= $baseUrl; ?>Seconds violons" class="btn btn-danger my-2 me-0">Seconds violons</a>
                <a href="<?= $baseUrl; ?>Seconds violons/plus" class="btn btn-secondary my-2">+</a>
                <a href="<?= $baseUrl; ?>Seconds violons/moins" class="btn btn-secondary my-2">-</a>

                <a href="<?= $baseUrl; ?>Contrebasses" class="btn btn-danger my-2 me-0">Contrebasses</a>
                <a href="<?= $baseUrl; ?>Contrebasses/plus" class="btn btn-secondary my-2">+</a>
                <a href="<?= $baseUrl; ?>Contrebasses/moins" class="btn btn-secondary my-2">-</a>

                <a href="<?= $baseUrl; ?>Harpe, Piano" class="btn btn-warning my-2 me-0">Harpe, Piano</a>
                <a href="<?= $baseUrl; ?>Harpe, Piano/plus" class="btn btn-secondary my-2">+</a>
                <a href="<?= $baseUrl; ?>Harpe, Piano/moins" class="btn btn-secondary my-2">-</a>

                <a href="<?= $baseUrl; ?>Flûte 'Piccolo'" class="btn btn-primary my-2 me-0">Flûte 'Piccolo'</a>
                <a href="<?= $baseUrl; ?>Flûte 'Piccolo'/plus" class="btn btn-secondary my-2">+</a>
                <a href="<?= $baseUrl; ?>Flûte 'Piccolo'/moins" class="btn btn-secondary my-2">-</a>

                <a href="<?= $baseUrl; ?>Flute" class="btn btn-primary my-2 me-0">Flûte</a>
                <a href="<?= $baseUrl; ?>Flute/plus" class="btn btn-secondary my-2">+</a>
                <a href="<?= $baseUrl; ?>Flute/moins" class="btn btn-secondary my-2">-</a>

                <a href="<?= $baseUrl; ?>Hautbois" class="btn btn-primary my-2 me-0">Hautbois</a>
                <a href="<?= $baseUrl; ?>Hautbois/plus" class="btn btn-secondary my-2">+</a>
                <a href="<?= $baseUrl; ?>Hautbois/moins" class="btn btn-secondary my-2">-</a>

                <a href="<?= $baseUrl; ?>Cor anglais" class="btn btn-primary my-2 me-0">Cor anglais</a>
                <a href="<?= $baseUrl; ?>Cor anglais/plus" class="btn btn-secondary my-2">+</a>
                <a href="<?= $baseUrl; ?>Cor anglais/moins" class="btn btn-secondary my-2">-</a>

                <a href="<?= $baseUrl; ?>Cor" class="btn btn-primary my-2 me-0">Cor</a>
                <a href="<?= $baseUrl; ?>Cor/plus" class="btn btn-secondary my-2">+</a>
                <a href="<?= $baseUrl; ?>Cor/moins" class="btn btn-secondary my-2">-</a>

                <a href="<?= $baseUrl; ?>Clarinette" class="btn btn-primary my-2 me-0">Clarinette</a>
                <a href="<?= $baseUrl; ?>Clarinette/plus" class="btn btn-secondary my-2">+</a>
                <a href="<?= $baseUrl; ?>Clarinette/moins" class="btn btn-secondary my-2">-</a>

                <a href="<?= $baseUrl; ?>Basson" class="btn btn-primary my-2 me-0">Basson</a>
                <a href="<?= $baseUrl; ?>Basson/plus" class="btn btn-secondary my-2">+</a>
                <a href="<?= $baseUrl; ?>Basson/moins" class="btn btn-secondary my-2">-</a>

                <a href="<?= $baseUrl; ?>Contrebasson" class="btn btn-primary my-2 me-0">Contrebasson</a>
                <a href="<?= $baseUrl; ?>Contrebasson/plus" class="btn btn-secondary my-2">+</a>
                <a href="<?= $baseUrl; ?>Contrebasson/moins" class="btn btn-secondary my-2">-</a>

                <a href="<?= $baseUrl; ?>Orgue" class="btn btn-warning my-2 me-0">Orgue</a>
                <a href="<?= $baseUrl; ?>Orgue/plus" class="btn btn-secondary my-2">+</a>
                <a href="<?= $baseUrl; ?>Orgue/moins" class="btn btn-secondary my-2">-</a>

                <a href="<?= $baseUrl; ?>Percussion" class="btn btn-primary my-2 me-0">Percussion</a>
                <a href="<?= $baseUrl; ?>Percussion/plus" class="btn btn-secondary my-2">+</a>
                <a href="<?= $baseUrl; ?>Percussion/moins" class="btn btn-secondary my-2">-</a>

                <a href="<?= $baseUrl; ?>Timbale" class="btn btn-primary my-2 me-0">Timbale</a>
                <a href="<?= $baseUrl; ?>Timbale/plus" class="btn btn-secondary my-2">+</a>
                <a href="<?= $baseUrl; ?>Timbale/moins" class="btn btn-secondary my-2">-</a>

                <a href="<?= $baseUrl; ?>Trompette" class="btn btn-primary my-2 me-0">Trompette</a>
                <a href="<?= $baseUrl; ?>Trompette/plus" class="btn btn-secondary my-2">+</a>
                <a href="<?= $baseUrl; ?>Trompette/moins" class="btn btn-secondary my-2">-</a>

                <a href="<?= $baseUrl; ?>Trombone" class="btn btn-primary my-2 me-0">Trombone</a>
                <a href="<?= $baseUrl; ?>Trombone/plus" class="btn btn-secondary my-2">+</a>
                <a href="<?= $baseUrl; ?>Trombone/moins" class="btn btn-secondary my-2">-</a>

                <a href="<?= $baseUrl; ?>Tuba" class="btn btn-primary my-2 me-0">Tuba</a>
                <a href="<?= $baseUrl; ?>Tuba/plus" class="btn btn-secondary my-2">+</a>
                <a href="<?= $baseUrl; ?>Tuba/moins" class="btn btn-secondary my-2">-</a>



        </div>
    </div>
    <div style="width:100%; text-align:center; position:relative"><a href="<?= $baseUrl; ?>fin" class="btn btn-dark my-2">FIN</a></div>
    <div class="row text-center" style="justify-content:center; align-items:center">
        <?php if (!empty($ordreDeKevin)) {
            echo $ordreDeKevin;
        } else {
         echo "<p>Le concert va commencer</p>";
        } ?>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>