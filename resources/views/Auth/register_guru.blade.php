<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

    <!-- https://play.tailwindcss.com/MIwj5Sp9pw -->
    <div class="h-screen flex items-center">
        <div
            class="flex w-full bg-white rounded-2xl shadow-[0_20px_50px_rgba(8,_0,_0,_0.5)] overflow-hidden mx-auto max-w-sm lg:max-w-4xl">
            <div class="hidden lg:block lg:w-1/2 bg-cover"
                style="background-image:url({{asset('asset/login_register/gerbang.png')}})">
            </div>
            <div class="w-full p-8 shadow-xl lg:w-1/2">
                <div
                    class="absolute hidden w-[130px] h-[130px] bg-white-100 top-[7%] rounded-full flex justify-center items-center text-center p-5 shadow-xl  md:ms-[100px] max-sm:ms-[100px]">
                    <img width="66px" src="{{asset('asset/others/LOGO.png')}}" alt="lg">
                </div>
                @include('component.FormRegister_guru')
            </div>
        </div>
    </div>
</body>

</html>