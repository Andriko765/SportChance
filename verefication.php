<?php
 include "db_conn.php";

    if (isset($_POST["verify_email"]))
    {
        $email = $_POST["email"];
        $verification_code = $_POST["verification_code"];
 
    
 
        // mark email as verified
        $sql4 = "UPDATE users SET email_varificated_at = NOW() WHERE email = '" . $email . "' AND verification_code = '" . $verification_code . "'";
        $result  = mysqli_query($log, $sql4);
 
        if (mysqli_affected_rows($log) == 0)
        {
            die("Код верифікації не правильний.");
        }
 
        echo ' <script>alert("Ви верифікавали свою пошту.")</script>';
        header("Location: index.php");
        exit();
    }
 
?>

<form method="POST">
    <input type="email" name="email" required>
    <input type="text" name="verification_code" placeholder="Введіть код верифікації" required />
 
    <input type="submit" name="verify_email" value="Підтвердити">
</form>


