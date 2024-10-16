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

                <!-- Our Bank Mobile Dropdown -->
                <div>
                    <button
                        class="block w-full text-left text-black font-medium text-lg hover:text-primary transition-all duration-150"
                        onclick="toggleDropdown('bankDropDownMobile')">Our Bank
                        <span><i class="fa-solid fa-sort-down ml-1"></i></span>
                    </button>
                    <div id="bankDropDownMobile" class="hidden pl-4">
                        <a href="{{ route('about') }}"
                            class="block py-2 text-sm text-black hover:text-primary transition-all duration-150">About
                            Us</a>
                        <a href="{{ route('team') }}" 
                            class="block py-2 text-sm text-black hover:text-primary transition-all duration-150">Team</a>
                    </div>
                </div>

                <!-- Business Banking Mobile Dropdown -->
                <div>
                    <button
                        class="block w-full text-left text-black font-medium text-lg hover:text-primary transition-all duration-150"
                        onclick="toggleDropdown('businessDropDownMobile')">Business Banking
                        <span><i class="fa-solid fa-sort-down ml-1"></i></span>
                    </button>
                    <div id="businessDropDownMobile" class="hidden pl-4">
                        <a href="{{ route('internet') }}"
                            class="block py-2 text-sm text-black hover:text-primary transition-all duration-150">Digital
                            Banking</a>
                        <a href="{{ route('loan') }}"
                            class="block py-2 text-sm text-black hover:text-primary transition-all duration-150">Loan</a>
                        <a href="{{ route('savings') }}"
                            class="block py-2 text-sm text-black hover:text-primary transition-all duration-150">Investment
                            | Deposit</a>
                    </div>
                </div>

                <!-- Online Banking -->
                <a class="block text-black font-medium text-lg hover:text-primary transition-all duration-150"
                    href="{{ url('https://cashmatrix.app/') }}" target="_blink">Online Banking</a>

                <!-- Policy Mobile Dropdown -->
                <div>
                    <button
                        class="block w-full text-left text-black font-medium text-lg hover:text-primary transition-all duration-150"
                        onclick="toggleDropdown('policyDropDownMobile')">Policy
                        <span><i class="fa-solid fa-sort-down ml-1"></i></span>
                    </button>
                    <div id="policyDropDownMobile" class="hidden pl-4">
                        <a href="{{ route('policy.data') }}"
                            class="block py-2 text-sm text-black hover:text-primary transition-all duration-150">Data
                            Consent
                            Policy</a>
                        <a href="{{ route('policy.mobile') }}"
                            class="block py-2 text-sm text-black hover:text-primary transition-all duration-150">Mobile
                            App
                            Policy</a>
                        <a href="{{ route('policy.amt') }}"
                            class="block py-2 text-sm text-black hover:text-primary transition-all duration-150">Anti-Money
                            Laundering</a>
                        <a href="{{ route('policy.enduser') }}"
                            class="block py-2 text-sm text-black hover:text-primary transition-all duration-150">End
                            User
                            Agreement</a>
                    </div>
                </div>

                <!-- Request Loan -->
                <div class="pt-6">
                    <a href=""
                        class="bg-white border-2 border-primary hover:bg-primary hover:text-white hover:border-primary transition-all duration-150 py-2 px-4 font-medium rounded-full text-primary">Request
                        Loan</a>
                </div>

            </div>
        </div>