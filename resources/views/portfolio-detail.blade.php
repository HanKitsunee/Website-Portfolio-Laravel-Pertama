<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $portfolio->title }} - Detail</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            background-color: #0f0f0f;
            color: #F0FFFF;
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body class="min-h-screen flex flex-col">

    <nav class="p-6 flex justify-between items-center max-w-7xl mx-auto w-full">
        <a href="{{ route('home') }}" class="text-2xl font-bold text-[#F0FFFF]">Han.Kitsu</a>
        <a href="{{ route('home') }}"
            class="px-4 py-2 border border-[#F0FFFF] rounded hover:bg-[#F0FFFF] hover:text-[#0f0f0f] transition">
            <i class="fa-solid fa-arrow-left mr-2"></i> Kembali
        </a>
    </nav>

    <main class="flex-grow container mx-auto px-5 py-10 max-w-5xl">

        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-start">

            <div class="w-full bg-[#1e1e1e] rounded-xl overflow-hidden shadow-2xl border border-gray-800">
                <img src="{{ asset('storage/' . $portfolio->image) }}" alt="{{ $portfolio->title }}"
                    class="w-full h-auto object-contain block">
            </div>

            <div class="text-[#F0FFFF] sticky top-10">
                <span class="text-[#959595] font-bold tracking-widest uppercase text-sm mb-2 block">
                    {{ $portfolio->category }}
                </span>

                <h1 class="text-4xl md:text-5xl font-extrabold mb-6 leading-tight">
                    {{ $portfolio->title }}
                </h1>

                <div class="h-1 w-20 bg-[#F0FFFF] mb-8 rounded"></div>

                <div class="text-gray-300 leading-relaxed text-lg whitespace-pre-line space-y-4">
                    {{ $portfolio->description }}
                </div>

                <div class="mt-10 pt-10 border-t border-gray-800">
                    <a href="{{ route('home') }}#contact"
                        class="inline-block text-center w-full md:w-auto px-8 py-3 bg-[#F0FFFF] text-[#0f0f0f] font-bold rounded hover:shadow-[0_0_20px_rgba(240,255,255,0.4)] transition">
                        Hubungi Saya untuk Project Ini
                    </a>
                </div>
            </div>

        </div>

    </main>

    <footer class="text-center py-8 text-gray-500 text-sm border-t border-gray-800 mt-10">
        &copy; 2024 Han.Kitsu Portfolio.
    </footer>

</body>

</html>
