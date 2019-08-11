<!DOCTYPE html>
<html lang="en">

    <?php
// Configuração da página
    global $titulo;
    $titulo = "Registrar venda";
    include("../../comum/cabecalho-admin.php");
    ?>
    <style>
        .table td, .table th {
               padding: .3rem;
        }
    </style>

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
                                <div class="row">
                                    <div class="col-md-4 offset-md-4">
                                        <div class="card p-0" style="font-family: 'Courier New'; font-size:0.7em;">

                                            <div class="card-body m-0 p-0">
                                                <div class="table-responsive" style="background-color: #fff6d7;">
                                                    <table class="table table-borderless" id="dataTable" width="100%" cellspacing="0">
                                                        <thead>
                                                            <tr>
                                                                <th colspan="4" class="text-center">COMPROVANTE VENDA #123</th>                                                                                                                      
                                                            </tr>
                                                            <tr>
                                                                <th class="text-center">ITEM</th>                                                                                                                      
                                                                <th class="text-center">CODIGO</th>                                                                                                                      
                                                                <th class="text-left" colspan="2">DESCRIÇÃO</th> 
                                                            </tr>
                                                            <tr style="border-bottom: dashed 1px;">
                                                                <th class="text-center">QTDE</th>                                                                                                                      
                                                                <th class="text-center" colspan="2">UN.VL(R$)</th>                                                                                                                      
                                                                <th class="text-left">VL ITEM(R$)</th> 
                                                            </tr>
                                                        </thead>                                                   
                                                        <tbody>
                                                            <tr >
                                                                <td>001</td>
                                                                <td>12345</td>
                                                                <td class="text-left" colspan="2">LUVA CIRÚRGICA, LÁTEX NATURAL c/ 100</td>     
                                                            </tr>
                                                             <tr >
                                                                <td class="text-right">1</td>
                                                                <td colspan="2">x 10,00</td>             
                                                                <td class="text-right" colspan="2">10,00</td>
                                                            </tr>
                                                            
                                                            <tr >
                                                                <td>002</td>
                                                                <td>3241</td>
                                                                <td class="text-left" colspan="2">LUVA CIRÚRGICA, LÁTEX NATURAL c/ 40</td>     
                                                            </tr>
                                                             <tr >
                                                                <td class="text-right">1</td>
                                                                <td colspan="2">x 4,00</td>             
                                                                <td class="text-right" colspan="2">4,00</td>
                                                            </tr>
                                                            
                                                            <tr>
                                                                <td colspan="3">Total</td>
                                                                <td class="text-right"><h5>14,00</h5></td>  
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>

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
