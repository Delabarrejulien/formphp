<?php
function valid_donnees($donnees){
    $donnees = trim($donnees);
    $donnees = stripslashes($donnees);
    $donnees = htmlspecialchars($donnees);

    return $donnees;
}

if(isset($_POST['name'])){

    if (!empty($_POST["name"])){
        
        $name = valid_donnees($_POST["name"]);

        if(!preg_match('/^[a-zA-ZÀ-ÿ ]{2,20}$/',$name)){

           $error1 = 'remplir le champ correctement';
        }
    }

    else{
        $error1 = 'champs obligatoire';
    }
}

    
if(isset($_POST['surname'])){

    if (!empty($_POST["surname"])){
        
        $surname = valid_donnees($_POST["surname"]);

        if(!preg_match('/^[a-zA-ZÀ-ÿ\s]{2,20}$/',$surname)){

           $error1 = 'remplir le champ correctement';
        }

    }

    else{
        $error1 = 'champs obligatoire';
    }
}


if(isset($_POST['nation'])){

    if (!empty($_POST["nation"])){
        
        $nation = valid_donnees($_POST["nation"]);

        if(!preg_match('/^[a-zA-ZÀ-ÿ]{2,20}$/',$nation)){

           $error1 = 'remplir le champ correctement';
        }

    }   

    else{
        $error1 = 'champs obligatoire';
    }
}
   

if(isset($_POST['adress'])){

    if (!empty($_POST["adress"])){
        
        $adress = valid_donnees($_POST["adress"]);

        if(!preg_match('/^[a-zA-ZÀ-ÿ ]{2,20}$/',$adress)){

           $error1 = 'remplir le champ correctement';
        }

    }

    else{
        $error1 = 'champs obligatoire';
    }
}


if(isset($_POST['city'])){

    if (!empty($_POST["city"])){
        
        $city = valid_donnees($_POST["city"]);

        if(!preg_match('/^[a-zA-ZÀ-ÿ ]{2,20}$/',$city)){

           $error1 = 'remplir le champ correctement';
        }
    }
    else{
        $error1 = 'champs obligatoire';
    }
}


if(isset($_POST['postal'])){

    if (!empty($_POST["postal"])){
        
        $postal = valid_donnees($_POST["postal"]);

        if(!preg_match('/^[0-9]{5}$/',$postal)){

           $error1 = 'remplir le champ correctement';
        }

    }

    else{
        $error1 = 'champs obligatoire';
    }
}


if(isset($_POST['email'])){

    if (!empty($_POST["email"])){
        
        $email = valid_donnees($_POST["email"]);

        if(!preg_match('/[0-9]{5}/',$email)){

           $error1 = 'remplir le champ correctement';


            if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {

                $error1 = "Cette adresse email nettoyée est considérée comme non valide.";
           }
        }

    }
    else{
        $error1 = 'champs obligatoire';
    }
}


if(isset($_POST['phone'])){

    if (!empty($_POST["phone"])){
        
        $phone = valid_donnees($_POST["phone"]);

        if(!preg_match('/[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}/',$phone)){

           $error1 = 'remplir le champ correctement';
        }

    }
    else{
        $error1 = 'champs obligatoire';
    }
}


if(isset($_POST['numberpole'])){

    if (!empty($_POST["numberpole"])){
        
        $numberpole = valid_donnees($_POST["numberpole"]);

        if(!preg_match('/^[0-9A-Z]{8,14}$/',$numberpole)){

           $error1 = 'remplir le champ correctement';
        }
    }

    else{
        $error1 = 'champs obligatoire';
    }
}


if(isset($_POST['link'])){

    if (!empty($_POST["link"])){
        
        $link = valid_donnees($_POST["link"]);

        if(!preg_match('/^https:$/',$link)){

           $error1 = 'remplir le champ correctement';


           if (!filter_var($_POST['link'], FILTER_SANITIZE_URL)) {
               
              $error1 =  "Ce lien nettoyée est considérée comme non valide.";
            }
        }

    }
    else{
        $error1 = 'champs obligatoire';
    }
}


if(isset($_POST['bio1'])){

    if (!empty($_POST["bio1"])){
        
        $bio1 = valid_donnees($_POST["bio1"]);

        if(!preg_match('/[0-9]{1,4}[a-zA-ZÀ-ÿ\s]{2,20 }/',$bio1)){

           $error1 = 'remplir le champ correctement';
        }

    }
    else{
        $error1 = 'champs obligatoire';
    }
}


if(isset($_POST['bio2'])){

    if (!empty($_POST["bio2"])){
        
        $bio2 = valid_donnees($_POST["bio2"]);

        if(!preg_match('/^[0-9]{1,4}[a-zA-ZÀ-ÿ\s]{2,20 }$/',$bio2)){

           $error1 = 'remplir le champ correctement';
        }

    }
    else{
        $error1 = 'champs obligatoire';
    }
}
    
    
?>