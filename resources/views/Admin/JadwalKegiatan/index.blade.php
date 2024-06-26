<x-admin-layout page="{{ $page }}" selected="{{ $selected }}">

    <!-- tambah modal start -->
    <div class="absolute h-fit w-fit" x-data="{ 'tambahModal': false }" @keydown.escape="tambahModal = false">
        <button @click="tambahModal = true" class="animate-bounce fixed bottom-10 right-7 flex size-12 bg-[#2d5523] text-white justify-center items-center rounded-full shadow-xl hover:bg-[#336E2A] dark:bg-[#57BA47] dark:hover:bg-[#336E2A] hover:scale-105 transition duration-300 ease-in-out">
            <i class="fa-solid fa-plus text-2xl"></i>
        </button>

        <!-- Main modal -->
        <div x-show="tambahModal" x-transition:enter="md:transition-none transition ease-out duration-300 transform" x-transition:enter-start="md:transition-none translate-y-full" x-transition:enter-end="md:transition-none translate-y-0" x-transition:leave="md:transition-none transition ease-in duration-300 transform" x-transition:leave-start="md:transition-none translate-y-0" x-transition:leave-end="md:transition-none translate-y-full" tabindex="-1" aria-hidden="true" class="flex overflow-hidden fixed top-0 right-0 left-0 z-999 justify-center sm:items-center items-end w-full md:inset-0 h-full">
            <div class="absolute z-999 bg-black/25 h-[100vh] w-full hidden sm:block"></div>
            <div class="relative z-[1000] sm:p-4 w-full sm:w-fit sm:max-w-3xl max-h-[700px]" @click.away="tambahModal = false" x-transition:enter="motion-safe:ease-out duration-300" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100">
                <!-- Modal content -->
                <div class="relative bg-white rounded-t-2xl sm:rounded-lg shadow dark:bg-[#2F363E]">
                    <!-- Modal header -->
                    <div class="flex h-[75px] items-center justify-between px-4 md:px-5 border-b-2 rounded-t border-[#B8B8B8]">
                        <h3 class="text-xl font-bold text-[#34662C] dark:text-white">
                            Tambah Data Kegiatan
                        </h3>
                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" @click="tambahModal = false">
                            <i class="fa-solid fa-xmark text-xl"></i>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <form class="w-full h-full text-[#34662C] dark:text-white" method="POST" action="{{ route('storeKegiatan') }}">
                        @csrf
                        <div class="p-4 d:p-5 grid w-full sm:w-150 gap-4 grid-cols-2 max-h-[400px] sm:max-h-[450px] overflow-y-auto scrollbar-thumb-[#57BA47] scrollbar-track-[#E4F7DF] scrollbar-thin rounded-b-xl">
                            <div class="col-span-2 relative sm:col-span-1">
                                <label class="block mb-2 text-sm font-bold">NIK</label>
                                <input list="penduduk" name="nik" class="bg-white shadow-md border border-[#34662C] dark:border-gray-500 dark:bg-[#505c6a]  text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C] dark:placeholder-white" placeholder="Masukkan NIK ...">
                                <datalist id="penduduk">
                                    @foreach ($penduduk as $p)
                                    <option value="{{ $p->nik }}"></option>
                                    @endforeach
                                </datalist>
                            </div>
                            <div class="col-span-2 sm:col-span-1">
                                <label for="kategori" class="block mb-2 text-sm font-bold">Kategori</label>
                                <select name="kategori" id="kategori" class="bg-white shadow-md border border-[#34662C] dark:border-gray-500 dark:bg-[#505c6a]  text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C] dark:placeholder-white" required>
                                    <option selected value="">Pilih Kategori</option>
                                    <option value="Kebersihan">Kebersihan</option>
                                    <option value="Lingkungan">Lingkungan</option>
                                    <option value="Kesehatan">Kesehatan</option>
                                    <option value="Pendidikan">Pendidikan</option>
                                    <option value="Budaya">Budaya</option>
                                    <option value="Kemanusiaan">Kemanusiaan</option>
                                    <option value="Kuliner">Kuliner</option>
                                    <option value="Ekonomi">Ekonomi</option>
                                </select>
                            </div>
                            <div class="col-span-2">
                                <label for="nama" class="block mb-2 text-sm font-bold">Nama Kegiatan</label>
                                <input type="text" name="nama" id="nama" class="bg-white shadow-md border border-[#34662C] dark:border-gray-500 dark:bg-[#505c6a]  text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C] dark:placeholder-white" required placeholder="Masukkan Nama Kegiatan ...">
                            </div>
                            <div class="col-span-2 sm:col-span-1">
                                <label for="tanggal_mulai" class="block mb-2 text-sm font-bold">Tanggal Mulai</label>
                                <input type="date" name="tanggal_mulai" id="tanggal_mulai" class="bg-white shadow-md border border-[#34662C] dark:border-gray-500 dark:bg-[#505c6a]  text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C] dark:placeholder-white" required>
                            </div>
                            <div class="col-span-2 sm:col-span-1">
                                <label for="tanggal_selesai" class="block mb-2 text-sm font-bold">Tanggal Selesai</label>
                                <input type="date" name="tanggal_selesai" id="tanggal_selesai" class="bg-white shadow-md border border-[#34662C] dark:border-gray-500 dark:bg-[#505c6a]  text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C] dark:placeholder-white" required>
                            </div>
                            <div class="col-span-2 sm:col-span-1">
                                <div class="grid grid-cols-2 gap-2">
                                    <div class="col-span-2 sm:col-span-1">
                                        <label for="jam_mulai" class="block mb-2 text-sm font-bold">Jam Mulai</label>
                                        <input type="time" name="jam_mulai" id="jam_mulai" class="bg-white shadow-md border border-[#34662C] dark:border-gray-500 dark:bg-[#505c6a]  text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C] dark:placeholder-white" required>
                                    </div>
                                    <div class="col-span-2 sm:col-span-1">
                                        <label for="jam_selesai" class="block mb-2 text-sm font-bold">Jam Selesai</label>
                                        <input type="time" name="jam_selesai" id="jam_selesai" class="bg-white shadow-md border border-[#34662C] dark:border-gray-500 dark:bg-[#505c6a]  text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C] dark:placeholder-white" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-2 sm:col-span-1">
                                <label for="iuran" class="block mb-2 text-sm font-bold">Iuran</label>
                                <input type="number" name="iuran" id="iuran" class="bg-white shadow-md border border-[#34662C] dark:border-gray-500 dark:bg-[#505c6a]  text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C] dark:placeholder-white" required placeholder="Masukkan Iuran ...">
                            </div>
                            <div class="col-span-2">
                                <label for="lokasi" class="block mb-2 text-sm font-bold">Lokasi</label>
                                <textarea name="lokasi" rows="4" id="lokasi" class="bg-white shadow-md border border-[#34662C] dark:border-gray-500 dark:bg-[#505c6a]  text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C] dark:placeholder-white" required placelholder="Masukkan Lokasi ..."></textarea>
                            </div>
                            <div class="col-span-2">
                                <label for="deskripsi" class="block mb-2 text-sm font-bold">Deskripsi</label>
                                <textarea name="deskripsi" rows="4" id="deskripsi" class="bg-white shadow-md border border-[#34662C] dark:border-gray-500 dark:bg-[#505c6a]  text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C] dark:placeholder-white" required placelholder="Masukkan Deskripsi ..."></textarea>
                            </div>
                        </div>
                        <div class="flex items-center justify-center sm:justify-end bg-[#F2F2F2] dark:bg-[#3e4852] gap-4 sm:h-[75px] h-[65px] px-4 md:px-8 border-b-2 rounded-t border-[#B8B8B8] dark:border-gray-500 rounded-b-md">
                            <button type="button" @click="tambahModal = false" class=" hidden sm:inline-flex px-4 py-2 text-sm font-bold rounded-lg shadow-md items-center  bg-white text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
                                Batal
                            </button>
                            <button type="submit" class="text-white inline-flex sm:px-4 px-30 py-2 text-sm font-bold rounded-lg shadow-md items-center bg-[#34662C]  hover:scale-105 transition duration-300 ease-in-out">
                                Tambah
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- tambah modal end -->


    <div class="grid lg:grid-cols-5 sm:grid-cols-2 sm:grid-rows-2 grid-cols-1 gap-8 h-fit sm:h-[85vh] lg:h-[620px] 2xl:h-[565px] w-full">
        <div class="lg:col-span-3 sm:col-span-2 col-span-1 lg:row-span-2 sm:h-full h-[370px] w-full bg-white dark:bg-[#2F363E] rounded-lg shadow-xl flex flex-col justify-center gap-8 sm:gap-14 items-center p-8">
            <div class="flex items-center justify-around w-full h-[10%]">
                <button id="prev" aria-label="calendar backward" onclick="prev()" class="focus:text-gray-400 hover:text-gray-400 text-gray-800 dark:text-gray-100 button-calendar">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-left" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <polyline points="15 6 9 12 15 18" />
                    </svg>
                </button>
                <span tabindex="0" class="focus:outline-none  text-2xl font-extrabold dark:text-gray-100 text-gray-800" id="calendarHead"></span>
                <button id="next" aria-label="calendar forward" onclick="next()" class="focus:text-gray-400 hover:text-gray-400 ml-3 text-gray-800 dark:text-gray-100 button-calendar">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler  icon-tabler-chevron-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <polyline points="9 6 15 12 9 18" />
                    </svg>
                </button>
            </div>
            <div class="flex items-center justify-between w-full h-full">
                <table class="w-full lg:h-full">
                    <thead>
                        <tr>
                            <th class="pb-10">
                                <div class="w-full flex justify-center">
                                    <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">
                                        Min</p>
                                </div>
                            </th>
                            <th class="pb-10">
                                <div class="w-full flex justify-center">
                                    <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">
                                        Sen</p>
                                </div>
                            </th>
                            <th class="pb-10">
                                <div class="w-full flex justify-center">
                                    <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">
                                        Sel</p>
                                </div>
                            </th>
                            <th class="pb-10">
                                <div class="w-full flex justify-center">
                                    <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">
                                        Rab</p>
                                </div>
                            </th>
                            <th class="pb-10">
                                <div class="w-full flex justify-center">
                                    <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">
                                        Kam</p>
                                </div>
                            </th>
                            <th class="pb-10">
                                <div class="w-full flex justify-center">
                                    <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">
                                        Jum</p>
                                </div>
                            </th>
                            <th class="pb-10">
                                <div class="w-full flex justify-center">
                                    <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">
                                        Sab</p>
                                </div>
                            </th>
                        </tr>
                    </thead>
                    <tbody id="days">
                    </tbody>
                </table>
            </div>
        </div>
        <div class="lg:col-span-2 col-span-1 sm:row-span-1 max-h-[400px] sm:h-full w-full bg-white dark:bg-[#2F363E] rounded-lg shadow-xl flex flex-col sm:gap-2 gap-4 px-4 lg:py-1 py-4">
            <div class="font-bold text-lg text-center text-green-900 dark:text-white">Kegiatan Mendatang</div>
            <div class="flex flex-col h-full overflow-y-auto pb-2 pt-1 px-4 scrollbar-thumb-rounded-full scrollbar-track-rounded-full scrollbar-thumb-[#57BA47] scrollbar-track-[#E4F7DF] scrollbar-thin gap-3">
                @foreach ($dataArray['dataUpcoming'] as $dt)
                <div class="flex w-full h-fit 2xl:h-[100px] group border-2 border-green-900 dark:border-[#57BA47] rounded-lg shadow-md">
                    <div class="w-fit h-full flex flex-col bg-green-900 dark:bg-[#57BA47] px-4 text-white items-center justify-center rounded-l-md">
                        <p class="font-bold text-3xl">{{ substr($dt->mulai_tanggal, 0, 2) }}</p>
                        <p class="font-medium text-lg">{{ substr($dt->mulai_tanggal, 3, 6) }}</p>
                    </div>
                    <div class="flex flex-col h-full w-full items-center px-3 gap-1 py-2 relative" x-data="{ 'detailModal': false,  'editModal': false}">
                        <!-- modal detail start -->
                        <div x-show="detailModal" x-transition:enter="md:transition-none transition ease-out duration-300 transform" x-transition:enter-start="md:transition-none translate-y-full" x-transition:enter-end="md:transition-none translate-y-0" x-transition:leave="md:transition-none transition ease-in duration-300 transform" x-transition:leave-start="md:transition-none translate-y-0" x-transition:leave-end="md:transition-none translate-y-full" tabindex="-1" aria-hidden="true" class="flex overflow-hidden fixed top-0 right-0 left-0 z-999 justify-center sm:items-center items-end w-full md:inset-0 h-full">
                            <div class="absolute z-999 bg-black/25 h-[100vh] w-full hidden sm:block"></div>
                            <div class="relative z-[1000] sm:p-4 w-full sm:w-fit sm:max-w-3xl max-h-[700px]" @click.away="detailModal = false" x-transition:enter="motion-safe:ease-out duration-300" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-[#2F363E]">
                                    <!-- Modal header -->
                                    <div class="flex h-[75px] items-center justify-between px-4 md:px-5 border-b-2 rounded-t border-[#B8B8B8]">
                                        <h3 class="text-xl font-bold text-[#34662C] dark:text-white">
                                            Detail Data Kegiatan
                                        </h3>
                                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" @click="detailModal = false">
                                            <i class="fa-solid fa-xmark text-xl"></i>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="w-full h-full text-[#34662C] dark:text-white text-left">
                                        <div class="p-4 d:p-5 grid w-full sm:w-150 gap-4 grid-cols-2 max-h-[400px] sm:max-h-[450px] overflow-y-auto scrollbar-thumb-[#57BA47] scrollbar-track-[#E4F7DF] scrollbar-thin rounded-b-xl">
                                            <div class="col-span-2 relative sm:col-span-1">
                                                <label class="block mb-2 text-sm font-bold">NIK</label>
                                                <input name="nik" class="bg-white shadow-md border dark:border-gray-500 dark:bg-[#505c6a] border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" value="{{ $dt->penduduk->nik }}" readonly>
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <label class="block mb-2 text-sm font-bold">Kategori</label>
                                                <input name="kategori" id="kategori" class="bg-white shadow-md border dark:border-gray-500 dark:bg-[#505c6a] border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required readonly value="{{ $dt->aktivitas_tipe }}">
                                            </div>
                                            <div class="col-span-2">
                                                <label class="block mb-2 text-sm font-bold">Nama Kegiatan</label>
                                                <input type="text" name="nama" id="nama" class="bg-white shadow-md border dark:border-gray-500 dark:bg-[#505c6a] border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required readonly value="{{ $dt->judul }}">
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <label class="block mb-2 text-sm font-bold">Tanggal Mulai</label>
                                                <input type="date" name="tanggal_mulai" id="tanggal_mulai" class="bg-white shadow-md border dark:border-gray-500 dark:bg-[#505c6a] border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required readonly value="{{ $dt->tgl_mulai }}">
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <label class="block mb-2 text-sm font-bold">Tanggal Selesai</label>
                                                <input type="date" name="tanggal_selesai" id="tanggal_selesai" class="bg-white shadow-md border dark:border-gray-500 dark:bg-[#505c6a] border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required readonly value="{{ $dt->tgl_akhir }}">
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <div class="grid grid-cols-2 gap-2">
                                                    <div class="col-span-2 sm:col-span-1">
                                                        <label class="block mb-2 text-sm font-bold">Jam Mulai</label>
                                                        <input type="time" name="jam_mulai" id="jam_mulai" class="bg-white shadow-md border dark:border-gray-500 dark:bg-[#505c6a] border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required readonly value="{{ $dt->mulai_waktu }}">
                                                    </div>
                                                    <div class="col-span-2 sm:col-span-1">
                                                        <label class="block mb-2 text-sm font-bold">Jam Selesai</label>
                                                        <input type="time" name="jam_selesai" id="jam_selesai" class="bg-white shadow-md border dark:border-gray-500 dark:bg-[#505c6a] border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required readonly value="{{ $dt->akhir_waktu }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <label class="block mb-2 text-sm font-bold">Iuran</label>
                                                <input type="number" name="iuran" id="iuran" class="bg-white shadow-md border dark:border-gray-500 dark:bg-[#505c6a] border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required readonly value="{{ $dt->iuran }}">
                                            </div>
                                            <div class="col-span-2">
                                                <label class="block mb-2 text-sm font-bold">Lokasi</label>
                                                <textarea name="lokasi" rows="4" id="lokasi" class="bg-white shadow-md border dark:border-gray-500 dark:bg-[#505c6a] border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required readonly>{{ $dt->lokasi }}</textarea>
                                            </div>
                                            <div class="col-span-2">
                                                <label class="block mb-2 text-sm font-bold">Deskripsi</label>
                                                <textarea name="deskripsi" rows="4" id="deskripsi" class="bg-white shadow-md border dark:border-gray-500 dark:bg-[#505c6a] border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required readonly>{{ $dt->konten }}</textarea>
                                            </div>
                                        </div>
                                        <div class="flex items-center justify-center sm:justify-end bg-[#F2F2F2] dark:bg-[#3e4852] gap-4 sm:h-[75px] h-[65px] px-4 md:px-8 border-b-2 rounded-t border-[#B8B8B8] dark:border-gray-500 rounded-b-md">
                                            <button @click="detailModal = false" class="hover:text-white inline-flex sm:px-4 px-30 py-2 text-sm font-bold rounded-lg shadow-md items-center hover:bg-[#34662C] bg-white text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
                                                Keluar
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- modal detail end -->

                        <!-- modal edit start -->
                        <div x-show="editModal" x-transition:enter="md:transition-none transition ease-out duration-300 transform" x-transition:enter-start="md:transition-none translate-y-full" x-transition:enter-end="md:transition-none translate-y-0" x-transition:leave="md:transition-none transition ease-in duration-300 transform" x-transition:leave-start="md:transition-none translate-y-0" x-transition:leave-end="md:transition-none translate-y-full" tabindex="-1" aria-hidden="true" class="flex overflow-hidden fixed top-0 right-0 left-0 z-999 justify-center sm:items-center items-end w-full md:inset-0 h-full">
                            <div class="absolute z-999 bg-black/25 h-[100vh] w-full hidden sm:block"></div>
                            <div class="relative z-[1000] sm:p-4 w-full sm:w-fit sm:max-w-3xl max-h-[700px]" @click.away="editModal = false" x-transition:enter="motion-safe:ease-out duration-300" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-[#2F363E]">
                                    <!-- Modal header -->
                                    <div class="flex h-[75px] items-center justify-between px-4 md:px-5 border-b-2 rounded-t border-[#B8B8B8]">
                                        <h3 class="text-xl font-bold text-[#34662C] dark:text-white">
                                            Edit Data Kegiatan
                                        </h3>
                                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" @click="editModal = false">
                                            <i class="fa-solid fa-xmark text-xl"></i>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                    </div>
                                    <!-- Modal body -->
                                    <form class="w-full h-full text-[#34662C] dark:text-white text-left" method="POST" action="{{ route('updateKegiatan', $dt->jadwal_id) }}">
                                        @csrf
                                        {!! method_field('PUT') !!}

                                        <div class="p-4 d:p-5 grid w-full sm:w-150 gap-4 grid-cols-2 max-h-[400px] sm:max-h-[450px] overflow-y-auto scrollbar-thumb-[#57BA47] scrollbar-track-[#E4F7DF] scrollbar-thin rounded-b-xl">
                                            <div class="col-span-2 relative sm:col-span-1">
                                                <label class="block mb-2 text-sm font-bold">NIK</label>
                                                <input list="penduduk" name="nik" class="bg-white shadow-md border dark:border-gray-500 dark:bg-[#505c6a] border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" value="{{ $dt->penduduk->nik }}">
                                                <datalist id="penduduk">
                                                    @foreach ($penduduk as $p)
                                                    <option value="{{ $p->nik }}"></option>
                                                    @endforeach
                                                </datalist>
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <label for="kategori" class="block mb-2 text-sm font-bold">Kategori</label>
                                                <select name="kategori" id="kategori" class="bg-white shadow-md border dark:border-gray-500 dark:bg-[#505c6a] border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required>
                                                    <option>Pilih Kategori</option>
                                                    <option value="Kebersihan" @if ($dt->aktivitas_tipe === 'Kebersihan')
                                                        selected
                                                        @endif
                                                        >Kebersihan</option>
                                                    <option value="Lingkungan" @if ($dt->aktivitas_tipe === 'Lingkungan')
                                                        selected
                                                        @endif
                                                        >Lingkungan</option>
                                                    <option value="Kesehatan" @if ($dt->aktivitas_tipe === 'Kesehatan')
                                                        selected
                                                        @endif
                                                        >Kesehatan</option>
                                                    <option value="Pendidikan" @if ($dt->aktivitas_tipe === 'Pendidikan')
                                                        selected
                                                        @endif
                                                        >Pendidikan</option>
                                                    <option value="Budaya" @if ($dt->aktivitas_tipe === 'Budaya')
                                                        selected
                                                        @endif
                                                        >Budaya</option>
                                                    <option value="Kemanusiaan" @if ($dt->aktivitas_tipe === 'Kemanusiaan')
                                                        selected
                                                        @endif
                                                        >Kemanusiaan</option>
                                                    <option value="Kuliner" @if ($dt->aktivitas_tipe === 'Kuliner')
                                                        selected
                                                        @endif
                                                        >Kuliner</option>
                                                    <option value="Ekonomi" @if ($dt->aktivitas_tipe === 'Ekonomi')
                                                        selected
                                                        @endif
                                                        >Ekonomi</option>
                                                </select>
                                            </div>
                                            <div class="col-span-2">
                                                <label for="nama" class="block mb-2 text-sm font-bold">Nama Kegiatan</label>
                                                <input type="text" name="nama" id="nama" class="bg-white shadow-md border dark:border-gray-500 dark:bg-[#505c6a] border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required value="{{ $dt->judul }}">
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <label for="tanggal_mulai" class="block mb-2 text-sm font-bold">Tanggal Mulai</label>
                                                <input type="date" name="tanggal_mulai" id="tanggal_mulai" class="bg-white shadow-md border dark:border-gray-500 dark:bg-[#505c6a] border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required value="{{ $dt->tgl_mulai }}">
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <label for="tanggal_selesai" class="block mb-2 text-sm font-bold">Tanggal Selesai</label>
                                                <input type="date" name="tanggal_selesai" id="tanggal_selesai" class="bg-white shadow-md border dark:border-gray-500 dark:bg-[#505c6a] border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required value="{{ $dt->tgl_akhir }}">
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <div class="grid grid-cols-2 gap-2">
                                                    <div class="col-span-2 sm:col-span-1">
                                                        <label for="jam_mulai" class="block mb-2 text-sm font-bold">Jam Mulai</label>
                                                        <input type="time" name="jam_mulai" id="jam_mulai" class="bg-white shadow-md border dark:border-gray-500 dark:bg-[#505c6a] border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required value="{{ $dt->mulai_waktu }}">
                                                    </div>
                                                    <div class="col-span-2 sm:col-span-1">
                                                        <label for="jam_selesai" class="block mb-2 text-sm font-bold">Jam Selesai</label>
                                                        <input type="time" name="jam_selesai" id="jam_selesai" class="bg-white shadow-md border dark:border-gray-500 dark:bg-[#505c6a] border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required value="{{ $dt->akhir_waktu }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <label for="iuran" class="block mb-2 text-sm font-bold">Iuran</label>
                                                <input type="number" name="iuran" id="iuran" class="bg-white shadow-md border dark:border-gray-500 dark:bg-[#505c6a] border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required value="{{ $dt->iuran }}">
                                            </div>
                                            <div class="col-span-2">
                                                <label for="lokasi" class="block mb-2 text-sm font-bold">Lokasi</label>
                                                <textarea name="lokasi" rows="4" id="lokasi" class="bg-white shadow-md border dark:border-gray-500 dark:bg-[#505c6a] border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required>{{ $dt->lokasi }}</textarea>
                                            </div>
                                            <div class="col-span-2">
                                                <label for="deskripsi" class="block mb-2 text-sm font-bold">Deskripsi</label>
                                                <textarea name="deskripsi" rows="4" id="deskripsi" class="bg-white shadow-md border dark:border-gray-500 dark:bg-[#505c6a] border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required>{{ $dt->konten }}</textarea>
                                            </div>
                                        </div>
                                        <div class="flex items-center justify-center sm:justify-end bg-[#F2F2F2] dark:bg-[#3e4852] gap-4 sm:h-[75px] h-[65px] px-4 md:px-8 border-b-2 rounded-t border-[#B8B8B8] dark:border-gray-500 rounded-b-md">
                                            <button type="button" @click="editModal = false" class="hover:text-white hidden sm:inline-flex px-4 py-2 text-sm font-bold rounded-lg shadow-md items-center hover:bg-[#34662C] bg-white text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
                                                Batal
                                            </button>
                                            <button type="submit" class="text-white inline-flex sm:px-4 px-30 py-2 text-sm font-bold rounded-lg shadow-md items-center bg-[#34662C] hover:bg-white hover:text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
                                                Update
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- modal edit end -->

                        <div class="absolute w-full h-full bg-black/40 top-0 left-0 flex justify-center items-center gap-3 opacity-0 group-hover:opacity-100 transition-all">
                            <div @keydown.escape="detailModal = false">
                                <button @click="detailModal = true" class="h-fit w-fit px-3 py-1 bg-[#446DFF] font-semibold text-sm rounded-xl text-white hover:bg-[#273E91] transition-all">Detail</button>
                            </div>
                            <div @keydown.escape="editModal = false">
                                <button @click="editModal = true" class="h-fit w-fit px-3 py-1 bg-[#FFDE68] font-semibold text-sm rounded-xl text-white hover:bg-[#B39C49] transition-all">Edit</button>
                            </div>
                            <form action="{{ route('destroyKegiatan', $dt->jadwal_id) }}" method="POST" id="deleteForm-{{ $dt->jadwal_id }}">
                                @csrf
                                {!! method_field('DELETE') !!}

                                <button type="button" onclick="showConfirm('{{ $dt->jadwal_id }}')" class="h-fit w-fit px-3 py-1 bg-[#FF5E5E] font-semibold text-sm rounded-xl text-white hover:bg-[#B34242] transition-all">Hapus</button>
                            </form>
                        </div>
                        <div class="text-lg font-medium text-green-900 dark:text-[#57BA47] text-left w-full"> {{ Str::limit($dt->judul, 27) }}</div>
                        <div class="flex items-center gap-3 w-full justify-between">
                            <div class="flex gap-2 items-center text-sm font-normal text-gray-500 dark:text-gray-300 text-left w-fit">
                                <i class="fa-regular fa-clock"></i>
                                <p>{{ $dt->mulai_waktu }} - {{ $dt->akhir_waktu }}</p>
                            </div>
                            <div class="px-3 py-1 bg-green-500 rounded-xl text-xs font-medium text-white">{{ $dt->aktivitas_tipe }}</div>
                        </div>
                        <div class="flex items-center gap-2 text-sm font-normal text-gray-500 text-left w-full dark:text-gray-300">
                            <i class="fa-solid fa-location-dot"></i>
                            <p>{{ $dt->lokasi }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <div class="lg:col-span-2 col-span-1 max-h-[400px] sm:row-span-1 sm:h-full w-full bg-white dark:bg-[#2F363E] rounded-lg shadow-xl flex flex-col gap-2 px-4 lg:py-2 py-4">
            <div class="font-bold text-lg text-center text-green-900 dark:text-white">Kegiatan pada {{ $dateFormat }}</div>
            @if (empty($dataArray['dataToday']->toArray()))
            <div class="flex flex-col w-full justify-center items-center gap-4">
                <!-- <i class="fa-regular fa-circle-xmark text-2xl"></i> -->
                <img src="{{ asset('assets/images/no-data.png') }}" alt="" class="w-[250px] lg:h-[180px] h-full 2xl:h-[150px] object-cover">
                <p class="text-lg font-semibold text-green-900 dark:text-white">Tidak ada kegiatan pada {{ $dateFormat }}</p>
            </div>
            @endif
            <div class="flex flex-col h-full overflow-y-auto pb-2 pt-1 px-4 scrollbar-thumb-rounded-full scrollbar-track-rounded-full scrollbar-thumb-[#57BA47] scrollbar-track-[#E4F7DF] scrollbar-thin gap-3">
                @foreach ($dataArray['dataToday'] as $dt)
                <div class="flex w-full h-fit 2xl:h-[100px] group border-2 border-green-900 dark:border-[#57BA47] rounded-lg shadow-md">
                    <div class="w-fit h-full flex flex-col bg-green-900 dark:bg-[#57BA47] rounded-l-md px-4 text-white items-center justify-center">
                        <p class="font-bold text-3xl">{{ substr($dt->mulai_tanggal, 0, 2) }}</p>
                        <p class="font-medium text-lg">{{ substr($dt->mulai_tanggal, 3, 6) }}</p>
                    </div>
                    <div class="flex flex-col h-full w-full items-center px-3 gap-1 py-2 relative" x-data="{ 'detailModal': false,  'editModal': false}">
                        <!-- modal detail start -->
                        <div x-show="detailModal" x-transition:enter="md:transition-none transition ease-out duration-300 transform" x-transition:enter-start="md:transition-none translate-y-full" x-transition:enter-end="md:transition-none translate-y-0" x-transition:leave="md:transition-none transition ease-in duration-300 transform" x-transition:leave-start="md:transition-none translate-y-0" x-transition:leave-end="md:transition-none translate-y-full" tabindex="-1" aria-hidden="true" class="flex overflow-hidden fixed top-0 right-0 left-0 z-999 justify-center sm:items-center items-end w-full md:inset-0 h-full">
                            <div class="absolute z-999 bg-black/25 h-[100vh] w-full hidden sm:block"></div>
                            <div class="relative z-[1000] sm:p-4 w-full sm:w-fit sm:max-w-3xl max-h-[700px]" @click.away="detailModal = false" x-transition:enter="motion-safe:ease-out duration-300" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-[#2F363E]">
                                    <!-- Modal header -->
                                    <div class="flex h-[75px] items-center justify-between px-4 md:px-5 border-b-2 rounded-t border-[#B8B8B8]">
                                        <h3 class="text-xl font-bold text-[#34662C] dark:text-white">
                                            Detail Data Kegiatan
                                        </h3>
                                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" @click="detailModal = false">
                                            <i class="fa-solid fa-xmark text-xl"></i>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="w-full h-full text-[#34662C] dark:text-white text-left">
                                        <div class="p-4 d:p-5 grid w-full sm:w-150 gap-4 grid-cols-2 max-h-[400px] sm:max-h-[450px] overflow-y-auto scrollbar-thumb-[#57BA47] scrollbar-track-[#E4F7DF] scrollbar-thin rounded-b-xl">
                                            <div class="col-span-2 relative sm:col-span-1">
                                                <label class="block mb-2 text-sm font-bold">NIK</label>
                                                <input name="nik" class="bg-white shadow-md border dark:border-gray-500 dark:bg-[#505c6a] border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" value="{{ $dt->penduduk->nik }}" readonly>
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <label class="block mb-2 text-sm font-bold">Kategori</label>
                                                <input name="kategori" id="kategori" class="bg-white shadow-md border dark:border-gray-500 dark:bg-[#505c6a] border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required readonly value="{{ $dt->aktivitas_tipe }}">
                                            </div>
                                            <div class="col-span-2">
                                                <label class="block mb-2 text-sm font-bold">Nama Kegiatan</label>
                                                <input type="text" name="nama" id="nama" class="bg-white shadow-md border dark:border-gray-500 dark:bg-[#505c6a] border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required readonly value="{{ $dt->judul }}">
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <label class="block mb-2 text-sm font-bold">Tanggal Mulai</label>
                                                <input type="date" name="tanggal_mulai" id="tanggal_mulai" class="bg-white shadow-md border dark:border-gray-500 dark:bg-[#505c6a] border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required readonly value="{{ $dt->tgl_mulai }}">
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <label class="block mb-2 text-sm font-bold">Tanggal Selesai</label>
                                                <input type="date" name="tanggal_selesai" id="tanggal_selesai" class="bg-white shadow-md border dark:border-gray-500 dark:bg-[#505c6a] border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required readonly value="{{ $dt->tgl_akhir }}">
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <div class="grid grid-cols-2 gap-2">
                                                    <div class="col-span-2 sm:col-span-1">
                                                        <label class="block mb-2 text-sm font-bold">Jam Mulai</label>
                                                        <input type="time" name="jam_mulai" id="jam_mulai" class="bg-white shadow-md border dark:border-gray-500 dark:bg-[#505c6a] border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required readonly value="{{ $dt->mulai_waktu }}">
                                                    </div>
                                                    <div class="col-span-2 sm:col-span-1">
                                                        <label class="block mb-2 text-sm font-bold">Jam Selesai</label>
                                                        <input type="time" name="jam_selesai" id="jam_selesai" class="bg-white shadow-md border dark:border-gray-500 dark:bg-[#505c6a] border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required readonly value="{{ $dt->akhir_waktu }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <label class="block mb-2 text-sm font-bold">Iuran</label>
                                                <input type="number" name="iuran" id="iuran" class="bg-white shadow-md border dark:border-gray-500 dark:bg-[#505c6a] border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required readonly value="{{ $dt->iuran }}">
                                            </div>
                                            <div class="col-span-2">
                                                <label class="block mb-2 text-sm font-bold">Lokasi</label>
                                                <textarea name="lokasi" rows="4" id="lokasi" class="bg-white shadow-md border dark:border-gray-500 dark:bg-[#505c6a] border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required readonly>{{ $dt->lokasi }}</textarea>
                                            </div>
                                            <div class="col-span-2">
                                                <label class="block mb-2 text-sm font-bold">Deskripsi</label>
                                                <textarea name="deskripsi" rows="4" id="deskripsi" class="bg-white shadow-md border dark:border-gray-500 dark:bg-[#505c6a] border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required readonly>{{ $dt->konten }}</textarea>
                                            </div>
                                        </div>
                                        <div class="flex items-center justify-center sm:justify-end bg-[#F2F2F2] dark:bg-[#3e4852] gap-4 sm:h-[75px] h-[65px] px-4 md:px-8 border-b-2 rounded-t border-[#B8B8B8] dark:border-gray-500 rounded-b-md">
                                            <button @click="detailModal = false" class="hover:text-white inline-flex sm:px-4 px-30 py-2 text-sm font-bold rounded-lg shadow-md items-center hover:bg-[#34662C] bg-white text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
                                                Keluar
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- modal detail end -->

                        <!-- modal edit start -->
                        <div x-show="editModal" x-transition:enter="md:transition-none transition ease-out duration-300 transform" x-transition:enter-start="md:transition-none translate-y-full" x-transition:enter-end="md:transition-none translate-y-0" x-transition:leave="md:transition-none transition ease-in duration-300 transform" x-transition:leave-start="md:transition-none translate-y-0" x-transition:leave-end="md:transition-none translate-y-full" tabindex="-1" aria-hidden="true" class="flex overflow-hidden fixed top-0 right-0 left-0 z-999 justify-center sm:items-center items-end w-full md:inset-0 h-full">
                            <div class="absolute z-999 bg-black/25 h-[100vh] w-full hidden sm:block"></div>
                            <div class="relative z-[1000] sm:p-4 w-full sm:w-fit sm:max-w-3xl max-h-[700px]" @click.away="editModal = false" x-transition:enter="motion-safe:ease-out duration-300" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-[#2F363E]">
                                    <!-- Modal header -->
                                    <div class="flex h-[75px] items-center justify-between px-4 md:px-5 border-b-2 rounded-t border-[#B8B8B8]">
                                        <h3 class="text-xl font-bold text-[#34662C] dark:text-white">
                                            Edit Data Kegiatan
                                        </h3>
                                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" @click="editModal = false">
                                            <i class="fa-solid fa-xmark text-xl"></i>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                    </div>
                                    <!-- Modal body -->
                                    <form class="w-full h-full text-[#34662C] dark:text-white text-left" method="POST" action="{{ route('updateKegiatan', $dt->jadwal_id) }}">
                                        @csrf
                                        {!! method_field('PUT') !!}

                                        <div class="p-4 d:p-5 grid w-full sm:w-150 gap-4 grid-cols-2 max-h-[400px] sm:max-h-[450px] overflow-y-auto scrollbar-thumb-[#57BA47] scrollbar-track-[#E4F7DF] scrollbar-thin rounded-b-xl">
                                            <div class="col-span-2 relative sm:col-span-1">
                                                <label class="block mb-2 text-sm font-bold">NIK</label>
                                                <input list="penduduk" name="nik" class="bg-white shadow-md border dark:border-gray-500 dark:bg-[#505c6a] border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" value="{{ $dt->penduduk->nik }}">
                                                <datalist id="penduduk">
                                                    @foreach ($penduduk as $p)
                                                    <option value="{{ $p->nik }}"></option>
                                                    @endforeach
                                                </datalist>
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <label for="kategori" class="block mb-2 text-sm font-bold">Kategori</label>
                                                <select name="kategori" id="kategori" class="bg-white shadow-md border dark:border-gray-500 dark:bg-[#505c6a] border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required>
                                                    <option>Pilih Kategori</option>
                                                    <option value="Kebersihan" @if ($dt->aktivitas_tipe === 'Kebersihan')
                                                        selected
                                                        @endif
                                                        >Kebersihan</option>
                                                    <option value="Lingkungan" @if ($dt->aktivitas_tipe === 'Lingkungan')
                                                        selected
                                                        @endif
                                                        >Lingkungan</option>
                                                    <option value="Kesehatan" @if ($dt->aktivitas_tipe === 'Kesehatan')
                                                        selected
                                                        @endif
                                                        >Kesehatan</option>
                                                    <option value="Pendidikan" @if ($dt->aktivitas_tipe === 'Pendidikan')
                                                        selected
                                                        @endif
                                                        >Pendidikan</option>
                                                    <option value="Budaya" @if ($dt->aktivitas_tipe === 'Budaya')
                                                        selected
                                                        @endif
                                                        >Budaya</option>
                                                    <option value="Kemanusiaan" @if ($dt->aktivitas_tipe === 'Kemanusiaan')
                                                        selected
                                                        @endif
                                                        >Kemanusiaan</option>
                                                    <option value="Kuliner" @if ($dt->aktivitas_tipe === 'Kuliner')
                                                        selected
                                                        @endif
                                                        >Kuliner</option>
                                                    <option value="Ekonomi" @if ($dt->aktivitas_tipe === 'Ekonomi')
                                                        selected
                                                        @endif
                                                        >Ekonomi</option>
                                                </select>
                                            </div>
                                            <div class="col-span-2">
                                                <label for="nama" class="block mb-2 text-sm font-bold">Nama Kegiatan</label>
                                                <input type="text" name="nama" id="nama" class="bg-white shadow-md border dark:border-gray-500 dark:bg-[#505c6a] border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required value="{{ $dt->judul }}">
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <label for="tanggal_mulai" class="block mb-2 text-sm font-bold">Tanggal Mulai</label>
                                                <input type="date" name="tanggal_mulai" id="tanggal_mulai" class="bg-white shadow-md border dark:border-gray-500 dark:bg-[#505c6a] border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required value="{{ $dt->tgl_mulai }}">
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <label for="tanggal_selesai" class="block mb-2 text-sm font-bold">Tanggal Selesai</label>
                                                <input type="date" name="tanggal_selesai" id="tanggal_selesai" class="bg-white shadow-md border dark:border-gray-500 dark:bg-[#505c6a] border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required value="{{ $dt->tgl_akhir }}">
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <div class="grid grid-cols-2 gap-2">
                                                    <div class="col-span-2 sm:col-span-1">
                                                        <label for="jam_mulai" class="block mb-2 text-sm font-bold">Jam Mulai</label>
                                                        <input type="time" name="jam_mulai" id="jam_mulai" class="bg-white shadow-md border dark:border-gray-500 dark:bg-[#505c6a] border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required value="{{ $dt->mulai_waktu }}">
                                                    </div>
                                                    <div class="col-span-2 sm:col-span-1">
                                                        <label for="jam_selesai" class="block mb-2 text-sm font-bold">Jam Selesai</label>
                                                        <input type="time" name="jam_selesai" id="jam_selesai" class="bg-white shadow-md border dark:border-gray-500 dark:bg-[#505c6a] border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required value="{{ $dt->akhir_waktu }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <label for="iuran" class="block mb-2 text-sm font-bold">Iuran</label>
                                                <input type="number" name="iuran" id="iuran" class="bg-white shadow-md border dark:border-gray-500 dark:bg-[#505c6a] border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required value="{{ $dt->iuran }}">
                                            </div>
                                            <div class="col-span-2">
                                                <label for="lokasi" class="block mb-2 text-sm font-bold">Lokasi</label>
                                                <textarea name="lokasi" rows="4" id="lokasi" class="bg-white shadow-md border dark:border-gray-500 dark:bg-[#505c6a] border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required>{{ $dt->lokasi }}</textarea>
                                            </div>
                                            <div class="col-span-2">
                                                <label for="deskripsi" class="block mb-2 text-sm font-bold">Deskripsi</label>
                                                <textarea name="deskripsi" rows="4" id="deskripsi" class="bg-white shadow-md border dark:border-gray-500 dark:bg-[#505c6a] border-[#34662C] text-sm rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C]" required>{{ $dt->konten }}</textarea>
                                            </div>
                                        </div>
                                        <div class="flex items-center justify-center sm:justify-end bg-[#F2F2F2] dark:bg-[#3e4852] gap-4 sm:h-[75px] h-[65px] px-4 md:px-8 border-b-2 rounded-t border-[#B8B8B8] dark:border-gray-500 rounded-b-md">
                                            <button type="button" @click="editModal = false" class="hover:text-white hidden sm:inline-flex px-4 py-2 text-sm font-bold rounded-lg shadow-md items-center hover:bg-[#34662C] bg-white text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
                                                Batal
                                            </button>
                                            <button type="submit" class="text-white inline-flex sm:px-4 px-30 py-2 text-sm font-bold rounded-lg shadow-md items-center bg-[#34662C] hover:bg-white hover:text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
                                                Update
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- modal edit end -->

                        <div class="absolute w-full h-full bg-black/40 top-0 left-0 flex justify-center items-center gap-3 opacity-0 group-hover:opacity-100 transition-all">
                            <div @keydown.escape="detailModal = false">
                                <button @click="detailModal = true" class="h-fit w-fit px-3 py-1 bg-[#446DFF] font-semibold text-sm rounded-xl text-white hover:bg-[#273E91] transition-all">Detail</button>
                            </div>
                            <div @keydown.escape="editModal = false">
                                <button @click="editModal = true" class="h-fit w-fit px-3 py-1 bg-[#FFDE68] font-semibold text-sm rounded-xl text-white hover:bg-[#B39C49] transition-all">Edit</button>
                            </div>
                            <form action="{{ route('destroyKegiatan', $dt->jadwal_id) }}" method="POST" id="deleteForm-{{ $dt->jadwal_id }}">
                                @csrf
                                {!! method_field('DELETE') !!}

                                <button type="button" onclick="showConfirm('{{ $dt->jadwal_id }}')" class="h-fit w-fit px-3 py-1 bg-[#FF5E5E] font-semibold text-sm rounded-xl text-white hover:bg-[#B34242] transition-all">Hapus</button>
                            </form>
                        </div>
                        <div class="text-lg font-medium text-green-900 text-left w-full dark:text-[#57BA47]">{{ Str::limit($dt->judul, 27) }}</div>
                        <div class="flex items-center gap-3 w-full justify-between">
                            <div class="flex gap-2 items-center text-sm font-normal text-gray-500 dark:text-gray-300 text-left w-fit">
                                <i class="fa-regular fa-clock"></i>
                                <p>{{ $dt->mulai_waktu }} - {{ $dt->akhir_waktu }}</p>
                            </div>
                            <div class="px-3 py-1 bg-green-500 rounded-xl text-xs font-medium text-white">{{ $dt->aktivitas_tipe }}</div>
                        </div>
                        <div class="flex items-center gap-2 text-sm font-normal text-gray-500 dark:text-gray-300 text-left w-full">
                            <i class="fa-solid fa-location-dot"></i>
                            <p>{{ $dt->lokasi }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        const showConfirm = (id) => {
            Swal.fire({
                title: 'Apakah anda yakin?',
                text: 'Data ini akan dihapus dan tidak bisa dikembalikan!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Iya, hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById(`deleteForm-${id}`).submit();
                }
            });
        }
    </script>
    <script>
        //calendar
        const calendarHead = document.querySelector("#calendarHead");
        const days = document.querySelector("#days");
        const buttonCalendar = document.querySelectorAll(".button-calendar");

        const urlParams = new URLSearchParams(window.location.search);
        const dateParam = urlParams.get('date');

        // console.log(parseInt(dateParam.split("-")[0]));

        let date = new Date();
        let currYear = dateParam ? parseInt(dateParam.split("-")[0]) : date.getFullYear();
        let currMonth = dateParam ? parseInt(dateParam.split("-")[1]) - 1 : date.getMonth();

        const month = [
            "Januari",
            "Februari",
            "Maret",
            "April",
            "Mei",
            "Juni",
            "Juli",
            "Agustus",
            "September",
            "Oktober",
            "November",
            "Desember",
        ];

        const renderCalendar = () => {
            let dateKegiatan = @json($dataArray['dataDate']);
            let counter = 0;
            let firstDayofMonth = new Date(currYear, currMonth, 1)
                .getDay(); // getting last date of month
            let lastDateofMonth = new Date(currYear, currMonth + 1, 0).getDate();
            let lastDayofMonth = new Date(currYear, currMonth, lastDateofMonth).getDay();
            let lastDateofLastMonth = new Date(currYear, currMonth, 0)
                .getDate(); // getting last date of month
            let daysDate = "";
            let dateCalendar = '';

            for (let i = firstDayofMonth; i > 0; i--) {
                counter++;

                if (counter % 7 == 1) {
                    daysDate += `   <tr>
                                    <td class="py-1">
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a role="link"  tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#57BA47] focus:text-white hover:bg-[#234C1D] hover:text-white dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-normal text-gray-400 dark:text-slate-400 rounded-full">${lastDateofLastMonth - i + 1}</a>
                                            </div>
                                        </div>
                                    </td>`
                } else if (counter % 7 == 0) {
                    daysDate += `       <td class="py-1">
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a role="link"  tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#57BA47] focus:text-white hover:bg-[#234C1D] hover:text-white dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-normal text-gray-400 dark:text-slate-400 rounded-full">${lastDateofLastMonth - i + 1}</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>`
                } else {
                    daysDate += `       <td class="py-1">
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a role="link"  tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#57BA47] focus:text-white hover:bg-[#234C1D] hover:text-white dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-normal text-gray-400 dark:text-slate-400 rounded-full">${lastDateofLastMonth - i + 1}</a>
                                            </div>
                                        </div>
                                    </td>`
                }
            }

            for (let i = 1; i <= lastDateofMonth; i++) {
                counter++;

                dateCalendar = `${currYear}-${currMonth + 1}-${i}`;

                if (i === date.getDate() && currMonth === date.getMonth() && currYear === date.getFullYear()) {
                    daysDate += `       <td class="py-1">
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a href="/admin/jadwal-kegiatan?date=${dateCalendar}" role="link tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#57BA47] focus:text-white hover:bg-[#234C1D] hover:text-white dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-medium text-white dark:text-gray-100 rounded-full bg-[#57BA47]">${i}</a>
                                            </div>
                                        </div>
                                    </td>`
                } else if (i === parseInt(dateParam?.split("-")[2]) && currMonth === (parseInt(dateParam?.split("-")[1]) - 1) && currYear === (parseInt(dateParam?.split("-")[0]))) {
                    daysDate += `       <td class="py-1">
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a href="/admin/jadwal-kegiatan?date=${dateCalendar}" role="link tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#57BA47] focus:text-white hover:bg-[#234C1D] hover:text-white dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-medium dark:text-gray-100 rounded-full text-white bg-[#4D4DFF]">${i}</a>
                                            </div>
                                        </div>
                                    </td>`
                } else if (dateKegiatan.some(dt =>
                        (dt.yearStart < currYear || (dt.yearStart === currYear && (dt.monthStart < currMonth || (dt.monthStart === currMonth && dt.dayStart <= i)))) &&
                        (dt.yearEnd > currYear || (dt.yearEnd === currYear && (dt.monthEnd > currMonth || (dt.monthEnd === currMonth && dt.dayEnd >= i)))) && (counter % 7 == 1)
                    )) {
                    daysDate += `   <tr>
                                    <td class="py-1">
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a href="/admin/jadwal-kegiatan?date=${dateCalendar}" role="link tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#57BA47] focus:text-white hover:bg-[#234C1D] hover:text-white dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-medium text-white dark:text-gray-100 rounded-full bg-yellow-500">${i}</a>
                                            </div>
                                        </div>
                                    </td>`
                } else if (dateKegiatan.some(dt =>
                        (dt.yearStart < currYear || (dt.yearStart === currYear && (dt.monthStart < currMonth || (dt.monthStart === currMonth && dt.dayStart <= i)))) &&
                        (dt.yearEnd > currYear || (dt.yearEnd === currYear && (dt.monthEnd > currMonth || (dt.monthEnd === currMonth && dt.dayEnd >= i)))) && (counter % 7 == 0)
                    )) {
                    daysDate += `   <td class="py-1">
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a href="/admin/jadwal-kegiatan?date=${dateCalendar}" role="link tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#57BA47] focus:text-white hover:bg-[#234C1D] hover:text-white dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-medium text-white dark:text-gray-100 rounded-full bg-yellow-500">${i}</a>
                                            </div>
                                        </div>
                                    </td>
                                    </tr>`
                } else if (dateKegiatan.some(dt =>
                        (dt.yearStart < currYear || (dt.yearStart === currYear && (dt.monthStart < currMonth || (dt.monthStart === currMonth && dt.dayStart <= i)))) &&
                        (dt.yearEnd > currYear || (dt.yearEnd === currYear && (dt.monthEnd > currMonth || (dt.monthEnd === currMonth && dt.dayEnd >= i))))
                    )) {
                    daysDate += `  <td class="py-1">
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a href="/admin/jadwal-kegiatan?date=${dateCalendar}" role="link tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#57BA47] focus:text-white hover:bg-[#234C1D] hover:text-white dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-medium text-white dark:text-gray-100 rounded-full bg-yellow-500">${i}</a>
                                            </div>
                                        </div>
                                    </td>`
                } else if (counter % 7 == 1) {
                    daysDate += `   <tr>
                                    <td class="py-1">
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a href="/admin/jadwal-kegiatan?date=${dateCalendar}" role="link tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#57BA47] focus:text-white hover:bg-[#234C1D] hover:text-white dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-medium text-gray-500 dark:text-gray-100 rounded-full">${i}</a>
                                            </div>
                                        </div>
                                    </td>`
                } else if (counter % 7 == 0) {
                    daysDate += `       <td class="py-1">
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a href="/admin/jadwal-kegiatan?date=${dateCalendar}" role="link tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#57BA47] focus:text-white hover:bg-[#234C1D] hover:text-white dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-medium text-gray-500 dark:text-gray-100 rounded-full">${i}</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>`
                } else {
                    daysDate += `       <td class="py-1">
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a href="/admin/jadwal-kegiatan?date=${dateCalendar}" role="link tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#57BA47] focus:text-white hover:bg-[#234C1D] hover:text-white dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-medium text-gray-500 dark:text-gray-100 rounded-full">${i}</a>
                                            </div>
                                        </div>
                                    </td>`
                }
            }

            for (let i = lastDayofMonth; i < 6; i++) {
                counter++;

                if (counter % 7 == 1) {
                    daysDate += `   <tr>
                                    <td class="py-1">
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a href="/admin/jadwal-kegiatan?date=${dateCalendar}" role="link"  tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#57BA47] hover:bg-[#234C1D] hover:text-white dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-normal text-gray-400 dark:text-slate-400 rounded-full">${i - lastDayofMonth + 1}</a>
                                            </div>
                                        </div>
                                    </td>`
                } else if (counter % 7 == 0) {
                    daysDate += `       <td class="py-1">
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a href="/admin/jadwal-kegiatan?date=${dateCalendar}" role="link"  tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#57BA47] hover:bg-[#234C1D] hover:text-white dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-normal text-gray-400 dark:text-slate-400 rounded-full">${i - lastDayofMonth + 1}</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>`
                } else {
                    daysDate += `       <td class="py-1">
                                        <div class="w-full h-full">
                                            <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                <a href="/admin/jadwal-kegiatan?date=${dateCalendar}" role="link"  tabindex="0" class="focus:outline-none  focus:ring-1 focus:ring-offset-2  focus:bg-[#57BA47] hover:bg-[#234C1D] hover:text-white dark:hover:bg-slate-400 text-base w-8 h-8 flex items-center justify-center font-normal text-gray-400 dark:text-slate-400 rounded-full">${i - lastDayofMonth + 1}</a>
                                            </div>
                                        </div>
                                    </td>`
                }
            }

            calendarHead.innerHTML = `${month[currMonth]} ${currYear}`;

            days.innerHTML = daysDate;
        }

        const next = () => {
            currMonth++;
            if (currMonth > 11) {
                currMonth = 0;
                currYear++;
            }
            renderCalendar();
        }

        const prev = () => {
            currMonth--;
            if (currMonth < 0) {
                currMonth = 11;
                currYear--;
            }
            renderCalendar();
        }

        renderCalendar();
    </script>
</x-admin-layout>