<?php

    require_once '../DAO/UtilDAO.php';
    UtilDAO::VerificarLogado();

    require_once '../DAO/ContaDAO.php';

    $dao = new ContaDAO();
    
    if (isset($_GET['cod']) && is_numeric($_GET['cod'])) {

        $idConta =  $_GET['cod'];
    
        $dados = $dao->DetalharConta($idConta);
    
        if (count($dados) == 0)
            
        header('location: consultar_categoria.php');
       
        exit;
    
    } else if (isset($_POST['btnSalvar'])) {
       
        $idConta = $_POST['cod'];
        
        $banco = $_POST['banco'];
        
        $numero = $_POST['numero'];

        $agencia = $_POST['agencia'];
        
        $saldo = $_POST['saldo'];


    
        $ret =  $dao->AlterarConta($idConta,$banco,$agencia,$numero,$saldo);
    
        header('location: consulta_categoria.php?ret=' . $ret);
        
        exit;
   
    } else if (isset($_POST['btnExcluir'])) {
    
        $idConta = $_POST['cod'];
    
        $ret = $dao->ExcluirConta($idConta);
    
        header('location: consulta_categoria.php?ret=' . $ret);

        exit;
    
    } else {
        header('location: consultar_categoria.php');
        exit;
    }
   
    //if(isset($_POST['btnSalvar'])){
      //  $banco = $_POST['banco'];
        //$agencia = $_POST['agencia'];
        //$numero = $_POST['numero'];
        //$saldo = $_POST['saldo'];

        //$objdao = new ContaDAO();

       // $ret = $objdao-> CadastrarConta($banco, $agencia , $numero, $saldo);
   // }

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php include_once '_head.php'; ?>
<body>
    <div id="wrapper">
        <?php
            include_once '_topo.php';
            include_once '_menu.php';
        ?>
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                    <?php  include_once '_msg.php'?>    
                    <h2>Alterar Conta</h2>
                        <h5>Aqui você poderá alterar suas contas. </h5>
                    </div>
                </div>
                <hr/>
                <form method="POST" action="alterar_conta.php">
               <input type="hidden" name="cod" value="<?= $dados[0] ['id_conta'] ?>">
                <div class="form-group">
                    <label>Nome do Banco*</label>
                    <input class="form-control" name="banco" placeholder="Digite o nome do banco..." id="banco"   value="<?= $dados[0] ['banco_conta'] ?>"/>
                </div>
                <div class="form-group">
                    <label>Agência*</label>
                    <input class="form-control" name="agencia" placeholder="Digite agência..." id="agencia"  value="<?= $dados[0] ['agencia_conta'] ?>"/>
                </div>
                <div class="form-group">
                    <label>Número da conta*</label>
                    <input class="form-control" name="numero" placeholder="Digite o número da conta..." id="numero" value="<?= $dados[0] ['numero_conta'] ?>"/>
                </div>
                <div class="form-group">
                    <label>Saldo*</label>
                    <input class="form-control" name="saldo" placeholder="Digite o saldo da conta..." id="saldo"  value="<?= $dados[0] ['saldo_conta'] ?>"/>
                </div>
                <button type="submit" class="btn btn-success" name="btnSalvar" onclick="return ValidarConta()">Salvar</button>
                <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModalExcluir">
                        Click Launch Demo Modal
                    </button>

                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" id="myModalLabel">Confirmação de Exclusão</h4>
                            </div>
                            <div class="modal-body">
                                Deseja excluir a conta :<b> <?= $dados[0]['banco_conta'] ?>/ Agencia: <?= $dados[0]['agencia_conta'] ?> - Número <?= $dados[0]['numero_conta'] ?>  ?</b>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn btn-primary" name="btnExcluir">Sim</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>