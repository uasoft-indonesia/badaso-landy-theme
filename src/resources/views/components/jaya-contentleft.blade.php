<div class="lg:grid grid-cols-4 gap-2">
    {{-- jaya-contentleft-l --}}
        <div class="col-span-2" x-data="loadData()" x-init="loadContentLeft_l()">
             <template x-for="post in posts">
            <div class="bg-base-100  w-full h-28 items-center cursor-pointer">
                    <a class="font-bold text-base leading-[22.4px]" x-text="post.title" :href="'{{route('badaso.jaya-theme.detail','')}}'+'/'+ post.slug"></a>
                    <div class="text-s pt-3"
            x-text='formatDateTime(post.createdAt,2)'>PERISTIWA 2 Menit yang lalu</div>
            </div>
             </template>

        </div>
        {{-- jaya-contentleft-r --}}
        <div class="col-span-2 overflow-y-auto">
            <div class="grid grid-flow-row auto-rows-max gap-1 justify-start" x-data="loadData()" x-init="loadContentLeft_r()">
                <template x-for="post in section" :key="post.id">
                <div class="flex flex-col w-full h-64 ">
                    <div class="card w-full h-36">
                        <figure><img src="https://api.lorem.space/image/shoes?w=400&h=225" :src='post.thumbnail' alt="Shoes" /></figure>
                    </div>
                    <div class="bg-base-100  pt-[10px] px-4 cursor-pointer">
                        <a class="font-normal text-sm items-center text-center " x-text="post.title" :href="'{{route('badaso.jaya-theme.detail','')}}'+'/'+ post.slug" x-text="post.title"></a>
                        <div class="text-s pt-3" x-text='formatDateTime(post.createdAt,2)'>PERISTIWA 18 jam yang lalu</div>
                    </div>
                </div>
                </template>

            </div>
        </div>
</div>



