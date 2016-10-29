@extends('layouts.app')
@section('content')
    <div class="row">
        <form method="post">
            {!! csrf_field() !!}
        <div class="form-group">
            <label>العنوان</label>
            <input required="required" class="form-control" name="title">
        </div>
        <div class="form-group">
            <label>اللينك</label>
            <input required="required" class="form-control" name="link">
        </div>
        <div class="form-group">
            <label>الشرح</label>
            <textarea class="form-control" name="description"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg">حفظ
                </button>
        </div>
        </form>
    </div>

@stop