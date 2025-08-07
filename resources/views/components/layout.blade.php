<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pixel Position</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Hanken Grotesk', sans-serif;
        }
    </style>
</head>
<body class="bg-[#060606] text-white ">
<div class="container mx-auto px-10">
    <nav class="flex justify-between items-center py-4 border-b border-white/10">
        <div>
            <a href="/">
                <img src="{{Vite::asset('resources/images/logo.svg')}}" alt="Image du logo">
            </a>
        </div>
        <div class="space-x-6 font-bold">
            <a href="">Jobs</a>
            <a href="">Careers</a>
            <a href="">Salaries</a>
            <a href="">Companies</a>
        </div>
        <div>
            <a href=""> Post a job</a>
        </div>
    </nav>

    <main class="mt-10 max-w-[968px] mx-auto">
        {{ $slot }}
    </main>
</div>
</body>
</html>
