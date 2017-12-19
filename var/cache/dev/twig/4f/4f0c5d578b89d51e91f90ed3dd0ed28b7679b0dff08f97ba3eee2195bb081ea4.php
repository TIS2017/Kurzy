<?php

/* role/new.html.twig */
class __TwigTemplate_c727000d4b2acd250159501e95f39f2dbaa722abf5d0f7188babd47a3696444b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "role/new.html.twig", 1);
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
        $__internal_0e9edf4e7b8faea11ad047a250e98dc8c04826da82e54cf1144e93514ecf5844 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e9edf4e7b8faea11ad047a250e98dc8c04826da82e54cf1144e93514ecf5844->enter($__internal_0e9edf4e7b8faea11ad047a250e98dc8c04826da82e54cf1144e93514ecf5844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "role/new.html.twig"));

        $__internal_2185cdade427367d207f8449c276ee311986ae23ad10e87e68855200ec32e5a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2185cdade427367d207f8449c276ee311986ae23ad10e87e68855200ec32e5a7->enter($__internal_2185cdade427367d207f8449c276ee311986ae23ad10e87e68855200ec32e5a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "role/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e9edf4e7b8faea11ad047a250e98dc8c04826da82e54cf1144e93514ecf5844->leave($__internal_0e9edf4e7b8faea11ad047a250e98dc8c04826da82e54cf1144e93514ecf5844_prof);

        
        $__internal_2185cdade427367d207f8449c276ee311986ae23ad10e87e68855200ec32e5a7->leave($__internal_2185cdade427367d207f8449c276ee311986ae23ad10e87e68855200ec32e5a7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_432a095e8d2c1670e8d42cd60a45112d026a67b3960ac712dfdf62a74d59359e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_432a095e8d2c1670e8d42cd60a45112d026a67b3960ac712dfdf62a74d59359e->enter($__internal_432a095e8d2c1670e8d42cd60a45112d026a67b3960ac712dfdf62a74d59359e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_00c6aaef94c40bb950b2a87e1f6cf27dc03815f699119884821442be73078d5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00c6aaef94c40bb950b2a87e1f6cf27dc03815f699119884821442be73078d5f->enter($__internal_00c6aaef94c40bb950b2a87e1f6cf27dc03815f699119884821442be73078d5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Role creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("role_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_00c6aaef94c40bb950b2a87e1f6cf27dc03815f699119884821442be73078d5f->leave($__internal_00c6aaef94c40bb950b2a87e1f6cf27dc03815f699119884821442be73078d5f_prof);

        
        $__internal_432a095e8d2c1670e8d42cd60a45112d026a67b3960ac712dfdf62a74d59359e->leave($__internal_432a095e8d2c1670e8d42cd60a45112d026a67b3960ac712dfdf62a74d59359e_prof);

    }

    public function getTemplateName()
    {
        return "role/new.html.twig";
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
    <h1>Role creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('role_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "role/new.html.twig", "/home/patricia/Desktop/kurzy_projekt/kurzy/app/Resources/views/role/new.html.twig");
    }
}
