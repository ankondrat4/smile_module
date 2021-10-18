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

/* themes/custom/my_theme/templates/node--service--teaser.html.twig */
class __TwigTemplate_f9d12c4d881a9f8897675f0933cf0c3a8d349310b93668ab3f50812d1f3043ea extends \Twig\Template
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
        // line 2
        $context["classes"] = [0 => "node", 1 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 4
($context["node"] ?? null), "bundle", [], "any", false, false, true, 4), 4, $this->source))), 2 => ((twig_get_attribute($this->env, $this->source,         // line 5
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 5)) ? ("node--promoted") : ("")), 3 => ((twig_get_attribute($this->env, $this->source,         // line 6
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 6)) ? ("node--sticky") : ("")), 4 => (( !twig_get_attribute($this->env, $this->source,         // line 7
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 7)) ? ("node--unpublished") : ("")), 5 => ((        // line 8
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 8, $this->source)))) : (""))];
        // line 13
        echo "<article class = \"article_border\">
  <div>
    <div>";
        // line 15
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_main_image", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
        echo "</div><br>
  </div>

  ";
        // line 18
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 18, $this->source), "html", null, true);
        echo "
  ";
        // line 19
        if ((($context["label"] ?? null) &&  !($context["page"] ?? null))) {
            // line 20
            echo "    <h1";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "node__title"], "method", false, false, true, 20), 20, $this->source), "html", null, true);
            echo ">
      ";
            // line 21
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_upper_filter($this->env, strip_tags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 21, $this->source)))), "html", null, true);
            echo "
    </h1>
  ";
        }
        // line 24
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 24, $this->source), "html", null, true);
        echo "

  <div>
    <div >";
        // line 27
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_term", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
        echo "</div><br>
  </div>

  <div";
        // line 30
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => "node__content", 1 => "clearfix"], "method", false, false, true, 30), 30, $this->source), "html", null, true);
        echo ">
    ";
        // line 31
        $context["summary"] = strip_tags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 31), 31, $this->source)));
        // line 32
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (((twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["summary"] ?? null), 32, $this->source)) > 100)) ? ((twig_slice($this->env, $this->sandbox->ensureToStringAllowed(($context["summary"] ?? null), 32, $this->source), 0, 200) . "...")) : (($context["summary"] ?? null))), "html", null, true);
        echo "
  </div>

  <div>
    <div><a class=\"btn_view\"  href=\"";
        // line 36
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 36, $this->source), "html", null, true);
        echo "\" rel=\"bookmark\">View content</a></div>
  </div>

  ";
        // line 40
        echo "</article>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/my_theme/templates/node--service--teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 40,  100 => 36,  92 => 32,  90 => 31,  86 => 30,  80 => 27,  73 => 24,  67 => 21,  62 => 20,  60 => 19,  56 => 18,  50 => 15,  46 => 13,  44 => 8,  43 => 7,  42 => 6,  41 => 5,  40 => 4,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{%
  set classes = [
  'node',
  'node--type-' ~ node.bundle|clean_class,
  node.isPromoted() ? 'node--promoted',
  node.isSticky() ? 'node--sticky',
  not node.isPublished() ? 'node--unpublished',
  view_mode ? 'node--view-mode-' ~ view_mode|clean_class,

]
%}
{#{{ attach_library('services_block/table') }}#}
<article class = \"article_border\">
  <div>
    <div>{{ content.field_main_image }}</div><br>
  </div>

  {{ title_prefix }}
  {% if label and not page %}
    <h1{{ title_attributes.addClass('node__title') }}>
      {{ label|render|striptags|upper }}
    </h1>
  {% endif %}
  {{ title_suffix }}

  <div>
    <div >{{ content.field_term }}</div><br>
  </div>

  <div{{ content_attributes.addClass('node__content', 'clearfix') }}>
    {% set summary = content.body|render|striptags %}
    {{ summary|length > 100 ? summary|slice(0, 200) ~ '...' : summary }}
  </div>

  <div>
    <div><a class=\"btn_view\"  href=\"{{ url }}\" rel=\"bookmark\">View content</a></div>
  </div>

  {#  </div>#}
</article>
", "themes/custom/my_theme/templates/node--service--teaser.html.twig", "/var/www/domain2.com/web/themes/custom/my_theme/templates/node--service--teaser.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 2, "if" => 19);
        static $filters = array("clean_class" => 4, "escape" => 15, "upper" => 21, "striptags" => 21, "render" => 21, "length" => 32, "slice" => 32);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape', 'upper', 'striptags', 'render', 'length', 'slice'],
                []
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
