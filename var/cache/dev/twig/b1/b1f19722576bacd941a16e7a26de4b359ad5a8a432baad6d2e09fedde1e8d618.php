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
        $__internal_e5428df67752c37db93f261535798b7f330716f5b91a9b07fda94125859760ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5428df67752c37db93f261535798b7f330716f5b91a9b07fda94125859760ed->enter($__internal_e5428df67752c37db93f261535798b7f330716f5b91a9b07fda94125859760ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_2f64b6aefa55f08943458478685c56baf846e8762b07c8172701a4cd08a0474f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f64b6aefa55f08943458478685c56baf846e8762b07c8172701a4cd08a0474f->enter($__internal_2f64b6aefa55f08943458478685c56baf846e8762b07c8172701a4cd08a0474f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_e5428df67752c37db93f261535798b7f330716f5b91a9b07fda94125859760ed->leave($__internal_e5428df67752c37db93f261535798b7f330716f5b91a9b07fda94125859760ed_prof);

        
        $__internal_2f64b6aefa55f08943458478685c56baf846e8762b07c8172701a4cd08a0474f->leave($__internal_2f64b6aefa55f08943458478685c56baf846e8762b07c8172701a4cd08a0474f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_48b80677fe5248ca70655ebecc1fe6df3742bd7098b7220c5c668e62cdac75d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48b80677fe5248ca70655ebecc1fe6df3742bd7098b7220c5c668e62cdac75d5->enter($__internal_48b80677fe5248ca70655ebecc1fe6df3742bd7098b7220c5c668e62cdac75d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7766c92d758cf9029a08ecf5f692ad2e07c2c7a902ef490d4a9551c6f7107518 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7766c92d758cf9029a08ecf5f692ad2e07c2c7a902ef490d4a9551c6f7107518->enter($__internal_7766c92d758cf9029a08ecf5f692ad2e07c2c7a902ef490d4a9551c6f7107518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_7766c92d758cf9029a08ecf5f692ad2e07c2c7a902ef490d4a9551c6f7107518->leave($__internal_7766c92d758cf9029a08ecf5f692ad2e07c2c7a902ef490d4a9551c6f7107518_prof);

        
        $__internal_48b80677fe5248ca70655ebecc1fe6df3742bd7098b7220c5c668e62cdac75d5->leave($__internal_48b80677fe5248ca70655ebecc1fe6df3742bd7098b7220c5c668e62cdac75d5_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3771bc325916b6610aab724ffc2a956fcc5488b144bcbd544ea08a91ba938a73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3771bc325916b6610aab724ffc2a956fcc5488b144bcbd544ea08a91ba938a73->enter($__internal_3771bc325916b6610aab724ffc2a956fcc5488b144bcbd544ea08a91ba938a73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_7877f00cbb616622718f16237048501316e015dddb736fe39d5e395916b3f198 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7877f00cbb616622718f16237048501316e015dddb736fe39d5e395916b3f198->enter($__internal_7877f00cbb616622718f16237048501316e015dddb736fe39d5e395916b3f198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_7877f00cbb616622718f16237048501316e015dddb736fe39d5e395916b3f198->leave($__internal_7877f00cbb616622718f16237048501316e015dddb736fe39d5e395916b3f198_prof);

        
        $__internal_3771bc325916b6610aab724ffc2a956fcc5488b144bcbd544ea08a91ba938a73->leave($__internal_3771bc325916b6610aab724ffc2a956fcc5488b144bcbd544ea08a91ba938a73_prof);

    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        $__internal_bcb68c648e1a2c9164a0985f4b3a45cc4eb410e761f84259c450f0440be9963d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcb68c648e1a2c9164a0985f4b3a45cc4eb410e761f84259c450f0440be9963d->enter($__internal_bcb68c648e1a2c9164a0985f4b3a45cc4eb410e761f84259c450f0440be9963d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0b77a7fa11f3e700347d3fcf89dadf9a5b41563029eddba67a1f19ef9bab0ea5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b77a7fa11f3e700347d3fcf89dadf9a5b41563029eddba67a1f19ef9bab0ea5->enter($__internal_0b77a7fa11f3e700347d3fcf89dadf9a5b41563029eddba67a1f19ef9bab0ea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0b77a7fa11f3e700347d3fcf89dadf9a5b41563029eddba67a1f19ef9bab0ea5->leave($__internal_0b77a7fa11f3e700347d3fcf89dadf9a5b41563029eddba67a1f19ef9bab0ea5_prof);

        
        $__internal_bcb68c648e1a2c9164a0985f4b3a45cc4eb410e761f84259c450f0440be9963d->leave($__internal_bcb68c648e1a2c9164a0985f4b3a45cc4eb410e761f84259c450f0440be9963d_prof);

    }

    // line 42
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c00cdf2f7157f108b07f35a839d02f946d6029159ea9f636fe8291022e5303d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c00cdf2f7157f108b07f35a839d02f946d6029159ea9f636fe8291022e5303d5->enter($__internal_c00cdf2f7157f108b07f35a839d02f946d6029159ea9f636fe8291022e5303d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_17857e9792cea5712a074a4e19a94e1e249b738831b2655001175dcddc8e717f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17857e9792cea5712a074a4e19a94e1e249b738831b2655001175dcddc8e717f->enter($__internal_17857e9792cea5712a074a4e19a94e1e249b738831b2655001175dcddc8e717f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_17857e9792cea5712a074a4e19a94e1e249b738831b2655001175dcddc8e717f->leave($__internal_17857e9792cea5712a074a4e19a94e1e249b738831b2655001175dcddc8e717f_prof);

        
        $__internal_c00cdf2f7157f108b07f35a839d02f946d6029159ea9f636fe8291022e5303d5->leave($__internal_c00cdf2f7157f108b07f35a839d02f946d6029159ea9f636fe8291022e5303d5_prof);

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
