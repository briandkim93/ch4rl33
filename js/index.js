var $container1 = $('#container-1');
var $soundcloudPlayer = $('#soundcloud-player');
var $albumCovers = $('.album-cover');
var $image1A = $('#image-1a');

$(function() {
    var imageOneAHeight = $image1A.height();                                              // Initial height of image-1a.
    var imageOneARatio = imageOneAHeight / $(window).width();                             // Initial ratio used for image-1 height adjustment on resize.

    $(document).scrollTop(0);                                                             // Force user to top of page once DOM is loaded.

    if ($container1.height() == 0) {                                                      // Reload page if container-1 collapses unexpectedly.
        $("#image-1a").one("load", function() {
            location.reload();
        }).each(function() {
            if(this.complete) $(this).load();
        });
    }

    /* PARALLAX EFFECTS */

    $(window).on('resize', function() {
        windowWidth = $(window).width();
        imageOneAHeight = $image1A.height();
        $container1.height(imageOneARatio * $(window).width());                           // Adjustment of image-1 height on resize in compliance with scroll position.
    });
    $(window).on('scroll', function() {
        var scrollPosition = $(window).scrollTop();
        var halfimageOneAHeight = imageOneAHeight / 2;
        if (halfimageOneAHeight >= scrollPosition) {
            $container1.height(imageOneAHeight - scrollPosition);                         // 1-to-1 reduction of image-1 height based on scroll position.
        } else {
            $container1.height(halfimageOneAHeight);                                      // Hold image-1 height once scroll position passes container-1.
        }
        $('#image-1b').css('top', -scrollPosition * 0.8 + 'px');                                // Custom upward displacement of image-1b based on scroll position.
        $('#image-1c').css('top', (6 + (scrollPosition / 10)) + '%');                     // Custom downward displacement of image-1c based on scroll position.
        if (scrollPosition > 20) {
            $('#image-arrows').css('display', 'none');                                    // Hide image-arrows when user has scrolled more than 20 pixels.
        } else {
            $('#image-arrows').css('display', 'block');                                   // Show image-arrows when user has scrolled less than 20 pixels.
        }
    });

    /* EMAIL BOX */

    $('#email-button').click(function() {                                                 // Open and close email box.
        $('#email-box').toggle();
    });
    $('.email-close').click(function() {
        $('#email-box').toggle();
    });
    $('.email-sent-confirmation-close').click(function() {
        $('#email-sent-confirmation').toggle();
    });

    // NEED AJAX
    $('#email-form').on('submit', function(e) {                                                  // Display sent confirmation message.
        e.preventDefault();
        if ($("#name").val().length > 0 && $("#email").val().length > 0 && $("#message").val().length > 0) {
            var props = $('#email-form').serialize();
            $.post('email.php', props, function() {
                $('#email-box').toggle();
                $('#email-sent-confirmation').toggle();
            });
        }
    });

});


$(window).on('load', function() {

    /* LOADING PAGE */

    $('#loading-page').css('display', 'none');                                           // Hide loading page once all assets are loaded.
    $(document).scrollTop(0);                                                            // Force user to top of page once all assets are loaded.

    /* FADE IN EFFECTS */
    displayAsset($soundcloudPlayer);
    displayAsset($albumCovers);
    
    $(window).on('scroll resize', function() {
        displayAsset($soundcloudPlayer);
        displayAsset($albumCovers);
    });

    /* FUNCTIONS */

    function displayAsset(asset) {                                                        // Facilitate surface animation for specified asset.
        var exposurePoint = asset.offset().top + asset.height() / 3;
        var viewportTopPosition = $(window).scrollTop();
        var viewportBottomPosition = viewportTopPosition + $(window).height();
        if (exposurePoint > viewportTopPosition && exposurePoint < viewportBottomPosition) {
            if (asset == $soundcloudPlayer) {
                asset.css('animation', 'surface 2s linear');
                asset.css('animation-fill-mode', 'forwards');
            } else if (asset == $albumCovers) {                                           // Manual hover effect required to bypass forwards animation fill mode.
                if (asset.css('animation', 'surface 2s linear')) {
                    asset.css('opacity', '1.0');
                }
                $albumCovers.mouseenter(function() {
                    $(this).css('opacity', '0.8');
                });
                $albumCovers.mouseleave(function() {
                    $(this).css('opacity', '1.0');
                });
            }
        }
    }

});

$(window).on('beforeunload', function() {
    $(document).scrollTop(0);                                                             // Force user to top of page on refresh.
});


