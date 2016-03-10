<?php

/* base.html.twig */
class __TwigTemplate_e50676f23b41b2c4f8547b0078d423dea654d812a3980d0735c505fac935bfbe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a4e48133c1e3b91afada782af888fea6d0fd9a60f2311bcdc8b4dd6de4a31b6d = $this->env->getExtension("native_profiler");
        $__internal_a4e48133c1e3b91afada782af888fea6d0fd9a60f2311bcdc8b4dd6de4a31b6d->enter($__internal_a4e48133c1e3b91afada782af888fea6d0fd9a60f2311bcdc8b4dd6de4a31b6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
</head>
<body>
    <div id=\"wrapper\">
        <header id=\"header\">
            <!-- top menu -->
            <nav class=\"navbar navbar-inverse navTop\">
                <div class=\"container\">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        <a class=\"navbar-brand\" href=\"#\">Brand</a>
                    </div>
                    <form class=\"navbar-form navbar-right\" role=\"search\">
                        <div class=\"form-group\">
                            <input type=\"email\" class=\"form-control\" placeholder=\"E-mail\">
                        </div>
                        <div class=\"form-group\">
                            <input type=\"password\" class=\"form-control\" placeholder=\"Mot de passe\">
                        </div>
                        <button type=\"submit\" class=\"btn btn-primary\">Connexion</button>
                    </form>

                </div>
            </nav>
        </header>
        <div id=\"content\">
        ";
        // line 39
        $this->displayBlock('body', $context, $blocks);
        // line 40
        echo "    </div>
    <footer id=\"footer\">
        <nav  class=\" navbar navbar-inverse navBot\">
            <div class=\"collapse navbar-collapse\">
                <ul class=\"nav navbar-nav\">
                    <li><a href=\"#\">Home</a></li>
                    <li><a href=\"#\">Library</a></li>
                    <li><a href=\"#\">Data</a></li>
                </ul>
            </div>
        </nav>
    </footer>
</div>
<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
";
        // line 55
        $this->displayBlock('javascripts', $context, $blocks);
        // line 56
        echo "</body>
</html>
";
        
        $__internal_a4e48133c1e3b91afada782af888fea6d0fd9a60f2311bcdc8b4dd6de4a31b6d->leave($__internal_a4e48133c1e3b91afada782af888fea6d0fd9a60f2311bcdc8b4dd6de4a31b6d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a59ab58a406888dd273d5eb7b7de7bef820a6e701b59e7342be9d7bdd34a4420 = $this->env->getExtension("native_profiler");
        $__internal_a59ab58a406888dd273d5eb7b7de7bef820a6e701b59e7342be9d7bdd34a4420->enter($__internal_a59ab58a406888dd273d5eb7b7de7bef820a6e701b59e7342be9d7bdd34a4420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_a59ab58a406888dd273d5eb7b7de7bef820a6e701b59e7342be9d7bdd34a4420->leave($__internal_a59ab58a406888dd273d5eb7b7de7bef820a6e701b59e7342be9d7bdd34a4420_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c19a32b0598403bad6d0da3238f64d8a6a8bd42d595c12ad78ec8335ff7cc57a = $this->env->getExtension("native_profiler");
        $__internal_c19a32b0598403bad6d0da3238f64d8a6a8bd42d595c12ad78ec8335ff7cc57a->enter($__internal_c19a32b0598403bad6d0da3238f64d8a6a8bd42d595c12ad78ec8335ff7cc57a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c19a32b0598403bad6d0da3238f64d8a6a8bd42d595c12ad78ec8335ff7cc57a->leave($__internal_c19a32b0598403bad6d0da3238f64d8a6a8bd42d595c12ad78ec8335ff7cc57a_prof);

    }

    // line 39
    public function block_body($context, array $blocks = array())
    {
        $__internal_94774ea78777ff10d736810e94ab4c333a42ca8c815f4e34758d8ab7b67bb131 = $this->env->getExtension("native_profiler");
        $__internal_94774ea78777ff10d736810e94ab4c333a42ca8c815f4e34758d8ab7b67bb131->enter($__internal_94774ea78777ff10d736810e94ab4c333a42ca8c815f4e34758d8ab7b67bb131_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_94774ea78777ff10d736810e94ab4c333a42ca8c815f4e34758d8ab7b67bb131->leave($__internal_94774ea78777ff10d736810e94ab4c333a42ca8c815f4e34758d8ab7b67bb131_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6b73c6290844a1b904bb1fb30841a5fe10b95f7d2af00f88316dd43fef54766a = $this->env->getExtension("native_profiler");
        $__internal_6b73c6290844a1b904bb1fb30841a5fe10b95f7d2af00f88316dd43fef54766a->enter($__internal_6b73c6290844a1b904bb1fb30841a5fe10b95f7d2af00f88316dd43fef54766a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6b73c6290844a1b904bb1fb30841a5fe10b95f7d2af00f88316dd43fef54766a->leave($__internal_6b73c6290844a1b904bb1fb30841a5fe10b95f7d2af00f88316dd43fef54766a_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  135 => 55,  124 => 39,  113 => 6,  102 => 5,  93 => 56,  91 => 55,  74 => 40,  72 => 39,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}{% endblock %}</title>*/
/*     {% block stylesheets %}{% endblock %}*/
/*     <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">*/
/* </head>*/
/* <body>*/
/*     <div id="wrapper">*/
/*         <header id="header">*/
/*             <!-- top menu -->*/
/*             <nav class="navbar navbar-inverse navTop">*/
/*                 <div class="container">*/
/*                     <!-- Brand and toggle get grouped for better mobile display -->*/
/*                     <div class="navbar-header">*/
/*                         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">*/
/*                             <span class="sr-only">Toggle navigation</span>*/
/*                             <span class="icon-bar"></span>*/
/*                             <span class="icon-bar"></span>*/
/*                             <span class="icon-bar"></span>*/
/*                         </button>*/
/*                         <a class="navbar-brand" href="#">Brand</a>*/
/*                     </div>*/
/*                     <form class="navbar-form navbar-right" role="search">*/
/*                         <div class="form-group">*/
/*                             <input type="email" class="form-control" placeholder="E-mail">*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <input type="password" class="form-control" placeholder="Mot de passe">*/
/*                         </div>*/
/*                         <button type="submit" class="btn btn-primary">Connexion</button>*/
/*                     </form>*/
/* */
/*                 </div>*/
/*             </nav>*/
/*         </header>*/
/*         <div id="content">*/
/*         {% block body %}{% endblock %}*/
/*     </div>*/
/*     <footer id="footer">*/
/*         <nav  class=" navbar navbar-inverse navBot">*/
/*             <div class="collapse navbar-collapse">*/
/*                 <ul class="nav navbar-nav">*/
/*                     <li><a href="#">Home</a></li>*/
/*                     <li><a href="#">Library</a></li>*/
/*                     <li><a href="#">Data</a></li>*/
/*                 </ul>*/
/*             </div>*/
/*         </nav>*/
/*     </footer>*/
/* </div>*/
/* <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>*/
/* <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>*/
/* {% block javascripts %}{% endblock %}*/
/* </body>*/
/* </html>*/
/* */
