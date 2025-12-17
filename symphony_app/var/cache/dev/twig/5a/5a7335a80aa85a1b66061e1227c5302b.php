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

/* users/list.html.twig */
class __TwigTemplate_f08a99bb67d3674da4b07186f53fef81 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/list.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Lista użytkowników</title>
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
        .filter-form {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 12px 16px;
            margin-bottom: 18px;
            background: #fff;
            border-radius: 8px;
            padding: 16px;
            box-shadow: 0 1px 4px rgba(0,0,0,0.03);
        }
        .filter-form .field {
            display: flex;
            flex-direction: column;
            gap: 6px;
        }
        .filter-form label {
            font-size: 0.9em;
            color: #374151;
        }
        .filter-form input[type=\"text\"],
        .filter-form input[type=\"date\"],
        .filter-form select {
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
        .filter-form input[type=\"text\"]:focus,
        .filter-form input[type=\"date\"]:focus,
        .filter-form select:focus {
            border-color: #93c5fd;
            box-shadow: 0 0 0 3px rgba(59,130,246,0.15);
        }
        .filter-actions {
            grid-column: 1 / -1;
            display: flex;
            gap: 8px;
            justify-content: flex-end;
        }
        .btn {
            display: inline-block;
            padding: 8px 18px;
            border-radius: 8px;
            font-weight: 500;
            letter-spacing: 0.5px;
            transition: background 0.2s;
            border: none;
            cursor: pointer;
        }
        .btn-primary {
            background: #2563eb;
            color: #fff;
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
            color: #fff;
        }
        .sort-indicator {
            font-size: 0.85em;
            margin-left: 6px;
            color: #6b7280;
        }
        @media (max-width: 700px) {
            .container { padding: 10px 2px; }
            .filter-form { grid-template-columns: 1fr; }
            table, thead, tbody, th, td, tr { display: block; }
            th, td { padding: 10px 6px; }
            tr { margin-bottom: 12px; }
            th { background: none; border: none; }
        }
    </style>
</head>
<body>
    <div class=\"container\">
        <h1>Lista użytkowników</h1>

        <a href=\"";
        // line 179
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_add");
        yield "\" class=\"add-btn\">Dodaj użytkownika</a>

        ";
        // line 182
        yield "        <form class=\"filter-form\" action=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_list");
        yield "\" method=\"get\">
            <div class=\"field\">
                <label for=\"first_name\">Imię</label>
                <input type=\"text\" id=\"first_name\" name=\"first_name\" value=\"";
        // line 185
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 185, $this->source); })()), "request", [], "any", false, false, false, 185), "query", [], "any", false, false, false, 185), "get", ["first_name"], "method", false, false, false, 185), "html", null, true);
        yield "\">
            </div>
            <div class=\"field\">
                <label for=\"last_name\">Nazwisko</label>
                <input type=\"text\" id=\"last_name\" name=\"last_name\" value=\"";
        // line 189
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 189, $this->source); })()), "request", [], "any", false, false, false, 189), "query", [], "any", false, false, false, 189), "get", ["last_name"], "method", false, false, false, 189), "html", null, true);
        yield "\">
            </div>
            <div class=\"field\">
                <label for=\"gender\">Płeć</label>
                <select id=\"gender\" name=\"gender\">
                    <option value=\"\" ";
        // line 194
        yield ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 194, $this->source); })()), "request", [], "any", false, false, false, 194), "query", [], "any", false, false, false, 194), "get", ["gender"], "method", false, false, false, 194))) ? ("selected") : (""));
        yield ">— wszystkie —</option>
                    <option value=\"female\" ";
        // line 195
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 195, $this->source); })()), "request", [], "any", false, false, false, 195), "query", [], "any", false, false, false, 195), "get", ["gender"], "method", false, false, false, 195) == "female")) ? ("selected") : (""));
        yield ">Kobieta</option>
                    <option value=\"male\" ";
        // line 196
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 196, $this->source); })()), "request", [], "any", false, false, false, 196), "query", [], "any", false, false, false, 196), "get", ["gender"], "method", false, false, false, 196) == "male")) ? ("selected") : (""));
        yield ">Mężczyzna</option>
                </select>
            </div>
            <div class=\"field\">
                <label for=\"birthdate_from\">Data urodzenia od</label>
                <input type=\"date\" id=\"birthdate_from\" name=\"birthdate_from\" value=\"";
        // line 201
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 201, $this->source); })()), "request", [], "any", false, false, false, 201), "query", [], "any", false, false, false, 201), "get", ["birthdate_from"], "method", false, false, false, 201), "html", null, true);
        yield "\">
            </div>
            <div class=\"field\">
                <label for=\"birthdate_to\">Data urodzenia do</label>
                <input type=\"date\" id=\"birthdate_to\" name=\"birthdate_to\" value=\"";
        // line 205
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 205, $this->source); })()), "request", [], "any", false, false, false, 205), "query", [], "any", false, false, false, 205), "get", ["birthdate_to"], "method", false, false, false, 205), "html", null, true);
        yield "\">
            </div>

            <div class=\"filter-actions\">
                <button type=\"submit\" class=\"btn btn-primary\">Filtruj</button>
                <a class=\"btn btn-secondary\" href=\"";
        // line 210
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_list");
        yield "\">Wyczyść</a>
            </div>
        </form>

        ";
        // line 214
        $context["current_sort"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 214, $this->source); })()), "request", [], "any", false, false, false, 214), "query", [], "any", false, false, false, 214), "get", ["sort"], "method", false, false, false, 214);
        // line 215
        yield "        ";
        $context["current_dir"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 215), "query", [], "any", false, true, false, 215), "get", ["direction"], "method", true, true, false, 215)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 215, $this->source); })()), "request", [], "any", false, false, false, 215), "query", [], "any", false, false, false, 215), "get", ["direction"], "method", false, false, false, 215), "asc")) : ("asc"));
        // line 216
        yield "
        <table>
            <thead>
                <tr>
                    <th>
                        ";
        // line 221
        $context["next_dir"] = (((((isset($context["current_sort"]) || array_key_exists("current_sort", $context) ? $context["current_sort"] : (function () { throw new RuntimeError('Variable "current_sort" does not exist.', 221, $this->source); })()) == "id") && ((isset($context["current_dir"]) || array_key_exists("current_dir", $context) ? $context["current_dir"] : (function () { throw new RuntimeError('Variable "current_dir" does not exist.', 221, $this->source); })()) == "asc"))) ? ("desc") : ("asc"));
        // line 222
        yield "                        <a href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_list", ["sort" => "id", "direction" =>         // line 224
(isset($context["next_dir"]) || array_key_exists("next_dir", $context) ? $context["next_dir"] : (function () { throw new RuntimeError('Variable "next_dir" does not exist.', 224, $this->source); })()), "first_name" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 225
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 225, $this->source); })()), "request", [], "any", false, false, false, 225), "query", [], "any", false, false, false, 225), "get", ["first_name"], "method", false, false, false, 225), "last_name" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 226
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 226, $this->source); })()), "request", [], "any", false, false, false, 226), "query", [], "any", false, false, false, 226), "get", ["last_name"], "method", false, false, false, 226), "gender" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 227
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 227, $this->source); })()), "request", [], "any", false, false, false, 227), "query", [], "any", false, false, false, 227), "get", ["gender"], "method", false, false, false, 227), "birthdate_from" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 228
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 228, $this->source); })()), "request", [], "any", false, false, false, 228), "query", [], "any", false, false, false, 228), "get", ["birthdate_from"], "method", false, false, false, 228), "birthdate_to" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 229
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 229, $this->source); })()), "request", [], "any", false, false, false, 229), "query", [], "any", false, false, false, 229), "get", ["birthdate_to"], "method", false, false, false, 229)]), "html", null, true);
        // line 230
        yield "\">ID</a>
                        ";
        // line 231
        if (((isset($context["current_sort"]) || array_key_exists("current_sort", $context) ? $context["current_sort"] : (function () { throw new RuntimeError('Variable "current_sort" does not exist.', 231, $this->source); })()) == "id")) {
            yield "<span class=\"sort-indicator\">";
            yield ((((isset($context["current_dir"]) || array_key_exists("current_dir", $context) ? $context["current_dir"] : (function () { throw new RuntimeError('Variable "current_dir" does not exist.', 231, $this->source); })()) == "asc")) ? ("▲") : ("▼"));
            yield "</span>";
        }
        // line 232
        yield "                    </th>
                    <th>
                        ";
        // line 234
        $context["next_dir"] = (((((isset($context["current_sort"]) || array_key_exists("current_sort", $context) ? $context["current_sort"] : (function () { throw new RuntimeError('Variable "current_sort" does not exist.', 234, $this->source); })()) == "first_name") && ((isset($context["current_dir"]) || array_key_exists("current_dir", $context) ? $context["current_dir"] : (function () { throw new RuntimeError('Variable "current_dir" does not exist.', 234, $this->source); })()) == "asc"))) ? ("desc") : ("asc"));
        // line 235
        yield "                        <a href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_list", ["sort" => "first_name", "direction" =>         // line 237
(isset($context["next_dir"]) || array_key_exists("next_dir", $context) ? $context["next_dir"] : (function () { throw new RuntimeError('Variable "next_dir" does not exist.', 237, $this->source); })()), "first_name" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 238
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 238, $this->source); })()), "request", [], "any", false, false, false, 238), "query", [], "any", false, false, false, 238), "get", ["first_name"], "method", false, false, false, 238), "last_name" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 239
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 239, $this->source); })()), "request", [], "any", false, false, false, 239), "query", [], "any", false, false, false, 239), "get", ["last_name"], "method", false, false, false, 239), "gender" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 240
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 240, $this->source); })()), "request", [], "any", false, false, false, 240), "query", [], "any", false, false, false, 240), "get", ["gender"], "method", false, false, false, 240), "birthdate_from" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 241
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 241, $this->source); })()), "request", [], "any", false, false, false, 241), "query", [], "any", false, false, false, 241), "get", ["birthdate_from"], "method", false, false, false, 241), "birthdate_to" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 242
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 242, $this->source); })()), "request", [], "any", false, false, false, 242), "query", [], "any", false, false, false, 242), "get", ["birthdate_to"], "method", false, false, false, 242)]), "html", null, true);
        // line 243
        yield "\">Imię</a>
                        ";
        // line 244
        if (((isset($context["current_sort"]) || array_key_exists("current_sort", $context) ? $context["current_sort"] : (function () { throw new RuntimeError('Variable "current_sort" does not exist.', 244, $this->source); })()) == "first_name")) {
            yield "<span class=\"sort-indicator\">";
            yield ((((isset($context["current_dir"]) || array_key_exists("current_dir", $context) ? $context["current_dir"] : (function () { throw new RuntimeError('Variable "current_dir" does not exist.', 244, $this->source); })()) == "asc")) ? ("▲") : ("▼"));
            yield "</span>";
        }
        // line 245
        yield "                    </th>
                    <th>
                        ";
        // line 247
        $context["next_dir"] = (((((isset($context["current_sort"]) || array_key_exists("current_sort", $context) ? $context["current_sort"] : (function () { throw new RuntimeError('Variable "current_sort" does not exist.', 247, $this->source); })()) == "last_name") && ((isset($context["current_dir"]) || array_key_exists("current_dir", $context) ? $context["current_dir"] : (function () { throw new RuntimeError('Variable "current_dir" does not exist.', 247, $this->source); })()) == "asc"))) ? ("desc") : ("asc"));
        // line 248
        yield "                        <a href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_list", ["sort" => "last_name", "direction" =>         // line 250
(isset($context["next_dir"]) || array_key_exists("next_dir", $context) ? $context["next_dir"] : (function () { throw new RuntimeError('Variable "next_dir" does not exist.', 250, $this->source); })()), "first_name" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 251
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 251, $this->source); })()), "request", [], "any", false, false, false, 251), "query", [], "any", false, false, false, 251), "get", ["first_name"], "method", false, false, false, 251), "last_name" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 252
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 252, $this->source); })()), "request", [], "any", false, false, false, 252), "query", [], "any", false, false, false, 252), "get", ["last_name"], "method", false, false, false, 252), "gender" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 253
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 253, $this->source); })()), "request", [], "any", false, false, false, 253), "query", [], "any", false, false, false, 253), "get", ["gender"], "method", false, false, false, 253), "birthdate_from" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 254
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 254, $this->source); })()), "request", [], "any", false, false, false, 254), "query", [], "any", false, false, false, 254), "get", ["birthdate_from"], "method", false, false, false, 254), "birthdate_to" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 255
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 255, $this->source); })()), "request", [], "any", false, false, false, 255), "query", [], "any", false, false, false, 255), "get", ["birthdate_to"], "method", false, false, false, 255)]), "html", null, true);
        // line 256
        yield "\">Nazwisko</a>
                        ";
        // line 257
        if (((isset($context["current_sort"]) || array_key_exists("current_sort", $context) ? $context["current_sort"] : (function () { throw new RuntimeError('Variable "current_sort" does not exist.', 257, $this->source); })()) == "last_name")) {
            yield "<span class=\"sort-indicator\">";
            yield ((((isset($context["current_dir"]) || array_key_exists("current_dir", $context) ? $context["current_dir"] : (function () { throw new RuntimeError('Variable "current_dir" does not exist.', 257, $this->source); })()) == "asc")) ? ("▲") : ("▼"));
            yield "</span>";
        }
        // line 258
        yield "                    </th>
                    <th>
                        ";
        // line 260
        $context["next_dir"] = (((((isset($context["current_sort"]) || array_key_exists("current_sort", $context) ? $context["current_sort"] : (function () { throw new RuntimeError('Variable "current_sort" does not exist.', 260, $this->source); })()) == "gender") && ((isset($context["current_dir"]) || array_key_exists("current_dir", $context) ? $context["current_dir"] : (function () { throw new RuntimeError('Variable "current_dir" does not exist.', 260, $this->source); })()) == "asc"))) ? ("desc") : ("asc"));
        // line 261
        yield "                        <a href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_list", ["sort" => "gender", "direction" =>         // line 263
(isset($context["next_dir"]) || array_key_exists("next_dir", $context) ? $context["next_dir"] : (function () { throw new RuntimeError('Variable "next_dir" does not exist.', 263, $this->source); })()), "first_name" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 264
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 264, $this->source); })()), "request", [], "any", false, false, false, 264), "query", [], "any", false, false, false, 264), "get", ["first_name"], "method", false, false, false, 264), "last_name" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 265
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 265, $this->source); })()), "request", [], "any", false, false, false, 265), "query", [], "any", false, false, false, 265), "get", ["last_name"], "method", false, false, false, 265), "gender" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 266
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 266, $this->source); })()), "request", [], "any", false, false, false, 266), "query", [], "any", false, false, false, 266), "get", ["gender"], "method", false, false, false, 266), "birthdate_from" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 267
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 267, $this->source); })()), "request", [], "any", false, false, false, 267), "query", [], "any", false, false, false, 267), "get", ["birthdate_from"], "method", false, false, false, 267), "birthdate_to" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 268
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 268, $this->source); })()), "request", [], "any", false, false, false, 268), "query", [], "any", false, false, false, 268), "get", ["birthdate_to"], "method", false, false, false, 268)]), "html", null, true);
        // line 269
        yield "\">Płeć</a>
                        ";
        // line 270
        if (((isset($context["current_sort"]) || array_key_exists("current_sort", $context) ? $context["current_sort"] : (function () { throw new RuntimeError('Variable "current_sort" does not exist.', 270, $this->source); })()) == "gender")) {
            yield "<span class=\"sort-indicator\">";
            yield ((((isset($context["current_dir"]) || array_key_exists("current_dir", $context) ? $context["current_dir"] : (function () { throw new RuntimeError('Variable "current_dir" does not exist.', 270, $this->source); })()) == "asc")) ? ("▲") : ("▼"));
            yield "</span>";
        }
        // line 271
        yield "                    </th>
                    <th>
                        ";
        // line 273
        $context["next_dir"] = (((((isset($context["current_sort"]) || array_key_exists("current_sort", $context) ? $context["current_sort"] : (function () { throw new RuntimeError('Variable "current_sort" does not exist.', 273, $this->source); })()) == "birthdate") && ((isset($context["current_dir"]) || array_key_exists("current_dir", $context) ? $context["current_dir"] : (function () { throw new RuntimeError('Variable "current_dir" does not exist.', 273, $this->source); })()) == "asc"))) ? ("desc") : ("asc"));
        // line 274
        yield "                        <a href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_list", ["sort" => "birthdate", "direction" =>         // line 276
(isset($context["next_dir"]) || array_key_exists("next_dir", $context) ? $context["next_dir"] : (function () { throw new RuntimeError('Variable "next_dir" does not exist.', 276, $this->source); })()), "first_name" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 277
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 277, $this->source); })()), "request", [], "any", false, false, false, 277), "query", [], "any", false, false, false, 277), "get", ["first_name"], "method", false, false, false, 277), "last_name" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 278
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 278, $this->source); })()), "request", [], "any", false, false, false, 278), "query", [], "any", false, false, false, 278), "get", ["last_name"], "method", false, false, false, 278), "gender" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 279
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 279, $this->source); })()), "request", [], "any", false, false, false, 279), "query", [], "any", false, false, false, 279), "get", ["gender"], "method", false, false, false, 279), "birthdate_from" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 280
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 280, $this->source); })()), "request", [], "any", false, false, false, 280), "query", [], "any", false, false, false, 280), "get", ["birthdate_from"], "method", false, false, false, 280), "birthdate_to" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 281
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 281, $this->source); })()), "request", [], "any", false, false, false, 281), "query", [], "any", false, false, false, 281), "get", ["birthdate_to"], "method", false, false, false, 281)]), "html", null, true);
        // line 282
        yield "\">Data urodzenia</a>
                        ";
        // line 283
        if (((isset($context["current_sort"]) || array_key_exists("current_sort", $context) ? $context["current_sort"] : (function () { throw new RuntimeError('Variable "current_sort" does not exist.', 283, $this->source); })()) == "birthdate")) {
            yield "<span class=\"sort-indicator\">";
            yield ((((isset($context["current_dir"]) || array_key_exists("current_dir", $context) ? $context["current_dir"] : (function () { throw new RuntimeError('Variable "current_dir" does not exist.', 283, $this->source); })()) == "asc")) ? ("▲") : ("▼"));
            yield "</span>";
        }
        // line 284
        yield "                    </th>
                    <th>Akcje</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 289
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 289, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 290
            yield "                    <tr>
                        <td>";
            // line 291
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 291), "html", null, true);
            yield "</td>
                        <td>";
            // line 292
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "first_name", [], "any", false, false, false, 292), "html", null, true);
            yield "</td>
                        <td>";
            // line 293
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "last_name", [], "any", false, false, false, 293), "html", null, true);
            yield "</td>
                        <td>";
            // line 294
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "gender", [], "any", false, false, false, 294), "html", null, true);
            yield "</td>
                        <td>";
            // line 295
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "birthdate", [], "any", false, false, false, 295), "html", null, true);
            yield "</td>
                        <td class=\"actions\">
                            <a href=\"";
            // line 297
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 297)]), "html", null, true);
            yield "\">Pokaż</a>
                            <a href=\"";
            // line 298
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 298)]), "html", null, true);
            yield "\">Edytuj</a>
                            <a href=\"";
            // line 299
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 299)]), "html", null, true);
            yield "\" data-method=\"delete\" onclick=\"return confirm('Are you sure you want to delete this item?');\">Delete</a>
                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        // line 302
        if (!$context['_iterated']) {
            // line 303
            yield "                    <tr>
                        <td colspan=\"6\">Brak użytkowników.</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 307
        yield "            </tbody>
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
        return "users/list.html.twig";
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
        return array (  481 => 307,  472 => 303,  470 => 302,  462 => 299,  458 => 298,  454 => 297,  449 => 295,  445 => 294,  441 => 293,  437 => 292,  433 => 291,  430 => 290,  425 => 289,  418 => 284,  412 => 283,  409 => 282,  407 => 281,  406 => 280,  405 => 279,  404 => 278,  403 => 277,  402 => 276,  400 => 274,  398 => 273,  394 => 271,  388 => 270,  385 => 269,  383 => 268,  382 => 267,  381 => 266,  380 => 265,  379 => 264,  378 => 263,  376 => 261,  374 => 260,  370 => 258,  364 => 257,  361 => 256,  359 => 255,  358 => 254,  357 => 253,  356 => 252,  355 => 251,  354 => 250,  352 => 248,  350 => 247,  346 => 245,  340 => 244,  337 => 243,  335 => 242,  334 => 241,  333 => 240,  332 => 239,  331 => 238,  330 => 237,  328 => 235,  326 => 234,  322 => 232,  316 => 231,  313 => 230,  311 => 229,  310 => 228,  309 => 227,  308 => 226,  307 => 225,  306 => 224,  304 => 222,  302 => 221,  295 => 216,  292 => 215,  290 => 214,  283 => 210,  275 => 205,  268 => 201,  260 => 196,  256 => 195,  252 => 194,  244 => 189,  237 => 185,  230 => 182,  225 => 179,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Lista użytkowników</title>
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
        .filter-form {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 12px 16px;
            margin-bottom: 18px;
            background: #fff;
            border-radius: 8px;
            padding: 16px;
            box-shadow: 0 1px 4px rgba(0,0,0,0.03);
        }
        .filter-form .field {
            display: flex;
            flex-direction: column;
            gap: 6px;
        }
        .filter-form label {
            font-size: 0.9em;
            color: #374151;
        }
        .filter-form input[type=\"text\"],
        .filter-form input[type=\"date\"],
        .filter-form select {
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
        .filter-form input[type=\"text\"]:focus,
        .filter-form input[type=\"date\"]:focus,
        .filter-form select:focus {
            border-color: #93c5fd;
            box-shadow: 0 0 0 3px rgba(59,130,246,0.15);
        }
        .filter-actions {
            grid-column: 1 / -1;
            display: flex;
            gap: 8px;
            justify-content: flex-end;
        }
        .btn {
            display: inline-block;
            padding: 8px 18px;
            border-radius: 8px;
            font-weight: 500;
            letter-spacing: 0.5px;
            transition: background 0.2s;
            border: none;
            cursor: pointer;
        }
        .btn-primary {
            background: #2563eb;
            color: #fff;
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
            color: #fff;
        }
        .sort-indicator {
            font-size: 0.85em;
            margin-left: 6px;
            color: #6b7280;
        }
        @media (max-width: 700px) {
            .container { padding: 10px 2px; }
            .filter-form { grid-template-columns: 1fr; }
            table, thead, tbody, th, td, tr { display: block; }
            th, td { padding: 10px 6px; }
            tr { margin-bottom: 12px; }
            th { background: none; border: none; }
        }
    </style>
</head>
<body>
    <div class=\"container\">
        <h1>Lista użytkowników</h1>

        <a href=\"{{ path('user_add') }}\" class=\"add-btn\">Dodaj użytkownika</a>

        {# Filter form (GET user_list) #}
        <form class=\"filter-form\" action=\"{{ path('user_list') }}\" method=\"get\">
            <div class=\"field\">
                <label for=\"first_name\">Imię</label>
                <input type=\"text\" id=\"first_name\" name=\"first_name\" value=\"{{ app.request.query.get('first_name') }}\">
            </div>
            <div class=\"field\">
                <label for=\"last_name\">Nazwisko</label>
                <input type=\"text\" id=\"last_name\" name=\"last_name\" value=\"{{ app.request.query.get('last_name') }}\">
            </div>
            <div class=\"field\">
                <label for=\"gender\">Płeć</label>
                <select id=\"gender\" name=\"gender\">
                    <option value=\"\" {{ app.request.query.get('gender') is empty ? 'selected' : '' }}>— wszystkie —</option>
                    <option value=\"female\" {{ app.request.query.get('gender') == 'female' ? 'selected' : '' }}>Kobieta</option>
                    <option value=\"male\" {{ app.request.query.get('gender') == 'male' ? 'selected' : '' }}>Mężczyzna</option>
                </select>
            </div>
            <div class=\"field\">
                <label for=\"birthdate_from\">Data urodzenia od</label>
                <input type=\"date\" id=\"birthdate_from\" name=\"birthdate_from\" value=\"{{ app.request.query.get('birthdate_from') }}\">
            </div>
            <div class=\"field\">
                <label for=\"birthdate_to\">Data urodzenia do</label>
                <input type=\"date\" id=\"birthdate_to\" name=\"birthdate_to\" value=\"{{ app.request.query.get('birthdate_to') }}\">
            </div>

            <div class=\"filter-actions\">
                <button type=\"submit\" class=\"btn btn-primary\">Filtruj</button>
                <a class=\"btn btn-secondary\" href=\"{{ path('user_list') }}\">Wyczyść</a>
            </div>
        </form>

        {% set current_sort = app.request.query.get('sort') %}
        {% set current_dir = app.request.query.get('direction')|default('asc') %}

        <table>
            <thead>
                <tr>
                    <th>
                        {% set next_dir = (current_sort == 'id' and current_dir == 'asc') ? 'desc' : 'asc' %}
                        <a href=\"{{ path('user_list', {
                            sort: 'id',
                            direction: next_dir,
                            first_name: app.request.query.get('first_name'),
                            last_name: app.request.query.get('last_name'),
                            gender: app.request.query.get('gender'),
                            birthdate_from: app.request.query.get('birthdate_from'),
                            birthdate_to: app.request.query.get('birthdate_to')
                        }) }}\">ID</a>
                        {% if current_sort == 'id' %}<span class=\"sort-indicator\">{{ current_dir == 'asc' ? '▲' : '▼' }}</span>{% endif %}
                    </th>
                    <th>
                        {% set next_dir = (current_sort == 'first_name' and current_dir == 'asc') ? 'desc' : 'asc' %}
                        <a href=\"{{ path('user_list', {
                            sort: 'first_name',
                            direction: next_dir,
                            first_name: app.request.query.get('first_name'),
                            last_name: app.request.query.get('last_name'),
                            gender: app.request.query.get('gender'),
                            birthdate_from: app.request.query.get('birthdate_from'),
                            birthdate_to: app.request.query.get('birthdate_to')
                        }) }}\">Imię</a>
                        {% if current_sort == 'first_name' %}<span class=\"sort-indicator\">{{ current_dir == 'asc' ? '▲' : '▼' }}</span>{% endif %}
                    </th>
                    <th>
                        {% set next_dir = (current_sort == 'last_name' and current_dir == 'asc') ? 'desc' : 'asc' %}
                        <a href=\"{{ path('user_list', {
                            sort: 'last_name',
                            direction: next_dir,
                            first_name: app.request.query.get('first_name'),
                            last_name: app.request.query.get('last_name'),
                            gender: app.request.query.get('gender'),
                            birthdate_from: app.request.query.get('birthdate_from'),
                            birthdate_to: app.request.query.get('birthdate_to')
                        }) }}\">Nazwisko</a>
                        {% if current_sort == 'last_name' %}<span class=\"sort-indicator\">{{ current_dir == 'asc' ? '▲' : '▼' }}</span>{% endif %}
                    </th>
                    <th>
                        {% set next_dir = (current_sort == 'gender' and current_dir == 'asc') ? 'desc' : 'asc' %}
                        <a href=\"{{ path('user_list', {
                            sort: 'gender',
                            direction: next_dir,
                            first_name: app.request.query.get('first_name'),
                            last_name: app.request.query.get('last_name'),
                            gender: app.request.query.get('gender'),
                            birthdate_from: app.request.query.get('birthdate_from'),
                            birthdate_to: app.request.query.get('birthdate_to')
                        }) }}\">Płeć</a>
                        {% if current_sort == 'gender' %}<span class=\"sort-indicator\">{{ current_dir == 'asc' ? '▲' : '▼' }}</span>{% endif %}
                    </th>
                    <th>
                        {% set next_dir = (current_sort == 'birthdate' and current_dir == 'asc') ? 'desc' : 'asc' %}
                        <a href=\"{{ path('user_list', {
                            sort: 'birthdate',
                            direction: next_dir,
                            first_name: app.request.query.get('first_name'),
                            last_name: app.request.query.get('last_name'),
                            gender: app.request.query.get('gender'),
                            birthdate_from: app.request.query.get('birthdate_from'),
                            birthdate_to: app.request.query.get('birthdate_to')
                        }) }}\">Data urodzenia</a>
                        {% if current_sort == 'birthdate' %}<span class=\"sort-indicator\">{{ current_dir == 'asc' ? '▲' : '▼' }}</span>{% endif %}
                    </th>
                    <th>Akcje</th>
                </tr>
            </thead>
            <tbody>
                {% for user in users %}
                    <tr>
                        <td>{{ user.id }}</td>
                        <td>{{ user.first_name }}</td>
                        <td>{{ user.last_name }}</td>
                        <td>{{ user.gender }}</td>
                        <td>{{ user.birthdate }}</td>
                        <td class=\"actions\">
                            <a href=\"{{ path('user_show', { id: user.id }) }}\">Pokaż</a>
                            <a href=\"{{ path('user_edit', { id: user.id }) }}\">Edytuj</a>
                            <a href=\"{{ path('user_delete', { id: user.id }) }}\" data-method=\"delete\" onclick=\"return confirm('Are you sure you want to delete this item?');\">Delete</a>
                        </td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"6\">Brak użytkowników.</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>
</body>
</html>", "users/list.html.twig", "/Users/lukaszdacz/projekty/elixir/project-root/symphony_app/templates/users/list.html.twig");
    }
}
