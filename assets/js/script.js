// FAQ Accordion Script
document.addEventListener("DOMContentLoaded", function () {
    // FAQ Accordion
    document.querySelectorAll(".faq-button").forEach((button) => {
        button.addEventListener("click", () => {
            const content = button.nextElementSibling;
            const icon = button.querySelector(".faq-icon");

            // Toggle current FAQ
            if (content.classList.contains("hidden")) {
                content.classList.remove("hidden");
                icon.textContent = "−";
            } else {
                content.classList.add("hidden");
                icon.textContent = "+";
            }
        });
    });

    // Mobile Menu Toggle
    const mobileMenuBtn = document.getElementById("mobile-menu-btn");
    const mobileMenu = document.getElementById("mobile-menu");

    if (mobileMenuBtn && mobileMenu) {
        mobileMenuBtn.addEventListener("click", () => {
            mobileMenu.classList.toggle("hidden");
        });

        // Close mobile menu when clicking on menu links
        const mobileMenuLinks = mobileMenu.querySelectorAll("a");
        mobileMenuLinks.forEach((link) => {
            link.addEventListener("click", () => {
                mobileMenu.classList.add("hidden");
            });
        });
    }

    // Back to Top Button
    const backToTopBtn = document.getElementById("back-to-top");

    if (backToTopBtn) {
        // Show/hide button based on scroll position
        window.addEventListener("scroll", () => {
            if (window.pageYOffset > 300) {
                backToTopBtn.classList.remove("hidden");
            } else {
                backToTopBtn.classList.add("hidden");
            }
        });

        // Scroll to top when button clicked
        backToTopBtn.addEventListener("click", () => {
            window.scrollTo({
                top: 0,
                behavior: "smooth",
            });
        });
    }
});
