const bankButton = document.getElementById("bankButton");
const bankDropDown = document.getElementById("bankDropDown");

const businessButton = document.getElementById("businessButton");
const businessDropDown = document.getElementById("businessDropDown");

const onlineBankingButton = document.getElementById("onlineBankingButton");
const onlineBankingDropDown = document.getElementById("onlineBankingDropDown");


const accordionBtns = document.querySelectorAll(".accordion-btn");
const allAccordions = document.querySelectorAll(".accordion-content");

// Bank Dropdown
bankButton.addEventListener("mouseenter", () => {
    bankDropDown.classList.remove("opacity-0", "translate-y-4");
    bankDropDown.classList.add("opacity-100", "translate-y-0");
});

bankButton.addEventListener("mouseleave", () => {
    bankDropDown.classList.remove("opacity-100", "translate-y-0");
    bankDropDown.classList.add("opacity-0", "translate-y-4");
});

// Business Dropdown
businessButton.addEventListener("mouseenter", () => {
    businessDropDown.classList.remove("opacity-0", "translate-y-4");
    businessDropDown.classList.add("opacity-100", "translate-y-0");
});

businessButton.addEventListener("mouseleave", () => {
    businessDropDown.classList.remove("opacity-100", "translate-y-0");
    businessDropDown.classList.add("opacity-0", "translate-y-4");
});

// Online Banking Dropdown
onlineBankingButton.addEventListener("mouseenter", () => {
    onlineBankingDropDown.classList.remove("opacity-0", "translate-y-4");
    onlineBankingDropDown.classList.add("opacity-100", "translate-y-0");
});

onlineBankingButton.addEventListener("mouseleave", () => {
    onlineBankingDropDown.classList.remove("opacity-100", "translate-y-0");
    onlineBankingDropDown.classList.add("opacity-0", "translate-y-4");
});

// Policy Dropdown
policyButton.addEventListener("mouseenter", () => {
    policyDropDown.classList.remove("opacity-0", "translate-y-4");
    policyDropDown.classList.add("opacity-100", "translate-y-0");
});

policyButton.addEventListener("mouseleave", () => {
    policyDropDown.classList.remove("opacity-100", "translate-y-0");
    policyDropDown.classList.add("opacity-0", "translate-y-4");
});





// JavaScript for Accordion
const policyButtons = [
    document.getElementById("policyMobile3"),
    document.getElementById("policyMobile4"),
    document.getElementById("policyMobile5")
];

const contentSections = [
    document.getElementById("content-345"),
    document.getElementById("content-346"),
    document.getElementById("content-347")
];


// Policy
accordionBtns.forEach((btn) => {
    btn.addEventListener("click", function () {
        const targetAccordion = document.querySelector(this.dataset.target);
        const targetIcon = this.querySelector("span svg");

        // Close all open accordions
        allAccordions.forEach((accordion) => {
            if (accordion !== targetAccordion) {
                accordion.classList.add("hidden"); 
                accordion.style.maxHeight = null;
            }
        });

        // Toggle the clicked accordion
        if (targetAccordion.classList.contains("hidden")) {
            targetAccordion.classList.remove("hidden");
            targetAccordion.style.maxHeight =
                targetAccordion.scrollHeight + "px"; 
            targetIcon.classList.add("rotate-180");
        } else {
            targetAccordion.classList.add("hidden");
            targetAccordion.style.maxHeight = null; 
            targetIcon.classList.remove("rotate-180"); 
        }
    });
});









document.addEventListener("DOMContentLoaded", function () {
    const elementsToAnimate = [
        document.getElementById("customer1"),
        document.getElementById("customer2"),
        document.getElementById("customer3"),
    ];

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.remove("opacity-0"); // Make visible
                    entry.target.classList.add("animate-slideUp"); // Apply animation
                } else {
                    entry.target.classList.add("opacity-0"); // Hide again when scrolled out
                    entry.target.classList.remove("animate-slideUp"); // Reset animation to allow it to retrigger
                }
            });
        },
        {
            threshold: 0.5, // Trigger when 50% of the element is in view
        }
    );

    elementsToAnimate.forEach((element) => {
        observer.observe(element);
    });
});
