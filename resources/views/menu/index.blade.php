<!-- Main Layout -->
@extends('layouts.main')
<!-- Additional css Content -->
@section('style')
    @include('partials.css');
@endsection

@section('content')
<!-- Main Content -->
<section class="section">
    <div class="section-header">
        <h1>Menu</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Components</a></div>
            <div class="breadcrumb-item">Hero</div>
        </div>
    </div>

    <div class="section-body">
        <h2 class="section-title">Menu</h2>
        <p class="section-lead">Components that can be used to make something bigger than the header.</p>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Basic DataTables</h4>
                        <div style="display: block; float: right; margin-left: auto;">
                            <a href="#" class="btn btn-icon icon-left btn-primary"><i class="fas fa-plus"></i> Add new</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover table-responsive-sm" id="table-1">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Parent</th>
                                        <th>Route</th>
                                        <th>Icon</th>
                                        <th>Status</th>
                                        <th>Read</th>
                                        <th>Add</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('script')
{{-- Additional JS --}}
@include('partials.js')

<script>
 var table = $("#table-1").dataTable({
    processing: true,
    serverSide: true,
    ajax: "{{ route('menu.index') }}",
    columns: [
        {data: 'DT_RowIndex'},
        {data: 'name_menu'},
        {data: 'position_menu'},
        {data: 'parent'},
        {data: 'route'},
        {data: 'icon'},
        {data: 'status', className : "text-center"},
        {data: 'read', className : "text-center"},
        {data: 'add', className : "text-center"},
        {data: 'edit', className : "text-center"},
        {data: 'delete', className : "text-center"},
        {data: 'action', orderable: false, searchable: false},
    ]
});
</script>
@endsection
