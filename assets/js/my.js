$(document).ready(function() {

	 // event pada saat link di klik
    $('.page-scroll').on('click', function (e) {
        // mematikan href
        e.preventDefault();
        // ambil isi href
        var tujuan = $(this).attr('href');
        // tangkap elemen yang bersangkutan
        var elemenTujuan = $(tujuan);
        // pindahkan scroll
        $("html").animate({
            scrollTop: (elemenTujuan.offset().top - 50)
        }, 0, 'linear');

        $('.page-scroll').removeClass('active');
        $(this).addClass('active');
    });

    // toggle navbar
    $(".menu-btn").on('click', function () {
        $(".menu-btn").toggleClass("open");
    });


	// slider banner
	$('.slider-banner').slick({
		infinite: true,
      	slidesToShow: 1,
      	autoplay: true,
		arrows: false,
      	autoplaySpeed: 1500
	});

	// slider produk
	$('.slider-produk').slick({
		infinite: true,
      	slidesToShow: 4,
      	autoplay: true,
		arrows: false,
      	autoplaySpeed: 1500,
      	responsive: [
		    {
		      breakpoint: 768,
		      settings: {
		        slidesToShow: 3
		      }
		    }
		]
	});

	// Card Kontak
	$('.card-kontak').click(function(){
		let data = $(this).attr('data-img');
		window.open(data, '_blank');
	});

});