<?php

/* email/show.html.twig */
class __TwigTemplate_e8385b7340d1953edf4ba7e9f3c3653e5d9682650221793bde08995611af3dae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "email/show.html.twig", 1);
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
        $__internal_f6fa7c097319cc30e0e33475c91f7a02c1a33715a065e284cb70c0d2de47c7cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6fa7c097319cc30e0e33475c91f7a02c1a33715a065e284cb70c0d2de47c7cb->enter($__internal_f6fa7c097319cc30e0e33475c91f7a02c1a33715a065e284cb70c0d2de47c7cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "email/show.html.twig"));

        $__internal_804577c66ebdf3290ad3fa26b4cd0ef89286acc89106b4a209f097fb07721837 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_804577c66ebdf3290ad3fa26b4cd0ef89286acc89106b4a209f097fb07721837->enter($__internal_804577c66ebdf3290ad3fa26b4cd0ef89286acc89106b4a209f097fb07721837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "email/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6fa7c097319cc30e0e33475c91f7a02c1a33715a065e284cb70c0d2de47c7cb->leave($__internal_f6fa7c097319cc30e0e33475c91f7a02c1a33715a065e284cb70c0d2de47c7cb_prof);

        
        $__internal_804577c66ebdf3290ad3fa26b4cd0ef89286acc89106b4a209f097fb07721837->leave($__internal_804577c66ebdf3290ad3fa26b4cd0ef89286acc89106b4a209f097fb07721837_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4d5c9b6d5bdf7fafe6eddbe7657dee721dd7a8cabc7b55de84151874533f7f2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d5c9b6d5bdf7fafe6eddbe7657dee721dd7a8cabc7b55de84151874533f7f2f->enter($__internal_4d5c9b6d5bdf7fafe6eddbe7657dee721dd7a8cabc7b55de84151874533f7f2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cde37d86d9512d91783b4bab3d6ffe340fb184ce3d62cb2c1f6d1a9c4061bae0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cde37d86d9512d91783b4bab3d6ffe340fb184ce3d62cb2c1f6d1a9c4061bae0->enter($__internal_cde37d86d9512d91783b4bab3d6ffe340fb184ce3d62cb2c1f6d1a9c4061bae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Email</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["email"] ?? $this->getContext($context, "email")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["email"] ?? $this->getContext($context, "email")), "email", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("email_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("email_edit", array("id" => $this->getAttribute(($context["email"] ?? $this->getContext($context, "email")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_cde37d86d9512d91783b4bab3d6ffe340fb184ce3d62cb2c1f6d1a9c4061bae0->leave($__internal_cde37d86d9512d91783b4bab3d6ffe340fb184ce3d62cb2c1f6d1a9c4061bae0_prof);

        
        $__internal_4d5c9b6d5bdf7fafe6eddbe7657dee721dd7a8cabc7b55de84151874533f7f2f->leave($__internal_4d5c9b6d5bdf7fafe6eddbe7657dee721dd7a8cabc7b55de84151874533f7f2f_prof);

    }

    public function getTemplateName()
    {
        return "email/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 29,  86 => 27,  80 => 24,  74 => 21,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Email</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ email.id }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ email.email }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('email_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('email_edit', { 'id': email.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "email/show.html.twig", "/home/patricia/Desktop/kurzy_projekt/kurzy/app/Resources/views/email/show.html.twig");
    }
}
