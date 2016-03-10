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
        $__internal_9939b0e47d39a33d924ef17014ffed1a5552dea8fab00c649bf4769083920bf6 = $this->env->getExtension("native_profiler");
        $__internal_9939b0e47d39a33d924ef17014ffed1a5552dea8fab00c649bf4769083920bf6->enter($__internal_9939b0e47d39a33d924ef17014ffed1a5552dea8fab00c649bf4769083920bf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9939b0e47d39a33d924ef17014ffed1a5552dea8fab00c649bf4769083920bf6->leave($__internal_9939b0e47d39a33d924ef17014ffed1a5552dea8fab00c649bf4769083920bf6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c4f02ecfce5400016db554d5e77e77869373bdfa1ab1e71b2b4d094cae9e9e0a = $this->env->getExtension("native_profiler");
        $__internal_c4f02ecfce5400016db554d5e77e77869373bdfa1ab1e71b2b4d094cae9e9e0a->enter($__internal_c4f02ecfce5400016db554d5e77e77869373bdfa1ab1e71b2b4d094cae9e9e0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c4f02ecfce5400016db554d5e77e77869373bdfa1ab1e71b2b4d094cae9e9e0a->leave($__internal_c4f02ecfce5400016db554d5e77e77869373bdfa1ab1e71b2b4d094cae9e9e0a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7dc03e788a95ed6b931a90c1094968b4e6ba79d8031647b4eeb3c01e46479098 = $this->env->getExtension("native_profiler");
        $__internal_7dc03e788a95ed6b931a90c1094968b4e6ba79d8031647b4eeb3c01e46479098->enter($__internal_7dc03e788a95ed6b931a90c1094968b4e6ba79d8031647b4eeb3c01e46479098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7dc03e788a95ed6b931a90c1094968b4e6ba79d8031647b4eeb3c01e46479098->leave($__internal_7dc03e788a95ed6b931a90c1094968b4e6ba79d8031647b4eeb3c01e46479098_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e33620cc15b26cabcd9050e1e9e37d74ba929e491e7f9d7c6a55b7cfc156ed13 = $this->env->getExtension("native_profiler");
        $__internal_e33620cc15b26cabcd9050e1e9e37d74ba929e491e7f9d7c6a55b7cfc156ed13->enter($__internal_e33620cc15b26cabcd9050e1e9e37d74ba929e491e7f9d7c6a55b7cfc156ed13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e33620cc15b26cabcd9050e1e9e37d74ba929e491e7f9d7c6a55b7cfc156ed13->leave($__internal_e33620cc15b26cabcd9050e1e9e37d74ba929e491e7f9d7c6a55b7cfc156ed13_prof);

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
