
<div>
    <div class="hidden lg:grid text-[32px] leading-7  border-t-4 border-green-500 text-center mb-3 font-bold text-green-500 lg:pt-4">Hot Issue</div>

</div>
{{-- hot issue --}}
<div class="hidden lg:grid gap-3 mb-4" x-data="loadDataSidebar()" x-init="loadHot()">
    <template x-for="data in hotissues" :key="data.id">
	<div class="grid grid-cols-8 items-center justify-items-center ml-0 sm:ml-10 rounded-xl m-2">
		<div class="col-span-2">
			<div class="user-img w-32 overflow-hidden">
				<img class="rounded-lg" src="https://asset.kompas.com/crops/fLRL-AhrI1hF4Iihh7YOuSaC36U=/328x319:844x663/750x500/data/photo/2022/04/18/625cb6d2545a3.jpg" :src="data.thumbnail" alt="">
			</div>
		</div>
		<div class="col-span-6 ml-0 sm:ml-9">
			<a class="text-sm font-karla font-semibold hover:text-red-700 cursor-pointer " x-text="data.title" :href="'{{route('badaso.jaya-theme.detail','')}}'+'/'+ data.slug">Polisi Ganti Rugi Rumah Warga Rusak di Bangkalan</a>
		</div>
	</div>
     </template>

</div>






