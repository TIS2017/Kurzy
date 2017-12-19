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
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7df1acfb1e146df4265e725776d5b5c4502017edf12ebe90ccaadd4ed83d24bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7df1acfb1e146df4265e725776d5b5c4502017edf12ebe90ccaadd4ed83d24bb->enter($__internal_7df1acfb1e146df4265e725776d5b5c4502017edf12ebe90ccaadd4ed83d24bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_be5feb5215045eac73b50fb741ec914503ee43492d2fe6f684a1d099619bb18a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be5feb5215045eac73b50fb741ec914503ee43492d2fe6f684a1d099619bb18a->enter($__internal_be5feb5215045eac73b50fb741ec914503ee43492d2fe6f684a1d099619bb18a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7df1acfb1e146df4265e725776d5b5c4502017edf12ebe90ccaadd4ed83d24bb->leave($__internal_7df1acfb1e146df4265e725776d5b5c4502017edf12ebe90ccaadd4ed83d24bb_prof);

        
        $__internal_be5feb5215045eac73b50fb741ec914503ee43492d2fe6f684a1d099619bb18a->leave($__internal_be5feb5215045eac73b50fb741ec914503ee43492d2fe6f684a1d099619bb18a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_23980eb80d8563d03b8cc7848eb3d4cc56c0d459498826bd3a5310d9bff63a36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23980eb80d8563d03b8cc7848eb3d4cc56c0d459498826bd3a5310d9bff63a36->enter($__internal_23980eb80d8563d03b8cc7848eb3d4cc56c0d459498826bd3a5310d9bff63a36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fd5f2f9847cb7fbfbbd84deecdf8be9442c3a4daaabcfa100c8217937d43fa4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd5f2f9847cb7fbfbbd84deecdf8be9442c3a4daaabcfa100c8217937d43fa4a->enter($__internal_fd5f2f9847cb7fbfbbd84deecdf8be9442c3a4daaabcfa100c8217937d43fa4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Users list</h1>

    <table>
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
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "login", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "password", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
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
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_new");
        echo "\">Create a new user</a>
        </li>
    </ul>
";
        
        $__internal_fd5f2f9847cb7fbfbbd84deecdf8be9442c3a4daaabcfa100c8217937d43fa4a->leave($__internal_fd5f2f9847cb7fbfbbd84deecdf8be9442c3a4daaabcfa100c8217937d43fa4a_prof);

        
        $__internal_23980eb80d8563d03b8cc7848eb3d4cc56c0d459498826bd3a5310d9bff63a36->leave($__internal_23980eb80d8563d03b8cc7848eb3d4cc56c0d459498826bd3a5310d9bff63a36_prof);

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
        return array (  112 => 38,  105 => 33,  93 => 27,  87 => 24,  80 => 20,  76 => 19,  70 => 18,  67 => 17,  63 => 16,  49 => 4,  40 => 3,  11 => 1,);
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

{% block body %}
    <h1>Users list</h1>

    <table>
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
