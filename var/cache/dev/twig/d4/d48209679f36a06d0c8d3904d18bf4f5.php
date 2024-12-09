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

/* base.html.twig */
class __TwigTemplate_3cc61d038688f04724d9f4451f2fb12a extends Template
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

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    
    <title>";
        // line 5
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>

    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>
    <!-- Favicon -->
    <link rel=\"icon\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/stratos logo.ico"), "html", null, true);
        yield "\" type=\"image/x-icon\">

    <!-- Open Graph meta tags -->
    <meta property=\"og:title\" content=\"StratRecruit\">
    <meta property=\"og:description\" content=\"Recrutement et gestion des offres d'emploi.\">
    <meta property=\"og:image\" content=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/stratos logo.png"), "html", null, true);
        yield "\">
    <meta property=\"og:url\" content=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "request", [], "any", false, false, false, 15), "uri", [], "any", false, false, false, 15), "html", null, true);
        yield "\">
    <meta property=\"og:type\" content=\"website\">

    <!-- Twitter Card meta tags -->
    <meta name=\"twitter:card\" content=\"summary_large_image\">
    <meta name=\"twitter:title\" content=\"StratRecruit\">
    <meta name=\"twitter:description\" content=\"Recrutement et gestion des offres d'emploi.\">
    <meta name=\"twitter:image\" content=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/stratos logo.png"), "html", null, true);
        yield "\">

    ";
        // line 24
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 30
        yield "
    ";
        // line 31
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 40
        yield "
    <link rel=\"stylesheet\" href=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css\">
</head>

<body>
    ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "session", [], "any", false, false, false, 46), "flashBag", [], "any", false, false, false, 46), "all", [], "method", false, false, false, 46));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 47
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 48
                yield "            <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["type"], "html", null, true);
                yield "\">
                ";
                // line 49
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['type'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        yield "
<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
    <div class=\"container-fluid\">
        <img src=\"";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/stratos logo.png"), "html", null, true);
        yield "\" alt=\"StratRecruit Logo\">

        <a class=\"navbar-brand\" href=\"";
        // line 58
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("job.list");
        yield "\"></a>

        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
            <ul class=\"navbar-nav ms-auto\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">Home</a>
                </li>
            
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">About</a>
                </li>
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                        <i class=\"fas fa-cog\"></i> Settings
                    </a>
                    <ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"navbarDropdown\">
                        <li><a class=\"dropdown-item\" href=\"";
        // line 78
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        yield "\">Profile</a></li>
                        <li><a class=\"dropdown-item\" href=\"#\">Account Settings</a></li>
                        <li><hr class=\"dropdown-divider\"></li>
                        <li><a class=\"dropdown-item\" href=\"";
        // line 81
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\">Se connecter </a></li>
                        <li><a class=\"dropdown-item\" href=\"";
        // line 82
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\">Logout</a></li>

                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>


<div class=\"container\">
    ";
        // line 93
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 94
        yield "</div>

<footer class=\"bg-light text-center text-lg-start mt-5\">
    <div class=\"text-center p-3\" style=\"background-color: rgba(0, 0, 0, 0.2);\">
        <span>© ";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " StratRecruit. Tous droits réservés.</span>
        <a href=\"#\" class=\"text-dark ms-3\">Politique de confidentialité</a> |
        <a href=\"#\" class=\"text-dark\">Conditions d'utilisation</a>
    </div>
</footer>


<script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js\"></script>
</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
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

        yield "StratRecruit";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 24
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

        // line 25
        yield "        <link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        yield "\">
        <link rel=\"stylesheet\" href=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        yield "\">

        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css\">
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 31
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

        // line 32
        yield "        <script>
            document.addEventListener('DOMContentLoaded', function() {
                setTimeout(function() {
                    document.getElementById('spinner').classList.add('hide');
                }, 5000); 
            });
        </script>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 93
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
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
        return array (  314 => 93,  296 => 32,  283 => 31,  268 => 26,  263 => 25,  250 => 24,  227 => 5,  204 => 98,  198 => 94,  196 => 93,  182 => 82,  178 => 81,  172 => 78,  149 => 58,  144 => 56,  139 => 53,  133 => 52,  124 => 49,  119 => 48,  114 => 47,  110 => 46,  102 => 41,  99 => 40,  97 => 31,  94 => 30,  92 => 24,  87 => 22,  77 => 15,  73 => 14,  65 => 9,  58 => 5,  52 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    
    <title>{% block title %}StratRecruit{% endblock %}</title>

    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>
    <!-- Favicon -->
    <link rel=\"icon\" href=\"{{ asset('assets/images/stratos logo.ico') }}\" type=\"image/x-icon\">

    <!-- Open Graph meta tags -->
    <meta property=\"og:title\" content=\"StratRecruit\">
    <meta property=\"og:description\" content=\"Recrutement et gestion des offres d'emploi.\">
    <meta property=\"og:image\" content=\"{{ asset('assets/images/stratos logo.png') }}\">
    <meta property=\"og:url\" content=\"{{ app.request.uri }}\">
    <meta property=\"og:type\" content=\"website\">

    <!-- Twitter Card meta tags -->
    <meta name=\"twitter:card\" content=\"summary_large_image\">
    <meta name=\"twitter:title\" content=\"StratRecruit\">
    <meta name=\"twitter:description\" content=\"Recrutement et gestion des offres d'emploi.\">
    <meta name=\"twitter:image\" content=\"{{ asset('assets/images/stratos logo.png') }}\">

    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/bootstrap.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/style.css') }}\">

        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css\">
    {% endblock %}

    {% block javascripts %}
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                setTimeout(function() {
                    document.getElementById('spinner').classList.add('hide');
                }, 5000); 
            });
        </script>
    {% endblock %}

    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/bootstrap.min.css') }}\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css\">
</head>

<body>
    {% for type, messages in app.session.flashBag.all() %}
        {% for message in messages %}
            <div class=\"alert alert-{{ type }}\">
                {{ message }}
            </div>
        {% endfor %}
    {% endfor %}

<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
    <div class=\"container-fluid\">
        <img src=\"{{ asset('assets/images/stratos logo.png') }}\" alt=\"StratRecruit Logo\">

        <a class=\"navbar-brand\" href=\"{{ path('job.list') }}\"></a>

        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
            <ul class=\"navbar-nav ms-auto\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">Home</a>
                </li>
            
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">About</a>
                </li>
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                        <i class=\"fas fa-cog\"></i> Settings
                    </a>
                    <ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"navbarDropdown\">
                        <li><a class=\"dropdown-item\" href=\"{{path('app_profile')}}\">Profile</a></li>
                        <li><a class=\"dropdown-item\" href=\"#\">Account Settings</a></li>
                        <li><hr class=\"dropdown-divider\"></li>
                        <li><a class=\"dropdown-item\" href=\"{{ path('app_login') }}\">Se connecter </a></li>
                        <li><a class=\"dropdown-item\" href=\"{{ path('app_logout') }}\">Logout</a></li>

                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>


<div class=\"container\">
    {% block body %}{% endblock %}
</div>

<footer class=\"bg-light text-center text-lg-start mt-5\">
    <div class=\"text-center p-3\" style=\"background-color: rgba(0, 0, 0, 0.2);\">
        <span>© {{ \"now\"|date(\"Y\") }} StratRecruit. Tous droits réservés.</span>
        <a href=\"#\" class=\"text-dark ms-3\">Politique de confidentialité</a> |
        <a href=\"#\" class=\"text-dark\">Conditions d'utilisation</a>
    </div>
</footer>


<script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js\"></script>
</body>
</html>
", "base.html.twig", "C:\\Users\\LENOVO\\Documents\\Stage\\Recruitment\\templates\\base.html.twig");
    }
}
