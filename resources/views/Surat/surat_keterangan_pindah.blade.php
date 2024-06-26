<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Keterangan Pindah</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/logo.png') }}">

</head>

<body data-rsssl=1>
    <?php \Carbon\Carbon::setLocale('id'); ?>
    <div class=" w-[85%] h-fit py-7 bg-white text-center mx-auto pb-30">
        <div class="text-center font-bold border-black border-b-4 ">
            <p class="text-xl">RT. {{ $rt->rt }} RW. 03</p>
            <p class="text-base">Desa Bumiayu Kecamatan Kedungkandang</p>
            <p class="text-xl pb-3">Kota Malang</p>
        </div>
        <div class="text-center  p-4 text-xl flex justify-center flex-col font-bold">
            <p class="w-fit border-b-2 flex justify-center text-center mx-auto  border-black">SURAT KETERANGAN PINDAH
            </p>
            <p class="w-fit  flex justify-center text-center mx-auto text-base ">
                Nomor:&emsp;<span id="nomor-report"></span>/SKP/RT-{{ $rt->rt }}/<span id="tahun"></span></p>
        </div>
        <div class="text-left my-0 ">
            <p class="indent-10 pb-3">Yang bertanda tangan di bawah ini, Ketua RT. {{ $rt->rt }}
                RW. 03 Desa Bumiayu, Kecamatan
                Kedungkandang, Kota Malang, menerangkan bahwa:</p>
            <div class="w-full my-0  h-fit">
                <div class="flex mt-0 mb-1 ps-10 w-full">
                    <div class="basis-2/5 w-full flex justify-between my-0 text-left">
                        <div class="basis-2/3 my-0  text-left">
                            <p>Nama</p>
                        </div>
                        <div class="basis-1/3 my-0 text-right">
                            :&emsp;
                        </div>
                    </div>
                    <div class="basis-3/5 my-0 text-left">
                        {{ $surat->peminta->nama }}
                    </div>
                </div>
                <div class="flex mt-0 mb-1 ps-10 w-full">
                    <div class="basis-2/5 w-full flex justify-between my-0 text-left">
                        <div class="basis-2/3 my-0  text-left">
                            <p>No. KTP</p>
                        </div>
                        <div class="basis-1/3 my-0 text-right">
                            :&emsp;
                        </div>
                    </div>
                    <div class="basis-3/5 my-0 text-left">
                        {{ $surat->nik }}
                    </div>
                </div>
                <div class="flex mt-0 mb-1 ps-10 w-full">
                    <div class="basis-2/5 w-full flex justify-between my-0 text-left">
                        <div class="basis-2/3 my-0  text-left">
                            <p>Jenis Kelamin</p>
                        </div>
                        <div class="basis-1/3 my-0 text-right">
                            :&emsp;
                        </div>
                    </div>
                    <div class="basis-3/5 my-0 text-left">
                        {{ $surat->jenisKelamin === 'L' ? 'Laki-laki' : 'Perempuan' }}
                    </div>
                </div>
                <div class="flex mt-0 mb-1 ps-10 w-full">
                    <div class="basis-2/5 w-full flex justify-between my-0 text-left">
                        <div class="basis-2/3 my-0  text-left">
                            <p>Tempat,Tanggal Lahir</p>
                        </div>
                        <div class="basis-1/3 my-0 text-right">
                            :&emsp;
                        </div>
                    </div>
                    <div class="basis-3/5 my-0 text-left">
                        {{ $surat->tempatLahir }},
                        {{ \Carbon\Carbon::parse($surat->tanggalLahir)->translatedFormat('d F Y') }}
                    </div>
                </div>

                <div class="flex mt-0 mb-1 ps-10 w-full">
                    <div class="basis-2/5 w-full flex justify-between my-0 text-left">
                        <div class="basis-2/3 my-0  text-left">
                            <p>Warganegara / Agama</p>
                        </div>
                        <div class="basis-1/3 my-0 text-right">
                            :&emsp;
                        </div>
                    </div>
                    <div class="basis-3/5 my-0 text-left">
                        {{ $surat->warganegara }} / {{ $surat->agama }}
                    </div>
                </div>
                <div class="flex mt-0 mb-1 ps-10 w-full">
                    <div class="basis-2/5 w-full flex justify-between my-0 text-left">
                        <div class="basis-2/3 my-0  text-left">
                            <p>Pekerjaan</p>
                        </div>
                        <div class="basis-1/3 my-0 text-right">
                            :&emsp;
                        </div>
                    </div>
                    <div class="basis-3/5 my-0 text-left">
                        {{ $surat->pekerjaan }}
                    </div>
                </div>
                <div class="flex mt-0 mb-1 ps-10 w-full">
                    <div class="basis-2/5 w-full flex  justify-between my-0 text-left">
                        <div class="basis-2/3 my-0 text-left">
                            <p>Status Pernikahan</p>
                        </div>
                        <div class="basis-1/3 my-0 text-right">
                            :&emsp;
                        </div>
                    </div>
                    <div class="basis-3/5 my-0 text-left">
                        {{ $surat->statusNikah }} Menikah
                    </div>
                </div>

                <div class="flex mt-0 mb-1 ps-10 w-full">
                    <div class="basis-2/5 w-full flex justify-between my-0 text-left">
                        <div class="basis-2/3 my-0  text-left">
                            <p>Alamat Asal</p>
                        </div>
                        <div class="basis-1/3 my-0 text-right">
                            :&emsp;
                        </div>
                    </div>
                    <div class="basis-3/5 my-0 text-left">
                        {{ $surat->alamat }}
                    </div>
                </div>
                <div class="flex mt-0 mb-1 ps-10 w-full">
                    <div class="basis-2/5 w-full flex justify-between my-0 text-left">
                        <div class="basis-2/3 my-0 text-left">
                            <p>Alamat Pindah</p>
                        </div>
                        <div class="basis-1/3 my-0 text-right">
                            :&emsp;
                        </div>
                    </div>
                    <div class="basis-3/5 my-0 text-left">
                        {{ $surat->alamat_pindah }}
                    </div>
                </div>
                <div class="flex mt-0 mb-1 ps-10 w-full">
                    <div class="basis-2/5 w-full flex justify-between my-0 text-left">
                        <div class="basis-2/3 my-0 text-left">
                            <p>Alasan Pindah</p>
                        </div>
                        <div class="basis-1/3 my-0 text-right">
                            :&emsp;
                        </div>
                    </div>
                    <div class="basis-3/5 my-0 text-left">
                        {{ $surat->alasan_pindah }}
                    </div>
                </div>
                <div class="flex mt-0 mb-1 ps-10 w-full">
                    <div class="basis-2/5 w-full flex justify-between my-0 text-left">
                        <div class="basis-2/3 my-0 text-left">
                            <p>Keluarga yang Pindah</p>
                        </div>
                        <div class="basis-1/3 my-0 text-right">
                            :&emsp;
                        </div>
                    </div>
                    <div class="basis-3/5 my-0 text-left">
                        {{ $surat->jumlah_keluarga_pindah }} Orang
                    </div>
                </div>
            </div>
            <p class="indent-10 pt-3">Demikian Surat Keterangan ini dibuat dan diberikan kepada yang bersangkutan
                untuk dipergunakan sebagaimana mestinya.</p>
            <p class="indent-10 pt-6 text-right">Malang, {{ \Carbon\Carbon::now()->translatedFormat('d F Y') }}</p>
        </div>
        <div class="flex w-full justify-between items-end">
            <div class="flex flex-col justify-start w-fit h-fit m-0">
                <P class="pb-17 text-center">Ketua RW 03</P>
                <p class="underline text-center">{{ $rw->nama }}</p>
            </div>
            <div class=" flex flex-col justify-end w-fit h-fit m-0">
                <P class="text-center">Mengetahui,</P>
                <P class="pb-17 text-center">Ketua RT {{ $rt->rt }}</P>
                <p class="underline text-center">{{ $rt->nama }}</p>
            </div>
        </div>

    </div>
    <div class=" w-[85%] h-fit py-7 bg-white text-center mx-auto">
        <div class="text-center font-bold border-black border-b-4 ">
            <p class="text-xl">RT. {{ $rt->rt }} RW. 03</p>
            <p class="text-base">Desa Bumiayu Kecamatan Kedungkandang</p>
            <p class="text-xl pb-3">Kota Malang</p>
        </div>
        <div class="text-center  p-4 text-xl flex justify-center flex-col font-bold">
            <p class="w-fit border-b-2 flex justify-center text-center mx-auto  border-black">SURAT KETERANGAN PINDAH
            </p>
            <p class="w-fit  flex justify-center text-center mx-auto text-base ">
                Nomor:&emsp;<span id="nomor-report2"></span>/SKP/RT-{{ $rt->rt }}/tahun</p>

        </div>


        <div class="relative overflow-x-auto  pt-10 px-10">
            <table class="w-full  text-left rtl:text-right text-gray-500 dark:text-gray-400 ">
                <thead class="text-base text-gray-700  bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="py-2 text-center border-[2px] w-[8%] ">
                            No.
                        </th>
                        <th scope="col" class="py-2 text-center border-[2px] w-[46%] ">
                            NIK
                        </th>
                        <th scope="col" class="py-2 text-center border-[2px] w-[46%] ">
                            Nama
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($surat->pindahPenduduk as $index => $dt)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="py-2 text-center border-[2px] ">
                                {{ $index + 1 }}
                            </td>
                            <td class="py-2 ps-3 border-[2px] ">
                                {{ $dt->penduduk->nik }}
                            </td>
                            <td class="py-2 ps-3 border-[2px] ">
                                {{ $dt->penduduk->nama }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>



    </div>


    <div class="flex">

        <button type="button" id="printBtn"
            class="flex items-center justify-center print:hidden fixed end-6 bottom-6 group animate-bounce text-white hover:text-blue-700 bg-blue-700 rounded-full w-14 h-14 border-2 border-blue-700 hover:border-blue-700 hover:bg-white dark:bg-blue-600 dark:hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:focus:ring-blue-800">
            <i class="fa-solid fa-print  text-xl"></i>
            <span class="sr-only">Open actions menu</span>
        </button>
        <a href="{{ route('suratku') }}"
            class="flex items-center justify-center print:hidden text-2xl  fixed end-25 bottom-6 group animate-bounce text-blue-700 hover:text-white  bg-white border-2 border-blue-700 rounded-full w-14 h-14 hover:bg-blue-800 dark:bg-blue-600 dark:hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:focus:ring-blue-800">
            <i class="fa-solid fa-arrow-left"></i>
        </a>
    </div>




    <script type="text/javascript">
        document.getElementById('printBtn').addEventListener('click', () => {
            window.print()
        });
        // Prints area to which class was assigned only
    </script>
    <script>
        // program to generate random strings

        // declare all characters
        const characters = '0123456789';

        function generateString(length) {
            let result = ' ';
            const charactersLength = characters.length;
            for (let i = 0; i < length; i++) {
                result += characters.charAt(Math.floor(Math.random() * charactersLength));
            }

            return result;
        }
        let no = generateString(3);
        document.getElementById("nomor-report").innerHTML = no;
        document.getElementById("nomor-report2").innerHTML = no;

        // console.log(generateString(3));
    </script>
    <script>
        // Mendapatkan elemen dengan id "tanggal"
        var tanggalElement = document.getElementById('tanggal');

        // Mendapatkan tanggal saat ini
        var today = new Date();
        var options = {
            year: 'numeric',
            month: 'long',
            day: 'numeric'
        };

        // Mengubah tanggal menjadi format bahasa Indonesia
        var formattedDate = today.toLocaleDateString('id-ID', options);

        // Mengubah teks elemen menjadi tanggal saat ini
        tanggalElement.innerText = 'Malang, ' + formattedDate;
    </script>
    <script>
        // Mendapatkan elemen dengan id "tahun"
        var tahunElement = document.getElementById('tahun');

        // Mendapatkan tahun saat ini
        var currentYear = new Date().getFullYear();

        // Mengubah teks elemen menjadi tahun saat ini
        tahunElement.innerText = currentYear;
    </script>

</body>

</html>
