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
        $__internal_adebf3ee23dd31f3592dc9adb1109b0fb7315736221e34a18c5d577128d2a99e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adebf3ee23dd31f3592dc9adb1109b0fb7315736221e34a18c5d577128d2a99e->enter($__internal_adebf3ee23dd31f3592dc9adb1109b0fb7315736221e34a18c5d577128d2a99e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_b94b1a66384c3c4ebdaa2f3a71b79b3a176d82f337eb00ab7afa0be21f8a84e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b94b1a66384c3c4ebdaa2f3a71b79b3a176d82f337eb00ab7afa0be21f8a84e7->enter($__internal_b94b1a66384c3c4ebdaa2f3a71b79b3a176d82f337eb00ab7afa0be21f8a84e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_adebf3ee23dd31f3592dc9adb1109b0fb7315736221e34a18c5d577128d2a99e->leave($__internal_adebf3ee23dd31f3592dc9adb1109b0fb7315736221e34a18c5d577128d2a99e_prof);

        
        $__internal_b94b1a66384c3c4ebdaa2f3a71b79b3a176d82f337eb00ab7afa0be21f8a84e7->leave($__internal_b94b1a66384c3c4ebdaa2f3a71b79b3a176d82f337eb00ab7afa0be21f8a84e7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9ba7e21efb98fc68615f0754c347fa1885d9c4cce407804d0fc23b1c4fd56d0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ba7e21efb98fc68615f0754c347fa1885d9c4cce407804d0fc23b1c4fd56d0b->enter($__internal_9ba7e21efb98fc68615f0754c347fa1885d9c4cce407804d0fc23b1c4fd56d0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d5e7f6a08b58513598e3a78a8cf7932e3f1f1205e18298083d26a3cdd35e92e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5e7f6a08b58513598e3a78a8cf7932e3f1f1205e18298083d26a3cdd35e92e5->enter($__internal_d5e7f6a08b58513598e3a78a8cf7932e3f1f1205e18298083d26a3cdd35e92e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_d5e7f6a08b58513598e3a78a8cf7932e3f1f1205e18298083d26a3cdd35e92e5->leave($__internal_d5e7f6a08b58513598e3a78a8cf7932e3f1f1205e18298083d26a3cdd35e92e5_prof);

        
        $__internal_9ba7e21efb98fc68615f0754c347fa1885d9c4cce407804d0fc23b1c4fd56d0b->leave($__internal_9ba7e21efb98fc68615f0754c347fa1885d9c4cce407804d0fc23b1c4fd56d0b_prof);

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
", "@WebProfiler/Collector/ajax.html.twig", "/home/patricia/Desktop/kurzy_projekt/kurzy/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
