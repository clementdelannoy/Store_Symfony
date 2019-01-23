<?php

/* layout/navbar.html.twig */
class __TwigTemplate_150c279e36e2aaaa6bf2bcb9edadb91ec424d4d6e06f103e52a1a8920113f0c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6cecc4efbcbb39dd06d881e0c915ba039dee4d78451c4619a301f6ab696ba335 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cecc4efbcbb39dd06d881e0c915ba039dee4d78451c4619a301f6ab696ba335->enter($__internal_6cecc4efbcbb39dd06d881e0c915ba039dee4d78451c4619a301f6ab696ba335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout/navbar.html.twig"));

        $__internal_be4a0c26255128960cd5cd89845b43ecc170c07ddbf819684662185bbd7e0917 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be4a0c26255128960cd5cd89845b43ecc170c07ddbf819684662185bbd7e0917->enter($__internal_be4a0c26255128960cd5cd89845b43ecc170c07ddbf819684662185bbd7e0917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout/navbar.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark mb-3\">
    <div class=\"container\">
        <a class=\"navbar-brand\" href=\"#\">";
        // line 3
        echo twig_escape_filter($this->env, ($context["brand"] ?? $this->getContext($context, "brand")), "html", null, true);
        echo "</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav mr-auto\">
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"#\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("navbar.home"), "html", null, true);
        echo "<span class=\"sr-only\">(current)</span></a>
                </li>
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        ";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("navbar.store"), "html", null, true);
        echo "
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                        <a class=\"dropdown-item\" href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cart_product_list");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("navbar.product.list"), "html", null, true);
        echo "</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cart_product_add");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("navbar.product.add"), "html", null, true);
        echo "</a>
                        <div class=\"dropdown-divider\"></div>
                        <a class=\"dropdown-item\" href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cart_category_list");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("navbar.category.list"), "html", null, true);
        echo "</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cart_category_add");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("navbar.category.add"), "html", null, true);
        echo "</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>";
        
        $__internal_6cecc4efbcbb39dd06d881e0c915ba039dee4d78451c4619a301f6ab696ba335->leave($__internal_6cecc4efbcbb39dd06d881e0c915ba039dee4d78451c4619a301f6ab696ba335_prof);

        
        $__internal_be4a0c26255128960cd5cd89845b43ecc170c07ddbf819684662185bbd7e0917->leave($__internal_be4a0c26255128960cd5cd89845b43ecc170c07ddbf819684662185bbd7e0917_prof);

    }

    public function getTemplateName()
    {
        return "layout/navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 22,  66 => 21,  59 => 19,  53 => 18,  47 => 15,  40 => 11,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark mb-3\">
    <div class=\"container\">
        <a class=\"navbar-brand\" href=\"#\">{{ brand }}</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav mr-auto\">
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"#\">{{ 'navbar.home' | trans }}<span class=\"sr-only\">(current)</span></a>
                </li>
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        {{ 'navbar.store' | trans }}
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                        <a class=\"dropdown-item\" href=\"{{ path('cart_product_list') }}\">{{ 'navbar.product.list' | trans }}</a>
                        <a class=\"dropdown-item\" href=\"{{ path('cart_product_add') }}\">{{ 'navbar.product.add' | trans }}</a>
                        <div class=\"dropdown-divider\"></div>
                        <a class=\"dropdown-item\" href=\"{{ path('cart_category_list') }}\">{{ 'navbar.category.list' | trans }}</a>
                        <a class=\"dropdown-item\" href=\"{{ path('cart_category_add') }}\">{{ 'navbar.category.add' | trans }}</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>", "layout/navbar.html.twig", "/Applications/MAMP/htdocs/sf3/app/Resources/views/layout/navbar.html.twig");
    }
}
