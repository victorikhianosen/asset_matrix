@extends('layouts.app')


@section('main')
    <section class="bg-primary">
        <div class="mx-6 md:mx-8 lg:mx-24 pb-10 pt-24 md:pb-24 md:pt-30">

            <div class="swiper mySwiperHero">

                <div class="swiper-wrapper">
                    <div class="swiper-slide">

                        <div class="grid grid-cols-1 md:grid-cols-2 justify-center items-center">
                            <div class="space-y-6">
                                <h1
                                    class="text-white text-5xl md:text-6xl lg:text-7xl font-semibold gap-6 tracking-tighter leading-tigh">

                                    Banking @ ease...

                                </h1>
                                <p class="text-[#333333] font-light text-sm md:text-md" align="justify">At Asset
                                    Micro-finance, we
                                    Experience the freedom of managing your finances from anywhere with our all-in-one
                                    Mobile Banking App. Whether you need to check your balance, transfer funds, or pay
                                    bills, our app brings the bank to you — no matter where you are.


                                </p>
                                <div class="grid grid-cols-2 justify-center items-center gap-6 w-full lg:w-9/12 pt-8">

                                    <span>
                                        <a href="{{ url('https://apps.apple.com/us/app/cashmatrix/id6470770885') }}"
                                            target="_blink">
                                            <div
                                                class="group flex justify-center border-2 border-black items-center gap-2 bg-black py-2
                                     px-2 rounded-full text-white hover:bg-white">
                                                <div>
                                                    <i
                                                        class="fa-brands fa-apple text-white group-hover:text-black text-md md:text-2xl"></i>
                                                </div>
                                                <div>
                                                    <p
                                                        class="text-[8px] md:text-[10px] text-whiteText group-hover:text-black font-light tracking-wide">
                                                        Downloadon on the</p>
                                                    <h4 class="group-hover:text-black text-sm md:text-md">App Store</h4>
                                                </div>
                                            </div>
                                        </a>
                                    </span>

                                    <span>
                                        <a href="{{ url('https://play.google.com/store/apps/details?id=com.assetcashmatrix.mfb&hl=en') }}"
                                            target="_blink">
                                            <div
                                                class="group flex justify-center items-center gap-2 border-2 border-black
                                      bg-white py-2 px-2 rounded-full text-white hover:bg-black">
                                                <div>
                                                    <i
                                                        class="fa-brands fa-google-play text-black text-md group-hover:text-white md:text-2xl"></i>
                                                </div>
                                                <div>
                                                    <p
                                                        class="text-[8px] md:text-[10px] text-[#1a1a1a] group-hover:text-white font-light tracking-wide">
                                                        Downloadon on the</p>
                                                    <h4 class="text-black group-hover:text-white text-sm md:text-md">Google
                                                        Play</h4>
                                                </div>
                                            </div>
                                        </a>
                                    </span>

                                </div>
                            </div>

                            <div>
                                <img class="" src="{{ asset('asset/images/loan12.png') }}" alt="">
                            </div>
                        </div>
                    </div>


                </div>


            </div>

        </div>
    </section>


    <section id="about" class="about bg-whiteBg section py-16">

        <div class="container mx-auto" data-aos="fade-up" data-aos-delay="100">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">


                {{-- First DIV --}}
                <div class="col-xl-5 content px-6 lg:px-0">


                    <h2 class="font-bold text-2xl md:text-4xl mt-4">
                        Experience Effortless Banking Anywhere

                    </h2>
                    <p class="mt-4" align="justify">
                        Managing your finances has never been easier. Our app offers a seamless banking experience with
                        intuitive features and top-notch security. Whether you're checking balances or making transfers,
                        we've got you covered—no hassle, just results.


                    </p>

                    <div class="mt-12">
                        <a href="{{ url('https://cashmatrix.ng/') }}" target="_blank"
                            class="bg-primary py-3 px-6 text-white border-2 border-primary hover:bg-white hover:text-primary rounded-full transition-all duration-300">
                            <span>Get started</span><i class="bi bi-arrow-right ml-2 text-lg"></i>
                        </a>
                    </div>

                </div>

                {{-- second DIV --}}
                <div class="col-xl-7">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 icon-boxes">

                        <div class="col-md-6 bg-white" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon-box bg-white shadow-lg rounded-lg transition-all duration-300">
                                <i
                                    class="fa-solid fa-money-bill-transfer text-red-500 w-20 h-20 rounded-full flex items-center justify-center text-4xl mb-6">
                                </i>

                                <h3 class="font-bold text-lg mb-2">Funds Transfer</h3>
                                <p class="mb-0">
                                    Easily send and receive money instantly, securely, and anytime with our app.

                                </p>
                            </div>
                        </div>

                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                            <div class="icon-box p-10 shadow-lg rounded-lg transition-all duration-300">

                                <i
                                    class="fa-solid fa-sd-card w-20 h-20  text-primary rounded-full flex items-center justify-center text-4xl mb-6">
                                </i>

                                <h3 class="font-bold text-lg mb-2">Airtime Purchase</h3>
                                <p class="mb-0">
                                    Quickly recharge your mobile with just a few taps, anytime, anywhere, securely.

                                </p>
                            </div>
                        </div>

                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                            <div
                                class="icon-box  p-10 shadow-lg rounded-lg transition-all duration-300">
                                <i
                                    class="fa-solid fa-database text-primary w-20 h-20 rounded-full flex items-center justify-center text-4xl mb-6">
                                </i>
                                <h3 class="font-bold text-lg mb-2">Data Purchase</h3>
                                <p class="mb-0">

                                    Easily buy data bundles in seconds, ensuring you're always connected on the go.



                                </p>
                            </div>
                        </div>

                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                            <div class="icon-box p-10 shadow-lg rounded-lg transition-all duration-300">


                                <!-- Default image (visible initially, hidden on hover) -->
                                <img class="bg-[#FCE7D2] mb-6 p-4 rounded-full w-20 hover:bg-white transition-all duration-200"
                                    src="{{ asset('asset/images/electricity.png') }}" alt="">

                                <!-- Hover image (hidden initially, shown on hover) -->
                                {{-- <img class="mb-6 p-4 w-20 hidden hover:block transition-all duration-200"
                                    src="{{ asset('asset/images/electricityb.png') }}" alt=""> --}}


                                <h3 class="font-bold text-lg mb-2">Electricity Purchase</h3>
                                <p class="mb-0">

                                    Easily buy electricity token anytime, ensuring your power stays on without hassle.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </section>






    <section id="about" class="about bg-[#e8ebee] section py-16">

        <div class="container mx-auto" data-aos="fade-up" data-aos-delay="100">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">


                {{-- First DIV --}}

                <div class="col-xl-7">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 icon-boxes">

                        <div class="col-md-6 bg-white" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon-box bg-white shadow-lg rounded-lg transition-all duration-300">
                                <i
                                    class="fa-brands fa-whatsapp text-red-500 w-20 h-20 rounded-full flex items-center justify-center text-4xl mb-6">
                                </i>

                                <h3 class="font-bold text-lg mb-2">Whatsapp Banking</h3>
                                <p class="mb-0">
                                    Manage your banking needs directly through WhatsApp for instant support and access.

                                </p>
                            </div>
                        </div>

                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                            <div class="icon-box p-10 shadow-lg rounded-lg transition-all duration-300">



                                <i
                                    class="fa-solid fa-mobile-screen-button w-20 h-20 rounded-full flex items-center justify-center text-4xl mb-6"></i>

                                <h3 class="font-bold text-lg mb-2">Internet banking</h3>
                                <p class="mb-0">
                                    Access your accounts, transfer funds, and manage finances anytime with online banking.
                                </p>
                            </div>
                        </div>

                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                            <div
                                class="icon-box bg-[var(--surface-color)] p-10 shadow-lg rounded-lg transition-all duration-300">
                                <i
                                    class="fa-solid fa-mobile w-20 h-20 rounded-full flex items-center justify-center text-4xl mb-6">
                                </i>
                                <h3 class="font-bold text-lg mb-2">Mobile banking

                                </h3>
                                <p class="mb-0">

                                    Manage your finances on the go with our secure and user-friendly mobile banking app.

                                </p>
                            </div>
                        </div>

                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                            <div class="icon-box p-10 shadow-lg rounded-lg transition-all duration-300">


                                <i
                                    class="fa-solid fa-briefcase  w-20 h-20 rounded-full flex items-center justify-center text-4xl mb-6"></i>
                                <h3 class="font-bold text-lg mb-2">Investment</h3>
                                <p class="mb-0">

                                    Grow your wealth effortlessly with secure investment options tailored to your needs.

                                </p>
                            </div>
                        </div>

                    </div>
                </div>




                {{-- second DIV --}}
                <div class="col-xl-5 content px-6 lg:px-0">


                    <h2 class="font-bold text-2xl md:text-4xl mt-4">
                        Experience Instant Banking at Your Fingertips


                    </h2>
                    <p class="mt-4" align="justify">
                        Take control of your finances with our comprehensive internet banking platform. Enjoy a
                        user-friendly interface that makes managing your accounts effortless. From checking your balance to
                        paying bills and making transfers, every feature is designed for your convenience. With
                        state-of-the-art security protocols, you can bank with confidence, knowing your information is
                        protected. Experience banking that adapts to your lifestyle!




                    </p>
                    {{-- <a href="#"
                        class="read-more bg-[var(--accent-color)] text-[var(--contrast-color)] font-medium text-base tracking-wide px-6 py-3 rounded-lg inline-flex items-center justify-center mt-6 transition-all duration-300">
                        <span>Read More</span><i class="bi bi-arrow-right ml-2 text-lg"></i>
                    </a> --}}
                    <div class="mt-12">
                        <a href="{{ url('https://cashmatrix.app/') }}" target="_blank"
                            class="bg-primary py-3 px-6 text-white border-2 border-primary hover:bg-white hover:text-primary rounded-full transition-all duration-300">
                            <span>Get started</span><i class="bi bi-arrow-right ml-2 text-lg"></i>
                        </a>
                    </div>

                </div>

            </div>
        </div>

    </section>
@endsection
