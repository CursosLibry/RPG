$(document).ready(function() {
    //funcao para suavizar scroll dos links de ancora
    $('a[href*=\\#]').on('click', function(event){
        event.preventDefault();
        that = this;
        //anima o scrolling
        $('html, body').animate({
        scrollTop: $(that.hash).offset().top,
        },{
        duration: 500,
        queue: false,
        easing: 'swing',
        start: function(){
                if (window.location.hash != that.hash) {
                    window.location.hash = that.hash;
                }
        },
        complete: function(){
        }
        });
    });
    $('#nav-icon1,#nav-icon2,#nav-icon3,#nav-icon4').click(function(){
        $(this).toggleClass('open');
        var div = $("#menu_div");
        var conteudo = $(".menu");
        console.log(div.is(":visible"))
        if(div.is(":visible")==true){
            div.hide("fade", 200);
            // conteudo.show("fade",200);
        }else{
            div.show("fade", 200);
            // conteudo.hide("fade",200);
        }
    });
});