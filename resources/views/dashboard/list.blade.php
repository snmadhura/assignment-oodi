@extends('layouts.app.default')
@section('content')
<div class="container">
    <div class="row padding-top-60 bg-white">
        <div class="col-4">
            <form method="post" action="{{ route('import-contacts') }}" id="import-contacts" enctype="multipart/form-data">
                <div class="form-group files">
                    <label>Upload Your File </label>
                    <input type="file" class="form-control" name="datafile" >
                </div>
                {{csrf_field()}}
                <div class="form-group">
                    <input type="submit" class="btn btn-primary btn-block upload-contacts" value="Upload">
                </div>
            </form>
            <center>
                <a href="/files/sample-file.csv" class="btn btn-success btn-large" target="_blank">Download Sample</a>
            </center>
        </div>
        <div class="col-8">
            @if ($message = Session::get('success'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('success') }}
            </div>
            @endif

            @if ($message = Session::get('error'))
            <div class="alert alert-danger" role="alert">
                {{ Session::get('error') }}
            </div>
            @endif
            <table class="table table-striped" id="contacts-table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    @if($mycontacts)
                    @foreach($mycontacts AS $contacts)
                    <tr>
                        <td>{{$contacts->contactname}}</td>
                        <td>{{$contacts->contactphone}}</td>
                        <td>{{\Carbon\Carbon::parse($contacts->created_at)->format('d/m/Y')}}</td>
                    </tr>
                    @endforeach
                    @else
                    <tr>
                        <td colspan="3" class="text-center"><h6>Sorry you have no contacts</h6></td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@section('page-script')
<script type="text/javascript">
$(function() {
    $('.upload-contacts').on('click', function(){
        $.ajax({
            type: "POST",
            url: "{{ route('import-contacts') }}",
            success: function(data) {
                console.log(data)
            }
        });
    });

    $('#contacts-table').DataTable({
        responsive: true
    });
});
</script>
@endsection
