<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_5724d3f3ccdb7dc8a131763dc3ddfa3401f8e3666e5b03bd6b6162176e2d0f4d extends Twig_Template
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
        $__internal_dfc33f6acd15f6fb709ca18b4dd3d440ee1202a1ffbdf92f70fff1bbebc6b1d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfc33f6acd15f6fb709ca18b4dd3d440ee1202a1ffbdf92f70fff1bbebc6b1d0->enter($__internal_dfc33f6acd15f6fb709ca18b4dd3d440ee1202a1ffbdf92f70fff1bbebc6b1d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_8c016199306c422ec29eb887f7372240969b197b94119b07e1c8a2790917cdf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c016199306c422ec29eb887f7372240969b197b94119b07e1c8a2790917cdf7->enter($__internal_8c016199306c422ec29eb887f7372240969b197b94119b07e1c8a2790917cdf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_dfc33f6acd15f6fb709ca18b4dd3d440ee1202a1ffbdf92f70fff1bbebc6b1d0->leave($__internal_dfc33f6acd15f6fb709ca18b4dd3d440ee1202a1ffbdf92f70fff1bbebc6b1d0_prof);

        
        $__internal_8c016199306c422ec29eb887f7372240969b197b94119b07e1c8a2790917cdf7->leave($__internal_8c016199306c422ec29eb887f7372240969b197b94119b07e1c8a2790917cdf7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/Applications/MAMP/htdocs/sf3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
