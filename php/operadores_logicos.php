<html>

<head>
    <meta charset="utf-8" />
    <title>If_Else - Operadores Condicionais</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body class="container">



<!--
        OPERADORES CONDICIONAIS/COMPARAÇÃO

        == Igual
        === operador identico - Verifica se os valores sao iguas e se sao do mesmo tipo
        != ou <> operador diferente
        !== nao identico
        < verifica se o valor da esquerda é menor q o da direita
        > verifica se o valor da direita é maior q o da esqueda
        <= verifica se o valor a esquerda é menor ou igual ao da direita
-->


<!--
   Operadores Lógicos
   E: && OU AND -> retorna verdadeiro se todos os resultados das expreçoes forem verdadeiro

   OU: || OU OR retorna verdadeiro se pelo menos uma das expreçoes forem verdadeiras

   XOR: -> retorna verdadeiro se uma das expressoes for verdadeira e a outra falsa, ou vise-versa
            (Se as duas forem verdadeiras e duas forem falsas o resultado sera falso.
            Ele espera obrigatoriamente q das expressoes conectadas por ele uma seja verdadeira e a outra falsa.
            Se uma das expressoes for verdadeira e a outra falsa nao importando a posiçao do operador ai sim, ele retorna verdadeiro.)

  ! -> Operador de negaçao inverte o resultado retornanda pela exoressão
-->








<div class="m-3">
    <h3>Operadores Condicionais - comparação E: && ou AND </h3>

    <p class="mb-1">if((5 == 3 && 10 > 3)</p>
    <p class="mb-1">
        Uma operação falsa e outra verdadeira. Logo, a expreçao a cima vai me retornar um 'falso' pq o && só retorna 'verdadeiro' se todas as operações forem verdadeiras
    </p>

    <?php
    if(5 == 3 && 10 > 3){
        echo '<span class="text-success">Verdadeiro</span>';
    } else {
        echo '<span class="text-danger">Falso</span>';
    }
    ?>
</div>
<hr>

</div>

<div class="m-3">
    <h3>Operadores Condicionais - comparação OU: || ou OR </h3>

    <p class="mb-1">if((5 == 3 || 10 > 3)</p>
    <p class="mb-1">
        retorna verdadeiro se pelo menos uma das expreçoes forem verdadeiras
    </p>
    <!--VERDADEIRO-->
    <?php
    if(( 5 == 3 ) || (10 > 3)){
        echo '<p class="text-success">Verdadeiro</p>';
    } else {
        echo '<p class="text-danger">Falso</p>';
    }
    ?>
    <hr>


    <h3>Operadores Condicionais - comparação: XOR </h3>

    <!--RETORNA VERDADEIRO pq as duas são verdadeiras-->
    <p class="mb-1">if((4 == 4) XOR (10 > 15)</p>
    <P class="mb-1">A condiçao do xor aqui, retonar verdadeiro pq temos uma condiçao verdadeira e uma que nao é verdadeira</P>

        <?php
        if((4 == 4) XOR (10 > 15)){
            echo '<p class="text-success">Verdadeiro</p>';
        } else {
            echo '<p class="text-danger">Falso</p>';
        }
        ?>

    <!--RETORNA FALSO pq uma das duas não são verdadeiras-->
    <p class="mb-1">if((7 <= 4) XOR (10 > 15)</p>
    <p class="mb-1">Aqui as duas expressões são falsas, então ele vai retornar falso porque o objetivo do XOR é que pelo menos uma seja verdadeira.</p>

        <?php
        if((7<= 4) XOR (10 > 15)){
            echo '<span class="text-success">Verdadeiro</span>';
        } else {
            echo '<span class="text-danger">Falso</span>';
        }
        ?>

    <!-- RETORNA FALSO pq as duas são VERDADEIRAS-->
    <p class="mb-1">if((7 >= 4) XOR (10 < 15))</p>
    <p class="mb-1">mesmo que as duas expressoes sejam verdadeiras, ele vai retornar falso porque o objetivo do XOR é que pelo menos uma seja verdadeira.</p>

    <?php
    if((7 >= 4) XOR (10 < 15)){
        echo '<span class="text-success">Verdadeiro</span>';
    } else {
        echo '<span class="text-danger">Falso</span>';
    }
    ?>
</div>

<hr>

<div class="m-3">
    <h3>Operadores Condicionais - comparação: ! Operador de negaçao</h3>

    <p class="mb-1">if(('a' == 'b'))</p>
    <p class="mb-1">
        Nesse caso eu posso submeter essa expressao para uma analise inicial que vai ser resolvida e o retorno dessa operaçao, que no caso. é falso
        vai ser submetida pro operador de negaçao <strong>(!)</strong> o resultado e a inversao do retorno dado pela expressao tornando-a verdadeira.
    </p>
        <?php
        if(!('a'== 'b')){
            echo '<span class="text-success">Verdadeiro</span>';
        } else {
            echo '<span class="text-danger">Falso</span>';
        }
        ?>

    <br><br>

    <p class="mb-1">
        Nesse caso a baixo, se o retorno for true, nao tem nada para resolver entao o operador me retorna um valor falso
    </p>
    <p class="mb-1">if(('a' == 'a'))</p>

    <?php
    if(!('a'== 'a')){
        echo '<span class="text-success">Verdadeiro</span>';
    } else {
        echo '<span class="text-danger">Falso</span>';
    }
    ?>

    <br>
    <hr>

    <p class="mb-1">
       Operadores logicos pode conectar duas ou mais operaçoes de comparaçao. No caso do exemplo a baixo
        a primeira condiçao e a segunda condiçao sao verdadeiras e a terceiro condiçao é falsa, pq 5 nao é
        diferente de 5.
        Como as operaçoes estao conectadas pelo operador &&, para ela retornar veredadeiro todas as condiçoes devem
        ser verdadeiras. Como temos uma condiçao falsa. O Resultado dessa operaçao sera falso.
    </p><br>
    <p class="mb-1">if((22 == 22 && 3 == 3 && 5 != 5))</p>

    <?php
    if((22 == 22 && 3 == 3 && 5 != 5)){
        echo '<span class="text-success">Verdadeiro</span>';
    } else {
        echo '<span class="text-danger">Falso</span>';
    }
    ?>

    <br><br>
    <hr>

    <h3>() Estabelece precendência</h3>
    <p>Significa que o intepretador do php vai ler primeiro oq esta entre () ou mais internos (()). Na sequencia uma vez resolvido os () mais internos  ele vai espondo os resoltado dos () mais externos</p>
    <p>if((22 == 22 && 3 == 3) || 5 != 5)</p>
        <?php
        if((22 == 22 && 3 == 3) || 5 != 5){
            echo '<span class="text-success">Verdadeiro</span>';
        } else {
            echo '<span class="text-danger">Falso</span>';
        }
        ?>
</div>








<h3></h3>


<h3></h3>


<h3></h3>


<h3></h3>


<h3></h3>

<h3></h3>

<h3></h3>


<h3></h3>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
</body>

</html>