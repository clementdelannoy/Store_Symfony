<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_92aa9db07e4226b6d58a291200a855443e639981635f7bb8b114fb16e88236e2 extends Twig_Template
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
        $__internal_f5e47e59ac37fc62c3dd8c1d582cd1844262d819faa785cc27b87c14f2e5300b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5e47e59ac37fc62c3dd8c1d582cd1844262d819faa785cc27b87c14f2e5300b->enter($__internal_f5e47e59ac37fc62c3dd8c1d582cd1844262d819faa785cc27b87c14f2e5300b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_1e14614d6a5ae99d930d9497887cfc8a91cbd9ae7e07eed849424322941c83d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e14614d6a5ae99d930d9497887cfc8a91cbd9ae7e07eed849424322941c83d1->enter($__internal_1e14614d6a5ae99d930d9497887cfc8a91cbd9ae7e07eed849424322941c83d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_f5e47e59ac37fc62c3dd8c1d582cd1844262d819faa785cc27b87c14f2e5300b->leave($__internal_f5e47e59ac37fc62c3dd8c1d582cd1844262d819faa785cc27b87c14f2e5300b_prof);

        
        $__internal_1e14614d6a5ae99d930d9497887cfc8a91cbd9ae7e07eed849424322941c83d1->leave($__internal_1e14614d6a5ae99d930d9497887cfc8a91cbd9ae7e07eed849424322941c83d1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "/Applications/MAMP/htdocs/sf3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
