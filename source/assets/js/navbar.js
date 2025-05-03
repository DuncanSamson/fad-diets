document.addEventListener("DOMContentLoaded", function() {
    const mobileOpenButton = document.getElementById("mobileOpenButton");
    const mobileCloseButton = document.getElementById("mobileCloseButton");
    const mobileMenu = document.getElementById("mobileMenu");

    mobileOpenButton.addEventListener("click", function() {
        mobileMenu.showModal();
    })

    mobileCloseButton.addEventListener("click", function() {
        mobileMenu.close();
    })
})