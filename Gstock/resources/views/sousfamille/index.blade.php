@extends('layout')
@section('content')

           



                <div class="card">
                    <div class="card-header">
                        <h2>SousFamilles</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/sousfamilles/create') }}" class="btn btn-success btn-sm" title="Add New sousfamilles">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>sousfamilles</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($sousfamilles as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->sousfamilles }}</td>
                                       
                                        <td>
                                            <a href="{{ url('/sousfamilles/' . $item->id) }}" title="View sousfamilles"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/sousfamilles/' . $item->id . '/edit') }}" title="Edit sousfamilles"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
 
                                            <form method="POST" action="{{ url('/sousfamilles' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete sousfamilles" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
 
                    </div>

@endsection
