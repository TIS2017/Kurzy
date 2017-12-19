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
        $__internal_b67b0a6a5d21c95f901ba12140b051e7e707d3b546024b32340f80b39b5b813f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b67b0a6a5d21c95f901ba12140b051e7e707d3b546024b32340f80b39b5b813f->enter($__internal_b67b0a6a5d21c95f901ba12140b051e7e707d3b546024b32340f80b39b5b813f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "enrolled/new.html.twig"));

        $__internal_465f0b8f9e395321c58b78a86f78738828e3e4e8cf77c1cb13b0ad2beb0b9e74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_465f0b8f9e395321c58b78a86f78738828e3e4e8cf77c1cb13b0ad2beb0b9e74->enter($__internal_465f0b8f9e395321c58b78a86f78738828e3e4e8cf77c1cb13b0ad2beb0b9e74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "enrolled/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b67b0a6a5d21c95f901ba12140b051e7e707d3b546024b32340f80b39b5b813f->leave($__internal_b67b0a6a5d21c95f901ba12140b051e7e707d3b546024b32340f80b39b5b813f_prof);

        
        $__internal_465f0b8f9e395321c58b78a86f78738828e3e4e8cf77c1cb13b0ad2beb0b9e74->leave($__internal_465f0b8f9e395321c58b78a86f78738828e3e4e8cf77c1cb13b0ad2beb0b9e74_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cde2d9b8d9bcdd0c1f042ad7494cc85f8a9d86422f9ada6ecac17b25b69b2c91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cde2d9b8d9bcdd0c1f042ad7494cc85f8a9d86422f9ada6ecac17b25b69b2c91->enter($__internal_cde2d9b8d9bcdd0c1f042ad7494cc85f8a9d86422f9ada6ecac17b25b69b2c91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_585cb623e9cb459aafc93469b26d5f6088bad5374bcbd29602b1625516ab019d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_585cb623e9cb459aafc93469b26d5f6088bad5374bcbd29602b1625516ab019d->enter($__internal_585cb623e9cb459aafc93469b26d5f6088bad5374bcbd29602b1625516ab019d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Enrolled creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("enrolled_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_585cb623e9cb459aafc93469b26d5f6088bad5374bcbd29602b1625516ab019d->leave($__internal_585cb623e9cb459aafc93469b26d5f6088bad5374bcbd29602b1625516ab019d_prof);

        
        $__internal_cde2d9b8d9bcdd0c1f042ad7494cc85f8a9d86422f9ada6ecac17b25b69b2c91->leave($__internal_cde2d9b8d9bcdd0c1f042ad7494cc85f8a9d86422f9ada6ecac17b25b69b2c91_prof);

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
{% endblock %}
", "enrolled/new.html.twig", "/home/patricia/Desktop/kurzy_projekt/kurzy/app/Resources/views/enrolled/new.html.twig");
    }
}
