
<?php $this->load->view('layout/sidebar'); ?>


<!-- Main Content -->
<div id="content">

    <?php $this->load->view('layout/navbar'); ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('vendedores'); ?>">Vendedores</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $titulo; ?></li>
            </ol>
        </nav>

        <!-- DataTales Example -->
        <div class="card shadow mb-3">
            
            <form class="user" method="POST" name="form_sdd">
                                            
                <fieldset class="mt-4 border p-2"> 
                
                <legend class="font-small"><i class="fas fa-user-secret"></i>&nbsp;Dados pessoais</legend>
                
                <div class="form-group row mb-3">
                        
                    <div class="col-md-6 mb-3">
                        <label>Nome completo</label>
                        <input type="text" class="form-control form-control-user" name="vendedor_nome_completo" placeholder="Nome completo" value="<?php echo set_value('vendedor_nome_completo'); ?>">
                        <?php echo form_error('vendedor_nome_completo', '<small class="form-text text-danger">','</small>') ?> <!-- Valida o campo first_name -->

                    </div>

                    <div class="col-md-3 mb-3">
                        <label>CPF vendedor</label>
                        <input type="text" class="form-control form-control-user cpf" name="vendedor_cpf" placeholder="CPF vendedor" value="<?php echo set_value('vendedor_cpf'); ?>">
                        <?php echo form_error('vendedor_cpf', '<small class="form-text text-danger">','</small>') ?> 
                    </div>
                    
                    <div class="col-md-3 mb-3">
                        <label>RG</label>
                        <input type="text" class="form-control form-control-user rg" name="vendedor_rg" placeholder="RG do vendedor" value="<?php echo set_value('vendedor_rg'); ?>">
                        <?php echo form_error('vendedor_rg', '<small class="form-text text-danger">','</small>') ?> 
                    </div>

                    <div class="col-md-4 mb-3">
                        <label>E-mail</label>
                        <input type="email" class="form-control form-control-user" name="vendedor_email" placeholder="Digite e-mail" value="<?php echo set_value('vendedor_email'); ?>">
                        <?php echo form_error('vendedor_email', '<small class="form-text text-danger">','</small>') ?>   
                    </div>
                    
                    <div class="col-md-4 mb-3">
                        <label>Telefone fixo</label>
                        <input type="text" class="form-control form-control-user sp_celphones" name="vendedor_telefone" placeholder="Telefone fixo" value="<?php echo set_value('vendedor_telefone'); ?>">
                        <?php echo form_error('vendedor_telefone', '<small class="form-text text-danger">','</small>') ?>   
                    </div>

                    <div class="col-md-4 mb-3">
                        <label>Celular</label>
                        <input type="text" class="form-control form-control-user sp_celphones" name="vendedor_celular" placeholder="Digite Celular" value="<?php echo set_value('vendedor_celular'); ?>">
                        <?php echo form_error('vendedor_celular', '<small class="form-text text-danger">','</small>') ?>  
                    </div>
                    
                </div>                
                               
                
                </fieldset>   
            
                <fieldset class="mt-4 border p-2">
                
                <legend class="font-small"><i class="fas fa-map-marker-alt"></i>&nbsp;Dados de Endere??o</legend>

                <div class="form-group row mb-3">

                        <div class="col-md-2 mb-3">
                            <label>CEP</label>
                            <input type="text" class="form-control form-control-user cep" name="vendedor_cep" placeholder="CEP" value="<?php echo set_value('vendedor_cep'); ?>">
                            <?php echo form_error('vendedor_cep', '<small class="form-text text-danger">','</small>') ?>  
                        </div>

                        <div class="col-md-5 mb-3">
                            <label>Endere??o</label>
                            <input type="text" class="form-control form-control-user" name="vendedor_endereco" placeholder="Endere??o" value="<?php echo set_value('vendedor_endereco'); ?>">
                            <?php echo form_error('vendedor_endereco', '<small class="form-text text-danger">','</small>') ?>  
                        </div>

                        <div class="col-md-1 mb-3">
                            <label>N??mero</label>
                            <input type="text" class="form-control form-control-user" name="vendedor_numero_endereco" placeholder="N??mero" value="<?php echo set_value('vendedor_numero_endereco'); ?>">
                            <?php echo form_error('vendedor_numero_endereco', '<small class="form-text text-danger">','</small>') ?> 
                        </div>

                        <div class="col-md-4 mb-3">
                            <label>Complemento</label>
                            <input type="text" class="form-control form-control-user" name="vendedor_complemento" placeholder="Complemento" value="<?php echo set_value('vendedor_complemento'); ?>">
                            <?php echo form_error('vendedor_complemento', '<small class="form-text text-danger">','</small>') ?>  
                        </div>

                        <div class="col-md-5 mb-3">
                            <label>Bairro</label>
                            <input type="text" class="form-control form-control-user" name="vendedor_bairro" placeholder="Bairro" value="<?php echo set_value('vendedor_bairro'); ?>">
                            <?php echo form_error('vendedor_bairro', '<small class="form-text text-danger">','</small>') ?>  
                        </div>

                        

                        <div class="col-md-5 mb-3">
                            <label>Cidade</label>
                            <input type="text" class="form-control form-control-user " name="vendedor_cidade" placeholder="Cidade" value="<?php echo set_value('vendedor_cidade'); ?>">
                            <?php echo form_error('vendedor_cidade', '<small class="form-text text-danger">','</small>') ?>  
                        </div>

                        <div class="col-md-2 mb-3">
                            <label>UF</label>
                            <input type="text" class="form-control form-control-user" name="vendedor_estado" placeholder="UF" value="<?php echo set_value('vendedor_estado'); ?>">
                            <?php echo form_error('vendedor_estado', '<small class="form-text text-danger">','</small>') ?>  
                        </div>

                </div>


                </fieldset>

                <fieldset class="mt-4 border p-2">

                    <legend class="font-small"><i class="fas fa-tools"></i>&nbsp;Configura????es</legend>

                    <div class="form-group row mb-3">

                        <div class="col-md-2">
                            <label>Vendedor ativo</label>
                            <select class="custom-select" name="vendedor_ativo">
                                <option value="0">N??o</option>
                                <option value="1">Sim</option>
                            </select>
                        </div>
                        
                        <div class="col-md-2 mb-2">
                            <label>Matricula</label>
                            <input type="text" class="form-control form-control-user" name="vendedor_codigo" value="<?php echo $vendedor_codigo ?>" readonly=""> <!-- readonly qndo eu gero um codigo e nao quero que o usuario edit -->
                        </div>
                        

                        <div class="col-md-8">
                            <label>Observa????es</label>
                            <textarea class="form-control form-control-user" name="vendedor_obs"><?php echo set_value('vendedor_obs'); ?></textarea>
                            <?php echo form_error('vendedor_obs', '<small class="form-text text-danger">','</small>') ?>  
                        </div>

                    </div>

                </fieldset>
                                        
                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                <a title="Voltar" href="<?php echo base_url($this->router->fetch_class()); ?>" class="btn btn-success btn-sm ml-2">Voltar</a> <!-- O metodo (fetch_class) retorna a classe que esta sendo usada Botao Voltar -->
            </form>

            
        </div>
   
</div>
<!-- /.container-fluid -->
                            <!--
                            [vendedor_tipo] => 2
                            [vendedor_nome] => Lucio
                            [vendedor_sobrenome] => Souza
                            [vendedor_data_nascimento] => 2021-05-31
                            [vendedor_cpf_cnpj] => 37.235.652/0001-15
                            [vendedor_rg_ie] =>
                            [vendedor_email] =>
                            [vendedor_telefone] =>
                            [vendedor_celular] =>
                            [vendedor_cep] =>
                            [vendedor_endereco] =>
                            [vendedor_numero_endereco] =>
                            [vendedor_bairro] =>
                            [vendedor_complemento] =>
                            [vendedor_cidade] =>
                            [vendedor_estado] =>
                            [vendedor_ativo] => 0
                            [vendedor_obs] =>
                           -->

</div>
<!-- End of Main Content -->
</html>