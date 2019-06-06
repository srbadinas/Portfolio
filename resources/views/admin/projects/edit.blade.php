@extends('admin')

@section('title', "View Project")

@section('content')
    <div class="col-md-12">
        {!! Form::model($project, ['route' => ['projects.update', $project->id], 'method' => 'put', 'class' => 'form-horizontal', 'files' => true]) !!}
            <div class="form-group">
                <div class="col-md-8">
                    {{ Form::hidden('order', null) }}
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-8">
                    {{ Form::label('name', 'Project Name:') }}
                    {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter Project Name']) }}
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-8">
                    {{ Form::label('highlight', 'Highlights:') }}
                    {{ Form::textarea('highlight', null, ['class' => 'form-control', 'rows' => '4', 'placeholder' => 'Enter Highlights']) }}                   
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-8">
                    {{ Form::label('link', 'Link:') }}
                    {{ Form::text('link', null, ['class' => 'form-control', 'placeholder' => 'Enter Link']) }}
                </div>
            </div>
            
            <div class="form-group">
                <div class="col-md-12">
                    {{ Form::label('description', 'Description:') }}
                    {{ Form::textarea('description', null, ['class' => 'form-control ckeditor', 'placeholder' => 'Enter Description']) }}                   
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-8">
                    {{ Form::label('company', 'Company:') }}
                    {{ Form::text('company', null, ['class' => 'form-control', 'placeholder' => 'Enter Company']) }}
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-8">
                    {{ Form::label('thumbnail', 'Thumbnail:') }}
                    {{ Form::file('thumbnail') }}
                </div>
                <div class="col-md-12 margin-top-10">
                    <div class="row">
                        <div class="col-sm-2">
                            <div class="content-image">
                                <img src="{{ asset('img/project/thumbnail/'.$project->thumbnail) }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="form-group">
                <div class="col-md-12">
                    <button type="button" class="btn btn-dark btn-sm" onclick="location.href='{{ route('projects.index') }}'">Back to List</button>
                    {{ Form::submit('Save Changes', ['class' => 'btn btn-success btn-sm']) }}
                </div>
            </div>
        {!! Form::close() !!}
    </div>
@endsection

@section('scripts')
    <script src="//cdn.ckeditor.com/4.11.4/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('.ckeditor');
        // $('#project-upload-thumbnail>button').on('click', function() {
        //     $('#project-upload-thumbnail>input[type="file"]').trigger('click');
        // });

        // $('#project-upload-image>button').on('click', function() {
        //     $('#project-upload-image>input[type="file"]').trigger('click');
        // });

        // $('#project-upload-thumbnail>input[type="file"]').on('change', function() {
        //     onThumbnailUpload(this);
        // });

        // $('#project-upload-image>input[type="file"]').on('change', function() {
        //     onImageUpload(this);
        // });

        // $(document).on('click', '#project-remove-current-thumbnail', function() {
        //     $(this).parent().remove();
        // });

        // $(document).on('click', '#project-remove-current-image', function() {
        //     $(this).parent().remove();
        // });

        // function onThumbnailUpload(input) {

        //     var file = input.files[0];

        //     if (file) {
        //         var mime_types = ['image/jpeg', 'image/png'];

        //         if (mime_types.indexOf(file.type) == -1) {
        //             alert('Invalid file type');
        //             return;
        //         }

        //         url = URL.createObjectURL(file);
        //         $('#project-current-thumbnail').remove();

        //         var s = "<div class='content-image-container' id='project-current-thumbnail'><img src='"+url+"'><div class='remove-image-button' id='project-remove-current-thumbnail'><img src='/img/remove-button.png'></div></div>";
        //         $('#project-upload-thumbnail').before(s);
        //     }   
        // }

        // function onImageUpload(input) {
        //     var file = input.files[0];

        //     if (file) {
        //         var mime_types = ['image/jpeg', 'image/png'];

        //         if (mime_types.indexOf(file.type) == -1) {
        //             alert('Invalid file type');
        //             return;
        //         }

        //         url = URL.createObjectURL(file);

        //         var s = "<div class='content-image-container'><img src='"+url+"'><div class='remove-image-button' id='project-remove-current-image'><img src='/img/remove-button.png'></div></div>";
        //         $('#project-upload-image').before(s);
        //     }   
        // }

        // document.querySelector('#project-upload-thumbnail>button').addEventListener('click', function() {
        //     document.querySelector('#project-upload-thumbnail>input[type="file"]').click();
        // });

        // document.querySelector('#project-upload-image>button').addEventListener('click', function() {
        //     document.querySelector('#project-upload-image>input[type="file"]').click();
        // });

        // document.querySelector('#project-upload-thumbnail>input[type="file"]').addEventListener('change', function() {
        //     var file = this.files[0];

        //     var mime_types = ['image/jpeg', 'image/png'];

        //     if (mime_types.indexOf(file.type) == -1) {
        //         alert('Invalid file type');
        //         return;
        //     }

        //     url = URL.createObjectURL(file);
            
        //     var s = "<div class='content-image-container'><img src='"+url+"' id='project-current-thumbnail'><div class='remove-image-button'><img src='/img/remove-button.png'></div></div>";
        //     $('#project-upload-thumbnail').before(s);

        //     //document.querySelector('#project-current-thumbnail').setAttribute('src', url);
        // });
    </script>
@endsection