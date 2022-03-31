
@extends('/Template/template')
@section('Home')
    @include('banner')
    <div id="content" class="mt-50">
        <h1>This is Heading</h1>
        <div class="list-card">

            <div class="card">
                <img src="../resources/views/images/product.png" alt="product.png" class="card-img">
                <div class="card-body">
                    <h3 class="card-title">Aliquan ẻ iaculis sapine</h3>
                    <p class="card-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, officia
                        recusandae repudiandae
                        animi blanditiis voluptate.
                    </p>
                    <button class="btn-primary mt-20">Learn More</button>
                </div>
            </div>
            <div class="card">
                <img src="resources/views/images/product.png" alt="product.png" class="card-img">
                <div class="card-body">
                    <h3 class="card-title">Aliquan ẻ iaculis sapine</h3>
                    <p class="card-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, officia
                        recusandae repudiandae
                        animi blanditiis voluptate.
                    </p>
                    <button class="btn-primary mt-20">Learn More</button>
                </div>
            </div>
            <div class="card">
                <img src="resources/views/images/product.png" alt="product.png" class="card-img">
                <div class="card-body">
                    <h3 class="card-title">Aliquan ẻ iaculis sapine</h3>
                    <p class="card-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, officia
                        recusandae repudiandae
                        animi blanditiis voluptate.
                    </p>
                    <button class="btn-primary mt-20">Learn More</button>
                </div>
            </div>
        </div>
    </div>
@endsection
