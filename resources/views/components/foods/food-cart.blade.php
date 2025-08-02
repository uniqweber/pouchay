    <div class="w-full  p-4 border dark:bg-gray-800 dark:border-white/10 rounded-lg bg-white shadow-sm">
        <!-- Cart Header -->
        <h2 class="text-xl dark:text-white font-bold mb-4">আপনার অর্ডার</h2>

        <!-- Cart Item -->
        <div class="flex items-center gap-4 mb-4 border-b dark:border-white/10 pb-4">
            <img src="/foods/item-1.jpg" alt="চিকেন বিরিয়ানি" class="w-16 h-16 rounded object-cover" />
            <div class="flex-1">
                <h4 class="font-semibold dark:text-white text-sm">চিকেন বিরিয়ানি</h4>
                <div class="text-xs text-gray-500">৳ ২০০ × ২</div>
            </div>
            <div class="flex items-center gap-2">
                <button class="px-2 py-1 bg-gray-200 text-sm rounded">-</button>
                <span class="dark:text-white">২</span>
                <button class="px-2 py-1 bg-gray-200 text-sm rounded">+</button>
            </div>
            <span class="font-semibold text-sm dark:text-white">৳ ৪০০</span>
        </div>


        <!-- Price Summary -->
        <div class="space-y-2 dark:text-gray-400 text-sm text-gray-700">
            <div class="flex justify-between">
                <span>সাবটোটাল</span>
                <span>৳ ৪০০</span>
            </div>
            <div class="flex justify-between">
                <span>ডেলিভারি ফি</span>
                <span>৳ ৫০</span>
            </div>
            <div class="flex justify-between font-semibold dark:border-white/10 border-t pt-2">
                <span>মোট</span>
                <span>৳ ৪৫০</span>
            </div>
        </div>

        <!-- Checkout Button -->
        <button class="w-full mt-4 bg-rose-500 hover:bg-rose-600 text-white font-semibold py-2 rounded">
            চেকআউট করুন
        </button>
    </div>