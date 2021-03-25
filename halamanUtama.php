<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Design Halaman Utama</title>

    <!-- Library CSS Font Awesome Online -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <!-- Library Google Font Online -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@300&display=swap" rel="stylesheet">

    <!-- CSS buatan Sendiri -->
    <link rel="stylesheet" href="css/style2.css">

</head>

<body>

    <!-- Navigasi Bar -->
    <nav class="navigasi">
        <a href="#" class="branded"><span>Max</span>Nyuuss</a>

        <div class="menu-tengah">
            <ul>
                <li>
                    <a href="#">Pencake</a>
                </li>
                <li>
                    <a href="#">Burger</a>
                </li>
                <li>
                    <a href="#">Waffle</a>
                </li>
                <li>
                    <a href="#">Beferage</a>
                </li>
            </ul>

            <form action="">
                <input type="text" placeholder="Search ..">
                <button type="submit"><span><i class="fas fa-search"></i></span></button>
            </form>

        </div>

        <div class="menu-right">
            <ul>
                <li>
                    <a href="#"><i class="fas fa-heart"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fas fa-shopping-basket"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fas fa-user-circle"></i></a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Penutup Navigasi Bar -->

    <!-- Content -->

    <div class="container">

        <div class="row menu-content">

            <div class="col-d-12">
                <div class="row">
                    <div class="col-d-9">
                        <ul>
                            <li>
                                <a href="#">Allvariant</a>
                            </li>
                            <li>
                                <a href="#">Banana</a>
                            </li>
                            <li>
                                <a href="#">Strawberry</a>
                            </li>
                            <li>
                                <a href="#">BlueBerry</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-d-3">
                        <h1>Original Waffle</h1>
                    </div>
                </div>
            </div>

            <!-- Content Food -->
            <div class="col-d-12">
                <div class="row">

                    <!-- Card Konten menu -->
                    <div class="col-d-3">
                        <div class="row">

                            <div class="col-d-6">
                                <div class="card-food">
                                    <img src="img/pencake1.jpg" alt="Pencake Strawberry">
                                    <h5>Pencake Strawberry</h5>
                                </div>
                            </div>

                            <div class="col-d-6">
                                <div class="card-food">
                                    <img src="img/pencake2.jpg" alt="Pencake Strawberry">
                                    <h5>Pencake Strawberry</h5>
                                </div>
                            </div>

                            <div class="col-d-6">
                                <div class="card-food">
                                    <img src="img/burger1.jpg" alt="Big Burger">
                                    <h5>Black Big Burger</h5>
                                </div>
                            </div>

                            <div class="col-d-6">
                                <div class="card-food">
                                    <img src="img/waffle2.jpg" alt="Butter Pencake">
                                    <h5>Wuffle Strawberry</h5>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Gambar Menu -->
                    <div class="col-d-6">

                        <div class="big-cardFood" id="bigCardFood">
                            <img src="img/pencake1.jpg" alt="Pencake Strawberry">
                        </div>
                    </div>

                    <!-- Penjelasan Menu -->
                    <div class="col-d-3">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Dicta reprehenderit fugiat hic accusamus voluptate accusantium
                            nemo modi veritatis, sit iusto
                            architecto culpa quidem et atque debitis quasi ad praesentium veniam!</p>
                    </div>
                </div>
            </div>

        </div>

    </div>


</body>

</html>