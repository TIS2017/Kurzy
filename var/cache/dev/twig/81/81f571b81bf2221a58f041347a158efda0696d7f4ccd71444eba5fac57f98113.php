<?php

/* user/index.html.twig */
class __TwigTemplate_a2cccc82b6f29b890a23cfd009c056f1454f097c052c5ed6b423fef5c76b93f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ce53bccc95954014f81f09786ea5096f9040abdbce267960c26d16a3c4e0bbf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce53bccc95954014f81f09786ea5096f9040abdbce267960c26d16a3c4e0bbf2->enter($__internal_ce53bccc95954014f81f09786ea5096f9040abdbce267960c26d16a3c4e0bbf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_0a564d2182e9e8c62885d605e1aba7bc8155a7e822a3e218985dc43698ab607b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a564d2182e9e8c62885d605e1aba7bc8155a7e822a3e218985dc43698ab607b->enter($__internal_0a564d2182e9e8c62885d605e1aba7bc8155a7e822a3e218985dc43698ab607b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce53bccc95954014f81f09786ea5096f9040abdbce267960c26d16a3c4e0bbf2->leave($__internal_ce53bccc95954014f81f09786ea5096f9040abdbce267960c26d16a3c4e0bbf2_prof);

        
        $__internal_0a564d2182e9e8c62885d605e1aba7bc8155a7e822a3e218985dc43698ab607b->leave($__internal_0a564d2182e9e8c62885d605e1aba7bc8155a7e822a3e218985dc43698ab607b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bdc9181000129c586b80a8304e157a749d10ac0c4848b7fad2734e0dca1d02a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdc9181000129c586b80a8304e157a749d10ac0c4848b7fad2734e0dca1d02a5->enter($__internal_bdc9181000129c586b80a8304e157a749d10ac0c4848b7fad2734e0dca1d02a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_acd8061cf61b641845886bf9e4787a1be5fd8326f14589c3bea19efc99badc62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acd8061cf61b641845886bf9e4787a1be5fd8326f14589c3bea19efc99badc62->enter($__internal_acd8061cf61b641845886bf9e4787a1be5fd8326f14589c3bea19efc99badc62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Users
";
        
        $__internal_acd8061cf61b641845886bf9e4787a1be5fd8326f14589c3bea19efc99badc62->leave($__internal_acd8061cf61b641845886bf9e4787a1be5fd8326f14589c3bea19efc99badc62_prof);

        
        $__internal_bdc9181000129c586b80a8304e157a749d10ac0c4848b7fad2734e0dca1d02a5->leave($__internal_bdc9181000129c586b80a8304e157a749d10ac0c4848b7fad2734e0dca1d02a5_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c4093de3eacb0861f6e406776e6e294363e92757c7d833719866937ac5e5826f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4093de3eacb0861f6e406776e6e294363e92757c7d833719866937ac5e5826f->enter($__internal_c4093de3eacb0861f6e406776e6e294363e92757c7d833719866937ac5e5826f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_5b4320ceca954da9bb46409660f6efc40525c78ef69acf769815198d6c7dda86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b4320ceca954da9bb46409660f6efc40525c78ef69acf769815198d6c7dda86->enter($__internal_5b4320ceca954da9bb46409660f6efc40525c78ef69acf769815198d6c7dda86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" class=\"css\">
";
        
        $__internal_5b4320ceca954da9bb46409660f6efc40525c78ef69acf769815198d6c7dda86->leave($__internal_5b4320ceca954da9bb46409660f6efc40525c78ef69acf769815198d6c7dda86_prof);

        
        $__internal_c4093de3eacb0861f6e406776e6e294363e92757c7d833719866937ac5e5826f->leave($__internal_c4093de3eacb0861f6e406776e6e294363e92757c7d833719866937ac5e5826f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9fe9636fe87be31fa3f0227e1a1f955a14a861514bbffd4794f431aba7934b4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fe9636fe87be31fa3f0227e1a1f955a14a861514bbffd4794f431aba7934b4f->enter($__internal_9fe9636fe87be31fa3f0227e1a1f955a14a861514bbffd4794f431aba7934b4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_825acfc3d23bf56babd59954ba2cf8d62f5961fd3e91e02c4e276315f4bafc9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_825acfc3d23bf56babd59954ba2cf8d62f5961fd3e91e02c4e276315f4bafc9c->enter($__internal_825acfc3d23bf56babd59954ba2cf8d62f5961fd3e91e02c4e276315f4bafc9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 13
            echo "    <h1>Users list</h1>
    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Login</th>
                <th>Password</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["users"] ?? $this->getContext($context, "users")));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 25
                echo "            <tr>
                <td><a href=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
                echo "</a></td>
                <td>";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "login", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "password", array()), "html", null, true);
                echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
            // line 46
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_new");
            echo "\">Create a new user</a>
        </li>
    </ul>
    ";
        }
        
        $__internal_825acfc3d23bf56babd59954ba2cf8d62f5961fd3e91e02c4e276315f4bafc9c->leave($__internal_825acfc3d23bf56babd59954ba2cf8d62f5961fd3e91e02c4e276315f4bafc9c_prof);

        
        $__internal_9fe9636fe87be31fa3f0227e1a1f955a14a861514bbffd4794f431aba7934b4f->leave($__internal_9fe9636fe87be31fa3f0227e1a1f955a14a861514bbffd4794f431aba7934b4f_prof);

    }

    public function getTemplateName()
    {
        return "user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 46,  151 => 41,  139 => 35,  133 => 32,  126 => 28,  122 => 27,  116 => 26,  113 => 25,  109 => 24,  96 => 13,  93 => 12,  84 => 11,  71 => 8,  62 => 7,  51 => 4,  42 => 3,  11 => 1,);
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

{% block title %}
    Users
{% endblock %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.css') }}\" class=\"css\">
{% endblock %}

{% block body %}
    {% if is_granted('ROLE_USER') %}
    <h1>Users list</h1>
    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Login</th>
                <th>Password</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for user in users %}
            <tr>
                <td><a href=\"{{ path('user_show', { 'id': user.id }) }}\">{{ user.id }}</a></td>
                <td>{{ user.login }}</td>
                <td>{{ user.password }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('user_show', { 'id': user.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('user_edit', { 'id': user.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('user_new') }}\">Create a new user</a>
        </li>
    </ul>
    {% endif %}
{% endblock %}
", "user/index.html.twig", "/home/dana/Kurzy/app/Resources/views/user/index.html.twig");
    }
}
