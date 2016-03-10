<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_5decce7c7901f794cdb3735b82cc13407ebb10d92fce264cb4cf93948c74f42a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f617a0c34bba8bace93a4bb99c3075841ca000104314daba0dd903bccca71a00 = $this->env->getExtension("native_profiler");
        $__internal_f617a0c34bba8bace93a4bb99c3075841ca000104314daba0dd903bccca71a00->enter($__internal_f617a0c34bba8bace93a4bb99c3075841ca000104314daba0dd903bccca71a00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f617a0c34bba8bace93a4bb99c3075841ca000104314daba0dd903bccca71a00->leave($__internal_f617a0c34bba8bace93a4bb99c3075841ca000104314daba0dd903bccca71a00_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9b52e2a358b73ac4bfd7d78635a8edd55bae0f72f924ccf53a64c6a5d336a0bf = $this->env->getExtension("native_profiler");
        $__internal_9b52e2a358b73ac4bfd7d78635a8edd55bae0f72f924ccf53a64c6a5d336a0bf->enter($__internal_9b52e2a358b73ac4bfd7d78635a8edd55bae0f72f924ccf53a64c6a5d336a0bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9b52e2a358b73ac4bfd7d78635a8edd55bae0f72f924ccf53a64c6a5d336a0bf->leave($__internal_9b52e2a358b73ac4bfd7d78635a8edd55bae0f72f924ccf53a64c6a5d336a0bf_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2f76fcf33e56d2ff34120f10116d6c19d781eb3cdb5badc3fd79541322409a8a = $this->env->getExtension("native_profiler");
        $__internal_2f76fcf33e56d2ff34120f10116d6c19d781eb3cdb5badc3fd79541322409a8a->enter($__internal_2f76fcf33e56d2ff34120f10116d6c19d781eb3cdb5badc3fd79541322409a8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2f76fcf33e56d2ff34120f10116d6c19d781eb3cdb5badc3fd79541322409a8a->leave($__internal_2f76fcf33e56d2ff34120f10116d6c19d781eb3cdb5badc3fd79541322409a8a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0bdc2cd97834c7d7ccdee28b5e2a6560f7740931029fb5ad1e807fa53e3467bd = $this->env->getExtension("native_profiler");
        $__internal_0bdc2cd97834c7d7ccdee28b5e2a6560f7740931029fb5ad1e807fa53e3467bd->enter($__internal_0bdc2cd97834c7d7ccdee28b5e2a6560f7740931029fb5ad1e807fa53e3467bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_0bdc2cd97834c7d7ccdee28b5e2a6560f7740931029fb5ad1e807fa53e3467bd->leave($__internal_0bdc2cd97834c7d7ccdee28b5e2a6560f7740931029fb5ad1e807fa53e3467bd_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
