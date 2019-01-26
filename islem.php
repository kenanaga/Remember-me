<?php
session_start();

if (isset($_POST['kullanici_giris'])) {
   if ($_POST['kadi']=='edukey' && $_POST['pass']=='12345' ) {
       $_SESSION['kadi']=$_POST['kadi'];
       $_SESSION['pass']=$_POST['pass'];
    if (isset($_POST['beni_hatirla'])) {
        //cookie atama islemleri
        setcookie("kadi","edukey",strtotime("+1 day"));
        setcookie("pass","12345",strtotime("+1 day"));
      }else{
          //cookie sil
          setcookie("kadi","edukey",strtotime("-1 day"));
          setcookie("pass","12345",strtotime("-1 day"));
      }
      header("location:index.php?durum=true");
      exit;
    }else{
        //giris bilgileri dogru diyilse 
        header("location:index.php?durum=false");
      exit;
    }

}

?>