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

/* admin/notification.html.twig */
class __TwigTemplate_f086918121a236c5f05308c57648035a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/notification.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/notification.html.twig"));

        $this->parent = $this->loadTemplate("@EasyAdmin/page/content.html.twig", "admin/notification.html.twig", 1);
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
    <div class=\"notification-container\">
        <h1>Boîte de Réception des Candidatures</h1>

        ";
        // line 8
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["candidats"]) || array_key_exists("candidats", $context) ? $context["candidats"] : (function () { throw new RuntimeError('Variable "candidats" does not exist.', 8, $this->source); })())) > 0)) {
            // line 9
            yield "            <div class=\"notification-list\">
                ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["candidats"]) || array_key_exists("candidats", $context) ? $context["candidats"] : (function () { throw new RuntimeError('Variable "candidats" does not exist.', 10, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["candidat"]) {
                // line 11
                yield "                    <div class=\"notification-item ";
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["candidat"], "isRead", [], "any", false, false, false, 11)) {
                    yield "notification-unread";
                } else {
                    yield "notification-read";
                }
                yield "\">
                        <div class=\"notification-header\">
                            <span class=\"sender\">
                                ";
                // line 14
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["candidat"], "user", [], "any", false, false, false, 14), "firstName", [], "any", false, false, false, 14), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["candidat"], "user", [], "any", false, false, false, 14), "lastName", [], "any", false, false, false, 14), "html", null, true);
                yield "
                            </span>
                            <span class=\"timestamp\">
                                ";
                // line 17
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["candidat"], "createdAt", [], "any", false, false, false, 17), "d/m/Y H:i"), "html", null, true);
                yield "
                            </span>
                        </div>
                        <div class=\"notification-body\">
                            ";
                // line 21
                if (CoreExtension::getAttribute($this->env, $this->source, $context["candidat"], "job", [], "any", false, false, false, 21)) {
                    // line 22
                    yield "                                    <p>Nouvelle candidature pour le poste : <strong>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["candidat"], "job", [], "any", false, false, false, 22), "position", [], "any", false, false, false, 22), "html", null, true);
                    yield "</strong></p>
                                ";
                } else {
                    // line 24
                    yield "                                    <p>Nouvelle candidature sans poste associé.</p>
                            ";
                }
                // line 25
                yield "   
                        </div>
                        <div class=\"notification-actions\">
                            <a href=\"";
                // line 28
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("candidature_details", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["candidat"], "id", [], "any", false, false, false, 28)]), "html", null, true);
                yield "\" class=\"btn btn-primary\">Voir les détails</a>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['candidat'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            yield "            </div>
        ";
        } else {
            // line 34
            yield "            <div class=\"alert alert-warning\">Aucune candidature disponible.</div>
        ";
        }
        // line 36
        yield "    </div>

    <style>
        /* Container principal */
        .notification-container {
            max-width: 900px;
            margin: auto;
            padding: 20px;
            background-color: #f7f9fc;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
            text-align: center;
            color: #333;
        }

        /* Liste des notifications */
        .notification-list {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        /* Une seule notification */
        .notification-item {
            display: flex;
            flex-direction: column;
            padding: 15px;
            border-radius: 6px;
            border: 1px solid #dfe4ea;
            background-color: #ffffff;
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .notification-item:hover {
            transform: scale(1.02);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        /* Notification non lue */
        .notification-unread {
            border-left: 5px solid #007bff;
            background-color: #eaf4fe;
        }

        /* Notification lue */
        .notification-read {
            border-left: 5px solid #dfe4ea;
        }

        /* En-tête de notification */
        .notification-header {
            display: flex;
            justify-content: space-between;
            font-size: 14px;
            color: #555;
        }

        .sender {
            font-weight: bold;
            color: #333;
        }

        .timestamp {
            font-size: 12px;
            color: #888;
        }

        /* Corps de la notification */
        .notification-body {
            margin-top: 10px;
            font-size: 16px;
            color: #444;
        }

        /* Boutons d'actions */
        .notification-actions {
            margin-top: 15px;
        }

        .btn-primary {
            padding: 8px 12px;
            font-size: 14px;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .btn-primary:hover {
            background-color: #0056b3;
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
        return "admin/notification.html.twig";
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
        return array (  152 => 36,  148 => 34,  144 => 32,  134 => 28,  129 => 25,  125 => 24,  119 => 22,  117 => 21,  110 => 17,  102 => 14,  91 => 11,  87 => 10,  84 => 9,  82 => 8,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends '@EasyAdmin/page/content.html.twig' %}

{% block content %}

    <div class=\"notification-container\">
        <h1>Boîte de Réception des Candidatures</h1>

        {% if candidats|length > 0 %}
            <div class=\"notification-list\">
                {% for candidat in candidats %}
                    <div class=\"notification-item {% if not candidat.isRead %}notification-unread{% else %}notification-read{% endif %}\">
                        <div class=\"notification-header\">
                            <span class=\"sender\">
                                {{ candidat.user.firstName }} {{ candidat.user.lastName }}
                            </span>
                            <span class=\"timestamp\">
                                {{ candidat.createdAt|date('d/m/Y H:i') }}
                            </span>
                        </div>
                        <div class=\"notification-body\">
                            {% if candidat.job %}
                                    <p>Nouvelle candidature pour le poste : <strong>{{ candidat.job.position }}</strong></p>
                                {% else %}
                                    <p>Nouvelle candidature sans poste associé.</p>
                            {% endif %}   
                        </div>
                        <div class=\"notification-actions\">
                            <a href=\"{{ path('candidature_details', {id: candidat.id}) }}\" class=\"btn btn-primary\">Voir les détails</a>
                        </div>
                    </div>
                {% endfor %}
            </div>
        {% else %}
            <div class=\"alert alert-warning\">Aucune candidature disponible.</div>
        {% endif %}
    </div>

    <style>
        /* Container principal */
        .notification-container {
            max-width: 900px;
            margin: auto;
            padding: 20px;
            background-color: #f7f9fc;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
            text-align: center;
            color: #333;
        }

        /* Liste des notifications */
        .notification-list {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        /* Une seule notification */
        .notification-item {
            display: flex;
            flex-direction: column;
            padding: 15px;
            border-radius: 6px;
            border: 1px solid #dfe4ea;
            background-color: #ffffff;
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .notification-item:hover {
            transform: scale(1.02);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        /* Notification non lue */
        .notification-unread {
            border-left: 5px solid #007bff;
            background-color: #eaf4fe;
        }

        /* Notification lue */
        .notification-read {
            border-left: 5px solid #dfe4ea;
        }

        /* En-tête de notification */
        .notification-header {
            display: flex;
            justify-content: space-between;
            font-size: 14px;
            color: #555;
        }

        .sender {
            font-weight: bold;
            color: #333;
        }

        .timestamp {
            font-size: 12px;
            color: #888;
        }

        /* Corps de la notification */
        .notification-body {
            margin-top: 10px;
            font-size: 16px;
            color: #444;
        }

        /* Boutons d'actions */
        .notification-actions {
            margin-top: 15px;
        }

        .btn-primary {
            padding: 8px 12px;
            font-size: 14px;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>

{% endblock %}
", "admin/notification.html.twig", "C:\\Users\\LENOVO\\Documents\\Stage\\Recruitment\\templates\\admin\\notification.html.twig");
    }
}
