window.onload = function(){
    document.getElementById("timerStopButton").style.display = "none";
    var sec = 0;
    var minutes  = 0;
    var inter;
    var mS = 0;
    document.getElementById("timerStopButton").addEventListener("click",function(){
        clearInterval(inter);
        });
    document.getElementById("timerSubmitButton").addEventListener("click",function(){
        document.getElementById("timerSubmitButton").style.display = "none";
        document.getElementById("timerStopButton").style.display = "block";
       inter = setInterval(function(){
        mS++;
        if (mS==10){
            sec++;
            mS = 0;
        }
        if (sec==60){
            sec = 0;
            minutes++;
        }
        document.getElementById("timerText").innerHTML = minutes+": "+sec+": "+mS;
       }, 100);
    });

}