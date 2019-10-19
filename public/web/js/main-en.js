$(document).ready(function(){
	$('.headerSearch .searchSubmit').click(function(){
		$('.headerSearch form').submit();
	});
	$('.sideMenuHolder').click(function(){
		$(this).toggleClass('opened').parent().toggleClass('active');
		$('.sideMenuItems').slideToggle();
	});
	$('.siteNav .navItem a').hover(function(){
		var itsContent = $(this).find('span').text();
		$(this).parent('.navItem').find('.popTitle').text(itsContent).css('display','flex');
	},function(){
		$(this).parent('.navItem').find('.popTitle').removeAttr('style');
	});
	$('.mainSlider .owl-carousel').owlCarousel({
		loop: false,
		nav: false,
		dots:true,
		items: 1,
		margin: 0
	});
	$('.news .owl-carousel').owlCarousel({
		loop: false,
		nav: true,
		dots:true,
		items: 1,
		margin: 0,
		navText: ['<i class="fas fa-angle-left"></i>','<i class="fas fa-angle-right"></i>']
	});
	$('.saying .owl-carousel').owlCarousel({
		loop: true,
		nav: false,
		dots:true,
		items: 1,
		margin: 0
	});
	$('.accordionBlock .accItem .accTitle h2').click(function() {
		$(this).parents('.accItem').toggleClass('active').find('.accContent').slideToggle().parents('.accItem').siblings().removeClass('active').find('.accContent').slideUp();
	});
	filterSelection("all");
	function filterSelection(c) {
		var x, i;
		x = $(".filterItem");
		if (c == "all") c = "";
		for (i = 0; i < x.length; i++) {
			$(x[i]).removeClass('show');
			if (x[i].className.indexOf(c) > -1) $(x[i]).addClass('show');
		}
	}
	// Filter by Year & Day
	$('.filterButton').change(function () {
		var value = $(this).val();
		if (value !== '0') {
			filterSelection(value);
		} else {
			filterSelection("all");
		}
	});
});