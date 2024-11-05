<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Series 📺</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .cinema-theme {
            height: 100vh;
            background-image: url('{{('cinema-background.png') }}');
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
    <h1 class="text-4xl font-bold mb-4 text-center">Series 📺</h1>
    <a href="/series/create" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700 transition duration-300 ease-in-out transform hover:scale-105">Add New Series ➕</a>    <table class="min-w-full mt-4 bg-white border border-gray-300 cinema-table">
        <thead>
        <tr class="text-gray-600 uppercase text-sm leading-normal">
            <th class="py-3 px-6 text-left">ID</th>
            <th class="py-3 px-6 text-left">Title</th>
            <th class="py-3 px-6 text-left">Director</th>
            <th class="py-3 px-6 text-left">Year</th>
            <th class="py-3 px-6 text-left">Genre</th>
            <th class="py-3 px-6 text-left">Synopsis</th>
            <th class="py-3 px-6 text-center">Actions</th>
        </tr>
        </thead>
        <tbody class="text-gray-600 text-sm font-light">
        <?php if (empty($series)): ?>
        <tr>
            <td colspan="6" class="py-3 px-6 text-center">No hi ha sèries disponibles. 😢</td>
        </tr>
        <?php else: ?>
            <?php foreach ($series as $serie): ?>
        <tr class="border-b border-gray-200 hover:bg-gray-100">
            <td class="py-3 px-6"><?=$serie['id'] ?></td>
            <td class="py-3 px-6"><?= htmlspecialchars($serie['name']) ?></td>
            <td class="py-3 px-6"><?= htmlspecialchars($serie['director']) ?></td>
            <td class="py-3 px-6"><?= htmlspecialchars($serie['year']) ?></td>
            <td class="py-3 px-6"><?= htmlspecialchars($serie['genre']) ?></td>
            <td class="py-3 px-6"><?= htmlspecialchars($serie['synopsis']) ?></td>
            <td class="py-3 px-6 text-center">
                <a href="/series/edit/<?= $serie['id'] ?>" class="text-blue-500 hover:text-blue-700 mr-4">Edit ✏️</a>
                <a href="/series/delete/<?= $serie['id'] ?>" class="text-red-500 hover:text-red-700">Delete 🗑️</a>
                <a href="/series/show/<?= $serie['id'] ?>" class="text-green-500 hover:text-green-700 ml-4">Show 🎬</a>
            </td>
        </tr>
        <?php endforeach; ?>
        <?php endif; ?>
        </tbody>
    </table>
</div>
</body>
</html>