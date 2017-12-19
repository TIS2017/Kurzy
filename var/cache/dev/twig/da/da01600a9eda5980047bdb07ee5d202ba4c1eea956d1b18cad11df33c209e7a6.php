<?php

/* coursesoftprerequisite/index.html.twig */
class __TwigTemplate_7614cd309a0407514720804de56b8b65bab8c4a1378ad85cb59f8c8734703536 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "coursesoftprerequisite/index.html.twig", 1);
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
        $__internal_276719490be67453bd4188bbe04ecf9b6e204b99740ada912c61ff30cbe7a1c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_276719490be67453bd4188bbe04ecf9b6e204b99740ada912c61ff30cbe7a1c1->enter($__internal_276719490be67453bd4188bbe04ecf9b6e204b99740ada912c61ff30cbe7a1c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "coursesoftprerequisite/index.html.twig"));

        $__internal_82a9c4cae61c8ba934cf662e536da2cfb0fb50146da28beb0a3d3b1d67666a92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82a9c4cae61c8ba934cf662e536da2cfb0fb50146da28beb0a3d3b1d67666a92->enter($__internal_82a9c4cae61c8ba934cf662e536da2cfb0fb50146da28beb0a3d3b1d67666a92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "coursesoftprerequisite/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_276719490be67453bd4188bbe04ecf9b6e204b99740ada912c61ff30cbe7a1c1->leave($__internal_276719490be67453bd4188bbe04ecf9b6e204b99740ada912c61ff30cbe7a1c1_prof);

        
        $__internal_82a9c4cae61c8ba934cf662e536da2cfb0fb50146da28beb0a3d3b1d67666a92->leave($__internal_82a9c4cae61c8ba934cf662e536da2cfb0fb50146da28beb0a3d3b1d67666a92_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b2c05952fbc22f65c798b78e2b83e86e61026dbd93041c207653007a966783a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2c05952fbc22f65c798b78e2b83e86e61026dbd93041c207653007a966783a4->enter($__internal_b2c05952fbc22f65c798b78e2b83e86e61026dbd93041c207653007a966783a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_812b1a7efdfffe2968392398e5572c4dcd91ecdd3307320292458fbd494b3be6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_812b1a7efdfffe2968392398e5572c4dcd91ecdd3307320292458fbd494b3be6->enter($__internal_812b1a7efdfffe2968392398e5572c4dcd91ecdd3307320292458fbd494b3be6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Coursesoftprerequisites list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Value</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["courseSoftPrerequisites"] ?? $this->getContext($context, "courseSoftPrerequisites")));
        foreach ($context['_seq'] as $context["_key"] => $context["courseSoftPrerequisite"]) {
            // line 16
            echo "            <tr>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("coursesoftprerequisite_show", array("id" => $this->getAttribute($context["courseSoftPrerequisite"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["courseSoftPrerequisite"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["courseSoftPrerequisite"], "value", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("coursesoftprerequisite_show", array("id" => $this->getAttribute($context["courseSoftPrerequisite"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("coursesoftprerequisite_edit", array("id" => $this->getAttribute($context["courseSoftPrerequisite"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['courseSoftPrerequisite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("coursesoftprerequisite_new");
        echo "\">Create a new courseSoftPrerequisite</a>
        </li>
    </ul>
";
        
        $__internal_812b1a7efdfffe2968392398e5572c4dcd91ecdd3307320292458fbd494b3be6->leave($__internal_812b1a7efdfffe2968392398e5572c4dcd91ecdd3307320292458fbd494b3be6_prof);

        
        $__internal_b2c05952fbc22f65c798b78e2b83e86e61026dbd93041c207653007a966783a4->leave($__internal_b2c05952fbc22f65c798b78e2b83e86e61026dbd93041c207653007a966783a4_prof);

    }

    public function getTemplateName()
    {
        return "coursesoftprerequisite/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 36,  100 => 31,  88 => 25,  82 => 22,  75 => 18,  69 => 17,  66 => 16,  62 => 15,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Coursesoftprerequisites list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Value</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for courseSoftPrerequisite in courseSoftPrerequisites %}
            <tr>
                <td><a href=\"{{ path('coursesoftprerequisite_show', { 'id': courseSoftPrerequisite.id }) }}\">{{ courseSoftPrerequisite.id }}</a></td>
                <td>{{ courseSoftPrerequisite.value }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('coursesoftprerequisite_show', { 'id': courseSoftPrerequisite.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('coursesoftprerequisite_edit', { 'id': courseSoftPrerequisite.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('coursesoftprerequisite_new') }}\">Create a new courseSoftPrerequisite</a>
        </li>
    </ul>
{% endblock %}
", "coursesoftprerequisite/index.html.twig", "/home/patricia/Desktop/kurzy_projekt/kurzy/app/Resources/views/coursesoftprerequisite/index.html.twig");
    }
}
