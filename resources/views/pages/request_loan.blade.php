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


            <section id="loan_calc" class="py-24 pl-6 md:pl-8 lg:pl-24 pr-10 space-y-10 bg-whiteBg">
                <h3 class="text-2xl text-primary font-semibold"> Loan Calculator </h3>

                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <label class="block tracking-wide text-gray-700 text-xs font-bold mb-2">Full Name <small
                                class="text-red-600">*</small></label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border hover:border-primary rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white"
                            required id="name" type="text" placeholder="Enter Full Name">
                    </div>
                </div>

                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <label class="block tracking-wide text-gray-700 text-xs font-bold mb-2">Loan Amount (₦) <small
                                class="text-red-600">*</small></label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border hover:border-primary rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white"
                            required id="lamnt" type="number" placeholder="Enter loan amount">
                    </div>
                </div>

                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <label class="block tracking-wide text-gray-700 text-xs font-bold mb-2">Percentage rate of interest
                            <small class="text-red-600">*</small></label>
                        <select
                            class="block appearance-none w-full text-sm bg-gray-200 border border-gray-200 text-gray-600 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="intr">
                            <option value="">Select Interest Rate</option>
                            <option value="5.0">Business Loan Interest</option>
                            <option value="5.0">Instant Loan Interest</option>
                            <option value="3.5">Woozeee Loan Interest</option>
                        </select>
                    </div>
                </div>

                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <label class="block tracking-wide text-gray-700 text-xs font-bold mb-2">Repayment period in month(s)
                            <small class="text-red-600">*</small></label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border hover:border-primary rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white"
                            required id="duration" type="number" placeholder="Repayment period">
                    </div>
                </div>

                <div class="px-3">
                    <button
                        class="bg-primary text-white px-10 text-base py-3 rounded-full border-primary hover:bg-[#be6a1a]"
                        type="button" id="calc_loan">
                        <span class="fa fa-envelope"></span> Calculate
                    </button>
                </div>
            </section>



            <section id="loan_results" class="py-24 pl-6 md:pl-8 lg:pl-24 pr-10 space-y-10 bg-whiteBg hidden">
                <h3 class="text-2xl text-primary font-semibold"> Loan Repayment Information </h3>

                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <label class="block tracking-wide text-gray-700 text-xs font-bold mb-2">Monthly Loan
                            Interest</label>
                        <h5 id="loan_intrst" class="text-lg text-gray-700">₦<span></span></h5>
                    </div>
                </div>

                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <label class="block tracking-wide text-gray-700 text-xs font-bold mb-2">Monthly Repayment</label>
                        <h5 id="mnth_pay" class="text-lg text-gray-700">₦<span></span></h5>
                    </div>
                </div>

                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <label class="block tracking-wide text-gray-700 text-xs font-bold mb-2">Total Loan Interest</label>
                        <h5 id="tot_loan_intrst" class="text-lg text-gray-700">₦<span></span></h5>
                    </div>
                </div>

                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <label class="block tracking-wide text-gray-700 text-xs font-bold mb-2">Total Loan Repayment</label>
                        <h5 id="tot_loan_pay" class="text-lg text-gray-700">₦<span></span></h5>
                    </div>
                </div>

                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <label class="block tracking-wide text-gray-700 text-xs font-bold mb-2">Send information to E-Mail
                            <small class="text-red-600">*</small></label>
                        <h5 id="loan_amnt" class="hidden"></h5>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border hover:border-primary rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white"
                            id="send_to" type="email" placeholder="E-Mail Address" required>
                    </div>
                </div>


                <div class="flex justify-start items-center gap-6">
                    <button id="send_loan_info" type="button" class="bg-primary text-base py-2 px-8 rounded-full text-white border border-primary hover:bg-[#c65f0a]">Submit</button>
                    <button id="_clnpy" type="button" class="bg-primary text-base py-2 px-8 rounded-full text-white border border-primary hover:bg-[#c65f0a]">Close</button>
                </div>

                {{-- <div class="flex items-center px-3 space-x-4 space-y-4 w-full">
                    <button
                        class="bg-primary text-white px-10 text-sm md:text-base py-3 rounded-full border-primary hover:bg-[#be6a1a]"
                        type="button" id="send_loan_info">
                        Submit
                    </button>
                    <button
                        class="bg-primary text-white px-10 text-sm md:text-base py-3 rounded-full border-primary hover:bg-[#be6a1a]"
                        type="button" id="_clnpy">
                        Close
                    </button>
                </div> --}}
            </section>


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


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Loan Calculation
            document.getElementById("calc_loan").addEventListener("click", function() {
                // Get input values
                const name = document.getElementById("name").value;
                const principal = parseFloat(document.getElementById("lamnt").value);
                const user_interest = parseFloat(document.getElementById("intr").value);
                const duration = parseInt(document.getElementById("duration").value);

                // Validate inputs
                if (isNaN(principal) || isNaN(user_interest) || isNaN(duration) || principal <= 0 ||
                    duration <= 0) {
                    alert('Please enter valid values for all fields.');
                    return;
                }

                // Calculate monthly interest, total interest, monthly payment, and total repayment
                const mnthly_interest = (user_interest / 100) * principal;
                const total_interest = (user_interest / 100) * principal * duration;
                const total_repayment = principal + total_interest;
                const mnthly_pay = (principal / duration) + mnthly_interest;

                // Update the UI with the calculated values
                document.querySelector("#loan_results").style.display = 'block'; // Show loan result section
                document.querySelector("#loan_calc").style.display = 'none'; // Hide loan calculator section

                // Format numbers with commas and two decimal places
                document.querySelector("#mnth_pay span").textContent = mnthly_pay.toLocaleString(
                    undefined, {
                        minimumFractionDigits: 2,
                        maximumFractionDigits: 2
                    });
                document.querySelector("#loan_intrst span").textContent = mnthly_interest.toLocaleString(
                    undefined, {
                        minimumFractionDigits: 2,
                        maximumFractionDigits: 2
                    });
                document.querySelector("#tot_loan_pay span").textContent = total_repayment.toLocaleString(
                    undefined, {
                        minimumFractionDigits: 2,
                        maximumFractionDigits: 2
                    });
                document.querySelector("#tot_loan_intrst span").textContent = total_interest.toLocaleString(
                    undefined, {
                        minimumFractionDigits: 2,
                        maximumFractionDigits: 2
                    });

                // Add principal to the hidden field for email sending
                document.querySelector("#loan_amnt").textContent = principal.toLocaleString();
            });

            // Handle "Send Information" button click
            document.getElementById("send_loan_info").addEventListener("click", function() {
                const email = document.getElementById("send_to").value;
                const name = document.getElementById("name").value;
                const principal = document.getElementById("lamnt").value;
                const interestRate = document.getElementById("intr").value;
                const duration = document.getElementById("duration").value;

                const monthlyPay = document.querySelector("#mnth_pay span").textContent;
                const totalRepayment = document.querySelector("#tot_loan_pay span").textContent;
                const totalInterest = document.querySelector("#tot_loan_intrst span").textContent;

                if (!email) {
                    alert('Please provide a valid email address.');
                    return;
                }
                const loanData = {
                    name: name,
                    email: email,
                    principal: principal,
                    interestRate: interestRate,
                    duration: duration,
                    monthlyPay: monthlyPay,
                    totalRepayment: totalRepayment,
                    totalInterest: totalInterest,
                };
                console.log(loanData);

                // Show flash message indicating loan processing
                showFlashMessage('Your loan is being processed...', 'success');

                // Immediately redirect to the request loan page
                window.location.href = "{{ route('request.loan') }}"; // Redirect to the request loan page

                // Make the fetch call to process the loan
                fetch("{{ route('process.loan') }}", {
                        method: "POST",
                        headers: {
                            "Content-Type": "application/json",
                            "X-CSRF-TOKEN": "{{ csrf_token() }}"
                        },
                        body: JSON.stringify(loanData),
                    })
                    .then(response => response.json())
                    .then(data => {
                        console.log('Success:', data);
                        // You may want to handle any additional responses here if needed
                    })
                    .catch((error) => {
                        console.error('Error:', error);
                        // Handle error logging or notification if needed
                    });

                // Function to display flash messages
                function showFlashMessage(message, type) {
                    const flashMessageDiv = document.createElement('div');
                    flashMessageDiv.className = `flash-message ${type}`;
                    flashMessageDiv.textContent = message;
                    document.body.appendChild(flashMessageDiv);

                    // Slide the message in
                    setTimeout(() => {
                        flashMessageDiv.classList.add('slide-in');

                        // Slide the message out after 5 seconds
                        setTimeout(() => {
                            flashMessageDiv.classList.remove('slide-in');
                            flashMessageDiv.classList.add('slide-out');

                            // Remove the message from the DOM after it slides out
                            setTimeout(() => {
                                flashMessageDiv.remove();
                            }, 500);
                        }, 5000);
                    }, 100);
                }
            });
            document.getElementById("_clnpy").addEventListener("click", function() {
                window.location.href = "{{ route('request.loan') }}";
            });
        });
    </script>










    {{-- Route::post('process/loan', [PagesController::class, 'processLoan'])->name('process.loan'); --}}
@endsection
