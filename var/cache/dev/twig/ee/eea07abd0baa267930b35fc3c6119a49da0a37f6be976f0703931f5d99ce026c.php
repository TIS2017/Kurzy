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
        $__internal_66071a59eaf7d5f4c27aaea8127275f6260ca245eab1bb91974b8da1633db625 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66071a59eaf7d5f4c27aaea8127275f6260ca245eab1bb91974b8da1633db625->enter($__internal_66071a59eaf7d5f4c27aaea8127275f6260ca245eab1bb91974b8da1633db625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "enrolled/index.html.twig"));

        $__internal_e965e2daf991bd89a0e44afd71619691105c905b52db063f3234bcdb5f5c45f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e965e2daf991bd89a0e44afd71619691105c905b52db063f3234bcdb5f5c45f4->enter($__internal_e965e2daf991bd89a0e44afd71619691105c905b52db063f3234bcdb5f5c45f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "enrolled/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66071a59eaf7d5f4c27aaea8127275f6260ca245eab1bb91974b8da1633db625->leave($__internal_66071a59eaf7d5f4c27aaea8127275f6260ca245eab1bb91974b8da1633db625_prof);

        
        $__internal_e965e2daf991bd89a0e44afd71619691105c905b52db063f3234bcdb5f5c45f4->leave($__internal_e965e2daf991bd89a0e44afd71619691105c905b52db063f3234bcdb5f5c45f4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ce39a5c22ca12fe253100dc36b1a96d37d9b781b75d25ae58cc56cd438d69629 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce39a5c22ca12fe253100dc36b1a96d37d9b781b75d25ae58cc56cd438d69629->enter($__internal_ce39a5c22ca12fe253100dc36b1a96d37d9b781b75d25ae58cc56cd438d69629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9e3954f4c83bde8c17957f45063c0df90cdd5b454ddd0aef87d3f8ed79cd66bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e3954f4c83bde8c17957f45063c0df90cdd5b454ddd0aef87d3f8ed79cd66bf->enter($__internal_9e3954f4c83bde8c17957f45063c0df90cdd5b454ddd0aef87d3f8ed79cd66bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9e3954f4c83bde8c17957f45063c0df90cdd5b454ddd0aef87d3f8ed79cd66bf->leave($__internal_9e3954f4c83bde8c17957f45063c0df90cdd5b454ddd0aef87d3f8ed79cd66bf_prof);

        
        $__internal_ce39a5c22ca12fe253100dc36b1a96d37d9b781b75d25ae58cc56cd438d69629->leave($__internal_ce39a5c22ca12fe253100dc36b1a96d37d9b781b75d25ae58cc56cd438d69629_prof);

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
", "enrolled/index.html.twig", "/home/dana/Kurzy/app/Resources/views/enrolled/index.html.twig");
    }
}
