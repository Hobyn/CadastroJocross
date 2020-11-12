
<?php



session_start();
include_once("conexao.php");




$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$fb = filter_input(INPUT_POST, 'fb', FILTER_SANITIZE_STRING);
$ins = filter_input(INPUT_POST, 'ins', FILTER_SANITIZE_STRING);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
$rg = filter_input(INPUT_POST, 'rg', FILTER_SANITIZE_EMAIL);
$cnpj = filter_input(INPUT_POST, 'cnpj', FILTER_SANITIZE_STRING);
$dtnasc = filter_input(INPUT_POST, 'dtnasc', FILTER_SANITIZE_STRING);
$contato1 = filter_input(INPUT_POST, 'contato1', FILTER_SANITIZE_STRING);
$contato2 = filter_input(INPUT_POST, 'contato2', FILTER_SANITIZE_STRING);
$contato3 = filter_input(INPUT_POST, 'contato3', FILTER_SANITIZE_STRING);
$recados1 = filter_input(INPUT_POST, 'recados1', FILTER_SANITIZE_STRING);
$telefone1 = filter_input(INPUT_POST, 'telefone1', FILTER_SANITIZE_STRING);
$portador = filter_input(INPUT_POST, 'portador', FILTER_SANITIZE_STRING);
$telefone2 = filter_input(INPUT_POST, 'telefone2', FILTER_SANITIZE_STRING);
$escritorio = filter_input(INPUT_POST, 'escritorio', FILTER_SANITIZE_STRING);
$obs = filter_input(INPUT_POST, 'obs', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$cep = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_STRING);
$rua = filter_input(INPUT_POST, 'rua', FILTER_SANITIZE_STRING);
$numero = filter_input(INPUT_POST, 'numero', FILTER_SANITIZE_STRING);
$comp = filter_input(INPUT_POST, 'comp', FILTER_SANITIZE_STRING);
$bairro = filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_STRING);
$estado = filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_STRING);
$bnc = filter_input(INPUT_POST, 'bnc', FILTER_SANITIZE_STRING);
$nomefavorecido = filter_input(INPUT_POST, 'nomefavorecido', FILTER_SANITIZE_STRING);
$cpfavorecido = filter_input(INPUT_POST, 'cpfavorecido', FILTER_SANITIZE_STRING);
$conta = filter_input(INPUT_POST, 'conta', FILTER_SANITIZE_STRING);
$agencia = filter_input(INPUT_POST, 'agencia', FILTER_SANITIZE_STRING);
$operacao = filter_input(INPUT_POST, 'operacao', FILTER_SANITIZE_STRING);
$indicacao = filter_input(INPUT_POST, 'indicacao', FILTER_SANITIZE_STRING);



if(isset($_FILES['arquivo'])){

	$extensao = strtolower(substr($_FILES['arquivo'] ['name'], -4));
	$arquivo = md5(time()). $extensao;
	$diretorio = "foto/";

			
//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";

$result_usuario = "INSERT INTO cadastro (nome, arquivo ,fb, ins,  cpf,  rg , cnpj , dtnasc, contato1 , contato2 , contato3 , recados1, telefone1 , portador, telefone2 , escritorio, indicacao , obs, email , cep , rua, numero , comp, bairro, estado, bnc, nomefavorecido, cpfavorecido, conta, agencia, operacao, created) VALUES ('$nome','$arquivo', '$fb', '$ins', '$cpf', '$rg', '$cnpj', '$dtnasc' ,'$contato1', '$contato2', '$contato3', '$recados1', '$telefone1', '$portador', '$telefone2', '$escritorio', '$indicacao', '$obs',  '$email', '$cep', '$rua', '$numero', '$comp', '$bairro', '$estado', '$bnc', '$nomefavorecido', '$cpfavorecido' , '$conta' , '$agencia', '$operacao',  NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);

}
if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso</p>";
	header("Location: cadastro.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Usuário não foi cadastrado com sucesso</p>";
	header("Location: cadastro.php");
}




?>




