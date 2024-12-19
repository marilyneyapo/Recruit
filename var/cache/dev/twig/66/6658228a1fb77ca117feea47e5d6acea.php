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

/* error/error404.html.twig */
class __TwigTemplate_8f47e0eaabaaa8e0611dcf7a82cbfcc2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "error/error404.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "error/error404.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "error/error404.html.twig", 1);
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

        yield "Page Not Found";
        
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
        yield "    <style>
        .error-container {
            text-align: center;
            padding: 60px 40px; /* Padding amélioré pour plus d'espace */
            background-color: #fff;
            border: 2px solid #f0f0f0; /* Bordure plus fine */
            border-radius: 15px; /* Coins plus arrondis */
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1); /* Ombre plus marquée */
            max-width: 600px;
            margin: 50px auto;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .error-container:hover {
            transform: scale(1.05); /* Effet de zoom au survol */
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.15);
        }

        .error-title {
            font-size: 2.5rem;
            color: #e74c3c;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .error-message {
            font-size: 1.2rem;
            color: #555;
            margin-bottom: 30px;
        }

        .back-to-home {
            text-decoration: none;
            color: #3498db;
            font-size: 1.1rem;
            background-color: #ecf0f1;
            padding: 12px 25px;
            border-radius: 25px; /* Bouton avec des coins arrondis */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s, box-shadow 0.3s;
        }

        .back-to-home:hover {
            background-color: #bdc3c7;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
        }

        .countdown-message {
            font-size: 1.1rem;
            color: #e67e22;
            margin-top: 20px;
            font-weight: bold;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 62
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

        // line 63
        yield "    <div class=\"error-container\">
        <h1 class=\"error-title\">Oops! Job not found.</h1>
        <p class=\"error-message\">The job you are looking for does not exist or has been removed.</p>
        <a href=\"";
        // line 66
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("job.index");
        yield "\" class=\"back-to-home\">Go back to the Job List</a>
        <p id=\"countdown\" class=\"countdown-message\">You will be redirected in 5 seconds...</p>
    </div>

    <script>
        var countdownElement = document.getElementById('countdown');
        var timeLeft = 5;

        // Fonction pour mettre à jour le message du compte à rebours
        var countdownInterval = setInterval(function() {
            timeLeft--;
            if (timeLeft > 0) {
                countdownElement.textContent = 'You will be redirected in ' + timeLeft + ' second' + (timeLeft > 1 ? 's' : '') + '...';
            } else {
                countdownElement.textContent = 'Redirecting now...';
                clearInterval(countdownInterval);
            }
        }, 1000);

        // Redirection après 5 secondes
        setTimeout(function() {
            window.location.href = \"";
        // line 87
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("job.index");
        yield "\"; // Redirige vers la liste des jobs
        }, 5000); // 5000 ms = 5 secondes
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
        return "error/error404.html.twig";
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
        return array (  208 => 87,  184 => 66,  179 => 63,  166 => 62,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Page Not Found{% endblock %}

{% block stylesheets %}
    <style>
        .error-container {
            text-align: center;
            padding: 60px 40px; /* Padding amélioré pour plus d'espace */
            background-color: #fff;
            border: 2px solid #f0f0f0; /* Bordure plus fine */
            border-radius: 15px; /* Coins plus arrondis */
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1); /* Ombre plus marquée */
            max-width: 600px;
            margin: 50px auto;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .error-container:hover {
            transform: scale(1.05); /* Effet de zoom au survol */
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.15);
        }

        .error-title {
            font-size: 2.5rem;
            color: #e74c3c;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .error-message {
            font-size: 1.2rem;
            color: #555;
            margin-bottom: 30px;
        }

        .back-to-home {
            text-decoration: none;
            color: #3498db;
            font-size: 1.1rem;
            background-color: #ecf0f1;
            padding: 12px 25px;
            border-radius: 25px; /* Bouton avec des coins arrondis */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s, box-shadow 0.3s;
        }

        .back-to-home:hover {
            background-color: #bdc3c7;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
        }

        .countdown-message {
            font-size: 1.1rem;
            color: #e67e22;
            margin-top: 20px;
            font-weight: bold;
        }
    </style>
{% endblock %}

{% block body %}
    <div class=\"error-container\">
        <h1 class=\"error-title\">Oops! Job not found.</h1>
        <p class=\"error-message\">The job you are looking for does not exist or has been removed.</p>
        <a href=\"{{ path('job.index') }}\" class=\"back-to-home\">Go back to the Job List</a>
        <p id=\"countdown\" class=\"countdown-message\">You will be redirected in 5 seconds...</p>
    </div>

    <script>
        var countdownElement = document.getElementById('countdown');
        var timeLeft = 5;

        // Fonction pour mettre à jour le message du compte à rebours
        var countdownInterval = setInterval(function() {
            timeLeft--;
            if (timeLeft > 0) {
                countdownElement.textContent = 'You will be redirected in ' + timeLeft + ' second' + (timeLeft > 1 ? 's' : '') + '...';
            } else {
                countdownElement.textContent = 'Redirecting now...';
                clearInterval(countdownInterval);
            }
        }, 1000);

        // Redirection après 5 secondes
        setTimeout(function() {
            window.location.href = \"{{ path('job.index') }}\"; // Redirige vers la liste des jobs
        }, 5000); // 5000 ms = 5 secondes
    </script>
{% endblock %}
", "error/error404.html.twig", "C:\\Users\\LENOVO\\Documents\\Stage\\Recruitment\\templates\\error\\error404.html.twig");
    }
}
