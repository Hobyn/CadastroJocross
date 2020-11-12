<?php
   session_start();
   
   ?>
<!DOCTYPE html>
<html lang="pt_br">
   <head>
      <meta charset="utf-8">
      <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
      <title>CADASTRO - Jocross</title>
      <script src="js.js"></script>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="css/style.css">
      <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script>
      <script>
         $(document).ready(function(){
         $('#zap').mask('55 00 00000-0000');
         });
      </script>
      <script type="text/javascript">
         function verificarcampo(){ 
         if($("#checkbox").is(":checked")){
            $("#cnpj").css("display","block");
         
         }else{ 
         
           $("#cnpj").css("display","none");
         
         }
         }
      </script>
   </head>
   <body>
      <!DOCTYPE html>
      <head>
      </head>
      <body>
         <form method="POST"class="form-horizontal" action="processa.php" enctype="multipart/form-data">
            <fieldset>
               <div class="panel panel-primary">
                  <div class="panel-heading">Cadastro Jocross</div>
                  <?php
                     if(isset($_SESSION['msg'])){
                     	echo $_SESSION['msg'];
                     	unset($_SESSION['msg']);
                     }
                     ?>
                  <div class="panel-body">
                     <div class="form-group">
                        <div class="col-md-11 control-label">
                           <p class="help-block">
                              <h11>*</h11>
                              Campo Obrigatório 
                           </p>
                        </div>
                     </div>
                     <!-- Text input-->
                     <div class="form-group">
                        <label class="col-md-2 control-label" for="Nome">
                           Nome Completo
                           <h11>*</h11>
                        </label>
                        <div class="col-md-8">
                           <input id="nome" name="nome" placeholder="" class="form-control input-md"  type="text">
                        </div>
                     </div>
                     <!-- Text input-->
                     <div class="form-group">
                        <label class="col-md-2 control-label" for="Nome">
                           Facebook(Link)
                           <h11>*</h11>
                        </label>
                        <div class="col-md-8">
                           <input id="fb" name="fb" placeholder="Link Facebook" class="form-control input-md"  type="text">
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="col-md-2 control-label" for="Nome">
                           Instagram(Link)
                           <h11>*</h11>
                        </label>
                        <div class="col-md-8">
                           <input id="ins" name="ins" placeholder="Link Instagram" class="form-control input-md"  type="text">
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="col-md-2 control-label" for="Nome">
                           Envie sua foto
                           <h11>*</h11>
                        </label>
                        <div class="col-md-4">
                           <input id="arquivo" name="arquivo"   placeholder="Carregar Imagem" type ="file" class="form-control input-md"  type="text">
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="col-md-2 control-label" for="Nome">
                           CPF 
                           <h11>*</h11>
                        </label>
                        <div class="col-md-2">
                           <input id="cpf" name="cpf" placeholder="Apenas números" class="form-control input-md"  type="text" maxlength="11" pattern="[0-9]+$">
                        </div>
                        <label class="col-md-1 control-label" for="Nome">
                           RG 
                           <h11>*</h11>
                        </label>
                        <div class="col-md-2">
                           <input id="rg" name="rg" placeholder="Apenas números" class="form-control input-md"  type="text" maxlength="11" pattern="[0-9]+$">
                        </div>
                     </div>
                     <!-- Prepended text-->
                  
                  <div class="form-group">
                     <label class="col-md-2 control-label" for="Nome">
                        Possui CNPJ?
                        <h11>*</h11>
                        <h11>sim</h11>
                        <input type ="checkbox" value="1" name="funcao" id="checkbox" onchange="verificarcampo()">
                     </label>
                     <div class="col-md-2">
                        <input id="cnpj" name="cnpj" placeholder="Digite o CNPJ" class="form-control input-md"  type="text" maxlength="10" style="display:none;" id="text">
                     </div>
                  </div>


                     <div class="form-group">
                        <label class="col-md-2 control-label" for="Nome">
                           Data de Nascimento
                           <h11>*</h11>
                        </label>
                        <div class="col-md-2">
                           <input id="dtnasc" name="dtnasc" placeholder="AAAA/MM/DD" class="form-control input-md"  type="text" maxlength="10" OnKeyPress="formatar('####-##-##', this)" onBlur="showhide()">
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="col-md-2 control-label" for="prependedtext">
                           Contato:<br>
                           Celular 1
                           <h11>*</h11>
                        </label>
                        <div class="col-md-2">
                           <div class="input-group">
                              <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                              <input id="contato1" name="contato1" class="form-control" placeholder="XX XXXXX-XXXX"  type="text" maxlength="13" pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$"
                                 OnKeyPress="formatar('## #####-####', this)">
                           </div>
                        </div>
                        <label class="col-md-1 control-label" for="prependedtext">Contato:<br> Celular 2</label>
                        <div class="col-md-2">
                           <div class="input-group">
                              <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                              <input id="contato2" name="contato2" class="form-control" placeholder="55 81 XXXXX-XXXX" type="text" maxlength="13"  >
                           </div>
                        </div>
                        <label class="col-md-1 control-label" for="prependedtext">Contato:<br> Celular 3</label>
                        <div class="col-md-2">
                           <div class="input-group">
                              <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                              <input id="contato3" name="contato3" class="form-control" placeholder="55 81 XXXXX-XXXX" type="text" maxlength="13"  >
                           </div>
                        </div>
                     </div>
                     <!-- Prepended text-->
                     <div class="form-group">
                        <label class="col-md-2 control-label" for="Nome">
                           Recados: Nome
                           <h11>*</h11>
                        </label>
                        <div class="col-md-2">
                           <input id="recados1" name="recados1" placeholder="Nome" class="form-control input-md"  type="text" maxlength="10" OnKeyPress="formatar('####-##-##', this)" onBlur="showhide()">
                        </div>
                        <label class="col-md-1 control-label" for="prependedtext">
                           Recados: Telefone
                           <h11>*</h11>
                        </label>
                        <div class="col-md-2">
                           <div class="input-group">
                              <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                              <input id="telefone1" name="telefone1" class="form-control" placeholder="XX XXXXX-XXXX"  type="text" maxlength="13" pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$"
                                 OnKeyPress="formatar('## #####-####', this)">
                           </div>
                        </div>
                     </div>
                     <!-- Prepended text-->
                     <div class="form-group">
                        <label class="col-md-2 control-label" for="Nome">
                           Portador: Nome
                           <h11>*</h11>
                        </label>
                        <div class="col-md-2">
                           <input id="portador" name="portador" placeholder="Nome" class="form-control input-md"  type="text" maxlength="10" OnKeyPress="formatar('####-##-##', this)" onBlur="showhide()">
                        </div>
                        <label class="col-md-1 control-label" for="prependedtext">
                           Portador: Telefone
                           <h11>*</h11>
                        </label>
                        <div class="col-md-2">
                           <div class="input-group">
                              <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                              <input id="telefone2" name="telefone2" class="form-control" placeholder="XX XXXXX-XXXX"  type="text" maxlength="13" pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$"
                                 OnKeyPress="formatar('## #####-####', this)">
                           </div>
                        </div>
                     </div>
                     <!-- Prepended text-->
                     <div class="form-group">
                        <label class="col-md-2 control-label" for="Nome">
                           Escritório anterior
                           <h11>*</h11>
                        </label>
                        <div class="col-md-4">
                           <input id="escritorio" name="escritorio" placeholder="" class="form-control input-md"  type="text">
                        </div>
                     </div>
                     <!-- Prepended text-->
                     <div class="form-group">
                        <label class="col-md-2 control-label" for="Nome">
                           Observações
                           <h11>*</h11>
                        </label>
                        <div class="col-md-4">
                           <input id="obs" name="obs" placeholder="" class="form-control input-md"  type="text">
                        </div>
                     </div>
                     <!-- Prepended text-->
                     <div class="form-group">
                        <label class="col-md-2 control-label" for="prependedtext">
                           Email 
                           <h11>*</h11>
                        </label>
                        <div class="col-md-4">
                           <div class="input-group">
                              <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                              <input id="email" name="email" class="form-control" placeholder="email@email.com"  type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" >
                           </div>
                        </div>
                     </div>
                     <!-- Search input-->
                     <div class="form-group">
                        <label class="col-md-2 control-label" for="CEP">
                           CEP 
                           <h11>*</h11>
                        </label>
                        <div class="col-md-2">
                           <input id="cep" name="cep" placeholder="Apenas números" class="form-control input-md"  value="" type="search" maxlength="8" pattern="[0-9]+$">
                        </div>
                        <div class="col-md-2">
                           <button type="button" class="btn btn-primary" onclick="pesquisacep(cep.value)">Pesquisar</button>
                        </div>
                     </div>
                     <!-- Prepended text-->
                     <div class="form-group">
                        <label class="col-md-2 control-label" for="prependedtext">Endereço</label>
                        <div class="col-md-4">
                           <div class="input-group">
                              <span class="input-group-addon">Rua</span>
                              <input id="rua" name="rua" class="form-control" placeholder=""  readonly="readonly" type="text">
                           </div>
                        </div>
                        <div class="col-md-2">
                           <div class="input-group">
                              <span class="input-group-addon">
                                 Nº 
                                 <h11>*</h11>
                              </span>
                              <input id="numero" name="numero" class="form-control" placeholder=""   type="text">
                           </div>
                        </div>
                        <div class="col-md-3">
                           <div class="input-group">
                              <span class="input-group-addon">
                              Complemento 
                              </span>
                              <input id="comp" name="comp" placeholder="Complemento" class="form-control input-md"  type="text">
                           </div>
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="col-md-2 control-label" for="prependedtext"></label>
                        <div class="col-md-3">
                           <div class="input-group">
                              <span class="input-group-addon">Bairro</span>
                              <input id="bairro" name="bairro" class="form-control" placeholder=""   readonly="readonly" type="text">
                           </div>
                        </div>
                        <div class="col-md-3">
                           <div class="input-group">
                              <span class="input-group-addon">Cidade</span>
                              <input id="cidade" name="cidade" class="form-control" placeholder=""   readonly="readonly" type="text">
                           </div>
                        </div>
                        <div class="col-md-3">
                           <div class="input-group">
                              <span class="input-group-addon">Estado</span>
                              <input id="estado" name="estado" class="form-control" placeholder=""  readonly="readonly" type="text">
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- Button (Double) -->
                  <div class="form-group">
                     <label class="col-md-2 control-label" for="Nome">
                        Banco
                        <h11>*</h11>
                     </label>
                     <div class="col-md-2">
                        <input id="bnc" name="bnc" placeholder="" class="form-control input-md"  type="text" maxlength="r">
                     </div>
                     <label class="col-md-1 control-label" for="prependedtext">
                        Nome do Favorecido
                        <h11>*</h11>
                     </label>
                     <div class="col-md-2">
                        <div class="input-group">
                           <input id="nomefavorecido" name="nomefavorecido" class="form-control" placeholder=""  type="text" maxlength="">
                        </div>
                     </div>
                     <label class="col-md-1 control-label" for="prependedtext">CPF/CNPJ do favorecido</label>
                     <div class="col-md-2">
                        <div class="input-group">
                           <input id="cpfavorecido" name="cpfavorecido" class="form-control" placeholder="" type="text" maxlength=""  >
                        </div>
                     </div>
                  </div>
                  <!-- Button (Double) -->
                  <div class="form-group">
                     <label class="col-md-2 control-label" for="Nome">
                        Conta
                        <h11>*</h11>
                     </label>
                     <div class="col-md-2">
                        <input id="conta" name="conta" placeholder="" class="form-control input-md"  type="text" maxlength="" OnKeyPress="">
                     </div>
                     <label class="col-md-1 control-label" for="prependedtext">
                        Agencia
                        <h11>*</h11>
                     </label>
                     <div class="col-md-2">
                        <div class="input-group">
                           <input id="agencia" name="agencia" class="form-control" placeholder="">
                        </div>
                     </div>
                     <label class="col-md-1 control-label" for="prependedtext">Operação ou tipo de conta</label>
                     <div class="col-md-2">
                        <div class="input-group">
                           <input id="operacao" name="operacao" class="form-control" placeholder="" type="text" maxlength="">
                        </div>
                     </div>
                  </div>
                  <!-- Button (Double) -->
                  <div class="form-group">
                     <label class="col-md-2 control-label" for="Nome">
                        Como conheceu a Jocross? 
                        <h11>*</h11>
                     </label>
                     <div class="col-md-8">
                        <input id="indicacao" name="indicacao" placeholder="" class="form-control input-md"  type="text">
                     </div>
                  </div>
               </div>
               <!-- Button (Double) -->
               <div class="form-group">
               <label class="col-md-2 control-label" for="Cadastrar"></label>
               <div class="col-md-8">
                  <button id="Cadastrar" name="Cadastrar" class="btn btn-success" value="Cadastrar" type="Submit">Cadastrar</button>
                  <button id="Cancelar" name="Cancelar" class="btn btn-danger" type="Reset">Cancelar</button>
               </div>
               <div class="form-group">
                  <div>
                  </div>
               </div>
            </fieldset>
         </form>
         <form action="../admin/painel/index.php">
            <input type="submit" class="btn btn-danger" style="   
               color: #fff;
               background-color: #E6C972!important;
               border-color: #E6C972;!important" value="Painel Administrativo"/>
         </form>
   </body>
</html>
<?php