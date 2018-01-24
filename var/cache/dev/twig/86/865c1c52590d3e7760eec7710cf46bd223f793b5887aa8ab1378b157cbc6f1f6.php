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
        $__internal_8e23e9dec6510c9ee1e232ecb1e05581304ad55eb25616ce26b7faa31ff48585 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e23e9dec6510c9ee1e232ecb1e05581304ad55eb25616ce26b7faa31ff48585->enter($__internal_8e23e9dec6510c9ee1e232ecb1e05581304ad55eb25616ce26b7faa31ff48585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_c658e4e861a731a654d1502dfde577fe624db28547164ad64d20b1ea76085da9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c658e4e861a731a654d1502dfde577fe624db28547164ad64d20b1ea76085da9->enter($__internal_c658e4e861a731a654d1502dfde577fe624db28547164ad64d20b1ea76085da9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e23e9dec6510c9ee1e232ecb1e05581304ad55eb25616ce26b7faa31ff48585->leave($__internal_8e23e9dec6510c9ee1e232ecb1e05581304ad55eb25616ce26b7faa31ff48585_prof);

        
        $__internal_c658e4e861a731a654d1502dfde577fe624db28547164ad64d20b1ea76085da9->leave($__internal_c658e4e861a731a654d1502dfde577fe624db28547164ad64d20b1ea76085da9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c329b60e27f04036cd13bda61c8872a2d59beb128f3be26d08e5e7f6689e2ff2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c329b60e27f04036cd13bda61c8872a2d59beb128f3be26d08e5e7f6689e2ff2->enter($__internal_c329b60e27f04036cd13bda61c8872a2d59beb128f3be26d08e5e7f6689e2ff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7d7f2c95836c1e75cbb175d295f53930b771967a3d8213bdaad808d3896d6bae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d7f2c95836c1e75cbb175d295f53930b771967a3d8213bdaad808d3896d6bae->enter($__internal_7d7f2c95836c1e75cbb175d295f53930b771967a3d8213bdaad808d3896d6bae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7d7f2c95836c1e75cbb175d295f53930b771967a3d8213bdaad808d3896d6bae->leave($__internal_7d7f2c95836c1e75cbb175d295f53930b771967a3d8213bdaad808d3896d6bae_prof);

        
        $__internal_c329b60e27f04036cd13bda61c8872a2d59beb128f3be26d08e5e7f6689e2ff2->leave($__internal_c329b60e27f04036cd13bda61c8872a2d59beb128f3be26d08e5e7f6689e2ff2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_252ff7e5aab7b5367632f9c293e6512564125c51e28ed05b79a0972a7447fc0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_252ff7e5aab7b5367632f9c293e6512564125c51e28ed05b79a0972a7447fc0b->enter($__internal_252ff7e5aab7b5367632f9c293e6512564125c51e28ed05b79a0972a7447fc0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9714ffd89e58c8324eaa32207f8665d27554cfbeeadbd91f57a592e4c03c7893 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9714ffd89e58c8324eaa32207f8665d27554cfbeeadbd91f57a592e4c03c7893->enter($__internal_9714ffd89e58c8324eaa32207f8665d27554cfbeeadbd91f57a592e4c03c7893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9714ffd89e58c8324eaa32207f8665d27554cfbeeadbd91f57a592e4c03c7893->leave($__internal_9714ffd89e58c8324eaa32207f8665d27554cfbeeadbd91f57a592e4c03c7893_prof);

        
        $__internal_252ff7e5aab7b5367632f9c293e6512564125c51e28ed05b79a0972a7447fc0b->leave($__internal_252ff7e5aab7b5367632f9c293e6512564125c51e28ed05b79a0972a7447fc0b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_56d9c45ded8d0fe6ec5162dd5cb0169efc9fa530e450605355a8c33d98deea55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56d9c45ded8d0fe6ec5162dd5cb0169efc9fa530e450605355a8c33d98deea55->enter($__internal_56d9c45ded8d0fe6ec5162dd5cb0169efc9fa530e450605355a8c33d98deea55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_05d00575f53e25b77c764e38582a99eeb52329ac071a460781e7e58cdcc4d341 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05d00575f53e25b77c764e38582a99eeb52329ac071a460781e7e58cdcc4d341->enter($__internal_05d00575f53e25b77c764e38582a99eeb52329ac071a460781e7e58cdcc4d341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_05d00575f53e25b77c764e38582a99eeb52329ac071a460781e7e58cdcc4d341->leave($__internal_05d00575f53e25b77c764e38582a99eeb52329ac071a460781e7e58cdcc4d341_prof);

        
        $__internal_56d9c45ded8d0fe6ec5162dd5cb0169efc9fa530e450605355a8c33d98deea55->leave($__internal_56d9c45ded8d0fe6ec5162dd5cb0169efc9fa530e450605355a8c33d98deea55_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/home/andrea/Desktop/CaviarIT/Kurzy/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
