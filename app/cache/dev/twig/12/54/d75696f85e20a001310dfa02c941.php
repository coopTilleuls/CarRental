<?php

/* SonataAdminBundle:CRUD:base_edit.html.twig */
class __TwigTemplate_1254d75696f85e20a001310dfa02c941 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'side_menu' => array($this, 'block_side_menu'),
            'form' => array($this, 'block_form'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getContext($context, "base_template"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        // line 15
        echo "    <div class=\"sonata-actions\">
        <ul>
            ";
        // line 17
        if (((($this->getAttribute($this->getContext($context, "admin"), "hasroute", array("show", ), "method") && $this->getAttribute($this->getContext($context, "admin"), "id", array($this->getContext($context, "object"), ), "method")) && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array("VIEW", ), "method")) && (twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "show")) > 0))) {
            // line 18
            echo "                <li class=\"sonata-action-element\"><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateObjectUrl", array("show", $this->getContext($context, "object"), ), "method"), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("link_action_show", array(), "SonataAdminBundle");
            echo "</a></li>
            ";
        }
        // line 20
        echo "            ";
        if (($this->getAttribute($this->getContext($context, "admin"), "hasroute", array("create", ), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array("CREATE", ), "method"))) {
            // line 21
            echo "                <li class=\"sonata-action-element\"><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array("create", ), "method"), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("link_action_create", array(), "SonataAdminBundle");
            echo "</a></li>
            ";
        }
        // line 23
        echo "            ";
        if (($this->getAttribute($this->getContext($context, "admin"), "hasroute", array("list", ), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array("LIST", ), "method"))) {
            // line 24
            echo "                <li class=\"sonata-action-element\"><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array("list", ), "method"), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("link_action_list", array(), "SonataAdminBundle");
            echo "</a></li>
            ";
        }
        // line 26
        echo "        </ul>
    </div>
";
    }

    // line 30
    public function block_side_menu($context, array $blocks = array())
    {
        echo $this->env->getExtension('knp_menu')->render($this->getAttribute($this->getContext($context, "admin"), "sidemenu", array($this->getContext($context, "action"), ), "method"), array(), "list");
    }

    // line 32
    public function block_form($context, array $blocks = array())
    {
        // line 33
        echo "
    ";
        // line 34
        if ($this->getAttribute($this->getContext($context, "admin"), "id", array($this->getContext($context, "object"), ), "method")) {
            // line 35
            echo "        ";
            $context["url"] = "edit";
            // line 36
            echo "    ";
        } else {
            // line 37
            echo "        ";
            $context["url"] = "create";
            // line 38
            echo "    ";
        }
        // line 39
        echo "
    ";
        // line 40
        if ((!$this->getAttribute($this->getContext($context, "admin"), "hasRoute", array($this->getContext($context, "url"), ), "method"))) {
            // line 41
            echo "        <div>
            ";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("form_not_available", array(), "SonataAdminBundle"), "html", null, true);
            echo "
        </div>
    ";
        } else {
            // line 45
            echo "        <form action=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array($this->getContext($context, "url"), array("id" => $this->getAttribute($this->getContext($context, "admin"), "id", array($this->getContext($context, "object"), ), "method"), "uniqid" => $this->getAttribute($this->getContext($context, "admin"), "uniqid")), ), "method"), "html", null, true);
            echo "\" ";
            echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
            echo " method=\"POST\">

            ";
            // line 47
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "form"), "vars"), "errors")) > 0)) {
                // line 48
                echo "                <div class=\"sonata-ba-form-error\">
                    ";
                // line 49
                echo $this->env->getExtension('form')->renderErrors($this->getContext($context, "form"));
                echo "
                </div>
            ";
            }
            // line 52
            echo "
            ";
            // line 53
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "admin"), "formgroups"));
            foreach ($context['_seq'] as $context["name"] => $context["form_group"]) {
                // line 54
                echo "                ";
                if ($this->getContext($context, "name")) {
                    // line 55
                    echo "                    <fieldset>
                        <legend>
                            ";
                    // line 57
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "name"), array(), $this->getAttribute($this->getContext($context, "admin"), "translationdomain")), "html", null, true);
                    echo "
                            ";
                    // line 58
                    if ($this->getAttribute($this->getContext($context, "form_group"), "collapsed")) {
                        // line 59
                        echo "                                <a href=\"\" class=\"sonata-ba-collapsed\">";
                        echo $this->env->getExtension('translator')->getTranslator()->trans("link_expand", array(), "SonataAdminBundle");
                        echo "</a>
                            ";
                    }
                    // line 61
                    echo "                        </legend>

                        <div class=\"sonata-ba-collapsed-fields\">
                ";
                }
                // line 65
                echo "
                ";
                // line 66
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "form_group"), "fields"));
                foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                    // line 67
                    echo "                    ";
                    if ($this->getAttribute(twig_default_filter($this->getAttribute($this->getContext($context, "admin"), "formfielddescriptions")), $this->getContext($context, "field_name"), array(), "array", true)) {
                        // line 68
                        echo "                        ";
                        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), $this->getContext($context, "field_name"), array(), "array"));
                        echo "
                    ";
                    }
                    // line 70
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 71
                echo "
                ";
                // line 72
                if ($this->getContext($context, "name")) {
                    // line 73
                    echo "                        </div>
                    </fieldset>
                ";
                }
                // line 76
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['form_group'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 77
            echo "
            ";
            // line 78
            echo $this->env->getExtension('form')->renderRest($this->getContext($context, "form"));
            echo "

            ";
            // line 80
            if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "isxmlhttprequest")) {
                // line 81
                echo "                ";
                if ($this->getAttribute($this->getContext($context, "admin"), "id", array($this->getContext($context, "object"), ), "method")) {
                    // line 82
                    echo "                    <input type=\"submit\" name=\"btn_update\" value=\"";
                    echo $this->env->getExtension('translator')->getTranslator()->trans("btn_update", array(), "SonataAdminBundle");
                    echo "\"/>
                ";
                } else {
                    // line 84
                    echo "                    <input type=\"submit\" name=\"btn_create\" value=\"";
                    echo $this->env->getExtension('translator')->getTranslator()->trans("btn_create", array(), "SonataAdminBundle");
                    echo "\"/>
                ";
                }
                // line 86
                echo "            ";
            } else {
                // line 87
                echo "                ";
                if ($this->getAttribute($this->getContext($context, "admin"), "id", array($this->getContext($context, "object"), ), "method")) {
                    // line 88
                    echo "                    <input type=\"submit\" name=\"btn_update_and_edit\" value=\"";
                    echo $this->env->getExtension('translator')->getTranslator()->trans("btn_update_and_edit_again", array(), "SonataAdminBundle");
                    echo "\"/>
                    <input type=\"submit\" name=\"btn_update_and_list\" value=\"";
                    // line 89
                    echo $this->env->getExtension('translator')->getTranslator()->trans("btn_update_and_return_to_list", array(), "SonataAdminBundle");
                    echo "\"/>

                    ";
                    // line 91
                    if ($this->getAttribute($this->getContext($context, "admin"), "isGranted", array("DELETE", ), "method")) {
                        // line 92
                        echo "                        <a href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateObjectUrl", array("delete", $this->getContext($context, "object"), ), "method"), "html", null, true);
                        echo "\">";
                        echo $this->env->getExtension('translator')->getTranslator()->trans("link_delete", array(), "SonataAdminBundle");
                        echo "</a>
                    ";
                    }
                    // line 94
                    echo "                ";
                } else {
                    // line 95
                    echo "                    <input type=\"submit\" name=\"btn_create_and_edit\" value=\"";
                    echo $this->env->getExtension('translator')->getTranslator()->trans("btn_create_and_edit_again", array(), "SonataAdminBundle");
                    echo "\"/>
                    <input type=\"submit\" name=\"btn_create_and_create\" value=\"";
                    // line 96
                    echo $this->env->getExtension('translator')->getTranslator()->trans("btn_create_and_create_a_new_one", array(), "SonataAdminBundle");
                    echo "\"/>
                ";
                }
                // line 98
                echo "            ";
            }
            // line 99
            echo "        </form>
    ";
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
