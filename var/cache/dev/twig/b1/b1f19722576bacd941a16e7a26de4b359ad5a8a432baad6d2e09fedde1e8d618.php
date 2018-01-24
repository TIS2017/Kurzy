<?php

/* base.html.twig */
class __TwigTemplate_e7512925d8fb00307cc049a1006d437f3028b1723b810d6e2acede88a13e1891 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a88c454e421565fde40dfd3eca41ade2df8dd7af444f3bf23764caf04f034c72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a88c454e421565fde40dfd3eca41ade2df8dd7af444f3bf23764caf04f034c72->enter($__internal_a88c454e421565fde40dfd3eca41ade2df8dd7af444f3bf23764caf04f034c72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_953a63dca4d974a0419580caf0eeeae59bb345bd7c1e7561ba1fb28dc1c54110 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_953a63dca4d974a0419580caf0eeeae59bb345bd7c1e7561ba1fb28dc1c54110->enter($__internal_953a63dca4d974a0419580caf0eeeae59bb345bd7c1e7561ba1fb28dc1c54110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_a88c454e421565fde40dfd3eca41ade2df8dd7af444f3bf23764caf04f034c72->leave($__internal_a88c454e421565fde40dfd3eca41ade2df8dd7af444f3bf23764caf04f034c72_prof);

        
        $__internal_953a63dca4d974a0419580caf0eeeae59bb345bd7c1e7561ba1fb28dc1c54110->leave($__internal_953a63dca4d974a0419580caf0eeeae59bb345bd7c1e7561ba1fb28dc1c54110_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7325b13614f6f0d2455a9b9c798ea15f0be7144303fab5375312e933bc296332 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7325b13614f6f0d2455a9b9c798ea15f0be7144303fab5375312e933bc296332->enter($__internal_7325b13614f6f0d2455a9b9c798ea15f0be7144303fab5375312e933bc296332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8ca07582fd351e052d0826bc45d47f464bbbd2941bfc81e48eaa1fec6234dd38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ca07582fd351e052d0826bc45d47f464bbbd2941bfc81e48eaa1fec6234dd38->enter($__internal_8ca07582fd351e052d0826bc45d47f464bbbd2941bfc81e48eaa1fec6234dd38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_8ca07582fd351e052d0826bc45d47f464bbbd2941bfc81e48eaa1fec6234dd38->leave($__internal_8ca07582fd351e052d0826bc45d47f464bbbd2941bfc81e48eaa1fec6234dd38_prof);

        
        $__internal_7325b13614f6f0d2455a9b9c798ea15f0be7144303fab5375312e933bc296332->leave($__internal_7325b13614f6f0d2455a9b9c798ea15f0be7144303fab5375312e933bc296332_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_be0fdef22e192d37ba5ea623e0a97659f7943ae9c4ad84ff7dccac1c57b225c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be0fdef22e192d37ba5ea623e0a97659f7943ae9c4ad84ff7dccac1c57b225c5->enter($__internal_be0fdef22e192d37ba5ea623e0a97659f7943ae9c4ad84ff7dccac1c57b225c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b99bac6772633e5a4fb0d60aea8d0be5ade713c18f3c9100966c684f8c242fba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b99bac6772633e5a4fb0d60aea8d0be5ade713c18f3c9100966c684f8c242fba->enter($__internal_b99bac6772633e5a4fb0d60aea8d0be5ade713c18f3c9100966c684f8c242fba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b99bac6772633e5a4fb0d60aea8d0be5ade713c18f3c9100966c684f8c242fba->leave($__internal_b99bac6772633e5a4fb0d60aea8d0be5ade713c18f3c9100966c684f8c242fba_prof);

        
        $__internal_be0fdef22e192d37ba5ea623e0a97659f7943ae9c4ad84ff7dccac1c57b225c5->leave($__internal_be0fdef22e192d37ba5ea623e0a97659f7943ae9c4ad84ff7dccac1c57b225c5_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_ac13fdb0932597f5029c5acf0f406cdeb06abb81b57f54fdcbfca0f1520c8cdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac13fdb0932597f5029c5acf0f406cdeb06abb81b57f54fdcbfca0f1520c8cdb->enter($__internal_ac13fdb0932597f5029c5acf0f406cdeb06abb81b57f54fdcbfca0f1520c8cdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_19e5388a2c96c2844a78dcf98e30ae03f8964c009cdf5e4bd412008390d4231a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19e5388a2c96c2844a78dcf98e30ae03f8964c009cdf5e4bd412008390d4231a->enter($__internal_19e5388a2c96c2844a78dcf98e30ae03f8964c009cdf5e4bd412008390d4231a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_19e5388a2c96c2844a78dcf98e30ae03f8964c009cdf5e4bd412008390d4231a->leave($__internal_19e5388a2c96c2844a78dcf98e30ae03f8964c009cdf5e4bd412008390d4231a_prof);

        
        $__internal_ac13fdb0932597f5029c5acf0f406cdeb06abb81b57f54fdcbfca0f1520c8cdb->leave($__internal_ac13fdb0932597f5029c5acf0f406cdeb06abb81b57f54fdcbfca0f1520c8cdb_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d005d71594e6e64c5b69f61c45ade73133efc6e78d57a13754a262b54df73eb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d005d71594e6e64c5b69f61c45ade73133efc6e78d57a13754a262b54df73eb4->enter($__internal_d005d71594e6e64c5b69f61c45ade73133efc6e78d57a13754a262b54df73eb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a993321c998fefddb9ccfd8e3f415ccff65ecc56f0f49d8f2641917801a6c5f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a993321c998fefddb9ccfd8e3f415ccff65ecc56f0f49d8f2641917801a6c5f8->enter($__internal_a993321c998fefddb9ccfd8e3f415ccff65ecc56f0f49d8f2641917801a6c5f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a993321c998fefddb9ccfd8e3f415ccff65ecc56f0f49d8f2641917801a6c5f8->leave($__internal_a993321c998fefddb9ccfd8e3f415ccff65ecc56f0f49d8f2641917801a6c5f8_prof);

        
        $__internal_d005d71594e6e64c5b69f61c45ade73133efc6e78d57a13754a262b54df73eb4->leave($__internal_d005d71594e6e64c5b69f61c45ade73133efc6e78d57a13754a262b54df73eb4_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 11,  99 => 10,  82 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/misko/Documents/git/Kurzy/app/Resources/views/base.html.twig");
    }
}
