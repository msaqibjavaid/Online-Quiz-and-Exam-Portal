(function ($) {
    $.formBuilder = function (settings) {
        var rownumber;
        var data_divide;
        var data_width;
        var blockwidth;
        var universalid = 1;
        var $beforeselected = $('.blockitem');
        var content = '';
        var block_html = '';
        var html = '';
        var data_height = '';
        var number = 1;
		var $newfieldid = '';

        var config = {
            'url': "controller.php",
			'formid': 0,
            msg: {
                btnsubmit: "Insert Field",
                btncancel: "Cancel",
                addBlock: "Add New Block",
				addEl: "Click To Add Form Field",
                deleteBlock: "Delete Block"
            }
        };
        if (settings) {
            $.extend(config, settings);
        }
		
		
		$("#formwrap section input").prop("readonly", true);
        $("#formwrap").on("doubletap", "div.col-wrap", function () {
            $(this).not("a.addfield").find("label").remove();
			var addfield = '<a class="addfield"><i class="icon-plus-sign"></i> ' + config.msg.addEl + '</a>';
			$(addfield).appendTo($(this));
        });
		
		if($('.rowitem').length > 0) $("#but-deleterow").show();
		
        $("#but-addrow").on("click", function () {
            universalid = $('[id^=row_]').length + 100;
            buniversalid = universalid + 2;
			
            var blankblock = '<section class="blockitem col col-12" data-width="1" data-height="0"  data-id="' + buniversalid + '" id="block_' + buniversalid + '"><div class="col-wrap"><a  class="icon-minus-sign-alt dodelete"></a><a class="addfield"><i class="icon-plus-sign"></i> ' + config.msg.addEl + '</a></div></section>';

            var blankrow = '<div class="row rowitem" data-id="' + universalid + '" data-divide="1" id="row_' + universalid + '"><a data-title="' + config.msg.addBlock + '" class="tooltip icon-plus-sign-alt addblock"></a>' + blankblock + '</div>';
			
            $("#but-deleterow").show();
            $(blankrow).fadeIn(400).appendTo($('#formwrap'));
            var $selectedrow = $('#block_' + buniversalid);
            $selectedrow.find('.dodelete:first').hide()
        });

        $('#formwrap').on('click', '.addblock', function () {
            universalid = $('[id^=block_]').length + 200;
			
            var blankblock = '<section class="blockitem col col-12" data-width="1" data-height="0"  data-id="' + universalid + '" id="block_' + universalid + '"><div class="col-wrap"><a  class="icon-minus-sign-alt dodelete"></a><a class="addfield"><i class="icon-plus-sign"></i> ' + config.msg.addEl + '</a></div></section>';

			
            var $selectedrow = $(this).parent();
            var $blankblock = $(blankblock); //cache
            $selectedrow.find('.blockitem:first .dodelete').show();
            intoolbox($blankblock);
			
            //increase data-divide of row by 1 on adding a block
            data_divide = $selectedrow.attr('data-divide');
            data_divide = parseInt(data_divide) + 1;
            $selectedrow.attr('data-divide', data_divide);
            $blankblock.fadeIn(400).appendTo($selectedrow); //live append
            $selectedrow.children('.blockitem').each(function () {
                var $this = $(this);
				var oldclass = $this.attr('class').split('-')[1];
				newclass = 12 / data_divide;
				$this.removeClass('col-' + oldclass).addClass('col-' + newclass);
            });

            var counter = $selectedrow.children('.blockitem').size();
            if (counter == 4) $(this).hide();
        });

        $("#formwrap").on("click", "a.addfield", function () {
            Messi.load('controller.php', {
				    doVisualForm: 1,
                    loadFormFields: 1
                }, {
                    title: config.msg.btnsubmit
                }
            );
			$newfieldid = $(this);
        });
			
		$("body").on("click", "#form-fields div.field-item", function () {
		    var fid = $(this).attr('data-id');
		    $.ajax({
		        type: 'post',
		        url: "controller.php",
		        data: {
					'doVisualForm': 1,
		            'retrieveFormField': 1,
		            'id': fid,
		        },
		        success: function (msg) {
		            if (msg != "N") {
		                $($newfieldid).replaceWith(msg);
		                $('.messi-modal, .messi').remove();
		            }

		        }
		    });
		});
			
		
        $("#but-deleterow").on("click", function () {
            $("#formwrap .row").last().remove()
        });
		
        $("#codebutton").on("click", function () {
            generatecode();
            html = content;
            html = html.replace(/undefined/g, "");
            html = html.replace(/id=""/g, "");
			html = html.replace(/%%null%%/g, "&nbsp;");
			var order = [];
            $("#formwrap" + ' section label').each(function(){
                order.push($(this).attr('data-field').replace(/_/g, '[]='))
            });
            $.ajax({
                type: "post",
                url: config.url,
                data: {
					'doVisualForm': 1,
                    'saveFormData': 1,
                    'formcode': html,
                    'id': config.formid,
					'layids': order.join(','),
                    'htmlcode': $("#formwrap").html()
                },
                success: function (msg) {
                    $("#msgholder").html(msg);
                    $("html, body").animate({
                        scrollTop: 0
                    }, 600);

                }
            });

            content = '';
            block_html = '';
            html = '';
        });
			   
        $('#formwrap').on('click', '.dodelete', function () {
            var rowid = $(this).closest(".row").attr('data-id');
            var $selectedrow = $('#row_' + rowid);
            var blockid = $(this).parent().attr('data-id');
            var thatblock = $('#block_' + blockid);

            var data_divide = parseInt($selectedrow.attr('data-divide'));
            data_divide = (data_divide - 1)
            $selectedrow.attr('data-divide', data_divide);

            $selectedrow.children('.blockitem').each(function () {
				var $this = $(this);
				var oldclass = $this.attr('class').split('-')[1];
				newclass = 12 / data_divide;
				$this.removeClass('col-' + oldclass).addClass('col-' + newclass);
            });

            $(this).closest("section").fadeOut(400).remove(); //remove it
            $('#row_' + rowid + ' .addblock').show();

            if (data_divide == 1) $selectedrow.find('.blockitem .dodelete').hide();
        });

		 $('#avail-fields').change(function () {
			 var option = $(this).val();
			 var caption = $("#avail-fields option:selected").text();
			  $.ajax({
				  type: 'post',
				  url: "controller.php",
				  data: {
					  doVisualForm: 1,
					  editField: 1,
					  id: option,
					  ftitle: caption
				  },
				  success: function (msg) {
					  $(".load-fieldhtml").html(msg)
					  $("#field-data").show()
					  $('.post').wysiwyg({
						  controls: {
							  h1: { visible: false },
							  h2: { visible: false },
							  h3: { visible: false },
							  code: { visible: false},
							  createLink: { visible: false},
							  insertImage: { visible: false},
							  insertTable: { visible: false},
							  insertHorizontalRule: { visible: false},
							  subscript: { visible: true},
							  superscript: { visible: true},
							  insertOrderedList: { visible: false},
							  insertUnorderedList: { visible: false},
						  },
						  css : { fontFamily: 'Arial, Tahoma', fontSize : '13px'}
					  });
					  $.jStyling.createFileInput($("input[type=file]"));
					  $("html").getNiceScroll().resize();
				  }
			  });
			  
			  function showlLoader() {
				  $('.sloading').fadeIn(200);
			  }
			
			  function hidelLoader(id) {
				  $('.sloading').fadeOut(200);
			  };
	  
			   var settings = {
				   target: "#msgholder",
				   beforeSubmit: showlLoader,
				   success: showResponse,
				   url: "controller.php",
				   resetForm: 0,
				   clearForm: 0,
				   dataType: 'json',
				   data: {
					   doVisualForm: 1,
					   processFormField: 1,
					   id: option
				   }
			   };
			   $("#admin_form").ajaxForm(settings);
			   function showResponse(json) {
				   hidelLoader();
					if (json.type == "success") {
						$("#msgholder").html(json.info);
					} else {
						$("#msgholder").html(json.message);
					}
				   $("html, body").animate({
					   scrollTop: 0
				   }, 600);
			   }
	
		 });
		 $('#new-fields').change(function () {
			 var option = $(this).val();
			 var caption = $("#new-fields option:selected").text();
			  $.ajax({
				  type: 'post',
				  url: "controller.php",
				  data: {
					  doVisualForm: 1,
					  addField: 1,
					  fieldType: option,
					  ftitle: caption
				  },
				  success: function (msg) {
					  $(".load-fieldhtml").html(msg)
					  $("#field-data").show()
					  $('.post').wysiwyg({
						  controls: {
							  h1: { visible: false },
							  h2: { visible: false },
							  h3: { visible: false },
							  code: { visible: false},
							  createLink: { visible: false},
							  insertImage: { visible: false},
							  insertTable: { visible: false},
							  insertHorizontalRule: { visible: false},
							  subscript: { visible: true},
							  superscript: { visible: true},
							  insertOrderedList: { visible: false},
							  insertUnorderedList: { visible: false},
						  },
						  css : { fontFamily: 'Arial, Tahoma', fontSize : '13px'}
					  });
					  $.jStyling.createFileInput($("input[type=file]"));
					  $("html").getNiceScroll().resize();
				  }
			  });
			  function showlLoader() {
				  $('.sloading').fadeIn(200);
			  }
			
			  function hidelLoader(id) {
				  $('.sloading').fadeOut(200);
			  };
	  
			   var settings = {
				   target: "#msgholder",
				   beforeSubmit: showlLoader,
				   success: showResponse,
				   url: "controller.php",
				   resetForm: 0,
				   clearForm: 0,
				   dataType: 'json',
				   data: {
					   doVisualForm: 1,
					   processFormField: 1,
					   dataType: option
				   }
			   };
			   $("#admin_form").ajaxForm(settings);
			   function showResponse(json) {
				   hidelLoader();
					if (json.type == "success") {
						$(json.option).insertAfter("#avail-fields option:first")
						$.jStyling.updateSelect($("#avail-fields"));
						$("#msgholder").html(json.info);
					} else {
						$("#msgholder").html(json.message);
					}
				   $("html, body").animate({
					   scrollTop: 0
				   }, 600);
			   }
		 });
		 
		 $("body").on("click", "#btncAdd", function () {
			 $("#btnDel").show();
			 var checkFieldHtml = function () {
				 var num = $('.clonedInput').length;
				 var newNum = new Number(num + 1);
				 var name = $('#container1 input').prop('name');
				 field = '<div id="container' + newNum + '" class="row clonedInput">';
				 field += '<section class="col col-10"> ';
				 field += '<label class="input">';
				 field += '<input type="text" name="' + name + '">';
				 field += '</label>';
				 field += '</section>';
				 field += '<section class="col col-2">';
				 field += '<label class="checkbox">';
				 field += '<input type="checkbox" name="vform-defval[]" value="' + newNum + '">';
				 field += '<i></i></label>';
				 field += '</section>';
				 field += '</div>';
				 return field;
			 };
			 $(".fieldholder").append(checkFieldHtml());
		 });
	
		 $("body").on("click", "#btnrAdd", function () {
			 $("#btnDel").show();
			 var radioFieldHtml = function () {
				 var num = $('.clonedInput').length;
				 var newNum = new Number(num + 1);
				 var name = $('#container1 input').prop('name');
				 field = '<div id="container' + newNum + '" class="row clonedInput">';
				 field += '<section class="col col-10"> ';
				 field += '<label class="input">';
				 field += '<input type="text" name="' + name + '">';
				 field += '</label>';
				 field += '</section>';
				 field += '<section class="col col-2">';
				 field += '<label class="radio">';
				 field += '<input type="radio" name="vform-defval" value="' + newNum + '">';
				 field += '<i></i></label>';
				 field += '</section>';
				 field += '</div>';
				 return field;
			 };
			 $(".fieldholder").append(radioFieldHtml());
		 });

        // Sort Rows
        $("#formwrap").sortable({
            placeholder: 'placeholder',
            opacity: .6,
        }).draggable();
		
		 $("body").on("click", "#btnDel", function () {
			 var num = $('.clonedInput').length;
			 $('#container' + num).remove();
			 if (num - 1 == 1) $(this).hide();
		 });
	
		 $("body").on("click", ".itemcheck", function () {
			 isChecked = $(this).is(':checked');
			 $('.itemcheck').prop('checked', false);
			 var $showhide = $(".load-fieldhtml .fieldholder, .load-fieldhtml .subheader");
			 if (isChecked) {
				 $(this).prop('name') == "vform-other" ? $showhide.hide() : $showhide.show();
				 $(this).prop('checked', true);
			 } else {
				 $showhide.show();
				 $(this).prop('checked', false);
			 }
		 });
	 
        var intoolbox = function ($selected) {
            $beforeselected.removeClass('selected');
            $selected.addClass('selected');
            $beforeselected = $selected;
        };

        var generatecode = function () {
            var $this = '';
            // the first loop for rows
            $('.rowitem').each(function (rownumber) {
                var blockobject = '';

                $this = $(this); //cache
                data_divide = $this.attr('data-divide');
                content = content + '\t<div class="row">\n';

                // the second loop for blocks
                $this.children('.blockitem').each(function () {
                    blockobject = $(this);
                    var colsize = 12 / data_divide;
                    block_html = '\n\t\t<section class="col col-' + colsize + '">\n';
                    var datafield = blockobject.find("label:first").attr("data-field");
					datafield = '%%' + datafield + '%%';
                    content = content + block_html  + datafield + '\n\t\t</section>'; //close for block
                });
                content = content + '\n\t</div>\n'; //close for rows
                rownumber = rownumber + 1;
            });
        }

    };
})(jQuery);