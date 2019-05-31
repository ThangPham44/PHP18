<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="csrf-token" content="{{ csrf_token() }}">​
	<title>Event</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
</head>
<body>
	<div class="container">
		<a data-url="{{ route('events-ajax.store') }}" class="btn btn-add btn-success">Add</a>
		<div class="table-responsive">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>#</th>
						<th>Title</th>
						<th>Content</th>
						<th>Time</th>
						<th>Location</th>
						<th>created_at</th>
						<th>update_at</th>

					</tr>
				</thead>
				<tbody id="tbody">
					
					{{-- biến $todos được controller trả cho view
						chứa dữ liệu tất cả các bản ghi trong bảng todos. Dùng foreach để hiển
						thị từng bản ghi ra table này. --}}

						@foreach ($events as $event)
						<tr>
							<td>{{$event->id}}</td>
							<td>{{$event->title}}</td>
							<td>{{$event->content}}</td>
							<td>{{$event->time}}</td>
							<td>{{$event->location}}</td>
							<td>{{$event->created_at}}</td>
							<td>{{$event->updated_at}}</td>
							<td>
								<a style="display: inline-block; width: 67px;" data-url="{{ route('events-ajax.show',$event->id) }}"​ class="btn btn-show btn-show">show</a>
								<a style="display: inline-block; width: 67px;" data-url="{{ route('events-ajax.edit',$event->id) }}" class="btn btn-edit btn-warning">Edit</a>
								<button type="button" class="btn btn-danger btn-delete" style= data-url="{{ route('events-ajax.destroy',$event->id) }}"​>Delete</button>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>

			{{-- Modal show chi tiết todo --}}
	<div class="modal fade" id="modal-show">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Show event</h4>
				</div>
				<div class="modal-body" style="text-align: center;">
					<h2>Event:</h2>
					<h3 id="todo-show"></h3>
					<h3 id="todo-showw"></h3>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>


	{{-- Modal thêm mới todo --}}
	<div class="modal fade" id="modal-add">
		<div class="modal-dialog">
			<div class="modal-content">

				<form action="" data-url="{{ route('events-ajax.store') }}" id="form-add" method="POST" role="form">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Add </h4>
				</div>
				<div class="modal-body">
					
						<div class="form-group">
							<label for="">Event</label>
							<input type="text" class="form-control" id="event-add" placeholder="Event">
						</div>
						<div class="form-group">
							<label for="">Content</label>
							<input type="text" class="form-control" id="event-add" placeholder="Content">
						</div>
					
						
					
				</div>
				<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Add</button>
				</div>
				</form>
			</div>
		</div>
		</div>

		{{-- Modal sửa todo --}}
		<div class="modal fade" id="modal-edit">
			<div class="modal-dialog">
				<div class="modal-content">

					<form action="" id="form-edit" method="POST" role="form">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title">Edit event</h4>
					</div>
					<div class="modal-body">
						
							<div class="form-group">
								<label for="">Title</label>
								<input type="text" class="form-control" id="event-edit" placeholder="Title">
							</div>
							<div class="form-group">
								<label for="">Content</label>
								<input type="text" class="form-control" id="event-editt" placeholder="Content">
							</div>
						
							
						
					</div>
					<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary">Edit</button>
						
					</div>
					</form>
				</div>
			</div>
			</div>


	</body>
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js" type="text/javascript" charset="utf-8" async defer></script>
	<script type="text/javascript" charset="utf-8">
		$.ajaxSetup({
		    headers: {
		        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		    }
		});

		$(document).ready(function () {
                    //code ajax ta sẽ viết ở đây

                    //bắt sự kiện click vào nút show
					// $('.btn-show').click(function () {
						$('#tbody').on('click', '.btn-show', function(e) {
						//hiện modal show lên
						$('#modal-show').modal('show');
						//lấy dữ liệu từ attribute data-url lưu vào biến url
						var url=$(this).attr('data-url');
						$.ajax({
							//sử dụng phương thức get
							type: 'get',
							url: url,
							//nếu thực hiện thành công thì chạy vào success
							success: function (response) {
								//hiển thị dữ liệu được controller trả về vào trong modal
								$('#todo-show').text(response.data.title);
								$('#todo-showw').text(response.data.content);
							},
							error: function (jqXHR, textStatus, errorThrown) {
								//xử lý lỗi tại đây
							}
						})
						})

					//bắt sự kiện click vào nút add
					$('.btn-add').click(function (e) {
						e.preventDefault();
						//hiện modal show
						$('#modal-add').modal('show');
					})

					//bắt sự kiện submit form thêm mới
					$('#form-add').submit(function (e) {
						e.preventDefault();
						//lấy attribute data-url của form lưu vào biến url
						var url=$(this).attr('data-url');
						$.ajax({
							//sử dụng phương thức post
							type: 'post',
							url: url,
							data: {
								//lấy dữ liệu từ ô input trong form thêm mới
								title: $('#event-add').val(),
								content: $('#event-add').val(),
							},
							success: function (response) {
								// hiện thông báo thêm mới thành công bằng toastr
								toastr.success('Add new event success!')
								//ẩn modal add đi
								$('#modal-add').modal('hide');
									
									$('#tbody').prepend(`
												<tr>
							<td>`+response.data.id+`</td>
							<td>`+response.data.title+`</td>
							<td>`+response.data.content+`</td>
							<td>`+response.data.time+`</td>
							<td>`+response.data.location+`</td>
							<td>`+response.data.created_at+`</td>
							<td>`+response.data.updated_at+`</td>
							<td>
								<a style="display: inline-block; width: 67px;" data-url="/events-ajax/`+response.data.id+`"​ class="btn btn-show btn-show">show</a>
								<a style="display: inline-block; width: 67px;" data-url="" class="btn btn-edit btn-warning">Edit</a>
								<button type="button" class="btn btn-danger btn-delete" style= data-url=""​>Delete</button>
							</td>
						</tr>
										`)

							},
							error: function (jqXHR, textStatus, errorThrown) {
								//xử lý lỗi tại đây
							}
						})
						})

					$('.btn-delete').click(function () {
						//lấy attribute data-url của nút xoá lưu vào url
						var url=$(this).attr('data-url');
						//hiển thị dialogbox xác nhận xoá
						if (confirm("Are you sure?")){
							$.ajax({
								//phương thức delete
								type: 'delete',
								url: url,
								success: function (response) {
									//thông báo xoá thành công bằng toastr
									toastr.warning('delete event success!')
									setTimeout(function () {
										window.location.href="{{ route('events-ajax.index') }}";
									},800);
								},
								error: function (error) {
									
								}
							})
						}
						})


									//bắt sự kiện click vào nút edit
				$('.btn-edit').click(function (e) {
					//mở modal edit lên
					$('#modal-edit').modal('show');
					e.preventDefault();
					//lấy data-url của nút edit
					var url=$(this).attr('data-url');
					$.ajax({
						//phương thức get
						type: 'get',
						url: url,
						success: function (response) {
							//đưa dữ liệu controller gửi về điền vào input trong form edit.
							$('#event-edit').val(response.data.title);
							$('#event-editt').val(response.data.content);
							//thêm data-url chứa route sửa todo đã được chỉ định vào form sửa.
							$('#form-edit').attr('data-url','{{ asset('events-ajax/') }}/'+response.data.id)
						},
						error: function (error) {
							
						}
					})
				})

			//bắt sự kiện submit form edit
				$('#form-edit').submit(function (e) {
					e.preventDefault();
					//lấy data-url của form edit
					var url=$(this).attr('data-url');
					$.ajax({
						//phương thức put
						type: 'put',
						url: url,
						//lấy dữ liệu trong form
						data: {
							event: $('#event-edit').val(),
							// event: $('#event-editt').val(),
						},
						success: function (response) {
							//thông báo update thành công
							toastr.success('edit event success!')
							//ẩn modal edit
							$('#modal-edit').modal('hide');
							setTimeout(function () {
								window.location.href="{{ route('events-ajax.index') }}";
							},800);
						},
						error: function (jqXHR, textStatus, errorThrown) {
							//xử lý lỗi tại đây
						}
					})
					})

            })
	</script>
	</html>