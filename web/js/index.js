$(document).ready(function() {
<<<<<<< HEAD
    //funcao para suavizar scroll dos links de ancora
    $('a[href*=\\#]').on('click', function(event){
        event.preventDefault();
        that = this;
        //anima o scrolling
=======
    $('a[href*=\\#]').on('click', function(event){
        event.preventDefault();
        that = this;

>>>>>>> 2739cb17dbe07c8b549b86e5ca9eacb70ab49ad6
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
<<<<<<< HEAD
});
=======
});
>>>>>>> 2739cb17dbe07c8b549b86e5ca9eacb70ab49ad6
