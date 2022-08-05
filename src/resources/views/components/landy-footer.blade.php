<div class="bg-white">
    <div class="container lg:mx-auto max-w-[1280px] w-full px-4">
        <div class="grid lg:grid-cols-12 pt-10 pb-20 gap-4">
            <div class="col-span-4">
                <div class="flex flex-col">
                    <div class="flex justify-center lg:justify-start">
                        <img src="https://demo.ayroui.com/templates/business-template/assets/images/logo.svg"
                            alt="" class="w-32">
                    </div>
                    <div class="pt-5 flex justify-center lg:justify-start">
                        <span x-text="footer.description.data" class="text-center lg:text-left">
                            Making the world a better place through constructing elegant
                            hierarchies.</span>
                    </div>
                    <div class="flex flex-col pt-10">
                      <div class="flex justify-center lg:justify-start">
                             <span x-text="footer.copyright.data" class="text-center lg:text-left">© 2022 Landy Theme.</span>
                      </div>
                      <div class="flex justify-center lg:justify-start">
                         <span x-text="footer.created.data" class="">Designed and Developed by
                            UASOFT</span>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col-span-4">

                <div class="flex flex-row space-x-24">
                    <div class="flex flex-col">
                        <div class="flex">
                            <span class="font-bold text-lg" x-text="footer.namefooter1.label">Solutions</span>
                        </div>
                        <div class="pt-5">
                            <ul class="list-none">
                                <template x-for="listfooter in listfooter">
                                <li class="pb-3" x-text="listfooter.data.text"><a>Marketing</a></li>
                                </template>

                            </ul>
                        </div>


                    </div>
                    <div class="flex flex-col">
                        <div class="flex">
                            <span class="font-bold text-lg" x-text="footer.namefooter2.label">Support</span>
                        </div>
                        <div class="pt-5">
                            <ul class="list-none">
                                <template x-for="listdata in footer.namefooter2.data">
                                <li class="pb-3" x-text="listdata.data.text"><a>Marketing</a></li>
                                </template>

                            </ul>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-span-4">
                <div class="flex flex-col">
                    <div class="flex">
                        <span class="font-bold text-lg" x-text="footer.subscribe.data.title.data">Subscribe</span>
                    </div>
                    <div class="pt-5">
                        <span x-text="footer.subscribe.data.description.data">
                            Subscribe to our newsletter for the latest updates</span>
                    </div>
                    <div class="pt-10">

                        <div class="form-control">
                            <div class="input-group">
                                <input type="text" placeholder="Email address"
                                    class="input input-bordered w-full pr-16" required />
                                <button class="btn btn-square bg-blue-700 hover:bg-blue-800">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="#FFFFFF"
                                        stroke="currentColor" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                                        id="Layer_1" x="0px" y="0px" viewBox="0 0 512 512"
                                        style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                        <path
                                            d="M0,72.205v367.59h512V72.205H0z M469.425,111.59L256,289.444L42.576,111.59H469.425z M472.615,400.41H39.385V160.197    L256,340.71l216.615-180.513V400.41z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
