<?php include("view/panel/header.php"); ?>
<!-- ========== section start ========== -->
<section>
  <div class="container-fluid">
    <!-- ========== title-wrapper end ========== -->
    <div class="container-fluid">
      <!-- ========== title-wrapper start ========== -->
      <div class="title-wrapper pt-30">
        <div class="row align-items-center">
          <div class="col-md-6">
            <div class="title d-flex align-items-center flex-wrap mb-30">
              <h2 class="mr-40">Todos los usuarios</h2>
            </div>
          </div>
          <!-- end col -->
          <div class="col-md-6">
            <div class="breadcrumb-wrapper mb-30">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="#0">Panel</a>
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">
                    Usuarios
                  </li>
                </ol>
              </nav>
            </div>
          </div>
          <!-- end col -->
        </div>
        <!-- end row -->
      </div>

      <!-- Invoice Wrapper Start -->
      <div class="invoice-wrapper">
        <div class="row">
          <div class="col-12">
            <div class="invoice-card card-style mb-30">
              <div class="table-responsive">
                <table class="invoice-table table">
                  <thead>
                    <tr>
                      <th class="amount">
                        <h6 class="text-sm text-medium">ID</h6>
                      </th>
                      <th class="service">
                        <h6 class="text-sm text-medium">Nombre</h6>
                      </th>
                      <th class="desc">
                        <h6 class="text-sm text-medium">Email</h6>
                      </th>
                      <th class="qty">
                        <h6 class="text-sm text-medium">Score</h6>
                      </th>
                    </tr>
                  </thead>
                  <tbody id="row">
                    <tr>
                      <td></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="note-wrapper warning-alert py-4 px-sm-3 px-lg-5">
                <div class="alert">
                  <h5 class="text-bold mb-15">Nota:</h5>
                  <p class="text-sm text-gray">
                    Estos datos pueden ser editados y actualizados por el usuario desde su panel de control personal y deben de ser manejados de forma cautelosa y confidencial acerca de cada usuario.
                  </p>
                </div>
              </div>
            <!-- End Card -->
          </div>
          <!-- ENd Col -->
        </div>
        <!-- End Row -->
      </div>
      <!-- Invoice Wrapper End -->
    </div>
    <!-- end container -->
</section>
<!-- ========== section end ========== -->

<!-- ========== footer start =========== -->
<footer class="footer">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6 order-last order-md-first">
        <div class="copyright text-center text-md-start">
          <p class="text-sm">
            Designed and Developed by
            <a href="https://Piniors.com" rel="nofollow" target="_blank">
              Piniors
            </a>
          </p>
        </div>
      </div>
      <!-- end col-->
      <div class="col-md-6">
        <div class="
                  terms
                  d-flex
                  justify-content-center justify-content-md-end
                ">
          <a href="#0" class="text-sm">Term & Conditions</a>
          <a href="#0" class="text-sm ml-15">Privacy & Policy</a>
        </div>
      </div>
    </div>
    <!-- end row -->
  </div>
  <!-- end container -->
</footer>
<!-- ========== footer end =========== -->
</main>
<!-- ======== main-wrapper end =========== -->

<!-- ========= All Javascript files linkup ======== -->
<script src="/public/script/bootstrap.bundle.min.js"></script>
<script src="/public/script/Chart.min.js"></script>
<script src="/public/script/dynamic-pie-chart.js"></script>
<script src="/public/script/moment.min.js"></script>
<script src="/public/script/fullcalendar.js"></script>
<script src="/public/script/jvectormap.min.js"></script>
<script src="/public/script/world-merc.js"></script>
<script src="/public/script/polyfill.js"></script>
<script src="/public/script/main.js"></script>

<script>
  const row = document.getElementById("row")
  fetch("/panel/datausers")
  .then(res => res.json())
  .then(data => {
    console.log(data)
    data.forEach(element => {
      row.innerHTML += `
   <tr>
   <td>
      <p class="text-sm">${element.ID}</p>
    </td>
    <td>
      <p class="text-sm">
        ${element.name}
      </p>
    </td>
    <td>
      <p class="text-sm">${element.email}</p>
    </td>
    <td>
      <p class="text-sm">${element.puntos}</p>
    </td>
   </tr>
  `
    });
  })
</script>

</body>

</html>