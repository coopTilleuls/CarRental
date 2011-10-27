<?php

/* SonataAdminBundle:Core:dashboard.html.twig */
class __TwigTemplate_80d7c192710659d86753408199859eb4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
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
    public function block_title($context, array $blocks = array())
    {
        echo $this->env->getExtension('translator')->getTranslator()->trans("title_dashboard", array(), "SonataAdminBundle");
    }

    // line 15
    public function block_breadcrumb($context, array $blocks = array())
    {
        echo $this->env->getExtension('translator')->getTranslator()->trans("title_dashboard", array(), "SonataAdminBundle");
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        echo "
    ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "groups"));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 19
            echo "        <table class=\"sonata-ba-list\">
            <thead>
                <tr>
                    <th colspan=\"3\">";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "group"), "label"), array(), "SonataAdminBundle"), "html", null, true);
            echo "</th>
                </tr>
            </thead>

            <tbody>
                ";
            // line 27
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "group"), "items"));
            foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                // line 28
                echo "                    <tr>
                        <td class=\"sonata-ba-list-label\">";
                // line 29
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "admin"), "label"), array(), $this->getAttribute($this->getContext($context, "admin"), "translationdomain")), "html", null, true);
                echo "</td>
                        <td>
                            ";
                // line 31
                if (($this->getAttribute($this->getContext($context, "admin"), "hasroute", array("create", ), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array("CREATE", ), "method"))) {
                    // line 32
                    echo "                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array("create", ), "method"), "html", null, true);
                    echo "\"><img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/famfamfam/add.png"), "html", null, true);
                    echo "\" /> ";
                    echo $this->env->getExtension('translator')->getTranslator()->trans("link_add", array(), "SonataAdminBundle");
                    echo "</a>
                            ";
                }
                // line 34
                echo "                        </td>
                        <td>
                            ";
                // line 36
                if (($this->getAttribute($this->getContext($context, "admin"), "hasroute", array("list", ), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array("LIST", ), "method"))) {
                    // line 37
                    echo "                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array("list", ), "method"), "html", null, true);
                    echo "\"><img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/famfamfam/application_view_list.png"), "html", null, true);
                    echo "\" />";
                    echo $this->env->getExtension('translator')->getTranslator()->trans("link_list", array(), "SonataAdminBundle");
                    echo "</a>
                            ";
                }
                // line 39
                echo "                        </td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 42
            echo "            </tbody>
        </table>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 45
        echo "
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
