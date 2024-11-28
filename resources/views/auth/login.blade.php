<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Login</title>
</head>

<body class="bg-gradient-to-tr  from-purple-900 to-blue-500 flex justify-center items-center min-h-screen">
    <div class=" flex w-1/2">
        <div class="flex flex-col  justify-between relative bg-blue-900 pt-8">
            <div class=" flex relative align-middle p-5">
                <svg fill="#ffffff" class="  w-16" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" id="Layer_1"
                    data-name="Layer 1" stroke="#ffffff">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path
                            d="M6.97,30.75H25.03c.41,0,.75-.34,.75-.75V3.89c0-.41-.34-.75-.75-.75h-2.56v-1.14c0-.41-.34-.75-.75-.75s-.75,.34-.75,.75v1.14h-4.22v-1.14c0-.41-.34-.75-.75-.75s-.75,.34-.75,.75v1.14h-4.22v-1.14c0-.41-.34-.75-.75-.75s-.75,.34-.75,.75v1.14h-2.56c-.41,0-.75,.34-.75,.75V30c0,.41,.34,.75,.75,.75Zm.75-26.11h1.81v1.14c0,.41,.34,.75,.75,.75s.75-.34,.75-.75v-1.14h4.22v1.14c0,.41,.34,.75,.75,.75s.75-.34,.75-.75v-1.14h4.22v1.14c0,.41,.34,.75,.75,.75s.75-.34,.75-.75v-1.14h1.81V29.25H7.72V4.64Z">
                        </path>
                        <path
                            d="M16.86,9.66h-6.57c-.41,0-.75,.34-.75,.75s.34,.75,.75,.75h6.57c.41,0,.75-.34,.75-.75s-.34-.75-.75-.75Z">
                        </path>
                        <path
                            d="M16.86,16.19h-6.57c-.41,0-.75,.34-.75,.75s.34,.75,.75,.75h6.57c.41,0,.75-.34,.75-.75s-.34-.75-.75-.75Z">
                        </path>
                        <path
                            d="M16.86,22.73h-6.57c-.41,0-.75,.34-.75,.75s.34,.75,.75,.75h6.57c.41,0,.75-.34,.75-.75s-.34-.75-.75-.75Z">
                        </path>
                        <path
                            d="M10.28,14.27h3.61c.41,0,.75-.34,.75-.75s-.34-.75-.75-.75h-3.61c-.41,0-.75,.34-.75,.75s.34,.75,.75,.75Z">
                        </path>
                        <path
                            d="M10.28,21h3.61c.41,0,.75-.34,.75-.75s-.34-.75-.75-.75h-3.61c-.41,0-.75,.34-.75,.75s.34,.75,.75,.75Z">

                        </path>
                        <path
                            d="M13.89,25.79h-3.61c-.41,0-.75,.34-.75,.75s.34,.75,.75,.75h3.61c.41,0,.75-.34,.75-.75s-.34-.75-.75-.75Z">
                        </path>
                    </g>
                </svg>
                <h1 class=" font-normal text-white ">Logo</h1>
            </div>
            <div class="p-10">
                <h1 class=" font-bold text-white  text-5xl">Welcom</h1>
                <p class=" text-white p-8">Register To Continue access</p>
            </div>
            <svg class="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#f3f4f5" fill-opacity="1"
                    d="M0,64L0,64L288,64L288,128L576,128L576,320L864,320L864,288L1152,288L1152,32L1440,32L1440,320L1152,320L1152,320L864,320L864,320L576,320L576,320L288,320L288,320L0,320L0,320Z">
                </path>
            </svg>
        </div>
        <div class="flex justify-center items-center p-8 w-1/2 bg-white">
            <form class="max-w-sm mx-auto w-full" method="Post" action="{{'login'}}">
                @csrf
                <h1 class="flex justify-center text-5xl">Welcom back </h1>
                <h1 class="flex justify-center text-xl">Check "rememper me" to keep login</h1>

                <label for="email-address-icon"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Your Email</label>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                            <path
                                d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z" />
                            <path
                                d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z" />
                        </svg>
                    </div>
                    <input type="text" id="email-address-icon"
                    name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="name@flowbite.com">
                </div>
                <div class="mb-5">
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Your
                        password</label>
                    <input type="password" id="password"
                       name="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required />
                </div>
                <div class="flex mt-5 items-start mb-5">
                    <div class="flex items-center h-5">
                        <input id="remember" type="checkbox" value=""
                            class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800"
                             />
                    </div>
                    <label for="remember" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-600">Remember
                        me</label>
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <button type="supmit" class="p-3 w-full border-x-2 bg-slate-500 hover:bg-slate-300 transition border-black">Submite</button>
            </form>
        </div>
    </div>

</body>

</html>