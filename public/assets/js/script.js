document.addEventListener("DOMContentLoaded", function() {
    // Hide the preloader and remove it from the DOM when all resources are loaded
    window.addEventListener("load", function() {
        var preloader = document.querySelector(".preloader-wrapper");
        preloader.style.display = "none";
        preloader.parentElement.removeChild(preloader);
    });
});
