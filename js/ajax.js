var $scores = $("#scores");
setInterval(function () {
    $scores.load("index.php #scores");
}, 500);