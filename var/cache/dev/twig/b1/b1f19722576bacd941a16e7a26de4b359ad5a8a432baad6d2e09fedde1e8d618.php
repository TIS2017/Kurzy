<?php

/* base.html.twig */
class __TwigTemplate_e7512925d8fb00307cc049a1006d437f3028b1723b810d6e2acede88a13e1891 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_944c5302619ec01cd88ca1a1ea360f3fcc92ea1121fd117e4c8f663b4e2edff2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_944c5302619ec01cd88ca1a1ea360f3fcc92ea1121fd117e4c8f663b4e2edff2->enter($__internal_944c5302619ec01cd88ca1a1ea360f3fcc92ea1121fd117e4c8f663b4e2edff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_567591a6e5f12656a9db3e4f132fe1ba968df9d22e38be7d7fa4d8127765189f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_567591a6e5f12656a9db3e4f132fe1ba968df9d22e38be7d7fa4d8127765189f->enter($__internal_567591a6e5f12656a9db3e4f132fe1ba968df9d22e38be7d7fa4d8127765189f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_944c5302619ec01cd88ca1a1ea360f3fcc92ea1121fd117e4c8f663b4e2edff2->leave($__internal_944c5302619ec01cd88ca1a1ea360f3fcc92ea1121fd117e4c8f663b4e2edff2_prof);

        
        $__internal_567591a6e5f12656a9db3e4f132fe1ba968df9d22e38be7d7fa4d8127765189f->leave($__internal_567591a6e5f12656a9db3e4f132fe1ba968df9d22e38be7d7fa4d8127765189f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_47aba975f651b26d07f26afb9db6c7ea6abdcdcd9a3550cfd4313a412f980b99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47aba975f651b26d07f26afb9db6c7ea6abdcdcd9a3550cfd4313a412f980b99->enter($__internal_47aba975f651b26d07f26afb9db6c7ea6abdcdcd9a3550cfd4313a412f980b99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9165541fd84bd39549481c7ccc691f56b3b0729b5661a6d595ed07c3bac62e28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9165541fd84bd39549481c7ccc691f56b3b0729b5661a6d595ed07c3bac62e28->enter($__internal_9165541fd84bd39549481c7ccc691f56b3b0729b5661a6d595ed07c3bac62e28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_9165541fd84bd39549481c7ccc691f56b3b0729b5661a6d595ed07c3bac62e28->leave($__internal_9165541fd84bd39549481c7ccc691f56b3b0729b5661a6d595ed07c3bac62e28_prof);

        
        $__internal_47aba975f651b26d07f26afb9db6c7ea6abdcdcd9a3550cfd4313a412f980b99->leave($__internal_47aba975f651b26d07f26afb9db6c7ea6abdcdcd9a3550cfd4313a412f980b99_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c4c36b08ccb31390d915e234a7c2f6421b0ec8557865e098cc6004409b68ebaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4c36b08ccb31390d915e234a7c2f6421b0ec8557865e098cc6004409b68ebaf->enter($__internal_c4c36b08ccb31390d915e234a7c2f6421b0ec8557865e098cc6004409b68ebaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c3ff570c3e3d30d3f4469c7563136b127d4d0b98e181f46523b1368cf6f8b156 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3ff570c3e3d30d3f4469c7563136b127d4d0b98e181f46523b1368cf6f8b156->enter($__internal_c3ff570c3e3d30d3f4469c7563136b127d4d0b98e181f46523b1368cf6f8b156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c3ff570c3e3d30d3f4469c7563136b127d4d0b98e181f46523b1368cf6f8b156->leave($__internal_c3ff570c3e3d30d3f4469c7563136b127d4d0b98e181f46523b1368cf6f8b156_prof);

        
        $__internal_c4c36b08ccb31390d915e234a7c2f6421b0ec8557865e098cc6004409b68ebaf->leave($__internal_c4c36b08ccb31390d915e234a7c2f6421b0ec8557865e098cc6004409b68ebaf_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_0822116e61df200e56ca66534210b3c47fa3a9ee5d0870368a13bbc6cb6eb4b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0822116e61df200e56ca66534210b3c47fa3a9ee5d0870368a13bbc6cb6eb4b7->enter($__internal_0822116e61df200e56ca66534210b3c47fa3a9ee5d0870368a13bbc6cb6eb4b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_988634d8980a75f33ab287acf70087b01d270e134afca421f2ed4345831a14d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_988634d8980a75f33ab287acf70087b01d270e134afca421f2ed4345831a14d1->enter($__internal_988634d8980a75f33ab287acf70087b01d270e134afca421f2ed4345831a14d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_988634d8980a75f33ab287acf70087b01d270e134afca421f2ed4345831a14d1->leave($__internal_988634d8980a75f33ab287acf70087b01d270e134afca421f2ed4345831a14d1_prof);

        
        $__internal_0822116e61df200e56ca66534210b3c47fa3a9ee5d0870368a13bbc6cb6eb4b7->leave($__internal_0822116e61df200e56ca66534210b3c47fa3a9ee5d0870368a13bbc6cb6eb4b7_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c1459158f29d5c17d96f87fae4a74e64323770b963dec25db1c264df598f1610 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1459158f29d5c17d96f87fae4a74e64323770b963dec25db1c264df598f1610->enter($__internal_c1459158f29d5c17d96f87fae4a74e64323770b963dec25db1c264df598f1610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_2f98333117aea1cdde23f9206a74b8c228f5176880bb604e5c061f4a79f1d07d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f98333117aea1cdde23f9206a74b8c228f5176880bb604e5c061f4a79f1d07d->enter($__internal_2f98333117aea1cdde23f9206a74b8c228f5176880bb604e5c061f4a79f1d07d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2f98333117aea1cdde23f9206a74b8c228f5176880bb604e5c061f4a79f1d07d->leave($__internal_2f98333117aea1cdde23f9206a74b8c228f5176880bb604e5c061f4a79f1d07d_prof);

        
        $__internal_c1459158f29d5c17d96f87fae4a74e64323770b963dec25db1c264df598f1610->leave($__internal_c1459158f29d5c17d96f87fae4a74e64323770b963dec25db1c264df598f1610_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 11,  99 => 10,  82 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/dana/Kurzy/app/Resources/views/base.html.twig");
    }
}
