$(document).ready(function(){
    var controller = new ScrollMagic.Controller();
    
    // COUPLETITLE
    new ScrollMagic.Scene({
        triggerElement: "#couple-title",
        triggerHook: 0.8,
        duration: "80%"
    })
    .setClassToggle("#couple-title", "fade-in")
    // .addIndicators()
    .addTo(controller);

    // NAVBAR SECTION
    var i = 1;
    $('.section').each(function(){
        var duration = $(this).height();
        var toggle = '#navbar>a:nth-child('+i+')';
        new ScrollMagic.Scene({
            triggerElement: this,
            duration: duration
        })
        .setClassToggle(toggle,'active')
        // .addIndicators()
        .addTo(controller);
        i++;
    })

    //COVER
    new ScrollMagic.Scene({
        triggerElement: "#cover",
        triggerHook: "onEnter",
        duration: $('#cover').height()
    })
    .setPin()
    .addIndicators()
    .addTo(controller);


});