<?php

/* SonataAdminBundle::standard_layout.html.twig */
class __TwigTemplate_c4ed0bffdaaca50677aeca917cb51000 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'title' => array($this, 'block_title'),
            'user_panel' => array($this, 'block_user_panel'),
            'actions' => array($this, 'block_actions'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />

        ";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 29
        echo "
        ";
        // line 30
        $this->displayBlock('javascripts', $context, $blocks);
        // line 38
        echo "
        <title>
            ";
        // line 40
        $this->displayBlock('title', $context, $blocks);
        // line 51
        echo "        </title>
    </head>
    <body>

        ";
        // line 56
        echo "        ";
        $context["_preview"] = $this->renderBlock("preview", $context, $blocks);
        // line 57
        echo "        ";
        $context["_form"] = $this->renderBlock("form", $context, $blocks);
        // line 58
        echo "        ";
        $context["_show"] = $this->renderBlock("show", $context, $blocks);
        // line 59
        echo "        ";
        $context["_list_table"] = $this->renderBlock("list_table", $context, $blocks);
        // line 60
        echo "        ";
        $context["_list_filters"] = $this->renderBlock("list_filters", $context, $blocks);
        // line 61
        echo "        ";
        $context["_side_menu"] = $this->renderBlock("side_menu", $context, $blocks);
        // line 62
        echo "        ";
        $context["_content"] = $this->renderBlock("content", $context, $blocks);
        // line 63
        echo "

        <div class=\"container\">
            <div class=\"span-24 last header\">
                <div class=\"span-20\">
                    <a href=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("sonata_admin_dashboard"), "html", null, true);
        echo "\" class=\"home\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Admin", array(), "SonataAdminBundle");
        echo "</a>
                </div>

                <div class=\"span-4 last\">
                    ";
        // line 72
        $this->displayBlock('user_panel', $context, $blocks);
        // line 73
        echo "                </div>
            </div>

            <div class=\"span-24 last content clear\">
                <div class=\"right\">
                    ";
        // line 78
        $this->displayBlock('actions', $context, $blocks);
        // line 79
        echo "                </div>

                <div class=\"sonata-ba-breadcrumbs\">
                    <h1>
                    ";
        // line 83
        $this->displayBlock('breadcrumb', $context, $blocks);
        // line 93
        echo "                    </h1>
                </div>

                ";
        // line 97
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => "success", 1 => "error", 2 => "notice"));
        foreach ($context['_seq'] as $context["_key"] => $context["notice_level"]) {
            // line 98
            echo "
                   ";
            // line 99
            $context["session_var"] = ("sonata_flash_" . $this->getContext($context, "notice_level"));
            // line 100
            echo "                    ";
            if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "hasFlash", array($this->getContext($context, "session_var"), ), "method")) {
                // line 101
                echo "                        <div class=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "notice_level"), "html", null, true);
                echo "\">
                        ";
                // line 102
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array($this->getContext($context, "session_var"), ), "method"), array(), "SonataAdminBundle"), "html", null, true);
                echo "
                       </div>
                    ";
            }
            // line 105
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notice_level'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 107
        echo "
            </div>

            ";
        // line 110
        if ((!twig_test_empty($this->getContext($context, "_preview")))) {
            // line 111
            echo "                <div class=\"span-24 last content clear\">
                    <div class=\"sonata-ba-preview\">";
            // line 112
            echo $this->getContext($context, "_preview");
            echo "</div>
                </div>
            ";
        }
        // line 115
        echo "
            <div class=\"span-24 last content clear\">

                ";
        // line 118
        if ((!twig_test_empty($this->getContext($context, "_side_menu")))) {
            // line 119
            echo "                        <div class=\"span-4\">
                            <div class=\"sonata-ba-side-menu\">";
            // line 120
            echo $this->getContext($context, "_side_menu");
            echo "</div>
                        </div>
                        <div class=\"span-18 last content\">
                ";
        }
        // line 124
        echo "
                    ";
        // line 125
        if ((!twig_test_empty($this->getContext($context, "_content")))) {
            // line 126
            echo "                        <div class=\"sonata-ba-content\">";
            echo $this->getContext($context, "_content");
            echo "</div>
                    ";
        }
        // line 128
        echo "
                    ";
        // line 129
        if ((!twig_test_empty($this->getContext($context, "_show")))) {
            // line 130
            echo "                        <div class=\"sonata-ba-show\">";
            echo $this->getContext($context, "_show");
            echo "</div>
                    ";
        }
        // line 132
        echo "
                    ";
        // line 133
        if ((!twig_test_empty($this->getContext($context, "_form")))) {
            // line 134
            echo "                        <div class=\"sonata-ba-form\">";
            echo $this->getContext($context, "_form");
            echo "</div>
                    ";
        }
        // line 136
        echo "
                    ";
        // line 137
        if (((!twig_test_empty($this->getContext($context, "_list_table"))) || (!twig_test_empty($this->getContext($context, "_list_filters"))))) {
            // line 138
            echo "                        ";
            if ((!twig_test_empty($this->getContext($context, "_side_menu")))) {
                // line 139
                echo "                            <div class=\"sonata-ba-list\">
                                <div class=\"span-13\">
                                    ";
                // line 141
                echo $this->getContext($context, "_list_table");
                echo "
                                </div>
                                <div class=\"span-5 last\">
                                    ";
                // line 144
                echo $this->getContext($context, "_list_filters");
                echo "
                                </div>
                            </div>
                        ";
            } else {
                // line 148
                echo "                            <div class=\"sonata-ba-list\">
                                <div class=\"span-19\">
                                    ";
                // line 150
                echo $this->getContext($context, "_list_table");
                echo "
                                </div>
                                <div class=\"span-5 last\">
                                    ";
                // line 153
                echo $this->getContext($context, "_list_filters");
                echo "
                                </div>
                            </div>
                        ";
            }
            // line 157
            echo "                    ";
        }
        // line 158
        echo "
                ";
        // line 159
        if ((!twig_test_empty($this->getContext($context, "_side_menu")))) {
            // line 160
            echo "                    </div>
                ";
        }
        // line 162
        echo "
            </div>

            <!-- footer -->
            <div class=\"span-24 last\">
                ";
        // line 167
        $this->displayBlock('footer', $context, $blocks);
        // line 168
        echo "            </div>
        </div>
    </body>
</html>

";
    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 17
        echo "            <!-- jQuery code -->
            <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatajquery/themes/flick/jquery-ui-1.8.6.custom.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />

            <!-- blueprint code -->
            <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatablueprint/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen, projection\">
            <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatablueprint/print.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"print\">
            <!--[if lt IE 8]><link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatablueprint/ie.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen, projection\"><![endif]-->

            <!-- base application asset -->
            <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/css/layout.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
            <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/css/colors.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
        ";
    }

    // line 30
    public function block_javascripts($context, array $blocks = array())
    {
        // line 31
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatajquery/jquery-1.4.4.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatajquery/jquery-ui-1.8.6.custom.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatajquery/jquery-ui-i18n.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/qtip/jquery.qtip-1.0.0-rc3.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/jquery/jquery.form.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/base.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        ";
    }

    // line 40
    public function block_title($context, array $blocks = array())
    {
        echo " ";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Admin", array(), "SonataAdminBundle");
        // line 41
        echo "                ";
        if (array_key_exists("action", $context)) {
            // line 42
            echo "                    -
                    ";
            // line 43
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "admin"), "breadcrumbs", array($this->getContext($context, "action"), ), "method"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["label"] => $context["uri"]) {
                // line 44
                echo "                        ";
                if ((!$this->getAttribute($this->getContext($context, "loop"), "first"))) {
                    // line 45
                    echo "                            &gt;
                        ";
                }
                // line 47
                echo "                        ";
                echo twig_escape_filter($this->env, $this->getContext($context, "label"), "html", null, true);
                echo "
                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['label'], $context['uri'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 49
            echo "                ";
        }
        // line 50
        echo "            ";
    }

    // line 72
    public function block_user_panel($context, array $blocks = array())
    {
    }

    // line 78
    public function block_actions($context, array $blocks = array())
    {
    }

    // line 83
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 84
        echo "                        ";
        if (array_key_exists("action", $context)) {
            // line 85
            echo "                            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "admin"), "breadcrumbs", array($this->getContext($context, "action"), ), "method"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["label"] => $context["uri"]) {
                // line 86
                echo "                                ";
                if ((!$this->getAttribute($this->getContext($context, "loop"), "first"))) {
                    // line 87
                    echo "                                    &gt;
                                ";
                }
                // line 89
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "uri"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getContext($context, "label"), "html", null, true);
                echo "</a>
                            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['label'], $context['uri'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 91
            echo "                        ";
        }
        // line 92
        echo "                    ";
    }

    // line 167
    public function block_footer($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::standard_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
