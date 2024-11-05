<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Film</title>
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
    <h1 class="text-4xl font-bold mb-4 text-center text-blue-600">Delete Film 🗑️</h1>
    <p class="text-white mb-4">Vols eliminar la peli "<?= htmlspecialchars($film->name) ?>"?</p>
    <form action="/destroy" method="POST">
        <input type="hidden" name="id" value="<?= $film->id ?>">
        <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-700 transition duration-300 ease-in-out transform hover:scale-105">Delete</button>
        <a href="/films" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-700 transition duration-300 ease-in-out transform hover:scale-105 ml-4">Cancel</a>
    </form>
</div>
</body>
</html>