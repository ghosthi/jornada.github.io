 $(function(){
    startTimer(60*30, $(".countdown-btn"));
    $(".collapsible-header").on("click", function(){
        let content = $(this).siblings(".collapsible-content");
        var isVisible = content.css("height") == "0px";
        $(".collapsible-content").css("height", "0");
        if(isVisible)
            content.animate({height: content.get(0).scrollHeight},5);
    });
    
    let data = new Date();
    $(".header-text > span").html(
        (data.getDate() - 2) + ", " + (data.getDate() - 1) + " e " + data.getDate() + " de " + 
        ["Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro"][data.getMonth()]
    );
    
});

function startTimer(duration, display) {
    var timer = duration, minutes, seconds;
    setInterval(function () {
        minutes = parseInt(timer / 60, 10);
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.html(`<i class="material-icons">flash_on</i> ${minutes}:${seconds}`);

        if (--timer < 0) {
            timer = duration;
        }
    }, 1000);
}
