<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= base_url();?>/assets/css/header.css" media="all">
    <link rel="stylesheet" href="<?= base_url();?>/assets/css/sobre.css">
    <title>Sobre</title>
</head>
<body>
    <div class="container divSobre">
        <img class="logoGTA" src="<?= base_url();?>assets/css/imagens/logo_GTA.png" id="logo" alt="Logo do Grupo de Tecnologias Assistivas do IFRS Campus Rio Grande">
        <p id="sobreTexto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, nemo nobis. Atque soluta placeat quas sequi dolorem adipisci ea amet! Doloribus laboriosam adipisci labore facere aliquam! Iure aspernatur iusto ducimus!
            <br>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, laborum dicta. Incidunt facilis ducimus atque ea dolores quibusdam optio ab possimus inventore nisi, enim vitae, quia vero unde id ut?
            <br>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis excepturi magnam deserunt officia exercitationem quod maiores, ipsam porro ex impedit odio quo commodi facere facilis aliquid amet quisquam temporibus magni?
        </p>
    </div>
    <script>
        document.querySelector('.active').classList.remove('active');
        document.querySelector('.sobre').classList.add('active');
    </script>
</body>
</html>