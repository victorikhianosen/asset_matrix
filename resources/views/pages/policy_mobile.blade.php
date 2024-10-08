@extends('layouts.app')

@section('main')
    <section class="bg-whiteBg">
        <div class="mx-6 md:mx-8 lg:mx-24 pb-1 pt-28 md:pb-10 md:pt-44">
            <div class="">
                <h1 class="text-black text-star text-5xl md:text-6xl lg:text-4xl font-semibold gap-6 tracking-tighter leading-tight">
                    Mobile App Policy
                </h1>
            </div>
        </div>
    </section>

    <section class="bg-white">
        <div class="mx-6 md:mx-8 lg:mx-24 py-10 md:py-24">
            <div class="space-y-12">
                <h2 class="text-2xl md:text-4xl text-black font-semibold">
                    <span class="text-primary">We Need Your Consent</span> to Protect Your Personal Information
                </h2>

                <div class="space-y-6">
                    <h4 class="text-2xl">
                        <span>
                            <i class="fa-solid fa-circle text-primary mr-2"></i>
                        </span>
                        Fund Transfer
                    </h4>
                    <p class="text-xs md:text-sm tracking-wider text-black">
                        With our Electronic/Instant Funds Transfer, our clients can transfer funds across any bank in Nigeria. Our funds transfer system supports the transfer of funds from our correspondent bank to any bank branch in Nigeria that the clients desire, with minimal fees or charges.
                    </p>
                </div>

                <div class="space-y-6">
                    <h4 class="text-2xl">
                        <span>
                            <i class="fa-solid fa-circle text-primary mr-2"></i>
                        </span>
                        Fund Management
                    </h4>
                    <p class="text-xs md:text-sm tracking-wider text-black">
                        We explore all statutory required deposits being mobilized from the public as a source of funds to provide risk assets that are well-managed at the prevailing market price. We analyze each risk asset in detail, considering income, stability, and other factors to determine the best plan for you.
                    </p>
                </div>

                <div class="space-y-6">
                    <h4 class="text-2xl">
                        <span>
                            <i class="fa-solid fa-circle text-primary mr-2"></i>
                        </span>
                        In-branch Services
                    </h4>
                    <p class="text-xs md:text-sm tracking-wider text-black">
                        Our branches are available to provide you with face-to-face assistance with all your banking needs, including account management, savings, loans, and more.
                    </p>
                </div>

                <div class="space-y-6">
                    <h4 class="text-2xl">
                        <span>
                            <i class="fa-solid fa-circle text-primary mr-2"></i>
                        </span>
                        Bill Payments
                    </h4>
                    <p class="text-xs md:text-sm tracking-wider text-black">
                        Pay your bills easily and conveniently using our mobile app, ensuring your utilities, phone, and other regular payments are made on time.
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
