<?php

/* DunglasCarRentalBundle:Customer:show.html.twig */
class __TwigTemplate_5585eac02fa438bf770f3ff02b41582d extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<h1>Customer</h1>

<table class=\"record_properties\">
    <tbody>
        <tr>
            <th>Id</th>                <td>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'entity'), "id", array(), "any", false), "html");
        echo "</td>        </tr>
        <tr>
            <th>Gender</th>                <td>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'entity'), "gender", array(), "any", false), "html");
        echo "</td>        </tr>
        <tr>
            <th>Lastname</th>                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'entity'), "lastName", array(), "any", false), "html");
        echo "</td>        </tr>
        <tr>
            <th>Firstname</th>                <td>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'entity'), "firstName", array(), "any", false), "html");
        echo "</td>        </tr>
        <tr>
            <th>Address1</th>                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'entity'), "address1", array(), "any", false), "html");
        echo "</td>        </tr>
        <tr>
            <th>Address2</th>                <td>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'entity'), "address2", array(), "any", false), "html");
        echo "</td>        </tr>
        <tr>
            <th>City</th>                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'entity'), "city", array(), "any", false), "html");
        echo "</td>        </tr>
        <tr>
            <th>Zipcode</th>                <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'entity'), "zipCode", array(), "any", false), "html");
        echo "</td>        </tr>
        <tr>
            <th>Country</th>                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'entity'), "country", array(), "any", false), "html");
        echo "</td>        </tr>
        <tr>
            <th>Emailaddress</th>                <td>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'entity'), "emailAddress", array(), "any", false), "html");
        echo "</td>        </tr>
        <tr>
            <th>Phonenumber1</th>                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'entity'), "phoneNumber1", array(), "any", false), "html");
        echo "</td>        </tr>
        <tr>
            <th>Phonenumber2</th>                <td>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'entity'), "phoneNumber2", array(), "any", false), "html");
        echo "</td>        </tr>
        <tr>
            <th>Registrationdate</th>                <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_date_format_filter($this->getAttribute($this->getContext($context, 'entity'), "registrationDate", array(), "any", false), "Y-m-d H:i:s"), "html");
        echo "</td>        </tr>
        <tr>
            <th>Birth</th>                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_date_format_filter($this->getAttribute($this->getContext($context, 'entity'), "birth", array(), "any", false), "Y-m-d H:i:s"), "html");
        echo "</td>        </tr>
        <tr>
            <th>Notes</th>                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'entity'), "notes", array(), "any", false), "html");
        echo "</td>        </tr>
        <tr>
            <th>Active</th>                <td>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'entity'), "active", array(), "any", false), "html");
        echo "</td>        </tr>
        <tr>
            <th>Created</th>                <td>";
        // line 38
        echo twig_escape_filter($this->env, twig_date_format_filter($this->getAttribute($this->getContext($context, 'entity'), "created", array(), "any", false), "Y-m-d H:i:s"), "html");
        echo "</td>        </tr>
        <tr>
            <th>Updated</th>                <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_date_format_filter($this->getAttribute($this->getContext($context, 'entity'), "updated", array(), "any", false), "Y-m-d H:i:s"), "html");
        echo "</td>        </tr>
    </tbody>
</table>

<ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("customer"), "html");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("customer_edit", array("id" => $this->getAttribute($this->getContext($context, 'entity'), "id", array(), "any", false))), "html");
        echo "\">
            Edit
        </a>
    </li>
    <li>
        <form action=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("customer_delete", array("id" => $this->getAttribute($this->getContext($context, 'entity'), "id", array(), "any", false))), "html");
        echo "\" method=\"post\">
            ";
        // line 57
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
        return "DunglasCarRentalBundle:Customer:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
