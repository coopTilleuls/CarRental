<?php

/* DunglasCarRentalBundle:Vehicle:show.html.twig */
class __TwigTemplate_704c486c18c1e561f86b427f0f833e9e extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<h1>Vehicle</h1>

<table class=\"record_properties\">
    <tbody>
        <tr>
            <th>Id</th>                <td>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'entity'), "id", array(), "any", false), "html");
        echo "</td>        </tr>
        <tr>
            <th>Numberplate</th>                <td>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'entity'), "numberPlate", array(), "any", false), "html");
        echo "</td>        </tr>
        <tr>
            <th>Version</th>                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'entity'), "version", array(), "any", false), "html");
        echo "</td>        </tr>
        <tr>
            <th>Fuel</th>                <td>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'entity'), "fuel", array(), "any", false), "html");
        echo "</td>        </tr>
        <tr>
            <th>Nextvehicleinspection</th>                <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_date_format_filter($this->getAttribute($this->getContext($context, 'entity'), "nextVehicleInspection", array(), "any", false), "Y-m-d H:i:s"), "html");
        echo "</td>        </tr>
        <tr>
            <th>Lastvalvetrain</th>                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_date_format_filter($this->getAttribute($this->getContext($context, 'entity'), "lastValvetrain", array(), "any", false), "Y-m-d H:i:s"), "html");
        echo "</td>        </tr>
        <tr>
            <th>Valvetrain</th>                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'entity'), "valvetrain", array(), "any", false), "html");
        echo "</td>        </tr>
        <tr>
            <th>Notes</th>                <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'entity'), "notes", array(), "any", false), "html");
        echo "</td>        </tr>
        <tr>
            <th>Active</th>                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'entity'), "active", array(), "any", false), "html");
        echo "</td>        </tr>
        <tr>
            <th>Created</th>                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_date_format_filter($this->getAttribute($this->getContext($context, 'entity'), "created", array(), "any", false), "Y-m-d H:i:s"), "html");
        echo "</td>        </tr>
        <tr>
            <th>Updated</th>                <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_date_format_filter($this->getAttribute($this->getContext($context, 'entity'), "updated", array(), "any", false), "Y-m-d H:i:s"), "html");
        echo "</td>        </tr>
    </tbody>
</table>

<ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vehicle"), "html");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vehicle_edit", array("id" => $this->getAttribute($this->getContext($context, 'entity'), "id", array(), "any", false))), "html");
        echo "\">
            Edit
        </a>
    </li>
    <li>
        <form action=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vehicle_delete", array("id" => $this->getAttribute($this->getContext($context, 'entity'), "id", array(), "any", false))), "html");
        echo "\" method=\"post\">
            ";
        // line 43
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
        return "DunglasCarRentalBundle:Vehicle:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
