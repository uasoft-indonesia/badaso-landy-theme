<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">

<head>
    @include('landy-theme::components.landy-header')
</head>

<body>
    <div class="font-inter">


        <div class="drawer drawer-end">
            <input id="my-drawer-4" type="checkbox" class="drawer-toggle" />
            <div class="drawer-content">
                <!-- Page content here -->
                @include('landy-theme::components.landy-navbar')

                @yield('mainContent')

                <!-- Maps -->
                <div class="container mx-auto w-full">
                    <div class="flex justify-center">
                        <div id="googleMap" class=" w-full h-52 lg:h-[512px]"></div>
                    </div>
                </div>

                {{-- footer --}}
                @include('landy-theme::components.landy-footer')
            </div>
            <div class="drawer-side">
                <label for="my-drawer-4" class="drawer-overlay"></label>
                <div class="menu p-4 overflow-y-auto w-80 bg-base-100 text-base-content pl-8">
                    <div class="mt-10 mb-5">
                        <a href=""><img
                                src="https://demo.ayroui.com/templates/business-template/assets/images/logo.svg"
                                alt=""></a>
                    </div>
                    <div class="mb-5">
                        <span>Lorem ipsum dolor sit amet adipisicing elit. Sapiente fuga nisi rerum iusto intro.</span>
                    </div>
                        <div>
                            <p class="mb-4"><span class="font-bold pb-2">Quick Links</span></p>
                        </div>

                        <div class="flex flex-col text-base text-gray-500 text-left">
                            <a href="" class="mb-4">About Us</a>
                            <a href="" class="mb-4">Our Team</a>
                            <a href="" class="mb-4">Latest News</a>
                            <a href="" class="mb-4">Contact Us</a>
                        </div>
                        {{-- <ul class="list-none text-base text-gray-500 text-left">
                            <li><a href="" >About Us</a></li>
                            <li> <a href="">Our Team</a></li>
                            <li><a href="" >Latest News</a></li>
                            <li> <a href="" >Contact Us</a></li>
                        </ul> --}}


                </div>

            </div>
        </div>



    </div>
</body>

</html>
