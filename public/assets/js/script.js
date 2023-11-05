document.addEventListener("DOMContentLoaded", function() {
    // Hide the preloader and remove it from the DOM when all resources are loaded
    window.addEventListener("load", function() {
        var preloader = document.querySelector(".preloader-wrapper");
        preloader.style.display = "none";
        preloader.parentElement.removeChild(preloader);

        // Show the popup and blur the content
        var popupWrapper = document.querySelector(".popup-wrapper");
        var mainContent = document.querySelector(".main-content");

        popupWrapper.style.display = "block";
        mainContent.classList.add("blur");

        // Handle button click events
        var buttons = document.querySelectorAll(".popup-button");
        buttons.forEach(function(button) {
            button.addEventListener("click", function() {
                // Close the popup and remove the blur effect
                popupWrapper.style.display = "none";
                mainContent.classList.remove("blur");
            });
        });
    });
});
