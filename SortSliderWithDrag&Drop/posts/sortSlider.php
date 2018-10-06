<?php 
   include "../config.php";
   $sonuc = "error"; // sonucumuzu varsayılan olarak error olarak ayarlıyoruz
   if (is_array($_POST['slider'])) { // gelen değerler (eleman-1) dizi olup olmadığını kontrol ediyoruz
       foreach ($_POST['slider'] as $key => $value) // döngüde elemanların id ve sıra bilgisini alıyoruz
           $sorgu = mysqli_query($baglanti,"UPDATE sliders set sira = $key where id = $value");
           if($sorgu > 0){
                echo "başarılı";
           }
           else{
               echo "başarısız";
           }

              
   }
    
?>