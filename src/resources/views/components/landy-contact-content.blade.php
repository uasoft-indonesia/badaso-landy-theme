 <div class="bg-white" id="#Contact">
     <div class="container lg:mx-auto max-w-[1280px] w-full">
         <div class="grid grid-cols-1 lg:grid-cols-12 mt-10 px-4 lg:gap-6">
             <div class="col-span-4 mb-4">
                 <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-1 gap-4">
                     <template x-for="datacontact in contact.list.data">
                         <div class="card rounded-lg w-full border border-slate-300">
                             <div class="flex flex-col lg:flex-row mt-5  mb-5 px-8">
                                 <div class="">
                                     <button
                                         class="btn btn-circle bg-white border-blue-700  hover:border-blue-700 hover:bg-slate-200">
                                         {{-- <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                             viewBox="0 0 28 28" stroke="currentColor"
                                             xmlns:xlink="http://www.w3.org/1999/xlink" width="28px" height="28px"
                                             version="1.1">
                                             <path
                                                 d="M7.92072596,2.64472005 L9.58060919,2.14438844 C11.1435675,1.67327249 12.8134781,2.43464008 13.4828053,3.92352899 L14.5160823,6.22200834 C15.0865915,7.491081 14.7859439,8.98254111 13.7683291,9.93148073 L11.9633958,11.6146057 C11.9410906,11.6354021 11.9227774,11.6601187 11.9093651,11.6875342 C11.720585,12.0734103 12.0066606,13.1043886 12.9061418,14.6623357 C13.9199541,16.4183102 14.7035571,17.1131712 15.0654726,17.005305 L17.4348517,16.2809111 C18.765101,15.8742119 20.2066891,16.3591908 21.0206203,17.4872349 L22.4880851,19.5210248 C23.440761,20.8413581 23.2694403,22.6628821 22.0872853,23.782427 L20.8252038,24.9776653 C19.9337363,25.8219337 18.6854328,26.1763171 17.4833291,25.9264007 C13.966189,25.1951903 10.8150019,22.3628582 8.00336279,17.4929565 C5.18895293,12.6182556 4.31270988,8.46966127 5.44310245,5.05625686 C5.82703045,3.89692852 6.75144427,2.9971717 7.92072596,2.64472005 Z M8.35362603,4.08089467 C7.65205693,4.29236569 7.09740832,4.83222008 6.86705161,5.52781682 C5.89305385,8.46896164 6.6820141,12.2043134 9.30240089,16.7429565 C11.9202871,21.2772684 14.7578382,23.8276999 17.7886493,24.4578029 C18.5099109,24.6077526 19.2588899,24.3951235 19.7937719,23.888561 L21.0558584,22.6933179 C21.6924034,22.0904861 21.784653,21.1096654 21.2716737,20.3987168 L19.8042088,18.3649269 C19.3659382,17.7575185 18.5896985,17.496376 17.8734103,17.7153679 L15.4990066,18.4412788 C14.1848357,18.833027 12.9496858,17.7377562 11.6071037,15.4123357 C10.4705242,13.4437223 10.075962,12.0217729 10.5619671,11.0283539 C10.6558865,10.8363778 10.7841758,10.6632305 10.9404443,10.5175321 L12.7453325,8.83444937 C13.2932789,8.32348189 13.455166,7.52038798 13.1479688,6.83704116 L12.1146918,4.53856182 C11.7542848,3.7368524 10.8551022,3.32688524 10.0135093,3.58056306 L8.35362603,4.08089467 Z"
                                                 id="🎨-Color" stroke-width="2" />
                                         </svg> --}}
                                         <img src="" :src="datacontact.logo.data" class="h-6 w-6" alt="">
                                     </button>


                                 </div>
                                 <div class="lg:pl-6 pt-2 lg:pt-0">
                                     <p><span class="font-semibold text-blue-700 text-[20px] "
                                             x-text="datacontact.title.data">Contact</span></p>
                                     <p class="pt-2 text-slate-500" x-text="datacontact.description.data">
                                         0984537278623</p>
                                     <p class="text-slate-500" x-text="datacontact.description2.data">
                                         yourmail@gmail.com</p>
                                 </div>

                             </div>
                         </div>
                     </template>

                 </div>

             </div>
             <div class="col-span-8">
                 <div class="grid grid-cols-1">
                     <div class="card rounded-lg w-full border border-slate-300">
                         <div class="flex  flex-col text-center mt-10">
                             <span class="text-blue-700 font-semibold text-[20px]" x-text="contact.title.data"> Get in
                                 Touch
                             </span>
                             <p class="pb-3"> <span class="text-4xl font-semibold" x-text="contact.subtitle.data">
                                     Ready
                                     to Get Started </span>
                             <p> <span class="text-base " x-text="contact.description.data">
                                     At vero eos et accusamus et iusto odio dignissimos ducimus
                                     quiblanditiis praesentium </span></p>
                             </p>
                         </div>
                         <div class="px-8 mt-5">
                             <form x-data="contactForm()" x-on:submit.prevent="submitForm()">

                                 <div class="grid md:grid-cols-2 gap-4">
                                     {{-- name --}}
                                     <div class="">
                                         <input type="text" x-model="formData.name" placeholder="Name" name="name"
                                             class="input input-bordered w-full placeholder-gray-500 focus:placeholder-gray-300 rounded-full" />
                                         <li x-show="formData.name.length > 0" class="flex items-center py-1">
                                             <div :class="{
                                                 'bg-green-200 text-green-700': formData.name,
                                                 'bg-red-200 text-red-700': !formData.name
                                             }"
                                                 class=" rounded-full p-1 fill-current ">
                                                 <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                                                     stroke="currentColor">
                                                     <path x-show="formData.name" stroke-linecap="round"
                                                         stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                                     <path x-show="!formData.name" stroke-linecap="round"
                                                         stroke-linejoin="round" stroke-width="2"
                                                         d="M6 18L18 6M6 6l12 12" />
                                                 </svg>
                                             </div>
                                             <span
                                                 :class="{
                                                     'text-green-700': formData.name,
                                                     'text-red-700': !formData.name
                                                 }"
                                                 class="font-medium text-sm ml-3"
                                                 x-text="formData.name ?
                                            'Name is valid' : 'Name is not valid!' "></span>
                                         </li>
                                     </div>
                                     {{-- email --}}
                                     <div>
                                         <input type="email" x-model="formData.email" name="email"
                                             placeholder="Email"
                                             class="input input-bordered w-full placeholder-gray-500 focus:placeholder-gray-300 rounded-full" />
                                         <li x-show="formData.email.length > 0" class="flex items-center py-1">
                                             <div :class="{
                                                 'bg-green-200 text-green-700': isEmail(formData.email),
                                                 'bg-red-200 text-red-700': !isEmail(formData.email)
                                             }"
                                                 class=" rounded-full p-1 fill-current ">
                                                 <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                                                     stroke="currentColor">
                                                     <path x-show="isEmail(formData.email)" stroke-linecap="round"
                                                         stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                                     <path x-show="!isEmail(formData.email)" stroke-linecap="round"
                                                         stroke-linejoin="round" stroke-width="2"
                                                         d="M6 18L18 6M6 6l12 12" />
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
                                     {{-- phone --}}
                                     <div>
                                         <input type="text" x-model="formData.phone" placeholder="Phone"
                                             name="phone"
                                             class="input input-bordered w-full placeholder-gray-500 focus:placeholder-gray-300 rounded-full" />
                                         <li x-show="formData.phone.length > 0" class="flex items-center py-1">
                                             <div :class="{
                                                 'bg-green-200 text-green-700': formData.phone,
                                                 'bg-red-200 text-red-700': !formData.phone
                                             }"
                                                 class=" rounded-full p-1 fill-current ">
                                                 <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                                                     stroke="currentColor">
                                                     <path x-show="formData.phone" stroke-linecap="round"
                                                         stroke-linejoin="round" stroke-width="2"
                                                         d="M5 13l4 4L19 7" />
                                                     <path x-show="!formData.phone" stroke-linecap="round"
                                                         stroke-linejoin="round" stroke-width="2"
                                                         d="M6 18L18 6M6 6l12 12" />
                                                 </svg>
                                             </div>
                                             <span
                                                 :class="{
                                                     'text-green-700': formData.phone,
                                                     'text-red-700': !formData.phone
                                                 }"
                                                 class="font-medium text-sm ml-3"
                                                 x-text="formData.phone ?
                                            'Phone Number is valid' : 'Phone Number is not valid!' "></span>
                                         </li>
                                     </div>
                                     {{-- subject --}}
                                     <div>
                                         <input type="text" x-model="formData.subject" name="subject"
                                             placeholder="Subject"
                                             class="input input-bordered w-full placeholder-gray-500 focus:placeholder-gray-300 rounded-full" />
                                         <li x-show="formData.subject.length > 0" class="flex items-center py-1">
                                             <div :class="{
                                                 'bg-green-200 text-green-700': formData.subject,
                                                 'bg-red-200 text-red-700': !formData.subject
                                             }"
                                                 class=" rounded-full p-1 fill-current ">
                                                 <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                                                     stroke="currentColor">
                                                     <path x-show="formData.subject" stroke-linecap="round"
                                                         stroke-linejoin="round" stroke-width="2"
                                                         d="M5 13l4 4L19 7" />
                                                     <path x-show="!formData.subject" stroke-linecap="round"
                                                         stroke-linejoin="round" stroke-width="2"
                                                         d="M6 18L18 6M6 6l12 12" />
                                                 </svg>
                                             </div>
                                             <span
                                                 :class="{
                                                     'text-green-700': formData.subject,
                                                     'text-red-700': !formData.subject
                                                 }"
                                                 class="font-medium text-sm ml-3"
                                                 x-text="formData.subject ?
                                            'Subject is valid' : 'Subject is not valid!' "></span>
                                         </li>

                                     </div>
                                     {{-- message --}}
                                     <div class="md:col-span-2">
                                         <textarea class="textarea textarea-bordered w-full placeholder-gray-500 focus:placeholder-gray-300 rounded-xl"
                                             placeholder="Type Message" x-model="formData.message" name="message"></textarea>
                                         <li x-show="formData.message.length > 0" class="flex items-center py-1">
                                             <div :class="{
                                                 'bg-green-200 text-green-700': formData.message,
                                                 'bg-red-200 text-red-700': !formData.message
                                             }"
                                                 class=" rounded-full p-1 fill-current ">
                                                 <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                                                     stroke="currentColor">
                                                     <path x-show="formData.message" stroke-linecap="round"
                                                         stroke-linejoin="round" stroke-width="2"
                                                         d="M5 13l4 4L19 7" />
                                                     <path x-show="!formData.message" stroke-linecap="round"
                                                         stroke-linejoin="round" stroke-width="2"
                                                         d="M6 18L18 6M6 6l12 12" />
                                                 </svg>
                                             </div>
                                             <span
                                                 :class="{
                                                     'text-green-700': formData.message,
                                                     'text-red-700': !formData.message
                                                 }"
                                                 class="font-medium text-sm ml-3"
                                                 x-text="formData.message ?
                                            'Message is valid' : 'Message is not valid!' "></span>
                                         </li>
                                     </div>

                                 </div>
                                 <div class="mt-6 mb-14">
                                     <button
                                         class=" flex btn bg-blue-700 hover:bg-blue-900 font-bold py-2 px-4 rounded-full border border-none w-36 text-white mx-auto uppercase"
                                         x-text="buttonLabel" :disabled="loading">
                                         Send Message
                                     </button>
                                 </div>
                             </form>
                         </div>

                     </div>
                 </div>

             </div>
         </div>
     </div>
 </div>
