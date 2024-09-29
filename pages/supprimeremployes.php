<?php
  session_start();
  if (isset($_SESSION['user'])){
  require_once("connexiondb.php");

  $id=$_GET['idemp'];
 
  $requete2="delete from employes where idemp=:id";
  $resultat2=$pdo->prepare($requete2);
  $resultat2->bindParam(':id',$id);
  $resultat2->execute();

  }
?>

 <html>
     <body>
     
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        swal({
          icon: "success",
          title: "bon travail !",
          text: "l'employé a été archivé avec succès!",
          showConfirmButton: true,
          confirmButtonText: "Cerrar",
          closeOnConfirm: false
         }). then(function(result){
            window.location = "employes.php";
             })
         </script>     

     </body></html>