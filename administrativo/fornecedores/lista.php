<!DOCTYPE html>
<html lang="en">

    <?php
// Configuração da página
    global $titulo;
    $titulo = "Lista de Fornecedores";
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


                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary float-left"><?php echo $titulo; ?></h6>      
                                <a href="./cadastro.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm float-right"><i class="fas fa-plus fa-sm text-white-50"></i> Novo fornecedor</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Nome</th>
                                                <th>E-mail</th>
                                                <th>Endereço</th>
                                                <th>CNPJ</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Nome</th>
                                                <th>E-mail</th>
                                                <th>Endereço</th>
                                                <th>CNPJ</th>

                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <tr>
                                                <td>Kelly Hunt</td>
                                                <td>kelly.hunt93@example.com</td>
                                                <td>4801 Partridge Ave</td>
                                                <td>13579</td>                  
                                            </tr>
                                            <tr>
                                                <td>Sherri Fletcher</td>
                                                <td>sherri.fletcher25@example.com</td>
                                                <td>6302 W Lone Mountain Rd</td>
                                                <td>13585</td>                  
                                            </tr>
                                            <tr>
                                                <td>Kelly Hunt</td>
                                                <td>kelly.hunt93@example.com</td>
                                                <td>4801 Partridge Ave</td>
                                                <td>13579</td>                  
                                            </tr>
                                            <tr>
                                                <td>Sherri Fletcher</td>
                                                <td>sherri.fletcher25@example.com</td>
                                                <td>6302 W Lone Mountain Rd</td>
                                                <td>13585</td>                  
                                            </tr>
                                            <tr>
                                                <td>Kelly Hunt</td>
                                                <td>kelly.hunt93@example.com</td>
                                                <td>4801 Partridge Ave</td>
                                                <td>13579</td>                  
                                            </tr>
                                            <tr>
                                                <td>Sherri Fletcher</td>
                                                <td>sherri.fletcher25@example.com</td>
                                                <td>6302 W Lone Mountain Rd</td>
                                                <td>13585</td>                  
                                            </tr>
                                            <tr>
                                                <td>Kelly Hunt</td>
                                                <td>kelly.hunt93@example.com</td>
                                                <td>4801 Partridge Ave</td>
                                                <td>13579</td>                  
                                            </tr>
                                            <tr>
                                                <td>Sherri Fletcher</td>
                                                <td>sherri.fletcher25@example.com</td>
                                                <td>6302 W Lone Mountain Rd</td>
                                                <td>13585</td>                  
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
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
