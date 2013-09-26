/* ZigZag Career main.js
 * Written by Seph
 */

var _isScrolling = false;
var _scrollCompleteCalled = false;
var _storyPos = [0];
var _curStoryPos = 0;

$(function() {

	console.log("Chào bạn đã viếng thăm console log. Nếu bạn quan tâm đến cơ hội làm việc tại mảng kỹ thuật ở ZigZag Career hoặc các công ty liên kết với ZigZag Career, xin hãy gửi email về địa chỉ info@zigzagcareer.com nhé!");
	
	/*$(window).bind('scroll', function() {
		console.log($(window).scrollTop());
	});*/
	
	// take care of the canvas for story4
	//canvasCtrl.init();
	
	adjustStories();
	
	$(window).bind('resize', function() {
		adjustStories();
	});
	
	$("body").mousewheel(function(event, delta) {
		if(!_isScrolling) {
			
			var toPos = (delta < 0)? _curStoryPos+1 : _curStoryPos-1;
			if(toPos < 0) {
				_curStoryPos = 0;
				return;
			} else if(toPos > _storyPos.length-1) {
				_curStoryPos = _storyPos.length-1;
				return;
			}
			
			_isScrolling = true;
			_scrollCompleteCalled = false;
			
			$("html, body").animate(
				{ scrollTop: _storyPos[toPos] + "px" },
				{
					complete: function() {
						if(!_scrollCompleteCalled) {
							_scrollCompleteCalled = true;
							_curStoryPos = toPos;
							setTimeout(validateScrl, 500);
						}
					}
				}
			);
		}
		event.preventDefault();
	});
	
	$('div.sect-nav-arr').each(function(index) {
		$(this).bind('click', function() {
			
			//var arrAnchor = $(this).offset().top + $(this).height();
			var slideAmt;
			var wholeSlideAnchor = $(window).scrollTop() + $(window).height();
			var article = $(this).closest('article');
			var nextSlideAnchor = article.next().children().offset().top;
			if($(article).next().height() > $(window).height()) {
				console.log('nextSlideAnchor');
				slideAmt = nextSlideAnchor;
			} else {
				slideAmt = wholeSlideAnchor;
			}
			
			_isScrolling = true;
			_scrollCompleteCalled = false;
			
			$("html, body").animate(
				{ scrollTop: slideAmt + "px" },
				{
					complete: function() {
						if(!_scrollCompleteCalled) {
							_scrollCompleteCalled = true;
							_curStoryPos = index+1;
							setTimeout(validateScrl, 500);
						}
					}
				}
			);
		});
	});
	
});

function validateScrl() {
	_isScrolling = false;
}

function adjustStories() {

	// per-element specific adjustments BEFORE general adjustments
	// for div#illus3, we want its smartHeight to be "true" when window width < 480 and false otherwise
	if($(window).width() >= 768) {
		$('div#illus3').data('smartHeight', false);
	} else {
		$('div#illus3').data('smartHeight', true);
	}
	
	_storyPos = [0];

	// general adjustments
	$('article.story').each(function(index) {
		
		var theChild = $(this).children('div')[0];
		
		var theIllusDiv = $(theChild).children('div.illus')[0];
		var theIllusDivCurWidth = $(theIllusDiv).width();
		if($(theIllusDiv).data('smartHeight')) {
			$(theIllusDiv).css('height', 'auto'); // which means the div will base its height on its current content
		} else {
			var theRatio = $(theIllusDiv).data('dimRatio');
			if(!theRatio) {
				theRatio = 550/1330;
			}
			$(theIllusDiv).height(Math.round(theIllusDivCurWidth * theRatio));
		}
		
		var theChildHeight = $(theChild).height();
		
		if($(window).height() > theChildHeight) {
			$(this).height($(window).height());
		} else {
			$(this).css('height', '');
		}
		
		theChild.style.position = 'relative';
		theChild.style.top = Math.round($(this).height()/2 - $(theChild).height()/2) + 'px';
		
		_storyPos.push($(this).offset().top);
	});
	
	// specific adjustments AFTER general adjustments
	//if(canvasCtrl.canvas) {
	//	var canvas = canvasCtrl.canvas;
	//	var containerWid = $('div#illus4').width();
	//	var containerHei = $('div#illus4').height();
	//	var imgWid = canvasCtrl.onLayerWid;
	//	var imgHei = canvasCtrl.onLayerHei;
	//	canvas.width = containerWid;
	//	canvas.height = containerHei;
	//	var imgX = containerWid/2 - imgWid/2;
	//	var imgY = containerHei/2 - imgHei/2;
	//	canvasCtrl.ctx.drawImage(canvasCtrl.onLayer, 0, 0, containerWid, containerHei);
	//}
}

function gotoBot() {
	_isScrolling = true;
	_scrollCompleteCalled = false;
	$("html, body").animate(
		{ scrollTop: $(document).height() },
		{
			complete: function() {
				if(!_scrollCompleteCalled) {
					_scrollCompleteCalled = true;
					_curStoryPos = _storyPos.length-1;
					setTimeout(validateScrl, 500);
				}
			}
		},
		500
	);
}

function toggleSubMenu(sel, flag) {
	try {
		$('ul'+sel).css('display', flag);
	} catch(error) {
		console.log(error);
	}
}

/*var canvasCtrl = {
	"canvas" : null,
	"ctx" : null,
	"onLayer" : null,
	"onLayerWid" : 0,
	"onLayerHei" : 0,
	"init" : function() {
		this.canvas = document.getElementById('art4c');
		this.ctx = this.canvas.getContext('2d');
		this.onLayer = document.createElement('img');
		this.onLayer.data = {parent: this};
		this.onLayer.src = '../imgs/home_art/04_1060x660.png';
		this.onLayer.id = 'onLayer';
		this.onLayer.onload = function() {
			
			var canvasCtrl = this.data.parent;
			canvasCtrl.onLayerWid = $(this).width();
			canvasCtrl.onLayerHei = $(this).height();
			
			var canvas = this.data.parent.canvas;
			var ctx = this.data.parent.ctx;
			//ctx.fillRect(0,0,780,260);
			
			ctx.drawImage(this, 0, 0, $('div#illus4').width(), $('div#illus4').height());
		}
	},
	"mask1" : function() {
		console.log(this.ctx);
	}
}*/