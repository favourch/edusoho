<?php

/* TopxiaAdminBundle:Default:operation-analysis-dashbord.html.twig */
class __TwigTemplate_7372334001abb7471a48ec83137a87bc6a4c3a15d7849f3dd84e0132c6fccec3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<table class=\"table table-condensed table-bordered table-striped table-hover\">
        <thead>
          <tr>
            <th width=\"35%\"></th>
            <th width=\"20%\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("今日"), "html", null, true);
        echo "</th>
            <th width=\"20%\" >";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("昨日"), "html", null, true);
        echo "</th>
\t\t";
        // line 8
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 9
            echo "            <th width=\"40%\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("历史"), "html", null, true);
            echo "</th>
\t\t";
        }
        // line 11
        echo "          </tr>
        </thead>
        <tbody>
\t\t\t<tr>
\t\t\t\t<td>";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("新注册用户数"), "html", null, true);
        echo "</td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["todayRegisterNum"]) ? $context["todayRegisterNum"] : null), "html", null, true);
        echo "</span></td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["yesterdayRegisterNum"]) ? $context["yesterdayRegisterNum"] : null), "html", null, true);
        echo "</span></td>
\t\t\t";
        // line 18
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 19
            echo "\t\t\t\t<td><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_register", array("tab" => "trend", "analysisDateType" => "register")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("趋势"), "html", null, true);
            echo "</a> <span class=\"text-muted\">|</span> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_register", array("tab" => "detail", "analysisDateType" => "register")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("详情"), "html", null, true);
            echo "</a></td>
\t\t\t\t";
        }
        // line 21
        echo "\t\t\t</tr>

\t\t\t<tr>
\t\t\t\t<td>";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("用户登录数"), "html", null, true);
        echo "<small>（";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("不含重复登录"), "html", null, true);
        echo "）</small></td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["todayLoginNum"]) ? $context["todayLoginNum"] : null), "html", null, true);
        echo "</span></td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["yesterdayLoginNum"]) ? $context["yesterdayLoginNum"] : null), "html", null, true);
        echo "</span></td>
\t\t\t";
        // line 27
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 28
            echo "\t\t\t\t<td><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_login", array("tab" => "trend", "analysisDateType" => "login")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("趋势"), "html", null, true);
            echo "</a> <span class=\"text-muted\">|</span> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_login", array("tab" => "detail", "analysisDateType" => "login")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("详情"), "html", null, true);
            echo "</a></td>
\t\t\t";
        }
        // line 29
        echo "\t
\t\t\t</tr>

\t\t\t<tr>
\t\t\t\t<td>";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("新增课程数"), "html", null, true);
        echo "</td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["todayCourseNum"]) ? $context["todayCourseNum"] : null), "html", null, true);
        echo "</span></td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["yesterdayCourseNum"]) ? $context["yesterdayCourseNum"] : null), "html", null, true);
        echo "</span></td>
\t\t\t";
        // line 36
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 37
            echo "\t\t\t\t<td><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_course", array("tab" => "trend", "analysisDateType" => "course")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("趋势"), "html", null, true);
            echo "</a> <span class=\"text-muted\">|</span> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_course", array("tab" => "detail", "analysisDateType" => "course")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("详情"), "html", null, true);
            echo "</a></td>
\t\t\t";
        }
        // line 38
        echo "\t
\t\t\t</tr>

\t\t\t<tr>
\t\t\t\t<td>";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("新增课时数"), "html", null, true);
        echo "</td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["todayLessonNum"]) ? $context["todayLessonNum"] : null), "html", null, true);
        echo "</span></td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["yesterdayLessonNum"]) ? $context["yesterdayLessonNum"] : null), "html", null, true);
        echo "</span></td>
\t\t\t";
        // line 45
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 46
            echo "\t\t\t\t<td><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_lesson", array("tab" => "trend", "analysisDateType" => "lesson")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("趋势"), "html", null, true);
            echo "</a> <span class=\"text-muted\">|</span> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_lesson", array("tab" => "detail", "analysisDateType" => "lesson")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("详情"), "html", null, true);
            echo "</a></td>
\t\t\t";
        }
        // line 47
        echo "\t
\t\t\t</tr>

\t\t\t<tr>
\t\t\t\t<td>";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("加入学习数"), "html", null, true);
        echo "</td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["todayJoinLessonNum"]) ? $context["todayJoinLessonNum"] : null), "html", null, true);
        echo "</span></td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["yesterdayJoinLessonNum"]) ? $context["yesterdayJoinLessonNum"] : null), "html", null, true);
        echo "</span></td>
\t\t\t";
        // line 54
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 55
            echo "\t\t\t\t<td><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_lesson_join", array("tab" => "trend", "analysisDateType" => "joinLesson")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("趋势"), "html", null, true);
            echo "</a> <span class=\"text-muted\">|</span> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_lesson_join", array("tab" => "detail", "analysisDateType" => "joinLesson")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("详情"), "html", null, true);
            echo "</a></td>
\t\t\t";
        }
        // line 56
        echo "\t
\t\t\t</tr>

\t\t\t<tr>
\t\t\t\t<td>";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("购买课程数"), "html", null, true);
        echo "</td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 61
        echo twig_escape_filter($this->env, (isset($context["todayBuyLessonNum"]) ? $context["todayBuyLessonNum"] : null), "html", null, true);
        echo "</span></td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["yesterdayBuyLessonNum"]) ? $context["yesterdayBuyLessonNum"] : null), "html", null, true);
        echo "</span></td>
\t\t\t";
        // line 63
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 64
            echo "\t\t\t\t<td><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_lesson_paid", array("tab" => "trend", "analysisDateType" => "paidLesson")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("趋势"), "html", null, true);
            echo "</a> <span class=\"text-muted\">|</span> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_lesson_paid", array("tab" => "detail", "analysisDateType" => "paidLesson")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("详情"), "html", null, true);
            echo "</a></td>
\t\t\t";
        }
        // line 65
        echo "\t
\t\t\t</tr>

\t\t\t<tr>
\t\t\t\t<td>";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("购买班级数"), "html", null, true);
        echo "</td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 70
        echo twig_escape_filter($this->env, (isset($context["todayBuyClassroomNum"]) ? $context["todayBuyClassroomNum"] : null), "html", null, true);
        echo "</span></td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 71
        echo twig_escape_filter($this->env, (isset($context["yesterdayBuyClassroomNum"]) ? $context["yesterdayBuyClassroomNum"] : null), "html", null, true);
        echo "</span></td>
\t\t\t";
        // line 72
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 73
            echo "\t\t\t\t<td><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_classroom_paid", array("tab" => "trend", "analysisDateType" => "paidClassroom")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("趋势"), "html", null, true);
            echo "</a> <span class=\"text-muted\">|</span> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_classroom_paid", array("tab" => "detail", "analysisDateType" => "paidClassroom")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("详情"), "html", null, true);
            echo "</a></td>
\t\t\t";
        }
        // line 74
        echo "\t
\t\t\t</tr>

\t\t\t<tr>
\t\t\t\t<td>";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("完成课时学习数"), "html", null, true);
        echo "</td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 79
        echo twig_escape_filter($this->env, (isset($context["todayFinishedLessonNum"]) ? $context["todayFinishedLessonNum"] : null), "html", null, true);
        echo "</span></td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 80
        echo twig_escape_filter($this->env, (isset($context["yesterdayFinishedLessonNum"]) ? $context["yesterdayFinishedLessonNum"] : null), "html", null, true);
        echo "</span></td>
\t\t\t";
        // line 81
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 82
            echo "\t\t\t\t<td><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_lesson_finished", array("tab" => "trend", "analysisDateType" => "finishedLesson")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("趋势"), "html", null, true);
            echo "</a> <span class=\"text-muted\">|</span> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_lesson_finished", array("tab" => "detail", "analysisDateType" => "finishedLesson")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("详情"), "html", null, true);
            echo "</a></td>
\t\t";
        }
        // line 83
        echo "\t
\t\t\t</tr>

\t\t\t<tr>
\t\t\t\t<td>";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("视频观看数"), "html", null, true);
        echo "<small>（";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("含重复打开"), "html", null, true);
        echo "）</small></td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 88
        echo twig_escape_filter($this->env, (isset($context["todayAllVideoViewedNum"]) ? $context["todayAllVideoViewedNum"] : null), "html", null, true);
        echo "</span></td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 89
        echo twig_escape_filter($this->env, (isset($context["yesterdayAllVideoViewedNum"]) ? $context["yesterdayAllVideoViewedNum"] : null), "html", null, true);
        echo "</span></td>
\t\t";
        // line 90
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 91
            echo "\t\t\t\t<td><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_video_viewed", array("tab" => "trend", "analysisDateType" => "videoViewed")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("趋势"), "html", null, true);
            echo "</a> <span class=\"text-muted\">|</span> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_video_viewed", array("tab" => "detail", "analysisDateType" => "videoViewed")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("详情"), "html", null, true);
            echo "</a></td>
\t\t";
        }
        // line 92
        echo "\t
\t\t\t</tr>

\t\t\t<tr>
\t\t\t\t<td>└─ ";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("云视频观看数"), "html", null, true);
        echo "</td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 97
        echo twig_escape_filter($this->env, (isset($context["todayCloudVideoViewedNum"]) ? $context["todayCloudVideoViewedNum"] : null), "html", null, true);
        echo "</span></td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 98
        echo twig_escape_filter($this->env, (isset($context["yesterdayCloudVideoViewedNum"]) ? $context["yesterdayCloudVideoViewedNum"] : null), "html", null, true);
        echo "</span></td>
\t\t";
        // line 99
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 100
            echo "\t\t\t\t<td>
\t\t\t\t";
            // line 101
            if (((($this->getAttribute((isset($context["keyCheckResult"]) ? $context["keyCheckResult"] : null), "error", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["keyCheckResult"]) ? $context["keyCheckResult"] : null), "error", array()), null)) : (null)) == "error")) {
                // line 102
                echo "\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("未开通或未开启云视频!"), "html", null, true);
                echo "
\t\t\t\t\t";
            } else {
                // line 104
                echo "\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_video_cloud_viewed", array("tab" => "trend", "analysisDateType" => "cloudVideoViewed")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("趋势"), "html", null, true);
                echo "</a> <span class=\"text-muted\">|</span> <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_video_cloud_viewed", array("tab" => "detail", "analysisDateType" => "cloudVideoViewed")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("详情"), "html", null, true);
                echo "</a>
\t\t\t\t";
            }
            // line 106
            echo "\t\t\t\t</td>
\t\t";
        }
        // line 107
        echo "\t
\t\t\t</tr>

\t\t\t<tr>
\t\t\t\t<td>└─ ";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("本地视频观看数"), "html", null, true);
        echo "</td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 112
        echo twig_escape_filter($this->env, (isset($context["todayLocalVideoViewedNum"]) ? $context["todayLocalVideoViewedNum"] : null), "html", null, true);
        echo "</span></td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 113
        echo twig_escape_filter($this->env, (isset($context["yesterdayLocalVideoViewedNum"]) ? $context["yesterdayLocalVideoViewedNum"] : null), "html", null, true);
        echo "</span></td>
\t\t";
        // line 114
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 115
            echo "\t\t\t\t<td><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_video_local_viewed", array("tab" => "trend", "analysisDateType" => "localVideoViewed")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("趋势"), "html", null, true);
            echo "</a> <span class=\"text-muted\">|</span> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_video_local_viewed", array("tab" => "detail", "analysisDateType" => "localVideoViewed")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("详情"), "html", null, true);
            echo "</a></td>
\t\t";
        }
        // line 116
        echo "\t
\t\t\t</tr>

\t\t\t<tr>
\t\t\t\t<td>└─ ";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("网络视频观看数"), "html", null, true);
        echo "</td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 121
        echo twig_escape_filter($this->env, (isset($context["todayNetVideoViewedNum"]) ? $context["todayNetVideoViewedNum"] : null), "html", null, true);
        echo "</span></td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 122
        echo twig_escape_filter($this->env, (isset($context["yesterdayNetVideoViewedNum"]) ? $context["yesterdayNetVideoViewedNum"] : null), "html", null, true);
        echo "</span></td>
\t\t\t";
        // line 123
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 124
            echo "\t\t\t\t<td><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_video_net_viewed", array("tab" => "trend", "analysisDateType" => "netVideoViewed")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("趋势"), "html", null, true);
            echo "</a> <span class=\"text-muted\">|</span> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_video_net_viewed", array("tab" => "detail", "analysisDateType" => "netVideoViewed")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("详情"), "html", null, true);
            echo "</a></td>
\t\t\t";
        }
        // line 125
        echo "\t
\t\t\t</tr>
\t\t\t";
        // line 127
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 128
            echo "\t\t\t<tr>
\t\t\t\t<td>";
            // line 129
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("营收额"), "html", null, true);
            echo "</td>
\t\t\t\t<td><span class=\"pull-right\">";
            // line 130
            echo twig_escape_filter($this->env, (isset($context["todayIncome"]) ? $context["todayIncome"] : null), "html", null, true);
            echo "</span></td>
\t\t\t\t<td><span class=\"pull-right\">";
            // line 131
            echo twig_escape_filter($this->env, (isset($context["yesterdayIncome"]) ? $context["yesterdayIncome"] : null), "html", null, true);
            echo "</span></td>
\t\t\t\t<td><a href=\"";
            // line 132
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_income", array("tab" => "trend", "analysisDateType" => "income")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("趋势"), "html", null, true);
            echo "</a> <span class=\"text-muted\">|</span> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_income", array("tab" => "detail", "analysisDateType" => "income")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("详情"), "html", null, true);
            echo "</a></td>
\t\t\t</tr>

\t\t\t<tr>
\t\t\t\t<td>└─ ";
            // line 136
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课程营收额"), "html", null, true);
            echo "</td>
\t\t\t\t<td><span class=\"pull-right\">";
            // line 137
            echo twig_escape_filter($this->env, (isset($context["todayCourseIncome"]) ? $context["todayCourseIncome"] : null), "html", null, true);
            echo "</span></td>
\t\t\t\t<td><span class=\"pull-right\">";
            // line 138
            echo twig_escape_filter($this->env, (isset($context["yesterdayCourseIncome"]) ? $context["yesterdayCourseIncome"] : null), "html", null, true);
            echo "</span></td>
\t\t\t\t<td><a href=\"";
            // line 139
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_course_income", array("tab" => "trend", "analysisDateType" => "courseIncome")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("趋势"), "html", null, true);
            echo "</a> <span class=\"text-muted\">|</span> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_course_income", array("tab" => "detail", "analysisDateType" => "courseIncome")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("详情"), "html", null, true);
            echo "</a></td>
\t\t\t</tr>

\t\t\t<tr>
\t\t\t\t<td>└─ ";
            // line 143
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("班级营收额"), "html", null, true);
            echo "</td>
\t\t\t\t<td><span class=\"pull-right\">";
            // line 144
            echo twig_escape_filter($this->env, (isset($context["todayClassroomIncome"]) ? $context["todayClassroomIncome"] : null), "html", null, true);
            echo "</span></td>
\t\t\t\t<td><span class=\"pull-right\">";
            // line 145
            echo twig_escape_filter($this->env, (isset($context["yesterdayClassroomIncome"]) ? $context["yesterdayClassroomIncome"] : null), "html", null, true);
            echo "</span></td>
\t\t\t\t<td><a href=\"";
            // line 146
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_classroom_income", array("tab" => "trend", "analysisDateType" => "classroomIncome")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("趋势"), "html", null, true);
            echo "</a> <span class=\"text-muted\">|</span> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_classroom_income", array("tab" => "detail", "analysisDateType" => "classroomIncome")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("详情"), "html", null, true);
            echo "</a></td>
\t\t\t</tr>

\t\t\t<tr>
\t\t\t\t<td>└─ ";
            // line 150
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("会员营收额"), "html", null, true);
            echo "</td>
\t\t\t\t<td><span class=\"pull-right\">";
            // line 151
            echo twig_escape_filter($this->env, (isset($context["todayVipIncome"]) ? $context["todayVipIncome"] : null), "html", null, true);
            echo "</span></td>
\t\t\t\t<td><span class=\"pull-right\">";
            // line 152
            echo twig_escape_filter($this->env, (isset($context["yesterdayVipIncome"]) ? $context["yesterdayVipIncome"] : null), "html", null, true);
            echo "</span></td>
\t\t\t\t<td><a href=\"";
            // line 153
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_vip_income", array("tab" => "trend", "analysisDateType" => "vipIncome")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("趋势"), "html", null, true);
            echo "</a> <span class=\"text-muted\">|</span> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_vip_income", array("tab" => "detail", "analysisDateType" => "vipIncome")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("详情"), "html", null, true);
            echo "</a></td>
\t\t\t</tr>
\t\t\t";
        }
        // line 156
        echo "\t\t\t<tr>
\t\t\t\t<td>";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课程总数"), "html", null, true);
        echo "</td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 158
        echo twig_escape_filter($this->env, (isset($context["todayCourseSum"]) ? $context["todayCourseSum"] : null), "html", null, true);
        echo "</span></td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 159
        echo twig_escape_filter($this->env, (isset($context["yesterdayCourseSum"]) ? $context["yesterdayCourseSum"] : null), "html", null, true);
        echo "</span></td>
\t\t\t";
        // line 160
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 161
            echo "\t\t\t\t<td><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_course_sum", array("tab" => "trend", "analysisDateType" => "courseSum")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("趋势"), "html", null, true);
            echo "</a> <span class=\"text-muted\">|</span> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_course_sum", array("tab" => "detail", "analysisDateType" => "courseSum")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("详情"), "html", null, true);
            echo "</a></td>
\t\t\t\t";
        }
        // line 163
        echo "\t\t\t</tr>

\t\t\t<tr>
\t\t\t\t<td>";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("用户总数"), "html", null, true);
        echo "</td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 167
        echo twig_escape_filter($this->env, (isset($context["todayUserSum"]) ? $context["todayUserSum"] : null), "html", null, true);
        echo "</span></td>
\t\t\t\t<td><span class=\"pull-right\">";
        // line 168
        echo twig_escape_filter($this->env, (isset($context["yesterdayUserSum"]) ? $context["yesterdayUserSum"] : null), "html", null, true);
        echo "</span></td>
\t\t\t";
        // line 169
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 170
            echo "\t\t\t\t<td><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_user_sum", array("tab" => "trend", "analysisDateType" => "userSum")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("趋势"), "html", null, true);
            echo "</a> <span class=\"text-muted\">|</span> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_operation_analysis_user_sum", array("tab" => "detail", "analysisDateType" => "userSum")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("详情"), "html", null, true);
            echo "</a></td>
\t\t\t\t";
        }
        // line 172
        echo "\t\t\t</tr>
";
        // line 179
        echo "

        </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Default:operation-analysis-dashbord.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  615 => 179,  612 => 172,  600 => 170,  598 => 169,  594 => 168,  590 => 167,  586 => 166,  581 => 163,  569 => 161,  567 => 160,  563 => 159,  559 => 158,  555 => 157,  552 => 156,  540 => 153,  536 => 152,  532 => 151,  528 => 150,  515 => 146,  511 => 145,  507 => 144,  503 => 143,  490 => 139,  486 => 138,  482 => 137,  478 => 136,  465 => 132,  461 => 131,  457 => 130,  453 => 129,  450 => 128,  448 => 127,  444 => 125,  432 => 124,  430 => 123,  426 => 122,  422 => 121,  418 => 120,  412 => 116,  400 => 115,  398 => 114,  394 => 113,  390 => 112,  386 => 111,  380 => 107,  376 => 106,  364 => 104,  358 => 102,  356 => 101,  353 => 100,  351 => 99,  347 => 98,  343 => 97,  339 => 96,  333 => 92,  321 => 91,  319 => 90,  315 => 89,  311 => 88,  305 => 87,  299 => 83,  287 => 82,  285 => 81,  281 => 80,  277 => 79,  273 => 78,  267 => 74,  255 => 73,  253 => 72,  249 => 71,  245 => 70,  241 => 69,  235 => 65,  223 => 64,  221 => 63,  217 => 62,  213 => 61,  209 => 60,  203 => 56,  191 => 55,  189 => 54,  185 => 53,  181 => 52,  177 => 51,  171 => 47,  159 => 46,  157 => 45,  153 => 44,  149 => 43,  145 => 42,  139 => 38,  127 => 37,  125 => 36,  121 => 35,  117 => 34,  113 => 33,  107 => 29,  95 => 28,  93 => 27,  89 => 26,  85 => 25,  79 => 24,  74 => 21,  62 => 19,  60 => 18,  56 => 17,  52 => 16,  48 => 15,  42 => 11,  36 => 9,  34 => 8,  30 => 7,  26 => 6,  19 => 1,);
    }
}
