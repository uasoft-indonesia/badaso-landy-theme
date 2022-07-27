    <!-- modal sign up -->
<input type="checkbox"  class="modal-toggle rounded-none" />

<div class="modal" id="my-modal-signup">
    <div class="modal-box relative p-0">
        <label for="my-modal-3" x-on:click="closeModal()" class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
        {{-- modal header --}}
        <div class="justify-between items-start p-4 rounded-t border-b bg-black">
            <div class="text-4xl font-bold text-center text-white">
                jayaID
            </div>
            <div class="text-sm text-center mt-2 text-white">Satu Akun Untuk Semua Akses</div>
        </div>
        <div class="mt-4 mb-10">
            <ul class="steps w-full">
                <li class="step step-neutral">Identify</li>
                <li class="step">Verification</li>
                <li class="step">Finish</li>
            </ul>
        </div>
    <!-- body start -->
    <div class="">
        <div class="max-w-sm mx-auto px-6" x-data="getData()">
            <!-- modal starts -->

            <div x-show.transition="status || isError" style="background-color: rgb(0,0,0, .5)" class="mx-auto absolute top-0 left-0 w-full h-full flex items-center
            shadow-lg overflow-y-auto z-50">
                <div class="container mx-auto rounded p-4 mt-2 overflow-y-auto">
                    <div class="bg-white rounded px-8 py-8 max-w-lg mx-auto">
                        <h1 class="font-bold text-2xl mb-3 text-center" x-text="modalHeaderText"></h1>
                        <div :class="{'text-green-700': status, 'text-red-700': isError}"
                            class="modal-body text-center">
                            <p x-text="modalBodyText"></p>
                        </div>
                        <div class="mt-4">
                            <button @click="location.reload()" class="mt-3 text-lg font-semibold bg-gray-800 w-full text-white rounded-lg px-6 py-3 block shadow-xl hover:text-white hover:bg-black">
                                Close Modal
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal ends -->

            <!-- form container starts -->
            <div x-show="!status && !isError" class="relative flex flex-wrap items-center">
                <div class="w-full relative">

                    <div class="">
                        <!-- registration form starts-->

                        <form  method="POST" class="" @submit.prevent="submitData" id="formRegister">
                            <div class="mx-auto max-w-lg ">

                                <div class="py-1">
                                    <span class="px-1 text-sm text-gray-600 font-bold">Name</span>
                                    <input placeholder="" type="text" x-model="formData.name" class="text-md block px-3 py-2 rounded-lg w-full bg-white border
                                    border-gray-300 placeholder-gray-600 focus:placeholder-gray-500
                                    focus:bg-white focus:border-gray-600 focus:outline-none" required>
                                </div>
                                  <!-- Validate Name -->
                                        <li x-show="formData.name.length > 0" class="flex items-center py-1">
                                            <div :class="{'bg-green-200 text-green-700': isName(formData.name),
                                            'bg-red-200 text-red-700': !isName(formData.name)}" class=" rounded-full p-1 fill-current ">
                                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                                                    stroke="currentColor">
                                                    <path x-show="isName(formData.name)" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                                    <path x-show="!isName(formData.name)" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="M6 18L18 6M6 6l12 12" />
                                                </svg>
                                            </div>
                                            <span :class="{'text-green-700': isName(formData.name),
                                            'text-red-700': !isName(formData.name)}" class="font-medium text-sm ml-3" x-text="isName(formData.name) ?
                                            'Name is valid' : 'Name is not valid!' "></span>
                                        </li>


                                <div class="py-1">
                                    <span class="px-1 text-sm text-gray-600 font-bold">Email</span>
                                    <input placeholder="" type="email" x-model="formData.email" id="getemail" class="text-md block px-3 py-2 rounded-lg w-full bg-white border
                                    border-gray-300 placeholder-gray-600 focus:placeholder-gray-500
                                    focus:bg-white focus:border-gray-600 focus:outline-none" id="myemail" required>
                                </div>
                                 <!-- Validate Email -->
                                        <li x-show="formData.email.length > 0" class="flex items-center py-1">
                                            <div :class="{'bg-green-200 text-green-700': isEmail(formData.email),
                                            'bg-red-200 text-red-700': !isEmail(formData.email)}" class=" rounded-full p-1 fill-current ">
                                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                                                    stroke="currentColor">
                                                    <path x-show="isEmail(formData.email)" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                                    <path x-show="!isEmail(formData.email)" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="M6 18L18 6M6 6l12 12" />
                                                </svg>
                                            </div>
                                            <span :class="{'text-green-700': isEmail(formData.email),
                                            'text-red-700': !isEmail(formData.email)}" class="font-medium text-sm ml-3" x-text="isEmail(formData.email) ?
                                            'Email is valid' : 'Email is not valid!' "></span>
                                        </li>

                                <div class="py-1">
                                    <span class="px-1 text-sm text-gray-600 font-bold">Username</span>
                                    <input placeholder="" type="text" x-model="formData.username" class="text-md block px-3 py-2 rounded-lg w-full bg-white border
                                    border-gray-300 placeholder-gray-600 focus:placeholder-gray-500
                                    focus:bg-white focus:border-gray-600 focus:outline-none"   required>
                                </div>
                                  <!-- Validate Username -->
                                        <li x-show="formData.username.length > 0" class="flex items-center py-1">
                                            <div :class="{'bg-green-200 text-green-700': isUsername(formData.username),
                                            'bg-red-200 text-red-700': !isUsername(formData.username)}" class=" rounded-full p-1 fill-current ">
                                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                                                    stroke="currentColor">
                                                    <path x-show="isUsername(formData.username)" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                                    <path x-show="!isUsername(formData.username)" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="M6 18L18 6M6 6l12 12" />
                                                </svg>
                                            </div>
                                            <span :class="{'text-green-700': isUsername(formData.username),
                                            'text-red-700': !isUsername(formData.username)}" class="font-medium text-sm ml-3" x-text="isUsername(formData.username) ?
                                            'Username is valid' : 'Username is not valid!' "></span>
                                        </li>


                                <div class="py-1">
                                    <span class="px-1 text-sm text-gray-600 font-bold">Password</span>
                                    <input placeholder="" type="password" x-model="formData.password" class="text-md block px-3 py-2 rounded-lg w-full bg-white border
                                    border-gray-300 placeholder-gray-600 focus:placeholder-gray-500
                                    focus:bg-white focus:border-gray-600 focus:outline-none" required>
                                </div>
                                <!-- Validate Password -->
                                        <li x-show="formData.password.length > 0" class="flex items-center py-1">
                                            <div :class="{'bg-green-200 text-green-700': formData.password.length > 7,
                                            'bg-red-200 text-red-700':formData.password.length < 8 }" class=" rounded-full p-1 fill-current ">
                                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                                                    stroke="currentColor">
                                                    <path x-show="formData.password.length > 7" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                                    <path x-show="formData.password.length < 8" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="M6 18L18 6M6 6l12 12" />
                                                </svg>
                                            </div>

                                            <span :class="{'text-green-700': formData.password.length > 7,
                                            'text-red-700':formData.password.length < 8 }" class="font-medium text-sm ml-3" x-text="formData.password.length > 7 ?
                                            'The minimum length is reached' :
                                            'At least 8 characters required' "></span>
                                        </li>

                                <div class="py-1">
                                    <span class="px-1 text-sm text-gray-600 font-bold">Password Confirm</span>
                                    <input placeholder="" type="password" x-model="formData.passwordConfirmation" class="text-md block px-3 py-2 rounded-lg w-full bg-white border border-gray-300 placeholder-gray-600 focus:placeholder-gray-500
                                    focus:bg-white focus:border-gray-600 focus:outline-none" required>
                                </div>
                                  <li x-show="formData.passwordConfirmation > 0" class="flex items-center py-1">
                                            <div :class="{'bg-green-200 text-green-700':
                                                formData.password === formData.passwordConfirmation,
                                                'bg-red-200 text-red-700':formData.password !==
                                                formData.passwordConfirmation}" class=" rounded-full p-1 fill-current ">
                                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                                                    stroke="currentColor">
                                                    <path x-show="formData.password === formData.passwordConfirmation"
                                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M5 13l4 4L19 7" />
                                                    <path x-show="formData.password !== formData.passwordConfirmation"
                                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M6 18L18 6M6 6l12 12" />
                                                </svg>
                                            </div>

                                            <span :class="{'text-green-700':
                                            formData.password === formData.passwordConfirmation,
                                            'text-red-700':formData.password !== formData.passwordConfirmation}" class="font-medium text-sm ml-3"
                                                x-text="formData.password === formData.passwordConfirmation ?
                                            'Passwords match' : 'Passwords do not match' "></span>
                                        </li>

                                <button class="mt-3 text-sm lg:text-base font-semibold bg-gray-800 w-full text-white
                                rounded-xl px-6 py-3 block hover:text-white hover:bg-black" x-text="buttonLabel" :disabled="loading">
                                </button>

                                {{-- sign up --}}
                                <div class="mt-6">
                                    <span class="text-xs">Sudah Memiliki Akun ?
                                    <label for="my-modal-3" <a class="text-blue-500 text-xs cursor-pointer">Log in</a></label></span>
                                </div>
                            </div>
                        </form>
                        <!-- registration form ends -->
                    </div>
                </div>
            </div>
        </div>
        <!-- form container ends -->

    </div>
</div>
    <!-- body end -->

{{-- modal verification --}}
<div class="modal" id="my-modal-verification">
    <div class="modal-box absolute">
        <label for="my-modal-3" class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
        {{-- modal header --}}
        <div class="justify-between items-start p-4 rounded-t border-b bg-black">
            <div class="text-4xl font-bold text-center text-white">
                jayaID
            </div>
            <div class="text-sm text-center mt-2 text-white">Satu Akun Untuk Semua Akses</div>
        </div>
        <div class="mt-4 mb-10">
            <ul class="steps w-full">
                <li class="step step-neutral">Identify</li>
                <li class="step step-neutral">Verification</li>
                <li class="step">Finish</li>
            </ul>
        </div>
        {{-- form verifikasi --}}
        <form  x-data="getVerify()" @submit.prevent="submitVerify">
            <div class="px-8">
                <button class="text-sm text-center text-black font-semibold bg-base-200 p-6 w-full">VERIFIKASI AKUN
                </button>
                <div class="px-4 mb-6 mt-6 bg-white text-gray-400">
                    <div class="text-center">
                        <span class="text-sm lg:text-base">Pendaftaran Anda Berhasil</span>
                    </div>
                    <div class="text-center">
                        <span class="text-sm lg:text-base">Petunjuk untuk memverifikasi Akun telah dikirim ke</span>
                          <span class="text-sm lg:text-base" id="email_user"></span>

                    </div>
                    {{-- <div class="form-control w-full max-w-xs">

                        <input type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs"/>


                    </div> --}}
                </div>

                <div class="text-center mt-6 px-6 bg-white text-gray-400">
                    <span class="text-sm lg:text-base">Masukkan Kode Token :</span>
                </div>
                <div class="mt-2 mb-3 flex justify-center">
                    <input type="text" placeholder="" class="input w-28 text-center border border-gray-300" maxlength="6" id="tokenId" x-model="formVerify.token">
                </div>
                {{-- <div class="text-center px-6 bg-white">
                    <span class="text-sm lg:text-base text-gray-400">Tidak mendapat Email?</span>
                    <span class="text-sm lg:text-base text-black">Kirim ulang verifikasi</span>
                </div> --}}
                <div class="flex mt-4">
                    <button class="btn btn-outline btn-error mr-auto">Batalkan</button>
                    <button class="btn btn-info text-white ml-auto" type="submit">Selanjutnya</button>
                </div>
            </div>
        </form>
    </div>
</div>

