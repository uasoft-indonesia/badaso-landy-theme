<div class="bg-white">
    <div class="container lg:mx-auto max-w-[1280px] w-full px-4">
        <div class="grid md:grid-cols-2 lg:grid-cols-12 pt-10 pb-20 gap-4 px-4">
            <div class="lg:col-span-4">
                <div class="flex flex-col">
                    <div class="flex justify-center md:justify-start" x-data="loadDataContent()" x-init="loadDataConfiguration()">
                        <img :src="footerlogo" alt="" class="w-32">
                    </div>
                    <div class="pt-5 flex justify-center lg:justify-start">
                        <span x-text="footer.description.data"
                            class="text-center md:text-left text-gray-500 text-sm lg:text-base">
                        </span>
                    </div>
                    <div class="flex flex-col pt-10">
                        <div class="flex justify-center md:justify-start">
                            <span class="text-center lg:text-left text-gray-500 text-sm lg:text-base">© 2022
                                Landy Theme.</span>
                        </div>
                        <div class="flex justify-center md:justify-start">
                            <span class="text-gray-500 text-sm lg:text-base">Designed and
                                Developed by
                                UASOFT</span>
                        </div>
                    </div>
                </div>
            </div>
            <template x-for="listdata in listfooter">
                <div class="lg:col-span-2">

                    <div class="flex flex-col">
                        <div class="flex justify-center md:justify-start">
                            <span class="font-bold text-base lg:text-[20px]" x-text="listdata.title.data"></span>
                        </div>
                        <div class="pt-5">
                            <ul class="list-none">
                                <template x-for="datalabel in listdata.label.data.labeltitle.data">

                                    <li class="pb-3 text-gray-500 text-center md:text-left text-sm lg:text-base"
                                        x-text="datalabel.title.data.text">
                                        <a></a>
                                    </li>
                                </template>

                            </ul>
                        </div>


                    </div>

                </div>
            </template>

            <div class="lg:col-span-4">
                <div class="flex flex-col">
                    <div class="flex justify-center md:justify-start">
                        <span class="font-bold text-base lg:text-[20px]"
                            x-text="footer.subscribe.data.title.data">Subscribe</span>
                    </div>
                    <div class="pt-5 flex justify-center md:justify-start">
                        <span x-text="footer.subscribe.data.description.data"
                            class="text-center md:text-left text-gray-500 text-sm lg:text-base">
                        </span>
                    </div>
                    <div class="pt-10">
                        <form x-data="subscribe()" x-on:submit.prevent="submitemail()">
                            <div class="">
                                <div class="relative">
                                    <input type="email" placeholder="Email address" x-model="formData.email"
                                        name="email" class="input input-bordered w-full pr-16" />
                                    <div class="absolute inset-y-0 right-[1px] flex items-center">
                                        <button class="btn btn-square bg-blue-700 hover:bg-blue-800"
                                            :disabled="loading">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="#FFFFFF"
                                                stroke="currentColor" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 512 512"
                                                style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                                <path
                                                    d="M0,72.205v367.59h512V72.205H0z M469.425,111.59L256,289.444L42.576,111.59H469.425z M472.615,400.41H39.385V160.197    L256,340.71l216.615-180.513V400.41z" />
                                            </svg>
                                        </button>
                                    </div>

                                </div>
                                <li x-show="formData.email.length > 0" class="flex items-center py-1">
                                    <div :class="{
                                        'bg-green-200 text-green-700': isEmail(formData.email),
                                        'bg-red-200 text-red-700': !isEmail(formData.email)
                                    }"
                                        class=" rounded-full p-1 fill-current ">
                                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path x-show="isEmail(formData.email)" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            <path x-show="!isEmail(formData.email)" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </div>
                                    <span
                                        :class="{
                                            'text-green-700': isEmail(formData.email),
                                            'text-red-700': !isEmail(formData.email)
                                        }"
                                        class="font-medium text-sm ml-3"
                                        x-text="isEmail(formData.email) ?
                                            'Email is valid' : 'Email is not valid!' "></span>

                                </li>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
