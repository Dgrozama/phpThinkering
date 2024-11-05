<!DOCTYPE html>
<html lang="es">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Series</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<meta charset="UTF-8">
<body class="cinema-theme">
<nav class="w-full bg-black bg-opacity-70 p-4 fixed top-0 left-0">
    <ul class="flex justify-center space-x-4">
        <li>
            <a href="/" class="text-blue-500 hover:underline">Inici</a>
        </li>
        <li>
            <a href="/films" class="text-blue-500 hover:underline">Pel·lícules</a>
        </li>
        <li>
            <a href="/series" class="text-blue-500 hover:underline">Sèries</a>
        </li>
    </ul>
</nav>
<div class="max-w-4xl mx-auto bg-white shadow-md rounded-lg p-6 cinema-card mt-16">
    <h1 class="text-4xl font-bold mb-4 text-center">Edit Series 📺</h1>
    <form action="/series/update/<?= $serie->id ?>" method="POST">
        <div class="mb-4">
            <label for="name" class="block text-white">Name</label>
            <input type="text" id="name" name="name" class="w-full px-4 py-2 rounded" value="<?= htmlspecialchars($serie->name) ?>" required>
        </div>
        <div class="mb-4">
            <label for="director" class="block text-white">Director</label>
            <input type="text" id="director" name="director" class="w-full px-4 py-2 rounded" value="<?= htmlspecialchars($serie->director) ?>" required>
        </div>
        <div class="mb-4">
            <label for="year" class="block text-white">Year</label>
            <input type="number" id="year" name="year" class="w-full px-4 py-2 rounded" value="<?= htmlspecialchars($serie->year) ?>" required>
        </div>
        <div class="mb-4">
            <label for="genre" class="block text-white">Genre</label>
            <input type="text" id="genre" name="genre" class="w-full px-4 py-2 rounded" value="<?= htmlspecialchars($serie->genre) ?>" required>
        </div>
        <div class="mb-4">
            <label for="synopsis" class="block text-white">Synopsis</label>
            <textarea id="synopsis" name="synopsis" class="w-full px-4 py-2 rounded" required><?= htmlspecialchars($serie->synopsis) ?></textarea>
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700 transition duration-300 ease-in-out transform hover:scale-105">Update</button>
    </form>
</div>
</body>
</html>