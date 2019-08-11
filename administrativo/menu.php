
<?php  
 //var_dump($_SERVER);
    $admin_path = 'http://'.$_SERVER['HTTP_HOST'].'/loja/administrativo/'; 
     ?>
<!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon ">
          <i class="fas fa-store-alt"></i>
        </div>
        <div class="sidebar-brand-text mx-3">App Loja</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo $admin_path;?>index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Painel</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Cadastros
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseClientes" aria-expanded="true" aria-controls="collapseClientes">
          <i class="fas fa-user fa-cog"></i>
          <span>Clientes</span>
        </a>
        <div id="collapseClientes" class="collapse" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Controle de clientes</h6>
            <a class="collapse-item" href="<?php echo $admin_path;?>clientes/cadastro.php">Cadastrar</a>
            <a class="collapse-item" href="<?php echo $admin_path;?>clientes/lista.php">Ver todos</a>
          </div>
        </div>
      </li>
      
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFornecedores" aria-expanded="true" aria-controls="collapseFornecedores">
          <i class="fas fa-user-tie fa-cog"></i>
          <span>Fornecedores</span>
        </a>
        <div id="collapseFornecedores" class="collapse"  data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Controle de fornecedores</h6>
            <a class="collapse-item" href="<?php echo $admin_path;?>fornecedores/cadastro.php">Cadastrar</a>
            <a class="collapse-item" href="<?php echo $admin_path;?>fornecedores/lista.php">Ver todos</a>
          </div>
        </div>
      </li>
      
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProdutos" aria-expanded="true" aria-controls="collapseProdutos">
          <i class="fas fa-shopping-basket  fa-cog"></i>
          <span>Produtos</span>
        </a>
        <div id="collapseProdutos" class="collapse"  data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Controle de produtos/</h6>
            <a class="collapse-item" href="<?php echo $admin_path;?>produtos/cadastro.php">Cadastrar</a>
            <a class="collapse-item" href="<?php echo $admin_path;?>produtos/lista.php">Ver todos</a>
          </div>
        </div>
      </li>

       <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Controles
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseEstoque" aria-expanded="true" aria-controls="collapseEstoque">
          <i class="fas fa-user fa-cog"></i>
          <span>Estoque</span>
        </a>
        <div id="collapseEstoque" class="collapse" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Controle de estoque</h6>
            <a class="collapse-item" href="<?php echo $admin_path;?>estoque/entrada.php">Entrada de produto</a>
            <a class="collapse-item" href="<?php echo $admin_path;?>estoque/lista.php">Ver estoque</a>
          </div>
        </div>
      </li>
       <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseVenda" aria-expanded="true" aria-controls="collapseVenda">
          <i class="fas fa-user fa-cog"></i>
          <span>Vendas</span>
        </a>
        <div id="collapseVenda" class="collapse" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Controle de vendas</h6>
            <a class="collapse-item" href="<?php echo $admin_path;?>vendas/cadastro.php">Nova venda</a>
            <a class="collapse-item" href="<?php echo $admin_path;?>vendas/lista.php">Ver todas</a>
          </div>
        </div>
      </li>
     
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->