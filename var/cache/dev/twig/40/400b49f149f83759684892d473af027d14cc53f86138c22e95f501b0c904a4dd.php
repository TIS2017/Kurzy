<?php

/* workplace/index.html.twig */
class __TwigTemplate_58398402bffd6d7ca3f223b7d6d93aa5f2398724b9bd27d2549085d400491c55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "workplace/index.html.twig", 1);
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
        $__internal_ad9f88fb5890b8e8bae40d2d60e0cebcf274e929b241172fcf18a50f2e833c99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad9f88fb5890b8e8bae40d2d60e0cebcf274e929b241172fcf18a50f2e833c99->enter($__internal_ad9f88fb5890b8e8bae40d2d60e0cebcf274e929b241172fcf18a50f2e833c99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "workplace/index.html.twig"));

        $__internal_75ac8447160135f462e93d3169c03b66cedd94ef5cf76452dc876d94175120a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75ac8447160135f462e93d3169c03b66cedd94ef5cf76452dc876d94175120a4->enter($__internal_75ac8447160135f462e93d3169c03b66cedd94ef5cf76452dc876d94175120a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "workplace/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad9f88fb5890b8e8bae40d2d60e0cebcf274e929b241172fcf18a50f2e833c99->leave($__internal_ad9f88fb5890b8e8bae40d2d60e0cebcf274e929b241172fcf18a50f2e833c99_prof);

        
        $__internal_75ac8447160135f462e93d3169c03b66cedd94ef5cf76452dc876d94175120a4->leave($__internal_75ac8447160135f462e93d3169c03b66cedd94ef5cf76452dc876d94175120a4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5ef7402851aeaf274c4efcf723106287d9a2be89eb3c4882782f30d9cbc95c30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ef7402851aeaf274c4efcf723106287d9a2be89eb3c4882782f30d9cbc95c30->enter($__internal_5ef7402851aeaf274c4efcf723106287d9a2be89eb3c4882782f30d9cbc95c30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cf99b042cd0f314f428c4eb11affe9c08810c30326626db844a27d7d4d0c9766 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf99b042cd0f314f428c4eb11affe9c08810c30326626db844a27d7d4d0c9766->enter($__internal_cf99b042cd0f314f428c4eb11affe9c08810c30326626db844a27d7d4d0c9766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Workplaces list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Parent</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["workplaces"] ?? $this->getContext($context, "workplaces")));
        foreach ($context['_seq'] as $context["_key"] => $context["workplace"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("workplace_show", array("id" => $this->getAttribute($context["workplace"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["workplace"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["workplace"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["workplace"], "parent", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("workplace_show", array("id" => $this->getAttribute($context["workplace"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("workplace_edit", array("id" => $this->getAttribute($context["workplace"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['workplace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("workplace_new");
        echo "\">Create a new workplace</a>
        </li>
    </ul>
";
        
        $__internal_cf99b042cd0f314f428c4eb11affe9c08810c30326626db844a27d7d4d0c9766->leave($__internal_cf99b042cd0f314f428c4eb11affe9c08810c30326626db844a27d7d4d0c9766_prof);

        
        $__internal_5ef7402851aeaf274c4efcf723106287d9a2be89eb3c4882782f30d9cbc95c30->leave($__internal_5ef7402851aeaf274c4efcf723106287d9a2be89eb3c4882782f30d9cbc95c30_prof);

    }

    public function getTemplateName()
    {
        return "workplace/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 38,  105 => 33,  93 => 27,  87 => 24,  80 => 20,  76 => 19,  70 => 18,  67 => 17,  63 => 16,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Workplaces list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Parent</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for workplace in workplaces %}
            <tr>
                <td><a href=\"{{ path('workplace_show', { 'id': workplace.id }) }}\">{{ workplace.id }}</a></td>
                <td>{{ workplace.name }}</td>
                <td>{{ workplace.parent }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('workplace_show', { 'id': workplace.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('workplace_edit', { 'id': workplace.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('workplace_new') }}\">Create a new workplace</a>
        </li>
    </ul>
{% endblock %}
", "workplace/index.html.twig", "/home/patricia/Desktop/kurzy_projekt/kurzy/app/Resources/views/workplace/index.html.twig");
    }
}
