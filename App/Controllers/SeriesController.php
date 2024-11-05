<?php

namespace App\Controllers;

use App\Models\Serie;

class SeriesController
{
    // Funció index
    public function index()
    {
        // Obtenim totes les sèries
        $series = Serie::getAll();

        // Passem les sèries a la vista
        return view('series/index', ['series' => $series]);
    }

    // Funció per anar a la vista create
    public function create()
    {
        return view('series/create');
    }

    // Funció per guardar les dades i tornar a la vista principal
    public function store($data)
    {
        // Cridem funció create del model
        Serie::create($data);
        // Retornar a la vista principal
        header('location: /series');
        exit;
    }

    // Funció per a la vista edit
    public function edit($id)
    {
        // Si no ens passen la id fem redirect
        if ($id === null) {
            header('location: /series');
            exit;
        }

        // Busquem la sèrie
        $serie = Serie::find($id);

        // Si no trobem la sèrie, mostrar 404
        if (!$serie) {
            require '../../resources/views/errors/404.blade.php';
            return;
        }

        // Retornem la vista i li passem la sèrie indicada
        return view('series/edit', ['serie' => $serie]);
    }

    // Funció update per a modificar la sèrie a la base de dades
    public function update($id, $data)
    {
        // Modifiquem
        Serie::update($id, $data);

        // Retornem a la pàgina principal
        header('location: /series');
        exit;
    }

    // Funció per anar a la vista delete
    public function delete($id)
    {
        // Si no ens passen la id fem redirect
        if ($id === null) {
            header('location: /series');
            exit;
        }

        // Busquem la sèrie
        $serie = Serie::find($id);

        // Si no trobem la sèrie, redirigim a la pàgina de sèries
        if (!$serie) {
            header('location: /series');
            exit;
        }

        // Retornem la vista en la sèrie
        return view('series/delete', ['serie' => $serie]);
    }

    // Funció per eliminar la sèrie de la base de dades
    public function destroy($id)
    {
        // Utilitzem la funció delete del model
        Serie::delete($id);

        // Retornar a la vista
        header('location: /series');
        exit;
    }

    public function show($id)
    {
        $serie = Serie::find($id);
        if (!$serie) {
            return require '../resources/views/errors/404.blade.php';
        }
        return view('series/show', ['series' => $serie]);
    }
}