@extends('layouts.admin')
@section('content')
@can('invoice_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.invoices.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.invoice.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.invoice.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Invoice">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.invoice.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.invoice.fields.serial') }}
                        </th>
                        <th>
                            {{ trans('cruds.invoice.fields.number') }}
                        </th>
                        <th>
                            {{ trans('cruds.invoice.fields.discount') }}
                        </th>
                        <th>
                            {{ trans('cruds.invoice.fields.status') }}
                        </th>
                        <th>
                            {{ trans('cruds.invoice.fields.active') }}
                        </th>
                        <th>
                            {{ trans('cruds.invoice.fields.address') }}
                        </th>
                        <th>
                            {{ trans('cruds.invoice.fields.user') }}
                        </th>
                        <th>
                            {{ trans('cruds.user.fields.email') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($invoices as $key => $invoice)
                        <tr data-entry-id="{{ $invoice->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $invoice->id ?? '' }}
                            </td>
                            <td>
                                {{ $invoice->serial ?? '' }}
                            </td>
                            <td>
                                {{ $invoice->number ?? '' }}
                            </td>
                            <td>
                                {{ $invoice->discount ?? '' }}
                            </td>
                            <td>
                                {{ App\Models\Invoice::STATUS_SELECT[$invoice->status] ?? '' }}
                            </td>
                            <td>
                                <span style="display:none">{{ $invoice->active ?? '' }}</span>
                                <input type="checkbox" disabled="disabled" {{ $invoice->active ? 'checked' : '' }}>
                            </td>
                            <td>
                                {{ $invoice->address ?? '' }}
                            </td>
                            <td>
                                {{ $invoice->user->name ?? '' }}
                            </td>
                            <td>
                                {{ $invoice->user->email ?? '' }}
                            </td>
                            <td>
                                @can('invoice_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.invoices.show', $invoice->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('invoice_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.invoices.edit', $invoice->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('invoice_delete')
                                    <form action="{{ route('admin.invoices.destroy', $invoice->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('invoice_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.invoices.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-Invoice:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection