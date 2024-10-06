const bankButton = document.getElementById("bankButton");
const bankDropDown = document.getElementById("bankDropDown");

const businessButton = document.getElementById("businessButton");
const businessDropDown = document.getElementById("businessDropDown");

const onlineBankingButton = document.getElementById("onlineBankingButton");
const onlineBankingDropDown = document.getElementById("onlineBankingDropDown");

const policyButton = document.getElementById("policyButton");
const policyDropDown = document.getElementById("policyDropDown");

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

document.addEventListener("DOMContentLoaded", function () {
    // Toggle accordion content visibility
    const buttons = document.querySelectorAll("button");

    buttons.forEach((button, index) => {
        button.addEventListener("click", () => {
            const content = document.getElementById(`content-${index + 1}`);
            const icon = document.getElementById(`icon-${index + 1}`);

            // Toggle content visibility
            if (content.style.maxHeight) {
                content.style.maxHeight = null;
                icon.style.transform = "rotate(0deg)";
            } else {
                content.style.maxHeight = content.scrollHeight + "px";
                icon.style.transform = "rotate(90deg)";
            }
        });
    });
});



policyButtons.forEach((button, index) => {
    button.addEventListener("click", () => {
        const isOpen = contentSections[index].classList.contains("max-h-0");
        
        // Close all content sections
        contentSections.forEach(content => {
            content.classList.add("max-h-0");
        });

        // Hide all icons
        policyButtons.forEach(btn => {
            const icon = btn.querySelector("span[id^='icon-']");
            icon.classList.remove("rotate-90");
        });

        // Toggle the current content section
        if (isOpen) {
            contentSections[index].classList.remove("max-h-0");
            const icon = button.querySelector("span[id^='icon-']");
            icon.classList.add("rotate-90");
        }
    });
});
