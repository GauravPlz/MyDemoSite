<?php

/* modules/jssor/templates/views-view-jssor-row.html.twig */
class __TwigTemplate_beb7e30a2dc79124e9b40063dd882b8f2fb767f080a0934a893a7479e5a847bb extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 17
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["image"]) ? $context["image"] : null), "html", null, true));
        echo "
<div u=\"caption\" t='";
        // line 18
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["play_in_transition"]) ? $context["play_in_transition"] : null), "html", null, true));
        echo "' t2='";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["play_out_transition"]) ? $context["play_out_transition"] : null), "html", null, true));
        echo "' class=\"slider__caption\">
  <div class=\"slider__caption--background\">
  </div>
  <div class=\"slider__caption--title\">
    ";
        // line 22
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["caption"]) ? $context["caption"] : null), "html", null, true));
        echo "
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "modules/jssor/templates/views-view-jssor-row.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 22,  47 => 18,  43 => 17,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation to display an item in a Jssor views.*/
/*  **/
/*  * Available variables:*/
/*  * - image: Slider image.*/
/*  * - caption: Slider caption.*/
/*  * - play_in_transition*/
/*  * - play_out_transition*/
/*  **/
/*  * @see template_preprocess_views_view_jssor_row()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {{ image }}*/
/* <div u="caption" t='{{ play_in_transition }}' t2='{{ play_out_transition }}' class="slider__caption">*/
/*   <div class="slider__caption--background">*/
/*   </div>*/
/*   <div class="slider__caption--title">*/
/*     {{ caption }}*/
/*   </div>*/
/* </div>*/
