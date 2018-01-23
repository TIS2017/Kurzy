<?php

/* courseinstance/new.html.twig */
class __TwigTemplate_d91607f1cc7d472df96c51b0f6a6dbf9bbf3b70d0436a7363d154c513e9ceeff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "courseinstance/new.html.twig", 1);
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
        $__internal_ec6f902080cbe4d8a5a58ee4defeb7bdc397e372e54bb252d41952f4fd01bc1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec6f902080cbe4d8a5a58ee4defeb7bdc397e372e54bb252d41952f4fd01bc1f->enter($__internal_ec6f902080cbe4d8a5a58ee4defeb7bdc397e372e54bb252d41952f4fd01bc1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "courseinstance/new.html.twig"));

        $__internal_58a0e6a08bb280b4ffe49b01028dff1c784c58b8f967a10641bbcbc3bd7400e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58a0e6a08bb280b4ffe49b01028dff1c784c58b8f967a10641bbcbc3bd7400e6->enter($__internal_58a0e6a08bb280b4ffe49b01028dff1c784c58b8f967a10641bbcbc3bd7400e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "courseinstance/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec6f902080cbe4d8a5a58ee4defeb7bdc397e372e54bb252d41952f4fd01bc1f->leave($__internal_ec6f902080cbe4d8a5a58ee4defeb7bdc397e372e54bb252d41952f4fd01bc1f_prof);

        
        $__internal_58a0e6a08bb280b4ffe49b01028dff1c784c58b8f967a10641bbcbc3bd7400e6->leave($__internal_58a0e6a08bb280b4ffe49b01028dff1c784c58b8f967a10641bbcbc3bd7400e6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e2bcd4de9f3727d44dc67da2959ab7c24bbb1195aff98dbba61fb0ff1869c8de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2bcd4de9f3727d44dc67da2959ab7c24bbb1195aff98dbba61fb0ff1869c8de->enter($__internal_e2bcd4de9f3727d44dc67da2959ab7c24bbb1195aff98dbba61fb0ff1869c8de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c30c75d9bf11f78d59f15a11242fc38f7908537db461b0cf8aac733442b465a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c30c75d9bf11f78d59f15a11242fc38f7908537db461b0cf8aac733442b465a3->enter($__internal_c30c75d9bf11f78d59f15a11242fc38f7908537db461b0cf8aac733442b465a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Courseinstance creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("courseinstance_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_c30c75d9bf11f78d59f15a11242fc38f7908537db461b0cf8aac733442b465a3->leave($__internal_c30c75d9bf11f78d59f15a11242fc38f7908537db461b0cf8aac733442b465a3_prof);

        
        $__internal_e2bcd4de9f3727d44dc67da2959ab7c24bbb1195aff98dbba61fb0ff1869c8de->leave($__internal_e2bcd4de9f3727d44dc67da2959ab7c24bbb1195aff98dbba61fb0ff1869c8de_prof);

    }

    public function getTemplateName()
    {
        return "courseinstance/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Courseinstance creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('courseinstance_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "courseinstance/new.html.twig", "/home/dana/Kurzy/app/Resources/views/courseinstance/new.html.twig");
    }
}
