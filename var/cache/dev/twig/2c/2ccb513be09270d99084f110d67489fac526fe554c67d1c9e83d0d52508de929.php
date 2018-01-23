<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_edaf73c63603964fb658c57af8131b0c2cdc9036093ba63fa1e26ededaf215dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2a7fdb07b909d57c7c6e7c14f01e91b0ca21d62075c62e810aa292ceb0d9e799 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a7fdb07b909d57c7c6e7c14f01e91b0ca21d62075c62e810aa292ceb0d9e799->enter($__internal_2a7fdb07b909d57c7c6e7c14f01e91b0ca21d62075c62e810aa292ceb0d9e799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_e820145aa8369f77a31b11a955672b88d6a08f4a9e2845502ca8cdc1dd6af136 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e820145aa8369f77a31b11a955672b88d6a08f4a9e2845502ca8cdc1dd6af136->enter($__internal_e820145aa8369f77a31b11a955672b88d6a08f4a9e2845502ca8cdc1dd6af136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a7fdb07b909d57c7c6e7c14f01e91b0ca21d62075c62e810aa292ceb0d9e799->leave($__internal_2a7fdb07b909d57c7c6e7c14f01e91b0ca21d62075c62e810aa292ceb0d9e799_prof);

        
        $__internal_e820145aa8369f77a31b11a955672b88d6a08f4a9e2845502ca8cdc1dd6af136->leave($__internal_e820145aa8369f77a31b11a955672b88d6a08f4a9e2845502ca8cdc1dd6af136_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_68ddfc21a18fb619c640e4c6d98f9b28e1433b918d2dccccfa9ad208c50b373f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68ddfc21a18fb619c640e4c6d98f9b28e1433b918d2dccccfa9ad208c50b373f->enter($__internal_68ddfc21a18fb619c640e4c6d98f9b28e1433b918d2dccccfa9ad208c50b373f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_32ab05b67fe4e57c8807821a7ab8edc0b54a8e3c1f8547ae0dad6f3e2ab75971 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32ab05b67fe4e57c8807821a7ab8edc0b54a8e3c1f8547ae0dad6f3e2ab75971->enter($__internal_32ab05b67fe4e57c8807821a7ab8edc0b54a8e3c1f8547ae0dad6f3e2ab75971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_32ab05b67fe4e57c8807821a7ab8edc0b54a8e3c1f8547ae0dad6f3e2ab75971->leave($__internal_32ab05b67fe4e57c8807821a7ab8edc0b54a8e3c1f8547ae0dad6f3e2ab75971_prof);

        
        $__internal_68ddfc21a18fb619c640e4c6d98f9b28e1433b918d2dccccfa9ad208c50b373f->leave($__internal_68ddfc21a18fb619c640e4c6d98f9b28e1433b918d2dccccfa9ad208c50b373f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/home/dana/Kurzy/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
