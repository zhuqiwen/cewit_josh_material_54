<table class="table table-responsive" id="ctContacts-table">
    <thead>
     <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Gender</th>
        <th>Iu User</th>
        <th>Email</th>
        <th>Is Test</th>
        <th>Join Date</th>
        <th colspan="3">Action</th>
     </tr>
    </thead>
    <tbody>
    @foreach($ctContacts as $ctContact)
        <tr>
            <td>{!! $ctContact->first_name !!}</td>
            <td>{!! $ctContact->last_name !!}</td>
            <td>{!! $ctContact->gender !!}</td>
            <td>{!! $ctContact->iu_user !!}</td>
            <td>{!! $ctContact->email !!}</td>
            <td>{!! $ctContact->is_test !!}</td>
            <td>{!! $ctContact->join_date !!}</td>
            <td>
                 <a href="{{ route('admin.ctContacts.show', $ctContact->id) }}">
                     <i class="material-icons text-primary leftsize" title="view ctContact">info</i>
                 </a>
                 <a href="{{ route('admin.ctContacts.edit', $ctContact->id) }}">
                     <i class="material-icons text-warning leftsize" title="edit ctContact">edit</i>
                 </a>
                 <a href="{{ route('admin.ctContacts.confirm-delete', $ctContact->id) }}" data-toggle="modal" data-target="#delete_confirm">
                     <i class="material-icons text-danger leftsize" title="delete ctContact">delete</i>
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
