<section class="bg-whiteBg">
    <div class="mx-6 md:mx-8 lg:mx-24 py-10 md:py-24">
        <div class="">
            <h1 class="text-center font-semibold text-2xl mb-8">Our Services</h1>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 pb-8">

                {{-- First Div - Slide from Left --}}
                <div class="bg-primary rounded-2xl shadow-sm">
                    <div class="relative text-white px-6 py-10 space-y-6">
                        <h2 class="text-2xl font-semibold tracking-wide">Internet Banking</h2>
                        <div class="space-y-3">
                            <div class="text-font-light text-sm">
                                <span><i class="fa-solid fa-check mr-2"></i></span> Transfer
                            </div>
                            <div class="text-font-light text-sm">
                                <span><i class="fa-solid fa-check mr-2"></i></span> Airtime
                            </div>
                            <div class="text-font-light text-sm">
                                <span><i class="fa-solid fa-check mr-2"></i></span> Data
                            </div>
                            <div class="text-font-light text-sm">
                                <span><i class="fa-solid fa-check mr-2"></i></span> Cable
                            </div>
                            <div class="text-font-light text-sm">
                                <span><i class="fa-solid fa-check mr-2"></i></span> Electricity
                            </div>
                        </div>
                        <div>
                            <a href="{{ url('https://cashmatrix.app/') }}"
                                class="bg-white text-primary px-6 py-2 rounded-full mt-6 border-white border-2 hover:bg-primary hover:text-white transition-all duration-200 text-sm">
                                Click here
                            </a>
                        </div>
                        <div class="absolute top-12 right-8">
                            <i
                                class="fa-solid fa-piggy-bank lg:block text-[#c4c4c4] text-[8rem] md:text-[8rem] lg:text-[10rem]"></i>
                        </div>
                    </div>
                </div>

                {{-- Second Div - Slide from Right --}}

                <div class="bg-white rounded-2xl shadow-sm">
                    <div class="relative px-6 py-10 space-y-6">
                        <h1 class="text-2xl font-semibold tracking-wide text-black">Instant Loan</h1>
                        <div class="space-y-3 text-black">
                            <div class="text-font-light text-sm">
                                <span><i class="fa-solid fa-check mr-2"></i></span> Esusu Loan
                            </div>
                            <div class="text-font-light text-sm">
                                <span><i class="fa-solid fa-check mr-2"></i></span> Business Loan
                            </div>
                            <div class="text-font-light text-sm">
                                <span><i class="fa-solid fa-check mr-2"></i></span> Salary Loan
                            </div>
                            <div class="text-font-light text-sm">
                                <span><i class="fa-solid fa-check mr-2"></i></span> Car Loan
                            </div>
                            <div class="text-font-light text-sm">
                                <span><i class="fa-solid fa-check mr-2"></i></span> School Loan
                            </div>
                        </div>

                        <div>
                            <a href="{{ route('loan') }}"
                                class="bg-black text-white px-6 py-2 rounded-full mt-6 border-black border-2 hover:bg-white hover:text-black transition-all duration-200 text-sm">
                                Click here
                            </a>
                        </div>

                        <div class="absolute top-10 right-4">
                            <i
                                class="fa-solid fa-piggy-bank lg:block text-[#c4c4c4] text-[8rem] md:text-[8rem] lg:text-[10rem]"></i>
                        </div>
                    </div>
                </div>


                {{-- Third Div - Slide from Right (Faster) --}}
                <div class="bg-black rounded-2xl shadow-sm col-span-1 md:col-span-2 lg:col-span-1">
                    <div class="relative px-6 py-10 space-y-6">
                        <h1 class="text-2xl font-semibold tracking-wide text-white">Savings</h1>
                        <div class="space-y-3 text-white">
                            <div class="text-font-light text-sm">
                                <span><i class="fa-solid fa-check mr-2"></i></span> Esusu Savings
                            </div>
                            <div class="text-font-light text-sm">
                                <span><i class="fa-solid fa-check mr-2"></i></span> Target Savings
                            </div>
                            <div class="text-font-light text-sm">
                                <span><i class="fa-solid fa-check mr-2"></i></span> Savings Club
                            </div>
                            <div class="text-font-light text-sm">
                                <span><i class="fa-solid fa-check mr-2"></i></span> Business Savings
                            </div>
                            <div class="text-font-light text-sm">
                                <span><i class="fa-solid fa-check mr-2"></i></span> Corporate & Personal Current
                            </div>
                        </div>
                        <div>
                            <a href="{{ route('savings') }}"
                                class="bg-white text-black px-6 py-2 rounded-full mt-6 border-white border-2 hover:bg-black hover:text-white transition-all duration-200 text-sm">
                                Click here
                            </a>

                        </div>

                        <div class="absolute top-8 right-8">
                            <i
                                class="fa-solid fa-piggy-bank lg:block text-[#c4c4c4] text-[8rem] md:text-[8rem] lg:text-[10rem]"></i>
                        </div>
                    </div>
                </div>

            </div>




            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                {{-- Fourth --}}
                <div class="bg-purple rounded-2xl shadow-sm">
                    <div class="relative px-6 py-10 space-y-6">

                        <h1 class="text-2xl font-semibold tracking-wide text-white">Deposit</h1>

                        <div class="space-y-3 text-white">
                            <div class="text-font-light text-sm">
                                <span>
                                    <i class="fa-solid fa-check mr-2"></i>
                                </span>
                                Fixed Deposit
                            </div>
                            <div class="text-font-light text-sm">
                                <span>
                                    <i class="fa-solid fa-check mr-2"></i>
                                </span>
                                Investment Deposit
                            </div>

                            <div class="text-font-light text-sm">
                                <span>
                                    <i class="fa-solid fa-check mr-2"></i>
                                </span>
                                Call Deposit
                            </div>


                            <div class="text-font-light text-sm">
                                <span>
                                    <i class="fa-solid fa-check mr-2"></i>
                                </span>
                                Fixed Deposit
                            </div>
                        </div>

                        <div>
                            <a href="{{ route('savings') }}"
                                class="bg-white text-purple px-6 py-2 
                            rounded-full mt-6 border-white border-2 hover:bg-purple hover:text-white 
                            transition-all duration-200 text-sm">
                                Click me
                            </a>
                        </div>


                        <div class="absolute top-8 right-8">
                            <i
                                class="fa-solid fa-piggy-bank lg:block text-[#c4c4c4] text-[8rem]  md:text-[8rem] lg:text-[10rem]"></i>
                        </div>
                    </div>
                </div>


                {{-- Five --}}
                <div class="bg-[#C0CAD0] rounded-2xl shadow-sm">
                    <div class="relative px-6 py-10 space-y-6">

                        <h1 class="text-2xl font-semibold tracking-wide text-black">Retail Banking</h1>

                        <div class="space-y-3 text-black">
                            <div class="text-font-light text-sm">
                                <span>
                                    <i class="fa-solid fa-check mr-2"></i>
                                </span>
                                Fund Transfer
                            </div>
                            <div class="text-font-light text-sm">
                                <span>
                                    <i class="fa-solid fa-check mr-2"></i>
                                </span>
                                Fund Management
                            </div>

                            <div class="text-font-light text-sm">
                                <span>
                                    <i class="fa-solid fa-check mr-2"></i>
                                </span>
                                In-branch Banking
                            </div>


                            <div class="text-font-light text-sm">
                                <span>
                                    <i class="fa-solid fa-check mr-2"></i>
                                </span>
                                Correspondent Banking
                            </div>
                        </div>

                        <div>
                            <a href="{{ url('https://cashmatrix.app/') }}" target="_blink"
                                class="bg-purple text-white px-6 py-2 
                            rounded-full mt-6 border-purple border-2 hover:bg-[#C0CAD0] hover:text-purple hover:border-purple
                            transition-all duration-200 text-sm">
                                Click here
                            </a>

                        </div>


                        <div class="absolute top-8 right-8">
                            <i
                                class="fa-solid fa-piggy-bank lg:block text-[#c4c4c4] text-[8rem]  md:text-[8rem] lg:text-[10rem]"></i>
                        </div>
                    </div>
                </div>



            </div>
        </div>

        {{-- 


        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const elements = document.querySelectorAll('.animate-on-scroll');

                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.remove('opacity-0');
                            entry.target.classList.add('opacity-100');

                            if (entry.target.classList.contains('animate-slideLeft')) {
                                entry.target.classList.remove('-translate-x-full');
                                entry.target.classList.add('translate-x-0');
                            } else if (entry.target.classList.contains('animate-slideRight')) {
                                entry.target.classList.remove('translate-x-full');
                                entry.target.classList.add('translate-x-0');
                            } else if (entry.target.classList.contains('animate-slideUp')) {
                                entry.target.classList.remove('translate-y-full');
                                entry.target.classList.add('translate-y-0');
                            }
                            if (entry.target.classList.contains('animate-slideDown')) {
                                entry.target.classList.remove('-translate-y-full');
                                entry.target.classList.add('translate-y-0');
                            }
                        }
                    });
                }, {
                    threshold: 0.1
                });

                elements.forEach(el => {
                    observer.observe(el);
                });
            });
        </script> --}}

</section>
