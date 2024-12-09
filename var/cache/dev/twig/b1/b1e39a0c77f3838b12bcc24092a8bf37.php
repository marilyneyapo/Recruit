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

/* @EasyAdmin/crud/paginator.html.twig */
class __TwigTemplate_da2057d99e85f0139de72b67822b4f27 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/paginator.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/paginator.html.twig"));

        // line 1
        yield "
<div class=\"list-pagination\">
    <div class=\"list-pagination-counter\">
        ";
        // line 4
        if (((array_key_exists("render_detailed_pagination", $context)) ? ((isset($context["render_detailed_pagination"]) || array_key_exists("render_detailed_pagination", $context) ? $context["render_detailed_pagination"] : (function () { throw new RuntimeError('Variable "render_detailed_pagination" does not exist.', 4, $this->source); })())) : (true))) {
            // line 5
            yield "            ";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paginator.results", ["%count%" => Twig\Extension\CoreExtension::sprintf(CoreExtension::getAttribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 5, $this->source); })()), "numResults", [], "any", false, false, false, 5))]);
            yield "
        ";
        }
        // line 7
        yield "    </div>
    ";
        // line 8
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 8, $this->source); })()), "hasPreviousPage", [], "any", false, false, false, 8) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 8, $this->source); })()), "hasNextPage", [], "any", false, false, false, 8))) {
            // line 9
            yield "        <nav class=\"pager list-pagination-paginator ";
            yield (( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 9, $this->source); })()), "hasPreviousPage", [], "any", false, false, false, 9)) ? ("first-page") : (""));
            yield " ";
            yield (( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 9, $this->source); })()), "hasNextPage", [], "any", false, false, false, 9)) ? ("last-page") : (""));
            yield "\">
            <ul class=\"pagination\">
                <li class=\"page-item page-item-previous ";
            // line 11
            yield (( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 11, $this->source); })()), "hasPreviousPage", [], "any", false, false, false, 11)) ? ("disabled") : (""));
            yield "\">
                    <a class=\"page-link\" href=\"";
            // line 12
            yield (( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 12, $this->source); })()), "hasPreviousPage", [], "any", false, false, false, 12)) ? ("#") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 12, $this->source); })()), "generateUrlForPage", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 12, $this->source); })()), "previousPage", [], "any", false, false, false, 12)], "method", false, false, false, 12), "html", null, true)));
            yield "\">
                        ";
            // line 13
            if (("rtl" == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 13, $this->source); })()), "i18n", [], "any", false, false, false, 13), "textDirection", [], "any", false, false, false, 13))) {
                // line 14
                yield "                            ";
                yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:chevron-right", "class" => "mx-1", "aria-hidden" => "true"]);
                yield "
                        ";
            } else {
                // line 16
                yield "                            ";
                yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:chevron-left", "class" => "mx-1", "aria-hidden" => "true"]);
                yield "
                        ";
            }
            // line 18
            yield "
                        <span class=\"btn-label\">";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paginator.previous"), "html", null, true);
            yield "</span>
                    </a>
                </li>

                ";
            // line 23
            if (((array_key_exists("render_detailed_pagination", $context)) ? ((isset($context["render_detailed_pagination"]) || array_key_exists("render_detailed_pagination", $context) ? $context["render_detailed_pagination"] : (function () { throw new RuntimeError('Variable "render_detailed_pagination" does not exist.', 23, $this->source); })())) : (true))) {
                // line 24
                yield "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 24, $this->source); })()), "pageRange", [], "any", false, false, false, 24));
                foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                    // line 25
                    yield "                        <li class=\"page-item ";
                    yield ((($context["page"] == CoreExtension::getAttribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 25, $this->source); })()), "currentPage", [], "any", false, false, false, 25))) ? ("active") : (""));
                    yield " ";
                    yield (((null === $context["page"])) ? ("disabled") : (""));
                    yield "\">
                            ";
                    // line 26
                    if ((null === $context["page"])) {
                        // line 27
                        yield "                                <span class=\"page-link\">&hellip;</span>
                            ";
                    } else {
                        // line 29
                        yield "                                <a class=\"page-link\" href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 29, $this->source); })()), "generateUrlForPage", [$context["page"]], "method", false, false, false, 29), "html", null, true);
                        yield "\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                        yield "</a>
                            ";
                    }
                    // line 31
                    yield "                        </li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 33
                yield "                ";
            } else {
                // line 34
                yield "                    <li class=\"page-item active ";
                yield (((null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 34, $this->source); })()), "currentPage", [], "any", false, false, false, 34))) ? ("disabled") : (""));
                yield "\">
                        <a class=\"page-link\" href=\"";
                // line 35
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 35, $this->source); })()), "generateUrlForPage", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 35, $this->source); })()), "currentPage", [], "any", false, false, false, 35)], "method", false, false, false, 35), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 35, $this->source); })()), "currentPage", [], "any", false, false, false, 35), "html", null, true);
                yield "</a>
                    </li>
                ";
            }
            // line 38
            yield "
                <li class=\"page-item page-item-next ";
            // line 39
            yield (( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 39, $this->source); })()), "hasNextPage", [], "any", false, false, false, 39)) ? ("disabled") : (""));
            yield "\">
                    <a class=\"page-link\" href=\"";
            // line 40
            yield (( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 40, $this->source); })()), "hasNextPage", [], "any", false, false, false, 40)) ? ("#") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 40, $this->source); })()), "generateUrlForPage", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 40, $this->source); })()), "nextPage", [], "any", false, false, false, 40)], "method", false, false, false, 40), "html", null, true)));
            yield "\">
                        <span class=\"btn-label\">";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paginator.next"), "html", null, true);
            yield "</span>

                        ";
            // line 43
            if (("rtl" == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 43, $this->source); })()), "i18n", [], "any", false, false, false, 43), "textDirection", [], "any", false, false, false, 43))) {
                // line 44
                yield "                            ";
                yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:chevron-left", "class" => "mx-1", "aria-hidden" => "true"]);
                yield "
                        ";
            } else {
                // line 46
                yield "                            ";
                yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ea:Icon", ["name" => "internal:chevron-right", "class" => "mx-1", "aria-hidden" => "true"]);
                yield "
                        ";
            }
            // line 48
            yield "                    </a>
                </li>
            </ul>
        </nav>
    ";
        }
        // line 53
        yield "</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/crud/paginator.html.twig";
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
        return array (  194 => 53,  187 => 48,  181 => 46,  175 => 44,  173 => 43,  168 => 41,  164 => 40,  160 => 39,  157 => 38,  149 => 35,  144 => 34,  141 => 33,  134 => 31,  126 => 29,  122 => 27,  120 => 26,  113 => 25,  108 => 24,  106 => 23,  99 => 19,  96 => 18,  90 => 16,  84 => 14,  82 => 13,  78 => 12,  74 => 11,  66 => 9,  64 => 8,  61 => 7,  55 => 5,  53 => 4,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("
<div class=\"list-pagination\">
    <div class=\"list-pagination-counter\">
        {% if render_detailed_pagination is defined ? render_detailed_pagination : true %}
            {{ 'paginator.results'|trans({'%count%': paginator.numResults|format})|raw }}
        {% endif %}
    </div>
    {% if paginator.hasPreviousPage or paginator.hasNextPage %}
        <nav class=\"pager list-pagination-paginator {{ not paginator.hasPreviousPage ? 'first-page' }} {{ not paginator.hasNextPage ? 'last-page' }}\">
            <ul class=\"pagination\">
                <li class=\"page-item page-item-previous {{ not paginator.hasPreviousPage ? 'disabled' }}\">
                    <a class=\"page-link\" href=\"{{ not paginator.hasPreviousPage ? '#' : paginator.generateUrlForPage(paginator.previousPage) }}\">
                        {% if 'rtl' == ea.i18n.textDirection %}
                            {{ component('ea:Icon', { name: 'internal:chevron-right', class: 'mx-1', 'aria-hidden': 'true' }) }}
                        {% else %}
                            {{ component('ea:Icon', { name: 'internal:chevron-left', class: 'mx-1', 'aria-hidden': 'true' }) }}
                        {% endif %}

                        <span class=\"btn-label\">{{ 'paginator.previous'|trans }}</span>
                    </a>
                </li>

                {% if render_detailed_pagination is defined ? render_detailed_pagination : true %}
                    {% for page in paginator.pageRange %}
                        <li class=\"page-item {{ page == paginator.currentPage ? 'active' }} {{ page is null ? 'disabled' }}\">
                            {% if page is null %}
                                <span class=\"page-link\">&hellip;</span>
                            {% else %}
                                <a class=\"page-link\" href=\"{{ paginator.generateUrlForPage(page) }}\">{{ page }}</a>
                            {% endif %}
                        </li>
                    {% endfor %}
                {% else %}
                    <li class=\"page-item active {{ paginator.currentPage is null ? 'disabled' }}\">
                        <a class=\"page-link\" href=\"{{ paginator.generateUrlForPage(paginator.currentPage) }}\">{{ paginator.currentPage }}</a>
                    </li>
                {% endif %}

                <li class=\"page-item page-item-next {{ not paginator.hasNextPage ? 'disabled' }}\">
                    <a class=\"page-link\" href=\"{{ not paginator.hasNextPage ? '#' : paginator.generateUrlForPage(paginator.nextPage) }}\">
                        <span class=\"btn-label\">{{ 'paginator.next'|trans }}</span>

                        {% if 'rtl' == ea.i18n.textDirection %}
                            {{ component('ea:Icon', { name: 'internal:chevron-left', class: 'mx-1', 'aria-hidden': 'true' }) }}
                        {% else %}
                            {{ component('ea:Icon', { name: 'internal:chevron-right', class: 'mx-1', 'aria-hidden': 'true' }) }}
                        {% endif %}
                    </a>
                </li>
            </ul>
        </nav>
    {% endif %}
</div>
", "@EasyAdmin/crud/paginator.html.twig", "C:\\Users\\LENOVO\\Documents\\Stage\\Recruitment\\vendor\\easycorp\\easyadmin-bundle\\templates\\crud\\paginator.html.twig");
    }
}
