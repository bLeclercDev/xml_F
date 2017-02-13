<nav class="navbar navbar-default">
    <div class="container-fluid">

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Fichiers XML <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="xml/jeux-sans-css.xml">XML sans css</a></li>
                        <li><a href="xml/jeux-avec-css.xml">XML avec css</a></li>
                        <li role="separator" class="divider"></li>
                        <li class="<?php echo isset($xmlToText) ? 'active' : '';?>"><a href="xmlToText.php">Transformation XSL d'un XML en Texte brut</a></li>
                        <li><a href="xmlToXml.php">Transformation XSL d'un XML en XML</a></li>
                        <li class="<?php echo isset($xmlToHtml) ? 'active' : '';?>"><a href="xmlToHtml.php">Transformation XSL d'un XML en HTML</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="<?php echo isset($home) ? 'active' : '';?>"><a href="index.php">Accueil</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>