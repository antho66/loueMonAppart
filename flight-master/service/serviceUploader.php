<?php
class serviceUploader extends service {

    function upload(){
        $target_path = "images/";
        $target_path = $target_path . basename( $_FILES['image']['name']);

        if (isset($_FILES['image']) AND $_FILES['image']['error'] == 0)
        {
            // Testons si le fichier n'est pas trop gros
            if ($_FILES['image']['size'] <= 250000)
            {
                // Testons si l'extension est autorisée
                $infosfichier = pathinfo($_FILES['image']['name']);
                $extension_upload = $infosfichier['extension'];
                $extensions_autorisees = array('jpeg', 'gif', 'png', 'jpg');// à tester le JPG et JPEG en majuscule
                if (in_array($extension_upload, $extensions_autorisees))
                {
                    // On peut valider le fichier et le stocker définitivement
                    $newName = hash('sha1',$_FILES['image']['name']).'.'.$extension_upload;
                    move_uploaded_file($_FILES['image']['tmp_name'], 'images/' . basename($newName));
                    echo "Transfert du fichier complété !";
                }
                else {
                    $this->error["extension"] = "extension fail";
                    return false;
                }
            }else{
                $this->error["size"] = "Erreur fichier trop gros fail";
                return false;
            }
        }else{
            $erreur = $_FILES['image']['error'];
            $this->error["code_error"] = "Le transfert du fichier a subis une erreur de code $erreur";
            return false;
        }

        $photo = new Photo();
        $photo->setName($newName);
        $photo->setUrl($newName);
        return $photo;
    }


}

?>