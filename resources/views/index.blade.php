<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projecte</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .main-theme {
            height: 100vh;
            background-image: url('cinema-background.png');
            background-size: cover;
            background-position: center;
            color: #fff;
            background-repeat: no-repeat;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        .main-card {
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
<body class="main-theme">
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
<div class="max-w-4xl mx-auto bg-white shadow-md rounded-lg p-6 main-card mt-16">
    <h1 class="text-4xl font-bold mb-4 text-center text-blue-600">Benvingut al Projecte 🎬</h1>
    <div class="mt-8 text-center">
        <h2 class="text-2xl font-bold mb-4">Portada/Presentació del Projecte</h2>
        <p class="mb-4">Aquesta és la pàgina principal del projecte on es presenta la informació general.</p>
        <img src="portada.png" alt="Project Image" class="mx-auto mb-4 rounded-lg shadow-lg">
        <p class="text-white-700">Explora les nostres col·leccions de pel·lícules i sèries. Fes clic als enllaços de dalt per començar!</p>
    </div>
</div>
</body>
</html>