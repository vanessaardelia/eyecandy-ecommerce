<!-- Cart -->
<div class="wrap-header-cart js-panel-cart">
		<div class="s-full js-hide-cart"></div>

		<div class="header-cart flex-col-l p-l-65 p-r-25">
			<div class="header-cart-title flex-w flex-sb-m p-b-8">
				<span class="mtext-103 cl2">
					Your Cart
				</span>

				<div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
					<i class="zmdi zmdi-close"></i>
				</div>
			</div>
			<?php if($total_cart_items !=0):?>
			<div class="header-cart-content flex-w js-pscroll">
				<ul class="header-cart-wrapitem w-full">
					<?php 
						$total=0;
						foreach($cart_items as $cart_row):
							$cart_name= $cart_row['item_name'];
							$cart_price= $cart_row['selling_price'];
							$id_item_col= $cart_row['id_item_colored'];
							$cart_color= $cart_row['item_color'];
							$cart_photo= $cart_row['item_photo'];
							$cart_type= $cart_row['type_desc'];
							$cart_qty= $cart_row['quantity'];
							$cart_size= $cart_row['item_size'];
							$total+= $cart_qty*$cart_price;
					?>
					<li class="header-cart-item flex-w flex-t m-b-12">
						<div class="header-cart-item-img">
							<img src="<?=base_url('asset/images/'.$cart_type.'/'.$cart_photo)?>" alt="IMG">
						</div>

						<div class="header-cart-item-txt p-t-8">
							<a href="<?=base_url('index.php/Products/showDetail/'.$id_item_col)?>" class="header-cart-item-name m-b-5 hov-cl1 trans-04">
								<?=$cart_name?>
							</a>

							<span class="header-cart-item-info">
								<?=$cart_size?>
							</span>

							<span class="header-cart-item-info">
								<?=$cart_qty?> x IDR <?=number_format($cart_price,0,",",".")?>
							</span>
						</div>
					</li>
					<?php endforeach;?>
				</ul>
				
				<div class="w-full">
					<div class="header-cart-total w-full p-tb-40">
						Total   IDR <?=number_format($total,0,",",".")?>
					</div>

					<div class="header-cart-buttons flex-w w-full">
						<a href="<?=base_url('index.php/Cart')?>" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
							View Cart
						</a>

						<a href="<?=base_url('index.php/Cart/proceed')?>" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
							Check Out
						</a>
					</div>
				</div>
			</div>
			<?php else:?>
			<div class="col-12">
				<p>Your shopping cart is empty.</p>
			</div>
			<?php endif;?>
		</div>
	</div>

	<!-- breadcrumb -->
	<div class="container">
		<?php 
		// foreach ($items as $row):
			$id_item= $items->id_item;
			$id_item_col= $items->id_item_colored;
			$name_item= $items->item_name;
			$color_item= $items->item_color;
			$desc_item= $items->item_desc;
			$price_item= $items->selling_price;
			$type_item= $items->type_desc;
			$weight_item= $items->weight;
			$care_ins= $items->care_ins;
			$size='L';
		?>
		<div class="bread-crumb flex-w p-l-25 p-r-15 p-t-100 p-lr-0-lg">
			<a href="<?=base_url('index.php/Products')?>" class="stext-109 cl8 hov-cl1 trans-04">
				Home
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>

			<a href="<?=base_url('index.php/Products/showTypes/'.$type_item)?>" class="stext-109 cl8 hov-cl1 trans-04">
				<?= $type_item?>
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>

			<span class="stext-109 cl4">
				<?= $name_item?>
			</span>
		</div>
	</div>
		

	<!-- Product Detail -->
	<section class="sec-product-detail bg0 p-t-65 p-b-60">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-7 p-b-30">
					<div class="p-l-25 p-r-30 p-lr-0-lg">
						<div class="wrap-slick3 flex-sb flex-w">
							<div class="wrap-slick3-dots"></div>
							<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

							<div class="slick3 gallery-lb">

								<?php foreach ($photos as $photo):?>
								<div class="item-slick3" data-thumb="<?= base_url('asset/images/'.$type_item.'/'.$photo['item_photo'])?>">
									<div class="wrap-pic-w pos-relative">
										<img src="<?= base_url('asset/images/'.$type_item.'/'.$photo['item_photo'])?>" alt="IMG-PRODUCT">

										<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="<?= base_url('asset/images/'.$type_item.'/'.$photo['item_photo'])?>">
											<i class="fa fa-expand"></i>
										</a>
									</div>
								</div>
								<?php endforeach;?>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-md-6 col-lg-5 p-b-30">
					<div class="p-r-50 p-t-5 p-lr-0-lg">
						<h4 class="mtext-105 cl2 js-name-detail p-b-14">
							<?= $name_item?>
						</h4>
						
						<span class="mtext-106 cl2">
							IDR <?=number_format($price_item,0,",",".")?>
						</span>

						<p class="cl2 p-t-5">
							<?php if ($login):?>
								<form action="<?=base_url('index.php/Cart/add_item')?>" method="post" class="p-t-10">
								<!-- <form action="<?base_url('index.php/Wishlist/add_wishlist')?>" method="post"> -->
									<!-- <button type="submit" value="wishlist" class="fs-20 stext-101 cl3 hov-cl1 trans-04 lh-10p-tb-2 js-addwish-detail"> -->
									<?php if($wishlist):?>
									<a href="<?=base_url('index.php/Wishlist/removeItem/'.$id_item_col)?>" class="fs-20 stext-101 cl1 hov-cl1 lh-10p-tb-2">
										Wishlist <i class='zmdi zmdi-favorite'></i>
									</a>
									<?php else:?>
									<button type="submit" value="wishlist" name="addwishlist" class="fs-20 stext-101 cl3 hov-cl1 trans-04 lh-10p-tb-2">
										Wishlist <i class='zmdi zmdi-favorite'></i>
									</button>
									<?php endif;?>
									
								<!-- </form> -->
							<?php else:?>
							<a href="<?=base_url('index.php/Login')?>" class="fs-20 stext-101 cl3 hov-cl1 trans-04 lh-10p-tb-2">
								Wishlist <i class="zmdi zmdi-favorite"></i>
							</a>
							<?php endif;?>
						</p>

						<p class="stext-102 cl3 p-t-23">
							<?php echo $desc_item; ?>
						</p>
						
						<!--  -->
					<!-- <?php if($login):?>
						<form action="<?=base_url('index.php/Cart/add_to_cart')?>" method="post" class="p-t-33">
					<?php else:?>
						<div class="p-t-33">
					<?php endif;?> -->
						<div class="p-t-33">
							<?=form_hidden('idColor', $id_item_col)?>
							<div class="flex-w flex-r-m p-b-10">
								<div class="size-203 flex-c-m respon6">
									Size
								</div>

								<div class="size-204 respon6-next">
									<div class="rs1-select2 bor8 bg0">
										<select class="js-select2" id="size" name="size" required>
										<option value="">Choose your size</option>
											<?php foreach ($stocks as $stock):?>
											<option value="<?=$stock['item_size']?>" data-stock="<?=$stock['stock']?>" 
												<?php if($stock['stock']==0): 
													//echo 'disabled'?> >
													<?=$stock['item_size']?>
													<small>- out of stock</small>
												<?php else:?>
													<?='>'.$stock['item_size']?>
												<?php endif;?>
											</option>
											<?php endforeach;?>
										</select>
										<div class="dropDownSelect2"></div>
									</div>
								</div>
							</div>
							<?php //var_dump($stocks);?>

							<div class="flex-w flex-r-m p-b-10">
								<div class="size-203 flex-c-m respon6">
									Color
								</div>

								<div class="size-204 respon6-next">
									<div class="rs1-select2 bor8 bg0">
										<select class="js-select2" name="color" onchange="location = this.value;">
											<option><?=$color_item?></option>
											<?php foreach ($color as $color_choice):?>
											<option value="<?=base_url('index.php/Products/showDetail/'.$color_choice['id_item_colored'])?>"><?=$color_choice['item_color']?>
											</option>
											<?php endforeach;?>
										</select>
										<div class="dropDownSelect2"></div>
									</div>
								</div>
							</div>

							<div class="flex-w flex-r-m p-b-10">
								<div class="size-204 flex-w flex-m respon6-next">
									<div class="wrap-num-product flex-w m-r-20 m-tb-10">
										<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
											<i class="fs-16 zmdi zmdi-minus"></i>
										</div>

										<input class="mtext-104 cl3 txt-center num-product" type="number" name="qty" value="1" readonly>

										<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
											<i class="fs-16 zmdi zmdi-plus"></i>
										</div>
									</div>

								<?php if ($login):?>
									<input type="submit" value="Add to cart" id="addtocart" name="addtocart" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
								<?php else:?>
									<a href="<?=base_url('index.php/Login')?>" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
										Add to cart
									</a>
								<?php endif;?>
								</div>
							</div>	
						</div>
					</div>
				</div>
			</div>

			<div class="bor10 m-t-50 p-t-43 p-b-40">
				<!-- Tab01 -->
				<div class="tab01">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
						<li class="nav-item p-b-10">
							<a class="nav-link active" data-toggle="tab" href="#description" role="tab">Description</a>
						</li>

						<li class="nav-item p-b-10">
							<a class="nav-link" data-toggle="tab" href="#information" role="tab">Additional information</a>
						</li>

					</ul>

					<!-- Tab panes -->
					<div class="tab-content p-t-43">
						<!-- - -->
						<div class="tab-pane fade show active" id="description" role="tabpanel">
							<div class="how-pos2 p-lr-15-md">
								<p class="stext-102 cl6">
									<?= $desc_item?>
								</p>
							</div>
						</div>

						<!-- - -->
						<div class="tab-pane fade" id="information" role="tabpanel">
							<div class="row">
								<div class="col-sm-10 col-md-8 col-lg-6 m-lr-auto">
									<ul class="p-lr-28 p-lr-15-sm">
										<li class="flex-w flex-t p-b-7">
											<span class="stext-102 cl3 size-205">
												Weight
											</span>

											<span class="stext-102 cl6 size-206">
												<?= $weight_item?> grams
											</span>
										</li>

										<li class="flex-w flex-t p-b-7">
											<span class="stext-102 cl3 size-205">
												Care Instructions
											</span>

											<span class="stext-102 cl6 size-206">
												<?= $care_ins?>
											</span>
										</li>

										<li class="flex-w flex-t p-b-7">
											<span class="stext-102 cl3 size-205">
												Color
											</span>

											<span class="stext-102 cl6 size-206">
											<?php foreach ($color as $color_choice):?>
												<?=$color_choice['item_color']?>
											<?php endforeach;?>
											<?=$color_item?>
											</span>

										</li>

										<li class="flex-w flex-t p-b-7">
											<span class="stext-102 cl3 size-205">
												Size
											</span>

											<span class="stext-102 cl6 size-206">
											<?php foreach ($stocks as $stock):?>
												<?=$stock['item_size']?> 
											<?php endforeach;?>
											</span>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="bg6 flex-c-m flex-w size-302 m-t-73 p-tb-15">
			<!-- <span class="stext-107 cl6 p-lr-25">
				SKU: JAK-01
			</span> -->

			<span class="stext-107 cl6 p-lr-25">
				Categories: <?= $type_item?>
			</span>
		</div>
		<?php //endforeach;?>
	</section>


	<!-- Related Products -->
	<section class="sec-relate-product bg0 p-t-45 p-b-105">
		<div class="container">
			<div class="p-b-45">
				<h3 class="ltext-106 cl5 txt-center">
					Related Products
				</h3>
			</div>

			<div class="row isotope-grid">
				<?php foreach ($related as $row):
					$id_item= $row['id_item'];
					$id_item_col= $row['id_item_colored'];
					$name_item= $row['item_name'];
					$color_item= $row['item_color'];
					$desc_item= $row['item_desc'];
					$price_item= $row['selling_price'];
					$photo_item= $row['item_photo'];
					$type_item= $row['type_desc'];
				?>
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item <?=$type_item?>">
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="<?=base_url('asset/images/'.$type_item.'/'.$photo_item)?>" alt="IMG-PRODUCT">

							<a href="<?=base_url('index.php/Products/showDetail/'.$id_item_col)?>" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
								Detail
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="<?=base_url('index.php/Products/showDetail/'.$id_item_col)?>" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									<?=$name_item?>
								</a>

								<span class="stext-105 cl3">
									IDR <?=number_format($price_item,0,",",".")?>
								</span>
							</div>
						</div>
					</div>
				</div>

				<?php endforeach;?>
			</div>
		</div>
	</section>
		
	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>

<?=$footer?>
<script>
var stock=0;
	<?php if ($modal=="cart"):?>
	$('.js-addcart-detail').each(function () {
		var nameProduct = $('.js-name-detail').html();
		$(this).ready(function () {
			swal(nameProduct, "is added to cart !", "success");
		});
	});

	<?php elseif ($modal=="wishlist"):?>
	$('.js-addcart-detail').each(function () {
		var nameProduct = $('.js-name-detail').html();
		$(this).ready(function () {
			swal(nameProduct, "is added to wishlist !", "success");
		});
	});

	<?php elseif ($modal=="remove"):?>
		var nameProduct = $('.js-name-detail').html();
		$(this).ready(function () {
			swal(nameProduct, "is removed from wishlist !", "success");
		});	
	<?php endif;?>

	$('.btn-num-product-up').on('click', function(){
		var numProduct = Number($(this).prev().val());
        if(numProduct<stock) $(this).prev().val(numProduct + 1);
    });

	$('#size').change(function(){
		var selected = $(this).find('option:selected');
		stock = selected.data('stock');
		if(stock<=0){
			$('#addtocart').attr('disabled',true);
			$('#addtocart').removeClass('bg1');
			$('#addtocart').removeClass('hov-btn1');
		}else{
			$('#addtocart').attr('disabled',false);
			$('#addtocart').addClass('bg1');
			$('#addtocart').addClass('hov-btn1');
		}
    });
</script>


