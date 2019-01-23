<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_b77545ef997ed6bb04b0e3de47a81ff1a8c2a953a9a94da4617ea1a8682e45f7 extends Twig_Template
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
        $__internal_669075884e94e52a7776cfc526c648dc062f07960d0820736c7e0ef7528215dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_669075884e94e52a7776cfc526c648dc062f07960d0820736c7e0ef7528215dc->enter($__internal_669075884e94e52a7776cfc526c648dc062f07960d0820736c7e0ef7528215dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_c66c423e951809c03e68e35b4b7870a00b9b6e98f44fabab60c5792b6e20155c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c66c423e951809c03e68e35b4b7870a00b9b6e98f44fabab60c5792b6e20155c->enter($__internal_c66c423e951809c03e68e35b4b7870a00b9b6e98f44fabab60c5792b6e20155c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_669075884e94e52a7776cfc526c648dc062f07960d0820736c7e0ef7528215dc->leave($__internal_669075884e94e52a7776cfc526c648dc062f07960d0820736c7e0ef7528215dc_prof);

        
        $__internal_c66c423e951809c03e68e35b4b7870a00b9b6e98f44fabab60c5792b6e20155c->leave($__internal_c66c423e951809c03e68e35b4b7870a00b9b6e98f44fabab60c5792b6e20155c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/Applications/MAMP/htdocs/sf3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
