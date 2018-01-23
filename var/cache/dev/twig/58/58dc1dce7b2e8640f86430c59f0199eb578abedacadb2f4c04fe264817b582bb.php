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
        $__internal_8beb2ae8b9129f2188248c9dbff933c385b07a28a3336cb0f1c68658669a4211 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8beb2ae8b9129f2188248c9dbff933c385b07a28a3336cb0f1c68658669a4211->enter($__internal_8beb2ae8b9129f2188248c9dbff933c385b07a28a3336cb0f1c68658669a4211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "enrolled/new.html.twig"));

        $__internal_b004ad78f3d6cbd3f23cad049f2f08f5560175470583cdadda2d7d710e87062f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b004ad78f3d6cbd3f23cad049f2f08f5560175470583cdadda2d7d710e87062f->enter($__internal_b004ad78f3d6cbd3f23cad049f2f08f5560175470583cdadda2d7d710e87062f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "enrolled/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8beb2ae8b9129f2188248c9dbff933c385b07a28a3336cb0f1c68658669a4211->leave($__internal_8beb2ae8b9129f2188248c9dbff933c385b07a28a3336cb0f1c68658669a4211_prof);

        
        $__internal_b004ad78f3d6cbd3f23cad049f2f08f5560175470583cdadda2d7d710e87062f->leave($__internal_b004ad78f3d6cbd3f23cad049f2f08f5560175470583cdadda2d7d710e87062f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_62a3d4ed05d4bf4ce0ae831f68b5a609a9315b72e90cd75cc9541357c982a9b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62a3d4ed05d4bf4ce0ae831f68b5a609a9315b72e90cd75cc9541357c982a9b0->enter($__internal_62a3d4ed05d4bf4ce0ae831f68b5a609a9315b72e90cd75cc9541357c982a9b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f9c3f85005a9a4572c764b9271e3c21b6a3ffa88a0889fd5e322f542ee575fc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9c3f85005a9a4572c764b9271e3c21b6a3ffa88a0889fd5e322f542ee575fc4->enter($__internal_f9c3f85005a9a4572c764b9271e3c21b6a3ffa88a0889fd5e322f542ee575fc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "     ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 5
            echo "    <h1>Enrolled creation</h1>

    ";
            // line 7
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
            echo "
        ";
            // line 8
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
            echo "
        <input type=\"submit\" value=\"Create\" />
    ";
            // line 10
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
            echo "

    <ul>
        <li>
            <a href=\"";
            // line 14
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("enrolled_index");
            echo "\">Back to the list</a>
        </li>
    </ul>
    ";
        }
        
        $__internal_f9c3f85005a9a4572c764b9271e3c21b6a3ffa88a0889fd5e322f542ee575fc4->leave($__internal_f9c3f85005a9a4572c764b9271e3c21b6a3ffa88a0889fd5e322f542ee575fc4_prof);

        
        $__internal_62a3d4ed05d4bf4ce0ae831f68b5a609a9315b72e90cd75cc9541357c982a9b0->leave($__internal_62a3d4ed05d4bf4ce0ae831f68b5a609a9315b72e90cd75cc9541357c982a9b0_prof);

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
        return array (  72 => 14,  65 => 10,  60 => 8,  56 => 7,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
     {% if is_granted('ROLE_USER') %}
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
    {% endif %}
{% endblock %}
", "enrolled/new.html.twig", "/home/dana/Kurzy/app/Resources/views/enrolled/new.html.twig");
    }
}
