$(document).ready(function(){

	let input_val = ['7', '_', '_', '_', '_', '_', '_', '_', '_', '_', '_']
	let addition
	let new_val
	let del

	function renderInput() {
		new_val = '+7 ( '+input_val[1]+input_val[2]+input_val[3]+' ) '+input_val[4]+input_val[5]+input_val[6]+' - '+input_val[7]+input_val[8]+' - '+input_val[9]+input_val[10]
		$('.product__quick-order-input-phone').val(new_val)		
		$('.product__quick-order-input-phone').get(0).setSelectionRange($('.product__quick-order-input-phone').val().indexOf('_'), $('.product__quick-order-input-phone').val().indexOf('_'))
	}

	$('.product__quick-order-input-phone').on('click', function(e) {
		$(this).get(0).setSelectionRange($(this).val().indexOf('_'), $(this).val().indexOf('_'))
	})

	$('.product__quick-order-input-phone').on('keydown', function(e) {
		if (e.keyCode === 37 || e.keyCode === 38 || e.keyCode === 39 || e.keyCode === 40) {
			e.preventDefault()
		}
		if (e.keyCode === 8 || e.keyCode === 46) {
			e.preventDefault()
			del = input_val.findIndex(value => /[^\d]/g.test(value))
			if (del == -1) input_val[10] = '_'
			if (del == 0) input_val[0] = '_'
			else input_val[del - 1] = '_'
			renderInput()	
		}
	})

	$('.product__quick-order-input-phone').on('input', function(e) {
		input_val = $(this).val().replace(/[^\d]/g, '').split('')
		addition = 11 - input_val.length
		for ( let i = 0 ; addition > i ; i++) input_val.push('_')
		renderInput()	
	})






	let size
	let count
	let code = $('.product__price-article-number').text()
	let parents_offset_top
	let parents_offset_left
	let none_offset = {top: -10000, left: -10000}

	function regionListHide() {
		if ($('.product__delivery-region').hasClass('expanded')) {
			$('.product__delivery-region').removeClass('expanded')
			$('.product__delivery-region-list').offset(none_offset)
			$('.product__delivery-region').html($('.product__delivery').attr('data-region'))
		}
	}

	$('.product_size-content-i_enable').on('click', function() {
		$('.product_size-content-i_enable').removeClass('product_size-content-i_activ')
		$(this).addClass('product_size-content-i_activ')
		size = $(this).attr('data-size')
	})

	$('.product__photo-prev-content-img').on('click', function() {
		$('.product__photo-prev-content-img').removeClass('product_photo-prev-content-img_activ')
		$(this).addClass('product_photo-prev-content-img_activ')
		$('.product__photo-img').css({'background-image' : 'url(photo/' + $(this).attr('data-link') + ')'})
	})

	$('.product__basket-minus').on('click', function() {
		count = $('.product__basket-count').attr('data-count')
		if (count > 1) {
			$('.product__basket-count').html(count / 1 - 1)
			$('.product__basket-count').attr('data-count', count / 1 - 1)
		}
	})

	$('.product__basket-plus').on('click', function() {
		count = $('.product__basket-count').attr('data-count')
		if (count < 6) {
			$('.product__basket-count').html(count / 1 + 1)
			$('.product__basket-count').attr('data-count', count / 1 + 1)
		}
	})

	$('.product__price-article-number').on('click', function() {
		window.navigator.clipboard.writeText(code)
		alert('Код товара ' + code + ' скопирован в буфер обмена')
	})

	$('.product__delivery-region').on('click', function() {
		if ($(this).hasClass('expanded')) {
			$(this).removeClass('expanded')
			$('.product__delivery-region-list').offset(none_offset)
		} else {
			parents_offset_top = $(this).offset().top
			parents_offset_left = $(this).offset().left
			$('.product__delivery-region-list').offset({top: parents_offset_top - 12, left: parents_offset_left - 13})
			$(this).addClass('expanded')
		}
	})

	$(document).on('click', function() {
		regionListHide()
	})

	$(window).resize(function() {
		regionListHide()
	})

	$('.product__delivery-region, .product__delivery-region-list').on('click', function(e){
		e.stopPropagation()
	})

	$('.product__delivery-region').html($('.product__delivery').attr('data-region'))
	$('.product_delivery-region_activ').html($('.product__delivery').attr('data-region'))
	$('.product__delivery-region-list li').has('span[data-region='+$('.product__delivery').attr('data-region')+']').css({'display' : 'none'})

	$('.product__delivery-region-list li').on('click', function(e){
		$('.product__delivery-region-list li').css({'display' : 'inline-block'})
		$(this).css({'display' : 'none'})
		$('.product__delivery').attr('data-region', $(this).text())
		$('.product_delivery-region_activ').html($('.product__delivery').attr('data-region'))
		regionListHide()
		$.ajax({
			type: 'POST',
			url: 'cookie.php',
			data: 'region='+$('.product__delivery').attr('data-region')
		})
	})

	$('.product__price-economy span:first-child').html($('.product__price-old-price').text().replace(/[^\d]/g, '') - $('.product__price-price').text().replace(/[^\d]/g, ''))
	$('.product__price-discount').html('-' + Math.round($('.product__price-economy span:first-child').text().replace(/[^\d]/g, '') / $('.product__price-old-price').text().replace(/[^\d]/g, '') * 100) + ' %')

	$('.product__basket-button').on('click', function() {
		$.ajax({
			type: 'POST',
			url: 'basket.php',
			data: 'article='+$('.product__price-article-number').text()+'&size='+$('.product_size-content-i_activ').attr('data-size')+'&count='+$('.product__basket-count').attr('data-count'),
			success: function(){
				alert('Товар добавлен в корзину')
			}
		})
	})

})
