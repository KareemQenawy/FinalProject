{{-- @extends('Components.main')

@section('page_title')
    create new Category
@endsection

@section('content')
   <section class="my-5 container">
      <h2 class="text-danger text-center my-4">create new Category</h2>
      <form action="{{ url("categories/cart") }}" method="POST">
        @csrf
        <div class="mb-3">
          <label class="form-label">Category Name</label>
          <input type="text" name="name" value="{{old("name")}}" class="form-control">
        </div>
        @error('name')
                <div class="div alert alert-danger">
                    <p>{{$message}}</p>
                </div>
        @enderror
        <button type="submit" class="btn btn-danger">Create Category</button>
      </form>
   </section>
@endsection --}}
