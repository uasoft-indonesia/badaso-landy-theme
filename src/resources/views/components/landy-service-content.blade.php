 <div class="bg-white">
     <div class="container lg:mx-auto max-w-[1280px] w-full pb-20 pt-10">
         <div class="flex justify-center mt-7 lg:mt-15 mb-5">
             <div class="rounded-full border-2 border-blue-700 p-1 px-8">
                 <span class="font-semibold text-sm lg:text-base text-blue-700" x-text="service.title.data">Service</span>
             </div>
         </div>
         <div class="flex justify-center mb-5">
             <span class="text-3xl lg:text-4xl font-bold text-center" x-text="service.subtitle.data">Our Best Services</span>
         </div>
         <div class="flex justify-center mb-10 mx-5 lg:mx-96">
             <span class="text-center text-sm lg:text-base text-gray-500 " x-text="service.description.data">There are many variations of passages of Lorem Ipsum
                 available, but the
                 majority have suffered
                 alteration in some form.</span>
         </div>
         <div class="grid md:grid-cols-2 lg:grid-cols-12 auto-rows-auto gap-6 px-4">
            <template x-for="data in listservice">
             <div class="lg:col-span-4">
                 <div class="card bg-base-100 rounded-lg border border-slate-200">
                     <div class="card-body">
                         <div class="flex ">
                             <div class="rounded-full  p-5 border-2 border-blue-700">
                                 {{-- <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                     viewBox="0 0 24 24" fill="none">
                                     <path
                                         d="M8.42896 8.57108L4.89342 12.1066C2.9408 14.0592 2.9408 17.2251 4.89342 19.1777C6.84604 21.1303 10.0119 21.1303 11.9645 19.1777L15.5 15.6421M8.42896 8.57108L11.9645 5.03554C13.9171 3.08292 17.0829 3.08292 19.0356 5.03554C20.9882 6.98816 20.9882 10.154 19.0356 12.1066L15.5 15.6421M8.42896 8.57108L15.5 15.6421"
                                         stroke="#001A72" stroke-width="1.5" stroke-linecap="round"
                                         stroke-linejoin="round" />
                                 </svg> --}}
                                 <img src="/storage/photos/landy-theme/capsule.png" alt="" class="w-6">
                             </div>
                         </div>
                         <div>
                             <p class="font-semibold text-base lg:text-[20px] mb-2 lg:mb-5" x-text="data.data.title.data">Refreshing Design</p>
                             <p class="text-sm lg:text-base" x-text="data.data.description.data">Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy
                                 eirmod tempor ividunt labor dolore magna.</p>
                         </div>
                     </div>
                 </div>
             </div>
             </template>



         </div>
     </div>
 </div>
