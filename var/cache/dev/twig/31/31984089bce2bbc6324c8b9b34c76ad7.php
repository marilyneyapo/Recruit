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

/* job/show.html.twig */
class __TwigTemplate_f2d9d46505074137c78349b921e1dc11 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "job/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "job/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "job/show.html.twig", 1);
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
        .job {
            background-color: #f4f4f4;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 20px auto;
            max-width: 700px;
            font-family: Arial, sans-serif;
        }

        .job header {
            background-color: #003366;
            color: white;
            padding: 20px;
            border-radius: 10px 10px 0 0;
        }

        .job header h1 {
            font-size: 2rem;
            margin-bottom: 10px;
        }

        .job header h2 {
            font-size: 1.5rem;
            font-weight: normal;
        }

        .post-meta {
            font-size: 0.9rem;
            color: #cccccc;
        }

        .job-details {
            padding: 20px;
            background-color: white;
            border-radius: 0 0 10px 10px;
        }

        .job-type {
            font-size: 1.1rem;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .job-description {
            font-size: 1rem;
            margin-bottom: 20px;
            line-height: 1.6;
        }

        .how-to-apply {
            padding: 20px;
            background-color: #e6f2ff;
            border-left: 4px solid #003366;
            border-radius: 10px;
        }

        .how-to-apply h3 {
            font-size: 1.3rem;
            margin-bottom: 10px;
        }

        .application-instructions {
            font-size: 1rem;
            line-height: 1.6;
        }

        .actions {
            margin-top: 20px;
            text-align: center;
        }

        .actions .btn {
            margin: 5px;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 1rem;
        }

        .actions .btn-primary {
            background-color: #003366;
            color: white;
        }

        .actions .btn-secondary {
            background-color: #cccccc;
            color: black;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 96
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

        // line 97
        yield "    <article class=\"job\">
        <header>
            <h1>";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 99, $this->source); })()), "position", [], "any", false, false, false, 99), "html", null, true);
        yield "</h1>
            <h2>";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 100, $this->source); })()), "company", [], "any", false, false, false, 100), "html", null, true);
        yield " <small>(";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 100, $this->source); })()), "location", [], "any", false, false, false, 100), "html", null, true);
        yield ")</small></h2>
            <p class=\"post-meta\">Posted at  ";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 101, $this->source); })()), "createdat", [], "any", false, false, false, 101), "F d, Y"), "html", null, true);
        yield "</p>
        </header>

        <section class=\"job-details\">
            <p class=\"job-type\"><strong>Type de poste:</strong> ";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 105, $this->source); })()), "type", [], "any", false, false, false, 105), "html", null, true);
        yield "</p>
            <div class=\"job-description\">
                ";
        // line 107
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 107, $this->source); })()), "description", [], "any", false, false, false, 107), "html", null, true));
        yield "
            </div>
        </section>

        <section class=\"how-to-apply\">
            <h3>Comment postuler</h3>
            <div class=\"application-instructions\">
                ";
        // line 114
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 114, $this->source); })()), "howToApply", [], "any", false, false, false, 114), "html", null, true));
        yield "
            </div>
        </section>
        <br>

        <footer class=\"actions\">
            <a class=\"btn btn-secondary\" href=\"";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jobs_by_category", ["category" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 120, $this->source); })()), "category", [], "any", false, false, false, 120)]), "html", null, true);
        yield "\">Retour</a>
            <a class=\"btn btn-primary\" href=\"";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("job.apply", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 121, $this->source); })()), "id", [], "any", false, false, false, 121)]), "html", null, true);
        yield "\">Postuler Maintenant !!!</a>
        </footer>
    </article>
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
        return "job/show.html.twig";
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
        return array (  240 => 121,  236 => 120,  227 => 114,  217 => 107,  212 => 105,  205 => 101,  199 => 100,  195 => 99,  191 => 97,  178 => 96,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
    <style>
        .job {
            background-color: #f4f4f4;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 20px auto;
            max-width: 700px;
            font-family: Arial, sans-serif;
        }

        .job header {
            background-color: #003366;
            color: white;
            padding: 20px;
            border-radius: 10px 10px 0 0;
        }

        .job header h1 {
            font-size: 2rem;
            margin-bottom: 10px;
        }

        .job header h2 {
            font-size: 1.5rem;
            font-weight: normal;
        }

        .post-meta {
            font-size: 0.9rem;
            color: #cccccc;
        }

        .job-details {
            padding: 20px;
            background-color: white;
            border-radius: 0 0 10px 10px;
        }

        .job-type {
            font-size: 1.1rem;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .job-description {
            font-size: 1rem;
            margin-bottom: 20px;
            line-height: 1.6;
        }

        .how-to-apply {
            padding: 20px;
            background-color: #e6f2ff;
            border-left: 4px solid #003366;
            border-radius: 10px;
        }

        .how-to-apply h3 {
            font-size: 1.3rem;
            margin-bottom: 10px;
        }

        .application-instructions {
            font-size: 1rem;
            line-height: 1.6;
        }

        .actions {
            margin-top: 20px;
            text-align: center;
        }

        .actions .btn {
            margin: 5px;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 1rem;
        }

        .actions .btn-primary {
            background-color: #003366;
            color: white;
        }

        .actions .btn-secondary {
            background-color: #cccccc;
            color: black;
        }
    </style>
{% endblock %}

{% block body %}
    <article class=\"job\">
        <header>
            <h1>{{ job.position }}</h1>
            <h2>{{ job.company }} <small>({{ job.location }})</small></h2>
            <p class=\"post-meta\">Posted at  {{ job.createdat|date('F d, Y') }}</p>
        </header>

        <section class=\"job-details\">
            <p class=\"job-type\"><strong>Type de poste:</strong> {{ job.type }}</p>
            <div class=\"job-description\">
                {{ job.description|nl2br }}
            </div>
        </section>

        <section class=\"how-to-apply\">
            <h3>Comment postuler</h3>
            <div class=\"application-instructions\">
                {{ job.howToApply|nl2br }}
            </div>
        </section>
        <br>

        <footer class=\"actions\">
            <a class=\"btn btn-secondary\" href=\"{{ path('jobs_by_category', { 'category': job.category }) }}\">Retour</a>
            <a class=\"btn btn-primary\" href=\"{{ path('job.apply', { 'id': job.id }) }}\">Postuler Maintenant !!!</a>
        </footer>
    </article>
{% endblock %}
", "job/show.html.twig", "C:\\Users\\LENOVO\\Documents\\Stage\\Recruitment\\templates\\job\\show.html.twig");
    }
}
