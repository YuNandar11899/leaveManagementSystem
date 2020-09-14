<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List of Department</title>
    <link rel="icon" href="{{asset('/assets/img/icon.ico')}}" type="image/x-icon"/>
    <script src="{{asset('/assets/js/plugin/webfont/webfont.min.js')}}"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['../assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="{{asset('/assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('/assets/css/atlantis.min.css')}}">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="{{asset('/assets/css/demo.css')}}">
</head>
<body>
    <body data-background-color="dark">
     <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="d-flex align-items-center">
                     <h4 class="card-title">Add Row</h4>
                    <a href="/department/create">
                         <button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
                        <i class="fa fa-plus"></i>
                        Add Row
                    </button>
                    </a>
                </div>
            </div>
            <div class="card-body">
                <!-- Modal -->
                <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header no-bd">
                                <h5 class="modal-title">
                                    <span class="fw-mediumbold">
                                    New</span>
                                    <span class="fw-light">
                                        Row
                                    </span>
                                </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p class="small">Create a new row using this form, make sure you fill them all</p>
                                <form>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group form-group-default">
                                                <label>Department Id</label>
                                                <input id="addName" type="text" class="form-control" placeholder="fill name">
                                            </div>
                                        </div>
                                        <div class="col-md-6 pr-0">
                                            <div class="form-group form-group-default">
                                                <label>Department Name</label>
                                                <input id="addPosition" type="text" class="form-control" placeholder="fill position">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-group-default">
                                                <label>Department Short Name</label>
                                                <input id="addOffice" type="text" class="form-control" placeholder="fill office">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer no-bd">
                                <button type="button" id="addRowButton" class="btn btn-primary">Add</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table id="add-row" class="display table table-striped table-hover" >
                        <thead>
                            <tr>
                                <th>Department Name</th>
                                <th>Department Short Name</th>
                                <th style="width: 10%">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($departments as $department)
                            <tr>
                            <td><a href="/department/{{$department->id}}">{{$department->name}}</a></td>
                            <td>{{$department->sname}}</td>

                                <td>
                                    <div class="form-button-action">

                                     {{-- <form action="/department/{{$department->id}}" id="delete-task" method="post">
                                            @csrf
                                            @method('DELETE')
                                        </form> --}}
                                        <a href="/department/{{$department->id}}/edit">
                                        <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                        </a>
                                           <a href="/department/{{$department->id}}">
                                            {{-- <form action="/department/{{$department->id}}" method="POST" id="form-data">
                                                @csrf
                                                @method('delete')

                                            </form> --}}
                                            <form>
                                                @csrf
                                                @method('delete')
                                            <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove" >
                                                <i class="fa fa-times"></i>
                                            </button>
                                        </form>
                                     </a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>


</body>
</html>
