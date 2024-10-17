<section class="bg-whiteBg">
    <div class="mx-6 md:mx-8 lg:mx-24 py-10 md:py-24">
        <div class="grid grid-cols-1 md:grid-cols-2 justify-center items-center gap-6">

            <!-- Animated Divs Section -->
            <div class="space-y-4 md:space-y-8 order-2 md:order-1">
                <!-- First animated div (scroll-triggered) -->
                <div id="firstDiv"
                    class="flex justify-center items-center gap-x-2 bg-purple text-white p-4 md:p-6 rounded-full w-full md:w-9/12 ml-0 md:ml-12 opacity-0 transition-opacity duration-500">
                    <div class="w-8 h-8 md:w-24 md:h-24">
                        <img class="rounded-full" src="{{ asset('asset/images/customer1.jpg') }}" alt="Customer">
                    </div>
                    <div>
                        <h2 class="text-sm md:text-md font-semibold tracking-wider">Joseph Alabi</h2>
                        <p class="text-xs md:text-sm italic font-light">CEO Econnect</p>
                        <p class="text-xs whiteText font-extralight tracking-wide">
                            Fast, secure, and reliable! This interbanking app makes managing my accounts and transfers
                            across banks so easy. A must-have for seamless banking!
                        </p>
                    </div>
                </div>

                <!-- Second animated div (scroll-triggered) -->
                <div id="secondDiv"
                    class="flex text-white justify-center items-center gap-x-2 bg-[#426172] p-4 md:p-6 rounded-full w-full md:w-9/12 opacity-0 transition-opacity duration-500">
                    <div class="w-8 h-8 md:w-24 md:h-24">
                        <img class="rounded-full" src="{{ asset('asset/images/customer1.jpg') }}" alt="Customer">
                    </div>
                    <div>
                        <h2 class="text-sm md:text-md font-semibold tracking-wider">Seun Ogunfayo</h2>
                        <p class="text-xs md:text-sm italic font-light">MD GGT Diagnostics Limited</p>
                        <p class="text-xs whiteText font-extralight tracking-wide">
                            Effortless banking at my fingertips! This app simplifies transfers between banks and keeps
                            my transactions secure and swift. Highly recommend!
                        </p>
                    </div>
                </div>

                <!-- Third animated div (scroll-triggered) -->
                <div id="thirdDiv"
                    class="flex justify-center items-center gap-x-2 bg-purple text-white p-4 md:p-6 rounded-full w-full md:w-9/12 ml-0 md:ml-12 opacity-0 transition-opacity duration-500">
                    <div class="w-8 h-8 md:w-24 md:h-24">
                        <img class="rounded-full" src="{{ asset('asset/images/customer1.jpg') }}" alt="Customer">
                    </div>
                    <div>
                        <h2 class="text-sm md:text-md font-semibold tracking-wider">Olakunle Bankule</h2>
                        <p class="text-xs md:text-sm italic font-light">MD, Bankole Ventures</p>
                        <p class="text-xs whiteText font-extralight tracking-wide">
                            Smooth and convenient! This app makes interbank transfers a breeze, with a user-friendly
                            interface and top-notch security. Love it!
                        </p>
                    </div>
                </div>
            </div>

            <!-- Other Section Content -->
            <div class="space-y-4 md:space-y-8 order-1 md:order-2">
                <h2 class="text-3xl md:text-5xl text-black font-semibold">
                    <span class="text-primary">What Our Valued</span> Customers Are Saying
                </h2>
                <p class="text-xs md:text-sm tracking-wider text-blackText" align="justify">
                    We make customer support simple and easy. No long waits, complicated processes, or endless forms.
                    Get assistance 24/7 through multiple channels and receive prompt responses from our dedicated team
                    instantly </p>
                <div class="flex justify-between items-center">
                    <div id="satisfiedCustomer">
                        <span class="text-lg md:text-4xl font-bold" id="satisfiedCustomerCount">0</span>
                        <h2 class="text-xs text-black font-normal md:text-sm">Satisfied Customers</h2>
                    </div>
                    <div id="clientRating">
                        <span class="text-lg md:text-4xl font-bold" id="clientRatingCount">0</span>
                        <h2 class="text-xs text-black font-normal md:text-sm">Clients Rating</h2>
                    </div>
                    <div class="appDownloads">
                        <span class="text-lg md:text-4xl font-bold" id="appDownloadCount">0</span>
                        <h2 class="text-xs text-black font-normal md:text-sm">App Downloads</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- JavaScript to animate divs on scroll -->
<script>
    function isInViewport(element) {
        const rect = element.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }

    function handleScroll() {
        const firstDiv = document.getElementById("firstDiv");
        const secondDiv = document.getElementById("secondDiv");
        const thirdDiv = document.getElementById("thirdDiv");

        if (isInViewport(firstDiv)) {
            firstDiv.classList.add("animate-slideUp", "opacity-100");
            firstDiv.classList.remove("opacity-0");
        }
        if (isInViewport(secondDiv)) {
            secondDiv.classList.add("animate-slideUp", "opacity-100");
            secondDiv.classList.remove("opacity-0");
        }
        if (isInViewport(thirdDiv)) {
            thirdDiv.classList.add("animate-slideUp", "opacity-100");
            thirdDiv.classList.remove("opacity-0");
        }
    }

    window.addEventListener("scroll", handleScroll);
</script>



<script>
    // Function to animate counters with "K" suffix for thousands
    function animateCounter(id, start, end, duration) {
        let element = document.getElementById(id);
        let range = end - start;
        let current = start;
        let increment = 1; // Increase by 5,000 each step
        let stepTime = Math.abs(Math.floor(duration / (range / increment)));

        let timer = setInterval(() => {
            current += increment;

            if (current >= 1) {
                element.innerText = Math.floor(current / 1);
            } else {
                element.innerText = current.toLocaleString();
            }


            if ((increment > 0 && current >= end) || (increment < 0 && current <= end)) {
                element.innerText = (end >= 1000) ? Math.floor(end / 1000) + "K" : end.toLocaleString();
                clearInterval(timer);
            }

            if (current >= end) {
                element.innerText = (end >= 1000) ? Math.floor(end / 1000) + "K" : end.toLocaleString();
                clearInterval(timer);
            }
        }, stepTime);
    }

    // Example values - these can be fetched dynamically from your backend
    let satisfiedCustomers = 10000;
    let clientRatings = 75000;
    let appDownloads = 5000;

    // Start the animation for each counter with faster duration
    window.onload = function() {
        animateCounter("satisfiedCustomerCount", 0, satisfiedCustomers, 1);
        animateCounter("clientRatingCount", 0, clientRatings, 1);
        animateCounter("appDownloadCount", 0, appDownloads, 1);
    };
</script>
