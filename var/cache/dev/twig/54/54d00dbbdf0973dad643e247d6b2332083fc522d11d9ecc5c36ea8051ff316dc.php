<?php

/* @Framework/Form/color_widget.html.php */
class __TwigTemplate_a31bc568f520fba15a837bd35c367476c0fc929edbf8ea58155a7fc4d85649e4 extends Twig_Template
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
        $__internal_80d1168a7af554f8be341f40c17414bd850567c5a1aa501a24effe41d82e4f60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80d1168a7af554f8be341f40c17414bd850567c5a1aa501a24effe41d82e4f60->enter($__internal_80d1168a7af554f8be341f40c17414bd850567c5a1aa501a24effe41d82e4f60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/color_widget.html.php"));

        $__internal_76e432e1107c9c0ddd2651782494c0191ab753113c83aac0f335a951ca9b3969 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76e432e1107c9c0ddd2651782494c0191ab753113c83aac0f335a951ca9b3969->enter($__internal_76e432e1107c9c0ddd2651782494c0191ab753113c83aac0f335a951ca9b3969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/color_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'color'));
";
        
        $__internal_80d1168a7af554f8be341f40c17414bd850567c5a1aa501a24effe41d82e4f60->leave($__internal_80d1168a7af554f8be341f40c17414bd850567c5a1aa501a24effe41d82e4f60_prof);

        
        $__internal_76e432e1107c9c0ddd2651782494c0191ab753113c83aac0f335a951ca9b3969->leave($__internal_76e432e1107c9c0ddd2651782494c0191ab753113c83aac0f335a951ca9b3969_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/color_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'color'));
", "@Framework/Form/color_widget.html.php", "/Applications/MAMP/htdocs/sf3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/color_widget.html.php");
    }
}
