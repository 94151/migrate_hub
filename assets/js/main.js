//CounterUp
jQuery(document).ready(function( $ ) {
  $('.counter').counterUp({
    delay: 1,
    time: 800
  });
});

 $(window).load(function(){        
   $('#myModal').modal('show');
    }); 


// Page Loader
$(window).load(function() {
  "use strict";
  $('#loading').fadeOut();
});

 /* Jquery background image change
========================================================*/



$(document).ready(function() {

$department = $("select[name='dep']");
$cname = $("select[name='cname']");


$department.change(function() {
 
  if ($(this).val() == "Select") 
{
$("select[name='cname'] option").remove();
$("<option>Visa name</option>").appendTo($cname);
}

if ($(this).val() == "Australia") {
$("select[name='cname'] option").remove();
$("<option>Visa name</option>").appendTo($cname);
$("<option value='Australia_temporary'>Australia Temporary Graduate Visa (Post..</option>").appendTo($cname);
$("<option value='Australia_skilled'>Australia Skilled Independent Visa (subclass 189)</option>").appendTo($cname);
$("<option value='Australia_srvg'>Australia SRGV Evaluation</option>").appendTo($cname);
$("<option value='australia_family'>Australia Family Immigration</option>").appendTo($cname);
$("<option value='partner_skills'>Partner Skills Evaluation Report</option>").appendTo($cname);
$("<option value='australia_nominated'>Australia Skilled Nominated Visa (subclass 190)</option>").appendTo($cname);
$("<option value='Australia_employer'>Australia Employer Nomination Scheme (ENS)</option>").appendTo($cname);
$("<option value='Australia_subclass'>Australia Subclass 457 Visa</option>").appendTo($cname);
$("<option value='Australia_business'>Australia Business Innovation & Investment..</option>").appendTo($cname);
$("<option value='Australia_student'>Australia Student Dependent Visa</option>").appendTo($cname);
$("<option value='Australia_doctors'>Australia Doctors & Nurses Visa</option>").appendTo($cname);
$("<option value='Australia_immigration'>Australia Immigration Skills Assessment</option>").appendTo($cname);
$("<option value='Australia_talent'>Australia Business Talent..</option>").appendTo($cname);
$("<option value='Contributory_parents'>Contributory Parents Visa</option>").appendTo($cname);
$("<option value='Australia_child'>Australia Child Visa</option>").appendTo($cname);
$("<option value='Australia_graduate'>Australia Temporary Graduate Visa..</option>").appendTo($cname);
$("<option value='Australia_regional'>Australia Skilled Regional (Provisional) Visa ..</option>").appendTo($cname);
$("<option value='Australia_recognised'>Australia Skilled Recognised Graduate ...</option>").appendTo($cname);
$("<option value='Australia_resident'>Australia Resident Return Visa</option>").appendTo($cname);
$("<option value='Australia_evaluation'>Australia Evaluation Report</option>").appendTo($cname);
$("<option value='Australia_partner'>Australia Partner Immigration</option>").appendTo($cname);
$("<option value='DIBP'>DIBP</option>").appendTo($cname);
$("<option value='Partner_skills'>Partner Skills Assessment</option>").appendTo($cname);
$("<option value='Australia_innovation'>Australia Business Innovation & Investment..</option>").appendTo($cname);
$("<option value='Visa_documentation'>Visa Documentation</option>").appendTo($cname);
$("<option value='Australia_parents'>Australia Parents Visa</option>").appendTo($cname);
$("<option value='Australia_ens'>Australia ENS Report</option>").appendTo($cname);
$("<option value='DIBP_evaluation'>DIBP Evaluation Report</option>").appendTo($cname);
$("<option value='Contributory_visa'>Contributory Parents Visa</option>").appendTo($cname);
$("<option value='Australia_investment'>Australia Business Innovation & Investment..</option>").appendTo($cname);
}

if ($(this).val() == "Canada") 
{
$("select[name='cname'] option").remove();
$("<option>Visa name</option>").appendTo($cname);
$("<option value='Canada_family'>Canada Family Immigration</option>").appendTo($cname);
$("<option value='Canada_quebec_skilled'>Canada Quebec Skilled Worker Visa</option>").appendTo($cname);
$("<option value='Quebec_evaluation'>Quebec Evaluation Report</option>").appendTo($cname);
$("<option value='CIC_guidance'>CIC Guidance (Post ITA)</option>").appendTo($cname);
$("<option value='Canada_dependent_work'>Canada Dependent Work Permit</option>").appendTo($cname);
$("<option value='Canada_self'>Canada Self Employed Visa</option>").appendTo($cname);
$("<option value='Canada_manitoba'>Canada Manitoba Provincial Nomination Program</option>").appendTo($cname);
$("<option value='Canada_nova'>Canada Nova Scotia Nomination Program</option>").appendTo($cname);
$("<option value='Canada_experience'>Canada Experience Class Evaluation</option>").appendTo($cname);
$("<option value='Canada_quebec_experience'>Canada Quebec Experience Class</option>").appendTo($cname);
$("<option value='Canada_parent'>Canada Parent And Grandparent Super Visa</option>").appendTo($cname);
$("<option value='Canada_self_employed'>Canada Self Employed Visa Evaluation Report</option>").appendTo($cname);
$("<option value='Saskatchewan_nomination'>Saskatchewan Nomination Program Evaluation</option>").appendTo($cname);
$("<option value='Canada_dependent'>Canada Dependent Visa</option>").appendTo($cname);
$("<option value='Atlantic_immigration'>Atlantic Immigration Pilot Program</option>").appendTo($cname);
$("<option value='Canada_federal'>Canada Federal Skilled Worker</option>").appendTo($cname);
$("<option value='Canada_fsw'>Canada FSW Evaluation</option>").appendTo($cname);
$("<option value='Canada_start_up'>Canada Start_up Visa Evaluation</option>").appendTo($cname);
$("<option value='Canada_business_visa'>Canada Business Visa</option>").appendTo($cname);
$("<option value='Canada_post_graduate'>Canada Post Graduate Work Permit</option>").appendTo($cname);
$("<option value='Canada_open_work'>Canada Open Work Permit</option>").appendTo($cname);
$("<option value='Canada_start_up'>Canada Start_up Visa</option>").appendTo($cname);
$("<option value='Canada_nova'>Canada Nova Scotia Nomination Program..</option>").appendTo($cname);
$("<option value='Canada_experience'>Canada Experience Class</option>").appendTo($cname);
$("<option value='Canada_federal'>Canada Federal Trade Worker Class</option>").appendTo($cname);
$("<option value='Canada_Manitoba_pnp'>Canada Manitoba PNP Evaluation</option>").appendTo($cname);
$("<option value='Saskatchewan_nomination'>Saskatchewan Nomination Program</option>").appendTo($cname);
$("<option value='Canada_work'>Canada Work Permit</option>").appendTo($cname);
$("<option value='Canada_federal_trade'>Canada Federal Trade Worker Class Evaluation</option>").appendTo($cname);
$("<option value='Atlantic_immigration_pilot'>Atlantic Immigration Pilot Program</option>").appendTo($cname);
}

if ($(this).val() == "UK") 
{
$("select[name='cname'] option").remove();
$("<option>Visa name</option>").appendTo($cname);
$("<option value='UK_dependent'>UK Dependent Visa</option>").appendTo($cname);
$("<option value='UK_tier_dependent'>UK Tier 1 Dependent</option>").appendTo($cname);
$("<option value='HSW_extensions'>UK Tier 1 / HSW Extensions Or FLR</option>").appendTo($cname);
$("<option value='FLRUK_tier'>UK Tier 1 / HSW Extensions Or FLRUK Tier 1 / HSW Extensions Or FLR</option>").appendTo($cname);
$("<option value='UK_student_dependent'>UK Student Dependent Visa</option>").appendTo($cname);
$("<option value='UK_domestic_worker'>UK Domestic Worker Visa</option>").appendTo($cname);
$("<option value='Student_visa_general'>UK Tier 4 Student Visa General</option>").appendTo($cname);
$("<option value='UK_EEA_family'>UK EEA Family Permit</option>").appendTo($cname);
$("<option value='Work_permits'>UK Tier 2 Work Permits</option>").appendTo($cname);
$("<option value='Sole_representative'>UK Sole Representative Visa</option>").appendTo($cname);
$("<option value='Tier_2_dependent_visa'>UK Tier 2 Dependent Visa</option>").appendTo($cname);
$("<option value='Entrepreneur_visa'>UK Tier 1 Entrepreneur Visa</option>").appendTo($cname);
}

});
});


var dictionary = {
'Australia_temporary': 'australia-temporary-graduate-visa-post-study-work-stream.php',
'Australia_skilled': 'Australia-skilled-independent-visa-subclass-189.php',
'Australia_srvg': 'Australia-srvg-evaluation.php',
'australia_family': 'australia-family-immigration.php',
'partner_skills': 'partner-skills-evaluation-report.php',
'australia_nominated': 'australia-skilled-nominated-visa-subclass-190.php',
'Australia_employer': 'australia-employer-nomination-scheme-ens.php',
'Australia_subclass': 'australia-subclass-457-visa.php',
'Australia_business': 'australia-business-innovation-investment-permanent-subclass-888-visa.php',
'Australia_student': 'australia-student-dependent-visa.php',
'Australia_doctors': 'australia-doctors-nurses-visa.php',
'Australia_immigration': 'australia-immigration-skills-assessment.php',
'Australia_talent': 'australia-business-talent-permanent-subclass-132-visa.php',
'Contributory_parents': 'contributory-parents-visa.php',
'Australia_child': 'australia-child-visa.php',
'Australia_graduate': 'australia-temporary-graduate-visa-graduate-work-stream.php',
'Australia_regional': 'australia-skilled-regional-provisional-visa-subclass-489.php',
'Australia_recognised': 'australia-skilled-recognised-graduate-temporary-visa-subclass-476.php',
'Australia_resident': 'australia-resident-return-visa.php',
'Australia_evaluation': 'australia-evaluation-report.php',
'Australia_partner': 'australia-partner-immigration.php',
'DIBP': 'dibp.php',
'Partner_skills': 'partner-skills-assessment.php',
'Australia_innovation': 'australia-business-innovation-investment-provisional-subclass-188-visas.php',
'Visa_documentation': 'visa-documentation.php',
'Australia_parents': 'australia-parents-visa.php',
'Australia_ens': 'australia-ens-report.php',
'DIBP_evaluation': 'dibp-evaluation-report.php',
'Contributory_visa': 'contributory-parents-visas.php',
'australia-investment-provisional': 'australia-business-innovation-investment-provisional-subclass-188-visa.php',
'Canada_family': 'canada-family-immigration.php',
'Canada_quebec_skilled': 'canada-quebec-skilled-worker-visa.php',
'Quebec_evaluation': 'quebec-evaluation-report.php',
'CIC_guidance': 'cic-guidance-post-ita.php',
'Canada_dependent_work': 'canada-dependent-work-permit.php',
'Canada_self': 'canada-employed-visa.php',
'Canada_manitoba': 'canada-manitoba-provincial-nomination-program.php',
'Canada_nova': 'canada-nova-scotia-nomination-program.php',
'Canada_experience': 'canada-experience-evaluation.php',
'Canada_quebec_experience': 'canada-quebec-experience.php',
'Canada_parent': 'canada-parent-and-grandparent-visa.php',
'Canada_self_employed': 'canada-employed-visa-evaluation-report.php',
'Saskatchewan_nomination': 'saskatchewan-nomination-program-evaluation.php',
'Canada_dependent': 'canada-dependent-visa.php',
'Atlantic_immigration': 'atlantic-immigration-pilot-program.php',
'Canada_federal': 'canada-federal-skilled-worker.php',
'Canada_fsw': 'canada-fsw-evaluation.php',
'Canada_start_up': 'Canadastart-up.php',
'Canada_business_visa': 'canada-business-visa.php',
'Canada_post_graduate': 'canada-post-graduate-work-permit.php',
'Canada_open_work': 'canada-open-work-permit.php',
'Canada_start_up': 'Canadastart-upvisa.php',
'Canada_nova': 'canada-nova-scotia-nomination-program-evaluation.php',
'Canada_experience': 'canada-experience.php',
'Canada_federal': 'canada-federal-trade-worker.php',
'Canada_Manitoba_pnp': 'canada-manitoba-pnp-evaluation.php',
'Saskatchewan_nomination': 'saskatchewan-nomination-program.php',
'Canada_work': 'canada-work-permit-skilled-workers.php',
'Canada_federal_trade': 'canada-federal-trade-worker-evaluation.php',
'Atlantic_immigration_pilot': 'atlantic-immigration-pilot-program.php',
'UK_dependent': 'uk-dependent-visa.php',
'UK_tier_dependent': 'uk-tier-1-dependent.php',
'HSW_extensions': 'uk-tier-1-hsw-extensions-or-flr.php',
'FLRUK_tier': 'uk-tier-5-youth-mobility-scheme.php',
'UK_student_dependent': 'uk-student-dependent-visa.php',
'UK_domestic_worker': 'uk-domestic-worker-visa.php',
'Student_visa_general': 'uk-tier-4-student-visa-general.php',
'UK_EEA_family': 'uk-eea-family-permit.php',
'Work_permits': 'uk-tier-2-work-permits.php',
'Sole_representative': 'uk-sole-representative-visa.php',
'Tier_2_dependent_visa': 'uk-tier-2-dependent-visa.php',
'Entrepreneur_visa': 'uk-tier-1-entrepreneur-visa.php'
};


$('#button').click(function() {
    var newaction = $('[name=cname]').val();
    // console.log(dictionary[newaction]);
    window.location.href = dictionary[newaction];
});


 /* Slicknav Mobile Menu
========================================================*/
  $(document).ready(function(){
    $('.wpb-mobile-menu').slicknav({
      prependTo: '.navbar-header',
      parentTag: 'jobs',
      allowParentLinks: true,
      duplicate: true,
      label: '',
      closedSymbol: '<i class="fa fa-angle-right"></i>',
      openedSymbol: '<i class="fa fa-angle-down"></i>',
    });
  });

 // Nav Menu & Search
  $(".nav > li:has(ul)").addClass("drop");
  $(".nav > li.drop > ul").addClass("dropdown");
  $(".nav > li.drop > ul.dropdown ul").addClass("sup-dropdown");

/* ==========================================================================
   Revolution Slider
   ========================================================================== */
  $(document).ready(function() {
     jQuery('.tp-banner').show().revolution({
      dottedOverlay: "none",
      delay: 9000,
      startwidth: 1170,
      startheight: 540,
      hideThumbs: 200,
      thumbWidth: 100,
      thumbHeight: 50,
      thumbAmount: 5,
      navigationType: "bullet",
      navigationArrows: "solo",
      navigationStyle: "preview3",
      touchenabled: "on",
      onHoverStop: "on",
      swipe_velocity: 0.7,
      swipe_min_touches: 1,
      swipe_max_touches: 1,
      drag_block_vertical: false,
      parallax: "mouse",
      parallaxBgFreeze: "on",
      parallaxLevels: [7, 4, 3, 2, 5, 4, 3, 2, 1, 0],
      keyboardNavigation: "off",
      navigationHAlign: "center",
      navigationVAlign: "bottom",
      navigationHOffset: 0,
      navigationVOffset: 20,
      soloArrowLeftHalign: "left",
      soloArrowLeftValign: "center",
      soloArrowLeftHOffset: 20,
      soloArrowLeftVOffset: 0,
      soloArrowRightHalign: "right",
      soloArrowRightValign: "center",
      soloArrowRightHOffset: 20,
      soloArrowRightVOffset: 0,
      shadow: 0,
      fullWidth: "on",
      fullScreen: "off",
      spinner: "spinner1",
      stopLoop: "off",
      stopAfterLoops: -1,
      stopAtSlide: -1,
      shuffle: "off",
      autoHeight: "off",
      forceFullWidth: "off",
      hideThumbsOnMobile: "off",
      hideNavDelayOnMobile: 1500,
      hideBulletsOnMobile: "off",
      hideArrowsOnMobile: "off",
      hideThumbsUnderResolution: 0,
      hideSliderAtLimit: 0,
      hideCaptionAtLimit: 0,
      hideAllCaptionAtLilmit: 0,
      startWithSlide: 0,
      fullScreenOffsetContainer: ""
      });
    });

/* ==========================================================================
   Touch Owl Carousel
   ========================================================================== */
$(".touch-slider").owlCarousel({
    navigation: true,
    pagination: false,
    slideSpeed: 1000,
    stopOnHover: true,
    autoPlay: true,
    items: 1,
    itemsDesktopSmall: [1024, 1],
    itemsTablet: [600, 1],
    itemsMobile: [479, 1]
});

$('.touch-slider').find('.owl-prev').html('<i class="ti-angle-left"></i>');
$('.touch-slider').find('.owl-next').html('<i class="ti-angle-right"></i>');

$('#new-products').find('.owl-prev').html('<i class="fa fa-angle-left"></i>');
$('#new-products').find('.owl-next').html('<i class="fa fa-angle-right"></i>');

var owl;

$(document).ready(function () {

    owl = $("#owl-demo");

    owl.owlCarousel({

        navigation: false, // Show next and prev buttons
        slideSpeed: 300,
        paginationSpeed: 400,
        singleItem: true,
        afterInit: afterOWLinit, // do some work after OWL init
        afterUpdate : afterOWLinit
    });

    function afterOWLinit() {
        // adding A to div.owl-page
        $('.owl-controls .owl-page').append('<a class="item-link" />');
        var pafinatorsLink = $('.owl-controls .item-link');
        /**
         * this.owl.userItems - it's your HTML <div class="item"><img src="http://www.ow...t of us"></div>
         */
        $.each(this.owl.userItems, function (i) {

            $(pafinatorsLink[i])
                // i - counter
                // Give some styles and set background image for pagination item
                .css({
                    'background': 'url(' + $(this).find('img').attr('src') + ') center center no-repeat',
                    '-webkit-background-size': 'cover',
                    '-moz-background-size': 'cover',
                    '-o-background-size': 'cover',
                    'background-size': 'cover'
                })
                // set Custom Event for pagination item
                .click(function () {
                    owl.trigger('owl.goTo', i);
                });

        });
         // add Custom PREV NEXT controls
        $('.owl-pagination').prepend('<a href="#prev" class="prev-owl"/>');
        $('.owl-pagination').append('<a href="#next" class="next-owl"/>');
        // set Custom event for NEXT custom control
        $(".next-owl").click(function () {
            owl.trigger('owl.next');
        });
        // set Custom event for PREV custom control
        $(".prev-owl").click(function () {
            owl.trigger('owl.prev');
        });
    }
});

//testimonial Slider
  $('#testimonial-carousel').owlCarousel({   
      navigation: false,
      pagination: true,
      slideSpeed: 1000,
      autoPlay: false,
      singleItem: true,
      pagination : false,
      items : 1,
      itemsDesktop : [1199,4],
      itemsDesktopSmall : [980,3],
      itemsTablet: [768,2],
      itemsTabletSmall: false,
      itemsMobile : [479,1],
  });


/* Owl Carousel
========================================================*/
$('#clients-scroller').owlCarousel({
    navigation: false,
    pagination: false,
    items:6,
    itemsTablet:3,
    stagePadding:90,
    smartSpeed:450,
    itemsDesktop : [1199,4],
    itemsDesktopSmall : [980,3],
    itemsTablet: [768,3],
    itemsTablet: [767,2],
    itemsTabletSmall: [480,2],
    itemsMobile : [479,1],
});

 // Back Top Link
  var offset = 200;
  var duration = 500;
  $(window).scroll(function() {
    if ($(this).scrollTop() > offset) {
      $('.back-to-top').fadeIn(400);
    } else {
      $('.back-to-top').fadeOut(400);
    }
  });
  $('.back-to-top').click(function(event) {
    event.preventDefault();
    $('html, body').animate({
      scrollTop: 0
    }, 600);
    return false;
  })

 $('.list,switchToGrid').click(function(e) {
    e.preventDefault();
    $('.grid').removeClass("active");
    $('.list').addClass("active");
    $('.item-list').addClass("make-list");
    $('.item-list').removeClass("make-grid");
    $('.item-list').removeClass("make-compact");
    $('.item-list .add-desc-box').removeClass("col-sm-9");
    $('.item-list .add-desc-box').addClass("col-sm-7");
  });
  $('.grid').click(function(e) {
    e.preventDefault();
    $('.list').removeClass("active");
    $(this).addClass("active");
    $('.item-list').addClass("make-grid");
    $('.item-list').removeClass("make-list");
    $('.item-list').removeClass("make-compact");
    $('.item-list .add-desc-box').removeClass("col-sm-9");
    $('.item-list .add-desc-box').addClass("col-sm-7");
  });

  jQuery(document).ready(function($){
  var $form_modal = $('.cd-user-modal'),
    $form_login = $form_modal.find('#cd-login'),
    $form_signup = $form_modal.find('#cd-signup'),
    $form_forgot_password = $form_modal.find('#cd-reset-password'),
    $form_modal_tab = $('.cd-switcher'),
    $tab_login = $form_modal_tab.children('li').eq(0).children('a'),
    $tab_signup = $form_modal_tab.children('li').eq(1).children('a'),
    $forgot_password_link = $form_login.find('.cd-form-bottom-message a'),
    $back_to_login_link = $form_forgot_password.find('.cd-form-bottom-message a');


  //switch from a tab to another
  $form_modal_tab.on('click', function(event) {
    event.preventDefault();
    ( $(event.target).is( $tab_login ) ) ? login_selected() : signup_selected();
  });

  //show forgot-password form 
  $forgot_password_link.on('click', function(event){
    event.preventDefault();
    forgot_password_selected();
  });

  //back to login from the forgot-password form
  $back_to_login_link.on('click', function(event){
    event.preventDefault();
    login_selected();
  });

  function login_selected(){
    $form_login.addClass('is-selected');
    $form_signup.removeClass('is-selected');
    $form_forgot_password.removeClass('is-selected');
    $tab_login.addClass('selected');
    $tab_signup.removeClass('selected');
  }

  function signup_selected(){
    $form_login.removeClass('is-selected');
    $form_signup.addClass('is-selected');
    $form_forgot_password.removeClass('is-selected');
    $tab_login.removeClass('selected');
    $tab_signup.addClass('selected');
  }

  function forgot_password_selected(){
    $form_login.removeClass('is-selected');
    $form_signup.removeClass('is-selected');
    $form_forgot_password.addClass('is-selected');
  }

});

//quick enquery form

  $(document).ready(function() {
    $('#contact_form').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            first_name: {
                validators: {
                        stringLength: {
                        min: 2,
                    },
                        notEmpty: {
                        message: 'Please supply your first name'
                    }
                }
            },
             last_name: {
                validators: {
                     stringLength: {
                        min: 2,
                    },
                    notEmpty: {
                        message: 'Please supply your last name'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'Please supply your email address'
                    },
                    emailAddress: {
                        message: 'Please supply a valid email address'
                    }
                }
            },
            phone: {
                validators: {
                    notEmpty: {
                        message: 'Please supply your phone number'
                    },
                    phone: {
                        country: 'US',
                        message: 'Please supply a vaild phone number with area code'
                    }
                }
            },
            address: {
                validators: {
                     stringLength: {
                        min: 8,
                    },
                    notEmpty: {
                        message: 'Please supply your street address'
                    }
                }
            },
            city: {
                validators: {
                     stringLength: {
                        min: 4,
                    },
                    notEmpty: {
                        message: 'Please supply your city'
                    }
                }
            },
            state: {
                validators: {
                    notEmpty: {
                        message: 'Please select your state'
                    }
                }
            },
            zip: {
                validators: {
                    notEmpty: {
                        message: 'Please supply your zip code'
                    },
                    zipCode: {
                        country: 'US',
                        message: 'Please supply a vaild zip code'
                    }
                }
            },
            comment: {
                validators: {
                      stringLength: {
                        min: 10,
                        max: 200,
                        message:'Please enter at least 10 characters and no more than 200'
                    },
                    notEmpty: {
                        message: 'Please supply a description of your project'
                    }
                    }
                }
            }
        })
        .on('success.form.bv', function(e) {
            $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                $('#contact_form').data('bootstrapValidator').resetForm();

            // Prevent form submission
            e.preventDefault();

            // Get the form instance
            var $form = $(e.target);

            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');

            // Use Ajax to submit form data
            $.post($form.attr('action'), $form.serialize(), function(result) {
                console.log(result);
            }, 'json');
        });
});

//accordian

$(document).ready(function() {
  $('.collapse.in').prev('.panel-heading').addClass('active');
  $('#accordion, #bs-collapse')
    .on('show.bs.collapse', function(a) {
      $(a.target).prev('.panel-heading').addClass('active');
    })
    .on('hide.bs.collapse', function(a) {
      $(a.target).prev('.panel-heading').removeClass('active');
    });
});

//multiple image corusal

$('.carousel[data-type="multi"] .item').each(function() {
  var next = $(this).next();
  if (!next.length) {
    next = $(this).siblings(':first');
  }
  next.children(':first-child').clone().appendTo($(this));

  for (var i = 0; i < 2; i++) {
    next = next.next();
    if (!next.length) {
      next = $(this).siblings(':first');
    }

    next.children(':first-child').clone().appendTo($(this));
  }
});

//tabfor products

function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();


var url = window.location;

// Will also work for relative and absolute hrefs
$('ul.nav a').filter(function() {
    return this.href == url;
}).parent().addClass('active');