<?php

/* bootstrap_4_layout.html.twig */
class __TwigTemplate_e683d18d4f6b33c09b6ce8f3d31e03757ee29ee8ad7e50045a65e00d6bbcb275 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_base_layout.html.twig", "bootstrap_4_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_base_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'money_widget' => array($this, 'block_money_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'widget_attributes' => array($this, 'block_widget_attributes'),
                'button_widget' => array($this, 'block_button_widget'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'form_label' => array($this, 'block_form_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b77a8f09db3121b7c0ec370d9d2e3195d7680a234b2972f5134db2090d62b28f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b77a8f09db3121b7c0ec370d9d2e3195d7680a234b2972f5134db2090d62b28f->enter($__internal_b77a8f09db3121b7c0ec370d9d2e3195d7680a234b2972f5134db2090d62b28f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_layout.html.twig"));

        $__internal_a1b25925fb1203279e1f89deb9a8283b4f3652b01d1da8f195203283782fba87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1b25925fb1203279e1f89deb9a8283b4f3652b01d1da8f195203283782fba87->enter($__internal_a1b25925fb1203279e1f89deb9a8283b4f3652b01d1da8f195203283782fba87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('money_widget', $context, $blocks);
        // line 12
        echo "
";
        // line 13
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('date_widget', $context, $blocks);
        // line 28
        echo "
";
        // line 29
        $this->displayBlock('time_widget', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 44
        echo "
";
        // line 45
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 60
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 67
        $this->displayBlock('button_widget', $context, $blocks);
        // line 71
        echo "
";
        // line 72
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 83
        echo "
";
        // line 84
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 95
        echo "
";
        // line 96
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 120
        echo "
";
        // line 122
        echo "
";
        // line 123
        $this->displayBlock('form_label', $context, $blocks);
        // line 132
        echo "
";
        // line 133
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 158
        echo "
";
        // line 160
        echo "
";
        // line 161
        $this->displayBlock('form_row', $context, $blocks);
        // line 171
        echo "
";
        // line 173
        echo "
";
        // line 174
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_b77a8f09db3121b7c0ec370d9d2e3195d7680a234b2972f5134db2090d62b28f->leave($__internal_b77a8f09db3121b7c0ec370d9d2e3195d7680a234b2972f5134db2090d62b28f_prof);

        
        $__internal_a1b25925fb1203279e1f89deb9a8283b4f3652b01d1da8f195203283782fba87->leave($__internal_a1b25925fb1203279e1f89deb9a8283b4f3652b01d1da8f195203283782fba87_prof);

    }

    // line 5
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_8a63e79f202a2dd754b6fcb90303f4a150bf63f1f2d050c299f92c12276d932b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a63e79f202a2dd754b6fcb90303f4a150bf63f1f2d050c299f92c12276d932b->enter($__internal_8a63e79f202a2dd754b6fcb90303f4a150bf63f1f2d050c299f92c12276d932b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_e3fb0ddd928fcad46929a93734eedbd9f9d7578380c171327d91dba082e48b07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3fb0ddd928fcad46929a93734eedbd9f9d7578380c171327d91dba082e48b07->enter($__internal_e3fb0ddd928fcad46929a93734eedbd9f9d7578380c171327d91dba082e48b07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 6
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            // line 7
            echo "        ";
            $context["group_class"] = " form-control is-invalid";
            // line 8
            echo "        ";
            $context["valid"] = true;
            // line 9
            echo "    ";
        }
        // line 10
        $this->displayParentBlock("money_widget", $context, $blocks);
        
        $__internal_e3fb0ddd928fcad46929a93734eedbd9f9d7578380c171327d91dba082e48b07->leave($__internal_e3fb0ddd928fcad46929a93734eedbd9f9d7578380c171327d91dba082e48b07_prof);

        
        $__internal_8a63e79f202a2dd754b6fcb90303f4a150bf63f1f2d050c299f92c12276d932b->leave($__internal_8a63e79f202a2dd754b6fcb90303f4a150bf63f1f2d050c299f92c12276d932b_prof);

    }

    // line 13
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_63248de96bc889dcb5b271997c85ea2d982c1930a556b1b99f3675715f0b619c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63248de96bc889dcb5b271997c85ea2d982c1930a556b1b99f3675715f0b619c->enter($__internal_63248de96bc889dcb5b271997c85ea2d982c1930a556b1b99f3675715f0b619c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_1e7f50dae863eabcff0d9aa13144614d49ee69435e612ef16e3c6e88390bf590 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e7f50dae863eabcff0d9aa13144614d49ee69435e612ef16e3c6e88390bf590->enter($__internal_1e7f50dae863eabcff0d9aa13144614d49ee69435e612ef16e3c6e88390bf590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 14
        if (((($context["widget"] ?? $this->getContext($context, "widget")) != "single_text") &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            // line 15
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 16
            $context["valid"] = true;
        }
        // line 18
        $this->displayParentBlock("datetime_widget", $context, $blocks);
        
        $__internal_1e7f50dae863eabcff0d9aa13144614d49ee69435e612ef16e3c6e88390bf590->leave($__internal_1e7f50dae863eabcff0d9aa13144614d49ee69435e612ef16e3c6e88390bf590_prof);

        
        $__internal_63248de96bc889dcb5b271997c85ea2d982c1930a556b1b99f3675715f0b619c->leave($__internal_63248de96bc889dcb5b271997c85ea2d982c1930a556b1b99f3675715f0b619c_prof);

    }

    // line 21
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_b8c281a184fe4d6c35afab5718c3a97d69328cf4053c1d6ae71ed9a12c32e295 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8c281a184fe4d6c35afab5718c3a97d69328cf4053c1d6ae71ed9a12c32e295->enter($__internal_b8c281a184fe4d6c35afab5718c3a97d69328cf4053c1d6ae71ed9a12c32e295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_618c566c14eb05efc3bbe982425e1fee3bc0517e7d4f38187ad08fb6dd06f560 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_618c566c14eb05efc3bbe982425e1fee3bc0517e7d4f38187ad08fb6dd06f560->enter($__internal_618c566c14eb05efc3bbe982425e1fee3bc0517e7d4f38187ad08fb6dd06f560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 22
        if (((($context["widget"] ?? $this->getContext($context, "widget")) != "single_text") &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            // line 23
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 24
            $context["valid"] = true;
        }
        // line 26
        $this->displayParentBlock("date_widget", $context, $blocks);
        
        $__internal_618c566c14eb05efc3bbe982425e1fee3bc0517e7d4f38187ad08fb6dd06f560->leave($__internal_618c566c14eb05efc3bbe982425e1fee3bc0517e7d4f38187ad08fb6dd06f560_prof);

        
        $__internal_b8c281a184fe4d6c35afab5718c3a97d69328cf4053c1d6ae71ed9a12c32e295->leave($__internal_b8c281a184fe4d6c35afab5718c3a97d69328cf4053c1d6ae71ed9a12c32e295_prof);

    }

    // line 29
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_d36e55a003193429e17dc459e39efa37a3a6c0c204242958f0500d7ad6a095a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d36e55a003193429e17dc459e39efa37a3a6c0c204242958f0500d7ad6a095a7->enter($__internal_d36e55a003193429e17dc459e39efa37a3a6c0c204242958f0500d7ad6a095a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_0d3f452fd6c152520634a174397fe6f29faa860e75b4adc61756f81df2e3a385 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d3f452fd6c152520634a174397fe6f29faa860e75b4adc61756f81df2e3a385->enter($__internal_0d3f452fd6c152520634a174397fe6f29faa860e75b4adc61756f81df2e3a385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 30
        if (((($context["widget"] ?? $this->getContext($context, "widget")) != "single_text") &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            // line 31
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 32
            $context["valid"] = true;
        }
        // line 34
        $this->displayParentBlock("time_widget", $context, $blocks);
        
        $__internal_0d3f452fd6c152520634a174397fe6f29faa860e75b4adc61756f81df2e3a385->leave($__internal_0d3f452fd6c152520634a174397fe6f29faa860e75b4adc61756f81df2e3a385_prof);

        
        $__internal_d36e55a003193429e17dc459e39efa37a3a6c0c204242958f0500d7ad6a095a7->leave($__internal_d36e55a003193429e17dc459e39efa37a3a6c0c204242958f0500d7ad6a095a7_prof);

    }

    // line 37
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_bc5a7231e92a4dd5ba6175fcd9f91d5e26458a931b5c0bc6a3030f40b9380356 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc5a7231e92a4dd5ba6175fcd9f91d5e26458a931b5c0bc6a3030f40b9380356->enter($__internal_bc5a7231e92a4dd5ba6175fcd9f91d5e26458a931b5c0bc6a3030f40b9380356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_4e0c3751fa3ed92e7a672537f969c94aff0bb94fd4916395136a2567c8f0be10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e0c3751fa3ed92e7a672537f969c94aff0bb94fd4916395136a2567c8f0be10->enter($__internal_4e0c3751fa3ed92e7a672537f969c94aff0bb94fd4916395136a2567c8f0be10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 38
        if (((($context["widget"] ?? $this->getContext($context, "widget")) != "single_text") &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            // line 39
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 40
            $context["valid"] = true;
        }
        // line 42
        $this->displayParentBlock("dateinterval_widget", $context, $blocks);
        
        $__internal_4e0c3751fa3ed92e7a672537f969c94aff0bb94fd4916395136a2567c8f0be10->leave($__internal_4e0c3751fa3ed92e7a672537f969c94aff0bb94fd4916395136a2567c8f0be10_prof);

        
        $__internal_bc5a7231e92a4dd5ba6175fcd9f91d5e26458a931b5c0bc6a3030f40b9380356->leave($__internal_bc5a7231e92a4dd5ba6175fcd9f91d5e26458a931b5c0bc6a3030f40b9380356_prof);

    }

    // line 45
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_4d37a4f7970a006dbcc5ff58aabf36760d1d94cae08696650311f267c3d6b4c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d37a4f7970a006dbcc5ff58aabf36760d1d94cae08696650311f267c3d6b4c4->enter($__internal_4d37a4f7970a006dbcc5ff58aabf36760d1d94cae08696650311f267c3d6b4c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_c31c87a5c8525fedd7df6dce2f5cb96822033fe6bfa8c52ff14180de9bff64de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c31c87a5c8525fedd7df6dce2f5cb96822033fe6bfa8c52ff14180de9bff64de->enter($__internal_c31c87a5c8525fedd7df6dce2f5cb96822033fe6bfa8c52ff14180de9bff64de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 46
        echo "<div class=\"input-group";
        echo (( !($context["valid"] ?? $this->getContext($context, "valid"))) ? (" form-control is-invalid") : (""));
        echo "\">
        ";
        // line 47
        $context["valid"] = true;
        // line 48
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 49
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_c31c87a5c8525fedd7df6dce2f5cb96822033fe6bfa8c52ff14180de9bff64de->leave($__internal_c31c87a5c8525fedd7df6dce2f5cb96822033fe6bfa8c52ff14180de9bff64de_prof);

        
        $__internal_4d37a4f7970a006dbcc5ff58aabf36760d1d94cae08696650311f267c3d6b4c4->leave($__internal_4d37a4f7970a006dbcc5ff58aabf36760d1d94cae08696650311f267c3d6b4c4_prof);

    }

    // line 53
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_3ce700f66c1e12e8af2fbaed277c59fd9849a618971c67a1595d4fc35ed0568e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ce700f66c1e12e8af2fbaed277c59fd9849a618971c67a1595d4fc35ed0568e->enter($__internal_3ce700f66c1e12e8af2fbaed277c59fd9849a618971c67a1595d4fc35ed0568e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_0d1cc997f17c22e2ff58acf32be542deee131f1fd971d4bad8fa0105872eb21d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d1cc997f17c22e2ff58acf32be542deee131f1fd971d4bad8fa0105872eb21d->enter($__internal_0d1cc997f17c22e2ff58acf32be542deee131f1fd971d4bad8fa0105872eb21d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 54
        if (( !array_key_exists("type", $context) || (($context["type"] ?? $this->getContext($context, "type")) != "hidden"))) {
            // line 55
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control") . (((((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "")) : ("")) == "file")) ? ("-file") : (""))))));
        }
        // line 57
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_0d1cc997f17c22e2ff58acf32be542deee131f1fd971d4bad8fa0105872eb21d->leave($__internal_0d1cc997f17c22e2ff58acf32be542deee131f1fd971d4bad8fa0105872eb21d_prof);

        
        $__internal_3ce700f66c1e12e8af2fbaed277c59fd9849a618971c67a1595d4fc35ed0568e->leave($__internal_3ce700f66c1e12e8af2fbaed277c59fd9849a618971c67a1595d4fc35ed0568e_prof);

    }

    // line 60
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_a6f3d2b56b98865042ccad7e1dfa455a08ce81f52caa48f0eed303e8320c099b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6f3d2b56b98865042ccad7e1dfa455a08ce81f52caa48f0eed303e8320c099b->enter($__internal_a6f3d2b56b98865042ccad7e1dfa455a08ce81f52caa48f0eed303e8320c099b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        $__internal_32e9e1a02992a84d0576578c5fd6da4dcfb2d6e3bef5077a3963f4c06172a8ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32e9e1a02992a84d0576578c5fd6da4dcfb2d6e3bef5077a3963f4c06172a8ee->enter($__internal_32e9e1a02992a84d0576578c5fd6da4dcfb2d6e3bef5077a3963f4c06172a8ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        // line 61
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            // line 62
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 63
            echo "    ";
        }
        // line 64
        $this->displayParentBlock("widget_attributes", $context, $blocks);
        
        $__internal_32e9e1a02992a84d0576578c5fd6da4dcfb2d6e3bef5077a3963f4c06172a8ee->leave($__internal_32e9e1a02992a84d0576578c5fd6da4dcfb2d6e3bef5077a3963f4c06172a8ee_prof);

        
        $__internal_a6f3d2b56b98865042ccad7e1dfa455a08ce81f52caa48f0eed303e8320c099b->leave($__internal_a6f3d2b56b98865042ccad7e1dfa455a08ce81f52caa48f0eed303e8320c099b_prof);

    }

    // line 67
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_c8c21a748b8f3fb17b318d1871271112439039d05f3a735062710d6a8af61f20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8c21a748b8f3fb17b318d1871271112439039d05f3a735062710d6a8af61f20->enter($__internal_c8c21a748b8f3fb17b318d1871271112439039d05f3a735062710d6a8af61f20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_fe43103261dcfdc76e99cd334c7b1bed541d1b963faf12ab5cb0a9a18fb9f483 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe43103261dcfdc76e99cd334c7b1bed541d1b963faf12ab5cb0a9a18fb9f483->enter($__internal_fe43103261dcfdc76e99cd334c7b1bed541d1b963faf12ab5cb0a9a18fb9f483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 68
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-secondary")) : ("btn-secondary")) . " btn"))));
        // line 69
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_fe43103261dcfdc76e99cd334c7b1bed541d1b963faf12ab5cb0a9a18fb9f483->leave($__internal_fe43103261dcfdc76e99cd334c7b1bed541d1b963faf12ab5cb0a9a18fb9f483_prof);

        
        $__internal_c8c21a748b8f3fb17b318d1871271112439039d05f3a735062710d6a8af61f20->leave($__internal_c8c21a748b8f3fb17b318d1871271112439039d05f3a735062710d6a8af61f20_prof);

    }

    // line 72
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_30ed020ce57575f2c45878e17ff1cbca42e007e276d0aeb598b71cbf82faa385 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30ed020ce57575f2c45878e17ff1cbca42e007e276d0aeb598b71cbf82faa385->enter($__internal_30ed020ce57575f2c45878e17ff1cbca42e007e276d0aeb598b71cbf82faa385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_e2e0b05548f61debcdd195f2eef6bd47aa29d8ffce45eea8100a2fa5ee9f86ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2e0b05548f61debcdd195f2eef6bd47aa29d8ffce45eea8100a2fa5ee9f86ed->enter($__internal_e2e0b05548f61debcdd195f2eef6bd47aa29d8ffce45eea8100a2fa5ee9f86ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 73
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 74
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-check-input"))));
        // line 75
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 76
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 78
            echo "<div class=\"form-check";
            echo (( !($context["valid"] ?? $this->getContext($context, "valid"))) ? (" form-control is-invalid") : (""));
            echo "\">";
            // line 79
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 80
            echo "</div>";
        }
        
        $__internal_e2e0b05548f61debcdd195f2eef6bd47aa29d8ffce45eea8100a2fa5ee9f86ed->leave($__internal_e2e0b05548f61debcdd195f2eef6bd47aa29d8ffce45eea8100a2fa5ee9f86ed_prof);

        
        $__internal_30ed020ce57575f2c45878e17ff1cbca42e007e276d0aeb598b71cbf82faa385->leave($__internal_30ed020ce57575f2c45878e17ff1cbca42e007e276d0aeb598b71cbf82faa385_prof);

    }

    // line 84
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_1737e1e48eea6d4d639e8900ee32e1846559c5b8a0e72d9f7483a23ee2d1b740 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1737e1e48eea6d4d639e8900ee32e1846559c5b8a0e72d9f7483a23ee2d1b740->enter($__internal_1737e1e48eea6d4d639e8900ee32e1846559c5b8a0e72d9f7483a23ee2d1b740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_f5bce3f1dc469b0c31cd182e491c3cbc262a269807669d02295102504a34a721 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5bce3f1dc469b0c31cd182e491c3cbc262a269807669d02295102504a34a721->enter($__internal_f5bce3f1dc469b0c31cd182e491c3cbc262a269807669d02295102504a34a721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 85
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 86
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-check-input"))));
        // line 87
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 88
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 90
            echo "<div class=\"form-check";
            echo (( !($context["valid"] ?? $this->getContext($context, "valid"))) ? (" form-control is-invalid") : (""));
            echo "\">";
            // line 91
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 92
            echo "</div>";
        }
        
        $__internal_f5bce3f1dc469b0c31cd182e491c3cbc262a269807669d02295102504a34a721->leave($__internal_f5bce3f1dc469b0c31cd182e491c3cbc262a269807669d02295102504a34a721_prof);

        
        $__internal_1737e1e48eea6d4d639e8900ee32e1846559c5b8a0e72d9f7483a23ee2d1b740->leave($__internal_1737e1e48eea6d4d639e8900ee32e1846559c5b8a0e72d9f7483a23ee2d1b740_prof);

    }

    // line 96
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_cfaa6e67f03b4239b1f5dfa3d41be1199946a9720f2054a158d58d65ccc02167 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfaa6e67f03b4239b1f5dfa3d41be1199946a9720f2054a158d58d65ccc02167->enter($__internal_cfaa6e67f03b4239b1f5dfa3d41be1199946a9720f2054a158d58d65ccc02167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_3fe558a1551689ddfa02c1e722ea3886a51ee8a5ee974785608d78ccb784d4df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fe558a1551689ddfa02c1e722ea3886a51ee8a5ee974785608d78ccb784d4df->enter($__internal_3fe558a1551689ddfa02c1e722ea3886a51ee8a5ee974785608d78ccb784d4df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 97
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 98
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 99
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 100
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 101
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain")), "valid" =>                 // line 102
($context["valid"] ?? $this->getContext($context, "valid"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 106
            if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
                // line 107
                $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            }
            // line 109
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 110
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 111
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 112
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 113
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain")), "valid" => true));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            echo "</div>";
        }
        
        $__internal_3fe558a1551689ddfa02c1e722ea3886a51ee8a5ee974785608d78ccb784d4df->leave($__internal_3fe558a1551689ddfa02c1e722ea3886a51ee8a5ee974785608d78ccb784d4df_prof);

        
        $__internal_cfaa6e67f03b4239b1f5dfa3d41be1199946a9720f2054a158d58d65ccc02167->leave($__internal_cfaa6e67f03b4239b1f5dfa3d41be1199946a9720f2054a158d58d65ccc02167_prof);

    }

    // line 123
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_53e946d2a7f82e5130936cd6e76ce8eb6f5be74eb4a3a60a4e1bc7ff4568fc6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53e946d2a7f82e5130936cd6e76ce8eb6f5be74eb4a3a60a4e1bc7ff4568fc6e->enter($__internal_53e946d2a7f82e5130936cd6e76ce8eb6f5be74eb4a3a60a4e1bc7ff4568fc6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_cb91c719f3d4a642cffc79445a5d48c03dd991445f0d3c7ed003ef969bf0298d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb91c719f3d4a642cffc79445a5d48c03dd991445f0d3c7ed003ef969bf0298d->enter($__internal_cb91c719f3d4a642cffc79445a5d48c03dd991445f0d3c7ed003ef969bf0298d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 124
        if ((array_key_exists("compound", $context) && ($context["compound"] ?? $this->getContext($context, "compound")))) {
            // line 125
            $context["element"] = "legend";
            // line 126
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " col-form-legend"))));
        } else {
            // line 128
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " form-control-label"))));
        }
        // line 130
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_cb91c719f3d4a642cffc79445a5d48c03dd991445f0d3c7ed003ef969bf0298d->leave($__internal_cb91c719f3d4a642cffc79445a5d48c03dd991445f0d3c7ed003ef969bf0298d_prof);

        
        $__internal_53e946d2a7f82e5130936cd6e76ce8eb6f5be74eb4a3a60a4e1bc7ff4568fc6e->leave($__internal_53e946d2a7f82e5130936cd6e76ce8eb6f5be74eb4a3a60a4e1bc7ff4568fc6e_prof);

    }

    // line 133
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_c10a80c837967f2d2cd322e580d2d0b8e9ffe329a78a88f4c768f18e595584cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c10a80c837967f2d2cd322e580d2d0b8e9ffe329a78a88f4c768f18e595584cc->enter($__internal_c10a80c837967f2d2cd322e580d2d0b8e9ffe329a78a88f4c768f18e595584cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_4d3f23f6431ed53fe38497e53ce34bb8eaa92d60faa3ca296badd7ac73b8a7bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d3f23f6431ed53fe38497e53ce34bb8eaa92d60faa3ca296badd7ac73b8a7bf->enter($__internal_4d3f23f6431ed53fe38497e53ce34bb8eaa92d60faa3ca296badd7ac73b8a7bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 135
        if (array_key_exists("widget", $context)) {
            // line 136
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " form-check-label"))));
            // line 137
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 138
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 140
            if (array_key_exists("parent_label_class", $context)) {
                // line 141
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
            }
            // line 143
            if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
                // line 144
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 145
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 146
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 147
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 150
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 153
            echo "<label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 154
            echo ($context["widget"] ?? $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? $this->getContext($context, "label")) === false)) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 155
            echo "</label>";
        }
        
        $__internal_4d3f23f6431ed53fe38497e53ce34bb8eaa92d60faa3ca296badd7ac73b8a7bf->leave($__internal_4d3f23f6431ed53fe38497e53ce34bb8eaa92d60faa3ca296badd7ac73b8a7bf_prof);

        
        $__internal_c10a80c837967f2d2cd322e580d2d0b8e9ffe329a78a88f4c768f18e595584cc->leave($__internal_c10a80c837967f2d2cd322e580d2d0b8e9ffe329a78a88f4c768f18e595584cc_prof);

    }

    // line 161
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_3b706920dd6617607adf9c522026d8b000bef7f99fc38dbcf10b21c8d43294b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b706920dd6617607adf9c522026d8b000bef7f99fc38dbcf10b21c8d43294b0->enter($__internal_3b706920dd6617607adf9c522026d8b000bef7f99fc38dbcf10b21c8d43294b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_7c907f3d3ffa1f75248dd29d745550910181c29e5598b1d88a8a41af8d71f00e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c907f3d3ffa1f75248dd29d745550910181c29e5598b1d88a8a41af8d71f00e->enter($__internal_7c907f3d3ffa1f75248dd29d745550910181c29e5598b1d88a8a41af8d71f00e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 162
        if ((array_key_exists("compound", $context) && ($context["compound"] ?? $this->getContext($context, "compound")))) {
            // line 163
            $context["element"] = "fieldset";
        }
        // line 165
        echo "<";
        echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter(($context["element"] ?? $this->getContext($context, "element")), "div")) : ("div")), "html", null, true);
        echo " class=\"form-group\">";
        // line 166
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 167
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 168
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 169
        echo "</";
        echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter(($context["element"] ?? $this->getContext($context, "element")), "div")) : ("div")), "html", null, true);
        echo ">";
        
        $__internal_7c907f3d3ffa1f75248dd29d745550910181c29e5598b1d88a8a41af8d71f00e->leave($__internal_7c907f3d3ffa1f75248dd29d745550910181c29e5598b1d88a8a41af8d71f00e_prof);

        
        $__internal_3b706920dd6617607adf9c522026d8b000bef7f99fc38dbcf10b21c8d43294b0->leave($__internal_3b706920dd6617607adf9c522026d8b000bef7f99fc38dbcf10b21c8d43294b0_prof);

    }

    // line 174
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_3335d1fec6da9cabad2be498b8786e72588863fe64fb8ef0ebf8119c26979c12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3335d1fec6da9cabad2be498b8786e72588863fe64fb8ef0ebf8119c26979c12->enter($__internal_3335d1fec6da9cabad2be498b8786e72588863fe64fb8ef0ebf8119c26979c12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_a544eb40d2586b891a1f3beec902de86f105888105dcc920ac6c8ebf58132352 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a544eb40d2586b891a1f3beec902de86f105888105dcc920ac6c8ebf58132352->enter($__internal_a544eb40d2586b891a1f3beec902de86f105888105dcc920ac6c8ebf58132352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 175
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 176
            echo "<div class=\"";
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "invalid-feedback";
            } else {
                echo "alert alert-danger";
            }
            echo "\">
        <ul class=\"list-unstyled mb-0\">";
            // line 178
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 179
                echo "<li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 181
            echo "</ul>
    </div>";
        }
        
        $__internal_a544eb40d2586b891a1f3beec902de86f105888105dcc920ac6c8ebf58132352->leave($__internal_a544eb40d2586b891a1f3beec902de86f105888105dcc920ac6c8ebf58132352_prof);

        
        $__internal_3335d1fec6da9cabad2be498b8786e72588863fe64fb8ef0ebf8119c26979c12->leave($__internal_3335d1fec6da9cabad2be498b8786e72588863fe64fb8ef0ebf8119c26979c12_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_4_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  672 => 181,  664 => 179,  660 => 178,  651 => 176,  649 => 175,  640 => 174,  628 => 169,  626 => 168,  624 => 167,  622 => 166,  618 => 165,  615 => 163,  613 => 162,  604 => 161,  593 => 155,  589 => 154,  574 => 153,  570 => 150,  567 => 147,  566 => 146,  565 => 145,  563 => 144,  561 => 143,  558 => 141,  556 => 140,  553 => 138,  551 => 137,  549 => 136,  547 => 135,  538 => 133,  528 => 130,  525 => 128,  522 => 126,  520 => 125,  518 => 124,  509 => 123,  498 => 117,  492 => 113,  491 => 112,  490 => 111,  486 => 110,  482 => 109,  479 => 107,  477 => 106,  470 => 102,  469 => 101,  468 => 100,  467 => 99,  463 => 98,  461 => 97,  452 => 96,  441 => 92,  439 => 91,  435 => 90,  432 => 88,  430 => 87,  428 => 86,  426 => 85,  417 => 84,  406 => 80,  404 => 79,  400 => 78,  397 => 76,  395 => 75,  393 => 74,  391 => 73,  382 => 72,  372 => 69,  370 => 68,  361 => 67,  351 => 64,  348 => 63,  345 => 62,  343 => 61,  334 => 60,  324 => 57,  321 => 55,  319 => 54,  310 => 53,  299 => 49,  297 => 48,  295 => 47,  290 => 46,  281 => 45,  271 => 42,  268 => 40,  266 => 39,  264 => 38,  255 => 37,  245 => 34,  242 => 32,  240 => 31,  238 => 30,  229 => 29,  219 => 26,  216 => 24,  214 => 23,  212 => 22,  203 => 21,  193 => 18,  190 => 16,  188 => 15,  186 => 14,  177 => 13,  167 => 10,  164 => 9,  161 => 8,  158 => 7,  156 => 6,  147 => 5,  137 => 174,  134 => 173,  131 => 171,  129 => 161,  126 => 160,  123 => 158,  121 => 133,  118 => 132,  116 => 123,  113 => 122,  110 => 120,  108 => 96,  105 => 95,  103 => 84,  100 => 83,  98 => 72,  95 => 71,  93 => 67,  91 => 60,  89 => 53,  86 => 52,  84 => 45,  81 => 44,  79 => 37,  76 => 36,  74 => 29,  71 => 28,  69 => 21,  66 => 20,  64 => 13,  61 => 12,  59 => 5,  56 => 4,  53 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_base_layout.html.twig\" %}

{# Widgets #}

{% block money_widget -%}
    {% if not valid %}
        {% set group_class = ' form-control is-invalid' %}
        {% set valid = true %}
    {% endif %}
    {{- parent() -}}
{%- endblock money_widget %}

{% block datetime_widget -%}
    {%- if widget != 'single_text' and not valid -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) -%}
        {% set valid = true %}
    {%- endif -%}
    {{- parent() -}}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {%- if widget != 'single_text' and not valid -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) -%}
        {% set valid = true %}
    {%- endif -%}
    {{- parent() -}}
{%- endblock date_widget %}

{% block time_widget -%}
    {%- if widget != 'single_text' and not valid -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) -%}
        {% set valid = true %}
    {%- endif -%}
    {{- parent() -}}
{%- endblock time_widget %}

{% block dateinterval_widget -%}
    {%- if widget != 'single_text' and not valid -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) -%}
        {% set valid = true %}
    {%- endif -%}
    {{- parent() -}}
{%- endblock dateinterval_widget %}

{% block percent_widget -%}
    <div class=\"input-group{{ not valid ? ' form-control is-invalid' }}\">
        {% set valid = true %}
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block form_widget_simple -%}
    {% if type is not defined or type != 'hidden' %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control' ~ (type|default('') == 'file' ? '-file' : ''))|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{%- block widget_attributes -%}
    {%- if not valid %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) %}
    {% endif -%}
    {{ parent() }}
{%- endblock widget_attributes -%}

{% block button_widget -%}
    {%- set attr = attr|merge({class: (attr.class|default('btn-secondary') ~ ' btn')|trim}) -%}
    {{- parent() -}}
{%- endblock button_widget %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-check-input')|trim}) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"form-check{{ not valid ? ' form-control is-invalid' }}\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-check-input')|trim}) -%}
    {%- if 'radio-inline' in parent_label_class -%}
        {{- form_label(form, null, { widget: parent() }) -}}
    {%- else -%}
        <div class=\"form-check{{ not valid ? ' form-control is-invalid' }}\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
{%- endblock radio_widget %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
                valid: valid,
            }) -}}
        {% endfor -%}
    {%- else -%}
        {%- if not valid -%}
            {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) %}
        {%- endif -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                    valid: true,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{# Labels #}

{% block form_label -%}
    {%- if compound is defined and compound -%}
        {%- set element = 'legend' -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' col-form-legend')|trim}) -%}
    {%- else -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' form-control-label')|trim}) -%}
    {%- endif -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block checkbox_radio_label -%}
    {#- Do not display the label if widget is not defined in order to prevent double label rendering -#}
    {%- if widget is defined -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' form-check-label')|trim}) -%}
        {%- if required -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) -%}
        {%- endif -%}
        {%- if parent_label_class is defined -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) -%}
        {%- endif -%}
        {%- if label is not same as(false) and label is empty -%}
            {%- if label_format is not empty -%}
                {%- set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) -%}
            {%- else -%}
                {%- set label = name|humanize -%}
            {%- endif -%}
        {%- endif -%}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {%- endif -%}
{%- endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    {%- if compound is defined and compound -%}
        {%- set element = 'fieldset' -%}
    {%- endif -%}
    <{{ element|default('div') }} class=\"form-group\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </{{ element|default('div') }}>
{%- endblock form_row %}

{# Errors #}

{% block form_errors -%}
    {%- if errors|length > 0 -%}
    <div class=\"{% if form.parent %}invalid-feedback{% else %}alert alert-danger{% endif %}\">
        <ul class=\"list-unstyled mb-0\">
            {%- for error in errors -%}
                <li>{{ error.message }}</li>
            {%- endfor -%}
        </ul>
    </div>
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_4_layout.html.twig", "/Applications/MAMP/htdocs/sf3/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_4_layout.html.twig");
    }
}
