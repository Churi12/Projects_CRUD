<div class="container pb-5">
    <div class="row">
        <div class="col-12">
            <h1>Add Category</h1>
            <form method="POST" action="{{ url('categories') }}">
                @csrf
                <div class="form-group">
                    <label for="name" class="font-weight-bold">Category Name</label>
                    <input
                        type="text"
                        id="name"
                        name="name"
                        autocomplete="name"
                        placeholder="Category name"
                        class="form-control
                        @error('name') is-invalid @enderror"
                        value="{{ old('name') }}"
                        required
                        aria-describedby="nameHelp">

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <button type="submit" class="mt-2 mb-5 btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
