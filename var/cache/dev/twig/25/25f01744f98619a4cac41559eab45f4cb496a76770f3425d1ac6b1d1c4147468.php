<?php

/* courseinstance/index.html.twig */
class __TwigTemplate_1ccd5ce311dbc871d097a0441f85ca9cf23da562ed903ffb631285969a051c4f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "courseinstance/index.html.twig", 1);
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
        $__internal_aa50f349fdc18c136708809e4fd49c617c0659567b441e9d1028aab8396c6f90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa50f349fdc18c136708809e4fd49c617c0659567b441e9d1028aab8396c6f90->enter($__internal_aa50f349fdc18c136708809e4fd49c617c0659567b441e9d1028aab8396c6f90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "courseinstance/index.html.twig"));

        $__internal_2b7b4eedd32c103791df2121d65c5b80c6b8908763351472d9f981cf9e7bce41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b7b4eedd32c103791df2121d65c5b80c6b8908763351472d9f981cf9e7bce41->enter($__internal_2b7b4eedd32c103791df2121d65c5b80c6b8908763351472d9f981cf9e7bce41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "courseinstance/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa50f349fdc18c136708809e4fd49c617c0659567b441e9d1028aab8396c6f90->leave($__internal_aa50f349fdc18c136708809e4fd49c617c0659567b441e9d1028aab8396c6f90_prof);

        
        $__internal_2b7b4eedd32c103791df2121d65c5b80c6b8908763351472d9f981cf9e7bce41->leave($__internal_2b7b4eedd32c103791df2121d65c5b80c6b8908763351472d9f981cf9e7bce41_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_78658867f11c0fc8cd61097d922bb074cf5ef5fe35910ac8f24b385bc1011aed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78658867f11c0fc8cd61097d922bb074cf5ef5fe35910ac8f24b385bc1011aed->enter($__internal_78658867f11c0fc8cd61097d922bb074cf5ef5fe35910ac8f24b385bc1011aed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e89190e6872b8a9e2533d1ce4a97b0f95a583a402cf25bbe338027e6e6537e81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e89190e6872b8a9e2533d1ce4a97b0f95a583a402cf25bbe338027e6e6537e81->enter($__internal_e89190e6872b8a9e2533d1ce4a97b0f95a583a402cf25bbe338027e6e6537e81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Courseinstances list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Timestamp</th>
                <th>Capacity</th>
                <th>Disenrolldate</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["courseInstances"] ?? $this->getContext($context, "courseInstances")));
        foreach ($context['_seq'] as $context["_key"] => $context["courseInstance"]) {
            // line 20
            echo "            <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("courseinstance_show", array("id" => $this->getAttribute($context["courseInstance"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["courseInstance"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            if ($this->getAttribute($context["courseInstance"], "timeStamp", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["courseInstance"], "timeStamp", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["courseInstance"], "capacity", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            if ($this->getAttribute($context["courseInstance"], "disenrollDate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["courseInstance"], "disenrollDate", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("courseinstance_show", array("id" => $this->getAttribute($context["courseInstance"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("courseinstance_edit", array("id" => $this->getAttribute($context["courseInstance"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['courseInstance'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("courseinstance_new");
        echo "\">Create a new courseInstance</a>
        </li>
    </ul>
";
        
        $__internal_e89190e6872b8a9e2533d1ce4a97b0f95a583a402cf25bbe338027e6e6537e81->leave($__internal_e89190e6872b8a9e2533d1ce4a97b0f95a583a402cf25bbe338027e6e6537e81_prof);

        
        $__internal_78658867f11c0fc8cd61097d922bb074cf5ef5fe35910ac8f24b385bc1011aed->leave($__internal_78658867f11c0fc8cd61097d922bb074cf5ef5fe35910ac8f24b385bc1011aed_prof);

    }

    public function getTemplateName()
    {
        return "courseinstance/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 42,  114 => 37,  102 => 31,  96 => 28,  87 => 24,  83 => 23,  77 => 22,  71 => 21,  68 => 20,  64 => 19,  49 => 6,  40 => 5,  11 => 1,);
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
    <h1>Courseinstances list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Timestamp</th>
                <th>Capacity</th>
                <th>Disenrolldate</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for courseInstance in courseInstances %}
            <tr>
                <td><a href=\"{{ path('courseinstance_show', { 'id': courseInstance.id }) }}\">{{ courseInstance.id }}</a></td>
                <td>{% if courseInstance.timeStamp %}{{ courseInstance.timeStamp|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{{ courseInstance.capacity }}</td>
                <td>{% if courseInstance.disenrollDate %}{{ courseInstance.disenrollDate|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('courseinstance_show', { 'id': courseInstance.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('courseinstance_edit', { 'id': courseInstance.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('courseinstance_new') }}\">Create a new courseInstance</a>
        </li>
    </ul>
{% endblock %}
", "courseinstance/index.html.twig", "/home/dana/Kurzy/app/Resources/views/courseinstance/index.html.twig");
    }
}
