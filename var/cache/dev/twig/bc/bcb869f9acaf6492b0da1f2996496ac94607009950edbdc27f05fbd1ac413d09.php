<?php

/* bootstrap_4_horizontal_layout.html.twig */
class __TwigTemplate_b95278dc29456adbf40314293151532a695f44576efc8c1f5eeaf3d005896cf1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_4_layout.html.twig", "bootstrap_4_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_4_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'fieldset_form_row' => array($this, 'block_fieldset_form_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7803789bd888d1a35fa46940edfe8a47e53e26a8bc34eb316dfad4cbbe2a38f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7803789bd888d1a35fa46940edfe8a47e53e26a8bc34eb316dfad4cbbe2a38f2->enter($__internal_7803789bd888d1a35fa46940edfe8a47e53e26a8bc34eb316dfad4cbbe2a38f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        $__internal_f204a97d8ced57e4c211e8b3d5ee972e2eb2cc6ceed7b0cefc00da08569535e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f204a97d8ced57e4c211e8b3d5ee972e2eb2cc6ceed7b0cefc00da08569535e2->enter($__internal_f204a97d8ced57e4c211e8b3d5ee972e2eb2cc6ceed7b0cefc00da08569535e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_label', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 20
        echo "
";
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('form_row', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('fieldset_form_row', $context, $blocks);
        // line 48
        echo "
";
        // line 49
        $this->displayBlock('submit_row', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('reset_row', $context, $blocks);
        // line 66
        echo "
";
        // line 67
        $this->displayBlock('form_group_class', $context, $blocks);
        // line 70
        echo "
";
        // line 71
        $this->displayBlock('checkbox_row', $context, $blocks);
        
        $__internal_7803789bd888d1a35fa46940edfe8a47e53e26a8bc34eb316dfad4cbbe2a38f2->leave($__internal_7803789bd888d1a35fa46940edfe8a47e53e26a8bc34eb316dfad4cbbe2a38f2_prof);

        
        $__internal_f204a97d8ced57e4c211e8b3d5ee972e2eb2cc6ceed7b0cefc00da08569535e2->leave($__internal_f204a97d8ced57e4c211e8b3d5ee972e2eb2cc6ceed7b0cefc00da08569535e2_prof);

    }

    // line 5
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_a5fe2409da5bde016b5fd353c2bcc40358d5d2d23e8c0dd8ec9c45b9644afc5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5fe2409da5bde016b5fd353c2bcc40358d5d2d23e8c0dd8ec9c45b9644afc5a->enter($__internal_a5fe2409da5bde016b5fd353c2bcc40358d5d2d23e8c0dd8ec9c45b9644afc5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_26d4bb37824fa7cb0ef71530ce593cfe2497f700da254d0c8d18b46e9e40e766 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26d4bb37824fa7cb0ef71530ce593cfe2497f700da254d0c8d18b46e9e40e766->enter($__internal_26d4bb37824fa7cb0ef71530ce593cfe2497f700da254d0c8d18b46e9e40e766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 6
        if ((($context["label"] ?? $this->getContext($context, "label")) === false)) {
            // line 7
            echo "<div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>";
        } else {
            // line 9
            if (( !array_key_exists("expanded", $context) ||  !($context["expanded"] ?? $this->getContext($context, "expanded")))) {
                // line 10
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " col-form-label"))));
            }
            // line 12
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 13
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        
        $__internal_26d4bb37824fa7cb0ef71530ce593cfe2497f700da254d0c8d18b46e9e40e766->leave($__internal_26d4bb37824fa7cb0ef71530ce593cfe2497f700da254d0c8d18b46e9e40e766_prof);

        
        $__internal_a5fe2409da5bde016b5fd353c2bcc40358d5d2d23e8c0dd8ec9c45b9644afc5a->leave($__internal_a5fe2409da5bde016b5fd353c2bcc40358d5d2d23e8c0dd8ec9c45b9644afc5a_prof);

    }

    // line 17
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_09d6ad7968e9332497fcaf5b7e7f2eaede2e42326131b112a10f82a5c7970d4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09d6ad7968e9332497fcaf5b7e7f2eaede2e42326131b112a10f82a5c7970d4f->enter($__internal_09d6ad7968e9332497fcaf5b7e7f2eaede2e42326131b112a10f82a5c7970d4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_ba22d164fc91bc1478ac89c2d7ae482057eb0e0eb2bf275898a22d586fbd9998 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba22d164fc91bc1478ac89c2d7ae482057eb0e0eb2bf275898a22d586fbd9998->enter($__internal_ba22d164fc91bc1478ac89c2d7ae482057eb0e0eb2bf275898a22d586fbd9998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 18
        echo "col-sm-2";
        
        $__internal_ba22d164fc91bc1478ac89c2d7ae482057eb0e0eb2bf275898a22d586fbd9998->leave($__internal_ba22d164fc91bc1478ac89c2d7ae482057eb0e0eb2bf275898a22d586fbd9998_prof);

        
        $__internal_09d6ad7968e9332497fcaf5b7e7f2eaede2e42326131b112a10f82a5c7970d4f->leave($__internal_09d6ad7968e9332497fcaf5b7e7f2eaede2e42326131b112a10f82a5c7970d4f_prof);

    }

    // line 23
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_f3a04a62f2090e9b5cbded44e3013dc3ac609cded53df50b5d6ae6111c9825ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3a04a62f2090e9b5cbded44e3013dc3ac609cded53df50b5d6ae6111c9825ef->enter($__internal_f3a04a62f2090e9b5cbded44e3013dc3ac609cded53df50b5d6ae6111c9825ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_64b81348ec2fafcfb7027be9d40749292a1edac493cb2d168876f391767ab0f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64b81348ec2fafcfb7027be9d40749292a1edac493cb2d168876f391767ab0f7->enter($__internal_64b81348ec2fafcfb7027be9d40749292a1edac493cb2d168876f391767ab0f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 24
        if ((array_key_exists("expanded", $context) && ($context["expanded"] ?? $this->getContext($context, "expanded")))) {
            // line 25
            $this->displayBlock("fieldset_form_row", $context, $blocks);
        } else {
            // line 27
            echo "<div class=\"form-group row";
            if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
                echo " is-invalid";
            }
            echo "\">";
            // line 28
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
            // line 29
            echo "<div class=\"";
            $this->displayBlock("form_group_class", $context, $blocks);
            echo "\">";
            // line 30
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
            // line 31
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 32
            echo "</div>
    ";
            // line 33
            echo "</div>";
        }
        
        $__internal_64b81348ec2fafcfb7027be9d40749292a1edac493cb2d168876f391767ab0f7->leave($__internal_64b81348ec2fafcfb7027be9d40749292a1edac493cb2d168876f391767ab0f7_prof);

        
        $__internal_f3a04a62f2090e9b5cbded44e3013dc3ac609cded53df50b5d6ae6111c9825ef->leave($__internal_f3a04a62f2090e9b5cbded44e3013dc3ac609cded53df50b5d6ae6111c9825ef_prof);

    }

    // line 37
    public function block_fieldset_form_row($context, array $blocks = array())
    {
        $__internal_ca393d830a2839ed7c9f018409ddc4647e3104993497f835fe7f9561c978f520 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca393d830a2839ed7c9f018409ddc4647e3104993497f835fe7f9561c978f520->enter($__internal_ca393d830a2839ed7c9f018409ddc4647e3104993497f835fe7f9561c978f520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        $__internal_457448e3db65ab7f63211d51355f9f8ce3339f558940ab4241dde6f91b537d6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_457448e3db65ab7f63211d51355f9f8ce3339f558940ab4241dde6f91b537d6b->enter($__internal_457448e3db65ab7f63211d51355f9f8ce3339f558940ab4241dde6f91b537d6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        // line 38
        echo "<fieldset class=\"form-group\">
        <div class=\"row";
        // line 39
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " is-invalid";
        }
        echo "\">";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 41
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 44
        echo "</div>
        </div>
";
        // line 46
        echo "</fieldset>";
        
        $__internal_457448e3db65ab7f63211d51355f9f8ce3339f558940ab4241dde6f91b537d6b->leave($__internal_457448e3db65ab7f63211d51355f9f8ce3339f558940ab4241dde6f91b537d6b_prof);

        
        $__internal_ca393d830a2839ed7c9f018409ddc4647e3104993497f835fe7f9561c978f520->leave($__internal_ca393d830a2839ed7c9f018409ddc4647e3104993497f835fe7f9561c978f520_prof);

    }

    // line 49
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_a0af5b78498814970e0b31f12fbe0f2960f384726ae7e6862b11c3824129924c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0af5b78498814970e0b31f12fbe0f2960f384726ae7e6862b11c3824129924c->enter($__internal_a0af5b78498814970e0b31f12fbe0f2960f384726ae7e6862b11c3824129924c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_478156c6bd1ec35966781758545f3b491c067f6306f558ddb94371d5fcec5ceb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_478156c6bd1ec35966781758545f3b491c067f6306f558ddb94371d5fcec5ceb->enter($__internal_478156c6bd1ec35966781758545f3b491c067f6306f558ddb94371d5fcec5ceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 50
        echo "<div class=\"form-group row\">";
        // line 51
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 52
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 54
        echo "</div>";
        // line 55
        echo "</div>";
        
        $__internal_478156c6bd1ec35966781758545f3b491c067f6306f558ddb94371d5fcec5ceb->leave($__internal_478156c6bd1ec35966781758545f3b491c067f6306f558ddb94371d5fcec5ceb_prof);

        
        $__internal_a0af5b78498814970e0b31f12fbe0f2960f384726ae7e6862b11c3824129924c->leave($__internal_a0af5b78498814970e0b31f12fbe0f2960f384726ae7e6862b11c3824129924c_prof);

    }

    // line 58
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_49adf8c63facf0f4ea16db4446e3e21ba1b59b070fe1be67b4cbece7b5b2ba4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49adf8c63facf0f4ea16db4446e3e21ba1b59b070fe1be67b4cbece7b5b2ba4f->enter($__internal_49adf8c63facf0f4ea16db4446e3e21ba1b59b070fe1be67b4cbece7b5b2ba4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_9cc38943a53d67aa4067e4af898d81213bfb977c05c68c20c6429dd76bade31c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cc38943a53d67aa4067e4af898d81213bfb977c05c68c20c6429dd76bade31c->enter($__internal_9cc38943a53d67aa4067e4af898d81213bfb977c05c68c20c6429dd76bade31c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 59
        echo "<div class=\"form-group row\">";
        // line 60
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 61
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 63
        echo "</div>";
        // line 64
        echo "</div>";
        
        $__internal_9cc38943a53d67aa4067e4af898d81213bfb977c05c68c20c6429dd76bade31c->leave($__internal_9cc38943a53d67aa4067e4af898d81213bfb977c05c68c20c6429dd76bade31c_prof);

        
        $__internal_49adf8c63facf0f4ea16db4446e3e21ba1b59b070fe1be67b4cbece7b5b2ba4f->leave($__internal_49adf8c63facf0f4ea16db4446e3e21ba1b59b070fe1be67b4cbece7b5b2ba4f_prof);

    }

    // line 67
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_3782fb660eb765370885a08091f78557f2ef8af6d088b8cf6432847a04ce8e14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3782fb660eb765370885a08091f78557f2ef8af6d088b8cf6432847a04ce8e14->enter($__internal_3782fb660eb765370885a08091f78557f2ef8af6d088b8cf6432847a04ce8e14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_782dd2da9e2f1f617c88800c78012bab556ba7f9dd48bd180edbbcfc52a0062d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_782dd2da9e2f1f617c88800c78012bab556ba7f9dd48bd180edbbcfc52a0062d->enter($__internal_782dd2da9e2f1f617c88800c78012bab556ba7f9dd48bd180edbbcfc52a0062d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 68
        echo "col-sm-10";
        
        $__internal_782dd2da9e2f1f617c88800c78012bab556ba7f9dd48bd180edbbcfc52a0062d->leave($__internal_782dd2da9e2f1f617c88800c78012bab556ba7f9dd48bd180edbbcfc52a0062d_prof);

        
        $__internal_3782fb660eb765370885a08091f78557f2ef8af6d088b8cf6432847a04ce8e14->leave($__internal_3782fb660eb765370885a08091f78557f2ef8af6d088b8cf6432847a04ce8e14_prof);

    }

    // line 71
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_2d882168ac2f679cdae54c9b455db3a3609162fe380d2ec0cdd962736831d591 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d882168ac2f679cdae54c9b455db3a3609162fe380d2ec0cdd962736831d591->enter($__internal_2d882168ac2f679cdae54c9b455db3a3609162fe380d2ec0cdd962736831d591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_36100378d7b882c58d16716b484629ef27eb3a12ba9766cbaaace01fd5b03e52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36100378d7b882c58d16716b484629ef27eb3a12ba9766cbaaace01fd5b03e52->enter($__internal_36100378d7b882c58d16716b484629ef27eb3a12ba9766cbaaace01fd5b03e52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 72
        echo "<div class=\"form-group row\">";
        // line 73
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 74
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 77
        echo "</div>";
        // line 78
        echo "</div>";
        
        $__internal_36100378d7b882c58d16716b484629ef27eb3a12ba9766cbaaace01fd5b03e52->leave($__internal_36100378d7b882c58d16716b484629ef27eb3a12ba9766cbaaace01fd5b03e52_prof);

        
        $__internal_2d882168ac2f679cdae54c9b455db3a3609162fe380d2ec0cdd962736831d591->leave($__internal_2d882168ac2f679cdae54c9b455db3a3609162fe380d2ec0cdd962736831d591_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_4_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  347 => 78,  345 => 77,  343 => 76,  341 => 75,  337 => 74,  333 => 73,  331 => 72,  322 => 71,  312 => 68,  303 => 67,  293 => 64,  291 => 63,  289 => 62,  285 => 61,  281 => 60,  279 => 59,  270 => 58,  260 => 55,  258 => 54,  256 => 53,  252 => 52,  248 => 51,  246 => 50,  237 => 49,  227 => 46,  223 => 44,  221 => 43,  219 => 42,  215 => 41,  213 => 40,  208 => 39,  205 => 38,  196 => 37,  185 => 33,  182 => 32,  180 => 31,  178 => 30,  174 => 29,  172 => 28,  166 => 27,  163 => 25,  161 => 24,  152 => 23,  142 => 18,  133 => 17,  122 => 13,  120 => 12,  117 => 10,  115 => 9,  110 => 7,  108 => 6,  99 => 5,  89 => 71,  86 => 70,  84 => 67,  81 => 66,  79 => 58,  76 => 57,  74 => 49,  71 => 48,  69 => 37,  66 => 36,  64 => 23,  61 => 22,  58 => 20,  56 => 17,  53 => 16,  51 => 5,  48 => 4,  45 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_4_layout.html.twig\" %}

{# Labels #}

{% block form_label -%}
    {%- if label is same as(false) -%}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {%- else -%}
        {%- if expanded is not defined or not expanded -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' col-form-label')|trim}) -%}
        {%- endif -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) -%}
        {{- parent() -}}
    {%- endif -%}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    {%- if expanded is defined and expanded -%}
        {{ block('fieldset_form_row') }}
    {%- else -%}
        <div class=\"form-group row{% if (not compound or force_error|default(false)) and not valid %} is-invalid{% endif %}\">
            {{- form_label(form) -}}
            <div class=\"{{ block('form_group_class') }}\">
                {{- form_widget(form) -}}
                {{- form_errors(form) -}}
            </div>
    {##}</div>
    {%- endif -%}
{%- endblock form_row %}

{% block fieldset_form_row -%}
    <fieldset class=\"form-group\">
        <div class=\"row{% if (not compound or force_error|default(false)) and not valid %} is-invalid{% endif %}\">
            {{- form_label(form) -}}
            <div class=\"{{ block('form_group_class') }}\">
                {{- form_widget(form) -}}
                {{- form_errors(form) -}}
            </div>
        </div>
{##}</fieldset>
{%- endblock fieldset_form_row %}

{% block submit_row -%}
    <div class=\"form-group row\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock submit_row %}

{% block reset_row -%}
    <div class=\"form-group row\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock reset_row %}

{% block form_group_class -%}
col-sm-10
{%- endblock form_group_class %}

{% block checkbox_row -%}
    <div class=\"form-group row\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>{#--#}
    </div>
{%- endblock checkbox_row %}
", "bootstrap_4_horizontal_layout.html.twig", "/Applications/MAMP/htdocs/sf3/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_4_horizontal_layout.html.twig");
    }
}
