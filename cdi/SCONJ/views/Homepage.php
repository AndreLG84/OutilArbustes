<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <section class="Lancer" id="Lancer">
        <h1>Bienvenue</h1>
           <form action="" method="POST" class="form_temps" id="form_temps"> 
            <div class="Choix_phrases" id="Choix_phrases">

                <div id="selectreseau" class="select selectecole" >
                    <label for="conju_classe" >Phrase du réseau</label>
                    <input type="radio" name="conju_classe" value="1"></input>
                </div>

                <div id="selectecole" class="select selectecole">
                    <label for="conju_classe" >Phrase de l'école</label>
                    <input type="radio" name="conju_classe" value="2"></input>
                </div>

            </div>

            <div class="Choix_temps" id="Choix_temps">
                <div class="tps0" id="tps0">
                    <div class="temps">
                        
                        <div class="conju_tps">
                            <label for="conju-temps" class=""></label>
                            <input type="radio" name="conju_temps" value="" class="input">
                        </div>
                    </div>
                </div>

                <input type="submit" name="submit" value="C'est parti" id="Commencer" class="submit-Commencer">
            </div>

        </form>

    </section>

    <section class="Jeu" id="Jeu">
        <?= $phraseTp ?>
        <div class="temps_niveau">
            <p>Temps:&nbsp;</p>
            <p>Niveau:&nbsp;</p>
        </div>
        <div class="phrase">
        
            <p id="phraseTest"></p>
            
        </div>
        <div class="reponses">
            <button></button>
        </div>
        <span id= "reponse"></span>
        <div class="suivant">
            <button>Suivant</button>
        </div>
    </section>
</body>
</html>