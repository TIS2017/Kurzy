<?php

/* role/show.html.twig */
class __TwigTemplate_fa94f4040f3961d9aa91bcb78841b9138c73623fb914968e31e030a8fbb89c0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "role/show.html.twig", 1);
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
        $__internal_b1ee2e9d5161bba89ad5c0db59dd2d624ce74b1fa839e61076d8f69838ce5594 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1ee2e9d5161bba89ad5c0db59dd2d624ce74b1fa839e61076d8f69838ce5594->enter($__internal_b1ee2e9d5161bba89ad5c0db59dd2d624ce74b1fa839e61076d8f69838ce5594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "role/show.html.twig"));

        $__internal_641252a501db27328ea8c0713fff96f2d7a43e1ed4066dfdf1e010cb95f50fa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_641252a501db27328ea8c0713fff96f2d7a43e1ed4066dfdf1e010cb95f50fa9->enter($__internal_641252a501db27328ea8c0713fff96f2d7a43e1ed4066dfdf1e010cb95f50fa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "role/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1ee2e9d5161bba89ad5c0db59dd2d624ce74b1fa839e61076d8f69838ce5594->leave($__internal_b1ee2e9d5161bba89ad5c0db59dd2d624ce74b1fa839e61076d8f69838ce5594_prof);

        
        $__internal_641252a501db27328ea8c0713fff96f2d7a43e1ed4066dfdf1e010cb95f50fa9->leave($__internal_641252a501db27328ea8c0713fff96f2d7a43e1ed4066dfdf1e010cb95f50fa9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_390bb3b43ea35c853079aef2d83e5e032fa983363d8ec10a97b663b1ddc9edd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_390bb3b43ea35c853079aef2d83e5e032fa983363d8ec10a97b663b1ddc9edd9->enter($__internal_390bb3b43ea35c853079aef2d83e5e032fa983363d8ec10a97b663b1ddc9edd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cce00fc46340dd30a960e5843df09b96a363f6898223a617e3f9109355b3fe7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cce00fc46340dd30a960e5843df09b96a363f6898223a617e3f9109355b3fe7a->enter($__internal_cce00fc46340dd30a960e5843df09b96a363f6898223a617e3f9109355b3fe7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Role</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["role"] ?? $this->getContext($context, "role")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["role"] ?? $this->getContext($context, "role")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("role_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("role_edit", array("id" => $this->getAttribute(($context["role"] ?? $this->getContext($context, "role")), "id", array()))), "html", null, true);
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
        
        $__internal_cce00fc46340dd30a960e5843df09b96a363f6898223a617e3f9109355b3fe7a->leave($__internal_cce00fc46340dd30a960e5843df09b96a363f6898223a617e3f9109355b3fe7a_prof);

        
        $__internal_390bb3b43ea35c853079aef2d83e5e032fa983363d8ec10a97b663b1ddc9edd9->leave($__internal_390bb3b43ea35c853079aef2d83e5e032fa983363d8ec10a97b663b1ddc9edd9_prof);

    }

    public function getTemplateName()
    {
        return "role/show.html.twig";
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
    <h1>Role</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ role.id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ role.name }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('role_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('role_edit', { 'id': role.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "role/show.html.twig", "/home/patricia/Desktop/kurzy_projekt/kurzy/app/Resources/views/role/show.html.twig");
    }
}
