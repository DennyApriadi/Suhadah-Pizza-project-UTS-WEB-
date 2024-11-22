<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleDashboard.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <!-- header -->
    <div class="header">
        <div class="jumbotron text-left " style="margin-bottom: -15px;">
            <div class="row">
                <img class="col-md-4" src="../img/so.png" alt="logo suhadah official" id="img_logo">
                <div class="col-md-8 text-light" style="margin-top: 20px;">
                    <h1>SELAMAT DATANG <?php echo $_GET["user"]; ?></h1>
                    <h5>Pilihan Tepat Mencari Makanan Lezat</h5>
                </div>
            </div>
        </div>
    </div>

    <!-- navbar -->
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <a clas="navbar-brand" href="#" style="margin-left: 30px;">Suhadah Pizza</a>
        <ul class="navbar-nav" style="margin-left: 30px;">
            <li class="nav-item">
                <a class="nav-link text-light" href="#footer">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="#footer">Contact</a>
            </li>
        </ul>
    </nav>
    <center>
        <!-- content -->
        <div class="content">
            <div class="header_content">
                <h3>READY PIZZA NOW</h3>
                <p>Kapan Pun Diamana Pun Ada Pizza</p>
            </div>
            <!-- image pizza line one -->
            <div class="img_food">
                <div class="line_one">
                    <div class="pizza_1">
                        <img src="../img/p1.png" alt="pizza 1">
                    </div>
                    <div class="pizza_2">
                        <img src="../img/p2.png" alt="pizza 2">
                    </div>
                    <div class="pizza_3">
                        <img src="../img/p3.png" alt="pizza 3">
                    </div>
                </div>
                <!-- image pizza line two -->
                <div class="line_two">
                    <div class="pizza_1">
                        <img src="../img/p4.png" alt="pizza 4">
                    </div>
                    <div class="pizza_2">
                        <img src="../img/p5.png" alt="pizza 5">
                    </div>
                    <div class="pizza_3">
                        <img src="../img/p6.png" alt="pizza 6">
                    </div>
                </div>

                <div class="more_line_one">
                    <!-- button more info pizza_1 -->
                    <input type="checkbox" id="btn1">
                    <div class="more_pizza1">
                        <div class="info">
                            <p>PIZZA Sosis</p>
                            <p class="btn_more1">Pizza dengan toping sosis sapi, saus cabai dan mayones</p>
                            <label for="btn1">Info Pizza</label>
                        </div>
                    </div>
                    <!-- button more info pizza_2 -->
                    <input type="checkbox" id="btn2">
                    <div class="more_pizza2">
                        <div class="info">
                            <p>PIZZA Margherita</p>
                            <p class="btn_more2">Pizza dengan lapisan keju leleh yang menarik dan saus tomat yang merata</p>
                            <label for="btn2">Info Pizza</label>
                        </div>
                    </div>
                    <!-- button more info pizza_3 -->
                    <input type="checkbox" id="btn3">
                    <div class="more_pizza3">
                        <div class="info">
                            <p>PIZZA Vegetarian</p>
                            <p class="btn_more3">Pizza dengan irisan tomat segar, paprika hijau dan merah, serta potongan jamur. Selain itu, terdapat irisan zaitun hitam yang menambah kelezatan dan warna</p>
                            <label for="btn3">Info Pizza</label>
                        </div>
                    </div>
                </div>

                <div class="more_line_two">
                    <!-- button more info pizza_4 -->
                    <input type="checkbox" id="btn4">
                    <div class="more_pizza4">
                        <div class="info">
                            <p>PIZZA Variasi</p>
                            <p class="btn_more4">Pizza dengan kaya toping, Memiliki sosis, pepperoni, dan irisan zaitun hitam. Dihiasi dengan beberapa daun basil segar.</p>
                            <label for="btn4">Info Pizza</label>
                        </div>
                    </div>
                    <!-- button more info pizza_5 -->
                    <input type="checkbox" id="btn5">
                    <div class="more_pizza5">
                        <div class="info">
                            <p>Deluxe Pizza</p>
                            <p class="btn_more5">Pizza dengan Topping terdiri dari irisan pepperoni, jamur, dan potongan tomat ceri yang cerah, serta sayuran seperti paprika hijau dan bawang merah</p>
                            <label for="btn5">Info Pizza</label>
                        </div>
                    </div>
                    <!-- button more info pizza_6 -->
                    <input type="checkbox" id="btn6">
                    <div class="more_pizza6">
                        <div class="info">
                            <p>PIZZA Vesuvio</p>
                            <p class="btn_more6">Pizza dengan ukuran sedang, dengan kerak yang renyah di tepinya. Di atasnya terdapat lelehan keju yang merekah dan berbagai topping </p>
                            <label for="btn6">Info Pizza</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </center>

    <div class="footer_link" id="footer">
        <div class="footer_text">
            <h1 style="font-weight: 800; font-size: 3em;">Suhadah Pizza</h1>
            <p>Nikmati cita rasa pizza yang tak tertandingi di Suhadah Pizza, tempat di mana setiap gigitan membawa Anda
            pada pengalaman kuliner yang menggugah selera!</p>
            <ul>
                <li style="font-weight: 800; font-size: 20px;">Kategori</li>
                <li class="li_kontak">Kontak</li>
            </ul>
            <ul>
                <li class="li_kategori_1"><a href="#">Minuman</a></li>
                <li class="li_kontak_1"><a href="https://wa.me/6283869547181" target="_blank">+62838 6954 7181</a></li>
            </ul>
            <ul>
                <li class="li_kategori_2"><a href="#">Makanan Manis</a></li>
                <li class="li_kontak_2"><a href="https://instagram.com/deni_apriadi18" target="_blank">deni_apriadi18</a></li>
            </ul>
            <ul>
                <li class="li_kategori_3"><a href="#">Makanan Tradisional</a></li>
                <li class="li_kontak_3"><a href="mailto:deniapriadi000@gmail.com" target="_blank">deniapriadi000@gmail.com</a></li>
            </ul>
        </div>
    </div>
    

    <footer>
    <div class="footer_content">
        <p>&copy; Copyright by 22552011290_Deni Apriadi</p>
    </div>
    </footer>
    
    
    
    
    
</body>

</html>