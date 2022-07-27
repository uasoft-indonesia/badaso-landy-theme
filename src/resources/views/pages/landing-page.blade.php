@extends('landy-theme::layout.master')

@section('landing-page')
    {{-- news --}}

    @include('landy-theme::components.jaya-headline')

    <div class="lg:hidden">
         @include('landy-theme::components.jaya-headline-mobile')
    </div>

    {{-- TAB SUBNEWS --}}
    {{-- <div class="hidden lg:grid">
    @include('jaya-theme::components.jaya-linktoday')
    </div> --}}
    {{-- card news 1 --}}
     <div class="hidden lg:grid">
    @include('landy-theme::components.jaya-highlight')
     </div>
@endsection
@section('content')
    <div class="lg:hidden" x-data="loadDataSidebar()" x-init="loadMetaInnerContent()">
         @include('landy-theme::components.jaya-meta-innercontent')
    </div>
    <div class="hidden lg:block">
     @include('landy-theme::components.jaya-contentleft')
    </div>
@endsection

@section('sidebar')
  <div class="hidden lg:flex">
    @include('landy-theme::components.jaya-adsense3')
  </div>
    <div class="lg:hidden" x-data="loadDataSidebar()" x-init="loadHotMobile()">
         @include('landy-theme::components.jaya-hot-mobile')
    </div>
   @include('landy-theme::components.jaya-top10')
   @include('landy-theme::components.jaya-tag')


@endsection
@section('bottom-landing-page')
 {{-- category --}}
 <div class="hidden lg:block">
    @include('landy-theme::components.jaya-section1')
    @include('landy-theme::components.jaya-section2')

    {{-- article --}}
    @include('landy-theme::components.jaya-section3')
 </div>
@endsection
@section('modal')
    @include('landy-theme::components.modal-login')
	@include('landy-theme::components.jaya-signup')
    @include('landy-theme::components.modal-finish')
@endsection
<div>
    <p id="menu" hidden></p>
</div>
<script>
    var slug = window.location.pathname.split('/jaya/detail/');
    function loadData(){
        return {
            posts:[],
            headline:null,
            secondHeadline:null,
            section:null,
            section_l:null,
            section_r:null,
            titleSection:null,
            category:null,
            hotissues:null,
            tags:null,

            loadHeadline() {
                fetch(`/badaso-api/module/post/v1/post`)
                .then(response => response.json())
                .then( data => {
                    this.posts = data.data.posts.data;
                    this.headline = this.posts[0]
                    this.secondHeadline = this.posts.slice(1,4)

                })
            },
            loadHeadlineMobile(){
                fetch(`/badaso-api/module/post/v1/post`)
                .then(res => res.json())
                .then(data => {
                    this.posts =  data.data.posts.data
                    this.category = this.posts.slice(1,4)

                })
            },

            loadHighlight() {
                fetch(`/badaso-api/module/post/v1/post/popular`)
                .then(response => response.json())
                .then( data => {
                    this.posts = data.data.posts;
                    this.headline = this.posts.slice(0,4);

                })
            },
            loadContentLeft_l() {
                fetch(`/badaso-api/module/post/v1/post`)
                .then(response => response.json())
                .then( data => {
                    this.posts = data.data.posts.data;
                })
            },
            loadContentLeft_r() {
                fetch(`/badaso-api/module/post/v1/post/popular`)
                .then(response => response.json())
                .then( data => {
                    this.posts = data.data.posts
                    this.section = this.posts.slice(0,4)

                })
            },

            loadSection1(){
                fetch(`/badaso-api/module/post/v1/post?page=1&limit=10&category=finance`)
                .then(res => res.json())
                .then(data => {
                    this.posts =  data.data.posts
                    this.section = this.posts.data.slice(0,3)
                    this.titleSection = this.posts.data[0].category.title;
                })
            },
            loadSection2(){
                fetch(`/badaso-api/module/post/v1/post?page=1&limit=10&category=politics`)
                .then(res => res.json())
                .then(data => {
                    this.posts =  data.data.posts
                    this.section_l = this.posts.data[0]
                    this.section_r = this.posts.data.slice(0,3)
                    this.titleSection = this.posts.data[0].category.title;

                })
            },
            loadSection3_l(){
                fetch(`/badaso-api/module/post/v1/post?page=1&limit=10&category=health`)
                .then(res => res.json())
                .then(data => {
                    this.posts = data.data.posts
                    this.section = this.posts.data[0]
                    this.titleSection = this.posts.data[0].category.title;

                })
            },
            loadSection3_m(){
                fetch(`/badaso-api/module/post/v1/post?page=1&limit=10&category=lifestyle`)
                .then(res => res.json())
                .then(data => {
                    this.posts = data.data.posts
                    this.section = this.posts.data[0]
                    this.titleSection = this.posts.data[0].category.title;
                })
            },
            loadSection3_r(){
                fetch(`/badaso-api/module/post/v1/post?page=1&limit=10&category=tips-tricks`)
                .then(res => res.json())
                .then(data => {
                    this.posts = data.data.posts
                    this.section = this.posts.data[0]
                    this.titleSection = this.posts.data[0].category.title;
                })
            }

        }
    }
</script>
