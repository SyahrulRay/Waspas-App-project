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
    <div class="justify-center items-center mt-32">
        <form action="{{ route('addproblems.store') }}" method="POST">
            @csrf
            <div>
                <div class="flex flex-row justify-center ">
                    <div class="items-center gap-6 mt-8">
                        <div class="form-group items-center">
                            <label for="title">Judul Permasalahan:</label>
                            <input type="text" name="nameproblems" class="form-control rounded-lg" id="">
                            @error('nameproblems')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="flex flex-col gap-8">
                            <button class="btn btn-primary text-gray-600 w-full h-12 nextBtn btn-lg pull-right"
                                type="submit">Tambah</button>
                            <div class="container mx-auto px-8 mt-14">
                                <h2 class="text-[48px] font-extrabold text-gray-800 mb-8 text-center">
                                    {{ $problemsTable->nameproblems }}</h2>

                            </div>
                            <a class="btn btn-primary text-gray-600 w-full h-12 nextBtn btn-lg pull-right"
                                href="{{ route('wizard') }}" type="submit">Tambah Data</a>
                        </div>
                        <div class="mt-16">
                            <table class="table table-bordered text-center">
                                <thead class="xw-full h-[48px] text-gray-300  bg-teal-800">
                                    <tr>

                                        <th>Alternatif</th>
                                        @foreach ($criteriaTable as $crit)
                                            <td>{{ $crit->namecriteria }}</td>
                                        @endforeach
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($alternatifTable as $alt)
                                        <tr>
                                            <td>{{ $alt->namealternatif }}</td>
                                            @foreach ($criteriaTable as $crit)
                                                <td>{{ $crit->values }}</td>
                                            @endforeach
                                            <th class="w-full">
                                                <a href="" class="m-4 hover:text-blue-700"
                                                    data-target="#editCriteria" data-toggle="modal"><i class="fa fa-pen"
                                                        aria-hidden="true"></i></a>
                                                <a href="" class="m-4 hover:text-red-600"
                                                    wire:click="deleteCriteria"><i class="fa fa-trash"
                                                        aria-hidden="true"></i></a>

                                            </th>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div>
                            <a class="btn btn-primary text-gray-600 w-full h-12 nextBtn btn-lg pull-right"
                                href="" type="submit">Lihat Hasil</a>
                        </div>
                    </div>
                </div>
            </div>

        </form>

    </div>
    <div>

    </div>


</body>

</html>
