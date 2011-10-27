<?php

/* SonataAdminBundle:CRUD:edit_orm_one_to_many.html.twig */
class __TwigTemplate_a3cfbb37f302ebfd68d472db39692be1 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        if ((!$this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "hasassociationadmin"))) {
            // line 12
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "value"));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 13
                echo "        ";
                echo $this->env->getExtension('sonata_admin')->renderRelationElement($this->getContext($context, "element"), $this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"));
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
        } else {
            // line 16
            echo "    <div id=\"field_container_";
            echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
            echo "\">
        <span id=\"field_widget_";
            // line 17
            echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
            echo "\" >
            ";
            // line 18
            if (($this->getAttribute($this->getContext($context, "sonata_admin"), "edit") == "inline")) {
                // line 19
                echo "                ";
                if (($this->getAttribute($this->getContext($context, "sonata_admin"), "inline") == "table")) {
                    // line 20
                    echo "                    ";
                    if ($this->getAttribute($this->getContext($context, "form"), "children")) {
                        // line 21
                        echo "                        <table>
                            <thead>
                                <tr>
                                    ";
                        // line 24
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "children"), 0, array(), "array"), "children"));
                        foreach ($context['_seq'] as $context["field_name"] => $context["nested_field"]) {
                            echo "                                                                                                                         
                                        ";
                            // line 25
                            if (($this->getContext($context, "field_name") == "_delete")) {
                                // line 26
                                echo "                                            <th>";
                                echo $this->env->getExtension('translator')->getTranslator()->trans("action_delete", array(), "SonataAdminBundle");
                                echo "</th>
                                        ";
                            } else {
                                // line 27
                                echo "                  
                                            ";
                                // line 28
                                if ($this->getAttribute(twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "nested_field"), "get", array("sonata_admin", ), "method"), "field_description"), "options")), "name", array(), "any", true)) {
                                    // line 29
                                    echo "                                                <th>";
                                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "nested_field"), "get", array("sonata_admin", ), "method"), "field_description"), "options"), "name"), "html", null, true);
                                    echo "</th>
                                            ";
                                } else {
                                    // line 31
                                    echo "                                                <th>";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "field_name")), "html", null, true);
                                    echo "</th>
                                            ";
                                }
                                // line 32
                                echo "                                         
                                        ";
                            }
                            // line 34
                            echo "                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['field_name'], $context['nested_field'], $context['_parent'], $context['loop']);
                        $context = array_merge($_parent, array_intersect_key($context, $_parent));
                        // line 35
                        echo "                                </tr>
                            </thead>    
                            <tbody class=\"sonata-ba-tbody\">
                                ";
                        // line 38
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "form"), "children"));
                        foreach ($context['_seq'] as $context["nested_group_field_name"] => $context["nested_group_field"]) {
                            // line 39
                            echo "                                    <tr>
                                        ";
                            // line 40
                            $context['_parent'] = (array) $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "nested_group_field"), "children"));
                            foreach ($context['_seq'] as $context["field_name"] => $context["nested_field"]) {
                                // line 41
                                echo "                                            <td class=\"sonata-ba-td-";
                                echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                                echo "-";
                                echo twig_escape_filter($this->env, $this->getContext($context, "field_name"), "html", null, true);
                                echo "\">
                                                ";
                                // line 42
                                if ($this->getAttribute(twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "formfielddescriptions")), $this->getContext($context, "field_name"), array(), "array", true)) {
                                    // line 43
                                    echo "                                                    ";
                                    echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "nested_field"));
                                    echo "
    
                                                    ";
                                    // line 45
                                    $context["dummy"] = $this->getAttribute($this->getContext($context, "nested_group_field"), "setrendered");
                                    // line 46
                                    echo "                                                ";
                                } else {
                                    // line 47
                                    echo "                                                    ";
                                    echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "nested_field"));
                                    echo "
                                                ";
                                }
                                // line 49
                                echo "                                            </td>
                                        ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['field_name'], $context['nested_field'], $context['_parent'], $context['loop']);
                            $context = array_merge($_parent, array_intersect_key($context, $_parent));
                            // line 51
                            echo "                                    </tr>
                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['nested_group_field_name'], $context['nested_group_field'], $context['_parent'], $context['loop']);
                        $context = array_merge($_parent, array_intersect_key($context, $_parent));
                        // line 53
                        echo "                            </tbody>
                        </table>
                    ";
                    }
                    // line 56
                    echo "                ";
                } else {
                    // line 57
                    echo "                    ";
                    if ($this->getAttribute($this->getContext($context, "form"), "children")) {
                        // line 58
                        echo "                        <div>
                            ";
                        // line 59
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "form"), "children"));
                        foreach ($context['_seq'] as $context["nested_group_field_name"] => $context["nested_group_field"]) {
                            // line 60
                            echo "                                ";
                            $context['_parent'] = (array) $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "nested_group_field"), "children"));
                            foreach ($context['_seq'] as $context["field_name"] => $context["nested_field"]) {
                                // line 61
                                echo "                                    ";
                                if ($this->getAttribute(twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "formfielddescriptions")), $this->getContext($context, "field_name"), array(), "array", true)) {
                                    // line 62
                                    echo "                                        ";
                                    echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "nested_field"), array("inline" => "natural", "edit" => "inline"));
                                    // line 65
                                    echo "
                                        ";
                                    // line 66
                                    $context["dummy"] = $this->getAttribute($this->getContext($context, "nested_group_field"), "setrendered");
                                    // line 67
                                    echo "                                    ";
                                } else {
                                    // line 68
                                    echo "                                        ";
                                    echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "nested_field"));
                                    echo "
                                    ";
                                }
                                // line 70
                                echo "                                ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['field_name'], $context['nested_field'], $context['_parent'], $context['loop']);
                            $context = array_merge($_parent, array_intersect_key($context, $_parent));
                            // line 71
                            echo "                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['nested_group_field_name'], $context['nested_group_field'], $context['_parent'], $context['loop']);
                        $context = array_merge($_parent, array_intersect_key($context, $_parent));
                        // line 72
                        echo "                        </div>
                    ";
                    }
                    // line 74
                    echo "                ";
                }
                // line 75
                echo "            ";
            } else {
                // line 76
                echo "                ";
                echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "form"));
                echo "
            ";
            }
            // line 78
            echo "
        </span>

        ";
            // line 81
            if (($this->getAttribute($this->getContext($context, "sonata_admin"), "edit") == "inline")) {
                // line 82
                echo "
            ";
                // line 83
                if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "hasroute", array("create", ), "method") && $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "isGranted", array("CREATE", ), "method"))) {
                    // line 84
                    echo "                <span id=\"field_actions_";
                    echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                    echo "\" >
                    <a
                        href=\"";
                    // line 86
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "generateUrl", array("create", ), "method"), "html", null, true);
                    echo "\"
                        onclick=\"start_field_retrieve_";
                    // line 87
                    echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                    echo "(event)\"
                        class=\"sonata-ba-action\"
                        >
                        <img
                            src=\"";
                    // line 91
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/famfamfam/add.png"), "html", null, true);
                    echo "\"
                            alt=\"";
                    // line 92
                    echo $this->env->getExtension('translator')->getTranslator()->trans("btn_add", array(), "SonataAdminBundle");
                    echo "\"
                         />
                    </a>
                </span>
            ";
                }
                // line 97
                echo "
            ";
                // line 99
                echo "            ";
                if ($this->getAttribute(twig_default_filter($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "options")), "sortable", array(), "any", true)) {
                    // line 100
                    echo "                <script>
                    jQuery('div#field_container_";
                    // line 101
                    echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                    echo " tbody.sonata-ba-tbody').sortable({
                        axis: 'y',
                        opacity: 0.6,
                        items: 'tr',
                        stop: apply_position_value_";
                    // line 105
                    echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                    echo "
                    });

                    function apply_position_value_";
                    // line 108
                    echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                    echo "() {
                        // update the input value position
                        jQuery('div#field_container_";
                    // line 110
                    echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                    echo " tbody.sonata-ba-tbody td.sonata-ba-td-";
                    echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                    echo "-position').each(function(index, element) {
                            // remove the sortable handler and put it back
                            jQuery('span.sonata-ba-sortable-handler', element).remove();
                            jQuery(element).append('<span class=\"sonata-ba-sortable-handler ui-icon ui-icon-grip-solid-horizontal\"></span>');
                            jQuery('input', element).hide();
                        });

                        jQuery('div#field_container_";
                    // line 117
                    echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                    echo " tbody.sonata-ba-tbody td.sonata-ba-td-";
                    echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                    echo "-position input').each(function(index, value) {
                            jQuery(value).val(index + 1);
                        });
                    }

                    // refresh the sortable option when a new element is added
                    jQuery('#sonata-ba-field-container-";
                    // line 123
                    echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                    echo "').bind('sonata.add_element', function() {
                        apply_position_value_";
                    // line 124
                    echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                    echo "();
                        jQuery('div#field_container_";
                    // line 125
                    echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                    echo " tbody.sonata-ba-tbody').sortable('refresh');
                    });

                    apply_position_value_";
                    // line 128
                    echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                    echo "();

                </script>
            ";
                }
                // line 132
                echo "
            ";
                // line 134
                echo "            ";
                $this->env->loadTemplate("SonataAdminBundle:CRUD:edit_orm_one_association_script.html.twig")->display($context);
                // line 135
                echo "
        ";
            } else {
                // line 137
                echo "            <span id=\"field_actions_";
                echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                echo "\" >
                ";
                // line 138
                if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "hasroute", array("create", ), "method") && $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "isGranted", array("CREATE", ), "method"))) {
                    // line 139
                    echo "                    <a
                        href=\"";
                    // line 140
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "generateUrl", array("create", ), "method"), "html", null, true);
                    echo "\"
                        onclick=\"start_field_dialog_form_add_";
                    // line 141
                    echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                    echo "(event)\"
                        class=\"sonata-ba-action\"
                        >
                        <img
                            src=\"";
                    // line 145
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/famfamfam/add.png"), "html", null, true);
                    echo "\"
                            alt=\"";
                    // line 146
                    echo $this->env->getExtension('translator')->getTranslator()->trans("btn_add", array(), "SonataAdminBundle");
                    echo "\"
                         />
                    </a>
                ";
                }
                // line 150
                echo "            </span>

            <div style=\"display: none\" id=\"field_dialog_";
                // line 152
                echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                echo "\">

            </div>

            ";
                // line 156
                $this->env->loadTemplate("SonataAdminBundle:CRUD:edit_orm_many_association_script.html.twig")->display($context);
                // line 157
                echo "        ";
            }
            // line 158
            echo "    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_orm_one_to_many.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
