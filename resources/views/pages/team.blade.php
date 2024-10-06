@extends('layouts.app')


@section('main')
    <section class="bg-white">
        <div class="mx-6 md:mx-8 lg:mx-24 pb-1 pt-28 md:pb-24 md:pt-44">
            <div class="">
                <h1
                    class="text-black text-center text-5xl md:text-6xl lg:text-7xl font-semibold gap-6 tracking-tighter leading-tight">
                    Our Team</h1>
            </div>
        </div>
    </section>


    <section class="bg-white">
        <div class="mx-6 md:mx-8 lg:mx-24 py-10 md:py-24">

            <div class="space-y-16">


                <div class="w-80 mx-auto shadow-lg rounded-lg overflow-hidden">
                    <div class="text-center">
                        <img class="w-full h-80 object-cover" src="{{ asset('asset/images/ceo.jpg') }}" alt="CEO Image">
                        <p class="mt-4 text-lg font-semibold">Tope Oduseso</p>
                        <p class="text-gray-600">Chairman</p>
                    </div>
                </div>



                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="text-center shadow-lg p-6 rounded-lg">
                        <img class="w-full h-80 object-cover rounded-lg" src="{{ asset('asset/images/ceo.jpg') }}"
                            alt="John Does">
                        <p class="mt-4 text-lg font-semibold text-gray-800">John Does</p>
                        <p class="text-gray-600">CEO</p>
                    </div>
                    <div class="text-center shadow-lg p-6 rounded-lg">
                        <img class="w-full h-80 object-cover rounded-lg" src="{{ asset('asset/images/ceo.jpg') }}"
                            alt="John Does">
                        <p class="mt-4 text-lg font-semibold text-gray-800">John Does</p>
                        <p class="text-gray-600">CEO</p>
                    </div>
                    <div class="text-center shadow-lg p-6 rounded-lg">
                        <img class="w-full h-80 object-cover rounded-lg" src="{{ asset('asset/images/ceo.jpg') }}"
                            alt="John Does">
                        <p class="mt-4 text-lg font-semibold text-gray-800">John Does</p>
                        <p class="text-gray-600">CEO</p>
                    </div>

                    <div class="text-center shadow-lg p-6 rounded-lg">
                        <img class="w-full h-80 object-cover rounded-lg" src="{{ asset('asset/images/ceo.jpg') }}"
                            alt="John Does">
                        <p class="mt-4 text-lg font-semibold text-gray-800">John Does</p>
                        <p class="text-gray-600">CEO</p>
                    </div>

                    <div class="text-center shadow-lg p-6 rounded-lg">
                        <img class="w-full h-80 object-cover rounded-lg" src="{{ asset('asset/images/ceo.jpg') }}"
                            alt="John Does">
                        <p class="mt-4 text-lg font-semibold text-gray-800">John Does</p>
                        <p class="text-gray-600">CEO</p>
                    </div>

                    <div class="text-center shadow-lg p-6 rounded-lg">
                        <img class="w-full h-80 object-cover rounded-lg" src="{{ asset('asset/images/ceo.jpg') }}"
                            alt="John Does">
                        <p class="mt-4 text-lg font-semibold text-gray-800">John Does</p>
                        <p class="text-gray-600">CEO</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
