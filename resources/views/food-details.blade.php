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
    <!-- banner -->
    <div class="bg-gray-100 pt-18">
        <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8 pt-6 pb-8">
            <x-foods.breadcrumb />
            <x-foods.restaurant-banner />
        </div>
    </div>

    <!-- availabe food -->
    <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8  py-20">
        <div>
            <h2 class="flex items-center mb-7 gap-2 text-xl font-semibold"> <i class="ti ti-chef-hat"></i> আমাদের খাবার রেস্টুরেন্টের খাবার সমূহ </h2>
            <div class="grid lg:grid-cols-3 gap-10">
                <div class="grid md:grid-cols-2 lg:col-span-2 gap-4">
                    <x-foods.food-variant />
                    <x-foods.food-variant />
                    <x-foods.food-variant />
                    <x-foods.food-variant />
                    <x-foods.food-variant />
                    <x-foods.food-variant />
                    <x-foods.food-variant />
                </div>
                <div>
                    <x-foods.food-cart />
                </div>

            </div>
        </div>
    </div>

    <x-shared.footer />
</body>

</html>