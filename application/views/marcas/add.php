
<?php $this->load->view('layout/sidebar'); ?>


<!-- Main Content -->
<div id="content">

    <?php $this->load->view('layout/navbar'); ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('marcas'); ?>">Marcas</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $titulo; ?></li>
            </ol>
        </nav>

        <div class="card-body">
            
            <form class="user" method="POST" name="form_add">
           
                <fieldset class="mt-4 border p-2"> 
                
                <legend class="font-small"><i class="fas fa-laptop-house"></i>&nbsp;Dados do marca</legend>
                
                    <div class="form-group row mb-3">

                        <div class="col-md-6 mb-3">
                            <label>Nome da marca</label>
                            <input type="text" class="form-control form-control-user" name="marca_nome" placeholder="Nome da marca" value="<?php echo set_value('marca_nome'); ?>">
                            <?php echo form_error('marca_nome', '<small class="form-text text-danger">','</small>') ?> <!-- Valida o campo first_name -->
                        </div>


                        <div class="col-md-3">
                            <label>Marca ativa</label>
                            <select class="custom-select" name="marca_ativa">
                                <option value="0">Não</option>
                                <option value="1">Sim</option>
                            </select>
                        </div>

                    </div>                

               
                </fieldset>
                                       
                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                <a title="Voltar" href="<?php echo base_url($this->router->fetch_class()); ?>" class="btn btn-success btn-sm ml-2">Voltar</a> <!-- O metodo (fetch_class) retorna a classe que esta sendo usada Botao Voltar -->
            </form>

            
        </div>
   
</div>

</div>
<!-- End of Main Content -->
</html>