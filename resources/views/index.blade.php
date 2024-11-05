<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Demo PHP</title>
</head>
<body>
<h1>
    <?php
    $greeting = "Hola";
    echo $greeting . "World!<br>";
    $a =3;
    $b = 2;
    echo $a + $b . "<br>";
    //                $films= [
    //                        "Dune",
    //                    "Star wars",
    //                    "Blade Runner 2049",
    //                    "Mad Max: Fury road",
    //                    "Avatar",
    //                    "Club de los poetas muertos"
    //                ];
    $films = [
        [
            "name" => "Dune",
            "director" => "Denis Villeneuve",
            "year" => "2020",
        ], [
            "name" => "Star Wars",
            "director" => "George Lucas",
            "year" => "1977",
        ], [
            "name" => "Blade Runner 2049",
            "director" => "Denis Villeneuve",
            "year" => "2017",
        ], [
            "name" => "Mad Max: Fury road",
            "director" => "George Miller",
            "year" => "2015",
        ], [
            "name" => "Avatar",
            "director" => "James Cameron",
            "year" => "2009",
        ], [
            "name" => "2001: a space odyssey",
            "director" => "Stanley Kubrick",
            "year" => "1968",
        ]];
    var_dump($films);

    function filterByDirector($films, $director){
        $filteredDirectors = [];
        foreach($films as $film){
            if ($film['director'] == $director) {
                $filteredDirectors[] = $film;
            }
        }
        return $filteredDirectors;
    }
    ?>
</h1>
<ul>
    <h2>TOTES LES PELICULES:</h2>
    <?php foreach ($films as $film) : ?>
    <li><?= $film['name'] ?></li>
    <?php endforeach; ?>

    <h2>PELICULES FILTRADES PER FUNCIO:</h2>
    <?php foreach (filterByDirector($films, "Denis Villeneuve") as $film) : ?>
    <li><?= $film['name']?>(<?= $film['year']?> by <?= $film['director']?>)</li>
    <?php endforeach; ?>
</ul>
<p>Agafem la peli 3: <?= $films[2] ?></p>

<p>Llista de pelis:</p>
<div>
    <table>
        <thead>
        <tr>
            <th scope="col">
                Id
            </th>
            <th scope="col">
                Film Name
            </th>
            <th scope="col">
                Director
            </th>
            <th scope="col">
                releaseYear
            </th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($films as $film): ?>
        <tr>
            <td>
                    <?=$film->pk;?>
            </td>
            <td>
                    <?=$film->name;?>
            </td>
            <td>
                    <?=$film->director;?>
            </td>
            <td>
                    <?=$film->year;?>
            </td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html>



