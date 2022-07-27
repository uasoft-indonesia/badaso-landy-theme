<div class="bg-base-100 shadow-none mt-4 p-0 ml-4 lg:ml-0 mr-4 lg:mr-0" x-data="postData()" x-init="init()">
    <div class="flex w-full font-karla font-normal text-base">
        <div class="divider divider-horizontal ml-0"></div>
        <div class="user-name-and-place flex flex-col">
            <span  class="text-xs lg:text-base font-bold mb-1">BACA JUGA : </span>
            <template x-for="post in readmore">
                <a :href="'{{route('badaso.jaya-theme.detail','')}}'+'/'+ post.slug"><span x-text="post.title" class="text-xs lg:text-base font-semibold text-red-700 hover:underline cursor-pointer mb-1">Prakiraan Cuaca Kota Besar di Indonesia Hari Ini: Mayoritas Hujan Ringan</span></a>
            </template>
        </div>
    </div>
</div>

