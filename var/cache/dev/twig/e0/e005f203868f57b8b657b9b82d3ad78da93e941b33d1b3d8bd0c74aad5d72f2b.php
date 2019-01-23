<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_6623a99340359569162e169422a335c1046564ca971a4725af07e209bc3e3b00 extends Twig_Template
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
        $__internal_1bd82915b42c9a61585ea07fa88a17d4fa2fa505adf48e2be0c0a6958436f5bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bd82915b42c9a61585ea07fa88a17d4fa2fa505adf48e2be0c0a6958436f5bf->enter($__internal_1bd82915b42c9a61585ea07fa88a17d4fa2fa505adf48e2be0c0a6958436f5bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_a60b783cb37f75881e416fd41dbe6c98253d2a2d8b54c1368807d3d94a3b0d80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a60b783cb37f75881e416fd41dbe6c98253d2a2d8b54c1368807d3d94a3b0d80->enter($__internal_a60b783cb37f75881e416fd41dbe6c98253d2a2d8b54c1368807d3d94a3b0d80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_1bd82915b42c9a61585ea07fa88a17d4fa2fa505adf48e2be0c0a6958436f5bf->leave($__internal_1bd82915b42c9a61585ea07fa88a17d4fa2fa505adf48e2be0c0a6958436f5bf_prof);

        
        $__internal_a60b783cb37f75881e416fd41dbe6c98253d2a2d8b54c1368807d3d94a3b0d80->leave($__internal_a60b783cb37f75881e416fd41dbe6c98253d2a2d8b54c1368807d3d94a3b0d80_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/Applications/MAMP/htdocs/sf3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
