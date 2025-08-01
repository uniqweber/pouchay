<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link data-navigate-once href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@3.34.1/dist/tabler-icons.min.css" rel="stylesheet" />
    <script src="//unpkg.com/alpinejs" defer></script>
    @vite('resources/css/app.css')
</head>

<body class="font-noto-bengali ">
    <x-shared.navbar />
    <div class="bg-gray-100 pt-18">
        <div class="mx-auto flex h-84 px-4 sm:px-6 lg:px-8 max-w-screen-xl  items-center justify-between">
            <h1 class="text-3xl  text-gray-400 md:text-5xl t">
                জয়পুরহাটের <br />
                <span class="text-black inline-block py-3 font-extrabold">সেরা রেস্টুরেন্টগুলোর</span> <br> খাবার এখন আপনার দরজায়
            </h1>

            <img src="/food-banners.png" alt="" class="size-74 hidden md:block" />
        </div>
    </div>
    <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8 py-20">
        <h2 class="mb-10 text-lg font-semibold">জনপ্রিয় সকল খাবার </h2>
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-4">
            @for ($i = 1; $i
            < 8; $i++)
                <x-foods.food-card img="foods/item-{{ $i }}.jpg" />
            @endfor
        </div>
    </div>
    <x-shared.footer />
</body>

</html>