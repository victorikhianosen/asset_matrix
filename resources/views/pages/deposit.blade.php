@extends('layouts.app')


@section('main')
    <section class="bg-whiteBg">
        <div class="mx-6 md:mx-8 lg:mx-24 pb-1 pt-28 md:pb-10 md:pt-44">
            <div class="">
                <h1
                    class="text-black text-star text-5xl md:text-6xl lg:text-4xl font-semibold gap-6 tracking-tighter leading-tight">
                    Deposit</h1>


            </div>
        </div>
    </section>






    <section class="relative bg-white">
        <!-- Purple background with curve effect -->
        <!-- Apply the clip-path only for medium screens (md) and above -->
        <div class="absolute inset-0 w-full h-full bg-primary md:w-1/2 md:clip-path-diagonal"></div>

        <!-- Content Area -->
        <div class="relative z-2 mx-6 md:mx-8 lg:mx-24 py-10 md:py-16">
            <!-- Grid layout for text and image -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 justify-center items-center">
                <!-- Text Section -->
                <div class="space-y-12 text-white">
                    <h2 class="text-3xl md:text-5xl font-semibold">
                        <span class="text-black">Quick and</span> Reliable Loan Options for Your Needs
                    </h2>
                    <div class="space-y-4 pr-0 lg:pr-4">
                        <p class="text-xs md:text-sm tracking-wider">
                            Discover our diverse loan products designed to meet the financial needs of businesses and
                            individuals alike. Our Esusu Loan supports micro-businesses, entrepreneurs, traders, and
                            individuals, offering a simple application process with no hidden charges. We believe in
                            empowering your business without the stress of complicated repayment structures. For business
                            owners and SMEs, our Business Loan provides quick, transparent access to funds without needing
                            to save with us first.
                        </p>

                        <p class="text-xs md:text-sm tracking-wider">
                            Just have a viable business ready for investment, and we’ll help you achieve your growth goals.
                            For urgent needs, our Instant Cash Loan delivers funds within 24 hours, allowing you to apply
                            online and withdraw from correspondent banking after approval. Similarly, our Salary Advance is
                            tailored for salaried individuals, ensuring quick access to funds to cover unexpected expenses.
                            Experience seamless financial support tailored for your needs—apply today and take the first
                            step toward financial security!
                        </p>
                    </div>
                </div>

                <!-- Image Section -->
                <div>
                    <img src="{{ asset('asset/images/about.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>







    <section class="bg-white">
        <div class="mx-6 md:mx-8 lg:mx-24 py-10 md:py-10 lg:py-24">
            <div class="grid grid-cols-1 lg:grid-cols-3 lg:grid-rows-3 gap-6" id="loan-cards">



                <div class="group cursor-pointer shadow-xl h-80 p-6 border-2 border-white bg-lightBlue text-center rounded-md"
                    data-animation>
                    <span>
                        <i class="fa-solid fa-briefcase text-5xl pb-4"></i>
                    </span>
                    <h4 class="font-semibold text-4xl my-4">Call Deposit</h4>
                    <div class="space-y-1 mb-8">
                        <p class="text-base tracking-wide">
                            Secure financing to grow your business with our tailored Business Loan options.
                        </p>
                    </div>
                </div>

                <div class="group text-white cursor-pointer shadow-xl h-80 p-6 border-2 border-white bg-purple text-center rounded-md"
                    data-animation>
                    <span>
                        <i class="fa-solid fa-comments dollar-sign text-5xl pb-4"></i>
                    </span>
                    <h4 class="font-semibold text-4xl my-4">Fixed Deposit</h4>
                    <div class="space-y-1 mb-8">
                        <p class="text-base tracking-wide">
                            Get instant access to funds for your personal or business needs with our Quick Loan.
                        </p>
                    </div>
                </div>





                <div class="group text-black cursor-pointer shadow-xl h-80 p-6 border-2 border-white bg-yellow text-center rounded-md"
                    data-animation>
                    <span>
                        <i class="fa-solid fa-piggy-bank text-5xl pb-4"></i>
                    </span>
                    <h4 class="font-semibold text-4xl my-4"> Investment Deposit</h4>
                    <div class="space-y-1 mb-8">
                        <p class="text-base tracking-wide">
                            Our Esusu Loan provides quick, easy funding for micro-businesses and entrepreneurs,
                            with no hidden fees or charges.
                        </p>
                    </div>
                </div>










            </div>
        </div>
    </section>







    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const cards = document.querySelectorAll('[data-animation]');
            const windowHeight = window.innerHeight;

            const handleScroll = () => {
                const scrollY = window.scrollY;

                // Check if the user has scrolled down a specific amount
                if (scrollY > 50) { // Change this value to adjust when the animation should trigger
                    cards.forEach(card => {
                        // Add Tailwind classes for animation
                        card.classList.add('animate-slideUp'); // Use your defined animation
                    });
                    window.removeEventListener('scroll',
                        handleScroll); // Remove the event listener after animation
                }
            };

            window.addEventListener('scroll', handleScroll);
            handleScroll(); // Run on page load to animate any cards already in view
        });
    </script>
@endsection
