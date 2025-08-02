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
    <div>
        <x-wash.hero />

        <section class="py-20 bg-white dark:bg-gray-900">
            <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-2xl dark:text-white font-semibold mb-8 ">
                    আমাদের সার্ভিস সমূহ
                </h2>
                <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
                    <!-- এক্সটেরিয়র ওয়াশ -->
                    <div class="rounded-lg border p-4 dark:bg-gray-800 dark:border-white/10 bg-white  hover:shadow-md transition">
                        <div class="flex items-center gap-4 mb-3">
                            <div class="size-10 flex items-center justify-center rounded-lg bg-emerald-100 text-emerald-600">
                                <i class="ti ti-wash text-2xl"></i>
                            </div>
                            <h3 class="text-lg font-semibold text-gray-800 dark:text-white">এক্সটেরিয়র ওয়াশ</h3>
                        </div>
                        <p class="text-sm text-gray-600 dark:text-gray-400 mb-3">
                            আপনার গাড়ির বাইরের অংশে ময়লা, ধুলো ও দাগ দূর করে ঝকঝকে করে তুলি খুব যত্নে।
                        </p>
                        <div class="flex items-end justify-between mt-auto">
                            <span class="font-bold text-gray-800 dark:text-white">৳৩৫০</span>
                            <button class="text-sm bg-emerald-600 hover:bg-emerald-700 text-white px-4 py-1.5 rounded">বুক করুন</button>
                        </div>
                    </div>

                    <!-- ইঞ্জিন ওয়াশ -->
                    <div class="rounded-lg border p-4 dark:bg-gray-800 dark:border-white/10 bg-white  hover:shadow-md transition">
                        <div class="flex items-center gap-4 mb-3">
                            <div class="size-10 flex items-center justify-center rounded-lg bg-blue-100 text-blue-600">
                                <i class="ti ti-engine text-2xl"></i>
                            </div>
                            <h3 class="text-lg font-semibold text-gray-800 dark:text-white">ইঞ্জিন ওয়াশ</h3>
                        </div>
                        <p class="text-sm text-gray-600 dark:text-gray-400 mb-3">
                            ইঞ্জিন ক্লিনিং এর মাধ্যমে গরম হওয়া রোধ করি এবং ইঞ্জিন পারফর্মেন্স ধরে রাখি।
                        </p>
                        <div class="flex items-end justify-between mt-auto">
                            <span class="font-bold text-gray-800 dark:text-white">৳৫৫০</span>
                            <button class="text-sm bg-blue-600 hover:bg-blue-700 text-white px-4 py-1.5 rounded">বুক করুন</button>
                        </div>
                    </div>

                    <!-- ইনটেরিয়র ক্লিনিং -->
                    <div class="rounded-lg border p-4 dark:bg-gray-800 dark:border-white/10 bg-white  hover:shadow-md transition">
                        <div class="flex items-center gap-4 mb-3">
                            <div class="size-10 flex items-center justify-center rounded-lg bg-yellow-100 text-yellow-600">
                                <i class="ti ti-sparkles text-2xl"></i>
                            </div>
                            <h3 class="text-lg font-semibold text-gray-800 dark:text-white">ইনটেরিয়র ক্লিনিং</h3>
                        </div>
                        <p class="text-sm text-gray-600 dark:text-gray-400 mb-3">
                            সিট, দরজা, কার্পেট এবং ড্যাশবোর্ড পরিষ্কার করি যেন আপনার গাড়ির ভিতরটা হয় নতুনের মতো।
                        </p>
                        <div class="flex items-end justify-between mt-auto">
                            <span class="font-bold text-gray-800 dark:text-white">৳৪৫০</span>
                            <button class="text-sm bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-1.5 rounded">বুক করুন</button>
                        </div>
                    </div>

                    <!-- এসি সার্ভিসিং -->
                    <div class="rounded-lg border p-4 dark:bg-gray-800 dark:border-white/10 bg-white  hover:shadow-md transition">
                        <div class="flex items-center gap-4 mb-3">
                            <div class="size-10 flex items-center justify-center rounded-lg bg-teal-100 text-teal-600">
                                <i class="ti ti-air-conditioning text-2xl"></i>
                            </div>
                            <h3 class="text-lg font-semibold text-gray-800 dark:text-white">এসি সার্ভিসিং</h3>
                        </div>
                        <p class="text-sm text-gray-600 dark:text-gray-400 mb-3">
                            এসি ফিল্টার ক্লিনিং, কুলিং চেকআপ এবং গ্যাস টপ-আপসহ সম্পূর্ণ সার্ভিসিং ঘরে বসেই পাই।
                        </p>
                        <div class="flex items-end justify-between mt-auto">
                            <span class="font-bold text-gray-800 dark:text-white">৳৭৫০</span>
                            <button class="text-sm bg-teal-600 hover:bg-teal-700 text-white px-4 py-1.5 rounded">বুক করুন</button>
                        </div>
                    </div>

                    <!-- এসি ইনস্টলেশন -->
                    <div class="rounded-lg border p-4 dark:bg-gray-800 dark:border-white/10 bg-white  hover:shadow-md transition">
                        <div class="flex items-center gap-4 mb-3">
                            <div class="size-10 flex items-center justify-center rounded-lg bg-indigo-100 text-indigo-600">
                                <i class="ti ti-tools text-2xl"></i>
                            </div>
                            <h3 class="text-lg font-semibold text-gray-800 dark:text-white">এসি ইনস্টলেশন</h3>
                        </div>
                        <p class="text-sm text-gray-600 dark:text-gray-400 mb-3">
                            নতুন এসি সেটআপ, পুরনো এসি রিলোকেশন — আমরা সব ইনস্টলেশন করি দক্ষতায় ও সঠিকতায়।
                        </p>
                        <div class="flex items-end justify-between mt-auto">
                            <span class="font-bold text-gray-800 dark:text-white">৳১২০০</span>
                            <button class="text-sm bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-1.5 rounded">বুক করুন</button>
                        </div>
                    </div>

                    <!-- এসি গ্যাস রিফিল -->
                    <div class="rounded-lg border p-4 dark:bg-gray-800 dark:border-white/10 bg-white  hover:shadow-md transition">
                        <div class="flex items-center gap-4 mb-3">
                            <div class="size-10 flex items-center justify-center rounded-lg bg-sky-100 text-sky-600">
                                <i class="ti ti-gas-station text-2xl"></i>
                            </div>
                            <h3 class="text-lg font-semibold text-gray-800 dark:text-white">এসি গ্যাস রিফিল</h3>
                        </div>
                        <p class="text-sm text-gray-600 dark:text-gray-400 mb-3">
                            এসির কুলিং সমস্যা সমাধানে নির্ভুল গ্যাস রিফিল সার্ভিস, ঘরে বসেই দ্রুত পেয়ে যান।
                        </p>
                        <div class="flex items-end justify-between mt-auto">
                            <span class="font-bold text-gray-800 dark:text-white">৳১৩০০</span>
                            <button class="text-sm bg-sky-600 hover:bg-sky-700 text-white px-4 py-1.5 rounded">বুক করুন</button>
                        </div>
                    </div>

                    <!-- কম্পিউটার রিপেয়ার -->
                    <div class="rounded-lg border p-4 dark:bg-gray-800 dark:border-white/10 bg-white  hover:shadow-md transition">
                        <div class="flex items-center gap-4 mb-3">
                            <div class="size-10 flex items-center justify-center rounded-lg bg-pink-100 text-pink-600">
                                <i class="ti ti-device-desktop text-2xl"></i>
                            </div>
                            <h3 class="text-lg font-semibold text-gray-800 dark:text-white">কম্পিউটার রিপেয়ার</h3>
                        </div>
                        <p class="text-sm text-gray-600 dark:text-gray-400 mb-3">
                            ডিসপ্লে, পাওয়ার, হার্ডড্রাইভ বা সফটওয়্যার সমস্যা? টেক এক্সপার্ট বাসায় গিয়ে ঠিক করে।
                        </p>
                        <div class="flex items-end justify-between mt-auto">
                            <span class="font-bold text-gray-800 dark:text-white">৳৫০০+</span>
                            <button class="text-sm bg-pink-600 hover:bg-pink-700 text-white px-4 py-1.5 rounded">বুক করুন</button>
                        </div>
                    </div>

                    <!-- ল্যাপটপ সার্ভিসিং -->
                    <div class="rounded-lg border p-4 dark:bg-gray-800 dark:border-white/10 bg-white  hover:shadow-md transition">
                        <div class="flex items-center gap-4 mb-3">
                            <div class="size-10 flex items-center justify-center rounded-lg bg-purple-100 text-purple-600">
                                <i class="ti ti-device-laptop text-2xl"></i>
                            </div>
                            <h3 class="text-lg font-semibold text-gray-800 dark:text-white">ল্যাপটপ সার্ভিসিং</h3>
                        </div>
                        <p class="text-sm text-gray-600 dark:text-gray-400 mb-3">
                            স্লো ল্যাপটপ, গরম হওয়া, ফ্যানে ধুলো জমা — আমরা দিই ফুল হার্ডওয়্যার ক্লিনিং সার্ভিস।
                        </p>
                        <div class="flex items-end justify-between mt-auto">
                            <span class="font-bold text-gray-800 dark:text-white">৳৬০০+</span>
                            <button class="text-sm bg-purple-600 hover:bg-purple-700 text-white px-4 py-1.5 rounded">বুক করুন</button>
                        </div>
                    </div>

                    <!-- সফটওয়্যার সেটআপ -->
                    <div class="rounded-lg border p-4 dark:bg-gray-800 dark:border-white/10 bg-white  hover:shadow-md transition">
                        <div class="flex items-center gap-4 mb-3">
                            <div class="size-10 flex items-center justify-center rounded-lg bg-gray-100 text-gray-600">
                                <i class="ti ti-settings-code text-2xl"></i>
                            </div>
                            <h3 class="text-lg font-semibold text-gray-800 dark:text-white">সফটওয়্যার সেটআপ</h3>
                        </div>
                        <p class="text-sm text-gray-600 dark:text-gray-400 mb-3">
                            Windows, Office, গ্রাফিক্স টুলস, ড্রাইভারসহ সব সফটওয়্যার ইনস্টল করি নির্ভরতায়।
                        </p>
                        <div class="flex items-end justify-between mt-auto">
                            <span class="font-bold text-gray-800 dark:text-white">৳৪৫০+</span>
                            <button class="text-sm bg-gray-700 hover:bg-gray-800 text-white px-4 py-1.5 rounded">বুক করুন</button>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <x-shared.footer />
    </div>
</body>

</html>