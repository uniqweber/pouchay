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
</head>

<body class="font-noto-bengali">

    <div class="min-h-screen bg-white">
        <x-shared.navbar />

        <section id="home" class="pt-36 pb-20 bg-white ">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <div class="space-y-8">
                        <div class="space-y-4">
                            <h1 class="text-4xl md:text-6xl font-bold text-gray-900 leading-tight">
                                আপনার সকল
                                <span class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">

                                    সেবার
                                </span>
                                একটি ঠিকানা
                            </h1>
                            <p class="text-xl text-gray-600 leading-relaxed">
                                গাড়ি-বাইক ধোয়া থেকে শুরু করে ইলেকট্রনিক্স মেরামত, এসি সার্ভিস এবং খাবার ডেলিভারি - সব কিছুর জন্য আমরা আছি আপনার পাশে।
                            </p>
                        </div>

                        <div class="flex flex-col sm:flex-row gap-4">
                            <button class="px-8 py-4 bg-gradient-to-r from-blue-600 to-purple-600 text-white rounded-xl font-semibold hover:shadow-lg transform hover:-translate-y-1 transition-all duration-300">
                                সেবা নিন এখনই
                            </button>
                            <button class="px-8 py-4 border-2 border-gray-300 text-gray-700 rounded-xl font-semibold hover:border-blue-600 hover:text-blue-600 transition-colors">
                                আরও জানুন
                            </button>
                        </div>

                        <div class="flex items-center space-x-8">
                            <div class="text-center">
                                <div class="text-3xl font-bold text-blue-600">১০০০+</div>
                                <div class="text-gray-600">সন্তুষ্ট গ্রাহক</div>
                            </div>
                            <div class="text-center">
                                <div class="text-3xl font-bold text-purple-600">২৪/৭</div>
                                <div class="text-gray-600">সেবা প্রদান</div>
                            </div>
                            <div class="text-center">
                                <div class="text-3xl font-bold text-green-600">৯৮%</div>
                                <div class="text-gray-600">সফলতার হার</div>
                            </div>
                        </div>
                    </div>

                    <div class="relative">
                        <div class="relative z-10">
                            <img
                                src="https://www.fastcourierservicebd.com/wp-content/uploads/2020/11/air-freight-courier-service-500x500-1.jpeg"
                                alt="সেবা প্রদানকারী"
                                class="w-full h-auto " />
                        </div>
                        <div class="absolute -top-4 -right-4 w-full h-full bg-gradient-to-br from-blue-200 to-purple-200 rounded-2xl -z-10"></div>
                    </div>
                </div>
            </div>
        </section>

        <section id="services" class="py-20 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-bold text-gray-900 mb-4">আমাদের সেবাসমূহ</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                        আমরা বিভিন্ন ধরনের সেবা প্রদান করি যা আপনার দৈনন্দিন জীবনকে আরও সহজ করে তুলবে
                    </p>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <div class="group p-8 bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                        <div class="w-16 h-16 bg-blue-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                            <i class="ti ti-car text-4xl text-white"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">গাড়ি ও বাইক ধোয়া</h3>
                        <p class="text-gray-600">পেশাদার গাড়ি ও বাইক ধোয়ার সেবা আপনার বাড়িতেই</p>
                    </div>

                    <div class="group p-8 bg-gradient-to-br from-purple-50 to-purple-100 rounded-2xl hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                        <div class="w-16 h-16 bg-purple-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                            <i class="ti ti-device-mobile text-4xl text-white"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">ইলেকট্রনিক্স সার্ভিস</h3>
                        <p class="text-gray-600">মোবাইল, ল্যাপটপ এবং অন্যান্য ইলেকট্রনিক্স মেরামত</p>
                    </div>

                    <div class="group p-8 bg-gradient-to-br from-green-50 to-green-100 rounded-2xl hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                        <div class="w-16 h-16 bg-green-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                            <i class="ti ti-air-conditioning text-4xl text-white"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">এসি সার্ভিস</h3>
                        <p class="text-gray-600">এয়ার কন্ডিশনার ইনস্টলেশন, মেরামত ও রক্ষণাবেক্ষণ</p>
                    </div>

                    <div class="group p-8 bg-gradient-to-br from-orange-50 to-orange-100 rounded-2xl hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                        <div class="w-16 h-16 bg-orange-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                            <i class="ti ti-chef-hat text-4xl text-white"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">খাবার ডেলিভারি</h3>
                        <p class="text-gray-600">তাজা ও স্বাস্থ্যকর খাবার দ্রুত ডেলিভারি</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-20 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <div class="space-y-8">
                        <div class="space-y-4">
                            <h2 class="text-4xl font-bold text-gray-900">গাড়ি ও বাইক ধোয়ার সেবা</h2>
                            <p class="text-lg text-gray-600">
                                আমাদের পেশাদার টিম আপনার গাড়ি ও বাইককে নতুনের মতো পরিষ্কার করে দেবে। আমরা ব্যবহার করি উন্নত মানের পণ্য এবং আধুনিক
                                যন্ত্রপাতি।
                            </p>
                        </div>

                        <div class="grid sm:grid-cols-2 gap-6">
                            <div class="flex items-start space-x-3">
                                <i class="ti ti-circle-check text-2xl mt-1"></i>
                                <div>
                                    <h4 class="font-semibold text-gray-900">বাহ্যিক ধোয়া</h4>
                                    <p class="text-gray-600">সম্পূর্ণ বাহ্যিক পরিষ্কার</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-3">
                                <i class="ti ti-circle-check text-2xl mt-1"></i>
                                <div>
                                    <h4 class="font-semibold text-gray-900">অভ্যন্তরীণ পরিষ্কার</h4>
                                    <p class="text-gray-600">ভিতরের সম্পূর্ণ পরিষ্কার</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-3">
                                <i class="ti ti-circle-check text-2xl mt-1"></i>
                                <div>
                                    <h4 class="font-semibold text-gray-900">ওয়াক্স পলিশ</h4>
                                    <p class="text-gray-600">চকচকে ফিনিশিং</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-3">
                                <i class="ti ti-circle-check text-2xl mt-1"></i>
                                <div>
                                    <h4 class="font-semibold text-gray-900">হোম সার্ভিস</h4>
                                    <p class="text-gray-600">আপনার বাড়িতেই সেবা</p>
                                </div>
                            </div>
                        </div>

                        <button class="px-8 py-4 bg-blue-600 text-white rounded-xl font-semibold hover:bg-blue-700 transition-colors">
                            এখনই বুক করুন
                        </button>
                    </div>

                    <div class="relative">
                        <img
                            src="https://t4.ftcdn.net/jpg/05/32/36/47/360_F_532364753_omUq9svJRBVjZNyCgkf8bxF4zFOJUpjf.jpg"
                            alt="গাড়ি ও বাইক ধোয়া"
                            class="w-full h-auto " />
                    </div>
                </div>
            </div>
        </section>

        <section class="py-20 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <div class="relative order-2 lg:order-1">
                        <img
                            src="https://static.vecteezy.com/system/resources/previews/008/018/269/non_2x/computer-repair-or-service-flat-cartoon-illustration-with-tools-repairman-electronics-for-for-data-recovery-center-and-crash-on-pc-vector.jpg"
                            alt="ইলেকট্রনিক্স সার্ভিস"
                            class="w-full h-auto " />
                    </div>

                    <div class="space-y-8 order-1 lg:order-2">
                        <div class="space-y-4">
                            <h2 class="text-4xl font-bold text-gray-900">ইলেকট্রনিক্স সার্ভিস</h2>
                            <p class="text-lg text-gray-600">
                                আপনার মোবাইল, ল্যাপটপ, কম্পিউটার এবং অন্যান্য ইলেকট্রনিক্স ডিভাইসের যেকোনো সমস্যার সমাধান আমাদের কাছে।
                            </p>
                        </div>

                        <div class="space-y-4">
                            <div class="flex items-center space-x-4 p-4 bg-purple-50 rounded-xl">
                                <i class="ti ti-device-mobile text-3xl text-purple-600"></i>
                                <div>
                                    <h4 class="font-semibold text-gray-900">মোবাইল মেরামত</h4>
                                    <p class="text-gray-600">স্ক্রিন, ব্যাটারি, চার্জিং পোর্ট</p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-4 p-4 bg-purple-50 rounded-xl">
                                <i class="ti ti-device-laptop text-3xl text-purple-600"></i>
                                <div>
                                    <h4 class="font-semibold text-gray-900">ল্যাপটপ সার্ভিস</h4>
                                    <p class="text-gray-600">হার্ডওয়্যার ও সফটওয়্যার সমস্যা</p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-4 p-4 bg-purple-50 rounded-xl">
                                <i class="ti ti-bolt text-3xl text-purple-600"></i>
                                <div>
                                    <h4 class="font-semibold text-gray-900">দ্রুত সেবা</h4>
                                    <p class="text-gray-600">২৪ ঘন্টার মধ্যে সমাধান</p>
                                </div>
                            </div>
                        </div>

                        <button class="px-8 py-4 bg-purple-600 text-white rounded-xl font-semibold hover:bg-purple-700 transition-colors">
                            সেবা নিন
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-20 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <div class="space-y-8">
                        <div class="space-y-4">
                            <h2 class="text-4xl font-bold text-gray-900">এসি সার্ভিস ও মেরামত</h2>
                            <p class="text-lg text-gray-600">
                                গরমের দিনে আপনার এয়ার কন্ডিশনার যেন সবসময় ঠিকমতো কাজ করে, সেজন্য আমাদের রয়েছে অভিজ্ঞ টেকনিশিয়ান টিম।
                            </p>
                        </div>

                        <div class="grid sm:grid-cols-2 gap-4">
                            <div class="p-6 bg-white rounded-xl shadow-sm">
                                <i class="ti ti-air-conditioning text-4xl text-green-600 "></i>
                                <h4 class="font-semibold text-gray-900 mt-2">ইনস্টলেশন</h4>
                                <p class="text-gray-600">নতুন এসি বসানো</p>
                            </div>
                            <div class="p-6 bg-white rounded-xl shadow-sm">
                                <i class="ti ti-thermometer text-4xl text-green-600 "></i>
                                <h4 class="font-semibold text-gray-900 mt-2">মেরামত</h4>
                                <p class="text-gray-600">যেকোনো সমস্যার সমাধান</p>
                            </div>
                            <div class="p-6 bg-white rounded-xl shadow-sm">
                                <i class="ti ti-shield-check text-4xl text-green-600 "></i>
                                <h4 class="font-semibold text-gray-900 mt-2">রক্ষণাবেক্ষণ</h4>
                                <p class="text-gray-600">নিয়মিত সার্ভিসিং</p>
                            </div>
                            <div class="p-6 bg-white rounded-xl shadow-sm">
                                <i class="ti ti-clock text-4xl text-green-600 "></i>
                                <h4 class="font-semibold text-gray-900 mt-2">জরুরি সেবা</h4>
                                <p class="text-gray-600">২৪/৭ জরুরি সেবা</p>
                            </div>
                        </div>

                        <button class="px-8 py-4 bg-green-600 text-white rounded-xl font-semibold hover:bg-green-700 transition-colors">
                            এসি সার্ভিস বুক করুন
                        </button>
                    </div>

                    <div class="relative">
                        <img
                            src="https://static.vecteezy.com/system/resources/previews/036/877/780/non_2x/hvac-service-cartoon-character-design-illustration-vector.jpg"
                            alt="এসি সার্ভিস"
                            class="w-full h-auto " />
                    </div>
                </div>
            </div>
        </section>

        <section class="py-20 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <div class="relative order-2 lg:order-1">
                        <img
                            src="https://img.freepik.com/premium-vector/food-delivery-driver-cartoon-set-isolated-white-background-food-delivery-driver-cartoon-set_542607-2866.jpg"
                            alt="খাবার ডেলিভারি"
                            class="w-full h-auto " />
                    </div>

                    <div class="space-y-8 order-1 lg:order-2">
                        <div class="space-y-4">
                            <h2 class="text-4xl font-bold text-gray-900">খাবার ডেলিভারি সেবা</h2>
                            <p class="text-lg text-gray-600">
                                তাজা, স্বাস্থ্যকর এবং সুস্বাদু খাবার আপনার দোরগোড়ায় পৌঁছে দিই আমরা। অর্ডার করুন এবং উপভোগ করুন।
                            </p>
                        </div>

                        <div class="space-y-6">
                            <div class="flex items-start space-x-4">
                                <div class="w-12 h-12 bg-orange-100 rounded-xl flex items-center justify-center">
                                    <i class="ti ti-tools-kitchen text-2xl text-orange-600 "></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900 mb-1">বিভিন্ন ধরনের খাবার</h4>
                                    <p class="text-gray-600">বাংলা, চাইনিজ, ফাস্ট ফুড এবং স্বাস্থ্যকর খাবার</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-4">
                                <div class="w-12 h-12 bg-orange-100 rounded-xl flex items-center justify-center">
                                    <i class="ti ti-truck text-2xl text-orange-600 "></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900 mb-1">দ্রুত ডেলিভারি</h4>
                                    <p class="text-gray-600">৩০-৪৫ মিনিটের মধ্যে আপনার কাছে পৌঁছে যাবে</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-4">
                                <div class="w-12 h-12 bg-orange-100 rounded-xl flex items-center justify-center">
                                    <i class="ti ti-heart text-2xl text-orange-600 "></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900 mb-1">তাজা ও স্বাস্থ্যকর</h4>
                                    <p class="text-gray-600">সব খাবার তাজা উপাদান দিয়ে তৈরি</p>
                                </div>
                            </div>
                        </div>

                        <button class="px-8 py-4 bg-orange-600 text-white rounded-xl font-semibold hover:bg-orange-700 transition-colors">
                            অর্ডার করুন
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <section id="about" class="py-20 bg-gradient-to-br from-gray-50 to-blue-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-bold text-gray-900 mb-4">কেন আমাদের বেছে নেবেন?</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                        আমরা গুণগত সেবা প্রদানে প্রতিশ্রুতিবদ্ধ এবং গ্রাহক সন্তুষ্টিই আমাদের প্রধান লক্ষ্য
                    </p>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="text-center p-8 bg-white rounded-2xl shadow-lg hover:shadow-xl transition-shadow">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6">
                            <i class="ti ti-users text-2xl text-blue-600 "></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-4">অভিজ্ঞ টিম</h3>
                        <p class="text-gray-600">আমাদের রয়েছে দক্ষ ও অভিজ্ঞ পেশাদার টিম যারা সর্বোচ্চ মানের সেবা প্রদান করে</p>
                    </div>

                    <div class="text-center p-8 bg-white rounded-2xl shadow-lg hover:shadow-xl transition-shadow">
                        <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6">
                            <i class="ti ti-clock text-2xl text-green-600 "></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-4">সময়ানুবর্তিতা</h3>
                        <p class="text-gray-600">আমরা সময়ের প্রতি অত্যন্ত সচেতন এবং নির্ধারিত সময়ে সেবা প্রদান করি</p>
                    </div>

                    <div class="text-center p-8 bg-white rounded-2xl shadow-lg hover:shadow-xl transition-shadow">
                        <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-6">
                            <i class="ti ti-shield text-2xl text-purple-600 "></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-4">নির্ভরযোগ্যতা</h3>
                        <p class="text-gray-600">আমাদের সেবার মান ও নির্ভরযোগ্যতার জন্য আমরা পরিচিত এবং গ্রাহকদের আস্থাভাজন</p>
                    </div>

                    <div class="text-center p-8 bg-white rounded-2xl shadow-lg hover:shadow-xl transition-shadow">
                        <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-6">
                            <i class="ti ti-star text-2xl text-orange-600 "></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-4">উন্নত মান</h3>
                        <p class="text-gray-600">আমরা সর্বদা উন্নত মানের পণ্য ও সেবা প্রদান করি যা আপনার প্রত্যাশা পূরণ করবে</p>
                    </div>

                    <div class="text-center p-8 bg-white rounded-2xl shadow-lg hover:shadow-xl transition-shadow">
                        <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-6">
                            <i class="ti ti-heart text-2xl text-red-600 "></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-4">গ্রাহক সেবা</h3>
                        <p class="text-gray-600">আমাদের গ্রাহক সেবা টিম ২৪/৭ আপনার সেবায় নিয়োজিত এবং যেকোনো সমস্যার সমাধান করে</p>
                    </div>

                    <div class="text-center p-8 bg-white rounded-2xl shadow-lg hover:shadow-xl transition-shadow">
                        <div class="w-16 h-16 bg-teal-100 rounded-full flex items-center justify-center mx-auto mb-6">
                            <i class="ti ti-bolt text-2xl text-teal-600 "></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-4">দ্রুত সেবা</h3>
                        <p class="text-gray-600">আমরা দ্রুততম সময়ে সেবা প্রদান করি এবং জরুরি প্রয়োজনে তাৎক্ষণিক সেবা দিই</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact" class="py-20 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-bold text-gray-900 mb-4">যোগাযোগ করুন</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">আমাদের সাথে যোগাযোগ করুন এবং আপনার প্রয়োজনীয় সেবা নিন</p>
                </div>

                <div class="grid lg:grid-cols-2 gap-12">
                    <div class="space-y-8">
                        <div class="space-y-6">
                            <div class="flex items-start space-x-4">
                                <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center">
                                    <i class="ti ti-phone text-2xl text-blue-600 "></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900 mb-2">ফোন নম্বর</h4>
                                    <p class="text-gray-600">+৮৮০ ১৭১২-৩৪৫৬৭৮</p>
                                    <p class="text-gray-600">+৮৮০ ১৯১২-৩৪৫৬৭৮</p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-4">
                                <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center">
                                    <i class="ti ti-mail text-2xl text-green-600 "></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900 mb-2">ইমেইল</h4>
                                    <p class="text-gray-600">info@servicepro.com</p>
                                    <p class="text-gray-600">support@servicepro.com</p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-4">
                                <div class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center">
                                    <i class="ti ti-map-pin text-2xl text-purple-600 "></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900 mb-2">ঠিকানা</h4>
                                    <p class="text-gray-600">১২৩, গুলশান এভিনিউ</p>
                                    <p class="text-gray-600">ঢাকা-১২১২, বাংলাদেশ</p>
                                </div>
                            </div>
                        </div>

                        <div class="p-6 bg-gradient-to-r from-blue-50 to-purple-50 rounded-2xl">
                            <h4 class="font-semibold text-gray-900 mb-4">কাজের সময়</h4>
                            <div class="space-y-2 text-gray-600">
                                <p>সোমবার - শুক্রবার: সকাল ৮টা - রাত ১০টা</p>
                                <p>শনিবার - রবিবার: সকাল ৯টা - রাত ৯টা</p>
                                <p class="text-blue-600 font-semibold">জরুরি সেবা: ২৪/৭ উপলব্ধ</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-gray-50 p-8 rounded-2xl">
                        <h3 class="text-2xl font-bold text-gray-900 mb-6">আমাদের বার্তা পাঠান</h3>
                        <form class="space-y-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">আপনার নাম</label>
                                <input
                                    type="text"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                    placeholder="আপনার পূর্ণ নাম লিখুন" />
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">ফোন নম্বর</label>
                                <input
                                    type="tel"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                    placeholder="আপনার ফোন নম্বর" />
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">সেবার ধরন</label>
                                <select class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                    <option>গাড়ি ও বাইক ধোয়া</option>
                                    <option>ইলেকট্রনিক্স সার্ভিস</option>
                                    <option>এসি সার্ভিস</option>
                                    <option>খাবার ডেলিভারি</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">বার্তা</label>
                                <textarea
                                    rows={4}
                                    class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                    placeholder="আপনার প্রয়োজন সম্পর্কে বিস্তারিত লিখুন"></textarea>
                            </div>
                            <button
                                type="submit"
                                class="w-full px-8 py-4 bg-gradient-to-r from-blue-600 to-purple-600 text-white rounded-xl font-semibold hover:shadow-lg transform hover:-translate-y-1 transition-all duration-300">
                                বার্তা পাঠান
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <x-shared.footer />
    </div>


</body>

</html>