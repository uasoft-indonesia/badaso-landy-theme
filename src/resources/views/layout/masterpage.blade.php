<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('css/landy-theme.css') }}">
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
                            <svg class="swap-off fill-current" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 512 512"><path d="M64,384H448V341.33H64Zm0-106.67H448V234.67H64ZM64,128v42.67H448V128Z"/></svg>

                            <!-- close icon -->
                            <svg class="swap-on fill-current" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 512 512"><polygon points="400 145.49 366.51 112 256 222.51 145.49 112 112 145.49 222.51 256 112 366.51 145.49 400 256 289.49 366.51 400 400 366.51 289.49 256 400 145.49"/></svg>

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
                                 <button class="btn btn-outline bg-white text-blue-700 tracking-[.08em] font-bold hover:bg-blue-700 rounded-md hover:border-slate-400 px-8">Get Started</button>
                            <button type="button" class="text-blue-700 border-none bg-white  rounded-full text-sm p-3.5  self-center">
                                 <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </button>
                            <span class="ml-4 font-semibold text-white">Watch Intro</span>
                            </div>


                        </div>

                    </div>

                <div class="col-span-6">
                    <a href=""><img src="https://api.lorem.space/image/movie"
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
            <div class="text-center">
                <span class="text-lg font-bold">Our Best Services</span>

            </div>
            <div class="text-center">
                <span>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                    alteration in some form.</span>
            </div>
            <div class="grid grid-cols-12 auto-rows-auto gap-4">
                <div class="col-span-4">
                    <div class="card w-96 bg-base-100 shadow-xl">
                        <div class="card-body">
                            <h2 class="card-title">Card title!</h2>
                            <p>If a dog chews shoes whose shoes does he choose?</p>
                            <div class="card-actions justify-end">
                                <button class="btn btn-primary">Buy Now</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-4">
                    <div class="card w-96 bg-base-100 shadow-xl">
                        <div class="card-body">
                            <h2 class="card-title">Card title!</h2>
                            <p>If a dog chews shoes whose shoes does he choose?</p>
                            <div class="card-actions justify-end">
                                <button class="btn btn-primary">Buy Now</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-4">
                    <div class="card w-96 bg-base-100 shadow-xl">
                        <div class="card-body">
                            <h2 class="card-title">Card title!</h2>
                            <p>If a dog chews shoes whose shoes does he choose?</p>
                            <div class="card-actions justify-end">
                                <button class="btn btn-primary">Buy Now</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-4">
                    <div class="card w-96 bg-base-100 shadow-xl">
                        <div class="card-body">
                            <h2 class="card-title">Card title!</h2>
                            <p>If a dog chews shoes whose shoes does he choose?</p>
                            <div class="card-actions justify-end">
                                <button class="btn btn-primary">Buy Now</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-4">
                    <div class="card w-96 bg-base-100 shadow-xl">
                        <div class="card-body">
                            <h2 class="card-title">Card title!</h2>
                            <p>If a dog chews shoes whose shoes does he choose?</p>
                            <div class="card-actions justify-end">
                                <button class="btn btn-primary">Buy Now</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-4">
                    <div class="card w-96 bg-base-100 shadow-xl">
                        <div class="card-body">
                            <h2 class="card-title">Card title!</h2>
                            <p>If a dog chews shoes whose shoes does he choose?</p>
                            <div class="card-actions justify-end">
                                <button class="btn btn-primary">Buy Now</button>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>



</body>

</html>
