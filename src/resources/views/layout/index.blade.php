<!doctype html>
<html data-theme="light" class="scroll-smooth">

<head>
    @include('landy-theme::components.landy-header')
</head>

<body>
    {{-- @include('landy-theme::components.landy-scrolltop') --}}
    <div class="splash">
        <progress class="progress progress-info  w-56"></progress>
    </div>


    <div x-data="loadDataContent()" x-init="loadLandyContent()">
        <div class="drawer drawer-end">
            <input id="my-drawer-sidebar" type="checkbox" class="drawer-toggle" />
            <div class="drawer-content font-inter">
                <!-- Page content here -->
                @include('landy-theme::components.landy-navbar')
                @yield('mainContent')
            </div>
            <div class="drawer-side">
                <label for="my-drawer-sidebar" class="drawer-overlay"></label>
                @include('landy-theme::components.landy-sidebar')
            </div>
        </div>


    </div>
</body>

</html>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
<script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>

<script type="text/javascript">
    var lightbox = GLightbox();
    lightbox.on('open', (target) => {
        console.log('lightbox opened');
    });
</script>
