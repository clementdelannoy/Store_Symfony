<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_73b838bc8ca3ed0aa8c1a2313614b15ee5161fc3af229c46f6d57c18b485eaa1 extends Twig_Template
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
        $__internal_fa73b2cf460f66da052d9e06f8b2c5f73854a78bd7197c5b7195264d42c7022d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa73b2cf460f66da052d9e06f8b2c5f73854a78bd7197c5b7195264d42c7022d->enter($__internal_fa73b2cf460f66da052d9e06f8b2c5f73854a78bd7197c5b7195264d42c7022d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_84a408562661a01358dee90f73c3fecf455c1a63098da238c433f1f625a1c5a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84a408562661a01358dee90f73c3fecf455c1a63098da238c433f1f625a1c5a2->enter($__internal_84a408562661a01358dee90f73c3fecf455c1a63098da238c433f1f625a1c5a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_fa73b2cf460f66da052d9e06f8b2c5f73854a78bd7197c5b7195264d42c7022d->leave($__internal_fa73b2cf460f66da052d9e06f8b2c5f73854a78bd7197c5b7195264d42c7022d_prof);

        
        $__internal_84a408562661a01358dee90f73c3fecf455c1a63098da238c433f1f625a1c5a2->leave($__internal_84a408562661a01358dee90f73c3fecf455c1a63098da238c433f1f625a1c5a2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Applications/MAMP/htdocs/sf3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
