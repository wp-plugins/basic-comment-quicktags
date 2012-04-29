(function ($) {
  $(document).ready(function($) {
    new QTags({
      id: "comment",
      buttons: "link,em,strong"
    });
    new QTags({
      id: "bbp_reply_content",
      buttons: "link,em,strong"
    });
    new QTags({
      id: "bbp_topic_content",
      buttons: "link,em,strong"
    });
    QTags.addButton('quote','quote','<blockquote>','</blockquote>','quote');
  });
})(jQuery);