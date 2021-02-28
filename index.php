<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herlin & Helmi | KahfiArt</title>
    <link rel="stylesheet" href="src/font/Support/flaticon.css"/>
    <link rel="stylesheet" href="src/font/Wedding/flaticon.css"/>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="screen.css">
    <link rel="stylesheet" href="scroll.css">
    <link rel="shortcut icon" type="image/x-icon" href="src/img/kahfiart-icon.png"/>
</head>
<body>
<div id="loader-wrapper">
    <img src="src/img/Preloader.gif" alt="Preloader">
</div>
<div class="content">
    <div class="invite" id="invite">
        <div class="container-fluid">
            <div class="letter" id="letter">
                <div class="row">
                    <div class="column col-lg-12">
                        <p>Kepada Yth,<br>
                            <span class="guest" id="guest">Tamu Undangan</span><br>
                            di tempat
                        </p>
                        <p>
                            Kami mengundang anda untuk menghadiri momen spesial kami.<br>
                            Silakan, Tekan tombol dibawah ini.
                        </p>
                    </div>
                    <div class="column col-lg-12 text-center">
                        <button class="btn btn-letter" id="open" onclick="openLtr()">Buka Undangan</button>
                    </div>
                    <div class="column col-lg-12">
                        <div class="names">Herlin &<br>Helmi</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main">
        <div class="container-fluid overflow-hidden">
            <nav class="list-group list-group-horizontal hover-navbar" id="navbar">
                <a class="list-group-item list-group-item-action" href="#cover"><i class="flaticon-017-altar icon-wd icon"></i><br>Cover</a>
                <a class="list-group-item list-group-item-action" href="#couple"><i class="flaticon-005-couple icon-wd icon"></i><br>Couple</a>
                <a class="list-group-item list-group-item-action" href="#event"><i class="flaticon-015-date icon-wd icon"></i><br>Event</a>
                <a class="list-group-item list-group-item-action hp-menu" href="#health"><i class="flaticon-046-medical-support icon-sp icon"></i><br>Health <span>Protocols</span></a>
                <a class="list-group-item list-group-item-action" href="#gallery"><i class="flaticon-042-photo-album icon-wd icon"></i><br>Gallery</a>
                <a class="list-group-item list-group-item-action" href="#wish"><i class="flaticon-012-gift icon-wd icon"></i><br>Wish</a>  
            </nav>
            <div class="audio" id="audio-btn" onclick="stopAudio()">
                <audio src="src/music/bensound-love.mp3" loop id="audio"></audio>
                <i class="fas fa-music" id="audio-icon"></i>
            </div>
            <div class="row section text-center cover" id="cover">
                <div class="column col-lg-12 cover-title">The Wedding Of</div>
                <div class="column col-lg-12 cover-couple">Herlin &<br>Helmi</div>
                <div class="column col-lg-12 cover-date">14 March 2021</div>
                <div class="divider divider-bottom cover-d">
                    <svg  data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                        <path  d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill" fill="#FFFFFF" fill-opacity="1"></path>
                        <path  d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill" fill="#FFFFFF" fill-opacity="1"></path>
                        <path  d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill" fill="#FFFFFF" fill-opacity="1"></path>
                    </svg>
                </div>
            </div>
            <div class="row section text-center couple" id="couple">
                <div class="column col-lg-12 couple-title fade-out" id="couple-title">
                    We're Getting Married
                </div>
                <div class="column col-lg-5 bride">
                    <img src="src/img/Bride.jpeg" class="img-couple sh-hover" alt="Bride's Photo">
                    <div class="name">
                        <div class="first">Herlin</div>
                        <div class="last">Febriyanti</div>
                    </div>
                    <div class="parent">
                        Putri dari <span class="bFather">Bapak Arif Mulyana</span><br>
                        dan <span class="bMother">Ibu Erna Tresnawati</span>
                    </div>
                    <hr class="couple-hr">
                    <div class="socialmedia">
                        <a target="_blank" href="https://www.instagram.com/herlinfbr/">
                            <i class="fab fa-instagram icon"></i><span>herlinfbr</span>
                        </a>
                    </div>
                </div>
                <div class="column col-lg-2 and">
                    <span>&</span>
                </div>
                <div class="column col-lg-5 groom">
                    <img src="src/img/Groom.jpeg" class="img-couple sh-hover" alt="Groom's Photo">
                    <div class="d-block name">
                        <div class="first">Helmi</div>
                        <div class="last">Hari Ramdhan, S.T.</div>
                    </div>
                    <div class="parent">
                        Putra dari <span class="bFather">Bapak Ady Suprapto</span><br>
                        dan <span class="bMother">Ibu Eni Sri Mulyani</span>
                    </div><hr class="couple-hr">
                    <div class="socialmedia">
                        <a target="_blank" href="https://www.instagram.com/helmihariramdhan/">
                            <i class="fab fa-instagram icon"></i><span>helmihariramdhan</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row section dDay" id="event">
                <div class="divider divider-top dDay-d">
                    <svg  data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                        <path  d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill" fill="#FFFFFF" fill-opacity="1"></path>
                        <path  d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill" fill="#FFFFFF" fill-opacity="1"></path>
                        <path  d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill" fill="#FFFFFF" fill-opacity="1"></path>
                    </svg>
                </div>
                <div class="column col-lg-12 words">
                    <p>Bismillahirrohmanirrohim</p>
                    <p>
                        Maha Suci Allah SWT yang telah menciptakan makhluk-Nya
                        berpasang-pasangan. Ya Allah, Perkenankanlah kami untuk
                        menikahkan putra-putri kami. Untuk melakukan syariat agama-Mu
                        & mengikuti sunnah Nabi Muhammad SAW dalam membentuk keluarga
                        yang Sakinah Ma Waddah Wa Rahmah.<br>
                        Perkenankanlah kami untuk mengundang anda dan keluarga pada
                        acara pernikahan putra-putri kami yang akan dilaksanakan pada :
                    </p>
                </div>
                <div class="column col-lg-12">
                    <a target="_blank" href="https://calendar.google.com/event?action=TEMPLATE&tmeid=NTZlYnBuYWY0ZTZpNmhhazJhZnJoZ25idnMgcmlzYXJ1bm9tYW1vcnVAbQ&tmsrc=risarunomamoru%40gmail.com">
                        <button class="btn btn-saveDate saveDate">Save The Date</button>
                    </a>
                </div>
                <div class="column col-lg-6"> 
                    <div class="card akad-card sh-hover">
                        <div class="card-body">         
                            <div class="card-title">
                                <i class="flaticon-044-handshake icon-sp icon"></i><br>
                                <div class="ctitle">Akad Nikah</div><hr>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item date">
                                    <div class="list-icon"><i class="fas fa-calendar-day"></i></div>
                                    <div class="list-icon-desc">Minggu, 14 Maret 2021</div>
                                </li>
                                <li class="list-group-item time">
                                    <div class="list-icon"><i class="fas fa-clock"></i></div>
                                    <div class="list-icon-desc">08:00 WIB - Selesai</div>
                                </li>
                                <li class="list-group-item address">
                                    <div class="list-icon"><i class="fas fa-map-marker-alt"></i></div>
                                    <div class="list-icon-desc">Imah Asta, Jl. Bojongloa, Rancaekek, Kab. Bandung, Jawa Barat</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="column col-lg-6">
                    <div class="card resepsi-card sh-hover">
                        <div class="card-body">         
                            <div class="card-title">
                                <i class="flaticon-006-ring icon-wd icon"></i>
                                <div class="ctitle">Resepsi</div><hr>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item date">
                                    <div class="list-icon"><i class="fas fa-calendar-day"></i></div>
                                    <div class="list-icon-desc">Minggu, 14 Maret 2021</div>
                                </li>
                                <li class="list-group-item time">
                                    <div class="list-icon"><i class="fas fa-clock"></i></div>
                                    <div class="list-icon-desc">10:00 WIB - 13:30 WIB</div>
                                </li>
                                <li class="list-group-item address">
                                    <div class="list-icon"><i class="fas fa-map-marker-alt"></i></div>
                                    <div class="list-icon-desc">Imah Asta, Jl. Bojongloa, Rancaekek, Kab. Bandung, Jawa Barat</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="column col-lg-12 text-center count-down">
                    <div class="count-title">
                        <span class="party">Party</span>
                        <span class="count">Count</span>
                        <span class="down">Down</span>
                    </div>
                    <div class="timer">
                        <div class="days count-box"><span class="day">00</span><span class="ctime">Days</span></div>
                        <div class="hours count-box"><span class="hour">00</span><span class="ctime">Hours</span></div>
                        <div class="minutes count-box"><span class="minute">00</span><span class="ctime">Minutes</span></div>
                        <div class="seconds count-box"><span class="second">00</span><span class="ctime">Seconds</span></div>
                    </div>
                </div>
                <div class="column col-lg-12 text-center dress-code">
                    <div class="row-title">
                        Dress Code
                    </div>
                    <div class="card dress-card sh-hover">
                        <div class="card-body">
                            <ul class="list-group list-group-horizontal">
                                <li class="list-group-item">
                                    <i class="flaticon-004-suit icon-wd icon"></i>
                                </li>
                                <li class="list-group-item">
                                    White Attire
                                </li>
                                <li class="list-group-item">
                                    <i class="flaticon-002-dress icon-wd icon"></i>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="column col-lg-12 location">
                    <div class="location-title row-title">Location</div>
                    <hr class="loc-hr">
                    <div class="alert alert-warning" role="alert">
                        Tekan tombol "Lihat peta lebih besar" untuk memperbesar peta!
                    </div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1515.9510982741258!2d107.76323297612831!3d-6.964131318521227!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8bb6b77d2847866e!2sIMAH%20ASTA!5e0!3m2!1sid!2sid!4v1612023513669!5m2!1sid!2sid" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
                    </iframe>
                </div>
            </div>
            <div class="row section health" id="health">
                <div class="column col-lg-12">
                    <div class="card text-center health-card sh-hover">
                        <div class="card-body">
                            <div class="card-title">
                                Health Protocols <img src="src/icon/Freepik/medicine.png"><hr>
                            </div>
                            <div class="card-text">
                                Tanpa mengurangi rasa hormat, kami menghimbau kepada para tamu undangan
                                untuk mematuhi protokol kesehatan dengan baik saat berada di lokasi acara.
                                Hal-hal yang perlu diperhatikan adalah seperti poin-poin yang disebutkan dibawah ini.
                            </div>
                        </div>
                        <ul class="list-group list-group-horizontal">
                            <li class="list-group-item">
                                <div class="list-icon"><img src="src/icon/Freepik/044-medical mask.png"></div>
                                <div class="list-icon-desc">Gunakan Masker</div>
                            </li>
                            <li class="list-group-item">
                                <div class="list-icon"><img src="src/icon/Freepik/002-handwash.png"></div>
                                <div class="list-icon-desc">Cuci Tangan Pakai Sabun</div>
                            </li>
                            <li class="list-group-item">
                                <div class="list-icon"><img src="src/icon/Freepik/012-thermometer.png"></div>
                                <div class="list-icon-desc">Cek Suhu Tubuh</div>
                            </li>
                        </ul>
                        <ul class="list-group list-group-horizontal">
                            <li class="list-group-item">
                                <div class="list-icon"><img src="src/icon/Freepik/024-physical.png"></div>
                                <div class="list-icon-desc">Jaga Jarak</div>
                            </li>
                            <li class="list-group-item">
                                <div class="list-icon"><img src="src/icon/Freepik/017-do not touch.png"></div>
                                <div class="list-icon-desc">Tidak Bersentuhan</div>
                            </li>
                            <li class="list-group-item">
                                <div class="list-icon"><img src="src/icon/Freepik/048-cough.png"></div>
                                <div class="list-icon-desc">Bersin/Batuk Pada Tempatnya</div>
                            </li>
                        </ul>
                        <div class="card-footer">
                            <div>Icons made by <a target="_blank" href="https://www.freepik.com" title="Freepik">Freepik</a> from <a target="_blank" href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>
                        </div>
                    </div>
                </div>
                <div class="divider divider-bottom health-d">
                    <svg  data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                        <path  d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill" fill="#FFFFFF" fill-opacity="1"></path>
                        <path  d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill" fill="#FFFFFF" fill-opacity="1"></path>
                        <path  d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill" fill="#FFFFFF" fill-opacity="1"></path>
                    </svg>
                </div>
            </div>
            <div class="row section gallery" id="gallery">
                <div class="column col-lg-12">
                    <div class="gallery-title row-title">Gallery</div>
                    <hr class="gallery-hr">
                    <div class="row img">
                        <div class="col-lg-6">
                            <img src="src/img/HH_1.jpg" alt="" class="img-fluid">
                            <img src="src/img/HH_2.jpg" alt="" class="img-fluid">
                            <img src="src/img/HH_3.jpg" alt="" class="img-fluid">
                            <img src="src/img/HH_4.jpg" alt="" class="img-fluid">
                            <img src="src/img/HH_5.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="col-lg-6">
                            <img src="src/img/HH_6.jpg" alt="" class="img-fluid">
                            <img src="src/img/HH_7.jpg" alt="" class="img-fluid">
                            <img src="src/img/HH_8.jpg" alt="" class="img-fluid">
                            <img src="src/img/HH_9.jpg" alt="" class="img-fluid">
                            <img src="src/img/HH_10.jpg" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row section giftnWish" id="wish">  
                <div class="divider divider-top wish-d">
                    <svg  data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                        <path  d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill" fill="#FFFFFF" fill-opacity="1"></path>
                        <path  d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill" fill="#FFFFFF" fill-opacity="1"></path>
                        <path  d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill" fill="#FFFFFF" fill-opacity="1"></path>
                    </svg>
                </div>
                <div class="column col-lg-12 pray">
                    <div class="pray-title row-title">Our Pray</div>
                    <figure class="surah sh-hover">
                        <blockquote>
                            "Dan di antara ayat-ayat-Nya ialah Dia menciptakan
                            untukmu istri-istri dari jenismu sendiri, supaya kamu
                            merasa nyaman kepadanya, dan dijadikan-Nya di antaramu
                            mawadah dan rahmah. Sesungguhnya pada yang demikian
                            itu benar-benar terdapat tanda-tanda bagi kaum yang berpikir."
                        </blockquote>
                        <figcaption class="blockquote-footer">
                            <cite title="Source Title">(Q.S Ar-Rum:21)</cite>
                        </figcaption>
                    </figure>
                </div>
                <div class="column col-lg-6 gift">
                    <p>Tekan gambar, untuk mengirim hadiah.</p>
                    <div class="img-btn text-center" data-bs-toggle="modal" href="#gift-modal" role="button" aria-expanded="false" aria-controls="gift-modal">
                        <img src="src/icon/Freepik/package.png">
                    </div>
                    <div class="modal fade" id="gift-modal" tabindex="-1" aria-labelledby="gift-modal" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="gift-modal-label">Send Gift</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Bila saudara berkenan untuk memberikan
                                    hadiah kepada kami, Silakan kirim melalui
                                    informasi di bawah ini</p>
                                    <div class="giftAccount sh-hover">
                                        Bank BCA<br>
                                        0083588249<br>
                                        a.n Herlin Febriyanti
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column col-lg-6 wish">
                    <div class="card wish-card sh-hover">
                        <div class="card-header">
                            Wish and Pray
                        </div>
                        <div class="card-body">
                            <form class="wish-form needs-validation" id="wish-form" novalidate>
                                <div class="mb-3">
                                    <label for="name" class="form-label">Nama</label>
                                    <input type="text" class="form-control guest" id="name" name="name" placeholder="Tuliskan nama anda" required>
                                    <div class="invalid-feedback">Kolom tidak boleh kosong!</div>
                                </div>
                                <div class="mb-3">
                                    <label for="wish" class="form-label">Harapan dan doa</label>
                                    <textarea class="form-control" id="wish" name="wish" rows="5" placeholder="Tuliskan harapan dan doa anda untuk kami" required></textarea>
                                    <div class="invalid-feedback">Kolom tidak boleh kosong!</div>
                                </div>
                                <button type="submit" class="btn btn-rusty" id="btn-send">Kirim</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="column col-lg-12 thank-you">
                    <div>
                        Terima Kasih
                        <div class="ty-couple">-Herlin & Helmi-</div>
                    </div>
                    <small>Music By Bensound</small>
                </div>
            </div>
            <footer>
                <div>
                    Designed by kahfiart.online
                    <a target="_blank" href="https://kahfiart.online"><img src="src/img/kahfiart-icon.png" alt="Kahfi Art"></a>
                </div>
            </footer>
        </div>
    </div>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
<script src="function.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/ScrollMagic.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/plugins/debug.addIndicators.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/plugins/animation.gsap.min.js" integrity="sha512-5/OHwmQzDSBS0Ous4/hlYoWLHd06/d2r7LdKZQVBXOA6PvOqWVXtdboiLTU7lQTGyVoKVTNkwi0ol4gHGlw5ww==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js" integrity="sha512-DkPsH9LzNzZaZjCszwKrooKwgjArJDiEjA5tTgr3YX4E6TYv93ICS8T41yFHJnnSmGpnf0Mvb5NhScYbwvhn2w==" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
<script src="scroll.js"></script>
<script src="ajax.js"></script>
</html>