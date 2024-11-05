<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daurin - Login</title>
    @vite('resources/css/app.css')
</head>

<body class="font-quicksand">
    <div class="flex px-4 lg:px-12 py-4 lg:py-16">
        <div class="hidden md:block w-[50%]">
            <img src="/img/register.png" alt="">
        </div>
        <form class="w-full md:w-[50%] px-4 lg:px-20 pt-6 font-medium">
            <h1 class="text-3xl md:text-4xl font-semibold mb-8 md:mb-12">Daftar di Daurin</h1>
            <div class="mb-4">
                <label for="username">Email</label>
                <input type="text"
                    class="block w-full mt-2 px-3 py-2 rounded-md border focus:outline-none focus:border-primary"
                    placeholder="Email" id="username">
                {{-- <div class="text-red-600 mt-1">{{ form . errors . username }}</div> --}}
            </div>
            <div class="mb-4">
                <label for="email">Password</label>
                <input type="password"
                    class="block w-full mt-2 px-3 py-2 rounded-md border focus:outline-none focus:border-primary"
                    placeholder="Password" id="username">
            </div>
            <div class="flex justify-between flex-wrap mt-2">
                <a href="/register" class="hover:underline block w-fit">Don't have account?</a>
                <a href="/forgot-password" class="hover:underline block w-fit">Forgot password?
                </a>
            </div>
            <button class="px-3 py-2 rounded-md bg-primary hover:bg-teal-500 text-white mt-3 w-full">Log
                in</button>
            {{-- <div class="flex gap-3 items-center my-4 text-gray-600">
                <hr class="flex-grow">
                <div>or</div>
                <hr class="flex-grow">
            </div>
            <div class="flex justify-center items-center gap-10">
                <a href="/auth/google/redirect"
                    class="w-14 h-14 rounded-full border flex justify-center items-center text-xl hover:bg-gray-100"><fa-icon
                        icon="fa-brands fa-google" /></a>
            </div> --}}
        </form>
    </div>
    @vite('resources/js/app.js')
</body>

</html>
