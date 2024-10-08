@extends('layouts.app')


@section('main')
    <section class="bg-white">
        <div class="mx-6 md:mx-8 lg:mx-24 pb-1 pt-28 md:pb-24 md:pt-44">
            <div class="">
                <h1
                    class="text-black text-center text-5xl md:text-6xl lg:text-7xl font-semibold gap-6 tracking-tighter leading-tight">
                    Savings</h1>
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
                    <h2 class="text-3xl md:text-5xl text-black font-semibold"><span class="text-primary">Build Your Wealth
                        </span>
                        with Our Trusted Savings Products
                    </h2>
                    <div class="space-y-4">
                        <p class="text-xs md:text-sm tracking-wider text-black">
                            Our savings products cater to diverse needs. The Esusu Savings account encourages daily
                            contributions from business individuals, serving as collateral based on these contributions,
                            with guaranteed interest rates and accessible funds anytime. Target Savings promotes a savings
                            culture for individuals setting aside money for events like Ileya and Christmas, requiring a
                            minimum balance of N1,000. Savings Club is designed for higher institution students, offering
                            better interest rates to help save for school fees and emergencies, available to Nigerians aged
                            18 and above.
                        </p>

                        <p class="text-xs md:text-sm tracking-wider text-black">
                            The Business Savings account supports individuals seeking loans with unlimited access to funds
                            and a minimum balance of N1,000. Lastly, our Current Account facilitates transfers to all
                            commercial banks with affordable pricing and SMS alerts, ideal for corporate organizations with
                            zero minimum balance.
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
                                <h4 class="font-semibold text-4xl my-4">Esusu Savings</h4>
                                <div class="space-y-1 text-black mb-8">
                                    <p class="text-base tracking-wide">
                                        Esusu Savings encourages daily contributions, ensuring access to funds and
                                        collateral based on your savings

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
                                <h4 class="font-semibold text-4xl my-4">Target Savings</h4>
                                <div class="space-y-1 text-black mb-8">
                                    <p class="text-white text-base tracking-wide">
                                        it helps you save for special occasions with a minimum balance of N1,000 and no
                                        turnover disruptions."
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
                                <h4 class="font-semibold text-4xl my-4">Savings Club</h4>
                                <div class="space-y-1 text-black mb-8">
                                    <p>
                                        We offers higher interest for students, promoting savings for fees and emergencies,
                                        available from age 18."
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
                                <h4 class="font-semibold text-4xl my-4">Business Savings</h4>
                                <div class="space-y-1 text-black mb-8">
                                    <p class="text-white text-base tracking-wide">
                                        Business Savings supports entrepreneurs with easy access to funds, promoting a
                                        savings culture for growth. </p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div
                                class="shadow-xl h-80 p-6 border-2 border-black bg-black text-center rounded-md text-white">
                                <span class="">
                                    <i class="fa-solid fa-helmet-safety text-5xl pb-4"></i>
                                </span>
                                <h4 class="font-semibold text-4xl my-4">Current Account</h4>
                                <div class="space-y-1 text-black mb-8">
                                    <p class="text-white text-base tracking-wide">
                                        Current Account allows seamless fund transfers with zero minimum balance, perfect for corporate organizations.                                    
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
