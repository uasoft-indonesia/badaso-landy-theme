<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="{{ mix('css/landy-theme.css') }}" rel="stylesheet">
    <script src="{{ mix('js/landy-theme.js') }}" defer></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <title>Landy Theme</title>
</head>

<body>

    <div class="navbar sticky top-0 z-30 bg-blue-700 py-5 w-full font-inter">
        <div class="container mx-auto">
            {{-- navbar top --}}
            <div class="grid grid-cols-9 gap-8 w-full text-slate-300">
                <div class="col-span-2 pl-8">
                    <div class="flex">
                        <img src="https://i.postimg.cc/kMWqcZ9T/Full-logo-badaso-1.png" alt="" class="w-32">
                    </div>
                </div>
                <div class="col-span-6">
                    <div class="hidden lg:flex">
                        <ul class="menu menu-horizontal p-0 font-medium">
                            <li><a class="">Home</a></li>
                            <li><a>Services</a></li>
                            <li><a>Portfolio</a></li>
                            <li><a>Pricing</a></li>
                            <li><a>Team</a></li>
                            <li><a>Contact</a></li>
                        </ul>
                    </div>

                </div>
                <div class="flex justify-end pt-2 px-8">
                    {{-- <button class="btn btn-circle btn-outline hover:bg-white hover:border-none border-slate-300 btn-sm hidden lg:flex">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                class="inline-block w-5 h-5 stroke-current">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                                </path>
                            </svg>
                        </button> --}}
                    <label class="btn btn-circle swap swap-rotate btn-md">

                        <!-- this hidden checkbox controls the state -->
                        <input type="checkbox" />

                        <!-- hamburger icon -->
                        <svg class="swap-off fill-current" xmlns="http://www.w3.org/2000/svg" width="32"
                            height="32" viewBox="0 0 512 512">
                            <path d="M64,384H448V341.33H64Zm0-106.67H448V234.67H64ZM64,128v42.67H448V128Z" />
                        </svg>

                        <!-- close icon -->
                        <svg class="swap-on fill-current" xmlns="http://www.w3.org/2000/svg" width="32"
                            height="32" viewBox="0 0 512 512">
                            <polygon
                                points="400 145.49 366.51 112 256 222.51 145.49 112 112 145.49 222.51 256 112 366.51 145.49 400 256 289.49 366.51 400 400 366.51 289.49 256 400 145.49" />
                        </svg>

                    </label>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-blue-700">
        <div class="container mx-auto grid-cols-1 divide-y px-4 font-inter w-full pb-24">
            <div class="grid grid-cols-12 pt-10 pr-4 gap-4 ">
                <div class="col-span-6 self-center">

                    <span class="text-4xl font-bold text-white">Corporate & Business Site Template By Ayro UI.</span>
                    <div class="mt-8">
                        <span class="text-md font-normal text-slate-300 tracking-normal">
                            We are a digital agency that helps brands to achieve their business outcomes. We see
                            technology as a tool to create amazing things.
                        </span>
                    </div>
                    <div class="mt-8">
                        <div class="">
                            <button
                                class="btn btn-outline bg-white text-blue-700 tracking-[.08em] font-bold hover:bg-blue-700 rounded-md hover:border-slate-400 px-8">Get
                                Started</button>
                            <button type="button"
                                class="text-blue-700 border-none bg-white  rounded-full text-sm p-3.5  self-center">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                            <span class="ml-4 font-semibold text-white">Watch Intro</span>
                        </div>


                    </div>

                </div>

                <div class="col-span-6">
                    <a href=""><img src="https://demo.ayroui.com/templates/business-template/assets/images/header/hero-image.jpg"
                            class="rounded-lg w-[636px] h-[509px]" alt="Shoes" /></a>

                </div>
            </div>
        </div>
    </div>

    <div class="bg-slate-50">
        <div class="container mx-auto grid-cols-1 divide-y px-4 font-inter">
            <div class="grid grid-cols-12 pt-10 pr-4 pb-20">
                <div class="col-span-6 mt-24">
                    <a href=""><img src="https://api.lorem.space/image/movie" class=" w-[576px] h-[562px]"
                            alt="Shoes" /></a>
                </div>
                <div class="col-span-6  self-center">
                    <div>
                        <span class="text-lg">OUR STORY</span>
                    </div>
                    <div>
                        <span class="text-xl font-semibold">Our team comes with the experience and knowledge</span>
                    </div>

                    <div class="tabs tabs-boxed pt-5 pb-5 gap-4 pl-4 mt-4 mb-4">
                        <button class="btn btn-outline border-none bg-white hover:bg-blue-700">Who We Are</button>
                        <button class="btn btn-outline border-none bg-white hover:bg-blue-700">Our Vision</button>
                        <button class="btn btn-outline border-none bg-white hover:bg-blue-700">Our History</button>
                    </div>


                    <div class="">
                        <span class="text-md font-normal ">
                            It is a long established fact that a reader will be distracted by the readable content of a
                            page
                            when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less
                            normal
                            distribution of letters, look like readable English.
                        </span>
                    </div>
                    <div class="mt-2">
                        <span class="text-md font-normal ">
                            There are many variations of passages of Lorem Ipsum available, but the majority have in
                            some
                            form, by injected humour.
                        </span>
                    </div>


                </div>
            </div>


        </div>
    </div>

    <div class="bg-white">
        <div class="container mx-auto pb-20 pt-10 font-inter">
            <div class="flex justify-center mt-10 mb-5">
                <div class="rounded-full border-2 border-blue-700 p-1 px-8">
                    <span class="font-semibold text-base text-blue-700">Service</span>
                </div>
            </div>
            <div class="flex justify-center mb-5">
                <span class="text-lg font-bold text-center">Our Best Services</span>
            </div>
            <div class="flex justify-center mb-10">
                <span class="text-center">There are many variations of passages of Lorem Ipsum available, but the
                    majority have suffered
                    alteration in some form.</span>
            </div>
            <div class="grid grid-cols-12 auto-rows-auto gap-6">
                <div class="col-span-4">
                    <div class="card bg-base-100 rounded-lg border border-slate-200">
                        <div class="card-body">
                            <div class="flex ">
                                <div class="rounded-full  p-10 border-2 border-blue-700"></div>
                            </div>
                            <div>
                                <p class="font-semibold text-[20px] mb-5">Refreshing Design</p>
                                <p>Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy
                                    eirmod tempor ividunt labor dolore magna.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-4">
                    <div class="card bg-base-100 rounded-lg border border-slate-200">
                        <div class="card-body">
                            <div class="flex ">
                                <div class="rounded-full  p-10 border-2 border-blue-700"></div>
                            </div>
                            <div>
                                <p class="font-semibold text-[20px] mb-5">Refreshing Design</p>
                                <p>Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy
                                    eirmod tempor ividunt labor dolore magna.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-4">
                    <div class="card bg-base-100 rounded-lg border border-slate-200">
                        <div class="card-body">
                            <div class="flex ">
                                <div class="rounded-full  p-10 border-2 border-blue-700"></div>
                            </div>
                            <div>
                                <p class="font-semibold text-[20px] mb-5">Refreshing Design</p>
                                <p>Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy
                                    eirmod tempor ividunt labor dolore magna.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-4">
                    <div class="card bg-base-100 rounded-lg border border-slate-200">
                        <div class="card-body">
                            <div class="flex ">
                                <div class="rounded-full  p-10 border-2 border-blue-700"></div>
                            </div>
                            <div>
                                <p class="font-semibold text-[20px] mb-5">Refreshing Design</p>
                                <p>Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy
                                    eirmod tempor ividunt labor dolore magna.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-4">
                    <div class="card bg-base-100 rounded-lg border border-slate-200">
                        <div class="card-body">
                            <div class="flex ">
                                <div class="rounded-full  p-10 border-2 border-blue-700"></div>
                            </div>
                            <div>
                                <p class="font-semibold text-[20px] mb-5">Refreshing Design</p>
                                <p>Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy
                                    eirmod tempor ividunt labor dolore magna.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-4">
                    <div class="card bg-base-100 rounded-lg border border-slate-200">
                        <div class="card-body">
                            <div class="flex ">
                                <div class="rounded-full  p-10 border-2 border-blue-700"></div>
                            </div>
                            <div>
                                <p class="font-semibold text-[20px] mb-5">Refreshing Design</p>
                                <p>Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy
                                    eirmod tempor ividunt labor dolore magna.</p>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <div class="bg-slate-50">
        <div class="container mx-auto pb-20 pt-10 font-inter">
            <div class="flex justify-center mt-10 mb-5">
                <div class="rounded-full border-2 border-blue-700 p-1 px-8">
                    <span class="font-semibold text-base text-blue-700">Our Intro Video</span>
                </div>
            </div>
            <div class="flex justify-center mb-5">
                <span class="text-lg font-bold text-center">Watch Our Promo Video</span>
            </div>
            <div class="flex justify-center mb-10">
                <span class="text-center">There are many variations of passages of Lorem Ipsum available,but the
                    majority have suffered alteration in some form.
                </span>
            </div>
            <div class="flex justify-center mb-10">
                <a href=""><img src="https://api.lorem.space/image/movie"
                        class="rounded-lg w-[900px] h-[450px]" alt="Shoes" /></a>

            </div>
        </div>
    </div>
    <div class="bg-white">
        <div class="container mx-auto font-inter">
            <div class="flex justify-center mt-10 mb-5">
                <div class="rounded-full border-2 border-blue-700 p-1 px-8">
                    <span class="font-semibold text-base text-blue-700">Our Portfolio</span>
                </div>
            </div>
            <div class="flex justify-center mb-5">
                <span class="text-lg font-bold text-center">Our Recent Works</span>
            </div>
            <div class="flex justify-center mb-10">
                <span class="text-center">There are many variations of passages of Lorem Ipsum available,but the
                    majority have suffered alteration in some form.
                </span>
            </div>
            <div class="flex justify-center mb-5">
                <button
                    class="btn bg-white  hover:bg-white  border-4 border-transparent hover:border-b-blue-700 hover:border-transparent rounded-none"><span
                        class="font-semibold text-base text-blue-700 ">All Work</span></button>
                <button
                    class="btn bg-white  hover:bg-white  border-4 border-transparent hover:border-b-blue-700 hover:border-transparent rounded-none"><span
                        class="font-semibold text-base text-blue-700 ">Branding</span></button>
                <button
                    class="btn bg-white  hover:bg-white  border-4 border-transparent hover:border-b-blue-700 hover:border-transparent rounded-none"><span
                        class="font-semibold text-base text-blue-700 ">Marketing</span></button>
                <button
                    class="btn bg-white  hover:bg-white  border-4 border-transparent hover:border-b-blue-700 hover:border-transparent rounded-none"><span
                        class="font-semibold text-base text-blue-700 ">Planning</span></button>
                <button
                    class="btn bg-white  hover:bg-white  border-4 border-transparent hover:border-b-blue-700 hover:border-transparent rounded-none"><span
                        class="font-semibold text-base text-blue-700 ">Research</span></button>
            </div>

            <div class="grid grid-cols-12 gap-4 mb-10">
                <div class="col-span-4">
                    <div class="flex flex-col">
                        <div class="max-w-[416px] h-[313px] mb-5">
                            <figure><img src="https://api.lorem.space/image/movie" class="w-full h-[313px] rounded-xl"
                                    alt="Shoes" /></figure>
                        </div>
                        <div>
                            <span class="font-bold text-[24px]">Graphics Design</span>
                        </div>
                        <div> <span>Short description for the ones who look for something new. Awesome!</span>
                        </div>

                    </div>
                </div>
                <div class="col-span-4">
                    <div class="flex flex-col">
                        <div class="max-w-[416px] h-[313px] mb-5">
                            <figure><img src="https://api.lorem.space/image/movie" class="w-full h-[313px] rounded-xl"
                                    alt="Shoes" /></figure>
                        </div>
                        <div>
                            <span class="font-bold text-[24px]">Graphics Design</span>
                        </div>
                        <div> <span>Short description for the ones who look for something new. Awesome!</span>
                        </div>

                    </div>
                </div>
                <div class="col-span-4">
                    <div class="flex flex-col">
                        <div class="max-w-[416px] h-[313px] mb-5">
                            <figure><img src="https://api.lorem.space/image/movie" class="w-full h-[313px] rounded-xl"
                                    alt="Shoes" /></figure>
                        </div>
                        <div>
                            <span class="font-bold text-[24px]">Graphics Design</span>
                        </div>
                        <div> <span>Short description for the ones who look for something new. Awesome!</span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- pricing --}}
    <div class="bg-slate-50">
        <div class="container mx-auto font-inter">
            <div class="flex justify-center mb-5">
                <div class="rounded-full border-2 border-blue-700 p-1 px-8 mt-10 ">
                    <span class="font-semibold text-base text-blue-700">Pricing</span>
                </div>
            </div>
            <div class="flex justify-center mb-5">
                <span class="text-lg font-bold text-center">Pricing & Plans</span>
            </div>
            <div class="flex justify-center">
                <span class="text-center">There are many variations of passages of Lorem Ipsum available,but the
                    majority have suffered alteration in some form.
                </span>
            </div>
            <div class="grid grid-cols-12 gap-4 mt-10 pb-24">
                <div class="col-span-4">
                    <div class="card w-96 bg-base-100 shadow-xl rounded-lg">
                        <div class="card-body">
                            <div class="flex justify-center mb-5">
                                <div class="rounded-full border-2 border-blue-700 p-1 px-8 mt-5 ">
                                    <span class="font-semibold text-base text-blue-700">Starter</span>
                                </div>
                            </div>
                            <div class="flex justify-center">
                                <span class="text-center">Lorem Ipsum is simply dummy text of the printing and
                                    industry.</span>
                            </div>
                            <div class="flex justify-center">
                                <span>$ <span class="font-bold text-5xl">150</span><span>/mo</span></span>
                            </div>
                            <div class="flex justify-center">
                                <button
                                    class="btn btn-outline border-blue-700 text-blue-700 hover:bg-blue-700 hover:border-none ">Start
                                    free trial</button>
                            </div>
                            <div class="flex px-4">
                                <ul class="list-disc">
                                    <li> Cras justo odio.</li>
                                    <li> Dapibus ac facilisis in.</li>
                                    <li> Morbi leo risus.</li>
                                    <li> Excepteur sint occaecat velit.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-4">
                    <div class="card w-96 bg-base-100 shadow-xl rounded-lg">
                        <div class="card-body">
                            <div class="flex justify-center mb-5">
                                <div class="rounded-full border-2 border-blue-700 p-1 px-8 mt-5 ">
                                    <span class="font-semibold text-base text-blue-700">Starter</span>
                                </div>
                            </div>
                            <div class="flex justify-center">
                                <span class="text-center">Lorem Ipsum is simply dummy text of the printing and
                                    industry.</span>
                            </div>
                            <div class="flex justify-center">
                                <span>$ <span class="font-bold text-5xl">0</span><span>/mo</span></span>
                            </div>
                            <div class="flex justify-center">
                                <button
                                    class="btn btn-outline border-blue-700 text-blue-700 hover:bg-blue-700 hover:border-none ">Start
                                    free trial</button>
                            </div>
                            <div class="flex px-4">
                                <ul class="list-disc">
                                    <li> Cras justo odio.</li>
                                    <li> Dapibus ac facilisis in.</li>
                                    <li> Morbi leo risus.</li>
                                    <li> Excepteur sint occaecat velit.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-4">
                    <div class="card w-96 bg-base-100 shadow-xl rounded-lg">
                        <div class="card-body">
                            <div class="flex justify-center mb-5">
                                <div class="rounded-full border-2 border-blue-700 p-1 px-8 mt-5 ">
                                    <span class="font-semibold text-base text-blue-700">Starter</span>
                                </div>
                            </div>
                            <div class="flex justify-center">
                                <span class="text-center">Lorem Ipsum is simply dummy text of the printing and
                                    industry.</span>
                            </div>
                            <div class="flex justify-center">
                                <span>$ <span class="font-bold text-5xl">99</span><span>/mo</span></span>
                            </div>
                            <div class="flex justify-center">
                                <button
                                    class="btn btn-outline border-blue-700 text-blue-700 hover:bg-blue-700 hover:border-none ">Start
                                    free trial</button>
                            </div>
                            <div class="flex px-4">
                                <ul class="list-disc">
                                    <li>Cras justo odio. </li>
                                    <li> Dapibus ac facilisis in.</li>
                                    <li> Morbi leo risus.</li>
                                    <li> Excepteur sint occaecat velit.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- team --}}
    <div class="bg-white">
        <div class="container mx-auto font-inter">
            <div class="flex justify-center mt-10 mb-5">
                <div class="rounded-full border-2 border-blue-700 p-1 px-8">
                    <span class="font-semibold text-base text-blue-700">Our Team</span>
                </div>
            </div>
            <div class="flex justify-center mb-5">
                <span class="text-lg font-bold text-center">Our Creative Team</span>
            </div>
            <div class="flex justify-center mb-10">
                <span class="text-center">There are many variations of passages of Lorem Ipsum available,but the
                    majority have suffered alteration in some form.
                </span>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mx-[60px] pb-20">
                <div class="flex col-span-1">
                    <div class="card card-compact shadow-xl rounded-lg">
                        <div>
                            <figure><img src="https://api.lorem.space/image/movie" alt=""
                                    class="h-[350px] w-[416px]" /></figure>
                        </div>
                        <div class="card-body ">
                            <h2 class="card-title text-base mx-auto font-bold text-black">
                                Jeffery Riley</h2>
                            <p class="text-blue-700 text-base mx-auto ">Web Design</p>
                        </div>
                    </div>

                </div>
                <div class="flex col-span-1">
                    <div class="card card-compact shadow-xl rounded-lg">
                        <div>
                            <figure><img src="https://api.lorem.space/image/movie" alt=""
                                    class="h-[350px] w-[416px]" /></figure>
                        </div>
                        <div class="card-body ">
                            <h2 class="card-title text-base mx-auto font-bold text-black">
                                Riley Beata</h2>
                            <p class="text-blue-700 text-base mx-auto ">Web Design</p>
                        </div>
                    </div>

                </div>
                <div class="flex col-span-1">
                    <div class="card card-compact shadow-xl rounded-lg">
                        <div>
                            <figure><img src="https://api.lorem.space/image/movie" alt=""
                                    class="h-[350px] w-[416px]" /></figure>
                        </div>
                        <div class="card-body ">
                            <h2 class="card-title text-base mx-auto font-bold text-black">
                                Jeffery Riley</h2>
                            <p class="text-blue-700 text-base mx-auto ">UX Designer</p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <div class="bg-blue-700">
        <div class="container mx-auto font-inter">
            <div class="flex justify-center  mb-5 pt-20">
                <span class="text-lg font-bold text-center text-white">We love to make perfect solutions for your
                    business</span>
            </div>
            <div class="flex justify-center mb-10 mx-40">
                <span class="text-center text-white"> Why I say old chap that is, spiffing off his nut cor blimey
                    guvnords geeza bloke knees up bobby, sloshed arse William cack Richard. Bloke fanny around chesed of
                    bum bag old lost the pilot say there spiffing off his nut.</span>
            </div>
            <div class="flex justify-center pb-20">
                <button
                    class="btn btn-outline bg-blue-700  text-white tracking-[.08em] font-bold hover:bg-white rounded-md hover:border-none hover:text-blue-700 px-8">Get
                    Started</button>

            </div>
        </div>
    </div>

    {{-- costumer reviews --}}
    <div class="bg-slate-50">
        <div class="container mx-auto font-inter">
            <div class="flex justify-center pt-10 mb-5">
                <div class="rounded-full border-2 border-blue-700 p-1 px-8">
                    <span class="font-semibold text-base text-blue-700">Customer Reviews</span>
                </div>
            </div>
            <div class="flex justify-center mb-5">
                <span class="text-lg font-bold text-center">Our Testimonials</span>
            </div>
            <div class="flex justify-center mb-10">
                <span class="text-center">There are many variations of passages of Lorem Ipsum available,but the
                    majority have suffered alteration in some form.
                </span>
            </div>
            <div class="flex pb-20">
                <div class="carousel carousel-center w-full  p-4 space-x-4  rounded-box">
                    <div class="carousel-item bg-white w-1/2 rounded-md">
                        <div class="card ">
                            <div class="card-body">
                                <div>
                                    <span>On the other hand denoun with righteous and disliks men who
                                        are beguiled demorae momentc blinded by desire that can
                                    </span>
                                </div>
                                <div class="flex flex-row ">
                                    <div class="avatar">
                                        <div class="w-16 rounded-full">
                                            <img src="https://placeimg.com/192/192/people" />
                                        </div>
                                    </div>

                                    <div class="self-center px-4">
                                        <p class="font-bold">Musharof Chowdhury</p>
                                        <p>Web Entrepreneur</p>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="carousel-item bg-white w-1/2 rounded-md">
                        <div class="card ">
                            <div class="card-body">
                                <div>
                                    <span>On the other hand denoun with righteous and disliks men who
                                        are beguiled demorae momentc blinded by desire that can
                                    </span>
                                </div>
                                <div class="flex flex-row ">
                                    <div class="avatar">
                                        <div class="w-16 rounded-full">
                                            <img src="https://placeimg.com/192/192/people" />
                                        </div>
                                    </div>

                                    <div class="self-center px-4">
                                        <p class="font-bold">Musharof Chowdhury</p>
                                        <p>Web Entrepreneur</p>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="carousel-item bg-white w-1/2 rounded-md">
                        <div class="card ">
                            <div class="card-body">
                                <div>
                                    <span>On the other hand denoun with righteous and disliks men who
                                        are beguiled demorae momentc blinded by desire that can
                                    </span>
                                </div>
                                <div class="flex flex-row ">
                                    <div class="avatar">
                                        <div class="w-16 rounded-full">
                                            <img src="https://placeimg.com/192/192/people" />
                                        </div>
                                    </div>

                                    <div class="self-center px-4">
                                        <p class="font-bold">Musharof Chowdhury</p>
                                        <p>Web Entrepreneur</p>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>


                </div>
            </div>

        </div>
    </div>

    {{-- latest news --}}
    <div class="bg-white">
        <div class="container mx-auto font-inter">
            <div class="flex justify-center mt-10 mb-5">
                <div class="rounded-full border-2 border-blue-700 p-1 px-8">
                    <span class="font-semibold text-base text-blue-700">Latest News</span>
                </div>
            </div>
            <div class="flex justify-center mb-5">
                <span class="text-lg font-bold text-center">Latest News & Blog</span>
            </div>
            <div class="flex justify-center mb-10">
                <span class="text-center">There are many variations of passages of Lorem Ipsum available,but the
                    majority have suffered alteration in some form.
                </span>
            </div>
            <div class="grid grid-cols-12 gap-4 mb-10">
                <div class="col-span-4">
                    <div class="flex flex-col">
                        <div class="max-w-[416px] h-[313px] mb-5">
                            <figure><img src="https://api.lorem.space/image/movie" class="w-full h-[313px] rounded-xl"
                                    alt="Shoes" /></figure>
                        </div>
                        <div>
                            <span class="font-bold text-[24px]"> Make your team a Design driven company </span>
                        </div>
                        <div> <span>
                                Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been the industry's
                                standard.</span>
                        </div>

                    </div>
                </div>
                <div class="col-span-4">
                    <div class="flex flex-col">
                        <div class="max-w-[416px] h-[313px] mb-5">
                            <figure><img src="https://api.lorem.space/image/movie" class="w-full h-[313px] rounded-xl"
                                    alt="Shoes" /></figure>
                        </div>
                        <div>
                            <span class="font-bold text-[24px]"> Make your team a Design driven company </span>
                        </div>
                        <div> <span>
                                Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been the industry's
                                standard.</span>
                        </div>

                    </div>
                </div>
                <div class="col-span-4">
                    <div class="flex flex-col">
                        <div class="max-w-[416px] h-[313px] mb-5">
                            <figure><img src="https://api.lorem.space/image/movie" class="w-full h-[313px] rounded-xl"
                                    alt="Shoes" /></figure>
                        </div>
                        <div>
                            <span class="font-bold text-[24px]"> Make your team a Design driven company </span>
                        </div>
                        <div> <span>
                                Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been the industry's
                                standard.</span>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

    {{-- our clients --}}
    <div class="bg-slate-50">
        <div class="container mx-auto font-inter">
            <div class="flex justify-center pt-10 mb-5">
                <div class="rounded-full border-2 border-blue-700 p-1 px-8">
                    <span class="font-semibold text-base text-blue-700">Meet Our Clients</span>
                </div>
            </div>
            <div class="flex justify-center mb-5">
                <span class="text-lg font-bold text-center">Our Awesome Clients</span>
            </div>
            <div class="flex justify-center mb-10">
                <span class="text-center">There are many variations of passages of Lorem Ipsum available,but the
                    majority have suffered alteration in some form.
                </span>
            </div>
            <div class="flex justify-center max-w-md pb-20">
                <div class="grid grid-cols-3 gap-4">
                    <div class="card  bg-white">
                        <img src="/storage/photos/landy-theme/LogoBibit.png" alt="">
                    </div>
                    <div class="card  bg-white">
                        <img src="/storage/photos/landy-theme/logo-amazon.png" alt="">
                    </div>
                    <div class="card  bg-white">
                        <img src="/storage/photos/landy-theme/LogoBibit.png" alt="">
                    </div>
                </div>

            </div>
        </div>

    </div>

    {{-- footer --}}
    <div class="bg-white">
        <div class="container mx-auto font-inter">
            <footer class="footer p-10 text-base-content">
                <div>
                    <span class="footer-title">Services</span>
                    <a class="link link-hover">Branding</a>
                    <a class="link link-hover">Design</a>
                    <a class="link link-hover">Marketing</a>
                    <a class="link link-hover">Advertisement</a>
                </div>
                <div>
                    <span class="footer-title">Company</span>
                    <a class="link link-hover">About us</a>
                    <a class="link link-hover">Contact</a>
                    <a class="link link-hover">Jobs</a>
                    <a class="link link-hover">Press kit</a>
                </div>
                <div>
                    <span class="footer-title">Legal</span>
                    <a class="link link-hover">Terms of use</a>
                    <a class="link link-hover">Privacy policy</a>
                    <a class="link link-hover">Cookie policy</a>
                </div>
                <div>
                    <span class="footer-title">Newsletter</span>
                    <div class="form-control w-80">
                        <label class="label">
                            <span class="label-text">Enter your email address</span>
                        </label>
                        <div class="relative">
                            <input type="text" placeholder="username@site.com"
                                class="input input-bordered w-full pr-16" />
                            <button class="btn btn-primary absolute top-0 right-0 rounded-l-none">Subscribe</button>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

</body>

</html>
