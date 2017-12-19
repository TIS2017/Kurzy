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
        $__internal_1d3efe59fb4be15b761687927734fd2e799527e91c3902c797616981afb42b6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d3efe59fb4be15b761687927734fd2e799527e91c3902c797616981afb42b6d->enter($__internal_1d3efe59fb4be15b761687927734fd2e799527e91c3902c797616981afb42b6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "courseinstance/new.html.twig"));

        $__internal_a735fceb237d733439b0a616e68045a4c90fb1108bbae4c197bc41e7a4caed9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a735fceb237d733439b0a616e68045a4c90fb1108bbae4c197bc41e7a4caed9b->enter($__internal_a735fceb237d733439b0a616e68045a4c90fb1108bbae4c197bc41e7a4caed9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "courseinstance/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d3efe59fb4be15b761687927734fd2e799527e91c3902c797616981afb42b6d->leave($__internal_1d3efe59fb4be15b761687927734fd2e799527e91c3902c797616981afb42b6d_prof);

        
        $__internal_a735fceb237d733439b0a616e68045a4c90fb1108bbae4c197bc41e7a4caed9b->leave($__internal_a735fceb237d733439b0a616e68045a4c90fb1108bbae4c197bc41e7a4caed9b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_497c61e1c101debafa139ad64373135a7e5537d4879dfeeb36ea7c992209edcd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_497c61e1c101debafa139ad64373135a7e5537d4879dfeeb36ea7c992209edcd->enter($__internal_497c61e1c101debafa139ad64373135a7e5537d4879dfeeb36ea7c992209edcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4e5bf8746a6c180a624a1a10b9450fa45e7ca6c44ddc4454e6216461ffcd6ae0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e5bf8746a6c180a624a1a10b9450fa45e7ca6c44ddc4454e6216461ffcd6ae0->enter($__internal_4e5bf8746a6c180a624a1a10b9450fa45e7ca6c44ddc4454e6216461ffcd6ae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4e5bf8746a6c180a624a1a10b9450fa45e7ca6c44ddc4454e6216461ffcd6ae0->leave($__internal_4e5bf8746a6c180a624a1a10b9450fa45e7ca6c44ddc4454e6216461ffcd6ae0_prof);

        
        $__internal_497c61e1c101debafa139ad64373135a7e5537d4879dfeeb36ea7c992209edcd->leave($__internal_497c61e1c101debafa139ad64373135a7e5537d4879dfeeb36ea7c992209edcd_prof);

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
", "courseinstance/new.html.twig", "/home/patricia/Desktop/kurzy_projekt/kurzy/app/Resources/views/courseinstance/new.html.twig");
    }
}
