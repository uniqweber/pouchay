<header x-data="navbar()" x-init="init()">
    <div class="fixed top-0 w-full bg-white dark:bg-gray-900 shadow backdrop-blur-md z-20">
        <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-4">

                <!-- Logo -->
                <a href="/" class="block">
                    <img :src="logoSrc" alt="logo" class="h-8 transition-all">
                </a>

                <!-- Center Block (desktop only) -->
                <div class="hidden md:flex items-center gap-4">
                    <!-- Location -->
                    <button @click="showLocationPopup = true"
                        class="flex items-center text-gray-600 dark:text-gray-200 hover:text-blue-600 text-sm">
                        <i class="ti ti-map-pin mr-1"></i>
                        <span x-text="selectedLocation"></span>
                    </button>

                    <!-- Search -->
                    <div class="relative">
                        <input type="text" placeholder="সার্চ করুন..." x-model="searchQuery"
                            @focus="showFiltered = true"
                            @blur="setTimeout(() => showFiltered = false, 200)"
                            class="w-64 px-3 py-1.5 rounded-full border border-gray-300 dark:border-white/10 text-sm focus:ring focus:ring-blue-200 dark:bg-gray-800 dark:text-white">
                        <div x-show="showFiltered"
                            class="absolute left-0 w-full mt-1 bg-white dark:bg-gray-800 border dark:border-white/10 rounded shadow z-30">
                            <template x-for="link in filteredLinks" :key="link.text">
                                <a :href="link.href"
                                    class="flex items-center gap-2 px-4 py-2 text-gray-700 dark:text-white hover:bg-blue-100 dark:hover:bg-gray-700 transition-colors">
                                    <i :class="link.icon"></i>
                                    <span x-text="link.text"></span>
                                </a>
                            </template>
                        </div>
                    </div>
                </div>

                <!-- Right Icons -->
                <div class="flex items-center gap-3">

                    <!-- Language Dropdown -->
                    <div x-data="langTheme()" class="relative flex items-center gap-3">
                        <!-- Language Button (shows flag only) -->
                        <div class="relative">
                            <button @click="toggleLanguageDropdown" class="text-xl flex items-center gap-1 text-gray-600 dark:text-gray-200 hover:text-blue-600">
                                <i class="ti ti-language"></i>
                                <template x-if="language === 'bn'">
                                    <span class="text-sm">BN</span>
                                </template>
                                <template x-if="language === 'en'">
                                    <span class="text-sm">En</span>
                                </template>
                            </button>
                            <!-- Language Options -->
                            <div
                                x-show="showLanguageDropdown"
                                @click.away="showLanguageDropdown = false"
                                class="absolute right-0 mt-2 w-36 bg-white dark:bg-gray-800 dark:text-white border dark:border-white/10 rounded shadow z-30 text-sm">
                                <div
                                    @click="setLanguage('bn')"
                                    class="flex items-center gap-2 px-4 py-2 cursor-pointer hover:bg-blue-100 dark:hover:bg-gray-700">
                                    <span>🇧🇩 </span>
                                    <span>
                                        বাংলা
                                    </span>
                                </div>
                                <div
                                    @click="setLanguage('en')"
                                    class="flex items-center gap-2 px-4 py-2 cursor-pointer hover:bg-blue-100 dark:hover:bg-gray-700">
                                    <span>🇺🇸 </span>
                                    <span>
                                        English
                                    </span>
                                </div>
                            </div>
                        </div>

                        <!-- Theme Dropdown -->
                        <div class="relative">
                            <button @click="toggleThemeDropdown" class="text-xl flex items-center gap-1 text-gray-600 dark:text-gray-200 hover:text-blue-600">
                                <template x-if="theme === 'system'">
                                    <i class="ti ti-device-desktop"></i>
                                </template>
                                <template x-if="theme === 'light'">
                                    <i class="ti ti-sun"></i>
                                </template>
                                <template x-if="theme === 'dark'">
                                    <i class="ti ti-moon"></i>
                                </template>
                            </button>
                            <div
                                x-show="showThemeDropdown"
                                @click.away="showThemeDropdown = false"
                                class="absolute right-0 mt-2 w-40 bg-white dark:bg-gray-800 border dark:border-white/10 dark:text-white rounded shadow z-30 text-sm">
                                <div
                                    @click="setTheme('system')"
                                    class="flex items-center gap-2 px-4 py-2 cursor-pointer hover:bg-blue-100 dark:hover:bg-gray-700">
                                    <i class="ti ti-device-desktop"></i> System
                                </div>
                                <div
                                    @click="setTheme('light')"
                                    class="flex items-center gap-2 px-4 py-2 cursor-pointer hover:bg-blue-100 dark:hover:bg-gray-700">
                                    <i class="ti ti-sun"></i> Light
                                </div>
                                <div
                                    @click="setTheme('dark')"
                                    class="flex items-center gap-2 px-4 py-2 cursor-pointer hover:bg-blue-100 dark:hover:bg-gray-700">
                                    <i class="ti ti-moon"></i> Dark
                                </div>
                            </div>
                        </div>
                    </div>



                    <!-- Account & Cart -->
                    <a href="/account" class="text-gray-600 dark:text-gray-200 hover:text-blue-600 text-xl"><i class="ti ti-user"></i></a>
                    <a href="/cart" class="relative text-gray-600 dark:text-gray-200 hover:text-blue-600 text-xl">
                        <i class="ti ti-shopping-cart"></i>
                        <span class="absolute -top-2 -right-2 bg-red-500 text-white text-xs rounded-full px-1.5 py-0.5">2</span>
                    </a>

                    <!-- Mobile Menu Trigger -->
                    <button @click="toggleMobileMenu"
                        class="md:hidden text-gray-600 dark:text-gray-200 hover:text-blue-600 text-2xl">
                        <i class="ti ti-menu-2"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile Drawer -->
    <div x-show="mobileMenuOpen" x-transition:enter="transition-transform duration-300"
        x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0"
        x-transition:leave="transition-transform duration-200" x-transition:leave-start="translate-x-0"
        x-transition:leave-end="-translate-x-full"
        class="fixed inset-0 bg-white dark:bg-gray-900 z-50 p-6 flex flex-col space-y-4 md:hidden overflow-y-auto">

        <!-- Close -->
        <div class="flex justify-end">
            <button @click="toggleMobileMenu" class="text-gray-500 dark:text-gray-300 hover:text-red-500 text-2xl">
                <i class="ti ti-x"></i>
            </button>
        </div>

        <!-- Search -->
        <div>
            <input type="text" placeholder="সার্চ করুন..." x-model="searchQuery"
                @focus="showFiltered = true"
                @blur="setTimeout(() => showFiltered = false, 200)"
                class="w-full px-4 py-2 border rounded-full text-sm focus:outline-none focus:ring dark:bg-gray-800 dark:text-white">

            <div x-show="showFiltered" class="mt-2 bg-white dark:bg-gray-800 border rounded shadow">
                <template x-for="link in filteredLinks" :key="link.text">
                    <a :href="link.href"
                        class="flex items-center gap-2 px-4 py-2 hover:bg-blue-100 dark:hover:bg-gray-700 text-gray-800 dark:text-white">
                        <i :class="link.icon"></i>
                        <span x-text="link.text"></span>
                    </a>
                </template>
            </div>
        </div>

        <!-- Location -->
        <button @click="showLocationPopup = true"
            class="w-full flex items-center justify-start text-gray-600 dark:text-gray-200 hover:text-blue-600">
            <i class="ti ti-map-pin mr-2"></i>
            <span x-text="selectedLocation"></span>
        </button>

        <!-- Nav Links -->
        <div class="flex flex-col space-y-2 mt-4">
            <template x-for="link in navLinks" :key="link.text">
                <a :href="link.href" class="flex items-center gap-2 text-gray-700 dark:text-white hover:text-blue-600">
                    <i :class="link.icon"></i>
                    <span x-text="link.text"></span>
                </a>
            </template>
        </div>
    </div>

    <!-- Location Modal -->
    <div x-show="showLocationPopup" x-transition
        class="fixed inset-0 bg-black/30 z-50 flex items-center justify-center">
        <div class="bg-white dark:bg-gray-800 p-6 rounded shadow-md w-72">
            <h2 class="text-lg font-semibold mb-4 text-gray-800 dark:text-white">লোকেশন বাছাই করুন</h2>
            <template x-for="loc in locations" :key="loc">
                <div @click="selectLocation(loc)"
                    class="px-4 py-2 hover:bg-blue-100 dark:hover:bg-gray-700 cursor-pointer text-gray-700 dark:text-white"
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
            showLocationPopup: false,
            mobileMenuOpen: false,
            showThemeDropdown: false,
            theme: localStorage.getItem('theme') || 'system',
            language: 'বাংলা',
            showLanguageDropdown: false,
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

            toggleMobileMenu() {
                this.mobileMenuOpen = !this.mobileMenuOpen;
            },

            toggleThemeDropdown() {
                this.showThemeDropdown = !this.showThemeDropdown;
            },

            setTheme(mode) {
                this.theme = mode;
                localStorage.setItem('theme', mode);
                this.showThemeDropdown = false;
                this.applyTheme();
            },

            applyTheme() {
                const root = document.documentElement;
                if (this.theme === 'light') {
                    root.classList.remove('dark');
                } else if (this.theme === 'dark') {
                    root.classList.add('dark');
                } else {
                    const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
                    root.classList.toggle('dark', prefersDark);
                }
            },

            get logoSrc() {
                if (this.theme === 'light') return '/pouchay-light.svg';
                if (this.theme === 'dark') return '/pouchay-dark.svg';
                const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
                return prefersDark ? '/pouchay-dark.svg' : '/pouchay-light.svg';
            },

            toggleLanguageDropdown() {
                this.showLanguageDropdown = !this.showLanguageDropdown;
            },

            setLanguage(lang) {
                this.language = lang;
                this.showLanguageDropdown = false;
            },

            selectLocation(loc) {
                this.selectedLocation = loc;
                this.showLocationPopup = false;
            },

            get filteredLinks() {
                if (!this.searchQuery.trim()) return this.navLinks;
                return this.navLinks.filter(link =>
                    link.text.toLowerCase().includes(this.searchQuery.toLowerCase())
                );
            },

            init() {
                this.applyTheme();
            }
        }
    }
</script>