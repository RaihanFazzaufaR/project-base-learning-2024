<!-- Main modal -->
<div x-show="filterModal" x-transition:enter="md:transition-none transition ease-out duration-300 transform" x-transition:enter-start="md:transition-none translate-y-full" x-transition:enter-end="md:transition-none translate-y-0" x-transition:leave="md:transition-none transition ease-in duration-300 transform" x-transition:leave-start="md:transition-none translate-y-0" x-transition:leave-end="md:transition-none translate-y-full" tabindex="-1" aria-hidden="true" class="flex overflow-hidden fixed top-0 right-0 left-0 z-999 justify-center sm:items-center items-end w-full md:inset-0 h-full">
    <div class="absolute z-999 bg-black/25 h-[100vh] w-full hidden sm:block"></div>
    <div class="relative z-[1000] sm:p-4 w-full sm:w-fit sm:max-w-3xl max-h-[700px]" @click.away="filterModal = false" x-transition:enter="motion-safe:ease-out duration-300" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100">
        <!-- Modal content -->
        <div class="relative bg-white rounded-t-2xl sm:rounded-lg shadow dark:bg-[#2F363E]">
            <!-- Modal header -->
            <div class="flex h-[75px] items-center justify-between px-4 md:px-5 border-b-2 rounded-t border-[#B8B8B8]">
                <h3 class="text-xl font-bold text-[#34662C] dark:text-white">
                    Filter Data Penduduk
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" @click="filterModal = false">
                    <i class="fa-solid fa-xmark text-xl"></i>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form class="w-full h-full text-[#34662C] dark:text-white" action="{{ route('daftar-penduduk') }}">
                @csrf
                <div class="p-4 md:p-5 grid w-full sm:w-150 gap-4 grid-cols-2 max-h-[400px] sm:max-h-[450px] overflow-y-auto rounded-b-xl scrollbar-thumb-[#57BA47] scrollbar-track-[#E4F7DF] scrollbar-thin">
                    <div class="col-span-2 sm:col-span-1">
                        <label for="agama" class="block mb-2 text-sm font-bold">Agama</label>
                        <select id="agama" name="agama" class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] dark:placeholder-white rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C] ">
                            <option selected="" value="">Pilih Agama</option>
                            <option value="islam">Islam</option>
                            <option value="katolik">Katolik</option>
                            <option value="kristen">Kristen</option>
                            <option value="hindu">Hindu</option>
                            <option value="buddha">Buddha</option>
                            <option value="khonghucu">Khonghucu</option>
                        </select>
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="statusPenduduk" class="block mb-2 text-sm font-bold ">Status Penduduk</label>
                        <select id="statusPenduduk" name="statusPenduduk" class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C] dark:placeholder-white">
                            <option selected="" value="">Pilih Status Penduduk</option>
                            <option value="penduduk tetap">Penduduk Tetap</option>
                            <option value="penduduk tidak tetap">Penduduk Tidak Tetap</option>
                        </select>
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="statusPernikahan" class="block mb-2 text-sm font-bold ">Status Pernikahan</label>
                        <select id="statusPernikahan" name="statusPernikahan" class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C] dark:placeholder-white">
                            <option selected="" value="">Pilih Status Pernikahan</option>
                            <option value="belum">Belum Menikah</option>
                            <option value="sudah">Sudah Menikah</option>
                        </select>
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="kewarganegaraan" class="block mb-2 text-sm font-bold">Kewarganegaraan</label>
                        <select id="kewarganegaraan" name="kewarganegaraan" class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C] dark:placeholder-white">
                            <option selected="" value="">Pilih Kewarganegaraan</option>
                            <option value="WNI">Indonesia</option>
                            <option value="WNA">Luar</option>
                        </select>
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="jabatan" class="block mb-2 text-sm font-bold ">Jabatan</label>
                        <select id="jabatan" name="jabatan" class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C] dark:placeholder-white">
                            <option selected="" value="">Pilih Jabatan</option>
                            <option value="Ketua RW">Ketua RW</option>
                            <option value="Ketua RT">Ketua RT</option>
                            <option value="Bendahara">Bendahara</option>
                            <option value="Sekretaris">Sekretaris</option>
                            <option value="Tidak Ada">Tidak Ada</option>
                        </select>
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="jenisKelamin" class="block mb-2 text-sm font-bold ">Jenis Kelamin</label>
                        <select id="jenisKelamin" name="jenisKelamin" class="bg-white shadow-md border border-[#34662C] text-sm dark:border-gray-500 dark:bg-[#505c6a] rounded-lg focus:outline-none focus:border-2 block w-full p-2.5 placeholder-[#34662C] dark:placeholder-white">
                            <option selected="" value="">Pilih Jenis Kelamin</option>
                            <option value="L">Laki-Laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>
                </div>
                <div class="flex items-center justify-center sm:justify-end bg-[#F2F2F2] dark:bg-[#3e4852] gap-4 h-[65px] sm:h-[75px] px-4 md:px-8 border-b-2 rounded-t border-[#B8B8B8] dark:border-gray-500 rounded-b-md">
                    <button type="button" @click="filterModal = false" class="hidden hover:text-white sm:inline-flex px-4 py-2 text-sm font-bold rounded-lg shadow-md items-center hover:bg-[#34662C] bg-white text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
                        Batal
                    </button>
                    <button type="submit" class="text-white inline-flex sm:px-4 px-30 py-2 text-sm font-bold rounded-xl sm:rounded-lg shadow-md items-center bg-[#34662C] hover:bg-white hover:text-[#34662C] hover:scale-105 transition duration-300 ease-in-out">
                        Filter
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>