@extends('_layout')

@section('body')
<div class="container-fluid">
	<div class="row justify-content-center" style="margin-top: 18%;">
		<div class="col-12 col-md-9 col-lg-5">
			<div class="card">
				<div class="card-body" style="text-align: center;">
					<h2 style="margin-bottom: 30px;">Login</h2>
					<form style="text-align: left;" method="POST">
						@csrf
						<div class="row">
							<div class="col">
								<div class="form-group">
									<input id="username" type="text" class="form-control" placeholder="Username" name="username" required>
								</div>
							</div>
							<div class="col">
								<div class="form-group">
									<input id="pass" type="password" class="form-control" placeholder="Password" name="password" required>
								</div>
							</div>
						</div>
						<button class="btn btn-primary float-right" type="submit">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection