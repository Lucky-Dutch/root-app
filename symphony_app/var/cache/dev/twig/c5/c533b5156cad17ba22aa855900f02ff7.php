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
     ";
        // line 108
        if ((($tmp = (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 108, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 109
            yield "        <div class=\"actions\" style=\"margin-bottom: 18px;\">
            <a href=\"/users\">Powrót do listy</a>
            <a href=\"/users/";
            // line 111
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 111, $this->source); })()), "id", [], "any", false, false, false, 111), "html", null, true);
            yield "/edit\">Edytuj</a>
        </div>
   
          <table>
              <tbody>
                  <tr>
                      <th>ID</th>
                      <td>";
            // line 118
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 118, $this->source); })()), "id", [], "any", false, false, false, 118), "html", null, true);
            yield "</td>
                  </tr>
                  <tr>
                      <th>Imię</th>
                      <td>";
            // line 122
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 122, $this->source); })()), "first_name", [], "any", false, false, false, 122), "html", null, true);
            yield "</td>
                  </tr>
                  <tr>
                      <th>Nazwisko</th>
                      <td>";
            // line 126
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 126, $this->source); })()), "last_name", [], "any", false, false, false, 126), "html", null, true);
            yield "</td>
                  </tr>
                  <tr>
                      <th>Płeć</th>
                      <td>";
            // line 130
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 130, $this->source); })()), "gender", [], "any", false, false, false, 130), "html", null, true);
            yield "</td>
                  </tr>
                  <tr>
                      <th>Data urodzenia</th>
                      <td>";
            // line 134
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 134, $this->source); })()), "birthdate", [], "any", false, false, false, 134), "html", null, true);
            yield "</td>
                  </tr>
              </tbody>
          </table>
        ";
        } else {
            // line 139
            yield "          <h2>Użytkownik nie istnieje</h2>
          <a href=\"/users\">Powrót do listy</a>
        ";
        }
        // line 142
        yield "    </div>
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
        return array (  211 => 142,  206 => 139,  198 => 134,  191 => 130,  184 => 126,  177 => 122,  170 => 118,  160 => 111,  156 => 109,  154 => 108,  45 => 1,);
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
     {% if user %}
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
        {% else %}
          <h2>Użytkownik nie istnieje</h2>
          <a href=\"/users\">Powrót do listy</a>
        {% endif %}
    </div>
</body>
</html>", "users/show.html.twig", "/Users/lukaszdacz/projekty/elixir/project-root/symphony_app/templates/users/show.html.twig");
    }
}
