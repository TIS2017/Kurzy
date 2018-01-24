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
        $__internal_4d687650504b28a52029040506e251c810d7e0be639203260743075a6ddd4fe7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d687650504b28a52029040506e251c810d7e0be639203260743075a6ddd4fe7->enter($__internal_4d687650504b28a52029040506e251c810d7e0be639203260743075a6ddd4fe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_3ee7dec86aadaa21bc12832ee937aa02f16ae64523e06557871421e8362525da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ee7dec86aadaa21bc12832ee937aa02f16ae64523e06557871421e8362525da->enter($__internal_3ee7dec86aadaa21bc12832ee937aa02f16ae64523e06557871421e8362525da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d687650504b28a52029040506e251c810d7e0be639203260743075a6ddd4fe7->leave($__internal_4d687650504b28a52029040506e251c810d7e0be639203260743075a6ddd4fe7_prof);

        
        $__internal_3ee7dec86aadaa21bc12832ee937aa02f16ae64523e06557871421e8362525da->leave($__internal_3ee7dec86aadaa21bc12832ee937aa02f16ae64523e06557871421e8362525da_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6ee60eb1ffd00d864ed630f236014f13932725361fd708203b059e4ec7fe9e50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ee60eb1ffd00d864ed630f236014f13932725361fd708203b059e4ec7fe9e50->enter($__internal_6ee60eb1ffd00d864ed630f236014f13932725361fd708203b059e4ec7fe9e50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_db306c8457183e05234bc838cf7ed6628578ce26689c0edb8af9d37bb2ffde91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db306c8457183e05234bc838cf7ed6628578ce26689c0edb8af9d37bb2ffde91->enter($__internal_db306c8457183e05234bc838cf7ed6628578ce26689c0edb8af9d37bb2ffde91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_db306c8457183e05234bc838cf7ed6628578ce26689c0edb8af9d37bb2ffde91->leave($__internal_db306c8457183e05234bc838cf7ed6628578ce26689c0edb8af9d37bb2ffde91_prof);

        
        $__internal_6ee60eb1ffd00d864ed630f236014f13932725361fd708203b059e4ec7fe9e50->leave($__internal_6ee60eb1ffd00d864ed630f236014f13932725361fd708203b059e4ec7fe9e50_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_75b34f8a44ea547af0ce8a93ab8dcb48303ea271a624d3e74d83c9c54869842c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75b34f8a44ea547af0ce8a93ab8dcb48303ea271a624d3e74d83c9c54869842c->enter($__internal_75b34f8a44ea547af0ce8a93ab8dcb48303ea271a624d3e74d83c9c54869842c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1a8ed004ac9fdbaacdc2719b068c99e7846bb3dee3577294a040420d79aa7138 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a8ed004ac9fdbaacdc2719b068c99e7846bb3dee3577294a040420d79aa7138->enter($__internal_1a8ed004ac9fdbaacdc2719b068c99e7846bb3dee3577294a040420d79aa7138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1a8ed004ac9fdbaacdc2719b068c99e7846bb3dee3577294a040420d79aa7138->leave($__internal_1a8ed004ac9fdbaacdc2719b068c99e7846bb3dee3577294a040420d79aa7138_prof);

        
        $__internal_75b34f8a44ea547af0ce8a93ab8dcb48303ea271a624d3e74d83c9c54869842c->leave($__internal_75b34f8a44ea547af0ce8a93ab8dcb48303ea271a624d3e74d83c9c54869842c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_944b318d173e923462273188d50a9f6ddb155a07507a222af1052ca0a7d96b63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_944b318d173e923462273188d50a9f6ddb155a07507a222af1052ca0a7d96b63->enter($__internal_944b318d173e923462273188d50a9f6ddb155a07507a222af1052ca0a7d96b63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ed78e09dfd8c55c5c882bbeea00877ab718b5884c78be5fe0a81848ce4a769e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed78e09dfd8c55c5c882bbeea00877ab718b5884c78be5fe0a81848ce4a769e0->enter($__internal_ed78e09dfd8c55c5c882bbeea00877ab718b5884c78be5fe0a81848ce4a769e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ed78e09dfd8c55c5c882bbeea00877ab718b5884c78be5fe0a81848ce4a769e0->leave($__internal_ed78e09dfd8c55c5c882bbeea00877ab718b5884c78be5fe0a81848ce4a769e0_prof);

        
        $__internal_944b318d173e923462273188d50a9f6ddb155a07507a222af1052ca0a7d96b63->leave($__internal_944b318d173e923462273188d50a9f6ddb155a07507a222af1052ca0a7d96b63_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/home/misko/Documents/git/Kurzy/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
