<?php
// PHP: Minimalna obsługa formularza
$komunikat = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Zabezpieczenie danych wejściowych
    $imie = htmlspecialchars($_POST['imie']);
    $komunikat = "
        <div class='success-box'>
            <h2>Witaj, $imie!</h2>
            <p>Wszystko działa</p>
        </div>
    ";
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <title>Zadanie 5/6: Wdrażanie i Monitorowanie PHP</title>
    
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            background-color: #f4f4f9;
            color: #333;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #0078d4; /* Kolor Azure Blue */
            text-align: center;
        }
        form {
            margin-top: 20px;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }
        input[type="text"] {
            width: 90%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #0078d4;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #005a9e;
        }
        .success-box {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 4px;
        }
    </style>
    
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-XXXXXXXXXX"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-DSG207064J');
    </script>
</head>
<body>
    <div class="container">
        <h1>Wdrożenie PHP na Azure</h1>
        
        <?php echo $komunikat; ?>

        <form method="post" action="index.php">
            <label for="imie">Wprowadź swoje imię:</label>
            <input type="text" id="imie" name="imie" required placeholder="Imię Nazwisko">
            <input type="submit" value="Wyślij do serwera">
        </form>

        <p style="text-align: center; margin-top: 30px;">
         Google Analytics i Azure Monitor
        </p>
    </div>
</body>
</html>