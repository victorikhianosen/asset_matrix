@extends('layouts.app')


@section('main')
    <section class="bg-gradient-to-r from-[#ee8520] to-[#ff6f00]
">

        <div class="mx-6 md:mx-8 lg:mx-24 pb-2 pt-28 md:pb-24 md:pt-44">

            <div class="">

                <div class="swiper-wrapper">
                    <div class="swiper-slide">

                        <div class="grid grid-cols-1 gap-8  lg:grid-cols-2 justify-center items-center">
                            <div class="space-y-6">
                                <h1
                                    class="text-white text-5xl md:text-6xl lg:text-7xl font-semibold gap-6 tracking-tighter leading-tigh">

                                    Loan Products
                                </h1>


                            </div>

                            <div class="grid grid-cols-2 justify-center items-center gap-6 w-full lg:w-9/12 pt-8">
                            </div>

                        </div>
                    </div>


                </div>


            </div>

        </div>
    </section>



    <section class="">
        <div class="grid grid-cols-1 md:grid-cols-2">
            <div class="px-6 md:pl-8 lg:pl-24 py-10 md:py-24 bg-whiteBg">
                {{-- <img src="{{ asset('asset/images/loan11.png') }}" alt=""> --}}
                <img src="{{ asset('asset/images/lll.png') }}" alt="">

            </div>
            <div class="px-6 md:pr-8 lg:pr-24 text-white py-10 md:py-24 bg-purple pl-6 lg:pl-12 space-y-10">
                <h2 class="text-3xl md:text-5xl font-semibold">
                    <span class="text-primary">Quick and</span> Reliable Loan Options for Your Needs
                </h2>
                <div class="space-y-4">
                    <p class="text-xs md:text-sm tracking-wider">
                        Discover our diverse loan products designed to meet the financial needs of businesses and
                        individuals alike. Our Esusu Loan supports micro-businesses, entrepreneurs, traders, and
                        individuals, offering a simple application process with no hidden charges. We believe in
                        empowering your business without the stress of complicated repayment structures. For business
                        owners and SMEs, our Business Loan provides quick, transparent access to funds without needing
                        to save with us first.
                    </p>

                    <p class="text-xs md:text-sm tracking-wider">
                        Just have a viable business ready for investment, and we’ll help you achieve your growth goals.
                        For urgent needs, our Instant Cash Loan delivers funds within 24 hours, allowing you to apply
                        online and withdraw from correspondent banking after approval. Similarly, our Salary Advance is
                        tailored for salaried individuals, ensuring quick access to funds to cover unexpected expenses.
                        Experience seamless financial support tailored for your needs—apply today and take the first
                        step toward financial security!
                    </p>
                </div>
            </div>
        </div>
    </section>






    {{-- <section class="relative bg-white">
        <!-- Purple background with curve effect -->
        <!-- Apply the clip-path only for medium screens (md) and above -->
        <div class="absolute inset-0 w-full h-full bg-purple md:w-1/2"></div>

        <!-- Content Area -->
        <div class="relative z-2 mx-6 md:mx-8 lg:mx-24 py-10 md:py-16">
            <!-- Grid layout for text and image -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 justify-center items-center">
                <!-- Text Section -->
                <div class="space-y-12 text-white">
                    <h2 class="text-3xl md:text-5xl font-semibold">
                        <span class="text-primary">Quick and</span> Reliable Loan Options for Your Needs
                    </h2>
                    <div class="space-y-4">
                        <p class="text-xs md:text-sm tracking-wider">
                            Discover our diverse loan products designed to meet the financial needs of businesses and
                            individuals alike. Our Esusu Loan supports micro-businesses, entrepreneurs, traders, and
                            individuals, offering a simple application process with no hidden charges. We believe in
                            empowering your business without the stress of complicated repayment structures. For business
                            owners and SMEs, our Business Loan provides quick, transparent access to funds without needing
                            to save with us first.
                        </p>

                        <p class="text-xs md:text-sm tracking-wider">
                            Just have a viable business ready for investment, and we’ll help you achieve your growth goals.
                            For urgent needs, our Instant Cash Loan delivers funds within 24 hours, allowing you to apply
                            online and withdraw from correspondent banking after approval. Similarly, our Salary Advance is
                            tailored for salaried individuals, ensuring quick access to funds to cover unexpected expenses.
                            Experience seamless financial support tailored for your needs—apply today and take the first
                            step toward financial security!
                        </p>
                    </div>
                </div>

                <!-- Image Section -->
                <div>
                    <img src="{{ asset('asset/images/about.png') }}" alt="">
                </div>
            </div>
        </div>
    </section> --}}




    <section class="bg-white">
        <div class="mx-6 md:mx-8 lg:mx-24 py-10 md:py-10 lg:py-24">
            <div class="grid grid-cols-1 lg:grid-cols-2 lg:grid-rows-2 gap-6" id="loan-cards">
                <div class="group text-white cursor-pointer shadow-xl h-80 p-6 border-2 border-white bg-primary text-center rounded-2xl"
                    data-animation>
                    <span>
                        <i class="fa-solid fa-piggy-bank text-5xl pb-4"></i>
                    </span>
                    <h4 class="font-semibold text-4xl my-4">Esusu Loan</h4>
                    <div class="space-y-1 mb-8">
                        <p class="text-base tracking-wide">
                            Our Esusu Loan provides quick, easy funding for micro-businesses and entrepreneurs,
                            with no hidden fees or charges.
                        </p>
                    </div>
                </div>

                <div class="group text-black cursor-pointer shadow-xl h-80 p-6 border-2 border-white bg-[#c0cad0] text-center rounded-2xl"
                    data-animation>
                    <span>
                        <i class="fa-solid fa-truck-fast text-5xl pb-4"></i>
                    </span>
                    <h4 class="font-semibold text-4xl my-4">Quick Loan</h4>
                    <div class="space-y-1 mb-8">
                        <p class="text-base tracking-wide">
                            Get instant access to funds for your personal or business needs with our Quick Loan.
                        </p>
                    </div>
                </div>

                <div class="group black cursor-pointer shadow-xl h-80 p-6 border-2 border-white bg-white text-center rounded-2xl"
                    data-animation>
                    <span>
                        <i class="fa-solid fa-briefcase text-5xl pb-4"></i>
                    </span>
                    <h4 class="font-semibold text-4xl my-4">Business Loan</h4>
                    <div class="space-y-1 mb-8">
                        <p class="text-base tracking-wide">
                            Secure financing to grow your business with our tailored Business Loan options.
                        </p>
                    </div>
                </div>

                <div class="group text-white cursor-pointer shadow-xl h-80 p-6 border-2 border-white bg-purple text-center rounded-2xl"
                    data-animation>
                    <span>
                        <i class="fa-solid fa-hand-holding-heart text-5xl pb-4"></i>
                    </span>
                    <h4 class="font-semibold text-4xl my-4">Charity Loan</h4>
                    <div class="space-y-1 text-white mb-8">
                        <p class="text-base tracking-wide">
                            Make a difference with our Charity Loan designed for nonprofit organizations.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>







    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const cards = document.querySelectorAll('[data-animation]');
            const windowHeight = window.innerHeight;

            const handleScroll = () => {
                const scrollY = window.scrollY;

                // Check if the user has scrolled down a specific amount
                if (scrollY > 50) { // Change this value to adjust when the animation should trigger
                    cards.forEach(card => {
                        // Add Tailwind classes for animation
                        card.classList.add('animate-slideUp'); // Use your defined animation
                    });
                    window.removeEventListener('scroll',
                        handleScroll); // Remove the event listener after animation
                }
            };

            window.addEventListener('scroll', handleScroll);
            handleScroll(); // Run on page load to animate any cards already in view
        });
    </script>
@endsection
