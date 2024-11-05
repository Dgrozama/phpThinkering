<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Series Details</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .cinema-theme {
            height: 100vh;
            background-image: url('{{ asset('cinema-background.png') }}');
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
    <h1 class="text-4xl font-bold mb-4 text-center text-blue-600">Series Details 📺</h1>
    <p class="text-white mb-4"><strong>Name:</strong> <?= htmlspecialchars($series->name) ?></p>
    <p class="text-white mb-4"><strong>Director:</strong> <?= htmlspecialchars($series->director) ?></p>
    <p class="text-white mb-4"><strong>Year:</strong> <?= htmlspecialchars($series->year) ?></p>
    <p class="text-white mb-4"><strong>Genre:</strong> <?= htmlspecialchars($series->genre) ?></p>
    <p class="text-white mb-4"><strong>Synopsis:</strong> <?= htmlspecialchars($series->synopsis) ?></p>
    <a href="/series" class="text-gray-500 hover:underline mt-4 block">Return</a>
</div>
</body>
</html>