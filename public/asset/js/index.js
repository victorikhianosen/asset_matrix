
// BEGINING OF HEADER DROP
const ourBank = document.getElementById("ourBank");
const ourBankDropDown = document.getElementById("ourBankDropDown");

const businessBanking = document.getElementById("businessBanking");
const businessBankingDropDown = document.getElementById(
    "businessBankingDropDown"
);
const policy = document.getElementById("policy");
const policyDropDown = document.getElementById("policyDropDown");

// Mobile Selector
const ourBankMobile = document.getElementById("ourBankMobile");
const ourBankDropDownMobile = document.getElementById("ourBankDropDownMobile");

const businessMobile = document.getElementById("businessMobile");
const businessDropDownMobile = document.getElementById(
    "businessDropDownMobile"
);

const policyMobile = document.getElementById("policyMobile");
const policyDropDownMobile = document.getElementById("policyDropDownMobile");


// Show dropdown on mouseover
ourBank.addEventListener("mouseover", () => {
    ourBankDropDown.classList.remove("hidden");
});
ourBankDropDown.addEventListener("mouseover", () => {
    ourBankDropDown.classList.remove("hidden");
});

ourBank.addEventListener("mouseleave", () => {
    setTimeout(() => {
        if (!ourBankDropDown.matches(':hover')) {
            ourBankDropDown.classList.add("hidden");
        }
    }, 100);
});
ourBankDropDown.addEventListener("mouseleave", () => {
    setTimeout(() => {
        if (!ourBank.matches(":hover")) {
            ourBankDropDown.classList.add("hidden");
        }
    }, 100);
});


businessBanking.addEventListener("mouseover", () => {
    businessBankingDropDown.classList.remove("hidden");
});
businessBankingDropDown.addEventListener("mouseover", () => {
    businessBankingDropDown.classList.remove("hidden");
});

businessBanking.addEventListener("mouseleave", () => {
    setTimeout(() => {
        if (!businessBankingDropDown.matches(":hover")) {
            businessBankingDropDown.classList.add("hidden");
        }
    }, 100);
});
businessBankingDropDown.addEventListener("mouseleave", () => {
    setTimeout(() => {
        if (!businessBanking.matches(":hover")) {
            businessBankingDropDown.classList.add("hidden");
        }
    }, 100);
});

// Same logic for the 'Policy' dropdown
policy.addEventListener("mouseover", () => {
    policyDropDown.classList.remove("hidden");
});
policyDropDown.addEventListener("mouseover", () => {
    policyDropDown.classList.remove("hidden");
});

policy.addEventListener("mouseleave", () => {
    setTimeout(() => {
        if (!policyDropDown.matches(":hover")) {
            policyDropDown.classList.add("hidden");
        }
    }, 100);
});
policyDropDown.addEventListener("mouseleave", () => {
    setTimeout(() => {
        if (!policy.matches(":hover")) {
            policyDropDown.classList.add("hidden");
        }
    }, 100);
});


// END OF HEADER DROP DOWN

// BEGINING OF MOBILE MENU
function toggleMobileMenu() {
    const mobileMenu = document.getElementById("mobileMenu");
    const mobileMenuButton = document.getElementById("mobileMenuButton");
    const closeMobileMenuButton = document.getElementById(
        "closeMobileMenuButton"
    );
    const closeMobileMenuButtonInMenu = document.getElementById(
        "closeMobileMenuButtonInMenu"
    );

    mobileMenu.classList.toggle("active");
    const isActive = mobileMenu.classList.contains("active");

    mobileMenuButton.classList.toggle("hidden", isActive);
    closeMobileMenuButton.classList.toggle("hidden", !isActive);
}


// Show dropdown on mouseover
// Mobile Dropdowns

// Our Bank Mobile
ourBankMobile.addEventListener("mouseover", () => {
    ourBankDropDownMobile.classList.remove("hidden");
});
ourBankDropDownMobile.addEventListener("mouseover", () => {
    ourBankDropDownMobile.classList.remove("hidden");
});

ourBankMobile.addEventListener("mouseleave", () => {
    setTimeout(() => {
        if (!ourBankDropDownMobile.matches(':hover')) {
            ourBankDropDownMobile.classList.add("hidden");
        }
    }, 100);
});
ourBankDropDownMobile.addEventListener("mouseleave", () => {
    setTimeout(() => {
        if (!ourBankMobile.matches(':hover')) {
            ourBankDropDownMobile.classList.add("hidden");
        }
    }, 100);
});

// Business Banking Mobile
businessMobile.addEventListener("mouseover", () => {
    businessDropDownMobile.classList.remove("hidden");
});
businessDropDownMobile.addEventListener("mouseover", () => {
    businessDropDownMobile.classList.remove("hidden");
});

businessMobile.addEventListener("mouseleave", () => {
    setTimeout(() => {
        if (!businessDropDownMobile.matches(':hover')) {
            businessDropDownMobile.classList.add("hidden");
        }
    }, 100);
});
businessDropDownMobile.addEventListener("mouseleave", () => {
    setTimeout(() => {
        if (!businessMobile.matches(':hover')) {
            businessDropDownMobile.classList.add("hidden");
        }
    }, 100);
});

// Policy Mobile
policyMobile.addEventListener("mouseover", () => {
    policyDropDownMobile.classList.remove("hidden");
});
policyDropDownMobile.addEventListener("mouseover", () => {
    policyDropDownMobile.classList.remove("hidden");
});

policyMobile.addEventListener("mouseleave", () => {
    setTimeout(() => {
        if (!policyDropDownMobile.matches(':hover')) {
            policyDropDownMobile.classList.add("hidden");
        }
    }, 100);
});
policyDropDownMobile.addEventListener("mouseleave", () => {
    setTimeout(() => {
        if (!policyMobile.matches(':hover')) {
            policyDropDownMobile.classList.add("hidden");
        }
    }, 100);
});



