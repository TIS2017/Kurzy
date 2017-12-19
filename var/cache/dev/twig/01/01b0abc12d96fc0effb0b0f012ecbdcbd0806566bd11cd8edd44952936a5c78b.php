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
        $__internal_8a0f30c2887b185bf29033a74e57ff41bc01de449b9d53fd6d76e6de6e26a92d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a0f30c2887b185bf29033a74e57ff41bc01de449b9d53fd6d76e6de6e26a92d->enter($__internal_8a0f30c2887b185bf29033a74e57ff41bc01de449b9d53fd6d76e6de6e26a92d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "workplace/new.html.twig"));

        $__internal_df4a2da5e087f2e7f03e89d6b10bf33d84b59ec1b77e4571e4ca69544e63d533 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df4a2da5e087f2e7f03e89d6b10bf33d84b59ec1b77e4571e4ca69544e63d533->enter($__internal_df4a2da5e087f2e7f03e89d6b10bf33d84b59ec1b77e4571e4ca69544e63d533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "workplace/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a0f30c2887b185bf29033a74e57ff41bc01de449b9d53fd6d76e6de6e26a92d->leave($__internal_8a0f30c2887b185bf29033a74e57ff41bc01de449b9d53fd6d76e6de6e26a92d_prof);

        
        $__internal_df4a2da5e087f2e7f03e89d6b10bf33d84b59ec1b77e4571e4ca69544e63d533->leave($__internal_df4a2da5e087f2e7f03e89d6b10bf33d84b59ec1b77e4571e4ca69544e63d533_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_62e4ae6326619b4b7c56e9cb93c8a502ae9a50ce0abe25019fa3ead7931226a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62e4ae6326619b4b7c56e9cb93c8a502ae9a50ce0abe25019fa3ead7931226a7->enter($__internal_62e4ae6326619b4b7c56e9cb93c8a502ae9a50ce0abe25019fa3ead7931226a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d4058a85abc902f45b49b565de80bf1ca0d301efdd8e1c2bd7515fae4f7096d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4058a85abc902f45b49b565de80bf1ca0d301efdd8e1c2bd7515fae4f7096d1->enter($__internal_d4058a85abc902f45b49b565de80bf1ca0d301efdd8e1c2bd7515fae4f7096d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d4058a85abc902f45b49b565de80bf1ca0d301efdd8e1c2bd7515fae4f7096d1->leave($__internal_d4058a85abc902f45b49b565de80bf1ca0d301efdd8e1c2bd7515fae4f7096d1_prof);

        
        $__internal_62e4ae6326619b4b7c56e9cb93c8a502ae9a50ce0abe25019fa3ead7931226a7->leave($__internal_62e4ae6326619b4b7c56e9cb93c8a502ae9a50ce0abe25019fa3ead7931226a7_prof);

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
", "workplace/new.html.twig", "/home/patricia/Desktop/kurzy_projekt/kurzy/app/Resources/views/workplace/new.html.twig");
    }
}
