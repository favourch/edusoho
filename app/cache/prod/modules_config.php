<?php 
return array (
  'event_subscriber' => 
  array (
    0 => 'Classroom\\Service\\Classroom\\Event\\ClassroomEventSubscriber',
    1 => 'Topxia\\Service\\RefererLog\\Event\\OrderRefererLogEventSubscriber',
    2 => 'Topxia\\Service\\Testpaper\\Event\\TestpaperEventSubscriber',
    3 => 'Topxia\\Service\\PostFilter\\Event\\TokenBucketEventSubscriber',
    4 => 'Topxia\\Service\\File\\Event\\UploadFileEventSubscriber',
    5 => 'Topxia\\Service\\Question\\Event\\QuestionEventSubscriber',
    6 => 'Topxia\\Service\\OpenCourse\\Event\\OpenCourseEventSubscriber',
    7 => 'Topxia\\Service\\Article\\Event\\ArticleEventSubscriber',
    8 => 'Topxia\\Service\\Card\\Event\\EventSubscriber',
    9 => 'Topxia\\Service\\IM\\Event\\ConversationEventSubscriber',
    10 => 'Topxia\\Service\\Sms\\Event\\SmsEventSubscriber',
    11 => 'Topxia\\Service\\Course\\Event\\CourseEventSubscriber',
    12 => 'Topxia\\Service\\Course\\Event\\CourseLessonEventSubscriber',
    13 => 'Topxia\\Service\\Course\\Event\\CourseMaterialEventSubscriber',
    14 => 'Topxia\\Service\\Course\\Event\\CourseMemberEventSubscriber',
    15 => 'Topxia\\Service\\Notification\\PushMessageEventSubscriber',
    16 => 'Topxia\\Service\\User\\Event\\UserEventSubscriber',
    17 => 'Topxia\\Service\\User\\Event\\MessageEventSubscriber',
    18 => 'Topxia\\Service\\User\\Event\\OrderEventSubscriber',
    19 => 'Topxia\\Service\\User\\Event\\StatusEventSubscriber',
    20 => 'Topxia\\Service\\Taxonomy\\Event\\TagEventSubscriber',
    21 => 'Topxia\\Service\\Thread\\Event\\ThreadEventSubscriber',
    22 => 'Topxia\\Service\\Task\\Event\\TaskEventSubscriber',
  ),
  'thread.event_processor' => 
  array (
    'classroom' => 'Classroom\\Service\\Classroom\\Event\\ClassroomThreadEventProcessor',
    'openCourse' => 'Topxia\\Service\\OpenCourse\\Event\\OpenCourseThreadEventProcessor',
    'article' => 'Topxia\\Service\\Article\\Event\\ArticleEventSubscriber',
  ),
);