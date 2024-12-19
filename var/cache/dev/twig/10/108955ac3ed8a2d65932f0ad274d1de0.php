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

/* admin/dashboard.html.twig */
class __TwigTemplate_2b7e72314f497912dacb7589e3ad946a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard.html.twig"));

        $this->parent = $this->loadTemplate("@EasyAdmin/layout.html.twig", "admin/dashboard.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<style>
    .content {
        color: #fff;
        text-align: center;
    }

    .chart-row {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        margin: 20px 0;
    }

    .chart-card {
        flex: 0 1 45%;
        margin: 10px;
        background-color: #222;
        border-radius: 15px;
        padding: 20px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
    }

    .chart-card h4 {
        color: #fff;
        margin-bottom: 15px;
    }

    canvas {
        background-color: #fff;
        border-radius: 10px;
        width: 100% !important;
        height: 400px !important; /* ajustez cette taille selon vos besoins */
        max-width: 600px; /* taille maximale */
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 44
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

        // line 45
        yield "    <div class=\"content\">
        <h2>Tableau de Bord Interactif</h2>

        <!-- Ligne de graphiques -->
        <div class=\"chart-row\">
            <div class=\"chart-card\">
                <h4>Courbe d'Évolution des Postulants</h4>
                <canvas id=\"lineChart\"></canvas>
            </div>
            

            <div class=\"chart-card\">
                <h4>Histogramme des Visites Mensuelles</h4>
                <canvas id=\"barChart\"></canvas>
            </div>
        </div>

        <!-- Deuxième ligne de graphiques -->
        <div class=\"chart-row\">
            <div class=\"chart-card\">
                <h4>Radar des Compétences Postulants</h4>
                <canvas id=\"radarChart\"></canvas>
            </div>
            <div class=\"chart-card\">
                <h4>Graphique à Secteurs des Offres par Catégorie</h4>
                <canvas id=\"pieChart\"></canvas>
            </div>
        </div>
    </div>
    ";
        // line 74
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 183
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 74
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

        // line 75
        yield "
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Courbe d'évolution des postulants
            const lineChart = new Chart(document.getElementById('lineChart'), {
                type: 'line',
                data: {
                    labels: ['Jan', 'Fév', 'Mar', 'Avr', 'Mai', 'Juin', 'Juil', 'Août'],
                    datasets: [{
                        label: 'Postulants',
                        data: [10, 20, 30, 40, 35, 50, 60, 70],
                        borderColor: 'rgba(54, 162, 235, 1)',
                        backgroundColor: 'rgba(54, 162, 235, 0.5)',
                        fill: true,
                        tension: 0.4,
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: { position: 'top' }
                    }
                }
            });

            // Histogramme des visites
            const barChart = new Chart(document.getElementById('barChart'), {
                type: 'bar',
                data: {
                    labels: ['Jan', 'Fév', 'Mar', 'Avr', 'Mai', 'Juin', 'Juil', 'Août'],
                    datasets: [{
                        label: 'Visites',
                        data: [100, 200, 150, 300, 250, 400, 450, 500],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.6)',
                            'rgba(54, 162, 235, 0.6)',
                            'rgba(255, 206, 86, 0.6)',
                            'rgba(75, 192, 192, 0.6)',
                            'rgba(153, 102, 255, 0.6)',
                            'rgba(255, 159, 64, 0.6)',
                            'rgba(54, 162, 235, 0.6)',
                            'rgba(255, 99, 132, 0.6)'
                        ],
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: { position: 'top' }
                    },
                    scales: {
                        y: { beginAtZero: true }
                    }
                }
            });

            // Radar des compétences
            const radarChart = new Chart(document.getElementById('radarChart'), {
                type: 'radar',
                data: {
                    labels: ['JavaScript', 'Python', 'PHP', 'Java', 'C++'],
                    datasets: [{
                        label: 'Compétences',
                        data: [85, 70, 90, 65, 75],
                        backgroundColor: 'rgba(153, 102, 255, 0.2)',
                        borderColor: 'rgba(153, 102, 255, 1)',
                        borderWidth: 2
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: { position: 'top' }
                    }
                }
            });

            // Graphique à secteurs
            const pieChart = new Chart(document.getElementById('pieChart'), {
                type: 'pie',
                data: {
                    labels: ['Développeur', 'RH', 'Marketing', 'Finance', 'Logistique'],
                    datasets: [{
                        label: 'Offres',
                        data: [40, 20, 30, 10, 25],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.6)',
                            'rgba(54, 162, 235, 0.6)',
                            'rgba(255, 206, 86, 0.6)',
                            'rgba(75, 192, 192, 0.6)',
                            'rgba(153, 102, 255, 0.6)'
                        ]
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: { position: 'top' }
                    }
                }
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
        return "admin/dashboard.html.twig";
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
        return array (  197 => 75,  184 => 74,  172 => 183,  170 => 74,  139 => 45,  126 => 44,  78 => 6,  65 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends '@EasyAdmin/layout.html.twig' %}



{% block stylesheets %}
{{ parent() }}
<style>
    .content {
        color: #fff;
        text-align: center;
    }

    .chart-row {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        margin: 20px 0;
    }

    .chart-card {
        flex: 0 1 45%;
        margin: 10px;
        background-color: #222;
        border-radius: 15px;
        padding: 20px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
    }

    .chart-card h4 {
        color: #fff;
        margin-bottom: 15px;
    }

    canvas {
        background-color: #fff;
        border-radius: 10px;
        width: 100% !important;
        height: 400px !important; /* ajustez cette taille selon vos besoins */
        max-width: 600px; /* taille maximale */
    }
</style>
{% endblock %}

{% block content %}
    <div class=\"content\">
        <h2>Tableau de Bord Interactif</h2>

        <!-- Ligne de graphiques -->
        <div class=\"chart-row\">
            <div class=\"chart-card\">
                <h4>Courbe d'Évolution des Postulants</h4>
                <canvas id=\"lineChart\"></canvas>
            </div>
            

            <div class=\"chart-card\">
                <h4>Histogramme des Visites Mensuelles</h4>
                <canvas id=\"barChart\"></canvas>
            </div>
        </div>

        <!-- Deuxième ligne de graphiques -->
        <div class=\"chart-row\">
            <div class=\"chart-card\">
                <h4>Radar des Compétences Postulants</h4>
                <canvas id=\"radarChart\"></canvas>
            </div>
            <div class=\"chart-card\">
                <h4>Graphique à Secteurs des Offres par Catégorie</h4>
                <canvas id=\"pieChart\"></canvas>
            </div>
        </div>
    </div>
    {% block javascripts %}

    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Courbe d'évolution des postulants
            const lineChart = new Chart(document.getElementById('lineChart'), {
                type: 'line',
                data: {
                    labels: ['Jan', 'Fév', 'Mar', 'Avr', 'Mai', 'Juin', 'Juil', 'Août'],
                    datasets: [{
                        label: 'Postulants',
                        data: [10, 20, 30, 40, 35, 50, 60, 70],
                        borderColor: 'rgba(54, 162, 235, 1)',
                        backgroundColor: 'rgba(54, 162, 235, 0.5)',
                        fill: true,
                        tension: 0.4,
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: { position: 'top' }
                    }
                }
            });

            // Histogramme des visites
            const barChart = new Chart(document.getElementById('barChart'), {
                type: 'bar',
                data: {
                    labels: ['Jan', 'Fév', 'Mar', 'Avr', 'Mai', 'Juin', 'Juil', 'Août'],
                    datasets: [{
                        label: 'Visites',
                        data: [100, 200, 150, 300, 250, 400, 450, 500],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.6)',
                            'rgba(54, 162, 235, 0.6)',
                            'rgba(255, 206, 86, 0.6)',
                            'rgba(75, 192, 192, 0.6)',
                            'rgba(153, 102, 255, 0.6)',
                            'rgba(255, 159, 64, 0.6)',
                            'rgba(54, 162, 235, 0.6)',
                            'rgba(255, 99, 132, 0.6)'
                        ],
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: { position: 'top' }
                    },
                    scales: {
                        y: { beginAtZero: true }
                    }
                }
            });

            // Radar des compétences
            const radarChart = new Chart(document.getElementById('radarChart'), {
                type: 'radar',
                data: {
                    labels: ['JavaScript', 'Python', 'PHP', 'Java', 'C++'],
                    datasets: [{
                        label: 'Compétences',
                        data: [85, 70, 90, 65, 75],
                        backgroundColor: 'rgba(153, 102, 255, 0.2)',
                        borderColor: 'rgba(153, 102, 255, 1)',
                        borderWidth: 2
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: { position: 'top' }
                    }
                }
            });

            // Graphique à secteurs
            const pieChart = new Chart(document.getElementById('pieChart'), {
                type: 'pie',
                data: {
                    labels: ['Développeur', 'RH', 'Marketing', 'Finance', 'Logistique'],
                    datasets: [{
                        label: 'Offres',
                        data: [40, 20, 30, 10, 25],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.6)',
                            'rgba(54, 162, 235, 0.6)',
                            'rgba(255, 206, 86, 0.6)',
                            'rgba(75, 192, 192, 0.6)',
                            'rgba(153, 102, 255, 0.6)'
                        ]
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: { position: 'top' }
                    }
                }
            });
        });
    </script>
{% endblock %}

{% endblock %}


", "admin/dashboard.html.twig", "C:\\Users\\LENOVO\\Documents\\Stage\\Recruitment\\templates\\admin\\dashboard.html.twig");
    }
}
