<div class="modal fade" id="modalSearchPembelian" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-xl modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Search Penerimaan</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="table-responsive p-2">
                <table class="table align-items-center mb-0 data-pembelian" style="width: 100%">
                    <thead>
                      <tr>
                        <th style="width: 5%;">No</th>
                        <th  style="width: 15%;">No Pembelian</th>
                        <th style="width: 15%;">Supplier</th>
                        <th>Tanggal</th>
                        <th>Total harga</th>
                        <th>Karywan Input</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                  </table>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
<script>
$(function () {
    var table = $('.data-pembelian').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
                url: "/pembelian",
                type: "GET",
                headers: {
                    "X-SRC-Pembelian":"Serach Pembelian xxxx",
                }
            },
        columns: [
            {
                "data": 'DT_RowIndex',
                orderable: false,
                searchable: false
            },
            {
                data: 'no_pembelian',
                name: 'no_pembelian'
            },
            {
                data: 'supplier',
                name: 'supplier.nama'
            },
            {
                data: 'tanggal',
                name: 'tanggal'
            },
            {
                data: 'total_keseluruhan',
                name: 'total_keseluruhan'
            },
            {
                data: 'karyawan',
                name: 'karyawan.nama'
            },
            {
                data: 'action',
                name: 'action',
                orderable: false,
                searchable: false
            },
        ],
        drawCallback: function( settings ) {
            feather.replace();
        }
    });
});

$(function () {

var table = $('.data-detail-penerimaan').DataTable({
    processing: true,
    serverSide: true,
});
});


</script>
