IDR(function () {
    var selectedClass = "";
    IDR("p").click(function () {
        selectedClass = IDR(this).attr("data-rel");
        IDR("#portfolio").fadeTo(50, 0.1);
        IDR("#portfolio div").not("." + selectedClass).fadeOut();
        setTimeout(function () {
            IDR("." + selectedClass).fadeIn();
            IDR("#portfolio").fadeTo(50, 1);
        }, 500);

    });
});