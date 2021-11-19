@extends('admin.layout.index')

@section('customer') class="active" @endsection

@section('content')
<div class="top_nav" >
	<div class="nav_menu" id="top_nav">
		<h3><a href="admin/customer/add"><button type="button" class="btn btn-success">ADD customer</button></a></h3>
	</div>
</div>
<div class="right_col" role="main" style="padding-top: 80px">
    @include('admin.errors.alerts')
    <div class="row">
      	<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h2>All customer </h2>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<table class="table table-striped table-bordered">
						<thead>
							<tr class="text-center">
								<th class="text-center">#</th>
								<th>Name</th>
								<th style="width: 20px;">Status</th>
								<th>Price</th>
								<th>Date</th>
								<th>Actions</th>
							</tr>
						</thead>
						<tbody id="changecustomer">
							<?php $stt = count($customer); ?>
							@foreach($customer as $val)
							<tr class="img">
								<td class="text-center">{{$stt}}</td>
								<td>{{$val->name}}</td>
								<td class="text-center">
									<input id="status" name="status" <?php if($val->status == 'true'){echo "checked";} ?> type="checkbox"  />
								</td>
								<td>{{number_format($val->price)}}đ</td>
								<td>{{$val->date_up}} <i>({{$val->date}})</i></td>
								<td  class="text-center">
									<a href="admin/customer/edit/{{$val->id}}">
										<i class="fa fa-pencil"></i> sửa
									</a> |
									<a onClick="javascript:return window.confirm('Bạn muốn xóa sản phẩm này?');" href="admin/customer/delete/{{$val->id}}">
										<i class="fa fa-trash-o"></i> xóa
									</a>
								</td>
							</tr>
							<?php $stt = $stt-1; ?>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
      	</div>
    </div>
</div>

<script src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#cat").change(function(){
			var cat = $(this).val();
			// alert(cat);
			$.get("admin/ajax/changecustomer/"+cat,function(data){
				$("#changecustomer").html(data);
			});
		});

	});
</script>

@endsection