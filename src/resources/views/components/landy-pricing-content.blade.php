 <div class="bg-slate-50" id="Pricing">
     <div class="container lg:mx-auto max-w-[1280px] w-full pt-12 pb-12 lg:pt-[100px] lg:pb-[100px]">
         <div class="flex flex-col max-w-[820px] w-full items-center justify-center mx-auto space-y-5 mb-7">
             <div class="flex">
                 <div class="rounded-full border-2 border-blue-700 p-1 px-8 ">
                     <span class="font-semibold text-sm lg:text-base text-blue-700" x-text="pricing.title.data"></span>
                 </div>
             </div>
             <div class="flex">
                 <span class="text-3xl lg:text-4xl font-bold text-center" x-text="pricing.subtitle.data"></span>
             </div>
             <div class="flex">
                 <span class="text-center text-sm lg:text-base text-gray-500" x-text="pricing.description.data">
                 </span>
             </div>
         </div>
         <div class="grid md:grid-cols-2 lg:grid-cols-12 mt-10 pb-24 gap-4 px-4 lg:mx-[30px]">
             <template x-for="list in listpricing">
                 <div class="lg:col-span-4">
                     <div
                         class="card lg:w-96 bg-base-100 shadow-xl rounded-lg transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-100 hover:shadow-md">
                         <div class="card-body">
                             <div class="flex justify-center mb-5">
                                 <div class="rounded-full border-2 border-blue-700 p-1 px-8 mt-5 ">
                                     <span class="font-semibold text-base text-blue-700"
                                         x-text="list.title.data">Starter</span>
                                 </div>
                             </div>
                             <div class="flex justify-center mb-5">
                                 <span class="text-center text-sm lg:text-base text-gray-500"
                                     x-text="list.description.data"></span>
                             </div>
                             <div class="flex justify-center mb-5">
                                 <span>$ <span class="font-bold text-5xl"
                                         x-text="list.price.data"></span><span>/mo</span></span>
                             </div>
                             <div class="flex justify-center mb-5">
                                 <button
                                     class="btn btn-outline border-blue-700 text-blue-700 hover:bg-blue-700 hover:border-none ">Start
                                     free trial</button>
                             </div>
                             <div class="flex px-4">
                                 <ul class="list-disc text-base text-gray-500" x-data="list.benefit">
                                     <template x-for="databenefit in list.benefit.data.list.data">
                                         <li class="pb-2" x-text="databenefit.description.data"></li>
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
