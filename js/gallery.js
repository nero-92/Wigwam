function gallery_set_image(id) {
	var images = $('#customize-main-image').children();
	var i;
	for(i = 0; i < images.length; i++) {
			$(images[i]).hide();
	}
	$(images[id]).show();
	console.log('done');
}