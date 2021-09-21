<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP-AJAX İLETİŞİM FORMU | YAZILIM KAFASI</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="ajax.js"></script>
</head>
<body>



<div class="container">
    <form action="" method="post" id="iletisim-form" onsubmit="return false;">
        <h3>İletişim Formu</h3>
        <h4 id="basarili"></h4>
        <h4 id="hata"></h4>
        <fieldset>
            <input type="text" placeholder="Adınız-Soyadınız" id="adsoyad" name="adsoyad">
        </fieldset>
        <fieldset>
            <input type="text" placeholder="E-posta Adresiniz" id="eposta" name="eposta">
        </fieldset>
        <fieldset>
            <textarea name="mesaj" id="mesaj" cols="30" rows="5"></textarea>
        </fieldset>
        <fieldset>
            <button type="submit" id="gonder-btn">Gönder</button>
        </fieldset>
    </form>


</div>

</body>
</html>