<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Namkien Logistic</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback')">
  <!-- Font Awesome -->
  
  <link rel="stylesheet" href="{{ asset('css/fontawesome-free/css/all.min.css')}}">
  <!-- daterange picker -->
  <link rel="stylesheet" href="{{ asset('css') }}/daterangepicker.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="{{ asset('css') }}/icheck-bootstrap.min.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="{{ asset('css') }}/bootstrap-colorpicker.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('css') }}/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="{{ asset('css') }}/select2.min.css">
  <link rel="stylesheet" href="{{ asset('css') }}/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="{{ asset('css') }}/bootstrap-duallistbox.min.css">
  <!-- BS Stepper -->
  <link rel="stylesheet" href="{{ asset('css') }}/bs-stepper.min.css">
  <!-- dropzonejs -->
  <link rel="stylesheet" href="{{ asset('css') }}/dropzone.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('css') }}/adminlte.min.css">
  <!-- update-->
  <link rel="stylesheet" href="{{ asset('css') }}/timeline.css">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="{{ asset('css') }}summernote-bs4.min.css">
  <!-- SimpleMDE -->
  <link rel="stylesheet" href="{{ asset('css') }}simplemde.min.css">
</head>
<body class="hold-transition layout-top-nav">
    <div class="wrapper">
    
      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand-md navbar-dark fixed-top">
        <div class="container-fluid">
           <a class="navbar-brand" href="#">
            NamKien Logistic
          </a>
    
          <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
    
          <div class="collapse navbar-collapse order-3" id="navbarCollapse">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
              <li class="nav-item">
                <a href="#" class="nav-link"><i class="nav-icon fas fa-tachometer-alt"></i> Th???ng k??</a>
              </li>
              <li class="nav-item dropdown">
                <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle"><i class="nav-icon fas fa-file"></i> Qu???n l?? ????n h??ng</a>
                <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                  <li><a href="#" class="dropdown-item">T???o ????n H??ng M???i <span class="badge badge-warning badge-pill">99</span></a></li>
                  <li><a href="#" class="dropdown-item">T???t C??? ????n H??ng <span class="badge badge-warning badge-pill">99</span></a></li>
                  <li><a href="#" class="dropdown-item">Ch??? ?????t C???c <span class="badge badge-warning badge-pill">99</span></a></li>
                  <li><a href="#" class="dropdown-item">???? ?????t C???c <span class="badge badge-warning badge-pill">99</span></a></li>
                  <li><a href="#" class="dropdown-item">??ang Mua H??ng <span class="badge badge-warning badge-pill">99</span></a></li>
                  <li><a href="#" class="dropdown-item">Ng?????i B??n Ship <span class="badge badge-warning badge-pill">99</span></a></li>
                  <li><a href="#" class="dropdown-item">???? ?????n Kho Trung Qu???c <span class="badge badge-warning badge-pill">99</span></a></li>
                  <li><a href="#" class="dropdown-item">??ang Ship V??? Vi???t Nam <span class="badge badge-warning badge-pill">99</span></a></li>
                  <li><a href="#" class="dropdown-item">???? ?????n Kho Vi???t Nam <span class="badge badge-warning badge-pill">99</span></a></li> 
                  <li><a href="#" class="dropdown-item">??ang Ship <span class="badge badge-warning badge-pill">99</span></a></li> 
                  <li><a href="#" class="dropdown-item">Ho??n Th??nh <span class="badge badge-warning badge-pill">99</span></a></li> 
                  <li><a href="#" class="dropdown-item">Hu??? <span class="badge badge-warning badge-pill">99</span></a></li>                                  
                  <!-- End Level two -->
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle"><i class="nav-icon fas fa-users"></i>  Ng?????i d??ng</a>
                <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                  <li><a href="#" class="dropdown-item">Ng?????i d??ng h??? th???ng</a></li>
                  <li><a href="#" class="dropdown-item">Kh??ch h??ng</a></li>
                 
                  <!-- End Level two -->
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle"><i class="nav-icon fas fa-columns"></i> Ki???n h??ng</a>
                <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                  <li><a href="#" class="dropdown-item">T???t c??? ki???n h??ng</a></li>
                             
                  <!-- End Level two -->
                </ul>
              </li>
              
              <li class="nav-item dropdown">
                <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle"><i class="nav-icon fas nav-icon fas fa-th"></i>  Kho Trung Qu???c</a>
                <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">            
                  <li><a href="#" class="dropdown-item">Phi???u nh???p kho</a></li>             
                  <li><a href="#" class="dropdown-item">Danh s??ch bao</a></li>             
                  <li><a href="#" class="dropdown-item">Nh???p xu???t nhanh</a></li>             
                  <li><a href="#" class="dropdown-item">????n k?? g???i</a></li>             
                  <!-- End Level two -->
                </ul>
              </li>
               <li class="nav-item dropdown">
                <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle"><i class="nav-icon fas nav-icon fas fa-th"></i>  Kho Vi???t Nam</a>
                <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                  <li><a href="#" class="dropdown-item">Nh???p kho</a></li>               
                  <li><a href="#" class="dropdown-item">Ch??? xu???t</a></li>               
                  <li><a href="#" class="dropdown-item">Phi???u xu???t kho</a></li>               
                  <!-- End Level two -->
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link"><i class="nav-icon fas fa-wallet"></i> Qu???n l?? ngo???i t???</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link"><i class="nav-icon fas fa-bell"></i>  Th??ng b??o</a>
              </li>
               <li class="nav-item">
                <a href="#" class="nav-link"><i class="nav-icon fas fa-chart-pie"></i>  ????n k?? g???i</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link"><i class="nav-icon fas fa-copy"></i>  Khi???u n???i</a>
              </li>
              <li class="nav-item ">
                <a href="#" class="nav-link"><i class="nav-icon fas fa-cogs"></i>  C???u h??nh</a>
              </li>
              <li class="nav-item dropdown ">
                <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fas fa-user fa-fw"></i> L?? T??n</a>
                <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                  <li><a href="#" class="dropdown-item">C??i ?????t</a></li>
                  <li><a href="#" class="dropdown-item">T??i Kho???n</a></li>
                  <li><hr class="dropdown-divider" /></li>
                  <li><a href="#" class="dropdown-item">????ng Xu???t</a></li>                
                  <!-- End Level two -->
                </ul>
              </li>
            </ul>
            </form>
          </div>
        </div>
      </nav>
      <!-- /.navbar -->
      @yield('content')   
    <script src="{{ asset('js/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('js/bootstrap.bundle.min.js')}}"></script>
    <!-- Select2 -->
    <script src="{{ asset('js/select2.full.min.js')}}"></script>
    <!-- Bootstrap4 Duallistbox -->
    <script src="{{ asset('js/jquery.bootstrap-duallistbox.min.js')}}"></script>
    <!-- InputMask -->
    <script src="{{ asset('js/moment.min.js')}}"></script>
    <script src="{{ asset('js/jquery.inputmask.min.js')}}"></script>
    <!-- date-range-picker -->
    <script src="{{ asset('js/daterangepicker.js')}}"></script>
    <!-- bootstrap color picker -->
    <script src="{{ asset('js/bootstrap-colorpicker.min.js')}}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ asset('js/tempusdominus-bootstrap-4.min.js')}}"></script>
    <!-- Bootstrap Switch -->
    <script src="{{ asset('js/bootstrap-switch.min.js')}}"></script>
    <!-- BS-Stepper -->
    <script src="{{ asset('js/bs-stepper.min.js')}}"></script>
    <!-- dropzonejs -->
    <script src="{{ asset('js/dropzone.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('js/templatelte.min.js')}}"></script>
    <!-- Summernote -->
    <script src="{{ asset('js/summernote-bs4.min.js')}}"></script>
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });

    //Date and time picker
    $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })

    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    })

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    })

  })
  // BS-Stepper Init
  document.addEventListener('DOMContentLoaded', function () {
    window.stepper = new Stepper(document.querySelector('.bs-stepper'))
  })

  // DropzoneJS Demo Code Start
  Dropzone.autoDiscover = false

  // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
  var previewNode = document.querySelector("#template")
  previewNode.id = ""
  var previewTemplate = previewNode.parentNode.innerHTML
  previewNode.parentNode.removeChild(previewNode)

  var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
    url: "/target-url", // Set the url
    thumbnailWidth: 80,
    thumbnailHeight: 80,
    parallelUploads: 20,
    previewTemplate: previewTemplate,
    autoQueue: false, // Make sure the files aren't queued until manually added
    previewsContainer: "#previews", // Define the container to display the previews
    clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
  })

  myDropzone.on("addedfile", function(file) {
    // Hookup the start button
    file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file) }
  })

  // Update the total progress bar
  myDropzone.on("totaluploadprogress", function(progress) {
    document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
  })

  myDropzone.on("sending", function(file) {
    // Show the total progress bar when upload starts
    document.querySelector("#total-progress").style.opacity = "1"
    // And disable the start button
    file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
  })

  // Hide the total progress bar when nothing's uploading anymore
  myDropzone.on("queuecomplete", function(progress) {
    document.querySelector("#total-progress").style.opacity = "0"
  })

  // Setup the buttons for all transfers
  // The "add files" button doesn't need to be setup because the config
  // `clickable` has already been specified.
  document.querySelector("#actions .start").onclick = function() {
    myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
  }
  document.querySelector("#actions .cancel").onclick = function() {
    myDropzone.removeAllFiles(true)
  }

</script>
<script>
  $(function () {
    // Summernote
    $('#summernote').summernote()

    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",
      theme: "monokai"
    });
  })
</script>
</body>
</html>