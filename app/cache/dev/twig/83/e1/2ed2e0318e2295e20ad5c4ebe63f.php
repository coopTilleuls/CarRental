<?php

/* SonataAdminBundle:CRUD:base_list.html.twig */
class __TwigTemplate_83e12ed2e0318e2295e20ad5c4ebe63f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'side_menu' => array($this, 'block_side_menu'),
            'table_header' => array($this, 'block_table_header'),
            'table_body' => array($this, 'block_table_body'),
            'table_footer' => array($this, 'block_table_footer'),
            'list_table' => array($this, 'block_list_table'),
            'list_filters' => array($this, 'block_list_filters'),
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
        if (($this->getAttribute($this->getContext($context, "admin"), "hasRoute", array("create", ), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array("CREATE", ), "method"))) {
            // line 18
            echo "                <li class=\"sonata-action-element\"><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array("create", ), "method"), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("link_action_create", array(), "SonataAdminBundle");
            echo "</a></li>
            ";
        }
        // line 20
        echo "        </ul>
    </div>
";
    }

    // line 24
    public function block_side_menu($context, array $blocks = array())
    {
        echo $this->env->getExtension('knp_menu')->render($this->getAttribute($this->getContext($context, "admin"), "sidemenu", array($this->getContext($context, "action"), ), "method"), array(), "list");
    }

    // line 31
    public function block_table_header($context, array $blocks = array())
    {
        // line 32
        echo "                    <tr class=\"sonata-ba-list-field-header\">
                        ";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "list"), "elements"));
        foreach ($context['_seq'] as $context["_key"] => $context["field_description"]) {
            // line 34
            echo "                            ";
            if ((($this->getAttribute($this->getContext($context, "field_description"), "getOption", array("code", ), "method") == "_batch") && (twig_length_filter($this->env, $this->getContext($context, "batchactions")) > 0))) {
                // line 35
                echo "                                <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-batch\">
                                  <input type=\"checkbox\" id=\"list_batch_checkbox\" />
                                </th>
                            ";
            } else {
                // line 39
                echo "                                ";
                $context["sortable"] = false;
                // line 40
                echo "                                ";
                if (($this->getAttribute(twig_default_filter($this->getAttribute($this->getContext($context, "field_description"), "options")), "sortable", array(), "any", true) && $this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "options"), "sortable"))) {
                    // line 41
                    echo "                                    ";
                    $context["sortable"] = true;
                    // line 42
                    echo "                                    ";
                    $context["current"] = ($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "values"), "_sort_by") == $this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "options"), "sortable"));
                    // line 43
                    echo "                                    ";
                    $context["sort_parameters"] = $this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "modelmanager"), "sortparameters", array($this->getContext($context, "field_description"), $this->getAttribute($this->getContext($context, "admin"), "datagrid"), ), "method");
                    // line 44
                    echo "                                    ";
                    $context["sort_active_class"] = (($this->getContext($context, "current")) ? ("sonata-ba-list-field-order-active") : (""));
                    // line 45
                    echo "                                    ";
                    $context["sort_by"] = (($this->getContext($context, "current")) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "values"), "_sort_order")) : ($this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "options"), "_sort_order")));
                    // line 46
                    echo "                                ";
                }
                // line 47
                echo "
                                ";
                // line 48
                ob_start();
                // line 49
                echo "                                    <th class=\"sonata-ba-list-field-header-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "field_description"), "type"), "html", null, true);
                echo " ";
                if ($this->getContext($context, "sortable")) {
                    echo " sonata-ba-list-field-header-order-";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getContext($context, "sort_by")), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getContext($context, "sort_active_class"), "html", null, true);
                }
                echo "\">
                                        ";
                // line 50
                if ($this->getContext($context, "sortable")) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array("list", $this->getContext($context, "sort_parameters"), ), "method"), "html", null, true);
                    echo "\">";
                }
                // line 51
                echo "
                                        ";
                // line 52
                if ($this->getAttribute(twig_default_filter($this->getAttribute($this->getContext($context, "field_description"), "options")), "name", array(), "any", true)) {
                    // line 53
                    echo "                                            ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "options"), "name"), array(), $this->getAttribute($this->getContext($context, "admin"), "translationdomain")), "html", null, true);
                    echo "
                                        ";
                } else {
                    // line 55
                    echo "                                            ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "field_description"), "name"), array(), $this->getAttribute($this->getContext($context, "admin"), "translationdomain")), "html", null, true);
                    echo "
                                        ";
                }
                // line 57
                echo "
                                        ";
                // line 58
                if ($this->getContext($context, "sortable")) {
                    echo "</a>";
                }
                // line 59
                echo "                                    </th>
                                ";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                // line 61
                echo "                            ";
            }
            // line 62
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_description'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 63
        echo "                    </tr>
                ";
    }

    // line 66
    public function block_table_body($context, array $blocks = array())
    {
        // line 67
        echo "                    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "results"));
        foreach ($context['_seq'] as $context["_key"] => $context["object"]) {
            // line 68
            echo "                        <tr>
                            ";
            // line 69
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "list"), "elements"));
            foreach ($context['_seq'] as $context["_key"] => $context["field_description"]) {
                // line 70
                echo "                                ";
                echo $this->env->getExtension('sonata_admin')->renderListElement($this->getContext($context, "object"), $this->getContext($context, "field_description"));
                echo "
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_description'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 72
            echo "                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['object'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 74
        echo "                ";
    }

    // line 76
    public function block_table_footer($context, array $blocks = array())
    {
        // line 77
        echo "                    ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "pager"), "haveToPaginate", array(), "method")) {
            // line 78
            echo "                        <tr>
                            <td colspan=\"";
            // line 79
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "list"), "elements")), "html", null, true);
            echo "\" class=\"pager\">
                                <ul>
                                    ";
            // line 81
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "pager"), "page") != $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "pager"), "previouspage"))) {
                // line 82
                echo "                                        <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array("list", $this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "modelmanager"), "paginationparameters", array($this->getAttribute($this->getContext($context, "admin"), "datagrid"), $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "pager"), "previouspage"), ), "method"), ), "method"), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('translator')->getTranslator()->trans("link_previous_pager", array(), "SonataAdminBundle");
                echo "</a></li>
                                    ";
            }
            // line 84
            echo "
                                    ";
            // line 86
            echo "                                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "pager"), "getLinks", array(5, ), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 87
                echo "                                        ";
                if (($this->getContext($context, "page") == $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "pager"), "page"))) {
                    // line 88
                    echo "                                            <li>";
                    echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                    echo "</li>
                                        ";
                } else {
                    // line 90
                    echo "                                            <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array("list", $this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "modelmanager"), "paginationparameters", array($this->getAttribute($this->getContext($context, "admin"), "datagrid"), $this->getContext($context, "page"), ), "method"), ), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                    echo "</a></li>
                                        ";
                }
                // line 92
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 93
            echo "
                                    ";
            // line 94
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "pager"), "page") != $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "pager"), "nextpage"))) {
                // line 95
                echo "                                        <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array("list", $this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "modelmanager"), "paginationparameters", array($this->getAttribute($this->getContext($context, "admin"), "datagrid"), $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "pager"), "nextpage"), ), "method"), ), "method"), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('translator')->getTranslator()->trans("link_next_pager", array(), "SonataAdminBundle");
                echo "</a></li>
                                    ";
            }
            // line 97
            echo "                                </ul>
                            </td>
                        </tr>
                    ";
        }
        // line 101
        echo "                ";
    }

    // line 26
    public function block_list_table($context, array $blocks = array())
    {
        // line 27
        echo "    ";
        $context["batchactions"] = $this->getAttribute($this->getContext($context, "admin"), "batchactions");
        // line 28
        echo "    ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "results")) > 0)) {
            // line 29
            echo "        <form action=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array("batch", $this->getAttribute($this->getContext($context, "admin"), "filterParameters"), ), "method"), "html", null, true);
            echo "\" method=\"POST\" >
            <table>
                ";
            // line 31
            $this->displayBlock('table_header', $context, $blocks);
            // line 65
            echo "
                ";
            // line 66
            $this->displayBlock('table_body', $context, $blocks);
            // line 75
            echo "
                ";
            // line 76
            $this->displayBlock('table_footer', $context, $blocks);
            // line 102
            echo "            </table>

            ";
            // line 104
            if ((twig_length_filter($this->env, $this->getContext($context, "batchactions")) > 0)) {
                // line 105
                echo "                <script type=\"text/javascript\">
                    jQuery(document).ready(function(\$){
                       \$('#list_batch_checkbox').click(function(){
                           \$(this).closest('table').find(\"td input[type='checkbox']\").attr('checked', \$(this).is(':checked'));
                       });
                       \$('.delete_link').click(function(e){
                          if (!confirm('";
                // line 111
                echo $this->env->getExtension('translator')->getTranslator()->trans("confirm_msg", array(), "SonataAdminBundle");
                echo "')) e.preventDefault();
                       });
                    });
                </script>

                <div class=\"sonata-ba-list-actions\">
                    <select name=\"action\">
                        ";
                // line 118
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "batchactions"));
                foreach ($context['_seq'] as $context["action"] => $context["options"]) {
                    // line 119
                    echo "                            <option value=\"";
                    echo twig_escape_filter($this->env, $this->getContext($context, "action"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "options"), "label"), "html", null, true);
                    echo "</option>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['action'], $context['options'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 121
                echo "                    </select>
                    <input type=\"checkbox\" name=\"all_elements\" id=\"execute_on_matching\"  />
                    <label for=\"execute_on_matching\">";
                // line 123
                echo $this->env->getExtension('translator')->getTranslator()->trans("all_elements", array(), "SonataAdminBundle");
                echo "</label>
                    <input type=\"submit\" value=\"";
                // line 124
                echo $this->env->getExtension('translator')->getTranslator()->trans("btn_batch", array(), "SonataAdminBundle");
                echo "\" />
                </div>
            ";
            }
            // line 127
            echo "        </form>
    ";
        } else {
            // line 129
            echo "        <p class=\"notice\">
          ";
            // line 130
            echo $this->env->getExtension('translator')->getTranslator()->trans("no_result", array(), "SonataAdminBundle");
            // line 131
            echo "        </p>
    ";
        }
    }

    // line 135
    public function block_list_filters($context, array $blocks = array())
    {
        // line 136
        echo "    ";
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "filters")) {
            // line 137
            echo "        <form class=\"sonata-filter-form\" action=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array("list", ), "method"), "html", null, true);
            echo "\" method=\"GET\">
            ";
            // line 138
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "filters"));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 139
                echo "                ";
                echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "getChild", array($this->getAttribute($this->getContext($context, "filter"), "name"), ), "method"));
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 141
            echo "
            ";
            // line 142
            echo $this->env->getExtension('form')->renderRest($this->getContext($context, "form"));
            echo "

            <input type=\"submit\" value=\"";
            // line 144
            echo $this->env->getExtension('translator')->getTranslator()->trans("btn_filter", array(), "SonataAdminBundle");
            echo "\" />

            <a href=\"";
            // line 146
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array("list", ), "method"), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("link_reset_filter", array(), "SonataAdminBundle");
            echo "</a>
        </form>
    ";
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
