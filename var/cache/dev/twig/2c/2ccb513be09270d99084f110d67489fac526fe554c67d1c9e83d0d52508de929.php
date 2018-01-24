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
        $__internal_738c72c6e903d8e95476c6f4dbcf7299484212aa8f4a9341249a8ca4f68f9231 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_738c72c6e903d8e95476c6f4dbcf7299484212aa8f4a9341249a8ca4f68f9231->enter($__internal_738c72c6e903d8e95476c6f4dbcf7299484212aa8f4a9341249a8ca4f68f9231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_ff672fed0a2aed2659c25a1b907b57f1be41f8579ad037c4c5f2d0dd21de3a96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff672fed0a2aed2659c25a1b907b57f1be41f8579ad037c4c5f2d0dd21de3a96->enter($__internal_ff672fed0a2aed2659c25a1b907b57f1be41f8579ad037c4c5f2d0dd21de3a96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_738c72c6e903d8e95476c6f4dbcf7299484212aa8f4a9341249a8ca4f68f9231->leave($__internal_738c72c6e903d8e95476c6f4dbcf7299484212aa8f4a9341249a8ca4f68f9231_prof);

        
        $__internal_ff672fed0a2aed2659c25a1b907b57f1be41f8579ad037c4c5f2d0dd21de3a96->leave($__internal_ff672fed0a2aed2659c25a1b907b57f1be41f8579ad037c4c5f2d0dd21de3a96_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_acab36a7f9e88be2d83752fce5d0b5eaf623a0beb56aee8fd5f28d9b5a0bb926 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acab36a7f9e88be2d83752fce5d0b5eaf623a0beb56aee8fd5f28d9b5a0bb926->enter($__internal_acab36a7f9e88be2d83752fce5d0b5eaf623a0beb56aee8fd5f28d9b5a0bb926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2c1c716a0e8af2db714c54f247da7d1e0026b8c2b47cadeede79196e12d1a42f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c1c716a0e8af2db714c54f247da7d1e0026b8c2b47cadeede79196e12d1a42f->enter($__internal_2c1c716a0e8af2db714c54f247da7d1e0026b8c2b47cadeede79196e12d1a42f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_2c1c716a0e8af2db714c54f247da7d1e0026b8c2b47cadeede79196e12d1a42f->leave($__internal_2c1c716a0e8af2db714c54f247da7d1e0026b8c2b47cadeede79196e12d1a42f_prof);

        
        $__internal_acab36a7f9e88be2d83752fce5d0b5eaf623a0beb56aee8fd5f28d9b5a0bb926->leave($__internal_acab36a7f9e88be2d83752fce5d0b5eaf623a0beb56aee8fd5f28d9b5a0bb926_prof);

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
", "@WebProfiler/Collector/ajax.html.twig", "/home/misko/Documents/git/Kurzy/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
