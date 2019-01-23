<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_b70bf1d6393b343b1651d4ae18209ba1659fe280f65134ffd4ff8d16a4149b93 extends Twig_Template
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
        $__internal_fb4e596f8aeed632e919d65e1038e9ca133f9557aaf604803ee36ad0cc464645 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb4e596f8aeed632e919d65e1038e9ca133f9557aaf604803ee36ad0cc464645->enter($__internal_fb4e596f8aeed632e919d65e1038e9ca133f9557aaf604803ee36ad0cc464645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_877b5e7267706344cac702c871ea8d677d7481cd8380687bd37ef197818022f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_877b5e7267706344cac702c871ea8d677d7481cd8380687bd37ef197818022f3->enter($__internal_877b5e7267706344cac702c871ea8d677d7481cd8380687bd37ef197818022f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_fb4e596f8aeed632e919d65e1038e9ca133f9557aaf604803ee36ad0cc464645->leave($__internal_fb4e596f8aeed632e919d65e1038e9ca133f9557aaf604803ee36ad0cc464645_prof);

        
        $__internal_877b5e7267706344cac702c871ea8d677d7481cd8380687bd37ef197818022f3->leave($__internal_877b5e7267706344cac702c871ea8d677d7481cd8380687bd37ef197818022f3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/Applications/MAMP/htdocs/sf3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
