<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* extension/module/admin_quick_edit.twig */
class __TwigTemplate_12667174e82808896297688363de45d81f36ed50f3d4a9ecb284c357e891819f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "
\t\t";
        // line 2
        if ((($context["type"] ?? null) == "error")) {
            // line 3
            echo "\t\t\tfa-times-circle
\t\t";
        } elseif ((        // line 4
($context["type"] ?? null) == "warning")) {
            // line 5
            echo "\t\t\tfa-exclamation-triangle
\t\t";
        } elseif ((        // line 6
($context["type"] ?? null) == "success")) {
            // line 7
            echo "\t\t\tfa-check-circle
\t\t";
        } elseif ((        // line 8
($context["type"] ?? null) == "info")) {
            // line 9
            echo "\t\t\tfa-info-circle
\t\t";
        } else {
            // line 11
            echo "\t\t";
        }
        // line 12
        echo ($context["header"] ?? null);
        echo "
<div class=\"modal fade\" id=\"legal_text\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"legal_text_label\" aria-hidden=\"true\">
\t<div class=\"modal-dialog\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\" id=\"legal_text_label\">";
        // line 18
        echo ($context["text_terms"] ?? null);
        echo "</h4>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t<button type=\"button\" class=\"btn btn-default cancel\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i> ";
        // line 23
        echo ($context["button_close"] ?? null);
        echo "</button>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
        // line 28
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
\t<div class=\"page-header\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"pull-right\">
\t\t\t\t";
        // line 33
        if (($context["update_pending"] ?? null)) {
            echo "<button type=\"button\" data-toggle=\"tooltip\" data-container=\"body\" data-placement=\"bottom\" title=\"";
            echo ($context["button_upgrade"] ?? null);
            echo "\" class=\"btn btn-info\" id=\"btn-upgrade\" data-url=\"";
            echo ($context["upgrade"] ?? null);
            echo "\" data-form=\"#sForm\" data-context=\"#content\" data-overlay=\"#page-overlay\" data-loading-text=\"<i class='fa fa-spinner fa-spin'></i> <span class='visible-lg-inline'>";
            echo ($context["text_upgrading"] ?? null);
            echo "</span>\"><i class=\"fa fa-arrow-circle-up\"></i> <span class=\"visible-lg-inline\">";
            echo ($context["button_upgrade"] ?? null);
            echo "</span></button>";
        }
        // line 34
        echo "\t\t\t\t<button type=\"button\" data-toggle=\"tooltip\" data-container=\"body\" data-placement=\"bottom\" title=\"";
        echo ($context["button_apply"] ?? null);
        echo "\" class=\"btn btn-success\" id=\"btn-apply\" data-url=\"";
        echo ($context["save"] ?? null);
        echo "\" data-form=\"#sForm\" data-context=\"#content\" data-vm=\"ExtVM\" data-overlay=\"#page-overlay\" data-loading-text=\"<i class='fa fa-spinner fa-spin'></i>\"";
        if (($context["update_pending"] ?? null)) {
            echo " disabled";
        }
        echo "><i class=\"fa fa-check\"></i></button>
\t\t\t\t<button type=\"submit\" data-toggle=\"tooltip\" data-container=\"body\" data-placement=\"bottom\" title=\"";
        // line 35
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\" id=\"btn-save\" data-url=\"";
        echo ($context["save"] ?? null);
        echo "\" data-form=\"#sForm\" data-context=\"#content\" data-overlay=\"#page-overlay\" data-loading-text=\"<i class='fa fa-spinner fa-spin'></i>\"";
        if (($context["update_pending"] ?? null)) {
            echo " disabled";
        }
        echo "><i class=\"fa fa-save\"></i></button>
\t\t\t\t<a href=\"";
        // line 36
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" data-container=\"body\" data-placement=\"bottom\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\" id=\"btn-cancel\" data-loading-text=\"<i class='fa fa-spinner fa-spin'></i>\"><i class=\"fa fa-reply\"></i></a>
\t\t\t</div>
\t\t\t<h1><i class=\"fa fa-pencil fa-fw ext-icon\"></i> ";
        // line 38
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 41
            echo "\t\t\t\t<li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 41);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 41);
            echo "</a></li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "\t\t\t</ul>
\t\t</div>
\t</div>

\t<div class=\"alerts\">
\t\t<div class=\"container-fluid\" id=\"alerts\">
\t\t\t";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["alerts"] ?? null));
        foreach ($context['_seq'] as $context["type"] => $context["_alerts"]) {
            // line 50
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["_alerts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["alert"]) {
                // line 51
                echo "\t\t\t\t\t";
                if ($context["alert"]) {
                    // line 52
                    echo "\t\t\t<div class=\"alert alert-";
                    if (($context["type"] == "error")) {
                        echo "danger";
                    } else {
                        echo $context["type"];
                    }
                    echo " fade in\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
\t\t\t\t<i class=\"fa ";
                    // line 54
                    echo twig_call_macro($macros["_self"], "macro_alert_icon", [$context["type"]], 54, $context, $this->getSourceContext());
                    echo "\"></i>";
                    echo $context["alert"];
                    echo "
\t\t\t</div>
\t\t\t\t\t";
                }
                // line 57
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alert'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['_alerts'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "\t\t</div>
\t</div>

\t<div class=\"container-fluid bull5i-content bull5i-container\">
\t\t<div id=\"page-overlay\" class=\"bull5i-overlay fade in\">
\t\t\t<div class=\"page-overlay-progress\"><i class=\"fa fa-refresh fa-spin fa-5x text-muted\"></i></div>
\t\t</div>

\t\t<ul class=\"nav nav-tabs bull5i-nav-tabs\">
\t\t\t<li class=\"active\"><a href=\"#settings\" data-toggle=\"tab\"><!-- ko if: settings_errors() --><i class=\"fa fa-exclamation-circle text-danger hidden\" data-bind=\"css:{'hidden': !settings_errors()}\"></i> <!-- /ko -->";
        // line 68
        echo ($context["tab_settings"] ?? null);
        echo "</a></li>
\t\t\t<li><a href=\"#ext-support\" data-toggle=\"tab\">";
        // line 69
        echo ($context["tab_support"] ?? null);
        echo "</a></li>
\t\t\t<li><a href=\"#about-ext\" data-toggle=\"tab\">";
        // line 70
        echo ($context["tab_about"] ?? null);
        echo "</a></li>
\t\t</ul>

\t\t<form action=\"";
        // line 73
        echo ($context["save"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"sForm\" class=\"form-horizontal\" role=\"form\">
\t\t\t<div class=\"tab-content\">
\t\t\t\t<div class=\"tab-pane active\" id=\"settings\">
\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t<div class=\"navbar-header\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#settings-navbar-collapse\">
\t\t\t\t\t\t\t\t\t<span class=\"sr-only\">";
        // line 80
        echo ($context["text_toggle_navigation"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<h3 class=\"panel-title\"><i class=\"fa fa-cog fa-fw\"></i> ";
        // line 84
        echo ($context["tab_settings"] ?? null);
        echo "</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"settings-navbar-collapse\">
\t\t\t\t\t\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t\t\t\t\t\t<li class=\"active\"><a href=\"#general-settings\" data-toggle=\"tab\"><!-- ko if: general_errors() --><i class=\"fa fa-exclamation-circle text-danger hidden\" data-bind=\"css:{'hidden': !general_errors()}\"></i> <!-- /ko -->";
        // line 88
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#catalog-settings\" data-toggle=\"tab\"><!-- ko if: catalog_errors() --><i class=\"fa fa-exclamation-circle text-danger hidden\" data-bind=\"css:{'hidden': !catalog_errors()}\"></i> <!-- /ko -->";
        // line 89
        echo ($context["tab_catalog"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#design-settings\" data-toggle=\"tab\"><!-- ko if: design_errors() --><i class=\"fa fa-exclamation-circle text-danger hidden\" data-bind=\"css:{'hidden': !design_errors()}\"></i> <!-- /ko -->";
        // line 90
        echo ($context["tab_design"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#sale-settings\" data-toggle=\"tab\"><!-- ko if: sale_errors() --><i class=\"fa fa-exclamation-circle text-danger hidden\" data-bind=\"css:{'hidden': !sale_errors()}\"></i> <!-- /ko -->";
        // line 91
        echo ($context["tab_sale"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#customer-settings\" data-toggle=\"tab\"><!-- ko if: customer_errors() --><i class=\"fa fa-exclamation-circle text-danger hidden\" data-bind=\"css:{'hidden': !customer_errors()}\"></i> <!-- /ko -->";
        // line 92
        echo ($context["tab_customer"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#marketing-settings\" data-toggle=\"tab\"><!-- ko if: marketing_errors() --><i class=\"fa fa-exclamation-circle text-danger hidden\" data-bind=\"css:{'hidden': !marketing_errors()}\"></i> <!-- /ko -->";
        // line 93
        echo ($context["tab_marketing"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"general-settings\">
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_status\">";
        // line 104
        echo ($context["entry_extension_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_status\" id=\"module_admin_quick_edit_status\" data-bind=\"value: status\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
        // line 107
        echo ($context["text_enabled"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
        // line 108
        echo ($context["text_disabled"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"module_admin_quick_edit_installed\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"module_admin_quick_edit_installed_version\" value=\"";
        // line 111
        echo ($context["installed_version"] ?? null);
        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_override_menu_entry0\">";
        // line 115
        echo ($context["entry_override_menu_entry"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9 col-md-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"module_admin_quick_edit_override_menu_entry\" id=\"module_admin_quick_edit_override_menu_entry1\" value=\"1\" data-bind=\"checked: override_menu_entry\"> ";
        // line 118
        echo ($context["text_yes"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"module_admin_quick_edit_override_menu_entry\" id=\"module_admin_quick_edit_override_menu_entry0\" value=\"0\" data-bind=\"checked: override_menu_entry\"> ";
        // line 121
        echo ($context["text_no"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-offset-3 col-md-offset-2 col-sm-9 col-md-10 help-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block help-text\">";
        // line 125
        echo ($context["help_override_menu_entry"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_match_anywhere0\">";
        // line 129
        echo ($context["entry_match_anywhere"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9 col-md-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"module_admin_quick_edit_match_anywhere\" id=\"module_admin_quick_edit_match_anywhere1\" value=\"1\" data-bind=\"checked: match_anywhere\"> ";
        // line 132
        echo ($context["text_yes"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"module_admin_quick_edit_match_anywhere\" id=\"module_admin_quick_edit_match_anywhere0\" value=\"0\" data-bind=\"checked: match_anywhere\"> ";
        // line 135
        echo ($context["text_no"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-offset-3 col-md-offset-2 col-sm-9 col-md-10 help-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block help-text\">";
        // line 139
        echo ($context["help_match_anywhere"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_alternate_row_colour0\">";
        // line 143
        echo ($context["entry_alternate_row_colour"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9 col-md-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"module_admin_quick_edit_alternate_row_colour\" id=\"module_admin_quick_edit_alternate_row_colour1\" value=\"1\" data-bind=\"checked: alternate_row_colour\"> ";
        // line 146
        echo ($context["text_yes"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"module_admin_quick_edit_alternate_row_colour\" id=\"module_admin_quick_edit_alternate_row_colour0\" value=\"0\" data-bind=\"checked: alternate_row_colour\"> ";
        // line 149
        echo ($context["text_no"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-offset-3 col-md-offset-2 col-sm-9 col-md-10 help-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block help-text\">";
        // line 153
        echo ($context["help_alternate_row_colour"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_row_hover_highlighting0\">";
        // line 157
        echo ($context["entry_row_hover_highlighting"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9 col-md-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"module_admin_quick_edit_row_hover_highlighting\" id=\"module_admin_quick_edit_row_hover_highlighting1\" value=\"1\" data-bind=\"checked: row_hover_highlighting\"> ";
        // line 160
        echo ($context["text_yes"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"module_admin_quick_edit_row_hover_highlighting\" id=\"module_admin_quick_edit_row_hover_highlighting0\" value=\"0\" data-bind=\"checked: row_hover_highlighting\"> ";
        // line 163
        echo ($context["text_no"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-offset-3 col-md-offset-2 col-sm-9 col-md-10 help-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block help-text\">";
        // line 167
        echo ($context["help_row_hover_highlighting"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_highlight_status0\">";
        // line 171
        echo ($context["entry_highlight_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9 col-md-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"module_admin_quick_edit_highlight_status\" id=\"module_admin_quick_edit_highlight_status1\" value=\"1\" data-bind=\"checked: highlight_status\"> ";
        // line 174
        echo ($context["text_yes"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"module_admin_quick_edit_highlight_status\" id=\"module_admin_quick_edit_highlight_status0\" value=\"0\" data-bind=\"checked: highlight_status\"> ";
        // line 177
        echo ($context["text_no"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-offset-3 col-md-offset-2 col-sm-9 col-md-10 help-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block help-text\">";
        // line 181
        echo ($context["help_highlight_status"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_highlight_yes_no0\">";
        // line 185
        echo ($context["entry_highlight_yes_no"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9 col-md-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"module_admin_quick_edit_highlight_yes_no\" id=\"module_admin_quick_edit_highlight_yes_no1\" value=\"1\" data-bind=\"checked: highlight_yes_no\"> ";
        // line 188
        echo ($context["text_yes"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"module_admin_quick_edit_highlight_yes_no\" id=\"module_admin_quick_edit_highlight_yes_no0\" value=\"0\" data-bind=\"checked: highlight_yes_no\"> ";
        // line 191
        echo ($context["text_no"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-offset-3 col-md-offset-2 col-sm-9 col-md-10 help-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block help-text\">";
        // line 195
        echo ($context["help_highlight_yes_no"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_highlight_actions0\">";
        // line 199
        echo ($context["entry_highlight_actions"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9 col-md-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"module_admin_quick_edit_highlight_actions\" id=\"module_admin_quick_edit_highlight_actions1\" value=\"1\" data-bind=\"checked: highlight_actions\"> ";
        // line 202
        echo ($context["text_yes"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"module_admin_quick_edit_highlight_actions\" id=\"module_admin_quick_edit_highlight_actions0\" value=\"0\" data-bind=\"checked: highlight_actions\"> ";
        // line 205
        echo ($context["text_no"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-offset-3 col-md-offset-2 col-sm-9 col-md-10 help-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block help-text\">";
        // line 209
        echo ($context["help_highlight_actions"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_interval_filter0\">";
        // line 213
        echo ($context["entry_interval_filter"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9 col-md-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"module_admin_quick_edit_interval_filter\" id=\"module_admin_quick_edit_interval_filter1\" value=\"1\" data-bind=\"checked: interval_filter\"> ";
        // line 216
        echo ($context["text_yes"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"module_admin_quick_edit_interval_filter\" id=\"module_admin_quick_edit_interval_filter0\" value=\"0\" data-bind=\"checked: interval_filter\"> ";
        // line 219
        echo ($context["text_no"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-offset-3 col-md-offset-2 col-sm-9 col-md-10 help-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block help-text\">";
        // line 223
        echo ($context["help_interval_filter"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_batch_edit0\">";
        // line 227
        echo ($context["entry_batch_edit"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9 col-md-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"module_admin_quick_edit_batch_edit\" id=\"module_admin_quick_edit_batch_edit1\" value=\"1\" data-bind=\"checked: batch_edit\"> ";
        // line 230
        echo ($context["text_yes"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"module_admin_quick_edit_batch_edit\" id=\"module_admin_quick_edit_batch_edit0\" value=\"0\" data-bind=\"checked: batch_edit\"> ";
        // line 233
        echo ($context["text_no"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-offset-3 col-md-offset-2 col-sm-9 col-md-10 help-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block help-text\">";
        // line 237
        echo ($context["help_batch_edit"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_quick_edit_on\">";
        // line 241
        echo ($context["entry_quick_edit_on"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_quick_edit_on\" id=\"module_admin_quick_edit_quick_edit_on\" data-bind=\"value: quick_edit_on\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"click\">";
        // line 244
        echo ($context["text_single_click"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"dblclick\">";
        // line 245
        echo ($context["text_double_click"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_price_relative_to\">";
        // line 250
        echo ($context["entry_price_relative_to"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_price_relative_to\" id=\"module_admin_quick_edit_price_relative_to\" data-bind=\"value: module_admin_quick_edit_price_relative_to\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"previous\">";
        // line 253
        echo ($context["text_previous_value"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"product\">";
        // line 254
        echo ($context["text_product_price"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-offset-3 col-md-offset-2 col-sm-9 col-md-10 help-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block help-text\">";
        // line 258
        echo ($context["help_price_relative_to"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_single_language_editing0\">";
        // line 262
        echo ($context["entry_single_language_editing"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9 col-md-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"module_admin_quick_edit_single_language_editing\" id=\"module_admin_quick_edit_single_language_editing1\" value=\"1\" data-bind=\"checked: single_language_editing\"> ";
        // line 265
        echo ($context["text_yes"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"module_admin_quick_edit_single_language_editing\" id=\"module_admin_quick_edit_single_language_editing0\" value=\"0\" data-bind=\"checked: single_language_editing\"> ";
        // line 268
        echo ($context["text_no"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_list_view_image_width\" data-bind=\"css: {'has-error': list_view_image_width.hasError || list_view_image_height.hasError}\">";
        // line 273
        echo ($context["entry_list_view_image_size"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 col-md-3 col-lg-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control text-right\" name=\"module_admin_quick_edit_list_view_image_width\" id=\"module_admin_quick_edit_list_view_image_width\" data-bind=\"value: list_view_image_width, css: {'has-error': list_view_image_width.hasError}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"fa fa-times\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"module_admin_quick_edit_list_view_image_height\" id=\"module_admin_quick_edit_list_view_image_height\" data-bind=\"value: list_view_image_height, css: {'has-error': list_view_image_height.hasError}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-offset-3 col-md-offset-2 col-sm-9 col-md-10 error-container has-error\" data-bind=\"visible: list_view_image_width.hasError && list_view_image_width.errorMsg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block error-text\" data-bind=\"text: list_view_image_width.errorMsg\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-offset-3 col-md-offset-2 col-sm-9 col-md-10 error-container has-error\" data-bind=\"visible: list_view_image_height.hasError && list_view_image_height.errorMsg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block error-text\" data-bind=\"text: list_view_image_height.errorMsg\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"catalog-settings\">
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" role=\"tablist\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\"><a href=\"#tab-catalog-categories\" role=\"tab\" data-toggle=\"tab\">";
        // line 296
        echo ($context["tab_categories"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-catalog-products\" role=\"tab\" data-toggle=\"tab\">";
        // line 297
        echo ($context["tab_products"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-catalog-recurrings\" role=\"tab\" data-toggle=\"tab\">";
        // line 298
        echo ($context["tab_recurrings"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-catalog-filters\" role=\"tab\" data-toggle=\"tab\">";
        // line 299
        echo ($context["tab_filters"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-catalog-attributes\" role=\"tab\" data-toggle=\"tab\">";
        // line 300
        echo ($context["tab_attributes"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-catalog-attribute-groups\" role=\"tab\" data-toggle=\"tab\">";
        // line 301
        echo ($context["tab_attribute_groups"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-catalog-options\" role=\"tab\" data-toggle=\"tab\">";
        // line 302
        echo ($context["tab_options"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-catalog-manufacturers\" role=\"tab\" data-toggle=\"tab\">";
        // line 303
        echo ($context["tab_manufacturers"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-catalog-downloads\" role=\"tab\" data-toggle=\"tab\">";
        // line 304
        echo ($context["tab_downloads"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-catalog-reviews\" role=\"tab\" data-toggle=\"tab\">";
        // line 305
        echo ($context["tab_reviews"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-catalog-information\" role=\"tab\" data-toggle=\"tab\">";
        // line 306
        echo ($context["tab_information"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane fade in active\" id=\"tab-catalog-categories\" role=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_catalog_categories_status\">";
        // line 312
        echo ($context["entry_catalog_categories_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_catalog_categories_status\" id=\"module_admin_quick_edit_catalog_categories_status\" data-bind=\"value: catalog_categories_status\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
        // line 315
        echo ($context["text_enabled"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
        // line 316
        echo ($context["text_disabled"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_catalog_categories_default_sort\">";
        // line 321
        echo ($context["entry_default_sorting"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_catalog_categories_default_sort\" id=\"module_admin_quick_edit_catalog_categories_default_sort\" data-bind=\"value: catalog_categories_default_sort\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 324
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["sorts"] ?? null), "module_admin_quick_edit_catalog_categories", [], "any", false, false, false, 324));
        foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
            // line 325
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["sort"], "value", [], "any", false, false, false, 325);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["sort"], "name", [], "any", false, false, false, 325);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 327
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_catalog_categories_default_order\" id=\"module_admin_quick_edit_catalog_categories_default_order\" data-bind=\"value: catalog_categories_default_order\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"ASC\">";
        // line 331
        echo ($context["text_ascending"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"DESC\">";
        // line 332
        echo ($context["text_descending"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\"><span data-toggle=\"tooltip\" data-title=\"";
        // line 337
        echo ($context["help_columns"] ?? null);
        echo "\" data-container=\"body\">";
        echo ($context["entry_fields"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6 col-md-5 col-lg-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table table-hover table-condensed page-columns sortable\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>#</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>";
        // line 343
        echo ($context["text_column_name"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 344
        echo ($context["text_display"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 345
        echo ($context["text_editable"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- ko foreach: catalog_categories -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr  data-bind=\"attr: {'data-id': column}, css: {'danger': !visible()}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><i class=\"fa fa-arrows-v cur-crosshair\"></i></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><!-- ko text: name --><!-- /ko --><input data-bind=\"value: index, attr: {name:'index[module_admin_quick_edit_catalog_categories][' + column +']'}\" type=\"hidden\" class=\"column-index\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><input data-bind=\"checked: visible, attr: {name:'display[module_admin_quick_edit_catalog_categories][' + column +']'}\" type=\"checkbox\" class=\"column-display\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><input data-bind=\"checked: editable, attr: {name:'qe_status[module_admin_quick_edit_catalog_categories][' + column +']'}, disable: !quick_editable\" type=\"checkbox\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /ko -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"tab-catalog-products\" role=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_catalog_products_status\">";
        // line 366
        echo ($context["entry_catalog_products_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_catalog_products_status\" id=\"module_admin_quick_edit_catalog_products_status\" data-bind=\"value: catalog_products_status\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
        // line 369
        echo ($context["text_enabled"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
        // line 370
        echo ($context["text_disabled"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_catalog_products_default_sort\">";
        // line 375
        echo ($context["entry_default_sorting"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_catalog_products_default_sort\" id=\"module_admin_quick_edit_catalog_products_default_sort\" data-bind=\"value: catalog_products_default_sort\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 378
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["sorts"] ?? null), "module_admin_quick_edit_catalog_products", [], "any", false, false, false, 378));
        foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
            // line 379
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["sort"], "value", [], "any", false, false, false, 379);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["sort"], "name", [], "any", false, false, false, 379);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 381
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_catalog_products_default_order\" id=\"module_admin_quick_edit_catalog_products_default_order\" data-bind=\"value: catalog_products_default_order\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"ASC\">";
        // line 385
        echo ($context["text_ascending"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"DESC\">";
        // line 386
        echo ($context["text_descending"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\"><span data-toggle=\"tooltip\" data-title=\"";
        // line 391
        echo ($context["help_columns"] ?? null);
        echo "\" data-container=\"body\">";
        echo ($context["entry_fields"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6 col-md-5 col-lg-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table table-hover table-condensed page-columns sortable\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>#</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>";
        // line 397
        echo ($context["text_column_name"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 398
        echo ($context["text_display"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 399
        echo ($context["text_editable"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- ko foreach: catalog_products -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr  data-bind=\"attr: {'data-id': column}, css: {'danger': !visible()}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><i class=\"fa fa-arrows-v cur-crosshair\"></i></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><!-- ko text: name --><!-- /ko --><input data-bind=\"value: index, attr: {name:'index[module_admin_quick_edit_catalog_products][' + column +']'}\" type=\"hidden\" class=\"column-index\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><input data-bind=\"checked: visible, attr: {name:'display[module_admin_quick_edit_catalog_products][' + column +']'}\" type=\"checkbox\" class=\"column-display\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><input data-bind=\"checked: editable, attr: {name:'qe_status[module_admin_quick_edit_catalog_products][' + column +']'}, disable: !quick_editable\" type=\"checkbox\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /ko -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\"><span data-toggle=\"tooltip\" data-title=\"";
        // line 416
        echo ($context["help_actions"] ?? null);
        echo "\" data-container=\"body\">";
        echo ($context["entry_actions"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6 col-md-5 col-lg-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table table-hover table-condensed page-columns sortable\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>#</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>";
        // line 422
        echo ($context["text_column_name"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 423
        echo ($context["text_display"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- ko foreach: catalog_products_actions -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr data-bind=\"attr: {'data-id': column}, css: {'danger': !visible()}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><i class=\"fa fa-arrows-v cur-crosshair\"></i></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><!-- ko text: name --><!-- /ko --><input data-bind=\"value: index, attr: {name:'index[module_admin_quick_edit_catalog_products_actions][' + column +']'}\" type=\"hidden\" class=\"column-index\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><input data-bind=\"checked: visible, attr: {name:'display[module_admin_quick_edit_catalog_products_actions][' + column +']'}\" type=\"checkbox\" class=\"column-display\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /ko -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_catalog_products_filter_sub_category0\">";
        // line 439
        echo ($context["entry_catalog_products_filter_sub_category"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9 col-md-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"module_admin_quick_edit_catalog_products_filter_sub_category\" id=\"module_admin_quick_edit_catalog_products_filter_sub_category1\" value=\"1\" data-bind=\"checked: catalog_products_filter_sub_category\"> ";
        // line 442
        echo ($context["text_yes"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"module_admin_quick_edit_catalog_products_filter_sub_category\" id=\"module_admin_quick_edit_catalog_products_filter_sub_category0\" value=\"0\" data-bind=\"checked: catalog_products_filter_sub_category\"> ";
        // line 445
        echo ($context["text_no"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-offset-3 col-md-offset-2 col-sm-9 col-md-10 help-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block help-text\">";
        // line 449
        echo ($context["help_filter_sub_category"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"tab-catalog-recurrings\" role=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_catalog_recurrings_status\">";
        // line 457
        echo ($context["entry_catalog_recurrings_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_catalog_recurrings_status\" id=\"module_admin_quick_edit_catalog_recurrings_status\" data-bind=\"value: catalog_recurrings_status\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
        // line 460
        echo ($context["text_enabled"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
        // line 461
        echo ($context["text_disabled"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_catalog_recurrings_default_sort\">";
        // line 466
        echo ($context["entry_default_sorting"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_catalog_recurrings_default_sort\" id=\"module_admin_quick_edit_catalog_recurrings_default_sort\" data-bind=\"value: catalog_recurrings_default_sort\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 469
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["sorts"] ?? null), "module_admin_quick_edit_catalog_recurrings", [], "any", false, false, false, 469));
        foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
            // line 470
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["sort"], "value", [], "any", false, false, false, 470);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["sort"], "name", [], "any", false, false, false, 470);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 472
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_catalog_recurrings_default_order\" id=\"module_admin_quick_edit_catalog_recurrings_default_order\" data-bind=\"value: catalog_recurrings_default_order\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"ASC\">";
        // line 476
        echo ($context["text_ascending"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"DESC\">";
        // line 477
        echo ($context["text_descending"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\"><span data-toggle=\"tooltip\" data-title=\"";
        // line 482
        echo ($context["help_columns"] ?? null);
        echo "\" data-container=\"body\">";
        echo ($context["entry_fields"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6 col-md-5 col-lg-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table table-hover table-condensed page-columns sortable\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>#</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>";
        // line 488
        echo ($context["text_column_name"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 489
        echo ($context["text_display"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 490
        echo ($context["text_editable"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- ko foreach: catalog_recurrings -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr  data-bind=\"attr: {'data-id': column}, css: {'danger': !visible()}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><i class=\"fa fa-arrows-v cur-crosshair\"></i></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><!-- ko text: name --><!-- /ko --><input data-bind=\"value: index, attr: {name:'index[module_admin_quick_edit_catalog_recurrings][' + column +']'}\" type=\"hidden\" class=\"column-index\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><input data-bind=\"checked: visible, attr: {name:'display[module_admin_quick_edit_catalog_recurrings][' + column +']'}\" type=\"checkbox\" class=\"column-display\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><input data-bind=\"checked: editable, attr: {name:'qe_status[module_admin_quick_edit_catalog_recurrings][' + column +']'}, disable: !quick_editable\" type=\"checkbox\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /ko -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"tab-catalog-filters\" role=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_catalog_filters_status\">";
        // line 511
        echo ($context["entry_catalog_filters_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_catalog_filters_status\" id=\"module_admin_quick_edit_catalog_filters_status\" data-bind=\"value: catalog_filters_status\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
        // line 514
        echo ($context["text_enabled"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
        // line 515
        echo ($context["text_disabled"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_catalog_filters_default_sort\">";
        // line 520
        echo ($context["entry_default_sorting"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_catalog_filters_default_sort\" id=\"module_admin_quick_edit_catalog_filters_default_sort\" data-bind=\"value: catalog_filters_default_sort\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 523
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["sorts"] ?? null), "module_admin_quick_edit_catalog_filters", [], "any", false, false, false, 523));
        foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
            // line 524
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["sort"], "value", [], "any", false, false, false, 524);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["sort"], "name", [], "any", false, false, false, 524);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 526
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_catalog_filters_default_order\" id=\"module_admin_quick_edit_catalog_filters_default_order\" data-bind=\"value: catalog_filters_default_order\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"ASC\">";
        // line 530
        echo ($context["text_ascending"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"DESC\">";
        // line 531
        echo ($context["text_descending"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\"><span data-toggle=\"tooltip\" data-title=\"";
        // line 536
        echo ($context["help_columns"] ?? null);
        echo "\" data-container=\"body\">";
        echo ($context["entry_fields"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6 col-md-5 col-lg-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table table-hover table-condensed page-columns sortable\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>#</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>";
        // line 542
        echo ($context["text_column_name"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 543
        echo ($context["text_display"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 544
        echo ($context["text_editable"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- ko foreach: catalog_filters -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr  data-bind=\"attr: {'data-id': column}, css: {'danger': !visible()}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><i class=\"fa fa-arrows-v cur-crosshair\"></i></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><!-- ko text: name --><!-- /ko --><input data-bind=\"value: index, attr: {name:'index[module_admin_quick_edit_catalog_filters][' + column +']'}\" type=\"hidden\" class=\"column-index\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><input data-bind=\"checked: visible, attr: {name:'display[module_admin_quick_edit_catalog_filters][' + column +']'}\" type=\"checkbox\" class=\"column-display\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><input data-bind=\"checked: editable, attr: {name:'qe_status[module_admin_quick_edit_catalog_filters][' + column +']'}, disable: !quick_editable\" type=\"checkbox\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /ko -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"tab-catalog-attributes\" role=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_catalog_attributes_status\">";
        // line 565
        echo ($context["entry_catalog_attributes_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_catalog_attributes_status\" id=\"module_admin_quick_edit_catalog_attributes_status\" data-bind=\"value: catalog_attributes_status\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
        // line 568
        echo ($context["text_enabled"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
        // line 569
        echo ($context["text_disabled"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_catalog_attributes_default_sort\">";
        // line 574
        echo ($context["entry_default_sorting"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_catalog_attributes_default_sort\" id=\"module_admin_quick_edit_catalog_attributes_default_sort\" data-bind=\"value: catalog_attributes_default_sort\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 577
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["sorts"] ?? null), "module_admin_quick_edit_catalog_attributes", [], "any", false, false, false, 577));
        foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
            // line 578
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["sort"], "value", [], "any", false, false, false, 578);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["sort"], "name", [], "any", false, false, false, 578);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 580
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_catalog_attributes_default_order\" id=\"module_admin_quick_edit_catalog_attributes_default_order\" data-bind=\"value: catalog_attributes_default_order\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"ASC\">";
        // line 584
        echo ($context["text_ascending"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"DESC\">";
        // line 585
        echo ($context["text_descending"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\"><span data-toggle=\"tooltip\" data-title=\"";
        // line 590
        echo ($context["help_columns"] ?? null);
        echo "\" data-container=\"body\">";
        echo ($context["entry_fields"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6 col-md-5 col-lg-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table table-hover table-condensed page-columns sortable\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>#</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>";
        // line 596
        echo ($context["text_column_name"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 597
        echo ($context["text_display"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 598
        echo ($context["text_editable"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- ko foreach: catalog_attributes -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr  data-bind=\"attr: {'data-id': column}, css: {'danger': !visible()}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><i class=\"fa fa-arrows-v cur-crosshair\"></i></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><!-- ko text: name --><!-- /ko --><input data-bind=\"value: index, attr: {name:'index[module_admin_quick_edit_catalog_attributes][' + column +']'}\" type=\"hidden\" class=\"column-index\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><input data-bind=\"checked: visible, attr: {name:'display[module_admin_quick_edit_catalog_attributes][' + column +']'}\" type=\"checkbox\" class=\"column-display\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><input data-bind=\"checked: editable, attr: {name:'qe_status[module_admin_quick_edit_catalog_attributes][' + column +']'}, disable: !quick_editable\" type=\"checkbox\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /ko -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"tab-catalog-attribute-groups\" role=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_catalog_attribute_groups_status\">";
        // line 619
        echo ($context["entry_catalog_attribute_groups_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_catalog_attribute_groups_status\" id=\"module_admin_quick_edit_catalog_attribute_groups_status\" data-bind=\"value: catalog_attribute_groups_status\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
        // line 622
        echo ($context["text_enabled"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
        // line 623
        echo ($context["text_disabled"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_catalog_attribute_groups_default_sort\">";
        // line 628
        echo ($context["entry_default_sorting"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_catalog_attribute_groups_default_sort\" id=\"module_admin_quick_edit_catalog_attribute_groups_default_sort\" data-bind=\"value: catalog_attribute_groups_default_sort\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 631
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["sorts"] ?? null), "module_admin_quick_edit_catalog_attribute_groups", [], "any", false, false, false, 631));
        foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
            // line 632
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["sort"], "value", [], "any", false, false, false, 632);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["sort"], "name", [], "any", false, false, false, 632);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 634
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_catalog_attribute_groups_default_order\" id=\"module_admin_quick_edit_catalog_attribute_groups_default_order\" data-bind=\"value: catalog_attribute_groups_default_order\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"ASC\">";
        // line 638
        echo ($context["text_ascending"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"DESC\">";
        // line 639
        echo ($context["text_descending"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\"><span data-toggle=\"tooltip\" data-title=\"";
        // line 644
        echo ($context["help_columns"] ?? null);
        echo "\" data-container=\"body\">";
        echo ($context["entry_fields"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6 col-md-5 col-lg-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table table-hover table-condensed page-columns sortable\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>#</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>";
        // line 650
        echo ($context["text_column_name"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 651
        echo ($context["text_display"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 652
        echo ($context["text_editable"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- ko foreach: catalog_attribute_groups -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr  data-bind=\"attr: {'data-id': column}, css: {'danger': !visible()}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><i class=\"fa fa-arrows-v cur-crosshair\"></i></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><!-- ko text: name --><!-- /ko --><input data-bind=\"value: index, attr: {name:'index[module_admin_quick_edit_catalog_attribute_groups][' + column +']'}\" type=\"hidden\" class=\"column-index\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><input data-bind=\"checked: visible, attr: {name:'display[module_admin_quick_edit_catalog_attribute_groups][' + column +']'}\" type=\"checkbox\" class=\"column-display\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><input data-bind=\"checked: editable, attr: {name:'qe_status[module_admin_quick_edit_catalog_attribute_groups][' + column +']'}, disable: !quick_editable\" type=\"checkbox\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /ko -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"tab-catalog-options\" role=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_catalog_options_status\">";
        // line 673
        echo ($context["entry_catalog_options_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_catalog_options_status\" id=\"module_admin_quick_edit_catalog_options_status\" data-bind=\"value: catalog_options_status\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
        // line 676
        echo ($context["text_enabled"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
        // line 677
        echo ($context["text_disabled"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_catalog_options_default_sort\">";
        // line 682
        echo ($context["entry_default_sorting"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_catalog_options_default_sort\" id=\"module_admin_quick_edit_catalog_options_default_sort\" data-bind=\"value: catalog_options_default_sort\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 685
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["sorts"] ?? null), "module_admin_quick_edit_catalog_options", [], "any", false, false, false, 685));
        foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
            // line 686
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["sort"], "value", [], "any", false, false, false, 686);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["sort"], "name", [], "any", false, false, false, 686);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 688
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_catalog_options_default_order\" id=\"module_admin_quick_edit_catalog_options_default_order\" data-bind=\"value: catalog_options_default_order\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"ASC\">";
        // line 692
        echo ($context["text_ascending"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"DESC\">";
        // line 693
        echo ($context["text_descending"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\"><span data-toggle=\"tooltip\" data-title=\"";
        // line 698
        echo ($context["help_columns"] ?? null);
        echo "\" data-container=\"body\">";
        echo ($context["entry_fields"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6 col-md-5 col-lg-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table table-hover table-condensed page-columns sortable\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>#</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>";
        // line 704
        echo ($context["text_column_name"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 705
        echo ($context["text_display"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 706
        echo ($context["text_editable"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- ko foreach: catalog_options -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr  data-bind=\"attr: {'data-id': column}, css: {'danger': !visible()}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><i class=\"fa fa-arrows-v cur-crosshair\"></i></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><!-- ko text: name --><!-- /ko --><input data-bind=\"value: index, attr: {name:'index[module_admin_quick_edit_catalog_options][' + column +']'}\" type=\"hidden\" class=\"column-index\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><input data-bind=\"checked: visible, attr: {name:'display[module_admin_quick_edit_catalog_options][' + column +']'}\" type=\"checkbox\" class=\"column-display\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><input data-bind=\"checked: editable, attr: {name:'qe_status[module_admin_quick_edit_catalog_options][' + column +']'}, disable: !quick_editable\" type=\"checkbox\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /ko -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"tab-catalog-manufacturers\" role=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_catalog_manufacturers_status\">";
        // line 727
        echo ($context["entry_catalog_manufacturers_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_catalog_manufacturers_status\" id=\"module_admin_quick_edit_catalog_manufacturers_status\" data-bind=\"value: catalog_manufacturers_status\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
        // line 730
        echo ($context["text_enabled"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
        // line 731
        echo ($context["text_disabled"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_catalog_manufacturers_default_sort\">";
        // line 736
        echo ($context["entry_default_sorting"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_catalog_manufacturers_default_sort\" id=\"module_admin_quick_edit_catalog_manufacturers_default_sort\" data-bind=\"value: catalog_manufacturers_default_sort\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 739
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["sorts"] ?? null), "module_admin_quick_edit_catalog_manufacturers", [], "any", false, false, false, 739));
        foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
            // line 740
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["sort"], "value", [], "any", false, false, false, 740);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["sort"], "name", [], "any", false, false, false, 740);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 742
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_catalog_manufacturers_default_order\" id=\"module_admin_quick_edit_catalog_manufacturers_default_order\" data-bind=\"value: catalog_manufacturers_default_order\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"ASC\">";
        // line 746
        echo ($context["text_ascending"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"DESC\">";
        // line 747
        echo ($context["text_descending"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\"><span data-toggle=\"tooltip\" data-title=\"";
        // line 752
        echo ($context["help_columns"] ?? null);
        echo "\" data-container=\"body\">";
        echo ($context["entry_fields"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6 col-md-5 col-lg-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table table-hover table-condensed page-columns sortable\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>#</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>";
        // line 758
        echo ($context["text_column_name"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 759
        echo ($context["text_display"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 760
        echo ($context["text_editable"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- ko foreach: catalog_manufacturers -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr  data-bind=\"attr: {'data-id': column}, css: {'danger': !visible()}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><i class=\"fa fa-arrows-v cur-crosshair\"></i></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><!-- ko text: name --><!-- /ko --><input data-bind=\"value: index, attr: {name:'index[module_admin_quick_edit_catalog_manufacturers][' + column +']'}\" type=\"hidden\" class=\"column-index\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><input data-bind=\"checked: visible, attr: {name:'display[module_admin_quick_edit_catalog_manufacturers][' + column +']'}\" type=\"checkbox\" class=\"column-display\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><input data-bind=\"checked: editable, attr: {name:'qe_status[module_admin_quick_edit_catalog_manufacturers][' + column +']'}, disable: !quick_editable\" type=\"checkbox\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /ko -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"tab-catalog-downloads\" role=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_catalog_downloads_status\">";
        // line 781
        echo ($context["entry_catalog_downloads_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_catalog_downloads_status\" id=\"module_admin_quick_edit_catalog_downloads_status\" data-bind=\"value: catalog_downloads_status\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
        // line 784
        echo ($context["text_enabled"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
        // line 785
        echo ($context["text_disabled"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_catalog_downloads_default_sort\">";
        // line 790
        echo ($context["entry_default_sorting"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_catalog_downloads_default_sort\" id=\"module_admin_quick_edit_catalog_downloads_default_sort\" data-bind=\"value: catalog_downloads_default_sort\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 793
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["sorts"] ?? null), "module_admin_quick_edit_catalog_downloads", [], "any", false, false, false, 793));
        foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
            // line 794
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["sort"], "value", [], "any", false, false, false, 794);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["sort"], "name", [], "any", false, false, false, 794);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 796
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_catalog_downloads_default_order\" id=\"module_admin_quick_edit_catalog_downloads_default_order\" data-bind=\"value: catalog_downloads_default_order\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"ASC\">";
        // line 800
        echo ($context["text_ascending"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"DESC\">";
        // line 801
        echo ($context["text_descending"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\"><span data-toggle=\"tooltip\" data-title=\"";
        // line 806
        echo ($context["help_columns"] ?? null);
        echo "\" data-container=\"body\">";
        echo ($context["entry_fields"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6 col-md-5 col-lg-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table table-hover table-condensed page-columns sortable\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>#</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>";
        // line 812
        echo ($context["text_column_name"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 813
        echo ($context["text_display"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 814
        echo ($context["text_editable"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- ko foreach: catalog_downloads -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr  data-bind=\"attr: {'data-id': column}, css: {'danger': !visible()}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><i class=\"fa fa-arrows-v cur-crosshair\"></i></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><!-- ko text: name --><!-- /ko --><input data-bind=\"value: index, attr: {name:'index[module_admin_quick_edit_catalog_downloads][' + column +']'}\" type=\"hidden\" class=\"column-index\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><input data-bind=\"checked: visible, attr: {name:'display[module_admin_quick_edit_catalog_downloads][' + column +']'}\" type=\"checkbox\" class=\"column-display\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><input data-bind=\"checked: editable, attr: {name:'qe_status[module_admin_quick_edit_catalog_downloads][' + column +']'}, disable: !quick_editable\" type=\"checkbox\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /ko -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"tab-catalog-reviews\" role=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_catalog_reviews_status\">";
        // line 835
        echo ($context["entry_catalog_reviews_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_catalog_reviews_status\" id=\"module_admin_quick_edit_catalog_reviews_status\" data-bind=\"value: catalog_reviews_status\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
        // line 838
        echo ($context["text_enabled"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
        // line 839
        echo ($context["text_disabled"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_catalog_reviews_default_sort\">";
        // line 844
        echo ($context["entry_default_sorting"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_catalog_reviews_default_sort\" id=\"module_admin_quick_edit_catalog_reviews_default_sort\" data-bind=\"value: catalog_reviews_default_sort\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 847
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["sorts"] ?? null), "module_admin_quick_edit_catalog_reviews", [], "any", false, false, false, 847));
        foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
            // line 848
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["sort"], "value", [], "any", false, false, false, 848);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["sort"], "name", [], "any", false, false, false, 848);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 850
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_catalog_reviews_default_order\" id=\"module_admin_quick_edit_catalog_reviews_default_order\" data-bind=\"value: catalog_reviews_default_order\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"ASC\">";
        // line 854
        echo ($context["text_ascending"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"DESC\">";
        // line 855
        echo ($context["text_descending"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\"><span data-toggle=\"tooltip\" data-title=\"";
        // line 860
        echo ($context["help_columns"] ?? null);
        echo "\" data-container=\"body\">";
        echo ($context["entry_fields"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6 col-md-5 col-lg-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table table-hover table-condensed page-columns sortable\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>#</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>";
        // line 866
        echo ($context["text_column_name"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 867
        echo ($context["text_display"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 868
        echo ($context["text_editable"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- ko foreach: catalog_reviews -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr  data-bind=\"attr: {'data-id': column}, css: {'danger': !visible()}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><i class=\"fa fa-arrows-v cur-crosshair\"></i></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><!-- ko text: name --><!-- /ko --><input data-bind=\"value: index, attr: {name:'index[module_admin_quick_edit_catalog_reviews][' + column +']'}\" type=\"hidden\" class=\"column-index\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><input data-bind=\"checked: visible, attr: {name:'display[module_admin_quick_edit_catalog_reviews][' + column +']'}\" type=\"checkbox\" class=\"column-display\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><input data-bind=\"checked: editable, attr: {name:'qe_status[module_admin_quick_edit_catalog_reviews][' + column +']'}, disable: !quick_editable\" type=\"checkbox\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /ko -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"tab-catalog-information\" role=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_catalog_information_status\">";
        // line 889
        echo ($context["entry_catalog_information_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_catalog_information_status\" id=\"module_admin_quick_edit_catalog_information_status\" data-bind=\"value: catalog_information_status\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
        // line 892
        echo ($context["text_enabled"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
        // line 893
        echo ($context["text_disabled"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_catalog_information_default_sort\">";
        // line 898
        echo ($context["entry_default_sorting"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_catalog_information_default_sort\" id=\"module_admin_quick_edit_catalog_information_default_sort\" data-bind=\"value: catalog_information_default_sort\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 901
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["sorts"] ?? null), "module_admin_quick_edit_catalog_information", [], "any", false, false, false, 901));
        foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
            // line 902
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["sort"], "value", [], "any", false, false, false, 902);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["sort"], "name", [], "any", false, false, false, 902);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 904
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_catalog_information_default_order\" id=\"module_admin_quick_edit_catalog_information_default_order\" data-bind=\"value: catalog_information_default_order\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"ASC\">";
        // line 908
        echo ($context["text_ascending"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"DESC\">";
        // line 909
        echo ($context["text_descending"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\"><span data-toggle=\"tooltip\" data-title=\"";
        // line 914
        echo ($context["help_columns"] ?? null);
        echo "\" data-container=\"body\">";
        echo ($context["entry_fields"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6 col-md-5 col-lg-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table table-hover table-condensed page-columns sortable\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>#</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>";
        // line 920
        echo ($context["text_column_name"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 921
        echo ($context["text_display"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 922
        echo ($context["text_editable"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- ko foreach: catalog_information -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr  data-bind=\"attr: {'data-id': column}, css: {'danger': !visible()}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><i class=\"fa fa-arrows-v cur-crosshair\"></i></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><!-- ko text: name --><!-- /ko --><input data-bind=\"value: index, attr: {name:'index[module_admin_quick_edit_catalog_information][' + column +']'}\" type=\"hidden\" class=\"column-index\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><input data-bind=\"checked: visible, attr: {name:'display[module_admin_quick_edit_catalog_information][' + column +']'}\" type=\"checkbox\" class=\"column-display\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><input data-bind=\"checked: editable, attr: {name:'qe_status[module_admin_quick_edit_catalog_information][' + column +']'}, disable: !quick_editable\" type=\"checkbox\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /ko -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"design-settings\">
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" role=\"tablist\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\"><a href=\"#tab-design-seo-urls\" role=\"tab\" data-toggle=\"tab\">";
        // line 948
        echo ($context["tab_seo_urls"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane fade in active\" id=\"tab-design-seo-urls\" role=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_design_seo_urls_status\">";
        // line 954
        echo ($context["entry_design_seo_urls_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_design_seo_urls_status\" id=\"module_admin_quick_edit_design_seo_urls_status\" data-bind=\"value: design_seo_urls_status\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
        // line 957
        echo ($context["text_enabled"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
        // line 958
        echo ($context["text_disabled"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_design_seo_urls_default_sort\">";
        // line 963
        echo ($context["entry_default_sorting"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_design_seo_urls_default_sort\" id=\"module_admin_quick_edit_design_seo_urls_default_sort\" data-bind=\"value: design_seo_urls_default_sort\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 966
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["sorts"] ?? null), "module_admin_quick_edit_design_seo_urls", [], "any", false, false, false, 966));
        foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
            // line 967
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["sort"], "value", [], "any", false, false, false, 967);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["sort"], "name", [], "any", false, false, false, 967);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 969
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_design_seo_urls_default_order\" id=\"module_admin_quick_edit_design_seo_urls_default_order\" data-bind=\"value: design_seo_urls_default_order\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"ASC\">";
        // line 973
        echo ($context["text_ascending"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"DESC\">";
        // line 974
        echo ($context["text_descending"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\"><span data-toggle=\"tooltip\" data-title=\"";
        // line 979
        echo ($context["help_columns"] ?? null);
        echo "\" data-container=\"body\">";
        echo ($context["entry_fields"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6 col-md-5 col-lg-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table table-hover table-condensed page-columns sortable\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>#</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>";
        // line 985
        echo ($context["text_column_name"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 986
        echo ($context["text_display"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 987
        echo ($context["text_editable"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- ko foreach: design_seo_urls -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr  data-bind=\"attr: {'data-id': column}, css: {'danger': !visible()}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><i class=\"fa fa-arrows-v cur-crosshair\"></i></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><!-- ko text: name --><!-- /ko --><input data-bind=\"value: index, attr: {name:'index[module_admin_quick_edit_design_seo_urls][' + column +']'}\" type=\"hidden\" class=\"column-index\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><input data-bind=\"checked: visible, attr: {name:'display[module_admin_quick_edit_design_seo_urls][' + column +']'}\" type=\"checkbox\" class=\"column-display\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><input data-bind=\"checked: editable, attr: {name:'qe_status[module_admin_quick_edit_design_seo_urls][' + column +']'}, disable: !quick_editable\" type=\"checkbox\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /ko -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"customer-settings\">
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" role=\"tablist\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\"><a href=\"#tab-customer-customers\" role=\"tab\" data-toggle=\"tab\">";
        // line 1013
        echo ($context["tab_customers"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane fade in active\" id=\"tab-customer-customers\" role=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_customer_customers_status\">";
        // line 1019
        echo ($context["entry_customer_customers_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_customer_customers_status\" id=\"module_admin_quick_edit_customer_customers_status\" data-bind=\"value: customer_customers_status\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
        // line 1022
        echo ($context["text_enabled"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
        // line 1023
        echo ($context["text_disabled"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_customer_customers_default_sort\">";
        // line 1028
        echo ($context["entry_default_sorting"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_customer_customers_default_sort\" id=\"module_admin_quick_edit_customer_customers_default_sort\" data-bind=\"value: customer_customers_default_sort\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1031
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["sorts"] ?? null), "module_admin_quick_edit_customer_customers", [], "any", false, false, false, 1031));
        foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
            // line 1032
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["sort"], "value", [], "any", false, false, false, 1032);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["sort"], "name", [], "any", false, false, false, 1032);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1034
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_customer_customers_default_order\" id=\"module_admin_quick_edit_customer_customers_default_order\" data-bind=\"value: customer_customers_default_order\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"ASC\">";
        // line 1038
        echo ($context["text_ascending"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"DESC\">";
        // line 1039
        echo ($context["text_descending"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\"><span data-toggle=\"tooltip\" data-title=\"";
        // line 1044
        echo ($context["help_columns"] ?? null);
        echo "\" data-container=\"body\">";
        echo ($context["entry_fields"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6 col-md-5 col-lg-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table table-hover table-condensed page-columns sortable\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>#</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>";
        // line 1050
        echo ($context["text_column_name"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 1051
        echo ($context["text_display"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 1052
        echo ($context["text_editable"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- ko foreach: customer_customers -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr  data-bind=\"attr: {'data-id': column}, css: {'danger': !visible()}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><i class=\"fa fa-arrows-v cur-crosshair\"></i></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><!-- ko text: name --><!-- /ko --><input data-bind=\"value: index, attr: {name:'index[module_admin_quick_edit_customer_customers][' + column +']'}\" type=\"hidden\" class=\"column-index\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><input data-bind=\"checked: visible, attr: {name:'display[module_admin_quick_edit_customer_customers][' + column +']'}\" type=\"checkbox\" class=\"column-display\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><input data-bind=\"checked: editable, attr: {name:'qe_status[module_admin_quick_edit_customer_customers][' + column +']'}, disable: !quick_editable\" type=\"checkbox\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /ko -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"sale-settings\">
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" role=\"tablist\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\"><a href=\"#tab-sale-orders\" role=\"tab\" data-toggle=\"tab\">";
        // line 1078
        echo ($context["tab_orders"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-sale-returns\" role=\"tab\" data-toggle=\"tab\">";
        // line 1079
        echo ($context["tab_returns"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-sale-vouchers\" role=\"tab\" data-toggle=\"tab\">";
        // line 1080
        echo ($context["tab_vouchers"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-sale-voucher-themes\" role=\"tab\" data-toggle=\"tab\">";
        // line 1081
        echo ($context["tab_voucher_themes"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane fade in active\" id=\"tab-sale-orders\" role=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_sale_orders_status\">";
        // line 1087
        echo ($context["entry_sale_orders_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_sale_orders_status\" id=\"module_admin_quick_edit_sale_orders_status\" data-bind=\"value: sale_orders_status\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
        // line 1090
        echo ($context["text_enabled"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
        // line 1091
        echo ($context["text_disabled"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\"><span data-toggle=\"tooltip\" data-title=\"";
        // line 1096
        echo ($context["help_columns"] ?? null);
        echo "\" data-container=\"body\">";
        echo ($context["entry_fields"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6 col-md-5 col-lg-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table table-hover table-condensed page-columns\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>#</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>";
        // line 1102
        echo ($context["text_column_name"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 1103
        echo ($context["text_editable"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- ko foreach: sale_orders -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr  data-bind=\"attr: {'data-id': column}, css: {'danger': !visible()}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><!-- ko text: name --><!-- /ko --><input data-bind=\"value: index, attr: {name:'index[module_admin_quick_edit_sale_orders][' + column +']'}\" type=\"hidden\" class=\"column-index\" /><input data-bind=\"value: 1, attr: {name:'display[module_admin_quick_edit_sale_orders][' + column +']'}\" type=\"hidden\" class=\"column-index\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><input data-bind=\"checked: editable, attr: {name:'qe_status[module_admin_quick_edit_sale_orders][' + column +']'}, disable: !quick_editable\" type=\"checkbox\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /ko -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_sale_orders_notify_customer0\">";
        // line 1119
        echo ($context["entry_notify_customer"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9 col-md-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"module_admin_quick_edit_sale_orders_notify_customer\" id=\"module_admin_quick_edit_sale_orders_notify_customer1\" value=\"1\" data-bind=\"checked: sale_orders_notify_customer\"> ";
        // line 1122
        echo ($context["text_yes"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"module_admin_quick_edit_sale_orders_notify_customer\" id=\"module_admin_quick_edit_sale_orders_notify_customer0\" value=\"0\" data-bind=\"checked: sale_orders_notify_customer\"> ";
        // line 1125
        echo ($context["text_no"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"tab-sale-returns\" role=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_sale_returns_status\">";
        // line 1134
        echo ($context["entry_sale_returns_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_sale_returns_status\" id=\"module_admin_quick_edit_sale_returns_status\" data-bind=\"value: sale_returns_status\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
        // line 1137
        echo ($context["text_enabled"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
        // line 1138
        echo ($context["text_disabled"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_sale_returns_default_sort\">";
        // line 1143
        echo ($context["entry_default_sorting"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_sale_returns_default_sort\" id=\"module_admin_quick_edit_sale_returns_default_sort\" data-bind=\"value: sale_returns_default_sort\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1146
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["sorts"] ?? null), "module_admin_quick_edit_sale_returns", [], "any", false, false, false, 1146));
        foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
            // line 1147
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["sort"], "value", [], "any", false, false, false, 1147);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["sort"], "name", [], "any", false, false, false, 1147);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1149
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_sale_returns_default_order\" id=\"module_admin_quick_edit_sale_returns_default_order\" data-bind=\"value: sale_returns_default_order\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"ASC\">";
        // line 1153
        echo ($context["text_ascending"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"DESC\">";
        // line 1154
        echo ($context["text_descending"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\"><span data-toggle=\"tooltip\" data-title=\"";
        // line 1159
        echo ($context["help_columns"] ?? null);
        echo "\" data-container=\"body\">";
        echo ($context["entry_fields"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6 col-md-5 col-lg-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table table-hover table-condensed page-columns sortable\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>#</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>";
        // line 1165
        echo ($context["text_column_name"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 1166
        echo ($context["text_display"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 1167
        echo ($context["text_editable"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- ko foreach: sale_returns -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr  data-bind=\"attr: {'data-id': column}, css: {'danger': !visible()}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><i class=\"fa fa-arrows-v cur-crosshair\"></i></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><!-- ko text: name --><!-- /ko --><input data-bind=\"value: index, attr: {name:'index[module_admin_quick_edit_sale_returns][' + column +']'}\" type=\"hidden\" class=\"column-index\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><input data-bind=\"checked: visible, attr: {name:'display[module_admin_quick_edit_sale_returns][' + column +']'}\" type=\"checkbox\" class=\"column-display\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><input data-bind=\"checked: editable, attr: {name:'qe_status[module_admin_quick_edit_sale_returns][' + column +']'}, disable: !quick_editable\" type=\"checkbox\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /ko -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_sale_returns_notify_customer0\">";
        // line 1184
        echo ($context["entry_notify_customer"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9 col-md-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"module_admin_quick_edit_sale_returns_notify_customer\" id=\"module_admin_quick_edit_sale_returns_notify_customer1\" value=\"1\" data-bind=\"checked: sale_returns_notify_customer\"> ";
        // line 1187
        echo ($context["text_yes"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"module_admin_quick_edit_sale_returns_notify_customer\" id=\"module_admin_quick_edit_sale_returns_notify_customer0\" value=\"0\" data-bind=\"checked: sale_returns_notify_customer\"> ";
        // line 1190
        echo ($context["text_no"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"tab-sale-vouchers\" role=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_sale_vouchers_status\">";
        // line 1199
        echo ($context["entry_sale_vouchers_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_sale_vouchers_status\" id=\"module_admin_quick_edit_sale_vouchers_status\" data-bind=\"value: sale_vouchers_status\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
        // line 1202
        echo ($context["text_enabled"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
        // line 1203
        echo ($context["text_disabled"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_sale_vouchers_default_sort\">";
        // line 1208
        echo ($context["entry_default_sorting"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_sale_vouchers_default_sort\" id=\"module_admin_quick_edit_sale_vouchers_default_sort\" data-bind=\"value: sale_vouchers_default_sort\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1211
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["sorts"] ?? null), "module_admin_quick_edit_sale_vouchers", [], "any", false, false, false, 1211));
        foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
            // line 1212
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["sort"], "value", [], "any", false, false, false, 1212);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["sort"], "name", [], "any", false, false, false, 1212);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1214
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_sale_vouchers_default_order\" id=\"module_admin_quick_edit_sale_vouchers_default_order\" data-bind=\"value: sale_vouchers_default_order\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"ASC\">";
        // line 1218
        echo ($context["text_ascending"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"DESC\">";
        // line 1219
        echo ($context["text_descending"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\"><span data-toggle=\"tooltip\" data-title=\"";
        // line 1224
        echo ($context["help_columns"] ?? null);
        echo "\" data-container=\"body\">";
        echo ($context["entry_fields"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6 col-md-5 col-lg-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table table-hover table-condensed page-columns sortable\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>#</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>";
        // line 1230
        echo ($context["text_column_name"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 1231
        echo ($context["text_display"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 1232
        echo ($context["text_editable"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- ko foreach: sale_vouchers -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr  data-bind=\"attr: {'data-id': column}, css: {'danger': !visible()}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><i class=\"fa fa-arrows-v cur-crosshair\"></i></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><!-- ko text: name --><!-- /ko --><input data-bind=\"value: index, attr: {name:'index[module_admin_quick_edit_sale_vouchers][' + column +']'}\" type=\"hidden\" class=\"column-index\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><input data-bind=\"checked: visible, attr: {name:'display[module_admin_quick_edit_sale_vouchers][' + column +']'}\" type=\"checkbox\" class=\"column-display\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><input data-bind=\"checked: editable, attr: {name:'qe_status[module_admin_quick_edit_sale_vouchers][' + column +']'}, disable: !quick_editable\" type=\"checkbox\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /ko -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"tab-sale-voucher-themes\" role=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_sale_voucher_themes_status\">";
        // line 1253
        echo ($context["entry_sale_voucher_themes_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_sale_voucher_themes_status\" id=\"module_admin_quick_edit_sale_voucher_themes_status\" data-bind=\"value: sale_voucher_themes_status\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
        // line 1256
        echo ($context["text_enabled"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
        // line 1257
        echo ($context["text_disabled"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_sale_voucher_themes_default_sort\">";
        // line 1262
        echo ($context["entry_default_sorting"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_sale_voucher_themes_default_sort\" id=\"module_admin_quick_edit_sale_voucher_themes_default_sort\" data-bind=\"value: sale_voucher_themes_default_sort\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1265
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["sorts"] ?? null), "module_admin_quick_edit_sale_voucher_themes", [], "any", false, false, false, 1265));
        foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
            // line 1266
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["sort"], "value", [], "any", false, false, false, 1266);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["sort"], "name", [], "any", false, false, false, 1266);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1268
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_sale_voucher_themes_default_order\" id=\"module_admin_quick_edit_sale_voucher_themes_default_order\" data-bind=\"value: sale_voucher_themes_default_order\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"ASC\">";
        // line 1272
        echo ($context["text_ascending"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"DESC\">";
        // line 1273
        echo ($context["text_descending"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\"><span data-toggle=\"tooltip\" data-title=\"";
        // line 1278
        echo ($context["help_columns"] ?? null);
        echo "\" data-container=\"body\">";
        echo ($context["entry_fields"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6 col-md-5 col-lg-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table table-hover table-condensed page-columns sortable\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>#</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>";
        // line 1284
        echo ($context["text_column_name"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 1285
        echo ($context["text_display"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 1286
        echo ($context["text_editable"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- ko foreach: sale_voucher_themes -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr  data-bind=\"attr: {'data-id': column}, css: {'danger': !visible()}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><i class=\"fa fa-arrows-v cur-crosshair\"></i></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><!-- ko text: name --><!-- /ko --><input data-bind=\"value: index, attr: {name:'index[module_admin_quick_edit_sale_voucher_themes][' + column +']'}\" type=\"hidden\" class=\"column-index\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><input data-bind=\"checked: visible, attr: {name:'display[module_admin_quick_edit_sale_voucher_themes][' + column +']'}\" type=\"checkbox\" class=\"column-display\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><input data-bind=\"checked: editable, attr: {name:'qe_status[module_admin_quick_edit_sale_voucher_themes][' + column +']'}, disable: !quick_editable\" type=\"checkbox\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /ko -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"marketing-settings\">
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" role=\"tablist\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\"><a href=\"#tab-marketing-marketing\" role=\"tab\" data-toggle=\"tab\">";
        // line 1312
        echo ($context["tab_marketing"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#tab-marketing-coupons\" role=\"tab\" data-toggle=\"tab\">";
        // line 1313
        echo ($context["tab_coupons"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane fade in active\" id=\"tab-marketing-marketing\" role=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_marketing_marketing_status\">";
        // line 1319
        echo ($context["entry_marketing_marketing_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_marketing_marketing_status\" id=\"module_admin_quick_edit_marketing_marketing_status\" data-bind=\"value: marketing_marketing_status\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
        // line 1322
        echo ($context["text_enabled"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
        // line 1323
        echo ($context["text_disabled"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_marketing_marketing_default_sort\">";
        // line 1328
        echo ($context["entry_default_sorting"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_marketing_marketing_default_sort\" id=\"module_admin_quick_edit_marketing_marketing_default_sort\" data-bind=\"value: marketing_marketing_default_sort\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1331
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["sorts"] ?? null), "module_admin_quick_edit_marketing_marketing", [], "any", false, false, false, 1331));
        foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
            // line 1332
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["sort"], "value", [], "any", false, false, false, 1332);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["sort"], "name", [], "any", false, false, false, 1332);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1334
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_marketing_marketing_default_order\" id=\"module_admin_quick_edit_marketing_marketing_default_order\" data-bind=\"value: marketing_marketing_default_order\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"ASC\">";
        // line 1338
        echo ($context["text_ascending"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"DESC\">";
        // line 1339
        echo ($context["text_descending"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\"><span data-toggle=\"tooltip\" data-title=\"";
        // line 1344
        echo ($context["help_columns"] ?? null);
        echo "\" data-container=\"body\">";
        echo ($context["entry_fields"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6 col-md-5 col-lg-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table table-hover table-condensed page-columns sortable\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>#</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>";
        // line 1350
        echo ($context["text_column_name"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 1351
        echo ($context["text_display"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 1352
        echo ($context["text_editable"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- ko foreach: marketing_marketing -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr  data-bind=\"attr: {'data-id': column}, css: {'danger': !visible()}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><i class=\"fa fa-arrows-v cur-crosshair\"></i></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><!-- ko text: name --><!-- /ko --><input data-bind=\"value: index, attr: {name:'index[module_admin_quick_edit_marketing_marketing][' + column +']'}\" type=\"hidden\" class=\"column-index\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><input data-bind=\"checked: visible, attr: {name:'display[module_admin_quick_edit_marketing_marketing][' + column +']'}\" type=\"checkbox\" class=\"column-display\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><input data-bind=\"checked: editable, attr: {name:'qe_status[module_admin_quick_edit_marketing_marketing][' + column +']'}, disable: !quick_editable\" type=\"checkbox\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /ko -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"tab-marketing-coupons\" role=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_marketing_coupons_status\">";
        // line 1373
        echo ($context["entry_marketing_coupons_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_marketing_coupons_status\" id=\"module_admin_quick_edit_marketing_coupons_status\" data-bind=\"value: marketing_coupons_status\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
        // line 1376
        echo ($context["text_enabled"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
        // line 1377
        echo ($context["text_disabled"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\" for=\"module_admin_quick_edit_marketing_coupons_default_sort\">";
        // line 1382
        echo ($context["entry_default_sorting"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_marketing_coupons_default_sort\" id=\"module_admin_quick_edit_marketing_coupons_default_sort\" data-bind=\"value: marketing_coupons_default_sort\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1385
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["sorts"] ?? null), "module_admin_quick_edit_marketing_coupons", [], "any", false, false, false, 1385));
        foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
            // line 1386
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["sort"], "value", [], "any", false, false, false, 1386);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["sort"], "name", [], "any", false, false, false, 1386);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1388
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3 fc-auto-width\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_admin_quick_edit_marketing_coupons_default_order\" id=\"module_admin_quick_edit_marketing_coupons_default_order\" data-bind=\"value: marketing_coupons_default_order\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"ASC\">";
        // line 1392
        echo ($context["text_ascending"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"DESC\">";
        // line 1393
        echo ($context["text_descending"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\"><span data-toggle=\"tooltip\" data-title=\"";
        // line 1398
        echo ($context["help_columns"] ?? null);
        echo "\" data-container=\"body\">";
        echo ($context["entry_fields"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6 col-md-5 col-lg-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table table-hover table-condensed page-columns sortable\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>#</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>";
        // line 1404
        echo ($context["text_column_name"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 1405
        echo ($context["text_display"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 1406
        echo ($context["text_editable"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- ko foreach: marketing_coupons -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr  data-bind=\"attr: {'data-id': column}, css: {'danger': !visible()}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><i class=\"fa fa-arrows-v cur-crosshair\"></i></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><!-- ko text: name --><!-- /ko --><input data-bind=\"value: index, attr: {name:'index[module_admin_quick_edit_marketing_coupons][' + column +']'}\" type=\"hidden\" class=\"column-index\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><input data-bind=\"checked: visible, attr: {name:'display[module_admin_quick_edit_marketing_coupons][' + column +']'}\" type=\"checkbox\" class=\"column-display\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><input data-bind=\"checked: editable, attr: {name:'qe_status[module_admin_quick_edit_marketing_coupons][' + column +']'}, disable: !quick_editable\" type=\"checkbox\" /></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /ko -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"tab-pane\" id=\"ext-support\">
\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t<div class=\"navbar-header\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#support-navbar-collapse\">
\t\t\t\t\t\t\t\t\t<span class=\"sr-only\">";
        // line 1437
        echo ($context["text_toggle_navigation"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<h3 class=\"panel-title\"><i class=\"fa fa-support fa-fw\"></i> ";
        // line 1441
        echo ($context["tab_support"] ?? null);
        echo "</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"support-navbar-collapse\">
\t\t\t\t\t\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t\t\t\t\t\t<li class=\"active\"><a href=\"#general\" data-toggle=\"tab\">";
        // line 1445
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#faq\" data-toggle=\"tab\" title=\"";
        // line 1446
        echo ($context["text_faq"] ?? null);
        echo "\">";
        echo ($context["tab_faq"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#services\" data-toggle=\"tab\">";
        // line 1447
        echo ($context["tab_services"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"general\">
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t<h3>Getting support</h3>
\t\t\t\t\t\t\t\t\t\t\t<p>We consider support a priority of ours, so if you need any help with your purchase you can contact us in one of the following ways:</p>
\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t<li>Send an email to <a href=\"mailto:";
        // line 1459
        echo ($context["ext_support_email"] ?? null);
        echo "?subject='";
        echo ($context["text_support_subject"] ?? null);
        echo "'\">";
        echo ($context["ext_support_email"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>Use OpenCart <a href=\"";
        // line 1460
        echo ($context["ext_support_link"] ?? null);
        echo "\" target=\"_blank\">Get Support</a> form</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t<p>We usually reply within a few hours, but can take up to 36 hours.</p>
\t\t\t\t\t\t\t\t\t\t\t<p>Please note that all support is free if it is an issue with the product. Only issues due conflicts with other third party extensions/modules or custom front end theme are the exception to free support. Resolving such conflicts, customizing the extension or doing additional bespoke work will be provided with the hourly rate of <span id=\"hourly_rate\">USD 60</span>.</p>

\t\t\t\t\t\t\t\t\t\t\t<h4>Things to note when asking for help</h4>
\t\t\t\t\t\t\t\t\t\t\t<p>Please describe your problem in as much detail as possible. When contacting, please provide the following information:</p>
\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t<li>The OpenCart version you are using: <strong>";
        // line 1468
        echo ($context["oc_version"] ?? null);
        echo "</strong></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>The PHP version you are using: <strong>";
        // line 1469
        echo ($context["php_version"] ?? null);
        echo "</strong></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>The extension name and version: <strong>";
        // line 1470
        echo ($context["ext_name"] ?? null);
        echo " v";
        echo ($context["ext_version"] ?? null);
        echo "</strong></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>Your OpenCart order ID / Invoice Nr</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>If you got any error messages, please include them in the message.</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>In case the error message is generated by a VQMod or OCMOD cached file, please also attach that file.</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t<p>Any additional information that you can provide about the issue is greatly appreciated and will make problem solving much faster.</p>

\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"page-header\">Happy with ";
        // line 1477
        echo ($context["ext_name"] ?? null);
        echo "?</h3>
\t\t\t\t\t\t\t\t\t\t\t<p>We would appreciate it very much if you could rate the extension on OpenCart website under your <em>Account &gt; Purchases &gt; <a href=\"";
        // line 1478
        echo ($context["ext_rate_url"] ?? null);
        echo "\" target=\"_blank\">Rate your Downloads</a></em> page once you've had a chance to try it out. Why not tell everybody how great this extension is by <a href=\"";
        echo ($context["ext_store_url"] ?? null);
        echo "\" target=\"_blank\">leaving a comment</a> as well.</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"alert alert-info\">
\t\t\t\t\t\t\t\t\t\t\t\t<p>";
        // line 1484
        echo ($context["text_other_extensions"] ?? null);
        echo "</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"faq\">
\t\t\t\t\t\t\t\t\t<h3>";
        // line 1490
        echo ($context["text_faq"] ?? null);
        echo "</h3>
\t\t\t\t\t\t\t\t\t<ul class=\"media-list\" id=\"faqs\">
\t\t\t\t\t\t\t\t\t\t<li class=\"media\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"pull-left\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-question-circle fa-4x media-object\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"media-heading\">Why isn't the extension working?</h4>

\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"short-answer\">Verify that you have updated the modification cache and all ";
        // line 1499
        echo ($context["ext_name"] ?? null);
        echo " events are enabled.</p>

\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default btn-sm\" data-toggle=\"collapse\" data-target=\"#not_working\" data-parent=\"#faqs\">Show the full answer</button>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"collapse full-answer\" id=\"not_working\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>There may be a few causes due to which the extension may not appear to be working.</p>

\t\t\t\t\t\t\t\t\t\t\t\t\t<ol>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Check tha the extension has been enabled.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Verify that the ";
        // line 1511
        echo ($context["ext_name"] ?? null);
        echo " modification script (<em>Extensions &gt; <a href=\"";
        echo ($context["modifications"] ?? null);
        echo "\" target=\"_blank\">Modifications</a></em>) is enabled, modification cache has been refreshed and none of the ";
        echo ($context["ext_name"] ?? null);
        echo " modification script files are not reporting any errors in the modification log.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>If modification log contains errors related to the ";
        // line 1512
        echo ($context["ext_name"] ?? null);
        echo " extension then these must be addressed.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Verify that all of the ";
        // line 1516
        echo ($context["ext_name"] ?? null);
        echo " module events (<strong>Event Code</strong> beginning with <em>admin_module_admin_quick_edit_*</em>) are enabled on the <em>Extensions &gt; <a href=\"";
        echo ($context["events"] ?? null);
        echo "\" target=\"_blank\">Events</a></em> page.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ol>

\t\t\t\t\t\t\t\t\t\t\t\t\t<p>In case none of the above helped you to get the extension working please contact me on the support email given on the <a href=\"#\" class=\"external-tab-link\" data-target=\"#general\">General Support</a> section.</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t<li class=\"media\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"pull-left\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-question-circle fa-4x media-object\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"media-heading\">Why do I get an API access permission error when editing order status?</h4>

\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"short-answer\">Verify that you have added your server IP address(es) <strong>";
        // line 1532
        echo twig_join_filter(($context["server_ips"] ?? null), ", ");
        echo "</strong> to the <em>System &gt; Users &gt; <a href=\"";
        echo ($context["api"] ?? null);
        echo "\" target=\"_blank\">API</a></em> IP Addresses list.</p>
\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t<li class=\"media\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"pull-left\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-question-circle fa-4x media-object\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"media-heading\">How to edit numeric values relative to original value?</h4>

\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"short-answer\">Use syntax like <code># + 10%</code>, <code># - 21%</code>, <code># * 3.5</code> or <code># / 1.1</code> for new value</p>

\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default btn-sm\" data-toggle=\"collapse\" data-target=\"#relative_edit\" data-parent=\"#faqs\">Show the full answer</button>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"collapse full-answer\" id=\"relative_edit\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>In order to edit a value relative to the original you need to use the <code># &lt;operation&gt; &lt;operand&gt;</code> special syntax where <code>#</code> denotes the original value, <code>&lt;operation&gt;</code> is either <code>+</code> (addition), <code>-</code> (subtraction), <code>*</code> (multiplication) or <code>/</code> (division) and <code>&lt;operand&gt;</code> is a numeric value with an optional percentage sign.</p>

\t\t\t\t\t\t\t\t\t\t\t\t\t<p>You can use relative editing for most numeric fields (such as price, quantity, sort order, etc.)</p>

\t\t\t\t\t\t\t\t\t\t\t\t\t<p><span class=\"label label-info\">Note</span> Relative editing also works in batch editing mode!</p>

\t\t\t\t\t\t\t\t\t\t\t\t\t<h5><strong>Some examples</strong></h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>To add 13 to the value input <code># + 13</code></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>To subtract 3.3 from the value input <code># - 3.3</code></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>To increase the value by 5 percent input <code># + 5%</code></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>To decrease the value by 1.5% percent input <code># - 1.5%</code></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>To multiply the value by 2.5 input <code># * 2.5</code></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>To divide the value by 10 input <code># / 10</code></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t<li class=\"media\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"pull-left\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-question-circle fa-4x media-object\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"media-heading\">How to translate the extension to another language?</h4>

\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"short-answer\">Copy the extension language files (see full answer) to your language folder and translate the strings inside the copied files.</p>

\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default btn-sm\" data-toggle=\"collapse\" data-target=\"#translation\" data-parent=\"#faqs\">Show the full answer</button>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"collapse full-answer\" id=\"translation\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<ol>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p><strong>Copy</strong> the following language files <strong>to YOUR_LANGUAGE folder</strong> under the appropriate location as shown below:</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btm-mgn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<em class=\"text-muted\"><small>FROM:</small></em>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/en-gb/extension/module/aqe/catalog/attribute.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/en-gb/extension/module/aqe/catalog/attribute_group.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/en-gb/extension/module/aqe/catalog/category.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/en-gb/extension/module/aqe/catalog/download.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/en-gb/extension/module/aqe/catalog/filter.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/en-gb/extension/module/aqe/catalog/general.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/en-gb/extension/module/aqe/catalog/information.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/en-gb/extension/module/aqe/catalog/manufacturer.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/en-gb/extension/module/aqe/catalog/option.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/en-gb/extension/module/aqe/catalog/product.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/en-gb/extension/module/aqe/catalog/recurring.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/en-gb/extension/module/aqe/catalog/review.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/en-gb/extension/module/aqe/design/seo_url.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/en-gb/extension/module/aqe/customer/customer.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/en-gb/extension/module/aqe/customer/general.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/en-gb/extension/module/aqe/marketing/coupon.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/en-gb/extension/module/aqe/marketing/general.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/en-gb/extension/module/aqe/marketing/marketing.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/en-gb/extension/module/aqe/sale/general.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/en-gb/extension/module/aqe/sale/order.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/en-gb/extension/module/aqe/sale/return.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/en-gb/extension/module/aqe/sale/voucher.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/en-gb/extension/module/aqe/sale/voucher_theme.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/en-gb/extension/module/admin_quick_edit.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<em class=\"text-muted\"><small>TO:</small></em>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/YOUR_LANGUAGE/extension/module/aqe/catalog/attribute.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/YOUR_LANGUAGE/extension/module/aqe/catalog/attribute_group.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/YOUR_LANGUAGE/extension/module/aqe/catalog/category.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/YOUR_LANGUAGE/extension/module/aqe/catalog/download.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/YOUR_LANGUAGE/extension/module/aqe/catalog/filter.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/YOUR_LANGUAGE/extension/module/aqe/catalog/general.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/YOUR_LANGUAGE/extension/module/aqe/catalog/information.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/YOUR_LANGUAGE/extension/module/aqe/catalog/manufacturer.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/YOUR_LANGUAGE/extension/module/aqe/catalog/option.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/YOUR_LANGUAGE/extension/module/aqe/catalog/product.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/YOUR_LANGUAGE/extension/module/aqe/catalog/recurring.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/YOUR_LANGUAGE/extension/module/aqe/catalog/review.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/YOUR_LANGUAGE/extension/module/aqe/design/seo_url.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/YOUR_LANGUAGE/extension/module/aqe/customer/customer.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/YOUR_LANGUAGE/extension/module/aqe/customer/general.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/YOUR_LANGUAGE/extension/module/aqe/marketing/coupon.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/YOUR_LANGUAGE/extension/module/aqe/marketing/general.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/YOUR_LANGUAGE/extension/module/aqe/marketing/marketing.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/YOUR_LANGUAGE/extension/module/aqe/sale/general.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/YOUR_LANGUAGE/extension/module/aqe/sale/order.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/YOUR_LANGUAGE/extension/module/aqe/sale/return.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/YOUR_LANGUAGE/extension/module/aqe/sale/voucher.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/YOUR_LANGUAGE/extension/module/aqe/sale/voucher_theme.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/YOUR_LANGUAGE/extension/module/admin_quick_edit.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p><strong>Open</strong> each of the copied <strong>language files</strong> with a text editor such as <a href=\"http://www.sublimetext.com/\">Sublime Text</a> or <a href=\"http://notepad-plus-plus.org/\">Notepad++</a> and <strong>make the required translations</strong>. You can also leave the files in English.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p><span class=\"label label-info\">Note</span> You only need to translate the parts that are to the right of the equal sign.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t\t\t</ol>

\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"media\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"pull-left\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-question-circle fa-4x media-object\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"media-heading\">How to upgrade the extension?</h4>

\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"short-answer\">Back up your system, disable the extension, upload new extension files, refresh modification cache and click Upgrade on the extension settings page. After upgrade is complete enable the extension again.</p>

\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default btn-sm\" data-toggle=\"collapse\" data-target=\"#upgrade\" data-parent=\"#faqs\">Show the full answer</button>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"collapse full-answer\" id=\"upgrade\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<ol>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p><strong>Back up your system</strong> before making any upgrades or changes.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p><span class=\"label label-info\">Note</span> Although ";
        // line 1662
        echo ($context["ext_name"] ?? null);
        echo " does not overwrite any OpenCart core files, it is always a good practice to create a system backup before making any changes to the system.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p><span class=\"label label-danger\">Important</span> If the previous ";
        // line 1663
        echo ($context["ext_name"] ?? null);
        echo " extension is a VQMod version then delete the vqmod/xml/admin_quick_edit.xml file and clear VQMod cache.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><strong>Disable</strong> ";
        // line 1665
        echo ($context["ext_name"] ?? null);
        echo " <strong>extension</strong> on the module settings page (<em>Extensions > Extensions > Modules > ";
        echo ($context["ext_name"] ?? null);
        echo "</em>) by changing <em>Extension status</em> setting to \"Disabled\".</li>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p><strong>Upload</strong> the <strong>extension archive</strong> <em>AdminQuickEditPRO-x.x.x.ocmod.zip</em> using the <a href=\"";
        // line 1668
        echo ($context["extension_installer"] ?? null);
        echo "\" target=\"_blank\">Extension Installer</a>.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p><span class=\"label label-info\">Note</span> Do not worry, no OpenCart core files will be replaced! Only the previously installed ";
        // line 1669
        echo ($context["ext_name"] ?? null);
        echo " files will be overwritten.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p><span class=\"label label-danger\">Important</span> If you have done custom modifications to the extension then back up the modified files and re-apply the modifications after upgrade. To see which files have changed, please take a look at the <a href=\"#\" class=\"external-tab-link\" data-target=\"#changelog,#about-ext\">Changelog</a>.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p><strong>Navigagte to</strong> the <strong>Modifications page</strong> <small>(<em>Extensions &gt; <a href=\"";
        // line 1674
        echo ($context["modifications"] ?? null);
        echo "\" target=\"_blank\">Modifications</a></em>)</small> and <strong>rebuild the modification cache</strong> by clicking on the 'Refresh' button.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p><strong>Open</strong> the ";
        // line 1678
        echo ($context["ext_name"] ?? null);
        echo " <strong>module settings page</strong> <small>(<em>Extensions &gt; Extensions &gt; Modules &gt; <a href=\"#\">";
        echo ($context["ext_name"] ?? null);
        echo "</a></em>)</small> and <strong>refresh the page</strong> by pressing <em>Ctrl + F5</em> twice to force the browser to update the css changes.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><p>You should see a notice stating that new version of extension files have been found. <strong>Upgrade the extension</strong> by clicking on the 'Upgrade' button.</p></li>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>After the extension has been successfully upgraded <strong>enable the extension</strong> by changing <em>Extension status</em> setting to \"Enabled\".</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"services\">
\t\t\t\t\t\t\t\t\t<h3>Premium Services<button type=\"button\" class=\"btn btn-default btn-sm pull-right\" data-toggle=\"tooltip\" data-container=\"body\" data-placement=\"bottom\" title=\"";
        // line 1691
        echo ($context["button_refresh"] ?? null);
        echo "\" id=\"btn-refresh-services\" data-loading-text=\"<i class='fa fa-refresh fa-spin'></i> <span class='visible-lg-inline visible-xs-inline'>";
        echo ($context["text_loading"] ?? null);
        echo "</span>\"><i class=\"fa fa-refresh\"></i> <span class=\"visible-lg-inline visible-xs-inline\">";
        echo ($context["button_refresh"] ?? null);
        echo "</span></button></h3>
\t\t\t\t\t\t\t\t\t<div id=\"service-container\">
\t\t\t\t\t\t\t\t\t\t<p data-bind=\"visible: service_list_loading()\">Loading service list ... <i class=\"fa fa-refresh fa-spin\"></i></p>
\t\t\t\t\t\t\t\t\t\t<p data-bind=\"visible: service_list_loaded() && services().length == 0\">There are currently no available services for this extension.</p>
\t\t\t\t\t\t\t\t\t\t<table class=\"table table-hover\">
\t\t\t\t\t\t\t\t\t\t\t<tbody data-bind=\"foreach: services\">
\t\t\t\t\t\t\t\t\t\t\t\t<tr class=\"srvc\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"service\" data-bind=\"html: name\"></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"description\" data-bind=\"visible: description != '', html: description\"></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p data-bind=\"visible: turnaround != ''\"><strong>Turnaround time</strong>: <span class=\"turnaround\" data-bind=\"html: turnaround\"></span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"hidden code\" data-bind=\"html: code\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"nowrap text-right top-pad\"><span class=\"currency\" data-bind=\"html: currency\"></span> <span class=\"price\" data-bind=\"html: price\"></span></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\"><button type=\"button\" class=\"btn btn-sm btn-primary purchase\"><i class=\"fa fa-shopping-cart\"></i> Buy Now</button></td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"tab-pane\" id=\"about-ext\">
\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t<div class=\"navbar-header\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#about-navbar-collapse\">
\t\t\t\t\t\t\t\t\t<span class=\"sr-only\">";
        // line 1722
        echo ($context["text_toggle_navigation"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<h3 class=\"panel-title\"><i class=\"fa fa-info fa-fw\"></i> ";
        // line 1726
        echo ($context["tab_about"] ?? null);
        echo "</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"about-navbar-collapse\">
\t\t\t\t\t\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t\t\t\t\t\t<li class=\"active\"><a href=\"#ext-info\" data-toggle=\"tab\">";
        // line 1730
        echo ($context["tab_extension"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#changelog\" data-toggle=\"tab\">";
        // line 1731
        echo ($context["tab_changelog"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"ext-info\">
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t<h3>";
        // line 1740
        echo ($context["text_extension_information"] ?? null);
        echo "</h3>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\">";
        // line 1743
        echo ($context["entry_extension_name"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9 col-md-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"form-control-static\">";
        // line 1745
        echo ($context["ext_name"] ?? null);
        echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\">";
        // line 1749
        echo ($context["entry_installed_version"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9 col-md-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"form-control-static\"><strong>";
        // line 1751
        echo ($context["installed_version"] ?? null);
        echo "</strong></p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\">";
        // line 1755
        echo ($context["entry_extension_compatibility"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9 col-md-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"form-control-static\">";
        // line 1757
        echo ($context["ext_compatibility"] ?? null);
        echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\">";
        // line 1761
        echo ($context["entry_extension_store_url"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9 col-md-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"form-control-static\"><a href=\"";
        // line 1763
        echo ($context["ext_store_url"] ?? null);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, ($context["ext_store_url"] ?? null));
        echo "</a></p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\">";
        // line 1767
        echo ($context["entry_copyright_notice"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9 col-md-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"form-control-static\">&copy; 2011 - ";
        // line 1769
        echo twig_date_format_filter($this->env, "now", "Y");
        echo " OpenCart.ee</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-offset-3 col-sm-9 col-md-offset-2 col-md-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"form-control-static\"><a href=\"#legal_text\" id=\"legal_notice\" data-toggle=\"modal\">";
        // line 1774
        echo ($context["text_terms"] ?? null);
        echo "</a></p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t";
        // line 1778
        if ((($context["installed_extensions"] ?? null) && twig_test_iterable(($context["installed_extensions"] ?? null)))) {
            // line 1779
            echo "\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"page-header\">";
            echo ($context["text_installed_addons"] ?? null);
            echo "</h3>
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1780
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["installed_extensions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["ext"]) {
                // line 1781
                echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 col-md-2 control-label\">";
                // line 1782
                echo twig_get_attribute($this->env, $this->source, $context["ext"], "name", [], "any", false, false, false, 1782);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9 col-md-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 1784
                if (twig_get_attribute($this->env, $this->source, $context["ext"], "version", [], "any", false, false, false, 1784)) {
                    echo "<p class=\"form-control-static\">Version <strong>";
                    echo twig_get_attribute($this->env, $this->source, $context["ext"], "version", [], "any", false, false, false, 1784);
                    echo "</strong></p>";
                }
                // line 1785
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["ext"], "author", [], "any", false, false, false, 1785)) {
                    echo "<p class=\"form-control-static\">Author <strong>";
                    echo twig_get_attribute($this->env, $this->source, $context["ext"], "author", [], "any", false, false, false, 1785);
                    echo "</strong></p>";
                }
                // line 1786
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["ext"], "compatibility", [], "any", false, false, false, 1786)) {
                    echo "<p class=\"form-control-static\">Compatibility <strong>";
                    echo twig_get_attribute($this->env, $this->source, $context["ext"], "compatibility", [], "any", false, false, false, 1786);
                    echo "</strong></p>";
                }
                // line 1787
                echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ext'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1790
            echo "\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1791
        echo "
\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"page-header\">";
        // line 1792
        echo ($context["text_license"] ?? null);
        echo "</h3>
\t\t\t\t\t\t\t\t\t\t\t<p>";
        // line 1793
        echo ($context["text_license_text"] ?? null);
        echo "</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"changelog\">
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"release\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>Version 6.2.7 <small class=\"release-date text-muted\">06 Apr 2021</small></h3>

\t\t\t\t\t\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-success\">Fixed:</em> PHP 7.4 deprecation warning</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-info\">Changed:</em> Improved server external IP detection in case of url fopen was disabled</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><i class=\"fa fa-pencil text-primary\"></i> Files changed:</h4>

\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/extension/module/admin_quick_edit.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/extension/module/aqe/catalog/attribute*.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/extension/module/aqe/catalog/download.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/extension/module/admin_quick_edit.twig</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>system/config/aqep.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"release\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>Version 6.2.6 <small class=\"release-date text-muted\">23 Feb 2021</small></h3>

\t\t\t\t\t\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-success\">Fixed:</em> Product price quick/batch edit displays malformed price value</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><i class=\"fa fa-pencil text-primary\"></i> Files changed:</h4>

\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/extension/module/admin_quick_edit.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/extension/module/aqe/catalog/product.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/extension/module/admin_quick_edit.twig</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>system/config/aqep.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"release\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>Version 6.2.5 <small class=\"release-date text-muted\">11 Feb 2021</small></h3>

\t\t\t\t\t\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-success\">Fixed:</em> Modal window close button not working</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><i class=\"fa fa-pencil text-primary\"></i> Files changed:</h4>

\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/extension/module/admin_quick_edit.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/javascript/aqe/catalog.min.js</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/extension/module/admin_quick_edit.twig</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>system/config/aqep.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"release\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>Version 6.2.4 <small class=\"release-date text-muted\">25 Jul 2020</small></h3>

\t\t\t\t\t\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-success\">Fixed:</em> Compatibility with OpenCart 3.0.3.6</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-success\">Fixed:</em> Compatibility with OpenCart modification system</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-success\">Fixed:</em> Compatibility with PHP 7.4</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><i class=\"fa fa-pencil text-primary\"></i> Files changed:</h4>

\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/extension/module/admin_quick_edit.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/model/extension/module/aqe/*/*.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/extension/module/admin_quick_edit.twig</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/extension/module/aqe/catalog/product_list.twig</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>system/config/aqep.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"release\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>Version 6.2.3 <small class=\"release-date text-muted\">21 May 2020</small></h3>

\t\t\t\t\t\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-success\">Fixed:</em> WYSIWYG editor dropdown menu visibility</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-success\">Fixed:</em> WYSIWYG editor modals not accessible</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-success\">Fixed:</em> Quantity shows zero after quick edit</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><i class=\"fa fa-pencil text-primary\"></i> Files changed:</h4>

\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/extension/module/admin_quick_edit.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/extension/module/aqe/catalog/product.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/javascript/aqe/catalog.min.js</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/stylesheet/aqe/catalog.min.css</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/extension/module/admin_quick_edit.twig</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>system/config/aqep.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"release\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>Version 6.2.2 <small class=\"release-date text-muted\">02 Apr 2020</small></h3>

\t\t\t\t\t\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-success\">Fixed:</em> PHP warning on module settings page when URL fopen is not allowed</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><i class=\"fa fa-pencil text-primary\"></i> Files changed:</h4>

\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/extension/module/admin_quick_edit.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/extension/module/admin_quick_edit.twig</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>system/config/aqep.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"release\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>Version 6.2.1 <small class=\"release-date text-muted\">25 Oct 2019</small></h3>

\t\t\t\t\t\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-success\">Fixed:</em> API access error FAQ</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><i class=\"fa fa-pencil text-primary\"></i> Files changed:</h4>

\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/extension/module/admin_quick_edit.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/extension/module/admin_quick_edit.twig</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>system/config/aqep.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"release\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>Version 6.2.0 <small class=\"release-date text-muted\">21 Apr 2019</small></h3>

\t\t\t\t\t\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-primary\">New:</em> Design -> SEO URL page quick editing</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><i class=\"fa fa-pencil text-primary\"></i> Files changed:</h4>

\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/extension/module/admin_quick_edit.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/en-gb/extension/module/admin_quick_edit.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/extension/module/admin_quick_edit.twig</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>system/config/aqep.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><i class=\"fa fa-plus text-success\"></i> Files added:</h4>

\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/extension/module/aqe/design/seo_url.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/en-gb/extension/module/aqe/design/*.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/model/extension/module/aqe/design/seo_url.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/extension/module/aqe/design/seo_url_list.twig</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"release\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>Version 6.1.1 <small class=\"release-date text-muted\">14 Mar 2019</small></h3>

\t\t\t\t\t\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-success\">Fixed:</em> Error displaying product page with Filters column</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><i class=\"fa fa-pencil text-primary\"></i> Files changed:</h4>

\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/extension/module/admin_quick_edit.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/model/extension/module/aqe/*.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/extension/module/admin_quick_edit.twig</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>system/config/aqep.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"release\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>Version 6.1.0 <small class=\"release-date text-muted\">01 Mar 2019</small></h3>

\t\t\t\t\t\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-primary\">New:</em> Edit numeric values relative to the original value (in batch)</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-primary\">New:</em> Edit special, discount prices relative to the original value or product price</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-primary\">New:</em> Edit option value prices relative to the original value</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-primary\">New:</em> Yes/No value highlighting</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-success\">Fixed:</em> Status highlighting</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><i class=\"fa fa-pencil text-primary\"></i> Files changed:</h4>

\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/extension/module/admin_quick_edit.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/extension/module/aqe/*.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/en-gb/extension/module/admin_quick_edit.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/en-gb/extension/module/aqe/*.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/model/extension/module/aqe/*.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/extension/module/admin_quick_edit.twig</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/extension/module/aqe/catalog/product_quick_form.twig</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>system/config/aqep.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><i class=\"fa fa-plus text-success\"></i> Files added:</h4>

\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/model/extension/module/aqe/general.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"release\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>Version 6.0.3 <small class=\"release-date text-muted\">22 Jan 2019</small></h3>

\t\t\t\t\t\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-info\">Changed:</em> Improved error detection</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-info\">Changed:</em> Alert display</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><i class=\"fa fa-pencil text-primary\"></i> Files changed:</h4>

\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/extension/module/admin_quick_edit.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/en-gb/extension/module/admin_quick_edit.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/stylesheet/aqe/*.css</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/extension/module/admin_quick_edit.twig</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>system/config/aqep.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><i class=\"fa fa-plus text-success\"></i> Files added:</h4>

\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/extension/module/admin_quick_edit_error.twig</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"release\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>Version 6.0.2 <small class=\"release-date text-muted\">18 Oct 2018</small></h3>

\t\t\t\t\t\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-success\">Fixed:</em> Extension upgrade process</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-info\">Changed:</em> Display installed add-ons</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><i class=\"fa fa-pencil text-primary\"></i> Files changed:</h4>

\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/extension/module/admin_quick_edit.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/en-gb/extension/module/admin_quick_edit.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/extension/module/admin_quick_edit.twig</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><i class=\"fa fa-plus text-success\"></i> Files added:</h4>

\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>system/config/aqep.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"release\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>Version 6.0.1 <small class=\"release-date text-muted\">10 May 2018</small></h3>

\t\t\t\t\t\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-info\">Changed:</em> Added new FAQ entry for API access permission error</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><i class=\"fa fa-pencil text-primary\"></i> Files changed:</h4>

\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/extension/module/admin_quick_edit.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/extension/module/admin_quick_edit.twig</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"release\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>Version 6.0.0 <small class=\"release-date text-muted\">03 Jan 2018</small></h3>

\t\t\t\t\t\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-primary\">New:</em> Option to change default sorting</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-primary\">New:</em> Option to show custom AQE PRO list pages as separate menu entries</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-success\">Fixed:</em> Support for OpenCart 3.0</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-info\">Changed:</em> Refactored whole codebase</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><i class=\"fa fa-pencil text-primary\"></i> Files changed:</h4>

\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/extension/module/admin_quick_edit.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/en-gb/extension/module/admin_quick_edit.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/javascript/aqe/catalog.min.js</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/javascript/aqe/module.min.js</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><i class=\"fa fa-plus text-success\"></i> Files added:</h4>

\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/extension/module/aqe/*</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/en-gb/extension/module/aqe/*</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/model/extension/module/admin_quick_edit.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/model/extension/module/aqe/*</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/stylesheet/aqe/catalog.min.css</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/stylesheet/aqe/module.min.css</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/extension/module/admin_quick_edit.twig</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/extension/module/aqe/*</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/extension/module/static/bull5i_aqe_pro_extension_terms.htm</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><i class=\"fa fa-minus text-danger\"></i> Files removed:</h4>

\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/catalog/aqe/*</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/customer/aqe/*</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/marketing/aqe/*</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/sale/aqe/*</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/en-gb/catalog/aqe/*</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/en-gb/customer/aqe/*</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/en-gb/marketing/aqe/*</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/en-gb/sale/aqe/*</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/model/catalog/aqe/*</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/model/customer/aqe/*</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/model/marketing/aqe/*</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/model/sale/aqe/*</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/static/bull5i_aqe_pro_extension_terms.htm</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/stylesheet/aqe/css/*</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/catalog/aqe/*</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/customer/aqe/*</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/extension/module/admin_quick_edit.tpl</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/marketing/aqe/*</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/sale/aqe/*</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>system/admin_quick_edit.ocmod.xml</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>system/helper/aqe.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"release\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>Version 5.7.1 <small class=\"release-date text-muted\">05 Jun 2017</small></h3>

\t\t\t\t\t\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-success\">Fixed:</em> Undefined variable error in product specials quick edit popup window</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><i class=\"fa fa-pencil text-primary\"></i> Files changed:</h4>

\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/extension/module/admin_quick_edit.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/catalog/aqe/product_quick_form.tpl</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/extension/module/admin_quick_edit.tpl</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>system/admin_quick_edit.ocmod.xml</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"release\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>Version 5.7.0 <small class=\"release-date text-muted\">22 Apr 2017</small></h3>

\t\t\t\t\t\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-primary\">New:</em> Better tokenized searching</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-primary\">New:</em> Option to filter products by no special price</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-primary\">New:</em> Highlight actions with related data</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-success\">Fixed:</em> Product, Category, Manufacturer and Information default store link in multistore installation</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><i class=\"fa fa-pencil text-primary\"></i> Files changed:</h4>

\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/catalog/aqe/*.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/extension/module/admin_quick_edit.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/marketing/aqe/coupon.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/en-gb/catalog/aqe/product.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/en-gb/extension/module/admin_quick_edit.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/model/catalog/aqe/*.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/model/customer/aqe/customer.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/model/marketing/aqe/*.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/model/sale/aqe/*.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/catalog/aqe/*_list.tpl</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/extension/module/admin_quick_edit.tpl</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/marketing/aqe/coupon_list.tpl</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>system/admin_quick_edit.ocmod.xml</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"release\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>Version 5.6.0 <small class=\"release-date text-muted\">05 Sep 2016</small></h3>

\t\t\t\t\t\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-primary\">New:</em> Product related downloads action</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-info\">Changed:</em> Product categories and filters quick editing uses autocomplete</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-info\">Changed:</em> Category filters quick editing uses autocomplete</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-info\">Changed:</em> Product, Category, Manufacturer and Information stores quick editing uses checkboxes</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><i class=\"fa fa-pencil text-primary\"></i> Files changed:</h4>

\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/catalog/aqe/category.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/catalog/aqe/product.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/extension/module/admin_quick_edit.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/en-gb/catalog/aqe/general.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/en-gb/extension/module/admin_quick_edit.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/model/catalog/aqe/category.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/model/catalog/aqe/product.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/catalog/aqe/product_list.tpl</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/catalog/aqe/product_quick_form.tpl</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/catalog/aqe/quick_edit_form.tpl</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/extension/module/admin_quick_edit.tpl</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>system/admin_quick_edit.ocmod.xml</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"release\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>Version 5.5.1 <small class=\"release-date text-muted\">10 Aug 2016</small></h3>

\t\t\t\t\t\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-success\">Fixed:</em> Product location autocomplete</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><i class=\"fa fa-pencil text-primary\"></i> Files changed:</h4>

\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/extension/module/admin_quick_edit.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/catalog/aqe/product_list.tpl</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/extension/module/admin_quick_edit.tpl</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>system/admin_quick_edit.ocmod.xml</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"release\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>Version 5.5.0 <small class=\"release-date text-muted\">05 Jul 2016</small></h3>

\t\t\t\t\t\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-primary\">New:</em> Product, Category, Manufacturer images filterable</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-success\">Fixed:</em> Requires Shipping column name on Catalog -> Products page</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><i class=\"fa fa-pencil text-primary\"></i> Files changed:</h4>

\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/catalog/aqe/category.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/catalog/aqe/manufacturer.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/catalog/aqe/option.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/catalog/aqe/product.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/marketing/aqe/affiliate.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/marketing/aqe/marketing.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/model/catalog/aqe/category.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/model/catalog/aqe/manufacturer.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/model/catalog/aqe/product.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/catalog/aqe/category_list.tpl</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/catalog/aqe/manufacturer_list.tpl</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/catalog/aqe/product_list.tpl</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>system/admin_quick_edit.ocmod.xml</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><i class=\"fa fa-plus text-success\"></i> Files added:</h4>

\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/extension/module/admin_quick_edit.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/en-gb/extension/module/admin_quick_edit.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/extension/module/admin_quick_edit.tpl</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><i class=\"fa fa-minus text-danger\"></i> Files removed:</h4>

\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/module/admin_quick_edit.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/en-gb/module/admin_quick_edit.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/english/catalog/aqe/*.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/english/customer/aqe/*.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/english/marketing/aqe/*.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/english/module/admin_quick_edit.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/english/sale/aqe/*.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/module/admin_quick_edit.tpl</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"release\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>Version 5.4.0 <small class=\"release-date text-muted\">18 Mar 2016</small></h3>

\t\t\t\t\t\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-primary\">New:</em> Meta Keyword &amp; Meta Description quick editing for Products, Categories and Informations</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-success\">Fixed:</em> Default soring on Catalog -> Categories page</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-success\">Fixed:</em> Order history quick editing</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-success\">Fixed:</em> Category name quick editing in single language mode</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-success\">Fixed:</em> Product filters quick editing UI glitch</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-success\">Fixed:</em> Conflict with Product Downloads PRO extension files</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-success\">Fixed:</em> Option values quick editing errors</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-success\">Fixed:</em> Customer e-mail address validation</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-success\">Fixed:</em> Support for OpenCart 2.2.0.0</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-info\">Changed:</em> Product Downloads quick edit uses autocomplete</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-info\">Changed:</em> Refactored extension structure</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><i class=\"fa fa-pencil text-primary\"></i> Files changed:</h4>

\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/module/admin_quick_edit.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/english/module/admin_quick_edit.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/javascript/aqe/catalog.min.js</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/stylesheet/aqe/css/catalog.min.css</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/catalog/aqe/product_quick_form.tpl</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/catalog/aqe/quick_edit_form.tpl</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/module/admin_quick_edit.tpl</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/sale/aqe/quick_edit_form.tpl</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>system/admin_quick_edit.ocmod.xml</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><i class=\"fa fa-plus text-success\"></i> Files added:</h4>

\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/catalog/aqe/*</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/customer/aqe/*</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/marketing/aqe/*</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/sale/aqe/*</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/en-gb/catalog/aqe/*</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/en-gb/customer/aqe/*</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/en-gb/marketing/aqe/*</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/en-gb/sale/aqe/*</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/english/catalog/aqe/*</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/english/customer/aqe/*</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/english/marketing/aqe/*</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/english/sale/aqe/*</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/model/catalog/aqe/*</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/model/customer/aqe/*</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/model/marketing/aqe/*</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/model/sale/aqe/*</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/catalog/aqe/*</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/customer/aqe/*</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/marketing/aqe/*</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/sale/aqe/*</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><i class=\"fa fa-minus text-danger\"></i> Files removed:</h4>

\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/catalog/*_ext.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/customer/*_ext.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/marketing/*_ext.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/sale/*_ext.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/english/catalog/*_ext.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/english/catalog/qe_general.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/english/customer/*_ext.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/english/customer/qe_general.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/english/marketing/*_ext.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/english/marketing/qe_general.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/english/sale/*_ext.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/english/sale/qe_general.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/model/catalog/*_ext.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/model/customer/*_ext.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/model/marketing/*_ext.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/model/sale/*_ext.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/catalog/aqe/*_ext_list.tpl</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/customer/aqe/*_ext_list.tpl</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/marketing/aqe/*_ext_list.tpl</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/sale/aqe/*_ext_list.tpl</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"release\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>Version 5.3.0 <small class=\"release-date text-muted\">09 Nov 2015</small></h3>

\t\t\t\t\t\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-primary\">New:</em> Meta Tag Title quick editing for Products, Categories and Informations</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><i class=\"fa fa-pencil text-primary\"></i> Files changed:</h4>

\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/catalog/category_ext.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/catalog/information_ext.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/catalog/product_ext.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/module/admin_quick_edit.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/english/module/admin_quick_edit.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/model/catalog/category_ext.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/model/catalog/information_ext.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/model/catalog/product_ext.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/catalog/aqe/product_quick_form.tpl</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/catalog/aqe/quick_edit_form.tpl</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/module/admin_quick_edit.tpl</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>system/admin_quick_edit.ocmod.xml</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"release\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>Version 5.2.0 <small class=\"release-date text-muted\">30 Aug 2015</small></h3>

\t\t\t\t\t\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-primary\">New:</em> Multilingual SEO keyword single language editing</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-success\">Fixed:</em> Missing language strings on Catalog -> Products page</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-success\">Fixed:</em> Default soring on Catalog -> Categories page</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-info\">Changed:</em> Some minor refactoring</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><i class=\"fa fa-pencil text-primary\"></i> Files changed:</h4>

\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/catalog/product_ext.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/module/admin_quick_edit.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/model/catalog/category_ext.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/catalog/aqe/*_ext_list.tpl</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/catalog/aqe/category_ext.tpl</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/catalog/aqe/information_ext.tpl</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/catalog/aqe/manufacturer_ext.tpl</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/catalog/aqe/product_ext.tpl</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/module/admin_quick_edit.tpl</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>system/admin_quick_edit.ocmod.xml</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"release\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>Version 5.1.2 <small class=\"release-date text-muted\">15 June 2015</small></h3>

\t\t\t\t\t\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-success\">Fixed:</em> Multilingual popup quick edit works only once per edit</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-primary\">New:</em> Popup modal focuses on first input</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><i class=\"fa fa-pencil text-primary\"></i> Files changed:</h4>

\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/module/admin_quick_edit.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/javascript/aqe/catalog.min.js</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/module/admin_quick_edit.tpl</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>system/admin_quick_edit.ocmod.xml</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"release\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>Version 5.1.1 <small class=\"release-date text-muted\">27 May 2015</small></h3>

\t\t\t\t\t\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-success\">Fixed:</em> VQMod not installed error is displayed without a reason</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><i class=\"fa fa-pencil text-primary\"></i> Files changed:</h4>

\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/module/admin_quick_edit.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/english/module/admin_quick_edit.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/module/admin_quick_edit.tpl</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>system/admin_quick_edit.ocmod.xml</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"release\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>Version 5.1.0 <small class=\"release-date text-muted\">25 May 2015</small></h3>

\t\t\t\t\t\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-primary\">New:</em> SEO links to front end product pages</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-primary\">New:</em> Fully OCMOD compatible</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-success\">Fixed:</em> Multi-store 'view in store' links</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-info\">Changed:</em> Minor UI fixes</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><i class=\"fa fa-pencil text-primary\"></i> Files changed:</h4>

\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/catalog/*_ext.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/marketing/*_ext.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/module/admin_quick_edit.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/sale/*_ext.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/english/module/admin_quick_edit.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/javascript/aqe/*.js</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/stylesheet/aqe/css/*.css</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/catalog/aqe/*_ext_list.tpl</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/marketing/aqe/*_ext_list.tpl</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/module/admin_quick_edit.tpl</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/sale/aqe/*_ext_list.tpl</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><i class=\"fa fa-plus text-success\"></i> Files added:</h4>

\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>system/admin_quick_edit.ocmod.xml</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><i class=\"fa fa-minus text-danger\"></i> Files removed:</h4>

\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>vqmod/xml/admin_quick_edit.xml</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"release\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>Version 5.0.3 <small class=\"release-date text-muted\">30 Mar 2015</small></h3>

\t\t\t\t\t\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-success\">Fixed:</em> Compatibility with OpenCart 2.0.2.0</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><i class=\"fa fa-pencil text-primary\"></i> Files changed:</h4>

\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/marketing/affiliate_ext.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/module/admin_quick_edit.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/customer/customer_ext.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/module/admin_quick_edit.tpl</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>vqmod/xml/admin_quick_edit.xml</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"release\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>Version 5.0.2 <small class=\"release-date text-muted\">19 Mar 2015</small></h3>

\t\t\t\t\t\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-success\">Fixed:</em> Compatibility with PHP &lt; 5.4</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-success\">Fixed:</em> VQMod error on category page</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><i class=\"fa fa-pencil text-primary\"></i> Files changed:</h4>

\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/module/admin_quick_edit.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/model/catalog/filter_ext.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/model/catalog/option_ext.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/catalog/aqe/category_ext_list.tpl</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/module/admin_quick_edit.tpl</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>vqmod/xml/admin_quick_edit.xml</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"release\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>Version 5.0.1 <small class=\"release-date text-muted\">17 Mar 2015</small></h3>

\t\t\t\t\t\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-success\">Fixed:</em> Filter lost when navigating to standard edit page</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-success\">Fixed:</em> Catalog -> Categories filtering by filters</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-success\">Fixed:</em> Catalog -> Recurring Profiles filtering by trial status</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-success\">Fixed:</em> Default sorting order on some pages</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><i class=\"fa fa-pencil text-primary\"></i> Files changed:</h4>

\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/catalog/*_ext.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/marketing/*_ext.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/module/admin_quick_edit.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/sale/*_ext.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/model/catalog/category_ext.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/model/catalog/recurring_ext.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/model/catalog/review_ext.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/model/marketing/coupon_ext.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/catalog/aqe/category_ext_list.tpl</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/module/admin_quick_edit.tpl</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>vqmod/xml/admin_quick_edit.xml</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"release\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>Version 5.0.0 <small class=\"release-date text-muted\">15 Mar 2015</small></h3>

\t\t\t\t\t\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-primary\">New:</em> Marketing -> Marketing page quick editing</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-primary\">New:</em> Catalog -> Categories page description quick editing</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-primary\">New:</em> Catalog -> Information page description quick editing</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-info\">Changed:</em> Refactored codebase</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><i class=\"fa fa-pencil text-primary\"></i> Files changed:</h4>

\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/catalog/product_ext.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/module/admin_quick_edit.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/english/module/admin_quick_edit.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/model/catalog/product_ext.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/catalog/aqe/*.tpl</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/module/admin_quick_edit.tpl</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/sale/aqe/*.tpl</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>system/helper/aqe.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>vqmod/xml/admin_quick_edit.xml</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><i class=\"fa fa-plus text-success\"></i> Files added:</h4>

\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/catalog/*_ext.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/marketing/*_ext.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/sale/*_ext.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/english/catalog/*_ext.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/english/catalog/qe_general.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/english/marketing/*_ext.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/english/marketing/qe_general.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/english/sale/*_ext.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/english/sale/qe_general.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/model/catalog/*_ext.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/model/marketing/*_ext.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/model/sale/*_ext.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/javascript/aqe/catalog.min.js</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/javascript/aqe/module.min.js</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/stylesheet/aqe/css/catalog.min.css</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/stylesheet/aqe/css/module.min.css</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/marketing/aqe/*.tpl</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/sale/aqe/quick_edit_form.tpl</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><i class=\"fa fa-minus text-danger\"></i> Files removed:</h4>

\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/javascript/aqe/catalog.custom.min.js</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/javascript/aqe/jquery.jeditable.min.js</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/javascript/aqe/module.custom.min.js</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/stylesheet/aqe/css/catalog.custom.min.css</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/stylesheet/aqe/css/module.custom.min.css</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/stylesheet/aqe/fonts/*</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/catalog/aqe/profile_ext_list.tpl</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/sale/aqe/affiliate_ext_list.tpl</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/sale/aqe/coupon_ext_list.tpl</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/sale/aqe/order_ext_list.tpl</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"release\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>Version 4.0.2 <small class=\"release-date text-muted\">28 Feb 2015</small></h3>

\t\t\t\t\t\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-success\">Fixed:</em> Catalog -> Category page multilingual SEO keyword quick editing</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><i class=\"fa fa-pencil text-primary\"></i> Files changed:</h4>

\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/module/admin_quick_edit.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/module/admin_quick_edit.tpl</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>vqmod/xml/admin_quick_edit.xml</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"release\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>Version 4.0.1 <small class=\"release-date text-muted\">23 Sep 2014</small></h3>

\t\t\t\t\t\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-success\">Fixed:</em> Product option batch editing</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><i class=\"fa fa-pencil text-primary\"></i> Files changed:</h4>

\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/module/admin_quick_edit.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/model/catalog/product_ext.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/module/admin_quick_edit.tpl</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>vqmod/xml/admin_quick_edit.xml</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"release\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>Version 4.0.0 <small class=\"release-date text-muted\">07 Sep 2014</small></h3>

\t\t\t\t\t\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-primary\">New:</em> Batch editing on all pages</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-primary\">New:</em> Basic support for multilingual SEO keywords</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-primary\">New:</em> Revamped module admin interface</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-success\">Fixed:</em> SEO results are only included when SEO Keyword column is displayed</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><i class=\"fa fa-pencil text-primary\"></i> Files changed:</h4>

\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/catalog/product_ext.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/module/admin_quick_edit.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/english/module/admin_quick_edit.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/model/catalog/product_ext.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/module/admin_quick_edit.tpl</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>vqmod/xml/admin_quick_edit.xml</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><i class=\"fa fa-plus text-success\"></i> Files added:</h4>

\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/javascript/aqe/*</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/stylesheet/aqe/*</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>system/helper/aqe.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/catalog/aqe/*</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/sale/aqe/*</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>system/helper/aqe.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><i class=\"fa fa-minus text-danger\"></i> Files removed:</h4>

\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/image/aqe-pro/*</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/javascript/admin.quick.edit.pro.js</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/javascript/jquery.jeditable.js</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/javascript/ui/themes/smoothness/images/*</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/static/bull5i_module_admin_quick_edit_pro_extension_help.htm</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/stylesheet/module_admin_quick_edit_style.css</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/catalog/product_list_ext.tpl</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/catalog/product_quick_form.tpl</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/catalog/profile_list_ext.tpl</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/catalog/quick_edit_form.tpl</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"release\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>Version 3.5.4 <small class=\"release-date text-muted\">10 Feb 2014</small></h3>

\t\t\t\t\t\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-success\">Fixed:</em> OpenBay update on quantity change</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-info\">Changed:</em> Improved Apply button on module settings page</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><i class=\"fa fa-pencil text-primary\"></i> Files changed:</h4>

\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/catalog/product_ext.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/module/admin_quick_edit.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/module/admin_quick_edit.tpl</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>vqmod/xml/admin_quick_edit.xml</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"release\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>Version 3.5.3 <small class=\"release-date text-muted\">07 Feb 2014</small></h3>

\t\t\t\t\t\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-success\">Fixed:</em> Array to string conversion notice on sale -> Orders page</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><i class=\"fa fa-pencil text-primary\"></i> Files changed:</h4>

\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/module/admin_quick_edit.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>vqmod/xml/admin_quick_edit.xml</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"release\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>Version 3.5.2 <small class=\"release-date text-muted\">18 Dec 2013</small></h3>

\t\t\t\t\t\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-success\">Fixed:</em> Catalog -> Category page displaying incorrect values</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><i class=\"fa fa-pencil text-primary\"></i> Files changed:</h4>

\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/module/admin_quick_edit.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>vqmod/xml/admin_quick_edit.xml</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"release\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>Version 3.5.1 <small class=\"release-date text-muted\">11 Dec 2013</small></h3>

\t\t\t\t\t\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-success\">Fixed:</em> Active special price calculation error</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-success\">Fixed:</em> Link to manufacturer page in store front</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-success\">Fixed:</em> Filter sort order on orders page</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-success\">Fixed:</em> A minor JS bug</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><i class=\"fa fa-pencil text-primary\"></i> Files changed:</h4>

\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/catalog/product_ext.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/module/admin_quick_edit.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/javascript/admin.quick.edit.pro.js</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/catalog/product_list_ext.tpl</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>vqmod/xml/admin_quick_edit.xml</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"release\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>Version 3.5.0 <small class=\"release-date text-muted\">16 Oct 2013</small></h3>

\t\t\t\t\t\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-primary\">New:</em> Product filtering based on special price status (active, expired or future special price)</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-primary\">New:</em> 'Date Modified' column to Catalog -> Product page</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><i class=\"fa fa-pencil text-primary\"></i> Files changed:</h4>

\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/catalog/product_ext.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/module/admin_quick_edit.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/model/catalog/product_ext.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/javascript/admin.quick.edit.pro.js</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/stylesheet/module_admin_quick_edit_style.css</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/catalog/product_list_ext.tpl</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>vqmod/xml/admin_quick_edit.xml</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"release\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>Version 3.4.6 <small class=\"release-date text-muted\">22 Sep 2013</small></h3>

\t\t\t\t\t\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-success\">Fixed:</em> Filtering by Customer Group on Customer page</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-success\">Fixed:</em> Date value parsing in various places</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><i class=\"fa fa-pencil text-primary\"></i> Files changed:</h4>

\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/catalog/product_ext.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/module/admin_quick_edit.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>vqmod/xml/admin_quick_edit.xml</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"release\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>Version 3.4.5 <small class=\"release-date text-muted\">24 Jul 2013</small></h3>

\t\t\t\t\t\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-success\">Fixed:</em> Undefined 'filter_return_action' index PHP notice in admin/model/sale/return.phps</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><i class=\"fa fa-pencil text-primary\"></i> Files changed:</h4>

\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/module/admin_quick_edit.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>vqmod/xml/admin_quick_edit.xml</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"release\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>Version 3.4.4 <small class=\"release-date text-muted\">08 Jul 2013</small></h3>

\t\t\t\t\t\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-success\">Fixed:</em> Undefined 'name' index PHP notice when product name was not displayed</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><i class=\"fa fa-pencil text-primary\"></i> Files changed:</h4>

\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/catalog/product_ext.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/module/admin_quick_edit.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>vqmod/xml/admin_quick_edit.xml</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"release\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>Version 3.4.3 <small class=\"release-date text-muted\">16 Apr 2013</small></h3>

\t\t\t\t\t\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-success\">Fixed:</em> EAN, JAN, MPN, ISBN quick editing</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><i class=\"fa fa-pencil text-primary\"></i> Files changed:</h4>

\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/module/admin_quick_edit.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/model/catalog/product_ext.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>vqmod/xml/admin_quick_edit.xml</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"release\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>Version 3.4.2 <small class=\"release-date text-muted\">08 Apr 2013</small></h3>

\t\t\t\t\t\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-success\">Fixed:</em> Some missing SQL table prefixes</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><i class=\"fa fa-pencil text-primary\"></i> Files changed:</h4>

\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/module/admin_quick_edit.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/model/catalog/product_ext.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>vqmod/xml/admin_quick_edit.xml</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"release\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>Version 3.4.1 <small class=\"release-date text-muted\">27 Mar 2013</small></h3>

\t\t\t\t\t\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-success\">Fixed:</em> Product attribute quick edit was not displaying attribute name</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-success\">Fixed:</em> A spelling typo</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><i class=\"fa fa-pencil text-primary\"></i> Files changed:</h4>

\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/catalog/product_ext.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/module/admin_quick_edit.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>vqmod/xml/admin_quick_edit.xml</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"release\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>Version 3.4.0 <small class=\"release-date text-muted\">31 Jan 2013</small></h3>

\t\t\t\t\t\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-primary\">New:</em> Filters quick edit</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-info\">Changed:</em> Improved quick edit feedback</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><i class=\"fa fa-pencil text-primary\"></i> Files changed:</h4>

\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/catalog/product_ext.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/module/admin_quick_edit.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/english/module/admin_quick_edit.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/model/catalog/product_ext.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/javascript/admin.quick.edit.pro.js</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/javascript/jquery.jeditable.js</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/stylesheet/module_admin_quick_edit_style.css</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/catalog/product_list_ext.tpl</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/catalog/product_quick_form.tpl</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/catalog/quick_edit_form.tpl</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/module/admin_quick_edit.tpl</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>vqmod/xml/admin_quick_edit.xml</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><i class=\"fa fa-plus text-success\"></i> Files added:</h4>

\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/static/bull5i_module_admin_quick_edit_pro_extension_help.htm</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/static/bull5i_module_admin_quick_edit_pro_extension_terms.htm</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><i class=\"fa fa-minus text-danger\"></i> Files removed:</h4>

\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/static/rmg_extension_help.htm</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/static/rmg_extension_terms.htm</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"release\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>Version 3.3.2 <small class=\"release-date text-muted\">14 Jan 2013</small></h3>

\t\t\t\t\t\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-success\">Fixed:</em> Product copy &amp; delete errors</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><i class=\"fa fa-pencil text-primary\"></i> Files changed:</h4>

\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/catalog/product_ext.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/module/admin_quick_edit.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>vqmod/xml/admin_quick_edit.xml</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"release\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>Version 3.3.1 <small class=\"release-date text-muted\">07 Jan 2013</small></h3>

\t\t\t\t\t\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-success\">Fixed:</em> Product cache not cleared</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-info\">Changed:</em> Improved CSS &amp; JS interoperability</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><i class=\"fa fa-pencil text-primary\"></i> Files changed:</h4>

\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/catalog/product_ext.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/module/admin_quick_edit.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/model/catalog/product_ext.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>vqmod/xml/admin_quick_edit.xml</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"release\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>Version 3.3.0 <small class=\"release-date text-muted\">15 Oct 2012</small></h3>

\t\t\t\t\t\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-primary\">New:</em> HTML documentation</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-primary\">New:</em> Made product descriptions, tags, categories, stores, downloads, attributes, discounts, additional images, options, specials and related products quick editable on Catalog -> Product page</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-primary\">New:</em> AceShop support</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-success\">Fixed:</em> Conflict with Shoppica 2 admin panel</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-info\">Changed:</em> Few more data integrity validations</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-info\">Changed:</em> Improved interval filtering</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><i class=\"fa fa-pencil text-primary\"></i> Files changed:</h4>

\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/module/admin_quick_edit.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/english/module/admin_quick_edit.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/javascript/admin.quick.edit.pro.js</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/stylesheet/module_admin_quick_edit_style.css</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/module/admin_quick_edit.tpl</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>vqmod/xml/admin_quick_edit.xml</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><i class=\"fa fa-plus text-success\"></i> Files added:</h4>

\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/catalog/product_ext.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/model/catalog/product_ext.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/image/aqe-pro/module_admin_quick_edit_image_loading.gif</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/image/aqe-pro/module_admin_quick_edit_loading.gif</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/image/aqe-pro/glyphicons-halflings.png</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/javascript/jquery.jeditable.js</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/javascript/ui/themes/smoothness/images/calendar.gif</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/javascript/ui/themes/smoothness/images/ui-bg_glass_75_e6e6e6_1x400.png</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/javascript/ui/themes/smoothness/images/ui-icons_888888_256x240.png</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/catalog/product_list_ext.tpl</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/catalog/product_quick_form.tpl</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/catalog/quick_edit_form.tpl</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><i class=\"fa fa-minus text-danger\"></i> Files removed:</h4>

\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/image/module_admin_quick_edit_image_loading.gif</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/image/module_admin_quick_edit_loading.gif</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/javascript/jquery/jquery.jeditable.js</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/javascript/jquery/ui/themes/smoothness/images/calendar.gif</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/javascript/jquery/ui/themes/smoothness/images/ui-bg_glass_75_e6e6e6_1x400.png</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/javascript/jquery/ui/themes/smoothness/images/ui-icons_888888_256x240.png</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"release\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>Version 3.2.2 <small class=\"release-date text-muted\">11 Jul 2012</small></h3>

\t\t\t\t\t\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-success\">Fixed:</em> sale -> Returns page undefined variable notices</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><i class=\"fa fa-pencil text-primary\"></i> Files changed:</h4>

\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/module/admin_quick_edit.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>vqmod/xml/admin_quick_edit.xml</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"release\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>Version 3.2.1 <small class=\"release-date text-muted\">27 Jun 2012</small></h3>

\t\t\t\t\t\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-success\">Fixed:</em> Product image update validation error</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><i class=\"fa fa-pencil text-primary\"></i> Files changed:</h4>

\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/module/admin_quick_edit.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/javascript/admin.quick.edit.pro.js</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>vqmod/xml/admin_quick_edit.xml</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"release\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>Version 3.2.0 <small class=\"release-date text-muted\">06 Jun 2012</small></h3>

\t\t\t\t\t\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-primary\">New:</em> Image quick editing</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><i class=\"fa fa-pencil text-primary\"></i> Files changed:</h4>

\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/module/admin_quick_edit.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/english/module/admin_quick_edit.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/module/admin_quick_edit.tpl</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>vqmod/xml/admin_quick_edit.xml</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><i class=\"fa fa-plus text-success\"></i> Files added:</h4>

\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/image/module_admin_quick_edit_image_loading.gif</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"release\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>Version 3.1.0 <small class=\"release-date text-muted\">05 Jun 2012</small></h3>

\t\t\t\t\t\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-primary\">New:</em> Bottom quick editable field to Catalog -> Information list page (for OC 1.5.3.x)</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-primary\">New:</em> Filename column to Download list page and made Mask quick editable (for OC 1.5.3.x)</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-primary\">New:</em> Option to choose between single and double click quick editing</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-success\">Fixed:</em> sale -> Affiliates page quick edit</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><i class=\"fa fa-pencil text-primary\"></i> Files changed:</h4>

\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/module/admin_quick_edit.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/english/module/admin_quick_edit.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/module/admin_quick_edit.tpl</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>vqmod/xml/admin_quick_edit.xml</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"release\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>Version 3.0.1 <small class=\"release-date text-muted\">14 May 2012</small></h3>

\t\t\t\t\t\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-success\">Fixed:</em> Undefined variable notices in the product/affiliate/customer/return edit pages</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><i class=\"fa fa-pencil text-primary\"></i> Files changed:</h4>

\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/module/admin_quick_edit.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>vqmod/xml/admin_quick_edit.xml</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"release\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>Version 3.0.0 <small class=\"release-date text-muted\">07 May 2012</small></h3>

\t\t\t\t\t\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-primary\">New:</em> Option to match filter string anywhere in the phrase (just like OC 1.4.9 used to)</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-primary\">New:</em> Option to alter row colours and hover highlighting (pure CSS3)</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-primary\">New:</em> Duplicate SEO keyword check</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-primary\">New:</em> Quick editing for Returns, Affiliates, Vouchers and Voucher Themes</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-primary\">New:</em> Links to the store front for products, categories, manufacturers and information (multistore support)</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-primary\">New:</em> Interval filtering for numeric filters</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-success\">Fixed:</em> Some additional filtering issues</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-success\">Fixed:</em> Customer name quick editing</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-info\">Changed:</em> Refactored the code &amp; fixed some minor OC bugs</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><i class=\"fa fa-pencil text-primary\"></i> Files changed:</h4>

\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/module/admin_quick_edit.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/english/module/admin_quick_edit.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/javascript/admin.quick.edit.pro.js</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/javascript/jquery/jquery.jeditable.js</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/stylesheet/module_admin_quick_edit_style.css</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/module/admin_quick_edit.tpl</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>vqmod/xml/admin_quick_edit.xml</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><i class=\"fa fa-plus text-success\"></i> Files added:</h4>

\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/image/module_admin_quick_edit_loading.gif</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"release\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>Version 2.3.2 <small class=\"release-date text-muted\">26 Apr 2012</small></h3>

\t\t\t\t\t\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-success\">Fixed:</em> sale -> Customers filtering issue</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><i class=\"fa fa-pencil text-primary\"></i> Files changed:</h4>

\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/module/admin_quick_edit.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>vqmod/xml/admin_quick_edit.xml</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"release\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>Version 2.3.1 <small class=\"release-date text-muted\">05 Apr 2012</small></h3>

\t\t\t\t\t\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-info\">Changed:</em> Improved page load speed a bit by optimizing total count sql query</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><i class=\"fa fa-pencil text-primary\"></i> Files changed:</h4>

\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/module/admin_quick_edit.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>vqmod/xml/admin_quick_edit.xml</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"release\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>Version 2.3.0 <small class=\"release-date text-muted\">09 Mar 2012</small></h3>

\t\t\t\t\t\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-primary\">New:</em> Tax Class, Minimum Quantity, Subtract Stock, Out of Stock Status, Requires Shipping, Date Available, Length, Width, Height, Length Class, Weight Class and Points quick editing fields to Catalog -> Product page</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-info\">Changed:</em> Updated extension help section</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><i class=\"fa fa-pencil text-primary\"></i> Files changed:</h4>

\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/module/admin_quick_edit.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/english/module/admin_quick_edit.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/javascript/admin.quick.edit.pro.js</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/javascript/jquery/jquery.jeditable.js</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/static/rmg_extension_help.htm</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/stylesheet/module_admin_quick_edit_style.css</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/module/admin_quick_edit.tpl</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>vqmod/xml/admin_quick_edit.xml</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"release\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>Version 2.2.0 <small class=\"release-date text-muted\">16 Feb 2012</small></h3>

\t\t\t\t\t\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-primary\">New:</em> Extension and support info on module settings page</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><i class=\"fa fa-pencil text-primary\"></i> Files changed:</h4>

\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/module/admin_quick_edit.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/english/module/admin_quick_edit.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/module/admin_quick_edit.tpl</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>vqmod/xml/admin_quick_edit.xml</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><i class=\"fa fa-plus text-success\"></i> Files added:</h4>

\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/image/aqe-pro/extension_logo.png</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/static/rmg_extension_help.htm</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/static/rmg_extension_terms.htm</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"release\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>Version 2.1.1 <small class=\"release-date text-muted\">05 Dec 2011</small></h3>

\t\t\t\t\t\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-info\">Changed:</em> Refactored the code a bit (functionality unchanged)</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><i class=\"fa fa-pencil text-primary\"></i> Files changed:</h4>

\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/module/admin_quick_edit.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>vqmod/xml/admin_quick_edit.xml</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"release\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>Version 2.1.0 <small class=\"release-date text-muted\">04 Dec 2011</small></h3>

\t\t\t\t\t\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-primary\">New:</em> Option to switch to single (admin default) language editing for names</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><i class=\"fa fa-pencil text-primary\"></i> Files changed:</h4>

\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/module/admin_quick_edit.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/english/module/admin_quick_edit.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/javascript/jquery/jquery.jeditable.js</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/stylesheet/module_admin_quick_edit_style.css</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/module/admin_quick_edit.tpl</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>vqmod/xml/admin_quick_edit.xml</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"release\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>Version 2.0.3 <small class=\"release-date text-muted\">29 Nov 2011</small></h3>

\t\t\t\t\t\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-success\">Fixed:</em> Single quote escaping problem</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><i class=\"fa fa-pencil text-primary\"></i> Files changed:</h4>

\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/module/admin_quick_edit.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/javascript/jquery/jquery.jeditable.js</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>vqmod/xml/admin_quick_edit.xml</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"release\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>Version 2.0.2 <small class=\"release-date text-muted\">23 Nov 2011</small></h3>

\t\t\t\t\t\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-success\">Fixed:</em> Filtering of products without a category</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><i class=\"fa fa-pencil text-primary\"></i> Files changed:</h4>

\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/module/admin_quick_edit.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>vqmod/xml/admin_quick_edit.xml</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"release\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>Version 2.0.1 <small class=\"release-date text-muted\">22 Nov 2011</small></h3>

\t\t\t\t\t\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-success\">Fixed:</em> Filtering for Catalog->Products if Status column was not displayed</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><i class=\"fa fa-pencil text-primary\"></i> Files changed:</h4>

\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/module/admin_quick_edit.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>vqmod/xml/admin_quick_edit.xml</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"release\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>Version 2.0.0 <small class=\"release-date text-muted\">10 Nov 2011</small></h3>

\t\t\t\t\t\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-primary\">New:</em> Quick edit capabilities on Sale->Orders, Sale->Customers and Sale->Coupons pages</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><em class=\"text-info\">Changed:</em> Improved quick editing user experience</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><i class=\"fa fa-pencil text-primary\"></i> Files changed:</h4>

\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/controller/module/admin_quick_edit.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/language/english/module/admin_quick_edit.php</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/javascript/jquery/jquery.jeditable.js</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/stylesheet/module_admin_quick_edit_style.css</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>admin/view/template/module/admin_quick_edit.tpl</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>vqmod/xml/admin_quick_edit.xml</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"release\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3>Version 1.0.0 <small class=\"release-date text-muted\">03 Nov 2011</small></h3>

\t\t\t\t\t\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>Initial release</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</form>
\t</div>
</div>
<script type=\"text/javascript\"><!--
!function(e,t,a){var o;e.texts=t.extend({},e.texts,{error_ajax_request:\"";
        // line 3452
        echo addslashes(($context["error_ajax_request"] ?? null));
        echo "\",error_image_width:\"";
        echo addslashes(($context["error_image_width"] ?? null));
        echo "\",error_image_height:\"";
        echo addslashes(($context["error_image_height"] ?? null));
        echo "\"}),t(\".sortable\").sortable({containerSelector:\"table\",itemPath:\"> tbody\",itemSelector:\"tr\",placeholder:'<tr class=\"placeholder\"/>',distance:5,onDragStart:function(e,a,o,s){e.children().each(function(){t(this).width(t(this).width())}),e.addClass(\"dragged\"),t(\"body\").addClass(\"dragging\")},onDrag:function(e,t,a,o){t.left=0,e.css(t)},onDrop:function(e,a,o,s){e.children().each(function(){t(this).removeAttr(\"style\")}),e.removeClass(\"dragged\").removeAttr(\"style\"),t(\"body\").removeClass(\"dragging\"),t(\"tbody tr\",t(a.el[0])).each(function(e){ko.dataFor(this).index(e)})}}),e.load_service_list=function(e){e=void 0!==e?1*e:0;var a=t.Deferred();return o.service_list_loaded()&&!e||o.service_list_loading()?a.reject():(o.service_list_loading(!0),t.when(t.ajax({url:\"";
        echo ($context["services"] ?? null);
        echo "\",data:{force:e},dataType:\"json\"})).then(function(e){o.service_list_loaded(!0),o.service_list_loading(!1),o.clearServices(),e.services&&t.each(e.services,function(e,t){var a=t.code,s=t.name,r=t.description||\"\",_=t.currency,i=t.price,n=t.turnaround;o.addService(a,s,r,_,i,n)}),e.rate&&t(\"#hourly_rate\").html(e.rate),a.resolve()},function(e,t,s){o.service_list_loaded(!0),o.service_list_loading(!1),a.reject(),window.console&&window.console.log&&window.console.log(\"Failed to load services list: \"+s)})),a.promise()};var s=function(e){isNaN(parseInt(e))||parseInt(e)<0?(this.target.hasError(!0),this.target.errorMsg(this.message)):(this.target.hasError(!1),this.target.errorMsg(\"\"))},r=function(e,t,a,o,s,r){this.code=e,this.name=t,this.description=a,this.currency=o,this.price=s,this.turnaround=r},_=function(e,t,a,o,s,r){this.column=e,this.index=ko.observable(t),this.name=a,this.editable=ko.observable(o),this.visible=ko.observable(s),this.quick_editable=r},i=function(){var a=this;this.status=ko.observable(\"";
        echo ($context["module_admin_quick_edit_status"] ?? null);
        echo "\"),this.override_menu_entry=ko.observable(\"";
        echo ($context["module_admin_quick_edit_override_menu_entry"] ?? null);
        echo "\"),this.match_anywhere=ko.observable(\"";
        echo ($context["module_admin_quick_edit_match_anywhere"] ?? null);
        echo "\"),this.alternate_row_colour=ko.observable(\"";
        echo ($context["module_admin_quick_edit_alternate_row_colour"] ?? null);
        echo "\"),this.row_hover_highlighting=ko.observable(\"";
        echo ($context["module_admin_quick_edit_row_hover_highlighting"] ?? null);
        echo "\"),this.highlight_status=ko.observable(\"";
        echo ($context["module_admin_quick_edit_highlight_status"] ?? null);
        echo "\"),this.highlight_yes_no=ko.observable(\"";
        echo ($context["module_admin_quick_edit_highlight_yes_no"] ?? null);
        echo "\"),this.highlight_actions=ko.observable(\"";
        echo ($context["module_admin_quick_edit_highlight_actions"] ?? null);
        echo "\"),this.interval_filter=ko.observable(\"";
        echo ($context["module_admin_quick_edit_interval_filter"] ?? null);
        echo "\"),this.batch_edit=ko.observable(\"";
        echo ($context["module_admin_quick_edit_batch_edit"] ?? null);
        echo "\"),this.quick_edit_on=ko.observable(\"";
        echo ($context["module_admin_quick_edit_quick_edit_on"] ?? null);
        echo "\"),this.price_relative_to=ko.observable(\"";
        echo ($context["module_admin_quick_edit_price_relative_to"] ?? null);
        echo "\"),this.list_view_image_width=ko.observable(\"";
        echo (($context["module_admin_quick_edit_list_view_image_width"] ?? null) * 1);
        echo "\").extend({numeric:{precision:0,context:a},validate:{message:e.texts.error_image_width,context:a,method:s}}),this.list_view_image_height=ko.observable(\"";
        echo (($context["module_admin_quick_edit_list_view_image_height"] ?? null) * 1);
        echo "\").extend({numeric:{precision:0,context:a},validate:{message:e.texts.error_image_height,context:a,method:s}}),this.single_language_editing=ko.observable(\"";
        echo ($context["module_admin_quick_edit_single_language_editing"] ?? null);
        echo "\"),this.general_errors=ko.computed(function(){return a.list_view_image_width.hasError()||a.list_view_image_height.hasError()}),this.catalog_categories_status=ko.observable(\"";
        echo ($context["module_admin_quick_edit_catalog_categories_status"] ?? null);
        echo "\"),this.catalog_categories_default_sort=ko.observable(\"";
        echo ($context["module_admin_quick_edit_catalog_categories_default_sort"] ?? null);
        echo "\"),this.catalog_categories_default_order=ko.observable(\"";
        echo ($context["module_admin_quick_edit_catalog_categories_default_order"] ?? null);
        echo "\"),this.catalog_categories=ko.observableArray(t.map(";
        echo json_encode(($context["module_admin_quick_edit_catalog_categories"] ?? null));
        echo ",function(e,t){return new _(t,e.hasOwnProperty(\"index\")?e.index:0,e.hasOwnProperty(\"name\")?e.name:\"<unknown>\",e.hasOwnProperty(\"qe_status\")?e.qe_status:1,e.hasOwnProperty(\"display\")?e.display:1,e.hasOwnProperty(\"editable\")?e.editable:1)})),this.catalog_products_status=ko.observable(\"";
        echo ($context["module_admin_quick_edit_catalog_products_status"] ?? null);
        echo "\"),this.catalog_products_default_sort=ko.observable(\"";
        echo ($context["module_admin_quick_edit_catalog_products_default_sort"] ?? null);
        echo "\"),this.catalog_products_default_order=ko.observable(\"";
        echo ($context["module_admin_quick_edit_catalog_products_default_order"] ?? null);
        echo "\"),this.catalog_products=ko.observableArray(t.map(";
        echo json_encode(($context["module_admin_quick_edit_catalog_products"] ?? null));
        echo ",function(e,t){return new _(t,e.hasOwnProperty(\"index\")?e.index:0,e.hasOwnProperty(\"name\")?e.name:\"<unknown>\",e.hasOwnProperty(\"qe_status\")?e.qe_status:1,e.hasOwnProperty(\"display\")?e.display:1,e.hasOwnProperty(\"editable\")?e.editable:1)})),this.catalog_products_actions=ko.observableArray(t.map(";
        echo json_encode(($context["module_admin_quick_edit_catalog_products_actions"] ?? null));
        echo ",function(e,t){return new _(t,e.hasOwnProperty(\"index\")?e.index:0,e.hasOwnProperty(\"name\")?e.name:\"<unknown>\",e.hasOwnProperty(\"qe_status\")?e.qe_status:1,e.hasOwnProperty(\"display\")?e.display:1,e.hasOwnProperty(\"editable\")?e.editable:1)})),this.catalog_products_filter_sub_category=ko.observable(\"";
        echo ($context["module_admin_quick_edit_catalog_products_filter_sub_category"] ?? null);
        echo "\"),this.catalog_recurrings_status=ko.observable(\"";
        echo ($context["module_admin_quick_edit_catalog_recurrings_status"] ?? null);
        echo "\"),this.catalog_recurrings_default_sort=ko.observable(\"";
        echo ($context["module_admin_quick_edit_catalog_recurrings_default_sort"] ?? null);
        echo "\"),this.catalog_recurrings_default_order=ko.observable(\"";
        echo ($context["module_admin_quick_edit_catalog_recurrings_default_order"] ?? null);
        echo "\"),this.catalog_recurrings=ko.observableArray(t.map(";
        echo json_encode(($context["module_admin_quick_edit_catalog_recurrings"] ?? null));
        echo ",function(e,t){return new _(t,e.hasOwnProperty(\"index\")?e.index:0,e.hasOwnProperty(\"name\")?e.name:\"<unknown>\",e.hasOwnProperty(\"qe_status\")?e.qe_status:1,e.hasOwnProperty(\"display\")?e.display:1,e.hasOwnProperty(\"editable\")?e.editable:1)})),this.catalog_filters_status=ko.observable(\"";
        echo ($context["module_admin_quick_edit_catalog_filters_status"] ?? null);
        echo "\"),this.catalog_filters_default_sort=ko.observable(\"";
        echo ($context["module_admin_quick_edit_catalog_filters_default_sort"] ?? null);
        echo "\"),this.catalog_filters_default_order=ko.observable(\"";
        echo ($context["module_admin_quick_edit_catalog_filters_default_order"] ?? null);
        echo "\"),this.catalog_filters=ko.observableArray(t.map(";
        echo json_encode(($context["module_admin_quick_edit_catalog_filters"] ?? null));
        echo ",function(e,t){return new _(t,e.hasOwnProperty(\"index\")?e.index:0,e.hasOwnProperty(\"name\")?e.name:\"<unknown>\",e.hasOwnProperty(\"qe_status\")?e.qe_status:1,e.hasOwnProperty(\"display\")?e.display:1,e.hasOwnProperty(\"editable\")?e.editable:1)})),this.catalog_attributes_status=ko.observable(\"";
        echo ($context["module_admin_quick_edit_catalog_attributes_status"] ?? null);
        echo "\"),this.catalog_attributes_default_sort=ko.observable(\"";
        echo ($context["module_admin_quick_edit_catalog_attributes_default_sort"] ?? null);
        echo "\"),this.catalog_attributes_default_order=ko.observable(\"";
        echo ($context["module_admin_quick_edit_catalog_attributes_default_order"] ?? null);
        echo "\"),this.catalog_attributes=ko.observableArray(t.map(";
        echo json_encode(($context["module_admin_quick_edit_catalog_attributes"] ?? null));
        echo ",function(e,t){return new _(t,e.hasOwnProperty(\"index\")?e.index:0,e.hasOwnProperty(\"name\")?e.name:\"<unknown>\",e.hasOwnProperty(\"qe_status\")?e.qe_status:1,e.hasOwnProperty(\"display\")?e.display:1,e.hasOwnProperty(\"editable\")?e.editable:1)})),this.catalog_attribute_groups_status=ko.observable(\"";
        echo ($context["module_admin_quick_edit_catalog_attribute_groups_status"] ?? null);
        echo "\"),this.catalog_attribute_groups_default_sort=ko.observable(\"";
        echo ($context["module_admin_quick_edit_catalog_attribute_groups_default_sort"] ?? null);
        echo "\"),this.catalog_attribute_groups_default_order=ko.observable(\"";
        echo ($context["module_admin_quick_edit_catalog_attribute_groups_default_order"] ?? null);
        echo "\"),this.catalog_attribute_groups=ko.observableArray(t.map(";
        echo json_encode(($context["module_admin_quick_edit_catalog_attribute_groups"] ?? null));
        echo ",function(e,t){return new _(t,e.hasOwnProperty(\"index\")?e.index:0,e.hasOwnProperty(\"name\")?e.name:\"<unknown>\",e.hasOwnProperty(\"qe_status\")?e.qe_status:1,e.hasOwnProperty(\"display\")?e.display:1,e.hasOwnProperty(\"editable\")?e.editable:1)})),this.catalog_options_status=ko.observable(\"";
        echo ($context["module_admin_quick_edit_catalog_options_status"] ?? null);
        echo "\"),this.catalog_options_default_sort=ko.observable(\"";
        echo ($context["module_admin_quick_edit_catalog_options_default_sort"] ?? null);
        echo "\"),this.catalog_options_default_order=ko.observable(\"";
        echo ($context["module_admin_quick_edit_catalog_options_default_order"] ?? null);
        echo "\"),this.catalog_options=ko.observableArray(t.map(";
        echo json_encode(($context["module_admin_quick_edit_catalog_options"] ?? null));
        echo ",function(e,t){return new _(t,e.hasOwnProperty(\"index\")?e.index:0,e.hasOwnProperty(\"name\")?e.name:\"<unknown>\",e.hasOwnProperty(\"qe_status\")?e.qe_status:1,e.hasOwnProperty(\"display\")?e.display:1,e.hasOwnProperty(\"editable\")?e.editable:1)})),this.catalog_manufacturers_status=ko.observable(\"";
        echo ($context["module_admin_quick_edit_catalog_manufacturers_status"] ?? null);
        echo "\"),this.catalog_manufacturers_default_sort=ko.observable(\"";
        echo ($context["module_admin_quick_edit_catalog_manufacturers_default_sort"] ?? null);
        echo "\"),this.catalog_manufacturers_default_order=ko.observable(\"";
        echo ($context["module_admin_quick_edit_catalog_manufacturers_default_order"] ?? null);
        echo "\"),this.catalog_manufacturers=ko.observableArray(t.map(";
        echo json_encode(($context["module_admin_quick_edit_catalog_manufacturers"] ?? null));
        echo ",function(e,t){return new _(t,e.hasOwnProperty(\"index\")?e.index:0,e.hasOwnProperty(\"name\")?e.name:\"<unknown>\",e.hasOwnProperty(\"qe_status\")?e.qe_status:1,e.hasOwnProperty(\"display\")?e.display:1,e.hasOwnProperty(\"editable\")?e.editable:1)})),this.catalog_downloads_status=ko.observable(\"";
        echo ($context["module_admin_quick_edit_catalog_downloads_status"] ?? null);
        echo "\"),this.catalog_downloads_default_sort=ko.observable(\"";
        echo ($context["module_admin_quick_edit_catalog_downloads_default_sort"] ?? null);
        echo "\"),this.catalog_downloads_default_order=ko.observable(\"";
        echo ($context["module_admin_quick_edit_catalog_downloads_default_order"] ?? null);
        echo "\"),this.catalog_downloads=ko.observableArray(t.map(";
        echo json_encode(($context["module_admin_quick_edit_catalog_downloads"] ?? null));
        echo ",function(e,t){return new _(t,e.hasOwnProperty(\"index\")?e.index:0,e.hasOwnProperty(\"name\")?e.name:\"<unknown>\",e.hasOwnProperty(\"qe_status\")?e.qe_status:1,e.hasOwnProperty(\"display\")?e.display:1,e.hasOwnProperty(\"editable\")?e.editable:1)})),this.catalog_reviews_status=ko.observable(\"";
        echo ($context["module_admin_quick_edit_catalog_reviews_status"] ?? null);
        echo "\"),this.catalog_reviews_default_sort=ko.observable(\"";
        echo ($context["module_admin_quick_edit_catalog_reviews_default_sort"] ?? null);
        echo "\"),this.catalog_reviews_default_order=ko.observable(\"";
        echo ($context["module_admin_quick_edit_catalog_reviews_default_order"] ?? null);
        echo "\"),this.catalog_reviews=ko.observableArray(t.map(";
        echo json_encode(($context["module_admin_quick_edit_catalog_reviews"] ?? null));
        echo ",function(e,t){return new _(t,e.hasOwnProperty(\"index\")?e.index:0,e.hasOwnProperty(\"name\")?e.name:\"<unknown>\",e.hasOwnProperty(\"qe_status\")?e.qe_status:1,e.hasOwnProperty(\"display\")?e.display:1,e.hasOwnProperty(\"editable\")?e.editable:1)})),this.catalog_information_status=ko.observable(\"";
        echo ($context["module_admin_quick_edit_catalog_information_status"] ?? null);
        echo "\"),this.catalog_information_default_sort=ko.observable(\"";
        echo ($context["module_admin_quick_edit_catalog_information_default_sort"] ?? null);
        echo "\"),this.catalog_information_default_order=ko.observable(\"";
        echo ($context["module_admin_quick_edit_catalog_information_default_order"] ?? null);
        echo "\"),this.catalog_information=ko.observableArray(t.map(";
        echo json_encode(($context["module_admin_quick_edit_catalog_information"] ?? null));
        echo ",function(e,t){return new _(t,e.hasOwnProperty(\"index\")?e.index:0,e.hasOwnProperty(\"name\")?e.name:\"<unknown>\",e.hasOwnProperty(\"qe_status\")?e.qe_status:1,e.hasOwnProperty(\"display\")?e.display:1,e.hasOwnProperty(\"editable\")?e.editable:1)})),this.catalog_errors=ko.computed(function(){return!1},a),this.design_seo_urls_status=ko.observable(\"";
        echo ($context["module_admin_quick_edit_design_seo_urls_status"] ?? null);
        echo "\"),this.design_seo_urls_default_sort=ko.observable(\"";
        echo ($context["module_admin_quick_edit_design_seo_urls_default_sort"] ?? null);
        echo "\"),this.design_seo_urls_default_order=ko.observable(\"";
        echo ($context["module_admin_quick_edit_design_seo_urls_default_order"] ?? null);
        echo "\"),this.design_seo_urls=ko.observableArray(t.map(";
        echo json_encode(($context["module_admin_quick_edit_design_seo_urls"] ?? null));
        echo ",function(e,t){return new _(t,e.hasOwnProperty(\"index\")?e.index:0,e.hasOwnProperty(\"name\")?e.name:\"<unknown>\",e.hasOwnProperty(\"qe_status\")?e.qe_status:1,e.hasOwnProperty(\"display\")?e.display:1,e.hasOwnProperty(\"editable\")?e.editable:1)})),this.design_errors=ko.computed(function(){return!1},a),this.customer_customers_status=ko.observable(\"";
        echo ($context["module_admin_quick_edit_customer_customers_status"] ?? null);
        echo "\"),this.customer_customers_default_sort=ko.observable(\"";
        echo ($context["module_admin_quick_edit_customer_customers_default_sort"] ?? null);
        echo "\"),this.customer_customers_default_order=ko.observable(\"";
        echo ($context["module_admin_quick_edit_customer_customers_default_order"] ?? null);
        echo "\"),this.customer_customers=ko.observableArray(t.map(";
        echo json_encode(($context["module_admin_quick_edit_customer_customers"] ?? null));
        echo ",function(e,t){return new _(t,e.hasOwnProperty(\"index\")?e.index:0,e.hasOwnProperty(\"name\")?e.name:\"<unknown>\",e.hasOwnProperty(\"qe_status\")?e.qe_status:1,e.hasOwnProperty(\"display\")?e.display:1,e.hasOwnProperty(\"editable\")?e.editable:1)})),this.customer_errors=ko.computed(function(){return!1},a),this.sale_orders_status=ko.observable(\"";
        echo ($context["module_admin_quick_edit_sale_orders_status"] ?? null);
        echo "\"),this.sale_orders=ko.observableArray(t.map(";
        echo json_encode(($context["module_admin_quick_edit_sale_orders"] ?? null));
        echo ",function(e,t){return new _(t,e.hasOwnProperty(\"index\")?e.index:0,e.hasOwnProperty(\"name\")?e.name:\"<unknown>\",e.hasOwnProperty(\"qe_status\")?e.qe_status:1,e.hasOwnProperty(\"display\")?e.display:1,e.hasOwnProperty(\"editable\")?e.editable:1)})),this.sale_orders_notify_customer=ko.observable(\"";
        echo ($context["module_admin_quick_edit_sale_orders_notify_customer"] ?? null);
        echo "\"),this.sale_returns_status=ko.observable(\"";
        echo ($context["module_admin_quick_edit_sale_returns_status"] ?? null);
        echo "\"),this.sale_returns_default_sort=ko.observable(\"";
        echo ($context["module_admin_quick_edit_sale_returns_default_sort"] ?? null);
        echo "\"),this.sale_returns_default_order=ko.observable(\"";
        echo ($context["module_admin_quick_edit_sale_returns_default_order"] ?? null);
        echo "\"),this.sale_returns=ko.observableArray(t.map(";
        echo json_encode(($context["module_admin_quick_edit_sale_returns"] ?? null));
        echo ",function(e,t){return new _(t,e.hasOwnProperty(\"index\")?e.index:0,e.hasOwnProperty(\"name\")?e.name:\"<unknown>\",e.hasOwnProperty(\"qe_status\")?e.qe_status:1,e.hasOwnProperty(\"display\")?e.display:1,e.hasOwnProperty(\"editable\")?e.editable:1)})),this.sale_returns_notify_customer=ko.observable(\"";
        echo ($context["module_admin_quick_edit_sale_returns_notify_customer"] ?? null);
        echo "\"),this.sale_vouchers_status=ko.observable(\"";
        echo ($context["module_admin_quick_edit_sale_vouchers_status"] ?? null);
        echo "\"),this.sale_vouchers_default_sort=ko.observable(\"";
        echo ($context["module_admin_quick_edit_sale_vouchers_default_sort"] ?? null);
        echo "\"),this.sale_vouchers_default_order=ko.observable(\"";
        echo ($context["module_admin_quick_edit_sale_vouchers_default_order"] ?? null);
        echo "\"),this.sale_vouchers=ko.observableArray(t.map(";
        echo json_encode(($context["module_admin_quick_edit_sale_vouchers"] ?? null));
        echo ",function(e,t){return new _(t,e.hasOwnProperty(\"index\")?e.index:0,e.hasOwnProperty(\"name\")?e.name:\"<unknown>\",e.hasOwnProperty(\"qe_status\")?e.qe_status:1,e.hasOwnProperty(\"display\")?e.display:1,e.hasOwnProperty(\"editable\")?e.editable:1)})),this.sale_voucher_themes_status=ko.observable(\"";
        echo ($context["module_admin_quick_edit_sale_voucher_themes_status"] ?? null);
        echo "\"),this.sale_voucher_themes_default_sort=ko.observable(\"";
        echo ($context["module_admin_quick_edit_sale_voucher_themes_default_sort"] ?? null);
        echo "\"),this.sale_voucher_themes_default_order=ko.observable(\"";
        echo ($context["module_admin_quick_edit_sale_voucher_themes_default_order"] ?? null);
        echo "\"),this.sale_voucher_themes=ko.observableArray(t.map(";
        echo json_encode(($context["module_admin_quick_edit_sale_voucher_themes"] ?? null));
        echo ",function(e,t){return new _(t,e.hasOwnProperty(\"index\")?e.index:0,e.hasOwnProperty(\"name\")?e.name:\"<unknown>\",e.hasOwnProperty(\"qe_status\")?e.qe_status:1,e.hasOwnProperty(\"display\")?e.display:1,e.hasOwnProperty(\"editable\")?e.editable:1)})),this.sale_errors=ko.computed(function(){return!1},a),this.marketing_marketing_status=ko.observable(\"";
        echo ($context["module_admin_quick_edit_marketing_marketing_status"] ?? null);
        echo "\"),this.marketing_marketing_default_sort=ko.observable(\"";
        echo ($context["module_admin_quick_edit_marketing_marketing_default_sort"] ?? null);
        echo "\"),this.marketing_marketing_default_order=ko.observable(\"";
        echo ($context["module_admin_quick_edit_marketing_marketing_default_order"] ?? null);
        echo "\"),this.marketing_marketing=ko.observableArray(t.map(";
        echo json_encode(($context["module_admin_quick_edit_marketing_marketing"] ?? null));
        echo ",function(e,t){return new _(t,e.hasOwnProperty(\"index\")?e.index:0,e.hasOwnProperty(\"name\")?e.name:\"<unknown>\",e.hasOwnProperty(\"qe_status\")?e.qe_status:1,e.hasOwnProperty(\"display\")?e.display:1,e.hasOwnProperty(\"editable\")?e.editable:1)})),this.marketing_coupons_status=ko.observable(\"";
        echo ($context["module_admin_quick_edit_marketing_coupons_status"] ?? null);
        echo "\"),this.marketing_coupons_default_sort=ko.observable(\"";
        echo ($context["module_admin_quick_edit_marketing_coupons_default_sort"] ?? null);
        echo "\"),this.marketing_coupons_default_order=ko.observable(\"";
        echo ($context["module_admin_quick_edit_marketing_coupons_default_order"] ?? null);
        echo "\"),this.marketing_coupons=ko.observableArray(t.map(";
        echo json_encode(($context["module_admin_quick_edit_marketing_coupons"] ?? null));
        echo ",function(e,t){return new _(t,e.hasOwnProperty(\"index\")?e.index:0,e.hasOwnProperty(\"name\")?e.name:\"<unknown>\",e.hasOwnProperty(\"qe_status\")?e.qe_status:1,e.hasOwnProperty(\"display\")?e.display:1,e.hasOwnProperty(\"editable\")?e.editable:1)})),this.marketing_errors=ko.computed(function(){return!1},a),this.settings_errors=ko.computed(function(){var e=!1;for(var t in this)ko.isObservable(a[t])&&\"function\"==typeof a[t].hasError&&(e|=a[t].hasError());return e},a),a.service_list_loaded=ko.observable(!1),a.service_list_loading=ko.observable(!1),a.services=ko.observableArray([]),a.addService=function(e,t,o,s,_,i){a.services.push(new r(e,t,o,s,_,i))},a.clearServices=function(){a.services.removeAll()}};i.prototype=new e.observable_object_methods,t(function(){var a=window.location.hash.split(\"?\")[0];o=e.view_model=new i,e.view_models=t.extend({},e.view_models,{ExtVM:e.view_model}),o.applyErrors(\"";
        echo json_encode(($context["errors"] ?? null));
        echo "\"),ko.applyBindings(o,t(\"#content\")[0]),t(\"#legal_text .modal-body\").load(\"view/template/extension/module/static/bull5i_aqe_pro_extension_terms.htm?v=";
        echo ($context["installed_version"] ?? null);
        echo "\"),t(\"body\").on(\"shown.bs.tab\",\"a[data-toggle='tab'][href='#ext-support'],a[data-toggle='tab'][href='#services']\",function(t){e.load_service_list()}),e.onComplete(t(\"#page-overlay\"),t(\"#content\")),e.loading=!0,e.activateTab(a),e.loading=!1})}(window.bull5i=window.bull5i||{},jQuery);
//--></script>
";
        // line 3454
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "extension/module/admin_quick_edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  5141 => 3454,  4940 => 3452,  3278 => 1793,  3274 => 1792,  3271 => 1791,  3268 => 1790,  3260 => 1787,  3253 => 1786,  3246 => 1785,  3240 => 1784,  3235 => 1782,  3232 => 1781,  3228 => 1780,  3223 => 1779,  3221 => 1778,  3214 => 1774,  3206 => 1769,  3201 => 1767,  3192 => 1763,  3187 => 1761,  3180 => 1757,  3175 => 1755,  3168 => 1751,  3163 => 1749,  3156 => 1745,  3151 => 1743,  3145 => 1740,  3133 => 1731,  3129 => 1730,  3122 => 1726,  3115 => 1722,  3077 => 1691,  3059 => 1678,  3052 => 1674,  3044 => 1669,  3040 => 1668,  3032 => 1665,  3027 => 1663,  3023 => 1662,  2888 => 1532,  2867 => 1516,  2860 => 1512,  2852 => 1511,  2837 => 1499,  2825 => 1490,  2816 => 1484,  2805 => 1478,  2801 => 1477,  2789 => 1470,  2785 => 1469,  2781 => 1468,  2770 => 1460,  2762 => 1459,  2747 => 1447,  2741 => 1446,  2737 => 1445,  2730 => 1441,  2723 => 1437,  2689 => 1406,  2685 => 1405,  2681 => 1404,  2670 => 1398,  2662 => 1393,  2658 => 1392,  2652 => 1388,  2641 => 1386,  2637 => 1385,  2631 => 1382,  2623 => 1377,  2619 => 1376,  2613 => 1373,  2589 => 1352,  2585 => 1351,  2581 => 1350,  2570 => 1344,  2562 => 1339,  2558 => 1338,  2552 => 1334,  2541 => 1332,  2537 => 1331,  2531 => 1328,  2523 => 1323,  2519 => 1322,  2513 => 1319,  2504 => 1313,  2500 => 1312,  2471 => 1286,  2467 => 1285,  2463 => 1284,  2452 => 1278,  2444 => 1273,  2440 => 1272,  2434 => 1268,  2423 => 1266,  2419 => 1265,  2413 => 1262,  2405 => 1257,  2401 => 1256,  2395 => 1253,  2371 => 1232,  2367 => 1231,  2363 => 1230,  2352 => 1224,  2344 => 1219,  2340 => 1218,  2334 => 1214,  2323 => 1212,  2319 => 1211,  2313 => 1208,  2305 => 1203,  2301 => 1202,  2295 => 1199,  2283 => 1190,  2277 => 1187,  2271 => 1184,  2251 => 1167,  2247 => 1166,  2243 => 1165,  2232 => 1159,  2224 => 1154,  2220 => 1153,  2214 => 1149,  2203 => 1147,  2199 => 1146,  2193 => 1143,  2185 => 1138,  2181 => 1137,  2175 => 1134,  2163 => 1125,  2157 => 1122,  2151 => 1119,  2132 => 1103,  2128 => 1102,  2117 => 1096,  2109 => 1091,  2105 => 1090,  2099 => 1087,  2090 => 1081,  2086 => 1080,  2082 => 1079,  2078 => 1078,  2049 => 1052,  2045 => 1051,  2041 => 1050,  2030 => 1044,  2022 => 1039,  2018 => 1038,  2012 => 1034,  2001 => 1032,  1997 => 1031,  1991 => 1028,  1983 => 1023,  1979 => 1022,  1973 => 1019,  1964 => 1013,  1935 => 987,  1931 => 986,  1927 => 985,  1916 => 979,  1908 => 974,  1904 => 973,  1898 => 969,  1887 => 967,  1883 => 966,  1877 => 963,  1869 => 958,  1865 => 957,  1859 => 954,  1850 => 948,  1821 => 922,  1817 => 921,  1813 => 920,  1802 => 914,  1794 => 909,  1790 => 908,  1784 => 904,  1773 => 902,  1769 => 901,  1763 => 898,  1755 => 893,  1751 => 892,  1745 => 889,  1721 => 868,  1717 => 867,  1713 => 866,  1702 => 860,  1694 => 855,  1690 => 854,  1684 => 850,  1673 => 848,  1669 => 847,  1663 => 844,  1655 => 839,  1651 => 838,  1645 => 835,  1621 => 814,  1617 => 813,  1613 => 812,  1602 => 806,  1594 => 801,  1590 => 800,  1584 => 796,  1573 => 794,  1569 => 793,  1563 => 790,  1555 => 785,  1551 => 784,  1545 => 781,  1521 => 760,  1517 => 759,  1513 => 758,  1502 => 752,  1494 => 747,  1490 => 746,  1484 => 742,  1473 => 740,  1469 => 739,  1463 => 736,  1455 => 731,  1451 => 730,  1445 => 727,  1421 => 706,  1417 => 705,  1413 => 704,  1402 => 698,  1394 => 693,  1390 => 692,  1384 => 688,  1373 => 686,  1369 => 685,  1363 => 682,  1355 => 677,  1351 => 676,  1345 => 673,  1321 => 652,  1317 => 651,  1313 => 650,  1302 => 644,  1294 => 639,  1290 => 638,  1284 => 634,  1273 => 632,  1269 => 631,  1263 => 628,  1255 => 623,  1251 => 622,  1245 => 619,  1221 => 598,  1217 => 597,  1213 => 596,  1202 => 590,  1194 => 585,  1190 => 584,  1184 => 580,  1173 => 578,  1169 => 577,  1163 => 574,  1155 => 569,  1151 => 568,  1145 => 565,  1121 => 544,  1117 => 543,  1113 => 542,  1102 => 536,  1094 => 531,  1090 => 530,  1084 => 526,  1073 => 524,  1069 => 523,  1063 => 520,  1055 => 515,  1051 => 514,  1045 => 511,  1021 => 490,  1017 => 489,  1013 => 488,  1002 => 482,  994 => 477,  990 => 476,  984 => 472,  973 => 470,  969 => 469,  963 => 466,  955 => 461,  951 => 460,  945 => 457,  934 => 449,  927 => 445,  921 => 442,  915 => 439,  896 => 423,  892 => 422,  881 => 416,  861 => 399,  857 => 398,  853 => 397,  842 => 391,  834 => 386,  830 => 385,  824 => 381,  813 => 379,  809 => 378,  803 => 375,  795 => 370,  791 => 369,  785 => 366,  761 => 345,  757 => 344,  753 => 343,  742 => 337,  734 => 332,  730 => 331,  724 => 327,  713 => 325,  709 => 324,  703 => 321,  695 => 316,  691 => 315,  685 => 312,  676 => 306,  672 => 305,  668 => 304,  664 => 303,  660 => 302,  656 => 301,  652 => 300,  648 => 299,  644 => 298,  640 => 297,  636 => 296,  610 => 273,  602 => 268,  596 => 265,  590 => 262,  583 => 258,  576 => 254,  572 => 253,  566 => 250,  558 => 245,  554 => 244,  548 => 241,  541 => 237,  534 => 233,  528 => 230,  522 => 227,  515 => 223,  508 => 219,  502 => 216,  496 => 213,  489 => 209,  482 => 205,  476 => 202,  470 => 199,  463 => 195,  456 => 191,  450 => 188,  444 => 185,  437 => 181,  430 => 177,  424 => 174,  418 => 171,  411 => 167,  404 => 163,  398 => 160,  392 => 157,  385 => 153,  378 => 149,  372 => 146,  366 => 143,  359 => 139,  352 => 135,  346 => 132,  340 => 129,  333 => 125,  326 => 121,  320 => 118,  314 => 115,  307 => 111,  301 => 108,  297 => 107,  291 => 104,  277 => 93,  273 => 92,  269 => 91,  265 => 90,  261 => 89,  257 => 88,  250 => 84,  243 => 80,  233 => 73,  227 => 70,  223 => 69,  219 => 68,  208 => 59,  202 => 58,  196 => 57,  188 => 54,  178 => 52,  175 => 51,  170 => 50,  166 => 49,  158 => 43,  147 => 41,  143 => 40,  138 => 38,  131 => 36,  121 => 35,  110 => 34,  98 => 33,  90 => 28,  82 => 23,  74 => 18,  65 => 12,  62 => 11,  58 => 9,  56 => 8,  53 => 7,  51 => 6,  48 => 5,  46 => 4,  43 => 3,  41 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/admin_quick_edit.twig", "");
    }
}
