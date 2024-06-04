<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>


    <div class="h-screen flex items-center">
        <div
            class="flex w-full bg-white rounded-2xl h-[100%%] max-sm:h-[80%] shadow-[0_20px_50px_rgba(8,_0,_0,_0.5)] overflow-hidden mx-auto max-w-sm lg:max-w-4xl">
            <div class="hidden lg:block lg:w-1/2 bg-cover"
                style="background-image:url('{{asset('asset/login_register/gerbang.png')}}')">
            </div>


            @include('component.FormLogin')


        </div>
    </div>

</body>
<script src="{{asset('js/login.js')}}"></script>

</html>