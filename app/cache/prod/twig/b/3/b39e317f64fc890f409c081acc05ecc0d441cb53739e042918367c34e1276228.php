<?php

/* TopxiaWebBundle:MyTeaching:threads.html.twig */
class __TwigTemplate_b39e317f64fc890f409c081acc05ecc0d441cb53739e042918367c34e1276228 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:My:layout.html.twig", "TopxiaWebBundle:MyTeaching:threads.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:My:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 20
        if (((isset($context["type"]) ? $context["type"] : null) == "question")) {
            // line 21
            $context["side_nav"] = "my-teaching-questions";
        } elseif ((        // line 22
(isset($context["type"]) ? $context["type"] : null) == "discussion")) {
            // line 23
            $context["side_nav"] = "my-teaching-discussions";
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "
";
        // line 5
        if (((isset($context["type"]) ? $context["type"] : null) == "question")) {
            // line 6
            echo "\t";
            if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), $this->env->getExtension('translator')->trans("学员")), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("学员"), "html", null, true);
            }
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("问答"), "html", null, true);
            echo "
";
            // line 7
            $context["side_nav"] = "my-teaching-questions";
            // line 8
            echo "
";
        } elseif ((        // line 9
(isset($context["type"]) ? $context["type"] : null) == "discussion")) {
            // line 10
            echo "\t";
            if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), $this->env->getExtension('translator')->trans("学员")), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("学员"), "html", null, true);
            }
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("话题"), "html", null, true);
            echo "
";
            // line 11
            $context["side_nav"] = "my-teaching-discussions";
            // line 12
            echo "
";
        }
        // line 14
        echo "
- ";
        // line 15
        $this->displayParentBlock("title", $context, $blocks);
        echo "

";
    }

    // line 26
    public function block_main($context, array $blocks = array())
    {
        // line 27
        echo "
<div class=\"panel panel-default panel-col\">
  \t<div class=\"panel-heading\">
\t\t";
        // line 30
        if (((isset($context["type"]) ? $context["type"] : null) == "question")) {
            // line 31
            echo "\t\t\t";
            if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), $this->env->getExtension('translator')->trans("学员")), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("学员"), "html", null, true);
            }
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("问答"), "html", null, true);
            echo "
\t\t";
        } elseif ((        // line 32
(isset($context["type"]) ? $context["type"] : null) == "discussion")) {
            // line 33
            echo "\t\t\t";
            if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), $this->env->getExtension('translator')->trans("学员")), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("学员"), "html", null, true);
            }
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("话题"), "html", null, true);
            echo "
\t\t";
        }
        // line 35
        echo "\t</div>

  <div class=\"panel-body\">

    ";
        // line 39
        if (((isset($context["type"]) ? $context["type"] : null) == "discussion")) {
            // line 40
            echo "\t    ";
            $this->loadTemplate("TopxiaWebBundle:MyTeaching:tab.html.twig", "TopxiaWebBundle:MyTeaching:threads.html.twig", 40)->display($context);
            // line 41
            echo "    ";
        }
        // line 42
        echo "
    ";
        // line 43
        if ((isset($context["threads"]) ? $context["threads"] : null)) {
            // line 44
            echo "
\t    ";
            // line 45
            $this->loadTemplate("TopxiaWebBundle:MyThread:thread-list.html.twig", "TopxiaWebBundle:MyTeaching:threads.html.twig", 45)->display(array_merge($context, array("type" => (isset($context["type"]) ? $context["type"] : null))));
            // line 46
            echo "\t  ";
        } else {
            // line 47
            echo "
\t  \t";
            // line 48
            if (((isset($context["type"]) ? $context["type"] : null) == "question")) {
                // line 49
                echo "\t  \t\t<div class=\"empty\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("您的课程中还没有"), "html", null, true);
                if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
                    echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), $this->env->getExtension('translator')->trans("学员")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("学员"), "html", null, true);
                }
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("提问过..."), "html", null, true);
                echo "</div>
\t\t";
            } elseif ((            // line 50
(isset($context["type"]) ? $context["type"] : null) == "discussion")) {
                // line 51
                echo "\t\t\t<div class=\"empty\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("您的课程中还没有"), "html", null, true);
                if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
                    echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), $this->env->getExtension('translator')->trans("学员")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("学员"), "html", null, true);
                }
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("话题..."), "html", null, true);
                echo "</div>
\t\t";
            }
            // line 53
            echo "
\t  ";
        }
        // line 55
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:MyTeaching:threads.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 55,  180 => 53,  168 => 51,  166 => 50,  155 => 49,  153 => 48,  150 => 47,  147 => 46,  145 => 45,  142 => 44,  140 => 43,  137 => 42,  134 => 41,  131 => 40,  129 => 39,  123 => 35,  112 => 33,  110 => 32,  100 => 31,  98 => 30,  93 => 27,  90 => 26,  83 => 15,  80 => 14,  76 => 12,  74 => 11,  64 => 10,  62 => 9,  59 => 8,  57 => 7,  47 => 6,  45 => 5,  42 => 4,  39 => 3,  35 => 1,  32 => 23,  30 => 22,  28 => 21,  26 => 20,  11 => 1,);
    }
}
