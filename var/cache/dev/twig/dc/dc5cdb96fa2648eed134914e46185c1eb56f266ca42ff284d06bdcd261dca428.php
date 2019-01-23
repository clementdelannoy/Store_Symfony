<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_e427ee205a7acacac0c0fe2c282c552d4da47483f8137c1566b3885ac07131bb extends Twig_Template
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
        $__internal_42db28e338f27dfbbe71dbd065e87a5e417ef66d2024fd8d094a04ae67fac438 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42db28e338f27dfbbe71dbd065e87a5e417ef66d2024fd8d094a04ae67fac438->enter($__internal_42db28e338f27dfbbe71dbd065e87a5e417ef66d2024fd8d094a04ae67fac438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_f69992f02f86849e4750a09b5fb638cb78b6020c84e60d935c999dda19470829 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f69992f02f86849e4750a09b5fb638cb78b6020c84e60d935c999dda19470829->enter($__internal_f69992f02f86849e4750a09b5fb638cb78b6020c84e60d935c999dda19470829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_42db28e338f27dfbbe71dbd065e87a5e417ef66d2024fd8d094a04ae67fac438->leave($__internal_42db28e338f27dfbbe71dbd065e87a5e417ef66d2024fd8d094a04ae67fac438_prof);

        
        $__internal_f69992f02f86849e4750a09b5fb638cb78b6020c84e60d935c999dda19470829->leave($__internal_f69992f02f86849e4750a09b5fb638cb78b6020c84e60d935c999dda19470829_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/Applications/MAMP/htdocs/sf3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
