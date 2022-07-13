<x-app-layout>
    <x-slot name="title">
       List Tag
    </x-slot>
 
    <h1>List Tag</h1>

<br>
<div class="row">
                         <div class="col-12 col-lg-6 col-xxl-12 d-flex col-sm-12">
 							<div class="card flex-fill">
								<div class="card-header">
									<h5 class="card-title mb-0">List Tag</h5>
								</div>
								<table class="table table-hover my-0">
									<thead>
										<tr>
											<th>#</th>
											<th class="">Nama</th>
											@can('administrator')
											<th class="">Action</th>
											@endcan
										</tr>
									</thead>
									<tbody>
                                        @foreach ($tag as $z => $item)
										<tr>
											<td>{{ $z + $tag->firstItem() }}</td>
											<td >{{ $item->nama}}</td>
											@can('administrator')
												
											
											<td >

                                                <a href="{{ route('tags.edit', $item->nama) }}" class="btn btn-primary ">Edit</a>
												<br><br>

												<form action="{{ route('tags.delete', $item->nama) }}" method="post">
													@csrf
													@method('delete')
                                               <div class="btn-group mr-2">
													<button class="btn btn-danger btn-sm p-2" type="submit" onclick="return confirm('Yakin Menghapus?')">
														delete
													</button>
												</div>
												
												
												</form>
											</div>
                                            </td>
											@endcan	
                                        </tr>
                                        @endforeach
									</tbody>
								</table>
								{{ $tag->links('vendor.pagination.simple-default') }}
							</div>
						</div>
				
				
 
 
    
 </x-app-layout>
 