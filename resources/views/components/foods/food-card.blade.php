@props(['img'])
<a
    href="/food-details"
    class="block overflow-hidden dark:bg-gray-800 rounded-2xl bg-white dark:border-white/10 border transition-shadow duration-300 hover:shadow-xl">
    <img src="{{ $img }}" alt={food.title} class="h-48 w-full object-cover" />
    <div class="flex h-40 flex-col justify-between p-4">
        <div>
            <h3 class="mb-1 text-xl font-semibold dark:text-white">মাটন তেহারি </h3>
            <p class="text-sm text-gray-500 dark:text-gray-400"> জয়পুরহাটের বিখ্যাত তেহারি সাথে থাকছে অনেক রকম সালাদ  </p>
        </div>
        <div class="mt-4 flex items-center justify-between text-sm text-gray-600 dark:text-gray-400">
            <span><i class="ti ti-star text-yellow-500"></i> ৪.৫ </span>
            <span>৫০০+ অর্ডার হয়েছে</span>
        </div>
    </div>
</a>
