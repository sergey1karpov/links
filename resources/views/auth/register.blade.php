<script>
    function onSubmit(token) {
        document.getElementById("register-form").submit();
    }
</script>

<x-guest-layout>
    <x-auth-card>

        <x-slot name="logo">
            {{-- <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a> --}}
        </x-slot>

        <!-- Validation Errors -->
        <div class="text-center">
            <x-auth-validation-errors class="mb-4" :errors="$errors" />
        </div>

        <div class="m-4">

            <p class=" mt-3 mb-10 text-4xl font-black text-gray-900 text-dark">
                Join to
                <span class="before:block before:absolute before:-inset-1 before:-skew-y-3 before:bg-red-500 relative inline-block">
                        <a href="{{ route('welcome') }}"><span class="relative text-white">CHRRY.ME</span></a>
                    </span>
            </p>

            <form method="POST" action="{{ route('register') }}" class="text-center" id="register-form"> @csrf

                <!-- Name -->
                <div class="mt-5">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 text-dark">Profile name</label>
                    <input type="text"
                           name="name"
                           id="name"
                           class="bg-gray-100 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3 dark:placeholder-gray-400 text-dark dark:focus:ring-blue-500 dark:focus:border-blue-500"
                           placeholder="Elon Musk"
                           required>
                </div>

                <!-- Slug -->
                <div class="mt-4">
                    <label for="website-admin" class="block mb-2 text-sm font-medium text-gray-900 text-dark">Slug</label>
                    <div class="flex">
                        <span class="inline-flex items-center px-3 bg-gray-100 text-gray-900 text-sm rounded-l-lg focus:ring-blue-500 focus:border-blue-500 block p-3 dark:placeholder-gray-400 text-dark dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            chrry.me/
                        </span>
                        <input type="text"
                               name="slug"
                               id="website-admin"
                               class="bg-gray-100 text-gray-900 text-sm rounded-r-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3 dark:placeholder-gray-400 text-dark dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="elonmusk">
                    </div>
                </div>

                <!-- Email Address -->
                <div class="mt-4">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 text-dark">Email address</label>
                    <input type="email"
                           name="email"
                           id="email"
                           class="bg-gray-100 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3 dark:placeholder-gray-400 text-dark dark:focus:ring-blue-500 dark:focus:border-blue-500"
                           placeholder="elon.musk@starlink.com"
                           required>
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 text-dark">Password</label>
                    <input type="password"
                           name="password"
                           id="password"
                           class="bg-gray-100 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3 dark:placeholder-gray-400 text-dark dark:focus:ring-blue-500 dark:focus:border-blue-500"
                           placeholder="???????????????????????????"
                           required>
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <label for="password_confirmation" class="block mb-2 text-sm font-medium text-gray-900 text-dark">Confirm Password</label>
                    <input type="password"
                           name="password_confirmation"
                           id="password_confirmation"
                           class="bg-gray-100 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3 dark:placeholder-gray-400 text-dark dark:focus:ring-blue-500 dark:focus:border-blue-500"
                           placeholder="???????????????????????????"
                           required>
                </div>

                <div class="mt-4">
                    <button type="submit"
                            class="g-recaptcha w-full text-white bg-gradient-to-br from-pink-500 to-orange-400 hover:bg-gradient-to-bl focus:ring-2 font-medium rounded-lg text px-5 py-2.5 text-center mr-2 mb-2"
                            data-sitekey="6LdjE5siAAAAAFns6LrPthCLLu4niq3WG_coMFJA"
                            data-callback='onSubmit'
                            data-action='submit'>
                        {{ __('Create account') }}
                    </button>
                </div>

                <div class="mt-">
                    <button type="button" class="w-full text-white bg-[#4285F4] hover:bg-[#4285F4]/90 focus:ring-4 focus:outline-none focus:ring-[#4285F4]/50 font-medium rounded-lg text px-5 py-2.5 text-center inline-flex items-center justify-center dark:focus:ring-[#4285F4]/55 mr-2 mb-2">
                        <svg class="mr-2 -ml-1 w-4 h-4" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="google" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 488 512"><path fill="currentColor" d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"></path></svg>
                        Sign in with Google
                    </button>
                </div>

                <div class="mt-4 flex justify-center">
                    <h1 class="font-sans text-sm text-gray-600 hover:text-gray-900">{{ __("Do you already have an account? ") }}</h1><a class="ml-1 font-sans underline text-sm text-red-500 hover:text-gray-900" href="{{ route('login') }}">
                        {{ __("Log in") }}
                    </a>
                </div>
            </form>
        </div>

    </x-auth-card>
</x-guest-layout>


{{--<div class="mb-4 mt-4 text-sm text-gray-600 text-center" style="font-family: 'Overpass Mono', monospace;">--}}
{{--    <h1 class="display mb-3" style="font-size:1.1rem; font-family: 'Rubik', sans-serif;">?????? ?????????????? ?????????????????????? ???????????? ???????????????????????? ???????? ???? ??????. ??????????</h1>--}}
{{--    <a href="{{route('auth', ['social' => 'vk'])}}"><img src="https://cdn-icons-png.flaticon.com/512/145/145813.png" width="50"></a>--}}
{{--    <a href="{{route('auth', ['social' => 'yandex'])}}"><img src="https://monobit.ru/wp-content/uploads/2021/03/TtYT-Do9haj2FSn2BgK4u_7Rbm-Q2Q9huE1o4dPa74q9NUayDMm0_QVInoQWklXdWw-1.png" width="50"></a>--}}
{{--</div>--}}


