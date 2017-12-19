<?php

/* workplace/show.html.twig */
class __TwigTemplate_34a4dbaec051994d7ffa7fb89b1584bd0673ad86da8d862b3c3750ba6a4d9bc2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "workplace/show.html.twig", 1);
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
        $__internal_3a2320785ed137786fa1136839a2ed187d039e30c8b687e181f7332cbdc67b4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a2320785ed137786fa1136839a2ed187d039e30c8b687e181f7332cbdc67b4d->enter($__internal_3a2320785ed137786fa1136839a2ed187d039e30c8b687e181f7332cbdc67b4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "workplace/show.html.twig"));

        $__internal_5b0da37289ea66dd20221a4447157c4878f90b784ea703724b360668c255b6a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b0da37289ea66dd20221a4447157c4878f90b784ea703724b360668c255b6a6->enter($__internal_5b0da37289ea66dd20221a4447157c4878f90b784ea703724b360668c255b6a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "workplace/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a2320785ed137786fa1136839a2ed187d039e30c8b687e181f7332cbdc67b4d->leave($__internal_3a2320785ed137786fa1136839a2ed187d039e30c8b687e181f7332cbdc67b4d_prof);

        
        $__internal_5b0da37289ea66dd20221a4447157c4878f90b784ea703724b360668c255b6a6->leave($__internal_5b0da37289ea66dd20221a4447157c4878f90b784ea703724b360668c255b6a6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9fe97041c7ff554dca6a3ad31da30ecb4695ea7648d8cef4dbb8cc3ad8c1c695 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fe97041c7ff554dca6a3ad31da30ecb4695ea7648d8cef4dbb8cc3ad8c1c695->enter($__internal_9fe97041c7ff554dca6a3ad31da30ecb4695ea7648d8cef4dbb8cc3ad8c1c695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e2338f6369246624591ac0a00f443f080c6d114a4f70f2c8b25fbe6eb05ae632 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2338f6369246624591ac0a00f443f080c6d114a4f70f2c8b25fbe6eb05ae632->enter($__internal_e2338f6369246624591ac0a00f443f080c6d114a4f70f2c8b25fbe6eb05ae632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Workplace</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["workplace"] ?? $this->getContext($context, "workplace")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["workplace"] ?? $this->getContext($context, "workplace")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Parent</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["workplace"] ?? $this->getContext($context, "workplace")), "parent", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("workplace_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("workplace_edit", array("id" => $this->getAttribute(($context["workplace"] ?? $this->getContext($context, "workplace")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_e2338f6369246624591ac0a00f443f080c6d114a4f70f2c8b25fbe6eb05ae632->leave($__internal_e2338f6369246624591ac0a00f443f080c6d114a4f70f2c8b25fbe6eb05ae632_prof);

        
        $__internal_9fe97041c7ff554dca6a3ad31da30ecb4695ea7648d8cef4dbb8cc3ad8c1c695->leave($__internal_9fe97041c7ff554dca6a3ad31da30ecb4695ea7648d8cef4dbb8cc3ad8c1c695_prof);

    }

    public function getTemplateName()
    {
        return "workplace/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 33,  93 => 31,  87 => 28,  81 => 25,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Workplace</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ workplace.id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ workplace.name }}</td>
            </tr>
            <tr>
                <th>Parent</th>
                <td>{{ workplace.parent }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('workplace_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('workplace_edit', { 'id': workplace.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "workplace/show.html.twig", "/home/patricia/Desktop/kurzy_projekt/kurzy/app/Resources/views/workplace/show.html.twig");
    }
}
