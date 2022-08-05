<!doctype html>
<html data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index | Landy Theme</title>
    <link href="{{ mix('css/landy-theme.css') }}" rel="stylesheet">
    <script src="{{ mix('js/landy-theme.js') }}" defer></script>
    <script src="{{ mix('js/index/landy-theme.js') }}" defer></script>
    <script src="http://maps.googleapis.com/maps/api/js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        button:disabled {
            cursor: not-allowed;
            opacity: 0.5;
        }
    </style>

</head>

<body>
 <div x-data="loadDataContent()" x-init="loadLandingPage()">
        <div class="drawer drawer-end">
            <input id="my-drawer-4" type="checkbox" class="drawer-toggle" />
            <div class="drawer-content font-inter">
                <!-- Page content here -->
                @include('landy-theme::components.landy-navbar')
                @yield('mainContent')

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


                </div>

            </div>

        </div>

    {{-- footer --}}
 </div>

</body>

</html>
