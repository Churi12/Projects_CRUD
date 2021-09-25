<div class="container pb-5">
    <div class="row">
        <div class="col-12">
            <h1>Show Product</h1>
            <form method="POST" action="{{ url('products') }}">
                @csrf
                <div class="form-group">
                    <label for="name" class="font-weight-bold">Product Name</label>
                    <input
                        type="text"
                        id="name"
                        name="name"
                        readonly
                        class="form-control"
                        value="{{ $product->name }}">
                </div>
                <div class="form-group">
                    <label for="name" class="font-weight-bold">Project Name</label>
                    <input
                        type="text"
                        id="projectName"
                        name="projectName"
                        readonly
                        class="form-control"
                        value="{{ $product->project->name }}">
                </div>
                <div class="form-group">
                    <label for="name" class="font-weight-bold">Category Name</label>
                    <input
                        type="text"
                        id="categoryName"
                        name="categoryName"
                        readonly
                        class="form-control"
                        value="{{ $product->category->name }}">
                </div>
                <div class="form-group">
                    <label for="name" class="font-weight-bold">Details</label>
                    <input
                        type="text"
                        id="details"
                        name="details"
                        readonly
                        class="form-control"
                        value="{{ $product->details }}">
                </div>
                <a href="{{ url('products') }}" class="mt-2 mb-5 btn btn-primary">Back</a>
            </form>
        </div>
    </div>
</div>
