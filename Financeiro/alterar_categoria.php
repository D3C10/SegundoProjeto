<?php

    require_once '../DAO/UtilDAO.php';
    UtilDAO::VerificarLogado();

    require_once '../DAO/CategoriaDAO.php';

    $dao = new CategoriaDAO();

    if (isset($_GET['cod']) && is_numeric($_GET['cod'])) {

        $idCategoria =  $_GET['cod'];

        $dados = $dao->DetalharCategoria($idCategoria);

        if (count($dados) == 0)
            header('location: consultar_categoria.php');
        exit;
    } else if (isset($_POST['btnSalvar'])) {
        $idCategoria = $_POST['cod'];
        $nomecategoria = $_POST['nomecategoria'];

        $ret =  $dao->AlterarCategoria($nomecategoria, $idCategoria);

        header('location: consulta_categoria.php?ret=' . $ret);
        exit;
    } else if (isset($_POST['btnExcluir'])) {
        $idCategoria = $_POST['cod'];

        $ret = $dao->ExcluirCategoria($idCategoria);

        header('location: consulta_categoria.php?ret=' . $ret);
    } else {
        header('location: consultar_categoria.php');
        exit;
    }

    //if(isset($_POST['btnSalvar'])){
    //$nomecategoria = $_POST['nomecategoria']; 
    //$objdao = new EmpresaDAO();

    //$ret = $objdao-> CadastrarEmpresa($nome, $tel, $endereco);
    //}
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
                        <?php include_once '_msg.php' ?>
                        <h2>Alterar Categoria</h2>
                        <h5>Aqui você poderá alterar ou excluir suas categorias. </h5>
                    </div>
                </div>
                <hr />
                <form action="alterar_categoria.php" method="post">
                    <input type="hidden" name="cod" value="<?php $dados[0]['id_categoria'] ?>">
                    <div class="form-group">
                        <label>Nome da categoria :</label>
                        <input class="form-control" name="nomecategoria" placeholder="Digite o nome da categoria, Exemplo (conta de luz)..." id="nomecategoria" value="<?php $dados[0]['nome_categoria'] ?>" />
                    </div>
                    <button type="submit" class="btn btn-success" name="btnSalvar" onclick="return ValidarCategoria()">Salvar</button>
                    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModalExcluir">Excluir</button>

                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" id="myModalLabel">Confirmação de Exclusão</h4>
                            </div>
                            <div class="modal-body">
                                Deseja excluir a categoria ?:<b> <?= $dados[0]['nome_categoria'] ?> </b>
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