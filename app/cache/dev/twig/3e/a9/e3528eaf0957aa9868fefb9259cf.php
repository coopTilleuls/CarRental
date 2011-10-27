<?php

/* SonataAdminBundle:CRUD:edit_orm_many_association_script.html.twig */
class __TwigTemplate_3ea9e3528eaf0957aa9868fefb9259cf extends Twig_Template
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
        // line 18
        echo "
";
        // line 20
        echo "
<script>
    <!-- edit many association -->

    ";
        // line 29
        echo "    var field_dialog_form_list_link_";
        echo $this->getContext($context, "id");
        echo " = function(event) {
        initialize_popup_";
        // line 30
        echo $this->getContext($context, "id");
        echo "();

        event.preventDefault();
        event.stopPropagation();

        var element = jQuery(this).parents('#field_dialog_";
        // line 35
        echo $this->getContext($context, "id");
        echo " td.sonata-ba-list-field');

        // the user does does click on a row column
        if (element.length == 0) {
            // make a recursive call (ie: reset the filter)
            jQuery.ajax({
                type: 'GET',
                url: jQuery(this).attr('href'),
                success: function(html) {
                   field_dialog_";
        // line 44
        echo $this->getContext($context, "id");
        echo ".html(html);
                }
            });

            return;
        }

        jQuery('#";
        // line 51
        echo $this->getContext($context, "id");
        echo "').val(element.attr('objectId'));
        jQuery('#";
        // line 52
        echo $this->getContext($context, "id");
        echo "').trigger('change');

        field_dialog_";
        // line 54
        echo $this->getContext($context, "id");
        echo ".dialog('close');
    }


    // handle the add link
    var field_dialog_form_list_";
        // line 59
        echo $this->getContext($context, "id");
        echo " = function(event) {

        initialize_popup_";
        // line 61
        echo $this->getContext($context, "id");
        echo "();

        event.preventDefault();
        event.stopPropagation();

        var a = jQuery(this);

        field_dialog_";
        // line 68
        echo $this->getContext($context, "id");
        echo ".html('');

        // retrieve the form element from the related admin generator
        jQuery.ajax({
            url: a.attr('href'),
            success: function(html) {

                // populate the popup container
                field_dialog_";
        // line 76
        echo $this->getContext($context, "id");
        echo ".html(html);

                // capture the submit event to make an ajax call, ie : POST data to the
                // related create admin
                jQuery('a', field_dialog_";
        // line 80
        echo $this->getContext($context, "id");
        echo ").live('click', field_dialog_form_list_link_";
        echo $this->getContext($context, "id");
        echo ");
                jQuery('form', field_dialog_";
        // line 81
        echo $this->getContext($context, "id");
        echo ").live('submit', function(event) {
                    event.preventDefault();

                    var form = jQuery(this);

                    jQuery(form).ajaxSubmit({
                        type: form.attr('method'),
                        url: form.attr('action'),
                        data: {_xml_http_request: true},
                        success: function(html) {
                           field_dialog_";
        // line 91
        echo $this->getContext($context, "id");
        echo ".html(html);
                        }
                    });
                });

                // open the dialog in modal mode
                field_dialog_";
        // line 97
        echo $this->getContext($context, "id");
        echo ".dialog({
                    height: 'auto',
                    width: 980,
                    modal: true,
                    resizable: false,
                    title: '";
        // line 102
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "label");
        echo "',
                    close: function(event, ui) {
                        // make sure we have a clean state
                        jQuery('a', field_dialog_";
        // line 105
        echo $this->getContext($context, "id");
        echo ").die('click');
                        jQuery('form', field_dialog_";
        // line 106
        echo $this->getContext($context, "id");
        echo ").die('submit');
                    }
                });
            }
        });
    };

    // handle the add link
    var field_dialog_form_add_";
        // line 114
        echo $this->getContext($context, "id");
        echo " = function(event) {
        initialize_popup_";
        // line 115
        echo $this->getContext($context, "id");
        echo "();

        event.preventDefault();
        event.stopPropagation();

        var a = jQuery(this);

        field_dialog_";
        // line 122
        echo $this->getContext($context, "id");
        echo ".html('');

        Admin.log('[";
        // line 124
        echo $this->getContext($context, "id");
        echo "|field_dialog_form_add] add link action');
        // retrieve the form element from the related admin generator
        jQuery.ajax({
            url: a.attr('href'),
            success: function(html) {

                Admin.log('[";
        // line 130
        echo $this->getContext($context, "id");
        echo "|field_dialog_form_add] ajax success', field_dialog_";
        echo $this->getContext($context, "id");
        echo ");

                // populate the popup container
                field_dialog_";
        // line 133
        echo $this->getContext($context, "id");
        echo ".html(html);

                // capture the submit event to make an ajax call, ie : POST data to the
                // related create admin
                jQuery('a', field_dialog_";
        // line 137
        echo $this->getContext($context, "id");
        echo ").live('click', field_dialog_form_action_";
        echo $this->getContext($context, "id");
        echo ");
                jQuery('form', field_dialog_";
        // line 138
        echo $this->getContext($context, "id");
        echo ").live('submit', field_dialog_form_action_";
        echo $this->getContext($context, "id");
        echo ");

                // open the dialog in modal mode
                field_dialog_";
        // line 141
        echo $this->getContext($context, "id");
        echo ".dialog({
                    height: 'auto',
                    width: 650,
                    modal: true,
                    resizable: false,
                    title: '";
        // line 146
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "label");
        echo "',
                    close: function(event, ui) {
                        Admin.log('[";
        // line 148
        echo $this->getContext($context, "id");
        echo "|field_dialog_form_add] dialog closed - removing `live` events');
                        // make sure we have a clean state
                        jQuery('a', field_dialog_";
        // line 150
        echo $this->getContext($context, "id");
        echo ").die('click');
                        jQuery('form', field_dialog_";
        // line 151
        echo $this->getContext($context, "id");
        echo ").die('submit');
                    }
                });
            }
        });
    };

    // handle the post data
    var field_dialog_form_action_";
        // line 159
        echo $this->getContext($context, "id");
        echo " = function(event) {

        event.preventDefault();
        event.stopPropagation();

        Admin.log('[";
        // line 164
        echo $this->getContext($context, "id");
        echo "|field_dialog_form_action] action catch', this);
        initialize_popup_";
        // line 165
        echo $this->getContext($context, "id");
        echo "();

        var element = jQuery(this);

        if (this.nodeName == 'FORM') {
            var url  = element.attr('action');
            var type = element.attr('method');
        } else if (this.nodeName == 'A') {
            var url  = element.attr('href');
            var type = 'GET';
        } else {
            alert('unexpected element : @' + this.nodeName + '@');
            return;
        }

        if (element.hasClass('sonata-ba-action')) {
            Admin.log('[";
        // line 181
        echo $this->getContext($context, "id");
        echo "|field_dialog_form_action] reserved action stop catch all events');
            return;
        }

        var data = {
            _xml_http_request: true
        }

        var form = jQuery(this);

        Admin.log('[";
        // line 191
        echo $this->getContext($context, "id");
        echo "|field_dialog_form_action] execute ajax call');

        // the ajax post
        jQuery(form).ajaxSubmit({
            url: url,
            type: type,
            data: data,
            success: function(data) {

                Admin.log('[";
        // line 200
        echo $this->getContext($context, "id");
        echo "|field_dialog_form_action] ajax success');
                if (typeof data == 'string') {
                    field_dialog_";
        // line 202
        echo $this->getContext($context, "id");
        echo ".html(data);
                    return;
                };

                // if the crud action return ok, then the element has been added
                // so the widget container must be refresh with the last option available
                if (data.result == 'ok') {
                    field_dialog_";
        // line 209
        echo $this->getContext($context, "id");
        echo ".dialog('close');

                    ";
        // line 211
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "options"), "edit") == "list")) {
            // line 212
            echo "                        ";
            // line 216
            echo "                        jQuery('#";
            echo $this->getContext($context, "id");
            echo "').val(data.objectId);
                        jQuery('#";
            // line 217
            echo $this->getContext($context, "id");
            echo "').change();

                    ";
        } else {
            // line 220
            echo "
                        // reload the form element
                        jQuery('#field_widget_";
            // line 222
            echo $this->getContext($context, "id");
            echo "').closest('form').ajaxSubmit({
                            url: '";
            // line 223
            echo $this->env->getExtension('routing')->getUrl("sonata_admin_retrieve_form_element", array("elementId" => $this->getContext($context, "id"), "objectId" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "admin"), "root"), "id", array($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "admin"), "root"), "subject"), ), "method"), "uniqid" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "admin"), "root"), "uniqid"), "code" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "admin"), "root"), "code")));
            // line 228
            echo "',
                            data: {_xml_http_request: true },
                            type: 'POST',
                            success: function(html) {
                                jQuery('#field_container_";
            // line 232
            echo $this->getContext($context, "id");
            echo "').replaceWith(html);
                            }
                        });

                    ";
        }
        // line 237
        echo "
                    return;
                }

                // otherwise, display form error
                field_dialog_";
        // line 242
        echo $this->getContext($context, "id");
        echo ".html(html);

                Admin.add_pretty_errors(field_dialog_";
        // line 244
        echo $this->getContext($context, "id");
        echo ");

                // reattach the event
                jQuery('form', field_dialog_";
        // line 247
        echo $this->getContext($context, "id");
        echo ").submit(field_dialog_form_action_";
        echo $this->getContext($context, "id");
        echo ");
            }
        });

        return false;
    }

    var field_dialog_";
        // line 254
        echo $this->getContext($context, "id");
        echo " = false;

    function initialize_popup_";
        // line 256
        echo $this->getContext($context, "id");
        echo "() {
        // initialize component
        if (!field_dialog_";
        // line 258
        echo $this->getContext($context, "id");
        echo ") {
            field_dialog_";
        // line 259
        echo $this->getContext($context, "id");
        echo " = jQuery(\"#field_dialog_";
        echo $this->getContext($context, "id");
        echo "\");

            // move the dialog as a child of the root element, nested form breaks html ...
            jQuery(document).append(field_dialog_";
        // line 262
        echo $this->getContext($context, "id");
        echo ");

            Admin.log('[";
        // line 264
        echo $this->getContext($context, "id");
        echo "|field_dialog] move dialog container as a document child');
        }
    }

    ";
        // line 271
        echo "    // this function initialize the popup
    // this can be only done this way has popup can be cascaded
    function start_field_dialog_form_add_";
        // line 273
        echo $this->getContext($context, "id");
        echo "(event) {

        var targetElement = Admin.stopEvent(event);

        // remove the html event a
        var a = jQuery(targetElement).closest('a');
        a.removeAttr('onclick');

        initialize_popup_";
        // line 281
        echo $this->getContext($context, "id");
        echo "();

       // add the jQuery event to the a element
        a.click(field_dialog_form_add_";
        // line 284
        echo $this->getContext($context, "id");
        echo ");

        // trigger the event
        a.trigger('click');

        return false;
    }

    Admin.add_pretty_errors(field_dialog_";
        // line 292
        echo $this->getContext($context, "id");
        echo ");


    ";
        // line 295
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "options"), "edit") == "list")) {
            // line 296
            echo "        ";
            // line 299
            echo "        // this function initialize the popup
        // this can be only done this way has popup can be cascaded
        function start_field_dialog_form_list_";
            // line 301
            echo $this->getContext($context, "id");
            echo "(event) {
            var targetElement = Admin.stopEvent(event);

            // remove the html event a
            var a = jQuery(targetElement).closest('a');
            a.removeAttr('onclick');

            initialize_popup_";
            // line 308
            echo $this->getContext($context, "id");
            echo "();

            // add the jQuery event to the a element
            a.click(field_dialog_form_list_";
            // line 311
            echo $this->getContext($context, "id");
            echo ");

            // trigger the event
            a.trigger('click');

            return false;
        }

        function remove_selected_element_";
            // line 319
            echo $this->getContext($context, "id");
            echo "(event) {
            var targetElement = Admin.stopEvent(event);

            // remove the html event a
            var a = jQuery(targetElement).closest('a');
            a.removeAttr('onclick');

            a.click(field_remove_element_";
            // line 326
            echo $this->getContext($context, "id");
            echo ");

            a.trigger('click');

            return false;
        }

        function field_remove_element_";
            // line 333
            echo $this->getContext($context, "id");
            echo "(event) {
            event.preventDefault();

            jQuery('#";
            // line 336
            echo $this->getContext($context, "id");
            echo "').val('');
            jQuery('#";
            // line 337
            echo $this->getContext($context, "id");
            echo "').trigger('change');

            return false;
        }
        ";
            // line 344
            echo "
        // update the
        jQuery('#";
            // line 346
            echo $this->getContext($context, "id");
            echo "').live('change', function(event) {
            jQuery('#field_widget_";
            // line 347
            echo $this->getContext($context, "id");
            echo "').html(\"<span><img src=\\\"";
            echo $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/ajax-loader.gif");
            echo "\\\" style=\\\"vertical-align: middle; margin-right: 10px\\\"/>";
            echo $this->env->getExtension('translator')->trans("loading_information ...", array(), "SonataAdminBundle");
            echo "</span>\");
            jQuery.ajax({
                type: 'GET',
                url: '";
            // line 350
            echo $this->env->getExtension('routing')->getUrl("sonata_admin_short_object_information", array("objectId" => "OBJECT_ID", "uniqid" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "uniqid"), "code" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "code")));
            // line 354
            echo "'.replace('OBJECT_ID', jQuery(this).val()),
                success: function(html) {
                    jQuery('#field_widget_";
            // line 356
            echo $this->getContext($context, "id");
            echo "').html(html);
                }
            });
        });

    ";
        }
        // line 362
        echo "
    <!-- / edit many association -->
</script>

";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_orm_many_association_script.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
