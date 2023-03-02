<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('partials.head')
    <body>
        @include('partials.menu')
        <main class="container">
          <div class="p-4 p-md-5 mb-4 rounded text-bg-dark">
            <div class="col-md-12 px-0">
              <h1 class="display-4 fst-italic">{{ $news->title }}</h1>
            </div>
          </div>

          <div class="row">
            <div class="col-md-4">
                <img class="bd-placeholder-img" width="200" height="250" src="{{ $news->image_url }}">
            </div>
            <div class="col-md-8">
                <p class="card-text mb-auto">{{ $news->text }} </p>
            </div>
          </div>
          <div class="card-footer py-3 border-0" style="background-color: #f8f9fa;">
            <div class="d-flex flex-start w-100">
              <img class="ml-2 rounded-circle shadow-1-strong me-3"
                src="https://w7.pngwing.com/pngs/754/2/png-transparent-samsung-galaxy-a8-a8-user-login-telephone-avatar-pawn-blue-angle-sphere-thumbnail.png" alt="avatar" width="40"
                height="40" />
              <div class="form-outline w-100">
                <textarea class="form-control" id="textAreaExample" rows="4"
                  style="background: #fff;"></textarea>
              </div>
            </div>
            <div class="float-end mt-2 pt-1">
              <button type="button" class="btn btn-primary btn-sm">Post comment</button>
              <button type="button" class="btn btn-outline-primary btn-sm">Cancel</button>
            </div>
          <div class="row">
            <p class="h3" style="text-align: center; margin-top:20px;">Comments</p>
            @foreach($news->comments as $comment)
            <div class="col-md-12">
              <div class="row g-0 border rounded overflow-hidden flex-md-row shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                  <strong class="d-inline-block mb-2 text-primary">{{ $comment->user->name }}</strong>
                  <div class="mb-1 text-muted">{{ $comment->created_at->diffForHumans() }}</div>
                  <p>{{ $comment->comment }}</p>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </main>

        @include('partials.footer')

        <script>
          
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>
