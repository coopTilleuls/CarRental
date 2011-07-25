<?php

/* DunglasCarRentalBundle:Manufacturer:show.html.twig */
class __TwigTemplate_7932205b359e9241bf730ee210d7025e extends Twig_Template
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
        echo "<h1>Manufacturer</h1>

<table class=\"record_properties\">
    <tbody>
        <tr>
            <th>Id</th>                <td>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'entity'), "id", array(), "any", false), "html");
        echo "</td>        </tr>
        <tr>
            <th>Name</th>                <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'entity'), "name", array(), "any", false), "html");
        echo "</td>        </tr>
        <tr>
            <th>Created</th>                <td>";
        // line 13
        echo twig_escape_filter($this->env, twig_date_format_filter($this->getAttribute($this->getContext($context, 'entity'), "created", array(), "any", false), "Y-m-d H:i:s"), "html");
        echo "</td>        </tr>
        <tr>
            <th>Updated</th>                <td>";
        // line 15
        echo twig_escape_filter($this->env, twig_date_format_filter($this->getAttribute($this->getContext($context, 'entity'), "updated", array(), "any", false), "Y-m-d H:i:s"), "html");
        echo "</td>        </tr>
    </tbody>
</table>

<ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("manufacturer"), "html");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("manufacturer_edit", array("id" => $this->getAttribute($this->getContext($context, 'entity'), "id", array(), "any", false))), "html");
        echo "\">
            Edit
        </a>
    </li>
    <li>
        <form action=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("manufacturer_delete", array("id" => $this->getAttribute($this->getContext($context, 'entity'), "id", array(), "any", false))), "html");
        echo "\" method=\"post\">
            ";
        // line 32
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, 'delete_form'));
        echo "
            <button type=\"submit\">Delete</button>
        </form>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "DunglasCarRentalBundle:Manufacturer:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
