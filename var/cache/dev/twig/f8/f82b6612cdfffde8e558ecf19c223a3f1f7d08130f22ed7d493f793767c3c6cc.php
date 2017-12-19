<?php

/* coursetype/show.html.twig */
class __TwigTemplate_22a3d25636fcf7f0cd5fb279c8b1083ad68d030d75d9dea855ee6aa7e7a369a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "coursetype/show.html.twig", 1);
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
        $__internal_1350a3621dd91a43a78e1681742cd60bc26716ad236d066b45d033b6f079c7b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1350a3621dd91a43a78e1681742cd60bc26716ad236d066b45d033b6f079c7b3->enter($__internal_1350a3621dd91a43a78e1681742cd60bc26716ad236d066b45d033b6f079c7b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "coursetype/show.html.twig"));

        $__internal_febebbb58053dfea7f3d4c97f461fb5fbbcfedfe4019e8784ed95e011de63c44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_febebbb58053dfea7f3d4c97f461fb5fbbcfedfe4019e8784ed95e011de63c44->enter($__internal_febebbb58053dfea7f3d4c97f461fb5fbbcfedfe4019e8784ed95e011de63c44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "coursetype/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1350a3621dd91a43a78e1681742cd60bc26716ad236d066b45d033b6f079c7b3->leave($__internal_1350a3621dd91a43a78e1681742cd60bc26716ad236d066b45d033b6f079c7b3_prof);

        
        $__internal_febebbb58053dfea7f3d4c97f461fb5fbbcfedfe4019e8784ed95e011de63c44->leave($__internal_febebbb58053dfea7f3d4c97f461fb5fbbcfedfe4019e8784ed95e011de63c44_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fed612eda529468293fd3e9f856f4beda8568ceda5f6e96733380887b9285536 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fed612eda529468293fd3e9f856f4beda8568ceda5f6e96733380887b9285536->enter($__internal_fed612eda529468293fd3e9f856f4beda8568ceda5f6e96733380887b9285536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a8671ba78092cd681500e49ee8f913c9272a05ba885b1d89964d5cde5c977b7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8671ba78092cd681500e49ee8f913c9272a05ba885b1d89964d5cde5c977b7d->enter($__internal_a8671ba78092cd681500e49ee8f913c9272a05ba885b1d89964d5cde5c977b7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Coursetype</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["courseType"] ?? $this->getContext($context, "courseType")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["courseType"] ?? $this->getContext($context, "courseType")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["courseType"] ?? $this->getContext($context, "courseType")), "description", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Softprerequisites</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["courseType"] ?? $this->getContext($context, "courseType")), "softPrerequisites", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Visibility</th>
                <td>";
        // line 26
        if ($this->getAttribute(($context["courseType"] ?? $this->getContext($context, "courseType")), "visibility", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Deleted</th>
                <td>";
        // line 30
        if ($this->getAttribute(($context["courseType"] ?? $this->getContext($context, "courseType")), "deleted", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("coursetype_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("coursetype_edit", array("id" => $this->getAttribute(($context["courseType"] ?? $this->getContext($context, "courseType")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_a8671ba78092cd681500e49ee8f913c9272a05ba885b1d89964d5cde5c977b7d->leave($__internal_a8671ba78092cd681500e49ee8f913c9272a05ba885b1d89964d5cde5c977b7d_prof);

        
        $__internal_fed612eda529468293fd3e9f856f4beda8568ceda5f6e96733380887b9285536->leave($__internal_fed612eda529468293fd3e9f856f4beda8568ceda5f6e96733380887b9285536_prof);

    }

    public function getTemplateName()
    {
        return "coursetype/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 45,  122 => 43,  116 => 40,  110 => 37,  96 => 30,  85 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Coursetype</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ courseType.id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ courseType.name }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ courseType.description }}</td>
            </tr>
            <tr>
                <th>Softprerequisites</th>
                <td>{{ courseType.softPrerequisites }}</td>
            </tr>
            <tr>
                <th>Visibility</th>
                <td>{% if courseType.visibility %}Yes{% else %}No{% endif %}</td>
            </tr>
            <tr>
                <th>Deleted</th>
                <td>{% if courseType.deleted %}Yes{% else %}No{% endif %}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('coursetype_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('coursetype_edit', { 'id': courseType.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "coursetype/show.html.twig", "/home/patricia/Desktop/kurzy_projekt/kurzy/app/Resources/views/coursetype/show.html.twig");
    }
}
