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
        <div class="w-full h-fit grid grid-cols-1 md:grid-cols-2">
            <div class="px-6 md:pl-8 lg:pl-24 py-10 md:pt-24 md: pb-16 bg-whiteBg">
                <img class="h-fit" src="{{ asset('asset/images/lll.png') }}" alt="">
            </div>
            <div class="px-6 md:pr-8 lg:pr-24 text-white py-10 md:py-24 bg-purple pl-6 lg:pl-12 space-y-10">
                <h2 class="text-3xl md:text-5xl font-semibold">
                    <span class="text-primary">Quick and</span> Reliable Loan Options for Your Needs
                </h2>
                <div class="space-y-4">
                    <p class="text-xs md:text-sm tracking-wider" align="justify">
                        Discover our diverse loan products designed to meet the financial needs of businesses and
                        individuals alike. Our Esusu Loan supports micro-businesses, entrepreneurs, traders, and
                        individuals, offering a simple application process with no hidden charges. We believe in
                        empowering your business without the stress of complicated repayment structures. For business
                        owners and SMEs, our Business Loan provides quick, transparent access to funds without needing
                        to save with us first.
                    </p>

                    <p class="text-xs md:text-sm tracking-wider" align="justify">
                        Just have a viable business ready for investment, and we’ll help you achieve your growth goals.
                        For urgent needs, our Instant Cash Loan delivers funds within 24 hours, allowing you to apply
                        online and withdraw from correspondent banking after approval. Similarly, our Salary Advance is
                        tailored for salaried individuals, ensuring quick access to funds to cover unexpected expenses.
                        Experience seamless financial support tailored for your needs—apply today and take the first
                        step toward financial security!
                    </p>
                </div>





                <div class="grid grid-cols-1  md:grid-cols-2 gap-y-4 md:gap-y-2">

                    <div class="space-y-4 md:space-y-2 lg:space-y-3">

                        <div class="flex justify-start items-center gap-2 md:gap-4">
                            <span class="bg-white p-1 rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960"
                                    width="20px" fill="#000">
                                    <path d="M389-267 195-460l51-52 143 143 325-324 51 51-376 375Z" />
                                </svg>
                            </span>
                            <p class="text-sm text tracking-wide font-light">
                                Fast Loan Approvals

                            </p>
                        </div>

                        <div class="flex justify-start items-center gap-2 md:gap-4">
                            <span class="bg-white p-1 rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960"
                                    width="20px" fill="#000">
                                    <path d="M389-267 195-460l51-52 143 143 325-324 51 51-376 375Z" />
                                </svg>
                            </span>
                            <p class="text-sm text tracking-wide font-light">
                                Flexible Repayment Options
                            </p>
                        </div>

                        <div class="flex justify-start items-center gap-2 md:gap-4">
                            <span class="bg-white p-1 rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960"
                                    width="20px" fill="#000">
                                    <path d="M389-267 195-460l51-52 143 143 325-324 51 51-376 375Z" />
                                </svg>
                            </span>
                            <p class="text-sm tracking-wide font-light">
                                Low-Interest Rates
                            </p>
                        </div>

                    </div>

                    <div class="space-y-4 md:space-y-2 lg:space-y-3">

                        <div class="flex justify-start items-center gap-2 md:gap-4">
                            <span class="bg-white p-1 rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960"
                                    width="20px" fill="#000">
                                    <path d="M389-267 195-460l51-52 143 143 325-324 51 51-376 375Z" />
                                </svg>
                            </span>
                            <p class="text-sm tracking-wide font-light">
                                No Collateral Required

                            </p>
                        </div>

                        <div class="flex justify-start items-center gap-2 md:gap-4">
                            <span class="bg-white p-1 rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960"
                                    width="20px" fill="#000">
                                    <path d="M389-267 195-460l51-52 143 143 325-324 51 51-376 375Z" />
                                </svg>
                            </span>
                            <p class="text-sm tracking-wide font-light">
                                Instant Loan Disbursement


                            </p>
                        </div>

                        <div class="flex justify-start items-center gap-2 md:gap-4">
                            <span class="bg-white p-1 rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960"
                                    width="20px" fill="#000">
                                    <path d="M389-267 195-460l51-52 143 143 325-324 51 51-376 375Z" />
                                </svg>
                            </span>
                            <p class="text-sm tracking-wide font-light">
                                Track Your Loan Status Easily

                            </p>
                        </div>

                    </div>
                </div>


                <div class="pt-6">
                    <a href="{{ url('https://cashmatrix.app/') }}" target="_blink"
                        class="bg-white  text-black py-2 px-6 text-sm rounded-full border-2 border-white hover:bg-purple hover:text-white transition-all duration-150">Get
                        Started</a>
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

                <div class="group text-black cursor-pointer shadow-xl h-80 p-4 border-2 border-white bg-[#c0cad0] text-center rounded-2xl"
                    data-animation>
                    <div class="flex items-center justify-center">
                        {{-- <i class="fa-solid fa-truck-fast text-5xl pb-4"></i> --}}

                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 777.4 775.4"
                            width="80px" height="80px" style="enable-background:new 0 0 777.4 775.4;"
                            xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: none;
                                    stroke: #000000;
                                    stroke-width: 14;
                                    stroke-miterlimit: 10;
                                }
                            </style>
                            <path fill="#000" d="M515.4,552.6c26.8-34.3,22.2-84.2-13.6-112.3c-34.3-26.8-85.4-20.7-112.3,13.6c-26.8,34.3-22.2,84.2,13.6,112.3
         C437.5,592.8,488.6,586.6,515.4,552.6z M589.8,234.6l-46.6,52.5L493,247.9L368.4,407.7c-2.5-1.6-9.8-4.9-10.5-5.8
         c-26.6-12.4-62.3-11.2-88.2,2.1L0,554.5v199.9l119.4-58.3c53.7,25.2,115,18.9,164.5-11.7l116.6,91l34.8-44.8l27.5,24.3l314.6-353.2
         L589.8,234.6z M429.6,703.7c-22.6-11.7-50.6-8-69.1,9.6l-92.9-72.8c-20.3,16.3-45,25-70.3,25c-11.4,0-22.6-1.9-33.6-5.2
         c-5.6-1.9-8.6-7.7-7-13.3c1.9-5.6,7.7-8.6,13.3-7c27.5,8.6,57.4,3.7,80.5-13l0,0c5.8-4.4,12.1-9.6,18.5-16.6l28.4-33.6l82.1,64.4
         c14.2,9.8,30.8,7.4,40.1-3.7c9.8-14.2,7.4-31.2-3.7-40.1L268.5,478.6c-4.4-3.5-4.9-9.8-1.6-14.2c3.5-4.4,9.8-4.9,14.2-1.6l45.3,36.4
         l142.7-183.5c21.9,11.4,48.8,8,67-8.4l86.1,67c-11.7,22.6-7.7,50.2,9.8,68.8L429.6,703.7z M475.7,678.6L691,402.1l-124.3-96.8
         c19.8,8.6,43.2,5.8,60.4-7.7l81.4,72.5c-13,21.7-11.2,49.7,5.2,69.1L494.5,685.6C488.6,682.6,482.5,680,475.7,678.6z M527.9,503.2
         c0,41-33.3,74.3-74.3,74.3s-74.3-33.3-74.3-74.3s33.3-74.3,74.3-74.3S527.9,462.2,527.9,503.2z" />
                            <g>

                                <ellipse transform="matrix(0.7071 -0.7071 0.7071 0.7071 -224.2014 468.7299)"
                                    class="st0" cx="453.7" cy="505" rx="74.4" ry="74.4" />
                                <path d="M459.2,520.4c-2.4,0.7-5,0.1-6.8-1.5l-36.5-32.7c-2.9-2.6-3-7.1-0.5-9.9s7.1-3,9.9-0.5l27.6,24.8l9-38.2
          c0.9-3.7,4.8-6.1,8.5-5.1c3.7,0.9,6.1,4.8,5.1,8.5l-11.8,49.6C463.7,516.6,461.7,519.6,459.2,520.4z" />
                            </g>
                        </svg>

                    </div>
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
