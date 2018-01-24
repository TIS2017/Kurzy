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
        $__internal_d0870f4831b43f487cb5363ee0d86291e99515b8b7c4ccf9068bba5b72e9c3db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0870f4831b43f487cb5363ee0d86291e99515b8b7c4ccf9068bba5b72e9c3db->enter($__internal_d0870f4831b43f487cb5363ee0d86291e99515b8b7c4ccf9068bba5b72e9c3db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_fd808e412b476a94a61d59ba39c9058064a6495c669d60cf0c8d1ac153961ea4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd808e412b476a94a61d59ba39c9058064a6495c669d60cf0c8d1ac153961ea4->enter($__internal_fd808e412b476a94a61d59ba39c9058064a6495c669d60cf0c8d1ac153961ea4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
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
    </div>
</header>
<div class=\"container\">
    <div class=\"row\" style=\"margin: 20px 0;\">
        <div class=\"col-lg-8 col-lg-offset-2\">
            ";
        // line 42
        $this->displayBlock('body', $context, $blocks);
        // line 43
        echo "            ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 44
        echo "        </div>
    </div>
</div>
</body>
</html>
";
        
        $__internal_d0870f4831b43f487cb5363ee0d86291e99515b8b7c4ccf9068bba5b72e9c3db->leave($__internal_d0870f4831b43f487cb5363ee0d86291e99515b8b7c4ccf9068bba5b72e9c3db_prof);

        
        $__internal_fd808e412b476a94a61d59ba39c9058064a6495c669d60cf0c8d1ac153961ea4->leave($__internal_fd808e412b476a94a61d59ba39c9058064a6495c669d60cf0c8d1ac153961ea4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_789d2f62210391c6089396b6796f7f7b5f1e5032aaf687caf06114f0b04a40ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_789d2f62210391c6089396b6796f7f7b5f1e5032aaf687caf06114f0b04a40ef->enter($__internal_789d2f62210391c6089396b6796f7f7b5f1e5032aaf687caf06114f0b04a40ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_af63b91e9304499afa67056e98d106c51bd67283e4f442e634c2a3ba8d6a8122 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af63b91e9304499afa67056e98d106c51bd67283e4f442e634c2a3ba8d6a8122->enter($__internal_af63b91e9304499afa67056e98d106c51bd67283e4f442e634c2a3ba8d6a8122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_af63b91e9304499afa67056e98d106c51bd67283e4f442e634c2a3ba8d6a8122->leave($__internal_af63b91e9304499afa67056e98d106c51bd67283e4f442e634c2a3ba8d6a8122_prof);

        
        $__internal_789d2f62210391c6089396b6796f7f7b5f1e5032aaf687caf06114f0b04a40ef->leave($__internal_789d2f62210391c6089396b6796f7f7b5f1e5032aaf687caf06114f0b04a40ef_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9c236cb56342cac4d829f510cb4bfb998e1c53ceba5c4a51c76a9aa554f446c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c236cb56342cac4d829f510cb4bfb998e1c53ceba5c4a51c76a9aa554f446c2->enter($__internal_9c236cb56342cac4d829f510cb4bfb998e1c53ceba5c4a51c76a9aa554f446c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b07a88b90d9feae49fd192cb55002c922de3cc4783397e1c5e97f41df99a60b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b07a88b90d9feae49fd192cb55002c922de3cc4783397e1c5e97f41df99a60b5->enter($__internal_b07a88b90d9feae49fd192cb55002c922de3cc4783397e1c5e97f41df99a60b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b07a88b90d9feae49fd192cb55002c922de3cc4783397e1c5e97f41df99a60b5->leave($__internal_b07a88b90d9feae49fd192cb55002c922de3cc4783397e1c5e97f41df99a60b5_prof);

        
        $__internal_9c236cb56342cac4d829f510cb4bfb998e1c53ceba5c4a51c76a9aa554f446c2->leave($__internal_9c236cb56342cac4d829f510cb4bfb998e1c53ceba5c4a51c76a9aa554f446c2_prof);

    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
        $__internal_6be8f940d0da8a624218c8387b1cd0fb1ec4b14376d68b9154b51a7de043b3a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6be8f940d0da8a624218c8387b1cd0fb1ec4b14376d68b9154b51a7de043b3a3->enter($__internal_6be8f940d0da8a624218c8387b1cd0fb1ec4b14376d68b9154b51a7de043b3a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dfd3db5a9f1c8f998f411f6114bc705054498677277e63aacb0758645be597d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfd3db5a9f1c8f998f411f6114bc705054498677277e63aacb0758645be597d9->enter($__internal_dfd3db5a9f1c8f998f411f6114bc705054498677277e63aacb0758645be597d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_dfd3db5a9f1c8f998f411f6114bc705054498677277e63aacb0758645be597d9->leave($__internal_dfd3db5a9f1c8f998f411f6114bc705054498677277e63aacb0758645be597d9_prof);

        
        $__internal_6be8f940d0da8a624218c8387b1cd0fb1ec4b14376d68b9154b51a7de043b3a3->leave($__internal_6be8f940d0da8a624218c8387b1cd0fb1ec4b14376d68b9154b51a7de043b3a3_prof);

    }

    // line 43
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_750c7bcc83908243c4aabdd90ba86a2bdde638e564bd0c197fbed9185ffdee3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_750c7bcc83908243c4aabdd90ba86a2bdde638e564bd0c197fbed9185ffdee3b->enter($__internal_750c7bcc83908243c4aabdd90ba86a2bdde638e564bd0c197fbed9185ffdee3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f873241edd7efef930dbd67ac39ee1d084e9a12fecd4aa0fa0a2236eb21844b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f873241edd7efef930dbd67ac39ee1d084e9a12fecd4aa0fa0a2236eb21844b1->enter($__internal_f873241edd7efef930dbd67ac39ee1d084e9a12fecd4aa0fa0a2236eb21844b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f873241edd7efef930dbd67ac39ee1d084e9a12fecd4aa0fa0a2236eb21844b1->leave($__internal_f873241edd7efef930dbd67ac39ee1d084e9a12fecd4aa0fa0a2236eb21844b1_prof);

        
        $__internal_750c7bcc83908243c4aabdd90ba86a2bdde638e564bd0c197fbed9185ffdee3b->leave($__internal_750c7bcc83908243c4aabdd90ba86a2bdde638e564bd0c197fbed9185ffdee3b_prof);

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
        return array (  157 => 43,  140 => 42,  123 => 6,  106 => 5,  91 => 44,  88 => 43,  86 => 42,  50 => 9,  46 => 8,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
