@extends('layouts.app')


@section('main')
    {{-- HERO --}}

    <section class="bg-white">
        <div class="mx-6 md:mx-8 lg:mx-24 pb-10 pt-28 md:pb-24 md:pt-44">
            <div class="grid grid-cols-1 md:grid-cols-2 justify-center items-center">
                <div class="space-y-6">
                    <h1
                        class="text-black text-5xl md:text-6xl lg:text-7xl font-semibold gap-6 tracking-tighter leading-tight">
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

    <section class="bg-black">
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
    </section>

    {{-- Our Services --}}

    <section class="bg-white">
        <div class="mx-6 md:mx-8 lg:mx-24 py-10 md:py-24">
            <div class="">
                <h1 class="text-center font-semibold text-2xl mb-8">Our Services</h1>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                    <div class="shadow-xl p-6 border-2 border-gray-100 bg-white rounded-md">
                        <span class="">
                            <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 -960 960 960" width="48px"
                                fill="#ee8520">
                                <path
                                    d="M480-120q-42 0-71-29t-29-71q0-42 29-71t71-29q42 0 71 29t29 71q0 42-29 71t-71 29ZM254-346l-84-86q59-59 138.5-93.5T480-560q92 0 171.5 35T790-430l-84 84q-44-44-102-69t-124-25q-66 0-124 25t-102 69ZM84-516 0-600q92-94 215-147t265-53q142 0 265 53t215 147l-84 84q-77-77-178.5-120.5T480-680q-116 0-217.5 43.5T84-516Z" />
                            </svg>
                        </span>
                        <h4 class="font-semibold text-2xl my-4">Internet Banking</h4>

                        <div class="space-y-1 text-black mb-8">
                            <div class="flex gap-1">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960"
                                        width="20px" fill="#5f6368">
                                        <path
                                            d="M293-288 100-482l50-50 143 142 51 51-51 51Zm204 0L303-482l51-51 143 143 324-324 51 51-375 375Zm0-203-51-51 172-172 51 51-172 172Z" />
                                    </svg>
                                </span>
                                <p>Instant Payment </p>
                            </div>
                            <div class="flex gap-1">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960"
                                        width="20px" fill="#5f6368">
                                        <path
                                            d="M293-288 100-482l50-50 143 142 51 51-51 51Zm204 0L303-482l51-51 143 143 324-324 51 51-375 375Zm0-203-51-51 172-172 51 51-172 172Z" />
                                    </svg>
                                </span>
                                <p>Instant Payment </p>
                            </div>
                            <div class="flex gap-1">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960"
                                        width="20px" fill="#5f6368">
                                        <path
                                            d="M293-288 100-482l50-50 143 142 51 51-51 51Zm204 0L303-482l51-51 143 143 324-324 51 51-375 375Zm0-203-51-51 172-172 51 51-172 172Z" />
                                    </svg>
                                </span>
                                <p>Instant Payment </p>
                            </div>
                            <div class="flex gap-1">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960"
                                        width="20px" fill="#5f6368">
                                        <path
                                            d="M293-288 100-482l50-50 143 142 51 51-51 51Zm204 0L303-482l51-51 143 143 324-324 51 51-375 375Zm0-203-51-51 172-172 51 51-172 172Z" />
                                    </svg>
                                </span>
                                <p>Instant Payment </p>
                            </div>
                        </div>
                        <a href="{{ url('https://cashmatrix.app') }}"
                            class="bg-black text-white text-sm py-2 px-6 rounded-full border-2 border-black hover:bg-white hover:text-black transition-all duration-150">Get
                            Started</a>
                    </div>

                    <div class="shadow-xl p-6 border-2 border-black bg-black rounded-md text-white">
                        <span class="">
                            <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 -960 960 960" width="48px"
                                fill="#fff">
                                <path
                                    d="M480-120q-42 0-71-29t-29-71q0-42 29-71t71-29q42 0 71 29t29 71q0 42-29 71t-71 29ZM254-346l-84-86q59-59 138.5-93.5T480-560q92 0 171.5 35T790-430l-84 84q-44-44-102-69t-124-25q-66 0-124 25t-102 69ZM84-516 0-600q92-94 215-147t265-53q142 0 265 53t215 147l-84 84q-77-77-178.5-120.5T480-680q-116 0-217.5 43.5T84-516Z" />
                            </svg>
                        </span>
                        <h4 class="font-semibold text-2xl my-4">Instant Loan</h4>

                        <div class="space-y-1 text-black mb-8">
                            <div class="flex gap-1">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960"
                                        width="20px" fill="#fff">
                                        <path
                                            d="M293-288 100-482l50-50 143 142 51 51-51 51Zm204 0L303-482l51-51 143 143 324-324 51 51-375 375Zm0-203-51-51 172-172 51 51-172 172Z" />
                                    </svg>
                                </span>
                                <p class="text-white">Instant Payment </p>
                            </div>
                            <div class="flex gap-1">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960"
                                        width="20px" fill="#fff">
                                        <path
                                            d="M293-288 100-482l50-50 143 142 51 51-51 51Zm204 0L303-482l51-51 143 143 324-324 51 51-375 375Zm0-203-51-51 172-172 51 51-172 172Z" />
                                    </svg>
                                </span>
                                <p class="text-white">Instant Payment </p>
                            </div>
                            <div class="flex gap-1">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960"
                                        width="20px" fill="#fff">
                                        <path
                                            d="M293-288 100-482l50-50 143 142 51 51-51 51Zm204 0L303-482l51-51 143 143 324-324 51 51-375 375Zm0-203-51-51 172-172 51 51-172 172Z" />
                                    </svg>
                                </span>
                                <p class="text-white">Instant Payment </p>
                            </div>
                            <div class="flex gap-1">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960"
                                        width="20px" fill="#fff">
                                        <path
                                            d="M293-288 100-482l50-50 143 142 51 51-51 51Zm204 0L303-482l51-51 143 143 324-324 51 51-375 375Zm0-203-51-51 172-172 51 51-172 172Z" />
                                    </svg>
                                </span>
                                <p class="text-white">Instant Payment </p>
                            </div>


                        </div>
                        <button
                            class="bg-white text-black py-2 px-6 text-sm rounded-full border-2 border-white hover:bg-black hover:text-white transition-all duration-150">Get
                            Started</button>
                    </div>

                    <div class="shadow-xl p-6 border-2 border-gray-100 bg-white rounded-md">
                        <span class="">
                            <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 -960 960 960"
                                width="48px" fill="#ee8520">
                                <path
                                    d="M480-120q-42 0-71-29t-29-71q0-42 29-71t71-29q42 0 71 29t29 71q0 42-29 71t-71 29ZM254-346l-84-86q59-59 138.5-93.5T480-560q92 0 171.5 35T790-430l-84 84q-44-44-102-69t-124-25q-66 0-124 25t-102 69ZM84-516 0-600q92-94 215-147t265-53q142 0 265 53t215 147l-84 84q-77-77-178.5-120.5T480-680q-116 0-217.5 43.5T84-516Z" />
                            </svg>
                        </span>
                        <h4 class="font-semibold text-2xl my-4">Investment Savings</h4>

                        <div class="space-y-1 text-black mb-8">
                            <div class="flex gap-1">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960"
                                        width="20px" fill="#5f6368">
                                        <path
                                            d="M293-288 100-482l50-50 143 142 51 51-51 51Zm204 0L303-482l51-51 143 143 324-324 51 51-375 375Zm0-203-51-51 172-172 51 51-172 172Z" />
                                    </svg>
                                </span>
                                <p>Instant Payment </p>
                            </div>
                            <div class="flex gap-1">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960"
                                        width="20px" fill="#5f6368">
                                        <path
                                            d="M293-288 100-482l50-50 143 142 51 51-51 51Zm204 0L303-482l51-51 143 143 324-324 51 51-375 375Zm0-203-51-51 172-172 51 51-172 172Z" />
                                    </svg>
                                </span>
                                <p>Instant Payment </p>
                            </div>
                            <div class="flex gap-1">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960"
                                        width="20px" fill="#5f6368">
                                        <path
                                            d="M293-288 100-482l50-50 143 142 51 51-51 51Zm204 0L303-482l51-51 143 143 324-324 51 51-375 375Zm0-203-51-51 172-172 51 51-172 172Z" />
                                    </svg>
                                </span>
                                <p>Instant Payment </p>
                            </div>
                            <div class="flex gap-1">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960"
                                        width="20px" fill="#5f6368">
                                        <path
                                            d="M293-288 100-482l50-50 143 142 51 51-51 51Zm204 0L303-482l51-51 143 143 324-324 51 51-375 375Zm0-203-51-51 172-172 51 51-172 172Z" />
                                    </svg>
                                </span>
                                <p>Instant Payment </p>
                            </div>


                        </div>
                        <button
                            class="bg-black text-white text-sm py-2 px-6 rounded-full border-2 border-black hover:bg-white hover:text-black transition-all duration-150">Get
                            Started</button>
                    </div>

                </div>
            </div>
        </div>
    </section>

    {{-- POS --}}

    <section class="bg-white">
        <div class="">
            <div class="grid grid-cols-1 lg:grid-cols-2 justify-center items-center">

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

                <div class="bg-white">
                    <img class="w-fit h-96" src="{{ asset('asset/images/pos.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>


    {{-- Download --}}

    <section class="bg-white">
        <div class="mx-6 md:mx-8 lg:mx-24 py-10 md:py-24">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 justify-center items-center">
                <div>
                    <img src="{{ asset('asset/images/payment.png') }}" alt="">
                </div>


                <div class="space-y-6">
                    <h4 class="text-3xl md:text-5xl text-black font-semibold"><span class="text-primary">CashMatrix</span>
                        Is The Fastest Mobile Banking Solution</h4>
                    <p class="text-xs md:text-sm tracking-wider text-blackText">Lorem ipsum dolor sit, amet consectetur
                        adipisicing elit. Sunt libero
                        autem rerum nesciunt
                        quidem
                        recusandae non dolor expedita facere dolore iure aliquam, quos nobis? Id numquam explicabo
                        molestias, labore debitis recusandae ex incidunt quia nisi aperiam quasi, sequi voluptate
                        facilis eveniet exercitationem, et repudiandae voluptatem similique omnis assumenda autem?
                        Culpa.
                    </p>


                    <div class="grid grid-rows-1 md:grid-cols-2 justify-center items-center gap-6">


                        <a href=""
                            class="group flex justify-start gap-3 items-center border-2 border-black bg-black rounded-full py-2 px-7 text-white hover:bg-white hover:text-black">

                            <div>
                                <i class="fa-brands fa-apple text-md md:text-4xl"></i>
                            </div>
                            <div>
                                <p class="text-xs text-whiteText group-hover:text-black font-light tracking-wide">
                                    Downloadon on the</p>
                                <h4 class="group-hover:text-black text-md md:text-2xl">App Store</h4>
                            </div>
                        </a>

                        <a href=""
                            class="group flex justify-start gap-3 items-center border-2 border-black bg-white rounded-full py-2 px-7 text-black hover:bg-black hover:text-white">

                            <div>
                                <i class="fa-brands fa-google-play text-md md:text-4xl"></i>
                            </div>
                            <div>
                                <p class="text-xs text-blackText group-hover:text-white font-light tracking-wide">
                                    Downloadon on the</p>
                                <h4 class="group-hover:text-white text-md md:text-2xl">Play Store</h4>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>



    {{-- Loan --}}
    <section class="bg-lightBg">
        <div class="mx-6 md:mx-8 lg:mx-24 py-10 md:py-24">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 justify-center items-center">

                <div class="space-y-4 md:space-y-8">
                    <h1 class="text-3xl md:text-5xl leading-loose text-black font-semibold">
                        <span class="text-primary">Explore Our</span> Flexible Loan Products for Every Need
                    </h1>
                    <p class="text-xs md:text-sm tracking-wider text-blackText">We make access to loans simple and
                        easy. No
                        guarantors, collaterals or long forms. Apply 24/7 and receive funds in your AssetMatrix account
                        instantly. Unlock higher loan amounts and lower interest rates by repaying loans on time.
                    </p>

                    <div class="grid grid-cols-2 gap-y-4 md:gap-y-0">

                        <div class="space-y-4">
                            <div class="flex justify-start items-baseline gap-2">
                                <span><i
                                        class="fa-solid fa-check bg-white text-sm rounded-full p-1 text-black border-2 border-black"></i></span>
                                <p class="text-md md:text-lg text-black tracking-wider">Esusu Loan</p>
                            </div>


                            <div class="flex justify-start items-baseline gap-2">
                                <span><i
                                        class="fa-solid fa-check bg-white text-sm rounded-full p-1 text-black border-2 border-black"></i></span>
                                <p class="text-md md:text-lg text-black tracking-wider">Instant Loan</p>
                            </div>


                            <div class="flex justify-start items-baseline gap-2">
                                <span><i
                                        class="fa-solid fa-check bg-white text-sm rounded-full p-1 text-black border-2 border-black"></i></span>
                                <p class="text-md md:text-lg text-black tracking-wider">Business Loan</p>
                            </div>
                        </div>
                        <div class="space-y-4">
                            <div class="flex justify-start items-baseline gap-2">
                                <span><i
                                        class="fa-solid fa-check bg-white text-sm rounded-full p-1 text-black border-2 border-black"></i></span>
                                <p class="text-md md:text-lg text-black tracking-wider">Salary Advance</p>
                            </div>


                            <div class="flex justify-start items-baseline gap-2">
                                <span><i
                                        class="fa-solid fa-check bg-white text-sm rounded-full p-1 text-black border-2 border-black"></i></span>
                                <p class="text-md md:text-lg text-black tracking-wider">Car Loan</p>
                            </div>


                            <div class="flex justify-start items-baseline gap-2">
                                <span><i
                                        class="fa-solid fa-check bg-white text-sm rounded-full p-1 text-black border-2 border-black"></i></span>
                                <p class="text-md md:text-lg text-black tracking-wider">School Loan</p>
                            </div>
                        </div>

                    </div>
                </div>

                <div>
                    <img src="{{ asset('asset/images/loan.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>



    {{-- Customer --}}
    <section>
        <div class="mx-6 md:mx-8 lg:mx-24 py-10 md:py-24">
            <div class="grid grid-cols-1 md:grid-cols-2 justify-center items-center gap-6">
                <div class="space-y-4 md:space-y-8 order-2 md:order-1">
                    <!-- First animated div (scroll-triggered) -->
                    <div id="customer1"
                        class="flex justify-center items-center gap-x-2 bg-[#252525] text-white p-4 md:p-6 rounded-full w-full md:w-9/12 ml-0 md:ml-12 opacity-0 transition-opacity duration-500">
                        <div class="w-8 h-8 md:w-24 md:h-24">
                            <img class="rounded-full" src="{{ asset('asset/images/customer1.jpg') }}" alt="">
                        </div>
                        <div>
                            <h2 class="text-sm md:text-md font-semibold tracking-wider">John Matthews</h2>
                            <p class="text-xs md:text-sm font-extralight">Web Developer</p>
                            <p class="text-xs whiteText font-extralight tracking-wide">
                                Lorem ipsum dolor sit Obcaecati quia nostrum, cupiditate necessitatibus
                            </p>
                        </div>
                    </div>

                    <!-- Second animated div (scroll-triggered) -->
                    <div id="customer2"
                        class="flex justify-center items-center gap-x-2 bg-[#3d3d3d] text-white p-4 md:p-6 rounded-full w-full md:w-9/12 opacity-0 transition-opacity duration-500">
                        <div class="w-8 h-8 md:w-24 md:h-24">
                            <img class="rounded-full" src="{{ asset('asset/images/customer1.jpg') }}" alt="">
                        </div>
                        <div>
                            <h2 class="text-sm md:text-md font-semibold tracking-wider">John Matthews</h2>
                            <p class="text-xs md:text-sm font-extralight">Web Developer</p>
                            <p class="text-xs whiteText font-extralight tracking-wide">
                                Lorem ipsum dolor sit Obcaecati quia nostrum, cupiditate necessitatibus
                            </p>
                        </div>
                    </div>

                    <!-- Third animated div (scroll-triggered) -->
                    <div id="customer3"
                        class="flex justify-center items-center gap-x-2 bg-[#252525] text-white p-4 md:p-6 rounded-full w-full md:w-9/12 ml-0 md:ml-12 opacity-0 transition-opacity duration-500">
                        <div class="w-8 h-8 md:w-24 md:h-24">
                            <img class="rounded-full" src="{{ asset('asset/images/customer1.jpg') }}" alt="">
                        </div>
                        <div>
                            <h2 class="text-sm md:text-md font-semibold tracking-wider">John Matthews</h2>
                            <p class="text-xs md:text-sm font-extralight">Web Developer</p>
                            <p class="text-xs whiteText font-extralight tracking-wide">
                                Lorem ipsum dolor sit Obcaecati quia nostrum, cupiditate necessitatibus
                            </p>
                        </div>
                    </div>
                </div>

                <div class="space-y-4 md:space-y-8 order-1 md:order-2">
                    <h2 class="text-3xl md:text-5xl text-black font-semibold"> <span class="text-primary">What Our
                            Valued</span> Customers Are Saying

                    </h2>
                    <p class="text-xs md:text-sm tracking-wider text-blackText">
                        We make access to loans simple and easy. No guarantors, collaterals or long forms. Apply 24/7
                        and receive
                        funds in your AssetMatrix account instantly. Unlock higher loan amounts and lower interest rates
                        by
                        repaying
                        loans on time.
                    </p>

                    <div class="flex justify-between items-center">
                        <div>
                            <span class="text-lg md:text-4xl font-bold">200K+</span>
                            <h2 class="text-xs text-black font-noraml md:text-sm">Satisfied Customers</h2>
                        </div>
                        <div>
                            <span class="text-lg md:text-4xl font-bold">200K+</span>
                            <h2 class="text-xs text-black font-noraml md:text-sm">Clients Rating</h2>
                        </div>
                        <div>
                            <span class="text-lg md:text-4xl font-bold">200K+</span>
                            <h2 class="text-xs text-black font-noraml md:text-sm">App Download</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- Regulated  --}}
    <section class="bg-white">
        <div class="mx-6 md:mx-8 lg:mx-24 py-10 md:py-24">
            <div class=" space-y-6">
                <h2 class="text-center text-black font-semibold text-2xl mb-8">Regulated by</h2>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 items-center justify-center">

                    <div class="space-y-8">
                        <h2 class="text-3xl md:text-5xl text-black font-semibold"> <span
                                class="text-primary">Safeguarding</span> Your Financial Interests
                        </h2>

                        <div class="space-y-4">
                            <p class="text-xs md:text-sm tracking-wider text-blackText">
                                At AssetMatrix Microfinance Bank, we prioritize your financial security and peace of
                                mind.
                                Our operations are fully regulated by the Central Bank of Nigeria (CBN), ensuring that
                                we
                                comply with all regulatory standards required to provide trustworthy and reliable
                                financial
                                services. Additionally, your deposits are insured by the Nigeria Deposit Insurance
                                Corporation (NDIC), meaning that your savings and investments are protected by the
                                highest
                                national standards.
                            </p>
                            <p class="text-xs md:text-sm tracking-wider text-blackText">
                                With the backing of these esteemed institutions, you can confidently bank with us
                                knowing
                                your financial well-being is our top priority. We are committed to maintaining the
                                highest
                                level of transparency, integrity, and security in all our services.
                            </p>
                            <div class="space-x-4 pt-4">
                                <span>
                                    <i class="fa-solid fa-medal text-primary text-2xl md:text-4xl"></i>
                                </span>
                                <span>
                                    <i class="fa-solid fa-medal text-primary text-2xl md:text-4xl"></i>
                                </span>
                                <span>
                                    <i class="fa-solid fa-medal text-primary text-2xl md:text-4xl"></i>
                                </span>
                                <span>
                                    <i class="fa-solid fa-medal text-primary text-2xl md:text-4xl"></i>
                                </span>
                                <span>
                                    <i class="fa-solid fa-medal text-primary text-2xl md:text-4xl"></i>
                                </span>

                            </div>
                        </div>

                    </div>

                    <div class="flex justify-center items-center gap-6">
                        <div>
                            <img class="w-36 md:42 lg:w-72" src="{{ asset('asset/images/cbn.png') }}" alt="">
                        </div>
                        <div>
                            <img class="w-36 md:42 lg:w-72" src="{{ asset('asset/images/ndic.jpg') }}" alt="">
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>


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
                            class="bg-white py-4 px-4 w-full border-8 border-primary focus:outline-none rounded-tl-full rounded-bl-full placeholder:text-xs">
                    </div>
                    <button
                        class="bg-primary py-4 px-6 text-white border-8 rounded-tr-full rounded-br-full whitespace-nowrap border-transparent hover:bg-white hover:border-primary hover:text-primary">
                        Subscribe
                    </button>
                </div>
            </div>
        </div>
    </section>






@endsection
