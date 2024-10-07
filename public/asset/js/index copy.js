





























































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
