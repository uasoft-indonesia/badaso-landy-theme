<div x-data="loadData()" x-init="loadSection2()">
    <div class="text-xl font-bold text-black px-2 mt-4" x-text="titleSection">Artis</div>
    <div class="border-t-4 border-gray-400 mb-2"></div>

    <div class="grid grid-flow-row-dense grid-cols-3  gap-x-10 mb-4">
        {{-- section2-left --}}
        <div class="col-span-2 row-span-3 w-[656px]">
                <figure><img :src="section_l.thumbnail" src="https://api.lorem.space/image/shoes?" class="w-[656px] h-[300px] rounded-lg" alt="Shoes" /></figure>
                <div class="card bg-base-100 shadow-md  pt-[10px] px-4">
                    <a class="font-bold hover:text-green-500 cursor-pointer " x-text="section_l.title" :href="'{{route('badaso.jaya-theme.detail','')}}'+'/'+ section_l.slug">Intip Potret Aaliyah Massaid dengan Rambut Baru, Penampilannya Dipuji Makin Cantik</a>
                    <div class="text-s pb-4 pt-2" x-text='formatDateTime(section_l.createdAt,2)'>2 jam yang lalu</div>
                </div>
        </div>

        {{-- section2-right --}}
        <div class="grid grid-rows-3 gap-4">
        <template x-for="data in section_r" :key="data.id">
            <div class="grid grid-cols-10 bg-base-100 font-karla">
                <div class="col-span-3 w-[120px] h-[90px]">
                    <a href="" class=""><img src="https://api.lorem.space/image/movie" :src="data.thumbnail" class="w-[120px] h-[90px] rounded-lg" alt="Shoes" /></a>
                </div>
                <div class="col-span-7 card-body flex  px-[10px] p-1 self-center">
                    <a href="#" class="font-bold text-sm hover:text-green-500 cursor-pointer pl-8 text-ellipsis overflow-hidden h-10" x-text="data.title" :href="'{{route('badaso.jaya-theme.detail','')}}'+'/'+ data.slug">...</a>
                    <div class="text-xs font-normal flex px-8" x-text='formatDateTime(data.createdAt,2)'>
                        Kamis, 07 apr 2020 14:77 WIB
                    </div>
                </div>
	        </div>
        </template>



        </div>

    </div>
</div>







