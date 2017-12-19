<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3af4a99c1cb655a4825f0a6e01551d674b52d52b622e47d73e3845cb1496152a extends Twig_Template
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
        $__internal_54bedb005426fedc7707b396c390b322a86842d958ae235e61b43140ec23968d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54bedb005426fedc7707b396c390b322a86842d958ae235e61b43140ec23968d->enter($__internal_54bedb005426fedc7707b396c390b322a86842d958ae235e61b43140ec23968d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_1ce2f06c35e1b3f400d7ec4bf7ab49b829e3bfec1c872a867eeeadf5b761d0d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ce2f06c35e1b3f400d7ec4bf7ab49b829e3bfec1c872a867eeeadf5b761d0d2->enter($__internal_1ce2f06c35e1b3f400d7ec4bf7ab49b829e3bfec1c872a867eeeadf5b761d0d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54bedb005426fedc7707b396c390b322a86842d958ae235e61b43140ec23968d->leave($__internal_54bedb005426fedc7707b396c390b322a86842d958ae235e61b43140ec23968d_prof);

        
        $__internal_1ce2f06c35e1b3f400d7ec4bf7ab49b829e3bfec1c872a867eeeadf5b761d0d2->leave($__internal_1ce2f06c35e1b3f400d7ec4bf7ab49b829e3bfec1c872a867eeeadf5b761d0d2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cd3366aa2232d8b92be4bceeed740294566ac838920a0349e37bcdf934fb0558 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd3366aa2232d8b92be4bceeed740294566ac838920a0349e37bcdf934fb0558->enter($__internal_cd3366aa2232d8b92be4bceeed740294566ac838920a0349e37bcdf934fb0558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_736f7b2ce3bc50331562cfb127d52b4d5a4fc991d5550c5b0ff939656d40d165 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_736f7b2ce3bc50331562cfb127d52b4d5a4fc991d5550c5b0ff939656d40d165->enter($__internal_736f7b2ce3bc50331562cfb127d52b4d5a4fc991d5550c5b0ff939656d40d165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_736f7b2ce3bc50331562cfb127d52b4d5a4fc991d5550c5b0ff939656d40d165->leave($__internal_736f7b2ce3bc50331562cfb127d52b4d5a4fc991d5550c5b0ff939656d40d165_prof);

        
        $__internal_cd3366aa2232d8b92be4bceeed740294566ac838920a0349e37bcdf934fb0558->leave($__internal_cd3366aa2232d8b92be4bceeed740294566ac838920a0349e37bcdf934fb0558_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5d3db140656ceda2124ecafda04a9fc4136c15dcc05fd43ee11906905dea8a9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d3db140656ceda2124ecafda04a9fc4136c15dcc05fd43ee11906905dea8a9b->enter($__internal_5d3db140656ceda2124ecafda04a9fc4136c15dcc05fd43ee11906905dea8a9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7cbfa9d850f8049519451a348d5143b6cb54242d660b6b74551506d45be2a045 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cbfa9d850f8049519451a348d5143b6cb54242d660b6b74551506d45be2a045->enter($__internal_7cbfa9d850f8049519451a348d5143b6cb54242d660b6b74551506d45be2a045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7cbfa9d850f8049519451a348d5143b6cb54242d660b6b74551506d45be2a045->leave($__internal_7cbfa9d850f8049519451a348d5143b6cb54242d660b6b74551506d45be2a045_prof);

        
        $__internal_5d3db140656ceda2124ecafda04a9fc4136c15dcc05fd43ee11906905dea8a9b->leave($__internal_5d3db140656ceda2124ecafda04a9fc4136c15dcc05fd43ee11906905dea8a9b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4d6486e7dc11a420f0595549077fa696df71242eee6bad1711feb4d8c6f176e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d6486e7dc11a420f0595549077fa696df71242eee6bad1711feb4d8c6f176e6->enter($__internal_4d6486e7dc11a420f0595549077fa696df71242eee6bad1711feb4d8c6f176e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d6c6048017a820ec22e383ead3c401deeb3cbe20e6ef73411c7c5388b5c99900 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6c6048017a820ec22e383ead3c401deeb3cbe20e6ef73411c7c5388b5c99900->enter($__internal_d6c6048017a820ec22e383ead3c401deeb3cbe20e6ef73411c7c5388b5c99900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d6c6048017a820ec22e383ead3c401deeb3cbe20e6ef73411c7c5388b5c99900->leave($__internal_d6c6048017a820ec22e383ead3c401deeb3cbe20e6ef73411c7c5388b5c99900_prof);

        
        $__internal_4d6486e7dc11a420f0595549077fa696df71242eee6bad1711feb4d8c6f176e6->leave($__internal_4d6486e7dc11a420f0595549077fa696df71242eee6bad1711feb4d8c6f176e6_prof);

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
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/patricia/Desktop/kurzy_projekt/kurzy/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
