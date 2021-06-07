<!-- Core scripts -->
<!-- untuk toogle sidebar -->
<script src="<?= base_url('asset/js/pace.js')?>"></script>
<script src="<?= base_url('asset/js/sidenav.js')?>"></script>
<!-- untuk profile -->
<script src="<?= base_url('asset/js/jquery-3.3.1.min.js')?>"></script>
<script src="<?= base_url('asset/js/bootstrap.js')?>"></script>

<script src="<?= base_url('asset/libs/popper/popper.js')?>"></script>

<!-- untuk semua -->
<script src="<?= base_url('asset/js/layout-helpers.js')?>"></script>
<script src="<?= base_url('asset/js/material-ripple.js')?>"></script>

<!-- Libs -->
<script src="<?= base_url('asset/libs/perfect-scrollbar/perfect-scrollbar.js')?>"></script>
<script src="<?= base_url('asset/libs/eve/eve.js')?>"></script>
<script src="<?= base_url('asset/libs/flot/flot.js')?>"></script>
<script src="<?= base_url('asset/libs/flot/curvedLines.js')?>"></script>
<script src="<?= base_url('asset/libs/chart-am4/core.js')?>"></script>
<script src="<?= base_url('asset/libs/chart-am4/charts.js')?>"></script>
<script src="<?= base_url('asset/libs/chart-am4/animated.js')?>"></script>

<!-- Demo -->
<script src="<?= base_url('asset/js/demo.js"></script><script src="asset/js/analytics.js')?>"></script>
<script src="<?= base_url('asset/js/pages/dashboards_index.js')?>"></script>

<!-- Data Tables-->
<script src="<?php echo base_url('asset/datatables/js/jquery.dataTables.min.js'); ?>"></script>
<script src="<?php echo base_url('asset/datatables/js/dataTables.bootstrap.min.js'); ?>"></script>


<script>
	$(document).ready(function(){
		$('#datatables').DataTable(){
			responsive : true
		}
	})
</script>


<script src="<?= base_url('./asset/vendor/jquery/jquery-3.2.1.min.js')?>"></script>
<script src="<?= base_url('./asset/vendor/animsition/js/animsition.min.js')?>"></script>
<script src="<?= base_url('./asset/vendor/bootstrap/js/popper.js')?>"></script>
<script src="<?= base_url('./asset/vendor/bootstrap/js/bootstrap.min.js')?>"></script>
<script src="<?= base_url('./asset/vendor/select2/select2.min.js')?>"></script>
<script>
	$(".js-select2").each(function(){
		$(this).select2({
			minimumResultsForSearch: 20,
			dropdownParent: $(this).next('.dropDownSelect2')
		});
	})
</script>
<script src="<?= base_url('./asset/vendor/daterangepicker/moment.min.js')?>"></script>
<script src="<?= base_url('./asset/vendor/daterangepicker/daterangepicker.js')?>"></script>
<script src="<?= base_url('./asset/vendor/slick/slick.min.js')?>"></script>
<script src="<?= base_url('./asset/js/slick-custom.js')?>"></script>
<script src="<?= base_url('./asset/vendor/parallax100/parallax100.js')?>"></script>
<script>
	$('.parallax100').parallax100();
</script>
<script src="<?= base_url('./asset/vendor/MagnificPopup/jquery.magnific-popup.min.js')?>"></script>
<script>
	$('.gallery-lb').each(function() { // the containers for all your galleries
		$(this).magnificPopup({
			delegate: 'a', // the selector for gallery item
			type: 'image',
			gallery: {
				enabled:true
			},
			mainClass: 'mfp-fade'
		});
	});
</script>
<script src="<?= base_url('./asset/vendor/isotope/isotope.pkgd.min.js')?>"></script>
<script src="<?= base_url('./asset/vendor/sweetalert/sweetalert.min.js')?>"></script>
<script>
	$('.js-addwish-b2').on('click', function(e){
		e.preventDefault();
	});

	$('.js-addwish-b2').each(function(){
		var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
		$(this).on('click', function(){
			swal(nameProduct, "is added to wishlist !", "success");

			$(this).addClass('js-addedwish-b2');
			$(this).off('click');
		});
	});

	$('.js-addwish-detail').each(function(){
		var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

		$(this).on('click', function(){
			swal(nameProduct, "is added to wishlist !", "success");

			$(this).addClass('js-addedwish-detail');
			$(this).off('click');
		});
	});

	/*---------------------------------------------*/

	$('.js-addcart-detail').each(function(){
		var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
		$(this).on('click', function(){
			swal(nameProduct, "is added to cart !", "success");
		});
	});

</script>
<script src="<?= base_url('./asset/vendor/perfect-scrollbar/perfect-scrollbar.min.js')?>"></script>
<script>
	$('.js-pscroll').each(function(){
		$(this).css('position','relative');
		$(this).css('overflow','hidden');
		var ps = new PerfectScrollbar(this, {
			wheelSpeed: 1,
			scrollingThreshold: 1000,
			wheelPropagation: false,
		});

		$(window).on('resize', function(){
			ps.update();
		})
	});
</script>

<script src="<?php echo base_url('asset/dist/sweetalert.min.js'); ?>"></script>
<script src="<?php echo base_url('asset/dist/sweetalert-dev.js'); ?>"></script>
