<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja de varejo - Novo provider</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <form action="../Controller/Address.php" method="POST">
        <section class="mx-4 mt-4 columns-3">
            <article>
            <label for="public_Place" class="cursor-pointer">Número da Casa:</label>
           <input type="number" name="public_Place" id="public_Place" class="border border-blue-400" required>
           </article>
            <article>
                <label for="street_Number" class="cursor-pointer">Número da rua:</label>
                <input type="number" id="street_Number" name="street_Number" class="border border-blue-400" required>
            </article>
            <article>
                <label for="neighborhood" class="cursor-pointer">Bairro:</label>
                <input type="text" id="neighborhood" name="neighborhood" class="border border-blue-400" required>
            </article>
            <article>
                <label for="city" class="cursor-pointer">Cidade:</label>
                <input type="text" id="city" name="city" class="border border-blue-400" required>
            </article>
            <article>
                <label for="postalCode" class="cursor-pointer">Código postal:</label>
                <input type="number" id="postalCode" name="postalCode" class="border border-blue-400" required>
            </article>
        </section>
            <article class="flex justify-center mt-3">
            <button type="submit" class="p-3 text-white bg-blue-700 rounded">Cadastrar</button>
        </article>
</head>
<body> 
</body>
</html>