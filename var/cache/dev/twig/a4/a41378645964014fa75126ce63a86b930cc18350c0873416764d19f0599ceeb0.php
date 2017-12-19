<?php

/* place/new.html.twig */
class __TwigTemplate_12f03c539905102c21e84c41a834e072cb3f1fabd4f63462a6bbe5c6e71229e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "place/new.html.twig", 1);
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
        $__internal_ade6fdf1e1c4fb7286f476c3c805d83b91b43c52b1cd07be3a2dad3013471024 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ade6fdf1e1c4fb7286f476c3c805d83b91b43c52b1cd07be3a2dad3013471024->enter($__internal_ade6fdf1e1c4fb7286f476c3c805d83b91b43c52b1cd07be3a2dad3013471024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "place/new.html.twig"));

        $__internal_45dfdb4720c49f25722a2a1ca542531aa4eeb0000a77a8a1daf7c4b9dc73a5a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45dfdb4720c49f25722a2a1ca542531aa4eeb0000a77a8a1daf7c4b9dc73a5a9->enter($__internal_45dfdb4720c49f25722a2a1ca542531aa4eeb0000a77a8a1daf7c4b9dc73a5a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "place/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ade6fdf1e1c4fb7286f476c3c805d83b91b43c52b1cd07be3a2dad3013471024->leave($__internal_ade6fdf1e1c4fb7286f476c3c805d83b91b43c52b1cd07be3a2dad3013471024_prof);

        
        $__internal_45dfdb4720c49f25722a2a1ca542531aa4eeb0000a77a8a1daf7c4b9dc73a5a9->leave($__internal_45dfdb4720c49f25722a2a1ca542531aa4eeb0000a77a8a1daf7c4b9dc73a5a9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_88fb52259b9c9678bb87df34c1384b89df06616a30aeab4737f88c3d1878d156 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88fb52259b9c9678bb87df34c1384b89df06616a30aeab4737f88c3d1878d156->enter($__internal_88fb52259b9c9678bb87df34c1384b89df06616a30aeab4737f88c3d1878d156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b4c813fb0fdfbdbf28f5e16700f76f2257ada6aa27874c5c0f49dc27041b3af8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4c813fb0fdfbdbf28f5e16700f76f2257ada6aa27874c5c0f49dc27041b3af8->enter($__internal_b4c813fb0fdfbdbf28f5e16700f76f2257ada6aa27874c5c0f49dc27041b3af8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Place creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("place_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_b4c813fb0fdfbdbf28f5e16700f76f2257ada6aa27874c5c0f49dc27041b3af8->leave($__internal_b4c813fb0fdfbdbf28f5e16700f76f2257ada6aa27874c5c0f49dc27041b3af8_prof);

        
        $__internal_88fb52259b9c9678bb87df34c1384b89df06616a30aeab4737f88c3d1878d156->leave($__internal_88fb52259b9c9678bb87df34c1384b89df06616a30aeab4737f88c3d1878d156_prof);

    }

    public function getTemplateName()
    {
        return "place/new.html.twig";
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
    <h1>Place creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('place_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "place/new.html.twig", "/home/patricia/Desktop/kurzy_projekt/kurzy/app/Resources/views/place/new.html.twig");
    }
}
