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
        $__internal_889149d572b81baadc10522b948e712e6f7f4ca71cb8c7cb382b8edc969471df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_889149d572b81baadc10522b948e712e6f7f4ca71cb8c7cb382b8edc969471df->enter($__internal_889149d572b81baadc10522b948e712e6f7f4ca71cb8c7cb382b8edc969471df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_72b705e54766d5483ba46af5418de241215e18bd45c84821bc83c3fd22f6d84d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72b705e54766d5483ba46af5418de241215e18bd45c84821bc83c3fd22f6d84d->enter($__internal_72b705e54766d5483ba46af5418de241215e18bd45c84821bc83c3fd22f6d84d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
                            <a href=\"/\" title=\"Domov\" ><img src=\"../images/index.png\" width=\"95\" height=\"94\" alt=\"logo\"></a>
                        </span>
                    </div>

                    <div class=\"col-lg-8\"
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
        
        $__internal_889149d572b81baadc10522b948e712e6f7f4ca71cb8c7cb382b8edc969471df->leave($__internal_889149d572b81baadc10522b948e712e6f7f4ca71cb8c7cb382b8edc969471df_prof);

        
        $__internal_72b705e54766d5483ba46af5418de241215e18bd45c84821bc83c3fd22f6d84d->leave($__internal_72b705e54766d5483ba46af5418de241215e18bd45c84821bc83c3fd22f6d84d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_79fcf8921646b3d3d03836600d6e0b019e82ffb1a6176f0ce63bae2c62829880 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79fcf8921646b3d3d03836600d6e0b019e82ffb1a6176f0ce63bae2c62829880->enter($__internal_79fcf8921646b3d3d03836600d6e0b019e82ffb1a6176f0ce63bae2c62829880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e3cab68adc0f2017c84baf69d0b4d55f45b583a48e5478e4db69ea7d47802c66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3cab68adc0f2017c84baf69d0b4d55f45b583a48e5478e4db69ea7d47802c66->enter($__internal_e3cab68adc0f2017c84baf69d0b4d55f45b583a48e5478e4db69ea7d47802c66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_e3cab68adc0f2017c84baf69d0b4d55f45b583a48e5478e4db69ea7d47802c66->leave($__internal_e3cab68adc0f2017c84baf69d0b4d55f45b583a48e5478e4db69ea7d47802c66_prof);

        
        $__internal_79fcf8921646b3d3d03836600d6e0b019e82ffb1a6176f0ce63bae2c62829880->leave($__internal_79fcf8921646b3d3d03836600d6e0b019e82ffb1a6176f0ce63bae2c62829880_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7dfa0a9619d8901f848b539c79dee48b1ae6015663c7169a203a34fad4b12b72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dfa0a9619d8901f848b539c79dee48b1ae6015663c7169a203a34fad4b12b72->enter($__internal_7dfa0a9619d8901f848b539c79dee48b1ae6015663c7169a203a34fad4b12b72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_771153405a117b36e21b0145192257d27fbe1f97f3bab5236a80e7e71ff743f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_771153405a117b36e21b0145192257d27fbe1f97f3bab5236a80e7e71ff743f3->enter($__internal_771153405a117b36e21b0145192257d27fbe1f97f3bab5236a80e7e71ff743f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_771153405a117b36e21b0145192257d27fbe1f97f3bab5236a80e7e71ff743f3->leave($__internal_771153405a117b36e21b0145192257d27fbe1f97f3bab5236a80e7e71ff743f3_prof);

        
        $__internal_7dfa0a9619d8901f848b539c79dee48b1ae6015663c7169a203a34fad4b12b72->leave($__internal_7dfa0a9619d8901f848b539c79dee48b1ae6015663c7169a203a34fad4b12b72_prof);

    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        $__internal_e32057357da168d99f0baf15769c134742b719faeb0b49a61992ff430ed1c2d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e32057357da168d99f0baf15769c134742b719faeb0b49a61992ff430ed1c2d9->enter($__internal_e32057357da168d99f0baf15769c134742b719faeb0b49a61992ff430ed1c2d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3d57a480449c012aa33bb6e52545440d6d4a5a9b263b127d7bbb140741f7a6b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d57a480449c012aa33bb6e52545440d6d4a5a9b263b127d7bbb140741f7a6b6->enter($__internal_3d57a480449c012aa33bb6e52545440d6d4a5a9b263b127d7bbb140741f7a6b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3d57a480449c012aa33bb6e52545440d6d4a5a9b263b127d7bbb140741f7a6b6->leave($__internal_3d57a480449c012aa33bb6e52545440d6d4a5a9b263b127d7bbb140741f7a6b6_prof);

        
        $__internal_e32057357da168d99f0baf15769c134742b719faeb0b49a61992ff430ed1c2d9->leave($__internal_e32057357da168d99f0baf15769c134742b719faeb0b49a61992ff430ed1c2d9_prof);

    }

    // line 42
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_39b05992506fe601d266b31eb01c2abfd001328f91b429888f2e4732a1e87302 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39b05992506fe601d266b31eb01c2abfd001328f91b429888f2e4732a1e87302->enter($__internal_39b05992506fe601d266b31eb01c2abfd001328f91b429888f2e4732a1e87302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_52201715a9e30af8c760096a819ecc89932918b33e239cc8179d754f6674d61e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52201715a9e30af8c760096a819ecc89932918b33e239cc8179d754f6674d61e->enter($__internal_52201715a9e30af8c760096a819ecc89932918b33e239cc8179d754f6674d61e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_52201715a9e30af8c760096a819ecc89932918b33e239cc8179d754f6674d61e->leave($__internal_52201715a9e30af8c760096a819ecc89932918b33e239cc8179d754f6674d61e_prof);

        
        $__internal_39b05992506fe601d266b31eb01c2abfd001328f91b429888f2e4732a1e87302->leave($__internal_39b05992506fe601d266b31eb01c2abfd001328f91b429888f2e4732a1e87302_prof);

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
                            <a href=\"/\" title=\"Domov\" ><img src=\"../images/index.png\" width=\"95\" height=\"94\" alt=\"logo\"></a>
                        </span>
                    </div>

                    <div class=\"col-lg-8\"
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
", "base.html.twig", "/home/patricia/Desktop/Kurzy/app/Resources/views/base.html.twig");
    }
}
