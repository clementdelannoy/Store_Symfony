<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_3cd2122710a416d1ac12299c364f2d16e676cdbf92fae834c7b57f14c1e7f25c extends Twig_Template
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
        $__internal_29965351ecc6164c6bf772aac7bc7a14a1b1c5cf5a9a8a95aff8cfa964a0c71e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29965351ecc6164c6bf772aac7bc7a14a1b1c5cf5a9a8a95aff8cfa964a0c71e->enter($__internal_29965351ecc6164c6bf772aac7bc7a14a1b1c5cf5a9a8a95aff8cfa964a0c71e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_a028684c9112f0833e7e0daed1030e9dd6c231c865081be42d8630042bbc4625 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a028684c9112f0833e7e0daed1030e9dd6c231c865081be42d8630042bbc4625->enter($__internal_a028684c9112f0833e7e0daed1030e9dd6c231c865081be42d8630042bbc4625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_29965351ecc6164c6bf772aac7bc7a14a1b1c5cf5a9a8a95aff8cfa964a0c71e->leave($__internal_29965351ecc6164c6bf772aac7bc7a14a1b1c5cf5a9a8a95aff8cfa964a0c71e_prof);

        
        $__internal_a028684c9112f0833e7e0daed1030e9dd6c231c865081be42d8630042bbc4625->leave($__internal_a028684c9112f0833e7e0daed1030e9dd6c231c865081be42d8630042bbc4625_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/Applications/MAMP/htdocs/sf3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
