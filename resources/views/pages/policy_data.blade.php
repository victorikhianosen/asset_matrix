@extends('layouts.app')


@section('main')
    <section class="bg-white">
        <div class="mx-6 md:mx-8 lg:mx-24 pb-1 pt-28 md:pb-24 md:pt-44">
            <div class="">
                <h1
                    class="text-black text-center text-5xl md:text-6xl lg:text-7xl font-semibold gap-6 tracking-tighter leading-tight">
                    Data Policy</h1>
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
                    <h2 class="text-3xl md:text-5xl text-black font-semibold"><span class="text-primary"> We Need Your
                            Consent
                        </span>
                        to Protect Your Personal Information
                    </h2>
                    <div class="space-y-4">
                        <p class="text-xs md:text-sm tracking-wider text-black">
                            Under the Nigeria Data Protection Regulation 2019 (NDPR), Asset Matrix Microfinance Bank Limited
                            must obtain your explicit consent to use your information, referred to as 'Personal Data.'
                            Personal Data includes your name, address, telephone number, email address, card details, and
                            Bank Verification Number (BVN).
                        </p>

                        <p class="text-xs md:text-sm tracking-wider text-black">
                            We intend to hold and utilize your information for the purposes outlined in the Data Processing
                            Notice, which requires consent in accordance with the Privacy Policy. By providing this
                            information, I grant Asset Matrix Microfinance Bank Limited consent to collect and process my
                            name, official Government ID Number (ID Number), and photo image. I understand that I can
                            withdraw this consent at any time and that my data will be handled securely and in compliance
                        </p>
                    </div>
                </div>



            </div>
        </div>
    </section>




    <section class="bg-white">
        <div class="mx-6 md:mx-8 lg:mx-24 py-10 md:py-24">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 justify-center items-center">


                <div class="space-y-12">
                    <h2 class="text-3xl md:text-5xl text-black font-semibold"><span class="text-primary">I Agree to the Use 
                            
                        </span>
                        of My Information for Identity Validation
                    </h2>
                    <div class="space-y-4">
                        <p class="text-xs md:text-sm tracking-wider text-black">
                            I understand that Asset Matrix Microfinance Bank Limited may share my information with a
                            third-party service provider to validate it against a government source. The third-party service
                            provider may use my ID Number to gather additional data about me, including my full name, date
                            of birth, ID Number, image, address, phone number, gender, Bank Verification Number, and
                            Government ID expiry date. </p>

                        <p class="text-xs md:text-sm tracking-wider text-black">
                            I understand this data is used to confirm my identity and may be processed or stored outside of
                            Nigeria. I consent to this. If I wish to change my preferences, request that my data be edited
                            or deleted, or withdraw my consent, I must contact Asset Matrix MFB Limited. I can find a full
                            description of how Asset Matrix Microfinance Bank Limited uses my Personal Data at:
                            https://cashmatrix.ng/mobile-app-privacy-policy/. Thank you for your cooperation.
                        </p>
                    </div>
                </div>
                <div>
                    <img src="{{ asset('asset/images/about.png') }}" alt="">
                </div>



            </div>
        </div>
    </section>
@endsection
