<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Film</title>
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
<div class="max-w-4xl mx-auto bg-white shadow-md rounded-lg p-6 cinema-card">
    <h1 class="text-4xl font-bold mb-4 text-center text-blue-600">Edit Film ✏️</h1>
    <form action="/update" method="POST">
        <input type="hidden" name="id" value="<?= htmlspecialchars($film->id) ?>" class="mt-1 block w-full border border-gray-300 rounded-md p-2 text-black">
        <div class="mb-4">
            <label for="name" class="block text-white">Name:</label>
            <input type="text" name="name" value="<?= htmlspecialchars($film->name) ?>" class="mt-1 block w-full border border-gray-300 rounded-md p-2 text-black" required>
        </div>
        <div class="mb-4">
            <label for="director" class="block text-white">Director:</label>
            <input type="text" name="director" value="<?= htmlspecialchars($film->director) ?>" class="mt-1 block w-full border border-gray-300 rounded-md p-2 text-black" required>
        </div>
        <div class="mb-4">
            <label for="year" class="block text-white">Year:</label>
            <input type="number" name="year" value="<?= htmlspecialchars($film->year) ?>" class="mt-1 block w-full border border-gray-300 rounded-md p-2 text-black" required>
        </div>
        <div class="mb-4">
            <label for="genre" class="block text-white">Genre:</label>
            <input type="text" name="genre" value="<?= htmlspecialchars($film->genre) ?>" class="mt-1 block w-full border border-gray-300 rounded-md p-2 text-black" required>
        </div>
        <div class="mb-4">
            <label for="sinopsis" class="block text-white">Sinopsis:</label>
            <input type="text" name="sinopsis" value="<?= htmlspecialchars($film->sinopsis) ?>" class="mt-1 block w-full border border-gray-300 rounded-md p-2 text-black" required>
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700 transition duration-300 ease-in-out transform hover:scale-105">Update</button>
    </form>
    <a href="/films" class="text-gray-500 hover:underline mt-4 block">Return</a>
</div>
</body>
</html>