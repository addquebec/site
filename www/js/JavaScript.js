function indexSliderMouseOver(){
    document.getElementById("wowslider-container1").style.zIndex = "-10";
}

function indexSliderMouseOut(){
    document.getElementById("wowslider-container1").style.zIndex = "10";
}
sfHover = function() {
        var sfEls = document.getElementById("menu").getElementsByTagName("LI");
        for (var i=0; i<sfEls.length; i++) {
                sfEls[i].onmouseover=function() {
                        this.className+=" sfhover";
                }
                sfEls[i].onmouseout=function() {
                        this.className=this.className.replace(new RegExp(" sfhover\\b"), "");
                }
        }
}
if (window.attachEvent) window.attachEvent("onload", sfHover);



