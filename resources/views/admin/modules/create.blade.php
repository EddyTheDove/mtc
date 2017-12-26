@extends('admin.body')


@section('head')
    <link rel="stylesheet" type="text/css" href="/backend/fancybox/jquery.fancybox.css" media="screen" />
    <script>
        var _icons = <?php echo json_encode($icons);?>;
        var _colours = <?php echo json_encode($colours);?>;
        var _module = <?php echo json_encode((object)[
            'colour' => 'blue',
            'icon' => 'mobile'
        ]);?>;
    </script>
@endsection

@section('body')
    <div class="page-heading">
        <div class="buttons">
            <a href="{{ route('modules.index') }}" class="btn btn-lg btn-grey">
                <i class="flaticon-undo"></i> Cancel
            </a>
        </div>

        <div class="title">
            New Service
        </div>
    </div>

    <section class="mt-20">
        <div class="container-fluid">
            @include('errors.list')

            <form class="form" action="{{ route('modules.index') }}" method="post">
                {{ csrf_field() }}

                {{-- Left side  --}}
                <div class="row">
                    <div class="col-sm-8">
                        <div class="block">
                            <div class="block-content">
                                <div class="form-group">
                                    <input type="text" name="name" value="{{ old('name') }}"
                                    required
                                    placeholder="Service title"
                                    class="form-control input-lg">
                                </div>

                                <div class="mt-40">
                                    <label>Short Description</label>
                                    <textarea name="excerpt" class="form-control no-resize" rows="3"></textarea>
                                </div>

                                <div class="mt-20">
                                    <label>Content</label>
                                    <textarea name="description" class="tiny"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- End of col 9 --}}


                    <div class="col-sm-4">
                        <service-icon></service-icon>

                        <div class="mt-20">
                            <button type="submit" class="btn btn-lg btn-blue">
                                <i class="flaticon-check mr-10"></i> Save Service
                            </button>
                        </div>
                    </div>
                    {{-- End of col 3 --}}


                </div>

            </form>
        </div>
    </section>
@endsection


@section('js')
<script type="text/javascript" src="/backend/tinymce/tinymce.min.js"></script>
<script src="/backend/js/admin.min.js"></script>
<script>
tinymce.init({
    selector: ".tiny",
    theme: "modern",
    relative_urls: false,
    height : 280,
    fontsize_formats: "8px 10px 12px 14px 16px 18px 24px 32px 36px 60px",
    plugins: [
         "advlist autolink link image lists charmap print preview hr anchor pagebreak",
         "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
         "table contextmenu directionality emoticons paste textcolor filemanager code"
   ],
   toolbar1: "undo redo | fontsizeselect bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent",
   toolbar2: "|filemanager | link unlink anchor | image media | forecolor backcolor  | print preview code | styleselect",
   image_advtab: true ,

    external_filemanager_path:"/backend/filemanager/",
    filemanager_title:"Responsive Filemanager" ,
    external_plugins: { "filemanager" : "/backend/filemanager/plugin.min.js"}
});
</script>
@endsection
