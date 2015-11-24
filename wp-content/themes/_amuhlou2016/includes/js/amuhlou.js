$(function(){

    $('.resume h2').toggle(
            function(){
                $(this).next().hide();
            }, function(){
                $(this).next().show();
            }
        
    );
  
});
