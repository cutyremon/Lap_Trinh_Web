$('.remove').click(function (e) {
    e.preventDefault();
    var location = $(this).attr('href');
    bootbox.confirm({
        backdrop: true,
        size: 'small',
        message: "Remove this product from cart ?",
        buttons: {
            confirm: {
                label: '<i class="fa fa-check"></i> Sure',
                className: 'btn-success',
            },
            cancel: {
                label: '<i class="fa fa-times"></i> Hol Up',
                className: 'btn-danger',
            }
        },
        callback: function (result) {
            console.log(result);
            if (result == true) {
                window.location.replace(location);
            }
        },
    });
});

function calculator() {
    var amt = $('.amount'),
        tot = $('#total');
    amt.text(function () {
        var tr = $(this).closest('tr');
        var qty = tr.find('.qty').val();
        var price = tr.find('.price').text().substr(1);
        console.log(price);
        return parseFloat(qty) * parseFloat(price);
    });
    tot.text(function () {
        var sum = 0;
        amt.each(function () {
            sum += parseFloat($(this).text())
        });
        console.log(sum);
        return sum;
    });
}

calculator();
$('.qty,.price').change(calculator);
