<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Hello Toms </title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/sweetalert/dist/sweetalert.css">
  <script type="text/javascript" src="<?php echo base_url();?>assets/sweetalert/dist/sweetalert.min.js"></script>
  <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">

  <link href="<?php echo base_url();?>assets/fonts/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/css/animate.min.css" rel="stylesheet">

  <!-- Custom styling plus plugins -->
  <link href="<?php echo base_url();?>assets/css/custom.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/css/icheck/flat/green.css" rel="stylesheet">
  <!-- editor -->
  <link href="http://netdna.bootstrapcdn.com/font-awesome/3.0.2/css/font-awesome.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/css/editor/external/google-code-prettify/prettify.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/css/editor/index.css" rel="stylesheet">
  <!-- select2 -->
  <link href="<?php echo base_url();?>assets/css/select/select2.min.css" rel="stylesheet">
  <!-- switchery -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/switchery/switchery.min.css" />
  <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/custom.js"></script>
</head>


<body class="nav-md">

  <div class="container body">


    <div class="main_container">

      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">

          <?php $this->load->view('tampilan_menu');?>

          <!-- /menu footer buttons -->
          
          <!-- /menu footer buttons -->
        </div>
      </div>

      <!-- top navigation -->
      <div class="top_nav">

        <div class="nav_menu">
          <nav class="" role="navigation">
            <div class="nav toggle">
              <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
              <li class="">
                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                  <img src="<?php echo base_url();?>assets/images/user.png" alt=""><?php echo $this->session->userdata('username');?>
                  <span class=" fa fa-angle-down"></span>
                </a>
                <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                  <li class=""><a href="<?php echo base_url();?>index.php/admin">  Profile</a>
                  </li>
                 
                  
                  <li><a href="<?php echo base_url();?>/index.php/home/logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                  </li>
                </ul>
              </li>   
            </ul>
          </nav>
        </div>

      </div>
      <!-- /top navigation -->


      <!-- page content -->
      <div class="right_col" role="main">
        <!-- top tiles -->
        <?php $this->load->view($content);?>
        

        </div>
        <!-- /top tiles -->

        

          
        
        <!-- /footer content -->
      </div>
      <!-- /page content -->

    </div>

  </div>

  <div id="custom_notifications" class="custom-notifications dsp_none">
    <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
    </ul>
    <div class="clearfix"></div>
    <div id="notif-group" class="tabbed_notifications"></div>
  </div>

  <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

  <!-- gauge js -->
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/gauge/gauge.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/gauge/gauge_demo.js"></script>
  <!-- bootstrap progress js -->
  <script src="<?php echo base_url();?>assets/js/progressbar/bootstrap-progressbar.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/nicescroll/jquery.nicescroll.min.js"></script>
  <!-- icheck -->
  <script src="<?php echo base_url();?>assets/js/icheck/icheck.min.js"></script>
  <!-- daterangepicker -->
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/moment/moment.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/datepicker/daterangepicker.js"></script>
  <!-- chart js -->
  <script src="<?php echo base_url();?>assets/js/chartjs/chart.min.js"></script>

  <script src="<?php echo base_url();?>assets/js/custom.js"></script>

  <!-- flot js -->
  <!--[if lte IE 8]><script type="text/javascript" src="js/excanvas.min.js"></script><![endif]-->
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/flot/jquery.flot.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/flot/jquery.flot.pie.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/flot/jquery.flot.orderBars.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/flot/jquery.flot.time.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/flot/date.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/flot/jquery.flot.spline.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/flot/jquery.flot.stack.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/flot/curvedLines.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/flot/jquery.flot.resize.js"></script>
  <script>
    $(document).ready(function() {
      // [17, 74, 6, 39, 20, 85, 7]
      //[82, 23, 66, 9, 99, 6, 2]
      var data1 = [
        [gd(2012, 1, 1), 17],
        [gd(2012, 1, 2), 74],
        [gd(2012, 1, 3), 6],
        [gd(2012, 1, 4), 39],
        [gd(2012, 1, 5), 20],
        [gd(2012, 1, 6), 85],
        [gd(2012, 1, 7), 7]
      ];

      var data2 = [
        [gd(2012, 1, 1), 82],
        [gd(2012, 1, 2), 23],
        [gd(2012, 1, 3), 66],
        [gd(2012, 1, 4), 9],
        [gd(2012, 1, 5), 119],
        [gd(2012, 1, 6), 6],
        [gd(2012, 1, 7), 9]
      ];
      $("#canvas_dahs").length && $.plot($("#canvas_dahs"), [
        data1, data2
      ], {
        series: {
          lines: {
            show: false,
            fill: true
          },
          splines: {
            show: true,
            tension: 0.4,
            lineWidth: 1,
            fill: 0.4
          },
          points: {
            radius: 0,
            show: true
          },
          shadowSize: 2
        },
        grid: {
          verticalLines: true,
          hoverable: true,
          clickable: true,
          tickColor: "#d5d5d5",
          borderWidth: 1,
          color: '#fff'
        },
        colors: ["rgba(38, 185, 154, 0.38)", "rgba(3, 88, 106, 0.38)"],
        xaxis: {
          tickColor: "rgba(51, 51, 51, 0.06)",
          mode: "time",
          tickSize: [1, "day"],
          //tickLength: 10,
          axisLabel: "Date",
          axisLabelUseCanvas: true,
          axisLabelFontSizePixels: 12,
          axisLabelFontFamily: 'Verdana, Arial',
          axisLabelPadding: 10
            //mode: "time", timeformat: "%m/%d/%y", minTickSize: [1, "day"]
        },
        yaxis: {
          ticks: 8,
          tickColor: "rgba(51, 51, 51, 0.06)",
        },
        tooltip: false
      });

      function gd(year, month, day) {
        return new Date(year, month - 1, day).getTime();
      }
    });
  </script>

  
  <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

  <!-- bootstrap progress js -->
  <script src="<?php echo base_url();?>assets/js/progressbar/bootstrap-progressbar.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/nicescroll/jquery.nicescroll.min.js"></script>
  <!-- icheck -->
  <script src="<?php echo base_url();?>assets/js/icheck/icheck.min.js"></script>
  <!-- tags -->
  <script src="<?php echo base_url();?>assets/js/tags/jquery.tagsinput.min.js"></script>
  <!-- switchery -->
  <script src="<?php echo base_url();?>assets/js/switchery/switchery.min.js"></script>
  <!-- daterangepicker -->
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/moment/moment.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/datepicker/daterangepicker.js"></script>
  <!-- richtext editor -->
  <script src="<?php echo base_url();?>assets/js/editor/bootstrap-wysiwyg.js"></script>
  <script src="<?php echo base_url();?>assets/js/editor/external/jquery.hotkeys.js"></script>
  <script src="<?php echo base_url();?>assets/js/editor/external/google-code-prettify/prettify.js"></script>
  <!-- select2 -->
  <script src="<?php echo base_url();?>assets/js/select/select2.full.js"></script>
  <!-- form validation -->
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/parsley/parsley.min.js"></script>
  <!-- textarea resize -->
  <script src="<?php echo base_url();?>assets/js/textarea/autosize.min.js"></script>
  <script>
    autosize($('.resizable_textarea'));
  </script>
  <!-- Autocomplete -->
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/autocomplete/countries.js"></script>
  <script src="<?php echo base_url();?>assets/js/autocomplete/jquery.autocomplete.js"></script>
  <!-- pace -->
  <script src="<?php echo base_url();?>assets/js/pace/pace.min.js"></script>
  <script type="text/javascript">
    $(function() {
      'use strict';
      var countriesArray = $.map(countries, function(value, key) {
        return {
          value: value,
          data: key
        };
      });
      // Initialize autocomplete with custom appendTo:
      $('#autocomplete-custom-append').autocomplete({
        lookup: countriesArray,
        appendTo: '#autocomplete-container'
      });
    });
  </script>
  <script src="<?php echo base_url();?>assets/js/custom.js"></script>


  <!-- select2 -->
  <script>
    $(document).ready(function() {
      $(".select2_single").select2({
        placeholder: "Select a state",
        allowClear: true
      });
      $(".select2_group").select2({});
      $(".select2_multiple").select2({
        maximumSelectionLength: 4,
        placeholder: "With Max Selection limit 4",
        allowClear: true
      });
    });
  </script>
  <!-- /select2 -->
  <!-- input tags -->
  <script>
    function onAddTag(tag) {
      alert("Added a tag: " + tag);
    }

    function onRemoveTag(tag) {
      alert("Removed a tag: " + tag);
    }

    function onChangeTag(input, tag) {
      alert("Changed a tag: " + tag);
    }

    $(function() {
      $('#tags_1').tagsInput({
        width: 'auto'
      });
    });
  </script>
  <!-- /input tags -->
  <!-- form validation -->
  <script type="text/javascript">
    $(document).ready(function() {
      $.listen('parsley:field:validate', function() {
        validateFront();
      });
      $('#demo-form .btn').on('click', function() {
        $('#demo-form').parsley().validate();
        validateFront();
      });
      var validateFront = function() {
        if (true === $('#demo-form').parsley().isValid()) {
          $('.bs-callout-info').removeClass('hidden');
          $('.bs-callout-warning').addClass('hidden');
        } else {
          $('.bs-callout-info').addClass('hidden');
          $('.bs-callout-warning').removeClass('hidden');
        }
      };
    });

    $(document).ready(function() {
      $.listen('parsley:field:validate', function() {
        validateFront();
      });
      $('#demo-form2 .btn').on('click', function() {
        $('#demo-form2').parsley().validate();
        validateFront();
      });
      var validateFront = function() {
        if (true === $('#demo-form2').parsley().isValid()) {
          $('.bs-callout-info').removeClass('hidden');
          $('.bs-callout-warning').addClass('hidden');
        } else {
          $('.bs-callout-info').addClass('hidden');
          $('.bs-callout-warning').removeClass('hidden');
        }
      };
    });
    try {
      hljs.initHighlightingOnLoad();
    } catch (err) {}
  </script>
  <!-- /form validation -->
  <!-- editor -->
  <script>
    $(document).ready(function() {
      $('.xcxc').click(function() {
        $('#descr').val($('#editor').html());
      });
    });

    $(function() {
      function initToolbarBootstrapBindings() {
        var fonts = ['Serif', 'Sans', 'Arial', 'Arial Black', 'Courier',
            'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Lucida Grande', 'Lucida Sans', 'Tahoma', 'Times',
            'Times New Roman', 'Verdana'
          ],
          fontTarget = $('[title=Font]').siblings('.dropdown-menu');
        $.each(fonts, function(idx, fontName) {
          fontTarget.append($('<li><a data-edit="fontName ' + fontName + '" style="font-family:\'' + fontName + '\'">' + fontName + '</a></li>'));
        });
        $('a[title]').tooltip({
          container: 'body'
        });
        $('.dropdown-menu input').click(function() {
            return false;
          })
          .change(function() {
            $(this).parent('.dropdown-menu').siblings('.dropdown-toggle').dropdown('toggle');
          })
          .keydown('esc', function() {
            this.value = '';
            $(this).change();
          });

        $('[data-role=magic-overlay]').each(function() {
          var overlay = $(this),
            target = $(overlay.data('target'));
          overlay.css('opacity', 0).css('position', 'absolute').offset(target.offset()).width(target.outerWidth()).height(target.outerHeight());
        });
        if ("onwebkitspeechchange" in document.createElement("input")) {
          var editorOffset = $('#editor').offset();
          $('#voiceBtn').css('position', 'absolute').offset({
            top: editorOffset.top,
            left: editorOffset.left + $('#editor').innerWidth() - 35
          });
        } else {
          $('#voiceBtn').hide();
        }
      };

      function showErrorAlert(reason, detail) {
        var msg = '';
        if (reason === 'unsupported-file-type') {
          msg = "Unsupported format " + detail;
        } else {
          console.log("error uploading file", reason, detail);
        }
        $('<div class="alert"> <button type="button" class="close" data-dismiss="alert">&times;</button>' +
          '<strong>File upload error</strong> ' + msg + ' </div>').prependTo('#alerts');
      };
      initToolbarBootstrapBindings();
      $('#editor').wysiwyg({
        fileUploadError: showErrorAlert
      });
      window.prettyPrint && prettyPrint();
    });
  </script>
  <script>
    NProgress.done();
  </script>
  
  <!-- /datepicker -->
  <!-- /footer content -->
</body>

</html>
