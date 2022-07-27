<div class="md:grid grid-cols-12 gap-4 mb-15" >
        {{-- Section3-left --}}
        <div class="col-span-4" x-data="loadData()" x-init="loadSection3_l()">
                <div> <a class="text-xl font-bold text-black" x-text="titleSection">Gaya</a></div>
                <div class="border-t-4 border-green-500 mb-2"></div>

                    <div class="grid grid-cols-6 bg-base-100 gap-2 ">
                        <div class="col-span-2">
                        <a href="#" class="w-full">
                            <img class="rounded-xl w-44 h-24" src="https://akcdn.detik.net.id/community/media/visual/2022/04/13/oppo-a96.png?w=700&q=90" :src="section.thumbnail" alt="Movie">
                        </a>
                        </div>
                        <div class="col-span-4 card-body p-2">
                            <a :href="'{{route('badaso.jaya-theme.detail','')}}'+'/'+ section.slug" class="link link-primary no-underline  font-bold text-sm text-black" x-text="section.title">
                                <p>Lorem ipsum dolor sit amet,</p>
                            </a>
                            <div class="text-xs font-normal" x-text='formatDateTime(section.createdAt,2)'>
                                Jumat, 08 Apr 2022 10:02 WIB
                            </div>
                        </div>
                    </div>

        </div>
        {{-- Section3-middle --}}
        <div class="col-span-4" x-data="loadData()" x-init="loadSection3_m()">
                <div> <a class="text-xl font-bold text-black" x-text="titleSection">Sehat</a></div>
                <div class="border-t-4 border-green-500 mb-2"></div>
                     <div class="grid grid-cols-6 bg-base-100 gap-2 ">
                        <div class="col-span-2">
                        <a href="#" class="w-full">
                            <img :src="section.thumbnail" class="rounded-xl w-44 h-24" src="https://akcdn.detik.net.id/community/media/visual/2022/04/13/oppo-a96.png?w=700&q=90" alt="Movie">
                        </a>
                        </div>
                        <div class="col-span-4 card-body p-2">
                            <a :href="'{{route('badaso.jaya-theme.detail','')}}'+'/'+ section.slug" class="link link-primary no-underline  font-bold text-sm text-black" x-text="section.title">
                                <p>Lorem ipsum dolor sit amet,</p>
                            </a>
                            <div class="text-xs font-normal" x-text='formatDateTime(section.createdAt,2)'>
                                Jumat, 08 Apr 2022 10:02 WIB
                            </div>
                        </div>
                    </div>
        </div>
        {{-- Section3-right --}}
         <div class="col-span-4" x-data="loadData()" x-init="loadSection3_r()">
                <div> <a class="text-xl font-bold text-black" x-text="titleSection">Teknologi</a></div>
                <div class="border-t-4 border-green-500 mb-2"></div>
                    <div class="grid grid-cols-6 bg-base-100 gap-2 ">
                        <div class="col-span-2">
                        <a href="#" class="w-full">
                            <img :src="section.thumbnail" class="rounded-xl w-44 h-24" src="https://akcdn.detik.net.id/community/media/visual/2022/04/13/oppo-a96.png?w=700&q=90" alt="Movie">
                        </a>
                        </div>
                        <div class="col-span-4 card-body p-2">
                            <a :href="'{{route('badaso.jaya-theme.detail','')}}'+'/'+ section.slug" class="link link-primary no-underline  font-bold text-sm text-black" x-text="section.title">
                                <p>Lorem ipsum dolor sit amet,</p>
                            </a>
                            <div class="text-xs font-normal" x-text='formatDateTime(section.createdAt,2)'>
                                Jumat, 08 Apr 2022 10:02 WIB
                            </div>
                        </div>
                    </div>
        </div>

</div>




