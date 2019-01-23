<?php

/* @Cart/Product/list.html.twig */
class __TwigTemplate_bcbde9e6d6753f18fad048dc37d9a88dc73eb29f34b3318bc69a29d7969649e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Cart/Product/list.html.twig", 1);
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
        $__internal_600292214d1b4e0d8c468b1cc0303cbdb6fe01ca3a000ace8cb8abeb23a4c9f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_600292214d1b4e0d8c468b1cc0303cbdb6fe01ca3a000ace8cb8abeb23a4c9f5->enter($__internal_600292214d1b4e0d8c468b1cc0303cbdb6fe01ca3a000ace8cb8abeb23a4c9f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Cart/Product/list.html.twig"));

        $__internal_281ae1823b42db720dd141bcde5c39eda734c1b6c5a5cc169c33de38ee902376 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_281ae1823b42db720dd141bcde5c39eda734c1b6c5a5cc169c33de38ee902376->enter($__internal_281ae1823b42db720dd141bcde5c39eda734c1b6c5a5cc169c33de38ee902376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Cart/Product/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_600292214d1b4e0d8c468b1cc0303cbdb6fe01ca3a000ace8cb8abeb23a4c9f5->leave($__internal_600292214d1b4e0d8c468b1cc0303cbdb6fe01ca3a000ace8cb8abeb23a4c9f5_prof);

        
        $__internal_281ae1823b42db720dd141bcde5c39eda734c1b6c5a5cc169c33de38ee902376->leave($__internal_281ae1823b42db720dd141bcde5c39eda734c1b6c5a5cc169c33de38ee902376_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_f9f66983ac545f1d4d0fef50382b6a7ddd349ec92140094848fe2c4a77174f6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9f66983ac545f1d4d0fef50382b6a7ddd349ec92140094848fe2c4a77174f6b->enter($__internal_f9f66983ac545f1d4d0fef50382b6a7ddd349ec92140094848fe2c4a77174f6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4876536cbc6cd860c3e2a276b203551c5054cc5655c904f2db4e3616d0002fb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4876536cbc6cd860c3e2a276b203551c5054cc5655c904f2db4e3616d0002fb6->enter($__internal_4876536cbc6cd860c3e2a276b203551c5054cc5655c904f2db4e3616d0002fb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list.product.title"), "html", null, true);
        echo "</h1>
    <table class=\"table table-striped\">
        <thead class=\"thead-dark\">
        <tr>
            <th scope=\"col\">#</th>
            <th scope=\"col\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list.product.name"), "html", null, true);
        echo "</th>
            <th scope=\"col\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list.product.price"), "html", null, true);
        echo "</th>
            <th scope=\"col\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list.product.active"), "html", null, true);
        echo "</th>
            <th scope=\"col\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list.product.created_at"), "html", null, true);
        echo "</th>
            <th scope=\"col\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list.product.actions"), "html", null, true);
        echo "</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? $this->getContext($context, "products")));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 17
            echo "        <tr>
            <th scope=\"row\">";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
            echo "</th>
            <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["product"], "price", array()), 2, ".", " "), "html", null, true);
            echo "€</td>
            <td>";
            // line 21
            echo (($this->getAttribute($context["product"], "active", array())) ? ("Oui") : ("Non"));
            echo "</td>
            <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["product"], "createdAt", array()), "d/m/Y"), "html", null, true);
            echo "</td>
            <td>
                <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cart_product_view", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary btn-sm\"><i class=\"far fa-eye\"></i></a>
                <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cart_product_edit", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-dark btn-sm\"><i class=\"fas fa-pen\"></i></a>
                <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cart_product_delete", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fas fa-trash\"></i></a>
            </td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "        </tbody>
    </table>
";
        
        $__internal_4876536cbc6cd860c3e2a276b203551c5054cc5655c904f2db4e3616d0002fb6->leave($__internal_4876536cbc6cd860c3e2a276b203551c5054cc5655c904f2db4e3616d0002fb6_prof);

        
        $__internal_f9f66983ac545f1d4d0fef50382b6a7ddd349ec92140094848fe2c4a77174f6b->leave($__internal_f9f66983ac545f1d4d0fef50382b6a7ddd349ec92140094848fe2c4a77174f6b_prof);

    }

    public function getTemplateName()
    {
        return "@Cart/Product/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 30,  117 => 26,  113 => 25,  109 => 24,  104 => 22,  100 => 21,  96 => 20,  92 => 19,  88 => 18,  85 => 17,  81 => 16,  74 => 12,  70 => 11,  66 => 10,  62 => 9,  58 => 8,  49 => 3,  40 => 2,  11 => 1,);
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
    <h1>{{ 'list.product.title' | trans }}</h1>
    <table class=\"table table-striped\">
        <thead class=\"thead-dark\">
        <tr>
            <th scope=\"col\">#</th>
            <th scope=\"col\">{{ 'list.product.name' | trans }}</th>
            <th scope=\"col\">{{ 'list.product.price' | trans }}</th>
            <th scope=\"col\">{{ 'list.product.active' | trans }}</th>
            <th scope=\"col\">{{ 'list.product.created_at' | trans }}</th>
            <th scope=\"col\">{{ 'list.product.actions' | trans }}</th>
        </tr>
        </thead>
        <tbody>
        {% for product in products %}
        <tr>
            <th scope=\"row\">{{ product.id }}</th>
            <td>{{ product.name }}</td>
            <td>{{ product.price | number_format(2, '.', ' ') }}€</td>
            <td>{{ product.active ? \"Oui\" : \"Non\" }}</td>
            <td>{{ product.createdAt | date(\"d/m/Y\") }}</td>
            <td>
                <a href=\"{{ path('cart_product_view', {id: product.id}) }}\" class=\"btn btn-primary btn-sm\"><i class=\"far fa-eye\"></i></a>
                <a href=\"{{ path('cart_product_edit', {id: product.id}) }}\" class=\"btn btn-dark btn-sm\"><i class=\"fas fa-pen\"></i></a>
                <a href=\"{{ path('cart_product_delete', {id: product.id}) }}\" class=\"btn btn-danger btn-sm\"><i class=\"fas fa-trash\"></i></a>
            </td>
        </tr>
        {% endfor %}
        </tbody>
    </table>
{% endblock %}", "@Cart/Product/list.html.twig", "/Applications/MAMP/htdocs/sf3/src/CartBundle/Resources/views/Product/list.html.twig");
    }
}
