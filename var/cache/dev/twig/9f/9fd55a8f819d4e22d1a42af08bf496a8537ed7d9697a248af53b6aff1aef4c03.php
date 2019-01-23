<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_baf14e1f18bfa2d21f266e27f5ae780a320654b1029eae4f561c56587c44efca extends Twig_Template
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
        $__internal_e3f2f9595b611c0de2b256c46170c8738a767014cfaa4d821e227572e9decd4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3f2f9595b611c0de2b256c46170c8738a767014cfaa4d821e227572e9decd4b->enter($__internal_e3f2f9595b611c0de2b256c46170c8738a767014cfaa4d821e227572e9decd4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_3f73cb9aac25d3c0fd670482999593f0fda9a8794b28ecbde09e41c0d3452ef0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f73cb9aac25d3c0fd670482999593f0fda9a8794b28ecbde09e41c0d3452ef0->enter($__internal_3f73cb9aac25d3c0fd670482999593f0fda9a8794b28ecbde09e41c0d3452ef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_e3f2f9595b611c0de2b256c46170c8738a767014cfaa4d821e227572e9decd4b->leave($__internal_e3f2f9595b611c0de2b256c46170c8738a767014cfaa4d821e227572e9decd4b_prof);

        
        $__internal_3f73cb9aac25d3c0fd670482999593f0fda9a8794b28ecbde09e41c0d3452ef0->leave($__internal_3f73cb9aac25d3c0fd670482999593f0fda9a8794b28ecbde09e41c0d3452ef0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/Applications/MAMP/htdocs/sf3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
