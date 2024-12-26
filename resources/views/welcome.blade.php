<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans antialiased dark:bg-gray-900 dark:text-gray-300">
    <div class="flex items-center justify-center min-h-screen bg-gray-100 dark:bg-gray-900">
        <div class="text-center">
            <h1 class="text-4xl font-semibold text-gray-800 dark:text-white mb-4">
                Open <span class="text-blue-500">http://localhost:8000/users</span>
            </h1>
            <a href="/users" class="inline-block px-6 py-3 bg-blue-500 text-white font-medium text-lg rounded-lg shadow hover:bg-blue-600 transition">
                Tekan ini
            </a>
        </div>
    </div>
</body>
</html>