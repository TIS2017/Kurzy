<?php

/* workplace/new.html.twig */
class __TwigTemplate_8e8a286cca8969ced61603919a9fc081f54b2da8ca3009efd69ca029f3b8753a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "workplace/new.html.twig", 1);
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
        $__internal_c35d575c081a35a0662e39c2ba5087a9e743e2b264f3b2be58dad1d27beddcb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c35d575c081a35a0662e39c2ba5087a9e743e2b264f3b2be58dad1d27beddcb1->enter($__internal_c35d575c081a35a0662e39c2ba5087a9e743e2b264f3b2be58dad1d27beddcb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "workplace/new.html.twig"));

        $__internal_fa6ca404673aacb326cbd636d730e5475b177890b9ddb8b9326878a10ebc8cd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa6ca404673aacb326cbd636d730e5475b177890b9ddb8b9326878a10ebc8cd6->enter($__internal_fa6ca404673aacb326cbd636d730e5475b177890b9ddb8b9326878a10ebc8cd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "workplace/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c35d575c081a35a0662e39c2ba5087a9e743e2b264f3b2be58dad1d27beddcb1->leave($__internal_c35d575c081a35a0662e39c2ba5087a9e743e2b264f3b2be58dad1d27beddcb1_prof);

        
        $__internal_fa6ca404673aacb326cbd636d730e5475b177890b9ddb8b9326878a10ebc8cd6->leave($__internal_fa6ca404673aacb326cbd636d730e5475b177890b9ddb8b9326878a10ebc8cd6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ddd75d8a3d7066c587b721d7c42292716a7f01790afdb84d564b00c6e19eeb34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddd75d8a3d7066c587b721d7c42292716a7f01790afdb84d564b00c6e19eeb34->enter($__internal_ddd75d8a3d7066c587b721d7c42292716a7f01790afdb84d564b00c6e19eeb34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b86b1ddeef1cf03cadd43a5a9df856a3ba837f9e468feef6517ea6760bccbb3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b86b1ddeef1cf03cadd43a5a9df856a3ba837f9e468feef6517ea6760bccbb3f->enter($__internal_b86b1ddeef1cf03cadd43a5a9df856a3ba837f9e468feef6517ea6760bccbb3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Workplace creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("workplace_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_b86b1ddeef1cf03cadd43a5a9df856a3ba837f9e468feef6517ea6760bccbb3f->leave($__internal_b86b1ddeef1cf03cadd43a5a9df856a3ba837f9e468feef6517ea6760bccbb3f_prof);

        
        $__internal_ddd75d8a3d7066c587b721d7c42292716a7f01790afdb84d564b00c6e19eeb34->leave($__internal_ddd75d8a3d7066c587b721d7c42292716a7f01790afdb84d564b00c6e19eeb34_prof);

    }

    public function getTemplateName()
    {
        return "workplace/new.html.twig";
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
    <h1>Workplace creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('workplace_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "workplace/new.html.twig", "/home/dana/Kurzy/app/Resources/views/workplace/new.html.twig");
    }
}
