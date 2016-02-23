var grid = document.querySelector('.grid');
var msnry;

imagesLoaded( grid, function() {
  // init Isotope after all images have loaded
  console.log('all images are loaded');
  msnry = new Masonry( grid, {
    itemSelector: '.grid-item',
    columnWidth: '.grid-sizer',
    transitionDuration: '0.8s',
	initLayout: false
  });
});