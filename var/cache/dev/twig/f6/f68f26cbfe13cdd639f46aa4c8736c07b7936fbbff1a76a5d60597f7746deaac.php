<?php

/* email/new.html.twig */
class __TwigTemplate_5e5d7f578a8175eac57df24b821368ecbc8a0de64e97d4a5f94761970b71a7da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "email/new.html.twig", 1);
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
        $__internal_323c1a48f6bbe487db1fb41c50118ef8e40be24666819264e2e606fe53f05dc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_323c1a48f6bbe487db1fb41c50118ef8e40be24666819264e2e606fe53f05dc7->enter($__internal_323c1a48f6bbe487db1fb41c50118ef8e40be24666819264e2e606fe53f05dc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "email/new.html.twig"));

        $__internal_3967d77014a8126500150fecf18f05c594fb525f33b1fb6f4ee72620d56dfbf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3967d77014a8126500150fecf18f05c594fb525f33b1fb6f4ee72620d56dfbf9->enter($__internal_3967d77014a8126500150fecf18f05c594fb525f33b1fb6f4ee72620d56dfbf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "email/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_323c1a48f6bbe487db1fb41c50118ef8e40be24666819264e2e606fe53f05dc7->leave($__internal_323c1a48f6bbe487db1fb41c50118ef8e40be24666819264e2e606fe53f05dc7_prof);

        
        $__internal_3967d77014a8126500150fecf18f05c594fb525f33b1fb6f4ee72620d56dfbf9->leave($__internal_3967d77014a8126500150fecf18f05c594fb525f33b1fb6f4ee72620d56dfbf9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b28a1bb5b229bab586ab9156d4459b97c7bcf56dcc5bb269ff99f598fc0c4539 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b28a1bb5b229bab586ab9156d4459b97c7bcf56dcc5bb269ff99f598fc0c4539->enter($__internal_b28a1bb5b229bab586ab9156d4459b97c7bcf56dcc5bb269ff99f598fc0c4539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_628627fff570790583d755d2d283db61c16088b0d420e5fc159db171bd366af3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_628627fff570790583d755d2d283db61c16088b0d420e5fc159db171bd366af3->enter($__internal_628627fff570790583d755d2d283db61c16088b0d420e5fc159db171bd366af3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Email creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("email_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_628627fff570790583d755d2d283db61c16088b0d420e5fc159db171bd366af3->leave($__internal_628627fff570790583d755d2d283db61c16088b0d420e5fc159db171bd366af3_prof);

        
        $__internal_b28a1bb5b229bab586ab9156d4459b97c7bcf56dcc5bb269ff99f598fc0c4539->leave($__internal_b28a1bb5b229bab586ab9156d4459b97c7bcf56dcc5bb269ff99f598fc0c4539_prof);

    }

    public function getTemplateName()
    {
        return "email/new.html.twig";
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
    <h1>Email creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('email_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "email/new.html.twig", "/home/patricia/Desktop/kurzy_projekt/kurzy/app/Resources/views/email/new.html.twig");
    }
}
