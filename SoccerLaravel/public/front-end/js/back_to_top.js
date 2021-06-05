window.onscroll = function() {scrollFunction()};
	 
function scrollFunction() {
	if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
	    document.getElementById("len-top").style.display = "block";
	} else {
	    document.getElementById("len-top").style.display = "none";
	}
}

jQuery(document).ready(function($){ 	
	if($(".back-to-top").length > 0){
		$(".back-to-top").click(function () {
			$('body,html').animate({
				scrollTop: 0
			});
		});
	}		
});