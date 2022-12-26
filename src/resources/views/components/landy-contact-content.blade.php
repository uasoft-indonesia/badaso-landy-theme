 <div class="bg-white" id="Contact">
     <div class="container lg:mx-auto max-w-[1280px] w-full pt-12 pb-12 lg:pt-[100px] lg:pb-[100px]">
         <div class="grid grid-cols-1 lg:grid-cols-12 px-4 lg:gap-6">
             <div class="col-span-4 mb-4">
                 <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-1 gap-4">
                     <template x-for="datacontact in contact.list.data">
                         <div class="card rounded-lg w-full border border-slate-300 transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-100 hover:shadow-md  duration-300">
                             <div class="flex flex-col lg:flex-row mt-5  mb-5 px-8">
                                 <div class="">
                                     <button
                                         class="btn btn-circle bg-white border-blue-700  hover:border-blue-700 hover:bg-slate-200">
                                         <img src="" :src="datacontact.logo.data" class="h-6 w-6" alt="">
                                     </button>
                                 </div>
                                 <div class="lg:pl-6 pt-2 lg:pt-0">
                                     <p><span class="font-semibold text-blue-700 text-[20px] "
                                             x-text="datacontact.title.data"></span></p>
                                     <p class="pt-2 text-slate-500" x-text="datacontact.description.data">
                                         </p>
                                     <p class="text-slate-500" x-text="datacontact.description2.data">
                                         </p>
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
