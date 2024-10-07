@extends('layouts.app')


@section('main')
    <section class="bg-white">
        <div class="mx-6 md:mx-8 lg:mx-24 pb-1 pt-28 md:pb-24 md:pt-44">
            <div class="">
                <h1
                    class="text-black text-center text-5xl md:text-6xl lg:text-7xl font-semibold gap-6 tracking-tighter leading-tight">
                    Mobile App Policy</h1>
            </div>
        </div>
    </section>



    <section class="bg-white">
        <div class="mx-6 md:mx-8 lg:mx-24 py-10 md:py-24">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 justify-center items-center">
                <div>
                    <img src="{{ asset('asset/images/about.png') }}" alt="">
                </div>
                <div class="space-y-12">
                    <h2 class="text-3xl md:text-5xl text-black font-semibold">
                        <span class="text-primary">We Need Your Consent</span> to Protect Your Personal Information
                    </h2>
                    <div class="space-y-4">
                        <p class="text-xs md:text-sm tracking-wider text-black">
                            Asset Matrix Microfinance Bank provides instant funds transfer, fund management, in-branch
                            services, correspondent banking, and easy bill payments.
                        </p>

                        <!-- Accordion Item 1 -->
                        <div class="border-b border-slate-200">
                            <button class="accordion-btn w-full flex justify-between items-center py-5 text-slate-800"
                                data-target="#policyMobileAccordion">
                                <span>Fund Transfer</span>
                                <span class="text-slate-800 transition-transform duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                                        class="w-4 h-4">
                                        <path
                                            d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                                    </svg>
                                </span>
                            </button>
                            <div id="policyMobileAccordion"
                                class="accordion-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out hidden">
                                <div class="pb-5 text-sm text-slate-500">
                                    With our Electronic/Instant Funds Transfer, our clients can transfer funds across any
                                    bank in Nigeria. Our funds transfer system supports the transfer of funds from our
                                    correspondent bank to any bank branch in Nigeria that the clients desire, with minimal
                                    fees or charges.
                                </div>
                            </div>
                        </div>

                        <!-- Accordion Item 2 -->
                        <div class="border-b border-slate-200">
                            <button class="accordion-btn w-full flex justify-between items-center py-5 text-slate-800"
                                data-target="#policyMobileAccordion2">
                                <span>Fund Management</span>
                                <span class="text-slate-800 transition-transform duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                                        class="w-4 h-4">
                                        <path
                                            d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                                    </svg>
                                </span>
                            </button>
                            <div id="policyMobileAccordion2"
                                class="accordion-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out hidden">
                                <div class="pb-5 text-sm text-slate-500">
                                    We explore all statutory required deposits being mobilized from the public as a source
                                    of funds to provide risk assets that are well-managed at the prevailing market price.
                                    We follow through the pros and cons of each risk asset in detail, analyze the risk
                                    factors carefully before finalizing the plan, and also appoint a good financial planning
                                    manager who takes care of all our investments, considering the requirements, income,
                                    stability, etc., to determine the best plan for you.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white">
        <div class="mx-6 md:mx-8 lg:mx-24 py-10 md:py-24">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 justify-center items-center">
                <div class="space-y-12">
                    <h2 class="text-3xl md:text-5xl text-black font-semibold">
                        <span class="text-primary"> We Need Your Consent</span> to Protect Your Personal Information
                    </h2>
                    <div class="space-y-4">
                        <p class="text-xs md:text-sm tracking-wider text-black">
                            Asset Matrix Microfinance Bank provides instant funds transfer, fund management, in-branch
                            services, correspondent banking, and easy bill payments.
                        </p>

                        <!-- Accordion Item 1 -->
                        <div class="border-b border-slate-200">
                            <button class="accordion-btn w-full flex justify-between items-center py-5 text-slate-800"
                                data-target="#policyMobileAccordion3">
                                <span>In-branch Banking</span>
                                <span class="text-slate-800 transition-transform duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                                        class="w-4 h-4">
                                        <path
                                            d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                                    </svg>
                                </span>
                            </button>
                            <div id="policyMobileAccordion3"
                                class="accordion-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out hidden">
                                <div class="pb-5 text-sm text-slate-500">
                                    We are committed to helping improve business opportunities for our customers by availing
                                    them of good credit facilities, fixed deposit, quality service deliveries, and corporate
                                    social responsibilities as they walk into our branch. Our In-branch banking varies as we
                                    meet every customer request with a quick turnaround time on our service delivery.
                                </div>
                            </div>
                        </div>

                        <!-- Accordion Item 2 -->
                        <div class="border-b border-slate-200">
                            <button class="accordion-btn w-full flex justify-between items-center py-5 text-slate-800"
                                data-target="#policyMobileAccordion4">
                                <span>Correspondent Banking</span>
                                <span class="text-slate-800 transition-transform duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                                        class="w-4 h-4">
                                        <path
                                            d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                                    </svg>
                                </span>
                            </button>
                            <div id="policyMobileAccordion4"
                                class="accordion-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out hidden">
                                <div class="pb-5 text-sm text-slate-500">
                                    Our Core Banking Application "BankOne" allows correspondent banking like withdrawal,
                                    deposit through Stanbic IBTC bank Plc across the nation, which impacts the customer's
                                    account domiciled with Asset Matrix Microfinance Bank Limited on real-time processing.
                                    We have co-branded cheques for both corporate and personal current accounts in which
                                    AssetMatrix MFB customers can issue the co-branded cheques to third-party withdrawal or
                                    clearing processes as a cashless economic initiative.
                                </div>
                            </div>
                        </div>

                        <!-- Accordion Item 3 -->
                        <div class="border-b border-slate-200">
                            <button class="accordion-btn w-full flex justify-between items-center py-5 text-slate-800"
                                data-target="#policyMobileAccordion5">
                                <span>Bills Payment & Instant Recharge</span>
                                <span class="text-slate-800 transition-transform duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                                        class="w-4 h-4">
                                        <path
                                            d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                                    </svg>
                                </span>
                            </button>
                            <div id="policyMobileAccordion5"
                                class="accordion-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out hidden">
                                <div class="pb-5 text-sm text-slate-500">
                                    As our customer, you can pay all your utility bills using the unique wallet system
                                    through our online platform, and enjoy instant recharge of any service provider with a
                                    quick service turnaround time.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <img src="{{ asset('asset/images/about.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>
@endsection
