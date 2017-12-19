<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_40d17f889cda0e9198fdd0de6a45002f4e95d20d7f1dda71b6e52967dec960e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_61e86aec9d90854f3f6f96706c305321ab2c220b7be6473f0bc4741a0ff9d768 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61e86aec9d90854f3f6f96706c305321ab2c220b7be6473f0bc4741a0ff9d768->enter($__internal_61e86aec9d90854f3f6f96706c305321ab2c220b7be6473f0bc4741a0ff9d768_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_e8d28bb2fee93b6b1092f1eec8c4c51d5531e619aea644f76f3c96e4e7f99df8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8d28bb2fee93b6b1092f1eec8c4c51d5531e619aea644f76f3c96e4e7f99df8->enter($__internal_e8d28bb2fee93b6b1092f1eec8c4c51d5531e619aea644f76f3c96e4e7f99df8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_61e86aec9d90854f3f6f96706c305321ab2c220b7be6473f0bc4741a0ff9d768->leave($__internal_61e86aec9d90854f3f6f96706c305321ab2c220b7be6473f0bc4741a0ff9d768_prof);

        
        $__internal_e8d28bb2fee93b6b1092f1eec8c4c51d5531e619aea644f76f3c96e4e7f99df8->leave($__internal_e8d28bb2fee93b6b1092f1eec8c4c51d5531e619aea644f76f3c96e4e7f99df8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_035ce3fa37aa018f324499d5983a3c1c8f4766a1337fceda96796dbc8ba41b34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_035ce3fa37aa018f324499d5983a3c1c8f4766a1337fceda96796dbc8ba41b34->enter($__internal_035ce3fa37aa018f324499d5983a3c1c8f4766a1337fceda96796dbc8ba41b34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7a5257748c6c005c748bd3745009249175d1a06859ebbee1909d38a999815d89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a5257748c6c005c748bd3745009249175d1a06859ebbee1909d38a999815d89->enter($__internal_7a5257748c6c005c748bd3745009249175d1a06859ebbee1909d38a999815d89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_7a5257748c6c005c748bd3745009249175d1a06859ebbee1909d38a999815d89->leave($__internal_7a5257748c6c005c748bd3745009249175d1a06859ebbee1909d38a999815d89_prof);

        
        $__internal_035ce3fa37aa018f324499d5983a3c1c8f4766a1337fceda96796dbc8ba41b34->leave($__internal_035ce3fa37aa018f324499d5983a3c1c8f4766a1337fceda96796dbc8ba41b34_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_6e232d7db293ba6017266ed9088d898e6aebca9247ac17426860eae5fff52ea0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e232d7db293ba6017266ed9088d898e6aebca9247ac17426860eae5fff52ea0->enter($__internal_6e232d7db293ba6017266ed9088d898e6aebca9247ac17426860eae5fff52ea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_85a64e137b5f2c08354fb20a857b6da2feecdb22db58593b7eb1c8e3e78ef05a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85a64e137b5f2c08354fb20a857b6da2feecdb22db58593b7eb1c8e3e78ef05a->enter($__internal_85a64e137b5f2c08354fb20a857b6da2feecdb22db58593b7eb1c8e3e78ef05a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_85a64e137b5f2c08354fb20a857b6da2feecdb22db58593b7eb1c8e3e78ef05a->leave($__internal_85a64e137b5f2c08354fb20a857b6da2feecdb22db58593b7eb1c8e3e78ef05a_prof);

        
        $__internal_6e232d7db293ba6017266ed9088d898e6aebca9247ac17426860eae5fff52ea0->leave($__internal_6e232d7db293ba6017266ed9088d898e6aebca9247ac17426860eae5fff52ea0_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_e4557ea83310c661da6f59bfb71cd096307be2626e15c48ba843ae008d918740 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4557ea83310c661da6f59bfb71cd096307be2626e15c48ba843ae008d918740->enter($__internal_e4557ea83310c661da6f59bfb71cd096307be2626e15c48ba843ae008d918740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_087a6711f301143c41d9f81dd46c6ab419d4b449c41dae5c072b2225ea635245 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_087a6711f301143c41d9f81dd46c6ab419d4b449c41dae5c072b2225ea635245->enter($__internal_087a6711f301143c41d9f81dd46c6ab419d4b449c41dae5c072b2225ea635245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_087a6711f301143c41d9f81dd46c6ab419d4b449c41dae5c072b2225ea635245->leave($__internal_087a6711f301143c41d9f81dd46c6ab419d4b449c41dae5c072b2225ea635245_prof);

        
        $__internal_e4557ea83310c661da6f59bfb71cd096307be2626e15c48ba843ae008d918740->leave($__internal_e4557ea83310c661da6f59bfb71cd096307be2626e15c48ba843ae008d918740_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/home/patricia/Desktop/kurzy_projekt/kurzy/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
