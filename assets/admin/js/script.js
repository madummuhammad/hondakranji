$(document).ready(function(){
	$('.gambar').change(function(e) {
		var reader = new FileReader();
		reader.onload = function(e) {
			var gambar = $("[data-toggle=gambar]");
			for (let i = 0; i < gambar.length; i++) {
				gambar[i].src = e.target.result;
			}
		};
		reader.readAsDataURL(this.files[0]);
	});

	$('.logo').change(function(e) {
		var reader = new FileReader();
		reader.onload = function(e) {
			var logo = $("[data-toggle=logo]");
			for (let i = 0; i < logo.length; i++) {
				logo[i].src = e.target.result;
			}
		};
		reader.readAsDataURL(this.files[0]);
	});

	$('.edit_gambar').change(function(e) {
		var reader = new FileReader();
		reader.onload = function(e) {
			var edit_gambar = $("[data-toggle=edit_gambar]");
			for (let i = 0; i < edit_gambar.length; i++) {
				edit_gambar[i].src = e.target.result;
			}
		};
		reader.readAsDataURL(this.files[0]);
	});

	$('.edit_logo').change(function(e) {
		var reader = new FileReader();
		reader.onload = function(e) {
			var edit_logo = $("[data-toggle=edit_logo]");
			for (let i = 0; i < edit_logo.length; i++) {
				edit_logo[i].src = e.target.result;
			}
		};
		reader.readAsDataURL(this.files[0]);
	});
})