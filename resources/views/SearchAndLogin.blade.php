@extends('/Template/template')

@section('home')
    <style>
        .error {
            color: red;
        }

        .success {
            color: #2ca02c;
        }

      

        .form-search{
            position: absolute !important;
            top: 90%;
            left: 9%;
            font-size: 16px;
            width: 40%;
            margin-bottom: 1000px;
            /* z-index: 1; */

        }
    </style>

<div class="form-search">
    

    {!! Form::open(['url' => '/search', 'files' => true]) !!}
    <h4>Tìm kiếm Sinh viên</h4>

    @if (count($errors) > 0)
        LỖI <br>
        @foreach ($errors->all() as $err)
            <div class="error">
                <b> {{ $err }}</b>
            </div><br>
        @endforeach
    @endif

    @if (isset($mess))
        <div class="success">
            {{ $mess }}
        </div>
    @endif

    {{ Form::label('masv', 'Mã Sinh viên') }}
    {{ Form::text('masv', '', ['class' => 'form-control', 'placeholder' => 'Nhập mã sinh viên']) }} {{ Form::submit('Sreach', ['class' => 'btn btn-primary btn-block mt-3']) }}

    
    {!! Form::close() !!}

</div>

@endsection
