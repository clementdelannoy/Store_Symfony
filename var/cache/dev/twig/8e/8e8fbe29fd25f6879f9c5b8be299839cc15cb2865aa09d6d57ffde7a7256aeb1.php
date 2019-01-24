<?php

/* layout/navbar.html.twig */
class __TwigTemplate_8999ddc37b45f47f0ffb127295c47c785f41c205ffc94e354340930e383f4cc2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout/navbar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout/navbar.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark mb-3\">
    <div class=\"container\">
        <a class=\"navbar-brand\" href=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">";
        echo twig_escape_filter($this->env, ($context["brand"] ?? $this->getContext($context, "brand")), "html", null, true);
        echo "</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\"
                aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav mr-auto\">
                ";
        // line 11
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", [])) {
            // line 12
            echo "                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\"
                           data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("navbar.store"), "html", null, true);
            echo "
                        </a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                            <h6 class=\"dropdown-header\">Produit</h6>
                            <a class=\"dropdown-item\"
                               href=\"";
            // line 20
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cart_product_list");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("navbar.product.list"), "html", null, true);
            echo "</a>
                            <a class=\"dropdown-item\"
                               href=\"";
            // line 22
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cart_product_add");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("navbar.product.add"), "html", null, true);
            echo "</a>
                            <div class=\"dropdown-divider\"></div>
                            <h6 class=\"dropdown-header\">Catégorie</h6>
                            <a class=\"dropdown-item\"
                               href=\"";
            // line 26
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cart_category_list");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("navbar.category.list"), "html", null, true);
            echo "</a>
                            <a class=\"dropdown-item\"
                               href=\"";
            // line 28
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cart_category_add");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("navbar.category.add"), "html", null, true);
            echo "</a>
                        </div>
                    </li>
                ";
        }
        // line 32
        echo "            </ul>
            <ul class=\"navbar-nav\">
                ";
        // line 34
        if ( !$this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", [])) {
            // line 35
            echo "                    <li class=\"nav-item active\">
                        <a class=\"nav-link\" href=\"";
            // line 36
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Connexion"), "html", null, true);
            echo " <span
                                    class=\"sr-only\">(current)</span></a>
                    </li>
                    <li class=\"nav-item active\">
                        <a class=\"nav-link\"
                           href=\"";
            // line 41
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Inscription"), "html", null, true);
            echo " <span
                                    class=\"sr-only\">(current)</span></a>
                    </li>
                ";
        } else {
            // line 45
            echo "                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\"
                           data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            ";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mon Compte"), "html", null, true);
            echo "
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdown\">
                            <a class=\"dropdown-item\"
                               href=\"";
            // line 52
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mon Profile"), "html", null, true);
            echo "</a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\"
                               href=\"";
            // line 55
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Déconnexion"), "html", null, true);
            echo "</a>
                        </div>
                    </li>
                ";
        }
        // line 59
        echo "            </ul>
        </div>
    </div>
</nav>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  146 => 59,  137 => 55,  129 => 52,  122 => 48,  117 => 45,  108 => 41,  98 => 36,  95 => 35,  93 => 34,  89 => 32,  80 => 28,  73 => 26,  64 => 22,  57 => 20,  49 => 15,  44 => 12,  42 => 11,  29 => 3,  25 => 1,);
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
        <a class=\"navbar-brand\" href=\"{{ path('homepage') }}\">{{ brand }}</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\"
                aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav mr-auto\">
                {% if app.user %}
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\"
                           data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            {{ 'navbar.store' | trans }}
                        </a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                            <h6 class=\"dropdown-header\">Produit</h6>
                            <a class=\"dropdown-item\"
                               href=\"{{ path('cart_product_list') }}\">{{ 'navbar.product.list' | trans }}</a>
                            <a class=\"dropdown-item\"
                               href=\"{{ path('cart_product_add') }}\">{{ 'navbar.product.add' | trans }}</a>
                            <div class=\"dropdown-divider\"></div>
                            <h6 class=\"dropdown-header\">Catégorie</h6>
                            <a class=\"dropdown-item\"
                               href=\"{{ path('cart_category_list') }}\">{{ 'navbar.category.list' | trans }}</a>
                            <a class=\"dropdown-item\"
                               href=\"{{ path('cart_category_add') }}\">{{ 'navbar.category.add' | trans }}</a>
                        </div>
                    </li>
                {% endif %}
            </ul>
            <ul class=\"navbar-nav\">
                {% if not app.user %}
                    <li class=\"nav-item active\">
                        <a class=\"nav-link\" href=\"{{ path('fos_user_security_login') }}\">{{ 'Connexion' | trans }} <span
                                    class=\"sr-only\">(current)</span></a>
                    </li>
                    <li class=\"nav-item active\">
                        <a class=\"nav-link\"
                           href=\"{{ path('fos_user_registration_register') }}\">{{ 'Inscription' | trans }} <span
                                    class=\"sr-only\">(current)</span></a>
                    </li>
                {% else %}
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\"
                           data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            {{ 'Mon Compte' | trans }}
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdown\">
                            <a class=\"dropdown-item\"
                               href=\"{{ path('fos_user_profile_show') }}\">{{ 'Mon Profile' | trans }}</a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\"
                               href=\"{{ path('fos_user_security_logout') }}\">{{ 'Déconnexion' | trans }}</a>
                        </div>
                    </li>
                {% endif %}
            </ul>
        </div>
    </div>
</nav>", "layout/navbar.html.twig", "/Applications/MAMP/htdocs/cdnt-symfony3/app/Resources/views/layout/navbar.html.twig");
    }
}
