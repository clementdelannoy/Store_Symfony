<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_4f07e3c281c3580a06da25cb1bfbad02fcd253155a1264545761af8283eaa1e0 extends Twig_Template
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
        $__internal_0280430ba097dec9e65e38483123fd0819def8a650f8c630e7cf73230a20a79a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0280430ba097dec9e65e38483123fd0819def8a650f8c630e7cf73230a20a79a->enter($__internal_0280430ba097dec9e65e38483123fd0819def8a650f8c630e7cf73230a20a79a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_0b1955622ffec284195e51ad1c46cab315e9f570e6cee5e641fe460958a4ad34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b1955622ffec284195e51ad1c46cab315e9f570e6cee5e641fe460958a4ad34->enter($__internal_0b1955622ffec284195e51ad1c46cab315e9f570e6cee5e641fe460958a4ad34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_0280430ba097dec9e65e38483123fd0819def8a650f8c630e7cf73230a20a79a->leave($__internal_0280430ba097dec9e65e38483123fd0819def8a650f8c630e7cf73230a20a79a_prof);

        
        $__internal_0b1955622ffec284195e51ad1c46cab315e9f570e6cee5e641fe460958a4ad34->leave($__internal_0b1955622ffec284195e51ad1c46cab315e9f570e6cee5e641fe460958a4ad34_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/Applications/MAMP/htdocs/sf3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
