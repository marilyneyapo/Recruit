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

/* users/userprofile.html.twig */
class __TwigTemplate_9ee83b9eb7a4ac0a688974edb57645fe extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/userprofile.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/userprofile.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "users/userprofile.html.twig", 1);
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

        yield " Profil ";
        
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
        yield "<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
<style>
    .form-container {
        max-width: 600px;
        margin: 50px auto;
        padding: 20px;
        background-color: #f8f9fa;
        border-radius: 10px;
        box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
    }
    .form-container h1 {
        text-align: center;
        margin-bottom: 30px;
    }
    .form-container button {
        display: block;
        width: 100%;
        margin-top: 20px;
    }
    .password-container {
        position: relative;
    }
    .toggle-password {
        position: absolute;
        right: 10px;
        top: 50%;
        transform: translateY(-50%);
        cursor: pointer;
        color: #007bff;
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 39
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

        // line 40
        yield "<div class=\"form-container\">
    <h1>Mon profil</h1>


    ";
        // line 44
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), 'form_start');
        yield "
        <div class=\"mb-3\">
            ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "firstName", [], "any", false, false, false, 46), 'label');
        yield "
            ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "firstName", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
        </div>
        <div class=\"mb-3\">
            ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "lastName", [], "any", false, false, false, 50), 'label');
        yield "
            ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "lastName", [], "any", false, false, false, 51), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
        </div>
        <div class=\"mb-3\">
            ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "address", [], "any", false, false, false, 54), 'label');
        yield "
            ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "address", [], "any", false, false, false, 55), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
        </div>
        <div class=\"mb-3\">
            ";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "phone", [], "any", false, false, false, 58), 'label');
        yield "
            ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "phone", [], "any", false, false, false, 59), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
        </div>
        <div class=\"mb-3\">
            ";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "city", [], "any", false, false, false, 62), 'label');
        yield "
            ";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "city", [], "any", false, false, false, 63), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
        </div>
        <div class=\"mb-3\">
            ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "birthdate", [], "any", false, false, false, 66), 'label');
        yield "
            ";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "birthdate", [], "any", false, false, false, 67), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
        </div>
        <div class=\"mb-3\">
            ";
        // line 70
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "email", [], "any", false, false, false, 70), 'label');
        yield "
            ";
        // line 71
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "email", [], "any", false, false, false, 71), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
        </div>
        <div class=\"mb-3\">
            ";
        // line 74
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "plainPassword", [], "any", false, false, false, 74), 'label');
        yield "
            <div class=\"password-container\">
                ";
        // line 76
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "plainPassword", [], "any", false, false, false, 76), 'widget', ["attr" => ["class" => "form-control", "id" => "password-field"]]);
        yield "
                <span id=\"toggle-password\" class=\"toggle-password\" onclick=\"togglePassword()\">👁️</span>
            </div>
        </div>
        <div class=\"mb-3\">
            ";
        // line 81
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "domaine", [], "any", false, false, false, 81), 'label');
        yield "
            ";
        // line 82
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "domaine", [], "any", false, false, false, 82), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
            ";
        // line 83
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "domaine", [], "any", false, false, false, 83), 'errors');
        yield "
        </div>
        <div class=\"mb-3\">
            ";
        // line 86
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "cvFile", [], "any", false, false, false, 86), 'label');
        yield "
            ";
        // line 87
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "cvFile", [], "any", false, false, false, 87), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
        </div>

        <button type=\"submit\" class=\"btn btn-primary\">Enregistrer les modifications</button>
    ";
        // line 91
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), 'form_end');
        yield "
</div>

<script>
    function togglePassword() {
        var passwordField = document.getElementById('password-field');
        var togglePasswordIcon = document.getElementById('toggle-password');
        if (passwordField.type === 'password') {
            passwordField.type = 'text';
            togglePasswordIcon.textContent = '🙈'; // Icône pour masquer
        } else {
            passwordField.type = 'password';
            togglePasswordIcon.textContent = '👁️'; // Icône pour afficher
        }
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
        return "users/userprofile.html.twig";
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
        return array (  275 => 91,  268 => 87,  264 => 86,  258 => 83,  254 => 82,  250 => 81,  242 => 76,  237 => 74,  231 => 71,  227 => 70,  221 => 67,  217 => 66,  211 => 63,  207 => 62,  201 => 59,  197 => 58,  191 => 55,  187 => 54,  181 => 51,  177 => 50,  171 => 47,  167 => 46,  162 => 44,  156 => 40,  143 => 39,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Profil {% endblock %}

{% block stylesheets %}
<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
<style>
    .form-container {
        max-width: 600px;
        margin: 50px auto;
        padding: 20px;
        background-color: #f8f9fa;
        border-radius: 10px;
        box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
    }
    .form-container h1 {
        text-align: center;
        margin-bottom: 30px;
    }
    .form-container button {
        display: block;
        width: 100%;
        margin-top: 20px;
    }
    .password-container {
        position: relative;
    }
    .toggle-password {
        position: absolute;
        right: 10px;
        top: 50%;
        transform: translateY(-50%);
        cursor: pointer;
        color: #007bff;
    }
</style>
{% endblock %}

{% block body %}
<div class=\"form-container\">
    <h1>Mon profil</h1>


    {{ form_start(form) }}
        <div class=\"mb-3\">
            {{ form_label(form.firstName) }}
            {{ form_widget(form.firstName, {'attr': {'class': 'form-control'}}) }}
        </div>
        <div class=\"mb-3\">
            {{ form_label(form.lastName) }}
            {{ form_widget(form.lastName, {'attr': {'class': 'form-control'}}) }}
        </div>
        <div class=\"mb-3\">
            {{ form_label(form.address) }}
            {{ form_widget(form.address, {'attr': {'class': 'form-control'}}) }}
        </div>
        <div class=\"mb-3\">
            {{ form_label(form.phone) }}
            {{ form_widget(form.phone, {'attr': {'class': 'form-control'}}) }}
        </div>
        <div class=\"mb-3\">
            {{ form_label(form.city) }}
            {{ form_widget(form.city, {'attr': {'class': 'form-control'}}) }}
        </div>
        <div class=\"mb-3\">
            {{ form_label(form.birthdate) }}
            {{ form_widget(form.birthdate, {'attr': {'class': 'form-control'}}) }}
        </div>
        <div class=\"mb-3\">
            {{ form_label(form.email) }}
            {{ form_widget(form.email, {'attr': {'class': 'form-control'}}) }}
        </div>
        <div class=\"mb-3\">
            {{ form_label(form.plainPassword) }}
            <div class=\"password-container\">
                {{ form_widget(form.plainPassword, {'attr': {'class': 'form-control', 'id': 'password-field'}}) }}
                <span id=\"toggle-password\" class=\"toggle-password\" onclick=\"togglePassword()\">👁️</span>
            </div>
        </div>
        <div class=\"mb-3\">
            {{ form_label(form.domaine) }}
            {{ form_widget(form.domaine, {'attr': {'class': 'form-control'}}) }}
            {{ form_errors(form.domaine) }}
        </div>
        <div class=\"mb-3\">
            {{ form_label(form.cvFile) }}
            {{ form_widget(form.cvFile, {'attr': {'class': 'form-control'}}) }}
        </div>

        <button type=\"submit\" class=\"btn btn-primary\">Enregistrer les modifications</button>
    {{ form_end(form) }}
</div>

<script>
    function togglePassword() {
        var passwordField = document.getElementById('password-field');
        var togglePasswordIcon = document.getElementById('toggle-password');
        if (passwordField.type === 'password') {
            passwordField.type = 'text';
            togglePasswordIcon.textContent = '🙈'; // Icône pour masquer
        } else {
            passwordField.type = 'password';
            togglePasswordIcon.textContent = '👁️'; // Icône pour afficher
        }
    }
</script>
{% endblock %}
", "users/userprofile.html.twig", "C:\\Users\\LENOVO\\Documents\\Stage\\Recruitment\\templates\\users\\userprofile.html.twig");
    }
}
