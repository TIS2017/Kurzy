<?php

/* enrolled/index.html.twig */
class __TwigTemplate_96d93d9e4789d98c3235fb053fe4dbfc113fdb6975b7abbe526c7ae26d7cf4cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "enrolled/index.html.twig", 1);
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
        $__internal_3b7c06ae9c386549b384c7761828123967cc7da5c5c8dcc1448e7bb35f843e88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b7c06ae9c386549b384c7761828123967cc7da5c5c8dcc1448e7bb35f843e88->enter($__internal_3b7c06ae9c386549b384c7761828123967cc7da5c5c8dcc1448e7bb35f843e88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "enrolled/index.html.twig"));

        $__internal_9258cc3459ebb8e15b7e1321b6aa4d3c5e674d09cc3b35644ca7acf9d4b1f581 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9258cc3459ebb8e15b7e1321b6aa4d3c5e674d09cc3b35644ca7acf9d4b1f581->enter($__internal_9258cc3459ebb8e15b7e1321b6aa4d3c5e674d09cc3b35644ca7acf9d4b1f581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "enrolled/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b7c06ae9c386549b384c7761828123967cc7da5c5c8dcc1448e7bb35f843e88->leave($__internal_3b7c06ae9c386549b384c7761828123967cc7da5c5c8dcc1448e7bb35f843e88_prof);

        
        $__internal_9258cc3459ebb8e15b7e1321b6aa4d3c5e674d09cc3b35644ca7acf9d4b1f581->leave($__internal_9258cc3459ebb8e15b7e1321b6aa4d3c5e674d09cc3b35644ca7acf9d4b1f581_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_49298bf6f4ac51adc27e659827f8a1570b8bd9d6492f45c7b419cf22c28e3f8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49298bf6f4ac51adc27e659827f8a1570b8bd9d6492f45c7b419cf22c28e3f8d->enter($__internal_49298bf6f4ac51adc27e659827f8a1570b8bd9d6492f45c7b419cf22c28e3f8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_aea0f3750f00be704e0989a86c59b32d5221d7d453a9dacc31ce8482064398e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aea0f3750f00be704e0989a86c59b32d5221d7d453a9dacc31ce8482064398e0->enter($__internal_aea0f3750f00be704e0989a86c59b32d5221d7d453a9dacc31ce8482064398e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Enrolleds list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Graduated</th>
                <th>Userid</th>
                <th>Comment</th>
                <th>Attended</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["enrolleds"] ?? $this->getContext($context, "enrolleds")));
        foreach ($context['_seq'] as $context["_key"] => $context["enrolled"]) {
            // line 19
            echo "            <tr>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("enrolled_show", array("id" => $this->getAttribute($context["enrolled"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["enrolled"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 21
            if ($this->getAttribute($context["enrolled"], "graduated", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["enrolled"], "userId", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["enrolled"], "comment", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            if ($this->getAttribute($context["enrolled"], "attended", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("enrolled_show", array("id" => $this->getAttribute($context["enrolled"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("enrolled_edit", array("id" => $this->getAttribute($context["enrolled"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['enrolled'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("enrolled_new");
        echo "\">Create a new enrolled</a>
        </li>
    </ul>
";
        
        $__internal_aea0f3750f00be704e0989a86c59b32d5221d7d453a9dacc31ce8482064398e0->leave($__internal_aea0f3750f00be704e0989a86c59b32d5221d7d453a9dacc31ce8482064398e0_prof);

        
        $__internal_49298bf6f4ac51adc27e659827f8a1570b8bd9d6492f45c7b419cf22c28e3f8d->leave($__internal_49298bf6f4ac51adc27e659827f8a1570b8bd9d6492f45c7b419cf22c28e3f8d_prof);

    }

    public function getTemplateName()
    {
        return "enrolled/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 42,  123 => 37,  111 => 31,  105 => 28,  94 => 24,  90 => 23,  86 => 22,  78 => 21,  72 => 20,  69 => 19,  65 => 18,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Enrolleds list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Graduated</th>
                <th>Userid</th>
                <th>Comment</th>
                <th>Attended</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for enrolled in enrolleds %}
            <tr>
                <td><a href=\"{{ path('enrolled_show', { 'id': enrolled.id }) }}\">{{ enrolled.id }}</a></td>
                <td>{% if enrolled.graduated %}Yes{% else %}No{% endif %}</td>
                <td>{{ enrolled.userId }}</td>
                <td>{{ enrolled.comment }}</td>
                <td>{% if enrolled.attended %}Yes{% else %}No{% endif %}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('enrolled_show', { 'id': enrolled.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('enrolled_edit', { 'id': enrolled.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('enrolled_new') }}\">Create a new enrolled</a>
        </li>
    </ul>
{% endblock %}
", "enrolled/index.html.twig", "/home/patricia/Desktop/kurzy_projekt/kurzy/app/Resources/views/enrolled/index.html.twig");
    }
}
