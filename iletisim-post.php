<?php
 
    require 'inc/config.php';  

    if ( $_POST )
    {
        $isim = $_POST['isim'];
        $email = $_POST['email'];
        $mesaj = $_POST['mesaj'];
       
        DB::insert("INSERT INTO iletisim(isim,email,mesaj) VALUES(?,?,?)",array(
            $isim,
            $email,
            $mesaj

        ));

    }
   
    header("Location:bize-ulasin.php?success=1");
?>