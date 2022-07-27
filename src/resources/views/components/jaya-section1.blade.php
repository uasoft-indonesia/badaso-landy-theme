<div x-data="loadData()" x-init="loadSection1()">


    <div class="md:grid grid-flow-col">
        <div class="text-xl font-bold text-black px-2 " x-text="titleSection">Sepakbola
        </div>

    </div>
    <div class="border-t-4 border-gray-400 mb-2"></div>
    {{-- category --}}

    <div class="md:flex flex-row gap-[40px]">
        <template x-for="data in section" :key="data.id">
        <div class="w-full bg-white static">
            <div class="flex flex-col w-[305.33px]">
                <div class="w-full">
                    <figure><img :src="data.thumbnail" src="https://api.lorem.space/image/shoes" class="w-[305.33px] h-[150px] rounded-lg" alt="Shoes" /></figure>
                </div>
                <div class="rounded-b-lg bg-base-100 shadow-md  pt-[10px] px-4 cursor-pointer overflow-ellipsis overflow-hidden w-[305.33px] h-28">
                    <a class="font-bold" x-text="data.title" :href="'{{route('badaso.jaya-theme.detail','')}}'+'/'+ data.slug"></a>
                    <div class="text-s pb-4 pt-2" x-text='formatDateTime(data.createdAt,2)'>2 jam yang lalu</div>
                </div>
            </div>
        </div>
        </template>


    </div>
</div>

