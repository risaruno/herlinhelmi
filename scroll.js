$(document).ready(function(){
    var controller = new ScrollMagic.Controller();
    // build scene
    var scene = new ScrollMagic.Scene({
        triggerElement: "#couple-title",
        triggerHook: 0.8,
        duration: "80%"
    })
    .setClassToggle("#couple-title", "fade-in")
    //.addIndicators()
    .addTo(controller);

    let i = 1;
    $('.section').each(function(){
        var duration = $(this).height();
        var toggle = '#navbar>a:nth-child('+i+')';
        var navbarScene = new ScrollMagic.Scene({
            triggerElement: this,
            duration: duration
        })
        .setClassToggle(toggle,'active')
        //.addIndicators()
        .addTo(controller);
        i++;
    })
});