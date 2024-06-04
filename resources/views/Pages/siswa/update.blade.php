<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/others/update-siswa.css')}}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" />
</head>

<body>

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
                @include('component.form_update_siswa')
            </div>
        </div>
    </div>
    

</body>

</html>