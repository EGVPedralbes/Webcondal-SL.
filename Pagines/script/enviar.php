<?php 
        $nom = $_POST['nom'];
        $cognom1 = $_POST['cognom1'];
        $cognom2 = $_POST['cognom2'];
        $correu = $_POST['correu'];
        $phone = $_POST['phone'];
        $asunto = $_POST['asunto'];
        $mensaje = "Nom: ".$nom..$cognom1..$cognom2."\r\n" "Email:" .$correu. "$
        if ($_POST['remark'] != "") { die(); }

        else(mail('webcondalsl@gmail.com', $asunto, $mensaje)){
                echo "Correo enviado";
        }
 ?>
