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
                            <button class="w-full flex justify-between items-center py-5 text-slate-800">
                                <span>Fund Transfer</span>
                                <span id="icon-1" class="text-slate-800 transition-transform duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                                        class="w-4 h-4">
                                        <path
                                            d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                                    </svg>
                                </span>
                            </button>
                            <div id="content-1" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
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
                            <button class="w-full flex justify-between items-center py-5 text-slate-800">
                                <span>Fund Management</span>
                                <span id="icon-2" class="text-slate-800 transition-transform duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                                        class="w-4 h-4">
                                        <path
                                            d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                                    </svg>
                                </span>
                            </button>
                            <div id="content-2" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
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
                            <button id="policyMobile3" class="w-full flex justify-between items-center py-5 text-slate-800">
                                <span>In-branch Banking</span>
                                <span id="icon-345" class="text-slate-800 transition-transform duration-[1500ms]">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                                        class="w-4 h-4">
                                        <path
                                            d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                                    </svg>
                                </span>
                            </button>
                            <div id="content-345"
                                class="max-h-0 overflow-hidden transition-all duration-[1500ms] ease-in-out">
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
                            <button id="policyMobile4" class="w-full flex justify-between items-center py-5 text-slate-800">
                                <span>Correspondent Banking</span>
                                <span id="icon-346" class="text-slate-800 transition-transform duration-[1500ms]">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                                        class="w-4 h-4">
                                        <path
                                            d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                                    </svg>
                                </span>
                            </button>
                            <div id="content-346"
                                class="max-h-0 overflow-hidden transition-all duration-[1500ms] ease-in-out">
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
                            <button id="policyMobile5" class="w-full flex justify-between items-center py-5 text-slate-800">
                                <span>Bills Payment & Instant Recharge</span>
                                <span id="icon-347" class="text-slate-800 transition-transform duration-[1500ms]">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                                        class="w-4 h-4">
                                        <path
                                            d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                                    </svg>
                                </span>
                            </button>
                            <div id="content-347"
                                class="max-h-0 overflow-hidden transition-all duration-[1500ms] ease-in-out">
                                <div class="pb-5 text-sm text-slate-500">
                                    Our USSD instant recharge is accurate as customers recharge via their account domicile
                                    with us and also pay any other utility bills, cable TV bills, fund transfers, mobile
                                    banking, internet banking, and any other branchless banking as requested by them.
                                    Customers without an account with us can deposit or withdraw from their correspondent
                                    bank at stress-free of little charges.
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div>
                    <img src="{{ asset('asset/images/about.png') }}" alt="" class="pointer-events-none">
                </div>

            </div>
        </div>
    </section>






    <script>
        function toggleAccordion(index) {
            const content = document.getElementById(`content-${index}`);
            const icon = document.getElementById(`icon-${index}`);

            // SVG for Minus icon
            const minusSVG = `
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
        <path d="M3.75 7.25a.75.75 0 0 0 0 1.5h8.5a.75.75 0 0 0 0-1.5h-8.5Z" />
      </svg>
    `;

            // SVG for Plus icon
            const plusSVG = `
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
        <path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
      </svg>
    `;

            // Toggle the content's max-height for smooth opening and closing
            if (content.style.maxHeight && content.style.maxHeight !== '0px') {
                content.style.maxHeight = '0';
                icon.innerHTML = plusSVG;
            } else {
                content.style.maxHeight = content.scrollHeight + 'px';
                icon.innerHTML = minusSVG;
            }
        }
    </script>
@endsection
