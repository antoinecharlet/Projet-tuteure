<?php

/* MainBundle:Default:index.html.twig */
class __TwigTemplate_705136c73aebd5b118dbdc34427389f8fd29f4524790a7b4df2b470e0a4178a4 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
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
    }

    // line 23
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 24
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style/index.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
    }

    // line 27
    public function block_title($context, array $blocks = array())
    {
        echo "Page d'accueil";
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
        return array (  64 => 27,  57 => 24,  54 => 23,  33 => 4,  30 => 3,  11 => 1,);
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
