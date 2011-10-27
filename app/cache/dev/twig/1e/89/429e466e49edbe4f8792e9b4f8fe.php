<?php

/* SonataAdminBundle:Form:form_admin_fields.html.twig */
class __TwigTemplate_1e89429e466e49edbe4f8792e9b4f8fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field_row' => array($this, 'block_field_row'),
            'sonata_admin_orm_one_to_one_widget' => array($this, 'block_sonata_admin_orm_one_to_one_widget'),
            'sonata_admin_orm_many_to_many_widget' => array($this, 'block_sonata_admin_orm_many_to_many_widget'),
            'sonata_admin_orm_many_to_one_widget' => array($this, 'block_sonata_admin_orm_many_to_one_widget'),
            'sonata_admin_orm_one_to_many_widget' => array($this, 'block_sonata_admin_orm_one_to_many_widget'),
            'sonata_type_model_widget' => array($this, 'block_sonata_type_model_widget'),
            'sonata_type_admin_widget' => array($this, 'block_sonata_type_admin_widget'),
            'sonata_type_collection_widget' => array($this, 'block_sonata_type_collection_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 21
    public function block_label($context, array $blocks = array())
    {
        // line 22
        echo "                ";
        if ($this->getAttribute(twig_default_filter($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "options")), "name", array(), "any", true)) {
            // line 23
            echo "                    ";
            echo $this->env->getExtension('form')->renderLabel($this->getContext($context, "form"), $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "options"), "name"));
            echo (($this->getContext($context, "required")) ? ("*") : (""));
            echo "
                ";
        } else {
            // line 25
            echo "                    ";
            echo $this->env->getExtension('form')->renderLabel($this->getContext($context, "form"));
            echo (($this->getContext($context, "required")) ? ("*") : (""));
            echo "
                ";
        }
        // line 27
        echo "                <br />
            ";
    }

    // line 16
    public function block_field_row($context, array $blocks = array())
    {
        // line 17
        echo "    ";
        if ((((!array_key_exists("sonata_admin", $context)) || (!$this->getContext($context, "sonata_admin_enabled"))) || (!$this->getAttribute($this->getContext($context, "sonata_admin"), "field_description")))) {
            // line 18
            echo "        ";
            $this->displayParentBlock("field_row", $context, $blocks);
            echo "
    ";
        } else {
            // line 20
            echo "        <div id=\"sonata-ba-field-container-";
            echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
            echo "\">
            ";
            // line 21
            $this->displayBlock('label', $context, $blocks);
            // line 29
            echo "
            <div class=\"sonata-ba-field sonata-ba-field-";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "sonata_admin"), "edit"), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "sonata_admin"), "inline"), "html", null, true);
            echo " ";
            if ((twig_length_filter($this->env, $this->getContext($context, "errors")) > 0)) {
                echo "sonata-ba-field-error";
            }
            echo "\">

                ";
            // line 32
            echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "form"));
            echo "

                ";
            // line 34
            if ($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "help")) {
                // line 35
                echo "                    <em class=\"sonata-ba-field-help\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "help"), "html", null, true);
                echo "</em>
                ";
            }
            // line 37
            echo "
                ";
            // line 38
            if ((twig_length_filter($this->env, $this->getContext($context, "errors")) > 0)) {
                // line 39
                echo "                    <div class=\"sonata-ba-field-error-messages\">
                        ";
                // line 40
                echo $this->env->getExtension('form')->renderErrors($this->getContext($context, "form"));
                echo "
                    </div>
                ";
            }
            // line 43
            echo "            </div>
        </div>
    ";
        }
    }

    // line 49
    public function block_sonata_admin_orm_one_to_one_widget($context, array $blocks = array())
    {
        // line 50
        echo "    ";
        $this->env->loadTemplate("SonataAdminBundle:CRUD:edit_orm_one_to_one.html.twig")->display($context);
    }

    // line 53
    public function block_sonata_admin_orm_many_to_many_widget($context, array $blocks = array())
    {
        // line 54
        echo "    ";
        $this->env->loadTemplate("SonataAdminBundle:CRUD:edit_orm_many_to_many.html.twig")->display($context);
    }

    // line 57
    public function block_sonata_admin_orm_many_to_one_widget($context, array $blocks = array())
    {
        // line 58
        echo "    ";
        $this->env->loadTemplate("SonataAdminBundle:CRUD:edit_orm_many_to_one.html.twig")->display($context);
    }

    // line 61
    public function block_sonata_admin_orm_one_to_many_widget($context, array $blocks = array())
    {
        // line 62
        echo "    ";
        $this->env->loadTemplate("SonataAdminBundle:CRUD:edit_orm_one_to_many.html.twig")->display($context);
    }

    // line 65
    public function block_sonata_type_model_widget($context, array $blocks = array())
    {
        // line 66
        echo "    ";
        // line 70
        echo "
    ";
        // line 72
        echo "
    ";
        // line 73
        if (twig_test_empty($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"))) {
            // line 74
            echo "        ";
            $this->displayBlock("choice_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "mappingtype") == 1)) {
            // line 76
            echo "        ";
            $this->displayBlock("sonata_admin_orm_one_to_one_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "mappingtype") == 2)) {
            // line 78
            echo "        ";
            $this->displayBlock("sonata_admin_orm_many_to_one_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "mappingtype") == 8)) {
            // line 80
            echo "        ";
            $this->displayBlock("sonata_admin_orm_many_to_many_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "mappingtype") == 4)) {
            // line 82
            echo "        ";
            $this->displayBlock("sonata_admin_orm_one_to_many_widget", $context, $blocks);
            echo "
    ";
        } else {
            // line 84
            echo "        ";
            // line 85
            echo "        ";
            $this->displayBlock("choice_widget", $context, $blocks);
            echo "
    ";
        }
    }

    // line 89
    public function block_sonata_type_admin_widget($context, array $blocks = array())
    {
        // line 90
        echo "    ";
        // line 91
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "mappingtype") == 1)) {
            // line 92
            echo "        ";
            $this->displayBlock("sonata_admin_orm_one_to_one_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "mappingtype") == 2)) {
            // line 94
            echo "        ";
            $this->displayBlock("sonata_admin_orm_many_to_one_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "mappingtype") == 8)) {
            // line 96
            echo "        ";
            $this->displayBlock("sonata_admin_orm_many_to_many_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "mappingtype") == 4)) {
            // line 98
            echo "        ICI
        ";
            // line 99
            $this->displayBlock("sonata_admin_orm_one_to_many_widget", $context, $blocks);
            echo "
    ";
        } else {
            // line 101
            echo "        INVALID MODE : ";
            echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
            echo "
    ";
        }
    }

    // line 105
    public function block_sonata_type_collection_widget($context, array $blocks = array())
    {
        // line 106
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "mappingtype") == 4)) {
            // line 107
            echo "        ";
            $this->displayBlock("sonata_admin_orm_one_to_many_widget", $context, $blocks);
            echo "
    ";
        } else {
            // line 109
            echo "        INVALID MODE : ";
            echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
            echo " - type : sonata_type_collection - mapping : ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "mappingtype"), "html", null, true);
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Form:form_admin_fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
