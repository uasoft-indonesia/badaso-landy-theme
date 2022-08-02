<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="{{ mix('css/landy-theme.css') }}" rel="stylesheet">
    <script src="{{ mix('js/landy-theme.js') }}" defer></script>
    <script src="{{ mix('js/index/landy-theme.js') }}" defer></script>
    <script src="http://maps.googleapis.com/maps/api/js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <title>Landy Theme</title>
</head>

<body>
    <div>

        {{-- navbar --}}
        <div class="navbar sticky top-0 z-30 bg-blue-700 py-5 w-full font-inter">
            <div class="container mx-auto">
                {{-- navbar top --}}
                <div class="grid grid-cols-9 gap-8 w-full text-slate-300">
                    <div class="col-span-2 pl-8">
                        <div class="flex">
                            <img src="https://i.postimg.cc/kMWqcZ9T/Full-logo-badaso-1.png" alt=""
                                class="w-32">
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
                        <button type="button"
                            class="btn btn-circle bg-blue-700 border-slate-300 text-gray-500  hover:bg-blue-800 hover:border-slate-300">
                            <span class="sr-only">Toggle Navigation</span>
                            <svg class="w-5 h-5" width="16" height="16" fill="#FFFFFF" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                            </svg>
                        </button>

                    </div>

                </div>

            </div>
        </div>
        <div class="absolute">
            <div class="drawer drawer-end">
                <input id="my-drawer-4" type="checkbox" class="drawer-toggle" />
                <div class="drawer-content">
                    <!-- Page content here -->
                    <label for="my-drawer-4" class="drawer-button btn btn-primary">Open drawer</label>
                </div>
                <div class="drawer-side">
                    <label for="my-drawer-4" class="drawer-overlay"></label>
                    <ul class="menu p-4 overflow-y-auto w-80 bg-base-100 text-base-content">
                        <!-- Sidebar content here -->
                        <li><a>Sidebar Item 1</a></li>
                        <li><a>Sidebar Item 2</a></li>
                    </ul>
                </div>
            </div>
        </div>

        {{-- landingpage --}}
        <div class="bg-blue-700">
            <div class="container mx-auto grid-cols-1 divide-y px-4 font-inter w-full pb-24">
                <div class="grid grid-cols-12 pt-10 pr-4 gap-4 ">
                    <div class="col-span-6 self-center">

                        <span class="text-4xl font-bold text-white">Corporate & Business Site Template By Ayro
                            UI.</span>
                        <div class="mt-8">
                            <span class="text-md font-normal text-slate-300 tracking-normal">
                                We are a digital agency that helps brands to achieve their business outcomes. We see
                                technology as a tool to create amazing things.
                            </span>
                        </div>
                        <div class="mt-8">
                            <div class="flex space-x-4">
                                <div>
                                    <button
                                        class="btn btn-outline bg-white text-blue-700 tracking-[.08em] font-bold hover:bg-blue-700 rounded-md hover:border-slate-400 px-8">Get
                                        Started</button>
                                </div>
                                <div class="flex">
                                    <div>
                                        <button
                                            class="btn btn-outline text-blue-700  bg-white  rounded-full text-sm p-3.5 hover:bg-blue-700 hover:border-white">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="self-center">
                                        <span class="ml-4 font-semibold text-white">Watch Intro</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-span-6">
                        <a href=""><img
                                src="https://demo.ayroui.com/templates/business-template/assets/images/header/hero-image.jpg"
                                class="rounded-lg w-[636px] h-[509px]" alt="Shoes" /></a>

                    </div>
                </div>
            </div>
        </div>

        {{-- our story --}}
        <div class="bg-slate-50">
            <div class="container mx-auto grid-cols-1 divide-y px-4 font-inter">
                <div class="absolute top-[847px] left-18 z-10">
                    <svg class="shape" width="106" height="134" viewBox="0 0 106 134" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
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
                </div>
                <div class="grid grid-cols-12 pt-10 pr-4 pb-20">
                    <div class="col-span-6 mt-24 z-20">

                        <a href=""><img
                                src="https://demo.ayroui.com/templates/business-template/assets/images/about/about-img1.jpg"
                                class=" w-[576px] h-[562px]" alt="Shoes" /></a>
                    </div>
                    <div class="col-span-6  self-center">
                        <div class="absolute top-[948px]">
                            <svg width="20" height="3" viewBox="0 0 81 3" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <line x1="0.5" y1="1.5" x2="80.5" y2="1.5" stroke="#0000FF"
                                    stroke-width="8" />
                            </svg>
                        </div>

                        <div class="pl-8">
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
                                It is a long established fact that a reader will be distracted by the readable content
                                of a
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

        {{-- our service --}}
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

        {{-- our video --}}
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
                    <a href=""><img
                            src="https://demo.ayroui.com/templates/business-template/assets/images/video/video-bg.png"
                            class="rounded-lg w-[900px] h-[450px]" alt="Shoes" /></a>

                </div>
            </div>
        </div>

        {{-- our portfolio --}}
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
                                <figure><img
                                        src="https://demo.ayroui.com/templates/business-template/assets/images/portfolio/pf1.jpg"
                                        class="w-full h-[313px] rounded-xl" alt="Shoes" /></figure>
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
                                <figure><img
                                        src="https://demo.ayroui.com/templates/business-template/assets/images/portfolio/pf2.jpg"
                                        class="w-full h-[313px] rounded-xl" alt="Shoes" /></figure>
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
                                <figure><img
                                        src="https://demo.ayroui.com/templates/business-template/assets/images/portfolio/pf3.jpg"
                                        class="w-full h-[313px] rounded-xl" alt="Shoes" /></figure>
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
                                <div class="flex justify-center mb-5">
                                    <span class="text-center">Lorem Ipsum is simply dummy text of the printing and
                                        industry.</span>
                                </div>
                                <div class="flex justify-center mb-5">
                                    <span>$ <span class="font-bold text-5xl">150</span><span>/mo</span></span>
                                </div>
                                <div class="flex justify-center mb-5">
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
                                <div class="flex justify-center mb-5">
                                    <span class="text-center">Lorem Ipsum is simply dummy text of the printing and
                                        industry.</span>
                                </div>
                                <div class="flex justify-center mb-5">
                                    <span>$ <span class="font-bold text-5xl">0</span><span>/mo</span></span>
                                </div>
                                <div class="flex justify-center mb-5">
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
                                <div class="flex justify-center mb-5">
                                    <span class="text-center">Lorem Ipsum is simply dummy text of the printing and
                                        industry.</span>
                                </div>
                                <div class="flex justify-center mb-5">
                                    <span>$ <span class="font-bold text-5xl">99</span><span>/mo</span></span>
                                </div>
                                <div class="flex justify-center mb-5">
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
                                <figure><img
                                        src="https://demo.ayroui.com/templates/business-template/assets/images/team/team-1.jpg"
                                        alt="" class="h-[350px] w-[416px]" /></figure>
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
                                <figure><img
                                        src="https://demo.ayroui.com/templates/business-template/assets/images/team/team-2.jpg"
                                        alt="" class="h-[350px] w-[416px]" /></figure>
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
                                <figure><img
                                        src="https://demo.ayroui.com/templates/business-template/assets/images/team/team-3.jpg"
                                        alt="" class="h-[350px] w-[416px]" /></figure>
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
                        guvnords geeza bloke knees up bobby, sloshed arse William cack Richard. Bloke fanny around
                        chesed of
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
                                <div class="ml-8">
                                    <svg class="shape1" width="62" height="31" viewBox="0 0 62 31"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M-1.10459e-06 -3.51286e-06C-1.46049e-06 4.07097 0.801837 8.10209 2.35973 11.8632C3.91763 15.6243 6.20107 19.0417 9.07969 21.9203C11.9583 24.7989 15.3757 27.0824 19.1368 28.6403C22.8979 30.1982 26.929 31 31 31C35.071 31 39.1021 30.1982 42.8632 28.6403C46.6243 27.0824 50.0417 24.7989 52.9203 21.9203C55.7989 19.0417 58.0824 15.6243 59.6403 11.8632C61.1982 8.10209 62 4.07098 62 -8.02757e-07L31 -8.02758e-07L-1.10459e-06 -3.51286e-06Z"
                                            fill="#FF8686"></path>
                                    </svg>
                                </div>
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
                            {{-- <div class="absolute right-0">
                            <svg class="shape2" width="82" height="74" viewBox="0 0 82 74" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="45.0005" cy="37" r="37" fill="#FE9955">
                                </circle>
                                <path
                                    d="M0.175359 2.73871C1.17682 4.85939 2.2739 6.88145 3.46802 8.90242C4.46524 10.732 5.46811 12.9497 6.94627 14.4811C7.73528 15.3431 9.37218 14.4457 8.96708 13.287C8.96708 13.287 8.96566 13.1899 8.86863 13.1913C9.05846 12.8974 9.2497 12.7003 9.53657 12.4052C9.63361 12.4037 9.82627 12.304 9.92331 12.3026C10.116 12.2027 10.3072 12.0059 10.4985 11.8088C15.7794 14.5465 21.0575 17.0902 25.9574 20.3188C27.4271 21.268 28.8012 22.3157 30.081 23.5587C25.1774 26.7359 19.5257 31.8654 20.6822 37.9632C22.255 45.996 30.8275 41.5036 33.678 37.2886C37.1963 32.2874 36.94 28.0206 33.4815 23.8005C36.7525 21.8117 40.4199 20.3993 44.0133 20.5412C52.6538 20.7066 54.2222 28.4483 52.0851 34.9823C49.548 34.0486 46.6328 33.7999 44.1182 34.4189C39.5716 35.4557 35.5978 42.5017 38.8594 46.5306C42.1196 50.4625 50.1618 42.8719 51.7762 40.422C52.2515 39.7356 52.7252 38.9523 53.1021 38.1703C53.2005 38.266 53.2977 38.2645 53.396 38.3602C60.4477 42.7221 54.5176 48.729 49.6083 51.5181C48.8377 51.9175 49.5325 52.975 50.3045 52.6726C55.415 50.3659 61.3648 45.7175 57.7824 39.6551C56.8879 38.2123 55.6081 36.9692 54.0428 36.1184C56.0998 30.7503 56.0094 24.5398 51.101 20.7292C45.211 16.1562 37.6845 19.1774 32.1017 22.3646C32.0032 22.2691 32.0032 22.2691 31.9048 22.1733C26.4872 16.7199 18.8689 13.4339 12.0254 10.0395C12.5007 9.3532 12.9746 8.56968 13.4499 7.88351C13.7339 7.39393 13.627 6.71609 13.2332 6.33375C9.89298 3.56774 5.88339 1.49089 1.50686 0.875232C0.435374 0.599667 -0.325372 1.67822 0.175359 2.73871ZM33.341 27.4905C35.5295 31.1468 32.9632 34.8724 30.4799 37.6262C27.2329 41.2646 21.8818 40.372 22.8688 34.8253C23.41 32.0028 25.9005 29.7342 27.9114 27.8608C28.9646 26.8749 30.2118 25.886 31.5576 24.9929C32.2483 25.7593 32.8433 26.6243 33.341 27.4905ZM51.1458 37.131C49.8256 39.7708 47.913 41.7398 45.5099 43.3277C44.4523 44.0226 43.2964 44.6217 42.0392 44.9312C38.7541 45.9496 40.3273 40.6856 40.9868 39.3172C42.9709 35.6001 47.6329 35.8234 51.1458 37.131ZM10.7274 7.53494C10.7288 7.63198 10.6318 7.63339 10.6332 7.73043C10.3421 7.73467 10.0538 7.93314 9.86536 8.32395C9.58414 9.00745 9.20589 9.69236 8.82764 10.3774C8.63781 10.6714 8.06407 11.2621 8.25814 11.2592C8.16111 11.2607 8.06548 11.3591 8.0669 11.4561C7.46913 10.3974 6.67729 9.34112 6.07953 8.28236C5.28345 6.93515 4.48596 5.4909 3.68846 4.0465C6.12426 4.69011 8.56855 5.91625 10.7274 7.53494Z"
                                    fill="#7C451F"></path>
                            </svg>
                        </div> --}}
                        </div>
                        <div class="carousel-item bg-white w-1/2 rounded-md">
                            <div class="card ">
                                <div class="ml-8">
                                    <svg class="shape1" width="62" height="31" viewBox="0 0 62 31"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M-1.10459e-06 -3.51286e-06C-1.46049e-06 4.07097 0.801837 8.10209 2.35973 11.8632C3.91763 15.6243 6.20107 19.0417 9.07969 21.9203C11.9583 24.7989 15.3757 27.0824 19.1368 28.6403C22.8979 30.1982 26.929 31 31 31C35.071 31 39.1021 30.1982 42.8632 28.6403C46.6243 27.0824 50.0417 24.7989 52.9203 21.9203C55.7989 19.0417 58.0824 15.6243 59.6403 11.8632C61.1982 8.10209 62 4.07098 62 -8.02757e-07L31 -8.02758e-07L-1.10459e-06 -3.51286e-06Z"
                                            fill="#FF8686"></path>
                                    </svg>
                                </div>
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
                                <div class="ml-8">
                                    <svg class="shape1" width="62" height="31" viewBox="0 0 62 31"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M-1.10459e-06 -3.51286e-06C-1.46049e-06 4.07097 0.801837 8.10209 2.35973 11.8632C3.91763 15.6243 6.20107 19.0417 9.07969 21.9203C11.9583 24.7989 15.3757 27.0824 19.1368 28.6403C22.8979 30.1982 26.929 31 31 31C35.071 31 39.1021 30.1982 42.8632 28.6403C46.6243 27.0824 50.0417 24.7989 52.9203 21.9203C55.7989 19.0417 58.0824 15.6243 59.6403 11.8632C61.1982 8.10209 62 4.07098 62 -8.02757e-07L31 -8.02758e-07L-1.10459e-06 -3.51286e-06Z"
                                            fill="#FF8686"></path>
                                    </svg>
                                </div>
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
                                <figure><img
                                        src="https://demo.ayroui.com/templates/business-template/assets/images/blog/1.jpg"
                                        class="w-full h-[313px] rounded-xl" alt="Shoes" /></figure>
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
                                <figure><img
                                        src="https://demo.ayroui.com/templates/business-template/assets/images/blog/2.jpg"
                                        class="w-full h-[313px] rounded-xl" alt="Shoes" /></figure>
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
                                <figure><img
                                        src="https://demo.ayroui.com/templates/business-template/assets/images/blog/3.jpg"
                                        class="w-full h-[313px] rounded-xl" alt="Shoes" /></figure>
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
                <div class="flex justify-center pb-20">
                    <div class="flex flex-col gap-4">

                        <div class="flex flex-row space-x-4">
                            <div class="border-slate-200 bg-white rounded-lg p-8 px-8">
                                <img src="https://demo.ayroui.com/templates/business-template/assets/images/client-logo/graygrids.svg"
                                    alt="">
                            </div>
                            <div class="border-slate-200 bg-white rounded-lg p-8 px-8">
                                <img src="https://demo.ayroui.com/templates/business-template/assets/images/client-logo/uideck.svg"
                                    alt="">
                            </div>
                            <div class="border-slate-200 bg-white rounded-lg p-8 px-8">
                                <img src="https://demo.ayroui.com/templates/business-template/assets/images/client-logo/ayroui.svg"
                                    alt="">
                            </div>
                        </div>
                        <div class="flex flex-row space-x-4 ml-8">
                            <div class="border-slate-200 bg-white rounded-lg p-8 px-4">
                                <img src="https://demo.ayroui.com/templates/business-template/assets/images/client-logo/lineicons.svg"
                                    alt="">
                            </div>
                            <div class="border-slate-200 bg-white rounded-lg p-8 px-4 ">
                                <img src="https://demo.ayroui.com/templates/business-template/assets/images/client-logo/tailwindtemplates.svg"
                                    alt="">
                            </div>
                            <div class="border-slate-200 bg-white rounded-lg p-8 px-4">
                                <img src="https://demo.ayroui.com/templates/business-template/assets/images/client-logo/ecomhtml.svg"
                                    alt="">
                            </div>
                        </div>
                    </div>


                </div>

            </div>

        </div>

        {{-- contact us --}}
        <div class="bg-white">
            <div class="container mx-auto font-inter">
                <div class="grid grid-cols-12 mt-10 gap-6">
                    <div class="col-span-4">
                        <div class="flex flex-col gap-4">
                            <div class="rounded-lg w-full border border-slate-300">
                                <div class="flex flex-row mt-5 ml-10 mb-5">
                                    <div class="">
                                        <button
                                            class="btn btn-circle bg-blue-700 border-blue-700 hover:bg-blue-900  hover:border-blue-700">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                        </button>

                                    </div>
                                    <div class="pl-6">
                                        <p><span class="font-semibold text-blue-700 text-[20px] ">Contact</span></p>
                                        <p class="pt-2 text-slate-500">0984537278623</p>
                                        <p class="text-slate-500">yourmail@gmail.com</p>
                                    </div>

                                </div>
                            </div>
                            <div class="rounded-lg w-full border border-slate-300">
                                <div class="flex flex-row mt-5 ml-10 mb-5">
                                    <div class="">
                                        <button
                                            class="btn btn-circle bg-blue-700 border-blue-700 hover:bg-blue-900  hover:border-blue-700">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                        </button>

                                    </div>
                                    <div class="pl-6">
                                        <p><span class="font-semibold text-blue-700 text-[20px] ">Address</span></p>
                                        <p class="pt-2 text-slate-500">175 5th Ave, New York, NY 10010</p>
                                        <p class="text-slate-500">United States</p>
                                    </div>

                                </div>
                            </div>
                            <div class="rounded-lg w-full border border-slate-300">
                                <div class="flex flex-row mt-5 ml-10 mb-5">
                                    <div class="">
                                        <button
                                            class="btn btn-circle bg-blue-700 border-blue-700 hover:bg-blue-900  hover:border-blue-700">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                        </button>

                                    </div>
                                    <div class="pl-6">
                                        <p><span class="font-semibold text-blue-700 text-[20px] ">Schedule</span></p>
                                        <p class="pt-2 text-slate-500">24 Hours / 7 Days Open</p>
                                        <p class="text-slate-500">Office time: 10 AM - 5:30 PM</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-8">
                        <div class="rounded-lg w-full border border-slate-300">
                            <div class="flex  flex-col text-center mt-10">
                                <span class="text-blue-700 font-semibold text-[20px]"> Get in Touch </span>
                                <p class="pb-3"> <span class="text-4xl font-semibold"> Ready to Get Started </span>
                                <p> <span class="text-base ">
                                        At vero eos et accusamus et iusto odio dignissimos ducimus
                                        quiblanditiis praesentium </span></p>
                                </p>
                            </div>
                            <div class="px-8 mt-5">
                                <div class="grid grid-cols-2 gap-4">
                                    <div class="">
                                        <input type="text" placeholder="Name" name="name"
                                            class="input input-bordered w-full placeholder-gray-500 focus:placeholder-gray-300 rounded-full" />
                                    </div>
                                    <div>
                                        <input type="email" name="email" placeholder="Email"
                                            class="input input-bordered w-full placeholder-gray-500 focus:placeholder-gray-300 rounded-full" />
                                    </div>
                                    <div>
                                        <input type="text" placeholder="Phone" name="phone"
                                            class="input input-bordered w-full placeholder-gray-500 focus:placeholder-gray-300 rounded-full" />

                                    </div>
                                    <div>
                                        <input type="text" name="subject" placeholder="Subject"
                                            class="input input-bordered w-full placeholder-gray-500 focus:placeholder-gray-300 rounded-full" />


                                    </div>
                                    <div class="lg:col-span-2">
                                        <textarea class="textarea textarea-bordered w-full placeholder-gray-500 focus:placeholder-gray-300 rounded-xl"
                                            placeholder="Type Message" name="message"></textarea>
                                    </div>

                                </div>
                                <div class="mt-6 mb-14">
                                    <button
                                        class=" flex btn bg-blue-700 hover:bg-blue-900 font-bold py-2 px-4 rounded-full border border-none w-36 text-white mx-auto uppercase">
                                        Send Message
                                    </button>
                                </div>
                            </div>

                        </div>
                    </div>


                </div>
            </div>
        </div>

        <!-- Maps -->
        <div class="container mx-auto w-full">
            <div class="flex justify-center">
                <div id="googleMap" class=" w-full h-52 lg:h-[512px]"></div>
            </div>
        </div>

        {{-- footer --}}
        <div class="bg-white">
            <div class="container mx-auto font-inter">
                <div class="grid grid-cols-12 pt-10 pb-20 gap-4">
                    <div class="col-span-4">
                        <div class="flex flex-col">
                            <div class="flex">
                                <img src="https://demo.ayroui.com/templates/business-template/assets/images/logo.svg"
                                    alt="" class="w-32">
                            </div>
                            <div class="pt-5">
                                <span>
                                    Making the world a better place through constructing elegant
                                    hierarchies.</span>
                            </div>
                            <div class="pt-10">
                                <p class="">
                                    <span>© 2022 Landy Theme.</span>
                                </p>
                                <p>Designed and Developed by
                                    UASOFT</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-4">

                        <div class="flex flex-row space-x-24">
                            <div class="flex flex-col">
                                <div class="flex">
                                    <span class="font-bold text-lg">Solutions</span>
                                </div>
                                <div class="pt-5">
                                    <ul class="list-none">
                                        <li class="pb-3"><a>Marketing</a></li>
                                        <li class="pb-3"><a>Analytics</a></li>
                                        <li class="pb-3"><a>Commerce</a></li>
                                        <li class="pb-3"><a>Insights</a></li>
                                    </ul>
                                </div>


                            </div>
                            <div class="flex flex-col">
                                <div class="flex">
                                    <span class="font-bold text-lg">Support</span>
                                </div>
                                <div class="pt-5">
                                    <ul class="list-none">
                                        <li class="pb-3"><a>Marketing</a></li>
                                        <li class="pb-3"><a>Analytics</a></li>
                                        <li class="pb-3"><a>Commerce</a></li>
                                        <li class="pb-3"><a>Insights</a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-span-4">
                        <div class="flex flex-col">
                            <div class="flex">
                                <span class="font-bold text-lg">Subscribe</span>
                            </div>
                            <div class="pt-5">
                                <span>
                                    Subscribe to our newsletter for the latest updates</span>
                            </div>
                            <div class="pt-10">
                                <div class="relative">
                                    <input type="text" placeholder="username@site.com"
                                        class="input input-bordered w-full pr-16" />
                                    <button
                                        class="btn btn-info absolute top-0 right-0 rounded-l-none">Subscribe</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
