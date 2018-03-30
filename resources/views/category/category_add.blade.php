@extends('layouts.default') @section('title', 'Add Product') @section('content')
<div class="container">
	<div class="row">
		<div class="col-xs-6">
			<div class="box">
				<div class="box-header">
          <h3 class="box-title">ADD NEW CATEGORY</h3>
        </div>
				<div class="box-body">
					<div class="panel panel-primary">
						<div class="panel-heading">Add Category</div>
						<div class="panel-body">
							<form method="post" action="{{ route('employee.store') }}">{{csrf_field()}}
								<div class="form-group">
									<label class="col-md-4">Name</label>
									<input type="text" class="form-control" name="employee_name" />
								</div>
								<div class="form-group">
									<button type="submit" class="btn btn-primary">Add</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>@endsection
