$(document).ready( () => {

    $('#productType').change( function() {
        $('.content').hide();
        var $selectedValue = $(this).val();
        $("." + $selectedValue).show();
    });

    $('form').submit(function(event) {
        event.preventDefault();
        var sku = $('#sku').val();
        var name = $('#name').val();
        var price = $('#price').val();
        var size = $('#size').val();
        var height = $('#height').val();
        var width = $('#width').val();
        var length = $('#length').val();
        var weight = $('#weight').val();
        var productType = $('#productType').val();
        $.ajax({
            url: "classes/insert.php",
            method: 'POST',
            data: {
                SKU: sku,
                Name: name,
                Price: price,
                size: size,
                height: height, 
                width: width,
                length: length,
                weight: weight,
                productType: productType
            }, success: function (response) {
                $('#form-message').html(response);
                if (response.indexOf('success') >= 0)
                    window.location = 'http://localhost//test_task/index.php';
            },
            dataType: 'text'
        })
        
        });
    });


    
