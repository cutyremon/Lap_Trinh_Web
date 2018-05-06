// $("a#commentbox").on('click', function ($page) {
//     $prd = $('#prd_id').val();
//
//     $.ajax({
//         headers: {
//             'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
//         },
//         // phương thức dữ liệu được truyền đi
//         url: '/getcomment',
//         type: 'GET',
//         data: {
//             prd: $prd,
//             page: $page,
//         },
//         success: function (data) {//kết quả trả về từ server nếu gửi thành công
//             $('div#comment_1').html(data);
//             // $('#myModalLabel')
//         },
//     });
// });

// function myfunction2() {
//     alert("hihi");
//     p ostComment_();
// }

var frm = $('#postComment');

frm.submit(function (e) {

    e.preventDefault();

    $.ajax({
        type: frm.attr('method'),
        url: frm.attr('action'),
        data: frm.serialize(),
        success: function (data) {
            $('#comment_1').html(data);
        },
        error: function (data) {
            console.log('An error occurred.');
            console.log(data);
        },
    });
});
// $("#postComment").on('click', function () {
//     postComment_();
// });
//
// function postComment_($page) {
//     $comment = $('#comment_text').val();
//     $product_1 = $('input#product_1').val();
//     $.ajax({
//         headers:
//             {
//                 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
//             }   ,
//         url: '/addcomment',
//         type: 'GET',
//         data: {
//             comment: $comment,
//             product_1: $product_1,
//             page: $page
//         },
//         success: function (data) {
//             $('#comment_1').html(data);
//         }
//
//     });
//
// }
