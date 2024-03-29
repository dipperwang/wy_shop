@extends('layouts.admin')
@section('content')
<div class="admin-content">

    <div class="am-cf am-padding">
        <div class="am-fl am-cf">
            <strong class="am-text-primary am-text-lg">商品管理</strong> / <small>添加属性</small>
        </div>
    </div>

    @include('layouts._message')

    <form class="am-form" action="{{ route('admin.type.{type_id}.attribute.store', $type_id) }}" method="post">
        {!! csrf_field() !!}

        <div class="am-g am-margin-top">
            <div class="am-u-sm-4 am-u-md-2 am-text-right">
                属性名称
            </div>
            <div class="am-u-sm-8 am-u-md-4">
                <input type="text" class="am-input-sm" name="name">
            </div>
            <div class="am-hide-sm-only am-u-md-6">*必填</div>
        </div>

        <div class="am-g am-margin-top">
            <div class="am-u-sm-4 am-u-md-2 am-text-right">
                所属商品类型
            </div>
            <div class="am-u-sm-8 am-u-md-4 am-u-end col-end">
                <select data-am-selected="{btnSize: 'sm'}" name="type_id">
                    @foreach ($types as $type)
                    <option value="{{ $type->id }}" @if($type->id == $type_id) selected @endif>
                        {{ $type->name }}
                    </option>
                    @endforeach
                </select>
            </div>

        </div>

        <div class="am-g am-margin-top">
            <div class="am-u-sm-4 am-u-md-2 am-text-right">
                属性是否可选
            </div>
            <div class="am-u-sm-8 am-u-md-4 am-u-end col-end">
                <input type="radio" name="attr_type" value="0" checked>唯一属性
                <input type="radio" name="attr_type" value="1">单选属性
            </div>
        </div>

        <div class="am-g am-margin-top">
            <div class="am-u-sm-4 am-u-md-2 am-text-right">
                该属性的录入方式
            </div>
            <div class="am-u-sm-8 am-u-md-8 am-u-end col-end">
                <input type="radio" name="input_type" value="0" checked>手工录入
                <input type="radio" name="input_type" value="1">从下面的列表中选择（一行代表一个可选值）
            </div>
        </div>


        <div class="am-g am-margin-top-sm">
            <div class="am-u-sm-12 am-u-md-2 am-text-right admin-form-text">
                可选值列表
            </div>
            <div class="am-u-sm-12 am-u-md-10">
                <textarea rows="10" name="value"></textarea>
            </div>
        </div>


        <div class="am-margin">
            <button type="submit" class="am-btn am-btn-primary am-btn-xs">提交保存</button>
        </div>
    </form>



</div>
@stop


@section('js')
<script>
$(function() {

});
</script>
@stop
