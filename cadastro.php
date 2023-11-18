<?php
if(!isset($_POST["name"])){
    header("location: ex15-js.html");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JS | Exemplo 15</title>
</head>
<style>
@font-face {
    font-family: Century-Gothic;
    src: url('fonts/Century\ Gothic.ttf') format('truetype');
}

@font-face {
    font-family: Glitten;
    src: url('fonts/Glitten-Regular.ttf');
}

.f-glitten {
    font-family: Glitten;
}

/*[RESTYLE TAG]*/

* {
    margin: 0px; padding: 0px; 
    box-sizing: border-box;
    font-family: Century-Gothic;
}

body {
    background-color: #AC9D8E;
}

a {
    color: white;
}

/*[PÁGINA]*/

.section-welcome {
    padding: 60px;
}

.wrap-title {
    font-size: 40px;
}

.wrap-title > h2 {
    color: #836853;
}
</style>
<body>
    <!-- Mensagem: Bem Vindo  -->
    <section class="section-welcome">
        <div class="wrap-welcome">
            <div class="wrap-title">
                <h2 class="f-glitten">
                    Bom dia!
                </h2>
        
                <p>Olá, <?php echo $_POST['name']; ?>. Tudo bem?</p>
            </div>
        </div>

        <div class="wrap-link">
            <a href="ex16-js.html">Ver o exemplo 16 &#8594</a>
        </div>
    </section>
</body>
<script>
    
</script>
</html>