document.onreadystatechange = function () {
    var state = document.readyState
    if (state == 'complete') {

        // PRELOADING PAGE
    
        setInterval(function(){
            document.getElementsByTagName('body')[0].className = 'loaded';
        }, 3000);

    }
  }

    // GUEST NAME
    
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    const guestBox = document.getElementById('guest');
    const guest = urlParams.get('guest');
    if (guest!=null){
        guestBox.innerText = guest;
    }
    
    // PARTY COUNT DOWN //
    
    var dDay = new Date("Mar 14, 2021 08:00:00").getTime();
    var x = setInterval(function(){
        var now = new Date().getTime();
        var distance = dDay - now;
    
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
        document.querySelector(".day").innerHTML = days;
        document.querySelector(".hour").innerHTML = hours;
        document.querySelector(".minute").innerHTML = minutes;
        document.querySelector(".second").innerHTML = seconds;
    
    }, 1000);
    
    var audio = document.getElementById('audio');
    var aBtn = document.getElementById('audio-btn');
    var aIcon = document.getElementById('audio-icon');
    
    // OPEN INVITATION LETTER BUTTON //
    
    function openLtr(){
        var letter = document.getElementById('letter');
        var body = document.querySelector('body');
        letter.style.top = '-100%';
        function none(){
            letter.style.display = 'none';
            body.style.overflowY = 'scroll';
        }
        setTimeout(none, 500);
        audio.play();
    }
    
    // AUDIO CONTROL //
    
    function stopAudio(){
        audio.pause();
        audio.currentTime = 0;
        aBtn.setAttribute('onclick', 'playAudio()');
        aIcon.className = "fas fa-volume-mute";
    }
    
    function playAudio(){
        audio.play();
        aBtn.setAttribute('onclick', 'stopAudio()');
        aIcon.className = "fas fa-music";
    }


    // Elem Animation //

    const title = document.querySelector('.couple-title');
    const body = document.querySelector('body');
    const rect = title.getBoundingClientRect();
    const content = document.querySelector('.content');
    function scroll(){
        console.log(title.scrollHeight, body.scrollHeight, document.documentElement.scrollTop);
    };