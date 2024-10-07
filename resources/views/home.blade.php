@extends('layouts.app')


@section('main')
    {{-- HERO --}}

    <section class="bg-white">
        <div class="mx-6 md:mx-8 lg:mx-24 pb-10 pt-28 md:pb-24 md:pt-44">

            <div class="swiper mySwiperHero">

                <div class="swiper-wrapper">
                    <div class="swiper-slide">

                        <div class="grid grid-cols-1 md:grid-cols-2 justify-center items-center">
                            <div class="space-y-6">
                                <h1
                                    class="text-black text-5xl md:text-6xl lg:text-7xl font-semibold gap-6 tracking-tighter leading-tigh">
                                    <span class="text-primary">Empowering</span> Your
                                    Financial
                                    Future
                                </h1>
                                <p class="text-[#333333] font-light text-sm md:text-md">At Asset Micro-finance, we provide
                                    accessible,
                                    secure, and
                                    tailored financial
                                    solutions to help you build a brighter future. Whether you're saving, loan, investing,
                                    or growing
                                    your
                                    business, we're here to support your journey every step of the way.
                                </p>
                                <button
                                    class="bg-primary font-semibold py-3 px-12 rounded-full text-white border-2 border-primary
                                 hover:bg-white hover:text-black hover:border-black transition-all duration-200">Get
                                    Start
                                </button>
                            </div>

                            <div>
                                <img class="" src="{{ asset('asset/images/hero3.png') }}" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="grid grid-cols-1 md:grid-cols-2 justify-center items-center">
                            <div class="space-y-6">
                                <h1
                                    class="text-black text-5xl md:text-6xl lg:text-7xl font-semibold gap-6 tracking-tighter leading-tigh">
                                    <span class="text-primary">Empowering</span> Your
                                    Financial
                                    Future
                                </h1>
                                <p class="text-[#333333] font-light text-sm md:text-md">At Asset Micro-finance, we provide
                                    accessible,
                                    secure, and
                                    tailored financial
                                    solutions to help you build a brighter future. Whether you're saving, loan, investing,
                                    or growing
                                    your
                                    business, we're here to support your journey every step of the way.
                                </p>
                                <button
                                    class="bg-primary font-semibold py-3 px-12 rounded-full text-white border-2 border-primary
                                 hover:bg-white hover:text-black hover:border-black transition-all duration-200">Get
                                    Start
                                </button>
                            </div>

                            <div>
                                <img class="" src="{{ asset('asset/images/hero3.png') }}" alt="">
                            </div>
                        </div>

                    </div>
                </div>

                <div class="swiper-pagination hidden lg:block"></div>

            </div>

        </div>
    </section>

    {{-- <section class="pt-28 md:pt-32 py-0 md:py-12 lg:py-0 lg:pt-24">

        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="mx-5 md:mx-8 lg:mx-24 grid grid-cols-1 md:grid-cols-2 items-center">
                        <div class="space-y-6">
                            <h1
                                class="text-black text-5xl md:text-6xl lg:text-7xl font-semibold gap-6 tracking-tighter leading-tigh">
                                Empowering Your
                                Financial
                                Future</h1>
                            <p class="text-[#333333] font-light text-sm md:text-md">At Asset Micro-finance, we provide
                                accessible,
                                secure, and
                                tailored financial
                                solutions to help you build a brighter future. Whether you're saving, loan, investing,
                                or growing
                                your
                                business, we're here to support your journey every step of the way.
                            </p>
                            <button
                                class="bg-primary font-semibold py-3 px-12 rounded-full text-white border-2 border-primary
                                 hover:bg-white hover:text-black hover:border-black transition-all duration-200">Get
                                Start
                            </button>
                        </div>

                        <div>
                            <img class="" src="{{ asset('asset/images/hero3.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section> --}}



    {{-- Our Partners --}}

    {{-- <section class="bg-black">
        <div class="mx-6 md:mx-8 lg:mx-24 py-6">
            <div class="grid grid-cols-4">
                <div class="">
                    <img class="w-16 md:w-40 lg:w-36" src="{{ asset('asset/images/sterling.png') }}" alt="">

                </div>
                <div>
                    <img class="w-16 md:w-40 lg:w-36" src="{{ asset('asset/images/sterling.png') }}" alt="">
                </div>
                <div>
                    <img class="w-16 md:w-40 lg:w-36" src="{{ asset('asset/images/sterling.png') }}" alt="">
                </div>
                <div>
                    <img class="w-16 md:w-40 lg:w-36" src="{{ asset('asset/images/sterling.png') }}" alt="">
                </div>
            </div>
        </div>
    </section> --}}

    <section class="bg-black">
        <div class="mx-6 md:mx-8 lg:mx-24 py-6">



            <div class="swiper mySwiperPartner">

                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="">
                            <img class="w-16 md:w-40 lg:w-36" src="{{ asset('asset/images/sterling.png') }}" alt="">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="">
                            <img class="w-16 md:w-40 lg:w-36" src="{{ asset('asset/images/sterling.png') }}" alt="">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="">
                            <img class="w-16 md:w-40 lg:w-36" src="{{ asset('asset/images/sterling.png') }}" alt="">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="">
                            <img class="w-16 md:w-40 lg:w-36" src="{{ asset('asset/images/sterling.png') }}" alt="">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="">
                            <img class="w-16 md:w-40 lg:w-36" src="{{ asset('asset/images/sterling.png') }}" alt="">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="">
                            <img class="w-16 md:w-40 lg:w-36" src="{{ asset('asset/images/sterling.png') }}" alt="">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="">
                            <img class="w-16 md:w-40 lg:w-36" src="{{ asset('asset/images/sterling.png') }}" alt="">
                        </div>
                    </div>





                </div>
            </div>


        </div>
        </div>
    </section>

    {{-- Our Services --}}
     <x-home.services />


    {{-- POS --}}

    <section class="bg-white">
        <div class="">
            <div class="grid grid-cols-1 lg:grid-cols-2 justify-center items-center">


                <div class="bg-white">
                    <img class="w-fit h-96" src="{{ asset('asset/images/pos.png') }}" alt="">
                </div>


                <div class="bg-black p-6 md:px-8 lg:px-24 py-10 md:py-24 space-y-6 text-white">
                    <h2 class="text-3xl md:text-5xl text-white font-semibold">
                        Our Easy Step For POS
                        registration
                    </h2>

                    <div>
                        <p class="text-xs md:text-sm tracking-wider text-blackTextt">Lorem Ipsum is simply dummy text
                            of
                            the printing and
                            typesetting
                            industry. Lorem Ipsum has been
                            the industry's standard dummy text ever since the 1500s.
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
                                <p class="text-sm md:text-base lg:text-lg text tracking-wide font-light">Lorem, ipsum
                                    dolor.</p>
                            </div>

                            <div class="flex justify-start items-center gap-2 md:gap-4">
                                <span class="bg-white p-1 rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960"
                                        width="20px" fill="#000">
                                        <path d="M389-267 195-460l51-52 143 143 325-324 51 51-376 375Z" />
                                    </svg>
                                </span>
                                <p class="text-sm md:text-base lg:text-lg text tracking-wide font-light">Lorem, ipsum
                                    dolor.</p>
                            </div>

                            <div class="flex justify-start items-center gap-2 md:gap-4">
                                <span class="bg-white p-1 rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960"
                                        width="20px" fill="#000">
                                        <path d="M389-267 195-460l51-52 143 143 325-324 51 51-376 375Z" />
                                    </svg>
                                </span>
                                <p class="text-sm md:text-base lg:text-lg text tracking-wide font-light">Lorem, ipsum
                                    dolor.</p>
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
                                <p class="text-sm md:text-base lg:text-lg text tracking-wide font-light">Lorem, ipsum
                                    dolor.</p>
                            </div>

                            <div class="flex justify-start items-center gap-2 md:gap-4">
                                <span class="bg-white p-1 rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960"
                                        width="20px" fill="#000">
                                        <path d="M389-267 195-460l51-52 143 143 325-324 51 51-376 375Z" />
                                    </svg>
                                </span>
                                <p class="text-sm md:text-base lg:text-lg text tracking-wide font-light">Lorem, ipsum
                                    dolor.</p>
                            </div>

                            <div class="flex justify-start items-center gap-2 md:gap-4">
                                <span class="bg-white p-1 rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960"
                                        width="20px" fill="#000">
                                        <path d="M389-267 195-460l51-52 143 143 325-324 51 51-376 375Z" />
                                    </svg>
                                </span>
                                <p class="text-sm md:text-base lg:text-lg text tracking-wide font-light">Lorem, ipsum
                                    dolor.</p>
                            </div>

                        </div>
                    </div>


                    <div class="pt-6">
                        <button
                            class="bg-white  text-black py-2 px-6 text-sm rounded-full border-2 border-white hover:bg-black hover:text-white transition-all duration-150">Get
                            Started</button>
                    </div>


                </div>


            </div>
        </div>
    </section>


    {{-- Download --}}


    <x-home.download />



    {{-- Loan --}}
    <section class="bg-primary">
        <div class="mx-6 md:mx-8 lg:mx-24 py-10 md:py-24">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 justify-center items-center">

                <div class="space-y-4 md:space-y-8">
                    <h1 class="text-3xl md:text-5xl leading-0 md:leading-loose text-white font-semibold">
                        Explore Our Flexible Loan Products for Every Need
                    </h1>
                    <p class="text-xs md:text-sm tracking-wider text-white">We make access to loans simple and
                        easy. No
                        guarantors, collaterals or long forms. Apply 24/7 and receive funds in your AssetMatrix account
                        instantly. Unlock higher loan amounts and lower interest rates by repaying loans on time.
                    </p>

                    <div class="grid grid-cols-2 gap-y-4 md:gap-y-0">

                        <div class="space-y-4">
                            <div class="flex justify-start items-baseline gap-2">
                                <span><i
                                        class="fa-solid fa-check bg-white text-sm rounded-full p-1 text-black border-2 border-black"></i></span>
                                <p class="text-md md:text-lg text-white tracking-wider">Esusu Loan</p>
                            </div>


                            <div class="flex justify-start items-baseline gap-2">
                                <span><i
                                        class="fa-solid fa-check bg-white text-sm rounded-full p-1 text-black border-2 border-black"></i></span>
                                <p class="text-md md:text-lg text-white tracking-wider">Instant Loan</p>
                            </div>


                            <div class="flex justify-start items-baseline gap-2">
                                <span><i
                                        class="fa-solid fa-check bg-white text-sm rounded-full p-1 text-black border-2 border-black"></i></span>
                                <p class="text-md md:text-lg text-white tracking-wider">Business Loan</p>
                            </div>
                        </div>
                        <div class="space-y-4">
                            <div class="flex justify-start items-baseline gap-2">
                                <span><i
                                        class="fa-solid fa-check bg-white text-sm rounded-full p-1 text-black border-2 border-black"></i></span>
                                <p class="text-md md:text-lg text-white tracking-wider">Salary Advance</p>
                            </div>


                            <div class="flex justify-start items-baseline gap-2">
                                <span><i
                                        class="fa-solid fa-check bg-white text-sm rounded-full p-1 text-black border-2 border-black"></i></span>
                                <p class="text-md md:text-lg text-white tracking-wider">Car Loan</p>
                            </div>


                            <div class="flex justify-start items-baseline gap-2">
                                <span><i
                                        class="fa-solid fa-check bg-white text-sm rounded-full p-1 text-black border-2 border-black"></i></span>
                                <p class="text-md md:text-lg text-white tracking-wider">School Loan</p>
                            </div>
                        </div>

                    </div>

                    <button
                        class="bg-white mt-12 font-semibold py-2 px-10 rounded-full text-black border-2 border-black
                                 hover:bg-white hover:text-black hover:border-black transition-all duration-200">Get
                        Start
                    </button>
                </div>

                <div class="bg-white rounded-lg">
                    <img src="{{ asset('asset/images/loan.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>



    {{-- Customer --}}

    <x-home.customer />


    {{-- Regulated  --}}

        <x-home.regulation />



    {{-- Subscribe --}}


    <section class="bg-white"
        style="background-image: url('asset/images/cbn.jpg'); background-size: cover; background-position: center;">
        <div class="mx-6 md:mx-8 lg:mx-24 py-10 md:py-24 bg-white bg-opacity-75">
            <div class="space-y-12">
                <h2 class="text-3xl text-center md:text-5xl text-black font-semibold">
                    <span class="text-primary">Subscribe </span> to the Latest Updates
                </h2>

                <div class="flex justify-center items-center gap-2">
                    <div class="flex-grow max-w-sm md:max-w-md lg:max-w-lg">
                        <input type="text" placeholder="Enter Your Email"
                            class="bg-white py-4 px-4 w-full border-2 border-primary focus:outline-none rounded-tl-full rounded-bl-full placeholder:text-xs">
                    </div>
                    <button
                        class="bg-primary py-4 px-6 text-white border-2 rounded-tr-full rounded-br-full whitespace-nowrap border-transparent hover:bg-white hover:border-primary hover:text-primary">
                        Subscribe
                    </button>
                </div>
            </div>
        </div>
    </section>
@endsection
