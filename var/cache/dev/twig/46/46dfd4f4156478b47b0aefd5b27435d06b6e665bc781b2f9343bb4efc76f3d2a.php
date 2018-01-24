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
        $__internal_bd0dd0d63a68bd3db0f155904d8086aa945f05be3a60ba8ed2f613c0108b4109 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd0dd0d63a68bd3db0f155904d8086aa945f05be3a60ba8ed2f613c0108b4109->enter($__internal_bd0dd0d63a68bd3db0f155904d8086aa945f05be3a60ba8ed2f613c0108b4109_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_ede6cdb4ef8697b670de557c2f8cca12696eb866a360a8b0be29084b6d65b87b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ede6cdb4ef8697b670de557c2f8cca12696eb866a360a8b0be29084b6d65b87b->enter($__internal_ede6cdb4ef8697b670de557c2f8cca12696eb866a360a8b0be29084b6d65b87b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_bd0dd0d63a68bd3db0f155904d8086aa945f05be3a60ba8ed2f613c0108b4109->leave($__internal_bd0dd0d63a68bd3db0f155904d8086aa945f05be3a60ba8ed2f613c0108b4109_prof);

        
        $__internal_ede6cdb4ef8697b670de557c2f8cca12696eb866a360a8b0be29084b6d65b87b->leave($__internal_ede6cdb4ef8697b670de557c2f8cca12696eb866a360a8b0be29084b6d65b87b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6b75748899c8b656898e15a0b6e083b50b19c9b3730fa260f48a29e0074adaa7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b75748899c8b656898e15a0b6e083b50b19c9b3730fa260f48a29e0074adaa7->enter($__internal_6b75748899c8b656898e15a0b6e083b50b19c9b3730fa260f48a29e0074adaa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c1c9ea25b266d2034d471132473bf3500160b70343883edb2c09b26f3922602c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1c9ea25b266d2034d471132473bf3500160b70343883edb2c09b26f3922602c->enter($__internal_c1c9ea25b266d2034d471132473bf3500160b70343883edb2c09b26f3922602c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_c1c9ea25b266d2034d471132473bf3500160b70343883edb2c09b26f3922602c->leave($__internal_c1c9ea25b266d2034d471132473bf3500160b70343883edb2c09b26f3922602c_prof);

        
        $__internal_6b75748899c8b656898e15a0b6e083b50b19c9b3730fa260f48a29e0074adaa7->leave($__internal_6b75748899c8b656898e15a0b6e083b50b19c9b3730fa260f48a29e0074adaa7_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_f0fbe67e960b01a5964464adfd4780ac706b0507214191a643754b3f305c52a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0fbe67e960b01a5964464adfd4780ac706b0507214191a643754b3f305c52a7->enter($__internal_f0fbe67e960b01a5964464adfd4780ac706b0507214191a643754b3f305c52a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0d954984420e86dc6bf4146d8b910e7cb51f5ee0ea835f9d64c2d7d7164ccc32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d954984420e86dc6bf4146d8b910e7cb51f5ee0ea835f9d64c2d7d7164ccc32->enter($__internal_0d954984420e86dc6bf4146d8b910e7cb51f5ee0ea835f9d64c2d7d7164ccc32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_0d954984420e86dc6bf4146d8b910e7cb51f5ee0ea835f9d64c2d7d7164ccc32->leave($__internal_0d954984420e86dc6bf4146d8b910e7cb51f5ee0ea835f9d64c2d7d7164ccc32_prof);

        
        $__internal_f0fbe67e960b01a5964464adfd4780ac706b0507214191a643754b3f305c52a7->leave($__internal_f0fbe67e960b01a5964464adfd4780ac706b0507214191a643754b3f305c52a7_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_21c98c0aef7b06f239f26184fefecbcd5c00a82fdf99a4ae49f22b9a59197dbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21c98c0aef7b06f239f26184fefecbcd5c00a82fdf99a4ae49f22b9a59197dbd->enter($__internal_21c98c0aef7b06f239f26184fefecbcd5c00a82fdf99a4ae49f22b9a59197dbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c14bb1fc0a31ce88a6f44ed7a7fcade7b2971d631b359b57cbd39fde199bb7df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c14bb1fc0a31ce88a6f44ed7a7fcade7b2971d631b359b57cbd39fde199bb7df->enter($__internal_c14bb1fc0a31ce88a6f44ed7a7fcade7b2971d631b359b57cbd39fde199bb7df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c14bb1fc0a31ce88a6f44ed7a7fcade7b2971d631b359b57cbd39fde199bb7df->leave($__internal_c14bb1fc0a31ce88a6f44ed7a7fcade7b2971d631b359b57cbd39fde199bb7df_prof);

        
        $__internal_21c98c0aef7b06f239f26184fefecbcd5c00a82fdf99a4ae49f22b9a59197dbd->leave($__internal_21c98c0aef7b06f239f26184fefecbcd5c00a82fdf99a4ae49f22b9a59197dbd_prof);

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
", "@Twig/layout.html.twig", "/home/misko/Documents/git/Kurzy/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
