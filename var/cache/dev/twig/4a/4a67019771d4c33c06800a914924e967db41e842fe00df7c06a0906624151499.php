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
        $__internal_86372993a943abd548f68e4ec2c97deb40e0a91c16be6493309962f9c1c24f4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86372993a943abd548f68e4ec2c97deb40e0a91c16be6493309962f9c1c24f4f->enter($__internal_86372993a943abd548f68e4ec2c97deb40e0a91c16be6493309962f9c1c24f4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_2548cddd86cd6543a616fb4845e88e6798d504cc24052767497e2596ca6333e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2548cddd86cd6543a616fb4845e88e6798d504cc24052767497e2596ca6333e2->enter($__internal_2548cddd86cd6543a616fb4845e88e6798d504cc24052767497e2596ca6333e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86372993a943abd548f68e4ec2c97deb40e0a91c16be6493309962f9c1c24f4f->leave($__internal_86372993a943abd548f68e4ec2c97deb40e0a91c16be6493309962f9c1c24f4f_prof);

        
        $__internal_2548cddd86cd6543a616fb4845e88e6798d504cc24052767497e2596ca6333e2->leave($__internal_2548cddd86cd6543a616fb4845e88e6798d504cc24052767497e2596ca6333e2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5579fa56673e177f2f5e27746878c835942d2f4526c65e6ab6f14f2d69639a52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5579fa56673e177f2f5e27746878c835942d2f4526c65e6ab6f14f2d69639a52->enter($__internal_5579fa56673e177f2f5e27746878c835942d2f4526c65e6ab6f14f2d69639a52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e670ee5a6eb1cce35b75ecad303cbc37aa408950aacc4790e9138281de64819c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e670ee5a6eb1cce35b75ecad303cbc37aa408950aacc4790e9138281de64819c->enter($__internal_e670ee5a6eb1cce35b75ecad303cbc37aa408950aacc4790e9138281de64819c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_e670ee5a6eb1cce35b75ecad303cbc37aa408950aacc4790e9138281de64819c->leave($__internal_e670ee5a6eb1cce35b75ecad303cbc37aa408950aacc4790e9138281de64819c_prof);

        
        $__internal_5579fa56673e177f2f5e27746878c835942d2f4526c65e6ab6f14f2d69639a52->leave($__internal_5579fa56673e177f2f5e27746878c835942d2f4526c65e6ab6f14f2d69639a52_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_155c1a4c0a108eda84816e2c8ce7e6ccd18525fe70e45d8f095f242fe498baa2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_155c1a4c0a108eda84816e2c8ce7e6ccd18525fe70e45d8f095f242fe498baa2->enter($__internal_155c1a4c0a108eda84816e2c8ce7e6ccd18525fe70e45d8f095f242fe498baa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0029e3aa3f42d4712b70d230b1d2bdc711eb407e438cbf28c7954f3bc54dc2b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0029e3aa3f42d4712b70d230b1d2bdc711eb407e438cbf28c7954f3bc54dc2b4->enter($__internal_0029e3aa3f42d4712b70d230b1d2bdc711eb407e438cbf28c7954f3bc54dc2b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0029e3aa3f42d4712b70d230b1d2bdc711eb407e438cbf28c7954f3bc54dc2b4->leave($__internal_0029e3aa3f42d4712b70d230b1d2bdc711eb407e438cbf28c7954f3bc54dc2b4_prof);

        
        $__internal_155c1a4c0a108eda84816e2c8ce7e6ccd18525fe70e45d8f095f242fe498baa2->leave($__internal_155c1a4c0a108eda84816e2c8ce7e6ccd18525fe70e45d8f095f242fe498baa2_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_9df9ff874b0ec71db0e03581ad6ae46ee363bc08dd10a28a755ae55cb65421f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9df9ff874b0ec71db0e03581ad6ae46ee363bc08dd10a28a755ae55cb65421f3->enter($__internal_9df9ff874b0ec71db0e03581ad6ae46ee363bc08dd10a28a755ae55cb65421f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8c8931416be03ef6246b70546b029562eda9291294420b957b0ccf6e6b440a42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c8931416be03ef6246b70546b029562eda9291294420b957b0ccf6e6b440a42->enter($__internal_8c8931416be03ef6246b70546b029562eda9291294420b957b0ccf6e6b440a42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_8c8931416be03ef6246b70546b029562eda9291294420b957b0ccf6e6b440a42->leave($__internal_8c8931416be03ef6246b70546b029562eda9291294420b957b0ccf6e6b440a42_prof);

        
        $__internal_9df9ff874b0ec71db0e03581ad6ae46ee363bc08dd10a28a755ae55cb65421f3->leave($__internal_9df9ff874b0ec71db0e03581ad6ae46ee363bc08dd10a28a755ae55cb65421f3_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/home/patricia/Desktop/kurzy_projekt/kurzy/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
