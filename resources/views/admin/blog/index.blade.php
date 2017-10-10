@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
    @lang('blog/title.bloglist')
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/dataTables.bootstrap.css') }}" />
    <link href="{{ asset('assets/css/pages/tables.css') }}" rel="stylesheet" type="text/css" />
@stop


{{-- Page content --}}
@section('content')
<section class="content-header">
    <h1>@lang('blog/title.blogs')</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('admin.dashboard') }}">
                <i class="material-icons breadmaterial">home</i>
                @lang('general.dashboard')
            </a>
        </li>
        <li><a href="#">@lang('blog/title.blog')</a></li>
        <li class="active">@lang('blog/title.bloglist')</li>
    </ol>
</section>

<!-- Main content -->
<section class="content paddingleft_right15">
    <div class="row">
        <div class="panel panel-primary ">
            <div class="panel-heading clearfix">
                <h4 class="panel-title pull-left">
                    <i class="material-icons fsize">people</i>
                    @lang('blog/title.bloglist')
                </h4>
                <div class="pull-right">
                    <a href="{{ URL::to('admin/blog/create') }}" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-plus"></span> @lang('button.create')</a>
                </div>
            </div>
            <br />
            <div class="panel-body">
                <div class="table-responsive">
                <table class="table table-bordered" id="table">
                    <thead>
                        <tr class="filters">
                            <th>@lang('blog/table.id')</th>
                            <th>@lang('blog/table.title')</th>
                            <th>@lang('blog/table.comments')</th>
                            <th>@lang('blog/table.created_at')</th>
                            <th>@lang('blog/table.actions')</th>
                        </tr>
                    </thead>
                    <tbody>
                    @if(!empty($blogs))
                        @foreach ($blogs as $blog)
                            <tr>
                                <td>{{ $blog->id }}</td>
                                <td>{{ $blog->title }}</td>
                                <td>{{ $blog->comments->count() }}</td>
                                <td>{{ $blog->created_at->diffForHumans() }}</td>
                                <td>
                                    <a href="{{ URL::to('admin/blog/' . $blog->id . '/show' ) }}"><i class="material-icons text-primary mate-icons" title="@lang('blog/table.view-blog-comment')">info</i> </a>

                                    <a href="{{ URL::to('admin/blog/' . $blog->id . '/edit' ) }}"><i class="material-icons text-warning mate-icons" title="@lang('blog/table.update-blog')">edit</i> </a>

                                    <a href="{{ route('admin.blog.confirm-delete', $blog->id) }}" data-toggle="modal"
                                       data-target="#delete_confirm"><i class="material-icons text-danger mate-icons" title="@lang('blog/table.delete-blog')">delete</i>
                                        </a>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>    <!-- row-->
</section>
@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/jquery.dataTables.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/dataTables.bootstrap.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('#table').DataTable();
        });
    </script>

<div class="modal fade" id="delete_confirm" tabindex="-1" role="dialog" aria-labelledby="user_delete_confirm_title" aria-hidden="true">
	<div class="modal-dialog">
    	<div class="modal-content"></div>
  </div>
</div>
<script>
$(function () {
	$('body').on('hidden.bs.modal', '.modal', function () {
		$(this).removeData('bs.modal');
	});
});
</script>
@stop
