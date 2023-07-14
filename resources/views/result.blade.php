<!DOCTYPE html>
<html>

<head>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="{{ asset('wizard.css') }}" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
</head>

<body>
    <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
        <nav class=" dark:bg-gray-900 fixed w-full z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="/" class="flex items-center">
                    <img src="{{ asset('/images/logo.png') }}" class="h-8 mr-3" alt="Flowbite Logo">
                    <div class=" text-gray-200 text-[20px] font-extrabold">WASPAS</div>
                </a>
                <div class="flex md:order-2">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button
                                class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-800 dark:text-gray-400  dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                                <div>{{ Auth::user()->name }}</div>

                                <div class="ml-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>
                        <x-slot name="content">
                            <div class="dark:bg-gray-900 bg-slate-600">
                                <x-dropdown-link :href="route('profile.edit')">
                                    {{ __('Profile') }}
                                </x-dropdown-link>

                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                            this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                            </div>
                        </x-slot>
                    </x-dropdown>
                </div>
            </div>
        </nav>


    </div>

    <div>
        <div class="flex flex-col gap-8 container mx-auto px-8 items-center mt-20">
            <p class="w-full left-[69px] top-[1073px] m-8 text-center text-teal-800 text-[36px] font-extrabold">Hasil
                Keputusan</p>

            <table
                class=" w-full h-[120px] text-[28px] text-slate-800 text-center items-center border-separate border border-slate-800">
                <thead class=" w-full h-[50px] text-gray-50  bg-teal-800  border-separate border border-slate-800"">
                    <tr class="grid grid-cols-3">
                        <th>Alternatif/Kriteria</th>
                        <th>Nilai Normalisasi Alternatif</th>
                        <th>Rank</th>
                    </tr>
                </thead>
                <tbody class=" border-separate border border-slate-800">
                    <div>
                        <tr class="grid grid-cols-3">
                            <th class="bg-amber-500 text-gray-50">Transjakarta</th>
                            <th>2.08242</th>
                            <th>1</th>
                        </tr>
                        <tr class="grid grid-cols-3">
                            <th class="bg-amber-500 text-gray-50">Ojek</th>
                            <th>2.068047290</th>
                            <th>2</th>
                        </tr>
                        <tr class="grid grid-cols-3">
                            <th class="bg-amber-500 text-gray-50">Angkot</th>
                            <th>2.00342</th>
                            <th>3</th>
                        </tr>
                    </div>

                </tbody>
            </table>
            <p
                class="w-[1302px] left-[69px] top-[1148px]  text-justify text-gray-800 text-[28px] font-medium leading-10">
                Berdasarkan perhitungan yang telah dilakukan, didapatkan bahwa solusi yang paling ideal dari
                permasalahan Penentuan Karyawan Terbaik adalah Alternatif X. </p>

        </div>
    </div>

</body>

</html>
