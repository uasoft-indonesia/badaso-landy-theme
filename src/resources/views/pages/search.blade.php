@extends('jaya-theme::layout.master')
@section('landing-page')
 @include('jaya-theme::components.breadcrumbs')

@endsection
@section('content')
<div class="text-sm breadcrumbs px-4">

  <p class="flex text-left sm:mt-14 text-sm"
    x-data="loadSearch()"
    x-init="loadNews()"
    >Hasil Pencarian
    <span class="font-bold text-md"

    x-text="'\xa0'+ queryString"></span>
    <span x-text="'.\xa0'+ total + '\xa0'">
    </span>
    hasil ditemukan
</p>

</div>
<div x-data="loadSearch()" x-init="loadNews()">
@include('jaya-theme::components.jaya-meta-innercontent')
</div>
@endsection

@section('sidebar')
<div class="hidden md:block">
   @include('jaya-theme::components.jaya-hot')
</div>
   @include('jaya-theme::components.jaya-top10')
   @include('jaya-theme::components.jaya-tag')
@endsection
@section('modal')
    @include('jaya-theme::components.modal-login')
	@include('jaya-theme::components.jaya-signup')
    @include('jaya-theme::components.modal-finish')
@endsection
<div>
    <p id="menu" hidden></p>
</div>

 <script>
    const params = new Proxy(new URLSearchParams(window.location.search), {
        get: (searchParams, prop) => searchParams.get(prop),
    });
    let value = params.search;
    console.log(value)
    function loadSearch() {
        return {
            category: null,
            pagination:null,
            page:1,
            limit:10,
            total:0,
            queryString : value,
            events:null,
            nextPage:null,
            previousPage:1,
            isLoading:false,
            lastPage: 0,
            totalPage: 0,
            currentPage:1,
            loadNews(page=this.page) {
                this.page = page
                fetch(`/badaso-api/module/post/v1/post?page=${this.page}&limit=${this.limit}&search=${value}`)
                    .then(res => res.json())
                    .then(data => {
                        this.isLoading = false;
                        this.previousPage = this.page == 1 ? this.previousPage : this.page-1
                        this.nextPage = this.page + 1
                        this.totalPage = data.data.posts.lastPage
                        this.total = data.data.posts.total
                        this.lastPage = Math.floor(this.totalPage / this.limit)
                        this.category = data.data.posts.data;
                        this.pagination = data.data.posts
                        this.currentPage = data.data.posts.currentPage
                    })
            }
        }
    }
</script>

