<?php

    if(isset($_GET['ret'])){
        $ret = $_GET['ret'];
    }

    if(isset($ret)){
        switch ($ret) {
            case 0:
                echo '<div class="alert alert-warning">Preencher o(s) campo(s) obrigatório(s)!</div>';
            break;
            case 1:
                echo '<div class="alert alert-success">Ação realizada com sucesso!</div>';
            break;
            case -1:
                echo '<div class="alert alert-danger">Ocorreu um erro na operação. Tente novamente mais tarde!</div>';
            break;
            case -2:
                echo '<div class="alert alert-danger">A senha deverá conter no minimo 6 caracteres!</div>';
            break;
            case -3:
                echo '<div class="alert alert-danger"> A senha e o repetir senha não conferem!</div>';
            break;
            case -4:
                echo '<div class="alert alert-danger"> O registro não podera ser excluido , pois ja esta em uso!</div>';
            break;
            case -5:
                echo '<div class="alert alert-danger"> Email já cadastrado. Coloque um outro email!</div>';
            break;
            case -6:
                echo '<div class="alert alert-danger"> Usuário não encontrado</div>';
            break;
        }
    }
?>