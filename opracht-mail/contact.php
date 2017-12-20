<?php
session_start();

if(isset($_POST["submit"])){
    
    if(isset($_POST["message"]) && isset($_POST["email"])){
        
        $_SESSION['field']['email'] = $_POST['email'];
        $_SESSION['field']['message'] =	$_POST['message'];
        if(isset($_POST['copy'])){
            $_SESSION['field']['copy'] = $_POST['copy'];
        }
        
        $db = new PDO('mysql:host=127.0.0.1;dbname=opdracht-mail', 'root', '' );
        $query	= 'INSERT INTO contact_messages (email, message) VALUES ( "' . $_POST['email'] . '", "' . $_POST['message'] . '")';
        
        if($db->connect_errno > 0){
            
            $_SESSION['message'] = 'Database error: ' . $db->connect_error;
            
        }else {
            
            $statement = $db->prepare( $query );

            $statement->bindValue( ':email', '"' . $_POST[ 'email' ] . '"' );
            $statement->bindValue( ':message', '"' . $_POST[ 'message' ] . '"' );

            $isAdded = $statement->execute();
            
            if($isAdded == false) {
                $_SESSION['message'] = 'toevoegen van bericht aan database mislukt';
            }else {
                $admin = 'stefan.diels@student.kdg.be';
                $subject = 'mail van ' . $_POST['email'];
                
                $body = $_POST['message'];
                $header = 'header';
                
                
                $mailSent = mail($admin, $subject, $body, $header);
                
                if($_SESSION['field']['copy'] == true){
                    
                    $subject = 'uw mail naar stefan.diels@student.kdg.be';
                
                    $body = $_POST['message'];
                    $header = 'header';
                    
                    $copySent = mail($_POST['mail'], $subject, $body, $header);
                }
                
                if($mailSent) {
                    $_SESSION['message'] = 'mail is verstuurd';
                    unset($_SESSION['field']);
                }else {
                    $_SESSION['message'] = 'het versturen van de mail ging mis';
                }
            }
        }
    }
        header('Location: contact-form.php');
}
?>