
    var $kids = $('.product-list').children();
    $kids.sort(function(a,b) {
        return parseInt(a.id) - parseInt(b.id);
    }).each(function(){
        var item = $(this);
        item.remove();
        $(item).appendTo('.product-list');
    });

    $(document).ready( () => {
        
    })
 

