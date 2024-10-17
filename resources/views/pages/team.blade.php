@extends('layouts.app')


@section('main')
    <section class="bg-gradient-to-r from-[#ee8520] to-[#ff6f00]">
        <div class="mx-6 md:mx-8 lg:mx-24 pb-1 pt-28 md:pb-10 md:pt-44 border-b-2 border-primary">
            <div class="">
                <h1
                    class="text-white text-star text-5xl md:text-6xl lg:text-7xl font-semibold gap-6 tracking-tighter leading-tight">
                    Our Team</h1>


            </div>
        </div>
    </section>



    <section class="pb-24">


        <div class="font-[sans-serif]">
            <div class="h-60 w-full bg-[#163B50]"></div>

            <div class="max-w-5xl max-md:max-w-xl max-sm:max-w-sm mx-auto -mt-48 px-6">
                <h2 class="text-4xl max-md:text-3xl text-center font-extrabold text-white mb-12">Meet Our Professional Team
                </h2>



                <div class="font-[sans-serif]">


                    <div
                        class="grid md:grid-cols-3 sm:grid-cols-2 gap-8 text-center mt-16 max-w-5xl max-lg:max-w-3xl max-md:max-w-xl mx-auto">
                        <div>
                            <img src="{{ asset('asset/images/ceo.png') }}"
                                class="w-52 h-52 rounded-full inline-block" />

                            <div class="py-4">
                                <h4 class="text-primary text-base font-bold">Tope Oduseso</h4>
                                <p class="text-gray-800 text-xs mt-1">GMD/Chairman</p>

                            </div>
                        </div>

                        <div>
                            <img src="{{ asset('asset/images/md.png') }}" class="w-52 h-52 rounded-full inline-block" />

                            <div class="py-4">
                                <h4 class="text-primary text-base font-bold">Muyiwa Agbogba</h4>
                                <p class="text-gray-800 text-xs mt-1">MD/CEO</p>

                            </div>
                        </div>

                        <div>
                            <img src="{{ asset('asset/images/about22.png') }}"
                                class="w-52 h-52 rounded-full inline-block" />

                            <div class="py-4">
                                <h4 class="text-primary text-base font-bold">Daniel Ochiabuto
                                </h4>
                                <p class="text-gray-800 text-xs mt-1">Internal Control/Compliance</p>

                            
                            </div>
                        </div>
 
                        <div>
                            <img src="{{ asset('asset/images/lawal.png') }}" class="w-52 h-52 rounded-full inline-block" />

                            <div class="py-4">
                                <h4 class="text-primary text-base font-bold">Bolaji Lawal
                                </h4>
                                <p class="text-gray-800 text-xs mt-1">CTO/PM</p>

                            
                            </div>
                        </div>

                        <div>
                            <img src="{{ asset('asset/images/lady.png') }}" class="w-52 h-52 rounded-full inline-block" />

                            <div class="py-4">
                                <h4 class="text-primary text-base font-bold">Peju Alake
                                </h4>
                                <p class="text-gray-800 text-xs mt-1">Financial Controller</p>

                            </div>
                        </div>

                   


                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
