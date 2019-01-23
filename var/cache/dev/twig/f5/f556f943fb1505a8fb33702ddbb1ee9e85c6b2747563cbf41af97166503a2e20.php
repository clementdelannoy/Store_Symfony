<?php

/* @Cart/Category/list.html.twig */
class __TwigTemplate_e1dc5cffd6a9f643cb4fcb884aacf2e4a5111b47b92f29ed4cd5f13dca8baa79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Cart/Category/list.html.twig", 1);
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
        $__internal_9ef8cf2802d68183eb8ca7fa0db93cfabde8971e8a9e0fd4ed7f7c814d764ee9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ef8cf2802d68183eb8ca7fa0db93cfabde8971e8a9e0fd4ed7f7c814d764ee9->enter($__internal_9ef8cf2802d68183eb8ca7fa0db93cfabde8971e8a9e0fd4ed7f7c814d764ee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Cart/Category/list.html.twig"));

        $__internal_d700dae0d4044effd10293d990b754d952c05117e82a4b790afcd7bbfa6de1ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d700dae0d4044effd10293d990b754d952c05117e82a4b790afcd7bbfa6de1ae->enter($__internal_d700dae0d4044effd10293d990b754d952c05117e82a4b790afcd7bbfa6de1ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Cart/Category/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ef8cf2802d68183eb8ca7fa0db93cfabde8971e8a9e0fd4ed7f7c814d764ee9->leave($__internal_9ef8cf2802d68183eb8ca7fa0db93cfabde8971e8a9e0fd4ed7f7c814d764ee9_prof);

        
        $__internal_d700dae0d4044effd10293d990b754d952c05117e82a4b790afcd7bbfa6de1ae->leave($__internal_d700dae0d4044effd10293d990b754d952c05117e82a4b790afcd7bbfa6de1ae_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_cf745fa29d41d260197ee7f92b85fb20b286daedb1fa8a099410bd558b454191 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf745fa29d41d260197ee7f92b85fb20b286daedb1fa8a099410bd558b454191->enter($__internal_cf745fa29d41d260197ee7f92b85fb20b286daedb1fa8a099410bd558b454191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_77848815e06d2621bd1e2d08f9008ea482357841027514802d7d1e3aa3357ecf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77848815e06d2621bd1e2d08f9008ea482357841027514802d7d1e3aa3357ecf->enter($__internal_77848815e06d2621bd1e2d08f9008ea482357841027514802d7d1e3aa3357ecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list.category.title"), "html", null, true);
        echo "</h1>
    <table class=\"table table-striped\">
        <thead class=\"thead-dark\">
        <tr>
            <th scope=\"col\">#</th>
            <th scope=\"col\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list.category.name"), "html", null, true);
        echo "</th>
            <th scope=\"col\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list.category.active"), "html", null, true);
        echo "</th>
            <th scope=\"col\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list.category.actions"), "html", null, true);
        echo "</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 15
            echo "        <tr>
            <th scope=\"row\">";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
            echo "</th>
            <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 18
            echo (($this->getAttribute($context["category"], "active", array())) ? ("Oui") : ("Non"));
            echo "</td>
            <td>
                <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cart_category_edit", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-dark btn-sm\"><i class=\"fas fa-pen\"></i></a>
                <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cart_category_delete", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fas fa-trash\"></i></a>
            </td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "        </tbody>
    </table>
";
        
        $__internal_77848815e06d2621bd1e2d08f9008ea482357841027514802d7d1e3aa3357ecf->leave($__internal_77848815e06d2621bd1e2d08f9008ea482357841027514802d7d1e3aa3357ecf_prof);

        
        $__internal_cf745fa29d41d260197ee7f92b85fb20b286daedb1fa8a099410bd558b454191->leave($__internal_cf745fa29d41d260197ee7f92b85fb20b286daedb1fa8a099410bd558b454191_prof);

    }

    public function getTemplateName()
    {
        return "@Cart/Category/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 25,  97 => 21,  93 => 20,  88 => 18,  84 => 17,  80 => 16,  77 => 15,  73 => 14,  66 => 10,  62 => 9,  58 => 8,  49 => 3,  40 => 2,  11 => 1,);
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
    <h1>{{ 'list.category.title' | trans }}</h1>
    <table class=\"table table-striped\">
        <thead class=\"thead-dark\">
        <tr>
            <th scope=\"col\">#</th>
            <th scope=\"col\">{{ 'list.category.name' | trans }}</th>
            <th scope=\"col\">{{ 'list.category.active' | trans }}</th>
            <th scope=\"col\">{{ 'list.category.actions' | trans }}</th>
        </tr>
        </thead>
        <tbody>
        {% for category in categories %}
        <tr>
            <th scope=\"row\">{{ category.id }}</th>
            <td>{{ category.name }}</td>
            <td>{{ category.active ? \"Oui\" : \"Non\" }}</td>
            <td>
                <a href=\"{{ path('cart_category_edit', {id: category.id} ) }}\" class=\"btn btn-dark btn-sm\"><i class=\"fas fa-pen\"></i></a>
                <a href=\"{{ path('cart_category_delete', {id: category.id} ) }}\" class=\"btn btn-danger btn-sm\"><i class=\"fas fa-trash\"></i></a>
            </td>
        </tr>
        {% endfor %}
        </tbody>
    </table>
{% endblock %}", "@Cart/Category/list.html.twig", "/Applications/MAMP/htdocs/sf3/src/CartBundle/Resources/views/Category/list.html.twig");
    }
}
