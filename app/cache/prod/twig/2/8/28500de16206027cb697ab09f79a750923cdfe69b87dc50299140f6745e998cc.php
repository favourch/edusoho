<?php

/* TopxiaWebBundle:Teacher:index.html.twig */
class __TwigTemplate_28500de16206027cb697ab09f79a750923cdfe69b87dc50299140f6745e998cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:Teacher:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'keywords' => array($this, 'block_keywords'),
            'description' => array($this, 'block_description'),
            'top_content' => array($this, 'block_top_content'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:Teacher:index.html.twig", 3);
        // line 9
        $context["bodyClass"] = "teacherpage bg-blank";
        // line 10
        $this->env->getExtension('topxia_web_twig')->loadScript("teacher/explore");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("师资介绍"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 6
    public function block_keywords($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("师资介绍%name%", array("%name%" => $this->env->getExtension('topxia_web_twig')->getSetting("site.name"))), "html", null, true);
        echo " ";
    }

    // line 7
    public function block_description($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("%name%的师资介绍。", array("%name%" => $this->env->getExtension('topxia_web_twig')->getSetting("site.name"))), "html", null, true);
    }

    // line 12
    public function block_top_content($context, array $blocks = array())
    {
        // line 13
        echo "  <div class=\"es-banner\">
    <div class=\"container\">
      <div class=\"title\">
        <i class=\"es-icon es-icon-permcontactcal\"></i>";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("所有教师"), "html", null, true);
        echo "
      </div>
    </div>
  </div>
";
    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
        // line 23
        echo "  <div class=\"teacher-list row\">
    ";
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["teachers"]) ? $context["teachers"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["teacher"]) {
            // line 25
            echo "    ";
            $context["profile"] = $this->getAttribute((isset($context["profiles"]) ? $context["profiles"] : null), $this->getAttribute($context["teacher"], "id", array()), array(), "array");
            // line 26
            echo "    ";
            $context["isFollowed"] = _twig_default_filter(twig_in_filter($this->getAttribute($context["teacher"], "id", array()), (isset($context["Myfollowings"]) ? $context["Myfollowings"] : null)), false);
            // line 27
            echo "      <div class=\"col-lg-3 col-md-4 col-xs-6\">
        ";
            // line 28
            $this->loadTemplate("TopxiaWebBundle:Teacher:teacher-item.html.twig", "TopxiaWebBundle:Teacher:index.html.twig", 28)->display($context);
            // line 29
            echo "      </div>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['teacher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "  </div>
  <nav class=\"text-center\">
    ";
        // line 33
        echo $context["web_macro"]->getpaginator((isset($context["paginator"]) ? $context["paginator"] : null));
        echo "
  </nav>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Teacher:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 33,  126 => 31,  111 => 29,  109 => 28,  106 => 27,  103 => 26,  100 => 25,  83 => 24,  80 => 23,  77 => 22,  68 => 16,  63 => 13,  60 => 12,  54 => 7,  47 => 6,  39 => 4,  35 => 1,  33 => 10,  31 => 9,  29 => 3,  11 => 1,);
    }
}
