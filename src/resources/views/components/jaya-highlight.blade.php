
<div class="md:flex flex-row gap-6 mb-4" x-data="loadData()" x-init="loadHighlight()">
     <template x-for="post in headline" :key="post.id">
    <div class="basis-1/4 w-full bg-white static shadow rounded-lg">
        <div class="flex flex-col w-max-[226px] w-full">
                 <figure><img src="https://api.lorem.space/image/shoes" :src='post.thumbnail' class="w-full h-[118px] rounded-lg" alt="Shoes" /></figure>
            <div class="bg-base-100 text-s font-normal items-center pt-[10px] px-4 pb-[30px] cursor-pointer">
            <a :href="'{{route('badaso.jaya-theme.detail','')}}'+'/'+ post.slug" x-text="post.title" x-text="post.title"></a>
            </div>

        </div>
    </div>
     </template>

</div>





