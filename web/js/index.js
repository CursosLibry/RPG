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
});
