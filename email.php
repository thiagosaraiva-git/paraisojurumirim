<?php
$name = $_POST['name'];
$email = $_POST['mail'];
$telefone = $_POST['cel'];

if(empty($name) OR (empty($email)) OR (empty($telefone))){
	?>
		<script> 
		alert("Preencha todos os campos corretamente!") ;
		</script>	 
	<?php 
	header("Refresh: 0; index.html");
	exit;
}

$to = "guilherme@paraisojurumirim.com.br";
$email_assunto = "Novo contato! (Fernando Hotsite)";
$email_mensagem = "Nome:  $name \nEmail: $email \nTelefone: $telefone";

mail($to, $email_assunto, $email_mensagem);
		?>
		<script> 
		alert("Formulário recebido com sucesso, aguarde meu contato!") ;
		</script>	 
	<?php 
	header("Refresh: 0; index.html");
	exit;
exit;
?>
