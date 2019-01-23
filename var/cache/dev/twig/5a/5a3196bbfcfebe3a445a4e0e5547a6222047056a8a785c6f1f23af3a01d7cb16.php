<?php

/* bootstrap_base_layout.html.twig */
class __TwigTemplate_7ec6ba3caed7f789380d57dcdb8d59332eba54caa02aa10c5666851c8b6a0f19 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_base_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_31791e75a01dd388783ae16cd51a9f7a01dffbbe0ad0301140f648aa75d28820 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31791e75a01dd388783ae16cd51a9f7a01dffbbe0ad0301140f648aa75d28820->enter($__internal_31791e75a01dd388783ae16cd51a9f7a01dffbbe0ad0301140f648aa75d28820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_base_layout.html.twig"));

        $__internal_af2ce4e877a4d1a7a44b72a6cb1bd7311b676eeddbccad29d854d0adec7ca3aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af2ce4e877a4d1a7a44b72a6cb1bd7311b676eeddbccad29d854d0adec7ca3aa->enter($__internal_af2ce4e877a4d1a7a44b72a6cb1bd7311b676eeddbccad29d854d0adec7ca3aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_base_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('money_widget', $context, $blocks);
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 29
        echo "
";
        // line 30
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 43
        echo "
";
        // line 44
        $this->displayBlock('date_widget', $context, $blocks);
        // line 62
        echo "
";
        // line 63
        $this->displayBlock('time_widget', $context, $blocks);
        // line 78
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 116
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 120
        echo "
";
        // line 121
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 140
        echo "
";
        // line 142
        echo "
";
        // line 143
        $this->displayBlock('choice_label', $context, $blocks);
        // line 148
        echo "
";
        // line 149
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 152
        echo "
";
        // line 153
        $this->displayBlock('radio_label', $context, $blocks);
        // line 156
        echo "
";
        // line 158
        echo "
";
        // line 159
        $this->displayBlock('button_row', $context, $blocks);
        // line 164
        echo "
";
        // line 165
        $this->displayBlock('choice_row', $context, $blocks);
        // line 169
        echo "
";
        // line 170
        $this->displayBlock('date_row', $context, $blocks);
        // line 174
        echo "
";
        // line 175
        $this->displayBlock('time_row', $context, $blocks);
        // line 179
        echo "
";
        // line 180
        $this->displayBlock('datetime_row', $context, $blocks);
        
        $__internal_31791e75a01dd388783ae16cd51a9f7a01dffbbe0ad0301140f648aa75d28820->leave($__internal_31791e75a01dd388783ae16cd51a9f7a01dffbbe0ad0301140f648aa75d28820_prof);

        
        $__internal_af2ce4e877a4d1a7a44b72a6cb1bd7311b676eeddbccad29d854d0adec7ca3aa->leave($__internal_af2ce4e877a4d1a7a44b72a6cb1bd7311b676eeddbccad29d854d0adec7ca3aa_prof);

    }

    // line 5
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_9cf6c9b040cb79e17530986a2e19040c9dfafd2dc66e2da3e8bac772e53d5233 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cf6c9b040cb79e17530986a2e19040c9dfafd2dc66e2da3e8bac772e53d5233->enter($__internal_9cf6c9b040cb79e17530986a2e19040c9dfafd2dc66e2da3e8bac772e53d5233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_2af9f202812a39bf2c34b66d2f05925fd8b42b6a8151048764efb8c1df21f1b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2af9f202812a39bf2c34b66d2f05925fd8b42b6a8151048764efb8c1df21f1b1->enter($__internal_2af9f202812a39bf2c34b66d2f05925fd8b42b6a8151048764efb8c1df21f1b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 6
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 7
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_2af9f202812a39bf2c34b66d2f05925fd8b42b6a8151048764efb8c1df21f1b1->leave($__internal_2af9f202812a39bf2c34b66d2f05925fd8b42b6a8151048764efb8c1df21f1b1_prof);

        
        $__internal_9cf6c9b040cb79e17530986a2e19040c9dfafd2dc66e2da3e8bac772e53d5233->leave($__internal_9cf6c9b040cb79e17530986a2e19040c9dfafd2dc66e2da3e8bac772e53d5233_prof);

    }

    // line 10
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_782c8f42c631b53c9d13b86ea5e3dd7c7d64f9190b68d0710f540a1fc5559f58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_782c8f42c631b53c9d13b86ea5e3dd7c7d64f9190b68d0710f540a1fc5559f58->enter($__internal_782c8f42c631b53c9d13b86ea5e3dd7c7d64f9190b68d0710f540a1fc5559f58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_dd2365326ff7b018ea3488124222867e4a61c73bd48520eb4b534e836e2b2a21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd2365326ff7b018ea3488124222867e4a61c73bd48520eb4b534e836e2b2a21->enter($__internal_dd2365326ff7b018ea3488124222867e4a61c73bd48520eb4b534e836e2b2a21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 11
        echo "<div class=\"input-group";
        echo twig_escape_filter($this->env, ((array_key_exists("group_class", $context)) ? (_twig_default_filter(($context["group_class"] ?? $this->getContext($context, "group_class")), "")) : ("")), "html", null, true);
        echo "\">";
        // line 12
        $context["append"] = (is_string($__internal_34dc0bb94a57dedad44ff84aaabda525a87aa0e9a33dffe8abd2db9f43179b47 = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_1631f4494bb3fb4e35a84f6f532e7cbe3fd8b19b7d01cd308aea52c85009021d = "{{") && ('' === $__internal_1631f4494bb3fb4e35a84f6f532e7cbe3fd8b19b7d01cd308aea52c85009021d || 0 === strpos($__internal_34dc0bb94a57dedad44ff84aaabda525a87aa0e9a33dffe8abd2db9f43179b47, $__internal_1631f4494bb3fb4e35a84f6f532e7cbe3fd8b19b7d01cd308aea52c85009021d)));
        // line 13
        if ( !($context["append"] ?? $this->getContext($context, "append"))) {
            // line 14
            echo "<span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>";
        }
        // line 16
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 17
        if (($context["append"] ?? $this->getContext($context, "append"))) {
            // line 18
            echo "<span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>";
        }
        // line 20
        echo "</div>";
        
        $__internal_dd2365326ff7b018ea3488124222867e4a61c73bd48520eb4b534e836e2b2a21->leave($__internal_dd2365326ff7b018ea3488124222867e4a61c73bd48520eb4b534e836e2b2a21_prof);

        
        $__internal_782c8f42c631b53c9d13b86ea5e3dd7c7d64f9190b68d0710f540a1fc5559f58->leave($__internal_782c8f42c631b53c9d13b86ea5e3dd7c7d64f9190b68d0710f540a1fc5559f58_prof);

    }

    // line 23
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_bceed384d80eb406837e19f3f27a3a847d64d19bf1fbf8d6f98df4cea2dffa29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bceed384d80eb406837e19f3f27a3a847d64d19bf1fbf8d6f98df4cea2dffa29->enter($__internal_bceed384d80eb406837e19f3f27a3a847d64d19bf1fbf8d6f98df4cea2dffa29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_f4d289bfe89f91fd647c51ac075f1a743eeb0ab3c938cfc9b44d52a5978e94e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4d289bfe89f91fd647c51ac075f1a743eeb0ab3c938cfc9b44d52a5978e94e2->enter($__internal_f4d289bfe89f91fd647c51ac075f1a743eeb0ab3c938cfc9b44d52a5978e94e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 24
        echo "<div class=\"input-group\">";
        // line 25
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 26
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_f4d289bfe89f91fd647c51ac075f1a743eeb0ab3c938cfc9b44d52a5978e94e2->leave($__internal_f4d289bfe89f91fd647c51ac075f1a743eeb0ab3c938cfc9b44d52a5978e94e2_prof);

        
        $__internal_bceed384d80eb406837e19f3f27a3a847d64d19bf1fbf8d6f98df4cea2dffa29->leave($__internal_bceed384d80eb406837e19f3f27a3a847d64d19bf1fbf8d6f98df4cea2dffa29_prof);

    }

    // line 30
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_35331e5f8ad77357b2e41e90bebfb806788a771c77b7fb9dd00e2cde3dee8b7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35331e5f8ad77357b2e41e90bebfb806788a771c77b7fb9dd00e2cde3dee8b7d->enter($__internal_35331e5f8ad77357b2e41e90bebfb806788a771c77b7fb9dd00e2cde3dee8b7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_768a0f4c8b5e3f528a32af643325023df8e29f86e18ae4b33e60e517cd7189b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_768a0f4c8b5e3f528a32af643325023df8e29f86e18ae4b33e60e517cd7189b1->enter($__internal_768a0f4c8b5e3f528a32af643325023df8e29f86e18ae4b33e60e517cd7189b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 31
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 32
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 34
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 35
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 36
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            // line 37
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            // line 38
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 39
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 40
            echo "</div>";
        }
        
        $__internal_768a0f4c8b5e3f528a32af643325023df8e29f86e18ae4b33e60e517cd7189b1->leave($__internal_768a0f4c8b5e3f528a32af643325023df8e29f86e18ae4b33e60e517cd7189b1_prof);

        
        $__internal_35331e5f8ad77357b2e41e90bebfb806788a771c77b7fb9dd00e2cde3dee8b7d->leave($__internal_35331e5f8ad77357b2e41e90bebfb806788a771c77b7fb9dd00e2cde3dee8b7d_prof);

    }

    // line 44
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_3d7b9b60bed03cec80282cdc1bd697952e18ea031bd03894e2b8fab2df051d93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d7b9b60bed03cec80282cdc1bd697952e18ea031bd03894e2b8fab2df051d93->enter($__internal_3d7b9b60bed03cec80282cdc1bd697952e18ea031bd03894e2b8fab2df051d93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_d7570269ded22b7864adb9a1ff7d4b9bd73c55c296f9642d5fdeaaa2fba074f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7570269ded22b7864adb9a1ff7d4b9bd73c55c296f9642d5fdeaaa2fba074f5->enter($__internal_d7570269ded22b7864adb9a1ff7d4b9bd73c55c296f9642d5fdeaaa2fba074f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 45
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 46
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 48
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 49
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 50
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 52
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 53
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 54
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 55
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 57
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 58
                echo "</div>";
            }
        }
        
        $__internal_d7570269ded22b7864adb9a1ff7d4b9bd73c55c296f9642d5fdeaaa2fba074f5->leave($__internal_d7570269ded22b7864adb9a1ff7d4b9bd73c55c296f9642d5fdeaaa2fba074f5_prof);

        
        $__internal_3d7b9b60bed03cec80282cdc1bd697952e18ea031bd03894e2b8fab2df051d93->leave($__internal_3d7b9b60bed03cec80282cdc1bd697952e18ea031bd03894e2b8fab2df051d93_prof);

    }

    // line 63
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_9d9725b17e68e277820bb386d3418b5373ad1b03e2633002098d0145d06ba8b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d9725b17e68e277820bb386d3418b5373ad1b03e2633002098d0145d06ba8b7->enter($__internal_9d9725b17e68e277820bb386d3418b5373ad1b03e2633002098d0145d06ba8b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_a26d4f2500175c1a991964d10d479d208462f3631396d6d02908423ee08bd2bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a26d4f2500175c1a991964d10d479d208462f3631396d6d02908423ee08bd2bd->enter($__internal_a26d4f2500175c1a991964d10d479d208462f3631396d6d02908423ee08bd2bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 64
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 65
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 67
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 68
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 69
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 71
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 72
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 73
                echo "</div>";
            }
        }
        
        $__internal_a26d4f2500175c1a991964d10d479d208462f3631396d6d02908423ee08bd2bd->leave($__internal_a26d4f2500175c1a991964d10d479d208462f3631396d6d02908423ee08bd2bd_prof);

        
        $__internal_9d9725b17e68e277820bb386d3418b5373ad1b03e2633002098d0145d06ba8b7->leave($__internal_9d9725b17e68e277820bb386d3418b5373ad1b03e2633002098d0145d06ba8b7_prof);

    }

    // line 78
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_43faee87633f62c8a38df81a1407e54f4e37d68d511f7190df6cc9141bf5a5e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43faee87633f62c8a38df81a1407e54f4e37d68d511f7190df6cc9141bf5a5e2->enter($__internal_43faee87633f62c8a38df81a1407e54f4e37d68d511f7190df6cc9141bf5a5e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_7979257dc227e9a5b352c768ad3e24e31b9bdb6ef444d8fce4464fcf23e6606a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7979257dc227e9a5b352c768ad3e24e31b9bdb6ef444d8fce4464fcf23e6606a->enter($__internal_7979257dc227e9a5b352c768ad3e24e31b9bdb6ef444d8fce4464fcf23e6606a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 79
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 80
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 82
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 83
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 84
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 85
            echo "<div class=\"table-responsive\">
                <table class=\"table ";
            // line 86
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter(($context["table_class"] ?? $this->getContext($context, "table_class")), "table-bordered table-condensed table-striped")) : ("table-bordered table-condensed table-striped")), "html", null, true);
            echo "\">
                    <thead>
                    <tr>";
            // line 89
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'label');
                echo "</th>";
            }
            // line 90
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'label');
                echo "</th>";
            }
            // line 91
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 92
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'label');
                echo "</th>";
            }
            // line 93
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'label');
                echo "</th>";
            }
            // line 94
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 95
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 96
            echo "</tr>
                    </thead>
                    <tbody>
                    <tr>";
            // line 100
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'widget');
                echo "</td>";
            }
            // line 101
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'widget');
                echo "</td>";
            }
            // line 102
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 103
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'widget');
                echo "</td>";
            }
            // line 104
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 105
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 106
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 107
            echo "</tr>
                    </tbody>
                </table>
            </div>";
            // line 111
            if (($context["with_invert"] ?? $this->getContext($context, "with_invert"))) {
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 112
            echo "</div>";
        }
        
        $__internal_7979257dc227e9a5b352c768ad3e24e31b9bdb6ef444d8fce4464fcf23e6606a->leave($__internal_7979257dc227e9a5b352c768ad3e24e31b9bdb6ef444d8fce4464fcf23e6606a_prof);

        
        $__internal_43faee87633f62c8a38df81a1407e54f4e37d68d511f7190df6cc9141bf5a5e2->leave($__internal_43faee87633f62c8a38df81a1407e54f4e37d68d511f7190df6cc9141bf5a5e2_prof);

    }

    // line 116
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_8dc34c0481d1b81a913823cbea875957f2809356663438b3a69cdd9f963baf0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8dc34c0481d1b81a913823cbea875957f2809356663438b3a69cdd9f963baf0e->enter($__internal_8dc34c0481d1b81a913823cbea875957f2809356663438b3a69cdd9f963baf0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_b7f1dbde7c04c52d0e25fb231a79ca5cbaac3f17f017282cc535505f09b280da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7f1dbde7c04c52d0e25fb231a79ca5cbaac3f17f017282cc535505f09b280da->enter($__internal_b7f1dbde7c04c52d0e25fb231a79ca5cbaac3f17f017282cc535505f09b280da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 117
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 118
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_b7f1dbde7c04c52d0e25fb231a79ca5cbaac3f17f017282cc535505f09b280da->leave($__internal_b7f1dbde7c04c52d0e25fb231a79ca5cbaac3f17f017282cc535505f09b280da_prof);

        
        $__internal_8dc34c0481d1b81a913823cbea875957f2809356663438b3a69cdd9f963baf0e->leave($__internal_8dc34c0481d1b81a913823cbea875957f2809356663438b3a69cdd9f963baf0e_prof);

    }

    // line 121
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_02b77b2d6d6926f30c0a4997414c39e0617398b59ff529fb855797f225b4cc0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02b77b2d6d6926f30c0a4997414c39e0617398b59ff529fb855797f225b4cc0a->enter($__internal_02b77b2d6d6926f30c0a4997414c39e0617398b59ff529fb855797f225b4cc0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_94c842716ccf18acb9e289594a33c6084c8cd4baa373cc6cd6304d3124e971ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94c842716ccf18acb9e289594a33c6084c8cd4baa373cc6cd6304d3124e971ec->enter($__internal_94c842716ccf18acb9e289594a33c6084c8cd4baa373cc6cd6304d3124e971ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 122
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 123
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 124
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 125
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 126
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 130
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 131
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 132
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 133
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 134
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 137
            echo "</div>";
        }
        
        $__internal_94c842716ccf18acb9e289594a33c6084c8cd4baa373cc6cd6304d3124e971ec->leave($__internal_94c842716ccf18acb9e289594a33c6084c8cd4baa373cc6cd6304d3124e971ec_prof);

        
        $__internal_02b77b2d6d6926f30c0a4997414c39e0617398b59ff529fb855797f225b4cc0a->leave($__internal_02b77b2d6d6926f30c0a4997414c39e0617398b59ff529fb855797f225b4cc0a_prof);

    }

    // line 143
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_f338c0ab27a8635ddc3a07ad200f2f103e02fb9d6963261348d3814750658ccb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f338c0ab27a8635ddc3a07ad200f2f103e02fb9d6963261348d3814750658ccb->enter($__internal_f338c0ab27a8635ddc3a07ad200f2f103e02fb9d6963261348d3814750658ccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_3745ea55bf597858c4fa01c23f2c89af30360821d3a23a2253baaf8161f7de39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3745ea55bf597858c4fa01c23f2c89af30360821d3a23a2253baaf8161f7de39->enter($__internal_3745ea55bf597858c4fa01c23f2c89af30360821d3a23a2253baaf8161f7de39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 145
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 146
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_3745ea55bf597858c4fa01c23f2c89af30360821d3a23a2253baaf8161f7de39->leave($__internal_3745ea55bf597858c4fa01c23f2c89af30360821d3a23a2253baaf8161f7de39_prof);

        
        $__internal_f338c0ab27a8635ddc3a07ad200f2f103e02fb9d6963261348d3814750658ccb->leave($__internal_f338c0ab27a8635ddc3a07ad200f2f103e02fb9d6963261348d3814750658ccb_prof);

    }

    // line 149
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_ab9c5977ff8406ddba39f905aa8982b52c4b2f568bd9ef3ab9683966a4f0c0e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab9c5977ff8406ddba39f905aa8982b52c4b2f568bd9ef3ab9683966a4f0c0e4->enter($__internal_ab9c5977ff8406ddba39f905aa8982b52c4b2f568bd9ef3ab9683966a4f0c0e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_7f7a512fd043c550bd0223b71e1413958b477f3686c06182a2793ad21a1ed7aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f7a512fd043c550bd0223b71e1413958b477f3686c06182a2793ad21a1ed7aa->enter($__internal_7f7a512fd043c550bd0223b71e1413958b477f3686c06182a2793ad21a1ed7aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 150
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_7f7a512fd043c550bd0223b71e1413958b477f3686c06182a2793ad21a1ed7aa->leave($__internal_7f7a512fd043c550bd0223b71e1413958b477f3686c06182a2793ad21a1ed7aa_prof);

        
        $__internal_ab9c5977ff8406ddba39f905aa8982b52c4b2f568bd9ef3ab9683966a4f0c0e4->leave($__internal_ab9c5977ff8406ddba39f905aa8982b52c4b2f568bd9ef3ab9683966a4f0c0e4_prof);

    }

    // line 153
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_3f3ce6540454d4ac401672c8f9274406e5fd1a537d06b30e29e1b28bab4808dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f3ce6540454d4ac401672c8f9274406e5fd1a537d06b30e29e1b28bab4808dd->enter($__internal_3f3ce6540454d4ac401672c8f9274406e5fd1a537d06b30e29e1b28bab4808dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_6c3f8b72c7d233cef9ac5f9e99ebfd0ce0f9ea54cde10bd00199b8aef32e0d29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c3f8b72c7d233cef9ac5f9e99ebfd0ce0f9ea54cde10bd00199b8aef32e0d29->enter($__internal_6c3f8b72c7d233cef9ac5f9e99ebfd0ce0f9ea54cde10bd00199b8aef32e0d29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 154
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_6c3f8b72c7d233cef9ac5f9e99ebfd0ce0f9ea54cde10bd00199b8aef32e0d29->leave($__internal_6c3f8b72c7d233cef9ac5f9e99ebfd0ce0f9ea54cde10bd00199b8aef32e0d29_prof);

        
        $__internal_3f3ce6540454d4ac401672c8f9274406e5fd1a537d06b30e29e1b28bab4808dd->leave($__internal_3f3ce6540454d4ac401672c8f9274406e5fd1a537d06b30e29e1b28bab4808dd_prof);

    }

    // line 159
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_f5f9becaf9d5ff38fb755f4bfa06eed27eaa2eb6f69fff896c1526befa28ea44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5f9becaf9d5ff38fb755f4bfa06eed27eaa2eb6f69fff896c1526befa28ea44->enter($__internal_f5f9becaf9d5ff38fb755f4bfa06eed27eaa2eb6f69fff896c1526befa28ea44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_f0ae078d34597bc7cec9d30c0b41125d12ec6dac708436ecc181129e3287611a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0ae078d34597bc7cec9d30c0b41125d12ec6dac708436ecc181129e3287611a->enter($__internal_f0ae078d34597bc7cec9d30c0b41125d12ec6dac708436ecc181129e3287611a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 160
        echo "<div class=\"form-group\">";
        // line 161
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 162
        echo "</div>";
        
        $__internal_f0ae078d34597bc7cec9d30c0b41125d12ec6dac708436ecc181129e3287611a->leave($__internal_f0ae078d34597bc7cec9d30c0b41125d12ec6dac708436ecc181129e3287611a_prof);

        
        $__internal_f5f9becaf9d5ff38fb755f4bfa06eed27eaa2eb6f69fff896c1526befa28ea44->leave($__internal_f5f9becaf9d5ff38fb755f4bfa06eed27eaa2eb6f69fff896c1526befa28ea44_prof);

    }

    // line 165
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_7fba9cf58d8faebb625653cb3bbd2f7a0da170d4a015532c1284bba9614af94f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fba9cf58d8faebb625653cb3bbd2f7a0da170d4a015532c1284bba9614af94f->enter($__internal_7fba9cf58d8faebb625653cb3bbd2f7a0da170d4a015532c1284bba9614af94f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_96c43eb8c8ca8fdbcc55b08b6eecbde6606f2d0c0841360c9a017d09665ff49b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96c43eb8c8ca8fdbcc55b08b6eecbde6606f2d0c0841360c9a017d09665ff49b->enter($__internal_96c43eb8c8ca8fdbcc55b08b6eecbde6606f2d0c0841360c9a017d09665ff49b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 166
        $context["force_error"] = true;
        // line 167
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_96c43eb8c8ca8fdbcc55b08b6eecbde6606f2d0c0841360c9a017d09665ff49b->leave($__internal_96c43eb8c8ca8fdbcc55b08b6eecbde6606f2d0c0841360c9a017d09665ff49b_prof);

        
        $__internal_7fba9cf58d8faebb625653cb3bbd2f7a0da170d4a015532c1284bba9614af94f->leave($__internal_7fba9cf58d8faebb625653cb3bbd2f7a0da170d4a015532c1284bba9614af94f_prof);

    }

    // line 170
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_4e7f59271eeca3f74b52c2c425fc74985726987b34ab8d151eb6f584348357dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e7f59271eeca3f74b52c2c425fc74985726987b34ab8d151eb6f584348357dd->enter($__internal_4e7f59271eeca3f74b52c2c425fc74985726987b34ab8d151eb6f584348357dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_68f584b056e43e709ae7a65150e09937c0c1dd1f3580d09f2884cfe0a0d3773c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68f584b056e43e709ae7a65150e09937c0c1dd1f3580d09f2884cfe0a0d3773c->enter($__internal_68f584b056e43e709ae7a65150e09937c0c1dd1f3580d09f2884cfe0a0d3773c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 171
        $context["force_error"] = true;
        // line 172
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_68f584b056e43e709ae7a65150e09937c0c1dd1f3580d09f2884cfe0a0d3773c->leave($__internal_68f584b056e43e709ae7a65150e09937c0c1dd1f3580d09f2884cfe0a0d3773c_prof);

        
        $__internal_4e7f59271eeca3f74b52c2c425fc74985726987b34ab8d151eb6f584348357dd->leave($__internal_4e7f59271eeca3f74b52c2c425fc74985726987b34ab8d151eb6f584348357dd_prof);

    }

    // line 175
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_76edc2723faa0ce8fad278a9eb888d907630bedb8cb2685daf2d60d7d434892a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76edc2723faa0ce8fad278a9eb888d907630bedb8cb2685daf2d60d7d434892a->enter($__internal_76edc2723faa0ce8fad278a9eb888d907630bedb8cb2685daf2d60d7d434892a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_f8aa2f4dbb9c4400ebf9bc977ed6606a15c3f05ec7ec1f26718197922464f02b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8aa2f4dbb9c4400ebf9bc977ed6606a15c3f05ec7ec1f26718197922464f02b->enter($__internal_f8aa2f4dbb9c4400ebf9bc977ed6606a15c3f05ec7ec1f26718197922464f02b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 176
        $context["force_error"] = true;
        // line 177
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_f8aa2f4dbb9c4400ebf9bc977ed6606a15c3f05ec7ec1f26718197922464f02b->leave($__internal_f8aa2f4dbb9c4400ebf9bc977ed6606a15c3f05ec7ec1f26718197922464f02b_prof);

        
        $__internal_76edc2723faa0ce8fad278a9eb888d907630bedb8cb2685daf2d60d7d434892a->leave($__internal_76edc2723faa0ce8fad278a9eb888d907630bedb8cb2685daf2d60d7d434892a_prof);

    }

    // line 180
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_5b0cc5c73b6609b77b6a1315de9755ee9293effa7dd7bf9979324268dfc094c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b0cc5c73b6609b77b6a1315de9755ee9293effa7dd7bf9979324268dfc094c0->enter($__internal_5b0cc5c73b6609b77b6a1315de9755ee9293effa7dd7bf9979324268dfc094c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_eb4c7d2ee4fa3086896147734949a45517bc24b1e6a8230ad2a620967ce18c4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb4c7d2ee4fa3086896147734949a45517bc24b1e6a8230ad2a620967ce18c4c->enter($__internal_eb4c7d2ee4fa3086896147734949a45517bc24b1e6a8230ad2a620967ce18c4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 181
        $context["force_error"] = true;
        // line 182
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_eb4c7d2ee4fa3086896147734949a45517bc24b1e6a8230ad2a620967ce18c4c->leave($__internal_eb4c7d2ee4fa3086896147734949a45517bc24b1e6a8230ad2a620967ce18c4c_prof);

        
        $__internal_5b0cc5c73b6609b77b6a1315de9755ee9293effa7dd7bf9979324268dfc094c0->leave($__internal_5b0cc5c73b6609b77b6a1315de9755ee9293effa7dd7bf9979324268dfc094c0_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_base_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  731 => 182,  729 => 181,  720 => 180,  710 => 177,  708 => 176,  699 => 175,  689 => 172,  687 => 171,  678 => 170,  668 => 167,  666 => 166,  657 => 165,  647 => 162,  645 => 161,  643 => 160,  634 => 159,  624 => 154,  615 => 153,  605 => 150,  596 => 149,  586 => 146,  584 => 145,  575 => 143,  564 => 137,  558 => 134,  557 => 133,  556 => 132,  552 => 131,  548 => 130,  541 => 126,  540 => 125,  539 => 124,  535 => 123,  533 => 122,  524 => 121,  514 => 118,  512 => 117,  503 => 116,  492 => 112,  488 => 111,  483 => 107,  477 => 106,  471 => 105,  465 => 104,  459 => 103,  453 => 102,  447 => 101,  441 => 100,  436 => 96,  430 => 95,  424 => 94,  418 => 93,  412 => 92,  406 => 91,  400 => 90,  394 => 89,  389 => 86,  386 => 85,  384 => 84,  380 => 83,  378 => 82,  375 => 80,  373 => 79,  364 => 78,  352 => 73,  350 => 72,  340 => 71,  335 => 69,  333 => 68,  331 => 67,  328 => 65,  326 => 64,  317 => 63,  305 => 58,  303 => 57,  301 => 55,  300 => 54,  299 => 53,  298 => 52,  293 => 50,  291 => 49,  289 => 48,  286 => 46,  284 => 45,  275 => 44,  264 => 40,  262 => 39,  260 => 38,  258 => 37,  256 => 36,  252 => 35,  250 => 34,  247 => 32,  245 => 31,  236 => 30,  225 => 26,  223 => 25,  221 => 24,  212 => 23,  202 => 20,  197 => 18,  195 => 17,  193 => 16,  188 => 14,  186 => 13,  184 => 12,  180 => 11,  171 => 10,  161 => 7,  159 => 6,  150 => 5,  140 => 180,  137 => 179,  135 => 175,  132 => 174,  130 => 170,  127 => 169,  125 => 165,  122 => 164,  120 => 159,  117 => 158,  114 => 156,  112 => 153,  109 => 152,  107 => 149,  104 => 148,  102 => 143,  99 => 142,  96 => 140,  94 => 121,  91 => 120,  89 => 116,  87 => 78,  85 => 63,  82 => 62,  80 => 44,  77 => 43,  75 => 30,  72 => 29,  70 => 23,  67 => 22,  65 => 10,  62 => 9,  60 => 5,  57 => 4,  54 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{# Widgets #}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block money_widget -%}
    <div class=\"input-group{{ group_class|default('') }}\">
        {%- set append = money_pattern starts with '{{' -%}
        {%- if not append -%}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {%- endif -%}
        {{- block('form_widget_simple') -}}
        {%- if append -%}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {%- endif -%}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif -%}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {%- if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {%- if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {%- endif -%}
{%- endblock date_widget %}

{% block time_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {%- if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}{% if with_minutes %}:{{ form_widget(form.minute) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {%- if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {%- endif -%}
{%- endblock time_widget %}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            <div class=\"table-responsive\">
                <table class=\"table {{ table_class|default('table-bordered table-condensed table-striped') }}\">
                    <thead>
                    <tr>
                        {%- if with_years %}<th>{{ form_label(form.years) }}</th>{% endif -%}
                        {%- if with_months %}<th>{{ form_label(form.months) }}</th>{% endif -%}
                        {%- if with_weeks %}<th>{{ form_label(form.weeks) }}</th>{% endif -%}
                        {%- if with_days %}<th>{{ form_label(form.days) }}</th>{% endif -%}
                        {%- if with_hours %}<th>{{ form_label(form.hours) }}</th>{% endif -%}
                        {%- if with_minutes %}<th>{{ form_label(form.minutes) }}</th>{% endif -%}
                        {%- if with_seconds %}<th>{{ form_label(form.seconds) }}</th>{% endif -%}
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        {%- if with_years %}<td>{{ form_widget(form.years) }}</td>{% endif -%}
                        {%- if with_months %}<td>{{ form_widget(form.months) }}</td>{% endif -%}
                        {%- if with_weeks %}<td>{{ form_widget(form.weeks) }}</td>{% endif -%}
                        {%- if with_days %}<td>{{ form_widget(form.days) }}</td>{% endif -%}
                        {%- if with_hours %}<td>{{ form_widget(form.hours) }}</td>{% endif -%}
                        {%- if with_minutes %}<td>{{ form_widget(form.minutes) }}</td>{% endif -%}
                        {%- if with_seconds %}<td>{{ form_widget(form.seconds) }}</td>{% endif -%}
                    </tr>
                    </tbody>
                </table>
            </div>
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{% block choice_widget_collapsed -%}
    {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {{- parent() -}}
{%- endblock choice_widget_collapsed %}

{% block choice_widget_expanded -%}
    {%- if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
            }) -}}
        {% endfor -%}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {%- endfor -%}
        </div>
    {%- endif -%}
{%- endblock choice_widget_expanded %}

{# Labels #}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock choice_label %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{# Rows #}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {%- set force_error = true -%}
    {{- block('form_row') -}}
{%- endblock choice_row %}

{% block date_row -%}
    {%- set force_error = true -%}
    {{- block('form_row') -}}
{%- endblock date_row %}

{% block time_row -%}
    {%- set force_error = true -%}
    {{- block('form_row') -}}
{%- endblock time_row %}

{% block datetime_row -%}
    {%- set force_error = true -%}
    {{- block('form_row') -}}
{%- endblock datetime_row %}
", "bootstrap_base_layout.html.twig", "/Applications/MAMP/htdocs/sf3/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_base_layout.html.twig");
    }
}
