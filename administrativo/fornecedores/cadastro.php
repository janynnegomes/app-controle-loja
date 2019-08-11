<!DOCTYPE html>
<html lang="en">

    <?php
// Configuração da página
    global $titulo;
    $titulo = "Cadastro de Clientes";
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
                                <form action="processa-cadastro.php" method="POST">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="formControlCNPJ">CNPJ</label>
                                            <input type="number" class="form-control" id="formControlCNPJ" placeholder="Somente números">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="formControlEmail">E-mail</label>
                                            <input type="email" class="form-control" id="formControlEmail" placeholder="fornecedor@email.com">
                                        </div>
                                    </div>
                                    <div class="form-group">

                                    </div>
                                    <div class="form-group">
                                        <label for="formControlNome">Nome Completo</label>
                                        <input type="text" class="form-control" id="formControlNome" placeholder="">
                                    </div>

                                    <div class="form-group">
                                        <label for="formControlEndereco">Endereço</label>
                                        <textarea class="form-control" id="formControlEndereco" rows="3"></textarea>
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
