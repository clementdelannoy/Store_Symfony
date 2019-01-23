<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_993917c48ca918f86b830c3ddef5bb97c92f399305799a1bae14d5ef9da2bdc0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9f295d8c654ae164ab30653576ccc8408a159b25f5699ec826d9363762f941a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f295d8c654ae164ab30653576ccc8408a159b25f5699ec826d9363762f941a2->enter($__internal_9f295d8c654ae164ab30653576ccc8408a159b25f5699ec826d9363762f941a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_95e3a2dffcb526a0285c5769ec5f894e730689d4e3a36dff517c6258a1a4b26b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95e3a2dffcb526a0285c5769ec5f894e730689d4e3a36dff517c6258a1a4b26b->enter($__internal_95e3a2dffcb526a0285c5769ec5f894e730689d4e3a36dff517c6258a1a4b26b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f295d8c654ae164ab30653576ccc8408a159b25f5699ec826d9363762f941a2->leave($__internal_9f295d8c654ae164ab30653576ccc8408a159b25f5699ec826d9363762f941a2_prof);

        
        $__internal_95e3a2dffcb526a0285c5769ec5f894e730689d4e3a36dff517c6258a1a4b26b->leave($__internal_95e3a2dffcb526a0285c5769ec5f894e730689d4e3a36dff517c6258a1a4b26b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9ab1b36db4fd0b07e1d1a6338e42f99d216bf9d54f4bdfba4fe567e68641f466 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ab1b36db4fd0b07e1d1a6338e42f99d216bf9d54f4bdfba4fe567e68641f466->enter($__internal_9ab1b36db4fd0b07e1d1a6338e42f99d216bf9d54f4bdfba4fe567e68641f466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_1866e3a8443867da39a57e43e88cc9b094a634840b7b99b838a10c294fc5401f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1866e3a8443867da39a57e43e88cc9b094a634840b7b99b838a10c294fc5401f->enter($__internal_1866e3a8443867da39a57e43e88cc9b094a634840b7b99b838a10c294fc5401f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1866e3a8443867da39a57e43e88cc9b094a634840b7b99b838a10c294fc5401f->leave($__internal_1866e3a8443867da39a57e43e88cc9b094a634840b7b99b838a10c294fc5401f_prof);

        
        $__internal_9ab1b36db4fd0b07e1d1a6338e42f99d216bf9d54f4bdfba4fe567e68641f466->leave($__internal_9ab1b36db4fd0b07e1d1a6338e42f99d216bf9d54f4bdfba4fe567e68641f466_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f355db257f06cd91586266dfefc008bc8ce938326e54c8f219df24cf4374898f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f355db257f06cd91586266dfefc008bc8ce938326e54c8f219df24cf4374898f->enter($__internal_f355db257f06cd91586266dfefc008bc8ce938326e54c8f219df24cf4374898f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_894079233f602733530bafa6d2ef981227282e1d6df807960e8dd6a028156926 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_894079233f602733530bafa6d2ef981227282e1d6df807960e8dd6a028156926->enter($__internal_894079233f602733530bafa6d2ef981227282e1d6df807960e8dd6a028156926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_894079233f602733530bafa6d2ef981227282e1d6df807960e8dd6a028156926->leave($__internal_894079233f602733530bafa6d2ef981227282e1d6df807960e8dd6a028156926_prof);

        
        $__internal_f355db257f06cd91586266dfefc008bc8ce938326e54c8f219df24cf4374898f->leave($__internal_f355db257f06cd91586266dfefc008bc8ce938326e54c8f219df24cf4374898f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2f4b25719da27e9df0388af500fda06f1ee2050fb504974b1444ed44e3cfecd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f4b25719da27e9df0388af500fda06f1ee2050fb504974b1444ed44e3cfecd0->enter($__internal_2f4b25719da27e9df0388af500fda06f1ee2050fb504974b1444ed44e3cfecd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7102b5aa9da3362009f1086f4b0731a602ad056b8141c162de320e6c8f2b3e32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7102b5aa9da3362009f1086f4b0731a602ad056b8141c162de320e6c8f2b3e32->enter($__internal_7102b5aa9da3362009f1086f4b0731a602ad056b8141c162de320e6c8f2b3e32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7102b5aa9da3362009f1086f4b0731a602ad056b8141c162de320e6c8f2b3e32->leave($__internal_7102b5aa9da3362009f1086f4b0731a602ad056b8141c162de320e6c8f2b3e32_prof);

        
        $__internal_2f4b25719da27e9df0388af500fda06f1ee2050fb504974b1444ed44e3cfecd0->leave($__internal_2f4b25719da27e9df0388af500fda06f1ee2050fb504974b1444ed44e3cfecd0_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Applications/MAMP/htdocs/sf3/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
