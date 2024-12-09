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

/* job/apply.html.twig */
class __TwigTemplate_cb95a3dc95975ee3cdb57bdc2fbfb977 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "job/apply.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "job/apply.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "job/apply.html.twig", 1);
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
        body {
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background-image: url('";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/bacground.jpg"), "html", null, true);
        yield "'); /* Remplacez 'background.jpg' par le nom de votre image */
            background-repeat: no-repeat;
            height: 100%;
            background-size: 200% 200%; 
            background-position: center;
            flex-grow: 1;
            animation: zoomInAndGather 5s ease-in-out forwards;
        }

        @keyframes zoomInAndGather {
            0% {
                background-size: 200% 200%; /* Déroulement initial */
                background-position: top right; /* Position initiale */
            }
            50% {
                background-size: 150% 150%; /* Zoom avant intermédiaire */
                background-position: center; /* Converge vers le centre */
            }
            100% {
                background-size: cover; /* Image reprend sa taille normale */
                background-position: center; /* Reste centrée */
            }
        }

        .container {
            animation: fadeInUp 2s ease-out;
            background-size: cover;            
            flex-grow: 1; 
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: white; 
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); 
            transition: background 2s ease-in-out;
        }

        h2 {
            animation: fadeIn 3s ease-in-out;
        }

        .btn {
            animation: bounceIn 3s ease-in-out;
            display: inline-block;
            margin: 10px;
            color: white;
            border: 2px solid white;
            background: transparent;
        }

        .btn:hover {
            background: rgba(255, 255, 255, 0.1);
        }

        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes bounceIn {
            0%, 20%, 40%, 60%, 80%, 100% {
                transition-timing-function: ease-in-out;
                transform: translateY(0);
            }
            50% {
                transform: translateY(-10px);
            }

            70% {
                transform: translateY(-5px);
            }
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 103
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

        // line 104
        yield "    <script>
        /* Configuration Particles.js */
        particlesJS('particles-js', {
            particles: {
                number: { value: 80, density: { enable: true, value_area: 800 } },
                color: { value: '#ffffff' },
                shape: {
                    type: 'circle',
                    stroke: { width: 0, color: '#000000' },
                    polygon: { nb_sides: 5 },
                },
                opacity: { value: 0.5, random: false, anim: { enable: false, speed: 1, opacity_min: 0.1, sync: false } },
                size: { value: 3, random: true, anim: { enable: false, speed: 40, size_min: 0.1, sync: false } },
                line_linked: { enable: true, distance: 150, color: '#ffffff', opacity: 0.4, width: 1 },
                move: { enable: true, speed: 6, direction: 'none', random: false, straight: false, out_mode: 'out', attract: { enable: false, rotateX: 600, rotateY: 1200 } },
            },
            interactivity: {
                detect_on: 'canvas',
                events: {
                    onhover: { enable: true, mode: 'repulse' },
                    onclick: { enable: true, mode: 'push' },
                    resize: true,
                },
                modes: {
                    grab: { distance: 400, line_linked: { opacity: 1 } },
                    bubble: { distance: 400, size: 40, duration: 2, opacity: 8, speed: 3 },
                    repulse: { distance: 200, duration: 0.4 },
                    push: { particles_nb: 4 },
                    remove: { particles_nb: 2 },
                },
            },
            retina_detect: true,
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 140
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

        // line 141
        yield "    <div id=\"particles-js\"></div>
    <div class=\"container text-center\">
        <h2>Vous devez être connecté pour postuler à cette offre</h2>
        <a href=\"";
        // line 144
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" class=\"btn btn-primary mt-3\"><i class=\"fas fa-sign-in-alt\"></i> Se Connecter</a>
        <a href=\"";
        // line 145
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\" class=\"btn btn-secondary mt-3\"><i class=\"fas fa-user-plus\"></i> S'inscrire</a>
    </div>
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
        return "job/apply.html.twig";
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
        return array (  267 => 145,  263 => 144,  258 => 141,  245 => 140,  200 => 104,  187 => 103,  87 => 11,  78 => 4,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background-image: url('{{ asset('images/bacground.jpg') }}'); /* Remplacez 'background.jpg' par le nom de votre image */
            background-repeat: no-repeat;
            height: 100%;
            background-size: 200% 200%; 
            background-position: center;
            flex-grow: 1;
            animation: zoomInAndGather 5s ease-in-out forwards;
        }

        @keyframes zoomInAndGather {
            0% {
                background-size: 200% 200%; /* Déroulement initial */
                background-position: top right; /* Position initiale */
            }
            50% {
                background-size: 150% 150%; /* Zoom avant intermédiaire */
                background-position: center; /* Converge vers le centre */
            }
            100% {
                background-size: cover; /* Image reprend sa taille normale */
                background-position: center; /* Reste centrée */
            }
        }

        .container {
            animation: fadeInUp 2s ease-out;
            background-size: cover;            
            flex-grow: 1; 
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: white; 
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); 
            transition: background 2s ease-in-out;
        }

        h2 {
            animation: fadeIn 3s ease-in-out;
        }

        .btn {
            animation: bounceIn 3s ease-in-out;
            display: inline-block;
            margin: 10px;
            color: white;
            border: 2px solid white;
            background: transparent;
        }

        .btn:hover {
            background: rgba(255, 255, 255, 0.1);
        }

        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes bounceIn {
            0%, 20%, 40%, 60%, 80%, 100% {
                transition-timing-function: ease-in-out;
                transform: translateY(0);
            }
            50% {
                transform: translateY(-10px);
            }

            70% {
                transform: translateY(-5px);
            }
        }
    </style>
{% endblock %}



{% block javascripts %}
    <script>
        /* Configuration Particles.js */
        particlesJS('particles-js', {
            particles: {
                number: { value: 80, density: { enable: true, value_area: 800 } },
                color: { value: '#ffffff' },
                shape: {
                    type: 'circle',
                    stroke: { width: 0, color: '#000000' },
                    polygon: { nb_sides: 5 },
                },
                opacity: { value: 0.5, random: false, anim: { enable: false, speed: 1, opacity_min: 0.1, sync: false } },
                size: { value: 3, random: true, anim: { enable: false, speed: 40, size_min: 0.1, sync: false } },
                line_linked: { enable: true, distance: 150, color: '#ffffff', opacity: 0.4, width: 1 },
                move: { enable: true, speed: 6, direction: 'none', random: false, straight: false, out_mode: 'out', attract: { enable: false, rotateX: 600, rotateY: 1200 } },
            },
            interactivity: {
                detect_on: 'canvas',
                events: {
                    onhover: { enable: true, mode: 'repulse' },
                    onclick: { enable: true, mode: 'push' },
                    resize: true,
                },
                modes: {
                    grab: { distance: 400, line_linked: { opacity: 1 } },
                    bubble: { distance: 400, size: 40, duration: 2, opacity: 8, speed: 3 },
                    repulse: { distance: 200, duration: 0.4 },
                    push: { particles_nb: 4 },
                    remove: { particles_nb: 2 },
                },
            },
            retina_detect: true,
        });
    </script>
{% endblock %}

{% block body %}
    <div id=\"particles-js\"></div>
    <div class=\"container text-center\">
        <h2>Vous devez être connecté pour postuler à cette offre</h2>
        <a href=\"{{ path('app_login') }}\" class=\"btn btn-primary mt-3\"><i class=\"fas fa-sign-in-alt\"></i> Se Connecter</a>
        <a href=\"{{ path('app_register') }}\" class=\"btn btn-secondary mt-3\"><i class=\"fas fa-user-plus\"></i> S'inscrire</a>
    </div>
{% endblock %}
", "job/apply.html.twig", "C:\\Users\\LENOVO\\Documents\\Stage\\Recruitment\\templates\\job\\apply.html.twig");
    }
}
