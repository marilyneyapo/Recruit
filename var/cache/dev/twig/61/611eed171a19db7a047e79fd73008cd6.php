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

/* registration/index.html.twig */
class __TwigTemplate_f3a2273b7e0e996b0e9082aa76ceddf1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/index.html.twig", 1);
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

        .register-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        #personal-info-section, #account-info-section {
            margin-bottom: 20px;
            transition: opacity 0.5s ease;
        }

        h2 {
            margin-bottom: 10px;
        }

        #next-button, #submit-button, #previous-button{
            display: inline-block;
            margin-top: 10px;
            padding: 10px 15px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        #next-button:hover, #submit-button:hover, #previous-button {
            background-color: #0056b3;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-group input, .form-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .form-group .error {
            color: #d9534f;
            font-size: 14px;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 64
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

        // line 65
        yield "    <div class=\"register-container\">
        <div id=\"personal-info-section\">
            <h2>Personal Information</h2>
            ";
        // line 68
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 68, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
            <div class=\"form-group\">
                ";
        // line 70
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 70, $this->source); })()), "firstName", [], "any", false, false, false, 70), 'label');
        yield "
                ";
        // line 71
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 71, $this->source); })()), "firstName", [], "any", false, false, false, 71), 'widget');
        yield "
                ";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 72, $this->source); })()), "firstName", [], "any", false, false, false, 72), 'errors');
        yield "
            </div>
            <div class=\"form-group\">
                ";
        // line 75
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 75, $this->source); })()), "lastName", [], "any", false, false, false, 75), 'label');
        yield "
                ";
        // line 76
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 76, $this->source); })()), "lastName", [], "any", false, false, false, 76), 'widget');
        yield "
                ";
        // line 77
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 77, $this->source); })()), "lastName", [], "any", false, false, false, 77), 'errors');
        yield "
            </div>
            <div class=\"form-group\">
                ";
        // line 80
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 80, $this->source); })()), "phone", [], "any", false, false, false, 80), 'label');
        yield "
                ";
        // line 81
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 81, $this->source); })()), "phone", [], "any", false, false, false, 81), 'widget');
        yield "
                ";
        // line 82
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 82, $this->source); })()), "phone", [], "any", false, false, false, 82), 'errors');
        yield "
            </div>
            <div class=\"form-group\">
                ";
        // line 85
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 85, $this->source); })()), "address", [], "any", false, false, false, 85), 'label');
        yield "
                ";
        // line 86
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 86, $this->source); })()), "address", [], "any", false, false, false, 86), 'widget');
        yield "
                ";
        // line 87
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 87, $this->source); })()), "address", [], "any", false, false, false, 87), 'errors');
        yield "
            </div>
            <div class=\"form-group\">
                ";
        // line 90
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 90, $this->source); })()), "city", [], "any", false, false, false, 90), 'label');
        yield "
                ";
        // line 91
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 91, $this->source); })()), "city", [], "any", false, false, false, 91), 'widget');
        yield "
                ";
        // line 92
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 92, $this->source); })()), "city", [], "any", false, false, false, 92), 'errors');
        yield "
            </div>
            <div class=\"form-group\">
                ";
        // line 95
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 95, $this->source); })()), "birthdate", [], "any", false, false, false, 95), 'label');
        yield "
                ";
        // line 96
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 96, $this->source); })()), "birthdate", [], "any", false, false, false, 96), 'widget');
        yield "
                ";
        // line 97
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 97, $this->source); })()), "birthdate", [], "any", false, false, false, 97), 'errors');
        yield "
            </div>
            <div class=\"form-group\">
                ";
        // line 100
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 100, $this->source); })()), "domaine", [], "any", false, false, false, 100), 'label');
        yield "
                ";
        // line 101
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 101, $this->source); })()), "domaine", [], "any", false, false, false, 101), 'widget');
        yield "
                ";
        // line 102
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 102, $this->source); })()), "domaine", [], "any", false, false, false, 102), 'errors');
        yield "
            </div>
            <div class=\"form-group\">
                ";
        // line 105
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 105, $this->source); })()), "cvFile", [], "any", false, false, false, 105), 'label');
        yield "
                ";
        // line 106
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 106, $this->source); })()), "cvFile", [], "any", false, false, false, 106), 'widget');
        yield "
                ";
        // line 107
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 107, $this->source); })()), "cvFile", [], "any", false, false, false, 107), 'errors');
        yield "
            </div>
            <button id=\"next-button\" type=\"button\">→</button>
        </div>
        
        <div id=\"account-info-section\" style=\"display:none;\">
            <h2>Account Information</h2>
            <div class=\"form-group\">
                ";
        // line 115
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 115, $this->source); })()), "email", [], "any", false, false, false, 115), 'label');
        yield "
                ";
        // line 116
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 116, $this->source); })()), "email", [], "any", false, false, false, 116), 'widget');
        yield "
                ";
        // line 117
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 117, $this->source); })()), "email", [], "any", false, false, false, 117), 'errors');
        yield "
            </div>
            <div class=\"form-group\">
                ";
        // line 120
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 120, $this->source); })()), "plainPassword", [], "any", false, false, false, 120), "first", [], "any", false, false, false, 120), 'label');
        yield "
                ";
        // line 121
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 121, $this->source); })()), "plainPassword", [], "any", false, false, false, 121), "first", [], "any", false, false, false, 121), 'widget');
        yield "
                ";
        // line 122
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 122, $this->source); })()), "plainPassword", [], "any", false, false, false, 122), "first", [], "any", false, false, false, 122), 'errors');
        yield "
            </div>
            <div class=\"form-group\">
                ";
        // line 125
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 125, $this->source); })()), "plainPassword", [], "any", false, false, false, 125), "second", [], "any", false, false, false, 125), 'label');
        yield "
                ";
        // line 126
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 126, $this->source); })()), "plainPassword", [], "any", false, false, false, 126), "second", [], "any", false, false, false, 126), 'widget');
        yield "
                ";
        // line 127
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 127, $this->source); })()), "plainPassword", [], "any", false, false, false, 127), "second", [], "any", false, false, false, 127), 'errors');
        yield "
            </div>
            <button id=\"previous-button\" type=\"button\">←</button>

            <button id=\"submit-button\" type=\"submit\">Register</button>
            ";
        // line 132
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 132, $this->source); })()), 'form_end');
        yield "
        </div>
    </div>

    <script>
        document.getElementById('next-button').addEventListener('click', function() {
            document.getElementById('personal-info-section').style.opacity = '0';
            setTimeout(function() {
                document.getElementById('personal-info-section').style.display = 'none';
                document.getElementById('account-info-section').style.display = 'block';
                document.getElementById('account-info-section').style.opacity = '1';
            }, 500);
        });

        document.getElementById('previous-button').addEventListener('click', function() {
            document.getElementById('account-info-section').style.opacity = '0';
            setTimeout(function() {
                document.getElementById('account-info-section').style.display = 'none';
                document.getElementById('personal-info-section').style.display = 'block';
                setTimeout(function() {
                    document.getElementById('personal-info-section').style.opacity = '1';
                }, 100);  // Délai pour l'effet de transition
            }, 500);
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
        return "registration/index.html.twig";
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
        return array (  330 => 132,  322 => 127,  318 => 126,  314 => 125,  308 => 122,  304 => 121,  300 => 120,  294 => 117,  290 => 116,  286 => 115,  275 => 107,  271 => 106,  267 => 105,  261 => 102,  257 => 101,  253 => 100,  247 => 97,  243 => 96,  239 => 95,  233 => 92,  229 => 91,  225 => 90,  219 => 87,  215 => 86,  211 => 85,  205 => 82,  201 => 81,  197 => 80,  191 => 77,  187 => 76,  183 => 75,  177 => 72,  173 => 71,  169 => 70,  164 => 68,  159 => 65,  146 => 64,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
    <style>

        .register-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        #personal-info-section, #account-info-section {
            margin-bottom: 20px;
            transition: opacity 0.5s ease;
        }

        h2 {
            margin-bottom: 10px;
        }

        #next-button, #submit-button, #previous-button{
            display: inline-block;
            margin-top: 10px;
            padding: 10px 15px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        #next-button:hover, #submit-button:hover, #previous-button {
            background-color: #0056b3;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-group input, .form-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .form-group .error {
            color: #d9534f;
            font-size: 14px;
        }
    </style>
{% endblock %}

{% block body %}
    <div class=\"register-container\">
        <div id=\"personal-info-section\">
            <h2>Personal Information</h2>
            {{ form_start(registrationForm, {'attr': {'novalidate': 'novalidate'}}) }}
            <div class=\"form-group\">
                {{ form_label(registrationForm.firstName) }}
                {{ form_widget(registrationForm.firstName) }}
                {{ form_errors(registrationForm.firstName) }}
            </div>
            <div class=\"form-group\">
                {{ form_label(registrationForm.lastName) }}
                {{ form_widget(registrationForm.lastName) }}
                {{ form_errors(registrationForm.lastName) }}
            </div>
            <div class=\"form-group\">
                {{ form_label(registrationForm.phone) }}
                {{ form_widget(registrationForm.phone) }}
                {{ form_errors(registrationForm.phone) }}
            </div>
            <div class=\"form-group\">
                {{ form_label(registrationForm.address) }}
                {{ form_widget(registrationForm.address) }}
                {{ form_errors(registrationForm.address) }}
            </div>
            <div class=\"form-group\">
                {{ form_label(registrationForm.city) }}
                {{ form_widget(registrationForm.city) }}
                {{ form_errors(registrationForm.city) }}
            </div>
            <div class=\"form-group\">
                {{ form_label(registrationForm.birthdate) }}
                {{ form_widget(registrationForm.birthdate) }}
                {{ form_errors(registrationForm.birthdate) }}
            </div>
            <div class=\"form-group\">
                {{ form_label(registrationForm.domaine) }}
                {{ form_widget(registrationForm.domaine) }}
                {{ form_errors(registrationForm.domaine) }}
            </div>
            <div class=\"form-group\">
                {{ form_label(registrationForm.cvFile) }}
                {{ form_widget(registrationForm.cvFile) }}
                {{ form_errors(registrationForm.cvFile) }}
            </div>
            <button id=\"next-button\" type=\"button\">→</button>
        </div>
        
        <div id=\"account-info-section\" style=\"display:none;\">
            <h2>Account Information</h2>
            <div class=\"form-group\">
                {{ form_label(registrationForm.email) }}
                {{ form_widget(registrationForm.email) }}
                {{ form_errors(registrationForm.email) }}
            </div>
            <div class=\"form-group\">
                {{ form_label(registrationForm.plainPassword.first) }}
                {{ form_widget(registrationForm.plainPassword.first) }}
                {{ form_errors(registrationForm.plainPassword.first) }}
            </div>
            <div class=\"form-group\">
                {{ form_label(registrationForm.plainPassword.second) }}
                {{ form_widget(registrationForm.plainPassword.second) }}
                {{ form_errors(registrationForm.plainPassword.second) }}
            </div>
            <button id=\"previous-button\" type=\"button\">←</button>

            <button id=\"submit-button\" type=\"submit\">Register</button>
            {{ form_end(registrationForm) }}
        </div>
    </div>

    <script>
        document.getElementById('next-button').addEventListener('click', function() {
            document.getElementById('personal-info-section').style.opacity = '0';
            setTimeout(function() {
                document.getElementById('personal-info-section').style.display = 'none';
                document.getElementById('account-info-section').style.display = 'block';
                document.getElementById('account-info-section').style.opacity = '1';
            }, 500);
        });

        document.getElementById('previous-button').addEventListener('click', function() {
            document.getElementById('account-info-section').style.opacity = '0';
            setTimeout(function() {
                document.getElementById('account-info-section').style.display = 'none';
                document.getElementById('personal-info-section').style.display = 'block';
                setTimeout(function() {
                    document.getElementById('personal-info-section').style.opacity = '1';
                }, 100);  // Délai pour l'effet de transition
            }, 500);
        });
    </script>
{% endblock %}
", "registration/index.html.twig", "C:\\Users\\LENOVO\\Documents\\Stage\\Recruitment\\templates\\registration\\index.html.twig");
    }
}
