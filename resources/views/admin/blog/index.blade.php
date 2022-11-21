@extends('admin.layouts.master')

@section('content')


    <div class="content">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Blogs</strong>
                        </div>
                        <div class="table-stats order-table ov-h">
                            <table class="table ">
                                <thead>
                                    <tr>


                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>Status</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($form as $form)


                                    <tr>



                                        <td>{{$form->id}}</td>
                                        <td>{{$form->title}}</td>
                                        <td>{!! Str::words($form->description, 10, '.....') !!}</td>
                                        <td>
                                            @if (empty($form->profile_image))
                                                <img src="{{ asset('defaultblog.png') }}" width="60px" height="60px" />
                                            @else
                                                <img src="{{ asset('uploads/' . $form->profile_image) }}" width="60px"
                                                    height="60px" />
                                            @endif
                                        </td>
                                        <td>


                                            @if ($form->status == 1)
                                                <spam class="badge badge-primary">Active</spam>
                                            @else
                                                <spam class="badge badge-danger">Inactive</spam>
                                            @endif
                                        </td>
                                        <td><a href="{{route('blog.edit',$form->id)}}"><button type="button"
                                            class="btn btn-success">Edit </button></a> <a
                                        href=""><button type="button"
                                            class="btn btn-danger">Delete </button></a>
                                        </td>
                                    </tr>
                                    @endforeach



                                </tbody>
                            </table>
                        </div> <!-- /.table-stats -->
                    </div>
                </div>







            </div>








        </div>
    </div><!-- .animated -->

@endsection
