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

/* @WebProfiler/Profiler/settings.html.twig */
class __TwigTemplate_bfef8fd3af6d06a747715a73c6b8d71a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/settings.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/settings.html.twig"));

        // line 1
        yield "<style>
#open-settings {
    color: var(--color-muted);
    display: block;
    margin: 15px 15px 5px;
}

.modal-wrap {
    -webkit-transition: all 0.3s ease-in-out;
    align-items: center;
    background: rgba(0, 0, 0, 0.8);
    display: flex;
    height: 100%;
    justify-content: center;
    left: 0;
    opacity: 1;
    overflow: auto;
    position: fixed;
    top: 0;
    transition: all 0.3s ease-in-out;
    visibility: hidden;
    width: 100%;
    z-index: 100000;
}
.modal-wrap.visible {
    opacity: 1;
    visibility: visible;
}
.modal-wrap .modal-container {
    box-shadow: 5px 5px 10px 0px rgba(0, 0, 0, 0.5);
    color: var(--base-6);
    margin: 1em;
    max-width: 94%;
    width: 600px;
}

.modal-wrap .modal-header {
    align-items: center;
    background: var(--table-header);
    display: flex;
    justify-content: space-between;
    padding: 15px 30px;
}
.modal-wrap .modal-header h3 {
    color: var(--base-6);
    margin: 0;
}
.modal-wrap .modal-header .close-modal {
    background: transparent;
    border: 0;
    color: var(--base-4);
    cursor: pointer;
    font-size: 28px;
    line-height: 1;
}

.modal-wrap .modal-header .close-modal:hover { opacity: 1; }

.modal-wrap .modal-content {
  background: var(--base-1);
  margin: 0;
  padding: 15px 30px;
  width: 100%;
  z-index: 100000;
}
.modal-content h4 {
    border-bottom: var(--border);
    margin: 0 0 15px;
    padding: 0 0 5px;
}
.modal-content input, .modal-content .form-help {
    margin-left: 15px;
}
.modal-content label {
    cursor: pointer;
    font-size: 16px;
    margin-left: 3px;
}
.modal-content .form-help {
    color: var(--color-muted);
    font-size: 14px;
    margin: 5px 0 15px 33px;
}
.modal-content .form-help + h4 {
    margin-top: 45px;
}

@media (max-width: 768px) {
    #open-settings {
        color: transparent;
    }
    #sidebar:hover #open-settings, #sidebar.expanded #open-settings {
        color: var(--color-muted);
    }
    #open-settings:before {
        content: \x27\\2699\x27;
        font-weight: bold;
        font-size: 25px;
        color: var(--color-muted);
    }
    #sidebar:hover #open-settings:before, #sidebar.expanded #open-settings:before {
        content: \x27\x27;
    }
}
</style>

<a href=\"#\" id=\"open-settings\">Settings</a>

<div class=\"modal-wrap\" id=\"profiler-settings\">
    <div class=\"modal-container\">
        <div class=\"modal-header\">
            <h3>Configuration Settings</h3>
            <button class=\"close-modal\">&times;</button>
        </div>

        <div class=\"modal-content\">
            <h4>Theme</h4>

            <input class=\"config-option\" type=\"radio\" name=\"theme\" value=\"auto\" id=\"settings-theme-auto\">
            <label for=\"settings-theme-auto\">Auto</label>
            <p class=\"form-help\"><strong>Default theme</strong>. It switches between Light and Dark automatically to match the operating system theme.</p>

            <input class=\"config-option\" type=\"radio\" name=\"theme\" value=\"light\" id=\"settings-theme-light\">
            <label for=\"settings-theme-light\">Light</label>
            <p class=\"form-help\">Provides greatest readability, but requires a well-lit environment.</p>

            <input class=\"config-option\" type=\"radio\" name=\"theme\" value=\"dark\" id=\"settings-theme-dark\">
            <label for=\"settings-theme-dark\">Dark</label>
            <p class=\"form-help\">Reduces eye fatigue. Ideal for low light environments.</p>

            <h4>Page Width</h4>

            <input class=\"config-option\" type=\"radio\" name=\"width\" value=\"normal\" id=\"settings-width-normal\">
            <label for=\"settings-width-normal\">Normal</label>
            <p class=\"form-help\">Fixed page width. Improves readability.</p>

            <input class=\"config-option\" type=\"radio\" name=\"width\" value=\"full\" id=\"settings-width-full\">
            <label for=\"settings-width-full\">Full-page</label>
            <p class=\"form-help\">Dynamic page width. As wide as the browser window.</p>
        </div>
    </div>
</div>

<script>
(function() {
    const configOptions = document.querySelectorAll(\x27.config-option\x27);
    const allSettingValues = [\x27theme-auto\x27, \x27theme-ligh\x27, \x27theme-dark\x27, \x27width-normal\x27, \x27width-full\x27];
    [...configOptions].forEach(option => {
        option.addEventListener(\x27change\x27, function (event) {
            const optionName = option.name;
            const optionValue = option.value;
            const settingName = \x27symfony/profiler/\x27 + optionName;
            const settingValue = optionName + \x27-\x27 + optionValue;

            localStorage.setItem(settingName, settingValue);

            document.body.classList.forEach((cssClass) => {
                if (cssClass.startsWith(optionName)) {
                    document.body.classList.remove(cssClass);
                }
            });

            if (\x27theme-auto\x27 === settingValue) {
                document.body.classList.add((matchMedia(\x27(prefers-color-scheme: dark)\x27).matches ? \x27theme-dark\x27 : \x27theme-light\x27));
            } else {
                document.body.classList.add(settingValue);
            }
        });
    });

    const openModalButton = document.getElementById(\x27open-settings\x27);
    const modalWindow = document.getElementById(\x27profiler-settings\x27);
    const closeModalButton = document.getElementsByClassName(\x27close-modal\x27)[0];
    const modalWrapper = document.getElementsByClassName(\x27modal-wrap\x27)[0]

    openModalButton.addEventListener(\x27click\x27, function(event) {
        document.getElementById(\x27settings-\x27 + (localStorage.getItem(\x27symfony/profiler/theme\x27) || \x27theme-auto\x27)).checked = \x27checked\x27;
        document.getElementById(\x27settings-\x27 + (localStorage.getItem(\x27symfony/profiler/width\x27) || \x27width-normal\x27)).checked = \x27checked\x27;

        modalWindow.classList.toggle(\x27visible\x27);
        event.preventDefault();
    });

    closeModalButton.addEventListener(\x27click\x27, function() {
        modalWindow.classList.remove(\x27visible\x27);
    });
    modalWrapper.addEventListener(\x27click\x27, function(event) {
        if (event.target == event.currentTarget) {
            modalWindow.classList.remove(\x27visible\x27);
        }
    });
})();
</script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@WebProfiler/Profiler/settings.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<style>
#open-settings {
    color: var(--color-muted);
    display: block;
    margin: 15px 15px 5px;
}

.modal-wrap {
    -webkit-transition: all 0.3s ease-in-out;
    align-items: center;
    background: rgba(0, 0, 0, 0.8);
    display: flex;
    height: 100%;
    justify-content: center;
    left: 0;
    opacity: 1;
    overflow: auto;
    position: fixed;
    top: 0;
    transition: all 0.3s ease-in-out;
    visibility: hidden;
    width: 100%;
    z-index: 100000;
}
.modal-wrap.visible {
    opacity: 1;
    visibility: visible;
}
.modal-wrap .modal-container {
    box-shadow: 5px 5px 10px 0px rgba(0, 0, 0, 0.5);
    color: var(--base-6);
    margin: 1em;
    max-width: 94%;
    width: 600px;
}

.modal-wrap .modal-header {
    align-items: center;
    background: var(--table-header);
    display: flex;
    justify-content: space-between;
    padding: 15px 30px;
}
.modal-wrap .modal-header h3 {
    color: var(--base-6);
    margin: 0;
}
.modal-wrap .modal-header .close-modal {
    background: transparent;
    border: 0;
    color: var(--base-4);
    cursor: pointer;
    font-size: 28px;
    line-height: 1;
}

.modal-wrap .modal-header .close-modal:hover { opacity: 1; }

.modal-wrap .modal-content {
  background: var(--base-1);
  margin: 0;
  padding: 15px 30px;
  width: 100%;
  z-index: 100000;
}
.modal-content h4 {
    border-bottom: var(--border);
    margin: 0 0 15px;
    padding: 0 0 5px;
}
.modal-content input, .modal-content .form-help {
    margin-left: 15px;
}
.modal-content label {
    cursor: pointer;
    font-size: 16px;
    margin-left: 3px;
}
.modal-content .form-help {
    color: var(--color-muted);
    font-size: 14px;
    margin: 5px 0 15px 33px;
}
.modal-content .form-help + h4 {
    margin-top: 45px;
}

@media (max-width: 768px) {
    #open-settings {
        color: transparent;
    }
    #sidebar:hover #open-settings, #sidebar.expanded #open-settings {
        color: var(--color-muted);
    }
    #open-settings:before {
        content: \x27\\2699\x27;
        font-weight: bold;
        font-size: 25px;
        color: var(--color-muted);
    }
    #sidebar:hover #open-settings:before, #sidebar.expanded #open-settings:before {
        content: \x27\x27;
    }
}
</style>

<a href=\"#\" id=\"open-settings\">Settings</a>

<div class=\"modal-wrap\" id=\"profiler-settings\">
    <div class=\"modal-container\">
        <div class=\"modal-header\">
            <h3>Configuration Settings</h3>
            <button class=\"close-modal\">&times;</button>
        </div>

        <div class=\"modal-content\">
            <h4>Theme</h4>

            <input class=\"config-option\" type=\"radio\" name=\"theme\" value=\"auto\" id=\"settings-theme-auto\">
            <label for=\"settings-theme-auto\">Auto</label>
            <p class=\"form-help\"><strong>Default theme</strong>. It switches between Light and Dark automatically to match the operating system theme.</p>

            <input class=\"config-option\" type=\"radio\" name=\"theme\" value=\"light\" id=\"settings-theme-light\">
            <label for=\"settings-theme-light\">Light</label>
            <p class=\"form-help\">Provides greatest readability, but requires a well-lit environment.</p>

            <input class=\"config-option\" type=\"radio\" name=\"theme\" value=\"dark\" id=\"settings-theme-dark\">
            <label for=\"settings-theme-dark\">Dark</label>
            <p class=\"form-help\">Reduces eye fatigue. Ideal for low light environments.</p>

            <h4>Page Width</h4>

            <input class=\"config-option\" type=\"radio\" name=\"width\" value=\"normal\" id=\"settings-width-normal\">
            <label for=\"settings-width-normal\">Normal</label>
            <p class=\"form-help\">Fixed page width. Improves readability.</p>

            <input class=\"config-option\" type=\"radio\" name=\"width\" value=\"full\" id=\"settings-width-full\">
            <label for=\"settings-width-full\">Full-page</label>
            <p class=\"form-help\">Dynamic page width. As wide as the browser window.</p>
        </div>
    </div>
</div>

<script>
(function() {
    const configOptions = document.querySelectorAll(\x27.config-option\x27);
    const allSettingValues = [\x27theme-auto\x27, \x27theme-ligh\x27, \x27theme-dark\x27, \x27width-normal\x27, \x27width-full\x27];
    [...configOptions].forEach(option => {
        option.addEventListener(\x27change\x27, function (event) {
            const optionName = option.name;
            const optionValue = option.value;
            const settingName = \x27symfony/profiler/\x27 + optionName;
            const settingValue = optionName + \x27-\x27 + optionValue;

            localStorage.setItem(settingName, settingValue);

            document.body.classList.forEach((cssClass) => {
                if (cssClass.startsWith(optionName)) {
                    document.body.classList.remove(cssClass);
                }
            });

            if (\x27theme-auto\x27 === settingValue) {
                document.body.classList.add((matchMedia(\x27(prefers-color-scheme: dark)\x27).matches ? \x27theme-dark\x27 : \x27theme-light\x27));
            } else {
                document.body.classList.add(settingValue);
            }
        });
    });

    const openModalButton = document.getElementById(\x27open-settings\x27);
    const modalWindow = document.getElementById(\x27profiler-settings\x27);
    const closeModalButton = document.getElementsByClassName(\x27close-modal\x27)[0];
    const modalWrapper = document.getElementsByClassName(\x27modal-wrap\x27)[0]

    openModalButton.addEventListener(\x27click\x27, function(event) {
        document.getElementById(\x27settings-\x27 + (localStorage.getItem(\x27symfony/profiler/theme\x27) || \x27theme-auto\x27)).checked = \x27checked\x27;
        document.getElementById(\x27settings-\x27 + (localStorage.getItem(\x27symfony/profiler/width\x27) || \x27width-normal\x27)).checked = \x27checked\x27;

        modalWindow.classList.toggle(\x27visible\x27);
        event.preventDefault();
    });

    closeModalButton.addEventListener(\x27click\x27, function() {
        modalWindow.classList.remove(\x27visible\x27);
    });
    modalWrapper.addEventListener(\x27click\x27, function(event) {
        if (event.target == event.currentTarget) {
            modalWindow.classList.remove(\x27visible\x27);
        }
    });
})();
</script>
", "@WebProfiler/Profiler/settings.html.twig", "D:\\Github\\Groupe6\\symfony\\projetTest\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Profiler\\settings.html.twig");
    }
}
