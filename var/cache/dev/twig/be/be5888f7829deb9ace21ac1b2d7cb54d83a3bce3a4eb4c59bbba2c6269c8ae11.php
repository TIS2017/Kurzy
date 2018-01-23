<?php

/* enrolled/show.html.twig */
class __TwigTemplate_6ed285cfcc0de86841ce0f7f58674e36d2b9e2d1448d99fdd407cc63fa4ace2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "enrolled/show.html.twig", 1);
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
        $__internal_3ae72318bad8d76c525f11b864b14d7f5aa8014359eeb62e1ea2d18d4ac40c92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ae72318bad8d76c525f11b864b14d7f5aa8014359eeb62e1ea2d18d4ac40c92->enter($__internal_3ae72318bad8d76c525f11b864b14d7f5aa8014359eeb62e1ea2d18d4ac40c92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "enrolled/show.html.twig"));

        $__internal_7228b7fbffd2b2d06f1fcd06391574e43a3f5d0e6d669cd02e6551e056995193 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7228b7fbffd2b2d06f1fcd06391574e43a3f5d0e6d669cd02e6551e056995193->enter($__internal_7228b7fbffd2b2d06f1fcd06391574e43a3f5d0e6d669cd02e6551e056995193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "enrolled/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ae72318bad8d76c525f11b864b14d7f5aa8014359eeb62e1ea2d18d4ac40c92->leave($__internal_3ae72318bad8d76c525f11b864b14d7f5aa8014359eeb62e1ea2d18d4ac40c92_prof);

        
        $__internal_7228b7fbffd2b2d06f1fcd06391574e43a3f5d0e6d669cd02e6551e056995193->leave($__internal_7228b7fbffd2b2d06f1fcd06391574e43a3f5d0e6d669cd02e6551e056995193_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2a01feaa33b0ddf35d55fd9e427a1249d37b903ed399899d38b62a1a256f059d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a01feaa33b0ddf35d55fd9e427a1249d37b903ed399899d38b62a1a256f059d->enter($__internal_2a01feaa33b0ddf35d55fd9e427a1249d37b903ed399899d38b62a1a256f059d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_76509e4dfa845f29e88ebc9719bddb8f940c628af6e2db72a9265c1c777ade76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76509e4dfa845f29e88ebc9719bddb8f940c628af6e2db72a9265c1c777ade76->enter($__internal_76509e4dfa845f29e88ebc9719bddb8f940c628af6e2db72a9265c1c777ade76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Enrolled</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["enrolled"] ?? $this->getContext($context, "enrolled")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Graduated</th>
                <td>";
        // line 14
        if ($this->getAttribute(($context["enrolled"] ?? $this->getContext($context, "enrolled")), "graduated", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Userid</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["enrolled"] ?? $this->getContext($context, "enrolled")), "userId", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Comment</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["enrolled"] ?? $this->getContext($context, "enrolled")), "comment", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Attended</th>
                <td>";
        // line 26
        if ($this->getAttribute(($context["enrolled"] ?? $this->getContext($context, "enrolled")), "attended", array())) {
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
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("enrolled_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("enrolled_edit", array("id" => $this->getAttribute(($context["enrolled"] ?? $this->getContext($context, "enrolled")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 39
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_76509e4dfa845f29e88ebc9719bddb8f940c628af6e2db72a9265c1c777ade76->leave($__internal_76509e4dfa845f29e88ebc9719bddb8f940c628af6e2db72a9265c1c777ade76_prof);

        
        $__internal_2a01feaa33b0ddf35d55fd9e427a1249d37b903ed399899d38b62a1a256f059d->leave($__internal_2a01feaa33b0ddf35d55fd9e427a1249d37b903ed399899d38b62a1a256f059d_prof);

    }

    public function getTemplateName()
    {
        return "enrolled/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 41,  115 => 39,  109 => 36,  103 => 33,  89 => 26,  82 => 22,  75 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Enrolled</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ enrolled.id }}</td>
            </tr>
            <tr>
                <th>Graduated</th>
                <td>{% if enrolled.graduated %}Yes{% else %}No{% endif %}</td>
            </tr>
            <tr>
                <th>Userid</th>
                <td>{{ enrolled.userId }}</td>
            </tr>
            <tr>
                <th>Comment</th>
                <td>{{ enrolled.comment }}</td>
            </tr>
            <tr>
                <th>Attended</th>
                <td>{% if enrolled.attended %}Yes{% else %}No{% endif %}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('enrolled_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('enrolled_edit', { 'id': enrolled.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "enrolled/show.html.twig", "/home/dana/Kurzy/app/Resources/views/enrolled/show.html.twig");
    }
}
