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
        $__internal_e13dc61a2667142085ebaa17e7680db7b50c68a46ec90058d95f5ebc2f5dec2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e13dc61a2667142085ebaa17e7680db7b50c68a46ec90058d95f5ebc2f5dec2f->enter($__internal_e13dc61a2667142085ebaa17e7680db7b50c68a46ec90058d95f5ebc2f5dec2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "courseinstance/index.html.twig"));

        $__internal_8dd6f29c9f1197217048f7f8d93b4522458150146b826e5e07a46baf50d5e9f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dd6f29c9f1197217048f7f8d93b4522458150146b826e5e07a46baf50d5e9f0->enter($__internal_8dd6f29c9f1197217048f7f8d93b4522458150146b826e5e07a46baf50d5e9f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "courseinstance/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e13dc61a2667142085ebaa17e7680db7b50c68a46ec90058d95f5ebc2f5dec2f->leave($__internal_e13dc61a2667142085ebaa17e7680db7b50c68a46ec90058d95f5ebc2f5dec2f_prof);

        
        $__internal_8dd6f29c9f1197217048f7f8d93b4522458150146b826e5e07a46baf50d5e9f0->leave($__internal_8dd6f29c9f1197217048f7f8d93b4522458150146b826e5e07a46baf50d5e9f0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_686bc28c1b287a34ddd70ce979aa89afbf289d0e0f7b6f24d8b9c12a6646b068 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_686bc28c1b287a34ddd70ce979aa89afbf289d0e0f7b6f24d8b9c12a6646b068->enter($__internal_686bc28c1b287a34ddd70ce979aa89afbf289d0e0f7b6f24d8b9c12a6646b068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_db0fdb77fa2ab3daa43be216d1768d9f5c2c6f9de5ae0e97968c3fc4b742a850 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db0fdb77fa2ab3daa43be216d1768d9f5c2c6f9de5ae0e97968c3fc4b742a850->enter($__internal_db0fdb77fa2ab3daa43be216d1768d9f5c2c6f9de5ae0e97968c3fc4b742a850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
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
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["courseInstances"] ?? $this->getContext($context, "courseInstances")));
        foreach ($context['_seq'] as $context["_key"] => $context["courseInstance"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("courseinstance_show", array("id" => $this->getAttribute($context["courseInstance"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["courseInstance"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            if ($this->getAttribute($context["courseInstance"], "timeStamp", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["courseInstance"], "timeStamp", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["courseInstance"], "capacity", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            if ($this->getAttribute($context["courseInstance"], "disenrollDate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["courseInstance"], "disenrollDate", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("courseinstance_show", array("id" => $this->getAttribute($context["courseInstance"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
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
        // line 35
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("courseinstance_new");
        echo "\">Create a new courseInstance</a>
        </li>
    </ul>
";
        
        $__internal_db0fdb77fa2ab3daa43be216d1768d9f5c2c6f9de5ae0e97968c3fc4b742a850->leave($__internal_db0fdb77fa2ab3daa43be216d1768d9f5c2c6f9de5ae0e97968c3fc4b742a850_prof);

        
        $__internal_686bc28c1b287a34ddd70ce979aa89afbf289d0e0f7b6f24d8b9c12a6646b068->leave($__internal_686bc28c1b287a34ddd70ce979aa89afbf289d0e0f7b6f24d8b9c12a6646b068_prof);

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
        return array (  121 => 40,  114 => 35,  102 => 29,  96 => 26,  87 => 22,  83 => 21,  77 => 20,  71 => 19,  68 => 18,  64 => 17,  49 => 4,  40 => 3,  11 => 1,);
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
", "courseinstance/index.html.twig", "/home/patricia/Desktop/kurzy_projekt/kurzy/app/Resources/views/courseinstance/index.html.twig");
    }
}
