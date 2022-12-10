@extends('dashboard')

@section('content')
    <div class="container">
        <div class="card">
            <div class="col-12">
                <div class="text-end m-4">
                    <a name="addasset" id="addasset" class="btn btn-primary" role="button">Add Asset</a>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-striped
                table-hover	
                table-borderless
                table-primary
                align-middle">
                    <thead class="table-light">
                        <caption>Table Name</caption>
                        <tr>
                            <th>#</th>
                            <th>UUID</th>
                            <th>Name</th>
                            <th>Serial No</th>
                            <th>Serial No</th>
                            <th>Model</th>
                        </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            @foreach ($asset as $item)
                                
                                <tr class="table-primary" >
                                    <td>{{ ++$i; }}</td>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->serial_no }}</td>
                                    <td>{{ $item->type }}</td>
                                    <td>{{ $item->model }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            
                        </tfoot>
                </table>
            </div>
            
        </div>
    </div>
@endsection

@section('javascript')
    <script>

        $(document).ready(function () {
            $('#addasset').click(function(e){
                $('.modal-body').load("/modal") ({
                    $('#myModal').modal({show:true});
                });
            });
        });
        // $('#addasset').on('click',function(){
        //     $('.modal-body').load('/modal',function(){
        //         $('#myModal').modal({show:true});
        //     });
        // });
    </script>
@endsection