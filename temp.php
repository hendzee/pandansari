<!-- start service -->
<div id="menu-list" style="margin-top:7em;">
  <div class="container">
    <div class="slid slider">
      <div style="margin:1em;text-align:center;"><h3><span>M</span>akanan</h3></div>
      <div style="margin:1em;text-align:center;"><h3><span>M</span>inuman</h3></div>
      <div style="margin:1em;text-align:center;"><h3><span>P</span>aket <span>P</span>rasmanan</h3></div>
      <div style="margin:1em;text-align:center;"><h3><span>P</span>aket <span>N</span>asi <span>K</span>otak</h3></div>
    </div>
    <div class="data-menu">
      <div id="table-menu-1">
        <table>
          <thead>
            <th colspan="2" style="background:transparent;"><img src="images/menu.jpg" style="width:100%;eight:150px;"></th>
          </thead>
        </table>
        <table class="table table-striped table-menu">
          <thead>
            <th><h3>Menu</h3></th>
            <th><h3>Keterangan</h3></th>
          </thead>
          <tbody>
            <tr>
              <td>Ayam Goreng</td>
              <td>Goreng</td>
            </tr>
            <tr>
              <td>Ati empela atau usus</td>
              <td>Goreng</td>
            </tr>
            <tr>
              <td>Kepala Ayam</td>
              <td>Goreng</td>
            </tr>
            <tr>
              <td>Nasi Goreng</td>
              <td>Goreng</td>
            </tr>
            <tr>
              <td>Nasi Goreng</td>
              <td>Goreng</td>
            </tr>
            <tr>
              <td>Nasi Goreng</td>
              <td>Goreng</td>
            </tr>
            <tr>
              <td>Nasi Goreng</td>
              <td>Goreng</td>
            </tr>
            <tr>
              <td>Nasi Goreng</td>
              <td>Goreng</td>
            </tr>
          </tbody>
          <tfoot>
            <tr>
              <td colspan="2"></td>
            </tr>
          </tfoot>
        </table>
      </div>
      <div><p>Data-minuman</p></div>
      <div><p>Data-prasmanan</p></div>
      <div><p>Data-nasi kotak</p></div>
    </div>
  </div>
</div>
<!-- end service -->

<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!--slick-->
<script src="js/slick.min.js"></script>
<!-- DataTables -->
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap.min.js"></script>

<!--function-->
<script>
$(document).ready(function(){
$('.data-menu').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  asNavFor: '.slid'
});

$('.slid').slick({
  centerMode: true,
  centerPadding: '60px',
  slidesToShow: 3,
  asNavFor: '.data-menu',
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 3
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
});
});

$(document).ready(function(){
$(".table-menu").DataTable({
  language: {
  paginate: {
      previous: '‹',
      next:     '›'
  },
  aria: {
      paginate: {
          previous: 'Previous',
          next:     'Next'
      }
  }
},
  "pageLength": 5,
  "paging": true,
  "lengthChange": false,
  "searching": false,
  "ordering": false,
  "info": false,
  "autoWidth": false
});
});
