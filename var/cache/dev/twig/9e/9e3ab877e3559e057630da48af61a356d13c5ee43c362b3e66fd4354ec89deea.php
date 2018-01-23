<?php

/* coursetype/index.html.twig */
class __TwigTemplate_9c29ce8cb5f24db03afdadf2194f72c9b1925dc0a1212a2af30ff77432e1e2cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "coursetype/index.html.twig", 1);
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
        $__internal_34b943ace7039b342d66c9808f9fabdd17cd12f972b3fa8a80918f5c0e3a5327 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34b943ace7039b342d66c9808f9fabdd17cd12f972b3fa8a80918f5c0e3a5327->enter($__internal_34b943ace7039b342d66c9808f9fabdd17cd12f972b3fa8a80918f5c0e3a5327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "coursetype/index.html.twig"));

        $__internal_5b9dba767543a508363a401d95ec806706842b00b6abecb3f2a6c16338483df7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b9dba767543a508363a401d95ec806706842b00b6abecb3f2a6c16338483df7->enter($__internal_5b9dba767543a508363a401d95ec806706842b00b6abecb3f2a6c16338483df7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "coursetype/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34b943ace7039b342d66c9808f9fabdd17cd12f972b3fa8a80918f5c0e3a5327->leave($__internal_34b943ace7039b342d66c9808f9fabdd17cd12f972b3fa8a80918f5c0e3a5327_prof);

        
        $__internal_5b9dba767543a508363a401d95ec806706842b00b6abecb3f2a6c16338483df7->leave($__internal_5b9dba767543a508363a401d95ec806706842b00b6abecb3f2a6c16338483df7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_21efdb1debc3ab23a949126b92a4d7d740e45dbfc879555f55b5359e32deaec1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21efdb1debc3ab23a949126b92a4d7d740e45dbfc879555f55b5359e32deaec1->enter($__internal_21efdb1debc3ab23a949126b92a4d7d740e45dbfc879555f55b5359e32deaec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dadfdef05bfa252c4ea2e1d9788330f74965f4d635745b8c5931c7dffdd1f46b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dadfdef05bfa252c4ea2e1d9788330f74965f4d635745b8c5931c7dffdd1f46b->enter($__internal_dadfdef05bfa252c4ea2e1d9788330f74965f4d635745b8c5931c7dffdd1f46b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 5
            echo "    <h1>Coursetypes list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Description</th>
                <th>Softprerequisites</th>
                <th>Visibility</th>
                <th>Deleted</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["courseTypes"] ?? $this->getContext($context, "courseTypes")));
            foreach ($context['_seq'] as $context["_key"] => $context["courseType"]) {
                // line 21
                echo "            <tr>
                <td><a href=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("coursetype_show", array("id" => $this->getAttribute($context["courseType"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["courseType"], "id", array()), "html", null, true);
                echo "</a></td>
                <td>";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["courseType"], "name", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["courseType"], "description", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["courseType"], "softPrerequisites", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 26
                if ($this->getAttribute($context["courseType"], "visibility", array())) {
                    echo "Yes";
                } else {
                    echo "No";
                }
                echo "</td>
                <td>";
                // line 27
                if ($this->getAttribute($context["courseType"], "deleted", array())) {
                    echo "Yes";
                } else {
                    echo "No";
                }
                echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("coursetype_show", array("id" => $this->getAttribute($context["courseType"], "id", array()))), "html", null, true);
                echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("coursetype_edit", array("id" => $this->getAttribute($context["courseType"], "id", array()))), "html", null, true);
                echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['courseType'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
            // line 45
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("coursetype_new");
            echo "\">Create a new courseType</a>
        </li>
    </ul>
";
        }
        
        $__internal_dadfdef05bfa252c4ea2e1d9788330f74965f4d635745b8c5931c7dffdd1f46b->leave($__internal_dadfdef05bfa252c4ea2e1d9788330f74965f4d635745b8c5931c7dffdd1f46b_prof);

        
        $__internal_21efdb1debc3ab23a949126b92a4d7d740e45dbfc879555f55b5359e32deaec1->leave($__internal_21efdb1debc3ab23a949126b92a4d7d740e45dbfc879555f55b5359e32deaec1_prof);

    }

    public function getTemplateName()
    {
        return "coursetype/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 45,  130 => 40,  118 => 34,  112 => 31,  101 => 27,  93 => 26,  89 => 25,  85 => 24,  81 => 23,  75 => 22,  72 => 21,  68 => 20,  51 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
{% if is_granted('ROLE_USER') %}
    <h1>Coursetypes list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Description</th>
                <th>Softprerequisites</th>
                <th>Visibility</th>
                <th>Deleted</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for courseType in courseTypes %}
            <tr>
                <td><a href=\"{{ path('coursetype_show', { 'id': courseType.id }) }}\">{{ courseType.id }}</a></td>
                <td>{{ courseType.name }}</td>
                <td>{{ courseType.description }}</td>
                <td>{{ courseType.softPrerequisites }}</td>
                <td>{% if courseType.visibility %}Yes{% else %}No{% endif %}</td>
                <td>{% if courseType.deleted %}Yes{% else %}No{% endif %}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('coursetype_show', { 'id': courseType.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('coursetype_edit', { 'id': courseType.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('coursetype_new') }}\">Create a new courseType</a>
        </li>
    </ul>
{% endif %}
{% endblock %}
", "coursetype/index.html.twig", "/home/dana/Kurzy/app/Resources/views/coursetype/index.html.twig");
    }
}
