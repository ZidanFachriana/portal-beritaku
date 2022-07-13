<x-app-layout>
    <x-slot name="title">
       List Penulis
    </x-slot>
 
    <h1>List Penulis</h1>

<br>
    
   <div class="col-12 col-lg-6 col-xxl-12 d-flex">
							<div class="card flex-fill">
								<div class="card-header">
									<h5 class="card-title mb-0">List Penulis</h5>
								</div>
								<table class="table table-hover my-0">
									<thead>
										<tr>
											<th>#</th>
											<th>Nama</th>
											<th>Email</th> 
										</tr>
									</thead>
									<tbody>
                                        @foreach ($users as $item)
										<tr>
											<td>{{ $loop->iteration }}</td>
											<td>{{ $item->name }}</td>
											<td>{{ $item->email }}</td>	
                                        </tr>
                                        @endforeach
									</tbody>
								</table>
							</div>
						</div>
 
 
    
 </x-app-layout>
 