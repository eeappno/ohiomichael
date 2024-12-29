<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Michael Potts @ohiomichael</title>
    <meta name="description" content="Columbus ohio highschool photography">
    <meta name="keywords" content="photography, ohio, sports">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
    <!-- Vite & Tailwind CSS -->
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
<!-- Header -->
<header class="bg-white shadow">
    <div class="container mx-auto flex justify-between items-center py-4 px-6">
        <a href="/" class="text-2xl font-bold">ohiomichael</a>
        <nav class="hidden md:flex space-x-6">
            <a href="/" class="text-gray-600 hover:text-gray-900">Home</a>
            <a href="contact.html" class="text-gray-600 hover:text-gray-900">Contact</a>
            <a href="request.html" class="text-gray-600 hover:text-gray-900">Request-Form</a>
            <a href="https://olsd.press" class="text-gray-600 hover:text-gray-900">OLSD-Free-Press</a>
        </nav>
        <button class="md:hidden text-gray-600" aria-label="Toggle menu">
            <svg class="w-6 h-6" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
        </button>
    </div>
</header>

<!-- Main Section -->
<main class="container mx-auto py-12 px-6">
    {{ $slot }}
</main>

<!-- Footer -->
<footer class="bg-gray-800 text-white py-6">
    <div class="container mx-auto text-center">
        <p>&copy; 2024 <a href="https://ohiomichael.com" class="text-blue-400">ohiomichael.com</a> All Rights Reserved.</p>
        <div class="mt-4 flex justify-center space-x-4">
            <a href="tel:6145429875" class="text-gray-400 hover:text-white">
                <svg class="w-6 h-6" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h4l3 3 6-6-3-3-3 3-4-4m0 4l-6 6h4l3-3m0 4l6 6h4l3-3" />
                </svg>
            </a>
            <a href="https://instagram.com/ohiomichael69" class="text-gray-400 hover:text-white">
                <svg class="w-6 h-6" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h4l3 3 6-6-3-3-3 3-4-4m0 4l-6 6h4l3-3m0 4l6 6h4l3-3" />
                </svg>
            </a>
            <a href="mailto:contact@ohiomichael.com" class="text-gray-400 hover:text-white">
                <svg class="w-6 h-6" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h4l3 3 6-6-3-3-3 3-4-4m0 4l-6 6h4l3-3m0 4l6 6h4l3-3" />
                </svg>
            </a>
        </div>
    </div>
</footer>
</body>
</html>
