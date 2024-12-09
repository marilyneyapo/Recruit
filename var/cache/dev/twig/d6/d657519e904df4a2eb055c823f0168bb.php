<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @EasyAdmin/crud/field/boolean.html.twig */
class __TwigTemplate_c86d2e70b61196fb0f1872e74e0fa3c9 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/field/boolean.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/field/boolean.html.twig"));

        // line 1
        yield "

";
        // line 3
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 3, $this->source); })()), "crud", [], "any", false, false, false, 3), "currentAction", [], "any", false, false, false, 3) == "detail") ||  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 3, $this->source); })()), "customOptions", [], "any", false, false, false, 3), "get", ["renderAsSwitch"], "method", false, false, false, 3))) {
            // line 4
            yield "    ";
            $context["badge_is_hidden"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 4, $this->source); })()), "crud", [], "any", false, false, false, 4), "currentAction", [], "any", false, false, false, 4) == "index") && (((CoreExtension::getAttribute($this->env, $this->source,             // line 6
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 6, $this->source); })()), "value", [], "any", false, false, false, 6) == true) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 6, $this->source); })()), "customOptions", [], "any", false, false, false, 6), "get", ["hideValueWhenTrue"], "method", false, false, false, 6) == true)) || ((CoreExtension::getAttribute($this->env, $this->source,             // line 8
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 8, $this->source); })()), "value", [], "any", false, false, false, 8) == false) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 8, $this->source); })()), "customOptions", [], "any", false, false, false, 8), "get", ["hideValueWhenFalse"], "method", false, false, false, 8) == true))));
            // line 10
            yield "
    ";
            // line 11
            if ( !(isset($context["badge_is_hidden"]) || array_key_exists("badge_is_hidden", $context) ? $context["badge_is_hidden"] : (function () { throw new RuntimeError('Variable "badge_is_hidden" does not exist.', 11, $this->source); })())) {
                // line 12
                yield "        <span class=\"badge ";
                yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 12, $this->source); })()), "value", [], "any", false, false, false, 12) == true)) ? ("badge-boolean-true") : ("badge-boolean-false"));
                yield "\">
            ";
                // line 13
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 13, $this->source); })()), "value", [], "any", false, false, false, 13) == true)) ? ("label.true") : ("label.false"))), "html", null, true);
                yield "
        </span>
    ";
            }
        } else {
            // line 17
            yield "    <div class=\"form-check form-switch\">
        <input type=\"checkbox\" class=\"form-check-input\" id=\"";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 18, $this->source); })()), "uniqueId", [], "any", false, false, false, 18), "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 18, $this->source); })()), "value", [], "any", false, false, false, 18) == true)) ? ("checked") : (""));
            yield "
            data-toggle-url=\"";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 19, $this->source); })()), "customOptions", [], "any", false, false, false, 19), "get", ["toggleUrl"], "method", false, false, false, 19), "html", null, true);
            yield "\"
            ";
            // line 20
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 20, $this->source); })()), "formTypeOption", ["disabled"], "method", false, false, false, 20) == true)) ? ("disabled") : (""));
            yield " autocomplete=\"off\">
        <label class=\"form-check-label\" for=\"";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 21, $this->source); })()), "uniqueId", [], "any", false, false, false, 21), "html", null, true);
            yield "\"></label>
    </div>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/crud/field/boolean.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  93 => 21,  89 => 20,  85 => 19,  79 => 18,  76 => 17,  69 => 13,  64 => 12,  62 => 11,  59 => 10,  57 => 8,  56 => 6,  54 => 4,  52 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("

{% if ea.crud.currentAction == 'detail' or not field.customOptions.get('renderAsSwitch') %}
    {% set badge_is_hidden = ea.crud.currentAction == 'index'
        and (
            (field.value == true and field.customOptions.get('hideValueWhenTrue') == true)
            or
            (field.value == false and field.customOptions.get('hideValueWhenFalse') == true)
        ) %}

    {% if not badge_is_hidden %}
        <span class=\"badge {{ field.value == true ? 'badge-boolean-true' : 'badge-boolean-false' }}\">
            {{ (field.value == true ? 'label.true' : 'label.false')|trans }}
        </span>
    {% endif %}
{% else %}
    <div class=\"form-check form-switch\">
        <input type=\"checkbox\" class=\"form-check-input\" id=\"{{ field.uniqueId }}\" {{ field.value == true ? 'checked' }}
            data-toggle-url=\"{{ field.customOptions.get('toggleUrl') }}\"
            {{ field.formTypeOption('disabled') == true ? 'disabled' }} autocomplete=\"off\">
        <label class=\"form-check-label\" for=\"{{ field.uniqueId }}\"></label>
    </div>
{% endif %}
", "@EasyAdmin/crud/field/boolean.html.twig", "C:\\Users\\LENOVO\\Documents\\Stage\\Recruitment\\vendor\\easycorp\\easyadmin-bundle\\templates\\crud\\field\\boolean.html.twig");
    }
}
