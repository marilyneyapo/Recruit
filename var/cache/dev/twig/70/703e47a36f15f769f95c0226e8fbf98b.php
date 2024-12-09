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

/* admin/candidature_details.html.twig */
class __TwigTemplate_c6873f2344a671bcbdd8a0fc7e1cd1eb extends Template
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
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "@EasyAdmin/page/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/candidature_details.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/candidature_details.html.twig"));

        $this->parent = $this->loadTemplate("@EasyAdmin/page/content.html.twig", "admin/candidature_details.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        yield "
    <div class=\"candidature-details\">
        <h2>Détails de la candidature</h2>
        
        <div class=\"info-section\">
            <p><strong>Nom :</strong> ";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["candidat"]) || array_key_exists("candidat", $context) ? $context["candidat"] : (function () { throw new RuntimeError('Variable "candidat" does not exist.', 9, $this->source); })()), "user", [], "any", false, false, false, 9), "firstName", [], "any", false, false, false, 9), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["candidat"]) || array_key_exists("candidat", $context) ? $context["candidat"] : (function () { throw new RuntimeError('Variable "candidat" does not exist.', 9, $this->source); })()), "user", [], "any", false, false, false, 9), "lastName", [], "any", false, false, false, 9), "html", null, true);
        yield "</p>
            <p><strong>Email :</strong> ";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["candidat"]) || array_key_exists("candidat", $context) ? $context["candidat"] : (function () { throw new RuntimeError('Variable "candidat" does not exist.', 10, $this->source); })()), "user", [], "any", false, false, false, 10), "email", [], "any", false, false, false, 10), "html", null, true);
        yield "</p>
            <p><strong>Score :</strong> ";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["candidat"]) || array_key_exists("candidat", $context) ? $context["candidat"] : (function () { throw new RuntimeError('Variable "candidat" does not exist.', 11, $this->source); })()), "cv", [], "any", false, false, false, 11), "score", [], "any", false, false, false, 11), "html", null, true);
        yield "</p>

            <p><strong>Poste candidaté :</strong>


                ";
        // line 16
        if ( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["candidat"]) || array_key_exists("candidat", $context) ? $context["candidat"] : (function () { throw new RuntimeError('Variable "candidat" does not exist.', 16, $this->source); })()), "job", [], "any", false, false, false, 16))) {
            // line 17
            yield "                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["candidat"]) || array_key_exists("candidat", $context) ? $context["candidat"] : (function () { throw new RuntimeError('Variable "candidat" does not exist.', 17, $this->source); })()), "job", [], "any", false, false, false, 17), "position", [], "any", false, false, false, 17), "html", null, true);
            yield "
                    ";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["candidat"]) || array_key_exists("candidat", $context) ? $context["candidat"] : (function () { throw new RuntimeError('Variable "candidat" does not exist.', 18, $this->source); })()), "job", [], "any", false, false, false, 18), "company", [], "any", false, false, false, 18), "html", null, true);
            yield "

                ";
        } else {
            // line 21
            yield "                    <em>Aucune offre disponible</em>
                ";
        }
        // line 23
        yield "            </p>
            <p><strong>Date de candidature :</strong> ";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["candidat"]) || array_key_exists("candidat", $context) ? $context["candidat"] : (function () { throw new RuntimeError('Variable "candidat" does not exist.', 24, $this->source); })()), "createdAt", [], "any", false, false, false, 24), "Y-m-d H:i"), "html", null, true);
        yield "</p>
        </div>

        <div class=\"cv-section\">
            <p><strong>CV :</strong></p>
            ";
        // line 29
        if ( !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["candidat"]) || array_key_exists("candidat", $context) ? $context["candidat"] : (function () { throw new RuntimeError('Variable "candidat" does not exist.', 29, $this->source); })()), "user", [], "any", false, false, false, 29), "getCvFile", [], "method", false, false, false, 29))) {
            // line 30
            yield "                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/cvs/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["candidat"]) || array_key_exists("candidat", $context) ? $context["candidat"] : (function () { throw new RuntimeError('Variable "candidat" does not exist.', 30, $this->source); })()), "user", [], "any", false, false, false, 30), "getCvFile", [], "method", false, false, false, 30))), "html", null, true);
            yield "\" target=\"_blank\" class=\"btn btn-primary\">Télécharger le CV</a>
            ";
        } else {
            // line 32
            yield "                <em>Aucun CV téléchargé</em>
            ";
        }
        // line 34
        yield "        </div>
       

        <div class=\"reply-section\">
            <h3>Répondre au candidat</h3>
            <form method=\"post\" action=\"";
        // line 39
        yield "\">
                <textarea name=\"responseMessage\" rows=\"6\" class=\"form-control\" placeholder=\"Votre réponse...\"></textarea>
                <button type=\"submit\" class=\"btn btn-success mt-3\">Envoyer la réponse</button>
            </form>
        </div>
    </div>

    <style>
        .candidature-details {
            max-width: 800px;
            margin: 30px auto;
            background-color: #fff;
            padding: 25px;
            border-radius: 8px;
            border: 1px solid #ddd;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .candidature-details h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        .info-section, .cv-section, .response-section, .reply-section {
            margin-bottom: 20px;
        }

        .info-section p, .cv-section p {
            font-size: 16px;
            line-height: 1.6;
        }

        .btn {
            padding: 10px 20px;
            font-size: 14px;
            border-radius: 5px;
            text-decoration: none;
        }

        .btn-primary {
            background-color: #007bff;
            color: #fff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .btn-success {
            background-color: #28a745;
            color: #fff;
        }

        .btn-success:hover {
            background-color: #218838;
        }

        .response-list {
            list-style-type: none;
            padding-left: 0;
        }

        .response-list li {
            background-color: #f8f9fa;
            border: 1px solid #e1e1e1;
            padding: 10px;
            border-radius: 4px;
            margin-bottom: 10px;
        }

        .reply-section textarea {
            width: 100%;
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 10px;
            font-size: 14px;
            resize: vertical;
        }

        .reply-section button {
            padding: 12px 20px;
            border: none;
            background-color: #28a745;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }

        .reply-section button:hover {
            background-color: #218838;
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
        return "admin/candidature_details.html.twig";
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
        return array (  148 => 39,  141 => 34,  137 => 32,  131 => 30,  129 => 29,  121 => 24,  118 => 23,  114 => 21,  108 => 18,  103 => 17,  101 => 16,  93 => 11,  89 => 10,  83 => 9,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends '@EasyAdmin/page/content.html.twig' %}

{% block content %}

    <div class=\"candidature-details\">
        <h2>Détails de la candidature</h2>
        
        <div class=\"info-section\">
            <p><strong>Nom :</strong> {{ candidat.user.firstName }} {{ candidat.user.lastName }}</p>
            <p><strong>Email :</strong> {{ candidat.user.email }}</p>
            <p><strong>Score :</strong> {{ candidat.cv.score }}</p>

            <p><strong>Poste candidaté :</strong>


                {% if candidat.job is not null %}
                    {{ candidat.job.position }}
                    {{ candidat.job.company }}

                {% else %}
                    <em>Aucune offre disponible</em>
                {% endif %}
            </p>
            <p><strong>Date de candidature :</strong> {{ candidat.createdAt|date('Y-m-d H:i') }}</p>
        </div>

        <div class=\"cv-section\">
            <p><strong>CV :</strong></p>
            {% if candidat.user.getCvFile() is not null %}
                <a href=\"{{ asset('uploads/cvs/' ~ candidat.user.getCvFile()) }}\" target=\"_blank\" class=\"btn btn-primary\">Télécharger le CV</a>
            {% else %}
                <em>Aucun CV téléchargé</em>
            {% endif %}
        </div>
       

        <div class=\"reply-section\">
            <h3>Répondre au candidat</h3>
            <form method=\"post\" action=\"{#{ path('reply_to_candidate', {id: candidat.id}) }#}\">
                <textarea name=\"responseMessage\" rows=\"6\" class=\"form-control\" placeholder=\"Votre réponse...\"></textarea>
                <button type=\"submit\" class=\"btn btn-success mt-3\">Envoyer la réponse</button>
            </form>
        </div>
    </div>

    <style>
        .candidature-details {
            max-width: 800px;
            margin: 30px auto;
            background-color: #fff;
            padding: 25px;
            border-radius: 8px;
            border: 1px solid #ddd;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .candidature-details h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        .info-section, .cv-section, .response-section, .reply-section {
            margin-bottom: 20px;
        }

        .info-section p, .cv-section p {
            font-size: 16px;
            line-height: 1.6;
        }

        .btn {
            padding: 10px 20px;
            font-size: 14px;
            border-radius: 5px;
            text-decoration: none;
        }

        .btn-primary {
            background-color: #007bff;
            color: #fff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .btn-success {
            background-color: #28a745;
            color: #fff;
        }

        .btn-success:hover {
            background-color: #218838;
        }

        .response-list {
            list-style-type: none;
            padding-left: 0;
        }

        .response-list li {
            background-color: #f8f9fa;
            border: 1px solid #e1e1e1;
            padding: 10px;
            border-radius: 4px;
            margin-bottom: 10px;
        }

        .reply-section textarea {
            width: 100%;
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 10px;
            font-size: 14px;
            resize: vertical;
        }

        .reply-section button {
            padding: 12px 20px;
            border: none;
            background-color: #28a745;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }

        .reply-section button:hover {
            background-color: #218838;
        }

    </style>

{% endblock %}
", "admin/candidature_details.html.twig", "C:\\Users\\LENOVO\\Documents\\Stage\\Recruitment\\templates\\admin\\candidature_details.html.twig");
    }
}
