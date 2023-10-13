<?php

$matdoru=$_POST['matdoru'];
$matyanlis=$_POST['matyanlis'];

$dildoru=$_POST['dildoru'];
$dilyanlis=$_POST['dilyanlis'];

$onpuan=$_POST['onpuan'];

$alan=$_POST['alan'];

$yerlesim=$_POST['yerlesim'];


$matnet=$matdoru-($matyanlis/4);
$dilnet=$dildoru-($dilyanlis/4);

if ($yerlesim=="2") {
    switch($alan) {
        case 1: //Sayısal
            $onlisansnet=$onpuan*0.6;
            $saypuan=$matnet*3;
            $dilpuan=$dilnet*0.6;

            $puan=$onlisansnet+$saypuan+$dilpuan+250;

            echo "Sayın öğrencimiz eğitim öğretim hayatınızda başarılar dileriz. <br> " ;
            echo "Matematik netiniz: $matnet <br> ";
            echo "Türkçe netiniz: $dilnet <br> ";
            echo "Sayısal DGS Puanınız: $puan <br> ";
            
        break;

        case 2: //Sözel
            $onlisansnet=$onpuan*0.6;
            $saypuan=$matnet*0.6;
            $dilpuan=$dilnet*3;

            $puan=$onlisansnet+$saypuan+$dilpuan+120;

            echo "Sayın öğrencimiz eğitim öğretim hayatınızda başarılar dileriz. <br> " ;
            echo "Matematik netiniz: $matnet <br> ";
            echo "Türkçe netiniz: $dilnet <br> ";
            echo "Sözel DGS Puanınız: $puan <br> ";

        break;

        case 3; //Eşit Ağırlık
            $onlisansnet=$onpuan*0.6;
            $saypuan=$matnet*1.8;
            $dilpuan=$dilnet*1.8;

            $puan=$onlisansnet+$saypuan+$dilpuan+222;

            echo "Sayın öğrencimiz eğitim öğretim hayatınızda başarılar dileriz. <br> " ;
            echo "Matematik netiniz: $matnet <br> ";
            echo "Türkçe netiniz: $dilnet <br> ";
            echo "Eşit ağırlık DGS Puanınız: $puan <br> ";

        break;
    }
}

elseif ($yerlesim=="1") {
    switch($alan) {
        case 1: //Sayısal
            $onlisansnet=$onpuan*0.45;
            $saypuan=$matnet*3;
            $dilpuan=$dilnet*0.6;

            $puan=$onlisansnet+$saypuan+$dilpuan+250;

            echo "Sayın öğrencimiz eğitim öğretim hayatınızda başarılar dileriz. <br> " ;
            echo "Matematik netiniz: $matnet <br> ";
            echo "Türkçe netiniz: $dilnet <br> ";
            echo "Sayısal DGS Puanınız: $puan <br> ";
            
        break;

        case 2: //Sözel
            $onlisansnet=$onpuan*0.45;
            $saypuan=$matnet*0.6;
            $dilpuan=$dilnet*3;

            $puan=$onlisansnet+$saypuan+$dilpuan+120;

            echo "Sayın öğrencimiz eğitim öğretim hayatınızda başarılar dileriz. <br> " ;
            echo "Matematik netiniz: $matnet <br> ";
            echo "Türkçe netiniz: $dilnet <br> ";
            echo "Sözel DGS Puanınız: $puan <br> ";

        break;

        case 3; //Eşit Ağırlık
            $onlisansnet=$onpuan*0.45;
            $saypuan=$matnet*1.8;
            $dilpuan=$dilnet*1.8;

            $puan=$onlisansnet+$saypuan+$dilpuan+222;

            echo "Sayın öğrencimiz eğitim öğretim hayatınızda başarılar dileriz. <br> " ;
            echo "Matematik netiniz: $matnet <br> ";
            echo "Türkçe netiniz: $dilnet <br> ";
            echo "Eşit ağırlık DGS Puanınız: $puan <br> ";

        break;
    }
}



?>