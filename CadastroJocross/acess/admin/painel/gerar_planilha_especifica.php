
   <?php
   session_start();
   include_once('conexao.php');
   ?>
      <?php
         if(isset($_POST['msg_contato'])){
         	 $arquivo = 'Lista_de_contato_Jocross.txt';
         	 $html = '';
    		 $html .= 'Nome';
			 $html .= ';Link Fb';
			 $html .= ';Link Ins';
			 $html .= ';cpf';
			 $html .= ';rg';
			 $html .= ';CNPJ';
			 $html .= ';Data Nasc';
			 $html .= ';contato1';
			 $html .= ';contato2';
			 $html .= ';contato3';
			 $html .= ';recados1';
			 $html .= ';telefone1';
			 $html .= ';portador';
			 $html .= ';telefone2';
			 $html .= ';escritorio';
			 $html .= ';indicacao';
			 $html .= ';email';
			 $html .= ';cep';
			 $html .= ';rua';
			 $html .= ';numero';
			 $html .= ';complemento';
			 $html .= ';bairro';
			 $html .= ';estado';
			 $html .= ';Banco';
			 $html .= ';nome favorecido';
			 $html .= ';cpf favorecido';
			 $html .= ';conta';
			 $html .= ';agencia';
			 $html .= ';operacao';
			 $html .= ';Observação';

         
         
     
         	
         	foreach($_POST['msg_contato'] as $id => $msg_contato){
         		//echo "ID do item: $id <br>";
         		//Selecionar todos os itens da tabela 
         		$result_msg_contatos = "SELECT * FROM cadastro WHERE id = $id LIMIT 500";
         		$resultado_msg_contatos = mysqli_query($conn , $result_msg_contatos);
         		
         		while($row_msg_contatos = mysqli_fetch_assoc($resultado_msg_contatos)){

					 $html .= ''.$row_msg_contatos["nome"].'';
					 $html .= ';'.$row_msg_contatos["fb"].';';
					 $html .= ';'.$row_msg_contatos["ins"].'';
					 $html .= ';'.$row_msg_contatos["cpf"].'';
					 $html .= ';'.$row_msg_contatos["rg"].'';
					 $html .= ';'.$row_msg_contatos["cnpj"].'';
					 $html .= ';'.$row_msg_contatos["dtnasc"].'';
					 $html .= ';'.$row_msg_contatos["contato1"].'';
					 $html .= ';'.$row_msg_contatos["contato2"].'';
					 $html .= ';'.$row_msg_contatos["contato3"].'';
					 $html .= ';'.$row_msg_contatos["recados1"].'';
					 $html .= ';'.$row_msg_contatos["telefone1"].'';
					 $html .= ';'.$row_msg_contatos["portador"].'';
					 $html .= ';'.$row_msg_contatos["telefone2"].'';
					 $html .= ';'.$row_msg_contatos["escritorio"].'';
					 $html .= ';'.$row_msg_contatos["obs"].'';
					 $html .= ';'.$row_msg_contatos["email"].'';
					 $html .= ';'.$row_msg_contatos["cep"].'';
					 $html .= ';'.$row_msg_contatos["rua"].'';
					 $html .= ';'.$row_msg_contatos["numero"].'';
					 $html .= ';'.$row_msg_contatos["comp"].'';
					 $html .= ';'.$row_msg_contatos["bairro"].'';
					 $html .= ';'.$row_msg_contatos["estado"].'';
					 $html .= ';'.$row_msg_contatos["bnc"].'';
					 $html .= ';'.$row_msg_contatos["nomefavorecido"].'';
					 $html .= ';'.$row_msg_contatos["cpfavorecido"].'';
					 $html .= ';'.$row_msg_contatos["conta"].'';
					 $html .= ';'.$row_msg_contatos["agencia"].'';
					 $html .= ';'.$row_msg_contatos["operacao"].'';
					 $html .= ';'.$row_msg_contatos["obs"].'';

         

         			
         		}
         	}
         	// Configurações header para forçar o download
         	header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
         	header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
         	header ("Cache-Control: no-cache, must-revalidate");
         	header ("Pragma: no-cache");
         	header ("Content-type: application/x-msexcel");
         	header ("Content-Disposition: attachment; filename=\"{$arquivo}\"" );
         	header ("Content-Description: PHP Generated Data" );
         	// Envia o conteúdo do arquivo
         	echo $html;
         	exit;
         }else{
         	echo "Nenhum item selecionado";
         }
         
         ?>
   </body>
</html>