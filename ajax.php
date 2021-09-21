<?php

require 'db.php';

$sonuc = [];

if (isset($_POST['tip'])){

    if ($_POST['tip'] == 'iletisim'){

        $adsoyad = $_POST['adsoyad'] ?? false;
        $eposta = $_POST['eposta'] ?? false;
        $mesaj = $_POST['mesaj'] ?? false;

        if (!$adsoyad){
            $sonuc['hata'] = 'Ad-soyad boş olamaz!';
            $sonuc['target'] = 'adsoyad';
        } elseif (!$eposta){
            $sonuc['hata'] = 'E-posta boş olamaz!';
            $sonuc['target'] = 'eposta';
        } elseif (!filter_var($eposta, FILTER_VALIDATE_EMAIL)){
            $sonuc['hata'] = 'E-posta adresiniz hatalı formatta!';
            $sonuc['target'] = 'eposta';
        } elseif (!$mesaj){
            $sonuc['hata'] = 'Mesaj boş olamaz!';
            $sonuc['target'] = 'mesaj';
        } else {

            // iletişime ekle
            $sorgu = $db->prepare('INSERT INTO iletisim SET iletisim_adsoyad = :adsoyad, iletisim_eposta = :eposta, iletisim_mesaj = :mesaj');
            $insertSonuc = $sorgu->execute([
                'adsoyad' => $adsoyad,
                'eposta' => $eposta,
                'mesaj' => $mesaj
            ]);

            if ($insertSonuc){
                $sonuc['basarili'] = 'İletişim mesajınız bize ulaştı, teşekkürler.';
            } else {
                $sonuc['hata'] = 'Bir sorun oluştu.';
            }

        }

    }

    echo json_encode($sonuc);

}