@extends('admin.layouts.master')

@section('content')


    <div class="content">
        <div class="animated fadeIn">


            <div class="row">
                <!--/.col-->


                <div class="col-lg-12">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="card">
                        <div class="card-header"> <strong>Edit Blog</strong></div>
                        <div class="card-body card-block">

                            <form action="{{ route('blog.update',$form->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="title" class="title">Title</label>
                                    <input type="text" id="title" placeholder="Enter your Title" name="title"
                                        class="form-control" value="{{ $form->title }}">
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea id="body" name="description" rows="4" cols="50" placeholder="Enter your Description"
                                        class="form-control">{{ $form->description }}</textarea>


                                </div>


                                <div class="form-group">
                                    <label>Status</label>
                                    <select name="status"class="form-control">
                                        <option value="" class="option_colour">Select Status</option>
                                        <option value="1" @if ($form->status == '1') selected='selected' @endif>Active
                                        </option>
                                        <option value="0" @if ($form->status == '0') selected='selected' @endif>Inactive
                                        </option>

                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="profile_image"> Image</label>
                                    <input type="file" class="form-control" name="profile_image" id="profile_image"
                                        placeholder="Upload_image" value="{{ old('image',$form->profile_image) }}">



                                    <img src="{{ asset('uploads/' . $form->profile_image) }}" width="50px" height="50px" />
                                </div>

                                <div class="card-group">
                                    <button type="submit" class="btn btn-primary">Submit</button> &nbsp; &nbsp; &nbsp;
                                    <button type="submit" class="btn btn-danger">Back</button>

                                    {{-- <a href="{{ route('blog.index') }}"><button type="button" class="btn btn-info">Back </button></a> --}}

                                </div>


                            </form>


                        </div>
                    </div>
                </div>







            </div>





















        </div>


    </div><!-- .animated -->
@endsection
