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
        $__internal_4fca7294568a0b6442192c6efc3e512fbcc2071753fb5d91d5258d0f1d25b9c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fca7294568a0b6442192c6efc3e512fbcc2071753fb5d91d5258d0f1d25b9c4->enter($__internal_4fca7294568a0b6442192c6efc3e512fbcc2071753fb5d91d5258d0f1d25b9c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_ddcd5236a8df1f70bc81943f12cc58c8b0a992ab33b2d504e46c503ad4594d4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddcd5236a8df1f70bc81943f12cc58c8b0a992ab33b2d504e46c503ad4594d4f->enter($__internal_ddcd5236a8df1f70bc81943f12cc58c8b0a992ab33b2d504e46c503ad4594d4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_4fca7294568a0b6442192c6efc3e512fbcc2071753fb5d91d5258d0f1d25b9c4->leave($__internal_4fca7294568a0b6442192c6efc3e512fbcc2071753fb5d91d5258d0f1d25b9c4_prof);

        
        $__internal_ddcd5236a8df1f70bc81943f12cc58c8b0a992ab33b2d504e46c503ad4594d4f->leave($__internal_ddcd5236a8df1f70bc81943f12cc58c8b0a992ab33b2d504e46c503ad4594d4f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bb59de97106d29924cf2214a3a244ec756b0cc5df59a871e7e7dad9aa87c3774 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb59de97106d29924cf2214a3a244ec756b0cc5df59a871e7e7dad9aa87c3774->enter($__internal_bb59de97106d29924cf2214a3a244ec756b0cc5df59a871e7e7dad9aa87c3774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_690da88bb6b5fb135dabdb0b66773eb200df9b61d613a52d67794e13e90c4d5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_690da88bb6b5fb135dabdb0b66773eb200df9b61d613a52d67794e13e90c4d5e->enter($__internal_690da88bb6b5fb135dabdb0b66773eb200df9b61d613a52d67794e13e90c4d5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_690da88bb6b5fb135dabdb0b66773eb200df9b61d613a52d67794e13e90c4d5e->leave($__internal_690da88bb6b5fb135dabdb0b66773eb200df9b61d613a52d67794e13e90c4d5e_prof);

        
        $__internal_bb59de97106d29924cf2214a3a244ec756b0cc5df59a871e7e7dad9aa87c3774->leave($__internal_bb59de97106d29924cf2214a3a244ec756b0cc5df59a871e7e7dad9aa87c3774_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_601ee89c7521c33bbd33be7dc7e124398bbd606386d54b5e43dd2e0d6283a23b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_601ee89c7521c33bbd33be7dc7e124398bbd606386d54b5e43dd2e0d6283a23b->enter($__internal_601ee89c7521c33bbd33be7dc7e124398bbd606386d54b5e43dd2e0d6283a23b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_7efff984a129445b5c570c01661b92035e8bc0cf6e6daa8cbf871f2221bafd9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7efff984a129445b5c570c01661b92035e8bc0cf6e6daa8cbf871f2221bafd9f->enter($__internal_7efff984a129445b5c570c01661b92035e8bc0cf6e6daa8cbf871f2221bafd9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_7efff984a129445b5c570c01661b92035e8bc0cf6e6daa8cbf871f2221bafd9f->leave($__internal_7efff984a129445b5c570c01661b92035e8bc0cf6e6daa8cbf871f2221bafd9f_prof);

        
        $__internal_601ee89c7521c33bbd33be7dc7e124398bbd606386d54b5e43dd2e0d6283a23b->leave($__internal_601ee89c7521c33bbd33be7dc7e124398bbd606386d54b5e43dd2e0d6283a23b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_5b90c8bacbd721d59a87c846443f9f98d1b2b97f8a0eb8471317807e0c78884b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b90c8bacbd721d59a87c846443f9f98d1b2b97f8a0eb8471317807e0c78884b->enter($__internal_5b90c8bacbd721d59a87c846443f9f98d1b2b97f8a0eb8471317807e0c78884b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dd4fefc0cb6ec3ef159766d39df44af3ff997374b6115c1d27a4ae5d1beb5fb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd4fefc0cb6ec3ef159766d39df44af3ff997374b6115c1d27a4ae5d1beb5fb8->enter($__internal_dd4fefc0cb6ec3ef159766d39df44af3ff997374b6115c1d27a4ae5d1beb5fb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_dd4fefc0cb6ec3ef159766d39df44af3ff997374b6115c1d27a4ae5d1beb5fb8->leave($__internal_dd4fefc0cb6ec3ef159766d39df44af3ff997374b6115c1d27a4ae5d1beb5fb8_prof);

        
        $__internal_5b90c8bacbd721d59a87c846443f9f98d1b2b97f8a0eb8471317807e0c78884b->leave($__internal_5b90c8bacbd721d59a87c846443f9f98d1b2b97f8a0eb8471317807e0c78884b_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_862a1695cf6f95d900b8ae88f61a5237b39afd8f4c36f37190425ce0a8804b73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_862a1695cf6f95d900b8ae88f61a5237b39afd8f4c36f37190425ce0a8804b73->enter($__internal_862a1695cf6f95d900b8ae88f61a5237b39afd8f4c36f37190425ce0a8804b73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a1b6c387a033a52c4b1b1e6a46b5b6069cd94b6c8e52a7de171b985143c9ad0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1b6c387a033a52c4b1b1e6a46b5b6069cd94b6c8e52a7de171b985143c9ad0b->enter($__internal_a1b6c387a033a52c4b1b1e6a46b5b6069cd94b6c8e52a7de171b985143c9ad0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a1b6c387a033a52c4b1b1e6a46b5b6069cd94b6c8e52a7de171b985143c9ad0b->leave($__internal_a1b6c387a033a52c4b1b1e6a46b5b6069cd94b6c8e52a7de171b985143c9ad0b_prof);

        
        $__internal_862a1695cf6f95d900b8ae88f61a5237b39afd8f4c36f37190425ce0a8804b73->leave($__internal_862a1695cf6f95d900b8ae88f61a5237b39afd8f4c36f37190425ce0a8804b73_prof);

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
", "base.html.twig", "/home/patricia/Desktop/kurzy_projekt/kurzy/app/Resources/views/base.html.twig");
    }
}
