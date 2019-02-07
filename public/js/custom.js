$(function () {
    $.ajaxSetup({

    });

    $('.btn-like > .like-icon').click(function (event) {
        var id = $(this).parent().children('.comment-id').val();
        var userId = $(this).parent().children('.user-id').val();
        var likesBox = $(this).parent().children('.num-likes').html(function () {
            likeComment(id, userId);
            return parseInt(this.innerHTML) + 1;
        });
    });
});

function likeComment(commentId, userId) {
    $.ajax({
        type: 'POST',
        url: '/api/recipe/comments/' + commentId + '/like/' + userId,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    }).done(function (data) {
        updateLikes(data.comment_id, data.likes);
    });
}

var clicks = 0

function likeBtn() {
    // clicks++;
    // var numLikesSpan = document.getElementById('num-likes');
    // numLikesSpan.innerHTML = clicks;
}

function updateLikes(commentId, likesAmount) {
    var likeBox = $('#comment-like-' + commentId).parent().children('.num-likes').text(likesAmount);
    var label = $('#comment-like-' + commentId).parent().children('.like-txt');
    var labelText = "";

    if (label.html().trim() == 'Like') {
        labelText = 'Unlike';
    } else {
        labelText = 'Like';
    }

    label.html(labelText);
}


$(document).click(function (e) {
    if (!$(e.target).is('.navbar-toggler')) {
        $('.collapse').collapse('hide');
    }
});

function redirectConfirmation(redirectUrl, message) {
    var r = confirm(message);
    if (r == true) {
        document.location.href = redirectUrl;
    }
}

function redirectConfirmationRecipe(redirectUrltwo, message) {
    var r = confirm(message);
    if (r == true) {
        document.location.href = redirectUrltwo;
    }
}
