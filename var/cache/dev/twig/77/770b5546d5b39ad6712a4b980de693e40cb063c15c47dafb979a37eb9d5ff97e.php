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
        $__internal_e7194720dfd65838580df3479b6d252384ba29e55cf2220f5285691263d9590b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7194720dfd65838580df3479b6d252384ba29e55cf2220f5285691263d9590b->enter($__internal_e7194720dfd65838580df3479b6d252384ba29e55cf2220f5285691263d9590b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_0821c6b8ef711ac68757a23ad28f1ad0f0d2a7e3aa5eb861f443ecae7919cd11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0821c6b8ef711ac68757a23ad28f1ad0f0d2a7e3aa5eb861f443ecae7919cd11->enter($__internal_0821c6b8ef711ac68757a23ad28f1ad0f0d2a7e3aa5eb861f443ecae7919cd11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7194720dfd65838580df3479b6d252384ba29e55cf2220f5285691263d9590b->leave($__internal_e7194720dfd65838580df3479b6d252384ba29e55cf2220f5285691263d9590b_prof);

        
        $__internal_0821c6b8ef711ac68757a23ad28f1ad0f0d2a7e3aa5eb861f443ecae7919cd11->leave($__internal_0821c6b8ef711ac68757a23ad28f1ad0f0d2a7e3aa5eb861f443ecae7919cd11_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_da1f0dc317ee06b2f479e08a402add6038789ffe0f57fb70cf9a1b716e28fd44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da1f0dc317ee06b2f479e08a402add6038789ffe0f57fb70cf9a1b716e28fd44->enter($__internal_da1f0dc317ee06b2f479e08a402add6038789ffe0f57fb70cf9a1b716e28fd44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bb5067b111fb2ea740b9c6147b44cdfa64ab9a8de43f53c41710736db22af706 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb5067b111fb2ea740b9c6147b44cdfa64ab9a8de43f53c41710736db22af706->enter($__internal_bb5067b111fb2ea740b9c6147b44cdfa64ab9a8de43f53c41710736db22af706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_bb5067b111fb2ea740b9c6147b44cdfa64ab9a8de43f53c41710736db22af706->leave($__internal_bb5067b111fb2ea740b9c6147b44cdfa64ab9a8de43f53c41710736db22af706_prof);

        
        $__internal_da1f0dc317ee06b2f479e08a402add6038789ffe0f57fb70cf9a1b716e28fd44->leave($__internal_da1f0dc317ee06b2f479e08a402add6038789ffe0f57fb70cf9a1b716e28fd44_prof);

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
{% endblock %}", "security/login.html.twig", "/home/dana/Kurzy/app/Resources/views/security/login.html.twig");
    }
}
