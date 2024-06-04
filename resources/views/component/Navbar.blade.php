<header class="lg:px-16 px-4 bg-red-800 flex flex-wrap items-center py-4 shadow-md">
    <img src="{{asset('asset/others/LOGO.png')}}" class="max-md:hidden max-sm:hidden" width="100px" alt="">
    <div class="flex-1 flex justify-between items-center">
        <a href="#" class="text-4xl text-white font-extrabold max-md:hidden max-sm:hidden">E - RAPORT SMK MULTISTUDI
            HIGH SCHOOL BATAM</a>
    </div>

    <label for="menu-toggle" class="pointer-cursor md:hidden block">
    </label>
    <input class="hidden" type="checkbox" id="menu-toggle">

    <div class="hidden md:flex md:items-center md:w-auto w-full" id="menu">
        <nav>
            <ul class="md:flex items-center justify-between text-base text-gray-700 pt-4 md:pt-0">
                <li><a href=""><img width="100px" src="{{asset('asset/others/CUSTOMER SERVICE BUTTON.png')}}"
                            class="md:p-4 py-3 px-0 block"></a></li>
                <li><a href=""><img width="95px" src="{{asset('asset/others/NOTIFICATION BUTTON.png')}}"
                            class="md:p-4 py-3 px-0 block"></a></li>
                <form action="{{route('logout')}}" method="POST">
                    @csrf
                    <button type="submit"><img width="95px" src="{{asset('asset/others/SIGN OUT BUTTON.png')}}"
                            class="md:p-4 py-3 px-0 block"></button>
                </form>

            </ul>
        </nav>
    </div>
</header>