@extends('admin.default')

@section('page-header')
    Categories <small>Gestion</small>
@stop

@section('content')

	<section class="filter-area">
		<div class="row">
			<div class="col-sm-10">
				<ul class="list-inline">
					<li><a class="btn btn-info" href="{{ route(ADMIN . '.categories.create') }}">Ajouter</a></li>
				</ul>
			</div>
		</div>
	</section>

	<div class="row">
	  <div class="col-xs-12">
	    <div class="box box-info">
	      <div class="box-header">
	        <h3 class="box-title">La liste des Categories</h3>
	      </div>
	      <!-- /.box-header -->
	      <div class="box-body table-responsive no-padding">
	        <table class="table data-tables" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Parent</th>
                        <th class="actions">Actions</th>
                    </tr>
                </thead>
             
                <tfoot>
                    <tr>
                        <th>Nom</th>
                        <th>Parent</th>
                        <th class="actions">Actions</th>
                    </tr>
                </tfoot>
             
                <tbody>
					@foreach ($items as $item)
						<tr>
	                        <td><a href="{{ route(ADMIN . '.categories.edit', $item->id) }}">{{ $item->name }}</a></td>
	                        <td>
		                        @if ($item->parent)
		                        	{{ $item->parent->name }}
		                        @endif
	                        </td>
	                        <td class="actions">
                                <ul class="list-inline">
                                    <li><a href="{{ route(ADMIN . '.categories.edit', $item->id) }}" title="Modifier l'élément" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a></li>
                                    <li>
                                        {!! Form::open([
                                            'class'=>'delete',
                                            'url'  => route(ADMIN . '.categories.destroy', $item->id), 
                                            'method' => 'DELETE',
                                            ]) 
                                        !!}

                                            <button class="btn btn-danger btn-xs" title="Supprimer l'élément"><i class="fa fa-trash"></i></button>
                                            
                                        {!! Form::close() !!}
                                </ul>
                            </td>
						</tr>
					@endforeach
                </tbody>
            </table>
	      </div>
	      <!-- /.box-body -->
	    </div>
	    <!-- /.box -->
	  </div>
	</div>
	
@stop