<!DOCTYPE html>


<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
<header>
    <div class="flex w-full bg-gray-400 h-32">
        <div class="flex self-center mx-auto flex-column ">
            <div class="self-center">
                <a class="h-2/3 w-1/3 cursor-pointer self-center bg-gray-500 p-2 rounded-md m-3 text-white" href="/">All
                    events</a>
            </div>
            <div class="self-center">
                <a class="h-2/3 w-1/3 cursor-pointer self-center bg-gray-500 p-2 rounded-md m-3 text-white"
                   href="/register">Register</a>
            </div>
            <div class="self-center">
                <a class="h-2/3 w-1/3 cursor-pointer self-center bg-gray-500 p-2 rounded-md m-3 text-white"
                   href="/showlogin">Login</a>
            </div>
        </div>
    </div>
</header>

@yield('page')
</body>
</html>
