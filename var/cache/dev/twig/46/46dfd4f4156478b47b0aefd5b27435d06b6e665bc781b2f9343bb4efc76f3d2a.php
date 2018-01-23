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
        $__internal_ef5a813496e27f618d7664b4c9c9b59b864fa48afd2af5fb37e8e51c1253802b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef5a813496e27f618d7664b4c9c9b59b864fa48afd2af5fb37e8e51c1253802b->enter($__internal_ef5a813496e27f618d7664b4c9c9b59b864fa48afd2af5fb37e8e51c1253802b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_8b857d3b834784c083bb324ba7020d97c8a58bc2cc45d4abff07610457a938cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b857d3b834784c083bb324ba7020d97c8a58bc2cc45d4abff07610457a938cd->enter($__internal_8b857d3b834784c083bb324ba7020d97c8a58bc2cc45d4abff07610457a938cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_ef5a813496e27f618d7664b4c9c9b59b864fa48afd2af5fb37e8e51c1253802b->leave($__internal_ef5a813496e27f618d7664b4c9c9b59b864fa48afd2af5fb37e8e51c1253802b_prof);

        
        $__internal_8b857d3b834784c083bb324ba7020d97c8a58bc2cc45d4abff07610457a938cd->leave($__internal_8b857d3b834784c083bb324ba7020d97c8a58bc2cc45d4abff07610457a938cd_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d373262038953d88fe40a803b1fbddb3028d43abb647f71b478ee1f4d5730721 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d373262038953d88fe40a803b1fbddb3028d43abb647f71b478ee1f4d5730721->enter($__internal_d373262038953d88fe40a803b1fbddb3028d43abb647f71b478ee1f4d5730721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_52bf03f8a1c0c2ca3fca02005f3e71cb582ca21eeac50c9761bfc4709d9a6d9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52bf03f8a1c0c2ca3fca02005f3e71cb582ca21eeac50c9761bfc4709d9a6d9d->enter($__internal_52bf03f8a1c0c2ca3fca02005f3e71cb582ca21eeac50c9761bfc4709d9a6d9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_52bf03f8a1c0c2ca3fca02005f3e71cb582ca21eeac50c9761bfc4709d9a6d9d->leave($__internal_52bf03f8a1c0c2ca3fca02005f3e71cb582ca21eeac50c9761bfc4709d9a6d9d_prof);

        
        $__internal_d373262038953d88fe40a803b1fbddb3028d43abb647f71b478ee1f4d5730721->leave($__internal_d373262038953d88fe40a803b1fbddb3028d43abb647f71b478ee1f4d5730721_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_f0a9b04cfc7b0710450d86ae9c0509c18f154a74fd874e05394caccb8803816c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0a9b04cfc7b0710450d86ae9c0509c18f154a74fd874e05394caccb8803816c->enter($__internal_f0a9b04cfc7b0710450d86ae9c0509c18f154a74fd874e05394caccb8803816c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4257ca7dd9dae18ab9f9fdc708ae628fb5222a0a510a39db93114e800558fe0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4257ca7dd9dae18ab9f9fdc708ae628fb5222a0a510a39db93114e800558fe0d->enter($__internal_4257ca7dd9dae18ab9f9fdc708ae628fb5222a0a510a39db93114e800558fe0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_4257ca7dd9dae18ab9f9fdc708ae628fb5222a0a510a39db93114e800558fe0d->leave($__internal_4257ca7dd9dae18ab9f9fdc708ae628fb5222a0a510a39db93114e800558fe0d_prof);

        
        $__internal_f0a9b04cfc7b0710450d86ae9c0509c18f154a74fd874e05394caccb8803816c->leave($__internal_f0a9b04cfc7b0710450d86ae9c0509c18f154a74fd874e05394caccb8803816c_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_139030d7bfc8f8a1362c30f6ce2849edcdb9ae10920db3b6de5c3468f7baf76f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_139030d7bfc8f8a1362c30f6ce2849edcdb9ae10920db3b6de5c3468f7baf76f->enter($__internal_139030d7bfc8f8a1362c30f6ce2849edcdb9ae10920db3b6de5c3468f7baf76f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6252b018b63d3e2ca8b3bef13393185635439e2995845cc46fe5be5e1951c775 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6252b018b63d3e2ca8b3bef13393185635439e2995845cc46fe5be5e1951c775->enter($__internal_6252b018b63d3e2ca8b3bef13393185635439e2995845cc46fe5be5e1951c775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6252b018b63d3e2ca8b3bef13393185635439e2995845cc46fe5be5e1951c775->leave($__internal_6252b018b63d3e2ca8b3bef13393185635439e2995845cc46fe5be5e1951c775_prof);

        
        $__internal_139030d7bfc8f8a1362c30f6ce2849edcdb9ae10920db3b6de5c3468f7baf76f->leave($__internal_139030d7bfc8f8a1362c30f6ce2849edcdb9ae10920db3b6de5c3468f7baf76f_prof);

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
", "@Twig/layout.html.twig", "/home/dana/Kurzy/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
