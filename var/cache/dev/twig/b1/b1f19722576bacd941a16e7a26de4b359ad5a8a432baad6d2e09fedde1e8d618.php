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
        $__internal_ea54587d7e0213d697cabd10a50efc4666135dcf847e48de40bdc49d5f23b1af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea54587d7e0213d697cabd10a50efc4666135dcf847e48de40bdc49d5f23b1af->enter($__internal_ea54587d7e0213d697cabd10a50efc4666135dcf847e48de40bdc49d5f23b1af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_638ca720590f2afc34918d256247460f449d39f3260d329668d0a5c4c6b9ea5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_638ca720590f2afc34918d256247460f449d39f3260d329668d0a5c4c6b9ea5a->enter($__internal_638ca720590f2afc34918d256247460f449d39f3260d329668d0a5c4c6b9ea5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
                            <a href=\"/\" title=\"Domov\" ><img src=\"../images/index.png\" width=\"95\" height=\"94\" alt=\"logo\"></a>
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
        
        $__internal_ea54587d7e0213d697cabd10a50efc4666135dcf847e48de40bdc49d5f23b1af->leave($__internal_ea54587d7e0213d697cabd10a50efc4666135dcf847e48de40bdc49d5f23b1af_prof);

        
        $__internal_638ca720590f2afc34918d256247460f449d39f3260d329668d0a5c4c6b9ea5a->leave($__internal_638ca720590f2afc34918d256247460f449d39f3260d329668d0a5c4c6b9ea5a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_364f7cf4262c7f467c7ea9b1578936d728dc07cfc4d6a6036fdaa7bb6e020ca1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_364f7cf4262c7f467c7ea9b1578936d728dc07cfc4d6a6036fdaa7bb6e020ca1->enter($__internal_364f7cf4262c7f467c7ea9b1578936d728dc07cfc4d6a6036fdaa7bb6e020ca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bd399c726caa6d921d1f328cde810991f66787d7a3fb916d37a564af8344d6ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd399c726caa6d921d1f328cde810991f66787d7a3fb916d37a564af8344d6ac->enter($__internal_bd399c726caa6d921d1f328cde810991f66787d7a3fb916d37a564af8344d6ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_bd399c726caa6d921d1f328cde810991f66787d7a3fb916d37a564af8344d6ac->leave($__internal_bd399c726caa6d921d1f328cde810991f66787d7a3fb916d37a564af8344d6ac_prof);

        
        $__internal_364f7cf4262c7f467c7ea9b1578936d728dc07cfc4d6a6036fdaa7bb6e020ca1->leave($__internal_364f7cf4262c7f467c7ea9b1578936d728dc07cfc4d6a6036fdaa7bb6e020ca1_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0e6999d74e970be9b2ada633e572412b4646a0312350809c3d41a26d4a5b1797 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e6999d74e970be9b2ada633e572412b4646a0312350809c3d41a26d4a5b1797->enter($__internal_0e6999d74e970be9b2ada633e572412b4646a0312350809c3d41a26d4a5b1797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ad6600b054181e96524ebebcbe1fa6513784aed163231d94a622c134d75aa802 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad6600b054181e96524ebebcbe1fa6513784aed163231d94a622c134d75aa802->enter($__internal_ad6600b054181e96524ebebcbe1fa6513784aed163231d94a622c134d75aa802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ad6600b054181e96524ebebcbe1fa6513784aed163231d94a622c134d75aa802->leave($__internal_ad6600b054181e96524ebebcbe1fa6513784aed163231d94a622c134d75aa802_prof);

        
        $__internal_0e6999d74e970be9b2ada633e572412b4646a0312350809c3d41a26d4a5b1797->leave($__internal_0e6999d74e970be9b2ada633e572412b4646a0312350809c3d41a26d4a5b1797_prof);

    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        $__internal_33c0cd54b7260bf9b2a01dc6e59314eca887475dd8b09f2e32853c419ad10ba4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33c0cd54b7260bf9b2a01dc6e59314eca887475dd8b09f2e32853c419ad10ba4->enter($__internal_33c0cd54b7260bf9b2a01dc6e59314eca887475dd8b09f2e32853c419ad10ba4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d22c486e505b7375c6bf5c7a42f91e5dada394657a85a5b4b71c6644be70b939 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d22c486e505b7375c6bf5c7a42f91e5dada394657a85a5b4b71c6644be70b939->enter($__internal_d22c486e505b7375c6bf5c7a42f91e5dada394657a85a5b4b71c6644be70b939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d22c486e505b7375c6bf5c7a42f91e5dada394657a85a5b4b71c6644be70b939->leave($__internal_d22c486e505b7375c6bf5c7a42f91e5dada394657a85a5b4b71c6644be70b939_prof);

        
        $__internal_33c0cd54b7260bf9b2a01dc6e59314eca887475dd8b09f2e32853c419ad10ba4->leave($__internal_33c0cd54b7260bf9b2a01dc6e59314eca887475dd8b09f2e32853c419ad10ba4_prof);

    }

    // line 42
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f9cd22dd1d874ac71fd4f85c7c0bdad8283ab0ef7b89ca08ea70c18bc992076f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9cd22dd1d874ac71fd4f85c7c0bdad8283ab0ef7b89ca08ea70c18bc992076f->enter($__internal_f9cd22dd1d874ac71fd4f85c7c0bdad8283ab0ef7b89ca08ea70c18bc992076f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_22c64ec709dc302edf8643c0003be15a85a498d4469cae3e6e70e878527fc773 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22c64ec709dc302edf8643c0003be15a85a498d4469cae3e6e70e878527fc773->enter($__internal_22c64ec709dc302edf8643c0003be15a85a498d4469cae3e6e70e878527fc773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_22c64ec709dc302edf8643c0003be15a85a498d4469cae3e6e70e878527fc773->leave($__internal_22c64ec709dc302edf8643c0003be15a85a498d4469cae3e6e70e878527fc773_prof);

        
        $__internal_f9cd22dd1d874ac71fd4f85c7c0bdad8283ab0ef7b89ca08ea70c18bc992076f->leave($__internal_f9cd22dd1d874ac71fd4f85c7c0bdad8283ab0ef7b89ca08ea70c18bc992076f_prof);

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
                            <a href=\"/\" title=\"Domov\" ><img src=\"../images/index.png\" width=\"95\" height=\"94\" alt=\"logo\"></a>
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
", "base.html.twig", "/home/andrea/Desktop/CaviarIT/Kurzy/app/Resources/views/base.html.twig");
    }
}
