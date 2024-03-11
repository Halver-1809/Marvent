<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php'; 
require '../models/home.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email']; 
    $sql = "SELECT * FROM usuarios WHERE UsuEmailPersonal = '$email'";
    $resultado = $conn->query($sql);

    if ($resultado->num_rows > 0) {

        $token = bin2hex(random_bytes(16));

        $sql = "UPDATE usuarios SET token_reset_password = '$token', fecha_solicitud_reset = NOW() WHERE UsuEmailPersonal = '$email'";
        $conn->query($sql);

        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host = 'smtp-mail.outlook.com'; 
        $mail->SMTPAuth = true;
        $mail->Username = 'h.verdugo18@outlook.com'; 
        $mail->Password = 'Lacajitafeliz18*+'; 
        $mail->Port = 587;

        $mail->setFrom('h.verdugo18@outlook.com', ' SOFTWARE DEVELOPERS ');
        $mail->addAddress($email); 
        $mail->Subject = 'Recuperacion de contrasena';
        $mail->Body = 'Haz clic en el siguiente enlace para restablecer tu contraseña: <a href="https://localhost/marventprueba/views/change_pass.php?token=' . $token . '">Restablecer contraseña</a>';
        
        try {
            $mail->send();
            header("Location:../views/login.php?message=ok");
        } catch (Exception $e) {
            header("Location: ../views/login.php?message=error") ;      
        }
    } else {
        header("Location:../views/login.php?message=not_found") ;      
    }
}
?>