<div class="nav menu">
    <nav class="navbar navbar-default" id="meuMenu">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo site_url('/'); ?>"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-fabio.png" alt="Logo" /></a>
            </div><!-- .navbar-header -->

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="<?php echo site_url('biografia'); ?>">Biografia</a></li>
                    <li><a href="<?php echo site_url('noticias'); ?>">Notícias</a></li>
                    <li><a href="<?php echo site_url('/'); ?>#anc-porjetos">Projetos e Realizações</a></li>
                    <li><a href="<?php echo site_url('videos'); ?>">Vídeos</a></li>
                    <li><a href="<?php echo site_url('contato'); ?>">Contato</a></li>
                </ul><!-- .nav -->
            </div><!-- .navbar-collapse -->
        </div><!-- container -->
    </nav><!-- .navbar -->
</div><!-- .nav -->