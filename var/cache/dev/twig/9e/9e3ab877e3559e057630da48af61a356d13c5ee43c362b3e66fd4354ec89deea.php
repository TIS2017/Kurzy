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
        $__internal_8a985e1edaeb4cc3f6b69c839368daf87183141be3edf53497f69d41e0e8209e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a985e1edaeb4cc3f6b69c839368daf87183141be3edf53497f69d41e0e8209e->enter($__internal_8a985e1edaeb4cc3f6b69c839368daf87183141be3edf53497f69d41e0e8209e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "coursetype/index.html.twig"));

        $__internal_5a7b7ef3b8563961d0ce1d9caf3d16f84658850ed80524133d2d26619f016da3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a7b7ef3b8563961d0ce1d9caf3d16f84658850ed80524133d2d26619f016da3->enter($__internal_5a7b7ef3b8563961d0ce1d9caf3d16f84658850ed80524133d2d26619f016da3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "coursetype/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a985e1edaeb4cc3f6b69c839368daf87183141be3edf53497f69d41e0e8209e->leave($__internal_8a985e1edaeb4cc3f6b69c839368daf87183141be3edf53497f69d41e0e8209e_prof);

        
        $__internal_5a7b7ef3b8563961d0ce1d9caf3d16f84658850ed80524133d2d26619f016da3->leave($__internal_5a7b7ef3b8563961d0ce1d9caf3d16f84658850ed80524133d2d26619f016da3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_aa424dde3632b4dba45650091ffd28ada22d5049dfbbaa13f8c46cf4a05ae18f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa424dde3632b4dba45650091ffd28ada22d5049dfbbaa13f8c46cf4a05ae18f->enter($__internal_aa424dde3632b4dba45650091ffd28ada22d5049dfbbaa13f8c46cf4a05ae18f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a2bc5c5217b2e4b4641f1c0ac287babb80c31491913108fbc688ea8104bd8682 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2bc5c5217b2e4b4641f1c0ac287babb80c31491913108fbc688ea8104bd8682->enter($__internal_a2bc5c5217b2e4b4641f1c0ac287babb80c31491913108fbc688ea8104bd8682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
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
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["courseTypes"] ?? $this->getContext($context, "courseTypes")));
        foreach ($context['_seq'] as $context["_key"] => $context["courseType"]) {
            // line 20
            echo "            <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("coursetype_show", array("id" => $this->getAttribute($context["courseType"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["courseType"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["courseType"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["courseType"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["courseType"], "softPrerequisites", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            if ($this->getAttribute($context["courseType"], "visibility", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 26
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
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("coursetype_show", array("id" => $this->getAttribute($context["courseType"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 33
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
        // line 39
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("coursetype_new");
        echo "\">Create a new courseType</a>
        </li>
    </ul>
";
        
        $__internal_a2bc5c5217b2e4b4641f1c0ac287babb80c31491913108fbc688ea8104bd8682->leave($__internal_a2bc5c5217b2e4b4641f1c0ac287babb80c31491913108fbc688ea8104bd8682_prof);

        
        $__internal_aa424dde3632b4dba45650091ffd28ada22d5049dfbbaa13f8c46cf4a05ae18f->leave($__internal_aa424dde3632b4dba45650091ffd28ada22d5049dfbbaa13f8c46cf4a05ae18f_prof);

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
        return array (  135 => 44,  128 => 39,  116 => 33,  110 => 30,  99 => 26,  91 => 25,  87 => 24,  83 => 23,  79 => 22,  73 => 21,  70 => 20,  66 => 19,  49 => 4,  40 => 3,  11 => 1,);
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
{% endblock %}
", "coursetype/index.html.twig", "/home/patricia/Desktop/kurzy_projekt/kurzy/app/Resources/views/coursetype/index.html.twig");
    }
}
