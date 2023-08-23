<?php

    session_start();

    //remover indices do array de sessão
    //unset(array[indice]) // remove o indice apenas se existir

    //destruir a variável de sessão
    //session_destroy()
    //forçar um redirecionamento pois, ao destruir, deve-se fazer uma nova requisição para a execução da destruição em si

    session_destroy();
    header('Location: index.php');

?>