  var isIOS = ((/iphone|ipad/gi).test(navigator.appVersion));
  var myevent = isIOS ? "touchstart" : "click";
  var menter = isIOS ? "touchstart" : "mouseenter";
  var mleave = isIOS ? "touchend" : "mouseleave";
  $(document).ready(function () {
      // Add scrolling to the body
      if ($('body').attr('data-smooth-scrolling') == 1) {
          $("html").niceScroll({
              scrollspeed: 60,
              mousescrollstep: 35,
              cursorwidth: 10,
              cursorborder: 0,
              cursorcolor: '#0086da',
              cursorborderradius: 0,
              autohidemode: false,
              background: '#292A2F'
          });
      }

      // Table sorter
      $(".myTable").tablesorter();
      $("tr:not(.table-head):odd").addClass("odd");

      // Notification/inbox dropdown menu
      $(".dropdown:has(ul)").hover(function () {
          $(this).find("ul").stop("true", "true").slideDown(500);
      }, function () {
          $(this).find("ul").stop("true", "true").slideUp(500);
      });

      // Hide alert
      $('body').on('click', '.close', function () {
          var dvData = $(this).parent().parent();
          setTimeout(function () {
                  $(dvData).fadeOut("slow",
                      function () {
                          $(dvData).remove();
                      });
              },
              100);
      });


      // Clear input fields on focus
      $('input').each(function () {
          var default_value = this.value;
          $(this).focus(function () {
              if (this.value == default_value) {
                  this.value = '';
              }
          });
          $(this).blur(function () {
              if (this.value == '') {
                  this.value = default_value;
              }
          });
      });

      $('.post').wysiwyg({
          controls: {
              html: {visible: true},
              h1: {visible: false},
              h2: {visible: false},
              h3: {visible: false},
              code: {visible: false },
              createLink: {visible: false},
              unLink: {visible: true},
              insertImage: {visible: false},
              insertTable: {visible: false},
              insertHorizontalRule: {visible: false},
              subscript: {visible: true},
              superscript: {visible: true},
              insertOrderedList: {visible: false},
              insertUnorderedList: {visible: false},
              indent: {visible: true},
              outdent: {visible: true},
              undo: {visible: true},
              redo: {visible: true},
              justifyRight: {visible: true},
              justifyLeft: {visible: true},
              justifyFull: {visible: true},
              justifyCenter: {visible: true}
          },
		  css : { fontFamily: 'Arial, Tahoma', fontSize : '13px', color : '#9fa8b0'},
          initialContent: ""
      });
	  $('.post').wysiwyg('focus');

      $('a.langchange').click(function () {
          var target = $(this).attr('href');
          $.cookie("LANG_FM_", $(this).attr('data-lang'), {
              expires: 120,
              path: '/'
          });
          $('body').fadeOut(1000, function () {
              window.location.href = target;
          });
          return false
      });

      /* == Tooltip == */
      var targets = $('body'),
          target = false,
          tooltip = false,
          title = false;
      targets.on(menter, ".tooltip", function () {
          target = $(this);
          tip = target.attr('data-title');
          tooltip = $('<div id="tooltip"></div>');
          if (!tip || tip == '') return false;
          target.removeAttr('data-title');
          tooltip.css('opacity', 0)
              .html(tip)
              .appendTo('html');
          var init_tooltip = function (e) {
              if ($(window).width() < tooltip.outerWidth() * 1.5) tooltip.css('max-width', $(window).width() / 2);
              else tooltip.css('max-width', 340);
              var pos_left = target.offset().left + (target.outerWidth() / 2) - (tooltip.outerWidth() / 2),
                  pos_top = target.offset().top - tooltip.outerHeight() - 20;
              if (pos_left < 0) {
                  pos_left = target.offset().left + target.outerWidth() / 2 - 20;
                  tooltip.addClass('left');
              } else tooltip.removeClass('left');
              if (pos_left + tooltip.outerWidth() > $(window).width()) {
                  pos_left = target.offset().left - tooltip.outerWidth() + target.outerWidth() / 2 + 20;
                  tooltip.addClass('right');
              } else tooltip.removeClass('right');
              if (pos_top < 0) {
                  var pos_top = target.offset().top + target.outerHeight();
                  tooltip.addClass('top');
              } else tooltip.removeClass('top');
              tooltip.css({
                  left: pos_left,
                  top: pos_top
              })
                  .animate({
                      top: '+=10',
                      opacity: 1
                  }, 50);
          };
          init_tooltip();

          $(window).resize(init_tooltip);
          var remove_tooltip = function () {
              tooltip.animate({
                  top: '-=10',
                  opacity: 0
              }, 50, function () {
                  $(this).remove();
              });
              target.attr('data-title', tip);
          };
          target.on(mleave, remove_tooltip);
          tooltip.on(myevent, remove_tooltip);
      });


      $("#inputString").keyup(function () {
          var inpstr = $(this).val();
          if (inpstr.length > 3) {
              $.ajax({
                  type: "post",
                  url: SITEURL + "/ajax/livesearch.php",
                  data: "liveSearch=" + inpstr,
                  cache: false,
                  success: function (res) {
                      $("#suggestions").fadeIn();
                      $("#suggestions").html(res);
                  }
              });

              $("input").blur(function () {
                  $('#suggestions').fadeOut();
              });
          }
      });

      $('#settingslist').hide();
      $('a#showhide').click(function () {
          $('#settingslist').slideToggle();
          return false;
      });
      $('a.minilist').click(function () {
          $('#settingslist2').toggle();
          return false;
      });

      //$('#loader').doCenter();
      $.jStyling.createFileInput($('input[type=file]'));
      $.jStyling.createSelect($('select:not(select[multiple])'));


      /* == Fancy box == */
      $(".fancybox").fancybox({
          padding: 5,
          autoSize: false
      });
      $('.ajax').fancybox({
          'type': 'ajax',
          'autoScale': false
      });
      $('.iframe').fancybox({
          'type': 'iframe',
          'autoScale': false
      });
      $('.video')
          .attr('data-media', 'media')
          .fancybox({
              openEffect: 'none',
              closeEffect: 'none',
              prevEffect: 'none',
              nextEffect: 'none',
              arrows: false,
              helpers: {
                  media: {},
                  buttons: {}
              }
          });
		  
      /* == Responsive Tables == */
      $('table.myTable').responsiveTable({
          displayResponsiveCallback: function () {
              return $(window).width() < 769;
          }
      });
      $(window).on("orientationchange", function (e) {
          setTimeout("$('table.myTable').responsiveTableUpdate()", 100);
      });

      $(window).resize(function () {
          $('table.myTable').responsiveTableUpdate();
      });

      /* == Color Picker == */
      $('.cpicker').ColorPicker({
          onSubmit: function (hsb, hex, rgb, el, parent) {
              $(el).val(hex);
              $(el).css('backgroundColor', '#' + hex);
              $(el).ColorPickerHide();
          },
          onBeforeShow: function () {
              $(this).ColorPickerSetColor(this.value);
          }
      }).on('keyup', function () {
          $(this).ColorPickerSetColor(this.value);

      });
	  
	  $("button#do-passreset").click(function () {
		$("#show-passreset").slideToggle();
	  });
  });
  
  function showLoader() {
	  $("#loader").fadeIn(200);
  }

  function hideLoader() {
	  $("#loader").fadeOut(200);
  };
  
  function showsLoader(id) {
	  $(id + ' .loading').fadeIn(200);
  }

  function hidesLoader(id) {
	  $(id + ' .loading').fadeOut(200);
  };