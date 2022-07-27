<div class="hidden lg:grid bg-base-100 grid-cols-1 divide-y px-4 mb-2 mt-2" >
      <template x-for="data in category">
    <div class="grid grid-cols-10 pt-2 pb-2">
		<div class="col-span-2">
                <a href=""><img src="https://api.lorem.space/image/movie" :src="data.thumbnail" class="w-[120px] h-[90px] rounded-lg" alt="Shoes" /></a>
        </div>
		<div class="col-span-8 px-[10px] self-center">
			<a class="text-sm font-karla font-semibold hover:text-green-700 cursor-pointer" :href="'{{route('badaso.jaya-theme.detail','')}}'+'/'+ data.slug" x-text="data.title">Harga Bahan Pokok Naik, Ridwan Kamil Imbau Perusahaan Tak Cicil THR </a>

                  <div class="text-xs font-normal" x-text='formatDateTime(data.createdAt,2)'>

                    Senin 11 Apr 2022 08.00 WIB
                </div>

		</div>
	</div>
      </template>

</div>

{{-- mobile --}}
<div class="bg-base-100 grid-cols-1 divide-y px-4 mb-2 mt-2 lg:hidden">
    <template x-for="data in category">
    <div class="grid grid-cols-10 sm:grid-cols-12 bg-base-100 gap-1 font-karla pt-2 pb-2">
		<div class="col-span-3">
                <a href="" class=""><img src="https://api.lorem.space/image/movie" class="w-[120px] h-[90px] md:h-40 md:w-60 rounded-lg" :src="data.thumbnail" alt="Shoes" /></a>
        </div>
		<div class="col-span-7 sm:col-span-9 card-body flex  px-[10px] p-1 self-center">
			<a href="#" class="font-bold text-sm md:text-base hover:text-green-500 cursor-pointer text-ellipsis overflow-hidden h-10" x-text="data.title" :href="'{{route('badaso.jaya-theme.detail','')}}'+'/'+ data.slug">...</a>
            <div>
                <div class="mt-2 sm:mt-6 text-xs font-normal"
            x-text='formatDateTime(data.createdAt,2)'>  Senin 11 Apr 2022 08.00 WIB

                </div>
            </div>


		</div>
	</div>
    </template>

</div>

