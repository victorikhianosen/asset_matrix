<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ url('asset/images/logo.jpg') }}" type="image/x-icon">

    {{-- Tailwind --}}
    {{-- @vite('resources/css/app.css') --}}
      <script src="https://cdn.tailwindcss.com"></script>


    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">

    {{-- Font Awesome --}}
    <script src="https://kit.fontawesome.com/22ded73695.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Asset Matrix</title>
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">

    <style>
        /* Additional custom styles for the mobile menu */
        #mobileMenu {
            transform: translateX(100%);
        }

        #mobileMenu.active {
            transform: translateX(0%);
        }
    </style>


   <x-flash-message />

   <x-tailwind_config />


</head>

<body class="">


    
    <section>
        <div
            class="z-10 shadow-lg mx-auto md:mx-6 lg:mx-12 mt-6 py-3 px-4 md:py-5 md:px-6 rounded-full flex justify-between items-center fixed top-0 right-0 left-0 bg-white">
            <a href="{{ route('home') }}">
                <img class="w-32 md:w-40" src="{{ asset('asset/images/logo.png') }}" alt="">
            </a>

            <div class="space-x-12 hidden lg:block">
                <a class="text-lightBlack font-medium text-md hover:text-primary transition-all duration-150"
                    href="{{ route('home') }}">Home
                </a>

                <!-- Our Bank Dropdown -->
                <div class="relative inline-block">
                    <button id="ourBank"
                        class="relative text-lightBlack font-medium text-md hover:text-primary transition-all duration-150">Our
                        Bank
                        <span><i class="fa-solid fa-sort-down absolute bottom-1.5 ml-1"></i></span>
                    </button>
                    <div id="ourBankDropDown"
                        class="hidden absolute -left-2 z-10 mt-5 w-24 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5">
                        <div class="py-6">
                            <a href="{{ route('about') }}"
                                class="block px-4 py-2 text-sm font-semibold text-black hover:text-primary transition-all duration-150"
                                tabindex="-1">About Us</a>
                            <a href="{{ route('team') }}"
                                class="block px-4 py-2 text-sm font-semibold text-black hover:text-primary transition-all duration-150">Team</a>
                        </div>
                    </div>
                </div>

                <!-- Business Banking Dropdown -->
                <div class="relative inline-block">
                    <button id="businessBanking"
                        class="relative text-lightBlack font-medium text-md hover:text-primary transition-all duration-150">Business
                        Banking
                        <span><i class="fa-solid fa-sort-down absolute bottom-1.5 ml-1"></i></span>
                    </button>
                    <div id="businessBankingDropDown"
                        class="hidden absolute -left-2 z-10 mt-5 w-44 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5">
                        <div class="py-6">

                            <a href="{{ route('internet') }}"
                                class="block px-4 py-2 font-semibold text-sm text-black hover:text-primary transition-all duration-150">Digital
                                Banking</a>
                            <a href="{{ route('loan') }}"
                                class="block px-4 py-2 text-sm font-semibold text-black hover:text-primary transition-all duration-150">Loan</a>
                            <a href="{{ route('savings') }}"
                                class="block px-4 py-2 text-sm font-semibold text-black hover:text-primary transition-all duration-150">Investment
                                | Deposit</a>

                        </div>
                    </div>
                </div>

                <!-- Online Banking -->
                <div class="relative inline-block">
                    <a href="{{ url('https://cashmatrix.app/') }}" target="_blink"
                        class="text-lightBlack font-medium text-md hover:text-primary transition-all duration-150">Online
                        Banking</a>
                </div>



                <!-- Policy Dropdown -->
                <div class="relative inline-block">
                    <button type="button" id="policy"
                        class="relative text-lightBlack font-medium text-md hover:text-primary transition-all duration-150">Policies
                        <span><i class="fa-solid fa-sort-down absolute bottom-1.5 ml-1"></i></span>
                    </button>
                    <div id="policyDropDown"
                        class="hidden absolute -right-28 z-10 mt-5 w-64 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5">
                        <div class="py-6">
                            <a href="{{ route('policy.data') }}"
                                class="block px-4 py-2 text-sm font-semibold text-black hover:text-primary transition-all duration-150"
                                tabindex="-1">Data Consent Policy</a>
                            <a href="{{ route('policy.mobile') }}"
                                class="block px-4 py-2 text-sm font-semibold text-black hover:text-primary transition-all duration-150">Mobile
                                App Policy</a>
                            <a href="{{ route('policy.amt') }}"
                                class="block px-4 py-2 text-sm font-semibold text-black hover:text-primary transition-all duration-150">Anti-Money
                                Laundering</a>
                            <a href="{{ route('policy.enduser') }}"
                                class="block px-4 py-2 text-sm font-semibold text-black hover:text-primary transition-all duration-150">End
                                User Agreement</a>
                        </div>
                    </div>
                </div>

                <a href="{{ route('request.loan') }}"
                    class="bg-primary text-white border-2 border-primary hover:bg-white hover:text-primary hover:border-primary transition-all duration-200 py-2 px-4 font-medium rounded-full">Request
                    Loan
                </a>
            </div>


            {{-- Mobile Menu Button --}}

            {{-- Open Mobile Menu Button --}}
            <div id="mobileMenuButton" class="cursor-pointer text-primary block lg:hidden" onclick="toggleMobileMenu()">
                <i class="fa-solid fa-bars text-3xl"></i>
            </div>

            {{-- Close Mobile Menu Button --}}
            <div id="closeMobileMenuButton" class="cursor-pointer block lg:hidden hidden" onclick="toggleMobileMenu()">
                <i class="fa-regular fa-circle-xmark text-3xl"></i>
            </div>
        </div>

        {{-- Mobile Menu --}}
        <x-mobile-menu />



    </section>


</body>

</html>
