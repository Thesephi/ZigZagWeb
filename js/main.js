/* ZigZag Career main.js
 * Written by Seph
 */
 
$(function() {
	
	// deprecated
	//adjustStories();
	
	/*$(window).bind('scroll', function() {
		console.log($(window).scrollTop());
	});*/
	
	$('div.sect-nav-arr').each(function(index) {
		$(this).bind('click', function() {
			$("html, body").animate(
				{ scrollTop: ($(window).scrollTop() + $(window).height()) + "px" },
				{
					complete : function(){
						console.log('this alert will popup twice');
					}
				}
			);
		});
	});
	
});

/*
 * deprecated but we'll keep it for the sake of reference.
 * This function assumes the article.story elements have 700px height each
 * and the direct child 'div' of every article.story element has to be 'vertically centered' upon page loading
 */
function adjustStories() {
	$('article.story').each(function(index) {
		var theChild = $(this).children('div')[0];
		var theChildHeight = $(theChild).height();
		theChild.style.position = 'relative';
		theChild.style.top = ($(this).height()/2 - theChildHeight/2) + 'px';
	});
}
