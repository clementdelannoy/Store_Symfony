<?php

/* base.html.twig */
class __TwigTemplate_559e907860c46520099dcbde370f6353b32f541dcfcac85bea6c45c73c49bfbf extends Twig_Template
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
        $__internal_d56fd21c28dac072b0d5aade56715fd0a6a41fb53ef4e515e69f1c1448cc6d51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d56fd21c28dac072b0d5aade56715fd0a6a41fb53ef4e515e69f1c1448cc6d51->enter($__internal_d56fd21c28dac072b0d5aade56715fd0a6a41fb53ef4e515e69f1c1448cc6d51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_d740d4e92065adbb52eb5cf48d20aa9df1d4ed9b3378888cf89c37ca8847eed6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d740d4e92065adbb52eb5cf48d20aa9df1d4ed9b3378888cf89c37ca8847eed6->enter($__internal_d740d4e92065adbb52eb5cf48d20aa9df1d4ed9b3378888cf89c37ca8847eed6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, ($context["locale"] ?? $this->getContext($context, "locale")), "html", null, true);
        echo "\">
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 13
        $this->loadTemplate("layout/navbar.html.twig", "base.html.twig", 13)->display($context);
        // line 14
        echo "
        <div class=\"container\">
            ";
        // line 16
        $this->displayBlock('body', $context, $blocks);
        // line 18
        echo "        </div>

        ";
        // line 20
        $this->displayBlock('javascripts', $context, $blocks);
        // line 24
        echo "    </body>
</html>
";
        
        $__internal_d56fd21c28dac072b0d5aade56715fd0a6a41fb53ef4e515e69f1c1448cc6d51->leave($__internal_d56fd21c28dac072b0d5aade56715fd0a6a41fb53ef4e515e69f1c1448cc6d51_prof);

        
        $__internal_d740d4e92065adbb52eb5cf48d20aa9df1d4ed9b3378888cf89c37ca8847eed6->leave($__internal_d740d4e92065adbb52eb5cf48d20aa9df1d4ed9b3378888cf89c37ca8847eed6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f11bdbb7880ba3a1982d0ab8b063f02fa0c7f3e0139fd6956302bcfc83cc4ee3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f11bdbb7880ba3a1982d0ab8b063f02fa0c7f3e0139fd6956302bcfc83cc4ee3->enter($__internal_f11bdbb7880ba3a1982d0ab8b063f02fa0c7f3e0139fd6956302bcfc83cc4ee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_827c018b9e2788e72bba659fd5947abdd07c8f24f18d40e2c667a080e2e7a5da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_827c018b9e2788e72bba659fd5947abdd07c8f24f18d40e2c667a080e2e7a5da->enter($__internal_827c018b9e2788e72bba659fd5947abdd07c8f24f18d40e2c667a080e2e7a5da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, ($context["brand"] ?? $this->getContext($context, "brand")), "html", null, true);
        
        $__internal_827c018b9e2788e72bba659fd5947abdd07c8f24f18d40e2c667a080e2e7a5da->leave($__internal_827c018b9e2788e72bba659fd5947abdd07c8f24f18d40e2c667a080e2e7a5da_prof);

        
        $__internal_f11bdbb7880ba3a1982d0ab8b063f02fa0c7f3e0139fd6956302bcfc83cc4ee3->leave($__internal_f11bdbb7880ba3a1982d0ab8b063f02fa0c7f3e0139fd6956302bcfc83cc4ee3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bcd935e56f156fae57bd4effcd749d624fb40482e17f8574aa367d365263d27d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcd935e56f156fae57bd4effcd749d624fb40482e17f8574aa367d365263d27d->enter($__internal_bcd935e56f156fae57bd4effcd749d624fb40482e17f8574aa367d365263d27d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ab3c815864aec8d3c0e3605f7316ea78e7bf6649193b3262d86f31fa637aa7a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab3c815864aec8d3c0e3605f7316ea78e7bf6649193b3262d86f31fa637aa7a1->enter($__internal_ab3c815864aec8d3c0e3605f7316ea78e7bf6649193b3262d86f31fa637aa7a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"/node_modules/bootstrap/dist/css/bootstrap.min.css\" />
            <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.6.3/css/all.css\" integrity=\"sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/\" crossorigin=\"anonymous\">
        ";
        
        $__internal_ab3c815864aec8d3c0e3605f7316ea78e7bf6649193b3262d86f31fa637aa7a1->leave($__internal_ab3c815864aec8d3c0e3605f7316ea78e7bf6649193b3262d86f31fa637aa7a1_prof);

        
        $__internal_bcd935e56f156fae57bd4effcd749d624fb40482e17f8574aa367d365263d27d->leave($__internal_bcd935e56f156fae57bd4effcd749d624fb40482e17f8574aa367d365263d27d_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_c40ad4cc7f74a3885f2298ead77f2ff00e234b5ee4ac4b3d3b08bef7da19bff6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c40ad4cc7f74a3885f2298ead77f2ff00e234b5ee4ac4b3d3b08bef7da19bff6->enter($__internal_c40ad4cc7f74a3885f2298ead77f2ff00e234b5ee4ac4b3d3b08bef7da19bff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_77d6831db8649ebfc1a0634c1689a0d03c0378dcd763916932de6321d25ae890 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77d6831db8649ebfc1a0634c1689a0d03c0378dcd763916932de6321d25ae890->enter($__internal_77d6831db8649ebfc1a0634c1689a0d03c0378dcd763916932de6321d25ae890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "            ";
        
        $__internal_77d6831db8649ebfc1a0634c1689a0d03c0378dcd763916932de6321d25ae890->leave($__internal_77d6831db8649ebfc1a0634c1689a0d03c0378dcd763916932de6321d25ae890_prof);

        
        $__internal_c40ad4cc7f74a3885f2298ead77f2ff00e234b5ee4ac4b3d3b08bef7da19bff6->leave($__internal_c40ad4cc7f74a3885f2298ead77f2ff00e234b5ee4ac4b3d3b08bef7da19bff6_prof);

    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5c960fba148a47958e799cf06c8c8afedc62581e8ad957f69ebafd432aa057b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c960fba148a47958e799cf06c8c8afedc62581e8ad957f69ebafd432aa057b0->enter($__internal_5c960fba148a47958e799cf06c8c8afedc62581e8ad957f69ebafd432aa057b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_992552e53294b53410e704aee83bd7a5469dace32587cfc2fb9fbe4f84245c87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_992552e53294b53410e704aee83bd7a5469dace32587cfc2fb9fbe4f84245c87->enter($__internal_992552e53294b53410e704aee83bd7a5469dace32587cfc2fb9fbe4f84245c87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 21
        echo "            <script src=\"/node_modules/jquery/dist/jquery.min.js\"></script>
            <script src=\"/node_modules/bootstrap/dist/js/bootstrap.min.js\"></script>
        ";
        
        $__internal_992552e53294b53410e704aee83bd7a5469dace32587cfc2fb9fbe4f84245c87->leave($__internal_992552e53294b53410e704aee83bd7a5469dace32587cfc2fb9fbe4f84245c87_prof);

        
        $__internal_5c960fba148a47958e799cf06c8c8afedc62581e8ad957f69ebafd432aa057b0->leave($__internal_5c960fba148a47958e799cf06c8c8afedc62581e8ad957f69ebafd432aa057b0_prof);

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
        return array (  144 => 21,  135 => 20,  125 => 17,  116 => 16,  104 => 7,  95 => 6,  77 => 5,  65 => 24,  63 => 20,  59 => 18,  57 => 16,  53 => 14,  51 => 13,  44 => 10,  42 => 6,  38 => 5,  32 => 2,  29 => 1,);
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
<html lang=\"{{ locale }}\">
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}{{ brand }}{% endblock %}</title>
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"/node_modules/bootstrap/dist/css/bootstrap.min.css\" />
            <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.6.3/css/all.css\" integrity=\"sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/\" crossorigin=\"anonymous\">
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% include 'layout/navbar.html.twig' %}

        <div class=\"container\">
            {% block body %}
            {% endblock %}
        </div>

        {% block javascripts %}
            <script src=\"/node_modules/jquery/dist/jquery.min.js\"></script>
            <script src=\"/node_modules/bootstrap/dist/js/bootstrap.min.js\"></script>
        {% endblock %}
    </body>
</html>
", "base.html.twig", "/Applications/MAMP/htdocs/sf3/app/Resources/views/base.html.twig");
    }
}
