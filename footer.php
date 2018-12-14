        <section class="faca-parte">
            <div class="container">
                <h2>Fale com <span>Fábio</span></h2>
                <form id="_form_contato">
                    <div id="_contato_callbacks"></div>
                    <input type="text" name="nome" id="contato_nome" class="form-control" placeholder="seu nome">
                    <input type="email" name="email" id="contato_email" class="form-control" placeholder="seu e-mail">
                    <textarea name="mensagem" id="contato_mensagem" class="form-control" placeholder="mensagem"></textarea>
                    <button type="submit" name="action">enviar</button>
                </form>
            </div><!-- container -->
        </section><!-- faca-parte -->

        <footer>
            <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
        </footer>

        <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/assets/js/jquery.js'></script>
		<script type="text/javascript">
       		var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
	   	</script>
	   	<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js'></script>
        <script src="https://use.fontawesome.com/6963733f46.js"></script>
        <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js'></script>
        <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/assets/js/script.js'></script>
    </body>
</html>