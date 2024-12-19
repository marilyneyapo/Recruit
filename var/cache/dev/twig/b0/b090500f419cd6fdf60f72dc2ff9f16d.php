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
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "@EasyAdmin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/notification.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/notification.html.twig"));

        $this->parent = $this->loadTemplate("@EasyAdmin/layout.html.twig", "admin/notification.html.twig", 1);
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
    ";
        // line 5
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 22
        yield "

    <div class=\"notification-container\">
        <h1>Boîte de Réception des Candidatures</h1>

        <!-- Bouton Analyser -->
        <button id=\"analyzeAllButton\" class=\"analyze-button\" onclick=\"showLoadingMessage()\">Analyser les candidatures</button>

        <div id=\"loadingMessage\" class=\"loading-message\" style=\"display:none;\">
            Fonctionnalité pas encore disponible...
            <div class=\"spinner\"></div>
        </div>


        ";
        // line 36
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["candidats"]) || array_key_exists("candidats", $context) ? $context["candidats"] : (function () { throw new RuntimeError('Variable "candidats" does not exist.', 36, $this->source); })())) > 0)) {
            // line 37
            yield "            <div class=\"notification-list\">
                ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["candidats"]) || array_key_exists("candidats", $context) ? $context["candidats"] : (function () { throw new RuntimeError('Variable "candidats" does not exist.', 38, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["candidat"]) {
                // line 39
                yield "                    <div class=\"notification-item ";
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["candidat"], "isRead", [], "any", false, false, false, 39)) {
                    yield "notification-unread";
                } else {
                    yield "notification-read";
                }
                yield "\">
                        <div class=\"notification-header\">
                            <span class=\"sender\">
                                ";
                // line 42
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["candidat"], "user", [], "any", false, false, false, 42), "firstName", [], "any", false, false, false, 42), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["candidat"], "user", [], "any", false, false, false, 42), "lastName", [], "any", false, false, false, 42), "html", null, true);
                yield "
                            </span>
                            <span class=\"timestamp\">
                                ";
                // line 45
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["candidat"], "createdAt", [], "any", false, false, false, 45), "d/m/Y H:i"), "html", null, true);
                yield "
                            </span>
                        </div>
                        <div class=\"notification-body\">
                            ";
                // line 49
                if (CoreExtension::getAttribute($this->env, $this->source, $context["candidat"], "job", [], "any", false, false, false, 49)) {
                    // line 50
                    yield "                                    <p>Nouvelle candidature pour le poste : <strong>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["candidat"], "job", [], "any", false, false, false, 50), "position", [], "any", false, false, false, 50), "html", null, true);
                    yield "</strong></p>
                                ";
                } else {
                    // line 52
                    yield "                                    <p>Nouvelle candidature sans poste associé.</p>
                            ";
                }
                // line 53
                yield "   
                        </div>
                        <div class=\"notification-actions\">
                            <a href=\"";
                // line 56
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("candidature_details", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["candidat"], "id", [], "any", false, false, false, 56)]), "html", null, true);
                yield "\" class=\"btn btn-primary\">Voir les détails</a>
                        </div>

                        <div class=\"notification-actions\">
                            <div class=\"status-dropdown\">
                                <button class=\"status-toggle\">Statut</button>
                                <ul class=\"status-options\">
                                    <li>
                                        <a href=\"";
                // line 64
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_statut", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["candidat"], "id", [], "any", false, false, false, 64), "statut" => "en_attente"]), "html", null, true);
                yield "\">En attente</a>
                                    </li>
                                    <li>
                                        <a href=\"";
                // line 67
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_statut", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["candidat"], "id", [], "any", false, false, false, 67), "statut" => "acceptee"]), "html", null, true);
                yield "\">Acceptée</a>
                                    </li>
                                    <li>
                                        <a href=\"";
                // line 70
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_statut", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["candidat"], "id", [], "any", false, false, false, 70), "statut" => "refusee"]), "html", null, true);
                yield "\">Refusée</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['candidat'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            yield "            </div>
        ";
        } else {
            // line 80
            yield "            <div class=\"alert alert-warning\">Aucune candidature disponible.</div>
        ";
        }
        // line 82
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

        /* Dropdown pour le statut */
        .status-dropdown {
            position: relative;
            display: inline-block;
            margin-top: 10px;
        }

        .status-toggle {
            padding: 8px 12px;
            font-size: 14px;
            background-color: #6c757d;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .status-toggle:hover {
            background-color: #5a6268;
        }

        .status-options {
            display: none;
            position: absolute;
            top: 40px;
            left: 0;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 4px;
            list-style: none;
            padding: 5px 0;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            z-index: 100;
        }

        .status-options li {
            padding: 8px 12px;
            font-size: 14px;
            color: #444;
            cursor: pointer;
            white-space: nowrap;
        }

        .status-options li:hover {
            background-color: #f1f1f1;
        }

        .status-dropdown:hover .status-options {
            display: block;
        }

        /* Styles pour le bouton \"Analyser\" */
        .analyze-button {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-bottom: 20px;
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

    // line 5
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

        // line 6
        yield "        <script>
            function showLoadingMessage() {
                console.log('La fonction showLoadingMessage est appelée');
                
                // Cacher le bouton \"Analyser\"
                document.getElementById('analyzeAllButton').style.display = 'none';
                // Afficher le message de chargement
                document.getElementById('loadingMessage').style.display = 'block';

                setTimeout(function() {
                    document.getElementById('loadingMessage').style.display = 'none';
                }, 1000000);
            }

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
        return array (  413 => 6,  400 => 5,  195 => 82,  191 => 80,  187 => 78,  173 => 70,  167 => 67,  161 => 64,  150 => 56,  145 => 53,  141 => 52,  135 => 50,  133 => 49,  126 => 45,  118 => 42,  107 => 39,  103 => 38,  100 => 37,  98 => 36,  82 => 22,  80 => 5,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends '@EasyAdmin/layout.html.twig' %}

{% block content %}

    {% block javascripts %}
        <script>
            function showLoadingMessage() {
                console.log('La fonction showLoadingMessage est appelée');
                
                // Cacher le bouton \"Analyser\"
                document.getElementById('analyzeAllButton').style.display = 'none';
                // Afficher le message de chargement
                document.getElementById('loadingMessage').style.display = 'block';

                setTimeout(function() {
                    document.getElementById('loadingMessage').style.display = 'none';
                }, 1000000);
            }

        </script>
    {% endblock %}


    <div class=\"notification-container\">
        <h1>Boîte de Réception des Candidatures</h1>

        <!-- Bouton Analyser -->
        <button id=\"analyzeAllButton\" class=\"analyze-button\" onclick=\"showLoadingMessage()\">Analyser les candidatures</button>

        <div id=\"loadingMessage\" class=\"loading-message\" style=\"display:none;\">
            Fonctionnalité pas encore disponible...
            <div class=\"spinner\"></div>
        </div>


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

                        <div class=\"notification-actions\">
                            <div class=\"status-dropdown\">
                                <button class=\"status-toggle\">Statut</button>
                                <ul class=\"status-options\">
                                    <li>
                                        <a href=\"{{ path('update_statut', {id: candidat.id, statut: 'en_attente'}) }}\">En attente</a>
                                    </li>
                                    <li>
                                        <a href=\"{{ path('update_statut', {id: candidat.id, statut: 'acceptee'}) }}\">Acceptée</a>
                                    </li>
                                    <li>
                                        <a href=\"{{ path('update_statut', {id: candidat.id, statut: 'refusee'}) }}\">Refusée</a>
                                    </li>
                                </ul>
                            </div>
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

        /* Dropdown pour le statut */
        .status-dropdown {
            position: relative;
            display: inline-block;
            margin-top: 10px;
        }

        .status-toggle {
            padding: 8px 12px;
            font-size: 14px;
            background-color: #6c757d;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .status-toggle:hover {
            background-color: #5a6268;
        }

        .status-options {
            display: none;
            position: absolute;
            top: 40px;
            left: 0;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 4px;
            list-style: none;
            padding: 5px 0;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            z-index: 100;
        }

        .status-options li {
            padding: 8px 12px;
            font-size: 14px;
            color: #444;
            cursor: pointer;
            white-space: nowrap;
        }

        .status-options li:hover {
            background-color: #f1f1f1;
        }

        .status-dropdown:hover .status-options {
            display: block;
        }

        /* Styles pour le bouton \"Analyser\" */
        .analyze-button {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-bottom: 20px;
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



", "admin/notification.html.twig", "C:\\Users\\LENOVO\\Documents\\Stage\\Recruitment\\templates\\admin\\notification.html.twig");
    }
}
