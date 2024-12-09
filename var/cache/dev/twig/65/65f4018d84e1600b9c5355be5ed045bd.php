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

/* notifications/index.html.twig */
class __TwigTemplate_2d4ffe5031d68e96c0bb3c402ebf5274 extends Template
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

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "notifications/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "notifications/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "notifications/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        yield "    <h1>Notifications</h1>

    <h2>Nouvelles Candidatures (";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["newCandidaturesCount"]) || array_key_exists("newCandidaturesCount", $context) ? $context["newCandidaturesCount"] : (function () { throw new RuntimeError('Variable "newCandidaturesCount" does not exist.', 6, $this->source); })()), "html", null, true);
        yield ")</h2>

    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["candidatures"]) || array_key_exists("candidatures", $context) ? $context["candidatures"] : (function () { throw new RuntimeError('Variable "candidatures" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["candidature"]) {
            // line 9
            yield "        <h3>Candidature de ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "user", [], "any", false, false, false, 9), "firstName", [], "any", false, false, false, 9), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "user", [], "any", false, false, false, 9), "lastName", [], "any", false, false, false, 9), "html", null, true);
            yield "</h3>

        <ul>
            ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["notifications"]) || array_key_exists("notifications", $context) ? $context["notifications"] : (function () { throw new RuntimeError('Variable "notifications" does not exist.', 12, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
                // line 13
                yield "                <li>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["notification"], "html", null, true);
                yield "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['notification'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            yield "        </ul>

        <h4>Questions et Réponses</h4>
        <ul>
            ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "user", [], "any", false, false, false, 19), "answers", [], "any", false, false, false, 19));
            foreach ($context['_seq'] as $context["_key"] => $context["answer"]) {
                // line 20
                yield "                <li>
                    <strong>";
                // line 21
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["answer"], "question", [], "any", false, false, false, 21), "text", [], "any", false, false, false, 21), "html", null, true);
                yield ":</strong>
                    ";
                // line 22
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["answer"], "question", [], "any", false, false, false, 22), "type", [], "any", false, false, false, 22) == "text")) {
                    // line 23
                    yield "                        ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["answer"], "answerText", [], "any", false, false, false, 23), "html", null, true);
                    yield "
                    ";
                } else {
                    // line 25
                    yield "                        ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["answer"], "answerOptions", [], "any", false, false, false, 25), "html", null, true);
                    yield "
                    ";
                }
                // line 27
                yield "                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['answer'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            yield "        </ul>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['candidature'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        yield "
    <h2>Candidatures</h2>
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
                <th>CV</th>
                <th>Questions et Réponses</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["candidatures"]) || array_key_exists("candidatures", $context) ? $context["candidatures"] : (function () { throw new RuntimeError('Variable "candidatures" does not exist.', 44, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["candidature"]) {
            // line 45
            yield "                <tr>
                    <td>";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "user", [], "any", false, false, false, 46), "lastName", [], "any", false, false, false, 46), "html", null, true);
            yield "</td>
                    <td>";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "user", [], "any", false, false, false, 47), "firstName", [], "any", false, false, false, 47), "html", null, true);
            yield "</td>
                    <td>";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "user", [], "any", false, false, false, 48), "email", [], "any", false, false, false, 48), "html", null, true);
            yield "</td>
                    <td>
                        <a href=\"";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cv_download", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "cv", [], "any", false, false, false, 50), "id", [], "any", false, false, false, 50)]), "html", null, true);
            yield "\">Télécharger CV</a>
                    </td>
                    <td>
                        <ul>
                            ";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "user", [], "any", false, false, false, 54), "answers", [], "any", false, false, false, 54));
            foreach ($context['_seq'] as $context["_key"] => $context["answer"]) {
                // line 55
                yield "                                <li>
                                    <strong>";
                // line 56
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["answer"], "question", [], "any", false, false, false, 56), "text", [], "any", false, false, false, 56), "html", null, true);
                yield ":</strong>
                                    ";
                // line 57
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["answer"], "question", [], "any", false, false, false, 57), "type", [], "any", false, false, false, 57) == "text")) {
                    // line 58
                    yield "                                        ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["answer"], "answerText", [], "any", false, false, false, 58), "html", null, true);
                    yield "
                                    ";
                } else {
                    // line 60
                    yield "                                        ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["answer"], "answerOptions", [], "any", false, false, false, 60), "html", null, true);
                    yield "
                                    ";
                }
                // line 62
                yield "                                </li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['answer'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            yield "                        </ul>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['candidature'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        yield "        </tbody>
    </table>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "notifications/index.html.twig";
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
        return array (  239 => 68,  230 => 64,  223 => 62,  217 => 60,  211 => 58,  209 => 57,  205 => 56,  202 => 55,  198 => 54,  191 => 50,  186 => 48,  182 => 47,  178 => 46,  175 => 45,  171 => 44,  156 => 31,  149 => 29,  142 => 27,  136 => 25,  130 => 23,  128 => 22,  124 => 21,  121 => 20,  117 => 19,  111 => 15,  102 => 13,  98 => 12,  89 => 9,  85 => 8,  80 => 6,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Notifications</h1>

    <h2>Nouvelles Candidatures ({{ newCandidaturesCount }})</h2>

    {% for candidature in candidatures %}
        <h3>Candidature de {{ candidature.user.firstName }} {{ candidature.user.lastName }}</h3>

        <ul>
            {% for notification in notifications %}
                <li>{{ notification }}</li>
            {% endfor %}
        </ul>

        <h4>Questions et Réponses</h4>
        <ul>
            {% for answer in candidature.user.answers %}
                <li>
                    <strong>{{ answer.question.text }}:</strong>
                    {% if answer.question.type == 'text' %}
                        {{ answer.answerText }}
                    {% else %}
                        {{ answer.answerOptions }}
                    {% endif %}
                </li>
            {% endfor %}
        </ul>
    {% endfor %}

    <h2>Candidatures</h2>
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
                <th>CV</th>
                <th>Questions et Réponses</th>
            </tr>
        </thead>
        <tbody>
            {% for candidature in candidatures %}
                <tr>
                    <td>{{ candidature.user.lastName }}</td>
                    <td>{{ candidature.user.firstName }}</td>
                    <td>{{ candidature.user.email }}</td>
                    <td>
                        <a href=\"{{ path('app_cv_download', { id: candidature.cv.id }) }}\">Télécharger CV</a>
                    </td>
                    <td>
                        <ul>
                            {% for answer in candidature.user.answers %}
                                <li>
                                    <strong>{{ answer.question.text }}:</strong>
                                    {% if answer.question.type == 'text' %}
                                        {{ answer.answerText }}
                                    {% else %}
                                        {{ answer.answerOptions }}
                                    {% endif %}
                                </li>
                            {% endfor %}
                        </ul>
                    </td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
{% endblock %}
", "notifications/index.html.twig", "C:\\Users\\LENOVO\\Documents\\Stage\\Recruitment\\templates\\notifications\\index.html.twig");
    }
}
