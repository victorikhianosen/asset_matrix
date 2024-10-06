@extends('layouts.app')


@section('main')
    <section class="bg-white">
        <div class="mx-6 md:mx-8 lg:mx-24 pb-1 pt-28 md:pb-24 md:pt-44">
            <div class="">
                <h1
                    class="text-black text-center text-5xl md:text-6xl lg:text-7xl font-semibold gap-6 tracking-tighter leading-tight">
                    Loan</h1>
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
                    <h2 class="text-3xl md:text-5xl text-black font-semibold"><span class="text-primary">Quick and </span>
                        Reliable Loan Options for Your Needs
                    </h2>
                    <div class="space-y-4">
                        <p class="text-xs md:text-sm tracking-wider text-black">
                            Discover our diverse loan products designed to meet the financial needs of businesses and
                            individuals alike. Our Esusu Loan supports micro-businesses, entrepreneurs, traders, and
                            individuals, offering a simple application process with no hidden charges. We believe in
                            empowering your business without the stress of complicated repayment structures. For business
                            owners and SMEs, our Business Loan provides quick, transparent access to funds without needing
                            to save with us first
                        </p>

                        <p class="text-xs md:text-sm tracking-wider text-black">

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
        </div>
    </section>

    {{-- 
    <section class="bg-white">
        <div class="mx-6 md:mx-8 lg:mx-24 py-10 md:py-24">
            <div class="">

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">

                    <div class="shadow-xl p-6 border-2 border-gray-100 bg-white text-center rounded-md">
                        <span class="">
                            <i class="fa-solid fa-piggy-bank text-5xl pb-4"></i>
                        </span>
                        <h4 class="font-semibold text-4xl my-4">Esusu Loan</h4>

                        <div class="space-y-1 text-black mb-8">
                            <p class="text-base tracking-wide">
                                Our Esusu Loan offers simple, quick funding for micro-businesses and entrepreneurs, with no
                                hidden charges or fees.
                            </p>
                        </div>
                    </div>

                    <div class="shadow-xl p-6 border-2 border-black bg-black text-center rounded-md text-white">
                        <span class="">

                            <i class="fa-solid fa-business-time text-5xl pb-4"></i>
                        </span>
                        <h4 class="font-semibold text-4xl my-4">Business Loan</h4>

                        <div class="space-y-1 text-black mb-8 ">
                            <p class="text-white text-base tracking-wide">
                                Our Business Loan provides fast, transparent access to funds for entrepreneurs and SMEs,
                                helping your business grow efficiently.
                            </p>

                        </div>

                    </div>

                    <div class="shadow-xl p-6 border-2 border-gray-100 bg-white text-center rounded-md">
                        <span class="">
                            <i class="fa-solid fa-truck-fast text-5xl pb-"></i>
                        </span>
                        <h4 class="font-semibold text-4xl my-4">Instant Cash Loan</h4>

                        <div class="space-y-1 text-black mb-8">
                            <p>
                                Get urgent funds within 24 hours with our Instant Cash Loan—apply online and withdraw
                                quickly after approval.


                            </p>
                        </div>
                    </div>



                    <div class="shadow-xl p-6 border-2 border-black bg-black text-center rounded-md text-white">
                        <span class="">
                            <i class="fa-solid fa-helmet-safety text-5xl pb-4"></i>


                        </span>
                        <h4 class="font-semibold text-4xl my-4">Salary Advance</h4>

                        <div class="space-y-1 text-black mb-8 ">
                            <p class="text-white text-base tracking-wide">
                                Access quick cash within 24 hours with our Salary Advance, tailored for salaried individuals
                                to meet urgent needs.

                            </p>

                        </div>

                    </div>


                </div>
            </div>
        </div>
    </section> --}}








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
                                <h4 class="font-semibold text-4xl my-4">Esusu Loan</h4>
                                <div class="space-y-1 text-black mb-8">
                                    <p class="text-base tracking-wide">
                                        Our Esusu Loan provides quick, easy funding for micro-businesses and entrepreneurs,
                                        with no hidden fees or charges.

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
                                <h4 class="font-semibold text-4xl my-4">Business Loan</h4>
                                <div class="space-y-1 text-black mb-8">
                                    <p class="text-white text-base tracking-wide">
                                        Our Business Loan provides fast, transparent access to funds for entrepreneurs and
                                        SMEs, helping your business grow efficiently.
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
                                <h4 class="font-semibold text-4xl my-4">Instant Cash Loan</h4>
                                <div class="space-y-1 text-black mb-8">
                                    <p>
                                        Get urgent funds in 24 hours with our Instant Cash Loan—apply online and receive
                                        your money quickly after approval. quickly after approval. quickly after approval.
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
