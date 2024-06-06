$(function(){
    $(".collapsible-header").on("click", function(){
        let content = $(this).siblings(".collapsible-content");
        var isVisible = content.css("height") == "0px";
        $(".collapsible-content").css("height", "0");
        if(isVisible)
            content.animate({height: content.get(0).scrollHeight},5);
    });
});
