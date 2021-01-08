<?php

include("validform.php");

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>formulaire01</title>
</head>

<body>

    <div class="container">
        <h1>Formulaire</h1>
        <form action="" method="post">
            <fieldset>

                <!-- <legend>Inscriptions apprenant</legend>
                <br>
                <br>

                <?= isset($error1)? $error1: '';?>
                
                <div class="form-group">

                    <input type="text" class="form-control" title="en toutes lettres" name='name' id="name" 
                        placeholder="Nom" pattern="[a-zA-ZÀ-ÿ\s]{2,20}" required >
                
                </div>
                

                <br> -->

                 <!-- <?= isset($error1)? $error1: '';?>
               
                <div class="form-group">

                    <input type="text" class="form-control" title="en toutes lettres" name='surname' id="surname" size="20"
                        placeholder="Prénom" pattern="[a-zA-ZÀ-ÿ\s]{2,20}" required >
                </div> -->

                <!-- <br> 

                <?= isset($error1)? $error1: '';?> 

                <div class="form-group">

                    <input type="date" class="form-control" name='birthday' id="birthday" >
                </div>
                
                <br>

                <?= isset($error1)? $error1: '';?>
                
                

                <div class="form-group">

                    <select name='selectcountry' id="selectcountry" class="form-control" placeholder="Pays de naissance">
                        <option selected>Pays de naissance</option>
                        <option value="France">France </option>
                        <option value="Afghanistan">Afghanistan </option>
                        <option value="Afrique_Centrale">Afrique_Centrale </option>
                        <option value="Afrique_du_sud">Afrique_du_Sud </option>
                        <option value="Albanie">Albanie </option>
                        <option value="Algerie">Algerie </option>
                        <option value="Allemagne">Allemagne </option>
                        <option value="Andorre">Andorre </option>
                        <option value="Angola">Angola </option>
                        <option value="Anguilla">Anguilla </option>
                        <option value="Arabie_Saoudite">Arabie_Saoudite </option>
                        <option value="Argentine">Argentine </option>
                        <option value="Armenie">Armenie </option>
                        <option value="Australie">Australie </option>
                        <option value="Autriche">Autriche </option>
                        <option value="Azerbaidjan">Azerbaidjan </option>
                        <option value="Bahamas">Bahamas </option>
                        <option value="Bangladesh">Bangladesh </option>
                        <option value="Barbade">Barbade </option>
                        <option value="Bahrein">Bahrein </option>
                        <option value="Belgique">Belgique </option>
                        <option value="Belize">Belize </option>
                        <option value="Benin">Benin </option>
                        <option value="Bermudes">Bermudes </option>
                        <option value="Bielorussie">Bielorussie </option>
                        <option value="Bolivie">Bolivie </option>
                        <option value="Botswana">Botswana </option>
                        <option value="Bhoutan">Bhoutan </option>
                        <option value="Boznie_Herzegovine">Boznie_Herzegovine </option>
                        <option value="Bresil">Bresil </option>
                        <option value="Brunei">Brunei </option>
                        <option value="Bulgarie">Bulgarie </option>
                        <option value="Burkina_Faso">Burkina_Faso </option>
                        <option value="Burundi">Burundi </option>
                        <option value="Caiman">Caiman </option>
                        <option value="Cambodge">Cambodge </option>
                        <option value="Cameroun">Cameroun </option>
                        <option value="Canada">Canada </option>
                        <option value="Canaries">Canaries </option>
                        <option value="Cap_vert">Cap_Vert </option>
                        <option value="Chili">Chili </option>
                        <option value="Chine">Chine </option>
                        <option value="Chypre">Chypre </option>
                        <option value="Colombie">Colombie </option>
                        <option value="Comores">Colombie </option>
                        <option value="Congo">Congo </option>
                        <option value="Congo_democratique">Congo_democratique </option>
                        <option value="Cook">Cook </option>
                        <option value="Coree_du_Nord">Coree_du_Nord </option>
                        <option value="Coree_du_Sud">Coree_du_Sud </option>
                        <option value="Costa_Rica">Costa_Rica </option>
                        <option value="Cote_d_Ivoire">CÃ´te_d_Ivoire </option>
                        <option value="Croatie">Croatie </option>
                        <option value="Cuba">Cuba </option>
                        <option value="Danemark">Danemark </option>
                        <option value="Djibouti">Djibouti </option>
                        <option value="Dominique">Dominique </option>
                        <option value="Egypte">Egypte </option>
                        <option value="Emirats_Arabes_Unis">Emirats_Arabes_Unis </option>
                        <option value="Equateur">Equateur </option>
                        <option value="Erythree">Erythree </option>
                        <option value="Espagne">Espagne </option>
                        <option value="Estonie">Estonie </option>
                        <option value="Etats_Unis">Etats_Unis </option>
                        <option value="Ethiopie">Ethiopie </option>
                        <option value="Falkland">Falkland </option>
                        <option value="Feroe">Feroe </option>
                        <option value="Fidji">Fidji </option>
                        <option value="Finlande">Finlande </option>
                        <option value="France">France </option>
                        <option value="Gabon">Gabon </option>
                        <option value="Gambie">Gambie </option>
                        <option value="Georgie">Georgie </option>
                        <option value="Ghana">Ghana </option>
                        <option value="Gibraltar">Gibraltar </option>
                        <option value="Grece">Grece </option>
                        <option value="Grenade">Grenade </option>
                        <option value="Groenland">Groenland </option>
                        <option value="Guadeloupe">Guadeloupe </option>
                        <option value="Guam">Guam </option>
                        <option value="Guatemala">Guatemala</option>
                        <option value="Guernesey">Guernesey </option>
                        <option value="Guinee">Guinee </option>
                        <option value="Guinee_Bissau">Guinee_Bissau </option>
                        <option value="Guinee equatoriale">Guinee_Equatoriale </option>
                        <option value="Guyana">Guyana </option>
                        <option value="Guyane_Francaise ">Guyane_Francaise </option>
                        <option value="Haiti">Haiti </option>
                        <option value="Hawaii">Hawaii </option>
                        <option value="Honduras">Honduras </option>
                        <option value="Hong_Kong">Hong_Kong </option>
                        <option value="Hongrie">Hongrie </option>
                        <option value="Inde">Inde </option>
                        <option value="Indonesie">Indonesie </option>
                        <option value="Iran">Iran </option>
                        <option value="Iraq">Iraq </option>
                        <option value="Irlande">Irlande </option>
                        <option value="Islande">Islande </option>
                        <option value="Israel">Israel </option>
                        <option value="Italie">italie </option>
                        <option value="Jamaique">Jamaique </option>
                        <option value="Jan Mayen">Jan Mayen </option>
                        <option value="Japon">Japon </option>
                        <option value="Jersey">Jersey </option>
                        <option value="Jordanie">Jordanie </option>
                        <option value="Kazakhstan">Kazakhstan </option>
                        <option value="Kenya">Kenya </option>
                        <option value="Kirghizstan">Kirghizistan </option>
                        <option value="Kiribati">Kiribati </option>
                        <option value="Koweit">Koweit </option>
                        <option value="Laos">Laos </option>
                        <option value="Lesotho">Lesotho </option>
                        <option value="Lettonie">Lettonie </option>
                        <option value="Liban">Liban </option>
                        <option value="Liberia">Liberia </option>
                        <option value="Liechtenstein">Liechtenstein </option>
                        <option value="Lituanie">Lituanie </option>
                        <option value="Luxembourg">Luxembourg </option>
                        <option value="Lybie">Lybie </option>
                        <option value="Macao">Macao </option>
                        <option value="Macedoine">Macedoine </option>
                        <option value="Madagascar">Madagascar </option>
                        <option value="MadÃ¨re">MadÃ¨re </option>
                        <option value="Malaisie">Malaisie </option>
                        <option value="Malawi">Malawi </option>
                        <option value="Maldives">Maldives </option>
                        <option value="Mali">Mali </option>
                        <option value="Malte">Malte </option>
                        <option value="Man">Man </option>
                        <option value="Mariannes du Nord">Mariannes du Nord </option>
                        <option value="Maroc">Maroc </option>
                        <option value="Marshall">Marshall </option>
                        <option value="Martinique">Martinique </option>
                        <option value="Maurice">Maurice </option>
                        <option value="Mauritanie">Mauritanie </option>
                        <option value="Mayotte">Mayotte </option>
                        <option value="Mexique">Mexique </option>
                        <option value="Micronesie">Micronesie </option>
                        <option value="Midway">Midway </option>
                        <option value="Moldavie">Moldavie </option>
                        <option value="Monaco">Monaco </option>
                        <option value="Mongolie">Mongolie </option>
                        <option value="Montserrat">Montserrat </option>
                        <option value="Mozambique">Mozambique </option>
                        <option value="Namibie">Namibie </option>
                        <option value="Nauru">Nauru </option>
                        <option value="Nepal">Nepal </option>
                        <option value="Nicaragua">Nicaragua </option>
                        <option value="Niger">Niger </option>
                        <option value="Nigeria">Nigeria </option>
                        <option value="Niue">Niue </option>
                        <option value="Norfolk">Norfolk </option>
                        <option value="Norvege">Norvege </option>
                        <option value="Nouvelle_Caledonie">Nouvelle_Caledonie </option>
                        <option value="Nouvelle_Zelande">Nouvelle_Zelande </option>
                        <option value="Oman">Oman </option>
                        <option value="Ouganda">Ouganda </option>
                        <option value="Ouzbekistan">Ouzbekistan </option>
                        <option value="Pakistan">Pakistan </option>
                        <option value="Palau">Palau </option>
                        <option value="Palestine">Palestine </option>
                        <option value="Panama">Panama </option>
                        <option value="Papouasie_Nouvelle_Guinee">Papouasie_Nouvelle_Guinee </option>
                        <option value="Paraguay">Paraguay </option>
                        <option value="Pays_Bas">Pays_Bas </option>
                        <option value="Perou">Perou </option>
                        <option value="Philippines">Philippines </option>
                        <option value="Pologne">Pologne </option>
                        <option value="Polynesie">Polynesie </option>
                        <option value="Porto_Rico">Porto_Rico </option>
                        <option value="Portugal">Portugal </option>
                        <option value="Qatar">Qatar </option>
                        <option value="Republique_Dominicaine">Republique_Dominicaine </option>
                        <option value="Republique_Tcheque">Republique_Tcheque </option>
                        <option value="Reunion">Reunion </option>
                        <option value="Roumanie">Roumanie </option>
                        <option value="Royaume_Uni">Royaume_Uni </option>
                        <option value="Russie">Russie </option>
                        <option value="Rwanda">Rwanda </option>
                        <option value="Sahara Occidental">Sahara Occidental </option>
                        <option value="Sainte_Lucie">Sainte_Lucie </option>
                        <option value="Saint_Marin">Saint_Marin </option>
                        <option value="Salomon">Salomon </option>
                        <option value="Salvador">Salvador </option>
                        <option value="Samoa_Occidentales">Samoa_Occidentales</option>
                        <option value="Samoa_Americaine">Samoa_Americaine </option>
                        <option value="Sao_Tome_et_Principe">Sao_Tome_et_Principe </option>
                        <option value="Senegal">Senegal </option>
                        <option value="Seychelles">Seychelles </option>
                        <option value="Sierra Leone">Sierra Leone </option>
                        <option value="Singapour">Singapour </option>
                        <option value="Slovaquie">Slovaquie </option>
                        <option value="Slovenie">Slovenie</option>
                        <option value="Somalie">Somalie </option>
                        <option value="Soudan">Soudan </option>
                        <option value="Sri_Lanka">Sri_Lanka </option>
                        <option value="Suede">Suede </option>
                        <option value="Suisse">Suisse </option>
                        <option value="Surinam">Surinam </option>
                        <option value="Swaziland">Swaziland </option>
                        <option value="Syrie">Syrie </option>
                        <option value="Tadjikistan">Tadjikistan </option>
                        <option value="Taiwan">Taiwan </option>
                        <option value="Tonga">Tonga </option>
                        <option value="Tanzanie">Tanzanie </option>
                        <option value="Tchad">Tchad </option>
                        <option value="Thailande">Thailande </option>
                        <option value="Tibet">Tibet </option>
                        <option value="Timor_Oriental">Timor_Oriental </option>
                        <option value="Togo">Togo </option>
                        <option value="Trinite_et_Tobago">Trinite_et_Tobago </option>
                        <option value="Tristan da cunha">Tristan de cuncha </option>
                        <option value="Tunisie">Tunisie </option>
                        <option value="Turkmenistan">Turmenistan </option>
                        <option value="Turquie">Turquie </option>
                        <option value="Ukraine">Ukraine </option>
                        <option value="Uruguay">Uruguay </option>
                        <option value="Vanuatu">Vanuatu </option>
                        <option value="Vatican">Vatican </option>
                        <option value="Venezuela">Venezuela </option>
                        <option value="Vierges_Americaines">Vierges_Americaines </option>
                        <option value="Vierges_Britanniques">Vierges_Britanniques </option>
                        <option value="Vietnam">Vietnam </option>
                        <option value="Wake">Wake </option>
                        <option value="Wallis et Futuma">Wallis et Futuma </option>
                        <option value="Yemen">Yemen </option>
                        <option value="Yougoslavie">Yougoslavie </option>
                        <option value="Zambie">Zambie </option>
                        <option value="Zimbabwe">Zimbabwe </option>
                    </select>

                </div>

                <br> 

                <?= isset($error1)? $error1: '';?>

                
                <div class="form-group">

                    <input type="text" class="form-control" name='nation' id="nation" placeholder="Nationalité"
                    pattern="[a-zA-ZÀ-ÿ]{2,20}" required>
                </div>

                <br>

                <?= isset($error1)? $error1: '';?>

                <div class="form-group">

                    <input type="number" class="form-control" id="numberadress" name='numberadress' placeholder="numéro"required>
                </div>

                <br>

                <?= isset($error1)? $error1: '';?>

                <div class="form-group">

                    <input type="text" class="form-control" id="adress" name='adress' placeholder="Adresse"
                    pattern="[a-zA-ZÀ-ÿ ]{2,20}" required>
                </div>

                <br>


                <?= isset($error1)? $error1: '';?>

                
                <div class="form-group">

                    <input type="text" class="form-control" id="city" name='city' placeholder="ville" pattern="[a-zA-ZÀ-ÿ\s]{2,20}">
                </div>

                <br>

                <?= isset($error1)? $error1: '';?>

                <div class="form-group">

                    <input type="text" class="form-control" id="postal" name='postal' placeholder="code postal" pattern="[0-9]{5}" required>

                </div>

                 <br>-->

                <?= isset($error1)? $error1: '';?>


                <div class="form-group">

                    <input type="text" class="form-control" name='email' id="email" placeholder="E-mail"  >
                </div>

                <br>

                <?= isset($error1)? $error1: '';?>


                <!--<input type="tel" class="form-control" name='phone' id="phone" placeholder="Téléphone"
                pattern="[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}" required    >
                <small>Ex Format: xx-xx-xx-xx-xx</small>

                <br>
                <br>

                <?= isset($error1)? $error1: '';?>

                <select class="form-control" name='Bac' id="Bac" required>
                    <option selected>Diplôme</option>
                    <option value="1">sans</option>
                    <option value="2">Bac</option>
                    <option value="3">Bac+2</option>
                    <option value="4">Bac+3 ou supérieur</option>
                </select>

                <br>

                <?= isset($error1)? $error1: '';?>

                <div class="form-group">

                    <input type="text" class="form-control" name='numberpole' id="numberpole"
                        placeholder="Numéro pôle emploi" pattern="[0-9A-Z]{8,14}">
                </div>

                <br>

                <?= isset($error1)? $error1: '';?>

               <div class="form-group">

                    <input type="number" min="0" max="9" class="form-control" name='numberBadge' id="numberBadge"
                        placeholder="Nombre de badge">
                </div>
pattern="https://.*"
                <br>

                 <?= isset($error1)? $error1: '';?>-->

                <!--<div class="form-group">

                    <input type="text" class="form-control" name='link' id="link" placeholder="Liens codecademy" >
                </div>  -->

                <!-- <br>

                <?= isset($error1)? $error1: '';?>

                <--<div class="form-group">

                    <textarea class="form-control" name='bio1' id="bio1" 
                        placeholder="Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ?"
                        maxlenght="200" minlenght="20"  ></textarea>
                </div>

                <br>

                <?= isset($error1)? $error1: '';?>

                

                <div class="form-group">

                    <textarea class="form-control" name='bio2' id="bio2" maxlenght="200" minlenght="20" 
                        placeholder="Racontez-nous un de vos 'hacks' (pas forcément technique ou informatique)" ></textarea>
                </div>

                <br>

                <?= isset($error1)? $error1: '';?>

                <p>Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</p>

                <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="radio" id="radio1" value="option1">
                    <label class="form-check-label" for="radio1">Oui</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="radio" id="radio2" value="option2">
                    <label class="form-check-label" for="radio2" >Non</label>
                </div>  --> -->

                <br> 

                <input type="submit" value="Valider" />

            </fieldset>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
        integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous">
    </script>
</body>

</html>