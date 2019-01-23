<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_2c660cb7a0f7d45756af94732254132fe7cc4fa5e6f0ed24505da35ee5c6e1db extends Twig_Template
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
        $__internal_fb5c95b590623cae3d42cec4578ff443ba880104045ce1b073c202f0171e7f6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb5c95b590623cae3d42cec4578ff443ba880104045ce1b073c202f0171e7f6f->enter($__internal_fb5c95b590623cae3d42cec4578ff443ba880104045ce1b073c202f0171e7f6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_aca15f8c56c13e293ddfbf6f39da4e8877fb003f9af02333191124ec94276e0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aca15f8c56c13e293ddfbf6f39da4e8877fb003f9af02333191124ec94276e0f->enter($__internal_aca15f8c56c13e293ddfbf6f39da4e8877fb003f9af02333191124ec94276e0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_fb5c95b590623cae3d42cec4578ff443ba880104045ce1b073c202f0171e7f6f->leave($__internal_fb5c95b590623cae3d42cec4578ff443ba880104045ce1b073c202f0171e7f6f_prof);

        
        $__internal_aca15f8c56c13e293ddfbf6f39da4e8877fb003f9af02333191124ec94276e0f->leave($__internal_aca15f8c56c13e293ddfbf6f39da4e8877fb003f9af02333191124ec94276e0f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Applications/MAMP/htdocs/sf3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
