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
        $__internal_a6b89b3b135c1763dcedafe83ac4d4a04bf0344f5d31b01f701d87d50e4056e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6b89b3b135c1763dcedafe83ac4d4a04bf0344f5d31b01f701d87d50e4056e4->enter($__internal_a6b89b3b135c1763dcedafe83ac4d4a04bf0344f5d31b01f701d87d50e4056e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_145c14e13651a0b76b8efa7e652552220a0c0a601772a17e884d115243fa9ea7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_145c14e13651a0b76b8efa7e652552220a0c0a601772a17e884d115243fa9ea7->enter($__internal_145c14e13651a0b76b8efa7e652552220a0c0a601772a17e884d115243fa9ea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6b89b3b135c1763dcedafe83ac4d4a04bf0344f5d31b01f701d87d50e4056e4->leave($__internal_a6b89b3b135c1763dcedafe83ac4d4a04bf0344f5d31b01f701d87d50e4056e4_prof);

        
        $__internal_145c14e13651a0b76b8efa7e652552220a0c0a601772a17e884d115243fa9ea7->leave($__internal_145c14e13651a0b76b8efa7e652552220a0c0a601772a17e884d115243fa9ea7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e31ddf0fad53afa5e977490eda0dd7e91b64acdee674facb862fb1024959f966 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e31ddf0fad53afa5e977490eda0dd7e91b64acdee674facb862fb1024959f966->enter($__internal_e31ddf0fad53afa5e977490eda0dd7e91b64acdee674facb862fb1024959f966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a90a386a0ad81074fa81e553428f6049ed03bf377a41f5a90cbc78ff6ec698ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a90a386a0ad81074fa81e553428f6049ed03bf377a41f5a90cbc78ff6ec698ac->enter($__internal_a90a386a0ad81074fa81e553428f6049ed03bf377a41f5a90cbc78ff6ec698ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_a90a386a0ad81074fa81e553428f6049ed03bf377a41f5a90cbc78ff6ec698ac->leave($__internal_a90a386a0ad81074fa81e553428f6049ed03bf377a41f5a90cbc78ff6ec698ac_prof);

        
        $__internal_e31ddf0fad53afa5e977490eda0dd7e91b64acdee674facb862fb1024959f966->leave($__internal_e31ddf0fad53afa5e977490eda0dd7e91b64acdee674facb862fb1024959f966_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8eab0fd2deb6c30dca13c02286cd9d69754a6c7f03db017ce0292176356bbb51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8eab0fd2deb6c30dca13c02286cd9d69754a6c7f03db017ce0292176356bbb51->enter($__internal_8eab0fd2deb6c30dca13c02286cd9d69754a6c7f03db017ce0292176356bbb51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3c167e02e1883c1080f69ee43242b0222fbef84aa8e9722a2d824a92fd4073c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c167e02e1883c1080f69ee43242b0222fbef84aa8e9722a2d824a92fd4073c7->enter($__internal_3c167e02e1883c1080f69ee43242b0222fbef84aa8e9722a2d824a92fd4073c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_3c167e02e1883c1080f69ee43242b0222fbef84aa8e9722a2d824a92fd4073c7->leave($__internal_3c167e02e1883c1080f69ee43242b0222fbef84aa8e9722a2d824a92fd4073c7_prof);

        
        $__internal_8eab0fd2deb6c30dca13c02286cd9d69754a6c7f03db017ce0292176356bbb51->leave($__internal_8eab0fd2deb6c30dca13c02286cd9d69754a6c7f03db017ce0292176356bbb51_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_88e46bde2113991f029d6513a26a16690bbd669485f5d2de4871ef2ee01b35a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88e46bde2113991f029d6513a26a16690bbd669485f5d2de4871ef2ee01b35a2->enter($__internal_88e46bde2113991f029d6513a26a16690bbd669485f5d2de4871ef2ee01b35a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_afd33e3ed330a8efee3d4dd69e6b6cfdaf58858e4468829545ba702abee300b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afd33e3ed330a8efee3d4dd69e6b6cfdaf58858e4468829545ba702abee300b9->enter($__internal_afd33e3ed330a8efee3d4dd69e6b6cfdaf58858e4468829545ba702abee300b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_afd33e3ed330a8efee3d4dd69e6b6cfdaf58858e4468829545ba702abee300b9->leave($__internal_afd33e3ed330a8efee3d4dd69e6b6cfdaf58858e4468829545ba702abee300b9_prof);

        
        $__internal_88e46bde2113991f029d6513a26a16690bbd669485f5d2de4871ef2ee01b35a2->leave($__internal_88e46bde2113991f029d6513a26a16690bbd669485f5d2de4871ef2ee01b35a2_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/home/patricia/Desktop/kurzy_projekt/kurzy/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
