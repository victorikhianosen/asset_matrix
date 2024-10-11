@extends('layouts.app')


@section('main')
    {{-- HERO --}}


    <x-home.hero />

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

    <x-home.partner />

    {{-- Our Services --}}
     <x-home.services />


    {{-- POS --}}

    <x-home.pos />



    {{-- Download --}}


    <x-home.download />



    {{-- Loan --}}

    <x-home.loan />



    {{-- Customer --}}

    <x-home.customer />


    {{-- Regulated  --}}

        <x-home.regulation />



    {{-- Subscribe --}}

    <x.home.subsribe />



@endsection
