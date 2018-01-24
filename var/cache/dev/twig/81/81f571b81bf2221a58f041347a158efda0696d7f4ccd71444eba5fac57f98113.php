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
        $__internal_eb5420e7393c41d00345a024aa22fa03ad0c943d0fb66c816a3ee189bc10678b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb5420e7393c41d00345a024aa22fa03ad0c943d0fb66c816a3ee189bc10678b->enter($__internal_eb5420e7393c41d00345a024aa22fa03ad0c943d0fb66c816a3ee189bc10678b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_13335875be4230e23464794b09e0789189f774d96d0b889bea1eafdd7f9b9c3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13335875be4230e23464794b09e0789189f774d96d0b889bea1eafdd7f9b9c3c->enter($__internal_13335875be4230e23464794b09e0789189f774d96d0b889bea1eafdd7f9b9c3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb5420e7393c41d00345a024aa22fa03ad0c943d0fb66c816a3ee189bc10678b->leave($__internal_eb5420e7393c41d00345a024aa22fa03ad0c943d0fb66c816a3ee189bc10678b_prof);

        
        $__internal_13335875be4230e23464794b09e0789189f774d96d0b889bea1eafdd7f9b9c3c->leave($__internal_13335875be4230e23464794b09e0789189f774d96d0b889bea1eafdd7f9b9c3c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8b5f79b74f8d9d9784490dca5581417e347bb3606300209c9a30f593dab9c4a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b5f79b74f8d9d9784490dca5581417e347bb3606300209c9a30f593dab9c4a5->enter($__internal_8b5f79b74f8d9d9784490dca5581417e347bb3606300209c9a30f593dab9c4a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4bc365f6860cd7734216691b200025bab0b9dae2dd46dd99d336c321d1600c99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bc365f6860cd7734216691b200025bab0b9dae2dd46dd99d336c321d1600c99->enter($__internal_4bc365f6860cd7734216691b200025bab0b9dae2dd46dd99d336c321d1600c99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Users
";
        
        $__internal_4bc365f6860cd7734216691b200025bab0b9dae2dd46dd99d336c321d1600c99->leave($__internal_4bc365f6860cd7734216691b200025bab0b9dae2dd46dd99d336c321d1600c99_prof);

        
        $__internal_8b5f79b74f8d9d9784490dca5581417e347bb3606300209c9a30f593dab9c4a5->leave($__internal_8b5f79b74f8d9d9784490dca5581417e347bb3606300209c9a30f593dab9c4a5_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4a0c26588ad9734c67ba83b2cfeccdd422315114105635f845a31e24b2536e86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a0c26588ad9734c67ba83b2cfeccdd422315114105635f845a31e24b2536e86->enter($__internal_4a0c26588ad9734c67ba83b2cfeccdd422315114105635f845a31e24b2536e86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_be93c2e9224879790300ea0ca56830d27789aabd6fa11984853aaaa7b203d3cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be93c2e9224879790300ea0ca56830d27789aabd6fa11984853aaaa7b203d3cf->enter($__internal_be93c2e9224879790300ea0ca56830d27789aabd6fa11984853aaaa7b203d3cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" class=\"css\">
";
        
        $__internal_be93c2e9224879790300ea0ca56830d27789aabd6fa11984853aaaa7b203d3cf->leave($__internal_be93c2e9224879790300ea0ca56830d27789aabd6fa11984853aaaa7b203d3cf_prof);

        
        $__internal_4a0c26588ad9734c67ba83b2cfeccdd422315114105635f845a31e24b2536e86->leave($__internal_4a0c26588ad9734c67ba83b2cfeccdd422315114105635f845a31e24b2536e86_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5ec7579008621c51af17d6712a5d7080dd9b2985e369809846d829bd58d80ad8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ec7579008621c51af17d6712a5d7080dd9b2985e369809846d829bd58d80ad8->enter($__internal_5ec7579008621c51af17d6712a5d7080dd9b2985e369809846d829bd58d80ad8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1082cfbdb0676793887c3cb762520d21f06f2af921589237d9378e7fae6091a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1082cfbdb0676793887c3cb762520d21f06f2af921589237d9378e7fae6091a7->enter($__internal_1082cfbdb0676793887c3cb762520d21f06f2af921589237d9378e7fae6091a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1082cfbdb0676793887c3cb762520d21f06f2af921589237d9378e7fae6091a7->leave($__internal_1082cfbdb0676793887c3cb762520d21f06f2af921589237d9378e7fae6091a7_prof);

        
        $__internal_5ec7579008621c51af17d6712a5d7080dd9b2985e369809846d829bd58d80ad8->leave($__internal_5ec7579008621c51af17d6712a5d7080dd9b2985e369809846d829bd58d80ad8_prof);

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
", "user/index.html.twig", "/home/andrea/Desktop/CaviarIT/Kurzy/app/Resources/views/user/index.html.twig");
    }
}
