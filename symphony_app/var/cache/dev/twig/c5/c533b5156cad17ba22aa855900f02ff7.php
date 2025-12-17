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

/* users/show.html.twig */
class __TwigTemplate_c705063d141cab5d7dec273929250eb0 extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/show.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Szczegóły użytkownika</title>
    <style>
        body {
            font-family: 'Inter', Arial, sans-serif;
            background: #f7f8fa;
            color: #222;
            margin: 0;
            padding: 0;
        }
        h1 {
            font-weight: 600;
            letter-spacing: -1px;
            margin-top: 32px;
            margin-bottom: 24px;
            text-align: center;
        }
        a {
            color: #2563eb;
            text-decoration: none;
            margin-right: 8px;
            transition: color 0.2s;
        }
        a:hover {
            color: #1e40af;
            text-decoration: underline;
        }
        .container {
            max-width: 900px;
            margin: 40px auto;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 2px 16px rgba(0,0,0,0.06);
            padding: 32px 24px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 1px 4px rgba(0,0,0,0.03);
        }
        th, td {
            padding: 14px 12px;
            text-align: left;
        }
        th {
            background: #f1f5f9;
            font-weight: 500;
            letter-spacing: 0.5px;
            border-bottom: 2px solid #e5e7eb;
            width: 30%;
        }
        tr {
            transition: background 0.15s;
        }
        tr:nth-child(even) {
            background: #f9fafb;
        }
        tr:hover {
            background: #e0e7ef;
        }
        .actions a {
            padding: 4px 12px;
            border-radius: 6px;
            font-size: 0.97em;
            background: #f1f5f9;
            margin-right: 4px;
        }
        .actions a:hover {
            background: #dbeafe;
        }
        .add-btn {
            display: inline-block;
            margin-bottom: 18px;
            padding: 8px 18px;
            background: #2563eb;
            color: #fff;
            border-radius: 8px;
            font-weight: 500;
            letter-spacing: 0.5px;
            transition: background 0.2s;
        }
        .add-btn:hover {
            background: #1e40af;
        }
        @media (max-width: 700px) {
            .container { padding: 10px 2px; }
            table, thead, tbody, th, td, tr { display: block; }
            th, td { padding: 10px 6px; }
            tr { margin-bottom: 12px; }
            th { background: none; border: none; }
        }
    </style>
</head>
<body>
    <div class=\"container\">
        <h1>Szczegóły użytkownika</h1>

        <div class=\"actions\" style=\"margin-bottom: 18px;\">
            <a href=\"/users\">Powrót do listy</a>
            <a href=\"/users/";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 106, $this->source); })()), "id", [], "any", false, false, false, 106), "html", null, true);
        yield "/edit\">Edytuj</a>
        </div>

        <table>
            <tbody>
                <tr>
                    <th>ID</th>
                    <td>";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 113, $this->source); })()), "id", [], "any", false, false, false, 113), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>Imię</th>
                    <td>";
        // line 117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 117, $this->source); })()), "first_name", [], "any", false, false, false, 117), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>Nazwisko</th>
                    <td>";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 121, $this->source); })()), "last_name", [], "any", false, false, false, 121), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>Płeć</th>
                    <td>";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 125, $this->source); })()), "gender", [], "any", false, false, false, 125), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>Data urodzenia</th>
                    <td>";
        // line 129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 129, $this->source); })()), "birthdate", [], "any", false, false, false, 129), "html", null, true);
        yield "</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "users/show.html.twig";
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
        return array (  190 => 129,  183 => 125,  176 => 121,  169 => 117,  162 => 113,  152 => 106,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Szczegóły użytkownika</title>
    <style>
        body {
            font-family: 'Inter', Arial, sans-serif;
            background: #f7f8fa;
            color: #222;
            margin: 0;
            padding: 0;
        }
        h1 {
            font-weight: 600;
            letter-spacing: -1px;
            margin-top: 32px;
            margin-bottom: 24px;
            text-align: center;
        }
        a {
            color: #2563eb;
            text-decoration: none;
            margin-right: 8px;
            transition: color 0.2s;
        }
        a:hover {
            color: #1e40af;
            text-decoration: underline;
        }
        .container {
            max-width: 900px;
            margin: 40px auto;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 2px 16px rgba(0,0,0,0.06);
            padding: 32px 24px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 1px 4px rgba(0,0,0,0.03);
        }
        th, td {
            padding: 14px 12px;
            text-align: left;
        }
        th {
            background: #f1f5f9;
            font-weight: 500;
            letter-spacing: 0.5px;
            border-bottom: 2px solid #e5e7eb;
            width: 30%;
        }
        tr {
            transition: background 0.15s;
        }
        tr:nth-child(even) {
            background: #f9fafb;
        }
        tr:hover {
            background: #e0e7ef;
        }
        .actions a {
            padding: 4px 12px;
            border-radius: 6px;
            font-size: 0.97em;
            background: #f1f5f9;
            margin-right: 4px;
        }
        .actions a:hover {
            background: #dbeafe;
        }
        .add-btn {
            display: inline-block;
            margin-bottom: 18px;
            padding: 8px 18px;
            background: #2563eb;
            color: #fff;
            border-radius: 8px;
            font-weight: 500;
            letter-spacing: 0.5px;
            transition: background 0.2s;
        }
        .add-btn:hover {
            background: #1e40af;
        }
        @media (max-width: 700px) {
            .container { padding: 10px 2px; }
            table, thead, tbody, th, td, tr { display: block; }
            th, td { padding: 10px 6px; }
            tr { margin-bottom: 12px; }
            th { background: none; border: none; }
        }
    </style>
</head>
<body>
    <div class=\"container\">
        <h1>Szczegóły użytkownika</h1>

        <div class=\"actions\" style=\"margin-bottom: 18px;\">
            <a href=\"/users\">Powrót do listy</a>
            <a href=\"/users/{{ user.id }}/edit\">Edytuj</a>
        </div>

        <table>
            <tbody>
                <tr>
                    <th>ID</th>
                    <td>{{ user.id }}</td>
                </tr>
                <tr>
                    <th>Imię</th>
                    <td>{{ user.first_name }}</td>
                </tr>
                <tr>
                    <th>Nazwisko</th>
                    <td>{{ user.last_name }}</td>
                </tr>
                <tr>
                    <th>Płeć</th>
                    <td>{{ user.gender }}</td>
                </tr>
                <tr>
                    <th>Data urodzenia</th>
                    <td>{{ user.birthdate }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>", "users/show.html.twig", "/Users/lukaszdacz/projekty/elixir/project-root/symphony_app/templates/users/show.html.twig");
    }
}
