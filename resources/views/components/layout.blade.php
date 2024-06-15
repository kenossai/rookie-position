<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rookie Jobs</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-black text-white">
    <div class="px-10">
        <nav class="flex justify-between items-center py-4 border-b border-white/10">
            <div class="font-bold">
                <a href="/">
                    <h2>Rookie Positions</h2>
                </a>
            </div>
            <div class="space-x-6 font-bold">
                <a href="">Jobs</a>
                <a href="">Career</a>
                <a href="">Salary</a>
                <a href="">Companies</a>
            </div>
            <div class="">
                <button>Create Job</button>
            </div>
        </nav>
        <main class="mt-10 max-w-[986px]">
            {{ $slot }}
        </main>
    </div>
</body>
</html>
