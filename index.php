<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Css Sendiri -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <nav>

        <button class="toggle-btn" id="tombol">=</button>

        <a href="#" class="box-brand"> <span>Brand</span></a>
        <ul class="box-navigasi" id="menu">
            <li>
                <a href="#">Home</a>
            </li>
            <li>
                <a href="#">Contact</a>
            </li>
            <li>
                <a href="#">About</a>
            </li>
        </ul>
    </nav>
</body>


<!-- Javascript Library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    var ukuranDekstop = window.matchMedia("screen and (min-width: 501px)");
    // var ukuranMobile = window.matchMedia("screen and (max-width: 500px)");
    $(document).ready(function() {
        $('#tombol').on('click', function() {
            $('#menu').toggle("slow");
        });
        $(window).resize(function() {
            if (ukuranDekstop.matches) {
                $("#menu").show();
                $("#tombol").hide();
            }else{
                $("#tombol").show();
                $("#menu").hide();
            }
        });
    });
</script>

</html>