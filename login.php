
<h2>
    La frase inserita è:
    "
   <?php 
        //prendo i dati inseriti  nell'input e li stampo a video
        echo $_GET['paragraph']; 

        //prendo i dati inseriti nell'input per la parola da censurare
        $_GET['badword'];
   ?>
    "
</h2>

<h3>
    La lunghezza della frase è di
    <?php   
        //creo una variabile per definire la frase
        $paragraph = $_GET['paragraph'];

        //stampo a video la lunghezza della frase
        echo strlen($paragraph);

        //creo una variabile per definire la parola da censurare
        $badWord = $_GET['badword'];
   ?>
   
   caratteri

</h3>

<hr>

<h2>
    La frase nuova frase inserita è:
    "
   <?php 
        //creo una variabile per sostituire la parola da censurare
        $mutedParagraph = str_ireplace($badWord, '***', $paragraph);

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




