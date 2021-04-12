<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Ceci est une page HTML de test</title>
    </head>
    <body>
        <h2>Page de test</h2>
        <?php
        $age= 3+2;
        switch ($age)
         {
            case 4:
                echo 'tu as 4 ans<br/>';
                break;
            
            default:
                echo 'tu n\'as pas 4 ans.<br/>';
                break;
        }
        if ($age <= 4)
        {
            echo 'Tu peux entrer.';
        }
        else
        {
            echo 'Tu es trop grand. Va jouer ailleurs.';
        }
   
        ?>
        
        <p>
            Cette page contient <strong>uniquement</strong> du code HTML.<br />
            Voici quelques petits tests :
           
        </p>

        <p>Aujourd'hui nos sommes le <?php print date('d/m/y h:i:s'); ?>.</p>

        <ul>
        <li style="color: blue;">Texte en bleu</li>
        <li style="color: red;">Texte en rouge</li>
        <li style="color: green;">Texte en vert</li>
        </ul>
    </body>
</html>