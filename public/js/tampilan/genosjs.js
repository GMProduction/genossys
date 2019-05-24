$(".page-scroll").on("click", function(e) {
    var href = $(this).attr("href");
    var elementHref = $(href);

    console.log(elementHref);

    $("html, body").animate(
        {
            scrollTop: elementHref.offset().top - 100
        },
        "slow"
    );

    e.preventDefault();
});


$(window).on('load',function(){

    $('.home .heading').addClass('muncul');
    $('.home .paragraph').addClass('muncul');
    $('.home .btn-danger').addClass('muncul');

    });
