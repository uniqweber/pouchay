 <form class="space-y-8 md:col-span-8">
     <div class="relative space-y-8">
         <div>
             <h3 class="mb-4 flex items-center text-lg font-semibold text-gray-900">
                 <div class="bg-white">
                     <div class="relative z-10 mr-3 flex size-7 items-center justify-center rounded-full border bg-white text-gray-600">
                         <i class="ti ti-user"></i>
                     </div>
                 </div>
                 প্রেরকের তথ্য
             </h3>
             <div class="mx-10 grid gap-4 md:grid-cols-2">
                 <div>
                     <label for="sender-name" class="label">পুরো নাম *</label>
                     <input type="text" name="sender-name" id="sender-name" placeholder="আপনার পুরো নাম লিখুন" class="input">
                 </div>
                 <div>
                     <label for="sender-phone" class="label">ফোন নম্বর *</label>
                     <input type="tel" name="sender-phone" id="sender-phone" placeholder="আপনার ফোন নম্বর লিখুন" class="input">
                 </div>
                 <div>
                     <label for="sender-email" class="label">ইমেল (ঐচ্ছিক)</label>
                     <input type="email" name="sender-email" id="sender-email" placeholder="আপনার ইমেল ঠিকানা লিখুন" class="input">
                 </div>
                 <div>
                     <label for="sender-address" class="label">পিকআপ ঠিকানা *</label>
                     <input type="text" name="sender-address" id="sender-address" placeholder="পিকআপের ঠিকানা লিখুন" class="input">
                 </div>

             </div>
         </div>
         <div>
             <h3 class="mb-4 flex items-center text-lg font-semibold text-gray-900">
                 <div class="bg-white">
                     <div class="relative z-10 mr-3 flex size-7 items-center justify-center rounded-full border bg-white text-gray-600">
                         <i class="ti ti-map-pin"></i>
                     </div>
                 </div>
                 প্রাপকের তথ্য
             </h3>
             <div class="mx-10 grid gap-4 md:grid-cols-2">
                 <div>
                     <label for="reciever-name" class="label">পুরো নাম *</label>
                     <input type="text" name="reciever-name" id="reciever-name" placeholder="প্রাপকের পুরো নাম লিখুন" class="input">
                 </div>
                 <div>
                     <label for="reciever-phone" class="label">ফোন নম্বর *</label>
                     <input type="tel" name="reciever-phone" id="reciever-phone" placeholder="প্রাপকের ফোন নম্বর লিখুন" class="input">
                 </div>
                 <div>
                     <label for="reciever-email" class="label">ইমেল (ঐচ্ছিক)</label>
                     <input type="email" name="reciever-email" id="reciever-email" placeholder="প্রাপকের ইমেল ঠিকানা লিখুন" class="input">
                 </div>
                 <div>
                     <label for="reciever-address" class="label">ডেলিভারির ঠিকানা *</label>
                     <input type="text" name="reciever-address" id="reciever-address" placeholder="ডেলিভারির ঠিকানা লিখুন" class="input">
                 </div>
             </div>
         </div>
         <div>
             <h3 class="mb-4 flex items-center text-lg font-semibold text-gray-900">
                 <div class="bg-white">
                     <div class="relative z-10 mr-3 flex size-7 items-center justify-center rounded-full border bg-white text-gray-600">
                         <i class="ti ti-package"></i>
                     </div>
                 </div>
                 পার্সেলের বিবরণ
             </h3>
             <div class="mx-10 grid gap-4 ">
                 <div>
                     <label for="parcel-type" class="label"> পার্সেলের ধরন *</label>
                     <div class="relative">
                         <select name="parcel-type" id="parcel-type" class="input first:text-[#909090] appearance-none">
                             <option value="" disabled selected hidden>
                                 পার্সেলের ধরন বেছে নিন
                             </option>
                             <option value="document">ডকুমেন্ট</option>
                             <option value="parcel">পার্সেল</option>
                             <option value="gift">গিফট</option>
                             <option value="clothing">কাপড়</option>
                             <option value="shoes">জুতা</option>
                             <option value="electronics">ইলেকট্রনিক্স</option>
                             <option value="books">বই</option>
                             <option value="cosmetics">কসমেটিক্স</option>
                             <option value="medicine">ঔষধ</option>
                             <option value="food">খাদ্য</option>
                             <option value="flora">ফ্লোরা</option>
                             <option value="decoration">সজ্জা</option>
                             <option value="other">অন্যান্য</option>
                         </select>
                         <i class="ti ti-selector absolute right-2 top-2.5 text-gray-600"></i>
                     </div>
                 </div>
                 <div>
                     <label for="delivery-description" class="label"> পার্সেলের বর্ণনা (ঐচ্ছিক) </label>
                     <textarea name="delivery-description" id="delivery-description" class="textarea" placeholder="পার্সেল সম্পর্কে আপনার নির্দেশনা... "></textarea>
                 </div>
             </div>
         </div>
         <div>
             <h3 class="mb-4 flex items-center text-lg font-semibold text-gray-900">
                 <div class="bg-white">
                     <div class="relative z-10 mr-3 flex size-7 items-center justify-center rounded-full border bg-white text-gray-600">
                         <i class="ti ti-truck"></i>
                     </div>
                 </div>
                 ডেলিভারির পদ্ধতি
             </h3>
             <div class="mx-10 grid gap-4 md:grid-cols-2">
                 <div>
                     <label for="parcel-type" class="label"> সরবরাহের গতি *</label>
                     <div class="relative">
                         <select name="parcel-type" id="parcel-type" class="input first:text-[#909090] appearance-none">
                             <option value="" disabled selected hidden>
                                 সরবরাহের গতি বেছে নিন
                             </option>
                             <option value="">
                                 এক্সপ্রেস ডেলিভারি (২-৪ ঘন্টার মধ্যে (নির্ধারিত এলাকা))
                             </option>
                             <option value="">
                                 স্ট্যান্ডার্ড ডেলিভারি (৪৮-৭২ ঘন্টার মধ্যে)
                             </option>
                         </select>
                         <i class="ti ti-selector absolute right-2 top-2.5 text-gray-600"></i>
                     </div>
                 </div>
                 <div>
                     <label for="parcel-type" class="label"> পিকআপ সময় *</label>
                     <div class="relative">
                         <select name="parcel-type" id="parcel-type" class="input first:text-[#909090] appearance-none">
                             <option value="" disabled selected hidden>
                                 পিকআপ সময় বেছে নিন
                             </option>
                             <option value="">
                                 সকালের পিকআপ - সকাল ৮:০০ - সকাল ১১:০০
                             </option>
                             <option value="">
                                 দুপুরের পিকআপ - সকাল ১১:০০ - দুপুর ২:০০
                             </option>
                             <option value="">
                                 বিকেলের পিকআপ - দুপুর ২:০০ - বিকেল ৫:০০
                             </option>
                             <option value="">
                                 সন্ধ্যার পিকআপ - বিকেল ৫:০০ - রাত ৮:০০
                             </option>
                             <option value="">
                                 নিজস্ব সময় নির্ধারণ করুন
                             </option>
                         </select>
                         <i class="ti ti-selector absolute right-2 top-2.5 text-gray-600"></i>
                     </div>
                 </div>
                 <div class="md:col-span-2">
                     <label for="delivery-description" class="label"> ডেলিভারির বর্ণনা (ঐচ্ছিক) </label>
                     <textarea name="delivery-description" id="delivery-description" class="textarea" placeholder="ডেলিভারি সম্পর্কে আপনার নির্দেশনা... "></textarea>
                 </div>
             </div>
         </div>
         <div class="mx-10 flex flex-col gap-4 sm:flex-row">
             <button type="submit" class="button bg-emerald-600 text-white w-full">
                 পার্সেল ডেলিভারি বুক করুন
             </button>
         </div>

         <div class="absolute top-2 bottom-0 left-[13px] h-[99%] w-px bg-gray-200"></div>

         <div class="bg-white absolute bottom-0.5">
             <div class="relative z-10 mr-3 flex size-7 items-center justify-center rounded-full border bg-white text-gray-600">
                 <i class="ti ti-arrow-right"></i>
             </div>
         </div>
     </div>


 </form>