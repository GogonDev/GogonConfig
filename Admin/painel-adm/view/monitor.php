<?php 
$pag = "monitor";
require_once("../conexao.php"); 

//verificar se o usuário está autenticado
if(@$_SESSION['id_usuario'] == null || @$_SESSION['nivel_usuario'] != 'Admin'){
    echo "<script language='javascript'> window.location='../index.php' </script>";

}


?>

<div class="row mt-4 mb-4">
    <a type="button" class="btn-info btn-sm ml-3 d-none d-md-block" href="index.php?pag=<?php echo $pag ?>&funcao=novo">Novo Monitor</a>
    <a type="button" class="btn-info btn-sm ml-3 d-block d-sm-none" href="index.php?pag=<?php echo $pag ?>&funcao=novo">+</a>
    
</div>



<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Modelo</th>
                        <th>Marca</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                   <?php 
                   $query = $pdo->query("SELECT * FROM produtos WHERE categoria = 'monitor' order by id desc ");
                   $res = $query->fetchAll(PDO::FETCH_ASSOC);

                   for ($i=0; $i < count($res); $i++) { 
                      foreach ($res[$i] as $key => $value) {
                      }
                      
                      $id = $res[$i]['id'];
                      $nome = $res[$i]['nome'];
                      $modelo = $res[$i]['modelo'];
                      $id_marca = $res[$i]['marca'];
                      $query_marca = $pdo->query("SELECT * FROM marcas where id = $id_marca");
                      $res_marca = $query_marca->fetchAll(PDO::FETCH_ASSOC);
                      $marca = $res_marca[0]['Nome'];
                      ?>
                      <tr>
                        <td><?php echo $id ?></td>
                        <td><?php echo $nome ?></td>
                        <td><?php echo $modelo ?></td>
                        <td><?php echo $marca ?></td>
                        <td>
                         <a href="index.php?pag=<?php echo $pag ?>&funcao=editar&id=<?php echo $id ?>" class='text-primary mr-1' title='Editar Dados'><i class='far fa-edit'></i></a>
                         <a href="index.php?pag=<?php echo $pag ?>&funcao=excluir&id=<?php echo $id ?>" class='text-danger mr-1' title='Excluir Registro'><i class='far fa-trash-alt'></i></a>
                     </td>
                 </tr>
             <?php } ?>
         </tbody>
     </table>
 </div>
</div>
</div>





<!-- Modal -->
<div class="modal fade" id="modalDados" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <?php 
                if (@$_GET['funcao'] == 'editar') {
                    $titulo = "Editar Registro";
                    $id2 = $_GET['id'];

                    $query = $pdo->query("SELECT * FROM produtos where categoria = 'monitor' AND id = '" . $id2 . "' ");
                    $res = $query->fetchAll(PDO::FETCH_ASSOC);

                    $id2 = $res[0]['id'];
                    $nome2 = $res[0]['nome'];
                    $modelo2 = $res[0]['modelo'];
                    $id_marca2 = $res[0]['marca'];
                    $query_marca2 = $pdo->query("SELECT * FROM marcas where id = $id_marca2");
                    $res_marca2 = $query_marca2->fetchAll(PDO::FETCH_ASSOC);
                    $descricao2 = $res[0]['descri'];
                    $foto2 = $res[0]['img'];

                } else {
                    $titulo = "Inserir Registro";

                }
                ?>
                <h5 class="modal-title" id="exampleModalLabel"><?php echo $titulo ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="form" method="POST">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-8">

                           <div class="row">
                            <div class="col-md-6">

                                <div class="form-group">
                                    <label >Nome</label>
                                    <input value="<?php echo @$nome2 ?>" type="text" class="form-control" id="nome" name="nome" placeholder="Entre com o Nome" required>
                                </div>

                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label >Modelo</label>
                                    <input value="<?php echo @$modelo2 ?>" type="text" class="form-control" id="modelo" name="modelo" placeholder="Entre com o Modelo" required>
                                </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                               <div class="form-group">
                                <label >Marca</label>
                                <select name="marca" class="form-control" id="marcas" required>
                                <?php
                                    $query_select = $pdo->query("SELECT * FROM marcas");
                                    $res_select = $query_select->fetchAll(PDO::FETCH_ASSOC);
                                    for ($i=0; $i < count($res_select); $i++) { 
                                         foreach ($res_select[$i] as $key => $value) {
                                         }
                                         $marca_select = $res_select[$i]['Nome'];
                                         $id_marca = $res_select[$i]['id'];
                                        echo "<option";
                                        if(@$marca_select == @$marca2){
                                            echo ' selected value="'.$id_marca.'">';
                                            echo $marca_select;
                                        }
                                        else{
                                            echo ' value="'.$id_marca.'">';
                                            echo $marca_select;
                                        }
                                        echo"</option>";  
                                    }?>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                           <!-- <div class="form-group">
                            <label >Tipo de sata</label>
                            <input value="<?php echo @$sata2 ?>" type="text" class="form-control" id="tipo" name="sata" placeholder="Entre com o tipo de sata">
                        </div> -->
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-9">

                        <!-- <div class="form-group">
                            <label>Cache</label>
                            <input value="</?php echo @$cache2 ?>" type="text" class="form-control" id="capacidade" name="cache" placeholder="Entre com o Cache">
                        </div> -->  
                    </div>

                    <div class="col-md-3">
                      <!-- <div class="form-group">
                        <label >RPM</label>
                        <input value="</?php echo @$rpm2?>" type="text" class="form-control" id="clock" name="rpm" placeholder="Entre com o RPM">
                    </div> -->
                </div>
            </div>


            <div class="row">
                <div class="col-md-12">
                 <div class="form-group">
                 <label for="exampleFormControlTextarea1" class="form-label">Descrição</label>
                 <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" value="<?php echo @$descricao2?>" placeholder="Entre com a descriçao" name="descricao"><?php echo @$descricao2?></textarea>
                </div>
            </div>
    </div>

</div>

<div class="col-md-4">
    <div class="form-group">
        <label >Imagem</label>
        <input type="file" value="<?php echo @$foto2 ?>"class="form-control-file" id="imagem" name="imagem" onChange="carregarImg();">
    </div>

    <div id="divImgConta">
        <?php if(@$foto2 != ""){ ?>
            <img src="../../img/Peças/monitor/<?php echo $foto2 ?>" width="100%" id="target">
        <?php  }else{ ?>
            <img src="../img/sem-foto.jpg" width="100%" id="target">
        <?php } ?>
    </div>
</div>
</div>






<small>
    <div id="mensagem">

    </div>
</small> 

</div>



<div class="modal-footer">



    <input value="<?php echo @$_GET['id'] ?>" type="hidden" name="txtid2" id="txtid2">
    <input value="<?php echo @$modelo2 ?>" type="hidden" name="antigo" id="antigo">

    <button type="button" id="btn-fechar" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
    <button type="submit" name="btn-salvar" id="btn-salvar" class="btn btn-info">Salvar</button>
</div>
</form>
</div>
</div>
</div>
<div class="modal" id="modal-deletar" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Excluir Registro</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <p>Deseja realmente Excluir este Registro?</p>

                <div align="center" id="mensagem_excluir" class="">

                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" id="btn-cancelar-excluir">Cancelar</button>
                <form method="post">

                    <input type="hidden" id="id"  name="id" value="<?php echo @$_GET['id'] ?>" required>

                    <button type="button" id="btn-deletar" name="btn-deletar" class="btn btn-danger">Excluir</button>
                </form>
            </div>
        </div>
    </div>
</div>
                <?php 

                if (@$_GET["funcao"] != null && @$_GET["funcao"] == "novo") {
                    echo "<script>$('#modalDados').modal('show');</script>";
                }

                if (@$_GET["funcao"] != null && @$_GET["funcao"] == "editar") {
                    echo "<script>$('#modalDados').modal('show');</script>";
                }

                if (@$_GET["funcao"] != null && @$_GET["funcao"] == "excluir") {
                    echo "<script>$('#modal-deletar').modal('show');</script>";
                }

             

                ?>




                <!--AJAX PARA INSERÇÃO E EDIÇÃO DOS DADOS COM IMAGEM -->
                <script type="text/javascript">
                    $("#form").submit(function () {
                        var pag = "<?=$pag?>";
                        event.preventDefault();
                        var formData = new FormData(this);

                        $.ajax({
                            url: pag+"/inserir.php",
                            type: 'POST',
                            data: formData,

                            success: function (mensagem) {

                                $('#mensagem').removeClass()

                                if (mensagem.trim() == "Salvo com Sucesso!") {

                    //$('#nome').val('');
                    //$('#cpf').val('');
                    $('#btn-fechar').click();
                    window.location = "index.php?pag="+pag;

                } else {

                    $('#mensagem').addClass('text-danger')
                }

                $('#mensagem').text(mensagem)

            },

            cache: false,
            contentType: false,
            processData: false,
            xhr: function () {  // Custom XMLHttpRequest
                var myXhr = $.ajaxSettings.xhr();
                if (myXhr.upload) { // Avalia se tem suporte a propriedade upload
                    myXhr.upload.addEventListener('progress', function () {
                        /* faz alguma coisa durante o progresso do upload */
                    }, false);
                }
                return myXhr;
            }
        });
                    });
                </script>





                <!--AJAX PARA EXCLUSÃO DOS DADOS -->
                <script type="text/javascript">
                    $(document).ready(function () {
                        var pag = "<?=$pag?>";
                        $('#btn-deletar').click(function (event) {
                            event.preventDefault();

                            $.ajax({
                                url: pag + "/excluir.php",
                                method: "post",
                                data: $('form').serialize(),
                                dataType: "text",
                                success: function (mensagem) {

                                    if (mensagem.trim() === 'Excluído com Sucesso!') {


                                        $('#btn-cancelar-excluir').click();
                                        window.location = "index.php?pag=" + pag;
                                    }

                                    $('#mensagem_excluir').text(mensagem)



                                },

                            })
                        })
                    })
                </script>



                <!--SCRIPT PARA CARREGAR IMAGEM -->
                <script type="text/javascript">

                    function carregarImg() {

                        var target = document.getElementById('target');
                        var file = document.querySelector("input[type=file]").files[0];
                        var reader = new FileReader();

                        reader.onloadend = function () {
                            target.src = reader.result;
                        };

                        if (file) {
                            reader.readAsDataURL(file);


                        } else {
                            target.src = "";
                        }
                    }

                </script>





                <script type="text/javascript">
                    $(document).ready(function () {
                        $('#dataTable').dataTable({
                            "ordering": false
                        })

                    });
                </script>



