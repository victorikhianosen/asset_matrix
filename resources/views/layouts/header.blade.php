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

    <script src="https://kit.fontawesome.com/22ded73695.js" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />



    <title>Asset Matrix</title>
</head>

<body class="">




    <section>
        <div
            class="z-10 shadow-lg mx-auto md:mx-6 lg:mx-24 mt-6 py-3 px-4 md:py-5 md:px-6 rounded-full flex justify-between items-center fixed top-0 right-0 left-0 bg-white">
            <img class="w-32 md:w-40" src="{{ asset('asset/images/logo.png') }}" alt="">
            <div class="space-x-6 hidden lg:block">
                <a class="text-lightBlack font-medium text-md hover:text-black transition-all duration-150"
                    href="{{ route('home') }}">Home</a>

                <!-- Our Bank Dropdown -->
                <div id="bankButton" class="relative inline-block">
                    <div>
                        <button
                            class="text-lightBlack font-medium text-md hover:text-black transition-all duration-150">
                            Our Bank
                        </button>
                    </div>
                    <div id="bankDropDown"
                        class="absolute mt-6 right-0 text-left w-32 rounded-lg bg-[#fafafa] shadow-md space-y-2 pl-4 pr-6 py-8 transition-all duration-300 transform opacity-0 translate-y-4">
                        <button>
                            <a href="{{ route('about') }}"
                                class="text-lightBlack font-medium text-sm hover:text-primary transition-all duration-150">About
                                Us</a>
                        </button>
                        <button>
                            <a href="{{ route('team') }}"
                                class="text-lightBlack font-medium text-sm hover:text-primary transition-all duration-150">Our
                                Team</a>
                        </button>
                    </div>
                </div>

                <!-- Business Banking Dropdown -->
                <div id="businessButton" class="relative inline-block">
                    <div>
                        <button
                            class="text-lightBlack font-medium text-md hover:text-black transition-all duration-150">
                            Business Banking
                        </button>
                    </div>
                    <div id="businessDropDown"
                        class="absolute flex-col mt-5 right-0 text-left w-32 rounded-lg bg-[#fafafa] shadow-md space-y-2 pl-4 pr-6 py-8 transition-all duration-300 transform opacity-0 translate-y-4">
                        <div>
                            <a href="{{ route('loan') }}"
                                class="text-lightBlack font-medium text-sm hover:text-primary transition-all duration-150">
                                Loan
                            </a>
                        </div>


                        <div>
                            <a href="{{ route('savings') }}"
                                class="text-lightBlack font-medium text-sm hover:text-primary transition-all duration-150">Savings
                            </a>
                        </div>

                        <div>
                            <a href="{{ route('deposit') }}"
                                class="text-lightBlack font-medium text-sm hover:text-primary transition-all duration-150">Deposit
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Online Banking Dropdown -->
                <div id="onlineBankingButton" class="relative inline-block">
                    <div>
                        <a href="{{ url('https://cashmatrix.app/') }}"
                            class="text-lightBlack font-medium text-md hover:text-black transition-all duration-150">
                            Online Banking
                        </a>
                    </div>
                    {{-- <div id="onlineBankingDropDown"
                        class="absolute mt-6 right-0 text-left w-32 rounded-lg bg-[#fafafa] shadow-md space-y-2 pl-4 pr-6 py-8 transition-all duration-300 transform opacity-0 translate-y-4">
                        <button>
                            <a href=""
                                class="text-lightBlack font-medium text-sm hover:text-primary transition-all duration-150">Login</a>
                        </button>
                        <button>
                            <a
                                class="text-lightBlack font-medium text-sm hover:text-primary transition-all duration-150">Register</a>
                        </button>
                    </div> --}}
                </div>

                <!-- Policy Dropdown -->
                <div id="policyButton" class="relative inline-block">
                    <div>
                        <button
                            class="text-lightBlack font-medium text-md hover:text-black transition-all duration-150">
                            Policy
                        </button>
                    </div>

                    <div id="policyDropDown"
                        class="absolute mt-6 right-0 text-start w-64 rounded-lg bg-[#fafafa] shadow-md space-y-2 pl-4 pr-6 py-8 transition-all duration-300 transform opacity-0 translate-y-4">
                        <button>
                            <a href="{{ route('policy.data') }}"
                                class="text-lightBlack font-medium text-sm hover:text-primary transition-all duration-150">Data Consent Policy</a>
                        </button>
                        <button>
                            <a href="{{ route('policy.mobile') }}"
                                class="text-lightBlack font-medium text-sm hover:text-primary transition-all duration-150">Mobile App Policy</a>
                        </button>
                           <button>
                            <a
                                class="text-lightBlack font-medium text-sm hover:text-primary transition-all duration-150">Anti-Money Laungering</a>
                        </button>
                           <button>
                            <a
                                class="text-lightBlack font-medium text-sm hover:text-primary transition-all duration-150">End User Agreement</a>
                        </button>
                    </div>
                </div>

                <a href=""
                    class="bg-white border-2 border-primary hover:bg-white hover:text-black hover:border-black transition-all duration-150 py-2 px-4 font-medium rounded-full text-primary">
                    Request Loan
                </a>
            </div>
            <div class="cursor-pointer block lg:hidden">
                <i class="fa-solid fa-bars text-3xl"></i>

            </div>
        </div>
    </section>
