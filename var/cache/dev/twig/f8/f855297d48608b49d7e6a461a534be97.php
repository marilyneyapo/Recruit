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

/* users/userspage.html.twig */
class __TwigTemplate_cf11b75c096b84288af94ef406a590b9 extends Template
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
            'title' => [$this, 'block_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/userspage.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/userspage.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "users/userspage.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Espace Utilisateur";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css\">

    ";
        // line 8
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <style>
        .dashboard-container {
            display: flex;
            min-height: calc(100vh - 100px);
        }
        
        .sidebar {
            width: 250px;
            background-color: #2c3e50;
            color: white;
            padding: 20px;
        }
        
        .sidebar h2 {
            font-size: 1.5rem;
            text-align: center;
            margin-bottom: 20px;
        }
        
        .sidebar ul {
            list-style: none;
            padding: 0;
        }
        
        .sidebar ul li {
            margin-bottom: 15px;
        }
        
        .sidebar ul li a {
            color: white;
            text-decoration: none;
            font-size: 1.1rem;
        }
        
        .main-content {
            flex: 1;
            padding: 20px;
            background-color: #ecf0f1;
        }
        
        .top-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }
        
        .search-bar input {
            width: 300px;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        
        .user-info {
            display: flex;
            align-items: center;
        }
        
        .user-info .notif-icon {
            margin-right: 10px;
        }
        
        .stats-container {
            display: flex;
            justify-content: space-between;
        }
        
        .stat-card {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 23%;
            text-align: center;
        }
        
        .stat-card h3 {
            font-size: 1.2rem;
            margin-bottom: 10px;
        }
        
        .stat-card p {
            font-size: 2rem;
            font-weight: bold;
            color: #27ae60;
        }
        
        .recent-offers {
            margin-top: 30px;
        }
        
        .recent-offers ul {
            list-style: none;
            padding: 0;
        }
        
        .recent-offers ul li {
            background-color: white;
            padding: 15px;
            margin-bottom: 10px;
            border-radius: 5px;
            box-shadow: 0 1px 5px rgba(0, 0, 0, 0.1);
        }
        
    
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 118
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

        // line 119
        yield "<div class=\"user-dashboard\">
    <div class=\"welcome-box\">
        <h1>Bienvenue ";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 121, $this->source); })()), "lastname", [], "any", false, false, false, 121), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 121, $this->source); })()), "firstname", [], "any", false, false, false, 121), "html", null, true);
        yield " !</h1>
    </div>

    <div class=\"dashboard-container\">
        <!-- Sidebar -->
        <div class=\"sidebar\">
            <h2>Tableau de Bord</h2>
            <ul>
                <li><a href=\"#\"><i class=\"fas fa-history\"></i> Historique des Offres</a></li>
                <li><a href=\"#\"><i class=\"fas fa-tachometer-alt\"></i> Statut des Offres</a></li>
                <li><a href=\"#\"><i class=\"fas fa-chart-line\"></i> Statistiques</a></li>
                <li><a href=\"";
        // line 132
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        yield "\"><i class=\"fas fa-user\"></i> Mon Profil</a></li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class=\"main-content\">
            <!-- Top Bar -->
            <div class=\"top-bar\">
                <div class=\"search-bar\">
                    <input type=\"text\" placeholder=\"Rechercher une offre...\">
                </div>
                <div class=\"user-info\">
                    <span class=\"notif-icon\">🔔</span>
                    <span class=\"user-name\">";
        // line 145
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 145, $this->source); })()), "firstname", [], "any", false, false, false, 145), "html", null, true);
        yield "</span>
                </div>
            </div>

            <!-- Dashboard Stats -->
            <div class=\"stats-container\">
                <div class=\"stat-card\">
                    <h3>Total Candidatures</h3>
                    <p>";
        // line 153
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 153, $this->source); })()), "totalApplications", [], "any", false, false, false, 153), "html", null, true);
        yield "</p>
                </div>
                <div class=\"stat-card\">
                    <h3>Candidatures Acceptées</h3>
                    <p>";
        // line 157
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 157, $this->source); })()), "accepted", [], "any", false, false, false, 157), "html", null, true);
        yield "</p>
                </div>
                <div class=\"stat-card\">
                    <h3>Candidatures en Attente</h3>
                    <p>";
        // line 161
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 161, $this->source); })()), "pending", [], "any", false, false, false, 161), "html", null, true);
        yield "</p>
                </div>
                <div class=\"stat-card\">
                    <h3>Candidatures Rejetées</h3>
                    <p>";
        // line 165
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 165, $this->source); })()), "rejected", [], "any", false, false, false, 165), "html", null, true);
        yield "</p>
                </div>
            </div>

            

            <!-- Recent Offers -->
            <div class=\"recent-offers\">
                <h3>Historique des Offres</h3>
                ";
        // line 174
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["offres"]) || array_key_exists("offres", $context) ? $context["offres"] : (function () { throw new RuntimeError('Variable "offres" does not exist.', 174, $this->source); })()))) {
            // line 175
            yield "                    <p>Aucune offre trouvée.</p>
                ";
        } else {
            // line 177
            yield "                    <ul>
                        ";
            // line 178
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["offres"]) || array_key_exists("offres", $context) ? $context["offres"] : (function () { throw new RuntimeError('Variable "offres" does not exist.', 178, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["offre"]) {
                // line 179
                yield "                            <li>
                                ";
                // line 180
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "position", [], "any", false, false, false, 180), "html", null, true);
                yield " - Statut : ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["offre"], "status", [], "any", false, false, false, 180), "html", null, true);
                yield "
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['offre'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 183
            yield "                    </ul>
                ";
        }
        // line 185
        yield "            </div>
        </div>
    </div>
</div>

<h2>Suggestions pour vous</h2>
";
        // line 191
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["suggestions"]) || array_key_exists("suggestions", $context) ? $context["suggestions"] : (function () { throw new RuntimeError('Variable "suggestions" does not exist.', 191, $this->source); })()))) {
            // line 192
            yield "    <p>Aucune suggestion d'emploi trouvée.</p>
";
        } else {
            // line 194
            yield "    <ul>
        ";
            // line 195
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["suggestions"]) || array_key_exists("suggestions", $context) ? $context["suggestions"] : (function () { throw new RuntimeError('Variable "suggestions" does not exist.', 195, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
                // line 196
                yield "            <li>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["job"], "position", [], "any", false, false, false, 196), "html", null, true);
                yield " - ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["job"], "category", [], "any", false, false, false, 196), "name", [], "any", false, false, false, 196), "html", null, true);
                yield "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['job'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 198
            yield "    </ul>
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
        return "users/userspage.html.twig";
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
        return array (  381 => 198,  370 => 196,  366 => 195,  363 => 194,  359 => 192,  357 => 191,  349 => 185,  345 => 183,  334 => 180,  331 => 179,  327 => 178,  324 => 177,  320 => 175,  318 => 174,  306 => 165,  299 => 161,  292 => 157,  285 => 153,  274 => 145,  258 => 132,  242 => 121,  238 => 119,  225 => 118,  105 => 8,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Espace Utilisateur{% endblock %}

{% block stylesheets %}
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css\">

    {{ parent() }}
    <style>
        .dashboard-container {
            display: flex;
            min-height: calc(100vh - 100px);
        }
        
        .sidebar {
            width: 250px;
            background-color: #2c3e50;
            color: white;
            padding: 20px;
        }
        
        .sidebar h2 {
            font-size: 1.5rem;
            text-align: center;
            margin-bottom: 20px;
        }
        
        .sidebar ul {
            list-style: none;
            padding: 0;
        }
        
        .sidebar ul li {
            margin-bottom: 15px;
        }
        
        .sidebar ul li a {
            color: white;
            text-decoration: none;
            font-size: 1.1rem;
        }
        
        .main-content {
            flex: 1;
            padding: 20px;
            background-color: #ecf0f1;
        }
        
        .top-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }
        
        .search-bar input {
            width: 300px;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        
        .user-info {
            display: flex;
            align-items: center;
        }
        
        .user-info .notif-icon {
            margin-right: 10px;
        }
        
        .stats-container {
            display: flex;
            justify-content: space-between;
        }
        
        .stat-card {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 23%;
            text-align: center;
        }
        
        .stat-card h3 {
            font-size: 1.2rem;
            margin-bottom: 10px;
        }
        
        .stat-card p {
            font-size: 2rem;
            font-weight: bold;
            color: #27ae60;
        }
        
        .recent-offers {
            margin-top: 30px;
        }
        
        .recent-offers ul {
            list-style: none;
            padding: 0;
        }
        
        .recent-offers ul li {
            background-color: white;
            padding: 15px;
            margin-bottom: 10px;
            border-radius: 5px;
            box-shadow: 0 1px 5px rgba(0, 0, 0, 0.1);
        }
        
    
    </style>
{% endblock %}

{% block body %}
<div class=\"user-dashboard\">
    <div class=\"welcome-box\">
        <h1>Bienvenue {{ user.lastname }} {{ user.firstname }} !</h1>
    </div>

    <div class=\"dashboard-container\">
        <!-- Sidebar -->
        <div class=\"sidebar\">
            <h2>Tableau de Bord</h2>
            <ul>
                <li><a href=\"#\"><i class=\"fas fa-history\"></i> Historique des Offres</a></li>
                <li><a href=\"#\"><i class=\"fas fa-tachometer-alt\"></i> Statut des Offres</a></li>
                <li><a href=\"#\"><i class=\"fas fa-chart-line\"></i> Statistiques</a></li>
                <li><a href=\"{{ path('app_profile') }}\"><i class=\"fas fa-user\"></i> Mon Profil</a></li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class=\"main-content\">
            <!-- Top Bar -->
            <div class=\"top-bar\">
                <div class=\"search-bar\">
                    <input type=\"text\" placeholder=\"Rechercher une offre...\">
                </div>
                <div class=\"user-info\">
                    <span class=\"notif-icon\">🔔</span>
                    <span class=\"user-name\">{{ user.firstname }}</span>
                </div>
            </div>

            <!-- Dashboard Stats -->
            <div class=\"stats-container\">
                <div class=\"stat-card\">
                    <h3>Total Candidatures</h3>
                    <p>{{ stats.totalApplications }}</p>
                </div>
                <div class=\"stat-card\">
                    <h3>Candidatures Acceptées</h3>
                    <p>{{ stats.accepted }}</p>
                </div>
                <div class=\"stat-card\">
                    <h3>Candidatures en Attente</h3>
                    <p>{{ stats.pending }}</p>
                </div>
                <div class=\"stat-card\">
                    <h3>Candidatures Rejetées</h3>
                    <p>{{ stats.rejected }}</p>
                </div>
            </div>

            

            <!-- Recent Offers -->
            <div class=\"recent-offers\">
                <h3>Historique des Offres</h3>
                {% if offres is empty %}
                    <p>Aucune offre trouvée.</p>
                {% else %}
                    <ul>
                        {% for offre in offres %}
                            <li>
                                {{ offre.position }} - Statut : {{ offre.status }}
                            </li>
                        {% endfor %}
                    </ul>
                {% endif %}
            </div>
        </div>
    </div>
</div>

<h2>Suggestions pour vous</h2>
{% if suggestions is empty %}
    <p>Aucune suggestion d'emploi trouvée.</p>
{% else %}
    <ul>
        {% for job in suggestions %}
            <li>{{ job.position }} - {{ job.category.name }}</li>
        {% endfor %}
    </ul>
{% endif %}
{% endblock %}


", "users/userspage.html.twig", "C:\\Users\\LENOVO\\Documents\\Stage\\Recruitment\\templates\\users\\userspage.html.twig");
    }
}
