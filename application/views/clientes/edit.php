
<?php $this->load->view('layout/sidebar'); ?>


<!-- Main Content -->
<div id="content">

    <?php $this->load->view('layout/navbar'); ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('clientes'); ?>">Clientes</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $titulo; ?></li>
            </ol>
        </nav>

        <!-- DataTales Example -->
        <div class="card shadow mb-3">
            
            <form class="user" method="POST" name="form_edit">
                
                <p><strong><i class="fas fa-clock"></i>&nbsp;&nbsp;Última alteração:</strong>&nbsp;<?php echo formata_data_banco_com_hora($cliente->cliente_data_alteracao); ?></p>
            
                <fieldset class="mt-4 border p-2">
                
                <legend class="font-small"><i class="fas fa-user-tie"></i>&nbsp;Dados Pessoais</legend>
                
                <div class="form-group row mb-3">
                        
                    <div class="col-md-5">
                        <label>Nome</label>
                        <input type="text" class="form-control form-control-user" name="cliente_nome" placeholder="Nome do cliente" value="<?php echo $cliente->cliente_nome; ?>">
                        <?php echo form_error('cliente_nome', '<small class="form-text text-danger">','</small>') ?> <!-- Valida o campo first_name -->

                    </div>

                    <div class="col-md-5">
                        <label>Sobrenome</label>
                        <input type="text" class="form-control form-control-user" name="cliente_sobrenome" placeholder="Sobrenome do cliente" value="<?php echo $cliente->cliente_sobrenome; ?>">
                        <?php echo form_error('cliente_sobrenome', '<small class="form-text text-danger">','</small>') ?> <!-- Valida o campo first_name -->
                    </div>

                    <div class="col-md-2">
                        <label>Data Nascimento</label>
                        <input type="date" class="form-control form-control-user-date" name="cliente_data_nascimento" value="<?php echo $cliente->cliente_data_nascimento; ?>">
                        <?php echo form_error('cliente_data_nascimento', '<small class="form-text text-danger">','</small>') ?> <!-- Valida o campo first_name -->
                    </div>

                        
                                 
                </div>
                
                <div class="form-group row mb-3"> <!-- Esta div cria um grupo de formulario separado -->
                    
                    <div class="col-md-3">
                        <?php if($cliente->cliente_tipo == 1): ?>
                            <label>CPF</label>
                            <input type="text" class="form-control form-control-user cpf" name="cliente_cpf" placeholder="<?php echo ($cliente->cliente_tipo == 1 ? 'CPF do cliente': 'CNPJ do cliente') ?>" value="<?php echo $cliente->cliente_cpf_cnpj; ?>">
                        <?php echo form_error('cliente_cpf', '<small class="form-text text-danger">','</small>') ?> <!-- Valida o campo first_name -->
                        <?php else: ?>
                            <label>CNPJ</label>
                            <input type="text" class="form-control form-control-user cnpj" name="cliente_cnpj" placeholder="<?php echo ($cliente->cliente_tipo == 1 ? 'CPF do cliente': 'CNPJ do cliente') ?>" value="<?php echo $cliente->cliente_cpf_cnpj; ?>">
                        <?php echo form_error('cliente_cnpj', '<small class="form-text text-danger">','</small>') ?> <!-- Valida o campo first_name -->
                        <?php endif; ?>

                    </div>

                    <div class="col-md-3">
                        <?php if($cliente->cliente_tipo == 1): ?>
                            <label>RG</label>
                        <?php else: ?>
                            <label>Inscrição estadual</label>
                        <?php endif; ?>
                        
                        <input type="text" class="form-control form-control-user" name="cliente_rg_ie" placeholder="<?php echo ($cliente->cliente_tipo == 1 ? 'RG do cliente': 'I.E do cliente') ?>" value="<?php echo $cliente->cliente_rg_ie; ?>">
                        <?php echo form_error('cliente_rg_ie', '<small class="form-text text-danger">','</small>') ?> <!-- Valida o campo first_name -->
                    </div>

                    <div class="col-md-6">
                        <label>E-mail</label>
                        <input type="email" class="form-control form-control-user" name="cliente_email" placeholder="E-mail do cliente" value="<?php echo $cliente->cliente_email; ?>">
                        <?php echo form_error('cliente_email', '<small class="form-text text-danger">','</small>') ?> <!-- Valida o campo first_name -->
                    </div>
                    
                </div>
                
                <div class="form-group row mb-3">
                    
                    <div class="col-md-6">
                        <label>Telefone fixo</label>
                        <input type="text" class="form-control form-control-user sp_celphones" name="cliente_telefone" placeholder="Telefone fixo" value="<?php echo $cliente->cliente_telefone; ?>">
                        <?php echo form_error('cliente_telefone', '<small class="form-text text-danger">','</small>') ?> <!-- Valida o campo first_name -->
                    </div>

                    <div class="col-md-6">
                        <label>Celular</label>
                        <input type="text" class="form-control form-control-user sp_celphones" name="cliente_celular" placeholder="Telefone celular" value="<?php echo $cliente->cliente_celular; ?>">
                        <?php echo form_error('cliente_celular', '<small class="form-text text-danger">','</small>') ?> <!-- Valida o campo first_name -->
                    </div>
                    
                </div>
                
                </fieldset>    
            
                <fieldset class="mt-4 border p-2">
                
                <legend class="font-small"><i class="fas fa-map-marker-alt"></i>&nbsp;Dados de Endereço</legend>
                
                <div class="form-group row mb-3">
                    
                    <div class="col-md-6">
                        <label>Endereço</label>
                        <input type="text" class="form-control form-control-user" name="cliente_endereco" placeholder="Endereço" value="<?php echo $cliente->cliente_endereco; ?>">
                        <?php echo form_error('cliente_endereco', '<small class="form-text text-danger">','</small>') ?> <!-- Valida o campo first_name -->
                    </div>
                    
                    <div class="col-md-2">
                        <label>Número</label>
                        <input type="text" class="form-control form-control-user" name="cliente_numero_endereco" placeholder="Número" value="<?php echo $cliente->cliente_numero_endereco; ?>">
                        <?php echo form_error('cliente_numero_endereco', '<small class="form-text text-danger">','</small>') ?> <!-- Valida o campo first_name -->
                    </div>
                    
                    <div class="col-md-4">
                        <label>Complemento</label>
                        <input type="text" class="form-control form-control-user" name="cliente_complemento" placeholder="Complemento" value="<?php echo $cliente->cliente_complemento; ?>">
                        <?php echo form_error('cliente_complemento', '<small class="form-text text-danger">','</small>') ?> <!-- Valida o campo first_name -->
                    </div>
                    
                </div>
                
                <div class="form-group row mb-3">
                    
                    <div class="col-md-4">
                        <label>Bairro</label>
                        <input type="text" class="form-control form-control-user" name="cliente_bairro" placeholder="Bairro" value="<?php echo $cliente->cliente_bairro; ?>">
                        <?php echo form_error('cliente_bairro', '<small class="form-text text-danger">','</small>') ?> <!-- Valida o campo first_name -->
                    </div>
                    
                    <div class="col-md-2">
                        <label>CEP</label>
                        <input type="text" class="form-control form-control-user cep" name="cliente_cep" placeholder="CEP" value="<?php echo $cliente->cliente_cep; ?>">
                        <?php echo form_error('cliente_cep', '<small class="form-text text-danger">','</small>') ?> <!-- Valida o campo first_name -->
                    </div>
                    
                    <div class="col-md-5">
                        <label>Cidade</label>
                        <input type="text" class="form-control form-control-user " name="cliente_cidade" placeholder="Cidade" value="<?php echo $cliente->cliente_cidade; ?>">
                        <?php echo form_error('cliente_cidade', '<small class="form-text text-danger">','</small>') ?> <!-- Valida o campo first_name -->
                    </div>

                    <div class="col-md-1">
                        <label>UF</label>
                        <input type="text" class="form-control form-control-user" name="cliente_estado" placeholder="UF" value="<?php echo $cliente->cliente_estado; ?>">
                        <?php echo form_error('cliente_estado', '<small class="form-text text-danger">','</small>') ?> <!-- Valida o campo first_name -->
                    </div>
                    
                </div>
                
                
                </fieldset>
            
                <fieldset class="mt-4 border p-2">
                
                <legend class="font-small"><i class="fas fa-tools"></i>&nbsp;Configurações</legend>
                
                <div class="form-group row">
                    
                    <div class="col-md-4">
                        <label>Cliente ativo</label>
                        <select class="custom-select" name="cliente_ativo">
                            <option value="0" <?php echo ($cliente->cliente_ativo == 0 ? 'selected' : '');  ?>>Não</option>
                            <option value="1" <?php echo ($cliente->cliente_ativo == 1 ? 'selected' : '');  ?>>Sim</option>
                        </select>
                    </div>
                    
                    <div class="col-md-8">
                        <label>Observações</label>
                        <textarea class="form-control form-control-user" name="cliente_obs"><?php echo $cliente->cliente_obs; ?></textarea>
                        <?php echo form_error('cliente_obs', '<small class="form-text text-danger">','</small>') ?> <!-- Valida o campo first_name -->
                    </div>
                    
                </div>
                
                </fieldset>
            
                    
                <div class="form-group row">

                    <input type="hidden" name="cliente_tipo" value="<?php echo $cliente->cliente_tipo; ?>"/>
                    <input type="hidden" name="cliente_id" value="<?php echo $cliente->cliente_id; ?>"/>

                </div>
                                        
                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                <a title="Voltar" href="<?php echo base_url('clientes'); ?>" class="btn btn-success btn-sm ml-2">Voltar</a> <!-- Coloca icone/Botao Voltar -->
            </form>

            
        </div>
   
</div>
<!-- /.container-fluid -->
                            <!--
                            [cliente_tipo] => 2
                            [cliente_nome] => Lucio
                            [cliente_sobrenome] => Souza
                            [cliente_data_nascimento] => 2021-05-31
                            [cliente_cpf_cnpj] => 37.235.652/0001-15
                            [cliente_rg_ie] =>
                            [cliente_email] =>
                            [cliente_telefone] =>
                            [cliente_celular] =>
                            [cliente_cep] =>
                            [cliente_endereco] =>
                            [cliente_numero_endereco] =>
                            [cliente_bairro] =>
                            [cliente_complemento] =>
                            [cliente_cidade] =>
                            [cliente_estado] =>
                            [cliente_ativo] => 0
                            [cliente_obs] =>
                           -->

</div>
<!-- End of Main Content -->
</html>