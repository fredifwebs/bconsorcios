<footer class="rodape">
	<div class="content">
		<section>
			<h2>Sobre n�s</h2>
			<figure>
				<a href="<?php echo $base_url?>"><img src="<?php echo $base_url?>images/logo.png" alt=""></a>
				<figcaption>Fruto da criatividade brasileira e instrumento fant�stico na capta��o de poupan�a, o cons�rcio surgiu no pa�s no in�cio dos anos 60...<br>
					<a href="<?php echo $base_url?>o-consorcio">Continue lendo �</a></figcaption>
				</figure>
			</section>
			<section>
				<h2>Links</h2>
				<ul>
					<?php 
						$sql = mysql_query("SELECT * FROM categorias_consorcios");
						while($row = mysql_fetch_array($sql)){
							echo "<li><a href='{$base_url}categoria/{$row['id']}-{$row['slug']}'>{$row['nome']}</a></li>";
						}
					?>
					<li><a href="<?php echo $base_url?>o-consorcio">O Cons�rcio</a></li>
					<li><a href="<?php echo $base_url?>perguntas-frequentes">Perguntas Frequentes</a></li>
					<li><a href="<?php echo $base_url?>vantagens">Vantagens</a></li>
				</ul>
			</section>
			<section>
				<h2>Atendimento</h2>
				<p>Segunda � Sexta das 08h �s 18h <br>
					S�bado 09h �s 12h</p>
					<h2 class="footer-h2">PAGUE COM:</h2>
					<img src="<?php echo $base_url?>images/pag.jpg" alt="">
					<h2 class="footer-h2">Newsletter</h2>
					<form method="post" action="" id="ajax_form">
						<input type="text" placeholder="Digite seu email" name="email">
						<span id="msg"></span>
						<!-- <span class="alert-ok">Email salvo com sucesso!<br></span>
						<span class="alert-erro">Erro ao salvar email!</span> -->
					</form>
				</section>
				<section>
					<h2>Contato</h2>
					<p><span>Fone:</span><br>
						<h3><span>(41)</span>3053 - 1246</h3></p>
						<p>Email:<br>
							<a href="mailto:contato@bconsorcios.com.br?subject=Contato">contato@bconsorcios.com.br</a></p>
							<p>Social:</p>
							<a href="" class="social-fb"></a>
							<a href="" class="social-tw"></a>
							<a href="" class="social-gp"></a>
							<a href="" class="social-in"></a>
						</section>
						<div class="clear"></div>
						<div class="copy">
							<p>Copyright � 2014 BCons�rcios - Todos os direitos reservados.</p>
							<figure>
								<a href="http://www.ifwebs.com" target="_blank"><img src="<?php echo $base_url?>images/ifwebs.png" alt="IfWebs" title="IfWebs"></a>
							</figure>
						</div>
						<div class="clear"></div>
						</div>
					</footer>
				</div>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="http://unslider.com/unslider.min.js"></script>
<script src="<?php echo $base_url?>js/functions.js"></script>