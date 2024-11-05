<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Series</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .cinema-theme {
            height: 100vh;
            background-image: url('cinema-background.png');
            background-size: cover;
            background-position: center;
            color: #fff;
            background-repeat: no-repeat;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        .cinema-card {
            background-color: rgba(0, 0, 0, 0.7);
            border-radius: 10px;
            padding: 20px;
            margin: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            animation: fadeIn 2s ease-in-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
    </style>
</head>
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
    <h1 class="text-4xl font-bold mb-4 text-center text-blue-600">Create Series 📺</h1>
    <form action="/series/store" method="POST">
        <div class="mb-4">
            <label for="name" class="block text-white">Name</label>
            <input type="text" id="name" name="name" class="w-full px-4 py-2 rounded text-black" required>
        </div>
        <div class="mb-4">
            <label for="director" class="block text-white">Director</label>
            <input type="text" id="director" name="director" class="w-full px-4 py-2 rounded text-black" required>
        </div>
        <div class="mb-4">
            <label for="year" class="block text-white">Year</label>
            <input type="number" id="year" name="year" class="w-full px-4 py-2 rounded text-black" required>
        </div>
        <div class="mb-4">
            <label for="genre" class="block text-white">Genre</label>
            <input type="text" id="genre" name="genre" class="w-full px-4 py-2 rounded text-black" required>
        </div>
        <div class="mb-4">
            <label for="synopsis" class="block text-white">Synopsis</label>
            <textarea id="synopsis" name="synopsis" class="w-full px-4 py-2 rounded text-black" required></textarea>
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700 transition duration-300 ease-in-out transform hover:scale-105">Create</button>
        <a href="/series" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-700 transition duration-300 ease-in-out transform hover:scale-105 ml-4">Back</a>
    </form>
</div>
</body>
</html>