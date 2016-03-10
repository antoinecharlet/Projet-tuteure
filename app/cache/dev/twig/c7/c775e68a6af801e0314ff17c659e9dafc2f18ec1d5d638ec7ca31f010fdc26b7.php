<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_49324c12473cd0e3ad6a51053ec5a6c559b9b3f6347715199c39be384d21258c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2baa329355d54ec4a7c8881f4cb6a44cf7579814446ec548cdeb4d7ebe8a5d6b = $this->env->getExtension("native_profiler");
        $__internal_2baa329355d54ec4a7c8881f4cb6a44cf7579814446ec548cdeb4d7ebe8a5d6b->enter($__internal_2baa329355d54ec4a7c8881f4cb6a44cf7579814446ec548cdeb4d7ebe8a5d6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2baa329355d54ec4a7c8881f4cb6a44cf7579814446ec548cdeb4d7ebe8a5d6b->leave($__internal_2baa329355d54ec4a7c8881f4cb6a44cf7579814446ec548cdeb4d7ebe8a5d6b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_15502a2a6114d3aa0d17f4a62a04bcabaa1545b0e78fe39ae007c4ff7a6c11a8 = $this->env->getExtension("native_profiler");
        $__internal_15502a2a6114d3aa0d17f4a62a04bcabaa1545b0e78fe39ae007c4ff7a6c11a8->enter($__internal_15502a2a6114d3aa0d17f4a62a04bcabaa1545b0e78fe39ae007c4ff7a6c11a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_15502a2a6114d3aa0d17f4a62a04bcabaa1545b0e78fe39ae007c4ff7a6c11a8->leave($__internal_15502a2a6114d3aa0d17f4a62a04bcabaa1545b0e78fe39ae007c4ff7a6c11a8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_43c34ab70a75067cf907a0cb727976c9b702984f4c622344ca44ad454ae0bfa1 = $this->env->getExtension("native_profiler");
        $__internal_43c34ab70a75067cf907a0cb727976c9b702984f4c622344ca44ad454ae0bfa1->enter($__internal_43c34ab70a75067cf907a0cb727976c9b702984f4c622344ca44ad454ae0bfa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_43c34ab70a75067cf907a0cb727976c9b702984f4c622344ca44ad454ae0bfa1->leave($__internal_43c34ab70a75067cf907a0cb727976c9b702984f4c622344ca44ad454ae0bfa1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f2478db0d540b6c8a7f6cbc29d196cd8bb9ca6017ebb4d27737f0a5d56774697 = $this->env->getExtension("native_profiler");
        $__internal_f2478db0d540b6c8a7f6cbc29d196cd8bb9ca6017ebb4d27737f0a5d56774697->enter($__internal_f2478db0d540b6c8a7f6cbc29d196cd8bb9ca6017ebb4d27737f0a5d56774697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f2478db0d540b6c8a7f6cbc29d196cd8bb9ca6017ebb4d27737f0a5d56774697->leave($__internal_f2478db0d540b6c8a7f6cbc29d196cd8bb9ca6017ebb4d27737f0a5d56774697_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
