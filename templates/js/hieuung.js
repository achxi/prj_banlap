    $(document).ready(function(){
        $(".main").click(function(){
            $(this).siblings("div").toggle("slow");
        });
        $("a.hientt").click(function(){
             so = $(this).attr('id');
             $("div#chitiet"+so).show();
             for(i=1; i<=4; i++){
                 if(i!= so){
                     $("div#chitiet"+i).hide();
                 }
             }
             return false;
        });

        $(".randShow #mark:first").addClass("current");
        intervalID= setInterval("ProductRotate()", 2300);

        $(".randShow").hover(function(){
            if(intervalID){
                clearInterval(intervalID);
            }
        }, function(){
            intervalID= setInterval("ProductRotate()", 2300);
        });                
    });

function ProductRotate(){
    var currentPhoto= $(".randShow .current");
    var nextPhoto= currentPhoto.next();
    if(nextPhoto.length== 0){
        nextPhoto= $(".randShow div:first");
    }
    currentPhoto.removeClass("current").addClass("previous");
    nextPhoto.css({opacity: 0.0}).addClass("current").animate({opacity: 1.0}, 1000, function(){
        currentPhoto.removeClass("previous");
    });
}            