@extends('layouts.app')


@section('main')
    <section class="bg-primary">
        <div class="mx-6 md:mx-8 lg:mx-24 pb-10 pt-28 md:pb-24 md:pt-44">

            <div class="swiper mySwiperHero">

                <div class="swiper-wrapper">
                    <div class="swiper-slide">

                        <div class="grid grid-cols-1 md:grid-cols-2 justify-center items-center">
                            <div class="space-y-6">
                                <h1
                                    class="text-black text-5xl md:text-6xl lg:text-7xl font-semibold gap-6 tracking-tighter leading-tigh">
                                   Internet Banking
                                </h1>
                                <p class="text-[#333333] font-light text-sm md:text-md">At Asset Micro-finance, we
                                    provide
                                    accessible,
                                    secure, and
                                    tailored financial
                                    solutions to help you build a brighter future. Whether you're saving, loan,
                                    investing,
                                    or growing
                                    your
                                    business, we're here to support your journey every step of the way.
                                </p>
                                <div class="grid grid-cols-2 justify-center items-center gap-6 w-full lg:w-9/12 pt-8">

                                    <span>
                                        <a href="">
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
                                        <a href="">
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
                                <img class="" src="{{ asset('asset/images/hero3.png') }}" alt="">
                            </div>
                        </div>
                    </div>


                </div>


            </div>

        </div>
    </section>
    {{-- <section>
        <div class=" bg-primary px-6 md:px-12 lg:px-24 pb-24 pt-40">

            <div class="grid grid-cols-2 items-center">
                <div class=" space-y-6">
                    <h3 class="text-5xl font-semibold text-white">Lorem ipsum dolor sit amet consectetur.</h3>
                    <p class="text-whiteBg text-sm tracking-wider leading-5">Lorem ipsum dolor sit amet consectetur
                        adipisicing elit.
                        Aut
                        dignissimos voluptatem nostrum dolores
                        dolorum pariatur voluptatibus quo illo, vel, et aliquid perspiciatis assumenda ea molestiae,
                        provident
                        ipsa qui ut debitis quae tempore eaque rem nulla? Non accusantium eveniet, saepe at iste a inventore
                        blanditiis quisquam ipsa ea, ipsum sit eligendi.
                    </p>

                    <div class="grid grid-cols-2 justify-center items-center gap-6 w-full lg:w-9/12 pt-8">

                        <span>
                            <a href="">
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
                            <a href="">
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
                                        <h4 class="text-black group-hover:text-white text-sm md:text-md">Google Play</h4>
                                    </div>
                                </div>
                            </a>
                        </span>

                    </div>

                </div>

                <div>
                    <img src="{{ asset('asset/images/hero3.png') }}" alt="">

                </div>

            </div>
        </div>
    </section> --}}


    <section id="about" class="about section py-16">

        <div class="container mx-auto" data-aos="fade-up" data-aos-delay="100">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">


                {{-- First DIV --}}
                <div class="col-xl-5 content">


                    <h2 class="font-bold text-2xl mt-4">
                        Ducimus rerum libero reprehenderit cumque
                    </h2>
                    <p class="mt-4">
                        Ipsa sint sit. Quis ducimus tempore dolores impedit et dolor cumque alias maxime. Enim
                        reiciendis
                        minus et rerum hic non. Dicta quas cum quia maiores iure. Quidem nulla qui assumenda incidunt
                        voluptatem tempora deleniti soluta.
                    </p>
                    <a href="#"
                        class="read-more bg-[var(--accent-color)] text-[var(--contrast-color)] font-medium text-base tracking-wide px-6 py-3 rounded-lg inline-flex items-center justify-center mt-6 transition-all duration-300">
                        <span>Read More</span><i class="bi bi-arrow-right ml-2 text-lg"></i>
                    </a>
                </div>

                {{-- second DIV --}}
                <div class="col-xl-7">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 icon-boxes">

                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon-box shadow-lg rounded-lg transition-all duration-300">

                                <i class="fa-solid fa-sack-dollar"></i>
                                <h3 class="font-bold text-lg mb-2">Eius provident</h3>
                                <p class="mb-0">Magni repellendus vel ullam hic officia accusantium ipsa dolor omnis
                                    dolor voluptatem</p>
                            </div>
                        </div>

                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                            <div
                                class="icon-box bg-[var(--surface-color)] p-10 shadow-lg rounded-lg transition-all duration-300">
                                <i
                                    class="bi bi-clipboard-pulse bg-[color-mix(in srgb,var(--accent-color),transparent_95%)] text-[var(--accent-color)] w-20 h-20 rounded-full flex items-center justify-center text-4xl mb-6"></i>
                                <h3 class="font-bold text-lg mb-2">Rerum aperiam</h3>
                                <p class="mb-0">Autem saepe animi et aut aspernatur culpa facere. Rerum saepe rerum
                                    voluptates quia</p>
                            </div>
                        </div>

                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                            <div
                                class="icon-box bg-[var(--surface-color)] p-10 shadow-lg rounded-lg transition-all duration-300">
                                <i
                                    class="bi bi-command bg-[color-mix(in srgb,var(--accent-color),transparent_95%)] text-[var(--accent-color)] w-20 h-20 rounded-full flex items-center justify-center text-4xl mb-6"></i>
                                <h3 class="font-bold text-lg mb-2">Veniam omnis</h3>
                                <p class="mb-0">Omnis perferendis molestias culpa sed. Recusandae quas possimus. Quod
                                    consequatur corrupti</p>
                            </div>
                        </div>

                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                            <div
                                class="icon-box bg-[var(--surface-color)] p-10 shadow-lg rounded-lg transition-all duration-300">
                                <i
                                    class="bi bi-graph-up-arrow bg-[color-mix(in srgb,var(--accent-color),transparent_95%)] text-[var(--accent-color)] w-20 h-20 rounded-full flex items-center justify-center text-4xl mb-6"></i>
                                <h3 class="font-bold text-lg mb-2">Delares sapiente</h3>
                                <p class="mb-0">Sint et dolor voluptas minus possimus nostrum. Reiciendis commodi
                                    eligendi omnis quideme lorenda</p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </section>


    {{-- <section class="bg-gray-200">
        <div class="mx-6 md:mx-8 lg:mx-24">

            <div class="flex">
                <div class="w-2/5 bg-white p-4">
                    <h1>
                        Ducimus rerum libero reprehenderit cumque
                    </h1>
                    <p>
                        Ipsa sint sit. Quis ducimus tempore dolores impedit et dolor cumque alias maxime. Enim reiciendis
                        minus et rerum hic non. Dicta quas cum quia maiores iure. Quidem nulla qui assumenda incidunt
                        voluptatem tempora deleniti soluta.


                    </p>
                </div>


                <div class="w-3/5 bg-gray-200 p-4">
                    <div class="grid grid-cols-2 gap-6">

                        <div class="bg-white px-8 py-12 shadow-lg rounded-2xl mt-8">
                            <div class="space-y-6">
                                <span>
                                    <i class="fa-solid fa-sack-dollar text-4xl bg-[#fce7d2] rounded-full p-5"></i>
                                </span>
                                <div class="space-y-3">
                                    <h3 class="font-semibold text-black text-3xl">1 Eius provident</h3>
                                    <p class="text-md text-gray-700 tracking-wide">Magni repellendus vel ullam hic officia
                                        accusantium ipsa dolor omnis dolor voluptatem

                                    </p>
                                </div>

                            </div>
                        </div>


                        <div class="bg-white px-8 py-12 shadow-lg rounded-2xl mb-8">
                            <div class="space-y-6">
                                <span>
                                    <i class="fa-solid fa-sack-dollar text-4xl bg-[#fce7d2] rounded-full p-5"></i>
                                </span>
                                <div class="space-y-3">
                                    <h3 class="font-semibold text-black text-3xl">2 Eius provident</h3>
                                    <p class="text-md text-gray-700 tracking-wide">Magni repellendus vel ullam hic officia
                                        accusantium ipsa dolor omnis dolor voluptatem

                                    </p>
                                </div>

                            </div>
                        </div>



                        <div class="bg-white px-8 py-12 shadow-lg rounded-2xl -my-8">
                            <div class="space-y-6">
                                <span>
                                    <i class="fa-solid fa-sack-dollar text-4xl bg-[#fce7d2] rounded-full p-5"></i>
                                </span>
                                <div class="space-y-3">
                                    <h3 class="font-semibold text-black text-3xl">4 Eius provident</h3>
                                    <p class="text-md text-gray-700 tracking-wide">Magni repellendus vel ullam hic officia
                                        accusantium ipsa dolor omnis dolor voluptatem

                                    </p>
                                </div>

                            </div>
                        </div>


                        <div class="bg-white px-8 py-12 shadow-lg rounded-2xl">
                            <div class="space-y-6">
                                <span>
                                    <i class="fa-solid fa-sack-dollar text-4xl bg-[#fce7d2] rounded-full p-5"></i>
                                </span>
                                <div class="space-y-3">
                                    <h3 class="font-semibold text-black text-3xl">3 Eius provident</h3>
                                    <p class="text-md text-gray-700 tracking-wide">Magni repellendus vel ullam hic officia
                                        accusantium ipsa dolor omnis dolor voluptatem

                                    </p>
                                </div>

                            </div>
                        </div>







                    </div>
                </div>


            </div>
        </div>
    </section> --}}





    {{-- 
    <section class="bg-blue-500">
        <div class="mx-6 md:mx-8 lg:mx-24 py-10 md:py-24">
            <div class="">

                <div>Make this 40 percent</div>

                <div>Make this 60 Percent</div>

            </div>
        </div>
    </section> --}}


    {{-- <section class="bg-blue-500">
        <div class="mx-6 md:mx-8 lg:mx-24 py-10 md:py-24">
            <div class="">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt facilis in molestiae architecto et
                labore autem! Accusamus quas distinctio, facere exercitationem omnis eaque inventore molestiae atque
                earum, libero quia possimus aut numquam laudantium iusto? Vero dolore blanditiis amet animi, architecto
                quaerat? Error obcaecati repellat doloremque, esse rerum unde fugit earum inventore quis deleniti
                dolorem culpa delectus, impedit minus saepe cupiditate dignissimos! Et aliquid atque, quas voluptates
                consequuntur maxime qui laboriosam delectus fugiat nisi ipsum, ratione pariatur vero consequatur nihil
                sunt, placeat totam neque obcaecati aspernatur enim repudiandae mollitia. Sequi, accusamus at
                perspiciatis optio doloribus sint rerum, et cum officiis doloremque debitis mollitia dignissimos
                similique necessitatibus nam quae. Ut consequatur fugit dolorem autem animi cum repudiandae, in
                laudantium, dicta culpa iste rerum asperiores veritatis delectus officiis dolore at eligendi! Nihil
                aliquid placeat iure dolor inventore reiciendis esse dolore suscipit ipsam quis blanditiis ut cum eius
                minima, quam doloribus animi ipsa consequatur sint. Sed, quisquam illo commodi excepturi error dolores
                ipsum eius consequuntur adipisci fugit et doloribus necessitatibus velit rerum tempore aut deserunt
                animi quasi ipsa praesentium! Recusandae, modi! Commodi veniam ipsam provident minima reprehenderit,
                amet eaque asperiores, unde nisi eveniet saepe animi nihil maxime aspernatur accusamus, quos at modi
                illum assumenda suscipit dolorum laborum architecto? Explicabo delectus voluptatem quas omnis deleniti
                hic, molestias enim ullam beatae ex vel exercitationem doloribus quod dolor, placeat, eos similique
                architecto! Necessitatibus in ipsum quibusdam eveniet incidunt repudiandae voluptates hic facilis earum,
                magni tenetur tempora autem laudantium officiis dolor, dicta maiores deleniti saepe laboriosam eius,
                quaerat similique unde reprehenderit. Quos facilis, corrupti laborum mollitia cupiditate ipsum modi
                deleniti commodi? Esse dolores facere, qui dicta optio ea rerum illum quam eum nesciunt eaque maxime
                unde impedit error, veniam tempora itaque aliquid eligendi ex corporis harum quaerat, nihil aperiam
                maiores! Deleniti autem culpa, reiciendis tempora aperiam voluptatibus provident.
            </div>
        </div>
    </section> --}}
@endsection
