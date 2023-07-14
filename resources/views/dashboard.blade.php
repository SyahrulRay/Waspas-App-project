<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    @if (Route::has('login'))
        @auth
            <section id="dashboard" class="bg-gray-100 py-16 h-screen">
                <div class="container mx-auto px-8 items-center mt-14">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                        <div class="flex flex-col items-center gap-14">
                            <p class=" w-[544px] h-[105px]"><span class=" text-gray-800 text-[48px] font-extrabold">Temukan
                                </span><span class="text-teal-800 text-[52px] font-extrabold">solusi ideal</span><span
                                    class="text-gray-800 text-[52px] font-extrabold"> dari masalah Anda.</span></p>
                            <p class="w-[575px] text-gray-800 text-[24px] font-medium leading-loose">WASPAS App adalah
                                sistem pendukung keputusan yang menerapkan metode WASPAS. Sistem akan memberikan hasil
                                analisis beserta solusi ideal dari beragam situasi berdasarkan kriteria dan bobot kriteria
                                yang dimasukkan.</p>
                            <a class="w-[393px] h-[77px] px-[3px] py-[13px] bg-teal-800 rounded-2xl justify-center items-center gap-2.5 flex text-center text-white text-[24px] font-extrabold"
                                href="{{ route('problems') }}">Lihat Contoh Keputusan</a>
                        </div>
                        <div>
                            <img class="w-[816px] h-[688px] left-[720px] top-[202px] "
                                src="{{ asset('/images/beranda.png') }}" />
                        </div>
                    </div>
                </div>
            </section>

            <section id="{{ __('add') }}" class=" py-16 h-screen add bg-gray-100">
                <div class="container mx-auto px-8 items-center justify-center mt-14">
                    <h2 class="text-[48px] font-extrabold text-gray-800 mb-8 text-center">Add Problem</h2>
                    <div class="container mx-auto px-8 items-center mt-8">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                            <div>
                                <img class="w-screen h-full mix-blend-multiply"
                                    src="https://cdn3d.iconscout.com/3d/premium/thumb/male-character-with-confused-pose-4638167-3855713.png"
                                    alt="Image">
                            </div>
                            <div class="flex flex-col gap-8">
                                <p class="w-[575px] text-gray-800 text-[24px] font-medium leading-loose">WASPAS App adalah
                                    sistem pendukung keputusan yang menerapkan metode WASPAS. Sistem akan memberikan hasil
                                    analisis beserta solusi ideal dari beragam situasi berdasarkan kriteria dan bobot
                                    kriteria yang dimasukkan.</p>
                                <a class="w-[393px] h-[77px] px-[3px] py-[13px] bg-teal-800 rounded-2xl justify-center items-center gap-2.5 flex text-center text-white text-[24px] font-extrabold"
                                    href="{{ route('addproblems.index') }}">Create Problems</a>

                            </div>

                        </div>
                    </div>

                </div>
            </section>

            <section id="history" class="bg-gray-100 py-16 h-screen">
                <div class="container mx-auto px-8 mt-20">
                    <h2 class="text-[48px] font-extrabold text-gray-800 mb-8 text-center">History</h2>
                </div>
                <div class="container mx-auto px-4 py-8">
                    <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                        <a href="{{ route('resultHistory') }}" class="bg-white rounded-lg shadow-lg p-6">
                            <h2 class="text-xl font-bold mb-4">Event 1</h2>
                            <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel luctus
                                nunc, id lacinia nulla.</p>
                        </a>
                        <a href="{{ route('resultHistory') }}" class="bg-white rounded-lg shadow-lg p-6">
                            <h2 class="text-xl font-bold mb-4">Event 2</h2>
                            <p class="text-gray-700">Phasellus sagittis finibus lorem nec feugiat. Sed a ultrices tellus,
                                sed luctus neque.</p>
                        </a>
                        <a href="{{ route('resultHistory') }}" class="bg-white rounded-lg shadow-lg p-6">
                            <h2 class="text-xl font-bold mb-4">Event 3</h2>
                            <p class="text-gray-700">Integer at ipsum ut arcu tincidunt interdum. Etiam eu finibus enim, ac
                                tempus neque.</p>
                        </a>
                        <!-- Add more event cards as needed -->
                    </div>
                    </main>
            </section>
        @else
            <section id="beranda" class="h-screen">
                <div class="container mx-auto px-8 items-center mt-14">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                        <div class="flex flex-col items-center gap-14">
                            <p class=" w-[544px] h-[105px]"><span class=" text-gray-800 text-[48px] font-extrabold">Temukan
                                </span><span class="text-teal-800 text-[52px] font-extrabold">solusi ideal</span><span
                                    class="text-gray-800 text-[52px] font-extrabold"> dari masalah Anda.</span></p>
                            <p class="w-[575px] text-gray-800 text-[24px] font-medium leading-loose">WASPAS App adalah
                                sistem pendukung keputusan yang menerapkan metode WASPAS. Sistem akan memberikan hasil
                                analisis beserta solusi ideal dari beragam situasi berdasarkan kriteria dan bobot kriteria
                                yang dimasukkan.</p>
                            <a class="w-[393px] h-[77px] px-[3px] py-[13px] bg-teal-800 rounded-2xl justify-center items-center gap-2.5 flex text-center text-white text-[24px] font-extrabold"
                                href="{{ route('problems') }}">Lihat Contoh Keputusan</a>
                        </div>
                        <div>
                            <img class="w-[816px] h-[688px] left-[720px] top-[202px] "
                                src="{{ asset('/images/beranda.png') }}" />
                        </div>
                    </div>
                </div>
            </section>
            <section id="waspas">
                <div class="flex flex-col gap-5 container mx-auto px-8 items-center m-10 mt-20">
                    <p class="w-full left-[69px] top-[1073px]  text-center text-teal-800 text-[36px] font-extrabold">Apa itu
                        Metode WASPAS?</p>
                    <p
                        class="w-[1302px] left-[69px] top-[1148px]  text-justify text-gray-800 text-[28px] font-medium leading-10">
                        WASPAS App menggunakan Weighted Aggregated Sum Product Assesment (WASPAS) sebagai metode perhitungan
                        dalam pemilihan keputusan. Konsep perhitungan pada metode WASPAS, yaitu menormalisasi matriks,
                        menghitung nilai normalisasi berdasarkan bobot, dan mengurutkan alternatif berdasarkan nilai
                        normalisasi.</p>
                    <div>
                        <div
                            class="w-[77px] h-[77px] px-8 py-[13px] left-[69px] top-[1354px]  bg-teal-800 rounded-2xl  justify-center items-center gap-2.5 inline-flex">
                            <div class="grow shrink basis-0 text-white text-[24px] font-extrabold">1</div>
                        </div>
                        <div
                            class="w-[1209px] h-[77px] px-8 py-[13px] left-[162px] top-[1354px]  bg-teal-800 rounded-2xl  justify-center items-center gap-2.5 inline-flex">
                            <div class="grow shrink basis-0 text-white text-[24px] font-extrabold">Membuat Matriks Keputusan
                            </div>
                        </div>

                    </div>
                    <div
                        class="w-[1302px] left-[69px] top-[1462px]  text-justify text-gray-800 text-[28px] font-medium leading-10">
                        Langkah pertama adalah memasukkan nilai-nilai alternatif ke dalam matriks keputusan. </div>
                    <div class="w-[526px] h-[285px] left-0 top-0  bg-amber-500 rounded-2xl">
                        <img src=" {{ asset('/images/matrix.png') }}" />
                    </div>
                    <div>
                        <div
                            class="w-[77px] h-[77px] px-8 py-[13px] left-[69px] top-[1354px]  bg-teal-800 rounded-2xl  justify-center items-center gap-2.5 inline-flex">
                            <div class="grow shrink basis-0 text-white text-[24px] font-extrabold">2</div>
                        </div>
                        <div
                            class="w-[1209px] h-[77px] px-8 py-[13px] left-[162px] top-[1354px]  bg-teal-800 rounded-2xl  justify-center items-center gap-2.5 inline-flex">
                            <div class="grow shrink basis-0 text-white text-[24px] font-extrabold">Membuat Matriks
                                Normalisasi</div>
                        </div>
                    </div>
                    <div
                        class="w-[1302px] left-[69px] top-[1972px]  text-justify text-gray-800 text-[28px] font-medium leading-10">
                        Selanjutnya, menyusun matriks normalisasi berdasarkan matriks keputusan yang telah dibuat. Nilai
                        matriks keputusan yang ada dimasukkan ke dalam rumus normalisasi yang berbeda tergantung jenis
                        kriteria.</div>
                    <div class="flex flex-row gap-7 justify-center">
                        <div>
                            <div
                                class="w-[510px] left-[188px] top-[2123px]  text-center text-teal-800 text-[20px] font-bold leading-10">
                                Jika kriteria merupakan benefit</div>
                            <div class="w-[510px] h-[190px] left-0 top-0  bg-amber-500 rounded-2xl">
                                <img src="{{ asset('/images/benefit.png') }}" />
                            </div>
                        </div>
                        <div>
                            <div
                                class="w-[510px] left-[743px] top-[2123px]  text-center text-teal-800 text-[20px] font-bold leading-10">
                                Jika kriteria merupakan cost</div>
                            <div class="w-[510px] h-[190px] left-0 top-0  bg-amber-500 rounded-2xl">
                                <img src="{{ asset('/images/cost.png') }}" />
                            </div>
                        </div>
                    </div>
                    <div
                        class="w-[1302px] left-[69px] top-[2994px]  text-justify text-gray-800 text-[28px] font-medium leading-10">
                        Keterangan<br />0,5 merupakan ketetapan<br />Q = nilai normalisasi alternatif<br />X̄ij = nilai
                        matriks ternormalisasi<br />wj = nilai bobot kriteria</div>
                    <div>
                        <div
                            class="w-[77px] h-[77px] px-8 py-[13px] left-[69px] top-[1354px]  bg-teal-800 rounded-2xl  justify-center items-center gap-2.5 inline-flex">
                            <div class="grow shrink basis-0 text-white text-[24px] font-extrabold">3</div>
                        </div>
                        <div
                            class="w-[1209px] h-[77px] px-8 py-[13px] left-[162px] top-[1354px]  bg-teal-800 rounded-2xl  justify-center items-center gap-2.5 inline-flex">
                            <div class="grow shrink basis-0 text-white text-[24px] font-extrabold">Menghitung Nilai
                                Normalisasi Alternatif</div>
                        </div>
                    </div>
                    <div
                        class="w-[1302px] left-[69px] top-[2703px] text-justify text-gray-800 text-[28px] font-medium leading-10">
                        Setelah menyusun matriks ternormalisasi, nilai-nilai pada matriks ini akan dihitung menggunakan
                        rumus WASPAS untuk mencari nilai normalisasi alternatif. Hasil nilai normalisasi alternatif
                        menentukan peringkat akhir dari masing-masing alternatif dan menemukan solusi ideal dari
                        permasalahan.</div>
                    <img class="w-[899px] h-[69px] left-[272px] top-[2894px] " src="{{ asset('/images/q.png') }}" />
                    <div
                        class="w-[1302px] left-[69px] top-[2994px]  text-justify text-gray-800 text-[28px] font-medium leading-10">
                        Keterangan<br />0,5 merupakan ketetapan<br />Q = nilai normalisasi alternatif<br />X̄ij = nilai
                        matriks ternormalisasi<br />wj = nilai bobot kriteria</div>
                </div>

            </section>

        @endauth
    @endif

</x-app-layout>
