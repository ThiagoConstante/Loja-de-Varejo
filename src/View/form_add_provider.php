<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=[]], initial-scale=1.0">
    <title>Loja de varejo - Novo produto</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <form action="../Controller/Provider.php" method="POST">
        <section class="mx-4 mt-4 columns-2">
            
            <article>
                <label for="providername"
                class="cursor-pointer">Nome:
            </label>
                <input type="3text" id="providername" name="providername"
                class="border border-blue-400" required>    
            </article>
        
            <article>
                <label for="providercnpj"
                class="cursor-pointer">cnpj:
            </label>
                <input type="text" id="providercnpj" name="providercnpj"
                class="border border-blue-400" required>    
            </article>
          
            </section>
         <br>
         <hr style="border-color:orangered">
         <hr style="border-color:orangered">
         <h1>Endereço</h1>
         <hr style="border-color:orangered">
         <hr style="border-color:orangered">
         <br>
            
            <section class="mx-4 mt-4 columns-3">
            <article>
                <label for="publicPlace"
                class="cursor-pointer">Logradouro:
            </label>
                <input type="text" id="publicPlace" name="publicPlace"
                class="border border-blue-400" required>    
            </article>
      <br>
            <article>
                <label for="streetNumber">Número da rua</label>
                <input type="number" name="streetNumber" id="streetNumber" class="border border-blue-400" required min=1 max=1000>    
            </article>
         
            <article>
                <label for="neighborhood"
                class="cursor-pointer">bairro:
            </label>
                <input type="text" id="neighborhood" name="neighborhood"
                class="border border-blue-400" required>    
            </article>
            <br>
            <article>
                <label for="city"
                class="cursor-pointer">cidade:
            </label>
                <input type="text" id="city" name="city"
                class="border border-blue-400" required>    
            </article>
            
            <article>
                <label for="postalCode"
                class="cursor-pointer">código postal:
            </label>
                <input type="text" id="postalCode" name="postalCode"
                class="border border-blue-400" required>    
            </article>
        
            </section>
        <article class="flex justify-center mt-3">
        <button type="submit" class="p-3 text-white bg-blue-400 rounded bg-blue">Cadastrar</button>
     </article>
    </form>
</body>
</html>
