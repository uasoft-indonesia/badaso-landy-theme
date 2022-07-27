<div id="indicators-carousel" class="relative" data-carousel="static" x-data="loadData()" x-init="loadHeadlineMobile()">
<div class="carousel carousel-center space-x-4 gap-1 px-4 h-[200px] mb-4 snap-x relative">
      <template x-for="data in category" :key="data.id">
        <div :id="data.id" class="carousel-item card  bg-cover bg-center shadow-xl rounded-box w-[308px] h-[200px]"  data-carousel-item="active">

                  <figure><img src="https://api.lorem.space/image/shoes" :src='data.thumbnail' class="object-fill w-max-[693px] h-[336px]" alt="Shoes" /></figure>
                    <div class="badge badge-info backdrop-saturate-50 bg-white/80 font-bold text-black text-[10px] px-2 py-1 pb-1 mt-[10px] ml-[10px] shadow-lg absolute" x-text="data.category.title">PEMBUNUHAN </div>
                <div class="flex flex-col w-72 h-15  backdrop-saturate-50 bg-white/80 rounded-t-lg rounded-b-lg text-black px-2 py-2 pb-2 text-base leading-5 font-bold absolute bottom-0 mb-7 mx-[10px]" >
                    <a :href="'{{route('badaso.jaya-theme.detail','')}}'+'/'+ data.slug" x-text="data.title" class="text-ellipsis overflow-hidden h-10">Nestapa Istri di Lahat, Ajakan Cerai dibalas Tikaman Belati Suami</a>
                </div>

        </div>
      </template>



</div>

    <div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">
        <template x-for="data in category" :key="data.id">
        <a type="button" class="w-16 h-[2px]  bg-white dark:bg-gray-300/50 hover:bg-white dark:hover:bg-gray-50 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0" :href="'#'+data.id"></a>
        </template>

    </div>

</div>















