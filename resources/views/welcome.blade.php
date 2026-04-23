<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chirper - Home</title>

    <!-- Font -->
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />

    <!-- DaisyUI -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Instrument Sans', sans-serif;
        }

        .hero-bg {
            background: linear-gradient(135deg, #1e293b, #0f172a);
        }

        .glass {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
        }
    </style>
</head>

<body class="min-h-screen flex flex-col bg-base-200">

    <!-- NAVBAR -->
    <nav class="navbar bg-base-100 shadow-md px-6">
        <div class="flex-1">
            <a href="/" class="text-2xl font-bold text-primary animate-bounce">
                🐦 Chirper
            </a>
        </div>
        <div class="flex gap-3">
            <a href="#" class="btn btn-ghost btn-sm">Sign In</a>
            <a href="#" class="btn btn-primary btn-sm rounded-full px-5 animate-bounce">
                Sign Up
            </a>
        </div>
    </nav>

    <!-- HERO SECTION -->
    <section class="hero hero-bg text-white py-20">
        <div class="text-center max-w-xl mx-auto">
            <h1 class="text-5xl font-bold leading-tight animate-bounce">
                Share Your Thoughts 🌙
            </h1>
            <p class="mt-5 opacity-80">
                Chirper is your modern social platform to express ideas, connect with people, and build your voice.
            </p>
            <div class="mt-6 flex justify-center gap-4">
                <a href="#" class="btn btn-accent rounded-full px-6">
                    Get Started
                </a>
                <a href="#" class="btn btn-outline text-white border-white rounded-full px-6">
                    Learn More
                </a>
            </div>
        </div>
    </section>

    <!-- MAIN CONTENT -->
    <main class="flex-1 container mx-auto px-4 py-12">

        <div class="grid md:grid-cols-3 gap-6">

            <!-- Card 1 -->
            <div class="card bg-base-100 shadow-xl hover:scale-105 transition duration-300">
                <div class="card-body">
                    <h2 class="card-title">⚡ Fast & Simple</h2>
                    <p>Create posts instantly with a smooth and responsive interface.</p>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="card bg-base-100 shadow-xl hover:scale-105 transition duration-300">
                <div class="card-body">
                    <h2 class="card-title">🌐 Connect</h2>
                    <p>Follow users and interact with the community easily.</p>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="card bg-base-100 shadow-xl hover:scale-105 transition duration-300">
                <div class="card-body">
                    <h2 class="card-title">🔒 Secure</h2>
                    <p>Your data is safe with modern Laravel security features.</p>
                </div>
            </div>

        </div>

    </main>

    <!-- FOOTER -->
    <footer class="footer footer-center p-6 bg-base-300 text-base-content">
        <div>
            <p class="font-semibold">© 2026 Chirper</p>
            <p class="text-xs opacity-70">Built with Laravel ❤️ Arthio Dipa Wiraguna (240170183)</p>
        </div>
    </footer>

</body>
</html>