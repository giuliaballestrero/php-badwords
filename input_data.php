<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhP Bad Words</title>
</head>
<body>
    <main>        
        
        <!--PRENDO I DATI-->
        <?php  
            //prendo i dati inseriti  nell'input e li stampo a video
            $_GET['paragraph']; 

            //prendo i dati inseriti nell'input per la parola da censurare
            $_GET['badword'];
        ?>

        <!--DEFINISCO LE VARIABILI-->
        <?php 
            //creo una variabile per definire la frase
            $paragraph = $_GET['paragraph'];
            //creo una variabile per definire la parola da censurare
            $badWord = $_GET['badword'];

            $repeat = str_repeat ('*', strlen($badWord));
            
            //creo una variabile per sostituire la parola da censurare
            $mutedParagraph = str_ireplace($badWord, $repeat, $paragraph);
        ?>

        <!--STAMPO I RISULATI-->
        <h2>
            La frase inserita è:
            "
        <?php 
                //stampo a video la frase inserita
                echo $paragraph;
        ?>
            "
        </h2>

        <h3>
            La lunghezza della frase è di
            <?php   
                //stampo a video la lunghezza della frase
                echo strlen($paragraph);
        ?>
        caratteri
        </h3>

        <hr>

        <h2>
            La frase nuova frase inserita è:
            "
        <?php 
                //stampo a video la nuova frase censurata
                echo $mutedParagraph;
        ?>
            "
        </h2>

        <h3>
            La lunghezza della nuova frase è di
            <?php 
                //stampo a video la lunghezza della nuova frase
                echo strlen($mutedParagraph);
        ?>
        caratteri
        </h3>

        <hr>
        
    </main>

</body>
</html>




