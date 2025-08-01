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
    <x-parcel.hero />

    <section class="bg-white">
        <div id="booking" class="mx-auto grid max-w-screen-xl px-4 sm:px-6 lg:px-8 md:grid-cols-12 gap-20 py-20 ">
            <x-parcel.process />
            <x-parcel.form />
        </div>
    </section>
    <x-shared.footer />
</body>

</html>