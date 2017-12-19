<?php

/* user/new.html.twig */
class __TwigTemplate_b131496b9894a28a7c4b8a17fac2ae221a284782e21acd93a8bafe749a303ac3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/new.html.twig", 1);
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
        $__internal_d41630cc9af6c3ae8b6c5a75236cb82d10555d025dd93a4dfec607f984ba8a09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d41630cc9af6c3ae8b6c5a75236cb82d10555d025dd93a4dfec607f984ba8a09->enter($__internal_d41630cc9af6c3ae8b6c5a75236cb82d10555d025dd93a4dfec607f984ba8a09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        $__internal_c7c50d9ecfe1f1edb74015df08ed428f47be919d6ed27e0cd17bf0ac34467c32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7c50d9ecfe1f1edb74015df08ed428f47be919d6ed27e0cd17bf0ac34467c32->enter($__internal_c7c50d9ecfe1f1edb74015df08ed428f47be919d6ed27e0cd17bf0ac34467c32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d41630cc9af6c3ae8b6c5a75236cb82d10555d025dd93a4dfec607f984ba8a09->leave($__internal_d41630cc9af6c3ae8b6c5a75236cb82d10555d025dd93a4dfec607f984ba8a09_prof);

        
        $__internal_c7c50d9ecfe1f1edb74015df08ed428f47be919d6ed27e0cd17bf0ac34467c32->leave($__internal_c7c50d9ecfe1f1edb74015df08ed428f47be919d6ed27e0cd17bf0ac34467c32_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9698c1183e6c11ef574947965f6a0d35da2af594ce3de8363406d956b781b870 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9698c1183e6c11ef574947965f6a0d35da2af594ce3de8363406d956b781b870->enter($__internal_9698c1183e6c11ef574947965f6a0d35da2af594ce3de8363406d956b781b870_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_73fdc90a66ceaa0b41bc19685caaa874d96b5036d63d9376a61258fac5d1e49a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73fdc90a66ceaa0b41bc19685caaa874d96b5036d63d9376a61258fac5d1e49a->enter($__internal_73fdc90a66ceaa0b41bc19685caaa874d96b5036d63d9376a61258fac5d1e49a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>User creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_73fdc90a66ceaa0b41bc19685caaa874d96b5036d63d9376a61258fac5d1e49a->leave($__internal_73fdc90a66ceaa0b41bc19685caaa874d96b5036d63d9376a61258fac5d1e49a_prof);

        
        $__internal_9698c1183e6c11ef574947965f6a0d35da2af594ce3de8363406d956b781b870->leave($__internal_9698c1183e6c11ef574947965f6a0d35da2af594ce3de8363406d956b781b870_prof);

    }

    public function getTemplateName()
    {
        return "user/new.html.twig";
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
    <h1>User creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('user_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "user/new.html.twig", "/home/patricia/Desktop/kurzy_projekt/kurzy/app/Resources/views/user/new.html.twig");
    }
}
