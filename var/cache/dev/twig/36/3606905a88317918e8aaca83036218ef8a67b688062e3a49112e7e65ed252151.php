<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_cf162f25fa3b6f82cee69ba6f883fb7c82621dcf246f7c18429b115a3511835f extends Twig_Template
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
        $__internal_10d9e0389735c5a66312bd370f4c5a5d0b3e39f16a35964408540d624de54ef9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10d9e0389735c5a66312bd370f4c5a5d0b3e39f16a35964408540d624de54ef9->enter($__internal_10d9e0389735c5a66312bd370f4c5a5d0b3e39f16a35964408540d624de54ef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_6e5d3361444cbaf11cca4c00ec7c59d045901170283f27d6dbecf26261c24165 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e5d3361444cbaf11cca4c00ec7c59d045901170283f27d6dbecf26261c24165->enter($__internal_6e5d3361444cbaf11cca4c00ec7c59d045901170283f27d6dbecf26261c24165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10d9e0389735c5a66312bd370f4c5a5d0b3e39f16a35964408540d624de54ef9->leave($__internal_10d9e0389735c5a66312bd370f4c5a5d0b3e39f16a35964408540d624de54ef9_prof);

        
        $__internal_6e5d3361444cbaf11cca4c00ec7c59d045901170283f27d6dbecf26261c24165->leave($__internal_6e5d3361444cbaf11cca4c00ec7c59d045901170283f27d6dbecf26261c24165_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a22e46a1c9184e3df633335af96fc8ebc2f5274136bba9d1690d52b65aaa6ab3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a22e46a1c9184e3df633335af96fc8ebc2f5274136bba9d1690d52b65aaa6ab3->enter($__internal_a22e46a1c9184e3df633335af96fc8ebc2f5274136bba9d1690d52b65aaa6ab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6de3c2947d9916179d80ffe85efe22489c3a764736bfbabfad14b94f591c6dfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6de3c2947d9916179d80ffe85efe22489c3a764736bfbabfad14b94f591c6dfa->enter($__internal_6de3c2947d9916179d80ffe85efe22489c3a764736bfbabfad14b94f591c6dfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_6de3c2947d9916179d80ffe85efe22489c3a764736bfbabfad14b94f591c6dfa->leave($__internal_6de3c2947d9916179d80ffe85efe22489c3a764736bfbabfad14b94f591c6dfa_prof);

        
        $__internal_a22e46a1c9184e3df633335af96fc8ebc2f5274136bba9d1690d52b65aaa6ab3->leave($__internal_a22e46a1c9184e3df633335af96fc8ebc2f5274136bba9d1690d52b65aaa6ab3_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9945572edee9938f2df702da86bba0d1b5ed487e120da56fadbc0ab32b914bf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9945572edee9938f2df702da86bba0d1b5ed487e120da56fadbc0ab32b914bf2->enter($__internal_9945572edee9938f2df702da86bba0d1b5ed487e120da56fadbc0ab32b914bf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_eb22c195e02fcd9ac060d8dd503e71d2a20e46baaf7ae778df325463a48d0bbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb22c195e02fcd9ac060d8dd503e71d2a20e46baaf7ae778df325463a48d0bbd->enter($__internal_eb22c195e02fcd9ac060d8dd503e71d2a20e46baaf7ae778df325463a48d0bbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_eb22c195e02fcd9ac060d8dd503e71d2a20e46baaf7ae778df325463a48d0bbd->leave($__internal_eb22c195e02fcd9ac060d8dd503e71d2a20e46baaf7ae778df325463a48d0bbd_prof);

        
        $__internal_9945572edee9938f2df702da86bba0d1b5ed487e120da56fadbc0ab32b914bf2->leave($__internal_9945572edee9938f2df702da86bba0d1b5ed487e120da56fadbc0ab32b914bf2_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_da3ea57afd66c37f4037588d4101611d48095c1a674f1ec10b116a6afcd0556a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da3ea57afd66c37f4037588d4101611d48095c1a674f1ec10b116a6afcd0556a->enter($__internal_da3ea57afd66c37f4037588d4101611d48095c1a674f1ec10b116a6afcd0556a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_48e4ab8ed1fd3770b86fcff1f498cfac7374791eab0e1b75be2a4a89c2cf2c1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48e4ab8ed1fd3770b86fcff1f498cfac7374791eab0e1b75be2a4a89c2cf2c1b->enter($__internal_48e4ab8ed1fd3770b86fcff1f498cfac7374791eab0e1b75be2a4a89c2cf2c1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_48e4ab8ed1fd3770b86fcff1f498cfac7374791eab0e1b75be2a4a89c2cf2c1b->leave($__internal_48e4ab8ed1fd3770b86fcff1f498cfac7374791eab0e1b75be2a4a89c2cf2c1b_prof);

        
        $__internal_da3ea57afd66c37f4037588d4101611d48095c1a674f1ec10b116a6afcd0556a->leave($__internal_da3ea57afd66c37f4037588d4101611d48095c1a674f1ec10b116a6afcd0556a_prof);

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
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/andrea/Desktop/CaviarIT/Kurzy/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
