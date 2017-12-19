<?php

/* place/index.html.twig */
class __TwigTemplate_7f99db04b51ef8235b2105c4d6e495f96d188cafec31ff7c233ad820f6829a76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "place/index.html.twig", 1);
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
        $__internal_151a49d44f8499b90f664111e3f35c70726fd625124d21c965e46c376add703e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_151a49d44f8499b90f664111e3f35c70726fd625124d21c965e46c376add703e->enter($__internal_151a49d44f8499b90f664111e3f35c70726fd625124d21c965e46c376add703e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "place/index.html.twig"));

        $__internal_346d797d539946682079c1780f41eebb29540cc740042ae3879e65e22244a4c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_346d797d539946682079c1780f41eebb29540cc740042ae3879e65e22244a4c2->enter($__internal_346d797d539946682079c1780f41eebb29540cc740042ae3879e65e22244a4c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "place/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_151a49d44f8499b90f664111e3f35c70726fd625124d21c965e46c376add703e->leave($__internal_151a49d44f8499b90f664111e3f35c70726fd625124d21c965e46c376add703e_prof);

        
        $__internal_346d797d539946682079c1780f41eebb29540cc740042ae3879e65e22244a4c2->leave($__internal_346d797d539946682079c1780f41eebb29540cc740042ae3879e65e22244a4c2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7023c3d4b305a64fbd815f457b49bff0fe12259e675526e0650997ee194c1f66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7023c3d4b305a64fbd815f457b49bff0fe12259e675526e0650997ee194c1f66->enter($__internal_7023c3d4b305a64fbd815f457b49bff0fe12259e675526e0650997ee194c1f66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2bf80ecbdff25e027cfc542b50b09eb988fcd737a33ba38d5eae93a6d8640e64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bf80ecbdff25e027cfc542b50b09eb988fcd737a33ba38d5eae93a6d8640e64->enter($__internal_2bf80ecbdff25e027cfc542b50b09eb988fcd737a33ba38d5eae93a6d8640e64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Places list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Buildingid</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Deleted</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["places"] ?? $this->getContext($context, "places")));
        foreach ($context['_seq'] as $context["_key"] => $context["place"]) {
            // line 20
            echo "            <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("place_show", array("id" => $this->getAttribute($context["place"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["place"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["place"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["place"], "buildingId", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            if ($this->getAttribute($context["place"], "created", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["place"], "created", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 25
            if ($this->getAttribute($context["place"], "updated", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["place"], "updated", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 26
            if ($this->getAttribute($context["place"], "deleted", array())) {
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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("place_show", array("id" => $this->getAttribute($context["place"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("place_edit", array("id" => $this->getAttribute($context["place"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['place'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("place_new");
        echo "\">Create a new place</a>
        </li>
    </ul>
";
        
        $__internal_2bf80ecbdff25e027cfc542b50b09eb988fcd737a33ba38d5eae93a6d8640e64->leave($__internal_2bf80ecbdff25e027cfc542b50b09eb988fcd737a33ba38d5eae93a6d8640e64_prof);

        
        $__internal_7023c3d4b305a64fbd815f457b49bff0fe12259e675526e0650997ee194c1f66->leave($__internal_7023c3d4b305a64fbd815f457b49bff0fe12259e675526e0650997ee194c1f66_prof);

    }

    public function getTemplateName()
    {
        return "place/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 44,  128 => 39,  116 => 33,  110 => 30,  99 => 26,  93 => 25,  87 => 24,  83 => 23,  79 => 22,  73 => 21,  70 => 20,  66 => 19,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Places list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Buildingid</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Deleted</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for place in places %}
            <tr>
                <td><a href=\"{{ path('place_show', { 'id': place.id }) }}\">{{ place.id }}</a></td>
                <td>{{ place.name }}</td>
                <td>{{ place.buildingId }}</td>
                <td>{% if place.created %}{{ place.created|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{% if place.updated %}{{ place.updated|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{% if place.deleted %}Yes{% else %}No{% endif %}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('place_show', { 'id': place.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('place_edit', { 'id': place.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('place_new') }}\">Create a new place</a>
        </li>
    </ul>
{% endblock %}
", "place/index.html.twig", "/home/patricia/Desktop/kurzy_projekt/kurzy/app/Resources/views/place/index.html.twig");
    }
}
