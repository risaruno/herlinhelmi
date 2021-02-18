$(document).ready(function(){
    var controller = new ScrollMagic.Controller();
    // build scene
    var scene = new ScrollMagic.Scene({
        triggerElement: "#couple-title",
        triggerHook: 0.8,
        duration: "75%"
    })
    .setClassToggle("#couple-title", "fade-in")
    .addIndicators()
    .addTo(controller);
});