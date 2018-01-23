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
        $__internal_26458d93b92ebf8a17e6055f182b58e7d2fed52ad2fecd5a86c629e8587268ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26458d93b92ebf8a17e6055f182b58e7d2fed52ad2fecd5a86c629e8587268ae->enter($__internal_26458d93b92ebf8a17e6055f182b58e7d2fed52ad2fecd5a86c629e8587268ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        $__internal_77c100f946ff8ee7a97d2811df993872d76a68a1ad35b54211f97d4bf4db64bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77c100f946ff8ee7a97d2811df993872d76a68a1ad35b54211f97d4bf4db64bc->enter($__internal_77c100f946ff8ee7a97d2811df993872d76a68a1ad35b54211f97d4bf4db64bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26458d93b92ebf8a17e6055f182b58e7d2fed52ad2fecd5a86c629e8587268ae->leave($__internal_26458d93b92ebf8a17e6055f182b58e7d2fed52ad2fecd5a86c629e8587268ae_prof);

        
        $__internal_77c100f946ff8ee7a97d2811df993872d76a68a1ad35b54211f97d4bf4db64bc->leave($__internal_77c100f946ff8ee7a97d2811df993872d76a68a1ad35b54211f97d4bf4db64bc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f3ad6ee4fbeea6a003dd5f2fbeea35eb2ac8dd1cd1d57e3f1c95aec69b466a65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3ad6ee4fbeea6a003dd5f2fbeea35eb2ac8dd1cd1d57e3f1c95aec69b466a65->enter($__internal_f3ad6ee4fbeea6a003dd5f2fbeea35eb2ac8dd1cd1d57e3f1c95aec69b466a65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9939809368b80c442967d8f98cca9ac74559aedfa63d8ac6f706c47bcc721289 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9939809368b80c442967d8f98cca9ac74559aedfa63d8ac6f706c47bcc721289->enter($__internal_9939809368b80c442967d8f98cca9ac74559aedfa63d8ac6f706c47bcc721289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9939809368b80c442967d8f98cca9ac74559aedfa63d8ac6f706c47bcc721289->leave($__internal_9939809368b80c442967d8f98cca9ac74559aedfa63d8ac6f706c47bcc721289_prof);

        
        $__internal_f3ad6ee4fbeea6a003dd5f2fbeea35eb2ac8dd1cd1d57e3f1c95aec69b466a65->leave($__internal_f3ad6ee4fbeea6a003dd5f2fbeea35eb2ac8dd1cd1d57e3f1c95aec69b466a65_prof);

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
", "user/new.html.twig", "/home/dana/Kurzy/app/Resources/views/user/new.html.twig");
    }
}
