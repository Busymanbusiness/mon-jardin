 <?php 
if ($_SERVER["REQUEST_METHOD"] == 
"POST"){ 
    $email = $_POST['email']; 
    // Ici, vous pouvez ajouter du code pour enregistrer l'email dans une base de données ou envoyer un email de confirmation.     echo "Merci pour votre inscription à notre newsletter, $email !"; 
} 
?> 
