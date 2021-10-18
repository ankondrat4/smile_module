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
        echo "<article >
  <div>
    <div class=\"a\">";
        // line 15
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_main_image", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
        echo "</div><br>
  </div>
  <div";
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => "node__content", 1 => "clearfix"], "method", false, false, true, 17), 17, $this->source), "html", null, true);
        echo ">
    ";
        // line 18
        $context["summary"] = strip_tags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 18), 18, $this->source)));
        // line 19
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (((twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["summary"] ?? null), 19, $this->source)) > 100)) ? ((twig_slice($this->env, $this->sandbox->ensureToStringAllowed(($context["summary"] ?? null), 19, $this->source), 0, 200) . "...")) : (($context["summary"] ?? null))), "html", null, true);
        echo "
  </div>


  <div>
    <div >";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_term", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
        echo "</div><br>
  </div>
  <div>
    <div><a class=\"b\"  href=\"";
        // line 27
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 27, $this->source), "html", null, true);
        echo "\" rel=\"bookmark\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_title", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
        echo "</a></div><br>
  </div>
  <div>
    <div class=\"c\">";
        // line 30
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_subtitle", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
        echo "</div><br>
  </div>
  <div>
    <div><a class=\"d\"  href=\"";
        // line 33
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 33, $this->source), "html", null, true);
        echo "\" rel=\"bookmark\">View content</a></div>
  </div>

  ";
        // line 37
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
        return array (  96 => 37,  90 => 33,  84 => 30,  76 => 27,  70 => 24,  61 => 19,  59 => 18,  55 => 17,  50 => 15,  46 => 13,  44 => 8,  43 => 7,  42 => 6,  41 => 5,  40 => 4,  39 => 2,);
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
<article >
  <div>
    <div class=\"a\">{{ content.field_main_image }}</div><br>
  </div>
  <div{{ content_attributes.addClass('node__content', 'clearfix') }}>
    {% set summary = content.body|render|striptags %}
    {{ summary|length > 100 ? summary|slice(0, 200) ~ '...' : summary }}
  </div>


  <div>
    <div >{{ content.field_term }}</div><br>
  </div>
  <div>
    <div><a class=\"b\"  href=\"{{ url }}\" rel=\"bookmark\">{{ content.field_title }}</a></div><br>
  </div>
  <div>
    <div class=\"c\">{{ content.field_subtitle }}</div><br>
  </div>
  <div>
    <div><a class=\"d\"  href=\"{{ url }}\" rel=\"bookmark\">View content</a></div>
  </div>

  {#  </div>#}
</article>
", "themes/custom/my_theme/templates/node--service--teaser.html.twig", "/var/www/domain2.com/web/themes/custom/my_theme/templates/node--service--teaser.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 2);
        static $filters = array("clean_class" => 4, "escape" => 15, "striptags" => 18, "render" => 18, "length" => 19, "slice" => 19);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['clean_class', 'escape', 'striptags', 'render', 'length', 'slice'],
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
