
<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.html">Inicio Servimil</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="<?php echo base_url() ?>index.php/CompaniaController">Inicio</a>
                    </li>
                    <li>
                     <a href="<?php echo base_url() //para colocar los menus dinamicos ?>index.php/CompaniaController">Compañia</a>
                    </li>
                    <li>
                        <a href="post.html">Cuartel</a>
                    </li>
                    <li>
                        <a href="contact.html">Componente</a>
                    </li>
					<li>
                     <a href="<?php echo base_url() //para colocar los menus dinamicos ?>index.php/InscripcionController">Inscripciòn</a>   
                    </li>
					<li>
                     <a href="<?php echo base_url() //para colocar los menus dinamicos ?>index.php/ServicioController">Servicio</a>
                    </li>
					<li>
                     <a href="<?php echo base_url() //para colocar los menus dinamicos ?>index.php/SoldadoController">Soldado</a>
                    </li>
					<li>
                     <a href="<?php echo base_url() //para colocar los menus dinamicos ?>index.php/UsuarioController">Usuario</a>
                    </li>
					<li>
                     <a href="<?php echo base_url() //para colocar los menus dinamicos ?>index.php/CompaniaController">Auditoria</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
