@extends('layouts.app')


@section('main')
    <section class="bg-white">
        <div class="mx-6 md:mx-8 lg:mx-24 pb-1 pt-28 md:pb-24 md:pt-44">
            <div class="">
                <h1
                    class="text-black text-star text-5xl md:text-6xl lg:text-4xl font-semibold gap-6 tracking-tighter leading-tight">
                    About Us</h1>
            

            </div>
        </div>
    </section>



    <section class="bg-[#fdf3e9]">
        <div class="mx-6 md:mx-8 lg:mx-24 py-10 md:py-24">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 justify-center items-center">
                <div class="space-y-12">
                    <h2 class="text-3xl md:text-5xl text-black font-semibold"><span class="text-primary">Finacial
                            goal</span>
                        are our priority
                    </h2>
                    <div class="space-y-4">
                        <p class="text-xs md:text-sm tracking-wider text-black">
                            Asset Matrix Microfinance Bank Limited (AMMFB) is a financial institution dedicated to providing
                            affordable and dependable financial solutions for the enterprising poor and small to
                            medium-sized enterprises. Our mission is to reduce poverty in Nigeria by enhancing the
                            capabilities of low-income individuals engaged in economic activities, aligning with global
                            initiatives for poverty alleviation
                        </p>

                        <p class="text-xs md:text-sm tracking-wider text-black">
                            focus on the unbanked segments of the Nigerian economy, aiming to transition them into the
                            formal sector and establish viable businesses. Incorporated on August 3, 2009, as a limited
                            liability company, AMMFB is licensed by the Central Bank of Nigeria to operate as a microfinance
                            bank. With a clean and non-provisional license, we strive to empower lives, maximize potential,
                            and transform the Nigerian economy for the better.
                        </p>
                    </div>
                </div>


                <div>
                    <img src="{{ asset('asset/images/about.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>


    <section class="bg-white">
        <div class="mx-6 md:mx-8 lg:mx-24 py-10 md:py-24">
            <div class="">

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                    <div class="group cursor-pointer shadow-xl p-6 border-2 border-gray-100 bg-white text-center rounded-md
                     hover:border-primary transition-all duration-200">
                        <span class="">
                            <i class="fa-solid fa-wifi text-5xl pb-4"></i>
                        </span>
                        <h4 class="font-semibold text-2xl my-4">Vision</h4>

                        <div class="space-y-1 text-black mb-8">
                            <p class="text-base tracking-wide">
                                To be the market leader in the provision of microfinance and related financial services in
                                Nigeria's sub-financial sector.
                            </p>
                        </div>
                    </div>

                    <div class="group cursor-pointer shadow-xl p-6 border-2 border-black
                      bg-black text-center rounded-md text-white
                       hover:border-primary">
                        <span class="">
                            <i class="fa-solid fa-circle-right text-5xl pb-4"></i>

                        </span>
                        <h4 class="font-semibold text-2xl my-4">Mission</h4>

                        <div class="space-y-1 text-black mb-8 ">
                            <p class="text-white text-base tracking-wide">
                                To empower micro-entrepreneurs and low-income earners with financial services through
                                passionate people and advanced technology.
                            </p>

                        </div>

                    </div>

                    <div class="shadow-xl p-6 cursor-pointer border-2 border-gray-100 bg-white text-center rounded-md hover:border-primary">
                        <span class="">
                            <i class="fa-solid fa-coins text-5xl pb-4"></i>
                        </span>
                        <h4 class="font-semibold text-2xl my-4">Core Values</h4>

                        <div class="space-y-1 text-black mb-8">
                            <p>
                                To be the market leader in the provision of microfinance and related financial services in
                                Nigeria's sub-financial sector.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
