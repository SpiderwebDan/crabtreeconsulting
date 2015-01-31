$(document).ready(function() {
    $('button').click(function() {
        console.log("test");
        $('.popup').toggle();
        $('.wrap').toggle();

    })
    $('.wrap').click(function() {
        $('.popup').toggle();
        $('.wrap').toggle();
    })
})
