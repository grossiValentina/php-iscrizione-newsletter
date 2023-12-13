<?php include_once __DIR__ . "/function.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div class="container mt-4 pt-4 border border-3 border-info">
        <h1 class="text-center pb-3">Ciao utente!</h1>

        <!-- condizione per emeil sbagliata e alert-danger  -->
        <?php if (isset($_GET["email"]) && !filter_email($email)) { ?>
            <div class='alert alert-danger'>La mail non è corretta</div>
        <?php } ?>

        <!-- condizione per emeil giusta e alert-success  -->
        <?php if (isset($_GET["email"]) && filter_email($email)) { ?>
            <div class='alert alert-success'>La mail è corretta</div>
        <?php } ?>

        <!-- form email -->
        <form class="text-center pb-4" action="index.php" method="GET">
            
            <label class="me-3" for="email">inserisci la tua e-mail</label>
            <input class="w-50" type="text" id="email" name="email">

            <button type="submit" class="btn btn-info ms-3">conferma</button>
        </form>

    </div>
</body>

</html >