<!DOCTYPE html>
<html lang="en">

    <?php
// Configuração da página
    global $titulo;
    $titulo = "Entrada de Estoque";
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
                                <?php
                                // Receber os dados da página anterior
                                // Validar os dados
                                // Inserir no banco de dados
                                // Emitir confirmação
                                ?>
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