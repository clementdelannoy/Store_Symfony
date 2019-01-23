<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_f56c54489127b9151e650128368efef74f5e669d0df713dc845d7dc1e226cdcf extends Twig_Template
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
        $__internal_ffcc6de5ce8d3ab31a7edda64bbb28e7e9793b2d2234cd2cbadeae7a6775ca15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffcc6de5ce8d3ab31a7edda64bbb28e7e9793b2d2234cd2cbadeae7a6775ca15->enter($__internal_ffcc6de5ce8d3ab31a7edda64bbb28e7e9793b2d2234cd2cbadeae7a6775ca15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_c5a19e8890463b62b10c7bba0f6737cca88a8484ad7a98022c60add06846a2b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5a19e8890463b62b10c7bba0f6737cca88a8484ad7a98022c60add06846a2b0->enter($__internal_c5a19e8890463b62b10c7bba0f6737cca88a8484ad7a98022c60add06846a2b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_ffcc6de5ce8d3ab31a7edda64bbb28e7e9793b2d2234cd2cbadeae7a6775ca15->leave($__internal_ffcc6de5ce8d3ab31a7edda64bbb28e7e9793b2d2234cd2cbadeae7a6775ca15_prof);

        
        $__internal_c5a19e8890463b62b10c7bba0f6737cca88a8484ad7a98022c60add06846a2b0->leave($__internal_c5a19e8890463b62b10c7bba0f6737cca88a8484ad7a98022c60add06846a2b0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/Applications/MAMP/htdocs/sf3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
