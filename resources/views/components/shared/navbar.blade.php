    <!-- <header class="fixed top-0 w-full bg-white shadow  backdrop-blur-md z-20">
        <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-4">
                <div class="flex items-center space-x-2">
                    <a href="/" class="block">
                        <img src="/pouchay-light.svg" alt="" class="h-9 ">
                    </a>
                </div>

                <nav class="flex space-x-8">
                    <a href="/" class="text-gray-700 hover:text-blue-600 transition-colors">
                        হোম
                    </a>
                    <a href="/wash" class="text-gray-700 hover:text-blue-600 transition-colors">
                        ওয়াশিং
                    </a>
                    <a href="#about" class="text-gray-700 hover:text-blue-600 transition-colors">
                        ইলেকট্রনিক্স
                    </a>
                    <a href="/foods" class="text-gray-700 hover:text-blue-600 transition-colors">
                        খাবার
                    </a>
                    <a href="/parcel" class="text-gray-700 hover:text-blue-600 transition-colors">
                        কুরিয়ার
                    </a>
                </nav>
            </div>
        </div>
    </header> -->


    <header x-data="navbar()">
        <div class="fixed top-0 w-full bg-white shadow backdrop-blur-md z-20">
            <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center py-4">
                    <!-- Logo -->
                    <a href="/" class="block">
                        <img src="/pouchay-light.svg" alt="logo" class="h-9">
                    </a>

                    <!-- Desktop Center -->
                    <div class="hidden md:flex items-center space-x-4">
                        <!-- Location -->
                        <div class="relative">
                            <button @click="toggleLocation" class="flex items-center text-gray-600 hover:text-blue-600 text-sm">
                                <i class="ti ti-map-pin mr-1"></i>
                                <span x-text="selectedLocation"></span>
                            </button>
                            <div x-show="showLocationDropdown" @click.away="showLocationDropdown = false"
                                class="absolute left-0 mt-2 w-40 bg-white border rounded shadow z-30">
                                <template x-for="loc in locations" :key="loc">
                                    <div @click="selectLocation(loc)" class="px-4 py-2 hover:bg-blue-100 cursor-pointer" x-text="loc"></div>
                                </template>
                            </div>
                        </div>

                        <!-- Search -->
                        <div class="relative">
                            <input type="text" placeholder="সার্চ করুন..."
                                x-model="searchQuery"
                                @focus="showFiltered = true"
                                @blur="setTimeout(() => showFiltered = false, 200)"
                                class="w-64 px-3 py-1.5 rounded-full border border-gray-300 text-sm focus:ring focus:ring-blue-200">

                            <!-- Dropdown w/ icons -->
                            <div x-show="showFiltered" class="absolute left-0 w-full mt-1 bg-white border rounded shadow z-30">
                                <template x-for="link in filteredLinks" :key="link.text">
                                    <a :href="link.href"
                                        class="flex items-center gap-2 px-4 py-2 text-gray-700 hover:bg-blue-100 transition-colors">
                                        <i :class="link.icon"></i>
                                        <span x-text="link.text"></span>
                                    </a>
                                </template>
                            </div>
                        </div>
                    </div>

                    <!-- Right Icons -->
                    <div class="flex items-center space-x-4 md:space-x-6">
                        <a href="/account" class="text-gray-600 hover:text-blue-600 text-xl"><i class="ti ti-user"></i></a>
                        <a href="/cart" class="relative text-gray-600 hover:text-blue-600 text-xl">
                            <i class="ti ti-shopping-cart"></i>
                            <span class="absolute -top-2 -right-2 bg-red-500 text-white text-xs rounded-full px-1.5 py-0.5">2</span>
                        </a>
                        <button @click="toggleMobileMenu" class="md:hidden text-gray-600 hover:text-blue-600 text-2xl">
                            <i class="ti ti-menu-2"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- ✅ Mobile Drawer: full screen, left slide -->
        <div x-show="mobileMenuOpen" x-transition:enter="transition-transform duration-300"
            x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0"
            x-transition:leave="transition-transform duration-200"
            x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full"
            class="fixed inset-0 bg-white z-50 p-6 flex flex-col space-y-4 md:hidden overflow-y-auto">

            <!-- Close -->
            <div class="flex justify-end">
                <button @click="toggleMobileMenu" class="text-gray-500 hover:text-red-500 text-2xl">
                    <i class="ti ti-x"></i>
                </button>
            </div>

            <!-- Search -->
            <div>
                <input type="text" placeholder="সার্চ করুন..."
                    x-model="searchQuery"
                    @focus="showFiltered = true"
                    @blur="setTimeout(() => showFiltered = false, 200)"
                    class="w-full px-4 py-2 border rounded-full text-sm focus:outline-none focus:ring">

                <div x-show="showFiltered" class="mt-2 bg-white border rounded shadow">
                    <template x-for="link in filteredLinks" :key="link.text">
                        <a :href="link.href"
                            class="flex items-center gap-2 px-4 py-2 hover:bg-blue-100 text-gray-800">
                            <i :class="link.icon"></i>
                            <span x-text="link.text"></span>
                        </a>
                    </template>
                </div>
            </div>

            <!-- Location Popup Trigger -->
            <button @click="showLocationPopup = true"
                class="w-full flex items-center justify-start text-gray-600 hover:text-blue-600">
                <i class="ti ti-map-pin mr-2"></i>
                <span x-text="selectedLocation"></span>
            </button>

            <!-- Mobile Nav Links -->
            <div class="flex flex-col space-y-2 mt-4">
                <template x-for="link in navLinks" :key="link.text">
                    <a :href="link.href" class="flex items-center gap-2 text-gray-700 hover:text-blue-600">
                        <i :class="link.icon"></i>
                        <span x-text="link.text"></span>
                    </a>
                </template>
            </div>
        </div>

        <!-- Location Modal -->
        <div x-show="showLocationPopup" x-transition
            class="fixed inset-0 bg-black bg-opacity-30 z-50 flex items-center justify-center">
            <div class="bg-white p-6 rounded shadow-md w-72">
                <h2 class="text-lg font-semibold mb-4">লোকেশন বাছাই করুন</h2>
                <template x-for="loc in locations" :key="loc">
                    <div @click="selectLocation(loc); showLocationPopup = false"
                        class="px-4 py-2 hover:bg-blue-100 cursor-pointer"
                        x-text="loc"></div>
                </template>
            </div>
        </div>
    </header>


    <script>
        function navbar() {
            return {
                searchQuery: '',
                showFiltered: false,
                showLocationDropdown: false,
                showLocationPopup: false,
                mobileMenuOpen: false,
                selectedLocation: 'ঢাকা',
                locations: ['ঢাকা', 'চট্টগ্রাম', 'রাজশাহী', 'খুলনা', 'সিলেট'],
                navLinks: [{
                        text: 'হোম',
                        href: '/',
                        icon: 'ti ti-home'
                    },
                    {
                        text: 'ওয়াশিং',
                        href: '/wash',
                        icon: 'ti ti-wash-dry'
                    },
                    {
                        text: 'ইলেকট্রনিক্স',
                        href: '#about',
                        icon: 'ti ti-device-laptop'
                    },
                    {
                        text: 'খাবার',
                        href: '/foods',
                        icon: 'ti ti-bowl'
                    },
                    {
                        text: 'কুরিয়ার',
                        href: '/parcel',
                        icon: 'ti ti-truck'
                    },
                ],
                toggleLocation() {
                    this.showLocationDropdown = !this.showLocationDropdown;
                },
                toggleMobileMenu() {
                    this.mobileMenuOpen = !this.mobileMenuOpen;
                },
                selectLocation(loc) {
                    this.selectedLocation = loc;
                    this.showLocationDropdown = false;
                    this.showLocationPopup = false;
                },
                get filteredLinks() {
                    if (!this.searchQuery.trim()) return this.navLinks;
                    return this.navLinks.filter(link =>
                        link.text.toLowerCase().includes(this.searchQuery.toLowerCase())
                    );
                }
            }
        }
    </script>