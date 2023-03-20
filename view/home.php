<?php 
    include('../src/check-login.php'); 
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ForEtec | Bem-Vindo</title>

    <!-- STYLESHEET -->
    <link rel="stylesheet" href="../assets/css/home.css">

    <!-- FAVICON -->
    <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon">
</head>

<body>
    <header>
        <div class="branding">
            <img src="../assets/img/logo.png" alt="Logo da plataforma com um quatro vermelho em forma de um lápis">
            <h1>For<span class="title-red">Etec</span></h1>
        </div>
        <menu class="icon nav-icon-5">
            <span></span>
            <span></span>
            <span></span>
        </menu>
        <nav class="menu-container">
            <ul>
                <li><span><svg width="44" height="44" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.07926 0.222253C7.31275 -0.007434 7.6873 -0.007434 7.92079 0.222253L14.6708 6.86227C14.907 7.09465 14.9101 7.47453 14.6778 7.71076C14.4454 7.947 14.0655 7.95012 13.8293 7.71773L13 6.90201V12.5C13 12.7761 12.7762 13 12.5 13H2.50002C2.22388 13 2.00002 12.7761 2.00002 12.5V6.90201L1.17079 7.71773C0.934558 7.95012 0.554672 7.947 0.32229 7.71076C0.0899079 7.47453 0.0930283 7.09465 0.32926 6.86227L7.07926 0.222253ZM7.50002 1.49163L12 5.91831V12H10V8.49999C10 8.22385 9.77617 7.99999 9.50002 7.99999H6.50002C6.22388 7.99999 6.00002 8.22385 6.00002 8.49999V12H3.00002V5.91831L7.50002 1.49163ZM7.00002 12H9.00002V8.99999H7.00002V12Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path></svg></span>HOME</li>
                <li><span><svg width="44" height="44" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M11.5 1C11.7761 1 12 1.22386 12 1.5V13.5C12 13.7761 11.7761 14 11.5 14C11.2239 14 11 13.7761 11 13.5V1.5C11 1.22386 11.2239 1 11.5 1ZM9.5 3C9.77614 3 10 3.22386 10 3.5V13.5C10 13.7761 9.77614 14 9.5 14C9.22386 14 9 13.7761 9 13.5V3.5C9 3.22386 9.22386 3 9.5 3ZM13.5 3C13.7761 3 14 3.22386 14 3.5V13.5C14 13.7761 13.7761 14 13.5 14C13.2239 14 13 13.7761 13 13.5V3.5C13 3.22386 13.2239 3 13.5 3ZM5.5 4C5.77614 4 6 4.22386 6 4.5V13.5C6 13.7761 5.77614 14 5.5 14C5.22386 14 5 13.7761 5 13.5V4.5C5 4.22386 5.22386 4 5.5 4ZM1.5 5C1.77614 5 2 5.22386 2 5.5V13.5C2 13.7761 1.77614 14 1.5 14C1.22386 14 1 13.7761 1 13.5V5.5C1 5.22386 1.22386 5 1.5 5ZM7.5 5C7.77614 5 8 5.22386 8 5.5V13.5C8 13.7761 7.77614 14 7.5 14C7.22386 14 7 13.7761 7 13.5V5.5C7 5.22386 7.22386 5 7.5 5ZM3.5 7C3.77614 7 4 7.22386 4 7.5V13.5C4 13.7761 3.77614 14 3.5 14C3.22386 14 3 13.7761 3 13.5V7.5C3 7.22386 3.22386 7 3.5 7Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path></svg></span>ESTATÍSTICAS</li>
                <li><span><svg width="44" height="44" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.5 0.875C5.49797 0.875 3.875 2.49797 3.875 4.5C3.875 6.15288 4.98124 7.54738 6.49373 7.98351C5.2997 8.12901 4.27557 8.55134 3.50407 9.31167C2.52216 10.2794 2.02502 11.72 2.02502 13.5999C2.02502 13.8623 2.23769 14.0749 2.50002 14.0749C2.76236 14.0749 2.97502 13.8623 2.97502 13.5999C2.97502 11.8799 3.42786 10.7206 4.17091 9.9883C4.91536 9.25463 6.02674 8.87499 7.49995 8.87499C8.97317 8.87499 10.0846 9.25463 10.8291 9.98831C11.5721 10.7206 12.025 11.8799 12.025 13.5999C12.025 13.8623 12.2376 14.0749 12.5 14.0749C12.7623 14.075 12.975 13.8623 12.975 13.6C12.975 11.72 12.4778 10.2794 11.4959 9.31166C10.7244 8.55135 9.70025 8.12903 8.50625 7.98352C10.0187 7.5474 11.125 6.15289 11.125 4.5C11.125 2.49797 9.50203 0.875 7.5 0.875ZM4.825 4.5C4.825 3.02264 6.02264 1.825 7.5 1.825C8.97736 1.825 10.175 3.02264 10.175 4.5C10.175 5.97736 8.97736 7.175 7.5 7.175C6.02264 7.175 4.825 5.97736 4.825 4.5Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path></svg></span>PERFIL</li>
            </ul>
        </nav>
    </header>
    <main>
        <div class= "div-block">
            <div class="div-text">
                <h1>Olá, <span class="text-color"><?php echo explode(" ", $_SESSION['nome'])[0]; ?></span>!</h1> 
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde fuga perspiciatis, minima debitis inventore consectetur ducimus earum nemo ex ratione dolorum quae, repellat explicabo, itaque sunt id dolor. Nostrum, modi!</p>
            </div>
            <div class="div-streak">
                <img src="../assets/img/streak.png" alt="image circle streak">
            </div>
        </div>
        <div class= "div-block">
            <div class="div-text">
                <h1>Bases, vamos para <span class="text-color">prática</span>!</h1> 
                <p id="parag-d2">Aqui está todas as materias que você verá nessa jornada, jovem Padawan.</p>
               <div class="card-roll">
                   <div class="card humanas">História</div>
                   <div class="card exatas">Matemática</div>
                   <div class="card linguas">Português</div>
                   <div class="card humanas">Geografia</div>
                   <div class="card other">Ênfase em exatas </div>
                   <div class="card linguas">Espanhol</div>
                   <div class="card exatas">Física</div>
                   <div class="card other">Química</div>
                   <div class="card linguas">Inglês</div>
               </div>
               <img class="pass-button" src="../assets/img/arrow.png" alt="imagem de uma seta" />
               <img class="prev-button" src="../assets/img/arrow.png" alt="imagem de uma seta" />
        </div>
    </main>

    <script src="../assets/js/home.js"></script>
</body>

</html>