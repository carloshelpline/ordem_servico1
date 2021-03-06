<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('/'); ?>">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-balance-scale"></i>
        </div>
        <div class="sidebar-brand-text mx-1">Contabil<sup>2</sup></div>
    </a>
    
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Modulos
    </div>

    <!-- Nav Item - Pages Collapse Menu Cliente e Fornecedores-->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOs" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-shopping-cart"></i>  <!-- Icon Cadastro -->
          <span>Vendas</span>
        </a>
        <div id="collapseOs" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Escolha uma opção:</h6>
            <a title="Gerenciar ordem de serviços"class="collapse-item" href="<?php echo base_url('os');  ?>"><i class="fas fa-shopping-basket text-gray-900"></i>&nbsp;&nbsp;Ordem serviços</a>
          </div>
        </div>
    </li>
    
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-database"></i>  <!-- Icon Cadastro -->
          <span>Cadastros</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Escolha uma opção:</h6>
            <a title="Gerenciar clientes"class="collapse-item" href="<?php echo base_url('clientes');  ?>"><i class="fas fa-user-tie text-gray-900"></i>&nbsp;&nbsp;Clientes</a>
            <a title="Gerenciar fornecedores" class="collapse-item" href="<?php echo base_url('fornecedores'); ?>"><i class="fas fa-user-tag text-gray-900"></i>&nbsp;Fornecedores</a>
            <a title="Gerenciar vendedores" class="collapse-item" href="<?php echo base_url('vendedores'); ?>"><i class="fas fa-user-secret text-gray-900"></i>&nbsp;Vendedores</a>
            <a title="Gerenciar serviços" class="collapse-item" href="<?php echo base_url('servicos'); ?>"><i class="fas fa-laptop-house text-gray-900"></i>&nbsp;Serviços</a>            
          </div>
        </div>
    </li>
    
    


    <!-- Nav Item - Pages Collapse Menu Cliente e Fornecedores-->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTres" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-box-open"></i>  <!-- Icon Estoque -->
          <span>Estoque</span>
        </a>
        <div id="collapseTres" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar"> <!-- id="collapseTres" muda a cada nav-item -->
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Escolha uma opção:</h6>
            <a title="Gerenciar marcas" class="collapse-item" href="<?php echo base_url('marcas'); ?>"><i class="fas fa-cubes text-gray-900"></i>&nbsp;Marcas</a>                        
            <a title="Gerenciar produtos" class="collapse-item" href="<?php echo base_url('produtos'); ?>"><i class="fab fa-product-hunt text-gray-900"></i>&nbsp;Produtos</a>                                                
            <a title="Gerenciar categorias" class="collapse-item" href="<?php echo base_url('categorias'); ?>"><i class="fas fa-tools text-gray-900"></i>&nbsp;Categorias</a>                                    
          </div>
        </div>
    </li>    
    
        <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseQuatro" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-wallet"></i>  <!-- Icon Financeiro -->
          <span>Financeiro</span>
        </a>
        <div id="collapseQuatro" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar"> <!-- id="collapseTres" muda a cada nav-item -->
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Escolha uma opção:</h6>
            <a title="Gerenciar contas a pagar" class="collapse-item" href="<?php echo base_url('pagar'); ?>"><i class="fas fa-money-bill-alt"></i>&nbsp;Contas a pagar</a>             
            <a title="Gerenciar contas a receber" class="collapse-item" href="<?php echo base_url('receber'); ?>"><i class="fas fa-hand-holding-usd"></i>&nbsp;Contas a receber</a>
            <a title="Gerenciar formas de pagamentos" class="collapse-item" href="<?php echo base_url('modulo'); ?>"><i class="fas fa-money-check-alt"></i>&nbsp;Formas pagamentos</a>
          </div>
        </div>
    </li>    
    
    
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading Separador-->
    <div class="sidebar-heading">
        Configurações
    </div>

    <!-- Nav Item - Usuarios -->
    <li class="nav-item">
        <a title="Gerenciar usuários"class="nav-link" href="<?php echo base_url('usuarios'); ?>">
            <i class="fas fa-users"></i>  <!-- Icon usuarios -->
            <span>Usuários</span></a>
    </li>

    <!-- Nav Item - Sistema -->
    <li class="nav-item">
        <a title="Gerenciar dados do sistema"class="nav-link" href="<?php echo base_url('sistema'); ?>">
            <i class="fas fa-cogs"></i>  <!-- Icon Sistema -->
            <span>Sistema</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">