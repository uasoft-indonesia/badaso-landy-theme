<div>
    <div class="text-[20px] leading-[28px] text-green-500 mb-3 font-bold mt-2 px-4">Hot Issue</div>
</div>
<div class="carousel carousel-center space-x-4 px-4 mb-[34px]">
 <template x-for="data in hotissues" :key="data.id">
        <div class="carousel-item card card-compact w-[196.8px] h-[200px] bg-base-100 shadow-xl rounded-xl m-2">
            <figure><img src="https://api.lorem.space/image/shoes" :src="data.thumbnail" class="w-[196.48px] h-[118px] rounded-lg" alt="Shoes" /></figure>
            <div class="card-body">
               <a class="text-s font-normal pb-4  justify-self-stretch" x-text="data.title" :href="'{{route('badaso.jaya-theme.detail','')}}'+'/'+ data.slug">Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus</a>
            </div>
        </div>
 </template>

</div>
