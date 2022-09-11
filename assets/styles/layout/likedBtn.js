$(function(){
    $(document).one('click', '.like-review', function(e) {
        $(this).html('<i class="fa fa-heart" aria-hidden="true"></i> Favourite');
        $(this).children('.fa-heart').addClass('animate-like bt');
    });
});