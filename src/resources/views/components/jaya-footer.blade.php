<footer class="hidden lg:footer pt-5 pb-5 bg-base-200 text-base-content border-t-4 border-green-500">
<div class="container lg:mx-auto max-w-[996px] w-full font-karla text-base">

            <div class="lg:grid grid-cols-12 gap-24 w-full justify-center" x-data="loadFooter()" x-init="loadContentFooter()">
                 <template x-for="navFooter in result">
                <div class="col-span-4">
                    <ul class="font-bold text-[20px] leading-7 pb-4" x-text="navFooter.label">Services</ul>
                     <template x-for="childNav in navFooter.data">
                    <div class="grid grid-flow-col pb-4">
                        <ul x-text="childNav.label">Branding</ul>
                    </div>
                     </template>
                </div>
                 </template>


            </div>
           <span class="font-bold text-lg">Follow us</span>
                    <div class="grid grid-flow-col gap-11" x-data="loadFooter()" x-init="socialMedia()">
                        <template x-for="socialMedia in result">
                            <div class="">
                               <a x-bind:href="socialMedia.data.url.data.url"><img class="w-7" x-bind:src="socialMedia.data.image.data" alt=""></a>
                            </div>
                        </template>
                    </div>
</div>

</footer>



<footer class="hidden lg:footer footer-center p-10 bg-black text-white rounded font-karla justify-center">
     <div class="container mx-auto font-karla" >

        <div class="grid grid-flow-row auto-rows-max">

        <div class="grid grid-flow-col gap-4" x-data="loadFooter()" x-init="loadContentFooter()">
             <template x-for="navFooter in result">
            <a class="link link-hover" x-text="navFooter.label">About us</a>
             </template>

        </div>
        <div>
            <p class="">Copyright © 2022 - All right reserved by UASOFT</p>
        </div>

        </div>
    <div>
</footer>

{{-- footer mobile --}}
<footer class="footer-center z-30 bg-black text-white font-karla justify-center lg:hidden">

        <div class="pt-4 align-middle">
            <span class="">Copyright © 2022 - UASOFT</span>

        </div>
        <div class="align-middle">

            <span class="">All right reserved</span>
        </div>
        <div class="flex   grid-flow-col auto-cols-max flex-wrap m-4 mb-0 gap-6 justify-center pb-4" x-data="loadFooter()" x-init="loadContentFooter()">
            <template x-for="navFooter in result">
            <div class="col-span-1 text-center">
                <template x-for="childNav in navFooter.data">
                <ul class="pb-4" x-text="childNav.label">Email Marketing</ul>
                </template>

            </div>
            </template>


        </div>

</footer>




