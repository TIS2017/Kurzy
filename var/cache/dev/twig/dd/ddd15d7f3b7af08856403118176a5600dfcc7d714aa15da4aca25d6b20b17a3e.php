<?php

/* coursesoftprerequisite/new.html.twig */
class __TwigTemplate_f66c48bde9253eeae4db3ca05f5bd7c4004de0839f4c96b6059e3fd98fedec0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "coursesoftprerequisite/new.html.twig", 1);
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
        $__internal_3296e18056ec509e6b72ed76c664cc40f8379eb13153b25fa951ad06076834b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3296e18056ec509e6b72ed76c664cc40f8379eb13153b25fa951ad06076834b8->enter($__internal_3296e18056ec509e6b72ed76c664cc40f8379eb13153b25fa951ad06076834b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "coursesoftprerequisite/new.html.twig"));

        $__internal_fbb0b52eea9f2a04ee5ea3999101a10436794ccc964e922c9039d76969155a00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbb0b52eea9f2a04ee5ea3999101a10436794ccc964e922c9039d76969155a00->enter($__internal_fbb0b52eea9f2a04ee5ea3999101a10436794ccc964e922c9039d76969155a00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "coursesoftprerequisite/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3296e18056ec509e6b72ed76c664cc40f8379eb13153b25fa951ad06076834b8->leave($__internal_3296e18056ec509e6b72ed76c664cc40f8379eb13153b25fa951ad06076834b8_prof);

        
        $__internal_fbb0b52eea9f2a04ee5ea3999101a10436794ccc964e922c9039d76969155a00->leave($__internal_fbb0b52eea9f2a04ee5ea3999101a10436794ccc964e922c9039d76969155a00_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e70403feab1d4f157625352f31389272989a8104037e4d9195241b28c81ed276 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e70403feab1d4f157625352f31389272989a8104037e4d9195241b28c81ed276->enter($__internal_e70403feab1d4f157625352f31389272989a8104037e4d9195241b28c81ed276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6d36be158071d6a5553a1af4d7247551f43f67e2d6a19c41331197141ba3ad5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d36be158071d6a5553a1af4d7247551f43f67e2d6a19c41331197141ba3ad5d->enter($__internal_6d36be158071d6a5553a1af4d7247551f43f67e2d6a19c41331197141ba3ad5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Coursesoftprerequisite creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("coursesoftprerequisite_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_6d36be158071d6a5553a1af4d7247551f43f67e2d6a19c41331197141ba3ad5d->leave($__internal_6d36be158071d6a5553a1af4d7247551f43f67e2d6a19c41331197141ba3ad5d_prof);

        
        $__internal_e70403feab1d4f157625352f31389272989a8104037e4d9195241b28c81ed276->leave($__internal_e70403feab1d4f157625352f31389272989a8104037e4d9195241b28c81ed276_prof);

    }

    public function getTemplateName()
    {
        return "coursesoftprerequisite/new.html.twig";
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
    <h1>Coursesoftprerequisite creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('coursesoftprerequisite_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "coursesoftprerequisite/new.html.twig", "/home/patricia/Desktop/kurzy_projekt/kurzy/app/Resources/views/coursesoftprerequisite/new.html.twig");
    }
}
