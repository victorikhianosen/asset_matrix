let dropdownTimeout;

function toggleDropdown(dropdownId) {
    const dropdown = document.getElementById(dropdownId);
    dropdown.classList.toggle("hidden"); // Toggle visibility

    // Close other dropdowns if any are open
    document.querySelectorAll(".absolute").forEach(function (drop) {
        if (drop.id !== dropdownId) {
            drop.classList.add("hidden");
        }
    });
}

function showDropdown(dropdownId) {
    clearTimeout(dropdownTimeout); // Clear any timeout to hide the dropdown
    const dropdown = document.getElementById(dropdownId);
    dropdown.classList.remove("hidden"); // Show the dropdown
}

function hideDropdown(dropdownId) {
    const dropdown = document.getElementById(dropdownId);
    dropdownTimeout = setTimeout(() => {
        dropdown.classList.add("hidden"); // Hide the dropdown after delay
    }, 90); // 100 milliseconds delay
}

// Close dropdowns when clicking outside
window.onclick = function (event) {
    if (!event.target.matches(".relative button")) {
        const dropdowns = document.querySelectorAll(".absolute");
        dropdowns.forEach(function (dropdown) {
            dropdown.classList.add("hidden");
        });
    }
};

// JavaScript for Accordion
const policyButtons = [
    document.getElementById("policyMobile3"),
    document.getElementById("policyMobile4"),
    document.getElementById("policyMobile5"),
];

const contentSections = [
    document.getElementById("content-345"),
    document.getElementById("content-346"),
    document.getElementById("content-347"),
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

// Savings

document.addEventListener("DOMContentLoaded", function () {
    const cards = document.querySelectorAll("[data-animation]");
    const windowHeight = window.innerHeight;

    const handleScroll = () => {
        const scrollY = window.scrollY;

        // Check if the user has scrolled down a specific amount
        if (scrollY > 50) {
            // Change this value to adjust when the animation should trigger
            cards.forEach((card) => {
                // Add Tailwind classes for animation
                card.classList.add("animate-slideUp"); // Use your defined animation
            });
            window.removeEventListener("scroll", handleScroll); // Remove the event listener after animation
        }
    };

    window.addEventListener("scroll", handleScroll);
    handleScroll(); // Run on page load to animate any cards already in view
});

// CUSTOMER


