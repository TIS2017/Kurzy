<?php

/* enrolled/new.html.twig */
class __TwigTemplate_6cc8bc90df66f8cb3425acea464c3a52d1b2714217895b4ae3a66106eaa052be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "enrolled/new.html.twig", 1);
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
        $__internal_dda784069e157178aef9bdd6219e767bb91226d12182caf513f433abae3c8172 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dda784069e157178aef9bdd6219e767bb91226d12182caf513f433abae3c8172->enter($__internal_dda784069e157178aef9bdd6219e767bb91226d12182caf513f433abae3c8172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "enrolled/new.html.twig"));

        $__internal_dc73f85e5bb15496e3e8b7396eb8426196f4c977b4e7279b95f7fecff3742e68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc73f85e5bb15496e3e8b7396eb8426196f4c977b4e7279b95f7fecff3742e68->enter($__internal_dc73f85e5bb15496e3e8b7396eb8426196f4c977b4e7279b95f7fecff3742e68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "enrolled/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dda784069e157178aef9bdd6219e767bb91226d12182caf513f433abae3c8172->leave($__internal_dda784069e157178aef9bdd6219e767bb91226d12182caf513f433abae3c8172_prof);

        
        $__internal_dc73f85e5bb15496e3e8b7396eb8426196f4c977b4e7279b95f7fecff3742e68->leave($__internal_dc73f85e5bb15496e3e8b7396eb8426196f4c977b4e7279b95f7fecff3742e68_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d3a23757b326f183a17103d477f44d4065d43449860a285d19e3b8a3bf3f5ceb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3a23757b326f183a17103d477f44d4065d43449860a285d19e3b8a3bf3f5ceb->enter($__internal_d3a23757b326f183a17103d477f44d4065d43449860a285d19e3b8a3bf3f5ceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_709a699703fb589e1a23e924b8f98b742a4b6fe8d4269226cb0cb01803bceb94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_709a699703fb589e1a23e924b8f98b742a4b6fe8d4269226cb0cb01803bceb94->enter($__internal_709a699703fb589e1a23e924b8f98b742a4b6fe8d4269226cb0cb01803bceb94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "     ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 5
            echo "    <h1>Enrolled creation</h1>

    ";
            // line 7
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
            echo "
        ";
            // line 8
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
            echo "
        <input type=\"submit\" value=\"Create\" />
    ";
            // line 10
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
            echo "

    <ul>
        <li>
            <a href=\"";
            // line 14
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("enrolled_index");
            echo "\">Back to the list</a>
        </li>
    </ul>
    ";
        }
        
        $__internal_709a699703fb589e1a23e924b8f98b742a4b6fe8d4269226cb0cb01803bceb94->leave($__internal_709a699703fb589e1a23e924b8f98b742a4b6fe8d4269226cb0cb01803bceb94_prof);

        
        $__internal_d3a23757b326f183a17103d477f44d4065d43449860a285d19e3b8a3bf3f5ceb->leave($__internal_d3a23757b326f183a17103d477f44d4065d43449860a285d19e3b8a3bf3f5ceb_prof);

    }

    public function getTemplateName()
    {
        return "enrolled/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 14,  65 => 10,  60 => 8,  56 => 7,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Enrolled creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('enrolled_index') }}\">Back to the list</a>
        </li>
    </ul>
    {% endif %}
{% endblock %}
", "enrolled/new.html.twig", "/home/andrea/Desktop/CaviarIT/Kurzy/app/Resources/views/enrolled/new.html.twig");
    }
}
