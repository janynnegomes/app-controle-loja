<!DOCTYPE html>
<html lang="en">

    <?php
// Configuração da página
    global $titulo;
    $titulo = "Cadastro de Produtos";
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

                                    <div class="form-group">
                                        <label for="formControlNome">Nome</label>
                                        <input type="text" class="form-control" id="formControlNome" placeholder="">
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="formControlCategoria">Categoria</label>
                                            <select id="formControlCategoria" class="form-control">
                                                <option selected>Escolher...</option>
                                                <option>Categoria 1</option>
                                                <option>Categoria 2</option>
                                                <option>Categoria 3</option>
                                                <option>Categoria 4</option>
                                                <option>Categoria 5</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="formControlFornecedor">Fornecedor</label>                                            
                                            <select id="formControlFornecedor" class="form-control">
                                                <option selected>Escolher...</option>
                                                <option>Fornecedor 1</option>
                                                <option>Fornecedor 2</option>
                                                <option>Fornecedor 3</option>
                                                <option>Fornecedor 4</option>
                                                <option>Fornecedor 5</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6"> 
                                            <label for="formControlPreco">Preço</label>
                                            <div class="input-group mb-2">
                                              
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">R$</div>
                                                </div>
                                                <input type="number" class="form-control" id="formControlPreco" placeholder="Somente números">
                                            </div>                                            
                                         
                                        </div>
                                        <div class="form-group col-md-6">
                                             <label for="formControlPrecoDesconto">Preço c/ desconto</label>
                                            <div class="input-group mb-2">
                                              
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">R$</div>
                                                </div>
                                                <input type="number" class="form-control" id="formControlPrecoDesconto" placeholder="Somente números">
                                            </div> 
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