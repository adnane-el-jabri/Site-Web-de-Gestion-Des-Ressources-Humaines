<?php
    require_once ('connexiondb.php');
    
    if (isset($_GET['id']))
        
        $id = $_GET['id'];
        
        $requete1 = "select * from candidats where idcand='$id'";
    
        $resultat1 = $pdo->prepare($requete1);
        $resultat1->execute();

    while ($candidat = $resultat1->fetch(pdo::FETCH_ASSOC)) {
        $email = $candidat['idcand'];


        $to = $candidat['email'];
        echo $candidat['email'];
        
        $subject = "INVITATION A UN ENTRETIEN CHEZ INTELLITEK ";
        
        $txt = "Madame, Monsieur,

Suite à l’étude de votre candidature, nous avons le plaisir de vous inviter à passer des entretiens physiques dans nos locaux.

Je vous enverrai une invitation dès que j'aurai reçu le calendrier de disponibilité des managers.

Nous vous invitons à confirmer votre présence, par la simple réponse à cette e-mail.

Nous restons à votre disposition quant aux différentes questions que vous pourriez rencontrer, et nous vous souhaitons une bonne réussite dans cette série d’entretien.

Nous avons hâte de vous voir.

Bien cordialement,

Le service des ressources humaines,

TOUATI TAHA
directeur administratif,
intellitek@gmail.com";
        
        $headers = "From: INTELLITEK" . "\r\n" . "CC: adnaneeljabri099@gmail.com";
        // ini_set('smtp', 'smtp.gmail.com');
        // ini_set('smtp_port', 587);

        mail($to, $subject, $txt, $headers);?>
 <?php }
?>

<html>
  <head>
      
    </head>
     <body>
  
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        swal({
          icon: "success",
          title: "bon travail !",
          text: "  Un message a été envoyé au candidat !",
          showConfirmButton: true,
          confirmButtonText: "Cerrar",
          closeOnConfirm: false
         }). then(function(result){
            window.location = "recrutement.php";
             })
         </script>

     </body></html>

