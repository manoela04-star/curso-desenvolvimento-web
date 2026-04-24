<?php

$postagens = [
        [
                "titulo" => "Titulo da postagem 1",
                "data" => "postado 20 de março de 2022",
                "descricao" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime velit, recusandae illum aliquid perspiciatis consequatur ipsam veniam tempora dolore voluptate repudiandae, harum nobis veritatis eveniet.",
                "imagem" => "imagens/imagem1.jpg",
        ] ,

        [
                "titulo" => "Titulo da postagem 2",
                "data" => "postado 20 de março de 2022",
                "descricao" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime velit, recusandae illum aliquid perspiciatis consequatur ipsam veniam tempora dolore voluptate repudiandae, harum nobis veritatis eveniet.",
                "imagem" => "imagens/imagem2.jpg",
        ],

        [
                "titulo" => "Titulo da postagem 3",
                "data" => "postado 20 de março de 2022",
                "descricao" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime velit, recusandae illum aliquid perspiciatis consequatur ipsam veniam tempora dolore voluptate repudiandae, harum nobis veritatis eveniet.",
                "imagem" => "imagens/imagem2.jpg",
        ],

        [
                "titulo" => "Titulo da postagem 4",
                "data" => "postado 20 de março de 2022",
                "descricao" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime velit, recusandae illum aliquid perspiciatis consequatur ipsam veniam tempora dolore voluptate repudiandae, harum nobis veritatis eveniet.",
                "imagem" => "imagens/imagem2.jpg",
        ]




];





?>






<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <title>TecBlog - O seu blog de tecnologia</title>
</head>


<body>
    
    <div id="area-cabecalho"> <!--Abertura de postagem 1-->

        <div id="area-logo">
            <h1>Tec<span class="branco">Blog</span></h1>
        </div>

        <div id="area-menu">
            <a href="index.html">Home</a>
            <a href="Jogos.html">Jogos</a>
            <a href="celulares.html">Celulares</a>
            <a href="informatica.html">informatica</a>
            <a href="eletronicos.html">Eletrônicos</a>
            <a href="area_restrita.php" style="float: right">Area restrita</a>
        </div>

    </div>

    <div id="area-principal">
        
        <div id="area-postagens">

            <?php foreach($postagens as $postagem):               ?>
            <div class="postagem">
                <h2> <?php echo $postagem["titulo"]; ?> </h2>
                <SPan class="data-postagem"><?php echo $postagem["data"]; ?></SPan>
                <img width="620px" src="<?php echo $postagem["imagem"]; ?>">
                <p>
                    <?php echo $postagem["descricao"]; ?>
                </p>
                <a href="">Leia mais</a>

            </div> <!--Fechamento de postagem 1 --> 
            <?php endforeach; ?>


        </div>
          <!--  <div id="area-lateral">
			
                <div class="conteudo-lateral">
                    <h3>Postagens recentes</h3>

                    <div class="postagem-lateral">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <a href="">Leia mais</a>
                    </div>

                    <div class="postagem-lateral" style="border-bottom: none;">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <a href="">Leia mais</a>
                    </div>

                </div>

                <div class="conteudo-lateral">
                    <h3>Categorias</h3>

                    <a href="">Jogos</a><br>
                    <a href="">Celulares</a><br>
                    <a href="">Informática</a><br>
                    <a href="">Eletrônicos</a><br>
                    <a href="">Jogos</a><br>

                </div>


		    </div> -->

		<div id="rodape">
			Todos os direitos reservados
		</div>

	</div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
</body>
</html>