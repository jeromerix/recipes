var clicks = 0

function likeBtn() {
    clicks++
    var numLikesSpan = document.getElementById('num-likes')
    numLikesSpan.innerHTML = clicks

}
