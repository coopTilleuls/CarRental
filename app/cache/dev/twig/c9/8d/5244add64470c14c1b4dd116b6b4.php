<?php

/* SonataAdminBundle:CRUD:edit_orm_many_to_one.html.twig */
class __TwigTemplate_c98d5244add64470c14c1b4dd116b6b4 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
";
        // line 12
        if ((!$this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "hasassociationadmin"))) {
            // line 13
            echo "    ";
            echo $this->env->getExtension('sonata_admin')->renderRelationElement($this->getContext($context, "value"), $this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"));
            echo "
";
        } elseif (($this->getAttribute($this->getContext($context, "sonata_admin"), "edit") == "inline")) {
            // line 15
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "formfielddescriptions"));
            foreach ($context['_seq'] as $context["_key"] => $context["field_description"]) {
                // line 16
                echo "        ";
                echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "getChild", array($this->getAttribute($this->getContext($context, "field_description"), "name"), ), "method"));
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_description'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
        } else {
            // line 19
            echo "    <div id=\"field_container_";
            echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
            echo "\">
        ";
            // line 20
            if (($this->getAttribute($this->getContext($context, "sonata_admin"), "edit") == "list")) {
                // line 21
                echo "            <span id=\"field_widget_";
                echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                echo "\" >
                ";
                // line 22
                if ($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "admin"), "id", array($this->getAttribute($this->getContext($context, "sonata_admin"), "value"), ), "method")) {
                    // line 23
                    echo "                    ";
                    echo $this->env->getExtension('actions')->renderAction("SonataAdminBundle:Helper:getShortObjectDescription", array(), array("query" => array("code" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "code"), "objectId" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "id", array($this->getAttribute($this->getContext($context, "sonata_admin"), "value"), ), "method"), "uniqid" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "uniqid"))));
                    // line 30
                    echo "                ";
                }
                // line 31
                echo "            </span>
            <span style=\"display: none\" >
                ";
                // line 33
                echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "form"));
                echo "
            </span>
        ";
            } else {
                // line 36
                echo "            <span id=\"field_widget_";
                echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                echo "\" >
                ";
                // line 37
                echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "form"));
                echo "
            </span>
        ";
            }
            // line 40
            echo "
        <span id=\"field_actions_";
            // line 41
            echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
            echo "\" >

            ";
            // line 43
            if (((($this->getAttribute($this->getContext($context, "sonata_admin"), "edit") == "list") && $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "hasRoute", array("list", ), "method")) && $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "isGranted", array("LIST", ), "method"))) {
                // line 44
                echo "                <a  href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "generateUrl", array("list", ), "method"), "html", null, true);
                echo "\"
                    onclick=\"start_field_dialog_form_list_";
                // line 45
                echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                echo "(event)\"
                    class=\"sonata-ba-action\"
                    >
                    <img src=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/famfamfam/application_view_list.png"), "html", null, true);
                echo "\"
                         alt=\"";
                // line 49
                echo $this->env->getExtension('translator')->getTranslator()->trans("btn_add", array(), "SonataAdminBundle");
                echo "\"
                    />
                </a>
            ";
            }
            // line 53
            echo "
            ";
            // line 54
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "hasRoute", array("create", ), "method") && $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "isGranted", array("CREATE", ), "method"))) {
                // line 55
                echo "                <a  href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "generateUrl", array("create", ), "method"), "html", null, true);
                echo "\"
                    onclick=\"start_field_dialog_form_add_";
                // line 56
                echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                echo "(event)\"
                    class=\"sonata-ba-action\"
                    >
                        <img src=\"";
                // line 59
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/famfamfam/add.png"), "html", null, true);
                echo "\" alt=\"";
                echo $this->env->getExtension('translator')->getTranslator()->trans("btn_add", array(), "SonataAdminBundle");
                echo "\" />
                </a>
            ";
            }
            // line 62
            echo "
            ";
            // line 63
            if (((($this->getAttribute($this->getContext($context, "sonata_admin"), "edit") == "list") && $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "hasRoute", array("list", ), "method")) && $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "isGranted", array("LIST", ), "method"))) {
                // line 64
                echo "                <a  href=\"\"
                    onclick=\"remove_selected_element_";
                // line 65
                echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                echo "(event)\"
                    class=\"sonata-ba-action\"
                    >
                    <img src=\"";
                // line 68
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/famfamfam/cancel.png"), "html", null, true);
                echo "\"
                         alt=\"";
                // line 69
                echo $this->env->getExtension('translator')->getTranslator()->trans("btn_cancel", array(), "SonataAdminBundle");
                echo "\"
                    />
                </a>
            ";
            }
            // line 73
            echo "
        </span>

        <div class=\"container sonata-ba-modal sonata-ba-modal-edit-one-to-one\" style=\"display: none\" id=\"field_dialog_";
            // line 76
            echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
            echo "\">

        </div>
    </div>

    ";
            // line 81
            $this->env->loadTemplate("SonataAdminBundle:CRUD:edit_orm_many_association_script.html.twig")->display($context);
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_orm_many_to_one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
