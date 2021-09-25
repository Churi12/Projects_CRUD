<div class="container pb-5">
    <div class="row">
        <div class="col-12">
            <h1>Edit Project</h1>
            <form method="POST" action="{{ url('projects/' . $project->id) }}">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name" class="font-weight-bold">Project Name</label>
                    <input
                        type="text"
                        id="name"
                        name="name"
                        class="form-control"
                        value="{{ $project->name }}">
                </div>
                <button type="submit" class="mt-2 mb-5 btn btn-primary">Submit</button>
                <a href="{{ url('projects') }}" class="mt-2 mb-5 btn btn-primary">Back</a>
            </form>
        </div>
    </div>
</div>
