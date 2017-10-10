<li class="{{ Request::is('ctContacts*') ? 'active' : '' }}">
    <a href="{!! route('admin.ctContacts.index') !!}">
    <i class="material-icons text-primary leftsize">build</i>
               CtContacts
    </a>
</li>

<li class="{{ Request::is('ctStudents*') ? 'active' : '' }}">
    <a href="{!! route('admin.ctStudents.index') !!}">
    <i class="material-icons text-primary leftsize">build</i>
               CtStudents
    </a>
</li>

<li class="{{ Request::is('ctMajors*') ? 'active' : '' }}">
    <a href="{!! route('admin.ctMajors.index') !!}">
    <i class="material-icons text-primary leftsize">build</i>
               CtMajors
    </a>
</li>

<li class="{{ Request::is('ctStudentMajors*') ? 'active' : '' }}">
    <a href="{!! route('admin.ctStudentMajors.index') !!}">
    <i class="material-icons text-primary leftsize">build</i>
               CtStudentMajors
    </a>
</li>

