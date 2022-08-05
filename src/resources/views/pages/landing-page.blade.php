@extends('landy-theme::layout.index')
@section('mainContent')
    @include('landy-theme::components.landy-landingpage-content')
    {{-- <div class="hidden lg:grid absolute top-[847px] left-18 z-10">
        <svg class="shape" width="106" height="134" viewBox="0 0 106 134" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="1.66654" cy="1.66679" r="1.66667" fill="#DADADA"></circle>
            <circle cx="1.66654" cy="16.3335" r="1.66667" fill="#DADADA"></circle>
            <circle cx="1.66654" cy="31.0001" r="1.66667" fill="#DADADA"></circle>
            <circle cx="1.66654" cy="45.6668" r="1.66667" fill="#DADADA"></circle>
            <circle cx="1.66654" cy="60.3335" r="1.66667" fill="#DADADA"></circle>
            <circle cx="1.66654" cy="88.6668" r="1.66667" fill="#DADADA"></circle>
            <circle cx="1.66654" cy="117.667" r="1.66667" fill="#DADADA"></circle>
            <circle cx="1.66654" cy="74.6668" r="1.66667" fill="#DADADA"></circle>
            <circle cx="1.66654" cy="103" r="1.66667" fill="#DADADA"></circle>
            <circle cx="1.66654" cy="132" r="1.66667" fill="#DADADA"></circle>
            <circle cx="16.3333" cy="1.66679" r="1.66667" fill="#DADADA"></circle>
            <circle cx="16.3333" cy="16.3335" r="1.66667" fill="#DADADA"></circle>
            <circle cx="16.3333" cy="31.0001" r="1.66667" fill="#DADADA"></circle>
            <circle cx="16.3333" cy="45.6668" r="1.66667" fill="#DADADA"></circle>
            <circle cx="16.333" cy="60.3335" r="1.66667" fill="#DADADA"></circle>
            <circle cx="16.333" cy="88.6668" r="1.66667" fill="#DADADA"></circle>
            <circle cx="16.333" cy="117.667" r="1.66667" fill="#DADADA"></circle>
            <circle cx="16.333" cy="74.6668" r="1.66667" fill="#DADADA"></circle>
            <circle cx="16.333" cy="103" r="1.66667" fill="#DADADA"></circle>
            <circle cx="16.333" cy="132" r="1.66667" fill="#DADADA"></circle>
            <circle cx="30.9998" cy="1.66679" r="1.66667" fill="#DADADA"></circle>
            <circle cx="74.6665" cy="1.66679" r="1.66667" fill="#DADADA"></circle>
            <circle cx="30.9998" cy="16.3335" r="1.66667" fill="#DADADA"></circle>
            <circle cx="74.6665" cy="16.3335" r="1.66667" fill="#DADADA"></circle>
            <circle cx="30.9998" cy="31.0001" r="1.66667" fill="#DADADA"></circle>
            <circle cx="74.6665" cy="31.0001" r="1.66667" fill="#DADADA"></circle>
            <circle cx="30.9998" cy="45.6668" r="1.66667" fill="#DADADA"></circle>
            <circle cx="74.6665" cy="45.6668" r="1.66667" fill="#DADADA"></circle>
            <circle cx="31" cy="60.3335" r="1.66667" fill="#DADADA"></circle>
            <circle cx="74.6668" cy="60.3335" r="1.66667" fill="#DADADA"></circle>
            <circle cx="31" cy="88.6668" r="1.66667" fill="#DADADA"></circle>
            <circle cx="74.6668" cy="88.6668" r="1.66667" fill="#DADADA"></circle>
            <circle cx="31" cy="117.667" r="1.66667" fill="#DADADA"></circle>
            <circle cx="74.6668" cy="117.667" r="1.66667" fill="#DADADA"></circle>
            <circle cx="31" cy="74.6668" r="1.66667" fill="#DADADA"></circle>
            <circle cx="74.6668" cy="74.6668" r="1.66667" fill="#DADADA"></circle>
            <circle cx="31" cy="103" r="1.66667" fill="#DADADA"></circle>
            <circle cx="74.6668" cy="103" r="1.66667" fill="#DADADA"></circle>
            <circle cx="31" cy="132" r="1.66667" fill="#DADADA"></circle>
            <circle cx="74.6668" cy="132" r="1.66667" fill="#DADADA"></circle>
            <circle cx="45.6665" cy="1.66679" r="1.66667" fill="#DADADA"></circle>
            <circle cx="89.3333" cy="1.66679" r="1.66667" fill="#DADADA"></circle>
            <circle cx="45.6665" cy="16.3335" r="1.66667" fill="#DADADA"></circle>
            <circle cx="89.3333" cy="16.3335" r="1.66667" fill="#DADADA"></circle>
            <circle cx="45.6665" cy="31.0001" r="1.66667" fill="#DADADA"></circle>
            <circle cx="89.3333" cy="31.0001" r="1.66667" fill="#DADADA"></circle>
            <circle cx="45.6665" cy="45.6668" r="1.66667" fill="#DADADA"></circle>
            <circle cx="89.3333" cy="45.6668" r="1.66667" fill="#DADADA"></circle>
            <circle cx="45.6665" cy="60.3335" r="1.66667" fill="#DADADA"></circle>
            <circle cx="89.3333" cy="60.3335" r="1.66667" fill="#DADADA"></circle>
            <circle cx="45.6665" cy="88.6668" r="1.66667" fill="#DADADA"></circle>
            <circle cx="89.3333" cy="88.6668" r="1.66667" fill="#DADADA"></circle>
            <circle cx="45.6665" cy="117.667" r="1.66667" fill="#DADADA"></circle>
            <circle cx="89.3333" cy="117.667" r="1.66667" fill="#DADADA"></circle>
            <circle cx="45.6665" cy="74.6668" r="1.66667" fill="#DADADA"></circle>
            <circle cx="89.3333" cy="74.6668" r="1.66667" fill="#DADADA"></circle>
            <circle cx="45.6665" cy="103" r="1.66667" fill="#DADADA"></circle>
            <circle cx="89.3333" cy="103" r="1.66667" fill="#DADADA"></circle>
            <circle cx="45.6665" cy="132" r="1.66667" fill="#DADADA"></circle>
            <circle cx="89.3333" cy="132" r="1.66667" fill="#DADADA"></circle>
            <circle cx="60.3333" cy="1.66679" r="1.66667" fill="#DADADA"></circle>
            <circle cx="104" cy="1.66679" r="1.66667" fill="#DADADA"></circle>
            <circle cx="60.3333" cy="16.3335" r="1.66667" fill="#DADADA"></circle>
            <circle cx="104" cy="16.3335" r="1.66667" fill="#DADADA"></circle>
            <circle cx="60.3333" cy="31.0001" r="1.66667" fill="#DADADA"></circle>
            <circle cx="104" cy="31.0001" r="1.66667" fill="#DADADA"></circle>
            <circle cx="60.3333" cy="45.6668" r="1.66667" fill="#DADADA"></circle>
            <circle cx="104" cy="45.6668" r="1.66667" fill="#DADADA"></circle>
            <circle cx="60.333" cy="60.3335" r="1.66667" fill="#DADADA"></circle>
            <circle cx="104" cy="60.3335" r="1.66667" fill="#DADADA"></circle>
            <circle cx="60.333" cy="88.6668" r="1.66667" fill="#DADADA"></circle>
            <circle cx="104" cy="88.6668" r="1.66667" fill="#DADADA"></circle>
            <circle cx="60.333" cy="117.667" r="1.66667" fill="#DADADA"></circle>
            <circle cx="104" cy="117.667" r="1.66667" fill="#DADADA"></circle>
            <circle cx="60.333" cy="74.6668" r="1.66667" fill="#DADADA"></circle>
            <circle cx="104" cy="74.6668" r="1.66667" fill="#DADADA"></circle>
            <circle cx="60.333" cy="103" r="1.66667" fill="#DADADA"></circle>
            <circle cx="104" cy="103" r="1.66667" fill="#DADADA"></circle>
            <circle cx="60.333" cy="132" r="1.66667" fill="#DADADA"></circle>
            <circle cx="104" cy="132" r="1.66667" fill="#DADADA"></circle>
        </svg>
    </div> --}}
    @include('landy-theme::components.landy-story-content')
    @include('landy-theme::components.landy-service-content')
    @include('landy-theme::components.landy-video-content')
    @include('landy-theme::components.landy-portfolio-content')
    @include('landy-theme::components.landy-pricing-content')
    @include('landy-theme::components.landy-team-content')
    @include('landy-theme::components.landy-call-action-content')
    @include('landy-theme::components.landy-review-content')
    @include('landy-theme::components.landy-news-content')
    @include('landy-theme::components.landy-client-content')
    @include('landy-theme::components.landy-contact-content')
@endsection
