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

function checkForm(){
	$email = $('#email').val().toString();
	$name = $('#author').val().toString();
	var $validEmail = /^[a-z0-9][a-z0-9_\.-]{0,}[a-z0-9]@[a-z0-9][a-z0-9_\.-]{0,}[a-z0-9][\.][a-z0-9]{2,4}$/;
	$msg = $('#msg');
	var emailTest = $validEmail.test($email);
	
	if(emailTest == false) {
		if($name == '') {
			$msg.html("Error: Please enter your name and a valid email address").show().addClass("msgVisible");
			 window.location.href = "#msg";
		} else {
			$msg.html("Error: Please enter a valid email address").show().addClass("msgVisible");
			 window.location.href = "#msg";
		}
		return false;
	} else if($name == '') {
		$msg.html("Error: Please enter your name").show().addClass("msgVisible");
		 window.location.href = "#msg";
		return false;
	} else {
		return true;
	}
	

}	
