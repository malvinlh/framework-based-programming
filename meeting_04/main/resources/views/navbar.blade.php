<nav class="navbar navbar-expand-lg" style="background: linear-gradient(90deg, #6a11cb 0%, #ffb100 100%);">
  <div class="container">
    <a class="navbar-brand text-white" href="/" style="font-weight: bold;">CalculatorXYZ</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon" style="color: white;"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="/GetCalc1">Calculator Get 1</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="/GetCalc2">Calculator Get 2</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="/GetCalc3">Calculator Get 3</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="/PostCalc1">Calculator Post 1</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="/PostCalc2">Calculator Post 2</a>
        </li>
        <li class="nav-item">
          <button class="nav-link text-black" data-bs-toggle="modal" data-bs-target="#logoutModal" style="margin-left:35vh; font-weight:bold;">Logout</button>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Logout Modal -->
<div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="logoutModalLabel">Logout Confirmation</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Are you sure you want to logout?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</button>
      </div>
    </div>
  </div>
</div>

<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
  @csrf
</form>
