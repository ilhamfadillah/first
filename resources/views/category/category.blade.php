@extends('layouts.default')
@section('title', 'Category')
@section('content')

<section class="header">

</section>

<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<a href="{{ url('/admin/add/category') }}" class="btn btn-primary">	<span class="glyphicon glyphicon-plus">ADD
        </span>
			</a>
		</div>
		<div class="col-xs-6">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">Hover Data Table
          </h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<table id="example2" class="table table-bordered table-hover">{{csrf_field()}}
						<thead>
							<tr>
								<th class="text-center">Id</th>
								<th class="text-center">Category</th>
								<th class="text-center" colspan="2">Action</th>
							</tr>
						</thead>
						<tbody>
              @foreach($categories as $category)
							<tr>
								<td>{{ $category->id }}</td>
								<td>{{ $category->category }}</td>
								<td class="text-center">
                  <a href="" class="btn btn-primary">Edit</a>
								</td>
								<td class="text-center">
									<form id="" action="" method="post">{{csrf_field()}}
                    <button type="submit" class="btn btn-danger delete" supplier_id="">Delete</button>
										<input type="hidden" name="id" value="">
										<input type="hidden" name="_method" value="delete">
									</form>
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

    <div class="col-xs-6">
      <div class="box">
        <div class="box-header">
          <div class="box-title">
            <h3 class="box-title">Nama Kategori</h3>
          </div>
        </div>

        <div class="box-body">
          <table class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>PRICE</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Fish</td>
                <td>12500</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

	</div>
</section>
@endsection
