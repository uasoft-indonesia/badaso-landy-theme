<div class="px-4 lg:px-0">
<div class="text-[20px] leading-7 md:text-xl border-t-4 border-green-500 text-center mb-3 font-bold text-green-500 pt-[10px] lg:pt-4">Newest Tag</div>

{{-- tag news --}}
<div class="grid grid-flow-row auto-rows-max mb-4 lg:px-5" x-data="loadDataSidebar()" x-init="loadTag()">
     <template x-for="tag in tags">
    <div class="font-bold text-sm leading-[19.6px] text-neutral-700 mb-3 lg:text-[20px] lg:leading-7">
      <span>#</span><a class="pl-2" x-text="tag.title" :href="'{{route('badaso.jaya-theme.category','')}}'+'/'+ tag.slug">RUU TKPS</a>
    </div>
     </template>

</div>
</div>



