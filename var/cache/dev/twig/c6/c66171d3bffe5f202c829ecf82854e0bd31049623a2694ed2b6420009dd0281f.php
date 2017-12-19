<?php

/* user/edit.html.twig */
class __TwigTemplate_16a303066b6b643e4b6374ec82c336a07eab6375fc7a59115e1ee541343e7dfb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/edit.html.twig", 1);
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
        $__internal_33469f0942ff771198cccdd22483861cf7a2ec08deda63172cdfe7e7362ccaf0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33469f0942ff771198cccdd22483861cf7a2ec08deda63172cdfe7e7362ccaf0->enter($__internal_33469f0942ff771198cccdd22483861cf7a2ec08deda63172cdfe7e7362ccaf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

        $__internal_c025a98a45c30b772e0dfec632ccf91a7b5a71067e118a42090f3049f34662f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c025a98a45c30b772e0dfec632ccf91a7b5a71067e118a42090f3049f34662f6->enter($__internal_c025a98a45c30b772e0dfec632ccf91a7b5a71067e118a42090f3049f34662f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33469f0942ff771198cccdd22483861cf7a2ec08deda63172cdfe7e7362ccaf0->leave($__internal_33469f0942ff771198cccdd22483861cf7a2ec08deda63172cdfe7e7362ccaf0_prof);

        
        $__internal_c025a98a45c30b772e0dfec632ccf91a7b5a71067e118a42090f3049f34662f6->leave($__internal_c025a98a45c30b772e0dfec632ccf91a7b5a71067e118a42090f3049f34662f6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_75c23cc9c4f3fdf185e4487f9e6746a195496c89ad889ba36d17cf65d62996dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75c23cc9c4f3fdf185e4487f9e6746a195496c89ad889ba36d17cf65d62996dc->enter($__internal_75c23cc9c4f3fdf185e4487f9e6746a195496c89ad889ba36d17cf65d62996dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cd99d02fb13a61434c3fc10eaecef9b23edd694793c4f2c387fa0f98b9860852 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd99d02fb13a61434c3fc10eaecef9b23edd694793c4f2c387fa0f98b9860852->enter($__internal_cd99d02fb13a61434c3fc10eaecef9b23edd694793c4f2c387fa0f98b9860852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>User edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_cd99d02fb13a61434c3fc10eaecef9b23edd694793c4f2c387fa0f98b9860852->leave($__internal_cd99d02fb13a61434c3fc10eaecef9b23edd694793c4f2c387fa0f98b9860852_prof);

        
        $__internal_75c23cc9c4f3fdf185e4487f9e6746a195496c89ad889ba36d17cf65d62996dc->leave($__internal_75c23cc9c4f3fdf185e4487f9e6746a195496c89ad889ba36d17cf65d62996dc_prof);

    }

    public function getTemplateName()
    {
        return "user/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>User edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('user_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "user/edit.html.twig", "/home/patricia/Desktop/kurzy_projekt/kurzy/app/Resources/views/user/edit.html.twig");
    }
}
