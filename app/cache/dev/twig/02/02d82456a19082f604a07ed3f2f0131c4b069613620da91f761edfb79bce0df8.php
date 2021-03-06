<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_28d510d056b0f8045a09b9bc279860c770076a170cea2c18e1addbb7d4dceab5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_675cf47a6b94dbd34450d76f22d6433ef0f728764b6f31dd26c085d9da1c1c54 = $this->env->getExtension("native_profiler");
        $__internal_675cf47a6b94dbd34450d76f22d6433ef0f728764b6f31dd26c085d9da1c1c54->enter($__internal_675cf47a6b94dbd34450d76f22d6433ef0f728764b6f31dd26c085d9da1c1c54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_675cf47a6b94dbd34450d76f22d6433ef0f728764b6f31dd26c085d9da1c1c54->leave($__internal_675cf47a6b94dbd34450d76f22d6433ef0f728764b6f31dd26c085d9da1c1c54_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a8833ccd69bff5e383a60ace59097b9d6a25e542cab2d75c2397dc146588d779 = $this->env->getExtension("native_profiler");
        $__internal_a8833ccd69bff5e383a60ace59097b9d6a25e542cab2d75c2397dc146588d779->enter($__internal_a8833ccd69bff5e383a60ace59097b9d6a25e542cab2d75c2397dc146588d779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_a8833ccd69bff5e383a60ace59097b9d6a25e542cab2d75c2397dc146588d779->leave($__internal_a8833ccd69bff5e383a60ace59097b9d6a25e542cab2d75c2397dc146588d779_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_68f3504c6467a2195af441049494c0a7bcafabda00f8e1c97855f66a3f21ac56 = $this->env->getExtension("native_profiler");
        $__internal_68f3504c6467a2195af441049494c0a7bcafabda00f8e1c97855f66a3f21ac56->enter($__internal_68f3504c6467a2195af441049494c0a7bcafabda00f8e1c97855f66a3f21ac56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_68f3504c6467a2195af441049494c0a7bcafabda00f8e1c97855f66a3f21ac56->leave($__internal_68f3504c6467a2195af441049494c0a7bcafabda00f8e1c97855f66a3f21ac56_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f5cf2bad72f75e3ba949f02fb2ae31e15d2f5470ad078ed29a314852c7bc73aa = $this->env->getExtension("native_profiler");
        $__internal_f5cf2bad72f75e3ba949f02fb2ae31e15d2f5470ad078ed29a314852c7bc73aa->enter($__internal_f5cf2bad72f75e3ba949f02fb2ae31e15d2f5470ad078ed29a314852c7bc73aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_f5cf2bad72f75e3ba949f02fb2ae31e15d2f5470ad078ed29a314852c7bc73aa->leave($__internal_f5cf2bad72f75e3ba949f02fb2ae31e15d2f5470ad078ed29a314852c7bc73aa_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
