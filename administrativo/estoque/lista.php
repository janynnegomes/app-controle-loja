<!DOCTYPE html>
<html lang="en">

    <?php
// Configuração da página
    global $titulo;
    $titulo = "Lista de Estoque";
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
                                <a href="./cadastro.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm float-right"><i class="fas fa-plus fa-sm text-white-50"></i> Novo produto</a>
                            </div>
                            <div class="card-body">
                                <form  id="busca-produto" action="lista.php" method="POST">                                    
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputNomeProduto">Produto</label>
                                            <input type="text" class="form-control" id="inputNomeProduto" placeholder="Nome do produto ...">
                                        </div>
                                        
                                        <div class="form-group col-md-2">
                                            <label for="inputState"> Ação</label>
                                           <button type="submit" class="btn btn-primary mb-2 form-control">Filtrar</button>
                                        </div>
                                    </div>
                                    
                                </form>

                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Produto</th>
                                                <th>Quantidade</th>                                                                                           
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Produto</th>
                                                <th>Quantidade</th>  
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <tr>
                                                <td title=" ESTÉRIL, COMPRIMENTO MÍNIMO DE 28CM, LUBRIFICADA C/ PÓ BIOABSORVÍVEL,ATÓXICA, DESCARTÁVEL,ANATÔMICO, CONFORME NORMA ABNT C/ ABERTURA ASSÉPTICA">
                                                    LUVA CIRÚRGICA, LÁTEX NATURAL c/ 100</td>
                                                <td>10</td>                                               
                                            </tr>
                                            <tr>
                                                <td title=" ESTÉRIL, COMPRIMENTO MÍNIMO DE 28CM, LUBRIFICADA C/ PÓ BIOABSORVÍVEL,ATÓXICA, DESCARTÁVEL,ANATÔMICO, CONFORME NORMA ABNT C/ ABERTURA ASSÉPTICA">
                                                    LUVA CIRÚRGICA, LÁTEX NATURAL c/ 100</td>
                                                <td>10</td>                                               
                                            </tr>
                                            <tr>
                                                <td title=" ESTÉRIL, COMPRIMENTO MÍNIMO DE 28CM, LUBRIFICADA C/ PÓ BIOABSORVÍVEL,ATÓXICA, DESCARTÁVEL,ANATÔMICO, CONFORME NORMA ABNT C/ ABERTURA ASSÉPTICA">
                                                    LUVA CIRÚRGICA, LÁTEX NATURAL c/ 100</td>
                                                <td>10</td>                                               
                                            </tr>
                                            <tr>
                                                <td title=" ESTÉRIL, COMPRIMENTO MÍNIMO DE 28CM, LUBRIFICADA C/ PÓ BIOABSORVÍVEL,ATÓXICA, DESCARTÁVEL,ANATÔMICO, CONFORME NORMA ABNT C/ ABERTURA ASSÉPTICA">
                                                    LUVA CIRÚRGICA, LÁTEX NATURAL c/ 100</td>
                                                <td>10</td>                                               
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
