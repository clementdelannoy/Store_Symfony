<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_9998bb3589cf4dde0eeb6d09b129174f6f1d9bd3ad25bc7e2709185d110cf5d4 extends Twig_Template
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
        $__internal_e218bdce8486a998983923a2f5d107c00f7c61e841ccd20a68025d7f12c06ca8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e218bdce8486a998983923a2f5d107c00f7c61e841ccd20a68025d7f12c06ca8->enter($__internal_e218bdce8486a998983923a2f5d107c00f7c61e841ccd20a68025d7f12c06ca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_1ef4f3ae6fbd71c985a4ae8162a27fd0a78abef32904022b123a8cb45570600e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ef4f3ae6fbd71c985a4ae8162a27fd0a78abef32904022b123a8cb45570600e->enter($__internal_1ef4f3ae6fbd71c985a4ae8162a27fd0a78abef32904022b123a8cb45570600e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_e218bdce8486a998983923a2f5d107c00f7c61e841ccd20a68025d7f12c06ca8->leave($__internal_e218bdce8486a998983923a2f5d107c00f7c61e841ccd20a68025d7f12c06ca8_prof);

        
        $__internal_1ef4f3ae6fbd71c985a4ae8162a27fd0a78abef32904022b123a8cb45570600e->leave($__internal_1ef4f3ae6fbd71c985a4ae8162a27fd0a78abef32904022b123a8cb45570600e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/Applications/MAMP/htdocs/sf3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
