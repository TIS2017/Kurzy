<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_cf162f25fa3b6f82cee69ba6f883fb7c82621dcf246f7c18429b115a3511835f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ac38ef29362556ab80f7529950f0cabecbc6f1297e0f24e3d22179c94f8aef15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac38ef29362556ab80f7529950f0cabecbc6f1297e0f24e3d22179c94f8aef15->enter($__internal_ac38ef29362556ab80f7529950f0cabecbc6f1297e0f24e3d22179c94f8aef15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_b9ff2c0e1a023a289b6a979b3a8979ea65c1370f6ff424eac59917dd2bddef9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9ff2c0e1a023a289b6a979b3a8979ea65c1370f6ff424eac59917dd2bddef9c->enter($__internal_b9ff2c0e1a023a289b6a979b3a8979ea65c1370f6ff424eac59917dd2bddef9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac38ef29362556ab80f7529950f0cabecbc6f1297e0f24e3d22179c94f8aef15->leave($__internal_ac38ef29362556ab80f7529950f0cabecbc6f1297e0f24e3d22179c94f8aef15_prof);

        
        $__internal_b9ff2c0e1a023a289b6a979b3a8979ea65c1370f6ff424eac59917dd2bddef9c->leave($__internal_b9ff2c0e1a023a289b6a979b3a8979ea65c1370f6ff424eac59917dd2bddef9c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e2cce36b0c000207a968fe37a7f567d448192bad30b4f8d15a60fc52557cea35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2cce36b0c000207a968fe37a7f567d448192bad30b4f8d15a60fc52557cea35->enter($__internal_e2cce36b0c000207a968fe37a7f567d448192bad30b4f8d15a60fc52557cea35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fc26cbbd0d211bc587be6cc52d4c1c2da2b3af1232e766ef2f52984e7a4d4467 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc26cbbd0d211bc587be6cc52d4c1c2da2b3af1232e766ef2f52984e7a4d4467->enter($__internal_fc26cbbd0d211bc587be6cc52d4c1c2da2b3af1232e766ef2f52984e7a4d4467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_fc26cbbd0d211bc587be6cc52d4c1c2da2b3af1232e766ef2f52984e7a4d4467->leave($__internal_fc26cbbd0d211bc587be6cc52d4c1c2da2b3af1232e766ef2f52984e7a4d4467_prof);

        
        $__internal_e2cce36b0c000207a968fe37a7f567d448192bad30b4f8d15a60fc52557cea35->leave($__internal_e2cce36b0c000207a968fe37a7f567d448192bad30b4f8d15a60fc52557cea35_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_007f4d30140fab06cfdc8dbe3ed89c170bc144292bb8e06b048e320150bc547f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_007f4d30140fab06cfdc8dbe3ed89c170bc144292bb8e06b048e320150bc547f->enter($__internal_007f4d30140fab06cfdc8dbe3ed89c170bc144292bb8e06b048e320150bc547f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_896b616467dabc2a02a4080137863812140102dd0e1deb63b1f32070677ff503 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_896b616467dabc2a02a4080137863812140102dd0e1deb63b1f32070677ff503->enter($__internal_896b616467dabc2a02a4080137863812140102dd0e1deb63b1f32070677ff503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_896b616467dabc2a02a4080137863812140102dd0e1deb63b1f32070677ff503->leave($__internal_896b616467dabc2a02a4080137863812140102dd0e1deb63b1f32070677ff503_prof);

        
        $__internal_007f4d30140fab06cfdc8dbe3ed89c170bc144292bb8e06b048e320150bc547f->leave($__internal_007f4d30140fab06cfdc8dbe3ed89c170bc144292bb8e06b048e320150bc547f_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a14ad2d1c77e4217d1489cb47c1e76502be2f235a3b19eba36645bbe4e0d3697 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a14ad2d1c77e4217d1489cb47c1e76502be2f235a3b19eba36645bbe4e0d3697->enter($__internal_a14ad2d1c77e4217d1489cb47c1e76502be2f235a3b19eba36645bbe4e0d3697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_34333dc91575c1ad910d2eb8326a8c5c12f8cec33b61fb874d32d54d1a23382b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34333dc91575c1ad910d2eb8326a8c5c12f8cec33b61fb874d32d54d1a23382b->enter($__internal_34333dc91575c1ad910d2eb8326a8c5c12f8cec33b61fb874d32d54d1a23382b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_34333dc91575c1ad910d2eb8326a8c5c12f8cec33b61fb874d32d54d1a23382b->leave($__internal_34333dc91575c1ad910d2eb8326a8c5c12f8cec33b61fb874d32d54d1a23382b_prof);

        
        $__internal_a14ad2d1c77e4217d1489cb47c1e76502be2f235a3b19eba36645bbe4e0d3697->leave($__internal_a14ad2d1c77e4217d1489cb47c1e76502be2f235a3b19eba36645bbe4e0d3697_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/dana/Kurzy/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
