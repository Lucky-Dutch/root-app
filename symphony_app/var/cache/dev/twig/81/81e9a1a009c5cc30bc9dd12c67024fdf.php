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

/* users/edit.html.twig */
class __TwigTemplate_8bb68087719f8fee5cdd883fb0f4699e extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/edit.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Edycja użytkownika</title>
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

        input[type=\"text\"],
        input[type=\"date\"],
        select {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #d1d5db;
            border-radius: 8px;
            font-size: 0.98em;
            background: #fff;
            box-sizing: border-box;
            outline: none;
            transition: border-color 0.15s, box-shadow 0.15s;
        }
        input[type=\"text\"]:focus,
        input[type=\"date\"]:focus,
        select:focus {
            border-color: #93c5fd;
            box-shadow: 0 0 0 3px rgba(59,130,246,0.15);
        }

        .actions a, .btn {
            display: inline-block;
            padding: 8px 18px;
            border-radius: 8px;
            font-weight: 500;
            letter-spacing: 0.5px;
            transition: background 0.2s;
        }
        .actions a {
            background: #f1f5f9;
            color: #2563eb;
        }
        .actions a:hover {
            background: #dbeafe;
        }
        .btn-primary {
            background: #2563eb;
            color: #fff;
            border: none;
            cursor: pointer;
        }
        .btn-primary:hover {
            background: #1e40af;
        }
        .btn-secondary {
            background: #f1f5f9;
            color: #111827;
            text-decoration: none;
        }
        .btn-secondary:hover {
            background: #e5e7eb;
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
        <h1>Edycja użytkownika</h1>

        <div class=\"actions\" style=\"margin-bottom: 18px;\">
            <a href=\"/users\">Powrót do listy</a>
            <a href=\"/users/";
        // line 136
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 136, $this->source); })()), "id", [], "any", false, false, false, 136), "html", null, true);
        yield "\">Podgląd</a>
        </div>

        <form action=\"/users/";
        // line 139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 139, $this->source); })()), "id", [], "any", false, false, false, 139), "html", null, true);
        yield "/edit\" method=\"post\">
            <table>
                <tbody>
                    <tr>
                        <th>ID</th>
                        <td>";
        // line 144
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 144, $this->source); })()), "id", [], "any", false, false, false, 144), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <th>Imię</th>
                        <td>
                            <input type=\"text\" name=\"first_name\" value=\"";
        // line 149
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 149, $this->source); })()), "first_name", [], "any", false, false, false, 149), "html", null, true);
        yield "\" required>
                        </td>
                    </tr>
                    <tr>
                        <th>Nazwisko</th>
                        <td>
                            <input type=\"text\" name=\"last_name\" value=\"";
        // line 155
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 155, $this->source); })()), "last_name", [], "any", false, false, false, 155), "html", null, true);
        yield "\" required>
                        </td>
                    </tr>
 
                    <tr>
                        <th>Płeć</th>
                        <td>
                            <div style=\"display:flex; gap:16px; align-items:center;\">
                                <label style=\"display:flex; gap:8px; align-items:center;\">
                                    <input type=\"radio\" name=\"gender\" value=\"female\" ";
        // line 164
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 164, $this->source); })()), "gender", [], "any", false, false, false, 164) == "female")) ? ("checked") : (""));
        yield ">
                                    <span>Kobieta</span>
                                </label>
                                <label style=\"display:flex; gap:8px; align-items:center;\">
                                    <input type=\"radio\" name=\"gender\" value=\"male\" ";
        // line 168
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 168, $this->source); })()), "gender", [], "any", false, false, false, 168) == "male")) ? ("checked") : (""));
        yield ">
                                    <span>Mężczyzna</span>
                                </label>
                            </div>
                        </td>
                    </tr>

                    <th>Data urodzenia</th>
                      <td>
                          <input type=\"date\" name=\"birthdate\" value=\"";
        // line 177
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 177, $this->source); })()), "birthdate", [], "any", false, false, false, 177), "html", null, true);
        yield "\">
                      </td>
                  </tr>
                </tbody>
            </table>

            <div style=\"margin-top: 18px; display: flex; gap: 8px;\">
                <button type=\"submit\" class=\"btn btn-primary\">Zapisz zmiany</button>
                <a href=\"/users/";
        // line 185
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 185, $this->source); })()), "id", [], "any", false, false, false, 185), "html", null, true);
        yield "\" class=\"btn btn-secondary\">Anuluj</a>
            </div>
        </form>
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
        return "users/edit.html.twig";
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
        return array (  255 => 185,  244 => 177,  232 => 168,  225 => 164,  213 => 155,  204 => 149,  196 => 144,  188 => 139,  182 => 136,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Edycja użytkownika</title>
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

        input[type=\"text\"],
        input[type=\"date\"],
        select {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #d1d5db;
            border-radius: 8px;
            font-size: 0.98em;
            background: #fff;
            box-sizing: border-box;
            outline: none;
            transition: border-color 0.15s, box-shadow 0.15s;
        }
        input[type=\"text\"]:focus,
        input[type=\"date\"]:focus,
        select:focus {
            border-color: #93c5fd;
            box-shadow: 0 0 0 3px rgba(59,130,246,0.15);
        }

        .actions a, .btn {
            display: inline-block;
            padding: 8px 18px;
            border-radius: 8px;
            font-weight: 500;
            letter-spacing: 0.5px;
            transition: background 0.2s;
        }
        .actions a {
            background: #f1f5f9;
            color: #2563eb;
        }
        .actions a:hover {
            background: #dbeafe;
        }
        .btn-primary {
            background: #2563eb;
            color: #fff;
            border: none;
            cursor: pointer;
        }
        .btn-primary:hover {
            background: #1e40af;
        }
        .btn-secondary {
            background: #f1f5f9;
            color: #111827;
            text-decoration: none;
        }
        .btn-secondary:hover {
            background: #e5e7eb;
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
        <h1>Edycja użytkownika</h1>

        <div class=\"actions\" style=\"margin-bottom: 18px;\">
            <a href=\"/users\">Powrót do listy</a>
            <a href=\"/users/{{ user.id }}\">Podgląd</a>
        </div>

        <form action=\"/users/{{ user.id }}/edit\" method=\"post\">
            <table>
                <tbody>
                    <tr>
                        <th>ID</th>
                        <td>{{ user.id }}</td>
                    </tr>
                    <tr>
                        <th>Imię</th>
                        <td>
                            <input type=\"text\" name=\"first_name\" value=\"{{ user.first_name }}\" required>
                        </td>
                    </tr>
                    <tr>
                        <th>Nazwisko</th>
                        <td>
                            <input type=\"text\" name=\"last_name\" value=\"{{ user.last_name }}\" required>
                        </td>
                    </tr>
 
                    <tr>
                        <th>Płeć</th>
                        <td>
                            <div style=\"display:flex; gap:16px; align-items:center;\">
                                <label style=\"display:flex; gap:8px; align-items:center;\">
                                    <input type=\"radio\" name=\"gender\" value=\"female\" {{ user.gender == 'female' ? 'checked' }}>
                                    <span>Kobieta</span>
                                </label>
                                <label style=\"display:flex; gap:8px; align-items:center;\">
                                    <input type=\"radio\" name=\"gender\" value=\"male\" {{ user.gender == 'male' ? 'checked' }}>
                                    <span>Mężczyzna</span>
                                </label>
                            </div>
                        </td>
                    </tr>

                    <th>Data urodzenia</th>
                      <td>
                          <input type=\"date\" name=\"birthdate\" value=\"{{ user.birthdate }}\">
                      </td>
                  </tr>
                </tbody>
            </table>

            <div style=\"margin-top: 18px; display: flex; gap: 8px;\">
                <button type=\"submit\" class=\"btn btn-primary\">Zapisz zmiany</button>
                <a href=\"/users/{{ user.id }}\" class=\"btn btn-secondary\">Anuluj</a>
            </div>
        </form>
    </div>
</body>
</html>", "users/edit.html.twig", "/Users/lukaszdacz/projekty/elixir/project-root/symphony_app/templates/users/edit.html.twig");
    }
}
