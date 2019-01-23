<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_71965a36a44a0cbf89b6ea89d9a0f612b72485915cdc97340c53330c51be5ded extends Twig_Template
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
        $__internal_674e825e264165ecce47ebec430a87bca2a89a13421fac92fc0b97a5151174cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_674e825e264165ecce47ebec430a87bca2a89a13421fac92fc0b97a5151174cc->enter($__internal_674e825e264165ecce47ebec430a87bca2a89a13421fac92fc0b97a5151174cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_9269450eb1b29dcc78b9935fddac59726bfbadf3c808f0bdee91ae0d86353a26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9269450eb1b29dcc78b9935fddac59726bfbadf3c808f0bdee91ae0d86353a26->enter($__internal_9269450eb1b29dcc78b9935fddac59726bfbadf3c808f0bdee91ae0d86353a26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_674e825e264165ecce47ebec430a87bca2a89a13421fac92fc0b97a5151174cc->leave($__internal_674e825e264165ecce47ebec430a87bca2a89a13421fac92fc0b97a5151174cc_prof);

        
        $__internal_9269450eb1b29dcc78b9935fddac59726bfbadf3c808f0bdee91ae0d86353a26->leave($__internal_9269450eb1b29dcc78b9935fddac59726bfbadf3c808f0bdee91ae0d86353a26_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/Applications/MAMP/htdocs/sf3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
