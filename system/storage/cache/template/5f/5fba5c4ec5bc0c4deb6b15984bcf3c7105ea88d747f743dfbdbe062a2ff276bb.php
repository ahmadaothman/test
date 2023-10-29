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

/* extension/module/modification_manager/form.twig */
class __TwigTemplate_4a927f9929edbb3c31a86241cefff479b3add8d2280062f819f48a27b343df4d extends Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo ($context["header"] ?? null);
        echo " ";
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-modification\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo " \" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
          ";
        // line 7
        if (($context["refresh"] ?? null)) {
            echo " <button type=\"submit\" onclick=\"\$('#form-modification').attr('action', '";
            echo ($context["refresh"] ?? null);
            echo " ').submit()\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_refresh"] ?? null);
            echo " \" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i> + <i class=\"fa fa-refresh\"></i></button>";
        }
        // line 8
        echo "        <a href=\"";
        echo ($context["cancel"] ?? null);
        echo " \" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo " \" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 9
        echo ($context["heading_title"] ?? null);
        echo " </h1>
      <ul class=\"breadcrumb\">
          ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
            echo "            <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 12);
            echo " \">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 12);
            echo " </a></li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
      ";
        // line 18
        if (($context["error_warning"] ?? null)) {
            // line 19
            echo "        <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
          <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        </div>
      ";
        }
        // line 23
        echo "      ";
        if (($context["success"] ?? null)) {
            // line 24
            echo "        <div class=\"alert alert-success\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
          <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        </div>
      ";
        }
        // line 28
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 30
        echo ($context["text_form"] ?? null);
        echo " </h3>
        <i class=\"fa ";
        // line 31
        if (twig_get_attribute($this->env, $this->source, ($context["modification"] ?? null), "status", [], "any", false, false, false, 31)) {
            echo " fa-check-circle-o fa-2x pull-right text-success";
        } else {
            echo "fa-times-circle-o fa-2x pull-right text-danger";
        }
        echo "\" style=\"font-size:2em\" data-toggle=\"tooltip\" title=\"";
        echo ($context["text_enabled"] ?? null);
        echo " \"></i>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 34
        echo ($context["action"] ?? null);
        echo " \" method=\"post\" enctype=\"multipart/form-data\" id=\"form-modification\" class=\"form-horizontal\">
            ";
        // line 35
        if (($context["error_xml"] ?? null)) {
            echo " <div class=\"text-danger\">";
            echo ($context["error_xml"] ?? null);
            echo " </div>";
        }
        // line 36
        echo "          <textarea name=\"xml\" id=\"input-xml\" class=\"form-control\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["modification"] ?? null), "xml", [], "any", false, false, false, 36));
        echo "</textarea>
        </form>
      </div>
    </div>
  </div>
</div>
<style type=\"text/css\">
  #input-xml + .CodeMirror {
    height: auto;
  }
</style>
<script type=\"text/javascript\"><!--
\tvar el = document.getElementById(\"input-xml\");
\tif (el) {
\t\teditor = CodeMirror.fromTextArea(el, {
\t\t\tmode: \"xml\",
\t\t\tinteger: 2,
\t\t\tlineNumbers: true,
\t\t\tviewportMargin: Infinity,
\t\t\tautofocus: true,
\t\t\talignCDATA: true,
\t\t\tlineWrapping: true,
\t\t\tindentWithTabs: true,
\t\t\tindentUnit: 2,
\t\t\tstyleActiveLine: true,
\t\t\tautoCloseTags: true
\t\t});

\t\tif (editor) {
\t\t\tvar editorChanged = false;

\t\t\teditor.on('change', function(){
\t\t\t\tif (editorChanged == false) {
\t\t\t\t\twindow.onbeforeunload = function() {
\t\t\t\t\t\treturn 'Confirm that you want to leave - data you have entered may not be saved';
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\teditorChanged = true;
\t\t\t});

\t\t\t\$('#form-modification').bind('submit',function() {
\t\t\t\t\$(this).addClass('form-saving');

\t\t\t\tif (editorChanged) {
\t\t\t\t\twindow.onbeforeunload = null;
\t\t\t\t}
\t\t\t});
\t\t}
\t}
\t//--></script>
";
        // line 87
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "extension/module/modification_manager/form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 87,  143 => 36,  137 => 35,  133 => 34,  121 => 31,  117 => 30,  113 => 28,  105 => 24,  102 => 23,  94 => 19,  92 => 18,  86 => 14,  75 => 12,  71 => 11,  66 => 9,  59 => 8,  51 => 7,  47 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/modification_manager/form.twig", "");
    }
}
