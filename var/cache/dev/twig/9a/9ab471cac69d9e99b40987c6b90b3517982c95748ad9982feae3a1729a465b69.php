<?php

/* email/index.html.twig */
class __TwigTemplate_a4c11c15f6eab92448d587e2923de578e23411b390d9802c5e0772bc8c21a0a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "email/index.html.twig", 1);
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
        $__internal_a0350317b716f396ca62e3238e73286c8f064dff6895d85016846aa47538b255 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0350317b716f396ca62e3238e73286c8f064dff6895d85016846aa47538b255->enter($__internal_a0350317b716f396ca62e3238e73286c8f064dff6895d85016846aa47538b255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "email/index.html.twig"));

        $__internal_f097281f044e7cb1d85c0b9f2fe09025bc064079f0f468cfbe052c651349973d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f097281f044e7cb1d85c0b9f2fe09025bc064079f0f468cfbe052c651349973d->enter($__internal_f097281f044e7cb1d85c0b9f2fe09025bc064079f0f468cfbe052c651349973d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "email/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0350317b716f396ca62e3238e73286c8f064dff6895d85016846aa47538b255->leave($__internal_a0350317b716f396ca62e3238e73286c8f064dff6895d85016846aa47538b255_prof);

        
        $__internal_f097281f044e7cb1d85c0b9f2fe09025bc064079f0f468cfbe052c651349973d->leave($__internal_f097281f044e7cb1d85c0b9f2fe09025bc064079f0f468cfbe052c651349973d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8ffb37a3b05a8b6b62aefdd1b940264e051a15c9fe5595ba218c41c871525b37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ffb37a3b05a8b6b62aefdd1b940264e051a15c9fe5595ba218c41c871525b37->enter($__internal_8ffb37a3b05a8b6b62aefdd1b940264e051a15c9fe5595ba218c41c871525b37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c318f23f32da1d529d78ca5bbe4da6cd539e0d345eaeb7662ac2c5d1a8ed3ca1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c318f23f32da1d529d78ca5bbe4da6cd539e0d345eaeb7662ac2c5d1a8ed3ca1->enter($__internal_c318f23f32da1d529d78ca5bbe4da6cd539e0d345eaeb7662ac2c5d1a8ed3ca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Emails list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["emails"] ?? $this->getContext($context, "emails")));
        foreach ($context['_seq'] as $context["_key"] => $context["email"]) {
            // line 16
            echo "            <tr>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("email_show", array("id" => $this->getAttribute($context["email"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["email"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["email"], "email", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("email_show", array("id" => $this->getAttribute($context["email"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("email_edit", array("id" => $this->getAttribute($context["email"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['email'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("email_new");
        echo "\">Create a new email</a>
        </li>
    </ul>
";
        
        $__internal_c318f23f32da1d529d78ca5bbe4da6cd539e0d345eaeb7662ac2c5d1a8ed3ca1->leave($__internal_c318f23f32da1d529d78ca5bbe4da6cd539e0d345eaeb7662ac2c5d1a8ed3ca1_prof);

        
        $__internal_8ffb37a3b05a8b6b62aefdd1b940264e051a15c9fe5595ba218c41c871525b37->leave($__internal_8ffb37a3b05a8b6b62aefdd1b940264e051a15c9fe5595ba218c41c871525b37_prof);

    }

    public function getTemplateName()
    {
        return "email/index.html.twig";
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
    <h1>Emails list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for email in emails %}
            <tr>
                <td><a href=\"{{ path('email_show', { 'id': email.id }) }}\">{{ email.id }}</a></td>
                <td>{{ email.email }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('email_show', { 'id': email.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('email_edit', { 'id': email.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('email_new') }}\">Create a new email</a>
        </li>
    </ul>
{% endblock %}
", "email/index.html.twig", "/home/patricia/Desktop/kurzy_projekt/kurzy/app/Resources/views/email/index.html.twig");
    }
}
