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
                    href="{{ route('home') }}">Home</a>

                <!-- Our Bank Dropdown -->
                <div class="relative inline-block" onmouseenter="showDropdown('bankDropDown')"
                    onmouseleave="hideDropdown('bankDropDown')">
                    <button class="text-lightBlack font-medium text-md hover:text-black transition-all duration-150"
                        onclick="toggleDropdown('bankDropDown')">Our Bank</button>
                    <div id="bankDropDown"
                        class="absolute right-0 z-10 mt-6 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 hidden">
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
                <div class="relative inline-block" onmouseenter="showDropdown('businessDropDown')"
                    onmouseleave="hideDropdown('businessDropDown')">
                    <button class="text-lightBlack font-medium text-md hover:text-black transition-all duration-150"
                        onclick="toggleDropdown('businessDropDown')">Business Banking</button>
                    <div id="businessDropDown"
                        class="absolute right-0 z-10 mt-6 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 hidden">
                        <div class="py-6">

                            <a href="{{ route('internet') }}"
                                class="block px-4 py-2 text-sm text-black hover:text-primary transition-all duration-150">Digital Banking</a>
                            <a href="{{ route('loan') }}"
                                class="block px-4 py-2 text-sm text-black hover:text-primary transition-all duration-150">Loan</a>
                            <a href="{{ route('savings') }}"
                                class="block px-4 py-2 text-sm text-black hover:text-primary transition-all duration-150">Investment | Deposit</a>
                            {{-- <a href="{{ route('deposit') }}"
                                class="block px-4 py-2 text-sm text-black hover:text-primary transition-all duration-150">Deposit</a> --}}
                        </div>
                    </div>
                </div>

                <!-- Online Banking -->
                <div class="relative inline-block">
                    <a href="{{ url('https://cashmatrix.app/') }}"
                        class="text-lightBlack font-medium text-md hover:text-black transition-all duration-150">Online
                        Banking</a>
                </div>

                <!-- Policy Dropdown -->
                <div class="relative inline-block" onmouseenter="showDropdown('policyDropDown')"
                    onmouseleave="hideDropdown('policyDropDown')">
                    <button class="text-lightBlack font-medium text-md hover:text-black transition-all duration-150"
                        onclick="toggleDropdown('policyDropDown')">Policy</button>
                    <div id="policyDropDown"
                        class="absolute right-0 z-10 mt-6 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 hidden">
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
                            <a href="{{ route('policy.enduser') }}" target="_blank"
                                class="block px-4 py-2 text-sm text-black hover:text-primary transition-all duration-150">End
                                User Agreement</a>
                        </div>
                    </div>
                </div>

                <a href=""
                    class="bg-white border-2 border-primary hover:bg-white hover:text-black hover:border-black transition-all duration-150 py-2 px-4 font-medium rounded-full text-primary">Request
                    Loan</a>
            </div>

            {{-- Open Mobile Menu Button --}}
            <div id="mobileMenuButton" class="cursor-pointer block lg:hidden" onclick="toggleMobileMenu()">
                <i class="fa-solid fa-bars text-3xl"></i>
            </div>

            {{-- Close Mobile Menu Button --}}
            <div id="closeMobileMenuButton" class="cursor-pointer block lg:hidden hidden" onclick="toggleMobileMenu()">
                <i class="fa-regular fa-circle-xmark text-3xl"></i>
            </div>
        </div>

        {{-- Mobile Menu --}}
        <div id="mobileMenu"
            class="fixed top-0 right-0 w-2/3 h-full bg-white rounded-bl-2xl shadow-lg transform transition-transform duration-300 ease-in-out z-20">
            <div class="flex justify-end items-end p-4">
                <div id="closeMobileMenuButtonInMenu" class="cursor-pointer" onclick="toggleMobileMenu()">
                    <i class="fa-regular fa-circle-xmark text-4xl text-primary"></i>
                </div>
            </div>
            <div class="px-6 space-y-8 py-4">
                <a class="block text-black font-medium text-lg hover:text-primary transition-all duration-150"
                    href="{{ route('home') }}">Home</a>
                <a class="block text-black font-medium text-lg hover:text-primary transition-all duration-150"
                    href="{{ route('about') }}">About Us</a>
                <a class="block text-black font-medium text-lg hover:text-primary transition-all duration-150"
                    href="{{ route('team') }}">Team</a>
                <a class="block text-black font-medium text-lg hover:text-primary transition-all duration-150"
                    href="{{ route('loan') }}">Loan</a>
                <a class="block text-black font-medium text-lg hover:text-primary transition-all duration-150"
                    href="{{ route('savings') }}">Savings</a>
                <a class="block text-black font-medium text-lg hover:text-primary transition-all duration-150"
                    href="{{ route('deposit') }}">Deposit</a>
            </div>
        </div>
    </section>

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
    </script>
</body>

</html>
