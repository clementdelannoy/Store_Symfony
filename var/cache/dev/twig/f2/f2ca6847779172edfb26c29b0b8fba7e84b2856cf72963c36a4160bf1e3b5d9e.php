<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_df2985e665f57c0dcb1a2ffa69bcd522022a8239989c17d3a28cb242cf638a66 extends Twig_Template
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
        $__internal_e80d21f698ca7a5c6238d90c204d6a886f0d11fb3aaed312db3e0c1ee216c775 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e80d21f698ca7a5c6238d90c204d6a886f0d11fb3aaed312db3e0c1ee216c775->enter($__internal_e80d21f698ca7a5c6238d90c204d6a886f0d11fb3aaed312db3e0c1ee216c775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_880bfd9b9ce1f621b7503a09e16b1bef991becb9fab4d9626a72d3d50342e27e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_880bfd9b9ce1f621b7503a09e16b1bef991becb9fab4d9626a72d3d50342e27e->enter($__internal_880bfd9b9ce1f621b7503a09e16b1bef991becb9fab4d9626a72d3d50342e27e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_e80d21f698ca7a5c6238d90c204d6a886f0d11fb3aaed312db3e0c1ee216c775->leave($__internal_e80d21f698ca7a5c6238d90c204d6a886f0d11fb3aaed312db3e0c1ee216c775_prof);

        
        $__internal_880bfd9b9ce1f621b7503a09e16b1bef991becb9fab4d9626a72d3d50342e27e->leave($__internal_880bfd9b9ce1f621b7503a09e16b1bef991becb9fab4d9626a72d3d50342e27e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/Applications/MAMP/htdocs/sf3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
