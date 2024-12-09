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

/* job/index.html.twig */
class __TwigTemplate_a8c7267ff31aef1f2462cbec935d38a8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "job/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "job/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "job/index.html.twig", 1);
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
        yield "<style>
    /* Style général */
    body {
        margin: 0; 
        padding: 0;
        background-image: url('";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/bacckk.webp"), "html", null, true);
        yield "'); 
        background-size: cover;  
        background-position: center; 
        animation: background-scroll 30s linear infinite; 
    }

    @keyframes background-scroll { 
        0% { 
            background-position: 0 0; 
        } 
        100% { 
            background-position: 100% 100%; 
        } 
    } 

    /* Contenu principal */
    .content {
        text-align: center;
        padding: 100px 20px;
        color: white;
        position: relative;
        z-index: 2;
    }

    .content h1 {
        font-size: 48px;
        margin-bottom: 20px;
        color: #fff;
        text-shadow: 0px 2px 4px rgba(0, 0, 0, 0.7);
    }

    .content p {
        font-size: 24px;
        margin-bottom: 40px;
        color: #f8f9fa;
        text-shadow: 0px 1px 3px rgba(0, 0, 0, 0.5);
    }

    /* Barre de recherche */
    .search-bar {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 10px;
        margin-bottom: 40px;
        flex-wrap: wrap;
    }

    .search-input, .search-select, .search-button {
        padding: 10px 15px;
        font-size: 16px;
        border-radius: 5px;
        border: none;
        outline: none;
    }

    .search-input {
        width: 300px;
        max-width: 100%;
        background-color: rgba(255, 255, 255, 0.8);
        border: 1px solid #ddd;
    }

    .search-select {
        background-color: rgba(255, 255, 255, 0.8);
        border: 1px solid #ddd;
        cursor: pointer;
    }

    .search-button {
        background-color: #007bff;
        color: #fff;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .search-button:hover {
        background-color: #0056b3;
    }

    /* Menu déroulant des catégories */
    .category-list {
        display: inline-block;
        margin-top: 30px;
    }

    .category-list .nav-link {
        color: #fff;
        text-decoration: none;
        font-size: 20px;
        background-color: #007bff;
        padding: 10px 20px;
        border-radius: 5px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: background-color 0.3s, box-shadow 0.3s;
    }

    .category-list .nav-link:hover {
        background-color: #0056b3;
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
    }

    /* Section des fonctionnalités */
    .feature-section {
        text-align: center;
        padding: 50px 20px;
        background-color: rgba(255, 255, 255, 0.9);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        margin: 50px auto;
        max-width: 800px;
    }

    .feature-section h2 {
        font-size: 36px;
        margin-bottom: 20px;
        color: #007bff;
    }

    .feature-section p {
        font-size: 18px;
        color: #6c757d;
        line-height: 1.6;
    }

    /* Responsive pour les petits écrans */
    @media (max-width: 768px) {
        .content h1 {
            font-size: 36px;
        }

        .content p {
            font-size: 18px;
        }

        .search-bar {
            flex-direction: column;
        }

        .search-input {
            width: 100%;
        }
    }

    /* Flash messages */
    .flash-message {
        padding: 15px;
        margin: 10px auto;
        width: 90%;
        max-width: 400px;
        text-align: center;
        border-radius: 5px;
        font-size: 16px;
        animation: fade-out 5s forwards;
    }

    .flash-success {
        background-color: #d4edda;
        color: #155724;
        border: 1px solid #c3e6cb;
    }

    .flash-error {
        background-color: #f8d7da;
        color: #721c24;
        border: 1px solid #f5c6cb;
    }

    /* Keyframes for fading out */
    @keyframes fade-out {
        0% {
            opacity: 1;
        }
        80% {
            opacity: 1;
        }
        100% {
            opacity: 0;
            display: none;
        }
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 193
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

        yield " 
<div class=\"content\"> 
    <h1>Bienvenue sur StratRecruit</h1> 
    <p>Découvrez nos offres d'emploi et bien plus encore.</p> 

    <form action=\"";
        // line 198
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_job_search");
        yield "\" method=\"GET\" class=\"search-bar\">
        <input type=\"text\" name=\"query\" placeholder=\"Rechercher un emploi, une catégorie...\" class=\"search-input\">
        <select name=\"location\" class=\"search-select\">
            <option value=\"\">Sélectionnez une localisation</option>
            ";
        // line 202
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["locations"]) || array_key_exists("locations", $context) ? $context["locations"] : (function () { throw new RuntimeError('Variable "locations" does not exist.', 202, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
            // line 203
            yield "                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["location"], "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["location"], "html", null, true);
            yield "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['location'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 205
        yield "        </select>
        <select name=\"type\" class=\"search-select\">
            <option value=\"\">Sélectionnez un type d'emploi</option>
            ";
        // line 208
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 208, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 209
            yield "                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["type"], "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["type"], "html", null, true);
            yield "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['type'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 211
        yield "        </select>
        <button type=\"submit\" class=\"search-button\">Rechercher</button>
    </form>
    
    ";
        // line 215
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["jobs"]) || array_key_exists("jobs", $context) ? $context["jobs"] : (function () { throw new RuntimeError('Variable "jobs" does not exist.', 215, $this->source); })()))) {
            // line 216
            yield "        <h2>Résultats de recherche</h2>
        <ul>
        ";
            // line 218
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["jobs"]) || array_key_exists("jobs", $context) ? $context["jobs"] : (function () { throw new RuntimeError('Variable "jobs" does not exist.', 218, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
                // line 219
                yield "            <li>
                <a href=\"";
                // line 220
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("job.show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["job"], "id", [], "any", false, false, false, 220)]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["job"], "position", [], "any", false, false, false, 220), "html", null, true);
                yield "</a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['job'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 223
            yield "        </ul>
    ";
        } else {
            // line 225
            yield "        <p>Aucun résultat trouvé.</p>
    ";
        }
        // line 227
        yield "
    <div class=\"category-list\"> 
        <li class=\"nav-item dropdown\"> 
            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\"> 
                <i class=\"fas fa-briefcase\"></i> Jobs 
            </a> 

            <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\"> 
                ";
        // line 235
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 235, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            yield " 
                <li> 
                    <a href=\"";
            // line 237
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jobs_by_category", ["category" => CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 237)]), "html", null, true);
            yield "\" class=\"dropdown-item\"> 
                        ";
            // line 238
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 238), "html", null, true);
            yield " 
                    </a> 
                </li> 
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 241
        yield " 
            </ul> 
        </li> 
    </div> 
</div> 

<div class=\"feature-section\"> 
    <h2>Pourquoi choisir StratRecruit?</h2> 
    <p>Nous offrons une plateforme innovante pour vous aider à trouver le meilleur talent pour votre entreprise ou à découvrir votre prochain emploi de rêve. Avec des outils de recherche avancés et une interface utilisateur intuitive, nous rendons le processus de recrutement plus simple et plus efficace.</p> 
</div> 

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const flashMessages = document.querySelectorAll('.flash-message');
        flashMessages.forEach(message => {
            setTimeout(() => {
                message.remove();
            }, 5000);
        });
    });
</script>
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
        return "job/index.html.twig";
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
        return array (  408 => 241,  398 => 238,  394 => 237,  387 => 235,  377 => 227,  373 => 225,  369 => 223,  358 => 220,  355 => 219,  351 => 218,  347 => 216,  345 => 215,  339 => 211,  328 => 209,  324 => 208,  319 => 205,  308 => 203,  304 => 202,  297 => 198,  278 => 193,  84 => 9,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
<style>
    /* Style général */
    body {
        margin: 0; 
        padding: 0;
        background-image: url('{{ asset('assets/images/bacckk.webp') }}'); 
        background-size: cover;  
        background-position: center; 
        animation: background-scroll 30s linear infinite; 
    }

    @keyframes background-scroll { 
        0% { 
            background-position: 0 0; 
        } 
        100% { 
            background-position: 100% 100%; 
        } 
    } 

    /* Contenu principal */
    .content {
        text-align: center;
        padding: 100px 20px;
        color: white;
        position: relative;
        z-index: 2;
    }

    .content h1 {
        font-size: 48px;
        margin-bottom: 20px;
        color: #fff;
        text-shadow: 0px 2px 4px rgba(0, 0, 0, 0.7);
    }

    .content p {
        font-size: 24px;
        margin-bottom: 40px;
        color: #f8f9fa;
        text-shadow: 0px 1px 3px rgba(0, 0, 0, 0.5);
    }

    /* Barre de recherche */
    .search-bar {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 10px;
        margin-bottom: 40px;
        flex-wrap: wrap;
    }

    .search-input, .search-select, .search-button {
        padding: 10px 15px;
        font-size: 16px;
        border-radius: 5px;
        border: none;
        outline: none;
    }

    .search-input {
        width: 300px;
        max-width: 100%;
        background-color: rgba(255, 255, 255, 0.8);
        border: 1px solid #ddd;
    }

    .search-select {
        background-color: rgba(255, 255, 255, 0.8);
        border: 1px solid #ddd;
        cursor: pointer;
    }

    .search-button {
        background-color: #007bff;
        color: #fff;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .search-button:hover {
        background-color: #0056b3;
    }

    /* Menu déroulant des catégories */
    .category-list {
        display: inline-block;
        margin-top: 30px;
    }

    .category-list .nav-link {
        color: #fff;
        text-decoration: none;
        font-size: 20px;
        background-color: #007bff;
        padding: 10px 20px;
        border-radius: 5px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: background-color 0.3s, box-shadow 0.3s;
    }

    .category-list .nav-link:hover {
        background-color: #0056b3;
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
    }

    /* Section des fonctionnalités */
    .feature-section {
        text-align: center;
        padding: 50px 20px;
        background-color: rgba(255, 255, 255, 0.9);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        margin: 50px auto;
        max-width: 800px;
    }

    .feature-section h2 {
        font-size: 36px;
        margin-bottom: 20px;
        color: #007bff;
    }

    .feature-section p {
        font-size: 18px;
        color: #6c757d;
        line-height: 1.6;
    }

    /* Responsive pour les petits écrans */
    @media (max-width: 768px) {
        .content h1 {
            font-size: 36px;
        }

        .content p {
            font-size: 18px;
        }

        .search-bar {
            flex-direction: column;
        }

        .search-input {
            width: 100%;
        }
    }

    /* Flash messages */
    .flash-message {
        padding: 15px;
        margin: 10px auto;
        width: 90%;
        max-width: 400px;
        text-align: center;
        border-radius: 5px;
        font-size: 16px;
        animation: fade-out 5s forwards;
    }

    .flash-success {
        background-color: #d4edda;
        color: #155724;
        border: 1px solid #c3e6cb;
    }

    .flash-error {
        background-color: #f8d7da;
        color: #721c24;
        border: 1px solid #f5c6cb;
    }

    /* Keyframes for fading out */
    @keyframes fade-out {
        0% {
            opacity: 1;
        }
        80% {
            opacity: 1;
        }
        100% {
            opacity: 0;
            display: none;
        }
    }
</style>
{% endblock %}

{% block body %} 
<div class=\"content\"> 
    <h1>Bienvenue sur StratRecruit</h1> 
    <p>Découvrez nos offres d'emploi et bien plus encore.</p> 

    <form action=\"{{ path('app_job_search') }}\" method=\"GET\" class=\"search-bar\">
        <input type=\"text\" name=\"query\" placeholder=\"Rechercher un emploi, une catégorie...\" class=\"search-input\">
        <select name=\"location\" class=\"search-select\">
            <option value=\"\">Sélectionnez une localisation</option>
            {% for location in locations %}
                <option value=\"{{ location }}\">{{ location }}</option>
            {% endfor %}
        </select>
        <select name=\"type\" class=\"search-select\">
            <option value=\"\">Sélectionnez un type d'emploi</option>
            {% for type in types %}
                <option value=\"{{ type }}\">{{ type }}</option>
            {% endfor %}
        </select>
        <button type=\"submit\" class=\"search-button\">Rechercher</button>
    </form>
    
    {% if jobs is not empty %}
        <h2>Résultats de recherche</h2>
        <ul>
        {% for job in jobs %}
            <li>
                <a href=\"{{ path('job.show', { 'id': job.id }) }}\">{{ job.position }}</a>
            </li>
        {% endfor %}
        </ul>
    {% else %}
        <p>Aucun résultat trouvé.</p>
    {% endif %}

    <div class=\"category-list\"> 
        <li class=\"nav-item dropdown\"> 
            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\"> 
                <i class=\"fas fa-briefcase\"></i> Jobs 
            </a> 

            <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\"> 
                {% for category in categories %} 
                <li> 
                    <a href=\"{{ path('jobs_by_category', { 'category': category.name }) }}\" class=\"dropdown-item\"> 
                        {{ category.name }} 
                    </a> 
                </li> 
                {% endfor %} 
            </ul> 
        </li> 
    </div> 
</div> 

<div class=\"feature-section\"> 
    <h2>Pourquoi choisir StratRecruit?</h2> 
    <p>Nous offrons une plateforme innovante pour vous aider à trouver le meilleur talent pour votre entreprise ou à découvrir votre prochain emploi de rêve. Avec des outils de recherche avancés et une interface utilisateur intuitive, nous rendons le processus de recrutement plus simple et plus efficace.</p> 
</div> 

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const flashMessages = document.querySelectorAll('.flash-message');
        flashMessages.forEach(message => {
            setTimeout(() => {
                message.remove();
            }, 5000);
        });
    });
</script>
{% endblock %}
", "job/index.html.twig", "C:\\Users\\LENOVO\\Documents\\Stage\\Recruitment\\templates\\job\\index.html.twig");
    }
}
