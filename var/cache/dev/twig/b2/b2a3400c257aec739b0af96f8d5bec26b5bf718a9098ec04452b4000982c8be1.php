<?php

/* coursetype/new.html.twig */
class __TwigTemplate_1b01eb71876eec5024ae3af9558a4d4e7a3f7153801ab8aaf60e9279b98bf169 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "coursetype/new.html.twig", 1);
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
        $__internal_ca8d33fdeb47636a3678c469ec01884d5cac1455f4fc3b6300ff86a72faaa86c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca8d33fdeb47636a3678c469ec01884d5cac1455f4fc3b6300ff86a72faaa86c->enter($__internal_ca8d33fdeb47636a3678c469ec01884d5cac1455f4fc3b6300ff86a72faaa86c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "coursetype/new.html.twig"));

        $__internal_b27fc5afd6b691dfba3ea5398d542980e67774e672296a9e716a671a8ae125bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b27fc5afd6b691dfba3ea5398d542980e67774e672296a9e716a671a8ae125bb->enter($__internal_b27fc5afd6b691dfba3ea5398d542980e67774e672296a9e716a671a8ae125bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "coursetype/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca8d33fdeb47636a3678c469ec01884d5cac1455f4fc3b6300ff86a72faaa86c->leave($__internal_ca8d33fdeb47636a3678c469ec01884d5cac1455f4fc3b6300ff86a72faaa86c_prof);

        
        $__internal_b27fc5afd6b691dfba3ea5398d542980e67774e672296a9e716a671a8ae125bb->leave($__internal_b27fc5afd6b691dfba3ea5398d542980e67774e672296a9e716a671a8ae125bb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3cb81b2cd821615233fa0876875610e409010beae1566d628221c6cbe1211008 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cb81b2cd821615233fa0876875610e409010beae1566d628221c6cbe1211008->enter($__internal_3cb81b2cd821615233fa0876875610e409010beae1566d628221c6cbe1211008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_42266ca1b5560ea584e8da8afada5d95050eb49a2cc3d25ab8063d7627a03034 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42266ca1b5560ea584e8da8afada5d95050eb49a2cc3d25ab8063d7627a03034->enter($__internal_42266ca1b5560ea584e8da8afada5d95050eb49a2cc3d25ab8063d7627a03034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Coursetype creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("coursetype_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_42266ca1b5560ea584e8da8afada5d95050eb49a2cc3d25ab8063d7627a03034->leave($__internal_42266ca1b5560ea584e8da8afada5d95050eb49a2cc3d25ab8063d7627a03034_prof);

        
        $__internal_3cb81b2cd821615233fa0876875610e409010beae1566d628221c6cbe1211008->leave($__internal_3cb81b2cd821615233fa0876875610e409010beae1566d628221c6cbe1211008_prof);

    }

    public function getTemplateName()
    {
        return "coursetype/new.html.twig";
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
    <h1>Coursetype creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('coursetype_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "coursetype/new.html.twig", "/home/patricia/Desktop/kurzy_projekt/kurzy/app/Resources/views/coursetype/new.html.twig");
    }
}
