<table class="table table-responsive" id="ctStudents-table">
    <thead>
     <tr>
        <th>Contact Id</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Gender</th>
        <th>IU User Name</th>
        <th>Email</th>
        <th>Join Date</th>
        <th>School</th>
        <th>Academic Career</th>
        <th>Academic Standing</th>
        <th>Ethnicity</th>
        <th colspan="3">Action</th>
     </tr>
    </thead>
    <tbody>
    @foreach($ctStudents as $ctStudent)
        <tr>
            <td>{!! $ctStudent->contact_id !!}</td>
            <td>{!! $ctStudent->contact->first_name !!}</td>
            <td>{!! $ctStudent->contact->last_name !!}</td>
            <td>{!! $ctStudent->contact->gender !!}</td>
            <td>{!! $ctStudent->contact->iu_user !!}</td>
            <td>{!! $ctStudent->contact->email !!}</td>
            <td>{!! $ctStudent->contact->join_date !!}</td>
            <td>{!! $ctStudent->school !!}</td>
            <td>{!! $ctStudent->academic_career !!}</td>
            <td>{!! $ctStudent->academic_standing !!}</td>
            <td>{!! $ctStudent->ethnicity !!}</td>
            <td>
                 <a href="{{ route('admin.ctStudents.show', $ctStudent->id) }}">
                     <i class="material-icons text-primary leftsize" title="view ctStudent">info</i>
                 </a>
                 <a href="{{ route('admin.ctStudents.edit', $ctStudent->id) }}">
                     <i class="material-icons text-warning leftsize" title="edit ctStudent">edit</i>
                 </a>
                 <a href="{{ route('admin.ctStudents.confirm-delete', $ctStudent->id) }}" data-toggle="modal" data-target="#delete_confirm">
                     <i class="material-icons text-danger leftsize" title="delete ctStudent">delete</i>
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
