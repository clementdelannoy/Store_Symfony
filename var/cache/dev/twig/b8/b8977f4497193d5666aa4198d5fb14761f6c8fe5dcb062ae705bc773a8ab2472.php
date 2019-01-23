<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_5cf7f5f7a9341b476c5a26bb488adf88dc03032b6ca7df8b1378e7eeab7fa8b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f554df5cdf017c6b554b60ff6790e120072d46369f32d3e04ddea53ec9631f9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f554df5cdf017c6b554b60ff6790e120072d46369f32d3e04ddea53ec9631f9f->enter($__internal_f554df5cdf017c6b554b60ff6790e120072d46369f32d3e04ddea53ec9631f9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_9b594cf518e8e4d1e25967c8c1fd71d15d55165b64ec65c3fd2a47d44e70693a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b594cf518e8e4d1e25967c8c1fd71d15d55165b64ec65c3fd2a47d44e70693a->enter($__internal_9b594cf518e8e4d1e25967c8c1fd71d15d55165b64ec65c3fd2a47d44e70693a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f554df5cdf017c6b554b60ff6790e120072d46369f32d3e04ddea53ec9631f9f->leave($__internal_f554df5cdf017c6b554b60ff6790e120072d46369f32d3e04ddea53ec9631f9f_prof);

        
        $__internal_9b594cf518e8e4d1e25967c8c1fd71d15d55165b64ec65c3fd2a47d44e70693a->leave($__internal_9b594cf518e8e4d1e25967c8c1fd71d15d55165b64ec65c3fd2a47d44e70693a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_569f088674de851660f81085ea5ab3d6ae05f0af83bc202a8ee874fcee44361e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_569f088674de851660f81085ea5ab3d6ae05f0af83bc202a8ee874fcee44361e->enter($__internal_569f088674de851660f81085ea5ab3d6ae05f0af83bc202a8ee874fcee44361e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_9d60feeb453071edf9fe2dc742c64ba02041984f2937f48f15d4824909568bc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d60feeb453071edf9fe2dc742c64ba02041984f2937f48f15d4824909568bc1->enter($__internal_9d60feeb453071edf9fe2dc742c64ba02041984f2937f48f15d4824909568bc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_9d60feeb453071edf9fe2dc742c64ba02041984f2937f48f15d4824909568bc1->leave($__internal_9d60feeb453071edf9fe2dc742c64ba02041984f2937f48f15d4824909568bc1_prof);

        
        $__internal_569f088674de851660f81085ea5ab3d6ae05f0af83bc202a8ee874fcee44361e->leave($__internal_569f088674de851660f81085ea5ab3d6ae05f0af83bc202a8ee874fcee44361e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/Applications/MAMP/htdocs/sf3/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
