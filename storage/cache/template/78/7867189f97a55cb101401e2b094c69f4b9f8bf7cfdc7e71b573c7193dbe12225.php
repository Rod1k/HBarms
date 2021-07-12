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

/* customer/customer_approval.twig */
class __TwigTemplate_be801a983b7d048e8611b0242d4f866db09323b4cfe32c632de2505c4c226a7c extends \Twig\Template
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
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\"><button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 5
        echo ($context["button_filter"] ?? null);
        echo "\" onclick=\"\$('#filter-customer').toggleClass('hidden-sm hidden-xs');\" class=\"btn btn-default hidden-md hidden-lg\"><i class=\"fa fa-filter\"></i></button></div>
      <h1>";
        // line 6
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 9
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 9);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 9);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">";
        // line 14
        if (($context["error_warning"] ?? null)) {
            // line 15
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 19
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 20
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 24
        echo "    <div class=\"row\">
      <div id=\"filter-customer\" class=\"col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-filter\"></i> ";
        // line 28
        echo ($context["text_filter"] ?? null);
        echo "</h3>
          </div>
          <div class=\"panel-body\">
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-name\">";
        // line 32
        echo ($context["entry_name"] ?? null);
        echo "</label>
              <input type=\"text\" name=\"filter_name\" value=\"";
        // line 33
        echo ($context["filter_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-email\">";
        // line 36
        echo ($context["entry_email"] ?? null);
        echo "</label>
              <input type=\"text\" name=\"filter_email\" value=\"";
        // line 37
        echo ($context["filter_email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\" />
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-customer-group\">";
        // line 40
        echo ($context["entry_customer_group"] ?? null);
        echo "</label>
              <select name=\"filter_customer_group_id\" id=\"input-customer-group\" class=\"form-control\">
                <option value=\"\"></option>
                
                  
                ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 46
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 46) == ($context["filter_customer_group_id"] ?? null))) {
                // line 47
                echo "                
                  
                <option value=\"";
                // line 49
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 49);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 49);
                echo "</option>
                
                  
                ";
            } else {
                // line 53
                echo "                
                  
                <option value=\"";
                // line 55
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 55);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 55);
                echo "</option>
                
                  
                ";
            }
            // line 59
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "              
                
              </select>
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-type\">";
        // line 65
        echo ($context["entry_type"] ?? null);
        echo "</label>
              <select name=\"filter_type\" id=\"input-type\" class=\"form-control\">
                <option value=\"\"></option>
                
                  
                ";
        // line 70
        if ((($context["filter_type"] ?? null) == "customer")) {
            // line 71
            echo "                
                  
                <option value=\"customer\" selected=\"selected\">";
            // line 73
            echo ($context["text_customer"] ?? null);
            echo "</option>
                
                  
                ";
        } else {
            // line 77
            echo "                
                  
                <option value=\"customer\">";
            // line 79
            echo ($context["text_customer"] ?? null);
            echo "</option>
                
                  
                ";
        }
        // line 82
        echo "              
                ";
        // line 83
        if ((($context["filter_type"] ?? null) == "affiliate")) {
            // line 84
            echo "                
                  
                <option value=\"affiliate\" selected=\"selected\">";
            // line 86
            echo ($context["text_affiliate"] ?? null);
            echo "</option>
                
                  
                ";
        } else {
            // line 90
            echo "                
                  
                <option value=\"affiliate\">";
            // line 92
            echo ($context["text_affiliate"] ?? null);
            echo "</option>
                
                  
                ";
        }
        // line 96
        echo "              
                
              </select>
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-date-added\">";
        // line 101
        echo ($context["entry_date_added"] ?? null);
        echo "</label>
              <div class=\"input-group date\">
                <input type=\"text\" name=\"filter_date_added\" value=\"";
        // line 103
        echo ($context["filter_date_added"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_added"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-added\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            <div class=\"form-group text-right\">
              <button type=\"button\" id=\"button-filter\" class=\"btn btn-default\"><i class=\"fa fa-filter\"></i> ";
        // line 109
        echo ($context["button_filter"] ?? null);
        echo "</button>
            </div>
          </div>
        </div>
      </div>
      <div class=\"col-md-9 col-md-pull-3 col-sm-12\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 117
        echo ($context["text_list"] ?? null);
        echo "</h3>
          </div>
          <div class=\"panel-body\">
            <div id=\"customer-approval\"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
\$('#customer-approval').delegate('.pagination a', 'click', function(e) {
\te.preventDefault();

\t\$('#customer-approval').load(this.href);
});
  
\$('#customer-approval').load('index.php?route=customer/customer_approval/customer_approval&user_token=";
        // line 133
        echo ($context["user_token"] ?? null);
        echo "');

\$('#customer-approval').on('click', '.btn-success, .btn-danger', function(e) {
\te.preventDefault();
\t
\tvar element = this;
\t
\t\$.ajax({
\t\turl: \$(element).attr('href'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$(element).button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$(element).button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();

\t\t\tif (json['error']) {
\t\t\t\t\$('#customer-approval').before('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#customer-approval').load('index.php?route=customer/customer_approval/customer_approval&user_token=";
        // line 157
        echo ($context["user_token"] ?? null);
        echo "');

\t\t\t\t\$('#customer-approval').before('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('#button-filter').on('click', function() {
\turl = '';
\t
\tvar filter_name = \$('input[name=\\'filter_name\\']').val();
\t
\tif (filter_name) {
\t\turl += '&filter_name=' + encodeURIComponent(filter_name);
\t}
\t
\tvar filter_email = \$('input[name=\\'filter_email\\']').val();
\t
\tif (filter_email) {
\t\turl += '&filter_email=' + encodeURIComponent(filter_email);
\t}\t
\t\t
\tvar filter_customer_group_id = \$('select[name=\\'filter_customer_group_id\\']').val();
\t
\tif (filter_customer_group_id !== '') {
\t\turl += '&filter_customer_group_id=' + encodeURIComponent(filter_customer_group_id);
\t}\t
\t
\tvar filter_type = \$('select[name=\\'filter_type\\']').val();
\t
\tif (filter_type !== '') {
\t\turl += '&filter_type=' + filter_type;
\t}
\t\t\t
\tvar filter_date_added = \$('input[name=\\'filter_date_added\\']').val();
\t
\tif (filter_date_added) {
\t\turl += '&filter_date_added=' + encodeURIComponent(filter_date_added);
\t}
\t
\t\$('#customer-approval').load('index.php?route=customer/customer_approval/customer_approval&user_token=";
        // line 201
        echo ($context["user_token"] ?? null);
        echo "' + url);
});
//--></script> 
  <script type=\"text/javascript\"><!--
\$('input[name=\\'filter_name\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=customer/customer/autocomplete&user_token=";
        // line 208
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',\t\t\t
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['customer_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'filter_name\\']').val(item['label']);
\t}\t
});

\$('input[name=\\'filter_email\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=customer/customer/autocomplete&user_token=";
        // line 228
        echo ($context["user_token"] ?? null);
        echo "&filter_email=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',\t\t\t
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['email'],
\t\t\t\t\t\tvalue: item['customer_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'filter_email\\']').val(item['label']);
\t}\t
});
//--></script> 
  <script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
        // line 247
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickTime: false
});
//--></script></div>
";
        // line 251
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "customer/customer_approval.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  434 => 251,  427 => 247,  405 => 228,  382 => 208,  372 => 201,  325 => 157,  298 => 133,  279 => 117,  268 => 109,  257 => 103,  252 => 101,  245 => 96,  238 => 92,  234 => 90,  227 => 86,  223 => 84,  221 => 83,  218 => 82,  211 => 79,  207 => 77,  200 => 73,  196 => 71,  194 => 70,  186 => 65,  179 => 60,  173 => 59,  164 => 55,  160 => 53,  151 => 49,  147 => 47,  144 => 46,  140 => 45,  132 => 40,  124 => 37,  120 => 36,  112 => 33,  108 => 32,  101 => 28,  95 => 24,  87 => 20,  84 => 19,  76 => 15,  74 => 14,  69 => 11,  58 => 9,  54 => 8,  49 => 6,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "customer/customer_approval.twig", "");
    }
}
