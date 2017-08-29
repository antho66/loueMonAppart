<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="views/css/inscription.css">
        <title>inscription</title>
    </head>
    <body>
      
      

            <div class = "inscription">



           


 <h1>Inscription</h1>
 
 
    <form action="inscriptionService" method="post" >
            <table>

                <tr>
                    <td>Prénom</td>
                    <td> <input type="text" name="prenom"></td> 
                </tr>
                
                <tr>
                    <td>Nom</td>
                    <td> <input type="text" name="nom"></td> 
                </tr>
                    <br />
                    <br />
                <tr>
                    <td>Nom d'utilisateur</td>
                    <td> <input type="text" name="username"></td> 
                </tr>
                <tr>
                    <td>Mot de passe</td>
                    <td><input type="password" name="password"></td> 
                </tr>
                <tr>
                    <td>Confirmation du Mot de passe</td>
                    <td> <input type="password" name="confirmepassword"></td> 
                </tr>
                <tr>
                    <td>E-mail</td>
                    <td> <input type="text" name="email"></td> 
                </tr>
                <tr>
                    <td>Date de naissance </td>
                    <td><input type="date" name="naissance" /></td> 
                </tr>

                <tr>
                    <td><input type="submit" value="envoyer"> </td>
                    <td><input type="reset" value="effacer"></td> 
                </tr>


            </table>
                </form>     
                    <?php

                        if(isset($error)){
                            foreach($error as $er){
                                echo "<p>".$er."</p>";
                            }
                        }

                    ?>
            </div>
       
       
    </body>
</html>

