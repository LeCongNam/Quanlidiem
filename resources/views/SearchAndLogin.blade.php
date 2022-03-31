@extends('/Template/template')
@section('xemdiem')
    <style>
        .error {
            color: red;
        }

        .success {
            color: #2ca02c;
        }

        body {
            background-color: #6b7280;
            color: #dfdfdf;
        }
    </style>

    <div class="container">
        <div class="row">
            <div class="col-6 m-auto">
                {!! Form::open(['url' => '/search','files'=>true] ) !!}
                <h1>Tìm kiếm Sinh viên</h1>
                <hr>

                @if(count($errors)>0)
                    LỖI <br>
                    @foreach( $errors->all() as $err)
                        <div class="error">
                            <b> {{ $err }}</b>
                        </div><br>
                    @endforeach
                @endif

                @if(isset($mess))
                    <div class="success">
                        {{ $mess }}
                    </div>
                @endif

                {{ Form::label('masv', 'Mã Sinh viên') }}
                {{ Form::text('masv', '', ['class' => 'form-control', 'placeholder' => 'Nhập mã sinh viên']) }}

                {{ Form::submit('Luu',  ['class' => 'btn btn-primary btn-block mt-3']) }}
                {!! Form::close() !!}
            </div>
        </div>
    </div>