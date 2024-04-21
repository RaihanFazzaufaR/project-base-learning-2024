<!DOCTYPE html>
<html lang="en">

<head>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="flex w-[100vw] h-[100vh]">
        <div class="basis-[30%] bg-white flex justify-center items-center">
            <div class="flex w-[70%] justify-center items-center flex-col gap-8">
                {{ $slot }}
            </div>
        </div>
        <div class="basis-[70%] relative">
            <div class="h-full w-full absolute z-[0] imgBg">
                <img src="{{ asset('assets/images/bg-login-1.jpg') }}" alt="" class="h-full w-full absolute z-1 brightness-[0.6]">
                <img src="{{ asset('assets/images/bg-login-2.jpg') }}" alt="" class="h-full w-full absolute z-1 brightness-[0.6]">
            </div>

            <div class="absolute z-[3] h-full w-full flex justify-center items-center flex-col gap-12">
                <p class="w-[50%] gradient-text animate-gradient text-transparent font-bold text-7xl text-center transform-gpu">PORTAL RW 3 DESA BUMIAYU</p>
                <p class="text-center w-[60%] font-semibold text-lg text-white">Website for easier and more comfortable social life. Provides various access with just one click. Provide fast and practical service. And the most importantly, easy to use by everyone, both residents and others.</p>
            </div>
            <div class="absolute z-[4] h-full w-full flex justify-around">
                <div class="h-full w-[1vh] bg-gradient-to-b from-transparent to-[#81B076]/5 overflow-hidden">
                    <div class="w-full h-[10%] -translate-y-[10vh] bg-gradient-to-b from-transparent to-[#81B076]/[0.3] rain"></div>
                </div>
                <div class="h-full w-[1vh] bg-gradient-to-b from-transparent to-[#81B076]/5 overflow-hidden">
                    <div class="w-full h-[10%] -translate-y-[10vh] bg-gradient-to-b from-transparent to-[#81B076]/[0.3] rain"></div>
                </div>
                <div class="h-full w-[1vh] bg-gradient-to-b from-transparent to-[#81B076]/5 overflow-hidden">
                    <div class="w-full h-[10%] -translate-y-[10vh] bg-gradient-to-b from-transparent to-[#81B076]/[0.3] rain"></div>
                </div>
                <div class="h-full w-[1vh] bg-gradient-to-b from-transparent to-[#81B076]/5 overflow-hidden">
                    <div class="w-full h-[10%] -translate-y-[10vh] bg-gradient-to-b from-transparent to-[#81B076]/[0.3] rain"></div>
                </div>
                <div class="h-full w-[1vh] bg-gradient-to-b from-transparent to-[#81B076]/5 overflow-hidden">
                    <div class="w-full h-[10%] -translate-y-[10vh] bg-gradient-to-b from-transparent to-[#81B076]/[0.3] rain"></div>
                </div>
            </div>
        </div>
    </div>
    <script>
        const rain = document.querySelectorAll('.rain');
        let index = [];

        const setRainAnimation = () => {
            let random = Math.floor(Math.random() * 5);
            if (index.includes(random))
                setRainAnimation();
            index.push(random);
            rain[random].classList.add('animate-rain');

            if (index.length == 5) {
                clearInterval(intervalRain);
            }
        }

        let intervalRain = setInterval(setRainAnimation, 1000);

        let counter = 0;
        const imgBg = document.querySelector('.imgBg');

        const setImageAnimation = () => {
            imgBg.lastElementChild.classList.add('animate-fadeOut');
            setTimeout(() => {
                imgBg.lastElementChild.classList.remove('animate-fadeOut');
                let child = imgBg.lastElementChild.cloneNode(true);
                imgBg.removeChild(imgBg.lastElementChild);
                imgBg.prepend(child);
            }, 5000);

        }
        setInterval(setImageAnimation, 10000);
    </script>
</body>

</html>