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
        $__internal_6683c0e3d1e2105235727e2c4b9d1593d1cb21e1e96fc2648319981800499aa9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6683c0e3d1e2105235727e2c4b9d1593d1cb21e1e96fc2648319981800499aa9->enter($__internal_6683c0e3d1e2105235727e2c4b9d1593d1cb21e1e96fc2648319981800499aa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_c743799eb2f05cb41b4ccab790d6c1ab2b96d48aa2fc54ba7ed8ce7d24a12147 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c743799eb2f05cb41b4ccab790d6c1ab2b96d48aa2fc54ba7ed8ce7d24a12147->enter($__internal_c743799eb2f05cb41b4ccab790d6c1ab2b96d48aa2fc54ba7ed8ce7d24a12147_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6683c0e3d1e2105235727e2c4b9d1593d1cb21e1e96fc2648319981800499aa9->leave($__internal_6683c0e3d1e2105235727e2c4b9d1593d1cb21e1e96fc2648319981800499aa9_prof);

        
        $__internal_c743799eb2f05cb41b4ccab790d6c1ab2b96d48aa2fc54ba7ed8ce7d24a12147->leave($__internal_c743799eb2f05cb41b4ccab790d6c1ab2b96d48aa2fc54ba7ed8ce7d24a12147_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6ff159da8e459bfbdbac7199483ad2773ed2894491460fcdac43e39422e6ea69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ff159da8e459bfbdbac7199483ad2773ed2894491460fcdac43e39422e6ea69->enter($__internal_6ff159da8e459bfbdbac7199483ad2773ed2894491460fcdac43e39422e6ea69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_08083b52e75a53825d81075e71edfaa93fac2a33ab3b8cf7d51a9e640c95cc39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08083b52e75a53825d81075e71edfaa93fac2a33ab3b8cf7d51a9e640c95cc39->enter($__internal_08083b52e75a53825d81075e71edfaa93fac2a33ab3b8cf7d51a9e640c95cc39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_08083b52e75a53825d81075e71edfaa93fac2a33ab3b8cf7d51a9e640c95cc39->leave($__internal_08083b52e75a53825d81075e71edfaa93fac2a33ab3b8cf7d51a9e640c95cc39_prof);

        
        $__internal_6ff159da8e459bfbdbac7199483ad2773ed2894491460fcdac43e39422e6ea69->leave($__internal_6ff159da8e459bfbdbac7199483ad2773ed2894491460fcdac43e39422e6ea69_prof);

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
{% endblock %}", "security/login.html.twig", "/home/misko/Documents/git/Kurzy/app/Resources/views/security/login.html.twig");
    }
}
