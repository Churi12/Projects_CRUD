<div class="container pb-5">
    <div class="row">
        <div class="col-12">
            <h1>Show Category</h1>
            <form method="POST" action="{{ url('categories') }}">
                @csrf
                <div class="form-group">
                    <label for="name" class="font-weight-bold">Category Name</label>
                    <input
                        type="text"
                        id="name"
                        name="name"
                        readonly
                        class="form-control"
                        value="{{ $category->name }}">
                </div>
                <a href="{{ url('categories') }}" class="mt-2 mb-5 btn btn-primary">Back</a>
            </form>
        </div>
    </div>
</div>
