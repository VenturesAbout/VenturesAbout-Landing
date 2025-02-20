document.addEventListener("DOMContentLoaded", function() {
    const ctaButton = document.querySelector(".cta-button");
    ctaButton.addEventListener("mouseover", function() {
        this.style.backgroundColor = "#c0392b";
    });
    ctaButton.addEventListener("mouseleave", function() {
        this.style.backgroundColor = "#e74c3c";
    });
});
