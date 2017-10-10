<table class="table table-responsive" id="ctMajors-table">
    <thead>
     <tr>
        <th>Major</th>
        <th>Type</th>
        <th colspan="3">Action</th>
     </tr>
    </thead>
    <tbody>
    @foreach($ctMajors as $ctMajor)
        <tr>
            <td>{!! $ctMajor->major !!}</td>
            <td>{!! $ctMajor->type !!}</td>
            <td>
                 <a href="{{ route('admin.ctMajors.show', $ctMajor->id) }}">
                     <i class="material-icons text-primary leftsize" title="view ctMajor">info</i>
                 </a>
                 <a href="{{ route('admin.ctMajors.edit', $ctMajor->id) }}">
                     <i class="material-icons text-warning leftsize" title="edit ctMajor">edit</i>
                 </a>
                 <a href="{{ route('admin.ctMajors.confirm-delete', $ctMajor->id) }}" data-toggle="modal" data-target="#delete_confirm">
                     <i class="material-icons text-danger leftsize" title="delete ctMajor">delete</i>
                 </a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@section('footer_scripts')
    <div class="modal fade" id="delete_confirm" tabindex="-1" role="dialog" aria-labelledby="user_delete_confirm_title" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            </div>
        </div>
    </div>
    <script>$(function () {$('body').on('hidden.bs.modal', '.modal', function () {$(this).removeData('bs.modal');});});</script>
@stop
