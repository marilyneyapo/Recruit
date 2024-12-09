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

/* job/list.html.twig */
class __TwigTemplate_eec79fd5001ca4b51f6df117f139fbe6 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "job/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "job/list.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "job/list.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        // line 4
        yield "    <style>
        /* Conteneur principal pour afficher les offres en ligne */
        .job-category {
            display: flex;
            flex-wrap: wrap; /* Permet aux éléments de passer à la ligne suivante si nécessaire */
            gap: 20px; /* Espacement entre les offres */
            padding: 20px;
            justify-content: flex-start; /* Aligne les éléments au début de la ligne */
        }

        /* Style pour chaque offre d'emploi */
        .job-item {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s, box-shadow 0.2s;
            padding: 15px;
            width: calc(25% - 20px); /* Largeur fixe pour chaque carte, ajustée pour l'espacement */
            text-align: center;
            display: flex;
            flex-direction: column; /* Pour aligner le contenu verticalement dans chaque carte */
            flex-shrink: 0; /* Empêche les éléments de se rétrécir */
        }

        /* Effet survol pour un léger effet 3D */
        .job-item:hover {
            transform: translateY(-5px) scale(1.05); /* Effet de survol */
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        /* Logo de l'entreprise */
        .job-logo img {
            max-width: 100px; /* Logo plus petit */
            height: auto;
            margin-bottom: 10px;
        }

        /* Détails de l'offre */
        .job-details h3 {
            font-size: 1.1rem;
            margin-bottom: 10px;
        }

        .job-details p {
            font-size: 0.9rem;
            color: #666;
            margin-bottom: 5px;
        }

        .btn {
            margin-top: 10px;
            font-size: 0.9rem;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 66
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 69
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

        // line 70
        yield "    ";
        // line 71
        yield "    <div class=\"category-list\">
        <li class=\"nav-item dropdown\">
            <!-- Bouton qui déclenche le menu déroulant -->
            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                <i class=\"fas fa-briefcase\"></i> Jobs
            </a>

            <!-- Liste déroulante -->
            <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 80, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 81
            yield "                    <li>
                        <!-- Lien vers les offres de chaque catégorie -->
                        <a href=\"";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jobs_by_category", ["category" => CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 83)]), "html", null, true);
            yield "\" class=\"dropdown-item\">
                            ";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 84), "html", null, true);
            yield "
                        </a>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        yield "            </ul>
        </li>
    </div>

    ";
        // line 93
        yield "    ";
        if ((isset($context["selectedCategory"]) || array_key_exists("selectedCategory", $context) ? $context["selectedCategory"] : (function () { throw new RuntimeError('Variable "selectedCategory" does not exist.', 93, $this->source); })())) {
            // line 94
            yield "        <h2>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["selectedCategory"]) || array_key_exists("selectedCategory", $context) ? $context["selectedCategory"] : (function () { throw new RuntimeError('Variable "selectedCategory" does not exist.', 94, $this->source); })()), "html", null, true);
            yield "</h2>
    ";
        }
        // line 96
        yield "
    ";
        // line 98
        yield "    ";
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["jobs"]) || array_key_exists("jobs", $context) ? $context["jobs"] : (function () { throw new RuntimeError('Variable "jobs" does not exist.', 98, $this->source); })()))) {
            // line 99
            yield "        <div class=\"job-category\">
            ";
            // line 100
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["jobs"]) || array_key_exists("jobs", $context) ? $context["jobs"] : (function () { throw new RuntimeError('Variable "jobs" does not exist.', 100, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
                // line 101
                yield "                <div class=\"job-item\">
                    ";
                // line 102
                if (CoreExtension::getAttribute($this->env, $this->source, $context["job"], "logo", [], "any", false, false, false, 102)) {
                    // line 103
                    yield "                        <div class=\"job-logo\">
                            <img src=\"";
                    // line 104
                    yield (( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["job"], "logo", [], "any", false, false, false, 104))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/joblogos/" . CoreExtension::getAttribute($this->env, $this->source, $context["job"], "logo", [], "any", false, false, false, 104))), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default.png"), "html", null, true)));
                    yield "\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["job"], "company", [], "any", false, false, false, 104), "html", null, true);
                    yield "\">
                        </div>
                    ";
                }
                // line 107
                yield "
                    <div class=\"job-details\">
                        <h3>
                            <a href=\"";
                // line 110
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("job.show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["job"], "id", [], "any", false, false, false, 110)]), "html", null, true);
                yield "\">
                                ";
                // line 111
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["job"], "position", [], "any", false, false, false, 111), "html", null, true);
                yield "
                            </a>
                        </h3>
                        <p>";
                // line 114
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["job"], "company", [], "any", false, false, false, 114), "html", null, true);
                yield " - ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["job"], "location", [], "any", false, false, false, 114), "html", null, true);
                yield "</p>
                        <p>Type: ";
                // line 115
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["job"], "type", [], "any", false, false, false, 115), "html", null, true);
                yield "</p>
                        <p>Offre valable jusqu'au : ";
                // line 116
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["job"], "expiresAt", [], "any", false, false, false, 116), "M-d-y H:i"), "html", null, true);
                yield "</p>

                        ";
                // line 118
                if (CoreExtension::getAttribute($this->env, $this->source, $context["job"], "isExpired", [], "method", false, false, false, 118)) {
                    // line 119
                    yield "                            <p>Candidature expirée</p>
                        ";
                } else {
                    // line 121
                    yield "                            <p>En cours</p>
                        ";
                }
                // line 123
                yield "
                        <a href=\"";
                // line 124
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("job.show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["job"], "id", [], "any", false, false, false, 124)]), "html", null, true);
                yield "\" class=\"btn btn-info\">Voir</a>
                        <a class=\"btn btn-primary\" href=\"";
                // line 125
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("job.apply", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["job"], "id", [], "any", false, false, false, 125)]), "html", null, true);
                yield "\">Postuler</a>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['job'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 129
            yield "        </div>
    ";
        } else {
            // line 131
            yield "        <p>No jobs available in this category: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["selectedCategory"]) || array_key_exists("selectedCategory", $context) ? $context["selectedCategory"] : (function () { throw new RuntimeError('Variable "selectedCategory" does not exist.', 131, $this->source); })()), "html", null, true);
            yield "</p>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "job/list.html.twig";
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
        return array (  318 => 131,  314 => 129,  304 => 125,  300 => 124,  297 => 123,  293 => 121,  289 => 119,  287 => 118,  282 => 116,  278 => 115,  272 => 114,  266 => 111,  262 => 110,  257 => 107,  249 => 104,  246 => 103,  244 => 102,  241 => 101,  237 => 100,  234 => 99,  231 => 98,  228 => 96,  222 => 94,  219 => 93,  213 => 88,  203 => 84,  199 => 83,  195 => 81,  191 => 80,  180 => 71,  178 => 70,  165 => 69,  143 => 66,  78 => 4,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
    <style>
        /* Conteneur principal pour afficher les offres en ligne */
        .job-category {
            display: flex;
            flex-wrap: wrap; /* Permet aux éléments de passer à la ligne suivante si nécessaire */
            gap: 20px; /* Espacement entre les offres */
            padding: 20px;
            justify-content: flex-start; /* Aligne les éléments au début de la ligne */
        }

        /* Style pour chaque offre d'emploi */
        .job-item {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s, box-shadow 0.2s;
            padding: 15px;
            width: calc(25% - 20px); /* Largeur fixe pour chaque carte, ajustée pour l'espacement */
            text-align: center;
            display: flex;
            flex-direction: column; /* Pour aligner le contenu verticalement dans chaque carte */
            flex-shrink: 0; /* Empêche les éléments de se rétrécir */
        }

        /* Effet survol pour un léger effet 3D */
        .job-item:hover {
            transform: translateY(-5px) scale(1.05); /* Effet de survol */
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        /* Logo de l'entreprise */
        .job-logo img {
            max-width: 100px; /* Logo plus petit */
            height: auto;
            margin-bottom: 10px;
        }

        /* Détails de l'offre */
        .job-details h3 {
            font-size: 1.1rem;
            margin-bottom: 10px;
        }

        .job-details p {
            font-size: 0.9rem;
            color: #666;
            margin-bottom: 5px;
        }

        .btn {
            margin-top: 10px;
            font-size: 0.9rem;
        }
    </style>
{% endblock %}







{% block javascripts %}
{% endblock %}

{% block body %}
    {# Affichage des catégories sous forme de liens pour filtrer les offres #}
    <div class=\"category-list\">
        <li class=\"nav-item dropdown\">
            <!-- Bouton qui déclenche le menu déroulant -->
            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                <i class=\"fas fa-briefcase\"></i> Jobs
            </a>

            <!-- Liste déroulante -->
            <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                {% for category in categories %}
                    <li>
                        <!-- Lien vers les offres de chaque catégorie -->
                        <a href=\"{{ path('jobs_by_category', { 'category': category.name }) }}\" class=\"dropdown-item\">
                            {{ category.name }}
                        </a>
                    </li>
                {% endfor %}
            </ul>
        </li>
    </div>

    {# Affichage des offres par catégorie sélectionnée #}
    {% if selectedCategory %}
        <h2>{{ selectedCategory }}</h2>
    {% endif %}

    {# Vérification si des offres existent dans la catégorie #}
    {% if jobs is not empty %}
        <div class=\"job-category\">
            {% for job in jobs %}
                <div class=\"job-item\">
                    {% if job.logo %}
                        <div class=\"job-logo\">
                            <img src=\"{{ job.logo is not empty ? asset('uploads/joblogos/' ~ job.logo) : asset('images/default.png') }}\" alt=\"{{ job.company }}\">
                        </div>
                    {% endif %}

                    <div class=\"job-details\">
                        <h3>
                            <a href=\"{{ path('job.show', {id: job.id}) }}\">
                                {{ job.position }}
                            </a>
                        </h3>
                        <p>{{ job.company }} - {{ job.location }}</p>
                        <p>Type: {{ job.type }}</p>
                        <p>Offre valable jusqu'au : {{ job.expiresAt | date('M-d-y H:i') }}</p>

                        {% if job.isExpired() %}
                            <p>Candidature expirée</p>
                        {% else %}
                            <p>En cours</p>
                        {% endif %}

                        <a href=\"{{ path('job.show', {id: job.id}) }}\" class=\"btn btn-info\">Voir</a>
                        <a class=\"btn btn-primary\" href=\"{{ path('job.apply', { 'id': job.id }) }}\">Postuler</a>
                    </div>
                </div>
            {% endfor %}
        </div>
    {% else %}
        <p>No jobs available in this category: {{ selectedCategory }}</p>
    {% endif %}
{% endblock %}
", "job/list.html.twig", "C:\\Users\\LENOVO\\Documents\\Stage\\Recruitment\\templates\\job\\list.html.twig");
    }
}
