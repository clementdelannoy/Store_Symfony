<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_174a9ab757e1a0e251880b4a86f1e5d368f52af1903e91e9237b27d09059b5df extends Twig_Template
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
        $__internal_9ae14da174558f130ea05772481365378c3b02a24912eb56bfb47bae79301236 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ae14da174558f130ea05772481365378c3b02a24912eb56bfb47bae79301236->enter($__internal_9ae14da174558f130ea05772481365378c3b02a24912eb56bfb47bae79301236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_0a3bba1b2ae9511d5fdf88bef7c53f4b08ed70ac26f1a12afd905fa58e7b170f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a3bba1b2ae9511d5fdf88bef7c53f4b08ed70ac26f1a12afd905fa58e7b170f->enter($__internal_0a3bba1b2ae9511d5fdf88bef7c53f4b08ed70ac26f1a12afd905fa58e7b170f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_9ae14da174558f130ea05772481365378c3b02a24912eb56bfb47bae79301236->leave($__internal_9ae14da174558f130ea05772481365378c3b02a24912eb56bfb47bae79301236_prof);

        
        $__internal_0a3bba1b2ae9511d5fdf88bef7c53f4b08ed70ac26f1a12afd905fa58e7b170f->leave($__internal_0a3bba1b2ae9511d5fdf88bef7c53f4b08ed70ac26f1a12afd905fa58e7b170f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/Applications/MAMP/htdocs/sf3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
