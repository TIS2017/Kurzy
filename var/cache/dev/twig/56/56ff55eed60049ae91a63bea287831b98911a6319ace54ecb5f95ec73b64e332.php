<?php

/* role/index.html.twig */
class __TwigTemplate_21ec334c018ba43f1bf9a013b0404da80b9a3dfc0a57985f95bdaefa0453f072 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "role/index.html.twig", 1);
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
        $__internal_70a689a9e62c47202400b7dc0f35e80b69357701d291d63ba26b3dd0f596fdc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70a689a9e62c47202400b7dc0f35e80b69357701d291d63ba26b3dd0f596fdc3->enter($__internal_70a689a9e62c47202400b7dc0f35e80b69357701d291d63ba26b3dd0f596fdc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "role/index.html.twig"));

        $__internal_ff881eb27ebe058d17175cba7c9f48764862c054f9e8794ca997f898915eee88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff881eb27ebe058d17175cba7c9f48764862c054f9e8794ca997f898915eee88->enter($__internal_ff881eb27ebe058d17175cba7c9f48764862c054f9e8794ca997f898915eee88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "role/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70a689a9e62c47202400b7dc0f35e80b69357701d291d63ba26b3dd0f596fdc3->leave($__internal_70a689a9e62c47202400b7dc0f35e80b69357701d291d63ba26b3dd0f596fdc3_prof);

        
        $__internal_ff881eb27ebe058d17175cba7c9f48764862c054f9e8794ca997f898915eee88->leave($__internal_ff881eb27ebe058d17175cba7c9f48764862c054f9e8794ca997f898915eee88_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_867d009dc2fdacaae50bb1176cc8d5265d0f9d2713329c9aa65379495bca4057 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_867d009dc2fdacaae50bb1176cc8d5265d0f9d2713329c9aa65379495bca4057->enter($__internal_867d009dc2fdacaae50bb1176cc8d5265d0f9d2713329c9aa65379495bca4057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_08f8afc09587bffb8815919444157a1125a9118eb4e382e5bd4bccbf45eb7543 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08f8afc09587bffb8815919444157a1125a9118eb4e382e5bd4bccbf45eb7543->enter($__internal_08f8afc09587bffb8815919444157a1125a9118eb4e382e5bd4bccbf45eb7543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Roles list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["roles"] ?? $this->getContext($context, "roles")));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 16
            echo "            <tr>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("role_show", array("id" => $this->getAttribute($context["role"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["role"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["role"], "name", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("role_show", array("id" => $this->getAttribute($context["role"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("role_edit", array("id" => $this->getAttribute($context["role"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("role_new");
        echo "\">Create a new role</a>
        </li>
    </ul>
";
        
        $__internal_08f8afc09587bffb8815919444157a1125a9118eb4e382e5bd4bccbf45eb7543->leave($__internal_08f8afc09587bffb8815919444157a1125a9118eb4e382e5bd4bccbf45eb7543_prof);

        
        $__internal_867d009dc2fdacaae50bb1176cc8d5265d0f9d2713329c9aa65379495bca4057->leave($__internal_867d009dc2fdacaae50bb1176cc8d5265d0f9d2713329c9aa65379495bca4057_prof);

    }

    public function getTemplateName()
    {
        return "role/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 36,  100 => 31,  88 => 25,  82 => 22,  75 => 18,  69 => 17,  66 => 16,  62 => 15,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Roles list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for role in roles %}
            <tr>
                <td><a href=\"{{ path('role_show', { 'id': role.id }) }}\">{{ role.id }}</a></td>
                <td>{{ role.name }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('role_show', { 'id': role.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('role_edit', { 'id': role.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('role_new') }}\">Create a new role</a>
        </li>
    </ul>
{% endblock %}
", "role/index.html.twig", "/home/patricia/Desktop/kurzy_projekt/kurzy/app/Resources/views/role/index.html.twig");
    }
}
