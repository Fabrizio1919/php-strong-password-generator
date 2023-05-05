<?php
// Verifica se la lunghezza della password è stata fornita
if (isset($_GET['lunghezza_password'])) {
  $lunghezza = intval($_GET['lunghezza_password']);
  
  // Crea un array con i caratteri da utilizzare per generare la password
  $caratteri = array(
    "abcdefghijklmnopqrstuvwxyz",
    "ABCDEFGHIJKLMNOPQRSTUVWXYZ",
    "0123456789",
    "!@#$%^&*()"
  );
  
  $password = "";
  
  // Aggiunge caratteri casuali allapassword fino a raggiungere la lunghezza desiderata
  while (strlen($password) < $lunghezza) {
    $categoria = array_rand($caratteri);
    $carattere = substr($caratteri[$categoria], rand(0, strlen($caratteri[$categoria])-1), 1);
    $password .= $carattere;
  }
  
  // Restituisce la password generata all'utente
  echo "La password generata è: " . $password;
} else {
  echo "La lunghezza della password non è stata fornita.";
}
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <title>Password Generator</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer"   />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body>

    <header class="py-5">
        <div class="container">
            <div class="title text-center">
                <h1>Strong Password Generator</h1>
                <h2>Genera una password sicura </h2>
            </div>
        </div>
    </header>

     <main>
        <div class="container">
            <div class="password">
                <form method="get">
                    <label for="lunghezza_password">Lunghezza Password:</label>
                    <input type="number" id="lunghezza_password" name="lunghezza_password" min="8" max="20" required>
                    <button type="submit">Genera Password</button>


                    <div class="d-flex justify-content-center align-items-center">
                        <input type="radio" name="true" id="true" value="true">
                        <label for="true">Si</label>
                    </div>

                    <div class="d-flex justify-content-center align-items-center">
                        <input type="radio" name="false" id="false" value="false">
                        <label for="false">No</label>
                    </div>

                    <div class="d-flex justify-content-center align-items-center">
                        <input type="checkbox" name="words" id="words">
                        <label for="words">Lettere</label>
                    </div>

                    <div class="d-flex justify-content-center align-items-center">
                        <input type="checkbox" name="numbers" id="numbers">
                        <label for="numbers">Numeri</label>
                    </div>

                    <div class="d-flex justify-content-center align-items-center">
                        <input type="checkbox" name="simbols" id="simbols">
                        <label for="simbols">Simboli</label>
                    </div>
                </form>
            </div>
        </div>

    </main> 











    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>