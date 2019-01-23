<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_6d3ec270213b3cf0f526f13403d49292642363ea3deaac8bd357e927c6365216 extends Twig_Template
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
        $__internal_a650529c5eb2aa65903513f1ea9634b0522eeb9fad93808c14cb35b2baabc85d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a650529c5eb2aa65903513f1ea9634b0522eeb9fad93808c14cb35b2baabc85d->enter($__internal_a650529c5eb2aa65903513f1ea9634b0522eeb9fad93808c14cb35b2baabc85d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_17e5aaefde9e32a06d98d326d261bf68697b0b74cb65bbb4cecfbdbf23b69396 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17e5aaefde9e32a06d98d326d261bf68697b0b74cb65bbb4cecfbdbf23b69396->enter($__internal_17e5aaefde9e32a06d98d326d261bf68697b0b74cb65bbb4cecfbdbf23b69396_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_a650529c5eb2aa65903513f1ea9634b0522eeb9fad93808c14cb35b2baabc85d->leave($__internal_a650529c5eb2aa65903513f1ea9634b0522eeb9fad93808c14cb35b2baabc85d_prof);

        
        $__internal_17e5aaefde9e32a06d98d326d261bf68697b0b74cb65bbb4cecfbdbf23b69396->leave($__internal_17e5aaefde9e32a06d98d326d261bf68697b0b74cb65bbb4cecfbdbf23b69396_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/Applications/MAMP/htdocs/sf3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
