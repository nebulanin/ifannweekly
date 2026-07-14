<?php
session_start();
$_SESSION = [];
session_unset();
session_destroy();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Logging Out...</title>
    <!-- Redirect otomatis setelah 2 detik -->
    <meta http-equiv="refresh" content="2;url=login.php">
    <style>
        body { 
            font-family: sans-serif; 
            display: flex; 
            justify-content: center; 
            align-items: center; 
            height: 100vh; 
            background-color: #f4f4f9; 
            text-align: center; 
        }
        .container { padding: 20px; }
    </style>
</head>
<body>

<div class="container">
    <h2>Logging out...</h2>
    <p>Terima kasih telah berkunjung, Anin! Kamu akan diarahkan kembali ke halaman login.</p>
</div>

</body>
</html>