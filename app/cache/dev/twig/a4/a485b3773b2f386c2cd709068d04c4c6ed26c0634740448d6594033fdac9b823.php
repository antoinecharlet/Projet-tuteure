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
        $__internal_4be68d05e55afa2eef1e35515ff292bed99ca7e8e8e9a8d157fad9dd30b8bdbf = $this->env->getExtension("native_profiler");
        $__internal_4be68d05e55afa2eef1e35515ff292bed99ca7e8e8e9a8d157fad9dd30b8bdbf->enter($__internal_4be68d05e55afa2eef1e35515ff292bed99ca7e8e8e9a8d157fad9dd30b8bdbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_4be68d05e55afa2eef1e35515ff292bed99ca7e8e8e9a8d157fad9dd30b8bdbf->leave($__internal_4be68d05e55afa2eef1e35515ff292bed99ca7e8e8e9a8d157fad9dd30b8bdbf_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_dcff39cf012bba3507baf85e5a21830d64e551d611aefe05a7909e59892c95cd = $this->env->getExtension("native_profiler");
        $__internal_dcff39cf012bba3507baf85e5a21830d64e551d611aefe05a7909e59892c95cd->enter($__internal_dcff39cf012bba3507baf85e5a21830d64e551d611aefe05a7909e59892c95cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_dcff39cf012bba3507baf85e5a21830d64e551d611aefe05a7909e59892c95cd->leave($__internal_dcff39cf012bba3507baf85e5a21830d64e551d611aefe05a7909e59892c95cd_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d7bbc59aa606ba634cf5798af690904b092f20be7d1efd5e6d5f7fd198f7b4be = $this->env->getExtension("native_profiler");
        $__internal_d7bbc59aa606ba634cf5798af690904b092f20be7d1efd5e6d5f7fd198f7b4be->enter($__internal_d7bbc59aa606ba634cf5798af690904b092f20be7d1efd5e6d5f7fd198f7b4be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d7bbc59aa606ba634cf5798af690904b092f20be7d1efd5e6d5f7fd198f7b4be->leave($__internal_d7bbc59aa606ba634cf5798af690904b092f20be7d1efd5e6d5f7fd198f7b4be_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_7e91dabb664dbebe9216f9bf35532e7606909b4710c7237df188725852d2cb2e = $this->env->getExtension("native_profiler");
        $__internal_7e91dabb664dbebe9216f9bf35532e7606909b4710c7237df188725852d2cb2e->enter($__internal_7e91dabb664dbebe9216f9bf35532e7606909b4710c7237df188725852d2cb2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7e91dabb664dbebe9216f9bf35532e7606909b4710c7237df188725852d2cb2e->leave($__internal_7e91dabb664dbebe9216f9bf35532e7606909b4710c7237df188725852d2cb2e_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_29e0cf6309ca211d6b8224ef8c2e9d78c37e6047c7f2cf75ddd1ec66b200c91b = $this->env->getExtension("native_profiler");
        $__internal_29e0cf6309ca211d6b8224ef8c2e9d78c37e6047c7f2cf75ddd1ec66b200c91b->enter($__internal_29e0cf6309ca211d6b8224ef8c2e9d78c37e6047c7f2cf75ddd1ec66b200c91b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_29e0cf6309ca211d6b8224ef8c2e9d78c37e6047c7f2cf75ddd1ec66b200c91b->leave($__internal_29e0cf6309ca211d6b8224ef8c2e9d78c37e6047c7f2cf75ddd1ec66b200c91b_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
