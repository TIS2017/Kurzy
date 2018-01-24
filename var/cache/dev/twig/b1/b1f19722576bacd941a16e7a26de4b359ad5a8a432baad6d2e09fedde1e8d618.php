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
        $__internal_419be5a02cf452cddb8714f53c1404f4108f8b613e248fec9e5088a561128c0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_419be5a02cf452cddb8714f53c1404f4108f8b613e248fec9e5088a561128c0d->enter($__internal_419be5a02cf452cddb8714f53c1404f4108f8b613e248fec9e5088a561128c0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_5f4cda0ee47329443f7795eaa0d1583dbfd762cbdbd5cb9ed3528b5f5fba4af1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f4cda0ee47329443f7795eaa0d1583dbfd762cbdbd5cb9ed3528b5f5fba4af1->enter($__internal_5f4cda0ee47329443f7795eaa0d1583dbfd762cbdbd5cb9ed3528b5f5fba4af1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" class=\"css\">
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/headerStylesheet.css"), "html", null, true);
        echo "\" class=\"css\">

    </head>
    <body>
    <header>
        <div class=\"mainHeader\">
            <div class=\"container\">
                <div class=\"row\" style=\"padding: 20px 0;\">

                    <div class=\"col-lg-2\">
                        <span id=\"logo\">
                            <a href=\"/\" title=\"Domov\" ><img src=\"../images/index.png\" width=\"100\" height=\"94\" alt=\"logo\"></a>
                        </span>
                    </div>

                    <div class=\"col-lg-8\">
                    <span id=\"title\" style=\"padding: 10px 0;\">
                            <b>Univerzita Komenského<br/>v Bratislave</b>
                        </span>
                </div>

                <div class=\"col-lg-2\">
                        <span id=\"logo\">
                            <a href=\"/\" title=\"Domov\" ><img src=\"../images/logo_cit.png\" width=\"95\" height=\"94\" alt=\"logo\"></a>
                        </span>
                </div>
            </div>
        </div>
    </header>
    <div class=\"container\">
        <div class=\"row\" style=\"margin: 20px 0;\">
            <div class=\"col-lg-8 col-lg-offset-2\">
                ";
        // line 41
        $this->displayBlock('body', $context, $blocks);
        // line 42
        echo "                ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 43
        echo "            </div>
        </div>
    </div>
    </body>
</html>
";
        
        $__internal_419be5a02cf452cddb8714f53c1404f4108f8b613e248fec9e5088a561128c0d->leave($__internal_419be5a02cf452cddb8714f53c1404f4108f8b613e248fec9e5088a561128c0d_prof);

        
        $__internal_5f4cda0ee47329443f7795eaa0d1583dbfd762cbdbd5cb9ed3528b5f5fba4af1->leave($__internal_5f4cda0ee47329443f7795eaa0d1583dbfd762cbdbd5cb9ed3528b5f5fba4af1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_401011f8f2d5ff96baaf8ee760c10024deea9f79c5449952f8f93f31efc3776e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_401011f8f2d5ff96baaf8ee760c10024deea9f79c5449952f8f93f31efc3776e->enter($__internal_401011f8f2d5ff96baaf8ee760c10024deea9f79c5449952f8f93f31efc3776e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4a99202183904a76f4ecbded173fccf67d58943cca786dfe3a61cbbfebea42e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a99202183904a76f4ecbded173fccf67d58943cca786dfe3a61cbbfebea42e0->enter($__internal_4a99202183904a76f4ecbded173fccf67d58943cca786dfe3a61cbbfebea42e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_4a99202183904a76f4ecbded173fccf67d58943cca786dfe3a61cbbfebea42e0->leave($__internal_4a99202183904a76f4ecbded173fccf67d58943cca786dfe3a61cbbfebea42e0_prof);

        
        $__internal_401011f8f2d5ff96baaf8ee760c10024deea9f79c5449952f8f93f31efc3776e->leave($__internal_401011f8f2d5ff96baaf8ee760c10024deea9f79c5449952f8f93f31efc3776e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_efcdcf261965c4c41199a239d0f5f80d321d82ea7f0231d5b28fe7f861d173d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efcdcf261965c4c41199a239d0f5f80d321d82ea7f0231d5b28fe7f861d173d2->enter($__internal_efcdcf261965c4c41199a239d0f5f80d321d82ea7f0231d5b28fe7f861d173d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_053c18aaac9f2e93b3d7c120ff2b6543ee5ac9e27da66d849e1827e3f8f0deac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_053c18aaac9f2e93b3d7c120ff2b6543ee5ac9e27da66d849e1827e3f8f0deac->enter($__internal_053c18aaac9f2e93b3d7c120ff2b6543ee5ac9e27da66d849e1827e3f8f0deac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_053c18aaac9f2e93b3d7c120ff2b6543ee5ac9e27da66d849e1827e3f8f0deac->leave($__internal_053c18aaac9f2e93b3d7c120ff2b6543ee5ac9e27da66d849e1827e3f8f0deac_prof);

        
        $__internal_efcdcf261965c4c41199a239d0f5f80d321d82ea7f0231d5b28fe7f861d173d2->leave($__internal_efcdcf261965c4c41199a239d0f5f80d321d82ea7f0231d5b28fe7f861d173d2_prof);

    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        $__internal_99815d35a082022d33d425ab8d2457360f184bc9ab2612a69f5f68b966c84d12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99815d35a082022d33d425ab8d2457360f184bc9ab2612a69f5f68b966c84d12->enter($__internal_99815d35a082022d33d425ab8d2457360f184bc9ab2612a69f5f68b966c84d12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5888257a75ba51364d2c415602d63faf609c149377b82a4b95fbaad7456570d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5888257a75ba51364d2c415602d63faf609c149377b82a4b95fbaad7456570d7->enter($__internal_5888257a75ba51364d2c415602d63faf609c149377b82a4b95fbaad7456570d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5888257a75ba51364d2c415602d63faf609c149377b82a4b95fbaad7456570d7->leave($__internal_5888257a75ba51364d2c415602d63faf609c149377b82a4b95fbaad7456570d7_prof);

        
        $__internal_99815d35a082022d33d425ab8d2457360f184bc9ab2612a69f5f68b966c84d12->leave($__internal_99815d35a082022d33d425ab8d2457360f184bc9ab2612a69f5f68b966c84d12_prof);

    }

    // line 42
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_46ea179eb56ec5274420e8335c4200e24b1915f7ca1144a18e1b4444708b3f02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46ea179eb56ec5274420e8335c4200e24b1915f7ca1144a18e1b4444708b3f02->enter($__internal_46ea179eb56ec5274420e8335c4200e24b1915f7ca1144a18e1b4444708b3f02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_14981dcfebc5d1338ef7e1095be100a5b3384d4f27ac11e1443e9b9c3e1fef42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14981dcfebc5d1338ef7e1095be100a5b3384d4f27ac11e1443e9b9c3e1fef42->enter($__internal_14981dcfebc5d1338ef7e1095be100a5b3384d4f27ac11e1443e9b9c3e1fef42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_14981dcfebc5d1338ef7e1095be100a5b3384d4f27ac11e1443e9b9c3e1fef42->leave($__internal_14981dcfebc5d1338ef7e1095be100a5b3384d4f27ac11e1443e9b9c3e1fef42_prof);

        
        $__internal_46ea179eb56ec5274420e8335c4200e24b1915f7ca1144a18e1b4444708b3f02->leave($__internal_46ea179eb56ec5274420e8335c4200e24b1915f7ca1144a18e1b4444708b3f02_prof);

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
        return array (  156 => 42,  139 => 41,  122 => 6,  105 => 5,  90 => 43,  87 => 42,  85 => 41,  50 => 9,  46 => 8,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.css') }}\" class=\"css\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/headerStylesheet.css') }}\" class=\"css\">

    </head>
    <body>
    <header>
        <div class=\"mainHeader\">
            <div class=\"container\">
                <div class=\"row\" style=\"padding: 20px 0;\">

                    <div class=\"col-lg-2\">
                        <span id=\"logo\">
                            <a href=\"/\" title=\"Domov\" ><img src=\"../images/index.png\" width=\"100\" height=\"94\" alt=\"logo\"></a>
                        </span>
                    </div>

                    <div class=\"col-lg-8\">
                    <span id=\"title\" style=\"padding: 10px 0;\">
                            <b>Univerzita Komenského<br/>v Bratislave</b>
                        </span>
                </div>

                <div class=\"col-lg-2\">
                        <span id=\"logo\">
                            <a href=\"/\" title=\"Domov\" ><img src=\"../images/logo_cit.png\" width=\"95\" height=\"94\" alt=\"logo\"></a>
                        </span>
                </div>
            </div>
        </div>
    </header>
    <div class=\"container\">
        <div class=\"row\" style=\"margin: 20px 0;\">
            <div class=\"col-lg-8 col-lg-offset-2\">
                {% block body %}{% endblock %}
                {% block javascripts %}{% endblock %}
            </div>
        </div>
    </div>
    </body>
</html>
", "base.html.twig", "/home/dana/Kurzy/Kurzy/app/Resources/views/base.html.twig");
    }
}
