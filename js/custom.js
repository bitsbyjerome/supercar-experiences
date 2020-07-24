(function ($) {



    $(document).ready(function () {

        var tag = document.createElement('script');
        tag.src = "https://www.youtube.com/iframe_api";
        var firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);


        $('.btn-play img').on('click', function() {


            onYouTubeIframeAPIReady();
            $('.btn-play img').css('display', 'none');

            function loadVideo() {
                var tag = document.createElement('script');
                tag.src = "https://www.youtube.com/iframe_api";
                var firstScriptTag = document.getElementsByTagName('script')[0];
                firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);


            }
            var player;
            function onYouTubeIframeAPIReady() {
                player = new YT.Player('player', {
                    height: '390',
                    width: '640',
                    videoId: '-j7hDyNzKrA',
                    events: {
                        'onReady': onPlayerReady,
                        //'onStateChange': onPlayerStateChange
                    }
                });
            }


            function onPlayerReady(event) {
                event.target.playVideo();
            }
        });

    });




})(jQuery);