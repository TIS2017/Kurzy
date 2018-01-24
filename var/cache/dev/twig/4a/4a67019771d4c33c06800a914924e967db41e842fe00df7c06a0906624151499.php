<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_1878275fdbc32b660cfbee6afea5d6e15c55adb100b0dbddcb4be415750c22a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4da10cf2d643862ad7c91322f6f16db8d80ef6e02a9549e8da043aee2256d8d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4da10cf2d643862ad7c91322f6f16db8d80ef6e02a9549e8da043aee2256d8d7->enter($__internal_4da10cf2d643862ad7c91322f6f16db8d80ef6e02a9549e8da043aee2256d8d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_57755ebfdc2076ff95eb817efff4ce3b9f8b13f904a3d828a51e6b70a544e47b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57755ebfdc2076ff95eb817efff4ce3b9f8b13f904a3d828a51e6b70a544e47b->enter($__internal_57755ebfdc2076ff95eb817efff4ce3b9f8b13f904a3d828a51e6b70a544e47b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4da10cf2d643862ad7c91322f6f16db8d80ef6e02a9549e8da043aee2256d8d7->leave($__internal_4da10cf2d643862ad7c91322f6f16db8d80ef6e02a9549e8da043aee2256d8d7_prof);

        
        $__internal_57755ebfdc2076ff95eb817efff4ce3b9f8b13f904a3d828a51e6b70a544e47b->leave($__internal_57755ebfdc2076ff95eb817efff4ce3b9f8b13f904a3d828a51e6b70a544e47b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0b240329de2e52a06cfaf5b4152b7f57479f05c26d0ffcf0cbb8bbee0b446124 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b240329de2e52a06cfaf5b4152b7f57479f05c26d0ffcf0cbb8bbee0b446124->enter($__internal_0b240329de2e52a06cfaf5b4152b7f57479f05c26d0ffcf0cbb8bbee0b446124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e348b473e01dc193daf29a02d7e75c2eb475b75bd487dadd53107976a72a58dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e348b473e01dc193daf29a02d7e75c2eb475b75bd487dadd53107976a72a58dd->enter($__internal_e348b473e01dc193daf29a02d7e75c2eb475b75bd487dadd53107976a72a58dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_e348b473e01dc193daf29a02d7e75c2eb475b75bd487dadd53107976a72a58dd->leave($__internal_e348b473e01dc193daf29a02d7e75c2eb475b75bd487dadd53107976a72a58dd_prof);

        
        $__internal_0b240329de2e52a06cfaf5b4152b7f57479f05c26d0ffcf0cbb8bbee0b446124->leave($__internal_0b240329de2e52a06cfaf5b4152b7f57479f05c26d0ffcf0cbb8bbee0b446124_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_083fef211ae5d644880ddfd2dc7ca5d359a686fcd62e7fc51470f20fe4ef8de5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_083fef211ae5d644880ddfd2dc7ca5d359a686fcd62e7fc51470f20fe4ef8de5->enter($__internal_083fef211ae5d644880ddfd2dc7ca5d359a686fcd62e7fc51470f20fe4ef8de5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c625c758e558cbf38b80aa7d1bc850fc1b30238bc0ac11ea02e4a7c04de05b5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c625c758e558cbf38b80aa7d1bc850fc1b30238bc0ac11ea02e4a7c04de05b5a->enter($__internal_c625c758e558cbf38b80aa7d1bc850fc1b30238bc0ac11ea02e4a7c04de05b5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c625c758e558cbf38b80aa7d1bc850fc1b30238bc0ac11ea02e4a7c04de05b5a->leave($__internal_c625c758e558cbf38b80aa7d1bc850fc1b30238bc0ac11ea02e4a7c04de05b5a_prof);

        
        $__internal_083fef211ae5d644880ddfd2dc7ca5d359a686fcd62e7fc51470f20fe4ef8de5->leave($__internal_083fef211ae5d644880ddfd2dc7ca5d359a686fcd62e7fc51470f20fe4ef8de5_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ba4bbcac192711ee2647210e7bc48e34727498b5b8492ff01d925a085f4d976 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ba4bbcac192711ee2647210e7bc48e34727498b5b8492ff01d925a085f4d976->enter($__internal_1ba4bbcac192711ee2647210e7bc48e34727498b5b8492ff01d925a085f4d976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3b4ebd994c16abb9ec5e71975ba73c2ef135b9848102c74698f1885bd75bd943 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b4ebd994c16abb9ec5e71975ba73c2ef135b9848102c74698f1885bd75bd943->enter($__internal_3b4ebd994c16abb9ec5e71975ba73c2ef135b9848102c74698f1885bd75bd943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_3b4ebd994c16abb9ec5e71975ba73c2ef135b9848102c74698f1885bd75bd943->leave($__internal_3b4ebd994c16abb9ec5e71975ba73c2ef135b9848102c74698f1885bd75bd943_prof);

        
        $__internal_1ba4bbcac192711ee2647210e7bc48e34727498b5b8492ff01d925a085f4d976->leave($__internal_1ba4bbcac192711ee2647210e7bc48e34727498b5b8492ff01d925a085f4d976_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/misko/Documents/git/Kurzy/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
