var TxtRotate = function(el, toRotate, period) {
  this.toRotate = toRotate;
  this.el = el;
  this.loopNum = 0;
  this.period = parseInt(period, 10) || 2000;
  this.txt = '';
  this.tick();
  this.isDeleting = false;
};

TxtRotate.prototype.tick = function() {
  var i = this.loopNum % this.toRotate.length;
  var fullTxt = this.toRotate[i];

  if (this.isDeleting) {
    this.txt = fullTxt.substring(0, this.txt.length - 1);
  } else {
    this.txt = fullTxt.substring(0, this.txt.length + 1);
  }

  this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

  var that = this;
  var delta = 300 - Math.random() * 100;

  if (this.isDeleting) { delta /= 2; }

  if (!this.isDeleting && this.txt === fullTxt) {
    delta = this.period;
    this.isDeleting = true;
  } else if (this.isDeleting && this.txt === '') {
    this.isDeleting = false;
    this.loopNum++;
    delta = 500;
  }

  setTimeout(function() {
    that.tick();
  }, delta);
};

window.onload = function() {
  var elements = document.getElementsByClassName('txt-rotate');
  for (var i=0; i<elements.length; i++) {
    var toRotate = elements[i].getAttribute('data-rotate');
    var period = elements[i].getAttribute('data-period');
    if (toRotate) {
      new TxtRotate(elements[i], JSON.parse(toRotate), period);
    }
  }
  // INJECT CSS
  var css = document.createElement("style");
  css.type = "text/css";
  css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid #666 }";
  document.body.appendChild(css);
};

var Conclave=(function(){
	var buArr =[],arlen;
	return {
		init:function(){
			this.addCN();this.clickReg();
		},
		addCN:function(){
			var buarr=["holder_bu_awayL3","holder_bu_awayL2","holder_bu_awayL1","holder_bu_center","holder_bu_awayR1","holder_bu_awayR2","holder_bu_awayR3","holder_bu_awayR4"];
			for(var i=1;i<=buarr.length;++i){
				$("#bu"+i).removeClass().addClass(buarr[i-1]+" holder_bu");
			}
		},
		clickReg:function(){
			$(".holder_bu").each(function(){
				buArr.push($(this).attr('class'))
			});
			arlen=buArr.length;
			for(var i=0;i<arlen;++i){
				buArr[i]=buArr[i].replace(" holder_bu","")
			};
			$(".holder_bu").on('click', function(buid){
				var me=this,id=this.id||buid,joId=$("#"+id),joCN=joId.attr("class").replace(" holder_bu","");
				var cpos=buArr.indexOf(joCN),mpos=buArr.indexOf("holder_bu_center");
				if(cpos!=mpos){
					tomove=cpos>mpos?arlen-cpos+mpos:mpos-cpos;
					while(tomove){
						var t=buArr.shift();
						buArr.push(t);
						for(var i=1;i<=arlen;++i){
							$("#bu"+i).removeClass().addClass(buArr[i-1]+" holder_bu");
						}
						--tomove;
					}
				}
			})
		},
		auto:function(){
			for(i=1;i<=1;++i){
				$(".holder_bu").delay(4000).trigger('click',"bu"+i).delay(4000);
				console.log("called");
			}
		}
	};
})();

$(document).ready(function(){
	window['conclave']=Conclave;
	Conclave.init();
})

/******************************************
totop
******************************************/	
jQuery(document).ready(function(jQuery){
	// browser window scroll (in pixels) after which the "back to top" link is shown
	var offset = 300,
		//browser window scroll (in pixels) after which the "back to top" link opacity is reduced
		offset_opacity = 1200,
		//duration of the top scrolling animation (in ms)
		scroll_top_duration = 700,
		//grab the "back to top" link
		jQueryback_to_top = jQuery('.totop');

	//hide or show the "back to top" link
	jQuery(window).scroll(function(){
		( jQuery(this).scrollTop() > offset ) ? jQueryback_to_top.addClass('totop-is-visible') : jQueryback_to_top.removeClass('totop-is-visible totop-fade-out');
		if( jQuery(this).scrollTop() > offset_opacity ) { 
			jQueryback_to_top.addClass('totop-fade-out');
		}
	});

	//smooth scroll to top
	jQueryback_to_top.on('click', function(event){
		event.preventDefault();
		jQuery('body,html').animate({
			scrollTop: 0 ,
		 	}, scroll_top_duration
		);
	});




});