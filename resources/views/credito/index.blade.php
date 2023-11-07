@extends('layouts.app')

@section('template_title')
    Credito
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Credito') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('creditos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Trabajo</th>
										<th>Cantidad</th>
										<th>Interes</th>
										<th>Pagos</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($creditos as $credito)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $credito->Trabajo }}</td>
											<td>{{ $credito->Cantidad }}</td>
											<td>{{ $credito->Interes }}</td>
											<td>{{ $credito->Pagos }}</td>

                                            <td>
                                                <form action="{{ route('creditos.destroy',$credito->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('creditos.show',$credito->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('creditos.edit',$credito->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $creditos->links() !!}
            </div>
        </div>
    </div>
@endsection
