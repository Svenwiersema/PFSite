import "../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js";
import "../node_modules/imagesloaded/imagesloaded.pkgd.min.js";
import "../node_modules/masonry-layout/dist/masonry.pkgd.min.js";

// $(document).ready(function(){
//     $(".grid").masonry({
//         itemSelector: ".grid-item"
//     })
// });

$('#masonry-grid').imagesLoaded( function() {
    $(".grid").masonry({
        itemSelector: ".grid-item"
    });
});

// var $grid = $('.grid').masonry({
//     itemSelector: ".grid-item"
//   });
//   // layout Masonry after each image loads
//   $grid.imagesLoaded().progress( function() {
//     $grid.masonry('layout');
//   });

// var $container = $("masonry-grid");
// $container.imagesLoaded(function() {
//     $(".grid").masonry({
//         itemSelector: ".grid-item"
//     });
// });