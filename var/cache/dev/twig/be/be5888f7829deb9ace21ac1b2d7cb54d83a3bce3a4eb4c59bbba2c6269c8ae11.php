<?php

/* enrolled/show.html.twig */
class __TwigTemplate_6ed285cfcc0de86841ce0f7f58674e36d2b9e2d1448d99fdd407cc63fa4ace2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "enrolled/show.html.twig", 1);
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
        $__internal_6e8e934759899b7d88af4408fdaab1eee66f6004f7845b426e494e65c9651ebd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e8e934759899b7d88af4408fdaab1eee66f6004f7845b426e494e65c9651ebd->enter($__internal_6e8e934759899b7d88af4408fdaab1eee66f6004f7845b426e494e65c9651ebd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "enrolled/show.html.twig"));

        $__internal_df87cc26b7ab62db399f6a90ca8865a9c7c54d20e8847dd8b7c2efe6203c81fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df87cc26b7ab62db399f6a90ca8865a9c7c54d20e8847dd8b7c2efe6203c81fe->enter($__internal_df87cc26b7ab62db399f6a90ca8865a9c7c54d20e8847dd8b7c2efe6203c81fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "enrolled/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e8e934759899b7d88af4408fdaab1eee66f6004f7845b426e494e65c9651ebd->leave($__internal_6e8e934759899b7d88af4408fdaab1eee66f6004f7845b426e494e65c9651ebd_prof);

        
        $__internal_df87cc26b7ab62db399f6a90ca8865a9c7c54d20e8847dd8b7c2efe6203c81fe->leave($__internal_df87cc26b7ab62db399f6a90ca8865a9c7c54d20e8847dd8b7c2efe6203c81fe_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_49ba4e9b49edcacfb9bacd809d66e108f99d9354fc32c96941872d07ac73c80a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49ba4e9b49edcacfb9bacd809d66e108f99d9354fc32c96941872d07ac73c80a->enter($__internal_49ba4e9b49edcacfb9bacd809d66e108f99d9354fc32c96941872d07ac73c80a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a756d4cb388693df304142c5728157d204631142a66679d205983e0cc99ed9f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a756d4cb388693df304142c5728157d204631142a66679d205983e0cc99ed9f0->enter($__internal_a756d4cb388693df304142c5728157d204631142a66679d205983e0cc99ed9f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Enrolled</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["enrolled"] ?? $this->getContext($context, "enrolled")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Graduated</th>
                <td>";
        // line 14
        if ($this->getAttribute(($context["enrolled"] ?? $this->getContext($context, "enrolled")), "graduated", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Userid</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["enrolled"] ?? $this->getContext($context, "enrolled")), "userId", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Comment</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["enrolled"] ?? $this->getContext($context, "enrolled")), "comment", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Attended</th>
                <td>";
        // line 26
        if ($this->getAttribute(($context["enrolled"] ?? $this->getContext($context, "enrolled")), "attended", array())) {
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
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("enrolled_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("enrolled_edit", array("id" => $this->getAttribute(($context["enrolled"] ?? $this->getContext($context, "enrolled")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 39
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_a756d4cb388693df304142c5728157d204631142a66679d205983e0cc99ed9f0->leave($__internal_a756d4cb388693df304142c5728157d204631142a66679d205983e0cc99ed9f0_prof);

        
        $__internal_49ba4e9b49edcacfb9bacd809d66e108f99d9354fc32c96941872d07ac73c80a->leave($__internal_49ba4e9b49edcacfb9bacd809d66e108f99d9354fc32c96941872d07ac73c80a_prof);

    }

    public function getTemplateName()
    {
        return "enrolled/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 41,  115 => 39,  109 => 36,  103 => 33,  89 => 26,  82 => 22,  75 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Enrolled</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ enrolled.id }}</td>
            </tr>
            <tr>
                <th>Graduated</th>
                <td>{% if enrolled.graduated %}Yes{% else %}No{% endif %}</td>
            </tr>
            <tr>
                <th>Userid</th>
                <td>{{ enrolled.userId }}</td>
            </tr>
            <tr>
                <th>Comment</th>
                <td>{{ enrolled.comment }}</td>
            </tr>
            <tr>
                <th>Attended</th>
                <td>{% if enrolled.attended %}Yes{% else %}No{% endif %}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('enrolled_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('enrolled_edit', { 'id': enrolled.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "enrolled/show.html.twig", "/home/patricia/Desktop/kurzy_projekt/kurzy/app/Resources/views/enrolled/show.html.twig");
    }
}
