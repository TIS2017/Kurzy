<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3af4a99c1cb655a4825f0a6e01551d674b52d52b622e47d73e3845cb1496152a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_fd816e0eb570a14aeed7be27d01ce647915dbceec3615bee10ca64cd7e5b9c9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd816e0eb570a14aeed7be27d01ce647915dbceec3615bee10ca64cd7e5b9c9a->enter($__internal_fd816e0eb570a14aeed7be27d01ce647915dbceec3615bee10ca64cd7e5b9c9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_7f2d72a582916799a6a7d88897f3b5a22691f7cef787d116e603715e77a5bd8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f2d72a582916799a6a7d88897f3b5a22691f7cef787d116e603715e77a5bd8d->enter($__internal_7f2d72a582916799a6a7d88897f3b5a22691f7cef787d116e603715e77a5bd8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd816e0eb570a14aeed7be27d01ce647915dbceec3615bee10ca64cd7e5b9c9a->leave($__internal_fd816e0eb570a14aeed7be27d01ce647915dbceec3615bee10ca64cd7e5b9c9a_prof);

        
        $__internal_7f2d72a582916799a6a7d88897f3b5a22691f7cef787d116e603715e77a5bd8d->leave($__internal_7f2d72a582916799a6a7d88897f3b5a22691f7cef787d116e603715e77a5bd8d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_423ea2e8275313e5e3653a08a0fc8db1a8889e0cee2bc5b0530d70a344894f7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_423ea2e8275313e5e3653a08a0fc8db1a8889e0cee2bc5b0530d70a344894f7f->enter($__internal_423ea2e8275313e5e3653a08a0fc8db1a8889e0cee2bc5b0530d70a344894f7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_de34f5e9f5b25d24392c83d1d4aa79c2981f4ad3948e7f3f5742658eb1a5c25f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de34f5e9f5b25d24392c83d1d4aa79c2981f4ad3948e7f3f5742658eb1a5c25f->enter($__internal_de34f5e9f5b25d24392c83d1d4aa79c2981f4ad3948e7f3f5742658eb1a5c25f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_de34f5e9f5b25d24392c83d1d4aa79c2981f4ad3948e7f3f5742658eb1a5c25f->leave($__internal_de34f5e9f5b25d24392c83d1d4aa79c2981f4ad3948e7f3f5742658eb1a5c25f_prof);

        
        $__internal_423ea2e8275313e5e3653a08a0fc8db1a8889e0cee2bc5b0530d70a344894f7f->leave($__internal_423ea2e8275313e5e3653a08a0fc8db1a8889e0cee2bc5b0530d70a344894f7f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_eaba062b5f68b7cec2f6057e330a185e83dcca797e629763c8ce1dbd03f41cca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eaba062b5f68b7cec2f6057e330a185e83dcca797e629763c8ce1dbd03f41cca->enter($__internal_eaba062b5f68b7cec2f6057e330a185e83dcca797e629763c8ce1dbd03f41cca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_86d63034462c5be8093e3295294c9bad679aa026b7f4d5350bb0ce83cfbfeb4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86d63034462c5be8093e3295294c9bad679aa026b7f4d5350bb0ce83cfbfeb4d->enter($__internal_86d63034462c5be8093e3295294c9bad679aa026b7f4d5350bb0ce83cfbfeb4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_86d63034462c5be8093e3295294c9bad679aa026b7f4d5350bb0ce83cfbfeb4d->leave($__internal_86d63034462c5be8093e3295294c9bad679aa026b7f4d5350bb0ce83cfbfeb4d_prof);

        
        $__internal_eaba062b5f68b7cec2f6057e330a185e83dcca797e629763c8ce1dbd03f41cca->leave($__internal_eaba062b5f68b7cec2f6057e330a185e83dcca797e629763c8ce1dbd03f41cca_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f61480d26124969401af4fedc0b21674f09f42fff180b7cc09df274d58b5fb3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f61480d26124969401af4fedc0b21674f09f42fff180b7cc09df274d58b5fb3e->enter($__internal_f61480d26124969401af4fedc0b21674f09f42fff180b7cc09df274d58b5fb3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9224eda87cd39c41cb9aee4fb574efee0bd120c5db8a05e6432982bed06dafaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9224eda87cd39c41cb9aee4fb574efee0bd120c5db8a05e6432982bed06dafaa->enter($__internal_9224eda87cd39c41cb9aee4fb574efee0bd120c5db8a05e6432982bed06dafaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9224eda87cd39c41cb9aee4fb574efee0bd120c5db8a05e6432982bed06dafaa->leave($__internal_9224eda87cd39c41cb9aee4fb574efee0bd120c5db8a05e6432982bed06dafaa_prof);

        
        $__internal_f61480d26124969401af4fedc0b21674f09f42fff180b7cc09df274d58b5fb3e->leave($__internal_f61480d26124969401af4fedc0b21674f09f42fff180b7cc09df274d58b5fb3e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/dana/Kurzy/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
