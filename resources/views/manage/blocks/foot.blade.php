<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
	$.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('dist/js/demo.js')}}"></script>
<!-- DataTables -->
<script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<!-- Select2 -->
<script src="{{asset('plugins/select2/js/select2.full.min.js')}}"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="{{asset('plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js')}}"></script>
<!-- InputMask -->
<script src="{{asset('plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('plugins/inputmask/min/jquery.inputmask.bundle.min.js')}}"></script>
<!-- date-range-picker -->
<script src="{{asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- bootstrap color picker -->
<script src="{{asset('plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')}}"></script>
<!-- Bootstrap Switch -->
<script src="{{asset('plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}"></script>
<!-- jquery-validation -->
<script src="{{asset('plugins/jquery-validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('plugins/jquery-validation/additional-methods.min.js')}}"></script>
<!-- Select2 -->
<script src="{{asset('plugins/select2/js/select2.full.min.js')}}"></script>
<script src="{{asset('jquery/jquery-3.5.1.min')}}"></script>
<script src="{{asset('ckeditor/ckeditor.js')}}"></script>
<!-- page script -->
<script>
	$(function () {
	  $("#example1").DataTable({
	    "responsive": true,
	    "autoWidth": false,
	  });
	  $('#example2').DataTable({
	    "paging": true,
	    "lengthChange": false,
	    "searching": false,
	    "ordering": true,
	    "info": true,
	    "autoWidth": false,
	    "responsive": true,
	  });
	});
</script>
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

	  //Date range picker
	  $('#reservationdate').datetimepicker({
	      format: 'L'
	  });
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
	  });

	  $("input[data-bootstrap-switch]").each(function(){
	    $(this).bootstrapSwitch('state', $(this).prop('checked'));
	  });

	})
</script>
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    // button create category
    $(document).on('click','.create-modal-category', function() {
        $('#create-category').modal('show');
        $('.form-horizontal').show();
        $('.modal-title').text('Add Category');
    });
    // button create author
    $(document).on('click','.create-modal-author', function() {
        $('#create-author').modal('show');
        $('.form-horizontal').show();
        $('.modal-title').text('Add Author');
    });
    // submit category
    $("#add-category").click(function(){
        var name = $("input[name=name]").val();
        var keyword = $("input[name=keyword]").val();
        var description = $("textarea[name=description]").val();
        // var description = $("input[name=description]").val();
        // var description = CKEDITOR.instances.description.getData();

        $.ajax({
        type:'POST',
        url:"{{ route('manage.category.store') }}",
        data:{name:name,keyword:keyword,description:description},
        success:function(data){
            if ((data.errors)) {
                    if(data.errors.name){
                        $('.error-name').removeClass('hidden');
                        $('.error-name').text(data.errors.name);
                    }else{
                        $('.error-description').addClass('hidden');
                    }
                    if(data.errors.keyword){
                        $('.error-keyword').removeClass('hidden');
                        $('.error-keyword').text(data.errors.keyword);
                    }else{
                        $('.error-description').addClass('hidden');
                    }
                    if(data.errors.description){
                        $('.error-description').removeClass('hidden');
                        $('.error-description').text(data.errors.description);
                    }else{
                        $('.error-description').addClass('hidden');
                    }
                } else {
                    $('.error').remove();
                    $('#table').append("<tr class='category" + data.id + "'>"+
                    "<td>" + data.id + "</td>"+
                    "<td>" + data.name + "</td>"+
                    "<td class='text-center py-0 align-middle'> <button class='edit-modal-category btn btn-info' data-id='" + data.id + "' data-name='" + data.name + "' data-keyword='" + data.keyword + "' data-description='" + data.description + "'>   <i class='fas fa-user-edit'></i></button> <button class='delete-modal-category btn btn-danger' data-id='" + data.id + "' data-name='" + data.name + "' data-keyword='" + data.keyword + "' data-description='" + data.description + "'>   <i class='fas fa-trash'></i></button> </td>"+
                    "</tr>");
                }
        },
        });
        $('#name').val('');
        $('#keyword').val('');
        $('#description').val('');
    });
    // submit author
    $("#add-author").click(function(){
        var name = $("input[name=name]").val();
        var keyword = $("input[name=keyword]").val();
        var description = $("textarea[name=description]").val();
        // var description = $("input[name=description]").val();
        // var description = CKEDITOR.instances.description.getData();

        $.ajax({
        type:'POST',
        url:"{{ route('manage.author.store') }}",
        data:{name:name,keyword:keyword,description:description},
        success:function(data){
            if ((data.errors)) {
                    if(data.errors.name){
                        $('.error-name').removeClass('hidden');
                        $('.error-name').text(data.errors.name);
                    }else{
                        $('.error-description').addClass('hidden');
                    }
                    if(data.errors.keyword){
                        $('.error-keyword').removeClass('hidden');
                        $('.error-keyword').text(data.errors.keyword);
                    }else{
                        $('.error-description').addClass('hidden');
                    }
                    if(data.errors.description){
                        $('.error-description').removeClass('hidden');
                        $('.error-description').text(data.errors.description);
                    }else{
                        $('.error-description').addClass('hidden');
                    }
                } else {
                    $('.error').remove();
                    $('#table').append("<tr class='author" + data.id + "'>"+
                    "<td>" + data.id + "</td>"+
                    "<td>" + data.name + "</td>"+
                    "<td class='text-center py-0 align-middle'> <button class='edit-modal-author btn btn-info' data-id='" + data.id + "' data-name='" + data.name + "' data-keyword='" + data.keyword + "' data-description='" + data.description + "'>   <i class='fas fa-user-edit'></i></button> <button class='delete-modal-author btn btn-danger' data-id='" + data.id + "' data-name='" + data.name + "' data-keyword='" + data.keyword + "' data-description='" + data.description + "'>   <i class='fas fa-trash'></i></button> </td>"+
                    "</tr>");
                }
        },
        });
        $('#name').val('');
        $('#keyword').val('');
        $('#description').val('');
    });
    // button edit category
    $(document).on('click', '.edit-modal-category', function() {
            $('#footer_action_button').text("Update Category");
            $('#footer_action_button').addClass('glyphicon-check');
            $('#footer_action_button').removeClass('glyphicon-trash');
            $('.actionBtn').addClass('btn-success');
            $('.actionBtn').removeClass('btn-danger');
            $('.actionBtn').addClass('edit-category');
            $('.modal-title').text('Category Edit');
            $('.deleteContent').hide();
            $('.form-horizontal').show();
            $('#fid').val($(this).data('id'));
            $('#n').val($(this).data('name'));
            $('#k').val($(this).data('keyword'));
            $('#d').val($(this).data('description'));
            $('#myModal-category').modal('show');
    });
    // button edit author
    $(document).on('click', '.edit-modal-author', function() {
            $('#footer_action_button').text("Update Author");
            $('#footer_action_button').addClass('glyphicon-check');
            $('#footer_action_button').removeClass('glyphicon-trash');
            $('.actionBtn').addClass('btn-success');
            $('.actionBtn').removeClass('btn-danger');
            $('.actionBtn').addClass('edit-author');
            $('.modal-title').text('Author Edit');
            $('.deleteContent').hide();
            $('.form-horizontal').show();
            $('#fid').val($(this).data('id'));
            $('#n').val($(this).data('name'));
            $('#k').val($(this).data('keyword'));
            $('#d').val($(this).data('description'));
            $('#myModal-author').modal('show');
    });
    // submit update category
    $('.modal-footer').on('click', '.edit-category', function() {
        var id = $("#fid").val();
        var name = $("#n").val();
        var keyword = $("#k").val();
        var description = $("textarea#d").val();
        // var description = CKEDITOR.instances.description.getData();
        $.ajax({
            type: 'POST',
            url: "{{route('manage.category.update')}}",
            data: {
                id:id,
                name:name,
                keyword:keyword,
                description:description
            },
            success: function(data) {
                // if ((data.errors)) {
                //     if(data.errors.name){
                //         $('.error-name').removeClass('hidden');
                //         $('.error-name').text(data.errors.name);
                //     }else{
                //         $('.error-description').addClass('hidden');
                //     }
                //     if(data.errors.keyword){
                //         $('.error-keyword').removeClass('hidden');
                //         $('.error-keyword').text(data.errors.keyword);
                //     }else{
                //         $('.error-description').addClass('hidden');
                //     }
                //     if(data.errors.description){
                //         $('.error-description').removeClass('hidden');
                //         $('.error-description').text(data.errors.description);
                //     }else{
                //         $('.error-description').addClass('hidden');
                //     }
                // } else {
                    // $('.error').remove();
                    $('.category' + data.id).replaceWith(" "+
                        "<tr class='category" + data.id + "'>"+
                        "<td>" + data.id + "</td>"+
                        "<td>" + data.name + "</td>"+
                        "<td class='text-center py-0 align-middle'> <button class='edit-modal-category btn btn-info' data-id='" + data.id + "' data-name='" + data.name + "' data-keyword='" + data.keyword + "' data-description='" + data.description + "'>   <i class='fas fa-user-edit'></i></button> <button class='delete-modal-category btn btn-danger' data-id='" + data.id + "' data-name='" + data.name + "' data-keyword='" + data.keyword + "' data-description='" + data.description + "'>   <i class='fas fa-trash'></i></button> </td>"+
                        "</tr>");
                    }
                // },
        });
        $('#name').val('');
        $('#keyword').val('');
        $('#description').val('');
    });
    // submit update author
    $('.modal-footer').on('click', '.edit-author', function() {
        var id = $("#fid").val();
        var name = $("#n").val();
        var keyword = $("#k").val();
        var description = $("textarea#d").val();
        $.ajax({
            type: 'POST',
            url: "{{route('manage.author.update')}}",
            data: {
                id:id,
                name:name,
                keyword:keyword,
                description:description
            },
            success: function(data) {
                $('.author' + data.id).replaceWith(" "+
                    "<tr class='author" + data.id + "'>"+
                    "<td>" + data.id + "</td>"+
                    "<td>" + data.name + "</td>"+
                    "<td class='text-center py-0 align-middle'> <button class='edit-modal-author btn btn-info' data-id='" + data.id + "' data-name='" + data.name + "' data-keyword='" + data.keyword + "' data-description='" + data.description + "'>   <i class='fas fa-user-edit'></i></button> <button class='delete-modal-author btn btn-danger' data-id='" + data.id + "' data-name='" + data.name + "' data-keyword='" + data.keyword + "' data-description='" + data.description + "'>   <i class='fas fa-trash'></i></button> </td>"+
                    "</tr>");
                }
        });
        $('#name').val('');
        $('#keyword').val('');
        $('#description').val('');
    });
    // form Delete category function
    $(document).on('click', '.delete-modal-category', function() {
        $('#footer_action_button').text(" Delete");
        $('#footer_action_button').removeClass('glyphicon-check');
        $('#footer_action_button').addClass('glyphicon-trash');
        $('.actionBtn').removeClass('btn-success');
        $('.actionBtn').addClass('btn-danger');
        $('.actionBtn').addClass('delete-category');
        $('.modal-title').text('Delete Category');
        $('.id').text($(this).data('id'));
        $('.deleteContent').show();
        $('.form-horizontal').hide();
        $('.title').html($(this).data('name'));
        $('#myModal-category').modal('show');
    });
    // form Delete author function
    $(document).on('click', '.delete-modal-author', function() {
            $('#footer_action_button').text(" Delete");
            $('#footer_action_button').removeClass('glyphicon-check');
            $('#footer_action_button').addClass('glyphicon-trash');
            $('.actionBtn').removeClass('btn-success');
            $('.actionBtn').addClass('btn-danger');
            $('.actionBtn').addClass('delete-author');
            $('.modal-title').text('Delete Author');
            $('.id').text($(this).data('id'));
            $('.deleteContent').show();
            $('.form-horizontal').hide();
            $('.title').html($(this).data('name'));
            $('#myModal-author').modal('show');
    });
      //delete category
    $('.modal-footer').on('click', '.delete-category', function(){
        $.ajax({
            type: 'POST',
            url: "{{ route('manage.category.destroy') }}",
            data: {
            'id': $('.id').text()
            },
            success: function(data){
                $('.category' + $('.id').text()).remove();
            }
        });
    });
    //delete author
    $('.modal-footer').on('click', '.delete-author', function(){
        $.ajax({
            type: 'POST',
            url: "{{ route('manage.author.destroy') }}",
            data: {
            'id': $('.id').text()
            },
            success: function(data){
                $('.author' + $('.id').text()).remove();
            }
        });
    });

    
</script>
