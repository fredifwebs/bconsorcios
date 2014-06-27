<!doctype html>
<html lang="pt-br">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Cons�rcio Servopa Curitiba</title>

<meta name="keywords" content="" /> 
<meta name="description" content="" />

<?php include 'includes/head.php';?>
<?php require_once 'includes/conexao.php';?>

<?php 
	$id = $_GET['id'];
	
	$sql = mysql_query("SELECT * FROM consorcios WHERE id = $id");
	$res = mysql_fetch_array($sql);
	$real = number_format($res['credito'], 2);
?>
</head>
<body>
	<div class="all">
		<?php include 'includes/header.php';?>
		<div class="clear"></div>
		<section class="compra content">
		<h1>Compra online</h1>
		<hr>
		<p>Os dados abaixo especificados servem como base contratual entre o Consorciado e a Administradora. Respeitam as normas vigentes do Banco Central do Brasil. Certificado de Autoriza��o n� MF/SRF: 03/00/111/90</p>
		<form>
		<ul class="links_form">
			<li><a href="#identificacao" class="ativo">Identifica��o</a>
			<li><span>|</span>
			<li><a href="#endereco">Endere�o</a>
			<li><span>|</span>
			<li><a href="#seguro">Seguro de vida</a>
			<li><span>|</span>
			<li><a href="#resumo">Resumo</a>
		</ul>
		
		<fieldset id="identificacao" class="contaba">
			<h2>identifica��o</h2>
			<table class="Color">
				<tbody>
					<tr>
						<td align="right">
							<label>Tipo:</label>
						</td>
						<td align="left">
							<input type="text" name="tipo" id="tipo">
						</td>
					</tr>
					<tr>
						<td align="right">
							<label>Nome:</label>
						</td>
						<td align="left">
							<input type="text" name="nome" id="nome" onblur="resumo()">
						</td>
					</tr>
					<tr>
						<td align="right">
							<label>Email:</label>
						</td>
						<td align="left">
							<input type="text" name="email" id="email">
						</td>
					</tr>
					<tr>
						<td align="right">
							<label>CPF:</label>
						</td>
						<td align="left">
							<input type="text" name="cpf" id="cpf">
						</td>
					</tr>
					<tr>
						<td align="right">
							<label>RG:</label>
						</td>
						<td align="left">
							<input type="text" name="rg" id="rg">
						</td>
					</tr>
					<tr>
						<td align="right">
							<label>Estado Emissor:</label>
						</td>
						<td align="left">
							<input type="text" name="estadoem" id="estadoem">
						</td>
					</tr>
					<tr>
						<td align="right">
							<label>Sexo:</label>
						</td>
						<td align="left">
							<input type="radio" name="masculino" id="masculino">Masculino<input type="radio" name="feminino" id="feminino">Feminino
						</td>
					</tr>
					<tr>
						<td align="right">
							<label>Nascimento:</label>
						</td>
						<td align="left">
							<input type="text" name="nascimento" id="nascimento">
						</td>
					</tr>
					<tr>
						<td align="right">
							<label>Estado civil:</label>
						</td>
						<td align="left">
							<input type="text" name="estcivil" id="estcivil">
						</td>
					</tr>
				</tbody>
			</table>
		</fieldset>
		
		<fieldset id="endereco" class="contaba">
			<h2>Endere�o</h2>
			<table class="Color">
				<tbody>
					<tr>
						<td align="right">
							<label>Rua:</label>
						</td>
						<td align="left">
							<input type="text" name="rua" id="rua">
						</td>
					</tr>
					<tr>
						<td align="right">
							<label>Bairo:</label>
						</td>
						<td align="left">
							<input type="text" name="bairro" id="bairro">
						</td>
					</tr>
					<tr>
						<td align="right">
							<label>Estado:</label>
						</td>
						<td align="left">
							<select>
								<option value=""  selected="selected">Selecione</option>
									<option value="AC" >Acre</option>
									<option value="AL" >Alagoas</option>
									<option value="AM" >Amazonas</option>
									<option value="AP" >Amap�</option>
									<option value="BA" >Bahia</option>
									<option value="CE" >Cear�</option>
									<option value="DF" >Distrito Federal</option>
									<option value="ES" >Esp�rito Santo</option>
									<option value="GO" >Goi�s</option>
									<option value="MA" >Maranh�o</option>
									<option value="MG" >Minas Gerais</option>
									<option value="MS" >Mato Grosso do Sul</option>
									<option value="MT" >Mato Grosso</option>
									<option value="PA" >Par�</option>
									<option value="PB" >Paraiba</option>
									<option value="PE" >Pernambuco</option>
									<option value="PI" >Piau�</option>
									<option value="PR" >Paran�</option>
									<option value="RJ" >Rio de Janeiro</option>
									<option value="RN" >Rio Grande do Norte</option>
									<option value="RO" >Rond�nia</option>
									<option value="RR" >Roraima</option>
									<option value="RS" >Rio Grande do Sul</option>
									<option value="SC" >Santa Catarina</option>
									<option value="SE" >Sergipe</option>
									<option value="SP" >S�o Paulo</option>
									<option value="TO" >Tocantins</option>
							</select>
						</td>
					</tr>
					<tr>
						<td align="right">
							<label>Cidade:</label>
						</td>
						<td align="left">
							<input type="text" name="cidade" id="cidade">
						</td>
					</tr>
					<tr>
						<td align="right">
							<label>CEP:</label>
						</td>
						<td align="left">
							<input type="text" name="cep" id="cep">
						</td>
					</tr>
					<tr>
						<td align="right">
							<label>Telefone:</label>
						</td>
						<td align="left">
							<input type="text" name="telefone" id="telefone">
						</td>
					</tr>
					<tr>
						<td align="right">
							<label>Celular:</label>
						</td>
						<td align="left">
							<input type="text" name="celular" id="celular">
						</td>
					</tr>
				</tbody>
			</table>
		</fieldset>
		
		<fieldset id="seguro" class="contaba">
			<h2>Seguro de vida</h2>
			<table class="Color">
				<tbody>
					<tr>
						<td align="right">
							<label>Com seguro?</label>
						</td>
						<td align="left">
							<input type="radio" name="seguro" class="s_seg">Sim<input type="radio" name="seguro" class="n_seg">N�o
						</td>
					</tr>
				</tbody>
			</table>
		</fieldset>
			<div class="seg">
				<p>Atrav�s desta solicito a minha inscri��o no Seguro de Vida em Grupo que esta Administradora mant�m com uma Companhia Seguradora. Determino que ocorrendo minha falta a indeniza��o dever� ser paga a SERVOPA ADMINISTRADORA DE CONS�RCIOS Ltda., que reter� o valor necess�rio para quita��o total de minha cota de cons�rcio, vencidas ou vicendas, e repassando o saldo se houver para:</p>
				<tr>
					<td align="right">
						<label>Benefici�rio:</label>
					</td>
					<td align="left">
						<input type="text">
					</td>
				</tr>
				<p>Declaro ter ci�ncia que a cobertura se iniciar� a partir do dia seguinte a minha participa��o em assembl�ia do grupo ao qual me inscrevi, tenho idade inferior a 65 anos e estou em perfeitas condi��es de sa�de, n�o tendo defici�ncia de �rg�os, membros ou sentidos, ou sofrido mol�stia grave nos �ltimos tr�s anos, ciente de que, quaisquer omiss�es tornar� nulo este seguro, nos termos do artigo 1444 do C�digo Civil Brasileiro. Obs: O seguro de vida em grupo � votado na assembl�ia de constitui��o.</p>
			</div>
			<!-- <tr>
				<td align="left">
					<input type="checkbox"> Declaro ter lido o contrato e estou de acordo com os termos.
				</td>
			</tr> -->
		<fieldset id="resumo" class="contaba">
			<h2>Seguro de vida</h2>
			<table class="Color">
				<tbody>
					<tr>
						<td align="right">
							<label>teste</label>
						</td>
						<td align="left">
							<input type="text" name="res_nome" id="res_nome" value="" >
						</td>
					</tr>
				</tbody>
			</table>
		</fieldset>
		</form>
		
		<article class="valores">
			<h3>cr�dito: <b>R$ <?php echo $real;?></b></h3>
			<h2 class="sem_seg">Parcela:</h2>
			<h1 class="sem_seg">R$ <?php echo $res['parcela'];?></h1>
			
			<h2 class="com_seg">Parcela com seguro:</h2>
			<h1 class="com_seg">R$ <?php echo $res['parcela_com_seguro'];?></h1>
		</article>
		</section>
		
		<hr>
		<?php include 'includes/footer.php';?>
</body>
</html>