<div class="container pb-5">
    <div class="row">
        <div class="col-12">
            <h1>Show Project</h1>
            <form method="POST" action="{{ url('projects') }}">
                @csrf
                <div class="form-group">
                    <label for="name" class="font-weight-bold">Project Name</label>
                    <input
                        type="text"
                        id="name"
                        name="name"
                        readonly
                        class="form-control"
                        value="{{ $project->name }}">
                </div>
                <a href="{{ url('projects') }}" class="mt-2 mb-5 btn btn-primary">Back</a>
            </form>
        </div>
    </div>
</div>
