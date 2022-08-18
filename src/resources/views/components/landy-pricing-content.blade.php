 <div class="bg-slate-50">
        <div class="container lg:mx-auto max-w-[1280px] w-full">
            <div class="flex justify-center pt-15 lg:pt-28 mb-5">
                <div class="rounded-full border-2 border-blue-700 p-1 px-8 ">
                    <span class="font-semibold text-sm lg:text-base text-blue-700" x-text="pricing.title.data">Pricing</span>
                </div>
            </div>
            <div class="flex justify-center mb-5">
                <span class="text-3xl lg:text-4xl font-bold text-center" x-text="pricing.subtitle.data">Pricing & Plans</span>
            </div>
            <div class="flex justify-center mx-5 lg:mx-96">
                <span class="text-center text-sm lg:text-base text-gray-500" x-text="pricing.description.data">There are many variations of passages of Lorem Ipsum available,but the
                    majority have suffered alteration in some form.
                </span>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-12 mt-10 pb-24 gap-4 px-4 lg:mx-[30px]">
                <template x-for="list in listpricing">
                <div class="lg:col-span-4">
                    <div class="card lg:w-96 bg-base-100 shadow-xl rounded-lg">
                        <div class="card-body">
                            <div class="flex justify-center mb-5">
                                <div class="rounded-full border-2 border-blue-700 p-1 px-8 mt-5 ">
                                    <span class="font-semibold text-base text-blue-700" x-text="list.data.title.data">Starter</span>
                                </div>
                            </div>
                            <div class="flex justify-center mb-5">
                                <span class="text-center text-sm lg:text-base text-gray-500" x-text="list.data.description.data">Lorem Ipsum is simply dummy text of the printing and
                                    industry.</span>
                            </div>
                            <div class="flex justify-center mb-5">
                                <span>$ <span class="font-bold text-5xl" x-text="list.data.price.data">150</span><span>/mo</span></span>
                            </div>
                            <div class="flex justify-center mb-5">
                                <button
                                    class="btn btn-outline border-blue-700 text-blue-700 hover:bg-blue-700 hover:border-none ">Start
                                    free trial</button>
                            </div>
                            <div class="flex px-4">
                                <ul class="list-disc text-base text-gray-500">
                                    <template x-for="listspesification in list.data.specification.data">
                                    <li class="pb-2" x-text="listspesification.data"> Cras justo odio.</li>
                                    </template>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                </template>

            </div>
        </div>
    </div>
