@extends('easy.layouts.default')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">编辑 article</div>

                    <div class="panel-body">

                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ URL('admin/articles/'.$article->id) }}" method="POST">
                            <input name="_method" type="hidden" value="PUT">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="text" name="title" class="form-control" required="required" value="{{ $article->title }}">
                            <br>
                            <br>
                            <select name="cate_id" class="form-control" required="required">
                                @foreach($categories as $category)
                                    @if($category->id==$article->category_id)
                                        <option value={{$category->id}} selected='true'>{!!$category->title!!}</option>
                                    @else
                                        <option value={{$category->id}}>{!!$category->title!!}</option>
                                    @endif
                                @endforeach
                            </select>
                            <br>
                            <textarea name="body" rows="10" class="form-control" required="required">{{ $article->content }}</textarea>
                            <br>
                            <button class="btn btn-lg btn-info">编辑 article</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection