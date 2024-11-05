<?php

use Core\App;

    $greeting = "Hello";
    $a =3;
    $b = 2;
    //echo $a + $b . "<br>";
    //                $films= [
    //                        "Dune",
    //                    "Star wars",
    //                    "Blade Runner 2049",
    //                    "Mad Max: Fury road",
    //                    "Avatar",
    //                    "Club de los poetas muertos"
    //                ];
//    $films = [
//        [
//            "name" => "Dune",
//            "director" => "Denis Villeneuve",
//            "year" => "2020",
//        ], [
//            "name" => "Star Wars",
//            "director" => "George Lucas",
//            "year" => "1977",
//        ], [
//            "name" => "Blade Runner 2049",
//            "director" => "Denis Villeneuve",
//            "year" => "2017",
//        ], [
//            "name" => "Mad Max: Fury road",
//            "director" => "George Miller",
//            "year" => "2015",
//        ], [
//            "name" => "Avatar",
//            "director" => "James Cameron",
//            "year" => "2009",
//        ], [
//            "name" => "2001: a space odyssey",
//            "director" => "Stanley Kubrick",
//            "year" => "1968",
//        ]];
//    var_dump($films);

    //consultem els registres de la taula films de la bd utilitzant App
    $films = App::get('database')->selectAll('films');

//    function filterByDirector($films, $director){
//        $filteredDirectors = [];
//        foreach($films as $film){
//            if ($film['director'] == $director) {
//                $filteredDirectors[] = $film;
//            }
//        }
//        return $filteredDirectors;
//    }

//cridem a la vista
require '../resources/views/index.blade.php';
    ?>
<!--</h1>-->
<!--<ul>-->
<!--    <h2>TOTES LES PELICULES:</h2>-->
<!--    --><?php //foreach ($films as $film) : ?>
<!--        <li>--><?php //= $film['name'] ?><!--</li>-->
<!--    --><?php //endforeach; ?>
<!---->
<!--    <h2>PELICULES FILTRADES PER FUNCIO:</h2>-->
<!--    --><?php //foreach (filterByDirector($films, "Denis Villeneuve") as $film) : ?>
<!--     <li>--><?php //= $film['name']?><!--(--><?php //= $film['year']?><!-- by --><?php //= $film['director']?><!--)</li>-->
<!--    --><?php //endforeach; ?>
<!--</ul>-->
<!--<p>Agafem la peli 3: --><?php //= $films[2] ?><!--</p>-->



