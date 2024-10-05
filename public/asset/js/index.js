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
