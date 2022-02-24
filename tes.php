<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="./styles/style2.css" rel="stylesheet"/>

    <!-- Firebase link
    <script src="https://www.gstatic.com/firebasejs/ui/4.4.0/firebase-ui-auth.js"></script>
    <link type="text/css" rel="stylesheet" href="https://www.gstatic.com/firebasejs/ui/4.4.0/firebase-ui-auth.css" /> -->

    <title>My Wedding</title>

</head>
<body>
    <audio autoplay>
        <source src="audio/Summer.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>

    <div id="overlay">
        <div class="container d-flex h-100 justify-content-center align-items-center">
            <div class="background position-fixed">
                <img src="images/background_welcome.jpg" alt="wedding-main" srcset="" class="bg-heading">
                <div class="mask"></div>
            </div>
            <div class="content text-center text-white position-fixed">
                <h6 class="mb-4">WE ARE GETTING MARRIED</h6>
                <h1 class="mb-4">
                    Bella & Dani
                </h1>
                <p class="separator mb-4">SAVE THE DATE</p>
                <h5 class="date">20 Februari 2022</h5>
                <p class="caption d-block mb-3">
                    Kepada Bapak/Ibu/Saudara/Sahabat
                </p>
                <p class="name d-block mb-4">
                    <?php echo $_GET['nama']; ?>
                </p>
                <button class="invitation-btn">
                    BUKA UNDANGAN
                </button>
            </div>
        </div>
    </div>

    <div id="heading">
        <div class="container d-flex h-100">
            <div class="background">
                <img src="images/dummy.png" alt="wedding-main" srcset="" class="bg-heading">
                <div class="mask"></div>
            </div>
            <div class="content m-auto text-center text-white">
                <h6 class="mb-4">WE ARE GETTING MARRIED</h6>
                <h1 class="mb-4">
                    Bella & Dani
                </h1>
                <p class="separator mb-4">SAVE THE DATE</p>
                <h5 class="date">20 Februari 2022</h5>
                <p class="caption d-block mb-3">
                    Kepada Bapak/Ibu/Saudara/Sahabat
                </p>
                <p class="name d-block mb-4">
                    <?php echo $_GET['nama']; ?>
                </p>
            </div>
        </div>
    </div>

    <div id="bride">
        <div class="container">
            <h1 class="section-heading">Mempelai</h1>
            <div class="row w-100 mx-auto">
                <!-- Bride -->
                <div class="col-12 col-md-6 pe-2 pe-lg-4 d-flex flex-wrap flex-lg-nowrap align-items-center justify-content-center justify-content-lg-start">
                    <div class="order-1 order-lg-0 identity text-center text-lg-end flex-fill mb-0 mb-lg-5">
                        <h2 >Putri Dari</h2>
                        <h6 class="family">
                            Bapak Hasan ( Alm )<br/>
                            &<br/>
                            Ibu Siti Aisyah
                        </h6>
                    </div>
                    <div class="photo-container order-0 order-lg-1">
                        <img class="photo mb-3" src="https://images.unsplash.com/photo-1591078954206-881644f21a24?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80" alt="bride" srcset="">
                        <h2 class="name text-center text-lg-end">Bella Lupsrugina</h2>
                    </div>
                </div>

                <!-- Groom -->
                <div class="col-12 col-md-6 ps-2 ps-lg-4 d-flex flex-wrap flex-lg-nowrap flex align-items-center justify-content-center justify-content-lg-start">
                    <div class="photo-container d-flex flex-wrap justify-content-center justify-content-md-start">
                        <h2 class="order-1 order-lg-0 flex-fill name text-center text-lg-start">Dani Pamungkas</h2>
                        <img class="order-0 order-lg-1 photo mb-3" src="https://images.unsplash.com/photo-1606216769783-a7dbe227a17f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80" alt="bride" srcset="">
                    </div>
                    <div class="identity text-center text-lg-start flex-fill mt-0 mt-lg-5">
                        <h2 >Putra Dari</h2>
                        <h6 class="family">
                            Bapak Hasan ( Alm )<br/>
                            &<br/>
                            Ibu Siti Aisyah
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="address">
        <div class="container text-white">
            <h1 class="section-heading mb-3">When & Where</h1>
            <p class="cap text-center mx-auto">
                Dengan mengucap syukur atas kebaikan Tuhan Yang Maha Kuasa dan dengan segenap kerendahan hati, tanpa mengurangi rasa hormat. 
                Kami mohon doa dan restu dari Bapak/Ibu/Saudara/i untuk hadir dihari bahagia Pernikahan kami yang akan dilaksanakan pada :
            </p>
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10 d-flex flex-wrap">
                    <div class="location akad flex-fill text-center">
                        <img class="icon clock mb-4" src="images/clock.svg">

                        <h2 class="mb-3">Akad Nikah</h2>
                        <p>
                            Jumat, 18 Februari 2022,<br/>
                            9:00 AM - 9:30 AM,<br/>
                            Perum Ijen nirwaran<br/>
                            Malang no 31, Indonesia<br/>
                        </p>
                    </div>
                    <div class="location siraman flex-fill text-center">
                        <img class="icon glass mb-4" src="images/glass.svg">
                        <h2 class="mb-3">Siraman</h2>
                        <p>
                            Jumat, 18 Februari 2022,<br/>
                            9:00 AM - 9:30 AM,<br/>
                            Perum Ijen nirwaran<br/>
                            Malang no 31, Indonesia<br/>
                        </p>
                    </div>
                    <div class="location resepsi flex-fill text-center">
                        <img class="icon diamond mb-4" src="images/diamond.svg">
                        <h2 class="mb-3">Resepsi</h2>
                        <p>
                            Jumat, 18 Februari 2022,<br/>
                            9:00 AM - 9:30 AM,<br/>
                            Perum Ijen nirwaran<br/>
                            Malang no 31, Indonesia<br/>
                        </p>
                    </div>
                </div>
                <div class="col-12 col-lg-10">
                    <!-- Temporarry -->
                    <!-- <img src="./images/map_temp.png" alt="map" class="map w-100"> -->
                    <iframe 
                        style="width: 100%;"
                        height="400" 
                        frameborder="0" 
                        scrolling="no" 
                        marginheight="0" 
                        marginwidth="0" 
                        id="gmap_canvas" 
                        src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=Jl.%20Tanimbar%20No.22,%20kota%20malang%20Malang+(alamat)&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
                    </iframe> 
                        <a href='https://embedmaps.net'>embed google map on website</a> 
                        <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=cab9f28daf9adb88cfe5ce33d33c6e6f9c770792'></script>
                </div>
            </div>
        </div>
    </div>

    <div id="caption">
        <div class="container">
            <div class="row align-items-center justify-content-end">
                <div class="col-12 col-md-6 col-lg-5">
                    <img src="./images/caption-img.png" class="caption-img " alt="caption_image">
                </div>
                <div class="col-12 col-md-6">
                    <h2 class="section-heading mb-5 text-center text-md-start">Kekuatan Cinta</h2>
                    <p class="content text-center text-md-start mb-5">
                        Dan di antara tanda-tanda (kebesaran)-Nya ialah Dia menciptakan pasangan-pasangan untukmu dari jenismu sendiri, 
                        agar kamu cenderung dan merasa tenteram kepadanya, dan Dia menjadikan di antaramu rasa kasih dan sayang.
                    </p>

                    <p class="surat text-center text-md-start mb-5">
                        ( Ar-Rum 21 )
                    </p>
                </div>
            </div>
            <div class="decor-wrapper">
                <img src="./images/decor-1.png" class="decor-img" alt="caption_image">
            </div>
        </div>
    </div>

    <div id="gallery">
        <div class="container">
            <h1 class="section-heading">Gallery</h1>

            <div class="wrapper mx-auto">
                <div class="row no-gutters">
                    <div class="col-12 col-md-4 mb-3">
                        <img src="./images/dummy.png" alt="" class="photos">
                    </div>
                    <div class="col-12 col-md-4 mb-3">
                        <img src="./images/dummy.png" alt="" class="photos">
                    </div>
                    <div class="col-12 col-md-4 mb-3">
                        <img src="./images/dummy.png" alt="" class="photos">
                    </div>
                    <div class="col-12 col-md-4 mb-3">
                        <img src="./images/dummy.png" alt="" class="photos">
                    </div>
                    <div class="col-12 col-md-4 mb-3">
                        <img src="./images/dummy.png" alt="" class="photos">
                    </div>
                    <div class="col-12 col-md-4 mb-3">
                        <img src="./images/dummy.png" alt="" class="photos">
                    </div>
                    <div class="col-12 col-md-4 mb-3">
                        <img src="./images/dummy.png" alt="" class="photos">
                    </div>
                    <div class="col-12 col-md-4 mb-3">
                        <img src="./images/dummy.png" alt="" class="photos">
                    </div>
                    <div class="col-12 col-md-4 mb-3">
                        <img src="./images/dummy.png" alt="" class="photos">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="gift">
        <div class="background">
            <img src="./images/gift-background-section.png" alt="gift-background-section" srcset="" class="gift-background-section">
        </div>
        <div class="container">
            <h1 class="section-heading text-white">Hadiah & Kiriman</h1>

            <div class="wrapper d-flex flex-wrap align-items-center justify-content-center text-white">
                <div class="transfer text-center">
                    <h2 class="mb-3">Transfer</h2>
                    <img src="/images/bca.png" alt="" class="icon mb-3">
                    <h3 id="no-rek-text" class="mb-3">12345678901234567890</h3>
                    <div class="hr mx-auto mb-3"></div>
                    <h3 class="mb-4">A/N Garin Hasta</h3>
                    <button class="copy-no"> Salin No.Rekening</button>
                </div>
                <div class="send text-center">
                    <h2 class="mb-4">Kiriman</h2>
                    <div class="hr mx-auto mb-3"></div>
                    <h3 id="address-text" class="w-75 mx-auto mb-3">
                        Jl. Palem Raya, Gg. Melati no. 4, RT/RW 05/05,Beji, Depok 16421
                    </h3>
                    <div class="hr mx-auto mb-3"></div>
                    <h3 class="mb-4 ">085123456789</h3>
                    <button class="copy-address">Salin Alamat</button>
                </div>
            </div>
            <p class="other mx-auto text-white text-center">
                Sebelumnya, kami mengucapkan terimakasih atas perhatian dan bentuk tanda cinta Bapak/Ibu/Saudara/i untuk kami.
            </p>
        </div>
    </div>

    <div id="greetings">
        <div class="container">
            <h1 class="section-heading">Salam & Ucapan</h1>
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 col-lg-5">
                    <form id="comment-form">
                        <input class="name w-100 d-block mb-3 " id="input-nama" name="nama" type="text" placeholder="Nama*">
                        <textarea class="greeting-content w-100 d-block mb-4" id="input-ucapan" name="ucapan" cols="30" rows="6" placeholder="Ucapan Singkat*"></textarea>
                        <button class="d-block ms-auto">Kirim</button>
                    </form>
                </div>
                <div class="col-12 col-md-6 col-lg-5">
                    <div class="comment-scetion">
                        <h3 class="mb-2">Ucapan</h3>
                        <div class="hr mb-4"></div>
                        <div class="comment-list"></div>

                        <!-- Comment template -->
                        <!-- <div class="comment">
                            <div class="d-flex align-items-baseline mb-2">
                                <h4 class="name d-block my-0 me-3">Garin</h4>
                                <p class="timestamp d-block my-0 ">2 Hari lalu</p>
                            </div>
                            <p class="content-text">●&nbsp;&nbsp;&nbsp;&nbsp;Semoga langgeng sampai tua</p>
                        </div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>

    <script src="js/jquery-dateformat.js"></script>

    <script src="js/index.js" type="module"></script>
</body>
</html>