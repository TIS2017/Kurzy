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
        $__internal_8b8dd8a962cd8d3788f5876d33dd2b1e363799090e15b8ff8af0182a147bcf89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b8dd8a962cd8d3788f5876d33dd2b1e363799090e15b8ff8af0182a147bcf89->enter($__internal_8b8dd8a962cd8d3788f5876d33dd2b1e363799090e15b8ff8af0182a147bcf89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_74c7bcfd9081b666b7dc0b7cdf93eda554e419bc511ca5f762be410ba0e0c17a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74c7bcfd9081b666b7dc0b7cdf93eda554e419bc511ca5f762be410ba0e0c17a->enter($__internal_74c7bcfd9081b666b7dc0b7cdf93eda554e419bc511ca5f762be410ba0e0c17a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b8dd8a962cd8d3788f5876d33dd2b1e363799090e15b8ff8af0182a147bcf89->leave($__internal_8b8dd8a962cd8d3788f5876d33dd2b1e363799090e15b8ff8af0182a147bcf89_prof);

        
        $__internal_74c7bcfd9081b666b7dc0b7cdf93eda554e419bc511ca5f762be410ba0e0c17a->leave($__internal_74c7bcfd9081b666b7dc0b7cdf93eda554e419bc511ca5f762be410ba0e0c17a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f21dd6b96371e529c8d61e591db256a3b900a7af3100cd77b68562e65380e4e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f21dd6b96371e529c8d61e591db256a3b900a7af3100cd77b68562e65380e4e7->enter($__internal_f21dd6b96371e529c8d61e591db256a3b900a7af3100cd77b68562e65380e4e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_eae919478c197994ca139a2fd76201240344a4a48a7b0c1b314836fa2c7ae38a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eae919478c197994ca139a2fd76201240344a4a48a7b0c1b314836fa2c7ae38a->enter($__internal_eae919478c197994ca139a2fd76201240344a4a48a7b0c1b314836fa2c7ae38a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_eae919478c197994ca139a2fd76201240344a4a48a7b0c1b314836fa2c7ae38a->leave($__internal_eae919478c197994ca139a2fd76201240344a4a48a7b0c1b314836fa2c7ae38a_prof);

        
        $__internal_f21dd6b96371e529c8d61e591db256a3b900a7af3100cd77b68562e65380e4e7->leave($__internal_f21dd6b96371e529c8d61e591db256a3b900a7af3100cd77b68562e65380e4e7_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_d80f5a13ac57bdefd4e416c5f3e3f08c405db3d8fa476f367b4c2abcbcbb10a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d80f5a13ac57bdefd4e416c5f3e3f08c405db3d8fa476f367b4c2abcbcbb10a4->enter($__internal_d80f5a13ac57bdefd4e416c5f3e3f08c405db3d8fa476f367b4c2abcbcbb10a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_caaa82b4eca914149ccbe91ca7969eefe2b4a01b93263cf6f921cd9a59aa54e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caaa82b4eca914149ccbe91ca7969eefe2b4a01b93263cf6f921cd9a59aa54e8->enter($__internal_caaa82b4eca914149ccbe91ca7969eefe2b4a01b93263cf6f921cd9a59aa54e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_caaa82b4eca914149ccbe91ca7969eefe2b4a01b93263cf6f921cd9a59aa54e8->leave($__internal_caaa82b4eca914149ccbe91ca7969eefe2b4a01b93263cf6f921cd9a59aa54e8_prof);

        
        $__internal_d80f5a13ac57bdefd4e416c5f3e3f08c405db3d8fa476f367b4c2abcbcbb10a4->leave($__internal_d80f5a13ac57bdefd4e416c5f3e3f08c405db3d8fa476f367b4c2abcbcbb10a4_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_dd8efb0f42212db02c7730bf4b432bbbfc3dbfaf9a94c573c20a1df921985119 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd8efb0f42212db02c7730bf4b432bbbfc3dbfaf9a94c573c20a1df921985119->enter($__internal_dd8efb0f42212db02c7730bf4b432bbbfc3dbfaf9a94c573c20a1df921985119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ff35a0d61e9a783f87f00a13bc4dc4f4780887c3b0a0382597e201398c51c690 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff35a0d61e9a783f87f00a13bc4dc4f4780887c3b0a0382597e201398c51c690->enter($__internal_ff35a0d61e9a783f87f00a13bc4dc4f4780887c3b0a0382597e201398c51c690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_ff35a0d61e9a783f87f00a13bc4dc4f4780887c3b0a0382597e201398c51c690->leave($__internal_ff35a0d61e9a783f87f00a13bc4dc4f4780887c3b0a0382597e201398c51c690_prof);

        
        $__internal_dd8efb0f42212db02c7730bf4b432bbbfc3dbfaf9a94c573c20a1df921985119->leave($__internal_dd8efb0f42212db02c7730bf4b432bbbfc3dbfaf9a94c573c20a1df921985119_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/home/dana/Kurzy/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
