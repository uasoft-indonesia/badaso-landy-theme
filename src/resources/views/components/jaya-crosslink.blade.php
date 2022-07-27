<div class="bg-base-100 shadow-none" x-data="postData()" x-init="init()">
    <div class="card-body p-0 mt-6 w-[640px] mb-4">
        <template x-for="post in post.slice(2,3)">
            <div class="col-span-2 card card-compact bg-base-100 shadow-xl">
                <figure><img :src="post.thumbnail" src="https://blue.kumparan.com/image/upload/fl_progressive,fl_lossy,c_fill,q_auto:best,w_640/v1634025439/fecf3f8ea5e8df9c9a471ca46a1e013fea26d09809de963ede80f535ee6d7de8.jpg" class="w-[640px] h-[286px]" /></figure>
                <div class="card-body">
                    <a :href="'{{route('badaso.jaya-theme.detail','')}}'+'/'+ post.slug" class="font-semibold text-[20px] font-karla cursor-pointer hover:underline underline-offset-4" x-text="post.title"></a>
                     <div class="text-s pb-4 pt-2" x-text='formatDateTime(post.createdAt,2)'>2 jam yang lalu</div>
                </div>
            </div>
        </template>
    </div>
</div>
