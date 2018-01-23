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
            'login' => array($this, 'block_login'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_47a49b7c1da08f27384c45d2526ec73f5343e498e05a125000c790df40082984 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47a49b7c1da08f27384c45d2526ec73f5343e498e05a125000c790df40082984->enter($__internal_47a49b7c1da08f27384c45d2526ec73f5343e498e05a125000c790df40082984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_017b58ebe39b47debbd1eb86aee3894a9565aab7e3a379b142e59391648aa12d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_017b58ebe39b47debbd1eb86aee3894a9565aab7e3a379b142e59391648aa12d->enter($__internal_017b58ebe39b47debbd1eb86aee3894a9565aab7e3a379b142e59391648aa12d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47a49b7c1da08f27384c45d2526ec73f5343e498e05a125000c790df40082984->leave($__internal_47a49b7c1da08f27384c45d2526ec73f5343e498e05a125000c790df40082984_prof);

        
        $__internal_017b58ebe39b47debbd1eb86aee3894a9565aab7e3a379b142e59391648aa12d->leave($__internal_017b58ebe39b47debbd1eb86aee3894a9565aab7e3a379b142e59391648aa12d_prof);

    }

    // line 3
    public function block_login($context, array $blocks = array())
    {
        $__internal_b6c894e268bee1a41731ed1c03e642f1adb541ebf2ee48cc56a3b28162dcf954 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6c894e268bee1a41731ed1c03e642f1adb541ebf2ee48cc56a3b28162dcf954->enter($__internal_b6c894e268bee1a41731ed1c03e642f1adb541ebf2ee48cc56a3b28162dcf954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "login"));

        $__internal_cc38cba7ba50fb4d50aa421a7d982f771370dc0e2700292f30c9a404f0fdc7fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc38cba7ba50fb4d50aa421a7d982f771370dc0e2700292f30c9a404f0fdc7fa->enter($__internal_cc38cba7ba50fb4d50aa421a7d982f771370dc0e2700292f30c9a404f0fdc7fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "login"));

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
        
        $__internal_cc38cba7ba50fb4d50aa421a7d982f771370dc0e2700292f30c9a404f0fdc7fa->leave($__internal_cc38cba7ba50fb4d50aa421a7d982f771370dc0e2700292f30c9a404f0fdc7fa_prof);

        
        $__internal_b6c894e268bee1a41731ed1c03e642f1adb541ebf2ee48cc56a3b28162dcf954->leave($__internal_b6c894e268bee1a41731ed1c03e642f1adb541ebf2ee48cc56a3b28162dcf954_prof);

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

{% block login %}
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
{% endblock %}", "security/login.html.twig", "/home/patricia/Desktop/kurzy_projekt/kurzy/app/Resources/views/security/login.html.twig");
    }
}
