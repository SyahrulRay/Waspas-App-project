<x-app-layout>
    <div class="flex flex-col gap-8 container mx-auto px-8 items-center mt-20">
        <p class="w-full left-[69px] top-[1073px]  text-center text-teal-800 text-[36px] font-extrabold">Siapa yang layak dinobatkan menjadi karyawan terbaik?</p>
        <p class="w-[1302px] left-[69px] top-[1148px]  text-justify text-gray-800 text-[28px] font-medium leading-10">Perusahaan Ilham Saga berencana memilih tiga karyawan terbaik setiap bulan yang akan menerima penghargaan dan hadiah atas dedikasi mereka. Namun, perusahaan bingung dalam memberikan peringkat kepada karyawannya. Perusahaan memiliki 3 kriteria, yaitu AAA, BBB, dan CCC dengan masing-masing bobot 40%, 50%, dan 10%. Masalah ini dapat diselesaikan dengan menggunakan sistem WASPAS App.</p>
        <div class="w-[1305px] text-justify text-gray-800 text-2xl font-medium leading-loose">Berikut daftar alternatif yang dimiliki oleh perusahaan beserta nilainya.</div>
        <table class="w-full h-[120px] text-[28px] text-slate-800">
            <thead class="xw-full h-[70px] text-gray-300  bg-teal-800">
                <tr>
                    <th>Alternatif/Kriteria</th>
                    <th>Harga</th>
                    <th>Jarak</th>
                    <th>Waktu</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th class="bg-amber-500 text-gray-300">Transjakarta</th>
                    <th>3500</th>
                    <th>20</th>
                    <th>42</th>
                </tr>
                <tr>
                    <th class="bg-amber-500 text-gray-300">Ojek</th>
                    <th>30000</th>
                    <th>15</th>
                    <th>30</th>
                </tr>
                <tr>
                    <th class="bg-amber-500 text-gray-300">Angkot</th>
                    <th>7000</th>
                    <th>24</th>
                    <th>60</th>
                </tr>
            </tbody>
        </table>
        <a class="w-[393px] h-[77px] px-[3px] py-[13px] bg-teal-800 rounded-2xl m-8 justify-center items-center gap-2.5 flex text-center text-white text-[24px] font-extrabold" href="{{route('result')}}">Lihat hasil Keputusan</a>
    </div>
</x-app-layout>