$(document).ready(function () {
    $("#main-nav li a").on("click", function () {
        $("#main-nav li.current").removeClass("current");
        $(this).parent().addClass("current");
    });

    function slidingLine() {
        var $el, topPos, newHeight,
            $mainNav = $("#main-nav");

        $mainNav.append("<li id='slidingLine'></li>");
        var $slidingLine = $("#slidingLine");

        $slidingLine
            .height($(".current").outerHeight())
            .css("top", $(".current").position().top)
            .data("origTop", $slidingLine.position().top)
            .data("origHeight", $slidingLine.height());

        $("#main-nav li").hover(function () {
            $el = $(this);
            topPos = $el.position().top;
            newHeight = $el.outerHeight();
            $slidingLine.stop().animate({
                top: topPos,
                height: newHeight
            });
        }, function () {
            $slidingLine.stop().animate({
                top: $(".current").position().top,
                height: $(".current").outerHeight()
            });
        });
    }

    slidingLine();
});
