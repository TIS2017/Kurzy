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
        $__internal_6529d47b2bfe49ade31e277f78e32da8d31f3a0d8d589287cada31a4c725cb78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6529d47b2bfe49ade31e277f78e32da8d31f3a0d8d589287cada31a4c725cb78->enter($__internal_6529d47b2bfe49ade31e277f78e32da8d31f3a0d8d589287cada31a4c725cb78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_0e6174345d5d537296ad0af052cbf6d186758f0f5d84938e73926e9eaa90839d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e6174345d5d537296ad0af052cbf6d186758f0f5d84938e73926e9eaa90839d->enter($__internal_0e6174345d5d537296ad0af052cbf6d186758f0f5d84938e73926e9eaa90839d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6529d47b2bfe49ade31e277f78e32da8d31f3a0d8d589287cada31a4c725cb78->leave($__internal_6529d47b2bfe49ade31e277f78e32da8d31f3a0d8d589287cada31a4c725cb78_prof);

        
        $__internal_0e6174345d5d537296ad0af052cbf6d186758f0f5d84938e73926e9eaa90839d->leave($__internal_0e6174345d5d537296ad0af052cbf6d186758f0f5d84938e73926e9eaa90839d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ce7ba1f6bc7329f5ccd3527b776abcffe36b52c123c75d8600297e154887a9e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce7ba1f6bc7329f5ccd3527b776abcffe36b52c123c75d8600297e154887a9e9->enter($__internal_ce7ba1f6bc7329f5ccd3527b776abcffe36b52c123c75d8600297e154887a9e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6cdaf5d08a8e731221eb5e1460e3898cae55d1c47fea2c5a6dc4b5ba6324a4e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cdaf5d08a8e731221eb5e1460e3898cae55d1c47fea2c5a6dc4b5ba6324a4e1->enter($__internal_6cdaf5d08a8e731221eb5e1460e3898cae55d1c47fea2c5a6dc4b5ba6324a4e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Users
";
        
        $__internal_6cdaf5d08a8e731221eb5e1460e3898cae55d1c47fea2c5a6dc4b5ba6324a4e1->leave($__internal_6cdaf5d08a8e731221eb5e1460e3898cae55d1c47fea2c5a6dc4b5ba6324a4e1_prof);

        
        $__internal_ce7ba1f6bc7329f5ccd3527b776abcffe36b52c123c75d8600297e154887a9e9->leave($__internal_ce7ba1f6bc7329f5ccd3527b776abcffe36b52c123c75d8600297e154887a9e9_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_48ae170ec705c875369c0b6ccf273d5510a134938027d029810d548ce544870f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48ae170ec705c875369c0b6ccf273d5510a134938027d029810d548ce544870f->enter($__internal_48ae170ec705c875369c0b6ccf273d5510a134938027d029810d548ce544870f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_9151cdd94926fc008fd8917e6223387ffbefd9a5dd93386721169a7418fa35a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9151cdd94926fc008fd8917e6223387ffbefd9a5dd93386721169a7418fa35a5->enter($__internal_9151cdd94926fc008fd8917e6223387ffbefd9a5dd93386721169a7418fa35a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" class=\"css\">
";
        
        $__internal_9151cdd94926fc008fd8917e6223387ffbefd9a5dd93386721169a7418fa35a5->leave($__internal_9151cdd94926fc008fd8917e6223387ffbefd9a5dd93386721169a7418fa35a5_prof);

        
        $__internal_48ae170ec705c875369c0b6ccf273d5510a134938027d029810d548ce544870f->leave($__internal_48ae170ec705c875369c0b6ccf273d5510a134938027d029810d548ce544870f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_eca82e243b55bb0aa52ae76cd42606d0aa8f8a39012367392bde178056817baf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eca82e243b55bb0aa52ae76cd42606d0aa8f8a39012367392bde178056817baf->enter($__internal_eca82e243b55bb0aa52ae76cd42606d0aa8f8a39012367392bde178056817baf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5f6ed5442fd62a7fe1d120e9e88ac56567b2733adc78d978b82b861d996335fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f6ed5442fd62a7fe1d120e9e88ac56567b2733adc78d978b82b861d996335fb->enter($__internal_5f6ed5442fd62a7fe1d120e9e88ac56567b2733adc78d978b82b861d996335fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
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
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 24
            echo "            <tr>
                <td><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "login", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "password", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 34
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
        // line 40
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_new");
        echo "\">Create a new user</a>
        </li>
    </ul>
";
        
        $__internal_5f6ed5442fd62a7fe1d120e9e88ac56567b2733adc78d978b82b861d996335fb->leave($__internal_5f6ed5442fd62a7fe1d120e9e88ac56567b2733adc78d978b82b861d996335fb_prof);

        
        $__internal_eca82e243b55bb0aa52ae76cd42606d0aa8f8a39012367392bde178056817baf->leave($__internal_eca82e243b55bb0aa52ae76cd42606d0aa8f8a39012367392bde178056817baf_prof);

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
        return array (  155 => 45,  148 => 40,  136 => 34,  130 => 31,  123 => 27,  119 => 26,  113 => 25,  110 => 24,  106 => 23,  93 => 12,  84 => 11,  71 => 8,  62 => 7,  51 => 4,  42 => 3,  11 => 1,);
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
{% endblock %}
", "user/index.html.twig", "/home/patricia/Desktop/kurzy_projekt/kurzy/app/Resources/views/user/index.html.twig");
    }
}
