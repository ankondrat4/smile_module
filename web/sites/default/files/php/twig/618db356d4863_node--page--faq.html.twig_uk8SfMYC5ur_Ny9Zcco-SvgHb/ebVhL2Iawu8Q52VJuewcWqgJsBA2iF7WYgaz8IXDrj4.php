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

/* themes/custom/my_theme/templates/node--page--faq.html.twig */
class __TwigTemplate_7198ab053458c71c041cb2b51a9f432a3e227891fa803bccb1c107cd52d9ae34 extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        $context["classes"] = [0 => "node", 1 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 9
($context["node"] ?? null), "bundle", [], "any", false, false, true, 9), 9, $this->source))), 2 => ((twig_get_attribute($this->env, $this->source,         // line 10
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 10)) ? ("node--promoted") : ("")), 3 => ((twig_get_attribute($this->env, $this->source,         // line 11
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 11)) ? ("node--sticky") : ("")), 4 => (( !twig_get_attribute($this->env, $this->source,         // line 12
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 12)) ? ("node--unpublished") : ("")), 5 => ((        // line 13
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 13, $this->source)))) : ("")), 6 => "clearfix"];
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("bartik/classy.node"), "html", null, true);
        echo "
<article";
        // line 18
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 18), 18, $this->source), "html", null, true);
        echo ">
  PAGE FAQ
  <header>
    ";
        // line 21
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 21, $this->source), "html", null, true);
        echo "
      ";
        // line 22
        if ((($context["label"] ?? null) &&  !($context["page"] ?? null))) {
            // line 23
            echo "      <h2";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "node__title"], "method", false, false, true, 23), 23, $this->source), "html", null, true);
            echo ">
        <a href=\"";
            // line 24
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 24, $this->source), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 24, $this->source), "html", null, true);
            echo "</a>
      </h2>
    ";
        }
        // line 27
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 27, $this->source), "html", null, true);
        echo "

  </header>
  <div";
        // line 30
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => "node__content", 1 => "clearfix"], "method", false, false, true, 30), 30, $this->source), "html", null, true);
        echo " style=\"color:darkgreen;\">
    <i>
      ";
        // line 32
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 32, $this->source), "html", null, true);
        echo "
    </i>
  </div>



  ";
        // line 38
        if (($context["display_submitted"] ?? null)) {
            // line 39
            echo "    <div class=\"node__meta\">
      ";
            // line 40
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_picture"] ?? null), 40, $this->source), "html", null, true);
            echo "
      <span";
            // line 41
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_attributes"] ?? null), 41, $this->source), "html", null, true);
            echo ">
          ";
            // line 42
            echo t("Submitted by @author_name on @date", array("@author_name" => ($context["author_name"] ?? null), "@date" => ($context["date"] ?? null), ));
            // line 43
            echo "        </span>
      ";
            // line 44
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["metadata"] ?? null), 44, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 47
        echo "

</article>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/my_theme/templates/node--page--faq.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 47,  114 => 44,  111 => 43,  109 => 42,  105 => 41,  101 => 40,  98 => 39,  96 => 38,  87 => 32,  82 => 30,  75 => 27,  67 => 24,  62 => 23,  60 => 22,  56 => 21,  50 => 18,  46 => 17,  44 => 13,  43 => 12,  42 => 11,  41 => 10,  40 => 9,  39 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
* Templete for node if field_template = faq
*/
#}
{%
  set classes = [
    'node',
    'node--type-' ~ node.bundle|clean_class,
    node.isPromoted() ? 'node--promoted',
    node.isSticky() ? 'node--sticky',
    not node.isPublished() ? 'node--unpublished',
    view_mode ? 'node--view-mode-' ~ view_mode|clean_class,
    'clearfix',
  ]
%}
{{ attach_library('bartik/classy.node') }}
<article{{ attributes.addClass(classes) }}>
  PAGE FAQ
  <header>
    {{ title_prefix }}
      {% if label and not page %}
      <h2{{ title_attributes.addClass('node__title') }}>
        <a href=\"{{ url }}\" rel=\"bookmark\">{{ label }}</a>
      </h2>
    {% endif %}
    {{ title_suffix }}

  </header>
  <div{{ content_attributes.addClass('node__content', 'clearfix') }} style=\"color:darkgreen;\">
    <i>
      {{ content }}
    </i>
  </div>



  {% if display_submitted %}
    <div class=\"node__meta\">
      {{ author_picture }}
      <span{{ author_attributes }}>
          {% trans %}Submitted by {{ author_name }} on {{ date }}{% endtrans %}
        </span>
      {{ metadata }}
    </div>
  {% endif %}


</article>
", "themes/custom/my_theme/templates/node--page--faq.html.twig", "/var/www/domain2.com/web/themes/custom/my_theme/templates/node--page--faq.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 7, "if" => 22, "trans" => 42);
        static $filters = array("clean_class" => 9, "escape" => 17);
        static $functions = array("attach_library" => 17);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'trans'],
                ['clean_class', 'escape'],
                ['attach_library']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
