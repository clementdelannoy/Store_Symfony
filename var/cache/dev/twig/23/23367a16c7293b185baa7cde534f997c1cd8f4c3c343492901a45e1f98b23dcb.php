<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_825ca2aa137a9515ebe275341b175c9009faae5483283b9a68051a94da6769f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f4fa88b6fae113e092562c6f87e596551a794083b54d687b91acd1180a8984a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4fa88b6fae113e092562c6f87e596551a794083b54d687b91acd1180a8984a8->enter($__internal_f4fa88b6fae113e092562c6f87e596551a794083b54d687b91acd1180a8984a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_340e67f95bdcac4693505c1c5a3e22c0514ad7c76858d53e727e6a92a65c517d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_340e67f95bdcac4693505c1c5a3e22c0514ad7c76858d53e727e6a92a65c517d->enter($__internal_340e67f95bdcac4693505c1c5a3e22c0514ad7c76858d53e727e6a92a65c517d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_f4fa88b6fae113e092562c6f87e596551a794083b54d687b91acd1180a8984a8->leave($__internal_f4fa88b6fae113e092562c6f87e596551a794083b54d687b91acd1180a8984a8_prof);

        
        $__internal_340e67f95bdcac4693505c1c5a3e22c0514ad7c76858d53e727e6a92a65c517d->leave($__internal_340e67f95bdcac4693505c1c5a3e22c0514ad7c76858d53e727e6a92a65c517d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_05eed896d352d3a44581936953d54f8b5e556d1946eeb3724f8b0bcfb0316807 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05eed896d352d3a44581936953d54f8b5e556d1946eeb3724f8b0bcfb0316807->enter($__internal_05eed896d352d3a44581936953d54f8b5e556d1946eeb3724f8b0bcfb0316807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7050794bfe7212a24f590b6e168bda05febc92dd9260e6e3d8d3a1ef09dc72cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7050794bfe7212a24f590b6e168bda05febc92dd9260e6e3d8d3a1ef09dc72cb->enter($__internal_7050794bfe7212a24f590b6e168bda05febc92dd9260e6e3d8d3a1ef09dc72cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_7050794bfe7212a24f590b6e168bda05febc92dd9260e6e3d8d3a1ef09dc72cb->leave($__internal_7050794bfe7212a24f590b6e168bda05febc92dd9260e6e3d8d3a1ef09dc72cb_prof);

        
        $__internal_05eed896d352d3a44581936953d54f8b5e556d1946eeb3724f8b0bcfb0316807->leave($__internal_05eed896d352d3a44581936953d54f8b5e556d1946eeb3724f8b0bcfb0316807_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_56d206ec9ffee1e2099e6752164daa251edb9f04ab7ffbc5e43fa7e83097873f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56d206ec9ffee1e2099e6752164daa251edb9f04ab7ffbc5e43fa7e83097873f->enter($__internal_56d206ec9ffee1e2099e6752164daa251edb9f04ab7ffbc5e43fa7e83097873f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_afcf40c6139b52af76ab4386f6f02e68681ebb776fc6b97ef82f7f8789c464ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afcf40c6139b52af76ab4386f6f02e68681ebb776fc6b97ef82f7f8789c464ba->enter($__internal_afcf40c6139b52af76ab4386f6f02e68681ebb776fc6b97ef82f7f8789c464ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_afcf40c6139b52af76ab4386f6f02e68681ebb776fc6b97ef82f7f8789c464ba->leave($__internal_afcf40c6139b52af76ab4386f6f02e68681ebb776fc6b97ef82f7f8789c464ba_prof);

        
        $__internal_56d206ec9ffee1e2099e6752164daa251edb9f04ab7ffbc5e43fa7e83097873f->leave($__internal_56d206ec9ffee1e2099e6752164daa251edb9f04ab7ffbc5e43fa7e83097873f_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_a857b58e9002090c0fcfa0af7fe45971d4832138afc5212d1ee288cbe0fb9f58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a857b58e9002090c0fcfa0af7fe45971d4832138afc5212d1ee288cbe0fb9f58->enter($__internal_a857b58e9002090c0fcfa0af7fe45971d4832138afc5212d1ee288cbe0fb9f58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5838b6a77b00327d863ca4bd0480d46217e3f082ad2da0434744dd2119b15012 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5838b6a77b00327d863ca4bd0480d46217e3f082ad2da0434744dd2119b15012->enter($__internal_5838b6a77b00327d863ca4bd0480d46217e3f082ad2da0434744dd2119b15012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5838b6a77b00327d863ca4bd0480d46217e3f082ad2da0434744dd2119b15012->leave($__internal_5838b6a77b00327d863ca4bd0480d46217e3f082ad2da0434744dd2119b15012_prof);

        
        $__internal_a857b58e9002090c0fcfa0af7fe45971d4832138afc5212d1ee288cbe0fb9f58->leave($__internal_a857b58e9002090c0fcfa0af7fe45971d4832138afc5212d1ee288cbe0fb9f58_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/Applications/MAMP/htdocs/sf3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
