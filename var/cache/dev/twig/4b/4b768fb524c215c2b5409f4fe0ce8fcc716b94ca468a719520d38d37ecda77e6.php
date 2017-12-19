<?php

/* coursetype/edit.html.twig */
class __TwigTemplate_97ec6288b15f8282c7e43f8a5c0a1e64a371d52e950e60af03c276a0d468b182 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "coursetype/edit.html.twig", 1);
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
        $__internal_30b6e9aa789ca50f7abe1587005278be363afafabc171590e8293ba76787e8fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30b6e9aa789ca50f7abe1587005278be363afafabc171590e8293ba76787e8fc->enter($__internal_30b6e9aa789ca50f7abe1587005278be363afafabc171590e8293ba76787e8fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "coursetype/edit.html.twig"));

        $__internal_5610c14724c383a658e6612ad906d87805c8dad4318a9b2ead5391f8e97e6141 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5610c14724c383a658e6612ad906d87805c8dad4318a9b2ead5391f8e97e6141->enter($__internal_5610c14724c383a658e6612ad906d87805c8dad4318a9b2ead5391f8e97e6141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "coursetype/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30b6e9aa789ca50f7abe1587005278be363afafabc171590e8293ba76787e8fc->leave($__internal_30b6e9aa789ca50f7abe1587005278be363afafabc171590e8293ba76787e8fc_prof);

        
        $__internal_5610c14724c383a658e6612ad906d87805c8dad4318a9b2ead5391f8e97e6141->leave($__internal_5610c14724c383a658e6612ad906d87805c8dad4318a9b2ead5391f8e97e6141_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e104ac30783aeb1e5b1765fd3261bf1aa9eb8d124900814529413e56a02387ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e104ac30783aeb1e5b1765fd3261bf1aa9eb8d124900814529413e56a02387ef->enter($__internal_e104ac30783aeb1e5b1765fd3261bf1aa9eb8d124900814529413e56a02387ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_36b2665cac9b89bb779f55fdd35bedae001c7d3de9cc424d70195aa6bd21e714 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36b2665cac9b89bb779f55fdd35bedae001c7d3de9cc424d70195aa6bd21e714->enter($__internal_36b2665cac9b89bb779f55fdd35bedae001c7d3de9cc424d70195aa6bd21e714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Coursetype edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("coursetype_index");
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
        
        $__internal_36b2665cac9b89bb779f55fdd35bedae001c7d3de9cc424d70195aa6bd21e714->leave($__internal_36b2665cac9b89bb779f55fdd35bedae001c7d3de9cc424d70195aa6bd21e714_prof);

        
        $__internal_e104ac30783aeb1e5b1765fd3261bf1aa9eb8d124900814529413e56a02387ef->leave($__internal_e104ac30783aeb1e5b1765fd3261bf1aa9eb8d124900814529413e56a02387ef_prof);

    }

    public function getTemplateName()
    {
        return "coursetype/edit.html.twig";
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
    <h1>Coursetype edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('coursetype_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "coursetype/edit.html.twig", "/home/patricia/Desktop/kurzy_projekt/kurzy/app/Resources/views/coursetype/edit.html.twig");
    }
}
