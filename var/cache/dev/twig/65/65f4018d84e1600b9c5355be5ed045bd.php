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
            'javascripts' => [$this, 'block_javascripts'],
            'stylesheets' => [$this, 'block_stylesheets'],
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

    <!-- Bouton Analyser pour toutes les candidatures -->
    <button id=\"analyzeAllButton\" class=\"analyze-button\" onclick=\"showLoadingMessage()\">
        Analyser toutes les candidatures
    </button>

    <!-- Message de chargement global -->
    <div id=\"loadingMessage\" class=\"loading-message\" style=\"display:none;\">
        Fonctionnalité pas encore disponible...
        <div class=\"spinner\"></div>
    </div>

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
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["candidatures"]) || array_key_exists("candidatures", $context) ? $context["candidatures"] : (function () { throw new RuntimeError('Variable "candidatures" does not exist.', 31, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["candidature"]) {
            // line 32
            yield "                <tr>
                    <td>";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "user", [], "any", false, false, false, 33), "lastName", [], "any", false, false, false, 33), "html", null, true);
            yield "</td>
                    <td>";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "user", [], "any", false, false, false, 34), "firstName", [], "any", false, false, false, 34), "html", null, true);
            yield "</td>
                    <td>";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "user", [], "any", false, false, false, 35), "email", [], "any", false, false, false, 35), "html", null, true);
            yield "</td>
                    <td>
                        <a href=\"";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cv_download", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "cv", [], "any", false, false, false, 37), "id", [], "any", false, false, false, 37)]), "html", null, true);
            yield "\">Télécharger CV</a>
                    </td>
                    <td>
                        <ul>
                            ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["candidature"], "user", [], "any", false, false, false, 41), "answers", [], "any", false, false, false, 41));
            foreach ($context['_seq'] as $context["_key"] => $context["answer"]) {
                // line 42
                yield "                                <li>
                                    <strong>";
                // line 43
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["answer"], "question", [], "any", false, false, false, 43), "text", [], "any", false, false, false, 43), "html", null, true);
                yield ":</strong>
                                    ";
                // line 44
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["answer"], "question", [], "any", false, false, false, 44), "type", [], "any", false, false, false, 44) == "text")) {
                    // line 45
                    yield "                                        ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["answer"], "answerText", [], "any", false, false, false, 45), "html", null, true);
                    yield "
                                    ";
                } else {
                    // line 47
                    yield "                                        ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["answer"], "answerOptions", [], "any", false, false, false, 47), "html", null, true);
                    yield "
                                    ";
                }
                // line 49
                yield "                                </li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['answer'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            yield "                        </ul>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['candidature'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        yield "        </tbody>
    </table>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 59
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 60
        yield "    <script>
        // Fonction pour afficher le message de chargement et cacher le bouton \"Analyser\"
        function showLoadingMessage() {
            // Cacher le bouton \"Analyser\"
            document.getElementById('analyzeAllButton').style.display = 'none';
            // Afficher le message de chargement
            document.getElementById('loadingMessage').style.display = 'block';
        }
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 71
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 72
        yield "    <style>
        /* Styles pour le bouton \"Analyser\" */
        .analyze-button {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .analyze-button:hover {
            background-color: #0056b3;
        }

        /* Styles pour le message de chargement */
        .loading-message {
            margin-top: 10px;
            font-size: 16px;
            color: #999;
            display: inline-block;
        }

        /* Animation pour le spinner */
        .spinner {
            border: 4px solid #f3f3f3;
            border-top: 4px solid #3498db;
            border-radius: 50%;
            width: 20px;
            height: 20px;
            animation: spin 2s linear infinite;
            margin-left: 10px;
        }

        /* Animation de rotation pour le spinner */
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
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
        return array (  237 => 72,  224 => 71,  204 => 60,  191 => 59,  178 => 55,  169 => 51,  162 => 49,  156 => 47,  150 => 45,  148 => 44,  144 => 43,  141 => 42,  137 => 41,  130 => 37,  125 => 35,  121 => 34,  117 => 33,  114 => 32,  110 => 31,  82 => 6,  78 => 4,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Notifications</h1>

    <h2>Nouvelles Candidatures ({{ newCandidaturesCount }})</h2>

    <!-- Bouton Analyser pour toutes les candidatures -->
    <button id=\"analyzeAllButton\" class=\"analyze-button\" onclick=\"showLoadingMessage()\">
        Analyser toutes les candidatures
    </button>

    <!-- Message de chargement global -->
    <div id=\"loadingMessage\" class=\"loading-message\" style=\"display:none;\">
        Fonctionnalité pas encore disponible...
        <div class=\"spinner\"></div>
    </div>

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

{% block javascripts %}
    <script>
        // Fonction pour afficher le message de chargement et cacher le bouton \"Analyser\"
        function showLoadingMessage() {
            // Cacher le bouton \"Analyser\"
            document.getElementById('analyzeAllButton').style.display = 'none';
            // Afficher le message de chargement
            document.getElementById('loadingMessage').style.display = 'block';
        }
    </script>
{% endblock %}

{% block stylesheets %}
    <style>
        /* Styles pour le bouton \"Analyser\" */
        .analyze-button {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .analyze-button:hover {
            background-color: #0056b3;
        }

        /* Styles pour le message de chargement */
        .loading-message {
            margin-top: 10px;
            font-size: 16px;
            color: #999;
            display: inline-block;
        }

        /* Animation pour le spinner */
        .spinner {
            border: 4px solid #f3f3f3;
            border-top: 4px solid #3498db;
            border-radius: 50%;
            width: 20px;
            height: 20px;
            animation: spin 2s linear infinite;
            margin-left: 10px;
        }

        /* Animation de rotation pour le spinner */
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
{% endblock %}
", "notifications/index.html.twig", "C:\\Users\\LENOVO\\Documents\\Stage\\Recruitment\\templates\\notifications\\index.html.twig");
    }
}
