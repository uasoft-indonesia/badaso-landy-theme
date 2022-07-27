<div class="bg-base-100 shadow-none font-normal font-karla text-base p-0 mt-6 ml-4 sm:ml-0 mr-4 sm:mr-0 mb-2" x-data="loadDataSidebar()" x-init="loadTag()">

        <h2 class="mt-6 lg:flex mb-4">Topik berita Terkait:</h2>

    <div class="flex flex-wrap items-center gap-2">
        <template x-for="tag in tags">
            <a :href="'{{route('badaso.jaya-theme.category','')}}'+'/'+ tag.slug" class="btn btn-xs lg:btn-sm bg-black hover:bg-white hover:text-black rounded-md px-3 py-1" x-text="tag.title">Jakarta</a>
        </template>
    </div>
</div>
