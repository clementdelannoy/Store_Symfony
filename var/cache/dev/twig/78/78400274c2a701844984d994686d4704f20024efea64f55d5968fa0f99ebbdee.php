<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_9da8f63ca8b1eab5570cdbed667747734f2af0e6c8e7f4038b6c3825760a2410 extends Twig_Template
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
        $__internal_1cc70c87980be969f37a6268388584c98cbbf79348b9b9b9d94508a7aa37b608 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cc70c87980be969f37a6268388584c98cbbf79348b9b9b9d94508a7aa37b608->enter($__internal_1cc70c87980be969f37a6268388584c98cbbf79348b9b9b9d94508a7aa37b608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_163b5bfd31f00758f11df6856f7d1bba2bf7b4330832e64587f755a619fe8769 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_163b5bfd31f00758f11df6856f7d1bba2bf7b4330832e64587f755a619fe8769->enter($__internal_163b5bfd31f00758f11df6856f7d1bba2bf7b4330832e64587f755a619fe8769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_1cc70c87980be969f37a6268388584c98cbbf79348b9b9b9d94508a7aa37b608->leave($__internal_1cc70c87980be969f37a6268388584c98cbbf79348b9b9b9d94508a7aa37b608_prof);

        
        $__internal_163b5bfd31f00758f11df6856f7d1bba2bf7b4330832e64587f755a619fe8769->leave($__internal_163b5bfd31f00758f11df6856f7d1bba2bf7b4330832e64587f755a619fe8769_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Applications/MAMP/htdocs/sf3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
