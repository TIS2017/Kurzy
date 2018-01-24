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
        $__internal_485469f144d0dad53f3d065bdc159f4d0724f4634f2b56cf58dcc2b957d8b8df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_485469f144d0dad53f3d065bdc159f4d0724f4634f2b56cf58dcc2b957d8b8df->enter($__internal_485469f144d0dad53f3d065bdc159f4d0724f4634f2b56cf58dcc2b957d8b8df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_969fa0142ddd1ee14d438ba2a4ce5845d138d2f53fc87c9f85035a6792703d19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_969fa0142ddd1ee14d438ba2a4ce5845d138d2f53fc87c9f85035a6792703d19->enter($__internal_969fa0142ddd1ee14d438ba2a4ce5845d138d2f53fc87c9f85035a6792703d19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
                            <a href=\"/\" title=\"Domov\" ><img src=\"../images/logo_cit.png\" width=\"95\" height=\"94\" alt=\"logo\"></a>
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
        
        $__internal_485469f144d0dad53f3d065bdc159f4d0724f4634f2b56cf58dcc2b957d8b8df->leave($__internal_485469f144d0dad53f3d065bdc159f4d0724f4634f2b56cf58dcc2b957d8b8df_prof);

        
        $__internal_969fa0142ddd1ee14d438ba2a4ce5845d138d2f53fc87c9f85035a6792703d19->leave($__internal_969fa0142ddd1ee14d438ba2a4ce5845d138d2f53fc87c9f85035a6792703d19_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0e58fe925af2c62473c7246c35559647432066976f2adf8eaf560387bb9f0b07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e58fe925af2c62473c7246c35559647432066976f2adf8eaf560387bb9f0b07->enter($__internal_0e58fe925af2c62473c7246c35559647432066976f2adf8eaf560387bb9f0b07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_386eca14cdea40d07cd57bc5384d8f0233cbd667e245620ff7081ab05c44de39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_386eca14cdea40d07cd57bc5384d8f0233cbd667e245620ff7081ab05c44de39->enter($__internal_386eca14cdea40d07cd57bc5384d8f0233cbd667e245620ff7081ab05c44de39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_386eca14cdea40d07cd57bc5384d8f0233cbd667e245620ff7081ab05c44de39->leave($__internal_386eca14cdea40d07cd57bc5384d8f0233cbd667e245620ff7081ab05c44de39_prof);

        
        $__internal_0e58fe925af2c62473c7246c35559647432066976f2adf8eaf560387bb9f0b07->leave($__internal_0e58fe925af2c62473c7246c35559647432066976f2adf8eaf560387bb9f0b07_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_911334cba4f576448a8857c76f9689236478c0afd8a4d8efbd8763bb2c48ae4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_911334cba4f576448a8857c76f9689236478c0afd8a4d8efbd8763bb2c48ae4e->enter($__internal_911334cba4f576448a8857c76f9689236478c0afd8a4d8efbd8763bb2c48ae4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f973cf0b278a5e8037281d063475f2ad5a7c6e2daab5950549b55a63c0937092 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f973cf0b278a5e8037281d063475f2ad5a7c6e2daab5950549b55a63c0937092->enter($__internal_f973cf0b278a5e8037281d063475f2ad5a7c6e2daab5950549b55a63c0937092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f973cf0b278a5e8037281d063475f2ad5a7c6e2daab5950549b55a63c0937092->leave($__internal_f973cf0b278a5e8037281d063475f2ad5a7c6e2daab5950549b55a63c0937092_prof);

        
        $__internal_911334cba4f576448a8857c76f9689236478c0afd8a4d8efbd8763bb2c48ae4e->leave($__internal_911334cba4f576448a8857c76f9689236478c0afd8a4d8efbd8763bb2c48ae4e_prof);

    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        $__internal_5e926b16a943a6fc334282721b9d5385acb43944048d5231334b5c43b8236b7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e926b16a943a6fc334282721b9d5385acb43944048d5231334b5c43b8236b7a->enter($__internal_5e926b16a943a6fc334282721b9d5385acb43944048d5231334b5c43b8236b7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_915328753c6651654c2b0317a21deff7ac9bd120a145527d502204470ff7fcac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_915328753c6651654c2b0317a21deff7ac9bd120a145527d502204470ff7fcac->enter($__internal_915328753c6651654c2b0317a21deff7ac9bd120a145527d502204470ff7fcac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_915328753c6651654c2b0317a21deff7ac9bd120a145527d502204470ff7fcac->leave($__internal_915328753c6651654c2b0317a21deff7ac9bd120a145527d502204470ff7fcac_prof);

        
        $__internal_5e926b16a943a6fc334282721b9d5385acb43944048d5231334b5c43b8236b7a->leave($__internal_5e926b16a943a6fc334282721b9d5385acb43944048d5231334b5c43b8236b7a_prof);

    }

    // line 42
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ed98f68d81ef6d121b1a6dac6dcde3d45e741aec7930a7e36dbcf532d7f1f962 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed98f68d81ef6d121b1a6dac6dcde3d45e741aec7930a7e36dbcf532d7f1f962->enter($__internal_ed98f68d81ef6d121b1a6dac6dcde3d45e741aec7930a7e36dbcf532d7f1f962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_8725589e0e52727bfdbd0de5546729bfcf9703319d440d61a7d64170e3ba3d12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8725589e0e52727bfdbd0de5546729bfcf9703319d440d61a7d64170e3ba3d12->enter($__internal_8725589e0e52727bfdbd0de5546729bfcf9703319d440d61a7d64170e3ba3d12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8725589e0e52727bfdbd0de5546729bfcf9703319d440d61a7d64170e3ba3d12->leave($__internal_8725589e0e52727bfdbd0de5546729bfcf9703319d440d61a7d64170e3ba3d12_prof);

        
        $__internal_ed98f68d81ef6d121b1a6dac6dcde3d45e741aec7930a7e36dbcf532d7f1f962->leave($__internal_ed98f68d81ef6d121b1a6dac6dcde3d45e741aec7930a7e36dbcf532d7f1f962_prof);

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
                            <a href=\"/\" title=\"Domov\" ><img src=\"../images/logo_cit.png\" width=\"95\" height=\"94\" alt=\"logo\"></a>
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
", "base.html.twig", "/home/andrea/Desktop/CaviarIT/Kurzy/app/Resources/views/base.html.twig");
    }
}
