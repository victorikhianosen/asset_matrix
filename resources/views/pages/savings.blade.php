@extends('layouts.app')


@section('main')
    <section class="bg-gradient-to-r from-[#ee8520] to-[#ff6f00]">

        <div class="mx-6 md:mx-8 lg:mx-24 pb-2 pt-28 md:pb-24 md:pt-44">

            <div class="swiper mySwiperHero">

                <div class="swiper-wrapper">
                    <div class="swiper-slide">

                        <div class="grid grid-cols-1 gap-8  lg:grid-cols-2 justify-center items-center">
                            <div class="space-y-6">
                                <h1
                                    class="text-white text-5xl md:text-6xl lg:text-7xl font-semibold gap-6 tracking-tighter leading-tigh">

                                    Savings Products

                                </h1>
                                {{-- <p class="text-[#333333] font-light text-sm md:text-md">
                                    Introducing Matrix Savings, a revolutionary saving solution designed to help you achieve
                                    your financial goals effortlessly. With our Matrix Savings plan, you can choose from a
                                    variety of saving frequencies tailored to your preferences:
                                </p> --}}

                            </div>


                            <div class="grid grid-cols-2 justify-center items-center gap-6 w-full lg:w-9/12 pt-8">
                            </div>

                        </div>
                    </div>


                </div>


            </div>

        </div>
    </section>




    <section id="about" class="about bg-[#eaedef] section py-16">

        <div class="container mx-auto" data-aos="fade-up" data-aos-delay="100">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">


                {{-- First DIV --}}

                <div class="col-xl-7">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 icon-boxes">

                        <div class="col-md-6 bg-white" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon-box bg-white shadow-lg rounded-lg transition-all duration-300">


                               <i
                                    class="fa-solid fa-briefcase w-20 h-20 rounded-full flex items-center justify-center text-4xl mb-6"></i>

                                <h3 class="font-bold text-lg mb-2">Daily <br>Savings</h3>
                                <p class="mb-0">
                                    Contribute daily to build your savings gradually and watch them grow.
                                </p>
                            </div>
                        </div>

                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                            <div class="icon-box p-10 shadow-lg rounded-lg transition-all duration-300">

                                   <i
                                    class="fa-solid fa-briefcase w-20 h-20 rounded-full flex items-center justify-center text-4xl mb-6"></i>


                                <h3 class="font-bold text-lg mb-2">Weekly Savings</h3>
                                <p class="mb-0">
                                    Set aside funds weekly for easier budget management and steady growth.

                                </p>
                            </div>
                        </div>

                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                            <div
                                class="icon-box bg-[var(--surface-color)] p-10 shadow-lg rounded-lg transition-all duration-300">
     <i
                                    class="fa-solid fa-briefcase w-20 h-20 rounded-full flex items-center justify-center text-4xl mb-6"></i>

                                <h3 class="font-bold text-lg mb-2">Monthly Savings

                                </h3>
                                <p class="mb-0">

                                    Make consistent monthly contributions to build substantial savings over time.


                                </p>
                            </div>
                        </div>

                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                            <div class="icon-box p-10 shadow-lg rounded-lg transition-all duration-300">
                                <i
                                    class="fa-solid fa-briefcase w-20 h-20 rounded-full flex items-center justify-center text-4xl mb-6"></i>

                                <h3 class="font-bold text-lg mb-2">Annual Savings</h3>
                                <p class="mb-0">

                                    Make a significant contribution once a year for long-term financial goals.



                                </p>
                            </div>
                        </div>

                    </div>
                </div>

                {{-- second DIV --}}
                <div class="col-xl-5 content px-6 lg:px-0">


                    <img src="{{ asset('asset/images/investment.png') }}" alt="">
                    <h2 class="font-bold text-2xl md:text-4xl mt-4">
                        Experience Instant Banking at Your Fingertips


                    </h2>
                    <p class="mt-4" align="justify">
                        Take control of your finances with our comprehensive internet banking platform. Enjoy a
                        user-friendly interface that makes managing your accounts effortless. From checking your balance to
                        paying bills and making transfers, every feature is designed for your convenience. With
                        state-of-the-art security protocols, you can bank with confidence, knowing your information is
                        protected. Experience banking that adapts to your lifestyle!
                    </p>

                </div>

            </div>
        </div>

    </section>


    <section class="bg-white">
        <div class="mx-6 md:mx-8 lg:mx-24 py-10 md:py-10 lg:py-24">
            <div class="grid grids-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" id="loan-cards">

                {{-- First --}}
                <div class="col-span-2 md:grid-cols-2 md:col-span-2 group text-white cursor-pointer 
                shadow-xl h-80 p-6 border-2 border-white bg-primary text-center rounded-2xl hover:scale-y-105 transition-all duration-200"
                    data-animation>
                    <span>
                        <i class="fa-solid fa-piggy-bank text-5xl pb-4"></i>
                    </span>
                    <h4 class="font-semibold text-4xl my-4">Esusu Savings</h4>
                    <div class="space-y-1 mb-8">
                        <p class="text-base tracking-wide">
                            Our Esusu Loan provides quick, easy funding for micro-businesses and entrepreneurs,
                            with no hidden fees or charges.
                        </p>
                    </div>
                </div>



                {{-- Second --}}
                <div class=" col-span-2 lg:col-span-1 text-white cursor-pointer 
                shadow-xl h-80 p-6 border-2 border-white bg-black text-center rounded-2xl hover:scale-y-105 transition-all duration-200"
                    data-animation>
                    <span>
                        <i class="fa-solid fa-bullseye  dollar-sign text-5xl pb-4"></i>
                    </span>
                    <h4 class="font-semibold text-4xl my-4">Target Savings</h4>
                    <div class="space-y-1 mb-8">
                        <p class="text-base tracking-wide">
                            Get instant access to funds for your personal or business needs with our Quick Loan.
                        </p>
                    </div>
                </div>

                {{-- Third --}}
                <div class="col-span-2 lg:col-span-1 group cursor-pointer shadow-xl 
                h-80 p-6 border-2 text-white border-white bg-purple text-center rounded-2xl hover:scale-y-105 duration-200"
                    data-animation>
                    <span>
                        <i class="fa-solid fa-user-group text-5xl pb-4"></i>
                    </span>
                    <h4 class="font-semibold text-4xl my-4">Savings Club</h4>
                    <div class="space-y-1 mb-8">
                        <p class="text-base tracking-wide">

                            Students can invest in a savings club account with higher returns than savings accounts.


                        </p>
                    </div>
                </div>

                {{-- Fourth --}}

                <div class="col-span-2 lg:col-span-1 group text-black cursor-pointer 
                shadow-xl h-80 p-6 border-2 border-white bg-white text-center rounded-2xl hover:scale-y-105 duration-200"
                    data-animation>
                    <span>
                        <i class="fa-solid fa-user text-5xl pb-4"></i>
                    </span>
                    <h4 class="font-semibold text-4xl my-4">Personal Savings</h4>
                    <div class="space-y-1 mb-8">
                        <p class="text-base tracking-wide">
                            Our personal savings account encourages a strong savings habit for financial growth.

                        </p>
                    </div>
                </div>



                <div class="col-span-2  lg:col-span-1 group cursor-pointer 
                shadow-xl h-80 p-6 border-2 text-black border-white bg-[#FEF3C7] text-center rounded-2xl hover:scale-y-105 duration-200"
                    data-animation>
                    <span>
                        <i class="fa-solid fa-briefcase text-5xl pb-4"></i>
                    </span>
                    <h4 class="font-semibold text-4xl my-4">Business Savings</h4>
                    <div class="space-y-1 mb-8">
                        <p class="text-base tracking-wide">
                            Secure financing to grow your business with our tailored Business Loan options.
                        </p>
                    </div>
                </div>





            </div>
    </section>
@endsection
