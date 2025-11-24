// Newsletter form handler
const newsletterForm = document.querySelector("footer form");
if (newsletterForm) {
    newsletterForm.addEventListener("submit", (e) => {
        e.preventDefault();
        alert("Terima kasih telah berlangganan newsletter kami!");
        newsletterForm.reset();
    });
}
