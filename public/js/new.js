$(document).ready(function(){

    var viewportWidth = $(window).width();
console.log("Viewport Width: " + viewportWidth);

    if(viewportWidth < 769 ) {
        $('.down_nav').hide()
        $('.fa-xmark').hide()


        $(".fa-bars").on('click',function(){
            
            $('.down_nav').show()
            $('.fa-xmark').show()
            $('.fa-bars').hide()

        })

        $(".fa-xmark").on('click',function(){
            
            $('.down_nav').hide()
            $('.fa-bars').show()
            $('.fa-xmark').hide()

            
        })

        

    }

    else {

        $('.down_nav').show()
        console.log("heelo")

    }
})