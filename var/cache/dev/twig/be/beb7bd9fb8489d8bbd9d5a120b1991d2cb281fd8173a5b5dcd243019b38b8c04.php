<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_d5ee645282afa89d39e328f7fcb13150195c9f216bbef0a6ee09d59d0fd01910 extends Twig_Template
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
        $__internal_1ec2ff39355d87f39d594785123b331dde746e09eb6206f9ed3780d8188c0790 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ec2ff39355d87f39d594785123b331dde746e09eb6206f9ed3780d8188c0790->enter($__internal_1ec2ff39355d87f39d594785123b331dde746e09eb6206f9ed3780d8188c0790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_37cd00f76a9631dcda0ad722c5565c1c23c5094cfe8eeeea602d90a1e8a5970b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37cd00f76a9631dcda0ad722c5565c1c23c5094cfe8eeeea602d90a1e8a5970b->enter($__internal_37cd00f76a9631dcda0ad722c5565c1c23c5094cfe8eeeea602d90a1e8a5970b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_1ec2ff39355d87f39d594785123b331dde746e09eb6206f9ed3780d8188c0790->leave($__internal_1ec2ff39355d87f39d594785123b331dde746e09eb6206f9ed3780d8188c0790_prof);

        
        $__internal_37cd00f76a9631dcda0ad722c5565c1c23c5094cfe8eeeea602d90a1e8a5970b->leave($__internal_37cd00f76a9631dcda0ad722c5565c1c23c5094cfe8eeeea602d90a1e8a5970b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/Applications/MAMP/htdocs/sf3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
