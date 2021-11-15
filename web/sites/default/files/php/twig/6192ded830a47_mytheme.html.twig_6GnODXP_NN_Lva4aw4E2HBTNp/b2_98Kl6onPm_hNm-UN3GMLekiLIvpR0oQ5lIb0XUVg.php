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

/* modules/custom/smile_entity/templates/mytheme.html.twig */
class __TwigTemplate_6652aaf94e86f4bb45ce43eef275bd7043370d52cb31dee4f16b155a2f1de673 extends \Twig\Template
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
        // line 1
        if (($context["content"] ?? null)) {
            // line 2
            echo "  <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "entity_div"], "method", false, false, true, 2), 2, $this->source), "html", null, true);
            echo ">
    <p>
      ";
            // line 4
            echo t("<b>Title:</b> @label", array("@label" => ($context["label"] ?? null), ));
            // line 5
            echo "    </p>
    <p>
      ";
            // line 7
            echo t("<b>Body:</b> @body", array("@body" => ($context["body"] ?? null), ));
            // line 8
            echo "    </p>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "modules/custom/smile_entity/templates/mytheme.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 8,  53 => 7,  49 => 5,  47 => 4,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if content %}
  <div{{ attributes.addClass('entity_div') }}>
    <p>
      {% trans %}<b>Title:</b> {{ label }}{% endtrans %}
    </p>
    <p>
      {% trans %}<b>Body:</b> {{ body }}{% endtrans %}
    </p>
  </div>
{% endif %}
", "modules/custom/smile_entity/templates/mytheme.html.twig", "/var/www/domain2.com/web/modules/custom/smile_entity/templates/mytheme.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "trans" => 4);
        static $filters = array("escape" => 2);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'trans'],
                ['escape'],
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
