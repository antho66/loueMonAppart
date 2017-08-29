
<html !DOCTYPE>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title> View rental </title>
        <link href="views/css/normalize.css" rel="stylesheet"/> 
        <link rel="stylesheet" href="views/css/login.css">
        <!-- <style href="css/css/skeleton.css" rel="stylesheet" /> -->

    </head>
    <body>
        
    

        <form action="servicelogin" method="post">
            
        <h1>la casa </h1>

    <p>
        Se Connecter
    </p>

            <div>
                <label> Non d'utilisateur ou Email</label>
                <input  type="text" name="mail-or-username" />
            </div>

            <div >
                <label> Mot de passe </label>
                <input  type="password" name="password" />
            </div>
            
            <button type="submit" valuer ="confirmer"> Entré </button>

        </form>

       <?php
          
          if(isset($error)){
            foreach($error as $er){
                echo "<p>".$er."</p>";
            }
        }


       ?>

    </body>
</html>