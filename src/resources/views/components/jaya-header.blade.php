 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jaya Theme</title>
    <link href="{{ mix('css/jaya-theme.css') }}" rel="stylesheet">
    <script src="{{ mix('js/jaya-theme.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/gh/mattkingshott/iodine/dist/iodine.min.js" defer></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">

      @php
        $measurement_id = env('MIX_ANALYTICS_TRACKING_ID', null);
    @endphp

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="{{ "https://www.googletagmanager.com/gtag/js?id={$measurement_id}" }}"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', '{{$measurement_id}}');
</script>
    <!-- End Google Analytics -->
