<!DOCTYPE html>
<html lang="en">

    <?php
// Configuração da página
    global $titulo;
    $titulo = "Entrada de estoque";
    include("../../comum/cabecalho-admin.php");
    ?>

    <body id="page-top">

        <!-- Page Wrapper -->
        <div id="wrapper">

            <?php include '../menu.php'; ?>   

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">

                    <?php include '../topbar.php'; ?>

                    <!-- Begin Page Content -->
                    <div class="container-fluid">

                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary"><?php echo $titulo; ?></h6>
                            </div>
                            <div class="card-body">
                                <form action="processa-entrada.php" method="POST">

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="formControlProduto">Produto</label>
                                            <select id="formControlProduto" class="form-control">
                                                <option selected>Escolher...</option>
                                                <option>Produto 1</option>
                                                <option>Produto 2</option>
                                                <option>Produto 3</option>
                                                <option>Produto 4</option>
                                                <option>Produto 5</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="formControlQuantidade">Qtde</label>                                            
                                            <input type="number" class="form-control" id="formControlQuantidade" placeholder="Somente números">
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="formControlDataEntrada">Data</label>                                            
                                            <input type="date" class="form-control" id="formControlDataEntrada" >
                                        </div>
                                        
                                         <div class="form-group col-md-6">
                                            <label for="formControlHoraEntrada">Horário</label>                                            
                                            <input type="time" class="form-control" id="formControlHoraEntrada" >
                                        </div>
                                    </div>

                                    <div class="btn-group" role="group" aria-label="Ações">
                                        <button type="submit" class="btn btn-success">Salvar</button>
                                        <button type="button" class="btn btn-danger">Cancelar</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                    <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->

                <?php include '../../comum/rodape.php'; ?>

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <?php include '../../comum/painel-desconectar.php'; ?>

        <?php include '../../comum/scripts.php'; ?>

</html>