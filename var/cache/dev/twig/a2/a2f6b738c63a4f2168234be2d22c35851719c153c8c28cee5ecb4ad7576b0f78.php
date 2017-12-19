<?php

/* place/show.html.twig */
class __TwigTemplate_f3e751bff0c89d7bdd41e0971eea3a8bd8e08e091e928173315f9f0c8a61bc53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "place/show.html.twig", 1);
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
        $__internal_0852979d2db744c4c9b49539226833ec643760bff997dd36fa90e25dd234fe44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0852979d2db744c4c9b49539226833ec643760bff997dd36fa90e25dd234fe44->enter($__internal_0852979d2db744c4c9b49539226833ec643760bff997dd36fa90e25dd234fe44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "place/show.html.twig"));

        $__internal_d56602ae89b419e306add68f38cdafceecea59b423ddf3e970fa42f40a6bd88b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d56602ae89b419e306add68f38cdafceecea59b423ddf3e970fa42f40a6bd88b->enter($__internal_d56602ae89b419e306add68f38cdafceecea59b423ddf3e970fa42f40a6bd88b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "place/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0852979d2db744c4c9b49539226833ec643760bff997dd36fa90e25dd234fe44->leave($__internal_0852979d2db744c4c9b49539226833ec643760bff997dd36fa90e25dd234fe44_prof);

        
        $__internal_d56602ae89b419e306add68f38cdafceecea59b423ddf3e970fa42f40a6bd88b->leave($__internal_d56602ae89b419e306add68f38cdafceecea59b423ddf3e970fa42f40a6bd88b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fd054e6dde8e28595fd1d7201b3f53451a323013e857e96e99722f9213ffa187 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd054e6dde8e28595fd1d7201b3f53451a323013e857e96e99722f9213ffa187->enter($__internal_fd054e6dde8e28595fd1d7201b3f53451a323013e857e96e99722f9213ffa187_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1708a630b04187882b1b0bc8de6a0a25a3bb85be212bf544b968def6a2f094aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1708a630b04187882b1b0bc8de6a0a25a3bb85be212bf544b968def6a2f094aa->enter($__internal_1708a630b04187882b1b0bc8de6a0a25a3bb85be212bf544b968def6a2f094aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Place</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["place"] ?? $this->getContext($context, "place")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["place"] ?? $this->getContext($context, "place")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Buildingid</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["place"] ?? $this->getContext($context, "place")), "buildingId", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Created</th>
                <td>";
        // line 22
        if ($this->getAttribute(($context["place"] ?? $this->getContext($context, "place")), "created", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["place"] ?? $this->getContext($context, "place")), "created", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Updated</th>
                <td>";
        // line 26
        if ($this->getAttribute(($context["place"] ?? $this->getContext($context, "place")), "updated", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["place"] ?? $this->getContext($context, "place")), "updated", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Deleted</th>
                <td>";
        // line 30
        if ($this->getAttribute(($context["place"] ?? $this->getContext($context, "place")), "deleted", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("place_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("place_edit", array("id" => $this->getAttribute(($context["place"] ?? $this->getContext($context, "place")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_1708a630b04187882b1b0bc8de6a0a25a3bb85be212bf544b968def6a2f094aa->leave($__internal_1708a630b04187882b1b0bc8de6a0a25a3bb85be212bf544b968def6a2f094aa_prof);

        
        $__internal_fd054e6dde8e28595fd1d7201b3f53451a323013e857e96e99722f9213ffa187->leave($__internal_fd054e6dde8e28595fd1d7201b3f53451a323013e857e96e99722f9213ffa187_prof);

    }

    public function getTemplateName()
    {
        return "place/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 45,  122 => 43,  116 => 40,  110 => 37,  96 => 30,  87 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Place</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ place.id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ place.name }}</td>
            </tr>
            <tr>
                <th>Buildingid</th>
                <td>{{ place.buildingId }}</td>
            </tr>
            <tr>
                <th>Created</th>
                <td>{% if place.created %}{{ place.created|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Updated</th>
                <td>{% if place.updated %}{{ place.updated|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Deleted</th>
                <td>{% if place.deleted %}Yes{% else %}No{% endif %}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('place_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('place_edit', { 'id': place.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "place/show.html.twig", "/home/patricia/Desktop/kurzy_projekt/kurzy/app/Resources/views/place/show.html.twig");
    }
}
