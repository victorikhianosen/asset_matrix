<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Tailwind --}}
    @vite('resources/css/app.css')

    {{-- Font Awesom --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">

    {{-- Font Awesome --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" crossorigin="anonymous">
    </script>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />



    <title>Asset Matrix</title>
</head>

<body class="">

    {{-- NAV --}}
    <section class="">
        <div
            class="z-10 mx-auto md:mx-6 lg:mx-24 mt-6 py-3 px-4 md:py-5 md:px-6 rounded-full flex justify-between items-center fixed top-0 right-0 left-0 bg-white">
            <img class="w-32 md:w-40" src="{{ asset('asset/images/logo.png') }}" alt="">
            <div class="space-x-6 hidden lg:block">
                <a class=" text-lightBlack font-medium text-md hover:text-black transition-all duration-150"
                    href="">Home</a>
                <a class="  text-lightBlack font-medium text-md hover:text-black transition-all duration-150"
                    href="">Our Bank</a>
                <a class=" text-lightBlack font-medium text-md hover:text-black transition-all duration-150"
                    href="">Business Banking</a>
                <a class=" text-lightBlack font-medium text-md hover:text-black transition-all duration-150"
                    href="">Online Banking</a>
                <a class=" text-lightBlack font-medium text-md hover:text-black transition-all duration-150"
                    href="">Career</a>
                <a href=""
                    class="bg-black hover:bg-hoverBlack transition-all duration-150 py-3 px-4 fonr-medium rounded-full text-white hover:">Request
                    Loan</a>
            </div>
            <div class="cursor-pointer block lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-8 text-primary cursor-pointer">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 5.25h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5" />
                </svg>

            </div>
        </div>
    </section>

    {{-- HERO --}}

    {{-- <section class="bg-primary pt-28 md:pt-32 lg:pt-24">
        <div class="mx-5 md:mx-8 lg:mx-24 grid grid-cols-1 md:grid-cols-2 items-center">
            <div class="flex flex-col space-y-6">
                <h1 class="text-white text-5xl md:text-6xl lg:text-7xl font-bold gap-6 tracking-tighter leading-2">
                    Empowering Your
                    Financial
                    Future</h1>
                <p class="text-[#cccccc] text-sm md:text-md">At Asset Micro-finance, we provide accessible, secure, and
                    tailored financial
                    solutions to help you build a brighter future. Whether you're saving, loan, investing, or growing
                    your
                    business, we're here to support your journey every step of the way.</p>
            </div>
            <div>
                <img class="" src="{{ asset('asset/images/hero3.png') }}" alt="">
            </div>
        </div>
    </section> --}}







    <section class="bg-primary pt-28 md:pt-32 lg:pt-24">

        <div class="swiper mySwiper">
            <div class="swiper-wrapper">


                <div class="swiper-slide">
                    <div class="mx-5 md:mx-8 lg:mx-24 grid grid-cols-1 md:grid-cols-2 items-center">
                        <div class="space-y-6">
                            <h1
                                class="text-white text-5xl md:text-6xl lg:text-7xl font-bold gap-6 tracking-tighter leading-2">
                                Empowering Your
                                Financial
                                Future</h1>
                            <p class="text-[#cccccc] text-sm md:text-md">At Asset Micro-finance, we provide accessible,
                                secure, and
                                tailored financial
                                solutions to help you build a brighter future. Whether you're saving, loan, investing,
                                or growing
                                your
                                business, we're here to support your journey every step of the way.
                            </p>
                            <button
                                class="bg-white py-3 px-12 rounded-full text-black 
                                hover:border-2 hover:border-white hover:bg-primary
                                 hover:text-white transition-all duration-150">Get
                                Start</button>

                        </div>
                        <div>
                            <img class="" src="{{ asset('asset/images/hero3.png') }}" alt="">
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="mx-5 md:mx-8 lg:mx-24 grid grid-cols-1 md:grid-cols-2 items-center">
                        <div class="space-y-6">
                            <h1
                                class="text-white text-5xl md:text-6xl lg:text-7xl font-bold gap-6 tracking-tighter leading-2">
                                Empowering Your
                                Financial
                                Future</h1>
                            <p class="text-[#cccccc] text-sm md:text-md">At Asset Micro-finance, we provide accessible,
                                secure, and
                                tailored financial
                                solutions to help you build a brighter future. Whether you're saving, loan, investing,
                                or growing
                                your
                                business, we're here to support your journey every step of the way.
                            </p>
                            <button
                                class="bg-white py-3 px-12 rounded-full text-black 
                                hover:border-2 hover:border-white hover:bg-primary
                                 hover:text-white transition-all duration-150">Get
                                Start</button>

                        </div>
                        <div>
                            <img class="" src="{{ asset('asset/images/hero3.png') }}" alt="">
                        </div>
                    </div>
                </div>


                <div class="swiper-slide">
                    <div class="mx-5 md:mx-8 lg:mx-24 grid grid-cols-1 md:grid-cols-2 items-center">
                        <div class="space-y-6">
                            <h1
                                class="text-white text-5xl md:text-6xl lg:text-7xl font-bold gap-6 tracking-tighter leading-2">
                                Empowering Your
                                Financial
                                Future</h1>
                            <p class="text-[#cccccc] text-sm md:text-md">At Asset Micro-finance, we provide accessible,
                                secure, and
                                tailored financial
                                solutions to help you build a brighter future. Whether you're saving, loan, investing,
                                or growing
                                your
                                business, we're here to support your journey every step of the way.
                            </p>
                            <button
                                class="bg-white py-3 px-12 rounded-full text-black 
                                hover:border-2 hover:border-white hover:bg-primary
                                 hover:text-white transition-all duration-150">Get
                                Started</button>

                        </div>
                        <div>
                            <img class="" src="{{ asset('asset/images/hero3.png') }}" alt="">
                        </div>
                    </div>
                </div>



                <div class="swiper-slide">
                    <div class="mx-5 md:mx-8 lg:mx-24 grid grid-cols-1 md:grid-cols-2 items-center">
                        <div class="space-y-6">
                            <h1
                                class="text-white text-5xl md:text-6xl lg:text-7xl font-bold gap-6 tracking-tighter leading-2">
                                Empowering Your
                                Financial
                                Future</h1>
                            <p class="text-[#cccccc] text-sm md:text-md">At Asset Micro-finance, we provide accessible,
                                secure, and
                                tailored financial
                                solutions to help you build a brighter future. Whether you're saving, loan, investing,
                                or growing
                                your
                                business, we're here to support your journey every step of the way.
                            </p>
                            <button
                                class="bg-white py-3 px-12 rounded-full text-black 
                                hover:border-2 hover:border-white hover:bg-primary
                                 hover:text-white transition-all duration-150">Get
                                Start</button>

                        </div>
                        <div>
                            <img class="" src="{{ asset('asset/images/hero3.png') }}" alt="">
                        </div>
                    </div>
                </div>




            </div>
            {{-- <div class="swiper-pagination"></div> --}}
        </div>
    </section>


    <section class="bg-black">
        <div class="mx-5 md:mx-8 lg:mx-24 py-8">
            <div class="grid grid-cols-4 items-center">
                <div class="">
                    <img class="w-16 md:w-40 lg:w-48" src="{{ asset('asset/images/sterling.png') }}" alt="">
                </div>
                <div>
                    <img class="w-16 md:w-40 lg:w-48" src="{{ asset('asset/images/sterling.png') }}" alt="">
                </div>
                <div>
                    <img class="w-16 md:w-40 lg:w-48" src="{{ asset('asset/images/sterling.png') }}" alt="">
                </div>
                <div>
                    <img class="w-16 md:w-40 lg:w-48" src="{{ asset('asset/images/sterling.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white">
        <div class="mx-5 md:mx-8 mt-2 md:my-16 lg:mx-24 py-8">
            <h1 class="text-center font-semibold text-2xl mb-8">Our Services</h1>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 items-center gap-12">


                <div class="shadow-xl p-6 border-2 border-primary bg-white rounded-md">
                    <span class="">
                        <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 -960 960 960"
                            width="48px" fill="#ee8520">
                            <path
                                d="M480-120q-42 0-71-29t-29-71q0-42 29-71t71-29q42 0 71 29t29 71q0 42-29 71t-71 29ZM254-346l-84-86q59-59 138.5-93.5T480-560q92 0 171.5 35T790-430l-84 84q-44-44-102-69t-124-25q-66 0-124 25t-102 69ZM84-516 0-600q92-94 215-147t265-53q142 0 265 53t215 147l-84 84q-77-77-178.5-120.5T480-680q-116 0-217.5 43.5T84-516Z" />
                        </svg>
                    </span>
                    <h4 class="font-semibold text-2xl my-4">Internet Banking</h4>

                    <div class="space-y-1 text-black mb-8">
                        <div class="flex gap-1">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960"
                                    width="20px" fill="#5f6368">
                                    <path
                                        d="M293-288 100-482l50-50 143 142 51 51-51 51Zm204 0L303-482l51-51 143 143 324-324 51 51-375 375Zm0-203-51-51 172-172 51 51-172 172Z" />
                                </svg>
                            </span>
                            <p>Instant Payment </p>
                        </div>
                        <div class="flex gap-1">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960"
                                    width="20px" fill="#5f6368">
                                    <path
                                        d="M293-288 100-482l50-50 143 142 51 51-51 51Zm204 0L303-482l51-51 143 143 324-324 51 51-375 375Zm0-203-51-51 172-172 51 51-172 172Z" />
                                </svg>
                            </span>
                            <p>Instant Payment </p>
                        </div>
                        <div class="flex gap-1">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960"
                                    width="20px" fill="#5f6368">
                                    <path
                                        d="M293-288 100-482l50-50 143 142 51 51-51 51Zm204 0L303-482l51-51 143 143 324-324 51 51-375 375Zm0-203-51-51 172-172 51 51-172 172Z" />
                                </svg>
                            </span>
                            <p>Instant Payment </p>
                        </div>
                        <div class="flex gap-1">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960"
                                    width="20px" fill="#5f6368">
                                    <path
                                        d="M293-288 100-482l50-50 143 142 51 51-51 51Zm204 0L303-482l51-51 143 143 324-324 51 51-375 375Zm0-203-51-51 172-172 51 51-172 172Z" />
                                </svg>
                            </span>
                            <p>Instant Payment </p>
                        </div>


                    </div>
                    <button
                        class="bg-primary text-white py-2 px-8 rounded-full border-2 border-primary hover:bg-white hover:text-primary transition-all duration-150">Get
                        Started</button>
                </div>

                <div class="shadow-xl p-6 border-2 border-primary bg-primary rounded-md text-white">
                    <span class="">
                        <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 -960 960 960"
                            width="48px" fill="#fff">
                            <path
                                d="M480-120q-42 0-71-29t-29-71q0-42 29-71t71-29q42 0 71 29t29 71q0 42-29 71t-71 29ZM254-346l-84-86q59-59 138.5-93.5T480-560q92 0 171.5 35T790-430l-84 84q-44-44-102-69t-124-25q-66 0-124 25t-102 69ZM84-516 0-600q92-94 215-147t265-53q142 0 265 53t215 147l-84 84q-77-77-178.5-120.5T480-680q-116 0-217.5 43.5T84-516Z" />
                        </svg>
                    </span>
                    <h4 class="font-semibold text-2xl my-4">Instant Loan</h4>

                    <div class="space-y-1 text-black mb-8">
                        <div class="flex gap-1">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960"
                                    width="20px" fill="#fff">
                                    <path
                                        d="M293-288 100-482l50-50 143 142 51 51-51 51Zm204 0L303-482l51-51 143 143 324-324 51 51-375 375Zm0-203-51-51 172-172 51 51-172 172Z" />
                                </svg>
                            </span>
                            <p class="text-white">Instant Payment </p>
                        </div>
                        <div class="flex gap-1">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960"
                                    width="20px" fill="#fff">
                                    <path
                                        d="M293-288 100-482l50-50 143 142 51 51-51 51Zm204 0L303-482l51-51 143 143 324-324 51 51-375 375Zm0-203-51-51 172-172 51 51-172 172Z" />
                                </svg>
                            </span>
                            <p class="text-white">Instant Payment </p>
                        </div>
                        <div class="flex gap-1">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960"
                                    width="20px" fill="#fff">
                                    <path
                                        d="M293-288 100-482l50-50 143 142 51 51-51 51Zm204 0L303-482l51-51 143 143 324-324 51 51-375 375Zm0-203-51-51 172-172 51 51-172 172Z" />
                                </svg>
                            </span>
                            <p class="text-white">Instant Payment </p>
                        </div>
                        <div class="flex gap-1">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960"
                                    width="20px" fill="#fff">
                                    <path
                                        d="M293-288 100-482l50-50 143 142 51 51-51 51Zm204 0L303-482l51-51 143 143 324-324 51 51-375 375Zm0-203-51-51 172-172 51 51-172 172Z" />
                                </svg>
                            </span>
                            <p class="text-white">Instant Payment </p>
                        </div>


                    </div>
                    <button
                        class="bg-white text-primary py-2 px-8 rounded-full border-2 border-white hover:bg-primary hover:text-white transition-all duration-150">Get
                        Started</button>
                </div>

                <div class="shadow-xl p-6 border-2 border-primary rounded-md">
                    <span class="">
                        <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 -960 960 960"
                            width="48px" fill="#ee8520">
                            <path
                                d="M480-120q-42 0-71-29t-29-71q0-42 29-71t71-29q42 0 71 29t29 71q0 42-29 71t-71 29ZM254-346l-84-86q59-59 138.5-93.5T480-560q92 0 171.5 35T790-430l-84 84q-44-44-102-69t-124-25q-66 0-124 25t-102 69ZM84-516 0-600q92-94 215-147t265-53q142 0 265 53t215 147l-84 84q-77-77-178.5-120.5T480-680q-116 0-217.5 43.5T84-516Z" />
                        </svg>
                    </span>
                    <h4 class="font-semibold text-2xl my-4">Investment Savings</h4>

                    <div class="space-y-1 text-black mb-8">
                        <div class="flex gap-1">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960"
                                    width="20px" fill="#5f6368">
                                    <path
                                        d="M293-288 100-482l50-50 143 142 51 51-51 51Zm204 0L303-482l51-51 143 143 324-324 51 51-375 375Zm0-203-51-51 172-172 51 51-172 172Z" />
                                </svg>
                            </span>
                            <p>Instant Payment </p>
                        </div>
                        <div class="flex gap-1">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960"
                                    width="20px" fill="#5f6368">
                                    <path
                                        d="M293-288 100-482l50-50 143 142 51 51-51 51Zm204 0L303-482l51-51 143 143 324-324 51 51-375 375Zm0-203-51-51 172-172 51 51-172 172Z" />
                                </svg>
                            </span>
                            <p>Instant Payment </p>
                        </div>
                        <div class="flex gap-1">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960"
                                    width="20px" fill="#5f6368">
                                    <path
                                        d="M293-288 100-482l50-50 143 142 51 51-51 51Zm204 0L303-482l51-51 143 143 324-324 51 51-375 375Zm0-203-51-51 172-172 51 51-172 172Z" />
                                </svg>
                            </span>
                            <p>Instant Payment </p>
                        </div>
                        <div class="flex gap-1">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960"
                                    width="20px" fill="#5f6368">
                                    <path
                                        d="M293-288 100-482l50-50 143 142 51 51-51 51Zm204 0L303-482l51-51 143 143 324-324 51 51-375 375Zm0-203-51-51 172-172 51 51-172 172Z" />
                                </svg>
                            </span>
                            <p>Instant Payment </p>
                        </div>

                    </div>
                    <button
                        class="bg-primary text-white py-2 px-8 rounded-full border-2 border-primary hover:bg-white hover:text-primary transition-all duration-150">Get
                        Started</button>
                </div>



            </div>
        </div>
    </section>



    <section class="bg-white">
        <div class="mx-5 md:mx-8 mt-2 md:my-16 lg:mx-24 py-8 h-96">
            <div class="grid grid-cols-1 md:grid-cols-2">
                <div class="bg-primary p-8">
                    <div class="flex justify-between items-center">
                        <span class="bg-white rounded-full p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960"
                                width="20px" fill="#5f6368">
                                <path
                                    d="M480-480q-60 0-102-42t-42-102q0-60 42-102t102-42q60 0 102 42t42 102q0 60-42 102t-102 42ZM192-192v-96q0-23 12.5-43.5T239-366q55-32 116.29-49 61.29-17 124.5-17t124.71 17Q666-398 721-366q22 13 34.5 34t12.5 44v96H192Zm72-72h432v-24q0-5.18-3.03-9.41-3.02-4.24-7.97-6.59-46-28-98-42t-107-14q-55 0-107 14t-98 42q-5 4-8 7.72-3 3.73-3 8.28v24Zm216.21-288Q510-552 531-573.21t21-51Q552-654 530.79-675t-51-21Q450-696 429-674.79t-21 51Q408-594 429.21-573t51 21Zm-.21-72Zm0 360Z" />
                            </svg>
                        </span>

                        <span class="">
                            <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960"
                                width="20px" fill="#fff">
                                <path
                                    d="M767.87-384q-29.8 0-53.84-17-24.03-17-34.59-43H96v-72h583q10.59-26 34.66-43 24.06-17 53.91-17Q808-576 836-548.23q28 27.78 28 68Q864-440 836.12-412q-27.88 28-68.25 28Z" />
                            </svg>
                        </span>
                        <span class="bg-white rounded-full p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960"
                                width="20px" fill="#5f6368">
                                <path
                                    d="M480-480q-60 0-102-42t-42-102q0-60 42-102t102-42q60 0 102 42t42 102q0 60-42 102t-102 42ZM192-192v-96q0-23 12.5-43.5T239-366q55-32 116.29-49 61.29-17 124.5-17t124.71 17Q666-398 721-366q22 13 34.5 34t12.5 44v96H192Zm72-72h432v-24q0-5.18-3.03-9.41-3.02-4.24-7.97-6.59-46-28-98-42t-107-14q-55 0-107 14t-98 42q-5 4-8 7.72-3 3.73-3 8.28v24Zm216.21-288Q510-552 531-573.21t21-51Q552-654 530.79-675t-51-21Q450-696 429-674.79t-21 51Q408-594 429.21-573t51 21Zm-.21-72Zm0 360Z" />
                            </svg>
                        </span>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960"
                                width="20px" fill="#fff">
                                <path
                                    d="M767.87-384q-29.8 0-53.84-17-24.03-17-34.59-43H96v-72h583q10.59-26 34.66-43 24.06-17 53.91-17Q808-576 836-548.23q28 27.78 28 68Q864-440 836.12-412q-27.88 28-68.25 28Z" />
                            </svg>
                        </span>
                        <span class="bg-white rounded-full p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960"
                                width="20px" fill="#5f6368">
                                <path
                                    d="M480-480q-60 0-102-42t-42-102q0-60 42-102t102-42q60 0 102 42t42 102q0 60-42 102t-102 42ZM192-192v-96q0-23 12.5-43.5T239-366q55-32 116.29-49 61.29-17 124.5-17t124.71 17Q666-398 721-366q22 13 34.5 34t12.5 44v96H192Zm72-72h432v-24q0-5.18-3.03-9.41-3.02-4.24-7.97-6.59-46-28-98-42t-107-14q-55 0-107 14t-98 42q-5 4-8 7.72-3 3.73-3 8.28v24Zm216.21-288Q510-552 531-573.21t21-51Q552-654 530.79-675t-51-21Q450-696 429-674.79t-21 51Q408-594 429.21-573t51 21Zm-.21-72Zm0 360Z" />
                            </svg>
                        </span>
                    </div>
                    <div class="mt 12">
                        <h2>Bank at your door step</h2>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero quasi mollitia corporis dolorem blanditiis deleniti. Quis minima asperiores sequi assumenda.</p>
                    </div>


                </div>


                <div>
                    <img src="{{ asset('asset/images/pos.png') }}" alt="">
                </div>

            </div>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="{{ asset('asset/js/swiper.js') }}"></script>
</body>

</html>
