<?php

/* @Cart/Product/details.html.twig */
class __TwigTemplate_04eb40d6183f57ac4fa11321518bf2846bc52b208a9c44b010565f707a88ae88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Cart/Product/details.html.twig", 1);
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
        $__internal_0a274ae77bafc509c146d6a9d5df4f348e0383835a10952f931dd28ff7034705 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a274ae77bafc509c146d6a9d5df4f348e0383835a10952f931dd28ff7034705->enter($__internal_0a274ae77bafc509c146d6a9d5df4f348e0383835a10952f931dd28ff7034705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Cart/Product/details.html.twig"));

        $__internal_5e76f95e505c96085a4d5bbb72f215198d1110d8d52bc962493ae6ce21d1a0d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e76f95e505c96085a4d5bbb72f215198d1110d8d52bc962493ae6ce21d1a0d9->enter($__internal_5e76f95e505c96085a4d5bbb72f215198d1110d8d52bc962493ae6ce21d1a0d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Cart/Product/details.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a274ae77bafc509c146d6a9d5df4f348e0383835a10952f931dd28ff7034705->leave($__internal_0a274ae77bafc509c146d6a9d5df4f348e0383835a10952f931dd28ff7034705_prof);

        
        $__internal_5e76f95e505c96085a4d5bbb72f215198d1110d8d52bc962493ae6ce21d1a0d9->leave($__internal_5e76f95e505c96085a4d5bbb72f215198d1110d8d52bc962493ae6ce21d1a0d9_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_4a4b606779a109a6264a359e45f2968afa3f5d1bdde15afe843468df10e8ac51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a4b606779a109a6264a359e45f2968afa3f5d1bdde15afe843468df10e8ac51->enter($__internal_4a4b606779a109a6264a359e45f2968afa3f5d1bdde15afe843468df10e8ac51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_08e5b89b0725ef12899b6693697a455368b8973e142f005d915488b435755abc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08e5b89b0725ef12899b6693697a455368b8973e142f005d915488b435755abc->enter($__internal_08e5b89b0725ef12899b6693697a455368b8973e142f005d915488b435755abc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"card\" style=\"margin-top: 3em;\">
        <div class=\"card-header\">
            ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "name", array()), "html", null, true);
        echo "
        </div>
        <ul class=\"list-group list-group-flush\">
            <li class=\"list-group-item\">Prix : ";
        // line 8
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "price", array()), 2, ".", " "), "html", null, true);
        echo " €</li>
            <li class=\"list-group-item\">
                Catégorie(s) :
                ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "categories", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 12
            echo "                    ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "            </li>
            <li class=\"list-group-item\">Activé : ";
        // line 15
        echo (($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "active", array())) ? ("Oui") : ("Non"));
        echo "</li>
        </ul>
    </div>
";
        
        $__internal_08e5b89b0725ef12899b6693697a455368b8973e142f005d915488b435755abc->leave($__internal_08e5b89b0725ef12899b6693697a455368b8973e142f005d915488b435755abc_prof);

        
        $__internal_4a4b606779a109a6264a359e45f2968afa3f5d1bdde15afe843468df10e8ac51->leave($__internal_4a4b606779a109a6264a359e45f2968afa3f5d1bdde15afe843468df10e8ac51_prof);

    }

    public function getTemplateName()
    {
        return "@Cart/Product/details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 15,  78 => 14,  69 => 12,  65 => 11,  59 => 8,  53 => 5,  49 => 3,  40 => 2,  11 => 1,);
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
    <div class=\"card\" style=\"margin-top: 3em;\">
        <div class=\"card-header\">
            {{ product.name }}
        </div>
        <ul class=\"list-group list-group-flush\">
            <li class=\"list-group-item\">Prix : {{ product.price | number_format(2, '.', ' ')}} €</li>
            <li class=\"list-group-item\">
                Catégorie(s) :
                {% for category in product.categories %}
                    {{ category.name }}
                {%  endfor %}
            </li>
            <li class=\"list-group-item\">Activé : {{ product.active ? \"Oui\" : \"Non\" }}</li>
        </ul>
    </div>
{% endblock %}", "@Cart/Product/details.html.twig", "/Applications/MAMP/htdocs/sf3/src/CartBundle/Resources/views/Product/details.html.twig");
    }
}
