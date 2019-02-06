$(function () {
    $.ajaxSetup({

    });

    $('.btn-like > .like-icon').click(function (event) {
        var id = $(this).parent().children('.comment-id').val();
        var likesBox = $(this).parent().children('.num-likes').html(function () {
            likeComment(id);
            return parseInt(this.innerHTML) + 1;
        });
    });
});

function likeComment(commentId) {
    $.ajax({
        type: 'POST',
        url: '/api/recipe/comments/' + commentId + '/like'
    }).done(function (data) {
        console.log(data);
    });
}

var clicks = 0

function likeBtn() {
    clicks++;
    var numLikesSpan = document.getElementById('num-likes');
    numLikesSpan.innerHTML = clicks;
}


$(document).click(function (e) {
    if (!$(e.target).is('.navbar-toggler')) {
        $('.collapse').collapse('hide');
    }
});
