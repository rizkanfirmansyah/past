@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{$titlePage ?? ''}}</h3>
                    <div class="d-flex flex-row-reverse bd-highlight">
                        <!-- <div class="p-2 bd-highlight">Flex item 1</div> -->
                        <button class="btn btn-primary"><i class="fas fa-plus mr-2"></i>Rank</button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12">
                                {{$dataTable->table()}}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</div>
@endsection

@push('scripts')
{{$dataTable->scripts()}}
@endpush