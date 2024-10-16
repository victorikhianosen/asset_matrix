@extends('layouts.app')


@section('main')
    <section class="bg-gradient-to-r from-[#ee8520] to-[#ff6f00]">
        <div class="mx-6 md:mx-8 lg:mx-24 pb-2 pt-28 md:pb-24 md:pt-44">

            <div class="">

                <div class="swiper-wrapper">
                    <div class="swiper-slide">

                        <div class="grid grid-cols-1 gap-8  lg:grid-cols-2 justify-center items-center">
                            <div class="space-y-6">
                                <h1
                                    class="text-white text-5xl md:text-6xl lg:text-7xl font-semibold gap-6 tracking-tighter leading-tigh">
                                    Loan Request
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

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-5 items-center">

            <div class="py-24 pl-6 md:pl-8 lg:pl-24 pr-10 space-y-10 bg-whiteBg">
                <h1 class="text-2xl text-primary">Request Loan Form</h1>

                <div>
                    <form class="w-full" method="POST" action="{{ route('process.loan') }}">
                        @csrf
                        @error('error')
                            <span class="text-xs text-red-600 -pt-8">{{ $message }}</span>
                        @enderror
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block  tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-first-name">
                                    First Name
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border hover:border-primary rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                    name="first_name" value="{{ old('first_name') }}" type="text" placeholder="Jane">
                                @error('first_name')
                                    <span class="text-xs text-red-600 -pt-8">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="w-full md:w-1/2 px-3">
                                <label class="block  tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-last-name">
                                    Last Name
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border hover:border-primary rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white"
                                    name="last_name" value="{{ old('last_name') }}" type="text" placeholder="Doe">
                                @error('last_name')
                                    <span class="text-xs text-red-600 -pt-8">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block  tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-first-name">
                                    Phone Number
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border hover:border-primary rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                    name="phone" value="{{ old('phone') }}" type="text" placeholder="Enter Phone">
                                @error('phone')
                                    <span class="text-xs text-red-600 -pt-8">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="w-full md:w-1/2 px-3">
                                <label class="block  tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-last-name">
                                    Email
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border hover:border-primary rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white"
                                    name="email" value="{{ old('email') }}" type="email" placeholder="Enter Email">
                                @error('email')
                                    <span class="text-xs text-red-600 -pt-8">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>


                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block  tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-first-name">
                                    Purpose
                                </label>
                                <select
                                    class="block appearance-none w-full text-sm bg-gray-200 border border-gray-200 text-gray-600 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    name="purpose">
                                    <option>Select Loan Purpose</option>
                                    <option value="business">Business</option>
                                    <option value="rent">Rent</option>
                                    <option value="shool">school</option>
                                    <option value="health">Health</option>
                                    <option value="others">Others</option>
                                </select>
                                @error('purpose')
                                    <span class="text-xs text-red-600 -pt-8">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="w-full md:w-1/2 px-3">
                                <label class="block  tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-last-name">
                                    Duration
                                </label>
                                <select
                                    class="block appearance-none w-full text-sm bg-gray-200 border border-gray-200 text-gray-600 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    name="duration">
                                    <option>Select Duration</option>
                                    <option value="1">1 Month</option>
                                    <option value="2">2 Month</option>
                                    <option value="3">3 Month</option>
                                    <option value="6">6 Month</option>
                                    <option value="12">12 Months</option>
                                </select>
                                @error('duration')
                                    <span class="text-xs text-red-600 -pt-8">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>


                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full px-3">
                                <label class="block  tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-password">
                                    Amount
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border hover:border-primary rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white "
                                    id="grid-password" value="{{ old('amount') }}" type="text" placeholder="Enter Loan Amount" name="amount">
                                @error('amount')
                                    <span class="text-xs text-red-600 -pt-8">{{ $message }}</span>
                                @enderror
                                {{-- <p class="italic text-sm text-primary">Repayment <strong>#4500.00</strong></p> --}}

                            </div>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full px-3">
                                <label class="block  tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-password">
                                    Address
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border hover:border-primary rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white "
                                    id="grid-password" value="{{ old('address') }}" type="text" placeholder="Enter Street" name="address">
                                @error('address')
                                    <span class="text-xs text-red-600 -pt-8">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-2">
                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                <label class="block  tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                                    City
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border hover:border-primary rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="grid-city" value="{{ old('city') }}" type="text" placeholder="Ikeja" name="city">
                                @error('city')
                                    <span class="text-xs text-red-600 -pt-8">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                <label class="block  tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                                    State
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border hover:border-primary  rounded py-3 px-4 leading-tight focus:outline-none"
                                    id="grid-zip" type="text" placeholder="Lagos" name="state" value="{{ old('state') }}">
                                @error('state')
                                    <span class="text-xs text-red-600 -pt-8">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                <label class="block  tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                                    Country
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border hover:border-primary  rounded py-3 px-4 leading-tight focus:outline-none"
                                    id="grid-zip" type="text" placeholder="Nigeria" name="country" value="{{ old('country') }}">
                                @error('country')
                                    <span class="text-xs text-red-600 -pt-8">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="pt-8 px-3">
                                <button type="submit"
                                    class="bg-primary text-white px-10 text-base py-3 rounded-full border-primary hover:bg-[#be6a1a]">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="bg-white hidden md:block">

                <div class="swiper mySwiperRequestLoan">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="{{ asset('asset/images/lll.png') }}" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('asset/images/loan11.png') }}" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('asset/images/request.png') }}" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('asset/images/loan11.png') }}" />
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </section>
@endsection
