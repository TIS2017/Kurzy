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
        $__internal_a6b54389835465bc2fa05097f2c6ca0df20c1607eeee603e2819381a051d6106 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6b54389835465bc2fa05097f2c6ca0df20c1607eeee603e2819381a051d6106->enter($__internal_a6b54389835465bc2fa05097f2c6ca0df20c1607eeee603e2819381a051d6106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_1b5b693d0478b359e8408baa74d2348b41c5eb32c97b691c0c40f2eb40c9c1eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b5b693d0478b359e8408baa74d2348b41c5eb32c97b691c0c40f2eb40c9c1eb->enter($__internal_1b5b693d0478b359e8408baa74d2348b41c5eb32c97b691c0c40f2eb40c9c1eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_a6b54389835465bc2fa05097f2c6ca0df20c1607eeee603e2819381a051d6106->leave($__internal_a6b54389835465bc2fa05097f2c6ca0df20c1607eeee603e2819381a051d6106_prof);

        
        $__internal_1b5b693d0478b359e8408baa74d2348b41c5eb32c97b691c0c40f2eb40c9c1eb->leave($__internal_1b5b693d0478b359e8408baa74d2348b41c5eb32c97b691c0c40f2eb40c9c1eb_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e41e2fc8974f6efeb03576fe7f1b734139c1b431eea32c85e3a7134246a6c6ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e41e2fc8974f6efeb03576fe7f1b734139c1b431eea32c85e3a7134246a6c6ec->enter($__internal_e41e2fc8974f6efeb03576fe7f1b734139c1b431eea32c85e3a7134246a6c6ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3d7f04149f764d02fe322ab4f7ed797771aa16c76ad2c3cd11ea5a7cf17073df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d7f04149f764d02fe322ab4f7ed797771aa16c76ad2c3cd11ea5a7cf17073df->enter($__internal_3d7f04149f764d02fe322ab4f7ed797771aa16c76ad2c3cd11ea5a7cf17073df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_3d7f04149f764d02fe322ab4f7ed797771aa16c76ad2c3cd11ea5a7cf17073df->leave($__internal_3d7f04149f764d02fe322ab4f7ed797771aa16c76ad2c3cd11ea5a7cf17073df_prof);

        
        $__internal_e41e2fc8974f6efeb03576fe7f1b734139c1b431eea32c85e3a7134246a6c6ec->leave($__internal_e41e2fc8974f6efeb03576fe7f1b734139c1b431eea32c85e3a7134246a6c6ec_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_40bbe8f55099995231fdfc267dd4cc6c27e23ab4de06c4e13479d37ef18b5c71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40bbe8f55099995231fdfc267dd4cc6c27e23ab4de06c4e13479d37ef18b5c71->enter($__internal_40bbe8f55099995231fdfc267dd4cc6c27e23ab4de06c4e13479d37ef18b5c71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_aae4c27286cb366c99afa92d34af0b8ee9608684030727b720c32c5bf5c604a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aae4c27286cb366c99afa92d34af0b8ee9608684030727b720c32c5bf5c604a0->enter($__internal_aae4c27286cb366c99afa92d34af0b8ee9608684030727b720c32c5bf5c604a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_aae4c27286cb366c99afa92d34af0b8ee9608684030727b720c32c5bf5c604a0->leave($__internal_aae4c27286cb366c99afa92d34af0b8ee9608684030727b720c32c5bf5c604a0_prof);

        
        $__internal_40bbe8f55099995231fdfc267dd4cc6c27e23ab4de06c4e13479d37ef18b5c71->leave($__internal_40bbe8f55099995231fdfc267dd4cc6c27e23ab4de06c4e13479d37ef18b5c71_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_1554d35d1edde3aa212c00b928cd0f3592a6e4dc71c0c1bfb729f3e41a0c6c9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1554d35d1edde3aa212c00b928cd0f3592a6e4dc71c0c1bfb729f3e41a0c6c9a->enter($__internal_1554d35d1edde3aa212c00b928cd0f3592a6e4dc71c0c1bfb729f3e41a0c6c9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bf35f08a964274dd79a46243bca11926fb47889b32c83fd17ffe7a3cea17f044 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf35f08a964274dd79a46243bca11926fb47889b32c83fd17ffe7a3cea17f044->enter($__internal_bf35f08a964274dd79a46243bca11926fb47889b32c83fd17ffe7a3cea17f044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_bf35f08a964274dd79a46243bca11926fb47889b32c83fd17ffe7a3cea17f044->leave($__internal_bf35f08a964274dd79a46243bca11926fb47889b32c83fd17ffe7a3cea17f044_prof);

        
        $__internal_1554d35d1edde3aa212c00b928cd0f3592a6e4dc71c0c1bfb729f3e41a0c6c9a->leave($__internal_1554d35d1edde3aa212c00b928cd0f3592a6e4dc71c0c1bfb729f3e41a0c6c9a_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8abfe905732eab29ca97a2a2dc4c28c971dd16cfd3af562b4c0c8001a6994c58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8abfe905732eab29ca97a2a2dc4c28c971dd16cfd3af562b4c0c8001a6994c58->enter($__internal_8abfe905732eab29ca97a2a2dc4c28c971dd16cfd3af562b4c0c8001a6994c58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f74db3633d73db5a33e0af2ba0449bb407fe58d3f9848fad2ca70f70ea605228 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f74db3633d73db5a33e0af2ba0449bb407fe58d3f9848fad2ca70f70ea605228->enter($__internal_f74db3633d73db5a33e0af2ba0449bb407fe58d3f9848fad2ca70f70ea605228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f74db3633d73db5a33e0af2ba0449bb407fe58d3f9848fad2ca70f70ea605228->leave($__internal_f74db3633d73db5a33e0af2ba0449bb407fe58d3f9848fad2ca70f70ea605228_prof);

        
        $__internal_8abfe905732eab29ca97a2a2dc4c28c971dd16cfd3af562b4c0c8001a6994c58->leave($__internal_8abfe905732eab29ca97a2a2dc4c28c971dd16cfd3af562b4c0c8001a6994c58_prof);

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
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        <title>{% block title %}Welcome!{% endblock %}</title>
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
