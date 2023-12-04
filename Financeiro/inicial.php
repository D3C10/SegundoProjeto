<?php
    require_once '../DAO/UtilDAO.php';
    UtilDAO::VerificarLogado();
    require_once '../DAO/MovimentoDAO.php';

    $dao = new MovimentoDAO();

    $total_entrada = $dao-> TotalEntrada();
    $total_saida = $dao-> TotalSaida();
    $movs = $dao-> MostrarUltimosLancamentos();
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
                        <?php include_once '_msg.php'; ?>
                        <h2>Página Inicial</h2>
                        <h5>Aqui você acompanha todos os números de uma forma geral.</h5>
                    </div>
                </div>
                <hr />
                <div class="col-md-6">
                    <div class="panel panel-primary text-center no-boder bg-color-green">
                        <div class="panel-body">
                            <i class="fa fa-bar-chart-o fa-5x"></i>
                            <h3>R$<?=$total_entrada[0] ['total'] != null ? number_format($total_entrada[0] ['total'], 2,',', '.' ) : '0' ?> </h3>
                        </div>
                        <div class="panel-footer back-footer-green">
                            <span>Total de Entrada</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                <div class="panel panel-primary text-center no-boder bg-color-red">
                    <div class="panel-body">
                        <i class="fa fa-bar-chart-o fa-5x"></i>
                        <h3>R$ <?= $total_saida[0] ['total'] != '' ? number_format($total_saida[0] ['total'], 2,',', '.' ) : '0' ?> </h3>
                    </div>
                    <div class="panel-footer back-footer-red">
                       <span>Total de Saída</span>
                    </div>
                </div>
            </div>
            <hr>
            <?php if (count($movs) > 0) { ?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <span>Ultimos 10 Lançamentos de Movimento</span>
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>Data</th>
                                                    <th>Tipo</th>
                                                    <th>Categoria</th>
                                                    <th>Empresa</th>
                                                    <th>Conta</th>
                                                    <th>Valor</th>
                                                    <th>Observação</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $total = 0;

                                                for ($i = 0; $i < count($movs); $i++) {
                                                    if ($movs[$i]['tipo_movimento'] == 1) {
                                                        $total = $total + $movs[$i]['valor_movimento'];
                                                    } else {
                                                        $total = $total - $movs[$i]['valor_movimento'];
                                                    }
                                                ?>
                                                    <tr class="odd gradeX">
                                                        <td><?= $movs[$i]['data_movimento'] ?> </td>
                                                        <td> <?= $movs[$i]['tipo_movimento'] == 1 ? 'Entrada' : 'Saída' ?></td>
                                                        <td><?= $movs[$i]['nome_categoria'] ?> </td>
                                                        <td><?= $movs[$i]['nome_empresa'] ?> </td>
                                                        <td><?= $movs[$i]['banco_conta'] ?> / Ag. <?= $movs[$i]['agencia_conta'] ?> - Núm.<?= $movs[$i]['numero_conta']  ?> </td>
                                                        <td>R$ <?= number_format($movs[$i]['valor_movimento'], 2, ',', '.') ?></td>
                                                        <td><?= $movs[$i]['obs_movimento'] ?></td>
                                                        
                                                            <a href="#" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModalExcluir"<?=[$i] ?>>Excluir</a>
                                                            
                                                            <form action="consultar_movimento.php" method="POST">
                                                                <input type="hidden" name="idMov" value="<?= $movs[$i] ['id_movimento'] ?>">
                                                                <input type="hidden" name="idConta" value="<?= $movs[$i] ['id_conta'] ?>">
                                                                <input type="hidden" name="tipo" value="<?= $movs[$i] ['id_movimento'] ?>">
                                                                <input type="hidden" name="valor" value="<?= $movs[$i] ['valor_movimento'] ?>">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content" >
                                                                        <div class="modal-header">
                                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                                            <h4 class="modal-title" id="myModalLabel">Confirmação de Exclusão</h4>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <center>
                                                                                <b>Deseja excluir o Movimento :</b> <br><br>
                                                                            </center> 
                                                                            <b>Data do Movimento:</b><?= $movs[$i]['data_movimento'] ?><br>
                                                                            <b>Tipo do Movimento:</b><?= $movs[$i]['tipo_movimento'] == 1 ? 'Entrada' : 'Saída' ?> <br>
                                                                            <b>Categoria:</b><?= $movs[$i]['nome_categoria']?><br>
                                                                            <b>Empresa:</b><?= $movs[$i]['nome_empresa']?> <br>
                                                                            <b>Conta:</b> <?= $movs[$i]['banco_conta'] ?> / Ag. <?= $movs[$i]['agencia_conta'] ?> - Núm.<?= $movs[$i]['numero_conta']?><br>
                                                                            <b>Valor:</b> <?= number_format($movs[$i]['valor_movimento'], 2, ',', '.') ?> <br>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                                                            <button type="submit" class="btn btn-primary" name="btnExcluir">Sim</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                        <center>
                                            <label style="color: <?= $total < 0 ? 'red' : 'green' ?>;">Total: R$ <?= number_format($total, 2, ',', '.'); ?> </label>
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }else{ ?>
                    <center>
                        <div class="alert alert-info col-md-12">Não Existe nenhum movimento para ser exibido.</div>
                    </center>
                <?php } ?>
            </div>
        </div>
    </div>
</body>
</html>