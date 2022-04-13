var locale = $('html').attr('lang');

$(function () {
    if($(".polzunok-5").length > 0){
       $(".polzunok-5").slider({
            min: 18,
            max: 80,
            values: [18, 80],
            range: true,
            animate: "fast",
            slide : function(event, ui) {
                $(".polzunok-input-5-left").val(ui.values[ 0 ]);
                $(".polzunok-input-5-right").val(ui.values[ 1 ]);
            }
        });
        $(".polzunok-input-5-left").val($(".polzunok-5").slider("values", 0));
        $(".polzunok-input-5-right").val($(".polzunok-5").slider("values", 1));
        $(document).focusout(function() {
            var input_left = $(".polzunok-input-5-left").val().replace(/[^0-9]/g, ''),
            opt_left = $(".polzunok-5").slider("option", "min"),
            where_right = $(".polzunok-5").slider("values", 1),
            input_right = $(".polzunok-input-5-right").val().replace(/[^0-9]/g, ''),
            opt_right = $(".polzunok-5").slider("option", "max"),
            where_left = $(".polzunok-5").slider("values", 0);
            if (input_left > where_right) {
                input_left = where_right;
            }
            if (input_left < opt_left) {
                input_left = opt_left;
            }
            if (input_left == "") {
            input_left = 0;
            }
            if (input_right < where_left) {
                input_right = where_left;
            }
            if (input_right > opt_right) {
                input_right = opt_right;
            }
            if (input_right == "") {
            input_right = 0;
            }
            $(".polzunok-input-5-left").val(input_left);
            $(".polzunok-input-5-right").val(input_right);
            $(".polzunok-5").slider( "values", [ input_left, input_right ] );
        });
    }
});


/////// j

//// filter accordion
function accordion(section, heading, list) {
    $(section).each(function() {
        var that = this,
                listHeight = $(this).find(list).height();

        $(this).find(heading).click(function() {
            $(this).toggleClass("plus");
            $(that).find(list).toggle({
                "height": "0"
            }, 250);
        });
    });
};

accordion('.filter-item', '.filter-item-inner-heading', '.filter-attribute-list');

$(document).ready(function() {
    if($(window).width() < 1023)
    {
       $(".par-cat").mCustomScrollbar({
        axis:"x",
        theme:"dark-thick",
        autoExpandScrollbar:true,
        advanced:{autoExpandHorizontalScroll:true},
        updateOnContentResize:true,
        scrollbarPosition: 'outside',
        contentTouchScroll: true
      });
    } else {
       // change functionality for larger screens
    }
})

$(document).on('click', ".input-shop-label", function() {
    if($(this).find('.input-shop').prop('checked')){
        $(this).parents('.reg-mag').find('.your-shop').addClass('active');
        $(this).parents('.reg-mag').find('.add-shop').addClass('active');
    }else{
        $(this).parents('.reg-mag').find('.your-shop').removeClass('active');
        $(this).parents('.reg-mag').find('.add').removeClass('active');
    }
});

$(document).on('click', ".part-label", function() {
    if($(this).find('.input-part').prop('checked')){
        $(this).parents('.page-req-shop').find('.add-parent').find('.add-req').addClass('required-input');
    }else{
        $(this).parents('.page-req-shop').find('.add-parent').find('.add-req').removeClass('required-input');
    }
});

$(document).on('click', ".input-cur-24-label", function() {
    if($(this).find('.input-cur-24').prop('checked')){
        $(this).parents('.personal-cab').find('.cur-24-box').addClass('active');
        $(this).parents('.cilo-t').find('.input_1').val('00:00');
        $(this).parents('.cilo-t').find('.input_2').val('23:59');
        $(this).parents('.personal-cab').find('.cur-24-box').find('.add-req').addClass('required-input');
    }else{
        $(this).parents('.personal-cab').find('.cur-24-box').removeClass('active');
        $(this).parents('.personal-cab').find('.cur-24-box').find('.add-req').removeClass('required-input');
        $(this).parents('.cilo-t').find('.input_1').val('--:--');
        $(this).parents('.cilo-t').find('.input_2').val('--:--');
    }
});

$(document).on('click', ".zv-inp", function() {
    if($(this).find('.rozklad').prop('checked')){
        $(this).parents('.parent-input').addClass('active');
    }else{
        $(this).parents('.parent-input').removeClass('active');
    }
});

$(document).on('click', ".d-h-site", function() {
    if($(this).find('.dh-inp').prop('checked')){
        $(this).parents('.parent-input').addClass('active');
        $(this).parents('.parent-input').find('.form-input').removeClass('required-input');
        $(this).parents('.parent-input').find('.req-div').removeClass('error-field');
    }else{
        $(this).parents('.parent-input').removeClass('active');
        $(this).parents('.parent-input').find('.form-input').addClass('required-input');
    }
});
$(document).on('click', ".shadow-on", function() {
    if($(this).find('.sh').prop('checked')){
        $(this).parents('.parent-input').addClass('active');
    }else{
        $(this).parents('.parent-input').removeClass('active');
    }
});
$(document).on('click', ".shadow-on-2", function() {
    if($(this).find('.sh-2').prop('checked')){
        $(this).parents('.parent-input').addClass('active');
    }else{
        $(this).parents('.parent-input').removeClass('active');
    }
});

$(document).on('click', ".btn-non-active", function() {
  $(this).addClass('btn-active');
  $(this).removeClass('btn-non-active');
  $(this).parents('.checkbox-div').find('.days').addClass('show');
});
$(document).on('click', ".btn-active", function() {
  $(this).addClass('btn-non-active');
  $(this).removeClass('btn-active');
  $(this).parents('.checkbox-div').find('.days').removeClass('show');
});
$(document).on('click', ".day_and_night", function() {
    if($(this).find('.input-d-n').prop('checked')){
        $(this).parents('.cilo-t').addClass('active');
    }else{
        $(this).parents('.cilo-t').removeClass('active');
    }
});

jQuery(document).ready(function() {
    jQuery('.tel-input').mask("+38 (999) 999-99-99");
});
jQuery(function($){
  $(document).mouseup(function (e){
    var div = $(".days.show");
      if (!div.is(e.target)
        && div.has(e.target).length === 0) {
        div.removeClass('show');
      }
  });
});

$(document).on('click', ".select-item", function() {
    var selectValue = $(this).text();
    var selectId = $(this).attr('data-city');
    $(this).parents('.select-parent').find('.select-inp').val(selectId);
    $(this).parents('.select-parent').find('.select-btn').html(selectValue);
});


/*validation*/

function validation (form)
    {
        $(form).find('.req-div').removeClass('error-field');
        var errorsCount = 0;

        $(form).find('.required-input').each(function (){
            if($(this).attr('type') == 'text'){
                if($(this).val().length < 1){
                    errorsCount++;
                    $(this).parents('.req-div').addClass('error-field');
                }
            }else if($(this).attr('type') == 'tel'){
                if($(this).val().length < 1){
                    errorsCount++;
                    $(this).parents('.req-div').addClass('error-field');
                }
            }else if($(this).attr('type') == 'email'){
                if(validateEmail($(this).val()) && $(this).val().length > 0){

                }else{
                    errorsCount++;
                    $(this).parents('.req-div').addClass('error-field');
                }
            }else if($(this).attr('type') == 'checkbox'){
                if(!$(this).prop('checked')){
                    errorsCount++;
                    $(this).parents('.req-div').addClass('error-field');
                }
            }else if($(this).attr('type') == 'number'){
                if($(this).val().length < 1){
                    errorsCount++;
                    $(this).parents('.req-div').addClass('error-field');
                }
            }

        })

        return errorsCount;
    }

function validateEmail(email) {
    var pattern = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return pattern.test(email);
}

$(document).on('click', '.click-step-2', function (e){
    e.preventDefault();
    var form = $(this).parents('form');
    if(validation(form) > 0) return false;
    else {
        // Регистрация магазина
        sendAjaxAuth($(this).parents('form').attr('action'), $(this).parents('form').serialize(), 'register-form-shop', '/'+locale+'/home');
    }
});

$(document).on('click', '.click-step', function (e){
    e.preventDefault();
    var countStep = $(this).parents('.step').find('.index-step_current').text();
    var form = $(this).parents('form');
    console.log(countStep);
    console.log(validation(form));

    if(validation(form) > 0) {
        return false;
    }else{
        $('.step').removeClass('active');

        if(countStep == 1) {
            // Регистрация магазина шаг 1
            sendAjaxAuth($(this).parents('form').attr('action'), $(this).parents('form').serialize(), 'register-form-shop', 'none', 3);
        }if(countStep == 2) {
            // Регистрация магазина шаг 2
            sendAjaxAuth($(this).parents('form').attr('action'), $(this).parents('form').serialize(), 'register-form-shop', 'none', 4);
        }if(countStep == 3) {
            // Регистрация магазина шаг 3
            sendAjaxAuth($(this).parents('form').attr('action'), $(this).parents('form').serialize(), 'register-form-shop', 'none', 5);
        }
    }
});

$(document).on('click', '.click-step-back', function (e){
    e.preventDefault();
    var countStep = $(this).parents('.step').find('.index-step_current').text();
    $(this).parents('.page-req-shop').find('.step').removeClass('active');
    $(this).parents('.page-req-shop').find('.step-'+countStep).addClass('active');
    console.log(countStep);
});
/*upload image*/
$(document).ready(function() {
  if (window.File && window.FileList && window.FileReader) {
    $("#files").on("change", function(e) {
      var files = e.target.files,
        filesLength = files.length;
      for (var i = 0; i < filesLength; i++) {
        var f = files[i]
        var fileReader = new FileReader();
        fileReader.onload = (function(e) {
          var file = e.target;
          $("<span class=\"pip\">" +
            "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
            "<br/><span class=\"remove\">Remove image</span>" +
            "</span>").insertAfter("#files");
          $(".remove").click(function(){
            $(this).parent(".pip").remove();
          });
          
          // Old code here
          /*$("<img></img>", {
            class: "imageThumb",
            src: e.target.result,
            title: file.name + " | Click to remove"
          }).insertAfter("#files").click(function(){$(this).remove();});*/
          
        });
        fileReader.readAsDataURL(f);
      }
      console.log(files);
    });
  } else {
    alert("Your browser doesn't support to File API")
  }
});
/*search-p*/


// Code goes here

$(document).ready(function(){
    $('.search_field').bind('keyup change', function () {
        if ($(this).val().trim().length !== 0) {
    
            $('.list-search li').show().hide().each(function () {
                if ($(this).is(':icontains(' + $('.search_field').val() + ')'))
                    $(this).show();
            });
        }
        else {
            $('.list-search li').show().hide().each(function () {
                $(this).show();
            });
        }
    });

    $.expr[':'].icontains = function (obj, index, meta, stack) {
        return (obj.textContent || obj.innerText || jQuery(obj).text() || '').toLowerCase().indexOf(meta[3].toLowerCase()) >= 0;
    };
});


    
$('.single-slide').slick();
$(document).on("click",".search_field",function() {
    $(this).parents('.search-buket').find('.list-search').removeClass('f-here');
    $(this).parents('.search-buket').find('.list-search').addClass('f-here');
});
$(document).on("click",".tab_pane-2-cl",function() {
    $('.tab_pane-1').find('.input_1').val('--:--');
    $('.tab_pane-1').find('.input_2').val('--:--');
    $(this).parents('.your-shop').find('.input-cur-24').prop('checked', false);
    $(this).parents('.your-shop').find('.cilo-t').removeClass('active');
    $(this).parents('.reg-mag').find('.cur-24-box').removeClass('active');
});
$(document).on("click",".tab_pane-1-cl",function() {
    $('.tab_pane-2').find('.input_1').val('--:--');
    $('.tab_pane-2').find('.input_2').val('--:--');
    $(this).parents('.your-shop').find('.input-cur-24').prop('checked', false);
    $(this).parents('.your-shop').find('.cilo-t').removeClass('active');
    $(this).parents('.reg-mag').find('.cur-24-box').removeClass('active');
});
$(document).on("click",".add-search",function() {
    $(this).addClass('active');
    $(this).parents('.personal-cab').find(".box-search").append('<div class="search-buket"><div class="in-count"><input class="form-input form-number required-input" type="number" name="count"><p>кількість</p></div><div class="select select-parent relative special-marg"><input type="hidden" class="select-inp" name="search_id"><button class="btn main-btn select-btn main-gray w-100 before-chevron" type="button" data-bs-toggle="dropdown">Склад</button><ul class="dropdown-menu list-search" aria-labelledby="search"><form class="navbar-form navbar-right"><input type="text" class="form-control search_field" placeholder="Search..."></form><li><span role="menuitem" class="select-item" tabindex="-2" data-city="">Rose</span></li><li><span role="menuitem" class="select-item" tabindex="-2" data-city="">Blue</span></li><li><span role="menuitem" class="select-item" tabindex="-2" data-city="">Red</span></li></ul></div></div>');
});
// Event listeners



