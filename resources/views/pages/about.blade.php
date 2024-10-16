@extends('layouts.app')


@section('main')
    <section class="bg-primary text-white">
        <div class="mx-6 md:mx-8 lg:mx-24 pb- pt-28 md:pb-16 md:pt-44">
            <div class="">
                <h1
                    class="text-white text-star text-2xl md:text-6xl lg:text-4xl font-semibold gap-6 tracking-tighter leading-tight">
                    About Us</h1>


            </div>
        </div>
    </section>


    <section class="relative bg-white">
        <!-- Purple background with curve effect -->
        <!-- Apply the clip-path only for medium screens (md) and above -->
        <div class="absolute inset-0 w-full h-full bg-[#eceff1] md:w-1/2 md:clip-path-diagonal"></div>

        <!-- Content Area -->
        <div class="relative z-2 mx-6 md:mx-8 lg:mx-24 py-10 md:py-16">
            <!-- Grid layout for text and image -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 justify-center items-center">
                <!-- Text Section -->
                <div class="space-y-12">
                    <h2 class="text-3xl md:text-5xl text-black font-semibold">
                        <span class="text-primary">Financial goal</span> are our priority
                    </h2>
                    <div class="space-y-4">
                        <p class="text-xs md:text-sm tracking-wider text-black">
                            Asset Matrix Microfinance Bank Limited (AMMFB) is a financial institution dedicated to providing
                            affordable and dependable financial solutions for the enterprising poor and small to
                            medium-sized enterprises. Our mission is to reduce poverty in Nigeria by enhancing the
                            capabilities of low-income individuals engaged in economic activities, aligning with global
                            initiatives for poverty alleviation.
                        </p>

                        <p class="text-xs md:text-sm tracking-wider text-black">
                            We focus on the unbanked segments of the Nigerian economy, aiming to transition them into the
                            formal sector and establish viable businesses. Incorporated on August 3, 2009, as a limited
                            liability company, AMMFB is licensed by the Central Bank of Nigeria to operate as a microfinance
                            bank. With a clean and non-provisional license, we strive to empower lives, maximize potential,
                            and transform the Nigerian economy for the better.
                        </p>
                    </div>
                </div>

                <!-- Image Section -->
                <div>
                    <img src="{{ asset('asset/images/aboutus.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>



    <section class="bg-whiteBg">
        <div class="mx-6 md:mx-8 lg:mx-24 py-10 md:py-24">
            <div class="">
                <!-- Use grid-cols-1 for small screens and grid-cols-2 for medium screens -->
                <div class="grid grid-cols-1 lg:grid-cols-2 lg:grid-rows-2 gap-6">

                    <div
                        class="group cursor-pointer shadow-xl p-6 border-2
                         bg-primary text-center rounded-2xl hover:scale-y-105 transition-all duration-200
                          text-white">
                        <span>
                            <i class="fa-solid fa-wifi text-5xl pb-4"></i>
                        </span>
                        <h4 class="font-semibold text-2xl my-4">Vision</h4>
                        <div class="space-y-1">
                            <p class="text-base tracking-wide">
                                To be the market leader in the provision of microfinance and related financial services in
                                Nigeria's sub-financial sector.
                            </p>
                        </div>
                    </div>

                    <div
                        class="row-span-0 lg:row-span-2 group cursor-pointer 
                        shadow-xl p-6 border-2 bg-purple text-white text-center rounded-2xl
                          hover:scale-y-105 transition-all duration-200">
                        <span>
                            <i class="fa-solid fa-circle-right text-5xl pb-4"></i>
                        </span>
                        <h4 class="font-semibold text-2xl my-4 row-span-2">Core Values</h4>
                        <div class="space-y-1 mb-8">
                            <p class="text-base tracking-wide">
                                We prioritize high-quality services to ensure every client receives the best outcomes. Our
                                maturity helps us navigate challenges with effective resolutions, while our positive
                                attitude and diligence fuel our commitment to excellence. </p>

                            <p class=" hidden lg:block text-base tracking-wide">
                                We embrace resilience when facing obstacles, understanding that challenges are opportunities
                                for growth and innovation. Above all, we uphold trust and integrity in all our interactions,
                                fostering strong relationships with clients and partners. By embodying these values, we aim
                                to create a culture of excellence that inspires confidence and drives success.


                            </p>
                        </div>
                    </div>

                    <div
                        class="group cursor-pointer shadow-xl p-6 border-2
                         border-[#C0CAD0] bg-[#C0CAD0] text-center rounded-2xl hover:scale-y-105 transition-all duration-200">
                        <span>
                            <i class="fa-solid fa-coins text-5xl pb-4"></i>
                        </span>
                        <h4 class="font-semibold text-2xl my-4">Mission</h4>
                        <div class="space-y-1 text-black mb-8">
                            <p>
                                Empowering micro-entrepreneurs with tailored financial services for growth, inclusion, and a
                                secure financial future.


                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
