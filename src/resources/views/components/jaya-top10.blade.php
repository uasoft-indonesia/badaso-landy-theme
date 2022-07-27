    <div class="px-4 lg:px-0">
    <div class="text-[20px] leading-7 md:text-xl border-t-4 border-green-500 text-center mb-3 font-bold text-green-500 pt-[10px] lg:pt-4">Top News</div>
    <div class="w-full border-t border-gray-300"></div>

{{-- top news --}}
<div class="grid gap-2 mb-8 divide-y" x-data="loadDataSidebar(),no=1" x-init="loadTop()">
    <template x-for="post in posts">
    <div class="grid grid-cols-8 items-center pt-2">
        <div class="col-span-1 lg:col-span-2">
            <div class="user-img overflow-hidden mr-4">
                <div class="text-lg sm:text-3xl lg:text-[40px] lg:leading-[48px] text-center  text-black cursor-pointer font-bold align-middle" x-text="no++">1</div>
            </div>
        </div>
        <div class="col-span-7 lg:col-span-6">
            <a class="text-[10px] leading-3 sm:text-base font-normal hover:text-green-700 cursor-pointer align-middle" :href="'{{route('badaso.jaya-theme.detail','')}}'+'/'+ post.slug" x-text="post.title"> 6 Tersangka Pengeroyok Ade Armando Bukan Mahasiswa</a>
        </div>
    </div>
    </template>

</div>
</div>









