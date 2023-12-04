<?php

    require_once '../DAO/UtilDAO.php';
    UtilDAO::VerificarLogado();

    require_once '../DAO/EmpresaDAO.php';

    $dao = new EmpresaDAO();

    if (isset($_GET['cod']) && is_numeric($_GET['cod'])) {
        $idEmpresa = $_GET['cod'];
        $dados = $dao->DetalharEmpresa($idEmpresa);

        if (count($dados) == 0) {
            header('location: consultar_empresa.php');
            exit;
        }
    } else if (isset($_POST['btnSalvar'])) {
        $idEmpresa = $_POST['cod'];
        $nomeempresa = $_POST['nomeempresa'];
        $telefoneempresa = $_POST['telefoneempresa'];
        $enderecoempresa = $_POST['enderecoempresa'];
        $ret = $dao->AlterarEmpresa($idEmpresa, $nomeempresa, $telefoneempresa, $enderecoempresa);

        header('location: consultar_empresa.php?ret=' . $ret);
        exit;
    } else if (isset($_POST['btnExcluir'])) {
        
        $idEmpresa = $_POST['cod'];
        
        $ret = $dao->ExcluirEmpresa($idEmpresa);
        
        header('location: consultar_empresa.php?ret=' . $ret);
        
        exit;
    } else {
        header('location: consultar_empresa.php');
        exit;
    }

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
                        <?php include_once '_msg.php'  ?>
                        <h2>Alterar Empresa</h2>
                        <h5>Aqui você poderá alterar suas Empresas. </h5>
                    </div>
                </div>
                <hr />
                <form action="alterar_empresa.php" method="POST">
                    <input type="hidden" name="cod" value="<?= $dados[0]['id_empresa'] ?>">
                    <div class="form-group">
                        <label>Nome da Empresa*</label>
                        <input class="form-control" name="nomeempresa" placeholder="Digite o nome da empresa..." id="nomeempresa" value="<?= $dados[0]['nome_empresa'] ?>" />
                    </div>
                    <div class="form-group">
                        <label>Telefone da Empresa</label>
                        <input class="form-control" name="telefoneempresa" placeholder="Digite o telefone da empresa(opcional)..." value="<?= $dados[0]['telefone_empresa'] ?>" />
                    </div>
                    <div class="form-group">
                        <label>Endereço</label>
                        <input class="form-control" name="enderecoempresa" placeholder="Digite o endereço da empresa(opcional)..." value="<?= $dados[0]['endereco_empresa'] ?>" />
                    </div>
                    <button type="submit" class="btn btn-success" name="btnSalvar" onclick="return ValidarEmpresa()">Salvar</button>
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
                                Deseja excluir a empresa ?:<b> <?= $dados[0]['nome_empresa'] ?> </b>
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