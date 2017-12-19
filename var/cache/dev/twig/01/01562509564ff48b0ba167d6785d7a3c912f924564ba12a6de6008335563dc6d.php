<?php

/* coursesoftprerequisite/show.html.twig */
class __TwigTemplate_1623da9aab84fb4adfc3173bb4d8e8da39cb028cb03eb6cfaac47715a49f75e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "coursesoftprerequisite/show.html.twig", 1);
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
        $__internal_299ebbd7e99b5730db5f3b5e59ce60f5529436d28bd5b9cc62b105ab16cbfb49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_299ebbd7e99b5730db5f3b5e59ce60f5529436d28bd5b9cc62b105ab16cbfb49->enter($__internal_299ebbd7e99b5730db5f3b5e59ce60f5529436d28bd5b9cc62b105ab16cbfb49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "coursesoftprerequisite/show.html.twig"));

        $__internal_3924823bf25b5f956d9a3023058c8eae936a8bcae7640d1a6b33c71956293a37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3924823bf25b5f956d9a3023058c8eae936a8bcae7640d1a6b33c71956293a37->enter($__internal_3924823bf25b5f956d9a3023058c8eae936a8bcae7640d1a6b33c71956293a37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "coursesoftprerequisite/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_299ebbd7e99b5730db5f3b5e59ce60f5529436d28bd5b9cc62b105ab16cbfb49->leave($__internal_299ebbd7e99b5730db5f3b5e59ce60f5529436d28bd5b9cc62b105ab16cbfb49_prof);

        
        $__internal_3924823bf25b5f956d9a3023058c8eae936a8bcae7640d1a6b33c71956293a37->leave($__internal_3924823bf25b5f956d9a3023058c8eae936a8bcae7640d1a6b33c71956293a37_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7afe059757920fa82cd0420476a7eea7d3df18a4bfdaa863b62baab29336e54b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7afe059757920fa82cd0420476a7eea7d3df18a4bfdaa863b62baab29336e54b->enter($__internal_7afe059757920fa82cd0420476a7eea7d3df18a4bfdaa863b62baab29336e54b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1ba496bfc6f5afabd2f6de2b9bc9ce9dfa2d231cdbad105bce00030397d7ff7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ba496bfc6f5afabd2f6de2b9bc9ce9dfa2d231cdbad105bce00030397d7ff7f->enter($__internal_1ba496bfc6f5afabd2f6de2b9bc9ce9dfa2d231cdbad105bce00030397d7ff7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Coursesoftprerequisite</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["courseSoftPrerequisite"] ?? $this->getContext($context, "courseSoftPrerequisite")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Value</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["courseSoftPrerequisite"] ?? $this->getContext($context, "courseSoftPrerequisite")), "value", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("coursesoftprerequisite_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("coursesoftprerequisite_edit", array("id" => $this->getAttribute(($context["courseSoftPrerequisite"] ?? $this->getContext($context, "courseSoftPrerequisite")), "id", array()))), "html", null, true);
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
        
        $__internal_1ba496bfc6f5afabd2f6de2b9bc9ce9dfa2d231cdbad105bce00030397d7ff7f->leave($__internal_1ba496bfc6f5afabd2f6de2b9bc9ce9dfa2d231cdbad105bce00030397d7ff7f_prof);

        
        $__internal_7afe059757920fa82cd0420476a7eea7d3df18a4bfdaa863b62baab29336e54b->leave($__internal_7afe059757920fa82cd0420476a7eea7d3df18a4bfdaa863b62baab29336e54b_prof);

    }

    public function getTemplateName()
    {
        return "coursesoftprerequisite/show.html.twig";
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
    <h1>Coursesoftprerequisite</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ courseSoftPrerequisite.id }}</td>
            </tr>
            <tr>
                <th>Value</th>
                <td>{{ courseSoftPrerequisite.value }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('coursesoftprerequisite_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('coursesoftprerequisite_edit', { 'id': courseSoftPrerequisite.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "coursesoftprerequisite/show.html.twig", "/home/patricia/Desktop/kurzy_projekt/kurzy/app/Resources/views/coursesoftprerequisite/show.html.twig");
    }
}
