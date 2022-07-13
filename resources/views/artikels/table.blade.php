<x-app-layout>
    <x-slot name="title">
       List Artikel
    </x-slot>
 
    <h1>List Artikel</h1>

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
											<th>Judul</th>
											<th>Gambar Artikel</th>
											<th>Body Artikel</th>
											<th>Action</th>
									
										</tr>
									</thead>
									<tbody>
                                        @foreach ($artikels as $item)
										<tr>
											<td>{{ $loop->iteration }}</td>
											<td >{{ $item->judul}}</td>
											<td ><img src="{{ $item->picture }}" alt="" width="120" height="120"></td>
											<td>{!! $item->body !!}</td>
											<td >

                                                <a href="{{ route('artikels.edit', $item->slug) }}" class="btn btn-primary ">Edit</a>
												<br><br>

												<form action="{{ route('artikels.delete', $item->slug) }}" method="post">
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
										
                                        </tr>
                                        @endforeach
									</tbody>
								</table>
								{{ $artikels->links('vendor.pagination.simple-default') }}

							</div>
						</div>
					</div>
 
 
    
 </x-app-layout>
 