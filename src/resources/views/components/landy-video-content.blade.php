 <div class="bg-slate-50">
     <div class="container lg:mx-auto max-w-[1280px] w-full pt-12 pb-12 lg:pt-[100px] lg:pb-[100px] px-4">
         <div class="flex flex-col max-w-[820px] w-full items-center justify-center mx-auto space-y-5 mb-7">
             <div class="flex">
                 <div class="rounded-full border-2 border-blue-700 p-1 px-8">
                     <span class="font-semibold text-sm lg:text-base text-blue-700" x-text="video.title.data"></span>
                 </div>
             </div>
             <div class="flex">
                 <span class="text-3xl lg:text-4xl font-bold text-center" x-text="video.subtitle.data"></span>
             </div>
             <div class="flex">
                 <span class="text-center text-sm lg:text-base text-gray-500" x-text="video.description.data">
                 </span>
             </div>
         </div>

         <div class="flex items-center justify-center mb-10">
             <div class="flex max-w-4xl bg-slate-50 relative">
                 <img src="https://demo.ayroui.com/templates/business-template/assets/images/video/video-bg.png"
                     :src="video.bgvideo.data" class="rounded-lg w-full object-cover" alt="Shoes" />
                 <div class="absolute left-1/2 top-1/3 inset-x-24 lg:top-52">
                     <a href="https://www.youtube.com/watch?v=NX_NW6bt6_s" :href="video.url.data.url"
                         class="glightbox"><button
                             class="btn btn-outline btn-circle text-blue-700  bg-white   text-sm p-3.5 hover:bg-blue-700 hover:border-white">
                             <svg class="w-5 h-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px"
                                 y="0px" viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;"
                                 xml:space="preserve" viewBox="0 0 58.752 58.752"
                                 style="enable-background:new 0 0 58.752 58.752;" xml:space="preserve">
                                 <path
                                     d="M52.524,23.925L12.507,0.824c-1.907-1.1-4.376-1.097-6.276,0C4.293,1.94,3.088,4.025,3.088,6.264v46.205   c0,2.24,1.204,4.325,3.131,5.435c0.953,0.555,2.042,0.848,3.149,0.848c1.104,0,2.192-0.292,3.141-0.843l40.017-23.103   c1.936-1.119,3.138-3.203,3.138-5.439C55.663,27.134,54.462,25.05,52.524,23.925z M49.524,29.612L9.504,52.716   c-0.082,0.047-0.18,0.052-0.279-0.005c-0.084-0.049-0.137-0.142-0.137-0.242V6.263c0-0.1,0.052-0.192,0.14-0.243   c0.042-0.025,0.09-0.038,0.139-0.038c0.051,0,0.099,0.013,0.142,0.038l40.01,23.098c0.089,0.052,0.145,0.147,0.145,0.249   C49.663,29.47,49.611,29.561,49.524,29.612z" />
                             </svg>

                         </button>

                     </a>
                 </div>
             </div>
         </div>


     </div>
 </div>
