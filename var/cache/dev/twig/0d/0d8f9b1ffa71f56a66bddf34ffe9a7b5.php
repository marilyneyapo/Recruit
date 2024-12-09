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

/* cv/index.html.twig */
class __TwigTemplate_a829a1f46830030a708f5403512b6e34 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cv/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cv/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cv/index.html.twig", 1);
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
            background-color: #e3f2fd; /* Light blue background */
            font-family: 'Helvetica Neue', Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .cv-container {
            max-width: 600px;
            margin: 50px auto; /* Center the container */
            background-color: #ffffff; /* White background for form */
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            color: #333;
        }

        h1 {
            font-size: 2rem;
            color: #1976d2; /* Blue color */
            text-align: center;
            margin-bottom: 20px;
        }

        .cv-section {
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 20px;
            transition: box-shadow 0.3s ease;
        }

        .form-group:hover {
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .form-group label {
            font-weight: bold;
            color: #555;
            margin-bottom: 5px;
            display: block;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border-radius: 6px;
            border: 1px solid #90caf9; /* Light blue border */
            font-size: 1rem;
            color: #333;
            background-color: #f1f8e9; /* Light greenish */
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
            transition: border-color 0.3s ease;
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            border-color: #1976d2; /* Focus border color */
            outline: none;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }

        .btn-submit {
            background-color: #1976d2; /* Button color */
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 6px;
            font-size: 1.1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
            display: block;
            width: 100%;
            text-align: center;
            margin-top: 20px; /* Space above button */
        }

        .btn-submit:hover {
            background-color: #0d47a1; /* Darker on hover */
        }

        a {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            color: #1976d2;
            font-weight: bold;
            transition: color 0.3s ease;
            text-align: center;
        }

        a:hover {
            text-decoration: underline;
            color: #004d40;
        }

        /* Responsive Styles */
        @media (max-width: 600px) {
            .cv-container {
                padding: 20px;
            }

            .btn-submit {
                font-size: 1rem;
            }
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
        yield "

<h1>Soumettre votre CV pour le poste : ";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["job"]) || array_key_exists("job", $context) ? $context["job"] : (function () { throw new RuntimeError('Variable "job" does not exist.', 121, $this->source); })()), "position", [], "any", false, false, false, 121), "html", null, true);
        yield "</h1>

    ";
        // line 124
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 124, $this->source); })()), "flashes", [], "any", false, false, false, 124));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 125
            yield "        <div class=\"alert alert-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
            yield "\">
            ";
            // line 126
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 127
                yield "                <p>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "</p>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 129
            yield "        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
        yield "
    
    <div class=\"cv-container\">
        <h1>Fill Out This Form</h1>
        ";
        // line 135
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["candidat"]) || array_key_exists("candidat", $context) ? $context["candidat"] : (function () { throw new RuntimeError('Variable "candidat" does not exist.', 135, $this->source); })()), "user", [], "any", false, false, false, 135), "cvFile", [], "any", false, false, false, 135)) {
            // line 136
            yield "        <p>Votre CV actuel : <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/cvs/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["candidat"]) || array_key_exists("candidat", $context) ? $context["candidat"] : (function () { throw new RuntimeError('Variable "candidat" does not exist.', 136, $this->source); })()), "user", [], "any", false, false, false, 136), "cvFile", [], "any", false, false, false, 136))), "html", null, true);
            yield "\" target=\"_blank\">Voir votre CV</a></p>
        ";
        }
        // line 138
        yield "
        ";
        // line 139
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["cvForm"]) || array_key_exists("cvForm", $context) ? $context["cvForm"] : (function () { throw new RuntimeError('Variable "cvForm" does not exist.', 139, $this->source); })()), 'form_start');
        yield "
        <div class=\"form-group\">
            ";
        // line 141
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cvForm"]) || array_key_exists("cvForm", $context) ? $context["cvForm"] : (function () { throw new RuntimeError('Variable "cvForm" does not exist.', 141, $this->source); })()), "category", [], "any", false, false, false, 141), 'label');
        yield "
            ";
        // line 142
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cvForm"]) || array_key_exists("cvForm", $context) ? $context["cvForm"] : (function () { throw new RuntimeError('Variable "cvForm" does not exist.', 142, $this->source); })()), "category", [], "any", false, false, false, 142), 'widget');
        yield "
        </div>

        <div id=\"questions-container\">
            <!-- Questions will be injected here by JavaScript -->
        </div>

        <div class=\"form-group\">
            ";
        // line 150
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cvForm"]) || array_key_exists("cvForm", $context) ? $context["cvForm"] : (function () { throw new RuntimeError('Variable "cvForm" does not exist.', 150, $this->source); })()), "cvFile", [], "any", false, false, false, 150), 'label');
        yield "
            ";
        // line 151
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["cvForm"]) || array_key_exists("cvForm", $context) ? $context["cvForm"] : (function () { throw new RuntimeError('Variable "cvForm" does not exist.', 151, $this->source); })()), "cvFile", [], "any", false, false, false, 151), 'widget');
        yield "
        </div>

        <button type=\"submit\" class=\"btn-submit\">Submit</button>
        ";
        // line 155
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["cvForm"]) || array_key_exists("cvForm", $context) ? $context["cvForm"] : (function () { throw new RuntimeError('Variable "cvForm" does not exist.', 155, $this->source); })()), 'form_end');
        yield "
    </div>

    <script>
        const categorySelect = document.querySelector('#cv_category');
        const questionsContainer = document.getElementById('questions-container');

        categorySelect.addEventListener('change', function () {
            const categoryId = this.value;
            if (categoryId) {
                fetch(`/category/\${categoryId}/questions`)
                    .then(response => response.json())
                    .then(questions => {
                        questionsContainer.innerHTML = '';
                        questions.forEach(question => {
                            const questionElement = document.createElement('div');
                            questionElement.classList.add('form-group'); // Add form-group class for consistent styling
                            questionElement.innerHTML = `<label>\${question.question}</label>`;
                            
                            if (question.type === 'unique' || question.type === 'multiple') {
                                const select = document.createElement('select');
                                select.multiple = (question.type === 'multiple');
                                select.classList.add('form-control'); // Bootstrap-like styling
                                question.options.forEach(option => {
                                    const optionElement = document.createElement('option');
                                    optionElement.value = option;
                                    optionElement.text = option;
                                    select.appendChild(optionElement);
                                });
                                questionElement.appendChild(select);
                            } else if (question.type === 'text') {
                                const textarea = document.createElement('textarea');
                                textarea.classList.add('form-control'); // Bootstrap-like styling
                                questionElement.appendChild(textarea);
                            }

                            questionsContainer.appendChild(questionElement);
                        });
                    });
            } else {
                questionsContainer.innerHTML = '';
            }
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
        return "cv/index.html.twig";
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
        return array (  300 => 155,  293 => 151,  289 => 150,  278 => 142,  274 => 141,  269 => 139,  266 => 138,  260 => 136,  258 => 135,  252 => 131,  245 => 129,  236 => 127,  232 => 126,  227 => 125,  222 => 124,  217 => 121,  213 => 119,  200 => 118,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
    <style>
        body {
            background-color: #e3f2fd; /* Light blue background */
            font-family: 'Helvetica Neue', Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .cv-container {
            max-width: 600px;
            margin: 50px auto; /* Center the container */
            background-color: #ffffff; /* White background for form */
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            color: #333;
        }

        h1 {
            font-size: 2rem;
            color: #1976d2; /* Blue color */
            text-align: center;
            margin-bottom: 20px;
        }

        .cv-section {
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 20px;
            transition: box-shadow 0.3s ease;
        }

        .form-group:hover {
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .form-group label {
            font-weight: bold;
            color: #555;
            margin-bottom: 5px;
            display: block;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border-radius: 6px;
            border: 1px solid #90caf9; /* Light blue border */
            font-size: 1rem;
            color: #333;
            background-color: #f1f8e9; /* Light greenish */
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
            transition: border-color 0.3s ease;
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            border-color: #1976d2; /* Focus border color */
            outline: none;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }

        .btn-submit {
            background-color: #1976d2; /* Button color */
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 6px;
            font-size: 1.1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
            display: block;
            width: 100%;
            text-align: center;
            margin-top: 20px; /* Space above button */
        }

        .btn-submit:hover {
            background-color: #0d47a1; /* Darker on hover */
        }

        a {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            color: #1976d2;
            font-weight: bold;
            transition: color 0.3s ease;
            text-align: center;
        }

        a:hover {
            text-decoration: underline;
            color: #004d40;
        }

        /* Responsive Styles */
        @media (max-width: 600px) {
            .cv-container {
                padding: 20px;
            }

            .btn-submit {
                font-size: 1rem;
            }
        }
    </style>
{% endblock %}

{% block body %}


<h1>Soumettre votre CV pour le poste : {{ job.position }}</h1>

    {# Affichage des messages flash #}
    {% for label, messages in app.flashes %}
        <div class=\"alert alert-{{ label }}\">
            {% for message in messages %}
                <p>{{ message }}</p>
            {% endfor %}
        </div>
    {% endfor %}

    
    <div class=\"cv-container\">
        <h1>Fill Out This Form</h1>
        {% if candidat.user.cvFile %}
        <p>Votre CV actuel : <a href=\"{{ asset('uploads/cvs/' ~ candidat.user.cvFile) }}\" target=\"_blank\">Voir votre CV</a></p>
        {% endif %}

        {{ form_start(cvForm) }}
        <div class=\"form-group\">
            {{ form_label(cvForm.category) }}
            {{ form_widget(cvForm.category) }}
        </div>

        <div id=\"questions-container\">
            <!-- Questions will be injected here by JavaScript -->
        </div>

        <div class=\"form-group\">
            {{ form_label(cvForm.cvFile) }}
            {{ form_widget(cvForm.cvFile) }}
        </div>

        <button type=\"submit\" class=\"btn-submit\">Submit</button>
        {{ form_end(cvForm) }}
    </div>

    <script>
        const categorySelect = document.querySelector('#cv_category');
        const questionsContainer = document.getElementById('questions-container');

        categorySelect.addEventListener('change', function () {
            const categoryId = this.value;
            if (categoryId) {
                fetch(`/category/\${categoryId}/questions`)
                    .then(response => response.json())
                    .then(questions => {
                        questionsContainer.innerHTML = '';
                        questions.forEach(question => {
                            const questionElement = document.createElement('div');
                            questionElement.classList.add('form-group'); // Add form-group class for consistent styling
                            questionElement.innerHTML = `<label>\${question.question}</label>`;
                            
                            if (question.type === 'unique' || question.type === 'multiple') {
                                const select = document.createElement('select');
                                select.multiple = (question.type === 'multiple');
                                select.classList.add('form-control'); // Bootstrap-like styling
                                question.options.forEach(option => {
                                    const optionElement = document.createElement('option');
                                    optionElement.value = option;
                                    optionElement.text = option;
                                    select.appendChild(optionElement);
                                });
                                questionElement.appendChild(select);
                            } else if (question.type === 'text') {
                                const textarea = document.createElement('textarea');
                                textarea.classList.add('form-control'); // Bootstrap-like styling
                                questionElement.appendChild(textarea);
                            }

                            questionsContainer.appendChild(questionElement);
                        });
                    });
            } else {
                questionsContainer.innerHTML = '';
            }
        });
    </script>
{% endblock %}
", "cv/index.html.twig", "C:\\Users\\LENOVO\\Documents\\Stage\\Recruitment\\templates\\cv\\index.html.twig");
    }
}
