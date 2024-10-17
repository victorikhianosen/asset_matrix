<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Tailwind --}}
    @vite('resources/css/app.css')

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

    <style>
        .flash-message {
            position: fixed;
            top: 20px;
            right: -400px;
            /* Start off-screen */
            color: white;
            padding: 15px 20px;
            border-radius: 5px;
            border: 3px;
            border-color: #fff;
            font-size: 16px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            z-index: 9999;
            transition: right 0.5s ease-in-out;
            z-index: 289;
        }

        .flash-message.success {
            background-color: #F77A10;
            /* Green for success */
        }

        .flash-message.error {
            background-color: #dc3545;
            /* Red for error */
        }

        .flash-message.slide-in {
            right: 20px;
            /* Slide into view */
        }

        .flash-message.slide-out {
            right: -400px;
            /* Slide out of view */
        }
    </style>


    @if (session('success'))
        <div id="flash-message" class="flash-message success">
            {{ session('success') }}
        </div>
    @elseif(session('error'))
        <div id="flash-message" class="flash-message error">
            {{ session('error') }}
        </div>
    @endif

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const flashMessage = document.getElementById('flash-message');

            if (flashMessage) {
                // Slide the message in
                flashMessage.classList.add('slide-in');

                // Slide the message out after 5 seconds
                setTimeout(function() {
                    flashMessage.classList.remove('slide-in');
                    flashMessage.classList.add('slide-out');
                }, 5000);
            }
        });
    </script>
</head>

<body class="">
    <section>
        <div
            class="z-10 shadow-lg mx-auto md:mx-6 lg:mx-24 mt-6 py-3 px-4 md:py-5 md:px-6 rounded-full flex justify-between items-center fixed top-0 right-0 left-0 bg-white">
            <a href="{{ route('home') }}">
                <img class="w-32 md:w-40" src="{{ asset('asset/images/logo.png') }}" alt="">
            </a>

            <div class="space-x-6 hidden lg:block">
                <a class="text-lightBlack font-medium text-md hover:text-black transition-all duration-150"
                    href="{{ route('home') }}">Home
                </a>

                <!-- Our Bank Dropdown -->
                <div class="relative inline-block">
                    <button id="ourBank"
                        class="relative text-lightBlack font-medium text-md hover:text-black transition-all duration-150"
                        >Our Bank
                        <span><i class="fa-solid fa-sort-down absolute bottom-1.5 ml-1"></i></span>
                    </button>
                    <div id="ourBankDropDown"
                        class="hidden absolute -left-2 z-10 mt-5 w-24 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5">
                        <div class="py-6">
                            <a href="{{ route('about') }}"
                                class="block px-4 py-2 text-sm text-black hover:text-primary transition-all duration-150"
                                tabindex="-1">About Us</a>
                            <a href="{{ route('team') }}"
                                class="block px-4 py-2 text-sm text-black hover:text-primary transition-all duration-150">Team</a>
                        </div>
                    </div>
                </div>

                <!-- Business Banking Dropdown -->
                <div class="relative inline-block" >
                    <button id="businessBanking"
                        class="relative text-lightBlack font-medium text-md hover:text-black transition-all duration-150"
                        >Business Banking
                        <span><i class="fa-solid fa-sort-down absolute bottom-1.5 ml-1"></i></span>
                    </button>
                    <div id="businessBankingDropDown"
                        class="hidden absolute -left-2 z-10 mt-5 w-44 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5">
                        <div class="py-6">

                            <a href="{{ route('internet') }}"
                                class="block px-4 py-2 text-sm text-black hover:text-primary transition-all duration-150">Digital
                                Banking</a>
                            <a href="{{ route('loan') }}"
                                class="block px-4 py-2 text-sm text-black hover:text-primary transition-all duration-150">Loan</a>
                            <a href="{{ route('savings') }}"
                                class="block px-4 py-2 text-sm text-black hover:text-primary transition-all duration-150">Investment
                                | Deposit</a>

                        </div>
                    </div>
                </div>

                <!-- Online Banking -->
                <div class="relative inline-block">
                    <a href="{{ url('https://cashmatrix.app/') }}" target="_blink"
                        class="text-lightBlack font-medium text-md hover:text-black transition-all duration-150">Online
                        Banking</a>
                </div>

             

                <!-- Policy Dropdown -->
                <div class="relative inline-block" >
                    <button type="button" id="policy"
                        class="relative text-lightBlack font-medium text-md hover:text-black transition-all duration-150"
                        >Policy
                        <span><i class="fa-solid fa-sort-down absolute bottom-1.5 ml-1"></i></span>
                    </button>
                    <div id="policyDropDown"
                        class="hidden absolute -right-16 z-10 mt-5 w-44 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5">
                        <div class="py-6">
                            <a href="{{ route('policy.data') }}"
                                class="block px-4 py-2 text-sm text-black hover:text-primary transition-all duration-150"
                                tabindex="-1">Data Consent Policy</a>
                            <a href="{{ route('policy.mobile') }}"
                                class="block px-4 py-2 text-sm text-black hover:text-primary transition-all duration-150">Mobile
                                App Policy</a>
                            <a href="{{ route('policy.amt') }}"
                                class="block px-4 py-2 text-sm text-black hover:text-primary transition-all duration-150">Anti-Money
                                Laundering</a>
                            <a href="{{ route('policy.enduser') }}"
                                class="block px-4 py-2 text-sm text-black hover:text-primary transition-all duration-150">End
                                User Agreement</a>
                        </div>
                    </div>
                </div>

                <a href="{{ route('request.loan') }}"
                    class="bg-white border-2 border-primary hover:bg-primary hover:text-white hover:border-primary transition-all duration-150 py-2 px-4 font-medium rounded-full text-primary">Request
                    Loan</a>
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


    {{-- <script>
        function toggleDropdown(dropdownId) {
            const dropdown = document.getElementById(dropdownId);
            dropdown.classList.toggle('hidden');
        }
    </script> --}}
{{-- 
    <script>
        function toggleMobileMenu() {
            const mobileMenu = document.getElementById('mobileMenu');
            const mobileMenuButton = document.getElementById('mobileMenuButton');
            const closeMobileMenuButton = document.getElementById('closeMobileMenuButton');
            const closeMobileMenuButtonInMenu = document.getElementById('closeMobileMenuButtonInMenu');

            mobileMenu.classList.toggle('active');
            const isActive = mobileMenu.classList.contains('active');

            mobileMenuButton.classList.toggle('hidden', isActive);
            closeMobileMenuButton.classList.toggle('hidden', !isActive);
        }
    </script>  --}}
</body>

</html>
