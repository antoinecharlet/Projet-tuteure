<?php

/* MainBundle:Default:index.html.twig */
class __TwigTemplate_cf8d7a7bf05a7418624785a24c330a384d73aca5b05dfc6552c54a6a287e6f80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "MainBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4f1c757937af2785e4fe4820100a87b67fe7fe2d73f8e548e600199c07ab6ee8 = $this->env->getExtension("native_profiler");
        $__internal_4f1c757937af2785e4fe4820100a87b67fe7fe2d73f8e548e600199c07ab6ee8->enter($__internal_4f1c757937af2785e4fe4820100a87b67fe7fe2d73f8e548e600199c07ab6ee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f1c757937af2785e4fe4820100a87b67fe7fe2d73f8e548e600199c07ab6ee8->leave($__internal_4f1c757937af2785e4fe4820100a87b67fe7fe2d73f8e548e600199c07ab6ee8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_db4af3d9de62c52b630b0aa580bc06f239358f98c3a343bfc20f83e677b79e23 = $this->env->getExtension("native_profiler");
        $__internal_db4af3d9de62c52b630b0aa580bc06f239358f98c3a343bfc20f83e677b79e23->enter($__internal_db4af3d9de62c52b630b0aa580bc06f239358f98c3a343bfc20f83e677b79e23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div id=\"wrapper\">
        <div class=\"container margTop50\">
            
                <div class=\"container col-xs-5 block\">
                    <h1>Je suis Étudiant/Alternant</h1>
                    <p>Verum ad istam omnem orationem brevis est defensio. Nam quoad aetas M. Caeli dare potuit isti suspicioni locum, fuit primum ipsius pudore, deinde etiam patris diligentia disciplinaque munita. Qui ut huic virilem togam deditšnihil dicam hoc loco de me; tantum sit, quantum vos existimatis; hoc dicam, hunc a patre continuo ad me esse deductum; nemo hunc M. Caelium in illo aetatis flore vidit nisi aut cum patre aut mecum aut in M. Crassi castissima domo, cum artibus honestissimis erudiretur.</p>
                </div>
                <div class=\"container col-xs-5 col-xs-offset-2 block\">
                    <h1>Je souhaite recruter un alternant</h1>
                    <p>Verum ad istam omnem orationem brevis est defensio. Nam quoad aetas M. Caeli dare potuit isti suspicioni locum, fuit primum ipsius pudore, deinde etiam patris diligentia disciplinaque munita. Qui ut huic virilem togam deditšnihil dicam hoc loco de me; tantum sit, quantum vos existimatis; hoc dicam, hunc a patre continuo ad me esse deductum; nemo hunc M. Caelium in illo aetatis flore vidit nisi aut cum patre aut mecum aut in M. Crassi castissima domo, cum artibus honestissimis erudiretur.</p>
                    <button type=\"button\" class=\"btn btn-primary btn-lg center-block\">
                        <span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span> S'inscrire
                    </button>
                </div>
            
        </div>
    </div>
";
        
        $__internal_db4af3d9de62c52b630b0aa580bc06f239358f98c3a343bfc20f83e677b79e23->leave($__internal_db4af3d9de62c52b630b0aa580bc06f239358f98c3a343bfc20f83e677b79e23_prof);

    }

    // line 23
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_05370926a3e696485241ce9556d3d853df376f86c4ff31e364c6e35c46f832f0 = $this->env->getExtension("native_profiler");
        $__internal_05370926a3e696485241ce9556d3d853df376f86c4ff31e364c6e35c46f832f0->enter($__internal_05370926a3e696485241ce9556d3d853df376f86c4ff31e364c6e35c46f832f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 24
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style/index.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
        
        $__internal_05370926a3e696485241ce9556d3d853df376f86c4ff31e364c6e35c46f832f0->leave($__internal_05370926a3e696485241ce9556d3d853df376f86c4ff31e364c6e35c46f832f0_prof);

    }

    // line 27
    public function block_title($context, array $blocks = array())
    {
        $__internal_9313bb77687818399196edd98196fd0b4fadd34c9473a4ab40661fe792b269bc = $this->env->getExtension("native_profiler");
        $__internal_9313bb77687818399196edd98196fd0b4fadd34c9473a4ab40661fe792b269bc->enter($__internal_9313bb77687818399196edd98196fd0b4fadd34c9473a4ab40661fe792b269bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Page d'accueil";
        
        $__internal_9313bb77687818399196edd98196fd0b4fadd34c9473a4ab40661fe792b269bc->leave($__internal_9313bb77687818399196edd98196fd0b4fadd34c9473a4ab40661fe792b269bc_prof);

    }

    public function getTemplateName()
    {
        return "MainBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 27,  72 => 24,  66 => 23,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div id="wrapper">*/
/*         <div class="container margTop50">*/
/*             */
/*                 <div class="container col-xs-5 block">*/
/*                     <h1>Je suis Étudiant/Alternant</h1>*/
/*                     <p>Verum ad istam omnem orationem brevis est defensio. Nam quoad aetas M. Caeli dare potuit isti suspicioni locum, fuit primum ipsius pudore, deinde etiam patris diligentia disciplinaque munita. Qui ut huic virilem togam deditšnihil dicam hoc loco de me; tantum sit, quantum vos existimatis; hoc dicam, hunc a patre continuo ad me esse deductum; nemo hunc M. Caelium in illo aetatis flore vidit nisi aut cum patre aut mecum aut in M. Crassi castissima domo, cum artibus honestissimis erudiretur.</p>*/
/*                 </div>*/
/*                 <div class="container col-xs-5 col-xs-offset-2 block">*/
/*                     <h1>Je souhaite recruter un alternant</h1>*/
/*                     <p>Verum ad istam omnem orationem brevis est defensio. Nam quoad aetas M. Caeli dare potuit isti suspicioni locum, fuit primum ipsius pudore, deinde etiam patris diligentia disciplinaque munita. Qui ut huic virilem togam deditšnihil dicam hoc loco de me; tantum sit, quantum vos existimatis; hoc dicam, hunc a patre continuo ad me esse deductum; nemo hunc M. Caelium in illo aetatis flore vidit nisi aut cum patre aut mecum aut in M. Crassi castissima domo, cum artibus honestissimis erudiretur.</p>*/
/*                     <button type="button" class="btn btn-primary btn-lg center-block">*/
/*                         <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> S'inscrire*/
/*                     </button>*/
/*                 </div>*/
/*             */
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*     <link rel="stylesheet" href="{{ asset('css/style/index.css') }}" type="text/css" />*/
/* {% endblock %}*/
/* */
/* {% block title %}Page d'accueil{% endblock %}*/
