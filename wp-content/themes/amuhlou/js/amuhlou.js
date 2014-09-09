//add the js class as soon as the DOM is ready


$(function(){


	$('#tabs').tabs();


	$("a.lb").fancybox({
			'overlayOpacity'	:	0.7,
			'overlayColor'		:	'#FFF'
	});
	
	
	$('.resume h2').toggle(
			function(){
				$(this).next().hide();
			}, function(){
				$(this).next().show();
			}
		
	);
	if($('#slideshow').length > 0) {
	
	
	cycleShow();
	}
	if($('#msg')){$('#msg').hide();}
});


         
function cycleShow(){
	    var stack = []; 
 
    // preload images into an array; we will preload beach3.jpg - beach8.jpg 
    for (var i = 3; i < 13; i++) { 
        var img = new Image(588,441); 
        img.src = 'http://www.amuhlou.com/wp-content/themes/amuhlou/images/slides/slide' + i + '.jpg'; 
        $(img).bind('load', function() { 
            stack.push(this); 
        }); 
    }  
 
    // start slideshow 
    $('#slideshow').cycle({ 
        timeout:  11000,
        pager: '#pager', 
        before:   onBefore 
    }); 
 
    // add images to slideshow 
    function onBefore(curr, next, opts) { 
        if (opts.addSlide) // <-- important! 
            while(stack.length) 
                opts.addSlide(stack.pop());  
    }; 
}

