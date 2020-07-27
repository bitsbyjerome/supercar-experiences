(function ($) {



    $(document).ready(function () {

        var tag = document.createElement('script');
        tag.src = "https://www.youtube.com/iframe_api";
        var firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);


        $('#youtube-video-modal').on('hidden.bs.modal', function () {
            $("#youtube-video-modal iframe").attr("src", $("#youtube-video-modal iframe").attr("src"));
        });



    });




})(jQuery);