$(document).ready(function () {
    $('.navicon').on('click', function (e) {
        console.log('1');
        e.preventDefault();
        $(this).toggleClass('navicon--active');
        $('.toggle').toggleClass('toggle--active');
    });

    $('#image_target').attr('src');
    console.log($('#image_target').attr('src'));
    $('input[name=image_upload]').on('change', function () {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#image_target').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
    });

});

jQuery(document).ready(function ($) {
    $(".scroll").click(function (event) {
        event.preventDefault();
        $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
    });
});

$(document).ready(function () {
    $('.orderID').on('click', function () {
        $id = $(this).parent('.aaa').find('.inputID').val();
        console.log($id);
        getID($id);
    })

    function getID($id) {
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            },
            url: '/getDetail/' + $id,
            type: 'get',
            data: {},
            success: function (data) {
                $('#result').html(data);
            }
        })
    }

})

$(document).ready(function () {
    $('.userID').on('click', function () {
        $id = $(this).parent('.aaa').find('.inputID').val();
        console.log($id);
        getUserID($id);
    })

    function getUserID($id) {
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            },
            url: '/getUserID/' + $id,
            type: 'get',
            data: {},
            success: function (data) {
                $('#result').html(data);
            }
        })
    }

})
