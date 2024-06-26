<x-login>
    <div class="flex flex-col justify-center items-center gap-3">
        <img src="{{ asset('assets/images/logo.png') }}" alt="" class="w-14 h-14">
        <p class="font-bold text-2xl text-[#1C4F0F]">FORGOT PASSWORD</p>
    </div>
    @if($errors->any())
        <div class="bg-red-500 p-3 text-white text-center rounded-lg">
            @foreach($errors->all() as $error)
                {{ $error }}
            @endforeach
        </div>
    @endif
    @if(session()->has('status'))
        <div class="bg-[#81B076] p-3 text-white text-center rounded-lg">
            {{ session('status') }}
        </div>
    @endif

    <form method="post" action="{{ route('sendResetLinkEmail') }}" class="flex flex-col w-full gap-6">
        @csrf
        <div class="flex flex-col gap-2">
            <label for="username" class="font-bold text-normal text-[#1C4F0F]">Username</label>
            <input type="text" name="username" id="username" class="w-full p-2 ring-2 bg-[#EDEDED] ring-slate-400 focus:outline-none focus:ring-green-500 focus:ring-offset-1 rounded-lg" placeholder="Username">
        </div>
        <div class="flex flex-col gap-2">
            <label for="email" class="font-bold text-normal text-[#1C4F0F]">Recovery Email</label>
            <input type="email" name="email" id="email" class="w-full p-2 ring-2 bg-[#EDEDED] ring-slate-400 focus:outline-none focus:ring-green-500 focus:ring-offset-1 rounded-lg" placeholder="Email">
        </div>
        <button class="bg-[#57BA47] py-3 rounded-lg w-full text-white font-bold hover:bg-[#336E2A] hover:shadow-xl transition-all duration-300 ease-in-out">PROCEED</button>
    </form>
</x-login>