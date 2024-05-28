 <!-- ===== Header Start ===== -->
 <header class="sticky top-0 z-[100] flex w-full bg-white dark:bg-[#2F363E]">
     <div class="flex flex-grow items-center justify-between px-4 py-4 shadow-2 dark:shadow-gray-600 dark:shadow-sm md:px-6 2xl:px-11">
         <div class="flex items-center gap-3 sm:gap-4 lg:hidden">
             <!-- Hamburger Toggle BTN -->
             <button class="z-99999 block rounded-sm border border-gray-300 bg-white p-1.5 shadow-sm dark:border-gray-600 dark:bg-[#2F363E] lg:hidden" @click.stop="sidebarToggle = !sidebarToggle">
                 <span class="relative block h-5.5 w-5.5 cursor-pointer">
                     <span class="du-block absolute right-0 h-full w-full">
                         <span class="relative left-0 top-0 my-1 block h-0.5 w-0 rounded-sm bg-black delay-[0] duration-200 ease-in-out dark:bg-white" :class="{ '!w-full delay-300': !sidebarToggle }"></span>
                         <span class="relative left-0 top-0 my-1 block h-0.5 w-0 rounded-sm bg-black delay-150 duration-200 ease-in-out dark:bg-white" :class="{ '!w-full delay-400': !sidebarToggle }"></span>
                         <span class="relative left-0 top-0 my-1 block h-0.5 w-0 rounded-sm bg-black delay-200 duration-200 ease-in-out dark:bg-white" :class="{ '!w-full delay-500': !sidebarToggle }"></span>
                     </span>
                     <span class="du-block absolute right-0 h-full w-full rotate-45">
                         <span class="absolute left-2.5 top-0 block h-full w-0.5 rounded-sm bg-black delay-300 duration-200 ease-in-out dark:bg-white" :class="{ '!h-0 delay-[0]': !sidebarToggle }"></span>
                         <span class="delay-400 absolute left-0 top-2.5 block h-0.5 w-full rounded-sm bg-black duration-200 ease-in-out dark:bg-white" :class="{ '!h-0 dealy-200': !sidebarToggle }"></span>
                     </span>
                 </span>
             </button>
             <!-- Hamburger Toggle BTN -->
             <a class="block flex-shrink-0 lg:hidden" href="{{ route('admin') }}">
                 <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" class="w-9 h-9" />
             </a>

             <div class="hidden sm:block lg:hidden">
                 <div class="flex justify-center items-center gap-4 text-black dark:text-white">
                     <!-- <i class="text-2xl fa-solid fa-bars-staggered"></i> -->
                     <div class="uppercase font-bold text-2xl">{{ $selected }}</div>
                 </div>
             </div>
         </div>
         <!-- <div class="hidden sm:block">
                <form action="https://formbold.com/s/unique_form_id" method="POST">
                    <div class="relative">
                        <button class="absolute left-0 top-1/2 -translate-y-1/2">
                            <svg class="fill-body hover:fill-primary dark:fill-bodydark dark:hover:fill-primary" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.16666 3.33332C5.945 3.33332 3.33332 5.945 3.33332 9.16666C3.33332 12.3883 5.945 15 9.16666 15C12.3883 15 15 12.3883 15 9.16666C15 5.945 12.3883 3.33332 9.16666 3.33332ZM1.66666 9.16666C1.66666 5.02452 5.02452 1.66666 9.16666 1.66666C13.3088 1.66666 16.6667 5.02452 16.6667 9.16666C16.6667 13.3088 13.3088 16.6667 9.16666 16.6667C5.02452 16.6667 1.66666 13.3088 1.66666 9.16666Z" fill="" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M13.2857 13.2857C13.6112 12.9603 14.1388 12.9603 14.4642 13.2857L18.0892 16.9107C18.4147 17.2362 18.4147 17.7638 18.0892 18.0892C17.7638 18.4147 17.2362 18.4147 16.9107 18.0892L13.2857 14.4642C12.9603 14.1388 12.9603 13.6112 13.2857 13.2857Z" fill="" />
                            </svg>
                        </button>

                        <input type="text" placeholder="Type to search..." class="w-full bg-transparent pl-9 pr-4 focus:outline-none xl:w-125" />
                    </div>
                </form>
            </div> -->
         <div class="hidden lg:block">
             <div class="flex justify-center items-center gap-4 text-black dark:text-white">
                 <i class="text-2xl fa-solid fa-bars-staggered"></i>
                 <div class="uppercase font-bold  text-2xl">{{ $selected }}</div>
             </div>
         </div>

         <div class="flex items-center gap-3 2xs:gap-7">
             <ul class="flex items-center gap-2 2xs:gap-4">
                 <li>
                     <!-- Dark Mode Toggler -->
                     <div class="h-9 w-9 flex justify-center items-center cursor-pointer rounded-full p-2" id="darkMode"></div>
                     <!-- Dark Mode Toggler -->
                 </li>

                 <!-- Notification Menu Area -->
                 <li class="relative" x-data="{ dropdownOpen: false, notifying: true }" @click.outside="dropdownOpen = false">
                     <a class="relative flex h-9 w-9 items-center justify-center rounded-full dark:hover:bg-gray-600 hover:bg-slate-200" href="#" @click.prevent="dropdownOpen = ! dropdownOpen; notifying = false">
                         <i class="fa-solid fa-circle text-[10px] text-red-500 absolute top-[7px] right-[7px]"></i>
                         <i class="fa-solid fa-bell text-xl text-gray-500 dark:text-white"></i>
                     </a>

                     <!-- Dropdown Start -->
                     <div x-show="dropdownOpen" class="absolute -right-27 mt-2.5 flex h-90 w-75 text-black dark:text-white flex-col border border-gray-300 bg-white rounded-md dark:bg-[#2F363E] shadow-default dark:border-gray-600 dark:bg-boxdark sm:right-0 sm:w-80">
                         <div class="px-4.5 py-3 text-center">
                             <h5 class="text-sm font-medium text-bodydark2">Notification</h5>
                         </div>

                         <ul class="flex h-auto flex-col overflow-y-auto">
                             <li>
                                 <a class="flex flex-col gap-2.5 border-t border-gray-300 px-4.5 py-3 hover:bg-gray-100 dark:border-gray-600 dark:hover:bg-gray-600" href="#">
                                     <p class="text-sm">
                                         <span class="">Edit your information in a swipe</span>
                                         Sint occaecat cupidatat non proident, sunt in culpa qui
                                         officia deserunt mollit anim.
                                     </p>

                                     <p class="text-xs">12 May, 2025</p>
                                 </a>
                             </li>
                             <li>
                                 <a class="flex flex-col gap-2.5 border-t border-gray-300 px-4.5 py-3 hover:bg-gray-2 dark:border-gray-600 dark:hover:bg-meta-4" href="#">
                                     <p class="text-sm">
                                         <span class="">It is a long established fact</span>
                                         that a reader will be distracted by the readable.
                                     </p>

                                     <p class="text-xs">24 Feb, 2025</p>
                                 </a>
                             </li>
                             <li>
                                 <a class="flex flex-col gap-2.5 border-t border-gray-300 px-4.5 py-3 hover:bg-gray-2 dark:border-gray-600 dark:hover:bg-meta-4" href="#">
                                     <p class="text-sm">
                                         <span class="">There are many variations</span>
                                         of passages of Lorem Ipsum available, but the majority have
                                         suffered
                                     </p>

                                     <p class="text-xs">04 Jan, 2025</p>
                                 </a>
                             </li>
                             <li>
                                 <a class="flex flex-col gap-2.5 border-t border-gray-300 px-4.5 py-3 hover:bg-gray-2 dark:border-gray-600 dark:hover:bg-meta-4" href="#">
                                     <p class="text-sm">
                                         <span class="">There are many variations</span>
                                         of passages of Lorem Ipsum available, but the majority have
                                         suffered
                                     </p>

                                     <p class="text-xs">01 Dec, 2024</p>
                                 </a>
                             </li>
                         </ul>
                     </div>
                     <!-- Dropdown End -->
                 </li>
                 <!-- Notification Menu Area -->
             </ul>

             <!-- User Area -->
             <div class="relative" x-data="{ dropdownOpen: false }" @click.outside="dropdownOpen = false">
                 <a class="flex items-center gap-4" href="#" @click.prevent="dropdownOpen = ! dropdownOpen">
                     <span class="hidden text-right lg:block">
                         <span class="block text-sm font-medium text-black dark:text-white">{{ auth()->user()->penduduk->nama }}</span>
                         <span class="block text-xs font-medium dark:text-white">
                             {{ auth()->user()->penduduk->jabatan }}
                             {{ (auth()->user()->penduduk->jabatan === 'Ketua RT')? auth()->user()->penduduk->kartuKeluarga->rt : '03'}}
                         </span>
                     </span>

                     <span class="h-12 w-12 rounded-full">
                         <img src="{{ asset('assets/images/userProfile.png') }}" alt="User" />
                     </span>

                     <i class="fa-solid fa-chevron-down transition-all duration-200 dark:text-white" :class="dropdownOpen && 'rotate-180'"></i>
                 </a>

                 <!-- Dropdown Start -->
                 <div x-show="dropdownOpen" class="absolute right-0 mt-4 flex w-62.5 flex-col border border-gray-300 bg-white shadow-default dark:border-gray-600 dark:bg-[#2F363E] dark:text-white rounded-md">
                     <ul class="flex flex-col gap-5 border-b border-gray-300 px-6 py-7.5 dark:border-gray-600">
                         <li>
                             <a href="{{ route('profilku') }}" class="flex items-center gap-3.5 text-sm font-medium duration-300 ease-in-out hover:text-primary lg:text-base">
                                 <svg class="fill-current" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                     <path d="M11 9.62499C8.42188 9.62499 6.35938 7.59687 6.35938 5.12187C6.35938 2.64687 8.42188 0.618744 11 0.618744C13.5781 0.618744 15.6406 2.64687 15.6406 5.12187C15.6406 7.59687 13.5781 9.62499 11 9.62499ZM11 2.16562C9.28125 2.16562 7.90625 3.50624 7.90625 5.12187C7.90625 6.73749 9.28125 8.07812 11 8.07812C12.7188 8.07812 14.0938 6.73749 14.0938 5.12187C14.0938 3.50624 12.7188 2.16562 11 2.16562Z" fill="" />
                                     <path d="M17.7719 21.4156H4.2281C3.5406 21.4156 2.9906 20.8656 2.9906 20.1781V17.0844C2.9906 13.7156 5.7406 10.9656 9.10935 10.9656H12.925C16.2937 10.9656 19.0437 13.7156 19.0437 17.0844V20.1781C19.0094 20.8312 18.4594 21.4156 17.7719 21.4156ZM4.53748 19.8687H17.4969V17.0844C17.4969 14.575 15.4344 12.5125 12.925 12.5125H9.07498C6.5656 12.5125 4.5031 14.575 4.5031 17.0844V19.8687H4.53748Z" fill="" />
                                 </svg>
                                 Profilku
                             </a>
                         </li>
                         <li>
                             <a href="{{ route('home') }}" class="flex items-center gap-3.5 text-sm font-medium duration-300 ease-in-out hover:text-primary lg:text-base">
                                 <svg class="fill-current" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                     <path d="M17.6687 1.44374C17.1187 0.893744 16.4312 0.618744 15.675 0.618744H7.42498C6.25623 0.618744 5.25935 1.58124 5.25935 2.78437V4.12499H4.29685C3.88435 4.12499 3.50623 4.46874 3.50623 4.91562C3.50623 5.36249 3.84998 5.70624 4.29685 5.70624H5.25935V10.2781H4.29685C3.88435 10.2781 3.50623 10.6219 3.50623 11.0687C3.50623 11.4812 3.84998 11.8594 4.29685 11.8594H5.25935V16.4312H4.29685C3.88435 16.4312 3.50623 16.775 3.50623 17.2219C3.50623 17.6687 3.84998 18.0125 4.29685 18.0125H5.25935V19.25C5.25935 20.4187 6.22185 21.4156 7.42498 21.4156H15.675C17.2218 21.4156 18.4937 20.1437 18.5281 18.5969V3.47187C18.4937 2.68124 18.2187 1.95937 17.6687 1.44374ZM16.9469 18.5625C16.9469 19.2844 16.3625 19.8344 15.6406 19.8344H7.3906C7.04685 19.8344 6.77185 19.5594 6.77185 19.2156V17.875H8.6281C9.0406 17.875 9.41873 17.5312 9.41873 17.0844C9.41873 16.6375 9.07498 16.2937 8.6281 16.2937H6.77185V11.7906H8.6281C9.0406 11.7906 9.41873 11.4469 9.41873 11C9.41873 10.5875 9.07498 10.2094 8.6281 10.2094H6.77185V5.63749H8.6281C9.0406 5.63749 9.41873 5.29374 9.41873 4.84687C9.41873 4.39999 9.07498 4.05624 8.6281 4.05624H6.77185V2.74999C6.77185 2.40624 7.04685 2.13124 7.3906 2.13124H15.6406C15.9844 2.13124 16.2937 2.26874 16.5687 2.50937C16.8094 2.74999 16.9469 3.09374 16.9469 3.43749V18.5625Z" fill="" />
                                 </svg>
                                 Portal Warga
                             </a>
                         </li>
                     </ul>
                     <a href="{{ route('logout') }}" class="flex items-center gap-3.5 px-6 py-4 text-sm font-medium duration-300 ease-in-out hover:text-primary lg:text-base">
                         <svg class="fill-current" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                             <path d="M15.5375 0.618744H11.6531C10.7594 0.618744 10.0031 1.37499 10.0031 2.26874V4.64062C10.0031 5.05312 10.3469 5.39687 10.7594 5.39687C11.1719 5.39687 11.55 5.05312 11.55 4.64062V2.23437C11.55 2.16562 11.5844 2.13124 11.6531 2.13124H15.5375C16.3625 2.13124 17.0156 2.78437 17.0156 3.60937V18.3562C17.0156 19.1812 16.3625 19.8344 15.5375 19.8344H11.6531C11.5844 19.8344 11.55 19.8 11.55 19.7312V17.3594C11.55 16.9469 11.2062 16.6031 10.7594 16.6031C10.3125 16.6031 10.0031 16.9469 10.0031 17.3594V19.7312C10.0031 20.625 10.7594 21.3812 11.6531 21.3812H15.5375C17.2219 21.3812 18.5625 20.0062 18.5625 18.3562V3.64374C18.5625 1.95937 17.1875 0.618744 15.5375 0.618744Z" fill="" />
                             <path d="M6.05001 11.7563H12.2031C12.6156 11.7563 12.9594 11.4125 12.9594 11C12.9594 10.5875 12.6156 10.2438 12.2031 10.2438H6.08439L8.21564 8.07813C8.52501 7.76875 8.52501 7.2875 8.21564 6.97812C7.90626 6.66875 7.42501 6.66875 7.11564 6.97812L3.67814 10.4844C3.36876 10.7938 3.36876 11.275 3.67814 11.5844L7.11564 15.0906C7.25314 15.2281 7.45939 15.3312 7.66564 15.3312C7.87189 15.3312 8.04376 15.2625 8.21564 15.125C8.52501 14.8156 8.52501 14.3344 8.21564 14.025L6.05001 11.7563Z" fill="" />
                         </svg>
                         Log Out
                     </a>
                 </div>
                 <!-- Dropdown End -->
             </div>
             <!-- User Area -->
         </div>
     </div>
 </header>

 <!-- ===== Header End ===== -->

 <script>
     // fitur button dark mode

     const darkMode = document.getElementById('darkMode');
     const userTheme = localStorage.getItem("theme");
     const systemTheme = window.matchMedia("(prefers-color-scheme: dark)").matches;

     const darkIcon = `<i class="text-xl text-gray-500 fa-solid fa-moon"></i>`
     const lightIcon = `<i class="text-xl text-yellow-400 fa-regular fa-sun"></i>`


     const setIcon = () => {
         if (userTheme === "dark" || (!userTheme && systemTheme)) {
             darkMode.innerHTML = lightIcon;
             darkMode.classList.add('hover:bg-gray-600');
         } else {
             darkMode.innerHTML = darkIcon;
             darkMode.classList.add('hover:bg-slate-200');
         }
     }

     setIcon();

     const themeCheck = () => {
         if (userTheme === "dark" || (!userTheme && systemTheme)) {
             document.documentElement.classList.add("dark");
         }
     };

     const themeSwitch = () => {
         if (document.documentElement.classList.contains("dark")) {
             document.documentElement.classList.remove("dark");
             localStorage.setItem("theme", "light");
             iconToggle(darkIcon);
             return;
         }

         document.documentElement.classList.add("dark");
         localStorage.setItem("theme", "dark");
         iconToggle(lightIcon);
     }

     darkMode.addEventListener("click", () => {
         themeSwitch();
     })

     const iconToggle = (icon) => {
         darkMode.innerHTML = icon
         darkMode.classList.toggle('hover:bg-slate-200');
         darkMode.classList.toggle('hover:bg-gray-600');
     }

     themeCheck();
 </script>