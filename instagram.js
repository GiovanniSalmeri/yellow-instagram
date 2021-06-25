// Instagram extension, https://github.com/GiovanniSalmeri/yellow-instagram

var initInstagramFromDOM = function() {
    var elements = document.querySelectorAll(".instagram-media");
    if (elements.length) {
        if (typeof instgrm==="undefined") {
            var fjs = document.getElementsByTagName("script")[0];
            var js = document.createElement("script");
            js.src = "https://platform.instagram.com/en_US/embeds.js";
            fjs.parentNode.insertBefore(js, fjs);
        } else {
            instgrm.Embeds.process();
        }
    }
};

window.addEventListener("DOMContentLoaded", initInstagramFromDOM, false);
