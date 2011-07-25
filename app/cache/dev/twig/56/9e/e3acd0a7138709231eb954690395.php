<?php

/* DunglasCarRentalBundle::index.html.twig */
class __TwigTemplate_569ee3acd0a7138709231eb954690395 extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    public function getParent(array $context)
    {
        if (null === $this->parent) {
            $this->parent = $this->env->loadTemplate("DunglasCarRentalBundle::layout.html.twig");
        }

        return $this->parent;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Vehicle list</h1>

<table class=\"records_list\">
    <thead>
        <tr>
            <th>Id</th>
            <th>Numberplate</th>
            <th>Make</th>
            <th>Model</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'entities'));
        foreach ($context['_seq'] as $context['_key'] => $context['entity']) {
            // line 18
            echo "        <tr>
            <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vehicle_show", array("id" => $this->getAttribute($this->getContext($context, 'entity'), "id", array(), "any", false))), "html");
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'entity'), "id", array(), "any", false), "html");
            echo "</a></td>
            <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'entity'), "numberPlate", array(), "any", false), "html");
            echo "</td>
            <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'entity'), "make", array(), "any", false), "html");
            echo "</td>
            <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'entity'), "model", array(), "any", false), "html");
            echo "</td>
            <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vehicle_show", array("id" => $this->getAttribute($this->getContext($context, 'entity'), "id", array(), "any", false))), "html");
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vehicle_edit", array("id" => $this->getAttribute($this->getContext($context, 'entity'), "id", array(), "any", false))), "html");
            echo "\">edit</a>
                    </li>
                </ul>
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 35
        echo "    </tbody>
</table>

<ul>
    <li>
        <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vehicle_new"), "html");
        echo "\">
            Add a new vehicle
        </a>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "DunglasCarRentalBundle::index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
