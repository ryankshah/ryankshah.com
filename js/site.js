$(function() {
    var $gallery = $('.gallery').masonry({
        itemSelector: '.item',
        percentPosition: true,
        columnWidth: '.sizer'
    });
    // layout Masonry after each image loads
    $gallery.imagesLoaded().progress( function() {
        $gallery.masonry();
    });
});
