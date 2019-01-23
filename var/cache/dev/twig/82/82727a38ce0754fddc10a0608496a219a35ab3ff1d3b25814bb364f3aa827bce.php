<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_ce7bc86acbcc82d0f881c635080c5412ae1a000a38287b31a0eb8ade641e55ef extends Twig_Template
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
        $__internal_4c38e15436dde8006221e451cd7905236bb4d3e47ab6f2a8f6072f82a37d9b4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c38e15436dde8006221e451cd7905236bb4d3e47ab6f2a8f6072f82a37d9b4b->enter($__internal_4c38e15436dde8006221e451cd7905236bb4d3e47ab6f2a8f6072f82a37d9b4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_5df5604774f8229b7f97ad31c384b1f1d782ec48062739b165797bad19b764d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5df5604774f8229b7f97ad31c384b1f1d782ec48062739b165797bad19b764d1->enter($__internal_5df5604774f8229b7f97ad31c384b1f1d782ec48062739b165797bad19b764d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_4c38e15436dde8006221e451cd7905236bb4d3e47ab6f2a8f6072f82a37d9b4b->leave($__internal_4c38e15436dde8006221e451cd7905236bb4d3e47ab6f2a8f6072f82a37d9b4b_prof);

        
        $__internal_5df5604774f8229b7f97ad31c384b1f1d782ec48062739b165797bad19b764d1->leave($__internal_5df5604774f8229b7f97ad31c384b1f1d782ec48062739b165797bad19b764d1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/Applications/MAMP/htdocs/sf3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
