<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'YouCoDone') }}</title>

    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />

    <script src="https://cdn.tailwindcss.com?plugins=forms"></script>
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#13ec13",
                        "background-light": "#f6f8f6",
                        "background-dark": "#102210",
                    },
                    fontFamily: { "sans": ["Work Sans", "sans-serif"] }
                },
            },
        }
    </script>
</head>
<body class="bg-background-light dark:bg-background-dark text-[#0d1b0d] dark:text-[#f8fcf8] antialiased">
    <div class="flex flex-col lg:flex-row h-screen w-full overflow-hidden">
        
        <div class="hidden lg:flex lg:w-1/2 relative bg-[#13ec13] h-full">
            <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBKEh3om8xdKGkG-uHgSxLbGx9RgZzMYQh_ztp4ybnNrdC5c1hjbTA-zVIDOiMT3KBAazV7pNXQYeQwTyIpn-1xdWOx14Ob3apq95GIIs271s9qrMZI0My66fKbJfueTbVy02xZZFMnbmIxXWCLrPHsQeRzdYRTYaJZoS7SEzE5x2RluQUkEzFPFhYb4G8RuLE297YZX3zrR42ZtKVi3a72m9gWlCx8p1ByDzMXhDh9Cww3pgR3E7uZJ5flgueMwI8_oHZ4kqD8I_D4');">
                <div class="absolute inset-0 bg-black/30"></div>
            </div>
            <div class="relative z-10 flex flex-col justify-between p-12 text-white h-full w-full">
                <div class="flex items-center gap-2">
                    <span class="material-symbols-outlined text-4xl text-primary">restaurant</span>
                    <span class="text-2xl font-black tracking-tighter">YouCo'Done</span>
                </div>
                <div>
                    <h2 class="text-5xl font-black leading-tight mb-4 text-white">The flavor of efficient management.</h2>
                    <p class="text-lg opacity-90 max-w-md text-white/90">Join thousands of food lovers in the most intuitive ecosystem.</p>
                </div>
                <div class="text-sm opacity-70">© {{ date('Y') }} YouCo'Done.</div>
            </div>
        </div>

        <div class="flex-1 h-full overflow-y-auto bg-background-light dark:bg-background-dark">
            <div class="min-h-full flex flex-col justify-center items-center px-6 py-12 lg:px-20">
                <div class="max-w-[480px] w-full">
                    {{ $slot }}
                </div>
            </div>
        </div>

    </div>
</body>
</html>