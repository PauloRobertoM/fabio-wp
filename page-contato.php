<?php get_header(); ?>

	<section class="titulo-interno">
		<div class="container">
			<a href="index.php"><i class="fa fa-angle-left" aria-hidden="true"></i> Contato</a>
		</div><!-- container -->
	</section><!-- titulo-interno -->

	<section class="interna contato">
		<div class="container">
			<h2>Deixe sua mensagem</h2>
			<form id="_form_contato">
			    <div id="_contato_callbacks"></div>
                <input type="text" name="nome" id="contato_nome" class="form-control" placeholder="seu nome">
                <input type="email" name="email" id="contato_email" class="form-control" placeholder="seu e-mail">
                <textarea name="mensagem" id="contato_mensagem" class="form-control" placeholder="mensagem"></textarea>
                <button type="submit" name="action">enviar</button>
            </form>
		</div><!-- container -->
	</section><!-- interna -->

<?php get_footer(); ?>