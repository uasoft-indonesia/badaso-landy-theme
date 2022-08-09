 <div class="bg-white">
        <div class="container lg:mx-auto max-w-[1280px] w-full px-4">
            <div class="flex justify-center mt-7 lg:mt-15 mb-5">
                <div class="rounded-full border-2 border-blue-700 p-1 px-8">
                    <span class="font-semibold text-sm lg:text-base text-blue-700" x-text="latestnews.title.data">Latest News</span>
                </div>
            </div>
            <div class="flex justify-center mb-5">
                <span class="text-3xl lg:text-4xl font-bold text-center" x-text="latestnews.subtitle.data">Latest News & Blog</span>
            </div>
            <div class="flex justify-center mb-10 lg:mx-96">
                <span class="text-center text-base lg:text-base text-gray-500" x-text="latestnews.description.data">There are many variations of passages of Lorem Ipsum available,but the
                    majority have suffered alteration in some form.
                </span>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-12 gap-4 mb-32">
                <template x-for="list in latestnews.listnews.data">
                <div class="lg:col-span-4">
                    <div class="flex flex-col">
                        <div class="max-w-[416px] h-[313px] mb-5">
                            <figure><img
                                    src="https://demo.ayroui.com/templates/business-template/assets/images/blog/1.jpg"
                                    class="w-full h-[313px] rounded-xl" :src="list.data.image.data" alt="Shoes" /></figure>
                        </div>
                        <div>
                            <span class="font-bold text-[20px] lg:text-[24px] cursor-pointer hover:text-blue-700" x-text="list.data.title.data"> Make your team a Design driven company </span>
                        </div>
                        <div class="mt-3"> <span class="text-sm lg:text-base text-gray-500" x-text="list.data.description.data">
                                Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been the industry's
                                standard.</span>
                        </div>

                    </div>
                </div>
                </template>

            </div>

        </div>
    </div>
