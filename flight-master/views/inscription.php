<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="view/page_entre.css">
        <title>inscription </title>
    </head>
    <body>
      
      <div>

            <div>



            <form action="services/inscriptionService.php" method="post" >

            <h1>Inscription</h1>

                <label>Prénom</label>
                    <input type="text" name="prenom">
                    <br />
                    <br />
                    <label>Nom</label>
                    <input type="text" name="nom">
                    <br />
                    <br />
                    <label> Nom d'utilisateur </label>
                    <input type="text" name="username">
                    <br />
                    <br />

                    <label>Mot de passe</label>
                    <input type="password" name="mdp">
                    <br />
                    <br />

                    <label> Confirmation du Mot de passe </label>
                    <input type="password" name="confirmemdp">
                    <br />
                    <br />

                    <label>E-mail</label>
                    <input type="text" name="mail">
                    <br />
                    <br />
 

                     <label> Date de naissance </label>
                    <input  type="text" placeholder="DD" />
                    <input  type="text" placeholder="MM" />
                    <input  type="text" placeholder="YYYY" />
                    <br />
                    <br />
                     
                    <input type="submit" value="envoyer">
                    <input type="reset" value="effacer">
                    <br>
                    <br />
                    
            </div>
       
       </div>
    </body>
</html>

