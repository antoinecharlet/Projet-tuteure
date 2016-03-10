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
        $__internal_72ad4f7fa99796a8b558093cb3701dd9a367422ebe172654b010069749bebd89 = $this->env->getExtension("native_profiler");
        $__internal_72ad4f7fa99796a8b558093cb3701dd9a367422ebe172654b010069749bebd89->enter($__internal_72ad4f7fa99796a8b558093cb3701dd9a367422ebe172654b010069749bebd89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72ad4f7fa99796a8b558093cb3701dd9a367422ebe172654b010069749bebd89->leave($__internal_72ad4f7fa99796a8b558093cb3701dd9a367422ebe172654b010069749bebd89_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_15b166fe5656b8981f533a2269560d5ca6327ea90f22fcb8c4699a8fea08298b = $this->env->getExtension("native_profiler");
        $__internal_15b166fe5656b8981f533a2269560d5ca6327ea90f22fcb8c4699a8fea08298b->enter($__internal_15b166fe5656b8981f533a2269560d5ca6327ea90f22fcb8c4699a8fea08298b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div id=\"wrapper\">
        <div class=\"container margTop50\">
            
                <div class=\"container col-xs-5 block\">
                    <h1>Je suis Étudiant/Afdernant</h1>
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
        
        $__internal_15b166fe5656b8981f533a2269560d5ca6327ea90f22fcb8c4699a8fea08298b->leave($__internal_15b166fe5656b8981f533a2269560d5ca6327ea90f22fcb8c4699a8fea08298b_prof);

    }

    // line 23
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e9df41a6f2c9913e1cab356010bab2b67d4dbf0e1f176da3cbfc09b9d84411ff = $this->env->getExtension("native_profiler");
        $__internal_e9df41a6f2c9913e1cab356010bab2b67d4dbf0e1f176da3cbfc09b9d84411ff->enter($__internal_e9df41a6f2c9913e1cab356010bab2b67d4dbf0e1f176da3cbfc09b9d84411ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e9df41a6f2c9913e1cab356010bab2b67d4dbf0e1f176da3cbfc09b9d84411ff->leave($__internal_e9df41a6f2c9913e1cab356010bab2b67d4dbf0e1f176da3cbfc09b9d84411ff_prof);

    }

    // line 26
    public function block_title($context, array $blocks = array())
    {
        $__internal_748dc494ef9cf377ad58c71da4c91265fe8dcb12e80365b0516c0263e6f8ca24 = $this->env->getExtension("native_profiler");
        $__internal_748dc494ef9cf377ad58c71da4c91265fe8dcb12e80365b0516c0263e6f8ca24->enter($__internal_748dc494ef9cf377ad58c71da4c91265fe8dcb12e80365b0516c0263e6f8ca24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Page d'accueil";
        
        $__internal_748dc494ef9cf377ad58c71da4c91265fe8dcb12e80365b0516c0263e6f8ca24->leave($__internal_748dc494ef9cf377ad58c71da4c91265fe8dcb12e80365b0516c0263e6f8ca24_prof);

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
        return array (  77 => 26,  66 => 23,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div id="wrapper">*/
/*         <div class="container margTop50">*/
/*             */
/*                 <div class="container col-xs-5 block">*/
/*                     <h1>Je suis Étudiant/Afdernant</h1>*/
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
/* {% endblock %}*/
/* */
/* {% block title %}Page d'accueil{% endblock %}*/
