<?php

/* themes/nexus/templates/layout/page.html.twig */
class __TwigTemplate_d02f2bc1412804e73b7ae0a8c80e2221449c855201e8eab018f8e41a1e82cc05 extends Twig_Template
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
        $tags = array("if" => 54, "set" => 150);
        $filters = array("striptags" => 78, "t" => 82);
        $functions = array("attach_library" => 72);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'set'),
                array('striptags', 't'),
                array('attach_library')
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

        // line 51
        echo "<div id=\"page\">
  <header id=\"masthead\" class=\"site-header container\" role=\"banner\">
    <div class=\"row\">
      ";
        // line 54
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array())) {
            // line 55
            echo "        <div id=\"logo\" class=\"site-branding col-sm-6\">
          ";
            // line 56
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
            echo "
        </div>
      ";
        }
        // line 59
        echo "      <div class=\"col-sm-6 mainmenu\">
        <div class=\"mobilenavi\"></div>
        <nav id=\"navigation\" role=\"navigation\">
          <div id=\"main-menu\">
            ";
        // line 63
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "main_navigation", array())) {
            // line 64
            echo "                ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "main_navigation", array()), "html", null, true));
            echo "
            ";
        }
        // line 66
        echo "          </div>
        </nav>
      </div>
    </div>
  </header>
  ";
        // line 71
        if ((isset($context["is_front"]) ? $context["is_front"] : null)) {
            // line 72
            echo "    ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->attachLibrary("nexus/slider-js"), "html", null, true));
            echo "
    ";
            // line 73
            if ((isset($context["slideshow_display"]) ? $context["slideshow_display"] : null)) {
                // line 74
                echo "      <div id=\"slidebox\" class=\"flexslider\">
        <ul class=\"slides\">
          <li>
            <img src=\"";
                // line 77
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . "themes/nexus/assets/images/slide-image-1.jpg"), "html", null, true));
                echo "\"/>
            ";
                // line 78
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, strip_tags((isset($context["slide1_head"]) ? $context["slide1_head"] : null)), "html", null, true));
                echo "
            ";
                // line 79
                if (((isset($context["slide1_head"]) ? $context["slide1_head"] : null) || (isset($context["slide1_desc"]) ? $context["slide1_desc"] : null))) {
                    // line 80
                    echo "              <div class=\"flex-caption\">
                <h2>";
                    // line 81
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, strip_tags((isset($context["slide1_head"]) ? $context["slide1_head"] : null)), "html", null, true));
                    echo "</h2>";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, strip_tags((isset($context["slide1_desc"]) ? $context["slide1_desc"] : null)), "html", null, true));
                    echo "
                <a class=\"frmore\" href=\"";
                    // line 82
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, strip_tags((isset($context["slide1_url"]) ? $context["slide1_url"] : null)), "html", null, true));
                    echo "\">";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Read More")));
                    echo "</a>
              </div>
            ";
                }
                // line 85
                echo "          </li>
          <li>
            <img src=\"";
                // line 87
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . "themes/nexus/assets/images/slide-image-2.jpg"), "html", null, true));
                echo "\"/>
            ";
                // line 88
                if (((isset($context["slide2_head"]) ? $context["slide2_head"] : null) || (isset($context["slide2_desc"]) ? $context["slide2_desc"] : null))) {
                    // line 89
                    echo "              <div class=\"flex-caption\">
                <h2>";
                    // line 90
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, strip_tags((isset($context["slide2_head"]) ? $context["slide2_head"] : null)), "html", null, true));
                    echo "</h2>";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, strip_tags((isset($context["slide2_desc"]) ? $context["slide2_desc"] : null)), "html", null, true));
                    echo "
                <a class=\"frmore\" href=\"";
                    // line 91
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, strip_tags((isset($context["slide2_url"]) ? $context["slide2_url"] : null)), "html", null, true));
                    echo "\">";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Read More")));
                    echo "</a>
              </div>
            ";
                }
                // line 94
                echo "          </li>
          <li>
            <img src=\"";
                // line 96
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . "themes/nexus/assets/images/slide-image-3.jpg"), "html", null, true));
                echo "\"/>
            ";
                // line 97
                if (((isset($context["slide3_head"]) ? $context["slide3_head"] : null) || (isset($context["slide3_desc"]) ? $context["slide3_desc"] : null))) {
                    // line 98
                    echo "              <div class=\"flex-caption\">
                <h2>";
                    // line 99
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, strip_tags((isset($context["slide3_head"]) ? $context["slide3_head"] : null)), "html", null, true));
                    echo "</h2>";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, strip_tags((isset($context["slide3_desc"]) ? $context["slide3_desc"] : null)), "html", null, true));
                    echo "
                <a class=\"frmore\" href=\"";
                    // line 100
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, strip_tags((isset($context["slide3_url"]) ? $context["slide3_url"] : null)), "html", null, true));
                    echo "\">";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Read More")));
                    echo "</a>
              </div>
            ";
                }
                // line 103
                echo "          </li>
        </ul><!-- /slides -->
        <div class=\"doverlay\"></div>
      </div>
    ";
            }
            // line 108
            echo "  ";
        }
        // line 109
        echo "
  ";
        // line 110
        if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "preface_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "preface_second", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "preface_third", array()))) {
            // line 111
            echo "    <div id=\"preface-area\">
      <div class=\"container\">
        <div class=\"row\">
          ";
            // line 114
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "preface_first", array())) {
                // line 115
                echo "            <div class=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ("preface-block col-sm-" . (isset($context["preface_col"]) ? $context["preface_col"] : null)), "html", null, true));
                echo "\">
              ";
                // line 116
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "preface_first", array()), "html", null, true));
                echo "
            </div>
          ";
            }
            // line 119
            echo "          ";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "preface_second", array())) {
                // line 120
                echo "            <div class=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ("preface-block col-sm-" . (isset($context["preface_col"]) ? $context["preface_col"] : null)), "html", null, true));
                echo "\">
              ";
                // line 121
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "preface_second", array()), "html", null, true));
                echo "
            </div>
          ";
            }
            // line 124
            echo "          ";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "preface_third", array())) {
                // line 125
                echo "            <div class=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ("preface-block col-sm-" . (isset($context["preface_col"]) ? $context["preface_col"] : null)), "html", null, true));
                echo "\">
              ";
                // line 126
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "preface_third", array()), "html", null, true));
                echo "
            </div>
          ";
            }
            // line 129
            echo "        </div>
      </div>
    </div>
  ";
        }
        // line 133
        echo "
  ";
        // line 134
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array())) {
            // line 135
            echo "    <div id=\"highlighted-block\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-sm-12\">
            ";
            // line 139
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
            echo "
          </div>
        </div>
      </div>
    </div>
  ";
        }
        // line 145
        echo "
  <div id=\"main-content\">
    <div class=\"container\">
      <div class=\"row\">
        ";
        // line 149
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 150
            echo "          ";
            $context["primary_col"] = 8;
            // line 151
            echo "        ";
        } else {
            // line 152
            echo "          ";
            $context["primary_col"] = 12;
            // line 153
            echo "        ";
        }
        // line 154
        echo "        <div id=\"primary\" class=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ("content-area col-sm-" . (isset($context["primary_col"]) ? $context["primary_col"] : null)), "html", null, true));
        echo "\">
          <section id=\"content\" role=\"main\" class=\"clearfix\">
            ";
        // line 156
        if ((isset($context["show_breadcrumbs"]) ? $context["show_breadcrumbs"] : null)) {
            // line 157
            echo "              ";
            if ((isset($context["breadcrumb"]) ? $context["breadcrumb"] : null)) {
                // line 158
                echo "                <div id=\"breadcrumbs\">
                  ";
                // line 159
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null), "html", null, true));
                echo "
                </div>
              ";
            }
            // line 162
            echo "            ";
        }
        // line 163
        echo "            ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["messages"]) ? $context["messages"] : null), "html", null, true));
        echo "
            ";
        // line 164
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_top", array())) {
            // line 165
            echo "              <div id=\"content_top\">
                ";
            // line 166
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_top", array()), "html", null, true));
            echo "
              </div>
            ";
        }
        // line 169
        echo "            <div id=\"content-wrap\">
              ";
        // line 170
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true));
        echo "
              ";
        // line 171
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
            </div>
          </section>
        </div>
        ";
        // line 175
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 176
            echo "          <aside id=\"sidebar\" class=\"col-sm-4\" role=\"complementary\">
           ";
            // line 177
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
            echo "
          </aside>
        ";
        }
        // line 180
        echo "      </div>
    </div>
  </div>

  ";
        // line 184
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array())) {
            // line 185
            echo "    <div id=\"footer-block\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-sm-12\">
            ";
            // line 189
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
            echo "
          </div>
        </div>
      </div>
    </div>
  ";
        }
        // line 195
        echo "
  ";
        // line 196
        if (((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_fourth", array()))) {
            // line 197
            echo "    <div id=\"bottom\">
      <div class=\"container\">
        <div class=\"row\">
          ";
            // line 200
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array())) {
                // line 201
                echo "            <div class=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ("footer-block col-sm-" . (isset($context["footer_col"]) ? $context["footer_col"] : null)), "html", null, true));
                echo "\">
              ";
                // line 202
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()), "html", null, true));
                echo "
            </div>
          ";
            }
            // line 205
            echo "          ";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array())) {
                // line 206
                echo "            <div class=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ("footer-block col-sm-" . (isset($context["footer_col"]) ? $context["footer_col"] : null)), "html", null, true));
                echo "\">
              ";
                // line 207
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array()), "html", null, true));
                echo "
            </div>
          ";
            }
            // line 210
            echo "          ";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array())) {
                // line 211
                echo "            <div class=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ("footer-block col-sm-" . (isset($context["footer_col"]) ? $context["footer_col"] : null)), "html", null, true));
                echo "\">
              ";
                // line 212
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array()), "html", null, true));
                echo "
            </div>
          ";
            }
            // line 215
            echo "          ";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_fourth", array())) {
                // line 216
                echo "            <div class=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ("footer-block col-sm-" . (isset($context["footer_col"]) ? $context["footer_col"] : null)), "html", null, true));
                echo "\">
              ";
                // line 217
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_fourth", array()), "html", null, true));
                echo "
            </div>
          ";
            }
            // line 220
            echo "        </div>
      </div>
    </div>
  ";
        }
        // line 224
        echo "
  <footer id=\"colophon\" class=\"site-footer\" role=\"contentinfo\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"fcred col-sm-12\">
          ";
        // line 229
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Copyright")));
        echo " &copy; ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["this_year"]) ? $context["this_year"] : null), "html", null, true));
        echo ", <a href=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["front_page"]) ? $context["front_page"] : null), "html", null, true));
        echo "\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true));
        echo "</a>. ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Theme by")));
        echo " <a href=\"http://www.devsaran.com\" target=\"_blank\">Devsaran</a>.
        </div>
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/nexus/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  447 => 229,  440 => 224,  434 => 220,  428 => 217,  423 => 216,  420 => 215,  414 => 212,  409 => 211,  406 => 210,  400 => 207,  395 => 206,  392 => 205,  386 => 202,  381 => 201,  379 => 200,  374 => 197,  372 => 196,  369 => 195,  360 => 189,  354 => 185,  352 => 184,  346 => 180,  340 => 177,  337 => 176,  335 => 175,  328 => 171,  324 => 170,  321 => 169,  315 => 166,  312 => 165,  310 => 164,  305 => 163,  302 => 162,  296 => 159,  293 => 158,  290 => 157,  288 => 156,  282 => 154,  279 => 153,  276 => 152,  273 => 151,  270 => 150,  268 => 149,  262 => 145,  253 => 139,  247 => 135,  245 => 134,  242 => 133,  236 => 129,  230 => 126,  225 => 125,  222 => 124,  216 => 121,  211 => 120,  208 => 119,  202 => 116,  197 => 115,  195 => 114,  190 => 111,  188 => 110,  185 => 109,  182 => 108,  175 => 103,  167 => 100,  161 => 99,  158 => 98,  156 => 97,  152 => 96,  148 => 94,  140 => 91,  134 => 90,  131 => 89,  129 => 88,  125 => 87,  121 => 85,  113 => 82,  107 => 81,  104 => 80,  102 => 79,  98 => 78,  94 => 77,  89 => 74,  87 => 73,  82 => 72,  80 => 71,  73 => 66,  67 => 64,  65 => 63,  59 => 59,  53 => 56,  50 => 55,  48 => 54,  43 => 51,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Bartik's theme implementation to display a single page.*/
/*  **/
/*  * The doctype, html, head and body tags are not in this template. Instead they*/
/*  * can be found in the html.html.twig template normally located in the*/
/*  * core/modules/system directory.*/
/*  **/
/*  * Available variables:*/
/*  **/
/*  * General utility variables:*/
/*  * - base_path: The base URL path of the Drupal installation. Will usually be*/
/*  *   "/" unless you have installed Drupal in a sub-directory.*/
/*  * - is_front: A flag indicating if the current page is the front page.*/
/*  * - logged_in: A flag indicating if the user is registered and signed in.*/
/*  * - is_admin: A flag indicating if the user has permission to access*/
/*  *   administration pages.*/
/*  **/
/*  * Site identity:*/
/*  * - front_page: The URL of the front page. Use this instead of base_path when*/
/*  *   linking to the front page. This includes the language domain or prefix.*/
/*  **/
/*  * Page content (in order of occurrence in the default page.html.twig):*/
/*  * - node: Fully loaded node, if there is an automatically-loaded node*/
/*  *   associated with the page and the node ID is the second argument in the*/
/*  *   page's path (e.g. node/12345 and node/12345/revisions, but not*/
/*  *   comment/reply/12345).*/
/*  **/
/*  * Regions:*/
/*  * - page.header: Items for the Header region.*/
/*  * - page.main_navigation: Items for the Main Navigation region.*/
/*  * - page.preface_first: Items for the Preface First region.*/
/*  * - page.preface_second: Items for the Preface Second region.*/
/*  * - page.preface_third: Items for the Preface Third region.*/
/*  * - page.highlighted: Items for the Highlighted region.*/
/*  * - sidebar_first: Items for the First Sidebar region.*/
/*  * - content_top: Items for the Content Top region.*/
/*  * - help: Items for the Help region.*/
/*  * - content: Items for the Content region.*/
/*  * - footer: Items for the Footer region.*/
/*  * - footer_first: Items for the First Bottom region.*/
/*  * - footer_second: Items for the Second Bottom region.*/
/*  * - footer_third: Items for the Third Bottom region.*/
/*  * - footer_fourth: Items for the Fourth Bottom region.*/
/*  **/
/*  * @see template_preprocess_page()*/
/*  * @see html.html.twig*/
/*  *//* */
/* #}*/
/* <div id="page">*/
/*   <header id="masthead" class="site-header container" role="banner">*/
/*     <div class="row">*/
/*       {% if page.header %}*/
/*         <div id="logo" class="site-branding col-sm-6">*/
/*           {{ page.header }}*/
/*         </div>*/
/*       {% endif %}*/
/*       <div class="col-sm-6 mainmenu">*/
/*         <div class="mobilenavi"></div>*/
/*         <nav id="navigation" role="navigation">*/
/*           <div id="main-menu">*/
/*             {% if page.main_navigation %}*/
/*                 {{ page.main_navigation }}*/
/*             {% endif %}*/
/*           </div>*/
/*         </nav>*/
/*       </div>*/
/*     </div>*/
/*   </header>*/
/*   {% if is_front %}*/
/*     {{ attach_library('nexus/slider-js') }}*/
/*     {% if slideshow_display %}*/
/*       <div id="slidebox" class="flexslider">*/
/*         <ul class="slides">*/
/*           <li>*/
/*             <img src="{{ base_path ~ 'themes/nexus/assets/images/slide-image-1.jpg' }}"/>*/
/*             {{ slide1_head|striptags }}*/
/*             {% if slide1_head or slide1_desc %}*/
/*               <div class="flex-caption">*/
/*                 <h2>{{ slide1_head|striptags }}</h2>{{ slide1_desc|striptags }}*/
/*                 <a class="frmore" href="{{ slide1_url|striptags }}">{{ 'Read More'|t }}</a>*/
/*               </div>*/
/*             {% endif %}*/
/*           </li>*/
/*           <li>*/
/*             <img src="{{ base_path ~ 'themes/nexus/assets/images/slide-image-2.jpg' }}"/>*/
/*             {% if slide2_head or slide2_desc %}*/
/*               <div class="flex-caption">*/
/*                 <h2>{{ slide2_head|striptags }}</h2>{{ slide2_desc|striptags }}*/
/*                 <a class="frmore" href="{{ slide2_url|striptags }}">{{ 'Read More'|t }}</a>*/
/*               </div>*/
/*             {% endif %}*/
/*           </li>*/
/*           <li>*/
/*             <img src="{{ base_path ~ 'themes/nexus/assets/images/slide-image-3.jpg' }}"/>*/
/*             {% if slide3_head or slide3_desc %}*/
/*               <div class="flex-caption">*/
/*                 <h2>{{ slide3_head|striptags }}</h2>{{ slide3_desc|striptags }}*/
/*                 <a class="frmore" href="{{ slide3_url|striptags }}">{{ 'Read More'|t }}</a>*/
/*               </div>*/
/*             {% endif %}*/
/*           </li>*/
/*         </ul><!-- /slides -->*/
/*         <div class="doverlay"></div>*/
/*       </div>*/
/*     {% endif %}*/
/*   {% endif %}*/
/* */
/*   {% if page.preface_first or page.preface_second or page.preface_third %}*/
/*     <div id="preface-area">*/
/*       <div class="container">*/
/*         <div class="row">*/
/*           {% if page.preface_first %}*/
/*             <div class="{{ 'preface-block col-sm-' ~ preface_col }}">*/
/*               {{ page.preface_first }}*/
/*             </div>*/
/*           {% endif %}*/
/*           {% if page.preface_second %}*/
/*             <div class="{{ 'preface-block col-sm-' ~ preface_col }}">*/
/*               {{ page.preface_second }}*/
/*             </div>*/
/*           {% endif %}*/
/*           {% if page.preface_third %}*/
/*             <div class="{{ 'preface-block col-sm-' ~ preface_col }}">*/
/*               {{ page.preface_third }}*/
/*             </div>*/
/*           {% endif %}*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   {% endif %}*/
/* */
/*   {% if page.highlighted %}*/
/*     <div id="highlighted-block">*/
/*       <div class="container">*/
/*         <div class="row">*/
/*           <div class="col-sm-12">*/
/*             {{ page.highlighted }}*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   {% endif %}*/
/* */
/*   <div id="main-content">*/
/*     <div class="container">*/
/*       <div class="row">*/
/*         {% if page.sidebar_first %}*/
/*           {% set primary_col = 8 %}*/
/*         {% else %}*/
/*           {% set primary_col = 12 %}*/
/*         {% endif %}*/
/*         <div id="primary" class="{{ 'content-area col-sm-' ~ primary_col }}">*/
/*           <section id="content" role="main" class="clearfix">*/
/*             {% if show_breadcrumbs %}*/
/*               {% if breadcrumb %}*/
/*                 <div id="breadcrumbs">*/
/*                   {{ breadcrumb }}*/
/*                 </div>*/
/*               {% endif %}*/
/*             {% endif %}*/
/*             {{ messages }}*/
/*             {% if page.content_top %}*/
/*               <div id="content_top">*/
/*                 {{ page.content_top }}*/
/*               </div>*/
/*             {% endif %}*/
/*             <div id="content-wrap">*/
/*               {{ page.help }}*/
/*               {{ page.content }}*/
/*             </div>*/
/*           </section>*/
/*         </div>*/
/*         {% if page.sidebar_first %}*/
/*           <aside id="sidebar" class="col-sm-4" role="complementary">*/
/*            {{ page.sidebar_first }}*/
/*           </aside>*/
/*         {% endif %}*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* */
/*   {% if page.footer %}*/
/*     <div id="footer-block">*/
/*       <div class="container">*/
/*         <div class="row">*/
/*           <div class="col-sm-12">*/
/*             {{ page.footer }}*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   {% endif %}*/
/* */
/*   {% if page.footer_first or page.footer_second or page.footer_third or page.footer_fourth %}*/
/*     <div id="bottom">*/
/*       <div class="container">*/
/*         <div class="row">*/
/*           {% if page.footer_first %}*/
/*             <div class="{{ 'footer-block col-sm-' ~ footer_col }}">*/
/*               {{ page.footer_first }}*/
/*             </div>*/
/*           {% endif %}*/
/*           {% if page.footer_second %}*/
/*             <div class="{{ 'footer-block col-sm-' ~ footer_col }}">*/
/*               {{ page.footer_second }}*/
/*             </div>*/
/*           {% endif %}*/
/*           {% if page.footer_third %}*/
/*             <div class="{{ 'footer-block col-sm-' ~ footer_col }}">*/
/*               {{ page.footer_third }}*/
/*             </div>*/
/*           {% endif %}*/
/*           {% if page.footer_fourth %}*/
/*             <div class="{{ 'footer-block col-sm-' ~ footer_col }}">*/
/*               {{ page.footer_fourth }}*/
/*             </div>*/
/*           {% endif %}*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   {% endif %}*/
/* */
/*   <footer id="colophon" class="site-footer" role="contentinfo">*/
/*     <div class="container">*/
/*       <div class="row">*/
/*         <div class="fcred col-sm-12">*/
/*           {{ "Copyright"|t }} &copy; {{ this_year }}, <a href="{{ front_page }}">{{ site_name }}</a>. {{ "Theme by"|t }} <a href="http://www.devsaran.com" target="_blank">Devsaran</a>.*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
