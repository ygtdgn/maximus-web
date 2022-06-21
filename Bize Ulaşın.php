<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
</head>

<body>
    <nav class="header">
        <img class="logo logo-size" src="img/maximus3transparent.png" alt="Maximus Logo"><br><br>
        <input class="menu-btn" type="checkbox" id="menu-btn" />

        <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
        <ul class="menu">



            <li>
                <a href="index.html">Anasayfa</a>
            </li>
            <li>
                <a href="Hakkımızda.html">Hakkımızda</a>
            </li>
            <li>
                <a href="https://overdrivetr.com/maximus/" target="_blank">Medya</a>
            </li>
            <li>
                <a href="FRC nedir.html">Frc Nedir?</a>
            </li>
            <li>
                <a href="VEX nedir.html">VEX Nedir?</a>
            </li>
            <li>
                <a href="Bize Sponsor Olun.html">Bize Sponsor Olun</a>
            </li>
            <li>
                <a href="#">Bize Bağış Yapın</a>
            </li>
            <li>
                <a href="bize-ulasin.php">Bize Ulaşın</a>
            </li>
        </ul>
    </nav>
    <header>

    </header>

    <main>
        <section id="section-ı">
            <div class="container-ı">
                <h1 class="title-ı">
                    İletişim
                </h1>
                <div class="contact-area">
                    <div class="cont-left">
                        <div class="cont-top">
                            <div class="cont-element">
                                <i class="far fa-address-card"></i>
                                <address>İstanbul / Türkiye </address>
                            </div>
                            <div class="cont-element">
                                <i class="far fa-envelope"></i>
                                <a href="mailto:maximus@overdrivetr.com">maximus@overdrivetr.com</a>
                            </div>

                        </div>
                        <div class="cont-bottom">
                            <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://twitter.com/MaximusRobotics" target="_blank"><i class="fab fa-twitter"></i></a>
                            <a href="https://instagram.com/maximusrobotics" target="_blank"><i class="fab fa-instagram"></i></a>
                            <a href="https://www.linkedin.com/company/maximusrobotics" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                <form method="POST" action="iletisim-post.php">
                    <?php if ( isset($_GET['success']) ): ?>
                    <div class="alert alert-success">Mesajınız başarıyla iletildi.</div>
                    <?php endif ?>
    
                    <div class="cont-right">
                        <input type="text" name="isim" id="isim" placeholder="İsim Soyisim" required="">
                        <input type="email" name="email" id="email" placeholder="E-Mail" required="">
                        <textarea name="mesaj" id="mesaj" rows="10" placeholder="Mesaj" required=""></textarea>
                        <button type="submit">Gönder</button>
                    </div>
                </form>
                </div>
            </div>
        </section>

    </main>
    <footer>

        <div class="copyright">
            Copyright &copy; 2021 - Mert Ateş Topuz
        </div>
    </footer>

    <script src="./MyScipt.js"></script>

</body>

</html>
</body>

</html>