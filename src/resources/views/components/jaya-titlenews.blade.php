<div class="bg-base-100 shadow-none " x-data="postData()" x-init="detail()">
    <div class="card-body font-karla ml-4 lg:ml-0 p-0 mr-4">
        <div class="flex pt-4 lg:pt-8">
            <h2 x-text="post.title" class="text-[16px] lg:text-[32px] font-bold ml-0">Analisis: Tiga Faktor Penyebab Prabowo Selalu Teratas di Survei Capres 2024
        </div>

        <div class="right flex flex-row max-w-3xl font-inter pt-2 lg:pt-4">

                <div class="flex text-[10px] lg:text-sm mb-1 text-gray-500"

                x-text='formatDateTime(post.publishedAt,8)'> Selasa, 12 April 2022 13:54 </div>
                <div x-data='user()' x-init="getuser()">
                    <div class="text-[10px] lg:text-sm text-gray-500 pl-1"> Reporter : <span class="text-red-500 cursor-pointer" x-text="username">Fikri Faqih<span></div>
                </div>


            <div class="hidden lg:grid grid-flow-col gap-3 ml-auto">
                {{-- facebook --}}
                <button>
                    <a onclick="facebook()" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="44" viewBox="0 0 32 32" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M32 16C32 7.16413 24.8358 0 16 0C7.16413 0 0 7.16413 0 16C0 23.9853 5.85016 30.6049 13.5002 31.8067V20.6261H9.43664V16H13.5002V12.4742C13.5002 8.46456 15.8898 6.24829 19.5438 6.24829C21.2943 6.24829 23.1258 6.56102 23.1258 6.56102V10.4986H21.1075C19.1208 10.4986 18.4998 11.7317 18.4998 12.9984V15.9999H22.9367L22.228 20.626H18.4996V31.8064C26.1498 30.6071 31.9998 23.9876 31.9998 15.9999L32 16Z" fill="#1977F3"/>
                        </svg>
                    </a>
                </button>
                {{-- twitter --}}
                <button>
                    <a onclick="twitter()" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="44" viewBox="0 0 39 32" fill="none">
                        <path d="M34.8158 8.04547C34.8393 8.38587 34.8393 8.72625 34.8393 9.06978C34.8393 19.5373 26.8707 31.6093 12.2996 31.6093V31.6031C7.9953 31.6093 3.78039 30.3764 0.15686 28.0518C0.782742 28.1271 1.41176 28.1647 2.04235 28.1662C5.60941 28.1693 9.0745 26.9724 11.8808 24.7687C8.49099 24.7042 5.51843 22.4942 4.47999 19.2674C5.66745 19.4965 6.89099 19.4494 8.05647 19.131C4.36079 18.3843 1.70196 15.1372 1.70196 11.3663C1.70196 11.3317 1.70196 11.2988 1.70196 11.2659C2.80314 11.8792 4.03608 12.2196 5.29725 12.2572C1.81647 9.93096 0.743526 5.30038 2.8455 1.67998C6.86745 6.629 12.8016 9.63763 19.1718 9.95607C18.5333 7.20469 19.4055 4.32156 21.4635 2.38743C24.6542 -0.611782 29.6722 -0.458058 32.6713 2.73096C34.4455 2.38116 36.146 1.73018 37.702 0.807825C37.1106 2.64156 35.8729 4.1992 34.2195 5.189C35.7898 5.00389 37.324 4.58352 38.7687 3.94194C37.7051 5.53567 36.3655 6.92389 34.8158 8.04547Z" fill="#1D9BF0"/>
                        </svg>
                    </a>
                </button>
            </div>
        </div>
        <div class="card-actions justify-end">
        </div>
    </div>
</div>
