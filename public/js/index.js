const contactForm = document.querySelector("#contact form");
if (contactForm) {
    contactForm.addEventListener("submit", (e) => {
        e.preventDefault();
        alert(
            "Terima kasih! Pesan Anda telah dikirim. Tim kami akan segera menghubungi Anda."
        );
        contactForm.reset();
    });
}
