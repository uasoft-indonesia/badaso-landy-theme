<div class="hidden lg:flex flex-row gap-4 mb-4" x-data="loadData()" x-init="loadHeadline()">
    {{-- jaya headline left --}}
    <div class="card h-[336px] max-w-[693px] w-full bg-neutral">
        <figure><img src="https://api.lorem.space/image/shoes" :src='headline.thumbnail' class="object-fill w-[693px] h-[336px]" alt="Shoes" /></figure>
            <div class="flex flex-col items-start backdrop-opacity-10 backdrop-invert bg-black/30 shadow-xl  absolute bottom-0 right-10 left-10 pt-4 px-6 rounded-t-2xl">
                            <div  class="flex flex-col text-white px-4 py-4 static  text-center">

                                <div class="card-text text-lg font-bold hover:text-green-700 cursor-pointer"><a :href="'{{route('badaso.jaya-theme.detail','')}}'+'/'+ headline.slug"  x-text="headline.title"></a>
                                </div>
                                <div class="card-text" >PERISTIWA <span x-text="formatDateTime(headline.createdAt,2)">4 Menit yang lalu</span></div>
                            </div>
            </div>
    </div>
    {{-- jaya headline right --}}
    <div class="flex flex-col gap-2">
        <template x-for="post in secondHeadline" :key="post.id">
        <div class="card w-[273px] h-[105.33px] bg-neutral text-neutral-content image-full">
                 <figure><img src="https://api.lorem.space/image/shoes" :src='post.thumbnail' class="w-[273px] h-[105.33px] rounded-lg object-fill" alt="Shoes" /></figure>
                <div class="card-body absolute">
                    <a class="font-bold sm:text-sm  hover:text-green-700 cursor-pointer truncate w-52"  x-text="post.title" :href="'{{route('badaso.jaya-theme.detail','')}}'+'/'+ post.slug"></a>
                    <span class="text-s"><span class="text-orange-500 text-s">PERISTIWA </span><span x-text="formatDateTime(post.createdAt,3)"> 4 Menit yang lalu</span></span>


                </div>
        </div>
        </template>
    </div>
</div>











