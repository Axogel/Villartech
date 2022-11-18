{{-- Global --}}
<script src="{{ asset('/plugins/global/plugins.bundle.js') }}"></script>
<script src="{{ asset('/js/scripts.bundle.js') }}"></script>
<script>
    @if(session()->has('feedback'))
        @php $feedback = session()->get('feedback'); @endphp

        @if(session()->get('feedback.type') == 'toastr')
            toastr.{{ $feedback['action'] }}('{{ $feedback["message"] }}')
        @else
            swal(
                '{{ $feedback["message"] }}',
                '{{ $feedback["action"] }}'
            )
        @endif
    @endif
</script>

{{-- Quill --}}
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

{{-- Custom --}}
<script src="{{ asset('/js/custom/widgets.js') }}"></script>
<script src="{{ asset('/js/custom/modals.js') }}"></script>
<script src="{{ asset('/js/custom/apps/chat/chat.js') }}"></script>
<script src="{{ asset('/js/custom/modals/create-app.js') }}"></script>

{{-- TinyMCE --}}
<script src="https://cdn.tiny.cloud/1/tjhhn0wa38v5gyiaf57bjtklp4fmg1qlelnmckc9auplzze9/tinymce/5/tinymce.min.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/29.1.0/classic/ckeditor.js"></script>

{{-- File Input --}}
<script src="{{ asset('/js/vendor/piexif.min.js') }}"></script>
<script src="{{ asset('/js/vendor/sortable.min.js') }}"></script>
<script src="{{ asset('/js/vendor/fileinput.min.js') }}"></script>
<script src="{{ asset('/js/vendor/theme.min.js') }}"></script>
<script src="{{ asset('/js/vendor/fileinput.es.js') }}"></script>

{{-- Dual Listbox --}}
<script src="{{ asset('/js/vendor/jquery.bootstrap-duallistbox.min.js?v=') . env('APP_VERSION') }}"></script>

{{-- DataTables --}}
<!-- <script>var HOST_URL = "/metronic/theme/html/tools/preview";</script> -->
<script src="{{ asset('/plugins/custom/datatables/datatables.bundle.js') }}"></script>
<script src="{{ asset('/js/pages/crud/datatables/extensions/index.js') }}"></script>

<!-- <script src="{{ asset('/js/pages/crud/datatables/extensions/buttons.js') }}"></script> -->
<script>

    $.extend( true, $.fn.dataTable.defaults, {
        dom:  $(location).attr("href").indexOf('dashboard') > -1 ? 'Brtip' : 'B<"toolbar">rtip',
        buttons: [
				        { extend: 'excelHtml5',
                  className: 'export_excel btn-bg-light btn-color-muted',
                  init: function(api, node, config) {
                    $(node).removeClass('btn-secondary')
                  }
                },
                { extend: 'csvHtml5',
                  className: 'export_csv btn-bg-light btn-color-muted',
                  init: function(api, node, config) {
                    $(node).removeClass('btn-secondary')
                  }
                },
                { extend: 'pdfHtml5',
                  className: 'export_pdf btn-bg-light btn-color-muted',
                  init: function(api, node, config) {
                    $(node).removeClass('btn-secondary')
                  }
                }
			]
    } );

    $('#export_excel').on('click', function(e) {
		e.preventDefault();
        $('.export_excel').click();
	});

	$('#export_csv').on('click', function(e) {
		e.preventDefault();
		$('.export_csv').click();
	});

	$('#export_pdf').on('click', function(e) {
		e.preventDefault();
		$('.export_pdf').click();
	});

</script>

{{-- Custom Scripts --}}
<script src="{{ asset('custom/js/main.js') }}"></script>
<script src="{{ asset('custom/js/fakit.js') }}"></script>
