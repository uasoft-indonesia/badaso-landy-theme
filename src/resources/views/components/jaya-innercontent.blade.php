{{-- mobile --}}
<div class="card w-80 sm:w-full bg-base-100 shadow-xl lg:hidden mx-auto" x-data="loadCategory()" x-init="loadInnerContent()">

  <figure><img src="https://api.lorem.space/image/shoes" :src="headline.thumbnail" class="rounded-xl w-80 h-52 sm:w-full sm:object-fill" alt="Shoes" /></figure>
   <a class="link link-primary no-underline font-bold text-black pt-2 px-2 pb-2 text-[20px] leading-7" x-text="headline.title" :href="'{{route('badaso.jaya-theme.detail','')}}'+'/'+ headline.slug">Lorem ipsum dolor sasdasdasdit amet consectetur adipisicing elit</a>
    <span class="px-2 pt-2 pb-2 items-cente text-xs">If a dog chews shoes whose shoes does he choose?</span>
</div>
{{-- desktop --}}
<div class="hidden lg:grid bg-base-100 grid-cols-1 divide-y" x-data="loadCategory()" x-init="loadInnerContent()">
    <div class="hidden md:grid grid-cols-3 bg-base-100 gap-6 pb-3">
        <div class="col-span-2 card-body justify-center p-1">
            <a href="#" class="link link-primary no-underline font-bold text-xl text-black" x-text="headline.title" :href="'{{route('badaso.jaya-theme.detail','')}}'+'/'+ headline.slug">
                <p>Lorem ipsum dolor sasdasdasdit amet consectetur adipisicing elit. </p>
            </a>
            <div class="mt-6 text-xs font-normal" x-text="formatDateTime(headline.createdAt,2)">
                48 Menit yang lalu
            </div>
        </div>
        <div class="col-span-1 justify-self-end">
            <img class="rounded-xl h-52 w-80" src="https://akcdn.detik.net.id/community/media/visual/2022/04/13/oppo-a96.png?w=700&q=90" :src="headline.thumbnail" alt="Movie">
        </div>
    </div>

</div>
