<!-- modal finish -->
<input type="checkbox" id="my-modal-5" class="modal-toggle" />
<div class="modal" id="my-modal-finish">
    <div class="modal-box relative">
        <label for="my-modal-3" class="btn btn-sm btn-circle absolute right-2 top-2" onclick="closeModal()" id="closeModal()">✕</label>
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
                <li class="step step-neutral">Finish</li>
            </ul>
        </div>
        {{-- form sign up --}}

            <div class="px-8" x-data="checkAuth()">
                <button class="text-sm text-center text-black font-semibold bg-base-200 p-6 w-full">Terimakasih Pendaftaran Anda Berhasil</button>
                <div class="px-4 mb-6 mt-6 bg-white text-gray-400">
                    <div class="text-center">
                        <span class="text-sm lg:text-base">Pendaftaran Anda Berhasil</span>
                    </div>

                </div>

                <div class="mt-4 flex justify-center">
                    <button class="btn btn-info text-white" for="my-modal" x-on:click="authverify()" >Selesai</button>
                </div>

    </div>
</div>
