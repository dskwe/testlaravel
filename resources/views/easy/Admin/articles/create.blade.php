@extends('easy.layouts.default')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">新增文章</div>

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

                        <form action="{{ URL('admin/articles') }}" method="POST">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="text" name="title" class="form-control" required="required">
                            <br>
                            <select name="cate_id" class="form-control" required="required">
                                @foreach($categories as $category)
                                <option value={{$category->id}}>{!!$category->title!!}</option>
                                @endforeach
                            </select>
                            <br>
                            <br>
                            <textarea name="body" rows="10" class="form-control" required="required"></textarea>
                            <br>
                            <button class="btn btn-lg btn-info">发表</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection