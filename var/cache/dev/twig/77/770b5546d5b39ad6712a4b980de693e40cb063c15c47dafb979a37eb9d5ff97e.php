<?php

/* security/login.html.twig */
class __TwigTemplate_4bb177b7a5d7f6b54e567686082257f165657b55087539c4bc329e7b2b6786e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_af0e58363206aa9239ddd6682a3c0c32e720aaef64e5749f0d9125afbb4cfdb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af0e58363206aa9239ddd6682a3c0c32e720aaef64e5749f0d9125afbb4cfdb2->enter($__internal_af0e58363206aa9239ddd6682a3c0c32e720aaef64e5749f0d9125afbb4cfdb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_384c61d074096e0c732ea6419aed236f380b7473e5c9e8be502957b9c3f26622 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_384c61d074096e0c732ea6419aed236f380b7473e5c9e8be502957b9c3f26622->enter($__internal_384c61d074096e0c732ea6419aed236f380b7473e5c9e8be502957b9c3f26622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af0e58363206aa9239ddd6682a3c0c32e720aaef64e5749f0d9125afbb4cfdb2->leave($__internal_af0e58363206aa9239ddd6682a3c0c32e720aaef64e5749f0d9125afbb4cfdb2_prof);

        
        $__internal_384c61d074096e0c732ea6419aed236f380b7473e5c9e8be502957b9c3f26622->leave($__internal_384c61d074096e0c732ea6419aed236f380b7473e5c9e8be502957b9c3f26622_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_60578916b234fcec7d6ea97ced0fde64ad9c81c3238c0f42e6b456989da8f7b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60578916b234fcec7d6ea97ced0fde64ad9c81c3238c0f42e6b456989da8f7b9->enter($__internal_60578916b234fcec7d6ea97ced0fde64ad9c81c3238c0f42e6b456989da8f7b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d1b43fa6874a9912ab94949af05e41b9acc5ae3efb8e0006e805e429c2aff12e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1b43fa6874a9912ab94949af05e41b9acc5ae3efb8e0006e805e429c2aff12e->enter($__internal_d1b43fa6874a9912ab94949af05e41b9acc5ae3efb8e0006e805e429c2aff12e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 5
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 7
        echo "
    <form action=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" method=\"post\">
        <label for=\"username\">Username:</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

        <label for=\"password\">Password:</label>
        <input type=\"password\" id=\"password\" name=\"_password\" />

        ";
        // line 20
        echo "
        <button type=\"submit\">login</button>
    </form>
";
        
        $__internal_d1b43fa6874a9912ab94949af05e41b9acc5ae3efb8e0006e805e429c2aff12e->leave($__internal_d1b43fa6874a9912ab94949af05e41b9acc5ae3efb8e0006e805e429c2aff12e_prof);

        
        $__internal_60578916b234fcec7d6ea97ced0fde64ad9c81c3238c0f42e6b456989da8f7b9->leave($__internal_60578916b234fcec7d6ea97ced0fde64ad9c81c3238c0f42e6b456989da8f7b9_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 20,  66 => 10,  61 => 8,  58 => 7,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    {% if error %}
        <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}

    <form action=\"{{ path('login') }}\" method=\"post\">
        <label for=\"username\">Username:</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" />

        <label for=\"password\">Password:</label>
        <input type=\"password\" id=\"password\" name=\"_password\" />

        {#
            If you want to control the URL the user
            is redirected to on success (more details below)
            <input type=\"hidden\" name=\"_target_path\" value=\"/account\" />
        #}

        <button type=\"submit\">login</button>
    </form>
{% endblock %}", "security/login.html.twig", "/home/andrea/Desktop/CaviarIT/Kurzy/app/Resources/views/security/login.html.twig");
    }
}
