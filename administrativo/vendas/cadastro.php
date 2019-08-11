<!DOCTYPE html>
<html lang="en">

    <?php
// Configuração da página
    global $titulo;
    $titulo = "Registrar Venda";
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
                                <form action="processa-venda.php" method="POST">

                                    <div class="form-row">

                                        <!-- Earnings (Monthly) Card Example -->
                                        <div class="col-xl-3 col-md-6 mb-4">
                                            <div class="card border-left-primary shadow h-100 py-2">
                                                <div class="card-body">
                                                    <div class="row no-gutters align-items-center">
                                                        <div class="col mr-2">
                                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total </div>
                                                            <div class="h5 mb-0 font-weight-bold text-gray-800">R$14,00</div>
                                                        </div>
                                                        <div class="col-auto">
                                                            <i class="fas fa-credit-card fa-2x text-gray-300"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Earnings (Monthly) Card Example -->
                                        <div class="col-xl-3 col-md-6 mb-4">
                                            <div class="card border-left-primary shadow h-100 py-2">
                                                <div class="card-body">
                                                    <div class="row no-gutters align-items-center">
                                                        <div class="col mr-2">
                                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Valor Pago </div>
                                                            <div class="h5 mb-0 font-weight-bold text-gray-800">R$20,00</div>
                                                        </div>
                                                        <div class="col-auto">
                                                            <i class="fas fa-credit-card fa-2x text-gray-300"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Earnings (Monthly) Card Example -->
                                        <div class="col-xl-3 col-md-6 mb-4">
                                            <div class="card border-left-success shadow h-100 py-2">
                                                <div class="card-body">
                                                    <div class="row no-gutters align-items-center">
                                                        <div class="col mr-2">
                                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Troco </div>
                                                            <div class="h5 mb-0 font-weight-bold text-gray-800">R$6,00</div>
                                                        </div>
                                                        <div class="col-auto">
                                                            <i class="fas fa-credit-card fa-2x text-gray-300"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="formControlCliente">Cliente</label>
                                            <input type="number" class="form-control" id="formControlCliente" placeholder="CPF do cliente">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="formControlDataVenda">Data</label>
                                            <input type="date" class="form-control" id="formControlDataVenda" >
                                        </div>
                                    </div>


                                    <div class="card">
                                        <div class="card-header">
                                            Itens da venda
                                        </div>
                                        <div class="card-body m-0 p-0">

                                            <div class="card">

                                                <div class="card-body">
                                                    <div class="form-row">
                                                        <div class="form-group col-md-3">
                                                            <label for="formControlProduto">Cod. Produto</label>
                                                            <input type="number" class="form-control" id="formControlProduto" placeholder="">
                                                        </div>
                                                        <div class="form-group col-md-3">
                                                            <label for="formControlCNPJ">Quantidade</label>
                                                            <input type="number" class="form-control" id="formControlCNPJ" placeholder="">
                                                        </div>
                                                        <div class="form-group col-md-3">
                                                            <label for="formControlCNPJ">Desconto - R$</label>
                                                            <input type="number" class="form-control" id="formControlCNPJ" placeholder="">
                                                        </div>
                                                        <div class="form-group col-md-3">
                                                            <label for="formControlCNPJ"> &nbsp</label>

                                                            <button type="submit" class="btn btn-success form-control">+ Item</button>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="card">


                                                <div class="card-body m-0 p-0">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                                            <thead class="thead-dark">
                                                                <tr>
                                                                    <th>#Cod.</th>
                                                                    <th>Produto</th>
                                                                    <th>Qtd</th>
                                                                    <th>Preço</th>
                                                                    <th>Ações</th>
                                                                </tr>
                                                            </thead>                                                   
                                                            <tbody>
                                                                <tr >
                                                                    <td>1</td>
                                                                    <td>LUVA CIRÚRGICA, LÁTEX NATURAL c/ 100</td>             
                                                                    <td class="text-right">2</td>     
                                                                    <td class="text-right">10,00</td> 
                                                                    <td><button type="button" class="btn btn-danger">x</button></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>2</td>
                                                                    <td>LUVA CIRÚRGICA, LÁTEX NATURAL c/ 100</td>             
                                                                    <td class="text-right">5</td>  
                                                                    <td class="text-right">4,00</td>  
                                                                    <td><button type="button" class="btn btn-danger">x</button></td>
                                                                </tr>

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                  
                                        <div class="form-row mt-3">
                                            <div class="btn-group" role="group" aria-label="Ações">
                                                <button type="submit" class="btn btn-success">Salvar</button>
                                                <button type="button" class="btn btn-danger">Cancelar</button>
                                            </div>
                            </div>
                            </form>
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