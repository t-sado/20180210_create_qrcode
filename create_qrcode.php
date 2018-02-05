<?php
    // img�f�B���N�g���쐬
    if (!file_exists('img')) {
        mkdir('img', 0777);
    }

    createImage('http://www.giants.jp/top.html/', 'giants.jpg');
    createImage('https://www.amazon.co.jp/dp/B01BHPEC9G', 'amazon.jpg');
    createImage('http://www.cosme.net/product/product_id/10023860/top', 'cosme.jpg');
    
    // googleAPI�𗘗p���ăT�C�g��QR�R�[�h���쐬����
    function createImage($url, $file_name) {
        $qrcode_url = "https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl={$url}";
        $data = file_get_contents($qrcode_url);
        file_put_contents("img/{$file_name}", $data);
    }
