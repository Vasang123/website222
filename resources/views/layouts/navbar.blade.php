<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="/home">22-2</a>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/home">To Do List Angkatan</a>
          </li>
          <li class="nav-item">
            <form class="d-flex mx-3" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search">
            </form>
          </li>
        </ul>
        <div class="dropdown mx-4">
            <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{ Auth::user()->name }}
            </button>
            <ul class="dropdown-menu" style="width: 100%">
              <li class="text-center"><a class="dropdown-item" href="/changePass/{{ Auth::user()->id }}">Change Password</a></li>
              <li>
                <form class="d-flex" role="logout" method="POST" action="/logout" >
                    @csrf
                  <button class="btn btn-danger" type="submit" style="width: 100%">Logout</button>
                </form>
              </li>
            </ul>
        </div>
      </div>
    </div>
  </nav>
