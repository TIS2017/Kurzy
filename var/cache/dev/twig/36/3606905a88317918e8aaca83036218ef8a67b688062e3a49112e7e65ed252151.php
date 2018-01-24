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
        $__internal_d4a156b2f1b0f30c367c08e0c14b150c6c401093c33ba85b16223ed0b6f32636 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4a156b2f1b0f30c367c08e0c14b150c6c401093c33ba85b16223ed0b6f32636->enter($__internal_d4a156b2f1b0f30c367c08e0c14b150c6c401093c33ba85b16223ed0b6f32636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_eec157c79182d46899f8bb2cb143d1557757f417409e8eec1807f8d3ce44df7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eec157c79182d46899f8bb2cb143d1557757f417409e8eec1807f8d3ce44df7f->enter($__internal_eec157c79182d46899f8bb2cb143d1557757f417409e8eec1807f8d3ce44df7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4a156b2f1b0f30c367c08e0c14b150c6c401093c33ba85b16223ed0b6f32636->leave($__internal_d4a156b2f1b0f30c367c08e0c14b150c6c401093c33ba85b16223ed0b6f32636_prof);

        
        $__internal_eec157c79182d46899f8bb2cb143d1557757f417409e8eec1807f8d3ce44df7f->leave($__internal_eec157c79182d46899f8bb2cb143d1557757f417409e8eec1807f8d3ce44df7f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_71a92008dfc28cbbcdc4ac51dfb08f3d49e520977869132f5f82f3f1542aad1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71a92008dfc28cbbcdc4ac51dfb08f3d49e520977869132f5f82f3f1542aad1a->enter($__internal_71a92008dfc28cbbcdc4ac51dfb08f3d49e520977869132f5f82f3f1542aad1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_56c27d692699aa1001ecb08914dd7e7e783b2260fda6ac1070a721b588ccacac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56c27d692699aa1001ecb08914dd7e7e783b2260fda6ac1070a721b588ccacac->enter($__internal_56c27d692699aa1001ecb08914dd7e7e783b2260fda6ac1070a721b588ccacac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_56c27d692699aa1001ecb08914dd7e7e783b2260fda6ac1070a721b588ccacac->leave($__internal_56c27d692699aa1001ecb08914dd7e7e783b2260fda6ac1070a721b588ccacac_prof);

        
        $__internal_71a92008dfc28cbbcdc4ac51dfb08f3d49e520977869132f5f82f3f1542aad1a->leave($__internal_71a92008dfc28cbbcdc4ac51dfb08f3d49e520977869132f5f82f3f1542aad1a_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7dd71bccea6b4649544f846f128f3d97689da7a25d27f32c70a37500fcb391f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dd71bccea6b4649544f846f128f3d97689da7a25d27f32c70a37500fcb391f8->enter($__internal_7dd71bccea6b4649544f846f128f3d97689da7a25d27f32c70a37500fcb391f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2a457dc09206d6943a4432e93b216b667986a30925d8220c6a5ce0940cdb21c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a457dc09206d6943a4432e93b216b667986a30925d8220c6a5ce0940cdb21c8->enter($__internal_2a457dc09206d6943a4432e93b216b667986a30925d8220c6a5ce0940cdb21c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_2a457dc09206d6943a4432e93b216b667986a30925d8220c6a5ce0940cdb21c8->leave($__internal_2a457dc09206d6943a4432e93b216b667986a30925d8220c6a5ce0940cdb21c8_prof);

        
        $__internal_7dd71bccea6b4649544f846f128f3d97689da7a25d27f32c70a37500fcb391f8->leave($__internal_7dd71bccea6b4649544f846f128f3d97689da7a25d27f32c70a37500fcb391f8_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5a69215c87d4cc51b89de8bbcd6c0b08875c8752b6da22a2812ac0c5d4f8d605 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a69215c87d4cc51b89de8bbcd6c0b08875c8752b6da22a2812ac0c5d4f8d605->enter($__internal_5a69215c87d4cc51b89de8bbcd6c0b08875c8752b6da22a2812ac0c5d4f8d605_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1123a038e38ebcfc0f5a9e717118e31957a9a30af56f01f109a254eb543d1986 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1123a038e38ebcfc0f5a9e717118e31957a9a30af56f01f109a254eb543d1986->enter($__internal_1123a038e38ebcfc0f5a9e717118e31957a9a30af56f01f109a254eb543d1986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_1123a038e38ebcfc0f5a9e717118e31957a9a30af56f01f109a254eb543d1986->leave($__internal_1123a038e38ebcfc0f5a9e717118e31957a9a30af56f01f109a254eb543d1986_prof);

        
        $__internal_5a69215c87d4cc51b89de8bbcd6c0b08875c8752b6da22a2812ac0c5d4f8d605->leave($__internal_5a69215c87d4cc51b89de8bbcd6c0b08875c8752b6da22a2812ac0c5d4f8d605_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/home/misko/Documents/git/Kurzy/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
