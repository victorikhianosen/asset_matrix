@extends('layouts.app')


@section('main')
    <section class="bg-white">
        <div class="mx-6 md:mx-8 lg:mx-24 pb-1 pt-28 md:pb-24 md:pt-44">
            <div class="">
                <h1
                    class="text-black text-center text-5xl md:text-6xl lg:text-7xl font-semibold gap-6 tracking-tighter leading-tight">
                    Deposit
                </h1>
            </div>
        </div>
    </section>




    <section class="bg-white">
        <div class="mx-6 md:mx-8 lg:mx-24 py-10 md:py-24">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 justify-center items-center">

                <div>
                    <img src="{{ asset('asset/images/about.png') }}" alt="">
                </div>
                <div class="space-y-12">
                    <h2 class="text-3xl md:text-5xl text-black font-semibold"><span class="text-primary">Maximize Your
                            Savings
                        </span>
                        with Our Tailored Deposit Products
                    </h2>
                    <div class="space-y-4">
                        <p class="text-xs md:text-sm tracking-wider text-black">
                            Our Deposit Products cater to diverse financial needs, offering secure and profitable options
                            for individuals and corporate organizations. The Fixed Deposit account allows you to invest with
                            low risk and earn higher interest than traditional banks, encouraging savings while providing a
                            safety net during cash shortages.
                        </p>

                        <p class="text-xs md:text-sm tracking-wider text-black">
                            The Investment Deposit helps you navigate various investment plans, analyzing risks and
                            appointing a dedicated financial manager to maximize your returns. Lastly, the Call Deposit
                            product provides unlimited access to funds, offering transparency and affordability with SMS
                            alerts for easy account management. Together, these products create a robust framework for
                            growing your wealth responsibly and efficiently.
                        </p>
                    </div>
                </div>



            </div>
        </div>
    </section>


    <section class="bg-white">
        <div class="mx-6 md:mx-8 lg:mx-24 py-10 md:py-10 lg:py-24">
            <div class="">
                <!-- Swiper Section -->
                <div class="swiper swiperLoan">
                    <div class="swiper-wrapper">
                        <!-- Slide 1 -->
                        <div class="swiper-slide">
                            <div class="shadow-xl h-80 p-6 border-2 border-gray-100 bg-white text-center rounded-md">
                                <span class="">
                                    <i class="fa-solid fa-piggy-bank text-5xl pb-4"></i>
                                </span>
                                <h4 class="font-semibold text-4xl my-4">Fixed Deposit</h4>
                                <div class="space-y-1 text-black mb-8">
                                    <p class="text-base tracking-wide">
                                        Fixed Deposit offers higher interest rates for secure investments, fostering savings
                                        and providing a safety net.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 2 -->
                        <div class="swiper-slide">
                            <div
                                class="shadow-xl h-80 p-6 border-2 border-black bg-black text-center rounded-md text-white">
                                <span class="">
                                    <i class="fa-solid fa-business-time text-5xl pb-4"></i>
                                </span>
                                <h4 class="font-semibold text-4xl my-4">Investment Deposit</h4>
                                <div class="space-y-1 text-black mb-8">
                                    <p class="text-white text-base tracking-wide">
                                        Investment Deposit helps you navigate investment plans, analyzing risks and
                                        appointing a financial manager for success.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 3 -->
                        <div class="swiper-slide">
                            <div class="shadow-xl h-80 p-6 border-2 border-gray-100 bg-white text-center rounded-md">
                                <span class="">
                                    <i class="fa-solid fa-truck-fast text-5xl pb-"></i>
                                </span>
                                <h4 class="font-semibold  text-4xl my-4">Call Deposit</h4>
                                <div class="space-y-1 text-black mb-8">
                                    <p>
                                        Call Deposit offers unlimited access to funds, managed investments, and SMS alerts
                                        for transparent account handling.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 4 -->
                        <div class="swiper-slide">
                            <div
                                class="shadow-xl h-80 p-6 border-2 border-black bg-black text-center rounded-md text-white">
                                <span class="">
                                    <i class="fa-solid fa-helmet-safety text-5xl pb-4"></i>
                                </span>
                                <h4 class="font-semibold text-4xl my-4">Salary Advance</h4>
                                <div class="space-y-1 text-black mb-8">
                                    <p class="text-white text-base tracking-wide">
                                        Access quick cash within 24 hours with our Salary Advance, tailored for salaried
                                        individuals to meet urgent needs.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Swiper Pagination -->
                    {{-- <div class="swiper-pagination"></div> --}}
                </div>
            </div>
        </div>
    </section>













    </script>
@endsection
